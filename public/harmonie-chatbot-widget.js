// harmonie-chatbot-widget.js
(function () {
        const CONFIG = {
        MODEL: 'gemini-2.5-flash-lite',
        CHAT_ENDPOINT: '/api/chat'
        
        };

        const state = {
        events: [], tasks: [],
        eventCounter: 1, taskCounter: 1,
        isWaitingForResponse: false,
        conversationHistory: [],
        pendingAction: null
    };

    function extractEventTitle(msg) {
        const m = msg.match(/(ajoute|crée?|programme)\s+(?:une?|mon|ma)?\s+([^àáâ\d,!?]*)/i);
        return m ? m[2].trim() || 'Réunion' : 'Événement';
    }
    function extractTaskTitle(msg) {
        const m = msg.match(/(?:tâche|task)[:\s]+([^.!?\n]+)/i);
        return m ? m[1].trim() : 'Nouvelle tâche';
    }
    function extractLocation(msg) {
        const m = msg.match(/(?:salle|bureau|lieu)[:\s]+([^,!?\n]+)/i);
        return m ? m[1].trim() : null;
    }
    function extractPriority(msg) {
        msg = msg.toLowerCase();
        if (msg.includes('urgent') || msg.includes('haute') || msg.includes('important')) return 'haute';
        if (msg.includes('basse') || msg.includes('faible')) return 'basse';
        return 'moyenne';
    }
    function extractDueDate(msg) {
        msg = msg.toLowerCase();
        if (msg.includes('demain')) return new Date(Date.now()+86400000).toISOString().split('T')[0];
        const jours = { lundi:1, mardi:2, mercredi:3, jeudi:4, vendredi:5, samedi:6, dimanche:0 };
        for (const [mot, jour] of Object.entries(jours)) {
            if (msg.includes(mot)) return getNextDayOfWeek(jour).toISOString().split('T')[0];
        }
        return new Date().toISOString().split('T')[0];
    }
    function getNextDayOfWeek(day) {
        const now = new Date();
        const diff = (day - now.getDay() + 7) % 7 || 7;
        return new Date(now.getTime() + diff * 86400000);
    }
    function formatDate(dateStr) {
        return new Date(dateStr + 'T00:00:00').toLocaleDateString('fr-FR', {
            weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
        });
    }

    function normalizeText(text) {
        return text
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\x00-\x1F]/g, '')
            .replace(/[\r\n]/g, ' ')
            .replace(/[\f]/g, ' ')
            .replace(/[\u200B-\u200D\uFEFF]/g, '')
            .replace(/[\u0300-\u036f]/g, '')
            .replace(/\s+/g, ' ')
            .trim();
    }

    function parseFrenchDate(text) {
        const msg = normalizeText(text);
        if (msg.includes('demain')) return new Date(Date.now() + 86400000).toISOString().split('T')[0];
        if (msg.includes("aujourd")) return new Date().toISOString().split('T')[0];
        const months = {
            janvier: 1, fevrier: 2, février: 2, mars: 3, avril: 4, mai: 5, juin: 6,
            juillet: 7, aout: 8, août: 8, septembre: 9, octobre: 10, novembre: 11, decembre: 12, décembre: 12
        };
        const m = msg.match(/(\d{1,2})\s+(janvier|fevrier|février|mars|avril|mai|juin|juillet|aout|août|septembre|octobre|novembre|decembre|décembre)(?:\s+(\d{4}))?/);
        if (!m) return null;
        const day = String(m[1]).padStart(2, '0');
        const month = String(months[m[2]] || months[normalizeText(m[2])]).padStart(2, '0');
        const year = m[3] || String(new Date().getFullYear());
        return `${year}-${month}-${day}`;
    }

    function parseTime(text) {
        const msg = normalizeText(text);
        const colon = msg.match(/\b(\d{1,2})[:h](\d{2})\b/);
        if (colon) {
            const h = Math.min(23, Math.max(0, Number(colon[1])));
            const m = Math.min(59, Math.max(0, Number(colon[2])));
            return `${String(h).padStart(2, '0')}:${String(m).padStart(2, '0')}:00`;
        }
        const m = msg.match(/\b(\d{1,2})\s*h(?:\s*(\d{2}))?\b/);
        if (!m) return null;
        const hours = String(Math.min(23, Math.max(0, Number(m[1])))).padStart(2, '0');
        const minutes = String(Math.min(59, Math.max(0, Number(m[2] || '00')))).padStart(2, '0');
        return `${hours}:${minutes}:00`;
    }

    function toYmd(dateObj) {
        const y = dateObj.getFullYear();
        const m = String(dateObj.getMonth() + 1).padStart(2, '0');
        const d = String(dateObj.getDate()).padStart(2, '0');
        return `${y}-${m}-${d}`;
    }

    function parseNaturalDateScope(text) {
        const msg = normalizeText(text);
        const now = new Date();

        if (msg.includes('demain')) {
            const d = new Date(now.getTime() + 86400000);
            const ymd = toYmd(d);
            return { type: 'single', start: ymd, end: ymd, label: 'demain' };
        }
        if (msg.includes('aujourd')) {
            const ymd = toYmd(now);
            return { type: 'single', start: ymd, end: ymd, label: 'aujourd’hui' };
        }
        if (msg.includes('cette semaine')) {
            const day = now.getDay() || 7;
            const monday = new Date(now);
            monday.setDate(now.getDate() - day + 1);
            const sunday = new Date(monday);
            sunday.setDate(monday.getDate() + 6);
            return { type: 'range', start: toYmd(monday), end: toYmd(sunday), label: 'cette semaine' };
        }
        if (msg.includes('ce weekend') || msg.includes('ce week-end')) {
            const day = now.getDay() || 7;
            const saturday = new Date(now);
            saturday.setDate(now.getDate() + (6 - day));
            const sunday = new Date(saturday);
            sunday.setDate(saturday.getDate() + 1);
            return { type: 'range', start: toYmd(saturday), end: toYmd(sunday), label: 'ce weekend' };
        }
        if (msg.includes('mois prochain')) {
            const first = new Date(now.getFullYear(), now.getMonth() + 1, 1);
            const last = new Date(now.getFullYear(), now.getMonth() + 2, 0);
            return { type: 'range', start: toYmd(first), end: toYmd(last), label: 'le mois prochain' };
        }

        const parsedFrench = parseFrenchDate(msg);
        if (parsedFrench) {
            return { type: 'single', start: parsedFrench, end: parsedFrench, label: parsedFrench };
        }

        const slash = msg.match(/\b(\d{1,2})\/(\d{1,2})(?:\/(\d{4}))?\b/);
        if (slash) {
            const day = String(slash[1]).padStart(2, '0');
            const month = String(slash[2]).padStart(2, '0');
            const year = slash[3] || String(now.getFullYear());
            const ymd = `${year}-${month}-${day}`;
            return { type: 'single', start: ymd, end: ymd, label: `${day}/${month}` };
        }

        const weekdays = { lundi: 1, mardi: 2, mercredi: 3, jeudi: 4, vendredi: 5, samedi: 6, dimanche: 0 };
        for (const [name, d] of Object.entries(weekdays)) {
            if (msg.includes(name)) {
                const dt = getNextDayOfWeek(d);
                const ymd = toYmd(dt);
                return { type: 'single', start: ymd, end: ymd, label: name };
            }
        }

        return null;
    }

    function parseUserIntent(message) {
        const msg = normalizeText(message);
        const dateScope = parseNaturalDateScope(msg);
        const time = parseTime(msg);

        let entity = null;
        if (/(evenement|evenements|reunion|rendez vous|rdv|agenda|calendrier)/.test(msg)) entity = 'event';
        if (/(tache|taches|todo|kanban|projet)/.test(msg)) entity = 'task';

        let action = null;
        if (/(supprime|annule|efface|retire)/.test(msg)) action = 'delete';
        else if (/(deplace|change|modifie|marque|passe|met)/.test(msg)) action = 'update';
        else if (/(ajoute|cree|creer|programme|j ai|j'ai|nouvel|nouvelle)/.test(msg)) action = 'create';
        else if (/(qu est ce que|qu'est ce que|montre|cite|combien|quelles|est ce que|est-ce que|liste)/.test(msg)) action = 'read';

        if (!entity && /todo|urgent|priorite|terminee|terminees/.test(msg)) entity = 'task';
        if (!entity && dateScope) entity = 'event';

        const all = /(tous|toutes|tout)/.test(msg);
        const doneOnly = /(terminee|terminees|done)/.test(msg);
        const priority = msg.includes('haute') || msg.includes('urgent') ? 'haute' : (msg.includes('basse') ? 'basse' : null);

        const taskNameMatch = msg.match(/(?:tache|task)\s+(.+?)(?:\s+comme|\s+a\s+|\s+en\s+|$)/i);
        const eventNameMatch = msg.match(/(?:reunion|rendez vous|rdv|evenement)\s+(?:de\s+)?(.+?)(?:\s+a\s+|\s+du\s+|\s+de\s+|\s+en\s+|$)/i);

        const name = (taskNameMatch && taskNameMatch[1])
            || (eventNameMatch && eventNameMatch[1])
            || (msg.match(/supprime\s+la\s+tache\s+(.+)$/i) || [null, null])[1]
            || (msg.match(/annule\s+la\s+reunion\s+(.+)$/i) || [null, null])[1]
            || null;

        const updateStatus = /(terminee|done|fini|finie)/.test(msg) ? 'TERMINEE'
            : (/(en cours|doing)/.test(msg) ? 'EN_COURS' : null);

        const locationMatch = msg.match(/(?:au|a|en)\s+(salle\s+[^,!.]+|bureau[^,!.]*|[^,!.]*conference[^,!.]*)/i);

        return {
            action,
            entity,
            dateScope,
            time,
            all,
            doneOnly,
            priority,
            name: name ? name.trim() : null,
            updateStatus,
            location: locationMatch ? locationMatch[1].trim() : null,
            raw: msg,
        };
    }

    function findEventsByDate(scope) {
        if (!scope) return [...state.events];
        return state.events.filter(e => {
            const d = (e.startTime || '').substring(0, 10);
            return d >= scope.start && d <= scope.end;
        });
    }

    function findEventsByName(name, scope = null) {
        const base = scope ? findEventsByDate(scope) : state.events;
        if (!name) return base;
        const needle = normalizeText(name);
        return base.filter(e => normalizeText(e.title || '').includes(needle));
    }

    function findTasksByStatus(status) {
        const wanted = status === 'done' ? 'TERMINEE' : (status === 'todo' ? 'A_FAIRE' : 'EN_COURS');
        return state.tasks.filter(t => (t.statut || (t.completed ? 'TERMINEE' : 'A_FAIRE')) === wanted);
    }

    function findTasksByName(name) {
        if (!name) return [...state.tasks];
        const needle = normalizeText(name);
        return state.tasks.filter(t => normalizeText(t.title || '').includes(needle));
    }

    async function deleteEventsByDate(scope) {
        const list = findEventsByDate(scope);
        for (const ev of list) {
            await deleteEventInApi(ev.id);
        }
        return list.length;
    }

    async function updateTaskByName(name, data) {
        const list = findTasksByName(name);
        if (!list.length) throw new Error('Aucune tâche trouvée');
        if (list.length > 1) throw new Error('AMBIGU');
        return updateTaskInApi(list[0].id, data);
    }

    function findTaskByTitle(title) {
        const needle = normalizeText(title);
        return state.tasks.find(t => normalizeText(t.title || '').includes(needle)) || null;
    }

    function findEventByTitleAndDate(title, dateStr) {
        const needle = normalizeText(title);
        let events = state.events.filter(e => normalizeText(e.title || '').includes(needle));
        if (dateStr) events = events.filter(e => e.startTime && e.startTime.substring(0, 10) === dateStr);
        return events[0] || null;
    }

    function isYes(text) {
        const msg = normalizeText(text);
        return ['oui', 'ok', 'daccord', 'd\'accord', 'confirme', 'yes'].some(w => msg === w || msg.includes(w));
    }

    function isNo(text) {
        const msg = normalizeText(text);
        return ['non', 'annule', 'cancel', 'stop'].some(w => msg === w || msg.includes(w));
    }

    function requestConfirmation(action) {
        state.pendingAction = action;
        return `⚠️ Voulez-vous vraiment ${action.label} ? Répondez OUI pour confirmer.`;
    }

    async function handlePendingAction(userMessage) {
        if (!state.pendingAction) return null;

        const pending = state.pendingAction;
        const msg = normalizeText(userMessage);

        if (pending.type === 'confirm_delete_events') {
            if (isNo(msg)) {
                state.pendingAction = null;
                return 'ℹ️ Suppression annulée.';
            }
            if (!isYes(msg)) {
                return 'ℹ️ Répondez par OUI ou NON.';
            }
            state.pendingAction = null;
            let count = 0;
            for (const id of pending.eventIds) {
                await deleteEventInApi(id);
                count += 1;
            }
            document.dispatchEvent(new CustomEvent('harmonie_data_updated'));
            return `✅ ${count} événement(s) supprimé(s) !`;
        }

        if (pending.type === 'confirm_delete_tasks') {
            if (isNo(msg)) {
                state.pendingAction = null;
                return 'ℹ️ Suppression annulée.';
            }
            if (!isYes(msg)) {
                return 'ℹ️ Répondez par OUI ou NON.';
            }
            state.pendingAction = null;
            let count = 0;
            for (const id of pending.taskIds) {
                await deleteTaskInApi(id);
                count += 1;
            }
            document.dispatchEvent(new CustomEvent('harmonie_data_updated'));
            return `✅ ${count} tâche(s) supprimée(s) !`;
        }

        if (pending.type === 'choose_event') {
            const n = Number((msg.match(/\d+/) || [])[0] || NaN);
            if (!Number.isInteger(n) || n < 1 || n > pending.options.length) {
                return `ℹ️ Donnez un numéro entre 1 et ${pending.options.length}.`;
            }
            const selected = pending.options[n - 1];
            state.pendingAction = null;
            await updateEventInApi(selected.id, pending.updateData);
            document.dispatchEvent(new CustomEvent('harmonie_data_updated'));
            return `✅ Événement mis à jour : ${selected.title}.`;
        }

        return null;
    }

    function renderEventList(events) {
        if (!events.length) return 'Aucun événement trouvé.';
        return events.map(e => `- ${e.title} (${(e.startTime || '').substring(0, 16).replace('T', ' ')})`).join('\n');
    }

    function renderTaskList(tasks) {
        if (!tasks.length) return 'Aucune tâche trouvée.';
        return tasks.map(t => `- [${t.statut || (t.completed ? 'DONE' : 'TODO')}] ${t.title}`).join('\n');
    }

    async function handleSmartIntent(userMessage) {
        const intent = parseUserIntent(userMessage);
        if (!intent.action || !intent.entity) return { handled: false };

        await refreshData();

        // ÉVÉNEMENTS
        if (intent.entity === 'event') {
            if (intent.action === 'read') {
                let events = intent.name ? findEventsByName(intent.name, intent.dateScope) : findEventsByDate(intent.dateScope);
                if (/reunion/.test(intent.raw)) {
                    events = events.filter(e => normalizeText(e.title || '').includes('reunion'));
                }
                if (/est ce que|est-ce que/.test(intent.raw)) {
                    if (!events.length) return { handled: true, message: '❌ Non, aucun événement correspondant trouvé.' };
                    return { handled: true, message: `✅ Oui, voici ce que j'ai trouvé :\n${renderEventList(events)}` };
                }
                if (!events.length) {
                    const label = intent.dateScope?.label || 'la période demandée';
                    return { handled: true, message: `ℹ️ Aucun événement trouvé pour ${label}.` };
                }
                return { handled: true, message: `📅 Voici vos événements :\n${renderEventList(events)}` };
            }

            if (intent.action === 'create') {
                const date = intent.dateScope?.start || toYmd(new Date());
                const time = intent.time || '09:00:00';
                const title = intent.name || extractEventTitle(userMessage);
                const startTime = `${date} ${time}`;
                const endHour = String((Number(time.substring(0, 2)) + 1) % 24).padStart(2, '0');
                const endTime = `${date} ${endHour}:${time.substring(3, 5)}:00`;
                await createEventInApi({
                    title,
                    startTime,
                    endTime,
                    location: intent.location || extractLocation(userMessage) || 'Non précisé'
                });
                document.dispatchEvent(new CustomEvent('harmonie_data_updated'));
                return { handled: true, message: `✅ ${title} créé pour ${date} à ${time.substring(0, 5)} !` };
            }

            if (intent.action === 'update') {
                const candidates = intent.name
                    ? findEventsByName(intent.name, intent.dateScope)
                    : findEventsByDate(intent.dateScope);
                if (!candidates.length) {
                    const label = intent.dateScope?.label || 'cette recherche';
                    return { handled: true, message: `ℹ️ Aucun événement trouvé pour ${label}.` };
                }
                const updateData = {};
                if (intent.time) {
                    const date = (candidates[0].startTime || '').substring(0, 10) || (intent.dateScope?.start || toYmd(new Date()));
                    const endHour = String((Number(intent.time.substring(0, 2)) + 1) % 24).padStart(2, '0');
                    updateData.startTime = `${date} ${intent.time}`;
                    updateData.endTime = `${date} ${endHour}:${intent.time.substring(3, 5)}:00`;
                }
                if (intent.location) updateData.location = intent.location;

                if (candidates.length > 1) {
                    state.pendingAction = { type: 'choose_event', options: candidates.slice(0, 5), updateData };
                    const options = candidates.slice(0, 5).map((e, i) => `${i + 1}. ${e.title} (${(e.startTime || '').substring(0, 16).replace('T', ' ')})`).join('\n');
                    return { handled: true, message: `ℹ️ J'ai trouvé ${candidates.length} événements. Lequel voulez-vous modifier ?\n${options}` };
                }

                await updateEventInApi(candidates[0].id, updateData);
                document.dispatchEvent(new CustomEvent('harmonie_data_updated'));
                return { handled: true, message: `✅ Événement mis à jour : ${candidates[0].title}.` };
            }

            if (intent.action === 'delete') {
                const targets = intent.name
                    ? findEventsByName(intent.name, intent.dateScope)
                    : findEventsByDate(intent.dateScope);
                if (!targets.length) {
                    const label = intent.dateScope?.label || 'la période demandée';
                    return { handled: true, message: `ℹ️ Aucun événement trouvé pour ${label}.` };
                }
                if (intent.all || targets.length > 1) {
                    state.pendingAction = { type: 'confirm_delete_events', eventIds: targets.map(e => e.id) };
                    const list = targets.map(e => `- ${e.title} (${(e.startTime || '').substring(11, 16) || '--:--'})`).join('\n');
                    return { handled: true, message: `⚠️ J'ai trouvé ${targets.length} événement(s) :\n${list}\nConfirmer la suppression ? (OUI/NON)` };
                }
                await deleteEventInApi(targets[0].id);
                document.dispatchEvent(new CustomEvent('harmonie_data_updated'));
                return { handled: true, message: `✅ Événement supprimé : ${targets[0].title}.` };
            }
        }

        // TÂCHES
        if (intent.entity === 'task') {
            if (intent.action === 'read') {
                if (/retard/.test(intent.raw)) {
                    const today = toYmd(new Date());
                    const late = state.tasks.filter(t => {
                        const st = t.statut || (t.completed ? 'TERMINEE' : 'A_FAIRE');
                        return st !== 'TERMINEE' && t.dueDate && t.dueDate < today;
                    });
                    if (!late.length) return { handled: true, message: '✅ Vous n\'avez aucune tâche en retard.' };
                    return { handled: true, message: `⚠️ Vous avez ${late.length} tâche(s) en retard :\n${renderTaskList(late)}` };
                }
                if (/urgent|haute/.test(intent.raw)) {
                    const urgent = state.tasks.filter(t => (t.priority || '').toLowerCase() === 'haute');
                    return { handled: true, message: urgent.length ? `🔥 Tâches urgentes :\n${renderTaskList(urgent)}` : 'ℹ️ Aucune tâche urgente.' };
                }
                if (/todo|a faire/.test(intent.raw)) {
                    const todo = findTasksByStatus('todo');
                    return { handled: true, message: todo.length ? `📋 Vos tâches TODO :\n${renderTaskList(todo)}` : 'ℹ️ Aucune tâche TODO.' };
                }
                return { handled: true, message: state.tasks.length ? `📌 Vos tâches :\n${renderTaskList(state.tasks)}` : 'ℹ️ Aucune tâche trouvée.' };
            }

            if (intent.action === 'create') {
                const title = intent.name || extractTaskTitle(userMessage);
                const due = intent.dateScope?.start || extractDueDate(userMessage);
                const created = await createTaskInApi({
                    title,
                    priority: intent.priority || extractPriority(userMessage),
                    dueDate: due,
                    statut: 'A_FAIRE'
                });
                document.dispatchEvent(new CustomEvent('harmonie_data_updated'));
                return { handled: true, message: `✅ Tâche créée : ${created.title} (échéance ${due}).` };
            }

            if (intent.action === 'update') {
                if (!intent.name) return { handled: true, message: 'ℹ️ Donnez le nom de la tâche à modifier.' };
                const list = findTasksByName(intent.name);
                if (!list.length) return { handled: true, message: `ℹ️ Aucune tâche trouvée pour "${intent.name}".` };
                if (list.length > 1) {
                    return { handled: true, message: `ℹ️ J'ai trouvé plusieurs tâches :\n${renderTaskList(list.slice(0, 5))}\nPrécisez le nom exact.` };
                }
                const data = {};
                if (intent.updateStatus) data.statut = intent.updateStatus;
                if (intent.priority) data.priority = intent.priority;
                await updateTaskInApi(list[0].id, data);
                document.dispatchEvent(new CustomEvent('harmonie_data_updated'));
                return { handled: true, message: `✅ Tâche mise à jour : ${list[0].title}.` };
            }

            if (intent.action === 'delete') {
                if (intent.doneOnly || /taches? terminees|tasks? done/.test(intent.raw)) {
                    const done = findTasksByStatus('done');
                    if (!done.length) return { handled: true, message: 'ℹ️ Aucune tâche terminée à supprimer.' };
                    state.pendingAction = { type: 'confirm_delete_tasks', taskIds: done.map(t => t.id) };
                    return { handled: true, message: `⚠️ Supprimer ${done.length} tâche(s) terminée(s) ? (OUI/NON)` };
                }
                const list = findTasksByName(intent.name || '');
                if (!list.length) return { handled: true, message: `ℹ️ Aucune tâche trouvée${intent.name ? ` pour "${intent.name}"` : ''}.` };
                if (list.length > 1) return { handled: true, message: `ℹ️ Plusieurs tâches trouvées. Précisez le nom exact.` };
                await deleteTaskInApi(list[0].id);
                document.dispatchEvent(new CustomEvent('harmonie_data_updated'));
                return { handled: true, message: `✅ Tâche supprimée : ${list[0].title}.` };
            }
        }

        return { handled: false };
    }

    function injectStyles() {
        if (document.getElementById('hcw-style')) return;
        const style = document.createElement('style');
        style.id = 'hcw-style';
        style.textContent = `
        .hcw-fab {
            position: fixed; bottom: 30px; right: 30px; z-index: 99999;
            width: 60px; height: 60px; border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 6px 24px rgba(102,126,234,0.35);
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; animation: hcw-pulse 1.8s infinite;
        }
        .hcw-fab-icon { font-size: 26px; color: #fff; user-select: none; }
        .hcw-fab-badge {
            position: absolute; top: 7px; right: 7px;
            background: #ef4444; color: #fff; font-size: 11px; font-weight: bold;
            border-radius: 8px; padding: 1px 7px;
        }
        @keyframes hcw-pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.08); }
        }
        .hcw-chatbox {
            position: fixed; bottom: 100px; right: 30px; z-index: 99999;
            width: 380px; max-width: 98vw; height: 520px;
            background: #fff; border-radius: 20px;
            box-shadow: 0 10px 40px rgba(102,126,234,0.2);
            display: flex; flex-direction: column; overflow: hidden;
            opacity: 0; pointer-events: none;
            transform: translateY(40px); transition: opacity 0.25s, transform 0.35s;
        }
        .hcw-chatbox.hcw-open { opacity: 1; pointer-events: auto; transform: translateY(0); }
        .hcw-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff; padding: 16px 20px;
            display: flex; align-items: center; justify-content: space-between;
        }
        .hcw-header-title { font-size: 17px; font-weight: 600; display: flex; align-items: center; gap: 8px; }
        .hcw-header-sub { font-size: 11px; opacity: 0.85; margin-top: 2px; }
        .hcw-header-close {
            background: none; border: none; color: #fff;
            font-size: 20px; cursor: pointer; opacity: 0.85;
        }
        .hcw-header-close:hover { opacity: 1; }
        .hcw-messages {
            flex: 1; overflow-y: auto; padding: 16px;
            display: flex; flex-direction: column; gap: 12px;
            background: linear-gradient(180deg, #f8f9fb 0%, #f0f1f7 100%);
        }
        .hcw-message { display: flex; animation: hcw-slideIn 0.3s ease; }
        @keyframes hcw-slideIn {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .hcw-user { justify-content: flex-end; }
        .hcw-message-content {
            max-width: 85%; padding: 11px 15px; border-radius: 12px;
            word-wrap: break-word; font-size: 14px; line-height: 1.5;
        }
        .hcw-user .hcw-message-content {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff; border-radius: 18px 18px 4px 18px;
        }
        .hcw-bot .hcw-message-content {
            background: #e8e9f3; color: #333; border-radius: 18px 18px 18px 4px;
        }
        .hcw-message-card {
            background: #fff; border-left: 4px solid #667eea; padding: 10px;
            border-radius: 8px; margin: 5px 0; font-size: 13px;
        }
        .hcw-message-card strong { color: #667eea; }
        .hcw-message-card.event { border-left-color: #10b981; }
        .hcw-message-card.task  { border-left-color: #f59e0b; }
        .hcw-message-card.error { border-left-color: #ef4444; background: #fef2f2; }
        .hcw-message-card.hcw-card-success { border-left-color: #10b981; background: #d1fae5; color: #065f46; padding: 10px; border-radius: 6px; margin: 8px 0; }
        .hcw-message-card.hcw-card-error { border-left-color: #ef4444; background: #fee2e2; color: #991b1b; padding: 10px; border-radius: 6px; margin: 8px 0; }
        .hcw-message-card.hcw-card-info { border-left-color: #3b82f6; background: #dbeafe; color: #1e40af; padding: 10px; border-radius: 6px; margin: 8px 0; }
        .hcw-badge { display: inline-block; padding: 2px 8px; border-radius: 12px; font-size: 11px; font-weight: bold; color: white; margin-right: 5px; }
        .hcw-badge-todo { background: #6b7280; }
        .hcw-badge-doing { background: #3b82f6; }
        .hcw-badge-done { background: #10b981; }
        .hcw-event-item { border: 1px solid #e5e7eb; border-radius: 8px; padding: 10px; margin-bottom: 8px; background: #fafafa; }
        .hcw-bot .hcw-message-content p { margin: 0 0 8px 0; }
        .hcw-bot .hcw-message-content p:last-child { margin-bottom: 0; }
        .hcw-bot .hcw-message-content ul { padding-left: 20px; margin: 5px 0 10px 0; }
        .hcw-bot .hcw-message-content li { margin-bottom: 4px; }
        .hcw-typing-indicator { display: flex; gap: 4px; padding: 10px 14px; }
        .hcw-typing-dot {
            width: 8px; height: 8px; background: #667eea; border-radius: 50%;
            animation: hcw-bounce 1.4s infinite;
        }
        .hcw-typing-dot:nth-child(2) { animation-delay: 0.2s; }
        .hcw-typing-dot:nth-child(3) { animation-delay: 0.4s; }
        @keyframes hcw-bounce {
            0%,60%,100% { opacity: 0.3; transform: translateY(0); }
            30%          { opacity: 1; transform: translateY(-10px); }
        }
        .hcw-input-area {
            display: flex; gap: 10px; padding: 12px 14px;
            background: #fff; border-top: 1px solid #e0e0e0;
        }
        .hcw-input-area input {
            flex: 1; padding: 10px 14px; border: 1px solid #ddd;
            border-radius: 25px; font-size: 14px; outline: none;
            transition: border-color 0.3s;
        }
        .hcw-input-area input:focus { border-color: #667eea; }
        .hcw-input-area button {
            width: 42px; height: 42px; border: none;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff; border-radius: 50%; cursor: pointer; font-size: 18px;
            display: flex; align-items: center; justify-content: center;
            transition: transform 0.2s;
        }
        .hcw-input-area button:hover  { transform: scale(1.05); }
        .hcw-input-area button:active { transform: scale(0.95); }
        .hcw-input-area button:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }
        .hcw-welcome h2 { color: #667eea; font-size: 16px; margin-bottom: 8px; text-align: center; }
        .hcw-welcome p  { font-size: 13px; color: #666; text-align: center; line-height: 1.5; }
        .hcw-commands {
            margin-top: 10px; font-size: 12px; background: #fff; padding: 10px;
            border-radius: 8px; border-left: 3px solid #667eea;
        }
        .hcw-commands strong { display: block; color: #667eea; margin-bottom: 5px; }
        .hcw-cmd { color: #666; margin: 3px 0; padding-left: 8px; }
        @media (max-width: 600px) {
            .hcw-chatbox { width: 100vw !important; right: 0 !important; border-radius: 0; bottom: 80px; }
            .hcw-fab { right: 15px; bottom: 15px; }
        }
        `;
        document.head.appendChild(style);
    }

    function createWidgetDOM() {
        const fab = document.createElement('div');
        fab.className = 'hcw-fab';
        fab.innerHTML = `<span class="hcw-fab-icon">💬</span><span class="hcw-fab-badge">IA</span>`;

        const chatbox = document.createElement('div');
        chatbox.className = 'hcw-chatbox';
        chatbox.innerHTML = `
            <div class="hcw-header">
                <div>
                    <div class="hcw-header-title">🎯 Harmonie Assistant</div>
                    <div class="hcw-header-sub">✨ Powered by Google Gemini</div>
                </div>
                <button class="hcw-header-close">✕</button>
            </div>
            <div class="hcw-messages" id="hcw-messages"></div>
            <form class="hcw-input-area" autocomplete="off">
                <input type="text" class="hcw-input" placeholder="Écrivez votre demande..." autocomplete="off"/>
                <button type="submit" class="hcw-send-btn">➤</button>
            </form>
        `;
        document.body.appendChild(fab);
        document.body.appendChild(chatbox);
        return { fab, chatbox };
    }

    function detectPageContext() {
        const url = window.location.href.toLowerCase();
        if (url.includes('evenement') || url.includes('event') || url.includes('calendrier')) return 'evenements';
        if (url.includes('tache') || url.includes('task')) return 'taches';
        if (document.querySelector('[data-harmonie-context="evenements"]')) return 'evenements';
        if (document.querySelector('[data-harmonie-context="taches"]')) return 'taches';
        return 'general';
    }

    function getWelcomeHTML(context) {
        let title, desc;
        if (context === 'evenements') {
            title = 'Bonjour ! je suis à votre disposition 📅';
            desc  = 'Planifiez tarnquilement!';
        } else if (context === 'taches') {
            title = 'Bonjour ! Je gère vos tâches ✅';
            desc  = 'Organisez, priorisez et complétez vos tâches facilement.';
        } else {
            title = 'Bienvenue dans Harmonie Assistant ! 👋';
            desc  = 'Je gère vos événements et vos tâches.';
        }
        return `<div class="hcw-welcome">
            <h2>${title}</h2><p>${desc}</p>
            <div class="hcw-commands">
                <strong>📅 Événements :</strong>
                <div class="hcw-cmd">• Ajoute une réunion demain à 10h</div>
                <div class="hcw-cmd">• Qu'est-ce que j'ai prévu ?</div>
                <div class="hcw-cmd">• Annule mon rendez-vous</div>
                <strong style="margin-top:8px;">✅ Tâches :</strong>
                <div class="hcw-cmd">• Ajoute une tâche : préparer le rapport</div>
                <div class="hcw-cmd">• Quelles sont mes tâches urgentes ?</div>
                <div class="hcw-cmd">• Marque la tâche comme terminée</div>
            </div>
        </div>`;
    }

    function addMessage(text, sender = 'bot', isHTML = false) {
        const messages = document.getElementById('hcw-messages');
        const div = document.createElement('div');
        div.className = `hcw-message hcw-${sender}`;
        const content = document.createElement('div');
        content.className = 'hcw-message-content';

        if (sender === 'bot' && window.marked && !isHTML) {
            let html = window.marked.parse(text);

            html = html.replace(/(?:<code>)?\[TODO\](?:<\/code>)?/gi, '<span class="hcw-badge hcw-badge-todo">TODO</span>');
            html = html.replace(/(?:<code>)?\[DOING\](?:<\/code>)?/gi, '<span class="hcw-badge hcw-badge-doing">DOING</span>');
            html = html.replace(/(?:<code>)?\[EN_COURS\](?:<\/code>)?/gi, '<span class="hcw-badge hcw-badge-doing">EN_COURS</span>');
            html = html.replace(/(?:<code>)?\[DONE\](?:<\/code>)?/gi, '<span class="hcw-badge hcw-badge-done">DONE</span>');
            html = html.replace(/(?:<code>)?\[TERMINEE\](?:<\/code>)?/gi, '<span class="hcw-badge hcw-badge-done">TERMINE</span>');

            html = html.replace(/<p>(✅.*?)<\/p>/gs, '<div class="hcw-message-card hcw-card-success">$1</div>');
            html = html.replace(/<p>(❌.*?)<\/p>/gs, '<div class="hcw-message-card hcw-card-error">$1</div>');
            html = html.replace(/<p>(ℹ️.*?)<\/p>/gs, '<div class="hcw-message-card hcw-card-info">$1</div>');

            content.innerHTML = html;
        } else if (isHTML) {
            content.innerHTML = text;
        } else {
            content.textContent = text;
        }

        div.appendChild(content);
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;
    }

    function showTypingIndicator() {
        const messages = document.getElementById('hcw-messages');
        const div = document.createElement('div');
        div.className = 'hcw-message hcw-bot';
        div.id = 'hcw-typing-indicator';
        div.innerHTML = `<div class="hcw-typing-indicator">
            <div class="hcw-typing-dot"></div>
            <div class="hcw-typing-dot"></div>
            <div class="hcw-typing-dot"></div>
        </div>`;
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;
    }

    function removeTypingIndicator() {
        const el = document.getElementById('hcw-typing-indicator');
        if (el) el.remove();
    }

    // ✅ CHARGEMENT DES DONNÉES DU BACKEND
    async function loadTasksFromApi() {
        try {
            const res = await fetch('/api/tasks', { headers: { 'Accept': 'application/json' } });
            if (!res.ok) throw new Error('Erreur API tâches');
            state.tasks = await res.json();
        } catch (e) {
            console.error('Erreur chargement tâches:', e);
        }
    }
    async function loadEventsFromApi() {
        try {
            const res = await fetch('/api/events', { headers: { 'Accept': 'application/json' } });
            if (!res.ok) throw new Error('Erreur API événements');
            state.events = await res.json();
        } catch (e) {
            console.error('Erreur chargement événements:', e);
        }
    }

    // ✅ OPÉRATIONS CRUD SUR TÂCHES
    async function createTaskInApi(taskData) {
        try {
            const res = await fetch('/api/tasks', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(taskData)
            });
            if (!res.ok) throw new Error('Erreur création');
            const newTask = await res.json();
            state.tasks.push(newTask);
            return newTask;
        } catch (e) {
            throw new Error('❌ Impossible de créer la tâche: ' + e.message);
        }
    }
    async function updateTaskInApi(id, taskData) {
        try {
            const res = await fetch(`/api/tasks/${id}`, {
                method: 'PUT',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(taskData)
            });
            if (!res.ok) throw new Error('Erreur mise à jour');
            const updated = await res.json();
            const idx = state.tasks.findIndex(t => t.id === id);
            if (idx >= 0) state.tasks[idx] = updated;
            return updated;
        } catch (e) {
            throw new Error('❌ Impossible de modifier la tâche: ' + e.message);
        }
    }
    async function deleteTaskInApi(id) {
        try {
            const res = await fetch(`/api/tasks/${id}`, { method: 'DELETE' });
            if (!res.ok) throw new Error('Erreur suppression');
            state.tasks = state.tasks.filter(t => t.id !== id);
        } catch (e) {
            throw new Error('❌ Impossible de supprimer la tâche: ' + e.message);
        }
    }

    // ✅ OPÉRATIONS CRUD SUR ÉVÉNEMENTS
    async function createEventInApi(eventData) {
        try {
            const res = await fetch('/api/events', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(eventData)
            });
            if (!res.ok) throw new Error('Erreur création');
            const newEvent = await res.json();
            state.events.push(newEvent);
            return newEvent;
        } catch (e) {
            throw new Error('❌ Impossible de créer l\'événement: ' + e.message);
        }
    }
    async function updateEventInApi(id, eventData) {
        try {
            const res = await fetch(`/api/events/${id}`, {
                method: 'PUT',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(eventData)
            });
            if (!res.ok) throw new Error('Erreur mise à jour');
            const updated = await res.json();
            const idx = state.events.findIndex(e => e.id === id);
            if (idx >= 0) state.events[idx] = updated;
            return updated;
        } catch (e) {
            throw new Error('❌ Impossible de modifier l\'événement: ' + e.message);
        }
    }
    async function deleteEventInApi(id) {
        try {
            const res = await fetch(`/api/events/${id}`, { method: 'DELETE' });
            if (!res.ok) throw new Error('Erreur suppression');
            state.events = state.events.filter(e => e.id !== id);
        } catch (e) {
            throw new Error('❌ Impossible de supprimer l\'événement: ' + e.message);
        }
    }

    async function loadAllData() {
        await Promise.all([
            loadTasksFromApi(),
            loadEventsFromApi()
        ]);
    }

    async function refreshData() {
        try {
            await loadAllData();
        } catch (e) {
            console.error('Erreur refresh données:', e);
        }
    }

    function formatTasksForPrompt() {
        if (!state.tasks.length) return 'Aucune tâche.';
        return state.tasks.map(t => {
            const statut = t.statut || (t.completed ? 'TERMINEE' : 'A_FAIRE');
            const priority = t.priority || 'moyenne';
            const due = t.dueDate || 'N/A';
            const notes = t.notes ? ` — ${t.notes}` : '';
            return `- ${t.title} | statut: ${statut} | priorité: ${priority} | date: ${due}${notes}`;
        }).join('\n');
    }

    function formatEventsForPrompt() {
        if (!state.events.length) return 'Aucun événement.';
        return state.events.map(e => {
            const start = e.startTime || 'N/A';
            const end = e.endTime || 'N/A';
            const lieu = e.location || 'N/A';
            return `- ${e.title} | ${start} → ${end} | lieu: ${lieu}`;
        }).join('\n');
    }

    function extractJsonFromText(text) {
        if (!text || typeof text !== 'string') return null;
        try { return JSON.parse(text); } catch (_) {}

        const fenced = text.match(/```json\s*([\s\S]*?)```/i);
        if (fenced && fenced[1]) {
            try { return JSON.parse(fenced[1]); } catch (_) {}
        }

        const raw = text.match(/\{[\s\S]*\}/);
        if (raw && raw[0]) {
            try { return JSON.parse(raw[0]); } catch (_) {}
        }
        return null;
    }

    async function executeAiAction(action, args) {
        if (!action) return { changed: false, result: null };

        if (action === 'create_task') return { changed: true, result: await createTaskInApi(args || {}) };
        if (action === 'update_task_status') return { changed: true, result: await updateTaskInApi(args.id, args || {}) };
        if (action === 'delete_task') {
            await deleteTaskInApi(args.id);
            return { changed: true, result: { status: 'deleted', id: args.id } };
        }
        if (action === 'create_event') return { changed: true, result: await createEventInApi(args || {}) };
        if (action === 'update_event') return { changed: true, result: await updateEventInApi(args.id, args || {}) };
        if (action === 'delete_event') {
            await deleteEventInApi(args.id);
            return { changed: true, result: { status: 'deleted', id: args.id } };
        }
        return { changed: false, result: null };
    }

    // ✅ APPEL API GEMINI
    async function callGeminiAPI(userMessage = null) {
        if (userMessage) {
            state.conversationHistory.push({ role: 'user', parts: [{ text: userMessage }] });
        }

        const res = await fetch(CONFIG.CHAT_ENDPOINT, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                model: CONFIG.MODEL,
                userMessage: userMessage || '',
                history: state.conversationHistory
            })
        });

        if (!res.ok) {
            if (res.status === 429) {
                return { success: false, error: 'Limite de requêtes atteinte, réessayez dans quelques secondes.' };
            }
            const err = await res.json().catch(() => ({}));
            return { success: false, error: err.error?.message || err.error || 'Erreur API Gemini' };
        }

        const data = await res.json();
        const replyText = data?.message || 'Aucune réponse Gemini.';

        if (data?.dataChanged) {
            await refreshData();
            document.dispatchEvent(new CustomEvent('harmonie_data_updated'));
        }

        state.conversationHistory.push({ role: 'model', parts: [{ text: replyText }] });
        if (state.conversationHistory.length > 30) state.conversationHistory = state.conversationHistory.slice(-30);

        return { success: true, message: replyText };
    }

    async function processUserMessage(userMessage, input, sendBtn) {
        try {
            const pendingReply = await handlePendingAction(userMessage);
            if (pendingReply) {
                removeTypingIndicator();
                addMessage(pendingReply, 'bot', false);
                return;
            }

            const smart = await handleSmartIntent(userMessage);
            if (smart.handled) {
                removeTypingIndicator();
                addMessage(smart.message, 'bot', false);
                return;
            }

            await refreshData();
            const response = await callGeminiAPI(userMessage);
            removeTypingIndicator();
            if (response.success) {
                addMessage(response.message, 'bot', false); // Pass isHTML=false so marked parses it
            } else {
                addMessage(`<div class="hcw-message-card error">❌ <strong>Erreur:</strong> ${response.error}</div>`, 'bot', true);
            }
        } catch (err) {
            removeTypingIndicator();
            addMessage('<div class="hcw-message-card error">❌ Erreur de connexion. Vérifiez votre réseau.</div>', 'bot', true);
            console.error(err);
        } finally {
            state.isWaitingForResponse = false;
            sendBtn.disabled = false;
            input.focus();
        }
    }

    function sendMessage(input, sendBtn) {
        const message = input.value.trim();
        if (!message || state.isWaitingForResponse) return;
        addMessage(message, 'user');
        input.value = '';
        sendBtn.disabled = true;
        showTypingIndicator();
        state.isWaitingForResponse = true;
        processUserMessage(message, input, sendBtn);
    }

    function init() {
        injectStyles();
        const script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/marked/marked.min.js';
        document.head.appendChild(script);

        const { fab, chatbox } = createWidgetDOM();
        const input    = chatbox.querySelector('.hcw-input');
        const sendBtn  = chatbox.querySelector('.hcw-send-btn');
        const closeBtn = chatbox.querySelector('.hcw-header-close');

        // Charger les données depuis les APIs AVANT d'afficher le message de bienvenue
        loadAllData().then(() => {
            // Une fois les données chargées, afficher le message de bienvenue
            addMessage(getWelcomeHTML(detectPageContext()), 'bot', true);
        }).catch(e => {
            console.error('Erreur initialisation données:', e);
            // Afficher le message même en cas d'erreur
            addMessage(getWelcomeHTML(detectPageContext()), 'bot', true);
        });

        let isOpen = false;
        const openChat  = () => { chatbox.classList.add('hcw-open');    isOpen = true;  setTimeout(() => input.focus(), 200); };
        const closeChat = () => { chatbox.classList.remove('hcw-open'); isOpen = false; };

        fab.addEventListener('click', () => isOpen ? closeChat() : openChat());
        closeBtn.addEventListener('click', closeChat);
        chatbox.querySelector('form').addEventListener('submit', e => {
            e.preventDefault();
            sendMessage(input, sendBtn);
        });
    }

    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
    else init();
})();
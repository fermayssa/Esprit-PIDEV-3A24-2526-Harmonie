// harmonie-chatbot-widget.js
(function () {
    // ✅ CONFIGURATION GROQ
    const CONFIG = {
    API_KEY: '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',
    MODEL:   'llama-3.1-8b-instant',
    API_URL: 'https://api.groq.com/openai/v1/chat/completions'
};

    const state = {
        events: [], tasks: [],
        eventCounter: 1, taskCounter: 1,
        isWaitingForResponse: false,
        conversationHistory: []
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
                    <div class="hcw-header-sub">⚡ Powered by Groq AI (Llama 3)</div>
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
            title = 'Bonjour ! Je gère vos événements 📅';
            desc  = 'Créez, modifiez ou supprimez des événements facilement.';
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
        if (isHTML) content.innerHTML = text;
        else        content.textContent = text;
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
            const due = t.dueDate || 'N/A';
            const notes = t.notes ? ` — ${t.notes}` : '';
            return `- ${t.title} | statut: ${statut} | date: ${due}${notes}`;
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

    // ✅ APPEL API GROQ (format OpenAI compatible)
    async function callGroqAPI(userMessage) {
        const now = new Date();
        const nowIso = now.toISOString();
        const nowFr = now.toLocaleString('fr-FR');
        const systemPrompt = `Tu es Harmonie Assistant, un assistant personnel bienveillant intégré dans l'application Harmonie.
RÈGLES:
- Réponds TOUJOURS en français
- Gère UNIQUEMENT: Événements et Tâches
- Si info manquante, pose UNE seule question
- Confirme avant toute suppression
- Ne jamais inventer de données
- Pour hors sujet, rappelle poliment ton rôle

    DATE/HEURE ACTUELLES:
    - ISO: ${nowIso}
    - Locale: ${nowFr}

    DONNÉES UTILISATEUR:
    Tâches:
    ${formatTasksForPrompt()}

    Événements:
    ${formatEventsForPrompt()}

Réponds de façon claire, concise et bienveillante avec des emojis appropriés.`;

        // Format OpenAI compatible pour Groq
        const messages = [
            { role: 'system', content: systemPrompt },
            ...state.conversationHistory,
            { role: 'user', content: userMessage }
        ];

        const res = await fetch(CONFIG.API_URL, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${CONFIG.API_KEY}`
            },
            body: JSON.stringify({
                model: CONFIG.MODEL,
                messages: messages,
                temperature: 0.7,
                max_tokens: 1024
            })
        });

        if (!res.ok) {
            const err = await res.json();
            return { success: false, error: err.error?.message || 'Erreur API Groq' };
        }

        const data = await res.json();
        const replyText = data.choices?.[0]?.message?.content || 'Aucune réponse.';

        // Sauvegarder dans l'historique (format OpenAI)
        state.conversationHistory.push({ role: 'user',      content: userMessage });
        state.conversationHistory.push({ role: 'assistant', content: replyText   });

        if (state.conversationHistory.length > 20) {
            state.conversationHistory = state.conversationHistory.slice(-20);
        }

        return { success: true, message: replyText };
    }

    function handleLocalCommands(userMessage) {
        const msg = userMessage.toLowerCase();
        if (msg.includes('ajoute') && (msg.includes('événement') || msg.includes('réunion') || msg.includes('rendez-vous'))) return handleAddEvent(userMessage);
        if ((msg.includes('affiche') || msg.includes('montre') || msg.includes("qu'est")) && (msg.includes('prévu') || msg.includes('événement'))) return handleShowEvents(msg);
        if ((msg.includes('supprim') || msg.includes('annule')) && (msg.includes('événement') || msg.includes('réunion'))) return handleDeleteEvent(msg);
        if (msg.includes('demain') && (msg.includes('événement') || msg.includes('réunion') || msg.includes('rendez-vous'))) return handleShowEvents(msg);
        if (msg.includes('demain') && (msg.includes('annule') || msg.includes('supprim'))) return handleDeleteEvent(msg);
        if (msg.includes('demain') && (msg.includes('ai') || msg.includes('j\'ai') || msg.includes('qu\'est') || msg.includes('quoi'))) return handleShowEvents(msg);
        if (msg.includes('ajoute') && (msg.includes('tâche') || msg.includes('task'))) return handleAddTask(userMessage);
        if ((msg.includes('affiche') || msg.includes('montre') || msg.includes('liste')) && (msg.includes('tâche') || msg.includes('urgent') || msg.includes('retard'))) return handleShowTasks(msg);
        if (msg.includes('marque') && msg.includes('terminée')) return handleCompleteTask();
        if ((msg.includes('supprim') || msg.includes('efface')) && msg.includes('tâche')) return handleDeleteTask();
        if (msg === 'aide' || msg === 'help') return getHelpMessage();
        return null;
    }

    function handleAddEvent(message) {
        const timeMatch = message.match(/(\d{1,2})[h:](\d{0,2})?/i);
        const hours = timeMatch ? parseInt(timeMatch[1]) : 10;
        const minutes = timeMatch && timeMatch[2] ? parseInt(timeMatch[2]) : 0;
        const tomorrow = new Date(Date.now()+86400000);
        const date = tomorrow.toISOString().split('T')[0];
        const startTime = `${date}T${String(hours).padStart(2,'0')}:${String(minutes).padStart(2,'0')}:00`;
        const endTime = `${date}T${String(hours+1).padStart(2,'0')}:${String(minutes).padStart(2,'0')}:00`;
        const eventData = {
            title: extractEventTitle(message),
            description: null,
            startTime: startTime,
            endTime: endTime,
            location: extractLocation(message) || 'À définir',
            eventType: 'autre',
            priority: 1
        };
        createEventInApi(eventData).then(event => {
            addMessage(`✅ <strong>Événement créé!</strong><div class="hcw-message-card event"><strong>📅 ${event.title}</strong><br>🕐 ${event.startTime}<br>📍 ${event.location}</div>`, 'bot', true);
        }).catch(err => {
            addMessage(`<div class="hcw-message-card error">❌ <strong>Erreur:</strong> ${err.message}</div>`, 'bot', true);
        });
        return null;
    }

    function handleShowEvents(msg) {
        if (!state.events.length) return '📭 Aucun événement programmé.';

        let events = state.events.slice();
        const today = new Date().toISOString().split('T')[0];
        const tomorrow = new Date(Date.now() + 86400000).toISOString().split('T')[0];

        if (msg && msg.includes('demain')) {
            events = events.filter(e => e.startTime && e.startTime.substring(0, 10) === tomorrow);
        } else if (msg && msg.includes('aujourd')) {
            events = events.filter(e => e.startTime && e.startTime.substring(0, 10) === today);
        } else {
            events.sort((a, b) => new Date(a.startTime) - new Date(b.startTime));
        }

        if (!events.length) {
            if (msg && msg.includes('demain')) return '📭 Aucun événement pour demain.';
            if (msg && msg.includes('aujourd')) return '📭 Aucun événement pour aujourd\'hui.';
            return '📭 Aucun événement programmé.';
        }

        let html = '📅 <strong>Vos événements:</strong><br>';
        events.slice(0, 10).forEach(e => {
            const startStr = e.startTime ? e.startTime.substring(0, 16) : 'N/A';
            html += `<div class="hcw-message-card event"><strong>${e.title}</strong><br>🕐 ${startStr}<br>📍 ${e.location || 'N/A'}</div>`;
        });
        if (events.length > 10) html += `<div class="hcw-message-card"><em>... et ${events.length - 10} autres</em></div>`;
        return html;
    }

    function handleDeleteEvent(msg) {
        if (!state.events.length) return '📭 Aucun événement à supprimer.';

        let events = state.events.slice();
        const tomorrow = new Date(Date.now() + 86400000).toISOString().split('T')[0];

        if (msg && msg.includes('demain')) {
            events = events.filter(e => e.startTime && e.startTime.substring(0, 10) === tomorrow);
        }

        if (!events.length) {
            if (msg && msg.includes('demain')) return '📭 Aucun événement pour demain à supprimer.';
            return '📭 Aucun événement à supprimer.';
        }

        const eventToDelete = events[0];
        if (!eventToDelete.id) return '❌ Impossible de supprimer (ID manquant)';
        deleteEventInApi(eventToDelete.id).then(() => {
            addMessage(`✅ <strong>Événement supprimé!</strong><div class="hcw-message-card event"><strong>❌ ${eventToDelete.title}</strong></div>`, 'bot', true);
        }).catch(err => {
            addMessage(`<div class="hcw-message-card error">❌ ${err.message}</div>`, 'bot', true);
        });
        return null;
    }

    function handleAddTask(message) {
        const taskData = {
            title: extractTaskTitle(message),
            dueDate: extractDueDate(message),
            notes: null,
            completed: false
        };
        createTaskInApi(taskData).then(task => {
            addMessage(`✅ <strong>Tâche créée!</strong><div class="hcw-message-card task"><strong>${task.title}</strong><br>📅 ${task.dueDate}</div>`, 'bot', true);
        }).catch(err => {
            addMessage(`<div class="hcw-message-card error">❌ <strong>Erreur:</strong> ${err.message}</div>`, 'bot', true);
        });
        return null;
    }

    function handleShowTasks(msg) {
        let tasks = state.tasks;
        if (msg.includes('terminée'))    tasks = tasks.filter(t => t.completed);
        else if (msg.includes('retard')) tasks = tasks.filter(t => !t.completed && new Date(t.dueDate) < new Date());
        else                             tasks = tasks.filter(t => !t.completed);
        if (!tasks.length) return '✨ Aucune tâche dans cette catégorie!';
        let html = '✅ <strong>Vos tâches:</strong><br>';
        tasks.forEach(t => {
            html += `<div class="hcw-message-card task"><strong>${t.title}</strong><br>📅 ${t.dueDate}</div>`;
        });
        return html;
    }

    function handleCompleteTask() {
        const task = state.tasks.find(t => !t.completed);
        if (!task) return '✨ Toutes les tâches sont terminées!';
        if (!task.id) return '❌ Impossible de marquer (ID manquant)';
        updateTaskInApi(task.id, { completed: true }).then(updated => {
            addMessage(`🎉 <strong>Bravo!</strong><div class="hcw-message-card task"><strong>✅ ${updated.title}</strong><br>Marquée comme terminée!</div>`, 'bot', true);
        }).catch(err => {
            addMessage(`<div class="hcw-message-card error">❌ ${err.message}</div>`, 'bot', true);
        });
        return null;
    }

    function handleDeleteTask() {
        if (!state.tasks.length) return '📭 Aucune tâche à supprimer.';
        const last = state.tasks[state.tasks.length - 1];
        if (!last.id) return '❌ Impossible de supprimer (ID manquant)';
        deleteTaskInApi(last.id).then(() => {
            addMessage(`✅ <strong>Tâche supprimée!</strong><div class="hcw-message-card task"><strong>❌ ${last.title}</strong></div>`, 'bot', true);
        }).catch(err => {
            addMessage(`<div class="hcw-message-card error">❌ ${err.message}</div>`, 'bot', true);
        });
        return null;
    }

    function getHelpMessage() {
        return `<strong>📚 Aide Harmonie Assistant</strong><div class="hcw-message-card"><strong>📅 Événements:</strong><br>• Ajoute une réunion demain à 10h<br>• Qu'est-ce que j'ai prévu?<br>• Annule mon rendez-vous<br><br><strong>✅ Tâches:</strong><br>• Ajoute une tâche: rapport<br>• Tâches urgentes?<br>• Marque la tâche comme terminée</div>`;
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

    async function processUserMessage(userMessage, input, sendBtn) {
        try {
            await refreshData();
            const local = handleLocalCommands(userMessage);
            if (local) {
                removeTypingIndicator();
                addMessage(local, 'bot', true);
            } else {
                const response = await callGroqAPI(userMessage);
                removeTypingIndicator();
                if (response.success) addMessage(response.message, 'bot', true);
                else addMessage(`<div class="hcw-message-card error">❌ <strong>Erreur:</strong> ${response.error}</div>`, 'bot', true);
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

    function init() {
        injectStyles();
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
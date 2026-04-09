// harmonie-chatbot-widget.js
(function () {
    // --- CONFIGURATION GEMINI ---
    const CONFIG = {
        API_KEY: 'AIzaSyDRfeHdCUnKk8wwf3gAGJChWlSj9ObRSR8',
        MODEL:   'gemini-1.5-flash',
        API_URL: 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent'
    };

    // --- STATE ---
    const state = {
        events: [],
        tasks: [],
        eventCounter: 1,
        taskCounter: 1,
        isWaitingForResponse: false,
        conversationHistory: []
    };

    // --- UTILS (copiés de la version HTML) ---
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
        const now  = new Date();
        const diff = (day - now.getDay() + 7) % 7 || 7;
        return new Date(now.getTime() + diff * 86400000);
    }
    function formatDate(dateStr) {
        return new Date(dateStr + 'T00:00:00').toLocaleDateString('fr-FR', {
            weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
        });
    }

    // --- DOM INJECTION ---
    function injectStyles() {
        if (document.getElementById('hcw-style')) return;
        const style = document.createElement('style');
        style.id = 'hcw-style';
        style.textContent = `
        .hcw-fab {
            position: fixed; bottom: 30px; right: 30px; z-index: 99999;
            width: 60px; height: 60px; border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 6px 24px rgba(102,126,234,0.25), 0 1.5px 6px rgba(0,0,0,0.12);
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; transition: box-shadow 0.2s;
            animation: hcw-pulse 1.8s infinite;
        }
        .hcw-fab:hover { box-shadow: 0 8px 32px rgba(102,126,234,0.35), 0 2px 8px rgba(0,0,0,0.16); }
        .hcw-fab-icon {
            font-size: 26px; color: #fff; user-select: none;
        }
        .hcw-fab-badge {
            position: absolute; top: 7px; right: 7px;
            background: #ef4444; color: #fff; font-size: 11px; font-weight: bold;
            border-radius: 8px; padding: 1px 7px; box-shadow: 0 1px 4px rgba(0,0,0,0.15);
            pointer-events: none;
        }
        @keyframes hcw-pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.08); }
        }
        .hcw-chatbox {
            position: fixed; bottom: 100px; right: 30px; z-index: 99999;
            width: 380px; max-width: 98vw; height: 520px;
            background: #fff; border-radius: 20px;
            box-shadow: 0 10px 40px rgba(102,126,234,0.18), 0 2px 8px rgba(0,0,0,0.10);
            display: flex; flex-direction: column;
            overflow: hidden; opacity: 0; pointer-events: none;
            transform: translateY(40px); transition: opacity 0.25s, transform 0.35s;
        }
        .hcw-chatbox.hcw-open {
            opacity: 1; pointer-events: auto; transform: translateY(0);
        }
        .hcw-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff; padding: 18px 24px 12px 24px;
            display: flex; align-items: center; justify-content: space-between;
        }
        .hcw-header-title { font-size: 19px; font-weight: 600; display: flex; align-items: center; gap: 8px; }
        .hcw-header-close {
            background: none; border: none; color: #fff; font-size: 22px; cursor: pointer;
            padding: 0 2px; margin-left: 10px; opacity: 0.85; transition: opacity 0.2s;
        }
        .hcw-header-close:hover { opacity: 1; }
        .hcw-api-badge {
            display: inline-block; background: rgba(255,255,255,0.22);
            font-size: 11px; padding: 2px 10px; border-radius: 10px; margin-top: 2px;
            color: #fff; font-weight: 500;
        }
        .hcw-messages {
            flex: 1; overflow-y: auto; padding: 18px 18px 10px 18px;
            display: flex; flex-direction: column; gap: 13px;
            background: linear-gradient(180deg, #f8f9fb 0%, #f0f1f7 100%);
        }
        .hcw-message { display: flex; gap: 10px; animation: hcw-slideIn 0.3s ease; }
        @keyframes hcw-slideIn {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .hcw-message.user { justify-content: flex-end; }
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
            background: #fff; border-left: 4px solid #667eea; padding: 11px;
            border-radius: 8px; margin: 5px 0; font-size: 13px;
        }
        .hcw-message-card strong { color: #667eea; }
        .hcw-message-card.event { border-left-color: #10b981; }
        .hcw-message-card.task  { border-left-color: #f59e0b; }
        .hcw-message-card.error { border-left-color: #ef4444; background: #fef2f2; }
        .hcw-typing-indicator { display: flex; gap: 4px; padding: 12px 16px; }
        .hcw-typing-dot {
            width: 8px; height: 8px; background: #667eea; border-radius: 50%;
            animation: hcw-bounce 1.4s infinite;
        }
        .hcw-typing-dot:nth-child(2) { animation-delay: 0.2s; }
        .hcw-typing-dot:nth-child(3) { animation-delay: 0.4s; }
        @keyframes hcw-bounce {
            0%,60%,100% { opacity: 0.3; transform: translateY(0); }
            30%          { opacity: 1;   transform: translateY(-10px); }
        }
        .hcw-input-area {
            display: flex; gap: 10px; padding: 13px 15px; background: #fff;
            border-top: 1px solid #e0e0e0;
        }
        .hcw-input-area input {
            flex: 1; padding: 11px 15px; border: 1px solid #ddd;
            border-radius: 25px; font-size: 14px; outline: none;
            transition: border-color 0.3s;
        }
        .hcw-input-area input:focus { border-color: #667eea; }
        .hcw-input-area button {
            width: 44px; height: 44px; border: none;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff; border-radius: 50%; cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; transition: transform 0.2s;
        }
        .hcw-input-area button:hover  { transform: scale(1.05); }
        .hcw-input-area button:active { transform: scale(0.95); }
        .hcw-input-area button:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }
        .hcw-welcome-message { text-align: center; padding: 18px 0 10px 0; }
        .hcw-welcome-message h2 { color: #667eea; font-size: 17px; margin-bottom: 8px; }
        .hcw-welcome-message p  { font-size: 13px; color: #666; line-height: 1.6; }
        .hcw-commands-list {
            margin-top: 12px; font-size: 12px; background: #fff; padding: 10px;
            border-radius: 8px; border-left: 3px solid #667eea; text-align: left;
        }
        .hcw-commands-list strong { display: block; color: #667eea; margin-bottom: 7px; }
        .hcw-command-item { color: #666; margin: 3px 0; padding-left: 10px; }
        @media (max-width: 600px) {
            .hcw-chatbox { width: 100vw !important; right: 0; border-radius: 0; }
            .hcw-fab { right: 20px; bottom: 20px; }
        }
        `;
        document.head.appendChild(style);
    }

    function createWidgetDOM() {
        // Floating Action Button
        const fab = document.createElement('div');
        fab.className = 'hcw-fab';
        fab.innerHTML = `<span class="hcw-fab-icon">💬</span><span class="hcw-fab-badge">IA</span>`;
        fab.title = 'Harmonie Assistant';

        // Chatbox
        const chatbox = document.createElement('div');
        chatbox.className = 'hcw-chatbox';
        chatbox.innerHTML = `
            <div class="hcw-header">
                <span class="hcw-header-title">🎯 Harmonie Assistant</span>
                <button class="hcw-header-close" title="Fermer">✕</button>
            </div>
            <div class="hcw-api-badge">⚡ Powered by Gemini AI</div>
            <div class="hcw-messages" id="hcw-messages"></div>
            <form class="hcw-input-area" autocomplete="off">
                <input type="text" class="hcw-input" placeholder="Écrivez votre demande..." autocomplete="off" />
                <button type="submit" class="hcw-send-btn">➤</button>
            </form>
        `;
        document.body.appendChild(fab);
        document.body.appendChild(chatbox);
        return { fab, chatbox };
    }

    // --- LOGIQUE DÉTECTION CONTEXTE ---
    function detectPageContext() {
        const url = window.location.href.toLowerCase();
        if (url.includes('evenement') || url.includes('event') || url.includes('calendrier')) return 'evenements';
        if (url.includes('tache') || url.includes('task')) return 'taches';
        // Fallback: détecter via DOM (exemple)
        if (document.querySelector('[data-harmonie-context="evenements"]')) return 'evenements';
        if (document.querySelector('[data-harmonie-context="taches"]')) return 'taches';
        return 'general';
    }

    // --- MESSAGES DE BIENVENUE ADAPTATIFS ---
    function getWelcomeHTML(context) {
        let msg = '';
        if (context === 'evenements') {
            msg = `<h2>Bienvenue sur la page Événements ! 📅</h2><p>Je peux vous aider à gérer vos événements, détecter des conflits, ou répondre à vos questions sur le calendrier.</p>`;
        } else if (context === 'taches') {
            msg = `<h2>Bienvenue sur la page Tâches ! ✅</h2><p>Je peux vous aider à organiser, trier ou compléter vos tâches facilement.</p>`;
        } else {
            msg = `<h2>Bienvenue dans Harmonie Assistant! 👋</h2><p>Je suis votre assistant personnel alimenté par Gemini AI. Je peux vous aider à gérer vos événements et vos tâches!</p>`;
        }
        return `<div class="hcw-welcome-message">${msg}<div class="hcw-commands-list">
            <strong>📅 Événements:</strong>
            <div class="hcw-command-item">• Ajoute une réunion demain à 10h</div>
            <div class="hcw-command-item">• Qu'est-ce que j'ai prévu ce weekend?</div>
            <div class="hcw-command-item">• Annule mon rendez-vous de vendredi</div>
            <strong style="margin-top:10px;">✅ Tâches:</strong>
            <div class="hcw-command-item">• Ajoute une tâche: préparer le rapport</div>
            <div class="hcw-command-item">• Quelles sont mes tâches urgentes?</div>
            <div class="hcw-command-item">• Marque 'envoyer le mail' comme terminée</div>
        </div></div>`;
    }

    // --- MESSAGES ---
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

    // --- GEMINI API ---
    async function callGeminiAPI(userMessage) {
        const systemPrompt = `Tu es Harmonie Assistant, un assistant personnel bienveillant intégré dans l'application Harmonie.\n\nRÈGLES:\n- Réponds TOUJOURS en français\n- Gère UNIQUEMENT deux modules: Événements et Tâches\n- Si une info est manquante, pose UNE seule question à la fois\n- Avant toute suppression, demande confirmation\n- Ne jamais inventer de données inexistantes\n- Pour hors sujet, rappelle poliment ton rôle\n\nMODULES:\n📅 ÉVÉNEMENTS: Créer, modifier, supprimer, afficher, détecter conflits\n✅ TÂCHES: Créer, marquer terminées, modifier, supprimer, lister, trier par priorité\n\nÉTAT ACTUEL DE L'APPLICATION:\nÉvénements: ${JSON.stringify(state.events)}\nTâches: ${JSON.stringify(state.tasks)}\n\nRéponds de façon claire, concise et bienveillante avec des emojis appropriés.`;
        state.conversationHistory.push({ role: 'user', parts: [{ text: userMessage }] });
        const body = {
            system_instruction: { parts: [{ text: systemPrompt }] },
            contents: state.conversationHistory,
            generationConfig: { temperature: 0.7, maxOutputTokens: 1024 }
        };
        const res = await fetch(`${CONFIG.API_URL}?key=${CONFIG.API_KEY}`, {
            method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(body)
        });
        if (!res.ok) {
            const err = await res.json();
            return { success: false, error: err.error?.message || 'Erreur API' };
        }
        const data = await res.json();
        const replyText = data.candidates?.[0]?.content?.parts?.[0]?.text || 'Aucune réponse.';
        state.conversationHistory.push({ role: 'model', parts: [{ text: replyText }] });
        if (state.conversationHistory.length > 20) {
            state.conversationHistory = state.conversationHistory.slice(-20);
        }
        return { success: true, message: replyText };
    }

    // --- COMMANDES LOCALES ---
    function handleLocalCommands(userMessage) {
        const msg = userMessage.toLowerCase();
        if (msg.includes('ajoute') && (msg.includes('événement') || msg.includes('réunion') || msg.includes('rendez-vous')))
            return handleAddEvent(userMessage);
        if ((msg.includes('affiche') || msg.includes('montre') || msg.includes("qu'est")) && (msg.includes('prévu') || msg.includes('événement')))
            return handleShowEvents();
        if ((msg.includes('supprim') || msg.includes('annule')) && (msg.includes('événement') || msg.includes('réunion') || msg.includes('rendez-vous')))
            return handleDeleteEvent();
        if (msg.includes('ajoute') && (msg.includes('tâche') || msg.includes('task')))
            return handleAddTask(userMessage);
        if ((msg.includes('affiche') || msg.includes('montre') || msg.includes('liste')) && (msg.includes('tâche') || msg.includes('urgent') || msg.includes('retard')))
            return handleShowTasks(msg);
        if (msg.includes('marque') && msg.includes('terminée'))
            return handleCompleteTask();
        if ((msg.includes('supprim') || msg.includes('efface')) && msg.includes('tâche'))
            return handleDeleteTask();
        if (msg === 'aide' || msg === 'help' || msg.includes('que peux-tu'))
            return getHelpMessage();
        return null;
    }
    function handleAddEvent(message) {
        const timeMatch = message.match(/(\d{1,2})[h:](\d{0,2})?/i);
        const hours   = timeMatch ? parseInt(timeMatch[1]) : 10;
        const minutes = timeMatch && timeMatch[2] ? parseInt(timeMatch[2]) : 0;
        const tomorrow = new Date(Date.now() + 86400000);
        const event = {
            id: state.eventCounter++,
            title: extractEventTitle(message),
            date: tomorrow.toISOString().split('T')[0],
            startTime: `${String(hours).padStart(2,'0')}:${String(minutes).padStart(2,'0')}`,
            endTime:   `${String(hours+1).padStart(2,'0')}:${String(minutes).padStart(2,'0')}`,
            location: extractLocation(message) || 'À définir'
        };
        state.events.push(event);
        return `✅ <strong>Événement créé avec succès!</strong>\n<div class="hcw-message-card event"><strong>📅 ${event.title}</strong><br>📆 ${formatDate(event.date)}<br>🕐 ${event.startTime} - ${event.endTime}<br>📍 ${event.location}</div>`;
    }
    function handleShowEvents() {
        if (!state.events.length) return '📭 Vous n\'avez aucun événement programmé.';
        let html = '📅 <strong>Vos événements:</strong><br>';
        state.events.forEach(e => {
            html += `<div class=\"hcw-message-card event\"><strong>${e.title}</strong><br>${formatDate(e.date)} • ${e.startTime} - ${e.endTime}<br>📍 ${e.location}</div>`;
        });
        return html;
    }
    function handleDeleteEvent() {
        if (!state.events.length) return '📭 Aucun événement à supprimer.';
        const last = state.events.pop();
        return `✅ <strong>Événement supprimé!</strong>\n<div class=\"hcw-message-card event\"><strong>❌ ${last.title}</strong><br>${formatDate(last.date)} • ${last.startTime}</div>`;
    }
    function handleAddTask(message) {
        const priority = extractPriority(message);
        const emoji = { haute:'🔴', moyenne:'🟡', basse:'🟢' }[priority];
        const task = {
            id: state.taskCounter++,
            title: extractTaskTitle(message),
            priority,
            dueDate: extractDueDate(message),
            completed: false
        };
        state.tasks.push(task);
        return `✅ <strong>Tâche ajoutée!</strong>\n<div class=\"hcw-message-card task\"><strong>${emoji} ${task.title}</strong><br>Priorité: <strong>${priority}</strong><br>📅 Échéance: ${task.dueDate}</div>`;
    }
    function handleShowTasks(msg) {
        let tasks = state.tasks;
        if (msg.includes('terminée'))    tasks = tasks.filter(t => t.completed);
        else if (msg.includes('retard')) tasks = tasks.filter(t => !t.completed && new Date(t.dueDate) < new Date());
        else if (msg.includes('urgent')) tasks = tasks.filter(t => !t.completed && t.priority === 'haute');
        else                             tasks = tasks.filter(t => !t.completed);
        if (!tasks.length) return '✨ Aucune tâche à afficher dans cette catégorie!';
        let html = '✅ <strong>Vos tâches:</strong><br>';
        tasks.forEach(t => {
            const emoji = { haute:'🔴', moyenne:'🟡', basse:'🟢' }[t.priority];
            html += `<div class=\"hcw-message-card task\"><strong>${emoji} ${t.title}</strong><br>Priorité: ${t.priority} • 📅 ${t.dueDate}</div>`;
        });
        return html;
    }
    function handleCompleteTask() {
        const task = state.tasks.find(t => !t.completed);
        if (!task) return '✨ Toutes vos tâches sont déjà terminées!';
        task.completed = true;
        return `🎉 <strong>Félicitations!</strong>\n<div class=\"hcw-message-card task\"><strong>✅ ${task.title}</strong><br>Tâche marquée comme terminée!</div>`;
    }
    function handleDeleteTask() {
        if (!state.tasks.length) return '📭 Aucune tâche à supprimer.';
        const last = state.tasks.pop();
        return `✅ <strong>Tâche supprimée!</strong>\n<div class=\"hcw-message-card task\"><strong>❌ ${last.title}</strong></div>`;
    }
    function getHelpMessage() {
        return `<strong>📚 Comment utiliser Harmonie Assistant?</strong>\n<div class=\"hcw-message-card\"><strong>📅 Événements:</strong><br>• \"Ajoute une réunion demain à 10h\"<br>• \"Qu'est-ce que j'ai prévu?\"<br>• \"Annule mon rendez-vous\"<br><br><strong>✅ Tâches:</strong><br>• \"Ajoute une tâche: préparer le rapport\"<br>• \"Quelles sont mes tâches urgentes?\"<br>• \"Marque la tâche comme terminée\"<br>• \"Montre-moi les tâches en retard\"</div>`;
    }

    // --- ENVOI MESSAGE ---
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
            const localResponse = handleLocalCommands(userMessage);
            if (localResponse) {
                removeTypingIndicator();
                addMessage(localResponse, 'bot', true);
            } else {
                const response = await callGeminiAPI(userMessage);
                removeTypingIndicator();
                if (response.success) {
                    addMessage(response.message, 'bot', true);
                } else {
                    addMessage(`<div class=\"hcw-message-card error\">❌ <strong>Erreur:</strong> ${response.error}</div>`, 'bot', true);
                }
            }
        } catch (err) {
            removeTypingIndicator();
            addMessage('<div class=\"hcw-message-card error\">❌ Erreur de connexion. Vérifiez votre réseau.</div>', 'bot', true);
            console.error(err);
        } finally {
            state.isWaitingForResponse = false;
            sendBtn.disabled = false;
            input.focus();
        }
    }

    // --- INITIALISATION ---
    function init() {
        injectStyles();
        const { fab, chatbox } = createWidgetDOM();
        const input = chatbox.querySelector('.hcw-input');
        const sendBtn = chatbox.querySelector('.hcw-send-btn');
        const closeBtn = chatbox.querySelector('.hcw-header-close');
        const messages = chatbox.querySelector('#hcw-messages');
        // Message de bienvenue contextuel
        const context = detectPageContext();
        messages.innerHTML = '';
        addMessage(getWelcomeHTML(context), 'bot', true);
        // Ouvrir/fermer
        let isOpen = false;
        function openChat() {
            chatbox.classList.add('hcw-open');
            isOpen = true;
            setTimeout(() => input.focus(), 200);
        }
        function closeChat() {
            chatbox.classList.remove('hcw-open');
            isOpen = false;
        }
        fab.addEventListener('click', () => {
            if (isOpen) closeChat(); else openChat();
        });
        closeBtn.addEventListener('click', closeChat);
        // Empêcher soumission formulaire
        chatbox.querySelector('form').addEventListener('submit', e => {
            e.preventDefault();
            if (!state.isWaitingForResponse) sendMessage(input, sendBtn);
        });
        input.addEventListener('keypress', e => {
            if (e.key === 'Enter' && !state.isWaitingForResponse) {
                e.preventDefault();
                sendMessage(input, sendBtn);
            }
        });
    }
    // Auto-init
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
    else init();
})();

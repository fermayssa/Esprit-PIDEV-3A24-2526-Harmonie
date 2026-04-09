<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* chatbot/index.html.twig */
class __TwigTemplate_6793daf4dd52bdf87cdd196e948a37a5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Harmonie Assistant - Chatbot IA";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    .page-wrapper {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: calc(100vh - 60px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .chatbot-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 500px;
        height: 85vh;
        max-height: 750px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
        overflow: hidden;
    }

    .header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 15px 20px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .header-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
    }

    .header h1 {
        font-size: 22px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        margin: 0;
    }

    .header-logo {
        font-size: 28px;
    }

    .header p {
        font-size: 12px;
        opacity: 0.9;
        margin: 0;
    }

    .settings-btn {
        width: 44px;
        height: 44px;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        border-radius: 8px;
        cursor: pointer;
        font-size: 18px;
        transition: background 0.3s;
        flex-shrink: 0;
    }

    .settings-btn:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .api-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.25);
        font-size: 10px;
        padding: 4px 12px;
        border-radius: 12px;
        width: fit-content;
    }

    .messages-container {
        flex: 1;
        overflow-y: auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        background: linear-gradient(180deg, #f8f9fb 0%, #f0f1f7 100%);
    }

    .messages-container::-webkit-scrollbar {
        width: 6px;
    }

    .messages-container::-webkit-scrollbar-thumb {
        background: #ddd;
        border-radius: 3px;
    }

    .message {
        display: flex;
        gap: 10px;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .message.user {
        justify-content: flex-end;
    }

    .message-content {
        max-width: 85%;
        padding: 12px 16px;
        border-radius: 14px;
        word-wrap: break-word;
        font-size: 14px;
        line-height: 1.5;
    }

    .user .message-content {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 18px 18px 4px 18px;
    }

    .bot .message-content {
        background: #e8e9f3;
        color: #333;
        border-radius: 18px 18px 18px 4px;
    }

    .message-card {
        background: white;
        border-left: 4px solid #667eea;
        padding: 12px;
        border-radius: 8px;
        margin: 8px 0;
        font-size: 13px;
        line-height: 1.6;
    }

    .message-card strong {
        color: #667eea;
    }

    .message-card.event {
        border-left-color: #10b981;
    }

    .message-card.task {
        border-left-color: #f59e0b;
    }

    .typing-indicator {
        display: flex;
        gap: 4px;
        padding: 12px 16px;
    }

    .typing-dot {
        width: 8px;
        height: 8px;
        background: #667eea;
        border-radius: 50%;
        animation: bounce 1.4s infinite;
    }

    .typing-dot:nth-child(2) {
        animation-delay: 0.2s;
    }

    .typing-dot:nth-child(3) {
        animation-delay: 0.4s;
    }

    @keyframes bounce {
        0%, 60%, 100% {
            opacity: 0.3;
        }
        30% {
            opacity: 1;
            transform: translateY(-8px);
        }
    }

    .input-area {
        display: flex;
        gap: 10px;
        padding: 15px;
        background: white;
        border-top: 1px solid #e0e0e0;
    }

    .input-area input {
        flex: 1;
        padding: 12px 16px;
        border: 1px solid #ddd;
        border-radius: 25px;
        font-size: 14px;
        outline: none;
        transition: border-color 0.3s;
        font-family: inherit;
    }

    .input-area input:focus {
        border-color: #667eea;
    }

    .input-area button {
        width: 44px;
        height: 44px;
        border: none;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        transition: transform 0.2s;
    }

    .input-area button:hover {
        transform: scale(1.05);
    }

    .input-area button:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .welcome-message {
        padding: 15px;
    }

    .welcome-message h2 {
        color: #667eea;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .welcome-message p {
        font-size: 13px;
        color: #666;
        margin-bottom: 12px;
    }

    .commands-list {
        font-size: 12px;
        background: white;
        padding: 12px;
        border-radius: 8px;
        border-left: 3px solid #667eea;
    }

    .commands-list strong {
        color: #667eea;
        display: block;
        margin-bottom: 6px;
    }

    .command-item {
        color: #666;
        margin: 3px 0;
        padding-left: 10px;
    }

    /* Modal */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 2000;
        align-items: center;
        justify-content: center;
    }

    .modal.active {
        display: flex;
    }

    .modal-content {
        background: white;
        border-radius: 16px;
        width: 90%;
        max-width: 400px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        animation: slideUp 0.3s ease;
    }

    @keyframes slideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        border-bottom: 1px solid #e0e0e0;
    }

    .modal-header h2 {
        margin: 0;
        font-size: 18px;
        color: #333;
    }

    .modal-close {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #666;
    }

    .modal-close:hover {
        color: #333;
    }

    .modal-body {
        padding: 20px;
    }

    .modal-body p {
        margin: 0 0 12px 0;
        font-size: 14px;
        color: #666;
    }

    .api-link {
        display: inline-block;
        margin-bottom: 15px;
        padding: 10px 12px;
        background: #f0f0f0;
        border-radius: 8px;
        text-decoration: none;
        font-size: 12px;
        color: #667eea;
        transition: background 0.3s;
    }

    .api-link:hover {
        background: #e0e0e0;
    }

    .modal-body label {
        display: block;
        margin: 15px 0 8px 0;
        font-weight: 600;
        color: #333;
        font-size: 14px;
    }

    .modal-body input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        font-family: monospace;
        outline: none;
        transition: border-color 0.3s;
    }

    .modal-body input:focus {
        border-color: #667eea;
    }

    .api-status {
        margin-top: 10px;
        padding: 10px;
        border-radius: 6px;
        font-size: 12px;
        display: none;
    }

    .api-status.success {
        display: block;
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .api-status.error {
        display: block;
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .modal-footer {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
        padding: 15px 20px;
        border-top: 1px solid #e0e0e0;
    }

    .btn-primary, .btn-secondary {
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s;
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    .btn-secondary {
        background: #f0f0f0;
        color: #333;
    }

    .btn-secondary:hover {
        background: #e0e0e0;
    }
</style>

<div class=\"page-wrapper\">
    <div class=\"chatbot-container\">
        <div class=\"header\">
            <div class=\"header-top\">
                <div>
                    <h1><span class=\"header-logo\">🎯</span> Harmonie Assistant</h1>
                    <p>Assistant IA pour événements et tâches</p>
                </div>
                <button id=\"settingsBtn\" class=\"settings-btn\" title=\"Paramètres API\">⚙️</button>
            </div>
            <span class=\"api-badge\" id=\"apiBadge\">⚡ API Prête</span>
        </div>

        <div class=\"messages-container\" id=\"messagesContainer\">
            <div class=\"message bot\">
                <div class=\"message-content\">
                    <div class=\"welcome-message\">
                        <h2>Bienvenue! 👋</h2>
                        <p>Je suis Harmonie Assistant. Je peux vous aider à gérer vos événements et vos tâches!</p>
                        <div class=\"commands-list\">
                            <strong>📅 Événements:</strong>
                            <div class=\"command-item\">• \"Ajoute une réunion demain à 10h\"</div>
                            <div class=\"command-item\">• \"Qu'est-ce que j'ai prévu ce weekend?\"</div>
                            <div class=\"command-item\">• \"Annule mon rendez-vous de vendredi\"</div>
                            <strong style=\"margin-top: 10px;\">✅ Tâches:</strong>
                            <div class=\"command-item\">• \"Ajoute une tâche: préparer le rapport\"</div>
                            <div class=\"command-item\">• \"Quelles sont mes tâches urgentes?\"</div>
                            <div class=\"command-item\">• \"Marque 'envoyer le mail' comme terminée\"</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"input-area\">
            <input type=\"text\" id=\"userInput\" placeholder=\"Écrivez votre demande...\" autocomplete=\"off\">
            <button id=\"sendBtn\">→</button>
        </div>

        <!-- Modal Paramètres -->
        <div id=\"settingsModal\" class=\"modal\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2>⚙️ Paramètres API</h2>
                    <button class=\"modal-close\" id=\"closeModal\">×</button>
                </div>
                <div class=\"modal-body\">
                    <p>Clé API Gemini (Google):</p>
                    <label for=\"apiKeyInput\">Votre clé API:</label>
                    <input type=\"password\" id=\"apiKeyInput\" placeholder=\"AIzaSy...\" autocomplete=\"off\">
                    <div class=\"api-status\" id=\"apiStatus\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button id=\"cancelBtn\" class=\"btn-secondary\">Annuler</button>
                    <button id=\"saveBtn\" class=\"btn-primary\">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Configuration Gemini
    const CONFIG = {
        API_KEY: 'AIzaSyDRfeHdCUnKk8wwf3gAGJChWlSj9ObRSR8',
        MODEL: 'gemini-1.5-flash'
    };

    // État
    const state = {
        events: [],
        tasks: [],
        eventCounter: 1,
        taskCounter: 1,
        isWaiting: false
    };

    // DOM
    const messagesContainer = document.getElementById('messagesContainer');
    const userInput = document.getElementById('userInput');
    const sendBtn = document.getElementById('sendBtn');
    const settingsBtn = document.getElementById('settingsBtn');
    const settingsModal = document.getElementById('settingsModal');
    const closeModal = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const saveBtn = document.getElementById('saveBtn');
    const apiKeyInput = document.getElementById('apiKeyInput');
    const apiBadge = document.getElementById('apiBadge');
    const apiStatus = document.getElementById('apiStatus');

    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        userInput.focus();
        userInput.addEventListener('keypress', e => {
            if (e.key === 'Enter' && !state.isWaiting) sendMessage();
        });
        sendBtn.addEventListener('click', sendMessage);
        settingsBtn.addEventListener('click', () => settingsModal.classList.add('active'));
        closeModal.addEventListener('click', () => settingsModal.classList.remove('active'));
        cancelBtn.addEventListener('click', () => settingsModal.classList.remove('active'));
        saveBtn.addEventListener('click', saveAPIKey);
        
        loadAPIKey();
    });

    function saveAPIKey() {
        const key = apiKeyInput.value.trim();
        if (!key) {
            showStatus('Veuillez entrer une clé API', 'error');
            return;
        }
        CONFIG.API_KEY = key;
        localStorage.setItem('gemini_api_key', key);
        showStatus('✅ Clé enregistrée!', 'success');
        setTimeout(() => settingsModal.classList.remove('active'), 1500);
    }

    function loadAPIKey() {
        const saved = localStorage.getItem('gemini_api_key');
        if (saved) {
            CONFIG.API_KEY = saved;
            apiKeyInput.value = saved;
            apiBadge.textContent = '✅ API Configurée';
        }
    }

    function showStatus(msg, type) {
        apiStatus.textContent = msg;
        apiStatus.className = `api-status \${type}`;
    }

    function sendMessage() {
        const msg = userInput.value.trim();
        if (!msg || state.isWaiting) return;

        addMessage(msg, 'user');
        userInput.value = '';
        sendBtn.disabled = true;
        showTyping();
        state.isWaiting = true;
        processMessage(msg);
    }

    function addMessage(text, sender = 'bot', isHTML = false) {
        const div = document.createElement('div');
        div.className = `message \${sender}`;
        const content = document.createElement('div');
        content.className = 'message-content';
        if (isHTML) content.innerHTML = text;
        else content.textContent = text;
        div.appendChild(content);
        messagesContainer.appendChild(div);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function showTyping() {
        const div = document.createElement('div');
        div.className = 'message bot';
        div.id = 'typing';
        div.innerHTML = '<div class=\"typing-indicator\"><div class=\"typing-dot\"></div><div class=\"typing-dot\"></div><div class=\"typing-dot\"></div></div>';
        messagesContainer.appendChild(div);
    }

    function removeTyping() {
        const typing = document.getElementById('typing');
        if (typing) typing.remove();
    }

    async function processMessage(msg) {
        try {
            // Essayer les commandes locales d'abord
            const local = await handleLocalCommands(msg);
            if (local) {
                removeTyping();
                addMessage(local, 'bot', true);
                state.isWaiting = false;
                sendBtn.disabled = false;
                return;
            }

            // Sinon, utiliser Gemini
            const response = await callGeminiAPI(msg);
            removeTyping();
            addMessage(response, 'bot', true);
        } catch (error) {
            removeTyping();
            addMessage('❌ Erreur: ' + error.message, 'bot', true);
        } finally {
            state.isWaiting = false;
            sendBtn.disabled = false;
        }
    }

    async function handleLocalCommands(msg) {
        const lower = msg.toLowerCase();

        // Événements
        if (lower.includes('ajoute') && (lower.includes('événement') || lower.includes('réunion') || lower.includes('rendez'))) {
            return createEvent(msg);
        }
        if ((lower.includes('affiche') || lower.includes('montre') || lower.includes('prévu')) && (lower.includes('événement') || lower.includes('calendrier'))) {
            return listEvents();
        }
        if ((lower.includes('supprim') || lower.includes('annule')) && (lower.includes('événement') || lower.includes('réunion'))) {
            return deleteEvent();
        }

        // Tâches
        if (lower.includes('ajoute') && (lower.includes('tâche') || lower.includes('task'))) {
            return createTask(msg);
        }
        if ((lower.includes('affiche') || lower.includes('montre') || lower.includes('liste')) && (lower.includes('tâche') || lower.includes('urgente'))) {
            return listTasks(msg);
        }
        if ((lower.includes('marque') || lower.includes('termine')) && lower.includes('tâche')) {
            return completeTask();
        }
        if ((lower.includes('supprim')) && lower.includes('tâche')) {
            return deleteTask();
        }

        return null;
    }

    function createEvent(msg) {
        const match = msg.match(/(\\d{1,2})[h:](\\d{0,2})?/);
        const hours = match ? parseInt(match[1]) : 10;
        const minutes = match && match[2] ? parseInt(match[2]) : 0;
        const tomorrow = new Date(Date.now() + 86400000);

        const event = {
            id: state.eventCounter++,
            title: extractEventTitle(msg),
            date: tomorrow.toISOString().split('T')[0],
            startTime: `\${hours.toString().padStart(2, '0')}:\${minutes.toString().padStart(2, '0')}`,
            endTime: `\${(hours + 1).toString().padStart(2, '0')}:00`,
            location: extractLocation(msg) || 'À définir'
        };

        state.events.push(event);
        return `✅ <strong>Événement créé!</strong><br><div class=\"message-card event\"><strong>📅 \${event.title}</strong><br>\${formatDate(event.date)}<br>🕐 \${event.startTime} - \${event.endTime}<br>📍 \${event.location}</div>`;
    }

    function listEvents() {
        if (state.events.length === 0) return '📭 Aucun événement programmé.';
        let html = '📅 <strong>Vos événements:</strong><br>';
        state.events.forEach(e => {
            html += `<div class=\"message-card event\"><strong>\${e.title}</strong><br>\${formatDate(e.date)} • \${e.startTime}</div>`;
        });
        return html;
    }

    function deleteEvent() {
        if (state.events.length === 0) return '📭 Aucun événement à supprimer.';
        const e = state.events.pop();
        return `✅ <strong>Événement supprimé:</strong><br><div class=\"message-card event\"><strong>❌ \${e.title}</strong></div>`;
    }

    function createTask(msg) {
        const priority = msg.toLowerCase().includes('urgent') ? 'haute' : msg.toLowerCase().includes('basse') ? 'basse' : 'moyenne';
        const task = {
            id: state.taskCounter++,
            title: extractTaskTitle(msg),
            priority: priority,
            dueDate: extractDueDate(msg),
            completed: false
        };
        state.tasks.push(task);
        const emoji = priority === 'haute' ? '🔴' : priority === 'basse' ? '🟢' : '🟡';
        return `✅ <strong>Tâche ajoutée!</strong><br><div class=\"message-card task\"><strong>\${emoji} \${task.title}</strong><br>Priorité: \${priority}<br>📅 \${task.dueDate}</div>`;
    }

    function listTasks(msg) {
        let tasks = state.tasks;
        if (msg.toLowerCase().includes('terminée')) tasks = tasks.filter(t => t.completed);
        else if (msg.toLowerCase().includes('urgent')) tasks = tasks.filter(t => !t.completed && t.priority === 'haute');
        else tasks = tasks.filter(t => !t.completed);

        if (tasks.length === 0) return '✨ Aucune tâche à afficher.';
        let html = '✅ <strong>Vos tâches:</strong><br>';
        tasks.forEach(t => {
            const emoji = t.priority === 'haute' ? '🔴' : t.priority === 'basse' ? '🟢' : '🟡';
            html += `<div class=\"message-card task\"><strong>\${emoji} \${t.title}</strong><br>Priorité: \${t.priority}</div>`;
        });
        return html;
    }

    function completeTask() {
        const task = state.tasks.find(t => !t.completed);
        if (!task) return '✨ Toutes les tâches sont terminées!';
        task.completed = true;
        return `✨ <strong>Félicitations!</strong><br><div class=\"message-card task\"><strong>✅ \${task.title}</strong><br>Tâche marquée comme terminée!</div>`;
    }

    function deleteTask() {
        if (state.tasks.length === 0) return '📭 Aucune tâche à supprimer.';
        const t = state.tasks.pop();
        return `✅ <strong>Tâche supprimée:</strong><br><div class=\"message-card task\"><strong>❌ \${t.title}</strong></div>`;
    }

    function extractEventTitle(msg) {
        const match = msg.match(/(ajoute|crée?)\\s+(?:une|un)?\\s+([^à]*?)(?=à|\\d|pour|le|la|,|\$)/i);
        return match ? match[2].trim() : 'Événement';
    }

    function extractTaskTitle(msg) {
        const match = msg.match(/(tâche|task)[\\s:]*([^.!?\\n]*)/i);
        return match ? match[2].trim() : 'Tâche';
    }

    function extractLocation(msg) {
        const match = msg.match(/(?:à|au|lieu:?)\\s+([^.!?,]*?)(?=pour|à|le|la|,|\$)/i);
        return match ? match[1].trim() : null;
    }

    function extractDueDate(msg) {
        const now = new Date();
        const lower = msg.toLowerCase();
        let daysAhead = 0;

        if (lower.includes('demain')) daysAhead = 1;
        else if (lower.includes('lundi')) daysAhead = (1 - now.getDay() + 7) % 7 || 7;
        else if (lower.includes('mardi')) daysAhead = (2 - now.getDay() + 7) % 7 || 7;
        else if (lower.includes('mercredi')) daysAhead = (3 - now.getDay() + 7) % 7 || 7;
        else if (lower.includes('jeudi')) daysAhead = (4 - now.getDay() + 7) % 7 || 7;
        else if (lower.includes('vendredi')) daysAhead = (5 - now.getDay() + 7) % 7 || 7;

        const date = new Date(now.getTime() + daysAhead * 86400000);
        return date.toISOString().split('T')[0];
    }

    function formatDate(dateStr) {
        const date = new Date(dateStr + 'T00:00:00');
        return date.toLocaleDateString('fr-FR', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    }

    async function callGeminiAPI(userMessage) {
        const systemPrompt = `Tu es Harmonie Assistant, assistant IA bienveillant pour l'app Harmonie.

RÈGLES:
1. Réponds TOUJOURS en français
2. Gère UNIQUEMENT: Événements et Tâches
3. Sois bienveillant et professionnel
4. Pour hors sujet, rappelle ton rôle poliment

État actuel:
Événements: \${JSON.stringify(state.events)}
Tâches: \${JSON.stringify(state.tasks)}

Si info manquante, pose UNE question.
Avant suppression, demande confirmation.
Ne jamais inventer de données.`;

        const fullMessage = systemPrompt + '\\n\\nUtilisateur: ' + userMessage;

        const response = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=\${CONFIG.API_KEY}`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                contents: [{
                    parts: [{
                        text: fullMessage
                    }]
                }],
                generationConfig: {
                    temperature: 0.7,
                    topK: 40,
                    topP: 0.95,
                    maxOutputTokens: 500
                }
            })
        });

        if (!response.ok) {
            const errorData = await response.json();
            console.error('Erreur API:', errorData);
            throw new Error('Erreur API Gemini: ' + (errorData.error?.message || 'Erreur inconnue'));
        }

        const data = await response.json();
        if (!data.candidates || !data.candidates[0]?.content?.parts?.[0]?.text) {
            throw new Error('Réponse vide de l\\'API');
        }

        return data.candidates[0].content.parts[0].text;
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chatbot/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Harmonie Assistant - Chatbot IA{% endblock %}

{% block body %}
<style>
    .page-wrapper {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: calc(100vh - 60px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .chatbot-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 500px;
        height: 85vh;
        max-height: 750px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
        overflow: hidden;
    }

    .header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 15px 20px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .header-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
    }

    .header h1 {
        font-size: 22px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        margin: 0;
    }

    .header-logo {
        font-size: 28px;
    }

    .header p {
        font-size: 12px;
        opacity: 0.9;
        margin: 0;
    }

    .settings-btn {
        width: 44px;
        height: 44px;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        border-radius: 8px;
        cursor: pointer;
        font-size: 18px;
        transition: background 0.3s;
        flex-shrink: 0;
    }

    .settings-btn:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .api-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.25);
        font-size: 10px;
        padding: 4px 12px;
        border-radius: 12px;
        width: fit-content;
    }

    .messages-container {
        flex: 1;
        overflow-y: auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        background: linear-gradient(180deg, #f8f9fb 0%, #f0f1f7 100%);
    }

    .messages-container::-webkit-scrollbar {
        width: 6px;
    }

    .messages-container::-webkit-scrollbar-thumb {
        background: #ddd;
        border-radius: 3px;
    }

    .message {
        display: flex;
        gap: 10px;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .message.user {
        justify-content: flex-end;
    }

    .message-content {
        max-width: 85%;
        padding: 12px 16px;
        border-radius: 14px;
        word-wrap: break-word;
        font-size: 14px;
        line-height: 1.5;
    }

    .user .message-content {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 18px 18px 4px 18px;
    }

    .bot .message-content {
        background: #e8e9f3;
        color: #333;
        border-radius: 18px 18px 18px 4px;
    }

    .message-card {
        background: white;
        border-left: 4px solid #667eea;
        padding: 12px;
        border-radius: 8px;
        margin: 8px 0;
        font-size: 13px;
        line-height: 1.6;
    }

    .message-card strong {
        color: #667eea;
    }

    .message-card.event {
        border-left-color: #10b981;
    }

    .message-card.task {
        border-left-color: #f59e0b;
    }

    .typing-indicator {
        display: flex;
        gap: 4px;
        padding: 12px 16px;
    }

    .typing-dot {
        width: 8px;
        height: 8px;
        background: #667eea;
        border-radius: 50%;
        animation: bounce 1.4s infinite;
    }

    .typing-dot:nth-child(2) {
        animation-delay: 0.2s;
    }

    .typing-dot:nth-child(3) {
        animation-delay: 0.4s;
    }

    @keyframes bounce {
        0%, 60%, 100% {
            opacity: 0.3;
        }
        30% {
            opacity: 1;
            transform: translateY(-8px);
        }
    }

    .input-area {
        display: flex;
        gap: 10px;
        padding: 15px;
        background: white;
        border-top: 1px solid #e0e0e0;
    }

    .input-area input {
        flex: 1;
        padding: 12px 16px;
        border: 1px solid #ddd;
        border-radius: 25px;
        font-size: 14px;
        outline: none;
        transition: border-color 0.3s;
        font-family: inherit;
    }

    .input-area input:focus {
        border-color: #667eea;
    }

    .input-area button {
        width: 44px;
        height: 44px;
        border: none;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        transition: transform 0.2s;
    }

    .input-area button:hover {
        transform: scale(1.05);
    }

    .input-area button:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .welcome-message {
        padding: 15px;
    }

    .welcome-message h2 {
        color: #667eea;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .welcome-message p {
        font-size: 13px;
        color: #666;
        margin-bottom: 12px;
    }

    .commands-list {
        font-size: 12px;
        background: white;
        padding: 12px;
        border-radius: 8px;
        border-left: 3px solid #667eea;
    }

    .commands-list strong {
        color: #667eea;
        display: block;
        margin-bottom: 6px;
    }

    .command-item {
        color: #666;
        margin: 3px 0;
        padding-left: 10px;
    }

    /* Modal */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 2000;
        align-items: center;
        justify-content: center;
    }

    .modal.active {
        display: flex;
    }

    .modal-content {
        background: white;
        border-radius: 16px;
        width: 90%;
        max-width: 400px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        animation: slideUp 0.3s ease;
    }

    @keyframes slideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        border-bottom: 1px solid #e0e0e0;
    }

    .modal-header h2 {
        margin: 0;
        font-size: 18px;
        color: #333;
    }

    .modal-close {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #666;
    }

    .modal-close:hover {
        color: #333;
    }

    .modal-body {
        padding: 20px;
    }

    .modal-body p {
        margin: 0 0 12px 0;
        font-size: 14px;
        color: #666;
    }

    .api-link {
        display: inline-block;
        margin-bottom: 15px;
        padding: 10px 12px;
        background: #f0f0f0;
        border-radius: 8px;
        text-decoration: none;
        font-size: 12px;
        color: #667eea;
        transition: background 0.3s;
    }

    .api-link:hover {
        background: #e0e0e0;
    }

    .modal-body label {
        display: block;
        margin: 15px 0 8px 0;
        font-weight: 600;
        color: #333;
        font-size: 14px;
    }

    .modal-body input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        font-family: monospace;
        outline: none;
        transition: border-color 0.3s;
    }

    .modal-body input:focus {
        border-color: #667eea;
    }

    .api-status {
        margin-top: 10px;
        padding: 10px;
        border-radius: 6px;
        font-size: 12px;
        display: none;
    }

    .api-status.success {
        display: block;
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .api-status.error {
        display: block;
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .modal-footer {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
        padding: 15px 20px;
        border-top: 1px solid #e0e0e0;
    }

    .btn-primary, .btn-secondary {
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s;
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    .btn-secondary {
        background: #f0f0f0;
        color: #333;
    }

    .btn-secondary:hover {
        background: #e0e0e0;
    }
</style>

<div class=\"page-wrapper\">
    <div class=\"chatbot-container\">
        <div class=\"header\">
            <div class=\"header-top\">
                <div>
                    <h1><span class=\"header-logo\">🎯</span> Harmonie Assistant</h1>
                    <p>Assistant IA pour événements et tâches</p>
                </div>
                <button id=\"settingsBtn\" class=\"settings-btn\" title=\"Paramètres API\">⚙️</button>
            </div>
            <span class=\"api-badge\" id=\"apiBadge\">⚡ API Prête</span>
        </div>

        <div class=\"messages-container\" id=\"messagesContainer\">
            <div class=\"message bot\">
                <div class=\"message-content\">
                    <div class=\"welcome-message\">
                        <h2>Bienvenue! 👋</h2>
                        <p>Je suis Harmonie Assistant. Je peux vous aider à gérer vos événements et vos tâches!</p>
                        <div class=\"commands-list\">
                            <strong>📅 Événements:</strong>
                            <div class=\"command-item\">• \"Ajoute une réunion demain à 10h\"</div>
                            <div class=\"command-item\">• \"Qu'est-ce que j'ai prévu ce weekend?\"</div>
                            <div class=\"command-item\">• \"Annule mon rendez-vous de vendredi\"</div>
                            <strong style=\"margin-top: 10px;\">✅ Tâches:</strong>
                            <div class=\"command-item\">• \"Ajoute une tâche: préparer le rapport\"</div>
                            <div class=\"command-item\">• \"Quelles sont mes tâches urgentes?\"</div>
                            <div class=\"command-item\">• \"Marque 'envoyer le mail' comme terminée\"</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"input-area\">
            <input type=\"text\" id=\"userInput\" placeholder=\"Écrivez votre demande...\" autocomplete=\"off\">
            <button id=\"sendBtn\">→</button>
        </div>

        <!-- Modal Paramètres -->
        <div id=\"settingsModal\" class=\"modal\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2>⚙️ Paramètres API</h2>
                    <button class=\"modal-close\" id=\"closeModal\">×</button>
                </div>
                <div class=\"modal-body\">
                    <p>Clé API Gemini (Google):</p>
                    <label for=\"apiKeyInput\">Votre clé API:</label>
                    <input type=\"password\" id=\"apiKeyInput\" placeholder=\"AIzaSy...\" autocomplete=\"off\">
                    <div class=\"api-status\" id=\"apiStatus\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button id=\"cancelBtn\" class=\"btn-secondary\">Annuler</button>
                    <button id=\"saveBtn\" class=\"btn-primary\">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Configuration Gemini
    const CONFIG = {
        API_KEY: 'AIzaSyDRfeHdCUnKk8wwf3gAGJChWlSj9ObRSR8',
        MODEL: 'gemini-1.5-flash'
    };

    // État
    const state = {
        events: [],
        tasks: [],
        eventCounter: 1,
        taskCounter: 1,
        isWaiting: false
    };

    // DOM
    const messagesContainer = document.getElementById('messagesContainer');
    const userInput = document.getElementById('userInput');
    const sendBtn = document.getElementById('sendBtn');
    const settingsBtn = document.getElementById('settingsBtn');
    const settingsModal = document.getElementById('settingsModal');
    const closeModal = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const saveBtn = document.getElementById('saveBtn');
    const apiKeyInput = document.getElementById('apiKeyInput');
    const apiBadge = document.getElementById('apiBadge');
    const apiStatus = document.getElementById('apiStatus');

    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        userInput.focus();
        userInput.addEventListener('keypress', e => {
            if (e.key === 'Enter' && !state.isWaiting) sendMessage();
        });
        sendBtn.addEventListener('click', sendMessage);
        settingsBtn.addEventListener('click', () => settingsModal.classList.add('active'));
        closeModal.addEventListener('click', () => settingsModal.classList.remove('active'));
        cancelBtn.addEventListener('click', () => settingsModal.classList.remove('active'));
        saveBtn.addEventListener('click', saveAPIKey);
        
        loadAPIKey();
    });

    function saveAPIKey() {
        const key = apiKeyInput.value.trim();
        if (!key) {
            showStatus('Veuillez entrer une clé API', 'error');
            return;
        }
        CONFIG.API_KEY = key;
        localStorage.setItem('gemini_api_key', key);
        showStatus('✅ Clé enregistrée!', 'success');
        setTimeout(() => settingsModal.classList.remove('active'), 1500);
    }

    function loadAPIKey() {
        const saved = localStorage.getItem('gemini_api_key');
        if (saved) {
            CONFIG.API_KEY = saved;
            apiKeyInput.value = saved;
            apiBadge.textContent = '✅ API Configurée';
        }
    }

    function showStatus(msg, type) {
        apiStatus.textContent = msg;
        apiStatus.className = `api-status \${type}`;
    }

    function sendMessage() {
        const msg = userInput.value.trim();
        if (!msg || state.isWaiting) return;

        addMessage(msg, 'user');
        userInput.value = '';
        sendBtn.disabled = true;
        showTyping();
        state.isWaiting = true;
        processMessage(msg);
    }

    function addMessage(text, sender = 'bot', isHTML = false) {
        const div = document.createElement('div');
        div.className = `message \${sender}`;
        const content = document.createElement('div');
        content.className = 'message-content';
        if (isHTML) content.innerHTML = text;
        else content.textContent = text;
        div.appendChild(content);
        messagesContainer.appendChild(div);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function showTyping() {
        const div = document.createElement('div');
        div.className = 'message bot';
        div.id = 'typing';
        div.innerHTML = '<div class=\"typing-indicator\"><div class=\"typing-dot\"></div><div class=\"typing-dot\"></div><div class=\"typing-dot\"></div></div>';
        messagesContainer.appendChild(div);
    }

    function removeTyping() {
        const typing = document.getElementById('typing');
        if (typing) typing.remove();
    }

    async function processMessage(msg) {
        try {
            // Essayer les commandes locales d'abord
            const local = await handleLocalCommands(msg);
            if (local) {
                removeTyping();
                addMessage(local, 'bot', true);
                state.isWaiting = false;
                sendBtn.disabled = false;
                return;
            }

            // Sinon, utiliser Gemini
            const response = await callGeminiAPI(msg);
            removeTyping();
            addMessage(response, 'bot', true);
        } catch (error) {
            removeTyping();
            addMessage('❌ Erreur: ' + error.message, 'bot', true);
        } finally {
            state.isWaiting = false;
            sendBtn.disabled = false;
        }
    }

    async function handleLocalCommands(msg) {
        const lower = msg.toLowerCase();

        // Événements
        if (lower.includes('ajoute') && (lower.includes('événement') || lower.includes('réunion') || lower.includes('rendez'))) {
            return createEvent(msg);
        }
        if ((lower.includes('affiche') || lower.includes('montre') || lower.includes('prévu')) && (lower.includes('événement') || lower.includes('calendrier'))) {
            return listEvents();
        }
        if ((lower.includes('supprim') || lower.includes('annule')) && (lower.includes('événement') || lower.includes('réunion'))) {
            return deleteEvent();
        }

        // Tâches
        if (lower.includes('ajoute') && (lower.includes('tâche') || lower.includes('task'))) {
            return createTask(msg);
        }
        if ((lower.includes('affiche') || lower.includes('montre') || lower.includes('liste')) && (lower.includes('tâche') || lower.includes('urgente'))) {
            return listTasks(msg);
        }
        if ((lower.includes('marque') || lower.includes('termine')) && lower.includes('tâche')) {
            return completeTask();
        }
        if ((lower.includes('supprim')) && lower.includes('tâche')) {
            return deleteTask();
        }

        return null;
    }

    function createEvent(msg) {
        const match = msg.match(/(\\d{1,2})[h:](\\d{0,2})?/);
        const hours = match ? parseInt(match[1]) : 10;
        const minutes = match && match[2] ? parseInt(match[2]) : 0;
        const tomorrow = new Date(Date.now() + 86400000);

        const event = {
            id: state.eventCounter++,
            title: extractEventTitle(msg),
            date: tomorrow.toISOString().split('T')[0],
            startTime: `\${hours.toString().padStart(2, '0')}:\${minutes.toString().padStart(2, '0')}`,
            endTime: `\${(hours + 1).toString().padStart(2, '0')}:00`,
            location: extractLocation(msg) || 'À définir'
        };

        state.events.push(event);
        return `✅ <strong>Événement créé!</strong><br><div class=\"message-card event\"><strong>📅 \${event.title}</strong><br>\${formatDate(event.date)}<br>🕐 \${event.startTime} - \${event.endTime}<br>📍 \${event.location}</div>`;
    }

    function listEvents() {
        if (state.events.length === 0) return '📭 Aucun événement programmé.';
        let html = '📅 <strong>Vos événements:</strong><br>';
        state.events.forEach(e => {
            html += `<div class=\"message-card event\"><strong>\${e.title}</strong><br>\${formatDate(e.date)} • \${e.startTime}</div>`;
        });
        return html;
    }

    function deleteEvent() {
        if (state.events.length === 0) return '📭 Aucun événement à supprimer.';
        const e = state.events.pop();
        return `✅ <strong>Événement supprimé:</strong><br><div class=\"message-card event\"><strong>❌ \${e.title}</strong></div>`;
    }

    function createTask(msg) {
        const priority = msg.toLowerCase().includes('urgent') ? 'haute' : msg.toLowerCase().includes('basse') ? 'basse' : 'moyenne';
        const task = {
            id: state.taskCounter++,
            title: extractTaskTitle(msg),
            priority: priority,
            dueDate: extractDueDate(msg),
            completed: false
        };
        state.tasks.push(task);
        const emoji = priority === 'haute' ? '🔴' : priority === 'basse' ? '🟢' : '🟡';
        return `✅ <strong>Tâche ajoutée!</strong><br><div class=\"message-card task\"><strong>\${emoji} \${task.title}</strong><br>Priorité: \${priority}<br>📅 \${task.dueDate}</div>`;
    }

    function listTasks(msg) {
        let tasks = state.tasks;
        if (msg.toLowerCase().includes('terminée')) tasks = tasks.filter(t => t.completed);
        else if (msg.toLowerCase().includes('urgent')) tasks = tasks.filter(t => !t.completed && t.priority === 'haute');
        else tasks = tasks.filter(t => !t.completed);

        if (tasks.length === 0) return '✨ Aucune tâche à afficher.';
        let html = '✅ <strong>Vos tâches:</strong><br>';
        tasks.forEach(t => {
            const emoji = t.priority === 'haute' ? '🔴' : t.priority === 'basse' ? '🟢' : '🟡';
            html += `<div class=\"message-card task\"><strong>\${emoji} \${t.title}</strong><br>Priorité: \${t.priority}</div>`;
        });
        return html;
    }

    function completeTask() {
        const task = state.tasks.find(t => !t.completed);
        if (!task) return '✨ Toutes les tâches sont terminées!';
        task.completed = true;
        return `✨ <strong>Félicitations!</strong><br><div class=\"message-card task\"><strong>✅ \${task.title}</strong><br>Tâche marquée comme terminée!</div>`;
    }

    function deleteTask() {
        if (state.tasks.length === 0) return '📭 Aucune tâche à supprimer.';
        const t = state.tasks.pop();
        return `✅ <strong>Tâche supprimée:</strong><br><div class=\"message-card task\"><strong>❌ \${t.title}</strong></div>`;
    }

    function extractEventTitle(msg) {
        const match = msg.match(/(ajoute|crée?)\\s+(?:une|un)?\\s+([^à]*?)(?=à|\\d|pour|le|la|,|\$)/i);
        return match ? match[2].trim() : 'Événement';
    }

    function extractTaskTitle(msg) {
        const match = msg.match(/(tâche|task)[\\s:]*([^.!?\\n]*)/i);
        return match ? match[2].trim() : 'Tâche';
    }

    function extractLocation(msg) {
        const match = msg.match(/(?:à|au|lieu:?)\\s+([^.!?,]*?)(?=pour|à|le|la|,|\$)/i);
        return match ? match[1].trim() : null;
    }

    function extractDueDate(msg) {
        const now = new Date();
        const lower = msg.toLowerCase();
        let daysAhead = 0;

        if (lower.includes('demain')) daysAhead = 1;
        else if (lower.includes('lundi')) daysAhead = (1 - now.getDay() + 7) % 7 || 7;
        else if (lower.includes('mardi')) daysAhead = (2 - now.getDay() + 7) % 7 || 7;
        else if (lower.includes('mercredi')) daysAhead = (3 - now.getDay() + 7) % 7 || 7;
        else if (lower.includes('jeudi')) daysAhead = (4 - now.getDay() + 7) % 7 || 7;
        else if (lower.includes('vendredi')) daysAhead = (5 - now.getDay() + 7) % 7 || 7;

        const date = new Date(now.getTime() + daysAhead * 86400000);
        return date.toISOString().split('T')[0];
    }

    function formatDate(dateStr) {
        const date = new Date(dateStr + 'T00:00:00');
        return date.toLocaleDateString('fr-FR', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    }

    async function callGeminiAPI(userMessage) {
        const systemPrompt = `Tu es Harmonie Assistant, assistant IA bienveillant pour l'app Harmonie.

RÈGLES:
1. Réponds TOUJOURS en français
2. Gère UNIQUEMENT: Événements et Tâches
3. Sois bienveillant et professionnel
4. Pour hors sujet, rappelle ton rôle poliment

État actuel:
Événements: \${JSON.stringify(state.events)}
Tâches: \${JSON.stringify(state.tasks)}

Si info manquante, pose UNE question.
Avant suppression, demande confirmation.
Ne jamais inventer de données.`;

        const fullMessage = systemPrompt + '\\n\\nUtilisateur: ' + userMessage;

        const response = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=\${CONFIG.API_KEY}`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                contents: [{
                    parts: [{
                        text: fullMessage
                    }]
                }],
                generationConfig: {
                    temperature: 0.7,
                    topK: 40,
                    topP: 0.95,
                    maxOutputTokens: 500
                }
            })
        });

        if (!response.ok) {
            const errorData = await response.json();
            console.error('Erreur API:', errorData);
            throw new Error('Erreur API Gemini: ' + (errorData.error?.message || 'Erreur inconnue'));
        }

        const data = await response.json();
        if (!data.candidates || !data.candidates[0]?.content?.parts?.[0]?.text) {
            throw new Error('Réponse vide de l\\'API');
        }

        return data.candidates[0].content.parts[0].text;
    }
</script>
{% endblock %}
", "chatbot/index.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/chatbot/index.html.twig");
    }
}

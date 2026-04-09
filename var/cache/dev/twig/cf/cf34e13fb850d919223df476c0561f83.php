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

/* tache/index.html.twig */
class __TwigTemplate_4401aa8db7481547c6babf2a9ded752f extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'body_javascripts' => [$this, 'block_body_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        // line 29
        $macros["kan"] = $this->macros["kan"] = $this;
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
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

        yield "Tâches — Kanban";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/css/harmony-theme.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/css/harmony-panel.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <style>
        .kan-page { max-width: 1120px; margin: 0 auto; }
        .kan-top {
            display: flex; flex-wrap: wrap; align-items: flex-start;
            justify-content: space-between; gap: 16px; margin-bottom: 20px;
        }
        .kan-advice {
            font-size: 13px; color: var(--text-muted, #9590B8); max-width: 62%;
            line-height: 1.5;
        }
        .kan-advice strong { color: var(--text-mid, #4A4570); font-weight: 600; }
        .kan-export-wrap { position: relative; margin-left: auto; }
        .kan-export-summary {
            list-style: none; cursor: pointer;
            padding: 8px 16px; border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: linear-gradient(180deg, #fafafa, #f3f4f6);
            font-size: 13px; font-weight: 500; color: var(--text-mid, #4A4570);
        }
        .kan-export-summary::-webkit-details-marker { display: none; }
        .kan-export-menu {
            position: absolute; right: 0; top: calc(100% + 6px);
            background: var(--white, #fff); border: 1px solid var(--border, rgba(106,90,205,.12));
            border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,.08);
            min-width: 200px; padding: 6px; z-index: 50;
        }
        .kan-export-menu a {
            display: block; padding: 10px 12px; border-radius: 8px;
            color: var(--text, #1C1733); text-decoration: none; font-size: 14px;
        }
        .kan-export-menu a:hover { background: var(--purple-pale, #EDE8FA); color: var(--purple, #6A5ACD); }

        .kan-board {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;
            align-items: stretch;
        }
        @media (max-width: 960px) { .kan-board { grid-template-columns: 1fr; } }

        .kan-col {
            background: rgba(255,255,255,.7); border: 1px solid var(--border, rgba(106,90,205,.12));
            border-radius: 18px; padding: 16px 14px 20px;
            min-height: 280px; position: relative;
            box-shadow: 0 2px 16px rgba(106,90,205,.06);
            display: flex; flex-direction: column;
        }
        .kan-col-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 200px;
            margin-top: 4px;
            padding: 10px 8px 12px;
            border-radius: 14px;
            border: 1px dashed rgba(124, 58, 237, 0.22);
            background: rgba(255, 255, 255, 0.35);
            transition: border-color 0.2s ease, background 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;
        }
        .kan-col-body:hover {
            border-color: rgba(124, 58, 237, 0.45);
            background: rgba(255, 255, 255, 0.75);
            box-shadow: inset 0 0 0 1px rgba(124, 58, 237, 0.08);
        }
        .kan-col-body:focus-visible {
            outline: 2px solid #7c3aed;
            outline-offset: 2px;
        }
        .kan-col-title {
            font-family: var(--font-head, 'Syne', sans-serif); font-weight: 800; font-size: 13px;
            letter-spacing: 0.06em; text-transform: uppercase;
            color: var(--text-muted, #9590B8); margin: 0 0 10px 4px;
        }
        .kan-col--doing { min-height: 320px; }
        .kan-col-list {
            list-style: none; margin: 0; padding: 0;
            flex: 1; min-height: 140px;
        }
        .kan-col-list--doing { position: relative; }
        .kan-card {
            background: var(--white, #fff); border-radius: 14px;
            padding: 14px 14px 12px;
            box-shadow: 0 4px 14px rgba(0,0,0,.06);
            border: 1px solid rgba(124,58,237,.1);
            margin-bottom: 12px;
            cursor: grab;
        }
        .kan-card:active { cursor: grabbing; }
        .kan-card-title { font-weight: 700; font-size: 15px; color: var(--text, #1C1733); margin: 0 0 10px; line-height: 1.3; }
        .kan-card-title-text { cursor: pointer; }
        .kan-card-title-text:hover { color: var(--purple, #6A5ACD); }
        .kan-card-meta {
            display: flex; align-items: center; gap: 6px; font-size: 13px;
            color: #7c3aed; font-weight: 500; margin-bottom: 6px;
        }
        .kan-card-meta.overdue { color: #ea580c; font-weight: 600; }
        .kan-card-meta.late { color: #dc2626; font-weight: 600; }
        .kan-card-notes { font-size: 13px; color: var(--text-muted, #9590B8); line-height: 1.4; }
        .kan-card-actions {
            margin-top: 10px;
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 12px;
        }
        .kan-card-icon-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px;
            border-radius: 10px;
            color: var(--purple, #6A5ACD);
            text-decoration: none;
            transition: background 0.15s ease, color 0.15s ease;
        }
        .kan-card-icon-link:hover {
            background: var(--purple-pale, #EDE8FA);
            color: #5b21b6;
        }
        .kan-card-icon-link:focus-visible {
            outline: 2px solid #7c3aed;
            outline-offset: 2px;
        }

        .kan-col-list.sortable-drag { min-height: 40px; }
        .kan-card.sortable-ghost { opacity: 0.45; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 165
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

        // line 166
        yield from $this->load("_planning_topbar.html.twig", 166)->unwrap()->yield($context);
        // line 167
        yield "<main class=\"page\">
<div class=\"kan-page\"
     id=\"kanban-root\"
     data-csrf=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("tache_dnd"), "html", null, true);
        yield "\"
     data-url-template=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_update_statut", ["id" => 888888888]), "html_attr");
        yield "\"
     data-edit-url-template=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_edit", ["id" => 888888888]), "html_attr");
        yield "\">
    <div class=\"kan-top\">
        <p class=\"kan-advice\"><strong>Conseil du jour :</strong> ";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["advice"]) || array_key_exists("advice", $context) ? $context["advice"] : (function () { throw new RuntimeError('Variable "advice" does not exist.', 174, $this->source); })()), "html", null, true);
        yield "</p>
        <details class=\"kan-export-wrap\">
            <summary class=\"kan-export-summary\">Exporter ▾</summary>
            <div class=\"kan-export-menu\">
                <a href=\"#\" class=\"js-kanban-export-pdf\" data-type=\"pdf\">Exporter en PDF</a>
                <a href=\"#\" class=\"js-kanban-export-excel\" data-type=\"excel\">Exporter en Excel</a>
                <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_export_csv");
        yield "\">Télécharger CSV (legacy)</a>
            </div>
        </details>
    </div>

    <div class=\"kan-board\" id=\"kan-board-root\">
        <div class=\"kan-col\" data-statut=\"A_FAIRE\">
            <h2 class=\"kan-col-title\">TODO</h2>
            <div class=\"kan-col-body js-kan-col-zone\" tabindex=\"0\" aria-label=\"Colonne À faire — clic dans la zone vide pour ajouter une tâche. Glisser une carte pour la déplacer.\">
                <ul class=\"kan-col-list\" data-statut=\"A_FAIRE\" aria-label=\"À faire\">
                    ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 190, $this->source); })()), "A_FAIRE", [], "any", false, false, false, 190));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 191
            yield "                        ";
            yield $macros["kan"]->getTemplateForMacro("macro_kan_card", $context, 191, $this->getSourceContext())->macro_kan_card(...[$context["tache"], (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 191, $this->source); })())]);
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "                </ul>
            </div>
        </div>

        <div class=\"kan-col kan-col--doing\" data-statut=\"EN_COURS\">
            <h2 class=\"kan-col-title\">DOING</h2>
            <div class=\"kan-col-body js-kan-col-zone\" tabindex=\"0\" aria-label=\"Colonne En cours\">
                <ul class=\"kan-col-list kan-col-list--doing\" data-statut=\"EN_COURS\" aria-label=\"En cours\">
                    ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 201, $this->source); })()), "EN_COURS", [], "any", false, false, false, 201));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 202
            yield "                        ";
            yield $macros["kan"]->getTemplateForMacro("macro_kan_card", $context, 202, $this->getSourceContext())->macro_kan_card(...[$context["tache"], (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 202, $this->source); })())]);
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        yield "                </ul>
            </div>
        </div>

        <div class=\"kan-col\" data-statut=\"TERMINEE\">
            <h2 class=\"kan-col-title\">DONE</h2>
            <div class=\"kan-col-body js-kan-col-zone\" tabindex=\"0\" aria-label=\"Colonne Terminées\">
                <ul class=\"kan-col-list\" data-statut=\"TERMINEE\" aria-label=\"Terminées\">
                    ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 212, $this->source); })()), "TERMINEE", [], "any", false, false, false, 212));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 213
            yield "                        ";
            yield $macros["kan"]->getTemplateForMacro("macro_kan_card", $context, 213, $this->getSourceContext())->macro_kan_card(...[$context["tache"], (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 213, $this->source); })())]);
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        yield "                </ul>
            </div>
        </div>
    </div>

    <div id=\"harmony-panel-backdrop\" class=\"harmony-panel-backdrop\" aria-hidden=\"true\"></div>
    <aside id=\"harmony-side-panel\"
           class=\"harmony-side-panel\"
           role=\"dialog\"
           aria-modal=\"true\"
           aria-labelledby=\"harmony-panel-title\"
           aria-hidden=\"true\">
        <div class=\"harmony-panel-inner\">
            <h2 id=\"harmony-panel-title\" class=\"harmony-panel-title\">Nouvelle tâche</h2>
            <div id=\"harmony-panel-form-slot\"></div>
        </div>
    </aside>

    <template id=\"harmony-tpl-tache-form-new\">
        ";
        // line 234
        yield from $this->load("tache/_form_panel.html.twig", 234)->unwrap()->yield(CoreExtension::toArray(["form" => (isset($context["tacheFormNew"]) || array_key_exists("tacheFormNew", $context) ? $context["tacheFormNew"] : (function () { throw new RuntimeError('Variable "tacheFormNew" does not exist.', 234, $this->source); })()), "panel_mode" => "new"]));
        // line 235
        yield "    </template>
</div>

</main>
<script src=\"harmonie-chatbot-widget.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 242
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascripts"));

        // line 243
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/js/export-handler.js"), "html", null, true);
        yield "\"></script>
    <script>
    (function () {
        var root = document.getElementById('kanban-root');
        if (!root || typeof Sortable === 'undefined') return;

        var csrf = root.getAttribute('data-csrf');
        var urlTpl = root.getAttribute('data-url-template');
        if (!csrf || !urlTpl) return;

        function updateUrl(id) {
            return urlTpl.replace('888888888', String(id));
        }

        var backdrop = document.getElementById('harmony-panel-backdrop');
        var panel = document.getElementById('harmony-side-panel');
        var titleEl = document.getElementById('harmony-panel-title');
        var slot = document.getElementById('harmony-panel-form-slot');
        var tpl = document.getElementById('harmony-tpl-tache-form-new');
        var editTpl = root.getAttribute('data-edit-url-template') || '';
        var board = document.getElementById('kan-board-root');
        var suppressCardClickUntil = 0;

        function editUrl(id) {
            return editTpl.replace('888888888', String(id)) + '?panel=1';
        }

        function openPanel() {
            backdrop.classList.add('is-open');
            panel.classList.add('is-open');
            backdrop.setAttribute('aria-hidden', 'false');
            panel.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closePanel() {
            backdrop.classList.remove('is-open');
            panel.classList.remove('is-open');
            backdrop.setAttribute('aria-hidden', 'true');
            panel.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            if (slot) slot.innerHTML = '';
        }

        function bindCancel(scope) {
            var el = scope || document;
            el.querySelectorAll('.js-harmony-panel-cancel').forEach(function (btn) {
                btn.addEventListener('click', function () { closePanel(); });
            });
        }

        function bindAjaxForm(scope) {
            var form = scope.querySelector('#tache-panel-form');
            if (!form) return;
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                fetch(form.getAttribute('action') || form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },
                    credentials: 'same-origin'
                }).then(function (res) {
                    var ct = (res.headers.get('Content-Type') || '').toLowerCase();
                    if (ct.indexOf('application/json') !== -1) {
                        return res.json().then(function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                                return;
                            }
                            if (data.ok === false && data.error) {
                                window.alert(data.error);
                            }
                        });
                    }
                    return res.text().then(function (html) {
                        if (!slot) return;
                        slot.innerHTML = html;
                        bindCancel(slot);
                        bindAjaxForm(slot);
                    });
                }).catch(function () {
                    window.alert('Une erreur réseau est survenue.');
                });
            });
        }

        function mountNewForm() {
            if (!slot || !tpl || !tpl.content) return;
            slot.innerHTML = '';
            slot.appendChild(tpl.content.cloneNode(true));
            return slot.querySelector('#tache-panel-form');
        }

        function setTacheStatut(form, statut) {
            if (!form || !statut) return;
            var sel = form.querySelector('select[name=\"tache[statutTache]\"]');
            if (sel) sel.value = statut;
        }

        function openNew(statut) {
            if (titleEl) titleEl.textContent = 'Nouvelle tâche';
            var form = mountNewForm();
            if (form) {
                setTacheStatut(form, statut);
                bindCancel(slot);
                bindAjaxForm(slot);
            }
            openPanel();
        }

        function openEdit(id) {
            if (titleEl) titleEl.textContent = 'Modifier la tâche';
            if (!slot) return;
            slot.innerHTML = '<p style=\"color:#9590B8;font-size:14px;\">Chargement…</p>';
            openPanel();
            fetch(editUrl(id), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                credentials: 'same-origin'
            }).then(function (r) {
                if (!r.ok) throw new Error('HTTP ' + r.status);
                return r.text();
            }).then(function (html) {
                slot.innerHTML = html;
                bindCancel(slot);
                bindAjaxForm(slot);
            }).catch(function () {
                slot.innerHTML = '<p style=\"color:#dc2626;font-size:14px;\">Impossible de charger le formulaire.</p>';
            });
        }

        if (backdrop) {
            backdrop.addEventListener('click', function () { closePanel(); });
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && panel && panel.classList.contains('is-open')) {
                closePanel();
            }
        });

        document.querySelectorAll('.kan-col-list').forEach(function (list) {
            new Sortable(list, {
                group: 'taches-kanban',
                animation: 160,
                draggable: '.kan-card',
                filter: '.kan-card-actions, .kan-card-actions *',
                preventOnFilter: false,
                distance: 8,
                ghostClass: 'sortable-ghost',
                dragClass: 'sortable-drag',
                emptyInsertThreshold: 40,
                fallbackTolerance: 4,
                onEnd: function (evt) {
                    suppressCardClickUntil = Date.now() + 400;
                    if (evt.from === evt.to) {
                        return;
                    }

                    var item = evt.item;
                    var id = item.getAttribute('data-tache-id');
                    var newStatut = evt.to.getAttribute('data-statut');
                    if (!id || !newStatut) return;

                    fetch(updateUrl(id), {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify({ statut: newStatut, _token: csrf })
                    }).then(function (res) {
                        if (!res.ok) {
                            throw new Error('HTTP ' + res.status);
                        }
                        return res.json();
                    }).then(function (data) {
                        if (!data.ok) {
                            throw new Error(data.error || 'Erreur');
                        }
                    }).catch(function () {
                        alert('Impossible d’enregistrer le déplacement. La page va se recharger.');
                        window.location.reload();
                    });
                }
            });
        });

        /* Clic « ajouter » : phase capture pour passer avant Sortable (qui bloquait le click sur la liste). */
        board.querySelectorAll('.js-kan-col-zone').forEach(function (zone) {
            zone.addEventListener('click', function (e) {
                if (e.target.closest('.kan-card')) return;
                if (e.target.closest('a')) return;
                if (e.target.closest('button')) return;
                var col = zone.closest('.kan-col');
                var st = col ? col.getAttribute('data-statut') : null;
                if (st) {
                    e.stopPropagation();
                    openNew(st);
                }
            }, true);
            zone.addEventListener('keydown', function (e) {
                if (e.key !== 'Enter' && e.key !== ' ') return;
                e.preventDefault();
                var col = zone.closest('.kan-col');
                var st = col ? col.getAttribute('data-statut') : null;
                if (st) openNew(st);
            });
        });

        if (board) {
            board.addEventListener('click', function (e) {
                if (e.target.closest('.kan-card-actions a')) return;
                var card = e.target.closest('.kan-card');
                if (!card || Date.now() < suppressCardClickUntil) return;
                var id = card.getAttribute('data-tache-id');
                if (id) openEdit(id);
            });
        }
    })();
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    public function macro_kan_card($tache = null, $today = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "tache" => $tache,
            "today" => $today,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "kan_card"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "kan_card"));

            // line 4
            yield "    ";
            $context["dl"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 4, $this->source); })()), "deadline", [], "any", false, false, false, 4);
            // line 5
            yield "    ";
            $context["is_overdue"] = (((isset($context["dl"]) || array_key_exists("dl", $context) ? $context["dl"] : (function () { throw new RuntimeError('Variable "dl" does not exist.', 5, $this->source); })()) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dl"]) || array_key_exists("dl", $context) ? $context["dl"] : (function () { throw new RuntimeError('Variable "dl" does not exist.', 5, $this->source); })()), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 5, $this->source); })()), "Y-m-d"))) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 5, $this->source); })()), "statutTache", [], "any", false, false, false, 5) != "TERMINEE"));
            // line 6
            yield "    <li class=\"kan-card\" data-tache-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
            yield "\">
        <h3 class=\"kan-card-title\"><span class=\"kan-card-title-text\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
            yield "</span></h3>
        ";
            // line 8
            if ((($tmp = (isset($context["dl"]) || array_key_exists("dl", $context) ? $context["dl"] : (function () { throw new RuntimeError('Variable "dl" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "            <div class=\"kan-card-meta";
                if ((($tmp = (isset($context["is_overdue"]) || array_key_exists("is_overdue", $context) ? $context["is_overdue"] : (function () { throw new RuntimeError('Variable "is_overdue" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " overdue";
                }
                if (((isset($context["is_overdue"]) || array_key_exists("is_overdue", $context) ? $context["is_overdue"] : (function () { throw new RuntimeError('Variable "is_overdue" does not exist.', 9, $this->source); })()) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dl"]) || array_key_exists("dl", $context) ? $context["dl"] : (function () { throw new RuntimeError('Variable "dl" does not exist.', 9, $this->source); })()), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 9, $this->source); })()), "-7 days"), "Y-m-d")))) {
                    yield " late";
                }
                yield "\">
                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" aria-hidden=\"true\">
                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\"/><path d=\"M16 2v4M8 2v4M3 10h18\"/>
                </svg>
                <span>";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dl"]) || array_key_exists("dl", $context) ? $context["dl"] : (function () { throw new RuntimeError('Variable "dl" does not exist.', 13, $this->source); })()), "d/m/Y"), "html", null, true);
                yield "</span>
            </div>
        ";
            }
            // line 16
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 16, $this->source); })()), "notes", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "            <p class=\"kan-card-notes\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 17, $this->source); })()), "notes", [], "any", false, false, false, 17), "html", null, true);
                yield "</p>
        ";
            }
            // line 19
            yield "        <div class=\"kan-card-actions\">
            <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"kan-card-icon-link\" title=\"Voir\" aria-label=\"Voir la tâche\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"/><circle cx=\"12\" cy=\"12\" r=\"3\"/></svg>
            </a>
            <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" class=\"kan-card-icon-link\" title=\"Modifier\" aria-label=\"Modifier la tâche\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 20h9\"/><path d=\"M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z\"/></svg>
            </a>
        </div>
    </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tache/index.html.twig";
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
        return array (  727 => 23,  721 => 20,  718 => 19,  712 => 17,  709 => 16,  703 => 13,  690 => 9,  688 => 8,  684 => 7,  679 => 6,  676 => 5,  673 => 4,  654 => 3,  422 => 244,  419 => 243,  406 => 242,  390 => 235,  388 => 234,  367 => 215,  358 => 213,  354 => 212,  344 => 204,  335 => 202,  331 => 201,  321 => 193,  312 => 191,  308 => 190,  295 => 180,  286 => 174,  281 => 172,  277 => 171,  273 => 170,  268 => 167,  266 => 166,  253 => 165,  114 => 36,  110 => 35,  105 => 34,  92 => 33,  69 => 31,  58 => 1,  56 => 29,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% macro kan_card(tache, today) %}
    {% set dl = tache.deadline %}
    {% set is_overdue = dl and dl|date('Y-m-d') < today|date('Y-m-d') and tache.statutTache != 'TERMINEE' %}
    <li class=\"kan-card\" data-tache-id=\"{{ tache.id }}\">
        <h3 class=\"kan-card-title\"><span class=\"kan-card-title-text\">{{ tache.nom }}</span></h3>
        {% if dl %}
            <div class=\"kan-card-meta{% if is_overdue %} overdue{% endif %}{% if is_overdue and dl|date('Y-m-d') < today|date_modify('-7 days')|date('Y-m-d') %} late{% endif %}\">
                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" aria-hidden=\"true\">
                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\"/><path d=\"M16 2v4M8 2v4M3 10h18\"/>
                </svg>
                <span>{{ dl|date('d/m/Y') }}</span>
            </div>
        {% endif %}
        {% if tache.notes %}
            <p class=\"kan-card-notes\">{{ tache.notes }}</p>
        {% endif %}
        <div class=\"kan-card-actions\">
            <a href=\"{{ path('app_tache_show', {id: tache.id}) }}\" class=\"kan-card-icon-link\" title=\"Voir\" aria-label=\"Voir la tâche\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"/><circle cx=\"12\" cy=\"12\" r=\"3\"/></svg>
            </a>
            <a href=\"{{ path('app_tache_edit', {id: tache.id}) }}\" class=\"kan-card-icon-link\" title=\"Modifier\" aria-label=\"Modifier la tâche\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 20h9\"/><path d=\"M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z\"/></svg>
            </a>
        </div>
    </li>
{% endmacro %}
{% import _self as kan %}

{% block title %}Tâches — Kanban{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('harmonie/css/harmony-theme.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('harmonie/css/harmony-panel.css') }}\" rel=\"stylesheet\">
    <style>
        .kan-page { max-width: 1120px; margin: 0 auto; }
        .kan-top {
            display: flex; flex-wrap: wrap; align-items: flex-start;
            justify-content: space-between; gap: 16px; margin-bottom: 20px;
        }
        .kan-advice {
            font-size: 13px; color: var(--text-muted, #9590B8); max-width: 62%;
            line-height: 1.5;
        }
        .kan-advice strong { color: var(--text-mid, #4A4570); font-weight: 600; }
        .kan-export-wrap { position: relative; margin-left: auto; }
        .kan-export-summary {
            list-style: none; cursor: pointer;
            padding: 8px 16px; border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: linear-gradient(180deg, #fafafa, #f3f4f6);
            font-size: 13px; font-weight: 500; color: var(--text-mid, #4A4570);
        }
        .kan-export-summary::-webkit-details-marker { display: none; }
        .kan-export-menu {
            position: absolute; right: 0; top: calc(100% + 6px);
            background: var(--white, #fff); border: 1px solid var(--border, rgba(106,90,205,.12));
            border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,.08);
            min-width: 200px; padding: 6px; z-index: 50;
        }
        .kan-export-menu a {
            display: block; padding: 10px 12px; border-radius: 8px;
            color: var(--text, #1C1733); text-decoration: none; font-size: 14px;
        }
        .kan-export-menu a:hover { background: var(--purple-pale, #EDE8FA); color: var(--purple, #6A5ACD); }

        .kan-board {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;
            align-items: stretch;
        }
        @media (max-width: 960px) { .kan-board { grid-template-columns: 1fr; } }

        .kan-col {
            background: rgba(255,255,255,.7); border: 1px solid var(--border, rgba(106,90,205,.12));
            border-radius: 18px; padding: 16px 14px 20px;
            min-height: 280px; position: relative;
            box-shadow: 0 2px 16px rgba(106,90,205,.06);
            display: flex; flex-direction: column;
        }
        .kan-col-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 200px;
            margin-top: 4px;
            padding: 10px 8px 12px;
            border-radius: 14px;
            border: 1px dashed rgba(124, 58, 237, 0.22);
            background: rgba(255, 255, 255, 0.35);
            transition: border-color 0.2s ease, background 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;
        }
        .kan-col-body:hover {
            border-color: rgba(124, 58, 237, 0.45);
            background: rgba(255, 255, 255, 0.75);
            box-shadow: inset 0 0 0 1px rgba(124, 58, 237, 0.08);
        }
        .kan-col-body:focus-visible {
            outline: 2px solid #7c3aed;
            outline-offset: 2px;
        }
        .kan-col-title {
            font-family: var(--font-head, 'Syne', sans-serif); font-weight: 800; font-size: 13px;
            letter-spacing: 0.06em; text-transform: uppercase;
            color: var(--text-muted, #9590B8); margin: 0 0 10px 4px;
        }
        .kan-col--doing { min-height: 320px; }
        .kan-col-list {
            list-style: none; margin: 0; padding: 0;
            flex: 1; min-height: 140px;
        }
        .kan-col-list--doing { position: relative; }
        .kan-card {
            background: var(--white, #fff); border-radius: 14px;
            padding: 14px 14px 12px;
            box-shadow: 0 4px 14px rgba(0,0,0,.06);
            border: 1px solid rgba(124,58,237,.1);
            margin-bottom: 12px;
            cursor: grab;
        }
        .kan-card:active { cursor: grabbing; }
        .kan-card-title { font-weight: 700; font-size: 15px; color: var(--text, #1C1733); margin: 0 0 10px; line-height: 1.3; }
        .kan-card-title-text { cursor: pointer; }
        .kan-card-title-text:hover { color: var(--purple, #6A5ACD); }
        .kan-card-meta {
            display: flex; align-items: center; gap: 6px; font-size: 13px;
            color: #7c3aed; font-weight: 500; margin-bottom: 6px;
        }
        .kan-card-meta.overdue { color: #ea580c; font-weight: 600; }
        .kan-card-meta.late { color: #dc2626; font-weight: 600; }
        .kan-card-notes { font-size: 13px; color: var(--text-muted, #9590B8); line-height: 1.4; }
        .kan-card-actions {
            margin-top: 10px;
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 12px;
        }
        .kan-card-icon-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px;
            border-radius: 10px;
            color: var(--purple, #6A5ACD);
            text-decoration: none;
            transition: background 0.15s ease, color 0.15s ease;
        }
        .kan-card-icon-link:hover {
            background: var(--purple-pale, #EDE8FA);
            color: #5b21b6;
        }
        .kan-card-icon-link:focus-visible {
            outline: 2px solid #7c3aed;
            outline-offset: 2px;
        }

        .kan-col-list.sortable-drag { min-height: 40px; }
        .kan-card.sortable-ghost { opacity: 0.45; }
    </style>
{% endblock %}

{% block body %}
{% include '_planning_topbar.html.twig' %}
<main class=\"page\">
<div class=\"kan-page\"
     id=\"kanban-root\"
     data-csrf=\"{{ csrf_token('tache_dnd') }}\"
     data-url-template=\"{{ path('app_tache_update_statut', {id: 888888888})|e('html_attr') }}\"
     data-edit-url-template=\"{{ path('app_tache_edit', { id: 888888888 })|e('html_attr') }}\">
    <div class=\"kan-top\">
        <p class=\"kan-advice\"><strong>Conseil du jour :</strong> {{ advice }}</p>
        <details class=\"kan-export-wrap\">
            <summary class=\"kan-export-summary\">Exporter ▾</summary>
            <div class=\"kan-export-menu\">
                <a href=\"#\" class=\"js-kanban-export-pdf\" data-type=\"pdf\">Exporter en PDF</a>
                <a href=\"#\" class=\"js-kanban-export-excel\" data-type=\"excel\">Exporter en Excel</a>
                <a href=\"{{ path('app_tache_export_csv') }}\">Télécharger CSV (legacy)</a>
            </div>
        </details>
    </div>

    <div class=\"kan-board\" id=\"kan-board-root\">
        <div class=\"kan-col\" data-statut=\"A_FAIRE\">
            <h2 class=\"kan-col-title\">TODO</h2>
            <div class=\"kan-col-body js-kan-col-zone\" tabindex=\"0\" aria-label=\"Colonne À faire — clic dans la zone vide pour ajouter une tâche. Glisser une carte pour la déplacer.\">
                <ul class=\"kan-col-list\" data-statut=\"A_FAIRE\" aria-label=\"À faire\">
                    {% for tache in columns.A_FAIRE %}
                        {{ kan.kan_card(tache, today) }}
                    {% endfor %}
                </ul>
            </div>
        </div>

        <div class=\"kan-col kan-col--doing\" data-statut=\"EN_COURS\">
            <h2 class=\"kan-col-title\">DOING</h2>
            <div class=\"kan-col-body js-kan-col-zone\" tabindex=\"0\" aria-label=\"Colonne En cours\">
                <ul class=\"kan-col-list kan-col-list--doing\" data-statut=\"EN_COURS\" aria-label=\"En cours\">
                    {% for tache in columns.EN_COURS %}
                        {{ kan.kan_card(tache, today) }}
                    {% endfor %}
                </ul>
            </div>
        </div>

        <div class=\"kan-col\" data-statut=\"TERMINEE\">
            <h2 class=\"kan-col-title\">DONE</h2>
            <div class=\"kan-col-body js-kan-col-zone\" tabindex=\"0\" aria-label=\"Colonne Terminées\">
                <ul class=\"kan-col-list\" data-statut=\"TERMINEE\" aria-label=\"Terminées\">
                    {% for tache in columns.TERMINEE %}
                        {{ kan.kan_card(tache, today) }}
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>

    <div id=\"harmony-panel-backdrop\" class=\"harmony-panel-backdrop\" aria-hidden=\"true\"></div>
    <aside id=\"harmony-side-panel\"
           class=\"harmony-side-panel\"
           role=\"dialog\"
           aria-modal=\"true\"
           aria-labelledby=\"harmony-panel-title\"
           aria-hidden=\"true\">
        <div class=\"harmony-panel-inner\">
            <h2 id=\"harmony-panel-title\" class=\"harmony-panel-title\">Nouvelle tâche</h2>
            <div id=\"harmony-panel-form-slot\"></div>
        </div>
    </aside>

    <template id=\"harmony-tpl-tache-form-new\">
        {% include 'tache/_form_panel.html.twig' with { form: tacheFormNew, panel_mode: 'new' } only %}
    </template>
</div>

</main>
<script src=\"harmonie-chatbot-widget.js\"></script>
{% endblock %}

{% block body_javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset('harmonie/js/export-handler.js') }}\"></script>
    <script>
    (function () {
        var root = document.getElementById('kanban-root');
        if (!root || typeof Sortable === 'undefined') return;

        var csrf = root.getAttribute('data-csrf');
        var urlTpl = root.getAttribute('data-url-template');
        if (!csrf || !urlTpl) return;

        function updateUrl(id) {
            return urlTpl.replace('888888888', String(id));
        }

        var backdrop = document.getElementById('harmony-panel-backdrop');
        var panel = document.getElementById('harmony-side-panel');
        var titleEl = document.getElementById('harmony-panel-title');
        var slot = document.getElementById('harmony-panel-form-slot');
        var tpl = document.getElementById('harmony-tpl-tache-form-new');
        var editTpl = root.getAttribute('data-edit-url-template') || '';
        var board = document.getElementById('kan-board-root');
        var suppressCardClickUntil = 0;

        function editUrl(id) {
            return editTpl.replace('888888888', String(id)) + '?panel=1';
        }

        function openPanel() {
            backdrop.classList.add('is-open');
            panel.classList.add('is-open');
            backdrop.setAttribute('aria-hidden', 'false');
            panel.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closePanel() {
            backdrop.classList.remove('is-open');
            panel.classList.remove('is-open');
            backdrop.setAttribute('aria-hidden', 'true');
            panel.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            if (slot) slot.innerHTML = '';
        }

        function bindCancel(scope) {
            var el = scope || document;
            el.querySelectorAll('.js-harmony-panel-cancel').forEach(function (btn) {
                btn.addEventListener('click', function () { closePanel(); });
            });
        }

        function bindAjaxForm(scope) {
            var form = scope.querySelector('#tache-panel-form');
            if (!form) return;
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                fetch(form.getAttribute('action') || form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },
                    credentials: 'same-origin'
                }).then(function (res) {
                    var ct = (res.headers.get('Content-Type') || '').toLowerCase();
                    if (ct.indexOf('application/json') !== -1) {
                        return res.json().then(function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                                return;
                            }
                            if (data.ok === false && data.error) {
                                window.alert(data.error);
                            }
                        });
                    }
                    return res.text().then(function (html) {
                        if (!slot) return;
                        slot.innerHTML = html;
                        bindCancel(slot);
                        bindAjaxForm(slot);
                    });
                }).catch(function () {
                    window.alert('Une erreur réseau est survenue.');
                });
            });
        }

        function mountNewForm() {
            if (!slot || !tpl || !tpl.content) return;
            slot.innerHTML = '';
            slot.appendChild(tpl.content.cloneNode(true));
            return slot.querySelector('#tache-panel-form');
        }

        function setTacheStatut(form, statut) {
            if (!form || !statut) return;
            var sel = form.querySelector('select[name=\"tache[statutTache]\"]');
            if (sel) sel.value = statut;
        }

        function openNew(statut) {
            if (titleEl) titleEl.textContent = 'Nouvelle tâche';
            var form = mountNewForm();
            if (form) {
                setTacheStatut(form, statut);
                bindCancel(slot);
                bindAjaxForm(slot);
            }
            openPanel();
        }

        function openEdit(id) {
            if (titleEl) titleEl.textContent = 'Modifier la tâche';
            if (!slot) return;
            slot.innerHTML = '<p style=\"color:#9590B8;font-size:14px;\">Chargement…</p>';
            openPanel();
            fetch(editUrl(id), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                credentials: 'same-origin'
            }).then(function (r) {
                if (!r.ok) throw new Error('HTTP ' + r.status);
                return r.text();
            }).then(function (html) {
                slot.innerHTML = html;
                bindCancel(slot);
                bindAjaxForm(slot);
            }).catch(function () {
                slot.innerHTML = '<p style=\"color:#dc2626;font-size:14px;\">Impossible de charger le formulaire.</p>';
            });
        }

        if (backdrop) {
            backdrop.addEventListener('click', function () { closePanel(); });
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && panel && panel.classList.contains('is-open')) {
                closePanel();
            }
        });

        document.querySelectorAll('.kan-col-list').forEach(function (list) {
            new Sortable(list, {
                group: 'taches-kanban',
                animation: 160,
                draggable: '.kan-card',
                filter: '.kan-card-actions, .kan-card-actions *',
                preventOnFilter: false,
                distance: 8,
                ghostClass: 'sortable-ghost',
                dragClass: 'sortable-drag',
                emptyInsertThreshold: 40,
                fallbackTolerance: 4,
                onEnd: function (evt) {
                    suppressCardClickUntil = Date.now() + 400;
                    if (evt.from === evt.to) {
                        return;
                    }

                    var item = evt.item;
                    var id = item.getAttribute('data-tache-id');
                    var newStatut = evt.to.getAttribute('data-statut');
                    if (!id || !newStatut) return;

                    fetch(updateUrl(id), {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify({ statut: newStatut, _token: csrf })
                    }).then(function (res) {
                        if (!res.ok) {
                            throw new Error('HTTP ' + res.status);
                        }
                        return res.json();
                    }).then(function (data) {
                        if (!data.ok) {
                            throw new Error(data.error || 'Erreur');
                        }
                    }).catch(function () {
                        alert('Impossible d’enregistrer le déplacement. La page va se recharger.');
                        window.location.reload();
                    });
                }
            });
        });

        /* Clic « ajouter » : phase capture pour passer avant Sortable (qui bloquait le click sur la liste). */
        board.querySelectorAll('.js-kan-col-zone').forEach(function (zone) {
            zone.addEventListener('click', function (e) {
                if (e.target.closest('.kan-card')) return;
                if (e.target.closest('a')) return;
                if (e.target.closest('button')) return;
                var col = zone.closest('.kan-col');
                var st = col ? col.getAttribute('data-statut') : null;
                if (st) {
                    e.stopPropagation();
                    openNew(st);
                }
            }, true);
            zone.addEventListener('keydown', function (e) {
                if (e.key !== 'Enter' && e.key !== ' ') return;
                e.preventDefault();
                var col = zone.closest('.kan-col');
                var st = col ? col.getAttribute('data-statut') : null;
                if (st) openNew(st);
            });
        });

        if (board) {
            board.addEventListener('click', function (e) {
                if (e.target.closest('.kan-card-actions a')) return;
                var card = e.target.closest('.kan-card');
                if (!card || Date.now() < suppressCardClickUntil) return;
                var id = card.getAttribute('data-tache-id');
                if (id) openEdit(id);
            });
        }
    })();
    </script>
{% endblock %}
", "tache/index.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/tache/index.html.twig");
    }
}

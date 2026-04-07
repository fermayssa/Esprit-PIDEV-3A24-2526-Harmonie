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

/* admin/sport.html.twig */
class __TwigTemplate_759db769977b990e0f7c406fa271de3f extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sport.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Gestion Sport — Harmony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "🏋️ Gestion du Sport";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    :root {
        --spt-green: #10B981; --spt-green-dark: #059669; --spt-green-pale: #D1FAE5;
        --spt-blue: #3B82F6; --spt-orange: #F59E0B; --spt-red: #EF4444;
    }

    /* ── TOOLBAR ── */
    .s-toolbar {
        display: flex; align-items: center; gap: 12px; margin-bottom: 22px; flex-wrap: wrap;
        background: var(--white); border: 1px solid var(--border); border-radius: 14px; padding: 14px 18px;
    }
    .s-search-wrap { position: relative; flex: 1; min-width: 200px; }
    .s-search-wrap .si { position: absolute; left: 13px; top: 50%; transform: translateY(-50%); font-size: 14px; pointer-events: none; opacity: .5; }
    .s-search { width: 100%; padding: 9px 14px 9px 40px; border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13.5px; color: var(--text); background: var(--purple-ghost); outline: none; transition: border-color .15s; }
    .s-search:focus { border-color: var(--spt-green); background: #fff; }
    .s-select { padding: 9px 13px; border: 1.5px solid var(--border); border-radius: 10px; font-size: 13px; font-family: var(--font-body); color: var(--text); background: var(--purple-ghost); outline: none; cursor: pointer; }
    .s-select:focus { border-color: var(--spt-green); }
    .view-toggle { display: flex; border: 1.5px solid var(--border); border-radius: 10px; overflow: hidden; }
    .view-btn { padding: 8px 14px; background: none; border: none; cursor: pointer; font-size: 12.5px; font-weight: 500; color: var(--text-muted); font-family: var(--font-body); transition: .12s; }
    .view-btn.active { background: var(--spt-green-pale); color: var(--spt-green-dark); }
    .btn-add-ex { display: inline-flex; align-items: center; gap: 7px; padding: 10px 20px; background: linear-gradient(135deg, var(--spt-green), var(--spt-green-dark)); color: #fff; border: none; border-radius: 10px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 14px rgba(16,185,129,.35); transition: .15s; white-space: nowrap; }
    .btn-add-ex:hover { transform: translateY(-1px); }

    /* ── STATS ── */
    .s-stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; margin-bottom: 22px; }
    .s-stat { background: var(--white); border: 1px solid var(--border); border-radius: 14px; padding: 18px 20px; display: flex; align-items: center; gap: 14px; transition: box-shadow .2s; }
    .s-stat:hover { box-shadow: 0 4px 18px rgba(0,0,0,.07); }
    .s-stat-icon { width: 44px; height: 44px; border-radius: 12px; display: grid; place-items: center; font-size: 20px; flex-shrink: 0; }
    .s-stat-val { font-family: var(--font-head); font-size: 26px; font-weight: 800; color: var(--text); line-height: 1; }
    .s-stat-lbl { font-size: 11.5px; color: var(--text-muted); margin-top: 3px; }

    /* ── GRID ── */
    .ex-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 18px; }
    .ex-card { background: var(--white); border: 1.5px solid var(--border); border-radius: 18px; overflow: hidden; transition: border-color .2s, transform .2s, box-shadow .2s; }
    .ex-card:hover { transform: translateY(-4px); box-shadow: 0 12px 36px rgba(0,0,0,.1); border-color: var(--spt-green); }
    .video-thumb { height: 110px; background: linear-gradient(135deg, #1a1a2e, #16213e); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; cursor: pointer; }
    .video-thumb::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(16,185,129,.15), rgba(59,130,246,.15)); }
    .play-btn { width: 46px; height: 46px; border-radius: 50%; background: rgba(255,255,255,.15); backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; border: 2px solid rgba(255,255,255,.3); transition: .2s; z-index: 1; }
    .play-btn:hover { background: rgba(16,185,129,.6); transform: scale(1.1); }
    .play-btn svg { width: 18px; height: 18px; fill: #fff; margin-left: 2px; }
    .no-video-msg { color: rgba(255,255,255,.4); font-size: 12px; z-index: 1; }
    .ex-body { padding: 14px 16px; }
    .ex-name { font-family: var(--font-head); font-size: 14.5px; font-weight: 700; color: var(--text); margin-bottom: 8px; }
    .ex-type-badge { display: inline-block; font-size: 10px; padding: 3px 10px; border-radius: 20px; font-weight: 600; background: var(--spt-green-pale); color: var(--spt-green-dark); }
    .ex-video-link { display: block; margin-top: 8px; font-size: 12px; color: var(--spt-green); text-decoration: none; word-break: break-all; }
    .ex-video-link:hover { text-decoration: underline; }
    .no-video-text { font-size: 12px; color: var(--text-muted); margin-top: 8px; }
    .ex-footer { padding: 10px 14px; border-top: 1px solid var(--border); display: flex; gap: 8px; }
    .btn-ex { flex: 1; padding: 7px; border-radius: 9px; font-size: 12px; font-weight: 600; border: 1.5px solid var(--border); cursor: pointer; background: none; font-family: var(--font-body); transition: .12s; text-align: center; }
    .btn-ex-edit { color: var(--purple); }
    .btn-ex-edit:hover { background: var(--purple-pale); border-color: var(--purple); }
    .btn-ex-del { color: #E05252; }
    .btn-ex-del:hover { background: #FEE2E2; border-color: #FCA5A5; }

    /* ── LIST VIEW ── */
    .s-table-card { background: var(--white); border: 1px solid var(--border); border-radius: 18px; overflow: hidden; }
    table.s-table { width: 100%; border-collapse: collapse; }
    table.s-table th { padding: 11px 16px; text-align: left; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .7px; color: var(--text-muted); background: var(--purple-ghost); border-bottom: 1px solid var(--border); cursor: pointer; user-select: none; white-space: nowrap; }
    table.s-table th:hover { color: var(--spt-green); }
    table.s-table th.sorted { color: var(--spt-green); }
    table.s-table td { padding: 12px 16px; font-size: 13.5px; color: var(--text); border-bottom: 1px solid var(--purple-ghost); vertical-align: middle; }
    table.s-table tr:last-child td { border: none; }
    table.s-table tr:hover td { background: rgba(16,185,129,.04); }
    .vid-link { color: var(--spt-green); font-size: 12px; text-decoration: none; }
    .vid-link:hover { text-decoration: underline; }
    .no-vid { color: var(--text-muted); font-size: 12px; }
    .act-row { display: flex; gap: 6px; }
    .btn-sm-act { padding: 5px 11px; border-radius: 8px; font-size: 12px; font-weight: 500; border: 1.5px solid var(--border); cursor: pointer; background: none; font-family: var(--font-body); transition: .12s; }
    .btn-sm-edit { color: var(--purple); }
    .btn-sm-edit:hover { background: var(--purple-pale); border-color: var(--purple); }
    .btn-sm-del { color: #E05252; }
    .btn-sm-del:hover { background: #FEE2E2; border-color: #FCA5A5; }
    .empty-state-ex { text-align: center; padding: 50px; color: var(--text-muted); font-size: 14px; }

    /* ── MODAL ── */
    .s-modal-overlay { position: fixed; inset: 0; background: rgba(10,8,28,.55); display: flex; align-items: center; justify-content: center; z-index: 2000; backdrop-filter: blur(6px); opacity: 0; pointer-events: none; transition: opacity .2s; }
    .s-modal-overlay.open { opacity: 1; pointer-events: all; }
    .s-modal { background: var(--white); border-radius: 22px; width: 520px; max-width: 95vw; max-height: 92vh; overflow-y: auto; box-shadow: 0 32px 80px rgba(0,0,0,.22); transform: scale(.95) translateY(14px); transition: transform .25s; }
    .s-modal-overlay.open .s-modal { transform: scale(1) translateY(0); }
    .s-modal-header { padding: 22px 26px 18px; border-bottom: 1px solid var(--border); display: flex; align-items: center; justify-content: space-between; background: linear-gradient(135deg, #F0FDF4, #ECFDF5); }
    .s-modal-title { font-family: var(--font-head); font-size: 17px; font-weight: 800; color: var(--text); }
    .s-modal-close { background: none; border: none; cursor: pointer; font-size: 20px; color: var(--text-muted); width: 32px; height: 32px; border-radius: 8px; display: grid; place-items: center; transition: .12s; }
    .s-modal-close:hover { background: var(--spt-green-pale); color: var(--spt-green); }
    .s-modal-body { padding: 24px 26px; }
    .s-form-group { display: flex; flex-direction: column; gap: 5px; margin-bottom: 14px; }
    .s-form-group label { font-size: 12px; font-weight: 600; color: var(--text-mid); }
    .s-form-group input, .s-form-group select, .s-form-group textarea { padding: 10px 13px; border: 1.5px solid var(--border); border-radius: 10px; font-size: 14px; font-family: var(--font-body); color: var(--text); background: var(--purple-ghost); outline: none; transition: border-color .15s, box-shadow .15s; width: 100%; }
    .s-form-group input:focus, .s-form-group select:focus, .s-form-group textarea:focus { border-color: var(--spt-green); background: #fff; box-shadow: 0 0 0 3px rgba(16,185,129,.12); }
    .s-form-group.has-err input, .s-form-group.has-err select { border-color: var(--spt-red); }
    .s-form-group .err-msg { font-size: 11.5px; color: var(--spt-red); display: none; font-weight: 500; }
    .s-form-group.has-err .err-msg { display: block; }
    .req-star { color: var(--spt-red); }
    .url-preview-box { margin-top: 8px; padding: 9px 12px; background: var(--purple-ghost); border-radius: 9px; font-size: 12px; color: var(--text-muted); word-break: break-all; display: none; border: 1px dashed var(--border); }
    .url-preview-box.show { display: block; }
    .s-modal-footer { padding: 16px 26px; border-top: 1px solid var(--border); display: flex; justify-content: flex-end; gap: 10px; background: var(--purple-ghost); border-radius: 0 0 22px 22px; }
    .btn-s-cancel { padding: 10px 20px; background: var(--white); border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13px; cursor: pointer; color: var(--text-mid); }
    .btn-s-save { padding: 10px 24px; background: linear-gradient(135deg, var(--spt-green), var(--spt-green-dark)); color: #fff; border: none; border-radius: 10px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 14px rgba(16,185,129,.35); transition: .15s; }
    .btn-s-save:hover { transform: translateY(-1px); }

    /* Delete modal */
    .del-overlay { position: fixed; inset: 0; background: rgba(10,8,28,.55); display: flex; align-items: center; justify-content: center; z-index: 3000; backdrop-filter: blur(6px); opacity: 0; pointer-events: none; transition: opacity .2s; }
    .del-overlay.open { opacity: 1; pointer-events: all; }
    .del-box { background: var(--white); border-radius: 20px; width: 400px; max-width: 95vw; padding: 32px; box-shadow: 0 32px 80px rgba(0,0,0,.22); text-align: center; transform: scale(.92); transition: transform .2s; }
    .del-overlay.open .del-box { transform: scale(1); }
    .del-icon { font-size: 48px; margin-bottom: 12px; }
    .del-title { font-family: var(--font-head); font-size: 18px; font-weight: 800; color: var(--text); margin-bottom: 8px; }
    .del-sub { font-size: 13px; color: var(--text-muted); margin-bottom: 24px; line-height: 1.5; }
    .del-actions { display: flex; gap: 10px; justify-content: center; }
    .btn-del-cancel { padding: 10px 22px; background: var(--purple-ghost); border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13px; cursor: pointer; color: var(--text-mid); }
    .btn-del-confirm { padding: 10px 22px; background: #EF4444; color: #fff; border: none; border-radius: 10px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; }

    /* Toast */
    .toast { position: fixed; bottom: 28px; right: 28px; padding: 13px 20px; border-radius: 12px; font-size: 13.5px; font-weight: 600; color: #fff; box-shadow: 0 8px 28px rgba(0,0,0,.2); z-index: 9999; transform: translateY(20px); opacity: 0; transition: all .3s; pointer-events: none; }
    .toast.show { transform: translateY(0); opacity: 1; }
    .toast.success { background: var(--spt-green); }
    .toast.error { background: var(--spt-red); }

    @keyframes cardIn { from { opacity:0; transform:translateY(14px); } to { opacity:1; transform:none; } }
    .card-anim { animation: cardIn .25s ease both; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
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

        // line 129
        yield "
<div class=\"s-toolbar\">
    <div class=\"s-search-wrap\">
        <span class=\"si\">🔍</span>
        <input type=\"text\" class=\"s-search\" id=\"exSearch\" placeholder=\"Rechercher par nom ou type…\" oninput=\"filterEx()\">
    </div>
    <select class=\"s-select\" id=\"typeFilter\" onchange=\"filterEx()\">
        <option value=\"\">Tous les types</option>
    </select>
    <select class=\"s-select\" id=\"sortSelectEx\" onchange=\"filterEx()\">
        <option value=\"\">Trier par…</option>
        <option value=\"nom_asc\">Nom A → Z</option>
        <option value=\"nom_desc\">Nom Z → A</option>
        <option value=\"type_asc\">Type A → Z</option>
    </select>
    <div class=\"view-toggle\">
        <button class=\"view-btn active\" id=\"btnGrid\" onclick=\"setView('grid')\">⊞ Grille</button>
        <button class=\"view-btn\" id=\"btnList\" onclick=\"setView('list')\">≡ Liste</button>
    </div>
    <button class=\"btn-add-ex\" onclick=\"openExModal()\">＋ Ajouter un exercice</button>
</div>

<!-- STATS -->
<div class=\"s-stats\">
    <div class=\"s-stat\">
        <div class=\"s-stat-icon\" style=\"background:#D1FAE5;\">🏋️</div>
        <div><div class=\"s-stat-val\" id=\"s-total\">—</div><div class=\"s-stat-lbl\">Total exercices</div></div>
    </div>
    <div class=\"s-stat\">
        <div class=\"s-stat-icon\" style=\"background:#DBEAFE;\">🏷️</div>
        <div><div class=\"s-stat-val\" id=\"s-types\">—</div><div class=\"s-stat-lbl\">Types distincts</div></div>
    </div>
    <div class=\"s-stat\">
        <div class=\"s-stat-icon\" style=\"background:#FEF3C7;\">🎬</div>
        <div><div class=\"s-stat-val\" id=\"s-videos\">—</div><div class=\"s-stat-lbl\">Avec vidéo</div></div>
    </div>
    <div class=\"s-stat\">
        <div class=\"s-stat-icon\" style=\"background:#EDE9FE;\">📊</div>
        <div><div class=\"s-stat-val\" id=\"s-affiches\">—</div><div class=\"s-stat-lbl\">Affichés</div></div>
    </div>
</div>

<!-- GRID VIEW -->
<div id=\"gridView\" class=\"ex-grid\"></div>

<!-- LIST VIEW -->
<div id=\"listView\" class=\"s-table-card\" style=\"display:none;\">
    <table class=\"s-table\">
        <thead>
        <tr>
            <th onclick=\"colSortEx('nom')\">Nom ↕</th>
            <th onclick=\"colSortEx('type')\">Type ↕</th>
            <th>Vidéo / URL</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody id=\"listBody\"></tbody>
    </table>
</div>

<!-- MODAL ADD/EDIT -->
<div class=\"s-modal-overlay\" id=\"exModalOverlay\" onclick=\"if(event.target===this)closeExModal()\">
    <div class=\"s-modal\">
        <div class=\"s-modal-header\">
            <div class=\"s-modal-title\" id=\"exModalTitle\">🏋️ Ajouter un exercice</div>
            <button class=\"s-modal-close\" onclick=\"closeExModal()\">✕</button>
        </div>
        <div class=\"s-modal-body\">
            <input type=\"hidden\" id=\"exEditId\">
            <div class=\"s-form-group\" id=\"efg-nom\">
                <label>Nom de l'exercice <span class=\"req-star\">*</span></label>
                <input type=\"text\" id=\"ef-nom\" placeholder=\"Ex : Course à pied\" maxlength=\"100\">
                <span class=\"err-msg\">Ce champ est obligatoire</span>
            </div>
            <div class=\"s-form-group\" id=\"efg-type\">
                <label>Type d'exercice <span class=\"req-star\">*</span></label>
                <input type=\"text\" id=\"ef-type\" placeholder=\"Ex : Cardio_Homme, Force_Femme…\" maxlength=\"100\" list=\"typeList\">
                <datalist id=\"typeList\"></datalist>
                <span class=\"err-msg\">Ce champ est obligatoire</span>
            </div>
            <div class=\"s-form-group\" id=\"efg-url\">
                <label>URL Vidéo (YouTube / Vimeo / autre)</label>
                <input type=\"text\" id=\"ef-url\" placeholder=\"https://youtube.com/watch?v=… ou nom de vidéo\" oninput=\"updateUrlPreview()\">
                <div class=\"url-preview-box\" id=\"urlPreviewBox\"></div>
            </div>
        </div>
        <div class=\"s-modal-footer\">
            <button class=\"btn-s-cancel\" onclick=\"closeExModal()\">Annuler</button>
            <button class=\"btn-s-save\" onclick=\"saveExercise()\">💾 Enregistrer</button>
        </div>
    </div>
</div>

<!-- MODAL DELETE -->
<div class=\"del-overlay\" id=\"delExOverlay\">
    <div class=\"del-box\">
        <div class=\"del-icon\">🗑️</div>
        <div class=\"del-title\">Supprimer cet exercice ?</div>
        <div class=\"del-sub\" id=\"delExSub\">Cette action est irréversible.</div>
        <div class=\"del-actions\">
            <button class=\"btn-del-cancel\" onclick=\"closeDelEx()\">Annuler</button>
            <button class=\"btn-del-confirm\" onclick=\"confirmDelEx()\">Supprimer</button>
        </div>
    </div>
</div>

<!-- TOAST -->
<div class=\"toast\" id=\"toastEx\"></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 241
        yield "<script>
// ═══════════════════════════════════════════════════════════
//  STATE
// ═══════════════════════════════════════════════════════════
let exercises = [];
let filteredEx = [];
let deleteExId = null;
let currentView = 'grid';
let exColSort   = null;
let exColDir    = 1;

const API = {
    list:   '/admin/sport/api/list',
    create: '/admin/sport/api/create',
    update: (id) => `/admin/sport/api/update/\${id}`,
    delete: (id) => `/admin/sport/api/delete/\${id}`,
};

// ═══════════════════════════════════════════════════════════
//  API
// ═══════════════════════════════════════════════════════════
async function apiFetch(url, opts = {}) {
    const res = await fetch(url, {
        headers: { 'Content-Type': 'application/json' },
        ...opts
    });
    const text = await res.text();
    let json;
    try { json = JSON.parse(text); } catch(e) { throw new Error('Réponse non JSON : ' + text.substring(0, 200)); }
    if (!res.ok) throw new Error(json.error || 'Erreur HTTP ' + res.status);
    return json;
}

async function loadExercises() {
    try {
        exercises = await apiFetch(API.list);
        buildTypeFilter();
        filterEx();
    } catch(e) {
        document.getElementById('gridView').innerHTML =
            `<div class=\"empty-state-ex\">⚠️ Erreur : \${e.message}</div>`;
    }
}

// ═══════════════════════════════════════════════════════════
//  BUILD TYPE FILTER DYNAMICALLY
// ═══════════════════════════════════════════════════════════
function buildTypeFilter() {
    const types = [...new Set(exercises.map(e => e.typeExercice).filter(Boolean))].sort();
    const sel = document.getElementById('typeFilter');
    sel.innerHTML = '<option value=\"\">Tous les types</option>' +
        types.map(t => `<option value=\"\${esc(t)}\">\${esc(t)}</option>`).join('');
    // also populate datalist for input suggestion
    document.getElementById('typeList').innerHTML =
        types.map(t => `<option value=\"\${esc(t)}\">`).join('');
}

// ═══════════════════════════════════════════════════════════
//  FILTER + RENDER
// ═══════════════════════════════════════════════════════════
function filterEx() {
    const q    = document.getElementById('exSearch').value.toLowerCase().trim();
    const type = document.getElementById('typeFilter').value;
    const srt  = document.getElementById('sortSelectEx').value;

    filteredEx = exercises.filter(e => {
        const mq = !q || (e.nomExercice||'').toLowerCase().includes(q) || (e.typeExercice||'').toLowerCase().includes(q);
        const mt = !type || e.typeExercice === type;
        return mq && mt;
    });

    const sorts = {
        nom_asc:  (a,b) => (a.nomExercice||'').localeCompare(b.nomExercice||''),
        nom_desc: (a,b) => (b.nomExercice||'').localeCompare(a.nomExercice||''),
        type_asc: (a,b) => (a.typeExercice||'').localeCompare(b.typeExercice||''),
    };
    if (srt && sorts[srt]) {
        filteredEx.sort(sorts[srt]);
    } else if (exColSort) {
        filteredEx.sort((a,b) => {
            const av = a[exColSort]||'', bv = b[exColSort]||'';
            return av.localeCompare(bv) * exColDir;
        });
    }

    renderGrid();
    renderList();
    updateStats();
}

function colSortEx(field) {
    const map = { nom: 'nomExercice', type: 'typeExercice' };
    const f = map[field] || field;
    if (exColSort === f) exColDir *= -1; else { exColSort = f; exColDir = 1; }
    filterEx();
}

function isVideoUrl(url) {
    return url && (url.startsWith('http://') || url.startsWith('https://'));
}

function renderGrid() {
    const el = document.getElementById('gridView');
    if (!filteredEx.length) {
        el.innerHTML = `<div class=\"empty-state-ex\" style=\"grid-column:1/-1\">🔍 Aucun exercice trouvé.</div>`;
        return;
    }
    el.innerHTML = filteredEx.map((e, i) => {
        const hasUrl = isVideoUrl(e.videoExercice);
        return `
        <div class=\"ex-card card-anim\" style=\"animation-delay:\${Math.min(i*0.03,0.4)}s\">
            <div class=\"video-thumb\" \${hasUrl ? `onclick=\"window.open('\${esc(e.videoExercice)}','_blank')\"` : ''}>
                \${hasUrl ? `
                    <div class=\"play-btn\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M8 5v14l11-7z\"/></svg>
                    </div>` : `<span class=\"no-video-msg\">🎬 \${e.videoExercice ? esc(e.videoExercice) : 'Aucune vidéo'}</span>`}
            </div>
            <div class=\"ex-body\">
                <div class=\"ex-name\">\${esc(e.nomExercice)}</div>
                \${e.typeExercice ? `<span class=\"ex-type-badge\">\${esc(e.typeExercice)}</span>` : ''}
                \${hasUrl
                    ? `<a class=\"ex-video-link\" href=\"\${esc(e.videoExercice)}\" target=\"_blank\">▶ Voir la vidéo</a>`
                    : (e.videoExercice ? `<div class=\"no-video-text\">📎 \${esc(e.videoExercice)}</div>` : `<div class=\"no-video-text\">Pas de vidéo</div>`)
                }
            </div>
            <div class=\"ex-footer\">
                <button class=\"btn-ex btn-ex-edit\" onclick=\"editEx(\${e.id})\">✏ Modifier</button>
                <button class=\"btn-ex btn-ex-del\" onclick=\"askDelEx(\${e.id},'\${esc(e.nomExercice)}')\">🗑 Suppr.</button>
            </div>
        </div>`;
    }).join('');
}

function renderList() {
    const tbody = document.getElementById('listBody');
    if (!filteredEx.length) {
        tbody.innerHTML = `<tr><td colspan=\"4\" class=\"empty-state-ex\">🔍 Aucun exercice trouvé.</td></tr>`;
        return;
    }
    tbody.innerHTML = filteredEx.map(e => {
        const hasUrl = isVideoUrl(e.videoExercice);
        return `<tr>
            <td><strong>\${esc(e.nomExercice)}</strong></td>
            <td>\${e.typeExercice ? `<span class=\"ex-type-badge\">\${esc(e.typeExercice)}</span>` : '<span class=\"no-vid\">—</span>'}</td>
            <td>\${hasUrl
                ? `<a href=\"\${esc(e.videoExercice)}\" target=\"_blank\" class=\"vid-link\">▶ Voir</a>`
                : (e.videoExercice ? `<span class=\"no-vid\">\${esc(e.videoExercice)}</span>` : '<span class=\"no-vid\">—</span>')}
            </td>
            <td>
                <div class=\"act-row\">
                    <button class=\"btn-sm-act btn-sm-edit\" onclick=\"editEx(\${e.id})\">✏ Modifier</button>
                    <button class=\"btn-sm-act btn-sm-del\" onclick=\"askDelEx(\${e.id},'\${esc(e.nomExercice)}')\">🗑</button>
                </div>
            </td>
        </tr>`;
    }).join('');
}

function updateStats() {
    document.getElementById('s-total').textContent    = exercises.length;
    document.getElementById('s-affiches').textContent = filteredEx.length;
    const types = new Set(exercises.map(e=>e.typeExercice).filter(Boolean)).size;
    const vids  = exercises.filter(e=>e.videoExercice).length;
    document.getElementById('s-types').textContent  = types;
    document.getElementById('s-videos').textContent = vids + '/' + exercises.length;
}

// ═══════════════════════════════════════════════════════════
//  VIEW TOGGLE
// ═══════════════════════════════════════════════════════════
function setView(v) {
    currentView = v;
    document.getElementById('gridView').style.display = v === 'grid' ? 'grid' : 'none';
    document.getElementById('listView').style.display = v === 'list' ? 'block' : 'none';
    document.getElementById('btnGrid').classList.toggle('active', v === 'grid');
    document.getElementById('btnList').classList.toggle('active', v === 'list');
}

// ═══════════════════════════════════════════════════════════
//  MODAL
// ═══════════════════════════════════════════════════════════
function openExModal(ex = null) {
    clearExErrors();
    document.getElementById('exEditId').value = ex ? ex.id : '';
    document.getElementById('ef-nom').value   = ex ? (ex.nomExercice||'') : '';
    document.getElementById('ef-type').value  = ex ? (ex.typeExercice||'') : '';
    document.getElementById('ef-url').value   = ex ? (ex.videoExercice||'') : '';
    document.getElementById('exModalTitle').textContent = ex ? '✏️ Modifier l\\'exercice' : '🏋️ Ajouter un exercice';
    updateUrlPreview();
    document.getElementById('exModalOverlay').classList.add('open');
    setTimeout(() => document.getElementById('ef-nom').focus(), 100);
}

function closeExModal() { document.getElementById('exModalOverlay').classList.remove('open'); }

function editEx(id) {
    const ex = exercises.find(e => e.id === id);
    if (ex) openExModal(ex);
}

function askDelEx(id, nom) {
    deleteExId = id;
    document.getElementById('delExSub').textContent = `Supprimer « \${nom} » ? Cette action est irréversible.`;
    document.getElementById('delExOverlay').classList.add('open');
}
function closeDelEx() { deleteExId = null; document.getElementById('delExOverlay').classList.remove('open'); }

// ═══════════════════════════════════════════════════════════
//  CRUD
// ═══════════════════════════════════════════════════════════
async function saveExercise() {
    if (!validateEx()) return;

    const id   = document.getElementById('exEditId').value;
    const body = {
        nomExercice:   document.getElementById('ef-nom').value.trim(),
        typeExercice:  document.getElementById('ef-type').value.trim(),
        videoExercice: document.getElementById('ef-url').value.trim() || null,
    };

    try {
        const url   = id ? API.update(id) : API.create;
        const saved = await apiFetch(url, { method: 'POST', body: JSON.stringify(body) });

        if (id) {
            const idx = exercises.findIndex(e => e.id === parseInt(id));
            if (idx !== -1) exercises[idx] = saved;
            showToastEx('✅ Exercice modifié avec succès', 'success');
        } else {
            exercises.unshift(saved);
            showToastEx('✅ Exercice ajouté avec succès', 'success');
        }
        buildTypeFilter();
        closeExModal();
        filterEx();
    } catch(e) {
        showToastEx('❌ ' + e.message, 'error');
    }
}

async function confirmDelEx() {
    if (!deleteExId) return;
    try {
        await apiFetch(API.delete(deleteExId), { method: 'POST' });
        exercises = exercises.filter(e => e.id !== deleteExId);
        buildTypeFilter();
        closeDelEx();
        filterEx();
        showToastEx('🗑️ Exercice supprimé', 'success');
    } catch(e) {
        showToastEx('❌ ' + e.message, 'error');
    }
}

// ═══════════════════════════════════════════════════════════
//  VALIDATION
// ═══════════════════════════════════════════════════════════
function validateEx() {
    clearExErrors();
    let valid = true;
    if (!document.getElementById('ef-nom').value.trim()) { setErrEx('efg-nom'); valid = false; }
    if (!document.getElementById('ef-type').value.trim()) { setErrEx('efg-type'); valid = false; }
    return valid;
}
function setErrEx(id) { document.getElementById(id).classList.add('has-err'); }
function clearExErrors() { document.querySelectorAll('.s-form-group.has-err').forEach(e => e.classList.remove('has-err')); }

// URL preview
function updateUrlPreview() {
    const url = document.getElementById('ef-url').value.trim();
    const box = document.getElementById('urlPreviewBox');
    if (url) {
        const label = isVideoUrl(url) ? '🔗 URL vidéo : ' + url : '📎 Référence : ' + url;
        box.textContent = label;
        box.classList.add('show');
    } else {
        box.classList.remove('show');
    }
}

// ═══════════════════════════════════════════════════════════
//  TOAST
// ═══════════════════════════════════════════════════════════
function showToastEx(msg, type) {
    const t = document.getElementById('toastEx');
    t.textContent = msg;
    t.className = 'toast ' + type + ' show';
    setTimeout(() => t.classList.remove('show'), 3500);
}

// ═══════════════════════════════════════════════════════════
//  UTILS
// ═══════════════════════════════════════════════════════════
function esc(s) { return String(s||'').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;'); }

// ═══════════════════════════════════════════════════════════
//  INIT
// ═══════════════════════════════════════════════════════════
loadExercises();
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
        return "admin/sport.html.twig";
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
        return array (  403 => 241,  390 => 240,  270 => 129,  257 => 128,  126 => 6,  113 => 5,  90 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %}Gestion Sport — Harmony{% endblock %}
{% block page_title %}🏋️ Gestion du Sport{% endblock %}

{% block stylesheets %}
<style>
    :root {
        --spt-green: #10B981; --spt-green-dark: #059669; --spt-green-pale: #D1FAE5;
        --spt-blue: #3B82F6; --spt-orange: #F59E0B; --spt-red: #EF4444;
    }

    /* ── TOOLBAR ── */
    .s-toolbar {
        display: flex; align-items: center; gap: 12px; margin-bottom: 22px; flex-wrap: wrap;
        background: var(--white); border: 1px solid var(--border); border-radius: 14px; padding: 14px 18px;
    }
    .s-search-wrap { position: relative; flex: 1; min-width: 200px; }
    .s-search-wrap .si { position: absolute; left: 13px; top: 50%; transform: translateY(-50%); font-size: 14px; pointer-events: none; opacity: .5; }
    .s-search { width: 100%; padding: 9px 14px 9px 40px; border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13.5px; color: var(--text); background: var(--purple-ghost); outline: none; transition: border-color .15s; }
    .s-search:focus { border-color: var(--spt-green); background: #fff; }
    .s-select { padding: 9px 13px; border: 1.5px solid var(--border); border-radius: 10px; font-size: 13px; font-family: var(--font-body); color: var(--text); background: var(--purple-ghost); outline: none; cursor: pointer; }
    .s-select:focus { border-color: var(--spt-green); }
    .view-toggle { display: flex; border: 1.5px solid var(--border); border-radius: 10px; overflow: hidden; }
    .view-btn { padding: 8px 14px; background: none; border: none; cursor: pointer; font-size: 12.5px; font-weight: 500; color: var(--text-muted); font-family: var(--font-body); transition: .12s; }
    .view-btn.active { background: var(--spt-green-pale); color: var(--spt-green-dark); }
    .btn-add-ex { display: inline-flex; align-items: center; gap: 7px; padding: 10px 20px; background: linear-gradient(135deg, var(--spt-green), var(--spt-green-dark)); color: #fff; border: none; border-radius: 10px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 14px rgba(16,185,129,.35); transition: .15s; white-space: nowrap; }
    .btn-add-ex:hover { transform: translateY(-1px); }

    /* ── STATS ── */
    .s-stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; margin-bottom: 22px; }
    .s-stat { background: var(--white); border: 1px solid var(--border); border-radius: 14px; padding: 18px 20px; display: flex; align-items: center; gap: 14px; transition: box-shadow .2s; }
    .s-stat:hover { box-shadow: 0 4px 18px rgba(0,0,0,.07); }
    .s-stat-icon { width: 44px; height: 44px; border-radius: 12px; display: grid; place-items: center; font-size: 20px; flex-shrink: 0; }
    .s-stat-val { font-family: var(--font-head); font-size: 26px; font-weight: 800; color: var(--text); line-height: 1; }
    .s-stat-lbl { font-size: 11.5px; color: var(--text-muted); margin-top: 3px; }

    /* ── GRID ── */
    .ex-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 18px; }
    .ex-card { background: var(--white); border: 1.5px solid var(--border); border-radius: 18px; overflow: hidden; transition: border-color .2s, transform .2s, box-shadow .2s; }
    .ex-card:hover { transform: translateY(-4px); box-shadow: 0 12px 36px rgba(0,0,0,.1); border-color: var(--spt-green); }
    .video-thumb { height: 110px; background: linear-gradient(135deg, #1a1a2e, #16213e); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; cursor: pointer; }
    .video-thumb::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(16,185,129,.15), rgba(59,130,246,.15)); }
    .play-btn { width: 46px; height: 46px; border-radius: 50%; background: rgba(255,255,255,.15); backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; border: 2px solid rgba(255,255,255,.3); transition: .2s; z-index: 1; }
    .play-btn:hover { background: rgba(16,185,129,.6); transform: scale(1.1); }
    .play-btn svg { width: 18px; height: 18px; fill: #fff; margin-left: 2px; }
    .no-video-msg { color: rgba(255,255,255,.4); font-size: 12px; z-index: 1; }
    .ex-body { padding: 14px 16px; }
    .ex-name { font-family: var(--font-head); font-size: 14.5px; font-weight: 700; color: var(--text); margin-bottom: 8px; }
    .ex-type-badge { display: inline-block; font-size: 10px; padding: 3px 10px; border-radius: 20px; font-weight: 600; background: var(--spt-green-pale); color: var(--spt-green-dark); }
    .ex-video-link { display: block; margin-top: 8px; font-size: 12px; color: var(--spt-green); text-decoration: none; word-break: break-all; }
    .ex-video-link:hover { text-decoration: underline; }
    .no-video-text { font-size: 12px; color: var(--text-muted); margin-top: 8px; }
    .ex-footer { padding: 10px 14px; border-top: 1px solid var(--border); display: flex; gap: 8px; }
    .btn-ex { flex: 1; padding: 7px; border-radius: 9px; font-size: 12px; font-weight: 600; border: 1.5px solid var(--border); cursor: pointer; background: none; font-family: var(--font-body); transition: .12s; text-align: center; }
    .btn-ex-edit { color: var(--purple); }
    .btn-ex-edit:hover { background: var(--purple-pale); border-color: var(--purple); }
    .btn-ex-del { color: #E05252; }
    .btn-ex-del:hover { background: #FEE2E2; border-color: #FCA5A5; }

    /* ── LIST VIEW ── */
    .s-table-card { background: var(--white); border: 1px solid var(--border); border-radius: 18px; overflow: hidden; }
    table.s-table { width: 100%; border-collapse: collapse; }
    table.s-table th { padding: 11px 16px; text-align: left; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .7px; color: var(--text-muted); background: var(--purple-ghost); border-bottom: 1px solid var(--border); cursor: pointer; user-select: none; white-space: nowrap; }
    table.s-table th:hover { color: var(--spt-green); }
    table.s-table th.sorted { color: var(--spt-green); }
    table.s-table td { padding: 12px 16px; font-size: 13.5px; color: var(--text); border-bottom: 1px solid var(--purple-ghost); vertical-align: middle; }
    table.s-table tr:last-child td { border: none; }
    table.s-table tr:hover td { background: rgba(16,185,129,.04); }
    .vid-link { color: var(--spt-green); font-size: 12px; text-decoration: none; }
    .vid-link:hover { text-decoration: underline; }
    .no-vid { color: var(--text-muted); font-size: 12px; }
    .act-row { display: flex; gap: 6px; }
    .btn-sm-act { padding: 5px 11px; border-radius: 8px; font-size: 12px; font-weight: 500; border: 1.5px solid var(--border); cursor: pointer; background: none; font-family: var(--font-body); transition: .12s; }
    .btn-sm-edit { color: var(--purple); }
    .btn-sm-edit:hover { background: var(--purple-pale); border-color: var(--purple); }
    .btn-sm-del { color: #E05252; }
    .btn-sm-del:hover { background: #FEE2E2; border-color: #FCA5A5; }
    .empty-state-ex { text-align: center; padding: 50px; color: var(--text-muted); font-size: 14px; }

    /* ── MODAL ── */
    .s-modal-overlay { position: fixed; inset: 0; background: rgba(10,8,28,.55); display: flex; align-items: center; justify-content: center; z-index: 2000; backdrop-filter: blur(6px); opacity: 0; pointer-events: none; transition: opacity .2s; }
    .s-modal-overlay.open { opacity: 1; pointer-events: all; }
    .s-modal { background: var(--white); border-radius: 22px; width: 520px; max-width: 95vw; max-height: 92vh; overflow-y: auto; box-shadow: 0 32px 80px rgba(0,0,0,.22); transform: scale(.95) translateY(14px); transition: transform .25s; }
    .s-modal-overlay.open .s-modal { transform: scale(1) translateY(0); }
    .s-modal-header { padding: 22px 26px 18px; border-bottom: 1px solid var(--border); display: flex; align-items: center; justify-content: space-between; background: linear-gradient(135deg, #F0FDF4, #ECFDF5); }
    .s-modal-title { font-family: var(--font-head); font-size: 17px; font-weight: 800; color: var(--text); }
    .s-modal-close { background: none; border: none; cursor: pointer; font-size: 20px; color: var(--text-muted); width: 32px; height: 32px; border-radius: 8px; display: grid; place-items: center; transition: .12s; }
    .s-modal-close:hover { background: var(--spt-green-pale); color: var(--spt-green); }
    .s-modal-body { padding: 24px 26px; }
    .s-form-group { display: flex; flex-direction: column; gap: 5px; margin-bottom: 14px; }
    .s-form-group label { font-size: 12px; font-weight: 600; color: var(--text-mid); }
    .s-form-group input, .s-form-group select, .s-form-group textarea { padding: 10px 13px; border: 1.5px solid var(--border); border-radius: 10px; font-size: 14px; font-family: var(--font-body); color: var(--text); background: var(--purple-ghost); outline: none; transition: border-color .15s, box-shadow .15s; width: 100%; }
    .s-form-group input:focus, .s-form-group select:focus, .s-form-group textarea:focus { border-color: var(--spt-green); background: #fff; box-shadow: 0 0 0 3px rgba(16,185,129,.12); }
    .s-form-group.has-err input, .s-form-group.has-err select { border-color: var(--spt-red); }
    .s-form-group .err-msg { font-size: 11.5px; color: var(--spt-red); display: none; font-weight: 500; }
    .s-form-group.has-err .err-msg { display: block; }
    .req-star { color: var(--spt-red); }
    .url-preview-box { margin-top: 8px; padding: 9px 12px; background: var(--purple-ghost); border-radius: 9px; font-size: 12px; color: var(--text-muted); word-break: break-all; display: none; border: 1px dashed var(--border); }
    .url-preview-box.show { display: block; }
    .s-modal-footer { padding: 16px 26px; border-top: 1px solid var(--border); display: flex; justify-content: flex-end; gap: 10px; background: var(--purple-ghost); border-radius: 0 0 22px 22px; }
    .btn-s-cancel { padding: 10px 20px; background: var(--white); border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13px; cursor: pointer; color: var(--text-mid); }
    .btn-s-save { padding: 10px 24px; background: linear-gradient(135deg, var(--spt-green), var(--spt-green-dark)); color: #fff; border: none; border-radius: 10px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 14px rgba(16,185,129,.35); transition: .15s; }
    .btn-s-save:hover { transform: translateY(-1px); }

    /* Delete modal */
    .del-overlay { position: fixed; inset: 0; background: rgba(10,8,28,.55); display: flex; align-items: center; justify-content: center; z-index: 3000; backdrop-filter: blur(6px); opacity: 0; pointer-events: none; transition: opacity .2s; }
    .del-overlay.open { opacity: 1; pointer-events: all; }
    .del-box { background: var(--white); border-radius: 20px; width: 400px; max-width: 95vw; padding: 32px; box-shadow: 0 32px 80px rgba(0,0,0,.22); text-align: center; transform: scale(.92); transition: transform .2s; }
    .del-overlay.open .del-box { transform: scale(1); }
    .del-icon { font-size: 48px; margin-bottom: 12px; }
    .del-title { font-family: var(--font-head); font-size: 18px; font-weight: 800; color: var(--text); margin-bottom: 8px; }
    .del-sub { font-size: 13px; color: var(--text-muted); margin-bottom: 24px; line-height: 1.5; }
    .del-actions { display: flex; gap: 10px; justify-content: center; }
    .btn-del-cancel { padding: 10px 22px; background: var(--purple-ghost); border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13px; cursor: pointer; color: var(--text-mid); }
    .btn-del-confirm { padding: 10px 22px; background: #EF4444; color: #fff; border: none; border-radius: 10px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; }

    /* Toast */
    .toast { position: fixed; bottom: 28px; right: 28px; padding: 13px 20px; border-radius: 12px; font-size: 13.5px; font-weight: 600; color: #fff; box-shadow: 0 8px 28px rgba(0,0,0,.2); z-index: 9999; transform: translateY(20px); opacity: 0; transition: all .3s; pointer-events: none; }
    .toast.show { transform: translateY(0); opacity: 1; }
    .toast.success { background: var(--spt-green); }
    .toast.error { background: var(--spt-red); }

    @keyframes cardIn { from { opacity:0; transform:translateY(14px); } to { opacity:1; transform:none; } }
    .card-anim { animation: cardIn .25s ease both; }
</style>
{% endblock %}

{% block body %}

<div class=\"s-toolbar\">
    <div class=\"s-search-wrap\">
        <span class=\"si\">🔍</span>
        <input type=\"text\" class=\"s-search\" id=\"exSearch\" placeholder=\"Rechercher par nom ou type…\" oninput=\"filterEx()\">
    </div>
    <select class=\"s-select\" id=\"typeFilter\" onchange=\"filterEx()\">
        <option value=\"\">Tous les types</option>
    </select>
    <select class=\"s-select\" id=\"sortSelectEx\" onchange=\"filterEx()\">
        <option value=\"\">Trier par…</option>
        <option value=\"nom_asc\">Nom A → Z</option>
        <option value=\"nom_desc\">Nom Z → A</option>
        <option value=\"type_asc\">Type A → Z</option>
    </select>
    <div class=\"view-toggle\">
        <button class=\"view-btn active\" id=\"btnGrid\" onclick=\"setView('grid')\">⊞ Grille</button>
        <button class=\"view-btn\" id=\"btnList\" onclick=\"setView('list')\">≡ Liste</button>
    </div>
    <button class=\"btn-add-ex\" onclick=\"openExModal()\">＋ Ajouter un exercice</button>
</div>

<!-- STATS -->
<div class=\"s-stats\">
    <div class=\"s-stat\">
        <div class=\"s-stat-icon\" style=\"background:#D1FAE5;\">🏋️</div>
        <div><div class=\"s-stat-val\" id=\"s-total\">—</div><div class=\"s-stat-lbl\">Total exercices</div></div>
    </div>
    <div class=\"s-stat\">
        <div class=\"s-stat-icon\" style=\"background:#DBEAFE;\">🏷️</div>
        <div><div class=\"s-stat-val\" id=\"s-types\">—</div><div class=\"s-stat-lbl\">Types distincts</div></div>
    </div>
    <div class=\"s-stat\">
        <div class=\"s-stat-icon\" style=\"background:#FEF3C7;\">🎬</div>
        <div><div class=\"s-stat-val\" id=\"s-videos\">—</div><div class=\"s-stat-lbl\">Avec vidéo</div></div>
    </div>
    <div class=\"s-stat\">
        <div class=\"s-stat-icon\" style=\"background:#EDE9FE;\">📊</div>
        <div><div class=\"s-stat-val\" id=\"s-affiches\">—</div><div class=\"s-stat-lbl\">Affichés</div></div>
    </div>
</div>

<!-- GRID VIEW -->
<div id=\"gridView\" class=\"ex-grid\"></div>

<!-- LIST VIEW -->
<div id=\"listView\" class=\"s-table-card\" style=\"display:none;\">
    <table class=\"s-table\">
        <thead>
        <tr>
            <th onclick=\"colSortEx('nom')\">Nom ↕</th>
            <th onclick=\"colSortEx('type')\">Type ↕</th>
            <th>Vidéo / URL</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody id=\"listBody\"></tbody>
    </table>
</div>

<!-- MODAL ADD/EDIT -->
<div class=\"s-modal-overlay\" id=\"exModalOverlay\" onclick=\"if(event.target===this)closeExModal()\">
    <div class=\"s-modal\">
        <div class=\"s-modal-header\">
            <div class=\"s-modal-title\" id=\"exModalTitle\">🏋️ Ajouter un exercice</div>
            <button class=\"s-modal-close\" onclick=\"closeExModal()\">✕</button>
        </div>
        <div class=\"s-modal-body\">
            <input type=\"hidden\" id=\"exEditId\">
            <div class=\"s-form-group\" id=\"efg-nom\">
                <label>Nom de l'exercice <span class=\"req-star\">*</span></label>
                <input type=\"text\" id=\"ef-nom\" placeholder=\"Ex : Course à pied\" maxlength=\"100\">
                <span class=\"err-msg\">Ce champ est obligatoire</span>
            </div>
            <div class=\"s-form-group\" id=\"efg-type\">
                <label>Type d'exercice <span class=\"req-star\">*</span></label>
                <input type=\"text\" id=\"ef-type\" placeholder=\"Ex : Cardio_Homme, Force_Femme…\" maxlength=\"100\" list=\"typeList\">
                <datalist id=\"typeList\"></datalist>
                <span class=\"err-msg\">Ce champ est obligatoire</span>
            </div>
            <div class=\"s-form-group\" id=\"efg-url\">
                <label>URL Vidéo (YouTube / Vimeo / autre)</label>
                <input type=\"text\" id=\"ef-url\" placeholder=\"https://youtube.com/watch?v=… ou nom de vidéo\" oninput=\"updateUrlPreview()\">
                <div class=\"url-preview-box\" id=\"urlPreviewBox\"></div>
            </div>
        </div>
        <div class=\"s-modal-footer\">
            <button class=\"btn-s-cancel\" onclick=\"closeExModal()\">Annuler</button>
            <button class=\"btn-s-save\" onclick=\"saveExercise()\">💾 Enregistrer</button>
        </div>
    </div>
</div>

<!-- MODAL DELETE -->
<div class=\"del-overlay\" id=\"delExOverlay\">
    <div class=\"del-box\">
        <div class=\"del-icon\">🗑️</div>
        <div class=\"del-title\">Supprimer cet exercice ?</div>
        <div class=\"del-sub\" id=\"delExSub\">Cette action est irréversible.</div>
        <div class=\"del-actions\">
            <button class=\"btn-del-cancel\" onclick=\"closeDelEx()\">Annuler</button>
            <button class=\"btn-del-confirm\" onclick=\"confirmDelEx()\">Supprimer</button>
        </div>
    </div>
</div>

<!-- TOAST -->
<div class=\"toast\" id=\"toastEx\"></div>

{% endblock %}

{% block javascripts %}
<script>
// ═══════════════════════════════════════════════════════════
//  STATE
// ═══════════════════════════════════════════════════════════
let exercises = [];
let filteredEx = [];
let deleteExId = null;
let currentView = 'grid';
let exColSort   = null;
let exColDir    = 1;

const API = {
    list:   '/admin/sport/api/list',
    create: '/admin/sport/api/create',
    update: (id) => `/admin/sport/api/update/\${id}`,
    delete: (id) => `/admin/sport/api/delete/\${id}`,
};

// ═══════════════════════════════════════════════════════════
//  API
// ═══════════════════════════════════════════════════════════
async function apiFetch(url, opts = {}) {
    const res = await fetch(url, {
        headers: { 'Content-Type': 'application/json' },
        ...opts
    });
    const text = await res.text();
    let json;
    try { json = JSON.parse(text); } catch(e) { throw new Error('Réponse non JSON : ' + text.substring(0, 200)); }
    if (!res.ok) throw new Error(json.error || 'Erreur HTTP ' + res.status);
    return json;
}

async function loadExercises() {
    try {
        exercises = await apiFetch(API.list);
        buildTypeFilter();
        filterEx();
    } catch(e) {
        document.getElementById('gridView').innerHTML =
            `<div class=\"empty-state-ex\">⚠️ Erreur : \${e.message}</div>`;
    }
}

// ═══════════════════════════════════════════════════════════
//  BUILD TYPE FILTER DYNAMICALLY
// ═══════════════════════════════════════════════════════════
function buildTypeFilter() {
    const types = [...new Set(exercises.map(e => e.typeExercice).filter(Boolean))].sort();
    const sel = document.getElementById('typeFilter');
    sel.innerHTML = '<option value=\"\">Tous les types</option>' +
        types.map(t => `<option value=\"\${esc(t)}\">\${esc(t)}</option>`).join('');
    // also populate datalist for input suggestion
    document.getElementById('typeList').innerHTML =
        types.map(t => `<option value=\"\${esc(t)}\">`).join('');
}

// ═══════════════════════════════════════════════════════════
//  FILTER + RENDER
// ═══════════════════════════════════════════════════════════
function filterEx() {
    const q    = document.getElementById('exSearch').value.toLowerCase().trim();
    const type = document.getElementById('typeFilter').value;
    const srt  = document.getElementById('sortSelectEx').value;

    filteredEx = exercises.filter(e => {
        const mq = !q || (e.nomExercice||'').toLowerCase().includes(q) || (e.typeExercice||'').toLowerCase().includes(q);
        const mt = !type || e.typeExercice === type;
        return mq && mt;
    });

    const sorts = {
        nom_asc:  (a,b) => (a.nomExercice||'').localeCompare(b.nomExercice||''),
        nom_desc: (a,b) => (b.nomExercice||'').localeCompare(a.nomExercice||''),
        type_asc: (a,b) => (a.typeExercice||'').localeCompare(b.typeExercice||''),
    };
    if (srt && sorts[srt]) {
        filteredEx.sort(sorts[srt]);
    } else if (exColSort) {
        filteredEx.sort((a,b) => {
            const av = a[exColSort]||'', bv = b[exColSort]||'';
            return av.localeCompare(bv) * exColDir;
        });
    }

    renderGrid();
    renderList();
    updateStats();
}

function colSortEx(field) {
    const map = { nom: 'nomExercice', type: 'typeExercice' };
    const f = map[field] || field;
    if (exColSort === f) exColDir *= -1; else { exColSort = f; exColDir = 1; }
    filterEx();
}

function isVideoUrl(url) {
    return url && (url.startsWith('http://') || url.startsWith('https://'));
}

function renderGrid() {
    const el = document.getElementById('gridView');
    if (!filteredEx.length) {
        el.innerHTML = `<div class=\"empty-state-ex\" style=\"grid-column:1/-1\">🔍 Aucun exercice trouvé.</div>`;
        return;
    }
    el.innerHTML = filteredEx.map((e, i) => {
        const hasUrl = isVideoUrl(e.videoExercice);
        return `
        <div class=\"ex-card card-anim\" style=\"animation-delay:\${Math.min(i*0.03,0.4)}s\">
            <div class=\"video-thumb\" \${hasUrl ? `onclick=\"window.open('\${esc(e.videoExercice)}','_blank')\"` : ''}>
                \${hasUrl ? `
                    <div class=\"play-btn\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M8 5v14l11-7z\"/></svg>
                    </div>` : `<span class=\"no-video-msg\">🎬 \${e.videoExercice ? esc(e.videoExercice) : 'Aucune vidéo'}</span>`}
            </div>
            <div class=\"ex-body\">
                <div class=\"ex-name\">\${esc(e.nomExercice)}</div>
                \${e.typeExercice ? `<span class=\"ex-type-badge\">\${esc(e.typeExercice)}</span>` : ''}
                \${hasUrl
                    ? `<a class=\"ex-video-link\" href=\"\${esc(e.videoExercice)}\" target=\"_blank\">▶ Voir la vidéo</a>`
                    : (e.videoExercice ? `<div class=\"no-video-text\">📎 \${esc(e.videoExercice)}</div>` : `<div class=\"no-video-text\">Pas de vidéo</div>`)
                }
            </div>
            <div class=\"ex-footer\">
                <button class=\"btn-ex btn-ex-edit\" onclick=\"editEx(\${e.id})\">✏ Modifier</button>
                <button class=\"btn-ex btn-ex-del\" onclick=\"askDelEx(\${e.id},'\${esc(e.nomExercice)}')\">🗑 Suppr.</button>
            </div>
        </div>`;
    }).join('');
}

function renderList() {
    const tbody = document.getElementById('listBody');
    if (!filteredEx.length) {
        tbody.innerHTML = `<tr><td colspan=\"4\" class=\"empty-state-ex\">🔍 Aucun exercice trouvé.</td></tr>`;
        return;
    }
    tbody.innerHTML = filteredEx.map(e => {
        const hasUrl = isVideoUrl(e.videoExercice);
        return `<tr>
            <td><strong>\${esc(e.nomExercice)}</strong></td>
            <td>\${e.typeExercice ? `<span class=\"ex-type-badge\">\${esc(e.typeExercice)}</span>` : '<span class=\"no-vid\">—</span>'}</td>
            <td>\${hasUrl
                ? `<a href=\"\${esc(e.videoExercice)}\" target=\"_blank\" class=\"vid-link\">▶ Voir</a>`
                : (e.videoExercice ? `<span class=\"no-vid\">\${esc(e.videoExercice)}</span>` : '<span class=\"no-vid\">—</span>')}
            </td>
            <td>
                <div class=\"act-row\">
                    <button class=\"btn-sm-act btn-sm-edit\" onclick=\"editEx(\${e.id})\">✏ Modifier</button>
                    <button class=\"btn-sm-act btn-sm-del\" onclick=\"askDelEx(\${e.id},'\${esc(e.nomExercice)}')\">🗑</button>
                </div>
            </td>
        </tr>`;
    }).join('');
}

function updateStats() {
    document.getElementById('s-total').textContent    = exercises.length;
    document.getElementById('s-affiches').textContent = filteredEx.length;
    const types = new Set(exercises.map(e=>e.typeExercice).filter(Boolean)).size;
    const vids  = exercises.filter(e=>e.videoExercice).length;
    document.getElementById('s-types').textContent  = types;
    document.getElementById('s-videos').textContent = vids + '/' + exercises.length;
}

// ═══════════════════════════════════════════════════════════
//  VIEW TOGGLE
// ═══════════════════════════════════════════════════════════
function setView(v) {
    currentView = v;
    document.getElementById('gridView').style.display = v === 'grid' ? 'grid' : 'none';
    document.getElementById('listView').style.display = v === 'list' ? 'block' : 'none';
    document.getElementById('btnGrid').classList.toggle('active', v === 'grid');
    document.getElementById('btnList').classList.toggle('active', v === 'list');
}

// ═══════════════════════════════════════════════════════════
//  MODAL
// ═══════════════════════════════════════════════════════════
function openExModal(ex = null) {
    clearExErrors();
    document.getElementById('exEditId').value = ex ? ex.id : '';
    document.getElementById('ef-nom').value   = ex ? (ex.nomExercice||'') : '';
    document.getElementById('ef-type').value  = ex ? (ex.typeExercice||'') : '';
    document.getElementById('ef-url').value   = ex ? (ex.videoExercice||'') : '';
    document.getElementById('exModalTitle').textContent = ex ? '✏️ Modifier l\\'exercice' : '🏋️ Ajouter un exercice';
    updateUrlPreview();
    document.getElementById('exModalOverlay').classList.add('open');
    setTimeout(() => document.getElementById('ef-nom').focus(), 100);
}

function closeExModal() { document.getElementById('exModalOverlay').classList.remove('open'); }

function editEx(id) {
    const ex = exercises.find(e => e.id === id);
    if (ex) openExModal(ex);
}

function askDelEx(id, nom) {
    deleteExId = id;
    document.getElementById('delExSub').textContent = `Supprimer « \${nom} » ? Cette action est irréversible.`;
    document.getElementById('delExOverlay').classList.add('open');
}
function closeDelEx() { deleteExId = null; document.getElementById('delExOverlay').classList.remove('open'); }

// ═══════════════════════════════════════════════════════════
//  CRUD
// ═══════════════════════════════════════════════════════════
async function saveExercise() {
    if (!validateEx()) return;

    const id   = document.getElementById('exEditId').value;
    const body = {
        nomExercice:   document.getElementById('ef-nom').value.trim(),
        typeExercice:  document.getElementById('ef-type').value.trim(),
        videoExercice: document.getElementById('ef-url').value.trim() || null,
    };

    try {
        const url   = id ? API.update(id) : API.create;
        const saved = await apiFetch(url, { method: 'POST', body: JSON.stringify(body) });

        if (id) {
            const idx = exercises.findIndex(e => e.id === parseInt(id));
            if (idx !== -1) exercises[idx] = saved;
            showToastEx('✅ Exercice modifié avec succès', 'success');
        } else {
            exercises.unshift(saved);
            showToastEx('✅ Exercice ajouté avec succès', 'success');
        }
        buildTypeFilter();
        closeExModal();
        filterEx();
    } catch(e) {
        showToastEx('❌ ' + e.message, 'error');
    }
}

async function confirmDelEx() {
    if (!deleteExId) return;
    try {
        await apiFetch(API.delete(deleteExId), { method: 'POST' });
        exercises = exercises.filter(e => e.id !== deleteExId);
        buildTypeFilter();
        closeDelEx();
        filterEx();
        showToastEx('🗑️ Exercice supprimé', 'success');
    } catch(e) {
        showToastEx('❌ ' + e.message, 'error');
    }
}

// ═══════════════════════════════════════════════════════════
//  VALIDATION
// ═══════════════════════════════════════════════════════════
function validateEx() {
    clearExErrors();
    let valid = true;
    if (!document.getElementById('ef-nom').value.trim()) { setErrEx('efg-nom'); valid = false; }
    if (!document.getElementById('ef-type').value.trim()) { setErrEx('efg-type'); valid = false; }
    return valid;
}
function setErrEx(id) { document.getElementById(id).classList.add('has-err'); }
function clearExErrors() { document.querySelectorAll('.s-form-group.has-err').forEach(e => e.classList.remove('has-err')); }

// URL preview
function updateUrlPreview() {
    const url = document.getElementById('ef-url').value.trim();
    const box = document.getElementById('urlPreviewBox');
    if (url) {
        const label = isVideoUrl(url) ? '🔗 URL vidéo : ' + url : '📎 Référence : ' + url;
        box.textContent = label;
        box.classList.add('show');
    } else {
        box.classList.remove('show');
    }
}

// ═══════════════════════════════════════════════════════════
//  TOAST
// ═══════════════════════════════════════════════════════════
function showToastEx(msg, type) {
    const t = document.getElementById('toastEx');
    t.textContent = msg;
    t.className = 'toast ' + type + ' show';
    setTimeout(() => t.classList.remove('show'), 3500);
}

// ═══════════════════════════════════════════════════════════
//  UTILS
// ═══════════════════════════════════════════════════════════
function esc(s) { return String(s||'').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;'); }

// ═══════════════════════════════════════════════════════════
//  INIT
// ═══════════════════════════════════════════════════════════
loadExercises();
</script>
{% endblock %}
", "admin/sport.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/admin/sport.html.twig");
    }
}

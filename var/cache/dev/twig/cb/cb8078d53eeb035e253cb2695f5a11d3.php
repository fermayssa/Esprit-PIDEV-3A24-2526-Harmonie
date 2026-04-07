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

/* admin/nutrition.html.twig */
class __TwigTemplate_ef4410395646ae66c8efedc31c6025e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/nutrition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/nutrition.html.twig"));

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

        yield "Gestion Nutrition — Harmony";
        
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

        yield "🥗 Gestion de la Nutrition";
        
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
        --nut-green: #10B981; --nut-green-dark: #059669; --nut-green-pale: #D1FAE5;
        --nut-orange: #F59E0B; --nut-red: #EF4444; --nut-blue: #3B82F6; --nut-purple: #8B5CF6;
    }

    /* ── TOOLBAR ── */
    .n-toolbar {
        display: flex; align-items: center; gap: 12px; margin-bottom: 22px; flex-wrap: wrap;
        background: var(--white); border: 1px solid var(--border); border-radius: 14px; padding: 14px 18px;
    }
    .n-search-wrap { position: relative; flex: 1; min-width: 220px; }
    .n-search-wrap .si { position: absolute; left: 13px; top: 50%; transform: translateY(-50%); font-size: 14px; pointer-events: none; opacity: .5; }
    .n-search { width: 100%; padding: 9px 14px 9px 40px; border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13.5px; color: var(--text); background: var(--purple-ghost); outline: none; transition: border-color .15s; }
    .n-search:focus { border-color: var(--nut-green); background: #fff; }
    .n-select { padding: 9px 13px; border: 1.5px solid var(--border); border-radius: 10px; font-size: 13px; font-family: var(--font-body); color: var(--text); background: var(--purple-ghost); outline: none; cursor: pointer; }
    .n-select:focus { border-color: var(--nut-green); }
    .btn-add-food {
        display: inline-flex; align-items: center; gap: 7px; padding: 10px 20px;
        background: linear-gradient(135deg, var(--nut-green), var(--nut-green-dark));
        color: #fff; border: none; border-radius: 10px; font-family: var(--font-body);
        font-size: 13px; font-weight: 600; cursor: pointer;
        box-shadow: 0 4px 14px rgba(16,185,129,.35); transition: .15s; white-space: nowrap;
    }
    .btn-add-food:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(16,185,129,.45); }

    /* ── STATS ── */
    .n-stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; margin-bottom: 22px; }
    .n-stat { background: var(--white); border: 1px solid var(--border); border-radius: 14px; padding: 18px 20px; display: flex; align-items: center; gap: 14px; transition: box-shadow .2s; }
    .n-stat:hover { box-shadow: 0 4px 18px rgba(0,0,0,.07); }
    .n-stat-icon { width: 44px; height: 44px; border-radius: 12px; display: grid; place-items: center; font-size: 20px; flex-shrink: 0; }
    .n-stat-val { font-family: var(--font-head); font-size: 26px; font-weight: 800; color: var(--text); line-height: 1; }
    .n-stat-lbl { font-size: 11.5px; color: var(--text-muted); margin-top: 3px; }

    /* ── TABLE ── */
    .n-table-card { background: var(--white); border: 1px solid var(--border); border-radius: 18px; overflow: hidden; }
    .n-table-head { padding: 14px 20px; background: var(--purple-ghost); border-bottom: 1px solid var(--border); display: flex; align-items: center; justify-content: space-between; }
    .n-table-title { font-family: var(--font-head); font-size: 14px; font-weight: 700; color: var(--text); }
    .n-count-badge { font-size: 11px; padding: 3px 10px; border-radius: 20px; background: var(--nut-green-pale); color: var(--nut-green-dark); font-weight: 600; }

    table.n-table { width: 100%; border-collapse: collapse; }
    table.n-table th { padding: 11px 16px; text-align: left; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .7px; color: var(--text-muted); background: var(--purple-ghost); border-bottom: 1px solid var(--border); cursor: pointer; user-select: none; white-space: nowrap; }
    table.n-table th:hover { color: var(--nut-green); }
    table.n-table th.sorted { color: var(--nut-green); }
    table.n-table td { padding: 12px 16px; font-size: 13.5px; color: var(--text); border-bottom: 1px solid var(--purple-ghost); vertical-align: middle; }
    table.n-table tr:last-child td { border: none; }
    table.n-table tr:hover td { background: rgba(16,185,129,.04); }

    .food-name-text { font-weight: 600; color: var(--text); }
    .macro-mini { display: flex; align-items: center; gap: 6px; }
    .macro-mini .bar { width: 50px; height: 5px; background: #eee; border-radius: 4px; overflow: hidden; }
    .macro-mini .bar-fill { height: 100%; border-radius: 4px; }
    .macro-mini .val { font-size: 12.5px; font-weight: 600; color: var(--text); min-width: 36px; }
    .cal-badge { font-family: var(--font-head); font-size: 14px; font-weight: 700; color: var(--nut-orange); }

    .act-row { display: flex; gap: 6px; align-items: center; }
    .btn-sm-action { padding: 5px 11px; border-radius: 8px; font-size: 12px; font-weight: 500; border: 1.5px solid var(--border); cursor: pointer; background: none; transition: .12s; font-family: var(--font-body); }
    .btn-edit-act { color: var(--purple); }
    .btn-edit-act:hover { background: var(--purple-pale); border-color: var(--purple); }
    .btn-del-act { color: #E05252; }
    .btn-del-act:hover { background: #FEE2E2; border-color: #FCA5A5; }
    .empty-table { text-align: center; padding: 50px 20px; color: var(--text-muted); font-size: 14px; }

    /* ── MODAL ── */
    .n-modal-overlay { position: fixed; inset: 0; background: rgba(10,8,28,.55); display: flex; align-items: center; justify-content: center; z-index: 2000; backdrop-filter: blur(6px); opacity: 0; pointer-events: none; transition: opacity .2s; }
    .n-modal-overlay.open { opacity: 1; pointer-events: all; }
    .n-modal { background: var(--white); border-radius: 22px; width: 540px; max-width: 95vw; max-height: 92vh; overflow-y: auto; box-shadow: 0 32px 80px rgba(0,0,0,.22); transform: scale(.95) translateY(14px); transition: transform .25s; }
    .n-modal-overlay.open .n-modal { transform: scale(1) translateY(0); }
    .n-modal-header { padding: 22px 26px 18px; border-bottom: 1px solid var(--border); display: flex; align-items: center; justify-content: space-between; background: linear-gradient(135deg, #F0FDF4, #ECFDF5); }
    .n-modal-title { font-family: var(--font-head); font-size: 17px; font-weight: 800; color: var(--text); }
    .n-modal-close { background: none; border: none; cursor: pointer; font-size: 20px; color: var(--text-muted); width: 32px; height: 32px; border-radius: 8px; display: grid; place-items: center; transition: .12s; }
    .n-modal-close:hover { background: var(--nut-green-pale); color: var(--nut-green); }
    .n-modal-body { padding: 24px 26px; }
    .n-form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
    .n-form-group { display: flex; flex-direction: column; gap: 5px; }
    .n-form-group.full { grid-column: 1 / -1; }
    .n-form-group label { font-size: 12px; font-weight: 600; color: var(--text-mid); }
    .n-form-group input { padding: 10px 13px; border: 1.5px solid var(--border); border-radius: 10px; font-size: 14px; font-family: var(--font-body); color: var(--text); background: var(--purple-ghost); outline: none; transition: border-color .15s, box-shadow .15s; width: 100%; }
    .n-form-group input:focus { border-color: var(--nut-green); background: #fff; box-shadow: 0 0 0 3px rgba(16,185,129,.12); }
    .n-form-group.has-err input { border-color: var(--nut-red); }
    .n-form-group .err-msg { font-size: 11.5px; color: var(--nut-red); display: none; font-weight: 500; }
    .n-form-group.has-err .err-msg { display: block; }
    .req-star { color: var(--nut-red); }

    /* Macro verifier */
    .macro-verif { background: linear-gradient(135deg,#F0FDF4,#ECFDF5); border: 1px solid #A7F3D0; border-radius: 12px; padding: 14px 16px; margin-top: 14px; }
    .macro-verif-title { font-size: 12px; font-weight: 700; color: var(--nut-green-dark); margin-bottom: 10px; }
    .mv-row { display: flex; justify-content: space-between; font-size: 13px; margin: 4px 0; }
    .mv-label { color: var(--text-muted); }
    .mv-val { font-weight: 700; }
    .mv-ok { color: var(--nut-green); }
    .mv-warn { color: var(--nut-orange); }
    .mv-sep { height: 1px; background: rgba(16,185,129,.15); margin: 6px 0; }

    .n-modal-footer { padding: 16px 26px; border-top: 1px solid var(--border); display: flex; justify-content: flex-end; gap: 10px; background: var(--purple-ghost); border-radius: 0 0 22px 22px; }
    .btn-n-cancel { padding: 10px 20px; background: var(--white); border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13px; cursor: pointer; color: var(--text-mid); }
    .btn-n-save { padding: 10px 24px; background: linear-gradient(135deg, var(--nut-green), var(--nut-green-dark)); color: #fff; border: none; border-radius: 10px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 14px rgba(16,185,129,.35); transition: .15s; }
    .btn-n-save:hover { transform: translateY(-1px); }

    /* Delete confirm modal */
    .del-overlay { position: fixed; inset: 0; background: rgba(10,8,28,.55); display: flex; align-items: center; justify-content: center; z-index: 3000; backdrop-filter: blur(6px); opacity: 0; pointer-events: none; transition: opacity .2s; }
    .del-overlay.open { opacity: 1; pointer-events: all; }
    .del-box { background: var(--white); border-radius: 20px; width: 400px; max-width: 95vw; padding: 32px; box-shadow: 0 32px 80px rgba(0,0,0,.22); text-align: center; transform: scale(.92); transition: transform .2s; }
    .del-overlay.open .del-box { transform: scale(1); }
    .del-icon { font-size: 48px; margin-bottom: 12px; }
    .del-title { font-family: var(--font-head); font-size: 18px; font-weight: 800; color: var(--text); margin-bottom: 8px; }
    .del-sub { font-size: 13px; color: var(--text-muted); margin-bottom: 24px; line-height: 1.5; }
    .del-actions { display: flex; gap: 10px; justify-content: center; }
    .btn-del-cancel { padding: 10px 22px; background: var(--purple-ghost); border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13px; cursor: pointer; color: var(--text-mid); }
    .btn-del-confirm { padding: 10px 22px; background: #EF4444; color: #fff; border: none; border-radius: 10px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 14px rgba(239,68,68,.3); }

    /* Toast */
    .toast { position: fixed; bottom: 28px; right: 28px; padding: 13px 20px; border-radius: 12px; font-size: 13.5px; font-weight: 600; color: #fff; box-shadow: 0 8px 28px rgba(0,0,0,.2); z-index: 9999; transform: translateY(20px); opacity: 0; transition: all .3s; pointer-events: none; }
    .toast.show { transform: translateY(0); opacity: 1; }
    .toast.success { background: var(--nut-green); }
    .toast.error { background: var(--nut-red); }

    @keyframes rowIn { from { opacity:0; transform:translateX(-8px); } to { opacity:1; transform:none; } }
    .row-anim { animation: rowIn .22s ease both; }
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
<div class=\"n-toolbar\">
    <div class=\"n-search-wrap\">
        <span class=\"si\">🔍</span>
        <input type=\"text\" class=\"n-search\" id=\"foodSearch\" placeholder=\"Rechercher un aliment…\" oninput=\"filterFoods()\">
    </div>
    <select class=\"n-select\" id=\"sortSelect\" onchange=\"filterFoods()\">
        <option value=\"\">Trier par…</option>
        <option value=\"nom_asc\">Nom A → Z</option>
        <option value=\"nom_desc\">Nom Z → A</option>
        <option value=\"cal_desc\">Calories ↓</option>
        <option value=\"cal_asc\">Calories ↑</option>
        <option value=\"prot_desc\">Protéines ↓</option>
        <option value=\"gluc_desc\">Glucides ↓</option>
        <option value=\"lip_desc\">Lipides ↓</option>
    </select>
    <button class=\"btn-add-food\" onclick=\"openFoodModal()\">＋ Ajouter un aliment</button>
</div>

<!-- STATS -->
<div class=\"n-stats\">
    <div class=\"n-stat\">
        <div class=\"n-stat-icon\" style=\"background:#D1FAE5;\">🥗</div>
        <div><div class=\"n-stat-val\" id=\"stat-total\">—</div><div class=\"n-stat-lbl\">Total aliments</div></div>
    </div>
    <div class=\"n-stat\">
        <div class=\"n-stat-icon\" style=\"background:#FEF3C7;\">🔥</div>
        <div><div class=\"n-stat-val\" id=\"stat-avg-cal\">—</div><div class=\"n-stat-lbl\">Moy. calories (100g)</div></div>
    </div>
    <div class=\"n-stat\">
        <div class=\"n-stat-icon\" style=\"background:#EDE9FE;\">💪</div>
        <div><div class=\"n-stat-val\" id=\"stat-max-prot\">—</div><div class=\"n-stat-lbl\">Max protéines</div></div>
    </div>
    <div class=\"n-stat\">
        <div class=\"n-stat-icon\" style=\"background:#DBEAFE;\">📊</div>
        <div><div class=\"n-stat-val\" id=\"stat-affiches\">—</div><div class=\"n-stat-lbl\">Affichés</div></div>
    </div>
</div>

<!-- TABLE -->
<div class=\"n-table-card\">
    <div class=\"n-table-head\">
        <div class=\"n-table-title\">📋 Base de données alimentaire</div>
        <span class=\"n-count-badge\" id=\"count-badge\">Chargement…</span>
    </div>
    <table class=\"n-table\">
        <thead>
        <tr>
            <th onclick=\"colSort('nom')\">Aliment ↕</th>
            <th onclick=\"colSort('cal')\" id=\"th-cal\">Calories / 100g ↕</th>
            <th onclick=\"colSort('prot')\" id=\"th-prot\">Protéines ↕</th>
            <th onclick=\"colSort('lip')\" id=\"th-lip\">Lipides ↕</th>
            <th onclick=\"colSort('gluc')\" id=\"th-gluc\">Glucides ↕</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody id=\"foodTableBody\">
        <tr><td colspan=\"6\" class=\"empty-table\">⏳ Chargement…</td></tr>
        </tbody>
    </table>
</div>

<!-- MODAL ADD/EDIT -->
<div class=\"n-modal-overlay\" id=\"foodModalOverlay\" onclick=\"if(event.target===this)closeFoodModal()\">
    <div class=\"n-modal\">
        <div class=\"n-modal-header\">
            <div class=\"n-modal-title\" id=\"modalTitle\">🥗 Ajouter un aliment</div>
            <button class=\"n-modal-close\" onclick=\"closeFoodModal()\">✕</button>
        </div>
        <div class=\"n-modal-body\">
            <input type=\"hidden\" id=\"editId\">
            <div class=\"n-form-grid\">
                <div class=\"n-form-group full\" id=\"fg-nom\">
                    <label>Nom de l'aliment <span class=\"req-star\">*</span></label>
                    <input type=\"text\" id=\"f-nom\" placeholder=\"Ex : Poulet grillé\" maxlength=\"100\">
                    <span class=\"err-msg\">Ce champ est obligatoire</span>
                </div>
                <div class=\"n-form-group\" id=\"fg-cal\">
                    <label>Calories (kcal / 100g) <span class=\"req-star\">*</span></label>
                    <input type=\"number\" id=\"f-cal\" min=\"0\" max=\"9000\" step=\"1\" placeholder=\"Ex : 165\" oninput=\"updateMacroVerif()\">
                    <span class=\"err-msg\">Valeur entre 0 et 9000</span>
                </div>
                <div class=\"n-form-group\" id=\"fg-prot\">
                    <label>Protéines (g / 100g) <span class=\"req-star\">*</span></label>
                    <input type=\"number\" id=\"f-prot\" min=\"0\" max=\"100\" step=\"0.1\" placeholder=\"Ex : 31\" oninput=\"updateMacroVerif()\">
                    <span class=\"err-msg\">Valeur entre 0 et 100</span>
                </div>
                <div class=\"n-form-group\" id=\"fg-lip\">
                    <label>Lipides (g / 100g) <span class=\"req-star\">*</span></label>
                    <input type=\"number\" id=\"f-lip\" min=\"0\" max=\"100\" step=\"0.1\" placeholder=\"Ex : 3.6\" oninput=\"updateMacroVerif()\">
                    <span class=\"err-msg\">Valeur entre 0 et 100</span>
                </div>
                <div class=\"n-form-group\" id=\"fg-gluc\">
                    <label>Glucides (g / 100g) <span class=\"req-star\">*</span></label>
                    <input type=\"number\" id=\"f-gluc\" min=\"0\" max=\"100\" step=\"0.1\" placeholder=\"Ex : 0\" oninput=\"updateMacroVerif()\">
                    <span class=\"err-msg\">Valeur entre 0 et 100</span>
                </div>
            </div>
            <!-- Vérificateur calorique -->
            <div class=\"macro-verif\">
                <div class=\"macro-verif-title\">🔬 Vérificateur de cohérence calorique</div>
                <div class=\"mv-row\"><span class=\"mv-label\">Calories déclarées</span><span class=\"mv-val\" id=\"mv-declared\">—</span></div>
                <div class=\"mv-sep\"></div>
                <div class=\"mv-row\"><span class=\"mv-label\">Calculées (P×4 + G×4 + L×9)</span><span class=\"mv-val\" id=\"mv-computed\">—</span></div>
                <div class=\"mv-sep\"></div>
                <div class=\"mv-row\"><span class=\"mv-label\">Écart</span><span class=\"mv-val\" id=\"mv-diff\">—</span></div>
                <div class=\"mv-sep\"></div>
                <div class=\"mv-row\"><span class=\"mv-label\">Statut</span><span class=\"mv-val\" id=\"mv-status\">—</span></div>
            </div>
        </div>
        <div class=\"n-modal-footer\">
            <button class=\"btn-n-cancel\" onclick=\"closeFoodModal()\">Annuler</button>
            <button class=\"btn-n-save\" onclick=\"saveFoodItem()\">💾 Enregistrer</button>
        </div>
    </div>
</div>

<!-- MODAL SUPPRESSION -->
<div class=\"del-overlay\" id=\"delOverlay\">
    <div class=\"del-box\">
        <div class=\"del-icon\">🗑️</div>
        <div class=\"del-title\">Supprimer cet aliment ?</div>
        <div class=\"del-sub\" id=\"delSub\">Cette action est irréversible.</div>
        <div class=\"del-actions\">
            <button class=\"btn-del-cancel\" onclick=\"closeDelModal()\">Annuler</button>
            <button class=\"btn-del-confirm\" onclick=\"confirmDelete()\">Supprimer</button>
        </div>
    </div>
</div>

<!-- TOAST -->
<div class=\"toast\" id=\"toast\"></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 264
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

        // line 265
        yield "<script>
// ═══════════════════════════════════════════════════════════
//  STATE
// ═══════════════════════════════════════════════════════════
let foods = [];
let filteredFoods = [];
let deleteTargetId = null;
let colSortField = null;
let colSortDir   = 1;

// ═══════════════════════════════════════════════════════════
//  API — routes correspondant exactement au controller
// ═══════════════════════════════════════════════════════════
const API = {
    list:   '/admin/nutrition/api/list',
    create: '/admin/nutrition/api/create',
    update: (id) => `/admin/nutrition/api/update/\${id}`,
    delete: (id) => `/admin/nutrition/api/delete/\${id}`,
};

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

// ═══════════════════════════════════════════════════════════
//  CHARGEMENT
// ═══════════════════════════════════════════════════════════
async function loadFoods() {
    try {
        foods = await apiFetch(API.list);
        filterFoods();
    } catch(e) {
        document.getElementById('foodTableBody').innerHTML =
            `<tr><td colspan=\"6\" class=\"empty-table\">⚠️ Erreur : \${e.message}</td></tr>`;
    }
}

// ═══════════════════════════════════════════════════════════
//  FILTRE + TRI + RENDU
// ═══════════════════════════════════════════════════════════
function filterFoods() {
    const q   = document.getElementById('foodSearch').value.toLowerCase().trim();
    const srt = document.getElementById('sortSelect').value;

    filteredFoods = foods.filter(f =>
        !q || (f.nom||'').toLowerCase().includes(q)
    );

    const sorts = {
        nom_asc:  (a,b) => (a.nom||'').localeCompare(b.nom||''),
        nom_desc: (a,b) => (b.nom||'').localeCompare(a.nom||''),
        cal_desc: (a,b) => b.calories - a.calories,
        cal_asc:  (a,b) => a.calories - b.calories,
        prot_desc:(a,b) => b.proteines - a.proteines,
        gluc_desc:(a,b) => b.glucides - a.glucides,
        lip_desc: (a,b) => b.lipides - a.lipides,
    };
    if (srt && sorts[srt]) {
        filteredFoods.sort(sorts[srt]);
    } else if (colSortField) {
        filteredFoods.sort((a,b) => {
            const av = a[colSortField], bv = b[colSortField];
            return typeof av === 'string'
                ? av.localeCompare(bv) * colSortDir
                : (av - bv) * colSortDir;
        });
    }

    renderTable();
    updateStats();
}

function colSort(field) {
    if (colSortField === field) colSortDir *= -1;
    else { colSortField = field === 'nom' ? 'nom' : field === 'cal' ? 'calories' : field === 'prot' ? 'proteines' : field === 'lip' ? 'lipides' : 'glucides'; colSortDir = 1; }
    document.querySelectorAll('table.n-table th').forEach(th => th.classList.remove('sorted'));
    const map = {nom:'th-nom',cal:'th-cal',prot:'th-prot',lip:'th-lip',gluc:'th-gluc'};
    document.getElementById(map[field])?.classList.add('sorted');
    filterFoods();
}

function renderTable() {
    const tbody = document.getElementById('foodTableBody');
    document.getElementById('count-badge').textContent = filteredFoods.length + ' aliment(s)';
    document.getElementById('stat-affiches').textContent = filteredFoods.length;

    if (!filteredFoods.length) {
        tbody.innerHTML = `<tr><td colspan=\"6\" class=\"empty-table\">🔍 Aucun aliment trouvé.</td></tr>`;
        return;
    }

    const maxCal  = Math.max(...filteredFoods.map(f=>f.calories||0), 1);
    const maxProt = Math.max(...filteredFoods.map(f=>f.proteines||0), 1);
    const maxLip  = Math.max(...filteredFoods.map(f=>f.lipides||0), 1);
    const maxGluc = Math.max(...filteredFoods.map(f=>f.glucides||0), 1);

    tbody.innerHTML = filteredFoods.map((f, i) => `
        <tr class=\"row-anim\" style=\"animation-delay:\${Math.min(i*0.02,0.3)}s\">
            <td><span class=\"food-name-text\">\${esc(f.nom)}</span></td>
            <td><span class=\"cal-badge\">\${f.calories} kcal</span></td>
            <td>
                <div class=\"macro-mini\">
                    <div class=\"bar\"><div class=\"bar-fill\" style=\"width:\${pct(f.proteines,maxProt)}%;background:#8B5CF6\"></div></div>
                    <span class=\"val\">\${f.proteines}g</span>
                </div>
            </td>
            <td>
                <div class=\"macro-mini\">
                    <div class=\"bar\"><div class=\"bar-fill\" style=\"width:\${pct(f.lipides,maxLip)}%;background:#F59E0B\"></div></div>
                    <span class=\"val\">\${f.lipides}g</span>
                </div>
            </td>
            <td>
                <div class=\"macro-mini\">
                    <div class=\"bar\"><div class=\"bar-fill\" style=\"width:\${pct(f.glucides,maxGluc)}%;background:#3B82F6\"></div></div>
                    <span class=\"val\">\${f.glucides}g</span>
                </div>
            </td>
            <td>
                <div class=\"act-row\">
                    <button class=\"btn-sm-action btn-edit-act\" onclick=\"editFood(\${f.id})\">✏ Modifier</button>
                    <button class=\"btn-sm-action btn-del-act\" onclick=\"askDelete(\${f.id},'\${esc(f.nom)}')\">🗑</button>
                </div>
            </td>
        </tr>`).join('');
}

function updateStats() {
    document.getElementById('stat-total').textContent = foods.length;
    if (!foods.length) return;
    const avg = Math.round(foods.reduce((s,f)=>s+(f.calories||0),0) / foods.length);
    const maxP = Math.max(...foods.map(f=>f.proteines||0));
    document.getElementById('stat-avg-cal').textContent = avg + ' kcal';
    document.getElementById('stat-max-prot').textContent = maxP + 'g';
}

// ═══════════════════════════════════════════════════════════
//  MODAL OPEN / CLOSE
// ═══════════════════════════════════════════════════════════
function openFoodModal(food = null) {
    clearErrors();
    document.getElementById('editId').value  = food ? food.id : '';
    document.getElementById('f-nom').value   = food ? (food.nom||'') : '';
    document.getElementById('f-cal').value   = food ? food.calories : '';
    document.getElementById('f-prot').value  = food ? food.proteines : '';
    document.getElementById('f-lip').value   = food ? food.lipides : '';
    document.getElementById('f-gluc').value  = food ? food.glucides : '';
    document.getElementById('modalTitle').textContent = food ? '✏️ Modifier l\\'aliment' : '🥗 Ajouter un aliment';
    updateMacroVerif();
    document.getElementById('foodModalOverlay').classList.add('open');
    setTimeout(() => document.getElementById('f-nom').focus(), 100);
}

function closeFoodModal() {
    document.getElementById('foodModalOverlay').classList.remove('open');
}

function editFood(id) {
    const food = foods.find(f => f.id === id);
    if (food) openFoodModal(food);
}

function askDelete(id, nom) {
    deleteTargetId = id;
    document.getElementById('delSub').textContent = `Supprimer « \${nom} » ? Cette action est irréversible.`;
    document.getElementById('delOverlay').classList.add('open');
}

function closeDelModal() {
    deleteTargetId = null;
    document.getElementById('delOverlay').classList.remove('open');
}

// ═══════════════════════════════════════════════════════════
//  CRUD
// ═══════════════════════════════════════════════════════════
async function saveFoodItem() {
    if (!validateForm()) return;

    const id   = document.getElementById('editId').value;
    const body = {
        nomAliment: document.getElementById('f-nom').value.trim(),
        calories:   parseFloat(document.getElementById('f-cal').value),
        proteines:  parseFloat(document.getElementById('f-prot').value),
        lipides:    parseFloat(document.getElementById('f-lip').value),
        glucides:   parseFloat(document.getElementById('f-gluc').value),
    };

    try {
        const url  = id ? API.update(id) : API.create;
        const saved = await apiFetch(url, { method: 'POST', body: JSON.stringify(body) });

        if (id) {
            const idx = foods.findIndex(f => f.id === parseInt(id));
            if (idx !== -1) foods[idx] = saved;
            showToast('✅ Aliment modifié avec succès', 'success');
        } else {
            foods.unshift(saved);
            showToast('✅ Aliment ajouté avec succès', 'success');
        }
        closeFoodModal();
        filterFoods();
    } catch(e) {
        showToast('❌ ' + e.message, 'error');
    }
}

async function confirmDelete() {
    if (!deleteTargetId) return;
    try {
        await apiFetch(API.delete(deleteTargetId), { method: 'POST' });
        foods = foods.filter(f => f.id !== deleteTargetId);
        closeDelModal();
        filterFoods();
        showToast('🗑️ Aliment supprimé', 'success');
    } catch(e) {
        showToast('❌ ' + e.message, 'error');
    }
}

// ═══════════════════════════════════════════════════════════
//  VALIDATION
// ═══════════════════════════════════════════════════════════
function validateForm() {
    clearErrors();
    let valid = true;

    if (!document.getElementById('f-nom').value.trim()) {
        setErr('fg-nom'); valid = false;
    }
    const cal = parseFloat(document.getElementById('f-cal').value);
    if (isNaN(cal) || cal < 0 || cal > 9000) { setErr('fg-cal'); valid = false; }

    const prot = parseFloat(document.getElementById('f-prot').value);
    if (isNaN(prot) || prot < 0 || prot > 100) { setErr('fg-prot'); valid = false; }

    const lip = parseFloat(document.getElementById('f-lip').value);
    if (isNaN(lip) || lip < 0 || lip > 100) { setErr('fg-lip'); valid = false; }

    const gluc = parseFloat(document.getElementById('f-gluc').value);
    if (isNaN(gluc) || gluc < 0 || gluc > 100) { setErr('fg-gluc'); valid = false; }

    return valid;
}

function setErr(id) { document.getElementById(id).classList.add('has-err'); }
function clearErrors() { document.querySelectorAll('.n-form-group.has-err').forEach(el => el.classList.remove('has-err')); }

// ═══════════════════════════════════════════════════════════
//  VÉRIFICATEUR CALORIQUE
// ═══════════════════════════════════════════════════════════
function updateMacroVerif() {
    const cal  = parseFloat(document.getElementById('f-cal').value)  || 0;
    const prot = parseFloat(document.getElementById('f-prot').value) || 0;
    const lip  = parseFloat(document.getElementById('f-lip').value)  || 0;
    const gluc = parseFloat(document.getElementById('f-gluc').value) || 0;
    const computed = +(prot * 4 + gluc * 4 + lip * 9).toFixed(1);
    const diff     = +(cal - computed).toFixed(1);
    const ok = Math.abs(diff) <= 20;

    document.getElementById('mv-declared').textContent = cal + ' kcal';
    document.getElementById('mv-computed').textContent = computed + ' kcal';
    document.getElementById('mv-diff').textContent = (diff > 0 ? '+' : '') + diff + ' kcal';
    const st = document.getElementById('mv-status');
    st.textContent = ok ? '✅ Cohérent' : '⚠️ Écart > 20 kcal';
    st.className = 'mv-val ' + (ok ? 'mv-ok' : 'mv-warn');
}

// ═══════════════════════════════════════════════════════════
//  TOAST
// ═══════════════════════════════════════════════════════════
function showToast(msg, type) {
    const t = document.getElementById('toast');
    t.textContent = msg;
    t.className = 'toast ' + type + ' show';
    setTimeout(() => t.classList.remove('show'), 3500);
}

// ═══════════════════════════════════════════════════════════
//  UTILS
// ═══════════════════════════════════════════════════════════
function esc(s) { return String(s||'').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;'); }
function pct(v, max) { return max > 0 ? Math.min(100, Math.round((v/max)*100)) : 0; }

// ═══════════════════════════════════════════════════════════
//  INIT
// ═══════════════════════════════════════════════════════════
loadFoods();
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
        return "admin/nutrition.html.twig";
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
        return array (  427 => 265,  414 => 264,  270 => 129,  257 => 128,  126 => 6,  113 => 5,  90 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %}Gestion Nutrition — Harmony{% endblock %}
{% block page_title %}🥗 Gestion de la Nutrition{% endblock %}

{% block stylesheets %}
<style>
    :root {
        --nut-green: #10B981; --nut-green-dark: #059669; --nut-green-pale: #D1FAE5;
        --nut-orange: #F59E0B; --nut-red: #EF4444; --nut-blue: #3B82F6; --nut-purple: #8B5CF6;
    }

    /* ── TOOLBAR ── */
    .n-toolbar {
        display: flex; align-items: center; gap: 12px; margin-bottom: 22px; flex-wrap: wrap;
        background: var(--white); border: 1px solid var(--border); border-radius: 14px; padding: 14px 18px;
    }
    .n-search-wrap { position: relative; flex: 1; min-width: 220px; }
    .n-search-wrap .si { position: absolute; left: 13px; top: 50%; transform: translateY(-50%); font-size: 14px; pointer-events: none; opacity: .5; }
    .n-search { width: 100%; padding: 9px 14px 9px 40px; border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13.5px; color: var(--text); background: var(--purple-ghost); outline: none; transition: border-color .15s; }
    .n-search:focus { border-color: var(--nut-green); background: #fff; }
    .n-select { padding: 9px 13px; border: 1.5px solid var(--border); border-radius: 10px; font-size: 13px; font-family: var(--font-body); color: var(--text); background: var(--purple-ghost); outline: none; cursor: pointer; }
    .n-select:focus { border-color: var(--nut-green); }
    .btn-add-food {
        display: inline-flex; align-items: center; gap: 7px; padding: 10px 20px;
        background: linear-gradient(135deg, var(--nut-green), var(--nut-green-dark));
        color: #fff; border: none; border-radius: 10px; font-family: var(--font-body);
        font-size: 13px; font-weight: 600; cursor: pointer;
        box-shadow: 0 4px 14px rgba(16,185,129,.35); transition: .15s; white-space: nowrap;
    }
    .btn-add-food:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(16,185,129,.45); }

    /* ── STATS ── */
    .n-stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; margin-bottom: 22px; }
    .n-stat { background: var(--white); border: 1px solid var(--border); border-radius: 14px; padding: 18px 20px; display: flex; align-items: center; gap: 14px; transition: box-shadow .2s; }
    .n-stat:hover { box-shadow: 0 4px 18px rgba(0,0,0,.07); }
    .n-stat-icon { width: 44px; height: 44px; border-radius: 12px; display: grid; place-items: center; font-size: 20px; flex-shrink: 0; }
    .n-stat-val { font-family: var(--font-head); font-size: 26px; font-weight: 800; color: var(--text); line-height: 1; }
    .n-stat-lbl { font-size: 11.5px; color: var(--text-muted); margin-top: 3px; }

    /* ── TABLE ── */
    .n-table-card { background: var(--white); border: 1px solid var(--border); border-radius: 18px; overflow: hidden; }
    .n-table-head { padding: 14px 20px; background: var(--purple-ghost); border-bottom: 1px solid var(--border); display: flex; align-items: center; justify-content: space-between; }
    .n-table-title { font-family: var(--font-head); font-size: 14px; font-weight: 700; color: var(--text); }
    .n-count-badge { font-size: 11px; padding: 3px 10px; border-radius: 20px; background: var(--nut-green-pale); color: var(--nut-green-dark); font-weight: 600; }

    table.n-table { width: 100%; border-collapse: collapse; }
    table.n-table th { padding: 11px 16px; text-align: left; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .7px; color: var(--text-muted); background: var(--purple-ghost); border-bottom: 1px solid var(--border); cursor: pointer; user-select: none; white-space: nowrap; }
    table.n-table th:hover { color: var(--nut-green); }
    table.n-table th.sorted { color: var(--nut-green); }
    table.n-table td { padding: 12px 16px; font-size: 13.5px; color: var(--text); border-bottom: 1px solid var(--purple-ghost); vertical-align: middle; }
    table.n-table tr:last-child td { border: none; }
    table.n-table tr:hover td { background: rgba(16,185,129,.04); }

    .food-name-text { font-weight: 600; color: var(--text); }
    .macro-mini { display: flex; align-items: center; gap: 6px; }
    .macro-mini .bar { width: 50px; height: 5px; background: #eee; border-radius: 4px; overflow: hidden; }
    .macro-mini .bar-fill { height: 100%; border-radius: 4px; }
    .macro-mini .val { font-size: 12.5px; font-weight: 600; color: var(--text); min-width: 36px; }
    .cal-badge { font-family: var(--font-head); font-size: 14px; font-weight: 700; color: var(--nut-orange); }

    .act-row { display: flex; gap: 6px; align-items: center; }
    .btn-sm-action { padding: 5px 11px; border-radius: 8px; font-size: 12px; font-weight: 500; border: 1.5px solid var(--border); cursor: pointer; background: none; transition: .12s; font-family: var(--font-body); }
    .btn-edit-act { color: var(--purple); }
    .btn-edit-act:hover { background: var(--purple-pale); border-color: var(--purple); }
    .btn-del-act { color: #E05252; }
    .btn-del-act:hover { background: #FEE2E2; border-color: #FCA5A5; }
    .empty-table { text-align: center; padding: 50px 20px; color: var(--text-muted); font-size: 14px; }

    /* ── MODAL ── */
    .n-modal-overlay { position: fixed; inset: 0; background: rgba(10,8,28,.55); display: flex; align-items: center; justify-content: center; z-index: 2000; backdrop-filter: blur(6px); opacity: 0; pointer-events: none; transition: opacity .2s; }
    .n-modal-overlay.open { opacity: 1; pointer-events: all; }
    .n-modal { background: var(--white); border-radius: 22px; width: 540px; max-width: 95vw; max-height: 92vh; overflow-y: auto; box-shadow: 0 32px 80px rgba(0,0,0,.22); transform: scale(.95) translateY(14px); transition: transform .25s; }
    .n-modal-overlay.open .n-modal { transform: scale(1) translateY(0); }
    .n-modal-header { padding: 22px 26px 18px; border-bottom: 1px solid var(--border); display: flex; align-items: center; justify-content: space-between; background: linear-gradient(135deg, #F0FDF4, #ECFDF5); }
    .n-modal-title { font-family: var(--font-head); font-size: 17px; font-weight: 800; color: var(--text); }
    .n-modal-close { background: none; border: none; cursor: pointer; font-size: 20px; color: var(--text-muted); width: 32px; height: 32px; border-radius: 8px; display: grid; place-items: center; transition: .12s; }
    .n-modal-close:hover { background: var(--nut-green-pale); color: var(--nut-green); }
    .n-modal-body { padding: 24px 26px; }
    .n-form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
    .n-form-group { display: flex; flex-direction: column; gap: 5px; }
    .n-form-group.full { grid-column: 1 / -1; }
    .n-form-group label { font-size: 12px; font-weight: 600; color: var(--text-mid); }
    .n-form-group input { padding: 10px 13px; border: 1.5px solid var(--border); border-radius: 10px; font-size: 14px; font-family: var(--font-body); color: var(--text); background: var(--purple-ghost); outline: none; transition: border-color .15s, box-shadow .15s; width: 100%; }
    .n-form-group input:focus { border-color: var(--nut-green); background: #fff; box-shadow: 0 0 0 3px rgba(16,185,129,.12); }
    .n-form-group.has-err input { border-color: var(--nut-red); }
    .n-form-group .err-msg { font-size: 11.5px; color: var(--nut-red); display: none; font-weight: 500; }
    .n-form-group.has-err .err-msg { display: block; }
    .req-star { color: var(--nut-red); }

    /* Macro verifier */
    .macro-verif { background: linear-gradient(135deg,#F0FDF4,#ECFDF5); border: 1px solid #A7F3D0; border-radius: 12px; padding: 14px 16px; margin-top: 14px; }
    .macro-verif-title { font-size: 12px; font-weight: 700; color: var(--nut-green-dark); margin-bottom: 10px; }
    .mv-row { display: flex; justify-content: space-between; font-size: 13px; margin: 4px 0; }
    .mv-label { color: var(--text-muted); }
    .mv-val { font-weight: 700; }
    .mv-ok { color: var(--nut-green); }
    .mv-warn { color: var(--nut-orange); }
    .mv-sep { height: 1px; background: rgba(16,185,129,.15); margin: 6px 0; }

    .n-modal-footer { padding: 16px 26px; border-top: 1px solid var(--border); display: flex; justify-content: flex-end; gap: 10px; background: var(--purple-ghost); border-radius: 0 0 22px 22px; }
    .btn-n-cancel { padding: 10px 20px; background: var(--white); border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13px; cursor: pointer; color: var(--text-mid); }
    .btn-n-save { padding: 10px 24px; background: linear-gradient(135deg, var(--nut-green), var(--nut-green-dark)); color: #fff; border: none; border-radius: 10px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 14px rgba(16,185,129,.35); transition: .15s; }
    .btn-n-save:hover { transform: translateY(-1px); }

    /* Delete confirm modal */
    .del-overlay { position: fixed; inset: 0; background: rgba(10,8,28,.55); display: flex; align-items: center; justify-content: center; z-index: 3000; backdrop-filter: blur(6px); opacity: 0; pointer-events: none; transition: opacity .2s; }
    .del-overlay.open { opacity: 1; pointer-events: all; }
    .del-box { background: var(--white); border-radius: 20px; width: 400px; max-width: 95vw; padding: 32px; box-shadow: 0 32px 80px rgba(0,0,0,.22); text-align: center; transform: scale(.92); transition: transform .2s; }
    .del-overlay.open .del-box { transform: scale(1); }
    .del-icon { font-size: 48px; margin-bottom: 12px; }
    .del-title { font-family: var(--font-head); font-size: 18px; font-weight: 800; color: var(--text); margin-bottom: 8px; }
    .del-sub { font-size: 13px; color: var(--text-muted); margin-bottom: 24px; line-height: 1.5; }
    .del-actions { display: flex; gap: 10px; justify-content: center; }
    .btn-del-cancel { padding: 10px 22px; background: var(--purple-ghost); border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 13px; cursor: pointer; color: var(--text-mid); }
    .btn-del-confirm { padding: 10px 22px; background: #EF4444; color: #fff; border: none; border-radius: 10px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 14px rgba(239,68,68,.3); }

    /* Toast */
    .toast { position: fixed; bottom: 28px; right: 28px; padding: 13px 20px; border-radius: 12px; font-size: 13.5px; font-weight: 600; color: #fff; box-shadow: 0 8px 28px rgba(0,0,0,.2); z-index: 9999; transform: translateY(20px); opacity: 0; transition: all .3s; pointer-events: none; }
    .toast.show { transform: translateY(0); opacity: 1; }
    .toast.success { background: var(--nut-green); }
    .toast.error { background: var(--nut-red); }

    @keyframes rowIn { from { opacity:0; transform:translateX(-8px); } to { opacity:1; transform:none; } }
    .row-anim { animation: rowIn .22s ease both; }
</style>
{% endblock %}

{% block body %}

<div class=\"n-toolbar\">
    <div class=\"n-search-wrap\">
        <span class=\"si\">🔍</span>
        <input type=\"text\" class=\"n-search\" id=\"foodSearch\" placeholder=\"Rechercher un aliment…\" oninput=\"filterFoods()\">
    </div>
    <select class=\"n-select\" id=\"sortSelect\" onchange=\"filterFoods()\">
        <option value=\"\">Trier par…</option>
        <option value=\"nom_asc\">Nom A → Z</option>
        <option value=\"nom_desc\">Nom Z → A</option>
        <option value=\"cal_desc\">Calories ↓</option>
        <option value=\"cal_asc\">Calories ↑</option>
        <option value=\"prot_desc\">Protéines ↓</option>
        <option value=\"gluc_desc\">Glucides ↓</option>
        <option value=\"lip_desc\">Lipides ↓</option>
    </select>
    <button class=\"btn-add-food\" onclick=\"openFoodModal()\">＋ Ajouter un aliment</button>
</div>

<!-- STATS -->
<div class=\"n-stats\">
    <div class=\"n-stat\">
        <div class=\"n-stat-icon\" style=\"background:#D1FAE5;\">🥗</div>
        <div><div class=\"n-stat-val\" id=\"stat-total\">—</div><div class=\"n-stat-lbl\">Total aliments</div></div>
    </div>
    <div class=\"n-stat\">
        <div class=\"n-stat-icon\" style=\"background:#FEF3C7;\">🔥</div>
        <div><div class=\"n-stat-val\" id=\"stat-avg-cal\">—</div><div class=\"n-stat-lbl\">Moy. calories (100g)</div></div>
    </div>
    <div class=\"n-stat\">
        <div class=\"n-stat-icon\" style=\"background:#EDE9FE;\">💪</div>
        <div><div class=\"n-stat-val\" id=\"stat-max-prot\">—</div><div class=\"n-stat-lbl\">Max protéines</div></div>
    </div>
    <div class=\"n-stat\">
        <div class=\"n-stat-icon\" style=\"background:#DBEAFE;\">📊</div>
        <div><div class=\"n-stat-val\" id=\"stat-affiches\">—</div><div class=\"n-stat-lbl\">Affichés</div></div>
    </div>
</div>

<!-- TABLE -->
<div class=\"n-table-card\">
    <div class=\"n-table-head\">
        <div class=\"n-table-title\">📋 Base de données alimentaire</div>
        <span class=\"n-count-badge\" id=\"count-badge\">Chargement…</span>
    </div>
    <table class=\"n-table\">
        <thead>
        <tr>
            <th onclick=\"colSort('nom')\">Aliment ↕</th>
            <th onclick=\"colSort('cal')\" id=\"th-cal\">Calories / 100g ↕</th>
            <th onclick=\"colSort('prot')\" id=\"th-prot\">Protéines ↕</th>
            <th onclick=\"colSort('lip')\" id=\"th-lip\">Lipides ↕</th>
            <th onclick=\"colSort('gluc')\" id=\"th-gluc\">Glucides ↕</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody id=\"foodTableBody\">
        <tr><td colspan=\"6\" class=\"empty-table\">⏳ Chargement…</td></tr>
        </tbody>
    </table>
</div>

<!-- MODAL ADD/EDIT -->
<div class=\"n-modal-overlay\" id=\"foodModalOverlay\" onclick=\"if(event.target===this)closeFoodModal()\">
    <div class=\"n-modal\">
        <div class=\"n-modal-header\">
            <div class=\"n-modal-title\" id=\"modalTitle\">🥗 Ajouter un aliment</div>
            <button class=\"n-modal-close\" onclick=\"closeFoodModal()\">✕</button>
        </div>
        <div class=\"n-modal-body\">
            <input type=\"hidden\" id=\"editId\">
            <div class=\"n-form-grid\">
                <div class=\"n-form-group full\" id=\"fg-nom\">
                    <label>Nom de l'aliment <span class=\"req-star\">*</span></label>
                    <input type=\"text\" id=\"f-nom\" placeholder=\"Ex : Poulet grillé\" maxlength=\"100\">
                    <span class=\"err-msg\">Ce champ est obligatoire</span>
                </div>
                <div class=\"n-form-group\" id=\"fg-cal\">
                    <label>Calories (kcal / 100g) <span class=\"req-star\">*</span></label>
                    <input type=\"number\" id=\"f-cal\" min=\"0\" max=\"9000\" step=\"1\" placeholder=\"Ex : 165\" oninput=\"updateMacroVerif()\">
                    <span class=\"err-msg\">Valeur entre 0 et 9000</span>
                </div>
                <div class=\"n-form-group\" id=\"fg-prot\">
                    <label>Protéines (g / 100g) <span class=\"req-star\">*</span></label>
                    <input type=\"number\" id=\"f-prot\" min=\"0\" max=\"100\" step=\"0.1\" placeholder=\"Ex : 31\" oninput=\"updateMacroVerif()\">
                    <span class=\"err-msg\">Valeur entre 0 et 100</span>
                </div>
                <div class=\"n-form-group\" id=\"fg-lip\">
                    <label>Lipides (g / 100g) <span class=\"req-star\">*</span></label>
                    <input type=\"number\" id=\"f-lip\" min=\"0\" max=\"100\" step=\"0.1\" placeholder=\"Ex : 3.6\" oninput=\"updateMacroVerif()\">
                    <span class=\"err-msg\">Valeur entre 0 et 100</span>
                </div>
                <div class=\"n-form-group\" id=\"fg-gluc\">
                    <label>Glucides (g / 100g) <span class=\"req-star\">*</span></label>
                    <input type=\"number\" id=\"f-gluc\" min=\"0\" max=\"100\" step=\"0.1\" placeholder=\"Ex : 0\" oninput=\"updateMacroVerif()\">
                    <span class=\"err-msg\">Valeur entre 0 et 100</span>
                </div>
            </div>
            <!-- Vérificateur calorique -->
            <div class=\"macro-verif\">
                <div class=\"macro-verif-title\">🔬 Vérificateur de cohérence calorique</div>
                <div class=\"mv-row\"><span class=\"mv-label\">Calories déclarées</span><span class=\"mv-val\" id=\"mv-declared\">—</span></div>
                <div class=\"mv-sep\"></div>
                <div class=\"mv-row\"><span class=\"mv-label\">Calculées (P×4 + G×4 + L×9)</span><span class=\"mv-val\" id=\"mv-computed\">—</span></div>
                <div class=\"mv-sep\"></div>
                <div class=\"mv-row\"><span class=\"mv-label\">Écart</span><span class=\"mv-val\" id=\"mv-diff\">—</span></div>
                <div class=\"mv-sep\"></div>
                <div class=\"mv-row\"><span class=\"mv-label\">Statut</span><span class=\"mv-val\" id=\"mv-status\">—</span></div>
            </div>
        </div>
        <div class=\"n-modal-footer\">
            <button class=\"btn-n-cancel\" onclick=\"closeFoodModal()\">Annuler</button>
            <button class=\"btn-n-save\" onclick=\"saveFoodItem()\">💾 Enregistrer</button>
        </div>
    </div>
</div>

<!-- MODAL SUPPRESSION -->
<div class=\"del-overlay\" id=\"delOverlay\">
    <div class=\"del-box\">
        <div class=\"del-icon\">🗑️</div>
        <div class=\"del-title\">Supprimer cet aliment ?</div>
        <div class=\"del-sub\" id=\"delSub\">Cette action est irréversible.</div>
        <div class=\"del-actions\">
            <button class=\"btn-del-cancel\" onclick=\"closeDelModal()\">Annuler</button>
            <button class=\"btn-del-confirm\" onclick=\"confirmDelete()\">Supprimer</button>
        </div>
    </div>
</div>

<!-- TOAST -->
<div class=\"toast\" id=\"toast\"></div>

{% endblock %}

{% block javascripts %}
<script>
// ═══════════════════════════════════════════════════════════
//  STATE
// ═══════════════════════════════════════════════════════════
let foods = [];
let filteredFoods = [];
let deleteTargetId = null;
let colSortField = null;
let colSortDir   = 1;

// ═══════════════════════════════════════════════════════════
//  API — routes correspondant exactement au controller
// ═══════════════════════════════════════════════════════════
const API = {
    list:   '/admin/nutrition/api/list',
    create: '/admin/nutrition/api/create',
    update: (id) => `/admin/nutrition/api/update/\${id}`,
    delete: (id) => `/admin/nutrition/api/delete/\${id}`,
};

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

// ═══════════════════════════════════════════════════════════
//  CHARGEMENT
// ═══════════════════════════════════════════════════════════
async function loadFoods() {
    try {
        foods = await apiFetch(API.list);
        filterFoods();
    } catch(e) {
        document.getElementById('foodTableBody').innerHTML =
            `<tr><td colspan=\"6\" class=\"empty-table\">⚠️ Erreur : \${e.message}</td></tr>`;
    }
}

// ═══════════════════════════════════════════════════════════
//  FILTRE + TRI + RENDU
// ═══════════════════════════════════════════════════════════
function filterFoods() {
    const q   = document.getElementById('foodSearch').value.toLowerCase().trim();
    const srt = document.getElementById('sortSelect').value;

    filteredFoods = foods.filter(f =>
        !q || (f.nom||'').toLowerCase().includes(q)
    );

    const sorts = {
        nom_asc:  (a,b) => (a.nom||'').localeCompare(b.nom||''),
        nom_desc: (a,b) => (b.nom||'').localeCompare(a.nom||''),
        cal_desc: (a,b) => b.calories - a.calories,
        cal_asc:  (a,b) => a.calories - b.calories,
        prot_desc:(a,b) => b.proteines - a.proteines,
        gluc_desc:(a,b) => b.glucides - a.glucides,
        lip_desc: (a,b) => b.lipides - a.lipides,
    };
    if (srt && sorts[srt]) {
        filteredFoods.sort(sorts[srt]);
    } else if (colSortField) {
        filteredFoods.sort((a,b) => {
            const av = a[colSortField], bv = b[colSortField];
            return typeof av === 'string'
                ? av.localeCompare(bv) * colSortDir
                : (av - bv) * colSortDir;
        });
    }

    renderTable();
    updateStats();
}

function colSort(field) {
    if (colSortField === field) colSortDir *= -1;
    else { colSortField = field === 'nom' ? 'nom' : field === 'cal' ? 'calories' : field === 'prot' ? 'proteines' : field === 'lip' ? 'lipides' : 'glucides'; colSortDir = 1; }
    document.querySelectorAll('table.n-table th').forEach(th => th.classList.remove('sorted'));
    const map = {nom:'th-nom',cal:'th-cal',prot:'th-prot',lip:'th-lip',gluc:'th-gluc'};
    document.getElementById(map[field])?.classList.add('sorted');
    filterFoods();
}

function renderTable() {
    const tbody = document.getElementById('foodTableBody');
    document.getElementById('count-badge').textContent = filteredFoods.length + ' aliment(s)';
    document.getElementById('stat-affiches').textContent = filteredFoods.length;

    if (!filteredFoods.length) {
        tbody.innerHTML = `<tr><td colspan=\"6\" class=\"empty-table\">🔍 Aucun aliment trouvé.</td></tr>`;
        return;
    }

    const maxCal  = Math.max(...filteredFoods.map(f=>f.calories||0), 1);
    const maxProt = Math.max(...filteredFoods.map(f=>f.proteines||0), 1);
    const maxLip  = Math.max(...filteredFoods.map(f=>f.lipides||0), 1);
    const maxGluc = Math.max(...filteredFoods.map(f=>f.glucides||0), 1);

    tbody.innerHTML = filteredFoods.map((f, i) => `
        <tr class=\"row-anim\" style=\"animation-delay:\${Math.min(i*0.02,0.3)}s\">
            <td><span class=\"food-name-text\">\${esc(f.nom)}</span></td>
            <td><span class=\"cal-badge\">\${f.calories} kcal</span></td>
            <td>
                <div class=\"macro-mini\">
                    <div class=\"bar\"><div class=\"bar-fill\" style=\"width:\${pct(f.proteines,maxProt)}%;background:#8B5CF6\"></div></div>
                    <span class=\"val\">\${f.proteines}g</span>
                </div>
            </td>
            <td>
                <div class=\"macro-mini\">
                    <div class=\"bar\"><div class=\"bar-fill\" style=\"width:\${pct(f.lipides,maxLip)}%;background:#F59E0B\"></div></div>
                    <span class=\"val\">\${f.lipides}g</span>
                </div>
            </td>
            <td>
                <div class=\"macro-mini\">
                    <div class=\"bar\"><div class=\"bar-fill\" style=\"width:\${pct(f.glucides,maxGluc)}%;background:#3B82F6\"></div></div>
                    <span class=\"val\">\${f.glucides}g</span>
                </div>
            </td>
            <td>
                <div class=\"act-row\">
                    <button class=\"btn-sm-action btn-edit-act\" onclick=\"editFood(\${f.id})\">✏ Modifier</button>
                    <button class=\"btn-sm-action btn-del-act\" onclick=\"askDelete(\${f.id},'\${esc(f.nom)}')\">🗑</button>
                </div>
            </td>
        </tr>`).join('');
}

function updateStats() {
    document.getElementById('stat-total').textContent = foods.length;
    if (!foods.length) return;
    const avg = Math.round(foods.reduce((s,f)=>s+(f.calories||0),0) / foods.length);
    const maxP = Math.max(...foods.map(f=>f.proteines||0));
    document.getElementById('stat-avg-cal').textContent = avg + ' kcal';
    document.getElementById('stat-max-prot').textContent = maxP + 'g';
}

// ═══════════════════════════════════════════════════════════
//  MODAL OPEN / CLOSE
// ═══════════════════════════════════════════════════════════
function openFoodModal(food = null) {
    clearErrors();
    document.getElementById('editId').value  = food ? food.id : '';
    document.getElementById('f-nom').value   = food ? (food.nom||'') : '';
    document.getElementById('f-cal').value   = food ? food.calories : '';
    document.getElementById('f-prot').value  = food ? food.proteines : '';
    document.getElementById('f-lip').value   = food ? food.lipides : '';
    document.getElementById('f-gluc').value  = food ? food.glucides : '';
    document.getElementById('modalTitle').textContent = food ? '✏️ Modifier l\\'aliment' : '🥗 Ajouter un aliment';
    updateMacroVerif();
    document.getElementById('foodModalOverlay').classList.add('open');
    setTimeout(() => document.getElementById('f-nom').focus(), 100);
}

function closeFoodModal() {
    document.getElementById('foodModalOverlay').classList.remove('open');
}

function editFood(id) {
    const food = foods.find(f => f.id === id);
    if (food) openFoodModal(food);
}

function askDelete(id, nom) {
    deleteTargetId = id;
    document.getElementById('delSub').textContent = `Supprimer « \${nom} » ? Cette action est irréversible.`;
    document.getElementById('delOverlay').classList.add('open');
}

function closeDelModal() {
    deleteTargetId = null;
    document.getElementById('delOverlay').classList.remove('open');
}

// ═══════════════════════════════════════════════════════════
//  CRUD
// ═══════════════════════════════════════════════════════════
async function saveFoodItem() {
    if (!validateForm()) return;

    const id   = document.getElementById('editId').value;
    const body = {
        nomAliment: document.getElementById('f-nom').value.trim(),
        calories:   parseFloat(document.getElementById('f-cal').value),
        proteines:  parseFloat(document.getElementById('f-prot').value),
        lipides:    parseFloat(document.getElementById('f-lip').value),
        glucides:   parseFloat(document.getElementById('f-gluc').value),
    };

    try {
        const url  = id ? API.update(id) : API.create;
        const saved = await apiFetch(url, { method: 'POST', body: JSON.stringify(body) });

        if (id) {
            const idx = foods.findIndex(f => f.id === parseInt(id));
            if (idx !== -1) foods[idx] = saved;
            showToast('✅ Aliment modifié avec succès', 'success');
        } else {
            foods.unshift(saved);
            showToast('✅ Aliment ajouté avec succès', 'success');
        }
        closeFoodModal();
        filterFoods();
    } catch(e) {
        showToast('❌ ' + e.message, 'error');
    }
}

async function confirmDelete() {
    if (!deleteTargetId) return;
    try {
        await apiFetch(API.delete(deleteTargetId), { method: 'POST' });
        foods = foods.filter(f => f.id !== deleteTargetId);
        closeDelModal();
        filterFoods();
        showToast('🗑️ Aliment supprimé', 'success');
    } catch(e) {
        showToast('❌ ' + e.message, 'error');
    }
}

// ═══════════════════════════════════════════════════════════
//  VALIDATION
// ═══════════════════════════════════════════════════════════
function validateForm() {
    clearErrors();
    let valid = true;

    if (!document.getElementById('f-nom').value.trim()) {
        setErr('fg-nom'); valid = false;
    }
    const cal = parseFloat(document.getElementById('f-cal').value);
    if (isNaN(cal) || cal < 0 || cal > 9000) { setErr('fg-cal'); valid = false; }

    const prot = parseFloat(document.getElementById('f-prot').value);
    if (isNaN(prot) || prot < 0 || prot > 100) { setErr('fg-prot'); valid = false; }

    const lip = parseFloat(document.getElementById('f-lip').value);
    if (isNaN(lip) || lip < 0 || lip > 100) { setErr('fg-lip'); valid = false; }

    const gluc = parseFloat(document.getElementById('f-gluc').value);
    if (isNaN(gluc) || gluc < 0 || gluc > 100) { setErr('fg-gluc'); valid = false; }

    return valid;
}

function setErr(id) { document.getElementById(id).classList.add('has-err'); }
function clearErrors() { document.querySelectorAll('.n-form-group.has-err').forEach(el => el.classList.remove('has-err')); }

// ═══════════════════════════════════════════════════════════
//  VÉRIFICATEUR CALORIQUE
// ═══════════════════════════════════════════════════════════
function updateMacroVerif() {
    const cal  = parseFloat(document.getElementById('f-cal').value)  || 0;
    const prot = parseFloat(document.getElementById('f-prot').value) || 0;
    const lip  = parseFloat(document.getElementById('f-lip').value)  || 0;
    const gluc = parseFloat(document.getElementById('f-gluc').value) || 0;
    const computed = +(prot * 4 + gluc * 4 + lip * 9).toFixed(1);
    const diff     = +(cal - computed).toFixed(1);
    const ok = Math.abs(diff) <= 20;

    document.getElementById('mv-declared').textContent = cal + ' kcal';
    document.getElementById('mv-computed').textContent = computed + ' kcal';
    document.getElementById('mv-diff').textContent = (diff > 0 ? '+' : '') + diff + ' kcal';
    const st = document.getElementById('mv-status');
    st.textContent = ok ? '✅ Cohérent' : '⚠️ Écart > 20 kcal';
    st.className = 'mv-val ' + (ok ? 'mv-ok' : 'mv-warn');
}

// ═══════════════════════════════════════════════════════════
//  TOAST
// ═══════════════════════════════════════════════════════════
function showToast(msg, type) {
    const t = document.getElementById('toast');
    t.textContent = msg;
    t.className = 'toast ' + type + ' show';
    setTimeout(() => t.classList.remove('show'), 3500);
}

// ═══════════════════════════════════════════════════════════
//  UTILS
// ═══════════════════════════════════════════════════════════
function esc(s) { return String(s||'').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;'); }
function pct(v, max) { return max > 0 ? Math.min(100, Math.round((v/max)*100)) : 0; }

// ═══════════════════════════════════════════════════════════
//  INIT
// ═══════════════════════════════════════════════════════════
loadFoods();
</script>
{% endblock %}
", "admin/nutrition.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/admin/nutrition.html.twig");
    }
}

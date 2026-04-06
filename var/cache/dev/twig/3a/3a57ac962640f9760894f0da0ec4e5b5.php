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

/* homepage/index.html.twig */
class __TwigTemplate_5172748fccf41d883c21fba0e19936b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

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

        yield "Accueil — Harmony";
        
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
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --purple:       #6A5ACD;
            --purple-dark:  #4B3B9E;
            --purple-soft:  #8B7FD4;
            --purple-pale:  #EDE8FA;
            --purple-ghost: #F7F5FD;
            --text:         #1C1733;
            --text-mid:     #4A4570;
            --text-muted:   #9590B8;
            --border:       rgba(106,90,205,.12);
            --white:        #FFFFFF;
            --font-head:    'Syne', sans-serif;
            --font-body:    'Inter', sans-serif;
        }

        html, body {
            height: 100%;
            font-family: var(--font-body);
            background: var(--purple-ghost);
            color: var(--text);
        }

        /* ── TOPBAR ───────────────────────────────── */
        .topbar {
            position: sticky; top: 0; z-index: 200;
            background: var(--white);
            border-bottom: 1px solid var(--border);
            height: 62px;
            display: flex;
            align-items: center;
            padding: 0 40px;
            gap: 8px;
        }

        .topbar-logo {
            display: flex; align-items: center; gap: 10px;
            text-decoration: none;
            margin-right: 32px;
        }
        .logo-mark {
            width: 34px; height: 34px;
            border-radius: 10px;
            object-fit: contain;
            flex-shrink: 0;
        }
        .logo-name {
            font-family: var(--font-head);
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
            letter-spacing: -.3px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 2px;
            flex: 1;
            flex-wrap: nowrap;
            overflow-x: auto;
        }
        .nav-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 14px;
            border-radius: 9px;
            font-size: 13.5px;
            font-weight: 500;
            color: var(--text-mid);
            text-decoration: none;
            white-space: nowrap;
            transition: background .15s, color .15s;
        }
        .nav-link:hover { background: var(--purple-pale); color: var(--purple); }
        .nav-link.active { background: var(--purple-pale); color: var(--purple); font-weight: 600; }
        .nav-link .nav-emoji { font-size: 14px; }

        .topbar-right {
            display: flex; align-items: center;
            gap: 10px; margin-left: auto; flex-shrink: 0;
        }
        .logout-btn {
            padding: 7px 16px;
            border-radius: 9px;
            border: 1.5px solid rgba(239,68,68,.2);
            background: transparent;
            color: #E05252;
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: background .15s, border-color .15s;
            white-space: nowrap;
        }
        .logout-btn:hover { background: #FEF2F2; border-color: #E05252; }

        .profile-wrap { position: relative; }
        .avatar {
            width: 36px; height: 36px;
            border-radius: 50%;
            background: var(--purple);
            color: white;
            font-family: var(--font-head);
            font-weight: 700;
            font-size: 14px;
            display: grid; place-items: center;
            cursor: pointer;
            border: 2px solid var(--purple-pale);
            transition: box-shadow .15s;
        }
        .avatar:hover { box-shadow: 0 0 0 3px rgba(106,90,205,.25); }

        .profile-dropdown {
            position: absolute; top: calc(100% + 10px); right: 0;
            width: 220px;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 12px 40px rgba(0,0,0,.1);
            padding: 16px;
            display: none;
            z-index: 500;
        }
        .profile-dropdown.open { display: block; }
        .pd-name  { font-size: 14px; font-weight: 600; color: var(--text); }
        .pd-email { font-size: 12px; color: var(--text-muted); margin-top: 2px; }
        .pd-divider { height: 1px; background: var(--border); margin: 12px 0; }
        .pd-hint { font-size: 11px; color: var(--text-muted); font-style: italic; }

        /* ── PAGE LAYOUT ──────────────────────────── */
        .page {
            max-width: 1200px;
            margin: 0 auto;
            padding: 48px 40px 80px;
        }

        /* ── HERO ─────────────────────────────────── */
        .hero {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 40px;
            align-items: center;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 22px;
            padding: 52px 56px;
            margin-bottom: 36px;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -80px; right: -80px;
            width: 320px; height: 320px;
            background: radial-gradient(circle, rgba(106,90,205,.08) 0%, transparent 70%);
            pointer-events: none;
        }
        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: var(--purple);
            background: var(--purple-pale);
            padding: 4px 12px;
            border-radius: 20px;
            margin-bottom: 18px;
        }
        .hero-title {
            font-family: var(--font-head);
            font-size: 40px;
            font-weight: 800;
            color: var(--text);
            line-height: 1.15;
            letter-spacing: -.8px;
            margin-bottom: 14px;
        }
        .hero-title span { color: var(--purple); }
        .hero-sub {
            font-size: 15px;
            color: var(--text-mid);
            line-height: 1.7;
            max-width: 480px;
            margin-bottom: 32px;
            font-weight: 300;
        }
        .hero-actions { display: flex; gap: 12px; flex-wrap: wrap; }

        .btn-primary {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px;
            background: var(--purple);
            color: white;
            border-radius: 11px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            font-family: var(--font-body);
            border: none; cursor: pointer;
            transition: background .15s, transform .15s, box-shadow .15s;
            box-shadow: 0 4px 18px rgba(106,90,205,.3);
        }
        .btn-primary:hover { background: var(--purple-dark); transform: translateY(-1px); box-shadow: 0 8px 28px rgba(106,90,205,.35); }

        .btn-ghost {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px;
            background: transparent;
            color: var(--text-mid);
            border-radius: 11px;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            font-family: var(--font-body);
            border: 1.5px solid var(--border);
            cursor: pointer;
            transition: border-color .15s, color .15s, background .15s;
        }
        .btn-ghost:hover { border-color: var(--purple-soft); color: var(--purple); background: var(--purple-pale); }

        /* hero stats */
        .hero-stats {
            display: flex;
            flex-direction: column;
            gap: 14px;
            position: relative; z-index: 1;
        }
        .stat-pill {
            display: flex; align-items: center; gap: 12px;
            background: var(--purple-ghost);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 14px 20px;
            min-width: 185px;
            transition: border-color .2s;
        }
        .stat-pill:hover { border-color: var(--purple-soft); }
        .stat-icon {
            width: 40px; height: 40px;
            background: var(--purple-pale);
            border-radius: 10px;
            display: grid; place-items: center;
            font-size: 20px;
            flex-shrink: 0;
        }
        .stat-val {
            font-family: var(--font-head);
            font-size: 22px; font-weight: 800;
            color: var(--text); line-height: 1;
        }
        .stat-lbl { font-size: 11px; color: var(--text-muted); margin-top: 2px; }

        /* ── SECTION HEADER ────────────────────────── */
        .sec-header {
            display: flex; align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }
        .sec-title {
            font-family: var(--font-head);
            font-size: 17px; font-weight: 700;
            color: var(--text);
            display: flex; align-items: center; gap: 8px;
        }
        .sec-title::before {
            content: '';
            width: 4px; height: 18px;
            background: var(--purple);
            border-radius: 4px;
            display: inline-block;
        }
        .see-all {
            font-size: 13px; font-weight: 500;
            color: var(--purple);
            text-decoration: none;
            transition: opacity .15s;
        }
        .see-all:hover { opacity: .7; }

        /* ── QUICK ACTIONS ─────────────────────────── */
        .quick-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin-bottom: 36px;
        }
        .qa-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 22px 20px;
            text-decoration: none; color: inherit;
            display: flex; flex-direction: column; align-items: flex-start;
            gap: 12px;
            transition: border-color .18s, transform .18s, box-shadow .18s;
        }
        .qa-card:hover {
            border-color: var(--purple-soft);
            transform: translateY(-3px);
            box-shadow: 0 8px 28px rgba(106,90,205,.10);
        }
        .qa-icon {
            width: 46px; height: 46px;
            border-radius: 12px;
            display: grid; place-items: center;
            font-size: 22px;
            background: var(--purple-pale);
        }
        .qa-label { font-size: 14px; font-weight: 600; color: var(--text); }
        .qa-sub   { font-size: 12px; color: var(--text-muted); }

        /* ── TWO-COL ───────────────────────────────── */
        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
            margin-bottom: 36px;
        }

        /* ── WIDGET CARD ───────────────────────────── */
        .widget {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 18px;
            overflow: hidden;
        }
        .widget-head {
            padding: 18px 22px 14px;
            border-bottom: 1px solid var(--border);
            display: flex; align-items: center; justify-content: space-between;
        }
        .widget-title {
            font-family: var(--font-head);
            font-size: 15px; font-weight: 700;
            color: var(--text);
            display: flex; align-items: center; gap: 8px;
        }
        .badge {
            font-size: 10px; font-weight: 600;
            color: var(--purple);
            background: var(--purple-pale);
            padding: 2px 9px; border-radius: 20px;
            font-family: var(--font-body);
        }
        .widget-body { padding: 6px 22px; }

        /* event rows */
        .ev-row {
            display: flex; align-items: center; gap: 14px;
            padding: 13px 0;
            border-bottom: 1px solid var(--purple-ghost);
        }
        .ev-row:last-child { border-bottom: none; }
        .ev-date {
            width: 42px; height: 42px;
            background: var(--purple-ghost);
            border-radius: 10px;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        .ev-day   { font-family: var(--font-head); font-size: 17px; font-weight: 800; color: var(--purple); line-height: 1; }
        .ev-month { font-size: 9px; text-transform: uppercase; letter-spacing: .5px; color: var(--text-muted); font-weight: 600; }
        .ev-info  { flex: 1; }
        .ev-name  { font-size: 13.5px; font-weight: 600; color: var(--text); }
        .ev-time  { font-size: 11.5px; color: var(--text-muted); margin-top: 1px; }
        .ev-dot   { width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; }

        /* forum rows */
        .fo-row {
            display: flex; align-items: flex-start; gap: 12px;
            padding: 13px 0;
            border-bottom: 1px solid var(--purple-ghost);
            cursor: pointer;
        }
        .fo-row:last-child { border-bottom: none; }
        .fo-avatar {
            width: 36px; height: 36px; border-radius: 50%;
            display: grid; place-items: center;
            font-family: var(--font-head);
            font-size: 13px; font-weight: 700;
            color: white; flex-shrink: 0;
        }
        .fo-info  { flex: 1; min-width: 0; }
        .fo-subj  { font-size: 13.5px; font-weight: 600; color: var(--text); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .fo-prev  { font-size: 12px; color: var(--text-muted); margin-top: 1px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .fo-meta  { display: flex; flex-direction: column; align-items: flex-end; gap: 5px; flex-shrink: 0; }
        .fo-time  { font-size: 11px; color: var(--text-muted); }
        .fo-rep   { font-size: 11px; font-weight: 600; color: var(--purple); background: var(--purple-pale); padding: 2px 8px; border-radius: 20px; }

        /* ── WELLNESS STRIP ────────────────────────── */
        .wellness {
            background: var(--purple);
            border-radius: 18px;
            padding: 30px 40px;
            display: flex; align-items: center; gap: 28px;
            position: relative; overflow: hidden;
        }
        .wellness::after {
            content: '';
            position: absolute; right: -50px; top: -50px;
            width: 220px; height: 220px;
            border-radius: 50%;
            background: rgba(255,255,255,.06);
            pointer-events: none;
        }
        .w-icon {
            width: 60px; height: 60px;
            background: rgba(255,255,255,.15);
            border-radius: 16px;
            display: grid; place-items: center;
            font-size: 30px; flex-shrink: 0;
        }
        .w-text { flex: 1; }
        .w-text h3 { font-family: var(--font-head); font-size: 20px; font-weight: 800; color: white; margin-bottom: 4px; }
        .w-text p  { font-size: 13.5px; color: rgba(255,255,255,.75); line-height: 1.6; }
        .w-btns { display: flex; gap: 10px; flex-shrink: 0; }
        .btn-w-outline {
            padding: 10px 20px; border: 1.5px solid rgba(255,255,255,.45);
            background: transparent; color: white; border-radius: 10px;
            font-family: var(--font-body); font-size: 13px; font-weight: 500;
            cursor: pointer; text-decoration: none;
            transition: border-color .15s, background .15s;
        }
        .btn-w-outline:hover { border-color: white; background: rgba(255,255,255,.1); }
        .btn-w-solid {
            padding: 10px 20px; background: white;
            color: var(--purple-dark); border: none;
            border-radius: 10px; font-family: var(--font-body);
            font-size: 13px; font-weight: 700;
            cursor: pointer; text-decoration: none;
            transition: opacity .15s;
        }
        .btn-w-solid:hover { opacity: .9; }

        /* ── RESPONSIVE ────────────────────────────── */
        @media (max-width: 960px) {
            .hero { grid-template-columns: 1fr; }
            .hero-stats { flex-direction: row; flex-wrap: wrap; }
            .quick-grid { grid-template-columns: repeat(2, 1fr); }
            .two-col { grid-template-columns: 1fr; }
        }
        @media (max-width: 640px) {
            .topbar { padding: 0 20px; }
            .page   { padding: 24px 20px 60px; }
            .hero   { padding: 32px 28px; }
            .hero-title { font-size: 28px; }
            .nav-links { display: none; }
            .wellness { flex-direction: column; align-items: flex-start; }
            .w-btns { flex-wrap: wrap; }
        }

        /* ── FADE-IN ───────────────────────────────── */
        @keyframes fadeUp { from { opacity:0; transform:translateY(16px); } to { opacity:1; transform:translateY(0); } }
        .fade { animation: fadeUp .45s ease both; }
        .d1  { animation-delay: .05s; }
        .d2  { animation-delay: .12s; }
        .d3  { animation-delay: .19s; }
        .d4  { animation-delay: .26s; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 479
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

        // line 480
        yield "
    <!-- ═══ TOPBAR ════════════════════════════════════════════════════ -->
    <header class=\"topbar\">
        <a href=\"";
        // line 483
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
            <img src=\"";
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
        </a>

        <nav class=\"nav-links\">
            <a href=\"";
        // line 488
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\"   class=\"nav-link active\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"";
        // line 489
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\"       class=\"nav-link\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"";
        // line 490
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\"      class=\"nav-link\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"";
        // line 491
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\"  class=\"nav-link\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"";
        // line 492
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\"   class=\"nav-link\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"";
        // line 493
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\"  class=\"nav-link\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"";
        // line 494
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\"     class=\"nav-link\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"";
        // line 495
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\"     class=\"nav-link\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>

        <div class=\"topbar-right\">
            <a href=\"";
        // line 499
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout-btn\" style=\"text-decoration:none;\">🚪 Déconnexion</a>

            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">
                    ";
        // line 503
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 503, $this->source); })()), "user", [], "any", false, false, false, 503)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 503, $this->source); })()), "user", [], "any", false, false, false, 503), "firstName", [], "any", false, false, false, 503))), "html", null, true)) : ("E"));
        yield "
                </div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">";
        // line 506
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 506, $this->source); })()), "user", [], "any", false, false, false, 506)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 506, $this->source); })()), "user", [], "any", false, false, false, 506), "firstName", [], "any", false, false, false, 506) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 506, $this->source); })()), "user", [], "any", false, false, false, 506), "lastName", [], "any", false, false, false, 506)), "html", null, true)) : ("Étudiant"));
        yield "</div>
                    <div class=\"pd-email\">";
        // line 507
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 507, $this->source); })()), "user", [], "any", false, false, false, 507)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 507, $this->source); })()), "user", [], "any", false, false, false, 507), "email", [], "any", false, false, false, 507), "html", null, true)) : ("email@exemple.com"));
        yield "</div>
                    <div class=\"pd-divider\"></div>
                    <div class=\"pd-hint\">Double-clic pour modifier</div>
                </div>
            </div>
        </div>
    </header>

    <!-- ═══ PAGE ═════════════════════════════════════════════════════ -->
    <main class=\"page\">

        <!-- HERO -->
        <section class=\"hero fade\">
            <div>
                <div class=\"hero-eyebrow\">✦ Tableau de bord</div>
                <h1 class=\"hero-title\">
                    Bienvenue sur<br><span>Harmony</span>
                </h1>
                <p class=\"hero-sub\">
                    Votre espace étudiant centralisé pour gérer vos activités, votre bien-être et rester connecté avec votre communauté universitaire.
                </p>
                <div class=\"hero-actions\">
                    <a href=\"";
        // line 529
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\" class=\"btn-primary\">🏋 Commencer les activités</a>
                    <a href=\"";
        // line 530
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\"     class=\"btn-ghost\">💬 Rejoindre le forum</a>
                </div>
            </div>
            <div class=\"hero-stats\">
                <div class=\"stat-pill\">
                    <div class=\"stat-icon\">📚</div>
                    <div><div class=\"stat-val\">6</div><div class=\"stat-lbl\">Cours actifs</div></div>
                </div>
                <div class=\"stat-pill\">
                    <div class=\"stat-icon\">✅</div>
                    <div><div class=\"stat-val\">73%</div><div class=\"stat-lbl\">Progression</div></div>
                </div>
                <div class=\"stat-pill\">
                    <div class=\"stat-icon\">📅</div>
                    <div><div class=\"stat-val\">3</div><div class=\"stat-lbl\">Événements</div></div>
                </div>
            </div>
        </section>

        <!-- QUICK ACTIONS -->
        <div class=\"sec-header fade d1\">
            <div class=\"sec-title\">Accès rapide</div>
        </div>
        <div class=\"quick-grid fade d1\">
            <a href=\"";
        // line 554
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\"  class=\"qa-card\">
                <div class=\"qa-icon\">🏋</div>
                <div><div class=\"qa-label\">Activités</div><div class=\"qa-sub\">Suivi & entraînements</div></div>
            </a>
            <a href=\"";
        // line 558
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#E8F4F0;\">📅</div>
                <div><div class=\"qa-label\">Événements</div><div class=\"qa-sub\">3 ce mois</div></div>
            </a>
            <a href=\"";
        // line 562
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\"      class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#FEF3E2;\">💬</div>
                <div><div class=\"qa-label\">Forum</div><div class=\"qa-sub\">12 nouveaux posts</div></div>
            </a>
            <a href=\"";
        // line 566
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#FDE8EB;\">🧘</div>
                <div><div class=\"qa-label\">Méditation</div><div class=\"qa-sub\">Séance du jour</div></div>
            </a>
            <a href=\"";
        // line 570
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\"  class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#E8F4F0;\">🥗</div>
                <div><div class=\"qa-label\">Nutrition</div><div class=\"qa-sub\">Plan du jour</div></div>
            </a>
            <a href=\"";
        // line 574
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\"    class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#FEF3E2;\">📔</div>
                <div><div class=\"qa-label\">Journal</div><div class=\"qa-sub\">Mes notes</div></div>
            </a>
            <a href=\"";
        // line 578
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\"     class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#EDE8FA;\">📚</div>
                <div><div class=\"qa-label\">Tâches</div><div class=\"qa-sub\">5 en attente</div></div>
            </a>
            <a href=\"";
        // line 582
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\"    class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#E8F4F0;\">📖</div>
                <div><div class=\"qa-label\">Library</div><div class=\"qa-sub\">Ressources</div></div>
            </a>
        </div>

        <!-- EVENTS + FORUM -->
        <div class=\"two-col fade d2\">

            <!-- Événements -->
            <div class=\"widget\">
                <div class=\"widget-head\">
                    <div class=\"widget-title\">📅 Événements <span class=\"badge\">Ce mois</span></div>
                    <a href=\"";
        // line 595
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"see-all\">Voir tout →</a>
                </div>
                <div class=\"widget-body\">
                    ";
        // line 598
        $context["evts"] = [["day" => "07", "mon" => "Avr", "name" => "Examen — Algo Avancée", "time" => "09:00 – 11:00", "color" => "#E07D8A"], ["day" => "12", "mon" => "Avr", "name" => "TD Bases de Données", "time" => "14:00 – 16:00", "color" => "#5CB89E"], ["day" => "18", "mon" => "Avr", "name" => "Conférence ML & IA", "time" => "10:00 – 12:30", "color" => "#6A5ACD"], ["day" => "25", "mon" => "Avr", "name" => "Rendu Projet Réseaux", "time" => "23:59", "color" => "#E5A44B"]];
        // line 604
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evts"]) || array_key_exists("evts", $context) ? $context["evts"] : (function () { throw new RuntimeError('Variable "evts" does not exist.', 604, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 605
            yield "                        <div class=\"ev-row\">
                            <div class=\"ev-date\">
                                <span class=\"ev-day\">";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "day", [], "any", false, false, false, 607), "html", null, true);
            yield "</span>
                                <span class=\"ev-month\">";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "mon", [], "any", false, false, false, 608), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"ev-info\">
                                <div class=\"ev-name\">";
            // line 611
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 611), "html", null, true);
            yield "</div>
                                <div class=\"ev-time\">🕐 ";
            // line 612
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "time", [], "any", false, false, false, 612), "html", null, true);
            yield "</div>
                            </div>
                            <div class=\"ev-dot\" style=\"background:";
            // line 614
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "color", [], "any", false, false, false, 614), "html", null, true);
            yield ";\"></div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 617
        yield "                </div>
            </div>

            <!-- Forum -->
            <div class=\"widget\">
                <div class=\"widget-head\">
                    <div class=\"widget-title\">💬 Forum <span class=\"badge\">Récent</span></div>
                    <a href=\"";
        // line 624
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\" class=\"see-all\">Voir tout →</a>
                </div>
                <div class=\"widget-body\">
                    ";
        // line 627
        $context["posts"] = [["init" => "SA", "bg" => "#6A5ACD", "subj" => "Tri rapide vs Tri fusion — performances ?", "prev" => "Quelqu'un peut comparer les complexités ?", "time" => "1h", "rep" => 8], ["init" => "MK", "bg" => "#5CB89E", "subj" => "Ressources pour l'examen BD", "prev" => "J'ai trouvé un super cours en ligne…", "time" => "3h", "rep" => 4], ["init" => "RL", "bg" => "#E5A44B", "subj" => "Aide — configuration VPN université", "prev" => "Impossible d'accéder au réseau depuis…", "time" => "hier", "rep" => 12], ["init" => "AO", "bg" => "#E07D8A", "subj" => "Groupe de révision — Jeudi 17h", "prev" => "On se retrouve en B204 pour réviser…", "time" => "hier", "rep" => 6]];
        // line 633
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 633, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 634
            yield "                        <div class=\"fo-row\">
                            <div class=\"fo-avatar\" style=\"background:";
            // line 635
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "bg", [], "any", false, false, false, 635), "html", null, true);
            yield ";\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "init", [], "any", false, false, false, 635), "html", null, true);
            yield "</div>
                            <div class=\"fo-info\">
                                <div class=\"fo-subj\">";
            // line 637
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "subj", [], "any", false, false, false, 637), "html", null, true);
            yield "</div>
                                <div class=\"fo-prev\">";
            // line 638
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "prev", [], "any", false, false, false, 638), "html", null, true);
            yield "</div>
                            </div>
                            <div class=\"fo-meta\">
                                <span class=\"fo-time\">";
            // line 641
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "time", [], "any", false, false, false, 641), "html", null, true);
            yield "</span>
                                <span class=\"fo-rep\">💬 ";
            // line 642
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "rep", [], "any", false, false, false, 642), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 646
        yield "                </div>
            </div>

        </div>

        <!-- WELLNESS STRIP -->
        <div class=\"wellness fade d3\">
            <div class=\"w-icon\">🧠</div>
            <div class=\"w-text\">
                <h3>Votre bien-être mental compte</h3>
                <p>Des exercices de relaxation, des ressources discrètes et un espace d'écoute pour traverser vos études sereinement.</p>
            </div>
            <div class=\"w-btns\">
                <a href=\"";
        // line 659
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"btn-w-outline\">Explorer</a>
                <a href=\"";
        // line 660
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"btn-w-solid\">Commencer ✦</a>
            </div>
        </div>

    </main>

    <script>
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));
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
        return "homepage/index.html.twig";
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
        return array (  905 => 660,  901 => 659,  886 => 646,  876 => 642,  872 => 641,  866 => 638,  862 => 637,  855 => 635,  852 => 634,  847 => 633,  845 => 627,  839 => 624,  830 => 617,  821 => 614,  816 => 612,  812 => 611,  806 => 608,  802 => 607,  798 => 605,  793 => 604,  791 => 598,  785 => 595,  769 => 582,  762 => 578,  755 => 574,  748 => 570,  741 => 566,  734 => 562,  727 => 558,  720 => 554,  693 => 530,  689 => 529,  664 => 507,  660 => 506,  654 => 503,  647 => 499,  640 => 495,  636 => 494,  632 => 493,  628 => 492,  624 => 491,  620 => 490,  616 => 489,  612 => 488,  605 => 484,  601 => 483,  596 => 480,  583 => 479,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil — Harmony{% endblock %}

{% block stylesheets %}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --purple:       #6A5ACD;
            --purple-dark:  #4B3B9E;
            --purple-soft:  #8B7FD4;
            --purple-pale:  #EDE8FA;
            --purple-ghost: #F7F5FD;
            --text:         #1C1733;
            --text-mid:     #4A4570;
            --text-muted:   #9590B8;
            --border:       rgba(106,90,205,.12);
            --white:        #FFFFFF;
            --font-head:    'Syne', sans-serif;
            --font-body:    'Inter', sans-serif;
        }

        html, body {
            height: 100%;
            font-family: var(--font-body);
            background: var(--purple-ghost);
            color: var(--text);
        }

        /* ── TOPBAR ───────────────────────────────── */
        .topbar {
            position: sticky; top: 0; z-index: 200;
            background: var(--white);
            border-bottom: 1px solid var(--border);
            height: 62px;
            display: flex;
            align-items: center;
            padding: 0 40px;
            gap: 8px;
        }

        .topbar-logo {
            display: flex; align-items: center; gap: 10px;
            text-decoration: none;
            margin-right: 32px;
        }
        .logo-mark {
            width: 34px; height: 34px;
            border-radius: 10px;
            object-fit: contain;
            flex-shrink: 0;
        }
        .logo-name {
            font-family: var(--font-head);
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
            letter-spacing: -.3px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 2px;
            flex: 1;
            flex-wrap: nowrap;
            overflow-x: auto;
        }
        .nav-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 14px;
            border-radius: 9px;
            font-size: 13.5px;
            font-weight: 500;
            color: var(--text-mid);
            text-decoration: none;
            white-space: nowrap;
            transition: background .15s, color .15s;
        }
        .nav-link:hover { background: var(--purple-pale); color: var(--purple); }
        .nav-link.active { background: var(--purple-pale); color: var(--purple); font-weight: 600; }
        .nav-link .nav-emoji { font-size: 14px; }

        .topbar-right {
            display: flex; align-items: center;
            gap: 10px; margin-left: auto; flex-shrink: 0;
        }
        .logout-btn {
            padding: 7px 16px;
            border-radius: 9px;
            border: 1.5px solid rgba(239,68,68,.2);
            background: transparent;
            color: #E05252;
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: background .15s, border-color .15s;
            white-space: nowrap;
        }
        .logout-btn:hover { background: #FEF2F2; border-color: #E05252; }

        .profile-wrap { position: relative; }
        .avatar {
            width: 36px; height: 36px;
            border-radius: 50%;
            background: var(--purple);
            color: white;
            font-family: var(--font-head);
            font-weight: 700;
            font-size: 14px;
            display: grid; place-items: center;
            cursor: pointer;
            border: 2px solid var(--purple-pale);
            transition: box-shadow .15s;
        }
        .avatar:hover { box-shadow: 0 0 0 3px rgba(106,90,205,.25); }

        .profile-dropdown {
            position: absolute; top: calc(100% + 10px); right: 0;
            width: 220px;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 12px 40px rgba(0,0,0,.1);
            padding: 16px;
            display: none;
            z-index: 500;
        }
        .profile-dropdown.open { display: block; }
        .pd-name  { font-size: 14px; font-weight: 600; color: var(--text); }
        .pd-email { font-size: 12px; color: var(--text-muted); margin-top: 2px; }
        .pd-divider { height: 1px; background: var(--border); margin: 12px 0; }
        .pd-hint { font-size: 11px; color: var(--text-muted); font-style: italic; }

        /* ── PAGE LAYOUT ──────────────────────────── */
        .page {
            max-width: 1200px;
            margin: 0 auto;
            padding: 48px 40px 80px;
        }

        /* ── HERO ─────────────────────────────────── */
        .hero {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 40px;
            align-items: center;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 22px;
            padding: 52px 56px;
            margin-bottom: 36px;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -80px; right: -80px;
            width: 320px; height: 320px;
            background: radial-gradient(circle, rgba(106,90,205,.08) 0%, transparent 70%);
            pointer-events: none;
        }
        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: var(--purple);
            background: var(--purple-pale);
            padding: 4px 12px;
            border-radius: 20px;
            margin-bottom: 18px;
        }
        .hero-title {
            font-family: var(--font-head);
            font-size: 40px;
            font-weight: 800;
            color: var(--text);
            line-height: 1.15;
            letter-spacing: -.8px;
            margin-bottom: 14px;
        }
        .hero-title span { color: var(--purple); }
        .hero-sub {
            font-size: 15px;
            color: var(--text-mid);
            line-height: 1.7;
            max-width: 480px;
            margin-bottom: 32px;
            font-weight: 300;
        }
        .hero-actions { display: flex; gap: 12px; flex-wrap: wrap; }

        .btn-primary {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px;
            background: var(--purple);
            color: white;
            border-radius: 11px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            font-family: var(--font-body);
            border: none; cursor: pointer;
            transition: background .15s, transform .15s, box-shadow .15s;
            box-shadow: 0 4px 18px rgba(106,90,205,.3);
        }
        .btn-primary:hover { background: var(--purple-dark); transform: translateY(-1px); box-shadow: 0 8px 28px rgba(106,90,205,.35); }

        .btn-ghost {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px;
            background: transparent;
            color: var(--text-mid);
            border-radius: 11px;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            font-family: var(--font-body);
            border: 1.5px solid var(--border);
            cursor: pointer;
            transition: border-color .15s, color .15s, background .15s;
        }
        .btn-ghost:hover { border-color: var(--purple-soft); color: var(--purple); background: var(--purple-pale); }

        /* hero stats */
        .hero-stats {
            display: flex;
            flex-direction: column;
            gap: 14px;
            position: relative; z-index: 1;
        }
        .stat-pill {
            display: flex; align-items: center; gap: 12px;
            background: var(--purple-ghost);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 14px 20px;
            min-width: 185px;
            transition: border-color .2s;
        }
        .stat-pill:hover { border-color: var(--purple-soft); }
        .stat-icon {
            width: 40px; height: 40px;
            background: var(--purple-pale);
            border-radius: 10px;
            display: grid; place-items: center;
            font-size: 20px;
            flex-shrink: 0;
        }
        .stat-val {
            font-family: var(--font-head);
            font-size: 22px; font-weight: 800;
            color: var(--text); line-height: 1;
        }
        .stat-lbl { font-size: 11px; color: var(--text-muted); margin-top: 2px; }

        /* ── SECTION HEADER ────────────────────────── */
        .sec-header {
            display: flex; align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }
        .sec-title {
            font-family: var(--font-head);
            font-size: 17px; font-weight: 700;
            color: var(--text);
            display: flex; align-items: center; gap: 8px;
        }
        .sec-title::before {
            content: '';
            width: 4px; height: 18px;
            background: var(--purple);
            border-radius: 4px;
            display: inline-block;
        }
        .see-all {
            font-size: 13px; font-weight: 500;
            color: var(--purple);
            text-decoration: none;
            transition: opacity .15s;
        }
        .see-all:hover { opacity: .7; }

        /* ── QUICK ACTIONS ─────────────────────────── */
        .quick-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin-bottom: 36px;
        }
        .qa-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 22px 20px;
            text-decoration: none; color: inherit;
            display: flex; flex-direction: column; align-items: flex-start;
            gap: 12px;
            transition: border-color .18s, transform .18s, box-shadow .18s;
        }
        .qa-card:hover {
            border-color: var(--purple-soft);
            transform: translateY(-3px);
            box-shadow: 0 8px 28px rgba(106,90,205,.10);
        }
        .qa-icon {
            width: 46px; height: 46px;
            border-radius: 12px;
            display: grid; place-items: center;
            font-size: 22px;
            background: var(--purple-pale);
        }
        .qa-label { font-size: 14px; font-weight: 600; color: var(--text); }
        .qa-sub   { font-size: 12px; color: var(--text-muted); }

        /* ── TWO-COL ───────────────────────────────── */
        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
            margin-bottom: 36px;
        }

        /* ── WIDGET CARD ───────────────────────────── */
        .widget {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 18px;
            overflow: hidden;
        }
        .widget-head {
            padding: 18px 22px 14px;
            border-bottom: 1px solid var(--border);
            display: flex; align-items: center; justify-content: space-between;
        }
        .widget-title {
            font-family: var(--font-head);
            font-size: 15px; font-weight: 700;
            color: var(--text);
            display: flex; align-items: center; gap: 8px;
        }
        .badge {
            font-size: 10px; font-weight: 600;
            color: var(--purple);
            background: var(--purple-pale);
            padding: 2px 9px; border-radius: 20px;
            font-family: var(--font-body);
        }
        .widget-body { padding: 6px 22px; }

        /* event rows */
        .ev-row {
            display: flex; align-items: center; gap: 14px;
            padding: 13px 0;
            border-bottom: 1px solid var(--purple-ghost);
        }
        .ev-row:last-child { border-bottom: none; }
        .ev-date {
            width: 42px; height: 42px;
            background: var(--purple-ghost);
            border-radius: 10px;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        .ev-day   { font-family: var(--font-head); font-size: 17px; font-weight: 800; color: var(--purple); line-height: 1; }
        .ev-month { font-size: 9px; text-transform: uppercase; letter-spacing: .5px; color: var(--text-muted); font-weight: 600; }
        .ev-info  { flex: 1; }
        .ev-name  { font-size: 13.5px; font-weight: 600; color: var(--text); }
        .ev-time  { font-size: 11.5px; color: var(--text-muted); margin-top: 1px; }
        .ev-dot   { width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; }

        /* forum rows */
        .fo-row {
            display: flex; align-items: flex-start; gap: 12px;
            padding: 13px 0;
            border-bottom: 1px solid var(--purple-ghost);
            cursor: pointer;
        }
        .fo-row:last-child { border-bottom: none; }
        .fo-avatar {
            width: 36px; height: 36px; border-radius: 50%;
            display: grid; place-items: center;
            font-family: var(--font-head);
            font-size: 13px; font-weight: 700;
            color: white; flex-shrink: 0;
        }
        .fo-info  { flex: 1; min-width: 0; }
        .fo-subj  { font-size: 13.5px; font-weight: 600; color: var(--text); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .fo-prev  { font-size: 12px; color: var(--text-muted); margin-top: 1px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .fo-meta  { display: flex; flex-direction: column; align-items: flex-end; gap: 5px; flex-shrink: 0; }
        .fo-time  { font-size: 11px; color: var(--text-muted); }
        .fo-rep   { font-size: 11px; font-weight: 600; color: var(--purple); background: var(--purple-pale); padding: 2px 8px; border-radius: 20px; }

        /* ── WELLNESS STRIP ────────────────────────── */
        .wellness {
            background: var(--purple);
            border-radius: 18px;
            padding: 30px 40px;
            display: flex; align-items: center; gap: 28px;
            position: relative; overflow: hidden;
        }
        .wellness::after {
            content: '';
            position: absolute; right: -50px; top: -50px;
            width: 220px; height: 220px;
            border-radius: 50%;
            background: rgba(255,255,255,.06);
            pointer-events: none;
        }
        .w-icon {
            width: 60px; height: 60px;
            background: rgba(255,255,255,.15);
            border-radius: 16px;
            display: grid; place-items: center;
            font-size: 30px; flex-shrink: 0;
        }
        .w-text { flex: 1; }
        .w-text h3 { font-family: var(--font-head); font-size: 20px; font-weight: 800; color: white; margin-bottom: 4px; }
        .w-text p  { font-size: 13.5px; color: rgba(255,255,255,.75); line-height: 1.6; }
        .w-btns { display: flex; gap: 10px; flex-shrink: 0; }
        .btn-w-outline {
            padding: 10px 20px; border: 1.5px solid rgba(255,255,255,.45);
            background: transparent; color: white; border-radius: 10px;
            font-family: var(--font-body); font-size: 13px; font-weight: 500;
            cursor: pointer; text-decoration: none;
            transition: border-color .15s, background .15s;
        }
        .btn-w-outline:hover { border-color: white; background: rgba(255,255,255,.1); }
        .btn-w-solid {
            padding: 10px 20px; background: white;
            color: var(--purple-dark); border: none;
            border-radius: 10px; font-family: var(--font-body);
            font-size: 13px; font-weight: 700;
            cursor: pointer; text-decoration: none;
            transition: opacity .15s;
        }
        .btn-w-solid:hover { opacity: .9; }

        /* ── RESPONSIVE ────────────────────────────── */
        @media (max-width: 960px) {
            .hero { grid-template-columns: 1fr; }
            .hero-stats { flex-direction: row; flex-wrap: wrap; }
            .quick-grid { grid-template-columns: repeat(2, 1fr); }
            .two-col { grid-template-columns: 1fr; }
        }
        @media (max-width: 640px) {
            .topbar { padding: 0 20px; }
            .page   { padding: 24px 20px 60px; }
            .hero   { padding: 32px 28px; }
            .hero-title { font-size: 28px; }
            .nav-links { display: none; }
            .wellness { flex-direction: column; align-items: flex-start; }
            .w-btns { flex-wrap: wrap; }
        }

        /* ── FADE-IN ───────────────────────────────── */
        @keyframes fadeUp { from { opacity:0; transform:translateY(16px); } to { opacity:1; transform:translateY(0); } }
        .fade { animation: fadeUp .45s ease both; }
        .d1  { animation-delay: .05s; }
        .d2  { animation-delay: .12s; }
        .d3  { animation-delay: .19s; }
        .d4  { animation-delay: .26s; }
    </style>
{% endblock %}

{% block body %}

    <!-- ═══ TOPBAR ════════════════════════════════════════════════════ -->
    <header class=\"topbar\">
        <a href=\"{{ path('homepage') }}\" class=\"topbar-logo\">
            <img src=\"{{ asset('images/logo.png') }}\" class=\"logo-mark\" alt=\"Harmony\">
        </a>

        <nav class=\"nav-links\">
            <a href=\"{{ path('activites') }}\"   class=\"nav-link active\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"{{ path('forum') }}\"       class=\"nav-link\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"{{ path('taches') }}\"      class=\"nav-link\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"{{ path('evenements') }}\"  class=\"nav-link\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"{{ path('nutrition') }}\"   class=\"nav-link\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"{{ path('meditation') }}\"  class=\"nav-link\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"{{ path('journal') }}\"     class=\"nav-link\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"{{ path('library') }}\"     class=\"nav-link\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>

        <div class=\"topbar-right\">
            <a href=\"{{ path('app_logout') }}\" class=\"logout-btn\" style=\"text-decoration:none;\">🚪 Déconnexion</a>

            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">
                    {{ app.user ? app.user.firstName|first|upper : 'E' }}
                </div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">{{ app.user ? app.user.firstName ~ ' ' ~ app.user.lastName : 'Étudiant' }}</div>
                    <div class=\"pd-email\">{{ app.user ? app.user.email : 'email@exemple.com' }}</div>
                    <div class=\"pd-divider\"></div>
                    <div class=\"pd-hint\">Double-clic pour modifier</div>
                </div>
            </div>
        </div>
    </header>

    <!-- ═══ PAGE ═════════════════════════════════════════════════════ -->
    <main class=\"page\">

        <!-- HERO -->
        <section class=\"hero fade\">
            <div>
                <div class=\"hero-eyebrow\">✦ Tableau de bord</div>
                <h1 class=\"hero-title\">
                    Bienvenue sur<br><span>Harmony</span>
                </h1>
                <p class=\"hero-sub\">
                    Votre espace étudiant centralisé pour gérer vos activités, votre bien-être et rester connecté avec votre communauté universitaire.
                </p>
                <div class=\"hero-actions\">
                    <a href=\"{{ path('activites') }}\" class=\"btn-primary\">🏋 Commencer les activités</a>
                    <a href=\"{{ path('forum') }}\"     class=\"btn-ghost\">💬 Rejoindre le forum</a>
                </div>
            </div>
            <div class=\"hero-stats\">
                <div class=\"stat-pill\">
                    <div class=\"stat-icon\">📚</div>
                    <div><div class=\"stat-val\">6</div><div class=\"stat-lbl\">Cours actifs</div></div>
                </div>
                <div class=\"stat-pill\">
                    <div class=\"stat-icon\">✅</div>
                    <div><div class=\"stat-val\">73%</div><div class=\"stat-lbl\">Progression</div></div>
                </div>
                <div class=\"stat-pill\">
                    <div class=\"stat-icon\">📅</div>
                    <div><div class=\"stat-val\">3</div><div class=\"stat-lbl\">Événements</div></div>
                </div>
            </div>
        </section>

        <!-- QUICK ACTIONS -->
        <div class=\"sec-header fade d1\">
            <div class=\"sec-title\">Accès rapide</div>
        </div>
        <div class=\"quick-grid fade d1\">
            <a href=\"{{ path('activites') }}\"  class=\"qa-card\">
                <div class=\"qa-icon\">🏋</div>
                <div><div class=\"qa-label\">Activités</div><div class=\"qa-sub\">Suivi & entraînements</div></div>
            </a>
            <a href=\"{{ path('evenements') }}\" class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#E8F4F0;\">📅</div>
                <div><div class=\"qa-label\">Événements</div><div class=\"qa-sub\">3 ce mois</div></div>
            </a>
            <a href=\"{{ path('forum') }}\"      class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#FEF3E2;\">💬</div>
                <div><div class=\"qa-label\">Forum</div><div class=\"qa-sub\">12 nouveaux posts</div></div>
            </a>
            <a href=\"{{ path('meditation') }}\" class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#FDE8EB;\">🧘</div>
                <div><div class=\"qa-label\">Méditation</div><div class=\"qa-sub\">Séance du jour</div></div>
            </a>
            <a href=\"{{ path('nutrition') }}\"  class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#E8F4F0;\">🥗</div>
                <div><div class=\"qa-label\">Nutrition</div><div class=\"qa-sub\">Plan du jour</div></div>
            </a>
            <a href=\"{{ path('journal') }}\"    class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#FEF3E2;\">📔</div>
                <div><div class=\"qa-label\">Journal</div><div class=\"qa-sub\">Mes notes</div></div>
            </a>
            <a href=\"{{ path('taches') }}\"     class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#EDE8FA;\">📚</div>
                <div><div class=\"qa-label\">Tâches</div><div class=\"qa-sub\">5 en attente</div></div>
            </a>
            <a href=\"{{ path('library') }}\"    class=\"qa-card\">
                <div class=\"qa-icon\" style=\"background:#E8F4F0;\">📖</div>
                <div><div class=\"qa-label\">Library</div><div class=\"qa-sub\">Ressources</div></div>
            </a>
        </div>

        <!-- EVENTS + FORUM -->
        <div class=\"two-col fade d2\">

            <!-- Événements -->
            <div class=\"widget\">
                <div class=\"widget-head\">
                    <div class=\"widget-title\">📅 Événements <span class=\"badge\">Ce mois</span></div>
                    <a href=\"{{ path('evenements') }}\" class=\"see-all\">Voir tout →</a>
                </div>
                <div class=\"widget-body\">
                    {% set evts = [
                        { day:'07', mon:'Avr', name:'Examen — Algo Avancée',  time:'09:00 – 11:00', color:'#E07D8A' },
                        { day:'12', mon:'Avr', name:'TD Bases de Données',    time:'14:00 – 16:00', color:'#5CB89E' },
                        { day:'18', mon:'Avr', name:'Conférence ML & IA',     time:'10:00 – 12:30', color:'#6A5ACD' },
                        { day:'25', mon:'Avr', name:'Rendu Projet Réseaux',   time:'23:59',          color:'#E5A44B' },
                    ] %}
                    {% for e in evts %}
                        <div class=\"ev-row\">
                            <div class=\"ev-date\">
                                <span class=\"ev-day\">{{ e.day }}</span>
                                <span class=\"ev-month\">{{ e.mon }}</span>
                            </div>
                            <div class=\"ev-info\">
                                <div class=\"ev-name\">{{ e.name }}</div>
                                <div class=\"ev-time\">🕐 {{ e.time }}</div>
                            </div>
                            <div class=\"ev-dot\" style=\"background:{{ e.color }};\"></div>
                        </div>
                    {% endfor %}
                </div>
            </div>

            <!-- Forum -->
            <div class=\"widget\">
                <div class=\"widget-head\">
                    <div class=\"widget-title\">💬 Forum <span class=\"badge\">Récent</span></div>
                    <a href=\"{{ path('forum') }}\" class=\"see-all\">Voir tout →</a>
                </div>
                <div class=\"widget-body\">
                    {% set posts = [
                        { init:'SA', bg:'#6A5ACD', subj:'Tri rapide vs Tri fusion — performances ?', prev:\"Quelqu'un peut comparer les complexités ?\", time:'1h', rep:8 },
                        { init:'MK', bg:'#5CB89E', subj:\"Ressources pour l'examen BD\",               prev:'J\\'ai trouvé un super cours en ligne…',     time:'3h', rep:4 },
                        { init:'RL', bg:'#E5A44B', subj:'Aide — configuration VPN université',        prev:'Impossible d\\'accéder au réseau depuis…',  time:'hier',rep:12 },
                        { init:'AO', bg:'#E07D8A', subj:'Groupe de révision — Jeudi 17h',             prev:'On se retrouve en B204 pour réviser…',     time:'hier',rep:6 },
                    ] %}
                    {% for p in posts %}
                        <div class=\"fo-row\">
                            <div class=\"fo-avatar\" style=\"background:{{ p.bg }};\">{{ p.init }}</div>
                            <div class=\"fo-info\">
                                <div class=\"fo-subj\">{{ p.subj }}</div>
                                <div class=\"fo-prev\">{{ p.prev }}</div>
                            </div>
                            <div class=\"fo-meta\">
                                <span class=\"fo-time\">{{ p.time }}</span>
                                <span class=\"fo-rep\">💬 {{ p.rep }}</span>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>

        </div>

        <!-- WELLNESS STRIP -->
        <div class=\"wellness fade d3\">
            <div class=\"w-icon\">🧠</div>
            <div class=\"w-text\">
                <h3>Votre bien-être mental compte</h3>
                <p>Des exercices de relaxation, des ressources discrètes et un espace d'écoute pour traverser vos études sereinement.</p>
            </div>
            <div class=\"w-btns\">
                <a href=\"{{ path('meditation') }}\" class=\"btn-w-outline\">Explorer</a>
                <a href=\"{{ path('meditation') }}\" class=\"btn-w-solid\">Commencer ✦</a>
            </div>
        </div>

    </main>

    <script>
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));
    </script>

{% endblock %}
", "homepage/index.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/homepage/index.html.twig");
    }
}

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

/* journal/index.html.twig */
class __TwigTemplate_7ec5c223c6c46b28214a9c5a59acb003 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "journal/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "journal/index.html.twig"));

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

        yield "Journal - Harmony";
        
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
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
            --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
            --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
            --border:rgba(106,90,205,.12);--white:#FFFFFF;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
        }
        html,body{height:100%;font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}

        .topbar{position:sticky;top:0;z-index:200;background:var(--white);border-bottom:1px solid var(--border);height:62px;display:flex;align-items:center;padding:0 40px;gap:8px;}
        .topbar-logo{display:flex;align-items:center;gap:10px;text-decoration:none;margin-right:32px;}
        .logo-mark{width:34px;height:34px;border-radius:10px;object-fit:contain;flex-shrink:0;}
        .nav-links{display:flex;align-items:center;gap:2px;flex:1;flex-wrap:nowrap;overflow-x:auto;}
        .nav-link{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;border-radius:9px;font-size:13.5px;font-weight:500;color:var(--text-mid);text-decoration:none;white-space:nowrap;transition:background .15s,color .15s;}
        .nav-link:hover{background:var(--purple-pale);color:var(--purple);}
        .nav-link.active{background:var(--purple-pale);color:var(--purple);font-weight:600;}
        .nav-link .nav-emoji{font-size:14px;}
        .topbar-right{display:flex;align-items:center;gap:10px;margin-left:auto;flex-shrink:0;}
        .logout-btn{padding:7px 16px;border-radius:9px;border:1.5px solid rgba(239,68,68,.2);background:transparent;color:#E05252;font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;transition:background .15s,border-color .15s;white-space:nowrap;text-decoration:none;}
        .logout-btn:hover{background:#FEF2F2;border-color:#E05252;}
        .profile-wrap{position:relative;}
        .avatar{width:36px;height:36px;border-radius:50%;background:var(--purple);color:white;font-family:var(--font-head);font-weight:700;font-size:14px;display:grid;place-items:center;cursor:pointer;border:2px solid var(--purple-pale);transition:box-shadow .15s;}
        .avatar:hover{box-shadow:0 0 0 3px rgba(106,90,205,.25);}
        .profile-dropdown{position:absolute;top:calc(100% + 10px);right:0;width:220px;background:var(--white);border:1px solid var(--border);border-radius:14px;box-shadow:0 12px 40px rgba(0,0,0,.1);padding:16px;display:none;z-index:500;}
        .profile-dropdown.open{display:block;}
        .pd-name{font-size:14px;font-weight:600;color:var(--text);}
        .pd-email{font-size:12px;color:var(--text-muted);margin-top:2px;}
        .pd-divider{height:1px;background:var(--border);margin:12px 0;}
        .pd-hint{font-size:11px;color:var(--text-muted);font-style:italic;}

        .container{max-width:1200px;margin:0 auto;padding:48px 40px 80px;}
        .page-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;}
        .page-title{font-family:var(--font-head);font-weight:800;font-size:32px;color:var(--purple);}

        .toolbar{display:flex;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap;}
        .search-box{flex:1;min-width:200px;display:flex;align-items:center;background:var(--white);border:1px solid var(--border);border-radius:12px;padding:0 14px;height:42px;}
        .search-box input{border:none;outline:none;flex:1;font-size:14px;font-family:var(--font-body);background:transparent;color:var(--text);}
        .filter-select{height:42px;padding:0 14px;border-radius:12px;border:1px solid var(--border);background:var(--white);color:var(--text-mid);font-size:13px;font-weight:500;font-family:var(--font-body);cursor:pointer;min-width:180px;}
        .filter-select:focus{outline:none;border-color:var(--purple);}
        .action-btn{height:42px;padding:0 18px;border-radius:12px;border:1px solid var(--border);background:var(--white);color:var(--text-mid);font-size:13px;font-weight:500;cursor:pointer;transition:.15s;font-family:var(--font-body);display:inline-flex;align-items:center;gap:6px;text-decoration:none;}
        .action-btn:hover{background:var(--purple-pale);color:var(--purple);border-color:var(--purple);}
        .btn-primary{background:var(--purple);color:white;border-color:var(--purple);}
        .btn-primary:hover{background:var(--purple-dark);color:white;}

        .results-count{font-size:13px;color:var(--text-muted);margin-bottom:16px;}
        .cards-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(340px,1fr));gap:20px;}
        .card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px;transition:box-shadow .2s;}
        .card:hover{box-shadow:0 8px 30px rgba(106,90,205,.1);}
        .card-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:12px;}
        .card-date{font-size:13px;color:var(--text-muted);font-weight:500;}
        .mood-badge{display:inline-flex;align-items:center;gap:4px;font-size:12px;font-weight:600;padding:4px 12px;border-radius:20px;}
        .mood-5{background:#D1FAE5;color:#065F46;}
        .mood-4{background:#DBEAFE;color:#1E40AF;}
        .mood-3{background:#F3F4F6;color:#4B5563;}
        .mood-2{background:#FEF3C7;color:#92400E;}
        .mood-1{background:#FEE2E2;color:#991B1B;}
        .card-contenu{font-size:14px;color:var(--text);line-height:1.6;margin-bottom:16px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;}
        .card-actions{display:flex;gap:8px;}
        .card-actions a,.card-actions button{padding:6px 14px;border-radius:9px;font-size:12px;font-weight:500;text-decoration:none;border:1px solid var(--border);background:var(--white);color:var(--text-mid);cursor:pointer;transition:.15s;font-family:var(--font-body);}
        .card-actions a:hover{background:var(--purple-pale);color:var(--purple);}
        .card-actions .btn-del{color:#E05252;border-color:rgba(224,82,82,.2);}
        .card-actions .btn-del:hover{background:#FEF2F2;}

        .loading{display:none;text-align:center;padding:40px;color:var(--text-muted);font-size:14px;}
        .empty-state{text-align:center;padding:60px 20px;color:var(--text-muted);}
        .empty-state .icon{font-size:48px;margin-bottom:12px;}

        .flash-success{padding:12px 18px;border-radius:10px;margin-bottom:20px;font-size:14px;font-weight:500;background:#D1FAE5;color:#065F46;border:1px solid #6EE7B7;}

        @media(max-width:640px){.topbar{padding:0 20px;}.nav-links{display:none;}.container{padding:24px 20px 60px;}}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

        // line 85
        yield "    ";
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "attributes", [], "any", false, false, false, 85), "get", ["_route"], "method", false, false, false, 85);
        // line 86
        yield "
    <header class=\"topbar\">
        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
            <img src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
        </a>
        <nav class=\"nav-links\">
            <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 92, $this->source); })()) == "activites")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 93, $this->source); })()) == "forum")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 94, $this->source); })()) == "taches")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 95, $this->source); })()) == "evenements")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 96, $this->source); })()) == "nutrition")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"nav-link ";
        yield ((CoreExtension::inFilter("meditation", (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 97, $this->source); })()))) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\" class=\"nav-link active\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 99, $this->source); })()) == "library")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>
        <div class=\"topbar-right\">
            <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout-btn\">🚪 Déconnexion</a>
            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">";
        // line 104
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "firstName", [], "any", false, false, false, 104))), "html", null, true)) : ("E"));
        yield "</div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">";
        // line 106
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "firstName", [], "any", false, false, false, 106) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "lastName", [], "any", false, false, false, 106)), "html", null, true)) : ("Étudiant"));
        yield "</div>
                    <div class=\"pd-email\">";
        // line 107
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "email", [], "any", false, false, false, 107), "html", null, true)) : ("email@exemple.com"));
        yield "</div>
                    <div class=\"pd-divider\"></div>
                    <div class=\"pd-hint\">Double-clic pour modifier</div>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container\">
        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "flashes", ["success"], "method", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 117
            yield "            <div class=\"flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "
        <div class=\"page-header\">
            <h1 class=\"page-title\">📔 Mon Journal</h1>
            <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal_new");
        yield "\" class=\"action-btn btn-primary\">+ Nouvelle entrée</a>
        </div>

        <div class=\"toolbar\">
            <div class=\"search-box\">
                <span style=\"margin-right:8px;color:var(--text-muted)\">🔍</span>
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher dans vos entrées...\">
            </div>
            <select id=\"humeurFilter\" class=\"filter-select\">
                <option value=\"\">Toutes les humeurs</option>
                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["humeurs"]) || array_key_exists("humeurs", $context) ? $context["humeurs"] : (function () { throw new RuntimeError('Variable "humeurs" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 133
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "value", [], "any", false, false, false, 133), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "emoji", [], "any", false, false, false, 133), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "label", [], "any", false, false, false, 133), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "            </select>
        </div>

        <div class=\"results-count\" id=\"resultsCount\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 138, $this->source); })())), "html", null, true);
        yield " entrée(s)</div>
        <div class=\"loading\" id=\"loading\">⏳ Chargement...</div>

        <div class=\"cards-grid\" id=\"cardsGrid\">
            ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 142, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 143
            yield "                <div class=\"card\">
                    <div class=\"card-header\">
                        <span class=\"card-date\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "dateJournal", [], "any", false, false, false, 145), "d/m/Y"), "html", null, true);
            yield "</span>
                        <span class=\"mood-badge mood-";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "score", [], "any", false, false, false, 146), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "humeur", [], "any", false, false, false, 146), "emoji", [], "any", false, false, false, 146), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "humeur", [], "any", false, false, false, 146), "label", [], "any", false, false, false, 146), "html", null, true);
            yield "</span>
                    </div>
                    <div class=\"card-contenu\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "contenu", [], "any", false, false, false, 148), "html", null, true);
            yield "</div>
                    <div class=\"card-actions\">
                        <a href=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\">✏️ Modifier</a>
                        <form method=\"post\" action=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            yield "\" style=\"display:inline\" onsubmit=\"return confirm('Supprimer cette entrée ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 152))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn-del\">🗑 Supprimer</button>
                        </form>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 157
        if (!$context['_iterated']) {
            // line 158
            yield "                <div class=\"empty-state\">
                    <div class=\"icon\">📔</div>
                    <p>Aucune entrée dans votre journal.</p>
                    <a href=\"";
            // line 161
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal_new");
            yield "\" class=\"action-btn btn-primary\" style=\"margin-top:16px;display:inline-flex\">+ Écrire ma première entrée</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "        </div>
    </div>

    <script>
    (function(){
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));

        const searchInput = document.getElementById('searchInput');
        const humeurFilter = document.getElementById('humeurFilter');
        const grid = document.getElementById('cardsGrid');
        const count = document.getElementById('resultsCount');
        const loading = document.getElementById('loading');
        let debounce;

        function moodClass(score) {
            return 'mood-' + score;
        }

        function doSearch() {
            const q = searchInput.value.trim();
            const humeur = humeurFilter.value;
            loading.style.display = 'block';
            grid.style.opacity = '0.4';

            fetch(`";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal_search");
        yield "?q=\${encodeURIComponent(q)}&humeur=\${encodeURIComponent(humeur)}`)
                .then(r => r.json())
                .then(data => {
                    loading.style.display = 'none';
                    grid.style.opacity = '1';
                    count.textContent = data.length + ' entrée(s)';

                    if (data.length === 0) {
                        grid.innerHTML = '<div class=\"empty-state\"><div class=\"icon\">🔍</div><p>Aucun résultat.</p></div>';
                        return;
                    }

                    grid.innerHTML = data.map(e => `
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <span class=\"card-date\">\${esc(e.date)}</span>
                                <span class=\"mood-badge \${moodClass(e.score)}\">\${e.humeurEmoji} \${esc(e.humeurLabel)}</span>
                            </div>
                            <div class=\"card-contenu\">\${esc(e.contenu)}</div>
                            <div class=\"card-actions\">
                                <a href=\"/journal/\${e.id}/edit\">✏️ Modifier</a>
                            </div>
                        </div>
                    `).join('');
                });
        }

        searchInput.addEventListener('input', () => {
            clearTimeout(debounce);
            debounce = setTimeout(doSearch, 250);
        });

        humeurFilter.addEventListener('change', doSearch);

        function esc(str) { const d = document.createElement('div'); d.textContent = str || ''; return d.innerHTML; }
    })();
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
        return "journal/index.html.twig";
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
        return array (  442 => 191,  413 => 164,  404 => 161,  399 => 158,  397 => 157,  387 => 152,  383 => 151,  379 => 150,  374 => 148,  365 => 146,  361 => 145,  357 => 143,  352 => 142,  345 => 138,  340 => 135,  327 => 133,  323 => 132,  310 => 122,  305 => 119,  296 => 117,  292 => 116,  280 => 107,  276 => 106,  271 => 104,  266 => 102,  258 => 99,  254 => 98,  248 => 97,  242 => 96,  236 => 95,  230 => 94,  224 => 93,  218 => 92,  212 => 89,  208 => 88,  204 => 86,  201 => 85,  188 => 84,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Journal - Harmony{% endblock %}

{% block stylesheets %}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
            --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
            --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
            --border:rgba(106,90,205,.12);--white:#FFFFFF;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
        }
        html,body{height:100%;font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}

        .topbar{position:sticky;top:0;z-index:200;background:var(--white);border-bottom:1px solid var(--border);height:62px;display:flex;align-items:center;padding:0 40px;gap:8px;}
        .topbar-logo{display:flex;align-items:center;gap:10px;text-decoration:none;margin-right:32px;}
        .logo-mark{width:34px;height:34px;border-radius:10px;object-fit:contain;flex-shrink:0;}
        .nav-links{display:flex;align-items:center;gap:2px;flex:1;flex-wrap:nowrap;overflow-x:auto;}
        .nav-link{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;border-radius:9px;font-size:13.5px;font-weight:500;color:var(--text-mid);text-decoration:none;white-space:nowrap;transition:background .15s,color .15s;}
        .nav-link:hover{background:var(--purple-pale);color:var(--purple);}
        .nav-link.active{background:var(--purple-pale);color:var(--purple);font-weight:600;}
        .nav-link .nav-emoji{font-size:14px;}
        .topbar-right{display:flex;align-items:center;gap:10px;margin-left:auto;flex-shrink:0;}
        .logout-btn{padding:7px 16px;border-radius:9px;border:1.5px solid rgba(239,68,68,.2);background:transparent;color:#E05252;font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;transition:background .15s,border-color .15s;white-space:nowrap;text-decoration:none;}
        .logout-btn:hover{background:#FEF2F2;border-color:#E05252;}
        .profile-wrap{position:relative;}
        .avatar{width:36px;height:36px;border-radius:50%;background:var(--purple);color:white;font-family:var(--font-head);font-weight:700;font-size:14px;display:grid;place-items:center;cursor:pointer;border:2px solid var(--purple-pale);transition:box-shadow .15s;}
        .avatar:hover{box-shadow:0 0 0 3px rgba(106,90,205,.25);}
        .profile-dropdown{position:absolute;top:calc(100% + 10px);right:0;width:220px;background:var(--white);border:1px solid var(--border);border-radius:14px;box-shadow:0 12px 40px rgba(0,0,0,.1);padding:16px;display:none;z-index:500;}
        .profile-dropdown.open{display:block;}
        .pd-name{font-size:14px;font-weight:600;color:var(--text);}
        .pd-email{font-size:12px;color:var(--text-muted);margin-top:2px;}
        .pd-divider{height:1px;background:var(--border);margin:12px 0;}
        .pd-hint{font-size:11px;color:var(--text-muted);font-style:italic;}

        .container{max-width:1200px;margin:0 auto;padding:48px 40px 80px;}
        .page-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;}
        .page-title{font-family:var(--font-head);font-weight:800;font-size:32px;color:var(--purple);}

        .toolbar{display:flex;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap;}
        .search-box{flex:1;min-width:200px;display:flex;align-items:center;background:var(--white);border:1px solid var(--border);border-radius:12px;padding:0 14px;height:42px;}
        .search-box input{border:none;outline:none;flex:1;font-size:14px;font-family:var(--font-body);background:transparent;color:var(--text);}
        .filter-select{height:42px;padding:0 14px;border-radius:12px;border:1px solid var(--border);background:var(--white);color:var(--text-mid);font-size:13px;font-weight:500;font-family:var(--font-body);cursor:pointer;min-width:180px;}
        .filter-select:focus{outline:none;border-color:var(--purple);}
        .action-btn{height:42px;padding:0 18px;border-radius:12px;border:1px solid var(--border);background:var(--white);color:var(--text-mid);font-size:13px;font-weight:500;cursor:pointer;transition:.15s;font-family:var(--font-body);display:inline-flex;align-items:center;gap:6px;text-decoration:none;}
        .action-btn:hover{background:var(--purple-pale);color:var(--purple);border-color:var(--purple);}
        .btn-primary{background:var(--purple);color:white;border-color:var(--purple);}
        .btn-primary:hover{background:var(--purple-dark);color:white;}

        .results-count{font-size:13px;color:var(--text-muted);margin-bottom:16px;}
        .cards-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(340px,1fr));gap:20px;}
        .card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px;transition:box-shadow .2s;}
        .card:hover{box-shadow:0 8px 30px rgba(106,90,205,.1);}
        .card-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:12px;}
        .card-date{font-size:13px;color:var(--text-muted);font-weight:500;}
        .mood-badge{display:inline-flex;align-items:center;gap:4px;font-size:12px;font-weight:600;padding:4px 12px;border-radius:20px;}
        .mood-5{background:#D1FAE5;color:#065F46;}
        .mood-4{background:#DBEAFE;color:#1E40AF;}
        .mood-3{background:#F3F4F6;color:#4B5563;}
        .mood-2{background:#FEF3C7;color:#92400E;}
        .mood-1{background:#FEE2E2;color:#991B1B;}
        .card-contenu{font-size:14px;color:var(--text);line-height:1.6;margin-bottom:16px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;}
        .card-actions{display:flex;gap:8px;}
        .card-actions a,.card-actions button{padding:6px 14px;border-radius:9px;font-size:12px;font-weight:500;text-decoration:none;border:1px solid var(--border);background:var(--white);color:var(--text-mid);cursor:pointer;transition:.15s;font-family:var(--font-body);}
        .card-actions a:hover{background:var(--purple-pale);color:var(--purple);}
        .card-actions .btn-del{color:#E05252;border-color:rgba(224,82,82,.2);}
        .card-actions .btn-del:hover{background:#FEF2F2;}

        .loading{display:none;text-align:center;padding:40px;color:var(--text-muted);font-size:14px;}
        .empty-state{text-align:center;padding:60px 20px;color:var(--text-muted);}
        .empty-state .icon{font-size:48px;margin-bottom:12px;}

        .flash-success{padding:12px 18px;border-radius:10px;margin-bottom:20px;font-size:14px;font-weight:500;background:#D1FAE5;color:#065F46;border:1px solid #6EE7B7;}

        @media(max-width:640px){.topbar{padding:0 20px;}.nav-links{display:none;}.container{padding:24px 20px 60px;}}
    </style>
{% endblock %}

{% block body %}
    {% set current_route = app.request.attributes.get('_route') %}

    <header class=\"topbar\">
        <a href=\"{{ path('homepage') }}\" class=\"topbar-logo\">
            <img src=\"{{ asset('images/logo.png') }}\" class=\"logo-mark\" alt=\"Harmony\">
        </a>
        <nav class=\"nav-links\">
            <a href=\"{{ path('activites') }}\" class=\"nav-link {{ current_route == 'activites' ? 'active' }}\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"{{ path('forum') }}\" class=\"nav-link {{ current_route == 'forum' ? 'active' }}\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"{{ path('taches') }}\" class=\"nav-link {{ current_route == 'taches' ? 'active' }}\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"{{ path('evenements') }}\" class=\"nav-link {{ current_route == 'evenements' ? 'active' }}\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"{{ path('nutrition') }}\" class=\"nav-link {{ current_route == 'nutrition' ? 'active' }}\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"{{ path('meditation') }}\" class=\"nav-link {{ 'meditation' in current_route ? 'active' }}\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"{{ path('journal') }}\" class=\"nav-link active\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"{{ path('library') }}\" class=\"nav-link {{ current_route == 'library' ? 'active' }}\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>
        <div class=\"topbar-right\">
            <a href=\"{{ path('app_logout') }}\" class=\"logout-btn\">🚪 Déconnexion</a>
            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">{{ app.user ? app.user.firstName|first|upper : 'E' }}</div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">{{ app.user ? app.user.firstName ~ ' ' ~ app.user.lastName : 'Étudiant' }}</div>
                    <div class=\"pd-email\">{{ app.user ? app.user.email : 'email@exemple.com' }}</div>
                    <div class=\"pd-divider\"></div>
                    <div class=\"pd-hint\">Double-clic pour modifier</div>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container\">
        {% for msg in app.flashes('success') %}
            <div class=\"flash-success\">✅ {{ msg }}</div>
        {% endfor %}

        <div class=\"page-header\">
            <h1 class=\"page-title\">📔 Mon Journal</h1>
            <a href=\"{{ path('journal_new') }}\" class=\"action-btn btn-primary\">+ Nouvelle entrée</a>
        </div>

        <div class=\"toolbar\">
            <div class=\"search-box\">
                <span style=\"margin-right:8px;color:var(--text-muted)\">🔍</span>
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher dans vos entrées...\">
            </div>
            <select id=\"humeurFilter\" class=\"filter-select\">
                <option value=\"\">Toutes les humeurs</option>
                {% for h in humeurs %}
                    <option value=\"{{ h.value }}\">{{ h.emoji }} {{ h.label }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\"results-count\" id=\"resultsCount\">{{ entries|length }} entrée(s)</div>
        <div class=\"loading\" id=\"loading\">⏳ Chargement...</div>

        <div class=\"cards-grid\" id=\"cardsGrid\">
            {% for e in entries %}
                <div class=\"card\">
                    <div class=\"card-header\">
                        <span class=\"card-date\">{{ e.dateJournal|date('d/m/Y') }}</span>
                        <span class=\"mood-badge mood-{{ e.score }}\">{{ e.humeur.emoji }} {{ e.humeur.label }}</span>
                    </div>
                    <div class=\"card-contenu\">{{ e.contenu }}</div>
                    <div class=\"card-actions\">
                        <a href=\"{{ path('journal_edit', {id: e.id}) }}\">✏️ Modifier</a>
                        <form method=\"post\" action=\"{{ path('journal_delete', {id: e.id}) }}\" style=\"display:inline\" onsubmit=\"return confirm('Supprimer cette entrée ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ e.id) }}\">
                            <button type=\"submit\" class=\"btn-del\">🗑 Supprimer</button>
                        </form>
                    </div>
                </div>
            {% else %}
                <div class=\"empty-state\">
                    <div class=\"icon\">📔</div>
                    <p>Aucune entrée dans votre journal.</p>
                    <a href=\"{{ path('journal_new') }}\" class=\"action-btn btn-primary\" style=\"margin-top:16px;display:inline-flex\">+ Écrire ma première entrée</a>
                </div>
            {% endfor %}
        </div>
    </div>

    <script>
    (function(){
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));

        const searchInput = document.getElementById('searchInput');
        const humeurFilter = document.getElementById('humeurFilter');
        const grid = document.getElementById('cardsGrid');
        const count = document.getElementById('resultsCount');
        const loading = document.getElementById('loading');
        let debounce;

        function moodClass(score) {
            return 'mood-' + score;
        }

        function doSearch() {
            const q = searchInput.value.trim();
            const humeur = humeurFilter.value;
            loading.style.display = 'block';
            grid.style.opacity = '0.4';

            fetch(`{{ path('journal_search') }}?q=\${encodeURIComponent(q)}&humeur=\${encodeURIComponent(humeur)}`)
                .then(r => r.json())
                .then(data => {
                    loading.style.display = 'none';
                    grid.style.opacity = '1';
                    count.textContent = data.length + ' entrée(s)';

                    if (data.length === 0) {
                        grid.innerHTML = '<div class=\"empty-state\"><div class=\"icon\">🔍</div><p>Aucun résultat.</p></div>';
                        return;
                    }

                    grid.innerHTML = data.map(e => `
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <span class=\"card-date\">\${esc(e.date)}</span>
                                <span class=\"mood-badge \${moodClass(e.score)}\">\${e.humeurEmoji} \${esc(e.humeurLabel)}</span>
                            </div>
                            <div class=\"card-contenu\">\${esc(e.contenu)}</div>
                            <div class=\"card-actions\">
                                <a href=\"/journal/\${e.id}/edit\">✏️ Modifier</a>
                            </div>
                        </div>
                    `).join('');
                });
        }

        searchInput.addEventListener('input', () => {
            clearTimeout(debounce);
            debounce = setTimeout(doSearch, 250);
        });

        humeurFilter.addEventListener('change', doSearch);

        function esc(str) { const d = document.createElement('div'); d.textContent = str || ''; return d.innerHTML; }
    })();
    </script>
{% endblock %}
", "journal/index.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/journal/index.html.twig");
    }
}

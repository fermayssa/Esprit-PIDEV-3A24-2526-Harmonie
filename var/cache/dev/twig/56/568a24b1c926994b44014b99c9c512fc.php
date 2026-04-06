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

/* meditation/etudiant/index.html.twig */
class __TwigTemplate_18d0c5aae2ab5ab365389cd3dd049410 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/etudiant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/etudiant/index.html.twig"));

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

        yield "Méditation - Harmony";
        
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

        /* TOPBAR */
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

        /* PAGE */
        .container{max-width:1200px;margin:0 auto;padding:48px 40px 80px;}
        .page-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;}
        .page-title{font-family:var(--font-head);font-weight:800;font-size:32px;color:var(--purple);}

        .toolbar{display:flex;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap;}
        .search-box{flex:1;min-width:200px;display:flex;align-items:center;background:var(--white);border:1px solid var(--border);border-radius:12px;padding:0 14px;height:42px;}
        .search-box input{border:none;outline:none;flex:1;font-size:14px;font-family:var(--font-body);background:transparent;color:var(--text);}
        .sort-btn{height:42px;padding:0 18px;border-radius:12px;border:1px solid var(--border);background:var(--white);color:var(--text-mid);font-size:13px;font-weight:500;cursor:pointer;transition:.15s;font-family:var(--font-body);}
        .sort-btn:hover{background:var(--purple-pale);color:var(--purple);border-color:var(--purple);}
        .sort-btn.active{background:var(--purple);color:white;border-color:var(--purple);}

        .results-count{font-size:13px;color:var(--text-muted);margin-bottom:16px;}
        .cards-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:20px;}
        .card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px;transition:box-shadow .2s;cursor:pointer;text-decoration:none;color:inherit;display:block;}
        .card:hover{box-shadow:0 8px 30px rgba(106,90,205,.1);}
        .card-theme{font-family:var(--font-head);font-size:18px;font-weight:700;color:var(--text);margin-bottom:8px;}
        .card-meta{font-size:13px;color:var(--text-muted);margin-bottom:4px;}
        .card-meta span{color:var(--text-mid);font-weight:500;}
        .badge{display:inline-flex;align-items:center;gap:4px;font-size:11px;font-weight:600;background:var(--purple-pale);color:var(--purple);padding:3px 10px;border-radius:20px;margin-top:8px;}
        .card-footer{margin-top:14px;font-size:13px;color:var(--purple);font-weight:500;}

        .loading{display:none;text-align:center;padding:40px;color:var(--text-muted);font-size:14px;}
        .empty-state{text-align:center;padding:60px 20px;color:var(--text-muted);}
        .empty-state .icon{font-size:48px;margin-bottom:12px;}

        @media(max-width:640px){.topbar{padding:0 20px;}.nav-links{display:none;}.container{padding:24px 20px 60px;}}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "    ";
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", ["_route"], "method", false, false, false, 73);
        // line 74
        yield "
    <header class=\"topbar\">
        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
            <img src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
        </a>
        <nav class=\"nav-links\">
            <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 80, $this->source); })()) == "activites")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 81, $this->source); })()) == "forum")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 82, $this->source); })()) == "taches")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 83, $this->source); })()) == "evenements")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 84, $this->source); })()) == "nutrition")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"nav-link ";
        yield ((CoreExtension::inFilter("meditation", (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 85, $this->source); })()))) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\" class=\"nav-link ";
        yield ((CoreExtension::inFilter("journal", (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 86, $this->source); })()))) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 87, $this->source); })()) == "library")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>
        <div class=\"topbar-right\">
            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout-btn\">🚪 Déconnexion</a>
            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">";
        // line 92
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "firstName", [], "any", false, false, false, 92))), "html", null, true)) : ("E"));
        yield "</div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">";
        // line 94
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "firstName", [], "any", false, false, false, 94) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "lastName", [], "any", false, false, false, 94)), "html", null, true)) : ("Étudiant"));
        yield "</div>
                    <div class=\"pd-email\">";
        // line 95
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "email", [], "any", false, false, false, 95), "html", null, true)) : ("email@exemple.com"));
        yield "</div>
                    <div class=\"pd-divider\"></div>
                    <div class=\"pd-hint\">Double-clic pour modifier</div>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">🧘 Méditation</h1>
        </div>

        <div class=\"toolbar\">
            <div class=\"search-box\">
                <span style=\"margin-right:8px;color:var(--text-muted)\">🔍</span>
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par thème ou auteur...\" value=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 111, $this->source); })()), "html", null, true);
        yield "\">
            </div>
            <button class=\"sort-btn ";
        // line 113
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 113, $this->source); })()) == "theme")) ? ("active") : (""));
        yield "\" data-sort=\"theme\">Thème</button>
            <button class=\"sort-btn ";
        // line 114
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 114, $this->source); })()) == "auteur")) ? ("active") : (""));
        yield "\" data-sort=\"auteur\">Auteur</button>
            <button class=\"sort-btn ";
        // line 115
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 115, $this->source); })()) == "duree")) ? ("active") : (""));
        yield "\" data-sort=\"duree\">Durée</button>
        </div>

        <div class=\"results-count\" id=\"resultsCount\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 118, $this->source); })())), "html", null, true);
        yield " session(s)</div>
        <div class=\"loading\" id=\"loading\">⏳ Chargement...</div>

        <div class=\"cards-grid\" id=\"cardsGrid\">
            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 122, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 123
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\" class=\"card\">
                    <div class=\"card-theme\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "theme", [], "any", false, false, false, 124), "html", null, true);
            yield "</div>
                    <div class=\"card-meta\">👨‍⚕️ Auteur : <span>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "auteur", [], "any", false, false, false, 125), "html", null, true);
            yield "</span></div>
                    <div class=\"card-meta\">⏱ Durée : <span>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "duree", [], "any", false, false, false, 126), "html", null, true);
            yield " min</span></div>
                    <div class=\"badge\">💡 ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "conseils", [], "any", false, false, false, 127)), "html", null, true);
            yield " conseil(s)</div>
                    <div class=\"card-footer\">Voir les détails →</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        // line 130
        if (!$context['_iterated']) {
            // line 131
            yield "                <div class=\"empty-state\">
                    <div class=\"icon\">🧘</div>
                    <p>Aucune session de méditation disponible.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "        </div>
    </div>

    <script>
    (function(){
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));

        const searchInput = document.getElementById('searchInput');
        const grid = document.getElementById('cardsGrid');
        const count = document.getElementById('resultsCount');
        const loading = document.getElementById('loading');
        const sortBtns = document.querySelectorAll('.sort-btn');
        let currentSort = '";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 151, $this->source); })()), "html", null, true);
        yield "';
        let currentDir = '";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 152, $this->source); })()), "html", null, true);
        yield "';
        let debounce;

        function doSearch() {
            const q = searchInput.value.trim();
            loading.style.display = 'block';
            grid.style.opacity = '0.4';

            fetch(`";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation_search");
        yield "?q=\${encodeURIComponent(q)}&sort=\${currentSort}&dir=\${currentDir}`)
                .then(r => r.json())
                .then(data => {
                    loading.style.display = 'none';
                    grid.style.opacity = '1';
                    count.textContent = data.length + ' session(s)';

                    if (data.length === 0) {
                        grid.innerHTML = '<div class=\"empty-state\"><div class=\"icon\">🔍</div><p>Aucun résultat.</p></div>';
                        return;
                    }

                    grid.innerHTML = data.map(s => `
                        <a href=\"/meditation/\${s.id}\" class=\"card\">
                            <div class=\"card-theme\">\${esc(s.theme)}</div>
                            <div class=\"card-meta\">👨‍⚕️ Auteur : <span>\${esc(s.auteur)}</span></div>
                            <div class=\"card-meta\">⏱ Durée : <span>\${s.duree} min</span></div>
                            <div class=\"badge\">💡 \${s.conseilsCount} conseil(s)</div>
                            <div class=\"card-footer\">Voir les détails →</div>
                        </a>
                    `).join('');
                });
        }

        searchInput.addEventListener('input', () => {
            clearTimeout(debounce);
            debounce = setTimeout(doSearch, 250);
        });

        sortBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const s = btn.dataset.sort;
                if (currentSort === s) currentDir = currentDir === 'ASC' ? 'DESC' : 'ASC';
                else { currentSort = s; currentDir = 'ASC'; }
                sortBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                doSearch();
            });
        });

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
        return "meditation/etudiant/index.html.twig";
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
        return array (  389 => 160,  378 => 152,  374 => 151,  357 => 136,  347 => 131,  345 => 130,  337 => 127,  333 => 126,  329 => 125,  325 => 124,  320 => 123,  315 => 122,  308 => 118,  302 => 115,  298 => 114,  294 => 113,  289 => 111,  270 => 95,  266 => 94,  261 => 92,  256 => 90,  248 => 87,  242 => 86,  236 => 85,  230 => 84,  224 => 83,  218 => 82,  212 => 81,  206 => 80,  200 => 77,  196 => 76,  192 => 74,  189 => 73,  176 => 72,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Méditation - Harmony{% endblock %}

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

        /* TOPBAR */
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

        /* PAGE */
        .container{max-width:1200px;margin:0 auto;padding:48px 40px 80px;}
        .page-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;}
        .page-title{font-family:var(--font-head);font-weight:800;font-size:32px;color:var(--purple);}

        .toolbar{display:flex;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap;}
        .search-box{flex:1;min-width:200px;display:flex;align-items:center;background:var(--white);border:1px solid var(--border);border-radius:12px;padding:0 14px;height:42px;}
        .search-box input{border:none;outline:none;flex:1;font-size:14px;font-family:var(--font-body);background:transparent;color:var(--text);}
        .sort-btn{height:42px;padding:0 18px;border-radius:12px;border:1px solid var(--border);background:var(--white);color:var(--text-mid);font-size:13px;font-weight:500;cursor:pointer;transition:.15s;font-family:var(--font-body);}
        .sort-btn:hover{background:var(--purple-pale);color:var(--purple);border-color:var(--purple);}
        .sort-btn.active{background:var(--purple);color:white;border-color:var(--purple);}

        .results-count{font-size:13px;color:var(--text-muted);margin-bottom:16px;}
        .cards-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:20px;}
        .card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px;transition:box-shadow .2s;cursor:pointer;text-decoration:none;color:inherit;display:block;}
        .card:hover{box-shadow:0 8px 30px rgba(106,90,205,.1);}
        .card-theme{font-family:var(--font-head);font-size:18px;font-weight:700;color:var(--text);margin-bottom:8px;}
        .card-meta{font-size:13px;color:var(--text-muted);margin-bottom:4px;}
        .card-meta span{color:var(--text-mid);font-weight:500;}
        .badge{display:inline-flex;align-items:center;gap:4px;font-size:11px;font-weight:600;background:var(--purple-pale);color:var(--purple);padding:3px 10px;border-radius:20px;margin-top:8px;}
        .card-footer{margin-top:14px;font-size:13px;color:var(--purple);font-weight:500;}

        .loading{display:none;text-align:center;padding:40px;color:var(--text-muted);font-size:14px;}
        .empty-state{text-align:center;padding:60px 20px;color:var(--text-muted);}
        .empty-state .icon{font-size:48px;margin-bottom:12px;}

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
            <a href=\"{{ path('journal') }}\" class=\"nav-link {{ 'journal' in current_route ? 'active' }}\"><span class=\"nav-emoji\">📔</span> Journal</a>
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
        <div class=\"page-header\">
            <h1 class=\"page-title\">🧘 Méditation</h1>
        </div>

        <div class=\"toolbar\">
            <div class=\"search-box\">
                <span style=\"margin-right:8px;color:var(--text-muted)\">🔍</span>
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par thème ou auteur...\" value=\"{{ q }}\">
            </div>
            <button class=\"sort-btn {{ sort == 'theme' ? 'active' }}\" data-sort=\"theme\">Thème</button>
            <button class=\"sort-btn {{ sort == 'auteur' ? 'active' }}\" data-sort=\"auteur\">Auteur</button>
            <button class=\"sort-btn {{ sort == 'duree' ? 'active' }}\" data-sort=\"duree\">Durée</button>
        </div>

        <div class=\"results-count\" id=\"resultsCount\">{{ sessions|length }} session(s)</div>
        <div class=\"loading\" id=\"loading\">⏳ Chargement...</div>

        <div class=\"cards-grid\" id=\"cardsGrid\">
            {% for s in sessions %}
                <a href=\"{{ path('meditation_show', {id: s.id}) }}\" class=\"card\">
                    <div class=\"card-theme\">{{ s.theme }}</div>
                    <div class=\"card-meta\">👨‍⚕️ Auteur : <span>{{ s.auteur }}</span></div>
                    <div class=\"card-meta\">⏱ Durée : <span>{{ s.duree }} min</span></div>
                    <div class=\"badge\">💡 {{ s.conseils|length }} conseil(s)</div>
                    <div class=\"card-footer\">Voir les détails →</div>
                </a>
            {% else %}
                <div class=\"empty-state\">
                    <div class=\"icon\">🧘</div>
                    <p>Aucune session de méditation disponible.</p>
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
        const grid = document.getElementById('cardsGrid');
        const count = document.getElementById('resultsCount');
        const loading = document.getElementById('loading');
        const sortBtns = document.querySelectorAll('.sort-btn');
        let currentSort = '{{ sort }}';
        let currentDir = '{{ dir }}';
        let debounce;

        function doSearch() {
            const q = searchInput.value.trim();
            loading.style.display = 'block';
            grid.style.opacity = '0.4';

            fetch(`{{ path('meditation_search') }}?q=\${encodeURIComponent(q)}&sort=\${currentSort}&dir=\${currentDir}`)
                .then(r => r.json())
                .then(data => {
                    loading.style.display = 'none';
                    grid.style.opacity = '1';
                    count.textContent = data.length + ' session(s)';

                    if (data.length === 0) {
                        grid.innerHTML = '<div class=\"empty-state\"><div class=\"icon\">🔍</div><p>Aucun résultat.</p></div>';
                        return;
                    }

                    grid.innerHTML = data.map(s => `
                        <a href=\"/meditation/\${s.id}\" class=\"card\">
                            <div class=\"card-theme\">\${esc(s.theme)}</div>
                            <div class=\"card-meta\">👨‍⚕️ Auteur : <span>\${esc(s.auteur)}</span></div>
                            <div class=\"card-meta\">⏱ Durée : <span>\${s.duree} min</span></div>
                            <div class=\"badge\">💡 \${s.conseilsCount} conseil(s)</div>
                            <div class=\"card-footer\">Voir les détails →</div>
                        </a>
                    `).join('');
                });
        }

        searchInput.addEventListener('input', () => {
            clearTimeout(debounce);
            debounce = setTimeout(doSearch, 250);
        });

        sortBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const s = btn.dataset.sort;
                if (currentSort === s) currentDir = currentDir === 'ASC' ? 'DESC' : 'ASC';
                else { currentSort = s; currentDir = 'ASC'; }
                sortBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                doSearch();
            });
        });

        function esc(str) { const d = document.createElement('div'); d.textContent = str || ''; return d.innerHTML; }
    })();
    </script>
{% endblock %}
", "meditation/etudiant/index.html.twig", "/Users/rayen/Downloads/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication-3/templates/meditation/etudiant/index.html.twig");
    }
}

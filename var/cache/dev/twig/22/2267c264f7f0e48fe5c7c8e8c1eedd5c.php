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

/* meditation/etudiant/show.html.twig */
class __TwigTemplate_6eae25173625b6b688573175330f7218 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/etudiant/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/etudiant/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 3, $this->source); })()), "theme", [], "any", false, false, false, 3), "html", null, true);
        yield " - Harmony";
        
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

        .container{max-width:900px;margin:0 auto;padding:48px 40px 80px;}
        .back-link{display:inline-flex;align-items:center;gap:6px;color:var(--text-muted);text-decoration:none;font-size:13px;margin-bottom:20px;}
        .back-link:hover{color:var(--purple);}

        .detail-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:32px;margin-bottom:24px;}
        .detail-title{font-family:var(--font-head);font-size:28px;font-weight:700;color:var(--text);margin-bottom:16px;}
        .detail-row{display:flex;gap:8px;margin-bottom:10px;font-size:14px;}
        .detail-label{color:var(--text-muted);min-width:120px;}
        .detail-value{color:var(--text);font-weight:500;}
        .detail-value a{color:var(--purple);}
        .youtube-btn{display:inline-flex;align-items:center;gap:8px;padding:10px 22px;border-radius:12px;background:#E05252;color:white;font-size:14px;font-weight:600;text-decoration:none;margin-top:16px;transition:.15s;}
        .youtube-btn:hover{background:#c93c3c;}

        .section-title{font-family:var(--font-head);font-size:20px;font-weight:700;color:var(--text);margin-bottom:16px;}
        .conseil-card{background:var(--white);border:1px solid var(--border);border-radius:12px;padding:16px 20px;margin-bottom:12px;display:flex;align-items:flex-start;gap:14px;}
        .conseil-num{width:28px;height:28px;border-radius:50%;background:var(--purple-pale);color:var(--purple);font-weight:700;font-size:13px;display:grid;place-items:center;flex-shrink:0;}
        .conseil-text{flex:1;font-size:14px;color:var(--text);line-height:1.6;}
        .empty-conseils{text-align:center;padding:30px;color:var(--text-muted);font-size:14px;}

        @media(max-width:640px){.topbar{padding:0 20px;}.nav-links{display:none;}.container{padding:24px 20px 60px;}}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
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

        // line 65
        yield "    ";
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", ["_route"], "method", false, false, false, 65);
        // line 66
        yield "
    <header class=\"topbar\">
        <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
            <img src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
        </a>
        <nav class=\"nav-links\">
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 72, $this->source); })()) == "activites")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 73, $this->source); })()) == "forum")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 74, $this->source); })()) == "taches")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 75, $this->source); })()) == "evenements")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 76, $this->source); })()) == "nutrition")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"nav-link active\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\" class=\"nav-link ";
        yield ((CoreExtension::inFilter("journal", (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 78, $this->source); })()))) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 79, $this->source); })()) == "library")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>
        <div class=\"topbar-right\">
            <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout-btn\">🚪 Déconnexion</a>
            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">";
        // line 84
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "firstName", [], "any", false, false, false, 84))), "html", null, true)) : ("E"));
        yield "</div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">";
        // line 86
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "firstName", [], "any", false, false, false, 86) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "lastName", [], "any", false, false, false, 86)), "html", null, true)) : ("Étudiant"));
        yield "</div>
                    <div class=\"pd-email\">";
        // line 87
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "email", [], "any", false, false, false, 87), "html", null, true)) : ("email@exemple.com"));
        yield "</div>
                    <div class=\"pd-divider\"></div>
                    <div class=\"pd-hint\">Double-clic pour modifier</div>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container\">
        <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"back-link\">← Retour aux sessions</a>

        <div class=\"detail-card\">
            <div class=\"detail-title\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 99, $this->source); })()), "theme", [], "any", false, false, false, 99), "html", null, true);
        yield "</div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">👨‍⚕️ Auteur</span>
                <span class=\"detail-value\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 102, $this->source); })()), "auteur", [], "any", false, false, false, 102), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">⏱ Durée</span>
                <span class=\"detail-value\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 106, $this->source); })()), "duree", [], "any", false, false, false, 106), "html", null, true);
        yield " minutes</span>
            </div>
            ";
        // line 108
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 108, $this->source); })()), "audioUrl", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 109, $this->source); })()), "audioUrl", [], "any", false, false, false, 109), "html", null, true);
            yield "\" target=\"_blank\" class=\"youtube-btn\">▶ Écouter sur YouTube</a>
            ";
        }
        // line 111
        yield "        </div>

        <div class=\"section-title\">💡 Conseils (";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 113, $this->source); })()), "conseils", [], "any", false, false, false, 113)), "html", null, true);
        yield ")</div>

        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 115, $this->source); })()), "conseils", [], "any", false, false, false, 115));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 116
            yield "            <div class=\"conseil-card\">
                <div class=\"conseil-num\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 117), "html", null, true);
            yield "</div>
                <div class=\"conseil-text\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "contenu", [], "any", false, false, false, 118), "html", null, true);
            yield "</div>
            </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 120
        if (!$context['_iterated']) {
            // line 121
            yield "            <div class=\"empty-conseils\">Aucun conseil pour cette session.</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conseil'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "    </div>

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
        return "meditation/etudiant/show.html.twig";
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
        return array (  363 => 123,  356 => 121,  354 => 120,  339 => 118,  335 => 117,  332 => 116,  314 => 115,  309 => 113,  305 => 111,  299 => 109,  297 => 108,  292 => 106,  285 => 102,  279 => 99,  273 => 96,  261 => 87,  257 => 86,  252 => 84,  247 => 82,  239 => 79,  233 => 78,  229 => 77,  223 => 76,  217 => 75,  211 => 74,  205 => 73,  199 => 72,  193 => 69,  189 => 68,  185 => 66,  182 => 65,  169 => 64,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ session.theme }} - Harmony{% endblock %}

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

        .container{max-width:900px;margin:0 auto;padding:48px 40px 80px;}
        .back-link{display:inline-flex;align-items:center;gap:6px;color:var(--text-muted);text-decoration:none;font-size:13px;margin-bottom:20px;}
        .back-link:hover{color:var(--purple);}

        .detail-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:32px;margin-bottom:24px;}
        .detail-title{font-family:var(--font-head);font-size:28px;font-weight:700;color:var(--text);margin-bottom:16px;}
        .detail-row{display:flex;gap:8px;margin-bottom:10px;font-size:14px;}
        .detail-label{color:var(--text-muted);min-width:120px;}
        .detail-value{color:var(--text);font-weight:500;}
        .detail-value a{color:var(--purple);}
        .youtube-btn{display:inline-flex;align-items:center;gap:8px;padding:10px 22px;border-radius:12px;background:#E05252;color:white;font-size:14px;font-weight:600;text-decoration:none;margin-top:16px;transition:.15s;}
        .youtube-btn:hover{background:#c93c3c;}

        .section-title{font-family:var(--font-head);font-size:20px;font-weight:700;color:var(--text);margin-bottom:16px;}
        .conseil-card{background:var(--white);border:1px solid var(--border);border-radius:12px;padding:16px 20px;margin-bottom:12px;display:flex;align-items:flex-start;gap:14px;}
        .conseil-num{width:28px;height:28px;border-radius:50%;background:var(--purple-pale);color:var(--purple);font-weight:700;font-size:13px;display:grid;place-items:center;flex-shrink:0;}
        .conseil-text{flex:1;font-size:14px;color:var(--text);line-height:1.6;}
        .empty-conseils{text-align:center;padding:30px;color:var(--text-muted);font-size:14px;}

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
            <a href=\"{{ path('meditation') }}\" class=\"nav-link active\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
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
        <a href=\"{{ path('meditation') }}\" class=\"back-link\">← Retour aux sessions</a>

        <div class=\"detail-card\">
            <div class=\"detail-title\">{{ session.theme }}</div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">👨‍⚕️ Auteur</span>
                <span class=\"detail-value\">{{ session.auteur }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">⏱ Durée</span>
                <span class=\"detail-value\">{{ session.duree }} minutes</span>
            </div>
            {% if session.audioUrl %}
            <a href=\"{{ session.audioUrl }}\" target=\"_blank\" class=\"youtube-btn\">▶ Écouter sur YouTube</a>
            {% endif %}
        </div>

        <div class=\"section-title\">💡 Conseils ({{ session.conseils|length }})</div>

        {% for conseil in session.conseils %}
            <div class=\"conseil-card\">
                <div class=\"conseil-num\">{{ loop.index }}</div>
                <div class=\"conseil-text\">{{ conseil.contenu }}</div>
            </div>
        {% else %}
            <div class=\"empty-conseils\">Aucun conseil pour cette session.</div>
        {% endfor %}
    </div>

    <script>
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));
    </script>
{% endblock %}
", "meditation/etudiant/show.html.twig", "/Users/rayen/Downloads/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication-3/templates/meditation/etudiant/show.html.twig");
    }
}

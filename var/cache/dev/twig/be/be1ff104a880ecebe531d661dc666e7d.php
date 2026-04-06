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

/* nutrition/index.html.twig */
class __TwigTemplate_3a581fef02e2518f23cd55eaee99a042 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nutrition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nutrition/index.html.twig"));

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

        yield "Nutrition - Harmony";
        
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

        /* ── PAGE ── */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 48px 40px 80px;
        }
        .content-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 22px;
            padding: 60px 40px;
            text-align: center;
        }
        .page-title {
            font-family: var(--font-head);
            font-weight: 800;
            font-size: 48px;
            color: var(--purple);
            margin-bottom: 16px;
            letter-spacing: -.5px;
        }
        .page-description {
            font-size: 16px;
            font-weight: 300;
            color: var(--text-mid);
            line-height: 1.7;
            max-width: 500px;
            margin: 0 auto 28px;
        }
        .wip-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .8px;
            text-transform: uppercase;
            color: var(--text-muted);
            background: var(--purple-ghost);
            border: 1px solid var(--border);
            padding: 6px 16px;
            border-radius: 20px;
        }

        @media (max-width: 640px) {
            .topbar { padding: 0 20px; }
            .nav-links { display: none; }
            .container { padding: 24px 20px 60px; }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 182
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

        // line 183
        yield "    ";
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "request", [], "any", false, false, false, 183), "attributes", [], "any", false, false, false, 183), "get", ["_route"], "method", false, false, false, 183);
        // line 184
        yield "
    <!-- ═══ TOPBAR ════════════════════════════════════════════════════ -->
    <header class=\"topbar\">
        <a href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
            <img src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
        </a>
        <nav class=\"nav-links\">
            <a href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 191, $this->source); })()) == "activites")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 192, $this->source); })()) == "forum")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"";
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 193, $this->source); })()) == "taches")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 194, $this->source); })()) == "evenements")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"";
        // line 195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 195, $this->source); })()) == "nutrition")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 196, $this->source); })()) == "meditation")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"";
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 197, $this->source); })()) == "journal")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\" class=\"nav-link ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 198, $this->source); })()) == "library")) ? ("active") : (""));
        yield "\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>
        <div class=\"topbar-right\">
            <button class=\"logout-btn\">🚪 Déconnexion</button>
            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">
                    ";
        // line 204
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "user", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "user", [], "any", false, false, false, 204), "firstName", [], "any", false, false, false, 204))), "html", null, true)) : ("E"));
        yield "
                </div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">";
        // line 207
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "user", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "user", [], "any", false, false, false, 207), "firstName", [], "any", false, false, false, 207) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "user", [], "any", false, false, false, 207), "lastName", [], "any", false, false, false, 207)), "html", null, true)) : ("Étudiant"));
        yield "</div>
                    <div class=\"pd-email\">";
        // line 208
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 208, $this->source); })()), "user", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 208, $this->source); })()), "user", [], "any", false, false, false, 208), "email", [], "any", false, false, false, 208), "html", null, true)) : ("email@exemple.com"));
        yield "</div>
                    <div class=\"pd-divider\"></div>
                    <div class=\"pd-hint\">Double-clic pour modifier</div>
                </div>
            </div>
        </div>
    </header>

    <!-- ═══ PAGE ═════════════════════════════════════════════════════ -->
    <div class=\"container\">
        <div class=\"content-card\">
            <h1 class=\"page-title\">🥗 Nutrition</h1>
            <p class=\"page-description\">Suivez votre alimentation et découvrez des conseils nutritionnels.</p>
            <span class=\"wip-badge\">🚧 En cours de développement</span>
        </div>
    </div>

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
        return "nutrition/index.html.twig";
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
        return array (  380 => 208,  376 => 207,  370 => 204,  359 => 198,  353 => 197,  347 => 196,  341 => 195,  335 => 194,  329 => 193,  323 => 192,  317 => 191,  311 => 188,  307 => 187,  302 => 184,  299 => 183,  286 => 182,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nutrition - Harmony{% endblock %}

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

        /* ── PAGE ── */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 48px 40px 80px;
        }
        .content-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 22px;
            padding: 60px 40px;
            text-align: center;
        }
        .page-title {
            font-family: var(--font-head);
            font-weight: 800;
            font-size: 48px;
            color: var(--purple);
            margin-bottom: 16px;
            letter-spacing: -.5px;
        }
        .page-description {
            font-size: 16px;
            font-weight: 300;
            color: var(--text-mid);
            line-height: 1.7;
            max-width: 500px;
            margin: 0 auto 28px;
        }
        .wip-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .8px;
            text-transform: uppercase;
            color: var(--text-muted);
            background: var(--purple-ghost);
            border: 1px solid var(--border);
            padding: 6px 16px;
            border-radius: 20px;
        }

        @media (max-width: 640px) {
            .topbar { padding: 0 20px; }
            .nav-links { display: none; }
            .container { padding: 24px 20px 60px; }
        }
    </style>
{% endblock %}

{% block body %}
    {% set current_route = app.request.attributes.get('_route') %}

    <!-- ═══ TOPBAR ════════════════════════════════════════════════════ -->
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
            <a href=\"{{ path('meditation') }}\" class=\"nav-link {{ current_route == 'meditation' ? 'active' }}\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"{{ path('journal') }}\" class=\"nav-link {{ current_route == 'journal' ? 'active' }}\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"{{ path('library') }}\" class=\"nav-link {{ current_route == 'library' ? 'active' }}\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>
        <div class=\"topbar-right\">
            <button class=\"logout-btn\">🚪 Déconnexion</button>
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
    <div class=\"container\">
        <div class=\"content-card\">
            <h1 class=\"page-title\">🥗 Nutrition</h1>
            <p class=\"page-description\">Suivez votre alimentation et découvrez des conseils nutritionnels.</p>
            <span class=\"wip-badge\">🚧 En cours de développement</span>
        </div>
    </div>

    <script>
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));
    </script>
{% endblock %}
", "nutrition/index.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/nutrition/index.html.twig");
    }
}

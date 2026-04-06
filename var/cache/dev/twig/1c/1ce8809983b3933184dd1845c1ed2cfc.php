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

/* library/index.html.twig */
class __TwigTemplate_bf9d113df34835124cc3a0885d05160a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/index.html.twig"));

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

        yield "Library - Harmony";
        
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
        yield "    <style>
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

    // line 83
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

        // line 84
        yield "    ";
        yield from $this->load("_planning_topbar.html.twig", 84)->unwrap()->yield($context);
        // line 85
        yield "
    <!-- ═══ PAGE ═════════════════════════════════════════════════════ -->
    <div class=\"container\">
        <div class=\"content-card\">
            <h1 class=\"page-title\">📖 Library</h1>
            <p class=\"page-description\">Accédez à votre bibliothèque de ressources et cours.</p>
            <span class=\"wip-badge\">🚧 En cours de développement</span>
        </div>
    </div>

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
        return "library/index.html.twig";
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
        return array (  203 => 85,  200 => 84,  187 => 83,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Library - Harmony{% endblock %}

{% block stylesheets %}
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
    {% include '_planning_topbar.html.twig' %}

    <!-- ═══ PAGE ═════════════════════════════════════════════════════ -->
    <div class=\"container\">
        <div class=\"content-card\">
            <h1 class=\"page-title\">📖 Library</h1>
            <p class=\"page-description\">Accédez à votre bibliothèque de ressources et cours.</p>
            <span class=\"wip-badge\">🚧 En cours de développement</span>
        </div>
    </div>

{% endblock %}
", "library/index.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/library/index.html.twig");
    }
}

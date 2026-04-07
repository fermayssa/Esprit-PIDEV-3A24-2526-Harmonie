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

/* meditation/admin/edit.html.twig */
class __TwigTemplate_c557abb5e7e2ad214433e1f20a58f314 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/edit.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Modifier session - Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        yield "✏️ Modifier la session";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <style>
        .back-link { display:inline-flex; align-items:center; gap:6px; color:var(--text-muted); text-decoration:none; font-size:13px; margin-bottom:20px; }
        .back-link:hover { color:var(--purple); }
        .form-card {
            background:var(--white); border:1px solid var(--border); border-radius:16px;
            padding:32px; max-width:640px;
        }
        .form-card h2 { font-family:var(--font-head); font-size:20px; font-weight:700; margin-bottom:24px; color:var(--text); }
        .form-group { margin-bottom:20px; }
        .form-group label { display:block; font-size:13px; font-weight:600; color:var(--text-mid); margin-bottom:6px; }
        .form-group input, .form-group select, .form-group textarea {
            width:100%; padding:10px 14px; border:1px solid var(--border); border-radius:10px;
            font-size:14px; font-family:var(--font-body); color:var(--text); background:var(--white);
            transition:border-color .15s;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            outline:none; border-color:var(--purple);
        }
        .form-group ul { list-style:none; padding:0; margin:4px 0 0; }
        .form-group ul li { color:#E05252; font-size:12px; font-weight:500; }
        .form-actions { display:flex; gap:12px; margin-top:24px; }
        .btn-submit {
            padding:10px 24px; border-radius:10px; border:none; background:var(--purple);
            color:white; font-size:14px; font-weight:600; cursor:pointer; font-family:var(--font-body);
        }
        .btn-submit:hover { background:var(--purple-dark); }
        .btn-cancel {
            padding:10px 24px; border-radius:10px; border:1px solid var(--border); background:var(--white);
            color:var(--text-mid); font-size:14px; font-weight:500; text-decoration:none;
            display:inline-flex; align-items:center;
        }
        .btn-cancel:hover { background:var(--purple-ghost); }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

        // line 43
        yield "    <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\" class=\"back-link\">← Retour à la session</a>

    <div class=\"form-card\">
        <h2>Modifier : ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 46, $this->source); })()), "theme", [], "any", false, false, false, 46), "html", null, true);
        yield "</h2>

        ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <div class=\"form-group\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "theme", [], "any", false, false, false, 51), 'label');
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "theme", [], "any", false, false, false, 52), 'widget');
        yield "
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "theme", [], "any", false, false, false, 53), 'errors');
        yield "
        </div>

        <div class=\"form-group\">
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "auteur", [], "any", false, false, false, 57), 'label');
        yield "
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "auteur", [], "any", false, false, false, 58), 'widget');
        yield "
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "auteur", [], "any", false, false, false, 59), 'errors');
        yield "
        </div>

        <div class=\"form-group\">
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "duree", [], "any", false, false, false, 63), 'label');
        yield "
            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "duree", [], "any", false, false, false, 64), 'widget');
        yield "
            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "duree", [], "any", false, false, false, 65), 'errors');
        yield "
        </div>

        <div class=\"form-group\">
            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "audioUrl", [], "any", false, false, false, 69), 'label');
        yield "
            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "audioUrl", [], "any", false, false, false, 70), 'widget');
        yield "
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "audioUrl", [], "any", false, false, false, 71), 'errors');
        yield "
        </div>

        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn-submit\">Enregistrer</button>
            <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
        yield "\" class=\"btn-cancel\">Annuler</a>
        </div>

        ";
        // line 79
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        yield "
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
        return "meditation/admin/edit.html.twig";
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
        return array (  267 => 79,  261 => 76,  253 => 71,  249 => 70,  245 => 69,  238 => 65,  234 => 64,  230 => 63,  223 => 59,  219 => 58,  215 => 57,  208 => 53,  204 => 52,  200 => 51,  194 => 48,  189 => 46,  182 => 43,  169 => 42,  125 => 7,  112 => 6,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Modifier session - Admin{% endblock %}
{% block page_title %}✏️ Modifier la session{% endblock %}

{% block stylesheets %}
    <style>
        .back-link { display:inline-flex; align-items:center; gap:6px; color:var(--text-muted); text-decoration:none; font-size:13px; margin-bottom:20px; }
        .back-link:hover { color:var(--purple); }
        .form-card {
            background:var(--white); border:1px solid var(--border); border-radius:16px;
            padding:32px; max-width:640px;
        }
        .form-card h2 { font-family:var(--font-head); font-size:20px; font-weight:700; margin-bottom:24px; color:var(--text); }
        .form-group { margin-bottom:20px; }
        .form-group label { display:block; font-size:13px; font-weight:600; color:var(--text-mid); margin-bottom:6px; }
        .form-group input, .form-group select, .form-group textarea {
            width:100%; padding:10px 14px; border:1px solid var(--border); border-radius:10px;
            font-size:14px; font-family:var(--font-body); color:var(--text); background:var(--white);
            transition:border-color .15s;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            outline:none; border-color:var(--purple);
        }
        .form-group ul { list-style:none; padding:0; margin:4px 0 0; }
        .form-group ul li { color:#E05252; font-size:12px; font-weight:500; }
        .form-actions { display:flex; gap:12px; margin-top:24px; }
        .btn-submit {
            padding:10px 24px; border-radius:10px; border:none; background:var(--purple);
            color:white; font-size:14px; font-weight:600; cursor:pointer; font-family:var(--font-body);
        }
        .btn-submit:hover { background:var(--purple-dark); }
        .btn-cancel {
            padding:10px 24px; border-radius:10px; border:1px solid var(--border); background:var(--white);
            color:var(--text-mid); font-size:14px; font-weight:500; text-decoration:none;
            display:inline-flex; align-items:center;
        }
        .btn-cancel:hover { background:var(--purple-ghost); }
    </style>
{% endblock %}

{% block body %}
    <a href=\"{{ path('admin_meditation_show', {id: session.id}) }}\" class=\"back-link\">← Retour à la session</a>

    <div class=\"form-card\">
        <h2>Modifier : {{ session.theme }}</h2>

        {{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}

        <div class=\"form-group\">
            {{ form_label(form.theme) }}
            {{ form_widget(form.theme) }}
            {{ form_errors(form.theme) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.auteur) }}
            {{ form_widget(form.auteur) }}
            {{ form_errors(form.auteur) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.duree) }}
            {{ form_widget(form.duree) }}
            {{ form_errors(form.duree) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.audioUrl) }}
            {{ form_widget(form.audioUrl) }}
            {{ form_errors(form.audioUrl) }}
        </div>

        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn-submit\">Enregistrer</button>
            <a href=\"{{ path('admin_meditation_show', {id: session.id}) }}\" class=\"btn-cancel\">Annuler</a>
        </div>

        {{ form_end(form) }}
    </div>
{% endblock %}
", "meditation/admin/edit.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/meditation/admin/edit.html.twig");
    }
}

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

/* meditation/admin/conseil_form.html.twig */
class __TwigTemplate_013c3b9672780de9a734ea8d2ab410ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/conseil_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/conseil_form.html.twig"));

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

        yield (((($tmp = (isset($context["editing"]) || array_key_exists("editing", $context) ? $context["editing"] : (function () { throw new RuntimeError('Variable "editing" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouveau"));
        yield " conseil - Admin";
        
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

        yield "💡 ";
        yield (((($tmp = (isset($context["editing"]) || array_key_exists("editing", $context) ? $context["editing"] : (function () { throw new RuntimeError('Variable "editing" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier le") : ("Nouveau"));
        yield " conseil";
        
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
        .form-card h2 { font-family:var(--font-head); font-size:20px; font-weight:700; margin-bottom:8px; color:var(--text); }
        .form-card .sub { font-size:13px; color:var(--text-muted); margin-bottom:24px; }
        .form-group { margin-bottom:20px; }
        .form-group label { display:block; font-size:13px; font-weight:600; color:var(--text-mid); margin-bottom:6px; }
        .form-group textarea {
            width:100%; padding:10px 14px; border:1px solid var(--border); border-radius:10px;
            font-size:14px; font-family:var(--font-body); color:var(--text); background:var(--white);
            resize:vertical; transition:border-color .15s;
        }
        .form-group textarea:focus { outline:none; border-color:var(--purple); }
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

    // line 41
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

        // line 42
        yield "    <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\" class=\"back-link\">← Retour à la session</a>

    <div class=\"form-card\">
        <h2>";
        // line 45
        yield (((($tmp = (isset($context["editing"]) || array_key_exists("editing", $context) ? $context["editing"] : (function () { throw new RuntimeError('Variable "editing" does not exist.', 45, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier le conseil") : ("Ajouter un conseil"));
        yield "</h2>
        <div class=\"sub\">Session : ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 46, $this->source); })()), "theme", [], "any", false, false, false, 46), "html", null, true);
        yield "</div>

        ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <div class=\"form-group\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "contenu", [], "any", false, false, false, 51), 'label');
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "contenu", [], "any", false, false, false, 52), 'widget');
        yield "
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "contenu", [], "any", false, false, false, 53), 'errors');
        yield "
        </div>

        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn-submit\">";
        // line 57
        yield (((($tmp = (isset($context["editing"]) || array_key_exists("editing", $context) ? $context["editing"] : (function () { throw new RuntimeError('Variable "editing" does not exist.', 57, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("💾 Enregistrer") : ("✅ Ajouter"));
        yield "</button>
            <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\" class=\"btn-cancel\">Annuler</a>
        </div>

        ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
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
        return "meditation/admin/conseil_form.html.twig";
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
        return array (  231 => 61,  225 => 58,  221 => 57,  214 => 53,  210 => 52,  206 => 51,  200 => 48,  195 => 46,  191 => 45,  184 => 42,  171 => 41,  128 => 7,  115 => 6,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}{{ editing ? 'Modifier' : 'Nouveau' }} conseil - Admin{% endblock %}
{% block page_title %}💡 {{ editing ? 'Modifier le' : 'Nouveau' }} conseil{% endblock %}

{% block stylesheets %}
    <style>
        .back-link { display:inline-flex; align-items:center; gap:6px; color:var(--text-muted); text-decoration:none; font-size:13px; margin-bottom:20px; }
        .back-link:hover { color:var(--purple); }
        .form-card {
            background:var(--white); border:1px solid var(--border); border-radius:16px;
            padding:32px; max-width:640px;
        }
        .form-card h2 { font-family:var(--font-head); font-size:20px; font-weight:700; margin-bottom:8px; color:var(--text); }
        .form-card .sub { font-size:13px; color:var(--text-muted); margin-bottom:24px; }
        .form-group { margin-bottom:20px; }
        .form-group label { display:block; font-size:13px; font-weight:600; color:var(--text-mid); margin-bottom:6px; }
        .form-group textarea {
            width:100%; padding:10px 14px; border:1px solid var(--border); border-radius:10px;
            font-size:14px; font-family:var(--font-body); color:var(--text); background:var(--white);
            resize:vertical; transition:border-color .15s;
        }
        .form-group textarea:focus { outline:none; border-color:var(--purple); }
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
        <h2>{{ editing ? 'Modifier le conseil' : 'Ajouter un conseil' }}</h2>
        <div class=\"sub\">Session : {{ session.theme }}</div>

        {{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}

        <div class=\"form-group\">
            {{ form_label(form.contenu) }}
            {{ form_widget(form.contenu) }}
            {{ form_errors(form.contenu) }}
        </div>

        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn-submit\">{{ editing ? '💾 Enregistrer' : '✅ Ajouter' }}</button>
            <a href=\"{{ path('admin_meditation_show', {id: session.id}) }}\" class=\"btn-cancel\">Annuler</a>
        </div>

        {{ form_end(form) }}
    </div>
{% endblock %}
", "meditation/admin/conseil_form.html.twig", "/Users/rayen/Downloads/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication-3/templates/meditation/admin/conseil_form.html.twig");
    }
}

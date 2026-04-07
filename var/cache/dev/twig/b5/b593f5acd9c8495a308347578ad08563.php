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

/* back/dashboard.html.twig */
class __TwigTemplate_fb5c181b41c0be6b93cb841ab6970dfa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/dashboard.html.twig"));

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

        yield "Dashboard — Back Harmony";
        
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

        yield "Accueil Back — Forum";
        
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
.kpi-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:16px; margin-bottom:28px; }
.kpi-card {
    background:white; border:1px solid rgba(106,90,205,.12); border-radius:16px;
    padding:22px; display:flex; align-items:center; gap:16px;
    text-decoration:none; color:inherit;
    transition:border-color .2s, box-shadow .2s, transform .2s;
}
.kpi-card:hover { border-color:#8B7FD4; box-shadow:0 8px 28px rgba(106,90,205,.12); transform:translateY(-2px); }
.kpi-icon { width:52px; height:52px; border-radius:14px; display:grid; place-items:center; font-size:26px; flex-shrink:0; }
.kpi-icon.purple { background:#EDE8FA; }
.kpi-icon.green  { background:#D1FAE5; }
.kpi-icon.amber  { background:#FEF3C7; }
.kpi-val { font-family:'Syne',sans-serif; font-size:32px; font-weight:800; color:#1C1733; line-height:1; }
.kpi-lbl { font-size:12px; color:#9590B8; margin-top:4px; }

.quick-grid {
    display:grid; grid-template-columns:repeat(3,1fr);
    border:1px solid rgba(106,90,205,.12); border-radius:16px; overflow:hidden;
    background:rgba(106,90,205,.08); gap:1px;
}
.quick-item {
    display:flex; align-items:center; gap:16px; padding:22px 24px;
    background:white; text-decoration:none; color:inherit;
    transition:background .15s;
}
.quick-item:hover { background:#F7F5FD; }
.quick-item-icon { font-size:30px; flex-shrink:0; }
.quick-item-label { font-family:'Syne',sans-serif; font-size:14px; font-weight:700; color:#1C1733; }
.quick-item-desc  { font-size:12px; color:#9590B8; margin-top:3px; }
.quick-item-arrow { margin-left:auto; font-size:18px; color:#8B7FD4; }

.section-title {
    font-family:'Syne',sans-serif; font-size:15px; font-weight:700; color:#1C1733;
    margin:28px 0 14px; display:flex; align-items:center; gap:8px;
}
.section-title::before { content:''; width:4px; height:16px; background:#6A5ACD; border-radius:4px; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "
<div style=\"margin-bottom:28px\">
    <h1 style=\"font-family:'Syne',sans-serif;font-size:22px;font-weight:800;color:#1C1733;margin-bottom:4px\">
        🏠 Tableau de bord Forum
    </h1>
    <p style=\"font-size:13px;color:#9590B8;\">Vue d'ensemble du forum de la communauté</p>
</div>

";
        // line 56
        yield "<div class=\"kpi-grid\">
    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_categories");
        yield "\" class=\"kpi-card\">
        <div class=\"kpi-icon purple\">🗂️</div>
        <div>
            <div class=\"kpi-val\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb_categories"]) || array_key_exists("nb_categories", $context) ? $context["nb_categories"] : (function () { throw new RuntimeError('Variable "nb_categories" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"kpi-lbl\">Catégories Forum</div>
        </div>
    </a>
    <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_posts");
        yield "\" class=\"kpi-card\">
        <div class=\"kpi-icon green\">📝</div>
        <div>
            <div class=\"kpi-val\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb_posts"]) || array_key_exists("nb_posts", $context) ? $context["nb_posts"] : (function () { throw new RuntimeError('Variable "nb_posts" does not exist.', 67, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"kpi-lbl\">Posts publiés</div>
        </div>
    </a>
    <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commentaires");
        yield "\" class=\"kpi-card\">
        <div class=\"kpi-icon amber\">💬</div>
        <div>
            <div class=\"kpi-val\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb_commentaires"]) || array_key_exists("nb_commentaires", $context) ? $context["nb_commentaires"] : (function () { throw new RuntimeError('Variable "nb_commentaires" does not exist.', 74, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"kpi-lbl\">Commentaires</div>
        </div>
    </a>
</div>

";
        // line 81
        yield "<div class=\"section-title\">🚀 Accès rapides</div>
<div class=\"quick-grid\">
    ";
        // line 83
        $context["quick"] = [["icon" => "🗂️", "label" => "Gérer les catégories", "route" => "back_categories", "desc" => "Créer, modifier, supprimer"], ["icon" => "📝", "label" => "Gérer les posts", "route" => "back_posts", "desc" => "Modérer les publications"], ["icon" => "💬", "label" => "Gérer les commentaires", "route" => "back_commentaires", "desc" => "Modérer les échanges"]];
        // line 88
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quick"]) || array_key_exists("quick", $context) ? $context["quick"] : (function () { throw new RuntimeError('Variable "quick" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 89
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 89));
            yield "\" class=\"quick-item\">
        <span class=\"quick-item-icon\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 90), "html", null, true);
            yield "</span>
        <div>
            <div class=\"quick-item-label\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 92), "html", null, true);
            yield "</div>
            <div class=\"quick-item-desc\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "desc", [], "any", false, false, false, 93), "html", null, true);
            yield "</div>
        </div>
        <span class=\"quick-item-arrow\">→</span>
    </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "</div>

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
        return "back/dashboard.html.twig";
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
        return array (  277 => 98,  266 => 93,  262 => 92,  257 => 90,  252 => 89,  247 => 88,  245 => 83,  241 => 81,  232 => 74,  226 => 71,  219 => 67,  213 => 64,  206 => 60,  200 => 57,  197 => 56,  187 => 47,  174 => 46,  125 => 6,  112 => 5,  89 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %}Dashboard — Back Harmony{% endblock %}
{% block page_title %}Accueil Back — Forum{% endblock %}

{% block stylesheets %}
<style>
.kpi-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:16px; margin-bottom:28px; }
.kpi-card {
    background:white; border:1px solid rgba(106,90,205,.12); border-radius:16px;
    padding:22px; display:flex; align-items:center; gap:16px;
    text-decoration:none; color:inherit;
    transition:border-color .2s, box-shadow .2s, transform .2s;
}
.kpi-card:hover { border-color:#8B7FD4; box-shadow:0 8px 28px rgba(106,90,205,.12); transform:translateY(-2px); }
.kpi-icon { width:52px; height:52px; border-radius:14px; display:grid; place-items:center; font-size:26px; flex-shrink:0; }
.kpi-icon.purple { background:#EDE8FA; }
.kpi-icon.green  { background:#D1FAE5; }
.kpi-icon.amber  { background:#FEF3C7; }
.kpi-val { font-family:'Syne',sans-serif; font-size:32px; font-weight:800; color:#1C1733; line-height:1; }
.kpi-lbl { font-size:12px; color:#9590B8; margin-top:4px; }

.quick-grid {
    display:grid; grid-template-columns:repeat(3,1fr);
    border:1px solid rgba(106,90,205,.12); border-radius:16px; overflow:hidden;
    background:rgba(106,90,205,.08); gap:1px;
}
.quick-item {
    display:flex; align-items:center; gap:16px; padding:22px 24px;
    background:white; text-decoration:none; color:inherit;
    transition:background .15s;
}
.quick-item:hover { background:#F7F5FD; }
.quick-item-icon { font-size:30px; flex-shrink:0; }
.quick-item-label { font-family:'Syne',sans-serif; font-size:14px; font-weight:700; color:#1C1733; }
.quick-item-desc  { font-size:12px; color:#9590B8; margin-top:3px; }
.quick-item-arrow { margin-left:auto; font-size:18px; color:#8B7FD4; }

.section-title {
    font-family:'Syne',sans-serif; font-size:15px; font-weight:700; color:#1C1733;
    margin:28px 0 14px; display:flex; align-items:center; gap:8px;
}
.section-title::before { content:''; width:4px; height:16px; background:#6A5ACD; border-radius:4px; }
</style>
{% endblock %}

{% block body %}

<div style=\"margin-bottom:28px\">
    <h1 style=\"font-family:'Syne',sans-serif;font-size:22px;font-weight:800;color:#1C1733;margin-bottom:4px\">
        🏠 Tableau de bord Forum
    </h1>
    <p style=\"font-size:13px;color:#9590B8;\">Vue d'ensemble du forum de la communauté</p>
</div>

{# KPI CARDS #}
<div class=\"kpi-grid\">
    <a href=\"{{ path('back_categories') }}\" class=\"kpi-card\">
        <div class=\"kpi-icon purple\">🗂️</div>
        <div>
            <div class=\"kpi-val\">{{ nb_categories }}</div>
            <div class=\"kpi-lbl\">Catégories Forum</div>
        </div>
    </a>
    <a href=\"{{ path('back_posts') }}\" class=\"kpi-card\">
        <div class=\"kpi-icon green\">📝</div>
        <div>
            <div class=\"kpi-val\">{{ nb_posts }}</div>
            <div class=\"kpi-lbl\">Posts publiés</div>
        </div>
    </a>
    <a href=\"{{ path('back_commentaires') }}\" class=\"kpi-card\">
        <div class=\"kpi-icon amber\">💬</div>
        <div>
            <div class=\"kpi-val\">{{ nb_commentaires }}</div>
            <div class=\"kpi-lbl\">Commentaires</div>
        </div>
    </a>
</div>

{# ACCÈS RAPIDES #}
<div class=\"section-title\">🚀 Accès rapides</div>
<div class=\"quick-grid\">
    {% set quick = [
        {icon:'🗂️', label:'Gérer les catégories', route:'back_categories', desc:'Créer, modifier, supprimer'},
        {icon:'📝', label:'Gérer les posts',       route:'back_posts',      desc:'Modérer les publications'},
        {icon:'💬', label:'Gérer les commentaires',route:'back_commentaires',desc:'Modérer les échanges'},
    ] %}
    {% for item in quick %}
    <a href=\"{{ path(item.route) }}\" class=\"quick-item\">
        <span class=\"quick-item-icon\">{{ item.icon }}</span>
        <div>
            <div class=\"quick-item-label\">{{ item.label }}</div>
            <div class=\"quick-item-desc\">{{ item.desc }}</div>
        </div>
        <span class=\"quick-item-arrow\">→</span>
    </a>
    {% endfor %}
</div>

{% endblock %}", "back/dashboard.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/back/dashboard.html.twig");
    }
}

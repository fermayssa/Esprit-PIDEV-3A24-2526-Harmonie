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

/* admin/evenement/show.html.twig */
class __TwigTemplate_c8ef664129fc36a0d4b8d0ad62c19d6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evenement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evenement/show.html.twig"));

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

        yield "Événement #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " — Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"admin-topbar\">
    <h1 class=\"admin-page-title\">";
        // line 7
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "titre", [], "any", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true)) : ("Événement"));
        yield "</h1>
    <div class=\"admin-actions\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index");
        yield "\" class=\"admin-btn admin-btn-ghost\">Liste</a>
        <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"admin-btn admin-btn-primary\">Modifier</a>
    </div>
</div>
<div class=\"admin-card admin-table-wrap\">
    <table class=\"admin-table\">
        <tbody>
            <tr><th>ID</th><td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "</td></tr>
            <tr><th>Titre</th><td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), "html", null, true);
        yield "</td></tr>
            <tr><th>Type</th><td>";
        // line 18
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "eventType", [], "any", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "eventType", [], "any", false, false, false, 18)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "eventType", [], "any", false, false, false, 18), "html", null, true)) : ("—"));
        yield "</td></tr>
            <tr><th>Mode lieu</th><td>";
        // line 19
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "lieuType", [], "any", true, true, false, 19) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 19, $this->source); })()), "lieuType", [], "any", false, false, false, 19)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 19, $this->source); })()), "lieuType", [], "any", false, false, false, 19), "html", null, true)) : ("—"));
        yield "</td></tr>
            <tr><th>Adresse / détail</th><td>";
        // line 20
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "lieuAdresse", [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 20)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 20), "html", null, true)) : ("—"));
        yield "</td></tr>
            <tr><th>Salle liée</th><td>";
        // line 21
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 21, $this->source); })()), "salle", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 21, $this->source); })()), "salle", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true)) : ("—"));
        yield "</td></tr>
            <tr><th>Lieu (synthèse)</th><td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 22, $this->source); })()), "lieu", [], "any", false, false, false, 22), "html", null, true);
        yield "</td></tr>
            <tr><th>Début</th><td>";
        // line 23
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 23, $this->source); })()), "dateDebut", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 23, $this->source); })()), "dateDebut", [], "any", false, false, false, 23), "d/m/Y H:i"), "html", null, true)) : ("—"));
        yield "</td></tr>
            <tr><th>Fin</th><td>";
        // line 24
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 24, $this->source); })()), "dateFin", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 24, $this->source); })()), "dateFin", [], "any", false, false, false, 24), "d/m/Y H:i"), "html", null, true)) : ("—"));
        yield "</td></tr>
            <tr><th>Propriétaire</th><td>";
        // line 25
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 25, $this->source); })()), "proprietaire", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 25, $this->source); })()), "proprietaire", [], "any", false, false, false, 25), "userEmail", [], "any", false, false, false, 25), "html", null, true)) : ("—"));
        yield "</td></tr>
            <tr><th>Approuvé</th><td>";
        // line 26
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 26, $this->source); })()), "approuve", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</td></tr>
            <tr><th>Statut demande salle</th><td>";
        // line 27
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "statutDemandeSalle", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 27, $this->source); })()), "statutDemandeSalle", [], "any", false, false, false, 27)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 27, $this->source); })()), "statutDemandeSalle", [], "any", false, false, false, 27), "html", null, true)) : ("—"));
        yield "</td></tr>
        </tbody>
    </table>
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
        return "admin/evenement/show.html.twig";
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
        return array (  167 => 27,  163 => 26,  159 => 25,  155 => 24,  151 => 23,  147 => 22,  143 => 21,  139 => 20,  135 => 19,  131 => 18,  127 => 17,  123 => 16,  114 => 10,  110 => 9,  105 => 7,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Événement #{{ evenement.id }} — Admin{% endblock %}

{% block body %}
<div class=\"admin-topbar\">
    <h1 class=\"admin-page-title\">{{ evenement.titre ?? 'Événement' }}</h1>
    <div class=\"admin-actions\">
        <a href=\"{{ path('admin_evenement_index') }}\" class=\"admin-btn admin-btn-ghost\">Liste</a>
        <a href=\"{{ path('admin_evenement_edit', {id: evenement.id}) }}\" class=\"admin-btn admin-btn-primary\">Modifier</a>
    </div>
</div>
<div class=\"admin-card admin-table-wrap\">
    <table class=\"admin-table\">
        <tbody>
            <tr><th>ID</th><td>{{ evenement.id }}</td></tr>
            <tr><th>Titre</th><td>{{ evenement.titre }}</td></tr>
            <tr><th>Type</th><td>{{ evenement.eventType ?? '—' }}</td></tr>
            <tr><th>Mode lieu</th><td>{{ evenement.lieuType ?? '—' }}</td></tr>
            <tr><th>Adresse / détail</th><td>{{ evenement.lieuAdresse ?? '—' }}</td></tr>
            <tr><th>Salle liée</th><td>{{ evenement.salle ? evenement.salle.nom : '—' }}</td></tr>
            <tr><th>Lieu (synthèse)</th><td>{{ evenement.lieu }}</td></tr>
            <tr><th>Début</th><td>{{ evenement.dateDebut ? evenement.dateDebut|date('d/m/Y H:i') : '—' }}</td></tr>
            <tr><th>Fin</th><td>{{ evenement.dateFin ? evenement.dateFin|date('d/m/Y H:i') : '—' }}</td></tr>
            <tr><th>Propriétaire</th><td>{{ evenement.proprietaire ? (evenement.proprietaire.userEmail) : '—' }}</td></tr>
            <tr><th>Approuvé</th><td>{{ evenement.approuve ? 'Oui' : 'Non' }}</td></tr>
            <tr><th>Statut demande salle</th><td>{{ evenement.statutDemandeSalle ?? '—' }}</td></tr>
        </tbody>
    </table>
</div>
{% endblock %}
", "admin/evenement/show.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/admin/evenement/show.html.twig");
    }
}

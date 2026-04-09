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

/* admin/evenement/index.html.twig */
class __TwigTemplate_598815fb2da2427c6f4483a245979ae8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evenement/index.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
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

        yield "Événements — Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
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

        // line 32
        yield "<div class=\"admin-topbar\">
    <h1 class=\"admin-page-title\">Événements</h1>
    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_new");
        yield "\" class=\"admin-btn admin-btn-primary\">Ajouter un événement</a>
</div>

<div class=\"admin-toolbar\">
    <form class=\"admin-toolbar__search\" method=\"get\" action=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index");
        yield "\" role=\"search\">
        ";
        // line 39
        if ((($tmp = (isset($context["typeFiltre"]) || array_key_exists("typeFiltre", $context) ? $context["typeFiltre"] : (function () { throw new RuntimeError('Variable "typeFiltre" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<input type=\"hidden\" name=\"type\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeFiltre"]) || array_key_exists("typeFiltre", $context) ? $context["typeFiltre"] : (function () { throw new RuntimeError('Variable "typeFiltre" does not exist.', 39, $this->source); })()), "html", null, true);
            yield "\">";
        }
        // line 40
        yield "        ";
        if ((($tmp = (isset($context["proprietaireId"]) || array_key_exists("proprietaireId", $context) ? $context["proprietaireId"] : (function () { throw new RuntimeError('Variable "proprietaireId" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<input type=\"hidden\" name=\"user\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["proprietaireId"]) || array_key_exists("proprietaireId", $context) ? $context["proprietaireId"] : (function () { throw new RuntimeError('Variable "proprietaireId" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\">";
        }
        // line 41
        yield "        ";
        if ((($tmp = (isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<input type=\"hidden\" name=\"date_debut\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "\">";
        }
        // line 42
        yield "        ";
        if ((($tmp = (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 42, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<input type=\"hidden\" name=\"date_fin\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 42, $this->source); })()), "html", null, true);
            yield "\">";
        }
        // line 43
        yield "        <label class=\"visually-hidden\" for=\"admin-ev-q\">Recherche</label>
        <input id=\"admin-ev-q\" type=\"search\" name=\"q\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Recherche titre, lieu…\">
    </form>
    ";
        // line 46
        $context["ev_q_params"] = ["q" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 46, $this->source); })()), "page" => 1];
        // line 47
        yield "    ";
        if ((($tmp = (isset($context["proprietaireId"]) || array_key_exists("proprietaireId", $context) ? $context["proprietaireId"] : (function () { throw new RuntimeError('Variable "proprietaireId" does not exist.', 47, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["ev_q_params"] = Twig\Extension\CoreExtension::merge((isset($context["ev_q_params"]) || array_key_exists("ev_q_params", $context) ? $context["ev_q_params"] : (function () { throw new RuntimeError('Variable "ev_q_params" does not exist.', 47, $this->source); })()), ["user" => (isset($context["proprietaireId"]) || array_key_exists("proprietaireId", $context) ? $context["proprietaireId"] : (function () { throw new RuntimeError('Variable "proprietaireId" does not exist.', 47, $this->source); })())]);
        }
        // line 48
        yield "    ";
        if ((($tmp = (isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["ev_q_params"] = Twig\Extension\CoreExtension::merge((isset($context["ev_q_params"]) || array_key_exists("ev_q_params", $context) ? $context["ev_q_params"] : (function () { throw new RuntimeError('Variable "ev_q_params" does not exist.', 48, $this->source); })()), ["date_debut" => (isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 48, $this->source); })())]);
        }
        // line 49
        yield "    ";
        if ((($tmp = (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["ev_q_params"] = Twig\Extension\CoreExtension::merge((isset($context["ev_q_params"]) || array_key_exists("ev_q_params", $context) ? $context["ev_q_params"] : (function () { throw new RuntimeError('Variable "ev_q_params" does not exist.', 49, $this->source); })()), ["date_fin" => (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 49, $this->source); })())]);
        }
        // line 50
        yield "    <div class=\"admin-pills\">
        <a class=\"admin-pill ";
        // line 51
        yield ((((isset($context["typeFiltre"]) || array_key_exists("typeFiltre", $context) ? $context["typeFiltre"] : (function () { throw new RuntimeError('Variable "typeFiltre" does not exist.', 51, $this->source); })()) == "")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index", (isset($context["ev_q_params"]) || array_key_exists("ev_q_params", $context) ? $context["ev_q_params"] : (function () { throw new RuntimeError('Variable "ev_q_params" does not exist.', 51, $this->source); })())), "html", null, true);
        yield "\">Tous types</a>
        <a class=\"admin-pill ";
        // line 52
        yield ((((isset($context["typeFiltre"]) || array_key_exists("typeFiltre", $context) ? $context["typeFiltre"] : (function () { throw new RuntimeError('Variable "typeFiltre" does not exist.', 52, $this->source); })()) == "cours")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index", Twig\Extension\CoreExtension::merge((isset($context["ev_q_params"]) || array_key_exists("ev_q_params", $context) ? $context["ev_q_params"] : (function () { throw new RuntimeError('Variable "ev_q_params" does not exist.', 52, $this->source); })()), ["type" => "cours"])), "html", null, true);
        yield "\">Cours</a>
        <a class=\"admin-pill ";
        // line 53
        yield ((((isset($context["typeFiltre"]) || array_key_exists("typeFiltre", $context) ? $context["typeFiltre"] : (function () { throw new RuntimeError('Variable "typeFiltre" does not exist.', 53, $this->source); })()) == "reunion")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index", Twig\Extension\CoreExtension::merge((isset($context["ev_q_params"]) || array_key_exists("ev_q_params", $context) ? $context["ev_q_params"] : (function () { throw new RuntimeError('Variable "ev_q_params" does not exist.', 53, $this->source); })()), ["type" => "reunion"])), "html", null, true);
        yield "\">Réunion</a>
        <a class=\"admin-pill ";
        // line 54
        yield ((((isset($context["typeFiltre"]) || array_key_exists("typeFiltre", $context) ? $context["typeFiltre"] : (function () { throw new RuntimeError('Variable "typeFiltre" does not exist.', 54, $this->source); })()) == "loisir")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index", Twig\Extension\CoreExtension::merge((isset($context["ev_q_params"]) || array_key_exists("ev_q_params", $context) ? $context["ev_q_params"] : (function () { throw new RuntimeError('Variable "ev_q_params" does not exist.', 54, $this->source); })()), ["type" => "loisir"])), "html", null, true);
        yield "\">Loisir</a>
        <a class=\"admin-pill ";
        // line 55
        yield ((((isset($context["typeFiltre"]) || array_key_exists("typeFiltre", $context) ? $context["typeFiltre"] : (function () { throw new RuntimeError('Variable "typeFiltre" does not exist.', 55, $this->source); })()) == "autre")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index", Twig\Extension\CoreExtension::merge((isset($context["ev_q_params"]) || array_key_exists("ev_q_params", $context) ? $context["ev_q_params"] : (function () { throw new RuntimeError('Variable "ev_q_params" does not exist.', 55, $this->source); })()), ["type" => "autre"])), "html", null, true);
        yield "\">Autre</a>
    </div>
</div>

<form class=\"admin-card admin-toolbar\" method=\"get\" action=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index");
        yield "\" style=\"margin-bottom:20px;\">
    <input type=\"hidden\" name=\"q\" value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 61
        if ((($tmp = (isset($context["typeFiltre"]) || array_key_exists("typeFiltre", $context) ? $context["typeFiltre"] : (function () { throw new RuntimeError('Variable "typeFiltre" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<input type=\"hidden\" name=\"type\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeFiltre"]) || array_key_exists("typeFiltre", $context) ? $context["typeFiltre"] : (function () { throw new RuntimeError('Variable "typeFiltre" does not exist.', 61, $this->source); })()), "html", null, true);
            yield "\">";
        }
        // line 62
        yield "    <label>Utilisateur
        <select class=\"admin-input\" name=\"user\">
            <option value=\"\">Tous</option>
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 66
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userId", [], "any", false, false, false, 66), "html", null, true);
            yield "\" ";
            yield ((((isset($context["proprietaireId"]) || array_key_exists("proprietaireId", $context) ? $context["proprietaireId"] : (function () { throw new RuntimeError('Variable "proprietaireId" does not exist.', 66, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userId", [], "any", false, false, false, 66))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userPrenom", [], "any", false, false, false, 66), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userNom", [], "any", false, false, false, 66), "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "        </select>
    </label>
    <label>Date début ≥
        <input class=\"admin-input\" type=\"date\" name=\"date_debut\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 71, $this->source); })()), "html", null, true);
        yield "\">
    </label>
    <label>Date début ≤
        <input class=\"admin-input\" type=\"date\" name=\"date_fin\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 74, $this->source); })()), "html", null, true);
        yield "\">
    </label>
    <button type=\"submit\" class=\"admin-btn admin-btn-primary\">Appliquer</button>
</form>

<div class=\"admin-cards-grid\">
    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 80, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 81
            yield "        ";
            $context["et"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "eventType", [], "any", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["e"], "eventType", [], "any", false, false, false, 81)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["e"], "eventType", [], "any", false, false, false, 81)) : ("")));
            // line 82
            yield "        <article class=\"admin-module-card admin-module-card--accent-ev\">
            <div class=\"admin-module-card__typebar ";
            // line 83
            if (((isset($context["et"]) || array_key_exists("et", $context) ? $context["et"] : (function () { throw new RuntimeError('Variable "et" does not exist.', 83, $this->source); })()) == "cours")) {
                yield "admin-module-card__typebar--cours";
            } elseif (((isset($context["et"]) || array_key_exists("et", $context) ? $context["et"] : (function () { throw new RuntimeError('Variable "et" does not exist.', 83, $this->source); })()) == "reunion")) {
                yield "admin-module-card__typebar--reunion";
            } elseif (((isset($context["et"]) || array_key_exists("et", $context) ? $context["et"] : (function () { throw new RuntimeError('Variable "et" does not exist.', 83, $this->source); })()) == "loisir")) {
                yield "admin-module-card__typebar--loisir";
            } else {
                yield "admin-module-card__typebar--autre";
            }
            yield "\">
                <span class=\"admin-module-card__typebar-main\"><span aria-hidden=\"true\">";
            // line 84
            yield $this->getTemplateForMacro("macro_type_icon", $context, 84, $this->getSourceContext())->macro_type_icon(...[(isset($context["et"]) || array_key_exists("et", $context) ? $context["et"] : (function () { throw new RuntimeError('Variable "et" does not exist.', 84, $this->source); })())]);
            yield "</span> ";
            yield $this->getTemplateForMacro("macro_type_label", $context, 84, $this->getSourceContext())->macro_type_label(...[CoreExtension::getAttribute($this->env, $this->source, $context["e"], "eventType", [], "any", false, false, false, 84)]);
            yield "</span>
                <span style=\"margin-left:auto;\">";
            // line 85
            yield $this->getTemplateForMacro("macro_event_badge_time", $context, 85, $this->getSourceContext())->macro_event_badge_time(...[$context["e"]]);
            yield "</span>
            </div>
            <h2 class=\"admin-module-card__title\">";
            // line 87
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "titre", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 87)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 87), "html", null, true)) : ("Sans titre"));
            yield "</h2>
            <div class=\"admin-module-card__body\">
                <p class=\"admin-module-card__meta\">📅 ";
            // line 89
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "dateDebut", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "dateDebut", [], "any", false, false, false, 89), "d/m/Y H:i"), "html", null, true);
            } else {
                yield "—";
            }
            // line 90
            yield "                    → ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "dateFin", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "dateFin", [], "any", false, false, false, 90), "d/m/Y H:i"), "html", null, true);
            } else {
                yield "—";
            }
            yield "</p>
                <p class=\"admin-module-card__meta\">👤 ";
            // line 91
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "proprietaire", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "proprietaire", [], "any", false, false, false, 91), "userPrenom", [], "any", false, false, false, 91) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "proprietaire", [], "any", false, false, false, 91), "userNom", [], "any", false, false, false, 91)), "html", null, true)) : ("—"));
            yield "</p>
                <p class=\"admin-module-card__meta\">📍
                    ";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "lieuType", [], "any", false, false, false, 93) == "en_ligne")) {
                yield "En ligne
                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 94
$context["e"], "lieuAdresse", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "lieuAdresse", [], "any", false, false, false, 94), "html", null, true);
                yield "
                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 95
$context["e"], "salle", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Salle : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "salle", [], "any", false, false, false, 95), "nom", [], "any", false, false, false, 95), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "salle", [], "any", false, false, false, 95), "capacite", [], "any", false, false, false, 95), "html", null, true);
                yield " pers.)
                    ";
            } else {
                // line 96
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "lieu", [], "any", true, true, false, 96) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["e"], "lieu", [], "any", false, false, false, 96)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "lieu", [], "any", false, false, false, 96), "html", null, true)) : ("—"));
            }
            // line 97
            yield "                </p>
                <p class=\"admin-module-card__meta\">✅ ";
            // line 98
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "approuve", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Approuvé") : ("Non approuvé"));
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "statutDemandeSalle", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " · Demande salle : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "statutDemandeSalle", [], "any", false, false, false, 98), "html", null, true);
            }
            yield "</p>
            </div>
            <div class=\"admin-module-card__footer\">
                <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"admin-btn admin-btn-ghost\">Voir</a>
                <a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\" class=\"admin-btn admin-btn-ghost\">Modifier</a>
                <form class=\"inline-form\" method=\"post\" action=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cet événement ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("admin_delete_evenement" . CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 104))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"admin-btn admin-btn-danger\">Supprimer</button>
                </form>
            </div>
        </article>
    ";
            $context['_iterated'] = true;
        }
        // line 109
        if (!$context['_iterated']) {
            // line 110
            yield "        <p class=\"admin-empty-hint\" style=\"grid-column: 1 / -1;\">Aucun événement.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "</div>

";
        // line 114
        if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 114, $this->source); })()) > 1)) {
            // line 115
            yield "    <nav class=\"admin-pagination-round\" aria-label=\"Pagination\">
        ";
            // line 116
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 116, $this->source); })()) > 1)) {
                // line 117
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "request", [], "any", false, false, false, 117), "query", [], "any", false, false, false, 117), "all", [], "any", false, false, false, 117), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 117, $this->source); })()) - 1)])), "html", null, true);
                yield "\">‹</a>
        ";
            }
            // line 119
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 119, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 120
                yield "            ";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 120, $this->source); })()))) {
                    // line 121
                    yield "                <span class=\"is-current\" aria-current=\"page\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</span>
            ";
                } else {
                    // line 123
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "request", [], "any", false, false, false, 123), "query", [], "any", false, false, false, 123), "all", [], "any", false, false, false, 123), ["page" => $context["p"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</a>
            ";
                }
                // line 125
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "        ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 126, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 126, $this->source); })()))) {
                // line 127
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "query", [], "any", false, false, false, 127), "all", [], "any", false, false, false, 127), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 127, $this->source); })()) + 1)])), "html", null, true);
                yield "\">›</a>
        ";
            }
            // line 129
            yield "    </nav>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    public function macro_type_label($v = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "v" => $v,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "type_label"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "type_label"));

            // line 4
            yield "    ";
            $context["map"] = ["cours" => "Cours", "reunion" => "Réunion", "loisir" => "Loisir", "autre" => "Autre"];
            // line 5
            yield (((($tmp = (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["map"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 5, $this->source); })()), [], "array", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new RuntimeError('Variable "map" does not exist.', 5, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 5, $this->source); })()), [], "array", false, false, false, 5), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 5, $this->source); })()))) : ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 5, $this->source); })()))), "html", null, true)) : ("—"));
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function macro_type_icon($v = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "v" => $v,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "type_icon"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "type_icon"));

            // line 9
            yield "    ";
            if (((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 9, $this->source); })()) == "cours")) {
                yield "📘";
            } elseif (((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 9, $this->source); })()) == "reunion")) {
                yield "👥";
            } elseif (((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 9, $this->source); })()) == "loisir")) {
                yield "🎮";
            } else {
                yield "📌";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function macro_event_badge_time($e = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "e" => $e,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "event_badge_time"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "event_badge_time"));

            // line 13
            yield "    ";
            $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
            // line 14
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 14, $this->source); })()), "dateDebut", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "        ";
                $context["d0"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 15, $this->source); })()), "dateDebut", [], "any", false, false, false, 15), "Y-m-d");
                // line 16
                yield "        ";
                $context["d1"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 16, $this->source); })()), "dateFin", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 16, $this->source); })()), "dateFin", [], "any", false, false, false, 16), "Y-m-d")) : ((isset($context["d0"]) || array_key_exists("d0", $context) ? $context["d0"] : (function () { throw new RuntimeError('Variable "d0" does not exist.', 16, $this->source); })())));
                // line 17
                yield "        ";
                if ((((isset($context["d0"]) || array_key_exists("d0", $context) ? $context["d0"] : (function () { throw new RuntimeError('Variable "d0" does not exist.', 17, $this->source); })()) <= (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 17, $this->source); })())) && ((isset($context["d1"]) || array_key_exists("d1", $context) ? $context["d1"] : (function () { throw new RuntimeError('Variable "d1" does not exist.', 17, $this->source); })()) >= (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 17, $this->source); })())))) {
                    // line 18
                    yield "            <span class=\"admin-badge admin-badge--ok\">Aujourd’hui</span>
        ";
                } elseif ((                // line 19
(isset($context["d0"]) || array_key_exists("d0", $context) ? $context["d0"] : (function () { throw new RuntimeError('Variable "d0" does not exist.', 19, $this->source); })()) > (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 19, $this->source); })()))) {
                    // line 20
                    yield "            <span class=\"admin-badge admin-badge--wait\">À venir</span>
        ";
                } else {
                    // line 22
                    yield "            <span class=\"admin-badge admin-badge--no\">Passé</span>
        ";
                }
                // line 24
                yield "    ";
            } else {
                // line 25
                yield "        <span class=\"admin-badge\">—</span>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/evenement/index.html.twig";
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
        return array (  573 => 25,  570 => 24,  566 => 22,  562 => 20,  560 => 19,  557 => 18,  554 => 17,  551 => 16,  548 => 15,  545 => 14,  542 => 13,  524 => 12,  503 => 9,  485 => 8,  473 => 5,  470 => 4,  452 => 3,  439 => 129,  433 => 127,  430 => 126,  424 => 125,  416 => 123,  410 => 121,  407 => 120,  402 => 119,  396 => 117,  394 => 116,  391 => 115,  389 => 114,  385 => 112,  378 => 110,  376 => 109,  366 => 104,  362 => 103,  358 => 102,  354 => 101,  344 => 98,  341 => 97,  338 => 96,  329 => 95,  324 => 94,  320 => 93,  315 => 91,  306 => 90,  300 => 89,  295 => 87,  290 => 85,  284 => 84,  272 => 83,  269 => 82,  266 => 81,  261 => 80,  252 => 74,  246 => 71,  241 => 68,  226 => 66,  222 => 65,  217 => 62,  211 => 61,  207 => 60,  203 => 59,  194 => 55,  188 => 54,  182 => 53,  176 => 52,  170 => 51,  167 => 50,  162 => 49,  157 => 48,  152 => 47,  150 => 46,  145 => 44,  142 => 43,  135 => 42,  128 => 41,  121 => 40,  115 => 39,  111 => 38,  104 => 34,  100 => 32,  87 => 31,  64 => 29,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% macro type_label(v) %}
    {% set map = { cours: 'Cours', reunion: 'Réunion', loisir: 'Loisir', autre: 'Autre' } %}
    {{- v ? map[v]|default(v) : '—' -}}
{% endmacro %}

{% macro type_icon(v) %}
    {% if v == 'cours' %}📘{% elseif v == 'reunion' %}👥{% elseif v == 'loisir' %}🎮{% else %}📌{% endif %}
{% endmacro %}

{% macro event_badge_time(e) %}
    {% set today = 'now'|date('Y-m-d') %}
    {% if e.dateDebut %}
        {% set d0 = e.dateDebut|date('Y-m-d') %}
        {% set d1 = e.dateFin ? e.dateFin|date('Y-m-d') : d0 %}
        {% if d0 <= today and d1 >= today %}
            <span class=\"admin-badge admin-badge--ok\">Aujourd’hui</span>
        {% elseif d0 > today %}
            <span class=\"admin-badge admin-badge--wait\">À venir</span>
        {% else %}
            <span class=\"admin-badge admin-badge--no\">Passé</span>
        {% endif %}
    {% else %}
        <span class=\"admin-badge\">—</span>
    {% endif %}
{% endmacro %}

{% block title %}Événements — Admin{% endblock %}

{% block body %}
<div class=\"admin-topbar\">
    <h1 class=\"admin-page-title\">Événements</h1>
    <a href=\"{{ path('admin_evenement_new') }}\" class=\"admin-btn admin-btn-primary\">Ajouter un événement</a>
</div>

<div class=\"admin-toolbar\">
    <form class=\"admin-toolbar__search\" method=\"get\" action=\"{{ path('admin_evenement_index') }}\" role=\"search\">
        {% if typeFiltre %}<input type=\"hidden\" name=\"type\" value=\"{{ typeFiltre }}\">{% endif %}
        {% if proprietaireId %}<input type=\"hidden\" name=\"user\" value=\"{{ proprietaireId }}\">{% endif %}
        {% if dateDebut %}<input type=\"hidden\" name=\"date_debut\" value=\"{{ dateDebut }}\">{% endif %}
        {% if dateFin %}<input type=\"hidden\" name=\"date_fin\" value=\"{{ dateFin }}\">{% endif %}
        <label class=\"visually-hidden\" for=\"admin-ev-q\">Recherche</label>
        <input id=\"admin-ev-q\" type=\"search\" name=\"q\" value=\"{{ searchQuery }}\" placeholder=\"Recherche titre, lieu…\">
    </form>
    {% set ev_q_params = { q: searchQuery, page: 1 } %}
    {% if proprietaireId %}{% set ev_q_params = ev_q_params|merge({ user: proprietaireId }) %}{% endif %}
    {% if dateDebut %}{% set ev_q_params = ev_q_params|merge({ date_debut: dateDebut }) %}{% endif %}
    {% if dateFin %}{% set ev_q_params = ev_q_params|merge({ date_fin: dateFin }) %}{% endif %}
    <div class=\"admin-pills\">
        <a class=\"admin-pill {{ typeFiltre == '' ? 'is-active' : '' }}\" href=\"{{ path('admin_evenement_index', ev_q_params) }}\">Tous types</a>
        <a class=\"admin-pill {{ typeFiltre == 'cours' ? 'is-active' : '' }}\" href=\"{{ path('admin_evenement_index', ev_q_params|merge({ type: 'cours' })) }}\">Cours</a>
        <a class=\"admin-pill {{ typeFiltre == 'reunion' ? 'is-active' : '' }}\" href=\"{{ path('admin_evenement_index', ev_q_params|merge({ type: 'reunion' })) }}\">Réunion</a>
        <a class=\"admin-pill {{ typeFiltre == 'loisir' ? 'is-active' : '' }}\" href=\"{{ path('admin_evenement_index', ev_q_params|merge({ type: 'loisir' })) }}\">Loisir</a>
        <a class=\"admin-pill {{ typeFiltre == 'autre' ? 'is-active' : '' }}\" href=\"{{ path('admin_evenement_index', ev_q_params|merge({ type: 'autre' })) }}\">Autre</a>
    </div>
</div>

<form class=\"admin-card admin-toolbar\" method=\"get\" action=\"{{ path('admin_evenement_index') }}\" style=\"margin-bottom:20px;\">
    <input type=\"hidden\" name=\"q\" value=\"{{ searchQuery }}\">
    {% if typeFiltre %}<input type=\"hidden\" name=\"type\" value=\"{{ typeFiltre }}\">{% endif %}
    <label>Utilisateur
        <select class=\"admin-input\" name=\"user\">
            <option value=\"\">Tous</option>
            {% for u in users %}
                <option value=\"{{ u.userId }}\" {{ proprietaireId == u.userId ? 'selected' }}>{{ u.userPrenom }} {{ u.userNom }}</option>
            {% endfor %}
        </select>
    </label>
    <label>Date début ≥
        <input class=\"admin-input\" type=\"date\" name=\"date_debut\" value=\"{{ dateDebut }}\">
    </label>
    <label>Date début ≤
        <input class=\"admin-input\" type=\"date\" name=\"date_fin\" value=\"{{ dateFin }}\">
    </label>
    <button type=\"submit\" class=\"admin-btn admin-btn-primary\">Appliquer</button>
</form>

<div class=\"admin-cards-grid\">
    {% for e in evenements %}
        {% set et = (e.eventType ?? '')|lower %}
        <article class=\"admin-module-card admin-module-card--accent-ev\">
            <div class=\"admin-module-card__typebar {% if et == 'cours' %}admin-module-card__typebar--cours{% elseif et == 'reunion' %}admin-module-card__typebar--reunion{% elseif et == 'loisir' %}admin-module-card__typebar--loisir{% else %}admin-module-card__typebar--autre{% endif %}\">
                <span class=\"admin-module-card__typebar-main\"><span aria-hidden=\"true\">{{ _self.type_icon(et) }}</span> {{ _self.type_label(e.eventType) }}</span>
                <span style=\"margin-left:auto;\">{{ _self.event_badge_time(e) }}</span>
            </div>
            <h2 class=\"admin-module-card__title\">{{ e.titre ?? 'Sans titre' }}</h2>
            <div class=\"admin-module-card__body\">
                <p class=\"admin-module-card__meta\">📅 {% if e.dateDebut %}{{ e.dateDebut|date('d/m/Y H:i') }}{% else %}—{% endif %}
                    → {% if e.dateFin %}{{ e.dateFin|date('d/m/Y H:i') }}{% else %}—{% endif %}</p>
                <p class=\"admin-module-card__meta\">👤 {{ e.proprietaire ? (e.proprietaire.userPrenom ~ ' ' ~ e.proprietaire.userNom) : '—' }}</p>
                <p class=\"admin-module-card__meta\">📍
                    {% if e.lieuType == 'en_ligne' %}En ligne
                    {% elseif e.lieuAdresse %}{{ e.lieuAdresse }}
                    {% elseif e.salle %}Salle : {{ e.salle.nom }} ({{ e.salle.capacite }} pers.)
                    {% else %}{{ e.lieu ?? '—' }}{% endif %}
                </p>
                <p class=\"admin-module-card__meta\">✅ {{ e.approuve ? 'Approuvé' : 'Non approuvé' }}{% if e.statutDemandeSalle %} · Demande salle : {{ e.statutDemandeSalle }}{% endif %}</p>
            </div>
            <div class=\"admin-module-card__footer\">
                <a href=\"{{ path('admin_evenement_show', { id: e.id }) }}\" class=\"admin-btn admin-btn-ghost\">Voir</a>
                <a href=\"{{ path('admin_evenement_edit', { id: e.id }) }}\" class=\"admin-btn admin-btn-ghost\">Modifier</a>
                <form class=\"inline-form\" method=\"post\" action=\"{{ path('admin_evenement_delete', { id: e.id }) }}\" onsubmit=\"return confirm('Supprimer cet événement ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_delete_evenement' ~ e.id) }}\">
                    <button type=\"submit\" class=\"admin-btn admin-btn-danger\">Supprimer</button>
                </form>
            </div>
        </article>
    {% else %}
        <p class=\"admin-empty-hint\" style=\"grid-column: 1 / -1;\">Aucun événement.</p>
    {% endfor %}
</div>

{% if pages > 1 %}
    <nav class=\"admin-pagination-round\" aria-label=\"Pagination\">
        {% if page > 1 %}
            <a href=\"{{ path('admin_evenement_index', app.request.query.all|merge({ page: page - 1 })) }}\">‹</a>
        {% endif %}
        {% for p in 1..pages %}
            {% if p == page %}
                <span class=\"is-current\" aria-current=\"page\">{{ p }}</span>
            {% else %}
                <a href=\"{{ path('admin_evenement_index', app.request.query.all|merge({ page: p })) }}\">{{ p }}</a>
            {% endif %}
        {% endfor %}
        {% if page < pages %}
            <a href=\"{{ path('admin_evenement_index', app.request.query.all|merge({ page: page + 1 })) }}\">›</a>
        {% endif %}
    </nav>
{% endif %}
{% endblock %}
", "admin/evenement/index.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/admin/evenement/index.html.twig");
    }
}

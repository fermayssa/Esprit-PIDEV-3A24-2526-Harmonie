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

/* admin/demande/index.html.twig */
class __TwigTemplate_e71e4a671e13ba5b399fd5af8399f870 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/demande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/demande/index.html.twig"));

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

        yield "Demandes de réservation — Admin";
        
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
    <h1 class=\"admin-page-title\">Demandes de réservation</h1>
</div>

<div class=\"admin-toolbar\">
    <form class=\"admin-toolbar__search\" method=\"get\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_index");
        yield "\" role=\"search\">
        ";
        // line 12
        if ((($tmp = (isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "            <input type=\"hidden\" name=\"statut\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "\">
        ";
        }
        // line 15
        yield "        <label class=\"visually-hidden\" for=\"admin-demande-q\">Recherche</label>
        <input id=\"admin-demande-q\" type=\"search\" name=\"q\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher (utilisateur, événement, salle…)\">
    </form>
    <div class=\"admin-pills\">
        <a class=\"admin-pill ";
        // line 19
        yield ((((isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 19, $this->source); })()) == "")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_index", ["q" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 19, $this->source); })()), "page" => 1]), "html", null, true);
        yield "\">Tous</a>
        <a class=\"admin-pill ";
        // line 20
        yield ((((isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 20, $this->source); })()) == "EN_ATTENTE")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_index", ["q" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 20, $this->source); })()), "page" => 1, "statut" => "EN_ATTENTE"]), "html", null, true);
        yield "\">En attente</a>
        <a class=\"admin-pill ";
        // line 21
        yield ((((isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 21, $this->source); })()) == "ACCEPTEE")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_index", ["q" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 21, $this->source); })()), "page" => 1, "statut" => "ACCEPTEE"]), "html", null, true);
        yield "\">Acceptées</a>
        <a class=\"admin-pill ";
        // line 22
        yield ((((isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 22, $this->source); })()) == "REFUSEE")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_index", ["q" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 22, $this->source); })()), "page" => 1, "statut" => "REFUSEE"]), "html", null, true);
        yield "\">Refusées</a>
    </div>
</div>

<div class=\"admin-cards-grid\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 28
            yield "        <article class=\"admin-module-card admin-module-card--accent-demande\"
                 data-admin-demande-card
                 data-demand-id=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\"
                 data-csrf=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("admin_demande_action" . CoreExtension::getAttribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 31))), "html", null, true);
            yield "\"
                 data-url-accepter=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_accepter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\"
                 data-url-refuser=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\">
            <div class=\"admin-module-card__head\">
                <p class=\"admin-module-card__title admin-module-card__title--lg\" style=\"margin:0;font-size:1rem;\">Demande #";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
                ";
            // line 36
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["d"], "statut", [], "any", false, false, false, 36) == "EN_ATTENTE")) {
                // line 37
                yield "                    <span class=\"admin-badge admin-badge--wait admin-badge--pulse js-demande-badge\">En attente</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 38
$context["d"], "statut", [], "any", false, false, false, 38) == "ACCEPTEE")) {
                // line 39
                yield "                    <span class=\"admin-badge admin-badge--ok js-demande-badge\">Acceptée</span>
                ";
            } else {
                // line 41
                yield "                    <span class=\"admin-badge admin-badge--no js-demande-badge\">Refusée</span>
                ";
            }
            // line 43
            yield "            </div>
            <div class=\"admin-module-card__body\">
                <p class=\"admin-module-card__meta\">👤 ";
            // line 45
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["d"], "utilisateur", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["d"], "utilisateur", [], "any", false, false, false, 45), "userPrenom", [], "any", false, false, false, 45) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["d"], "utilisateur", [], "any", false, false, false, 45), "userNom", [], "any", false, false, false, 45)), "html", null, true)) : ("—"));
            yield "</p>
                <p class=\"admin-module-card__meta\">🗓️ ";
            // line 46
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["d"], "evenement", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["d"], "evenement", [], "any", false, true, false, 46), "titre", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["d"], "evenement", [], "any", false, false, false, 46), "titre", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["d"], "evenement", [], "any", false, false, false, 46), "titre", [], "any", false, false, false, 46), "html", null, true)) : ("Sans titre"))) : ("—"));
            yield "</p>
                <p class=\"admin-module-card__meta\">🏢 ";
            // line 47
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["d"], "salle", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["d"], "salle", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
                yield " · ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["d"], "salle", [], "any", false, false, false, 47), "capacite", [], "any", false, false, false, 47), "html", null, true);
                yield " pers.";
            } else {
                yield "—";
            }
            yield "</p>
                <p class=\"admin-module-card__meta\">📅 ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "dateDemande", [], "any", false, false, false, 48), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                <p class=\"admin-module-card__meta js-demande-admin-note\" ";
            // line 49
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["d"], "commentaireAdmin", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "hidden";
            }
            yield ">
                    ";
            // line 50
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["d"], "commentaireAdmin", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "💬 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "commentaireAdmin", [], "any", false, false, false, 50), "html", null, true);
            }
            // line 51
            yield "                </p>
                ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["d"], "statut", [], "any", false, false, false, 52) == "EN_ATTENTE")) {
                // line 53
                yield "                    <div class=\"admin-demande-actions js-demande-actions\">
                        <textarea class=\"admin-input js-demande-refuse-comment\" rows=\"2\" placeholder=\"Motif du refus (optionnel)\" style=\"width:100%;max-width:100%;resize:vertical;\"></textarea>
                        <div class=\"admin-demande-actions__row\">
                            <button type=\"button\" class=\"admin-btn admin-btn-accept js-demande-accepter\">✅ Accepter</button>
                            <button type=\"button\" class=\"admin-btn admin-btn-refuse js-demande-refuser\">❌ Refuser</button>
                        </div>
                    </div>
                ";
            }
            // line 61
            yield "            </div>
        </article>
    ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "        <p class=\"admin-empty-hint\" style=\"grid-column: 1 / -1;\">Aucune demande.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['d'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "</div>

";
        // line 68
        if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 68, $this->source); })()) > 1)) {
            // line 69
            yield "    <nav class=\"admin-pagination-round\" aria-label=\"Pagination\">
        ";
            // line 70
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 70, $this->source); })()) > 1)) {
                // line 71
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "query", [], "any", false, false, false, 71), "all", [], "any", false, false, false, 71), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 71, $this->source); })()) - 1)])), "html", null, true);
                yield "\" aria-label=\"Page précédente\">‹</a>
        ";
            }
            // line 73
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 73, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 74
                yield "            ";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 74, $this->source); })()))) {
                    // line 75
                    yield "                <span class=\"is-current\" aria-current=\"page\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</span>
            ";
                } else {
                    // line 77
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "query", [], "any", false, false, false, 77), "all", [], "any", false, false, false, 77), ["page" => $context["p"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</a>
            ";
                }
                // line 79
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "        ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 80, $this->source); })()))) {
                // line 81
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "query", [], "any", false, false, false, 81), "all", [], "any", false, false, false, 81), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 81, $this->source); })()) + 1)])), "html", null, true);
                yield "\" aria-label=\"Page suivante\">›</a>
        ";
            }
            // line 83
            yield "    </nav>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/demande/index.html.twig";
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
        return array (  323 => 83,  317 => 81,  314 => 80,  308 => 79,  300 => 77,  294 => 75,  291 => 74,  286 => 73,  280 => 71,  278 => 70,  275 => 69,  273 => 68,  269 => 66,  262 => 64,  260 => 63,  254 => 61,  244 => 53,  242 => 52,  239 => 51,  234 => 50,  228 => 49,  224 => 48,  213 => 47,  209 => 46,  205 => 45,  201 => 43,  197 => 41,  193 => 39,  191 => 38,  188 => 37,  186 => 36,  182 => 35,  177 => 33,  173 => 32,  169 => 31,  165 => 30,  161 => 28,  156 => 27,  146 => 22,  140 => 21,  134 => 20,  128 => 19,  122 => 16,  119 => 15,  113 => 13,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Demandes de réservation — Admin{% endblock %}

{% block body %}
<div class=\"admin-topbar\">
    <h1 class=\"admin-page-title\">Demandes de réservation</h1>
</div>

<div class=\"admin-toolbar\">
    <form class=\"admin-toolbar__search\" method=\"get\" action=\"{{ path('admin_demande_index') }}\" role=\"search\">
        {% if statutFiltre %}
            <input type=\"hidden\" name=\"statut\" value=\"{{ statutFiltre }}\">
        {% endif %}
        <label class=\"visually-hidden\" for=\"admin-demande-q\">Recherche</label>
        <input id=\"admin-demande-q\" type=\"search\" name=\"q\" value=\"{{ searchQuery }}\" placeholder=\"Rechercher (utilisateur, événement, salle…)\">
    </form>
    <div class=\"admin-pills\">
        <a class=\"admin-pill {{ statutFiltre == '' ? 'is-active' : '' }}\" href=\"{{ path('admin_demande_index', { q: searchQuery, page: 1 }) }}\">Tous</a>
        <a class=\"admin-pill {{ statutFiltre == 'EN_ATTENTE' ? 'is-active' : '' }}\" href=\"{{ path('admin_demande_index', { q: searchQuery, page: 1, statut: 'EN_ATTENTE' }) }}\">En attente</a>
        <a class=\"admin-pill {{ statutFiltre == 'ACCEPTEE' ? 'is-active' : '' }}\" href=\"{{ path('admin_demande_index', { q: searchQuery, page: 1, statut: 'ACCEPTEE' }) }}\">Acceptées</a>
        <a class=\"admin-pill {{ statutFiltre == 'REFUSEE' ? 'is-active' : '' }}\" href=\"{{ path('admin_demande_index', { q: searchQuery, page: 1, statut: 'REFUSEE' }) }}\">Refusées</a>
    </div>
</div>

<div class=\"admin-cards-grid\">
    {% for d in demandes %}
        <article class=\"admin-module-card admin-module-card--accent-demande\"
                 data-admin-demande-card
                 data-demand-id=\"{{ d.id }}\"
                 data-csrf=\"{{ csrf_token('admin_demande_action' ~ d.id) }}\"
                 data-url-accepter=\"{{ path('admin_demande_accepter', { id: d.id }) }}\"
                 data-url-refuser=\"{{ path('admin_demande_refuser', { id: d.id }) }}\">
            <div class=\"admin-module-card__head\">
                <p class=\"admin-module-card__title admin-module-card__title--lg\" style=\"margin:0;font-size:1rem;\">Demande #{{ d.id }}</p>
                {% if d.statut == 'EN_ATTENTE' %}
                    <span class=\"admin-badge admin-badge--wait admin-badge--pulse js-demande-badge\">En attente</span>
                {% elseif d.statut == 'ACCEPTEE' %}
                    <span class=\"admin-badge admin-badge--ok js-demande-badge\">Acceptée</span>
                {% else %}
                    <span class=\"admin-badge admin-badge--no js-demande-badge\">Refusée</span>
                {% endif %}
            </div>
            <div class=\"admin-module-card__body\">
                <p class=\"admin-module-card__meta\">👤 {{ d.utilisateur ? (d.utilisateur.userPrenom ~ ' ' ~ d.utilisateur.userNom) : '—' }}</p>
                <p class=\"admin-module-card__meta\">🗓️ {{ d.evenement ? (d.evenement.titre ?? 'Sans titre') : '—' }}</p>
                <p class=\"admin-module-card__meta\">🏢 {% if d.salle %}{{ d.salle.nom }} · {{ d.salle.capacite }} pers.{% else %}—{% endif %}</p>
                <p class=\"admin-module-card__meta\">📅 {{ d.dateDemande|date('d/m/Y H:i') }}</p>
                <p class=\"admin-module-card__meta js-demande-admin-note\" {% if not d.commentaireAdmin %}hidden{% endif %}>
                    {% if d.commentaireAdmin %}💬 {{ d.commentaireAdmin }}{% endif %}
                </p>
                {% if d.statut == 'EN_ATTENTE' %}
                    <div class=\"admin-demande-actions js-demande-actions\">
                        <textarea class=\"admin-input js-demande-refuse-comment\" rows=\"2\" placeholder=\"Motif du refus (optionnel)\" style=\"width:100%;max-width:100%;resize:vertical;\"></textarea>
                        <div class=\"admin-demande-actions__row\">
                            <button type=\"button\" class=\"admin-btn admin-btn-accept js-demande-accepter\">✅ Accepter</button>
                            <button type=\"button\" class=\"admin-btn admin-btn-refuse js-demande-refuser\">❌ Refuser</button>
                        </div>
                    </div>
                {% endif %}
            </div>
        </article>
    {% else %}
        <p class=\"admin-empty-hint\" style=\"grid-column: 1 / -1;\">Aucune demande.</p>
    {% endfor %}
</div>

{% if pages > 1 %}
    <nav class=\"admin-pagination-round\" aria-label=\"Pagination\">
        {% if page > 1 %}
            <a href=\"{{ path('admin_demande_index', app.request.query.all|merge({ page: page - 1 })) }}\" aria-label=\"Page précédente\">‹</a>
        {% endif %}
        {% for p in 1..pages %}
            {% if p == page %}
                <span class=\"is-current\" aria-current=\"page\">{{ p }}</span>
            {% else %}
                <a href=\"{{ path('admin_demande_index', app.request.query.all|merge({ page: p })) }}\">{{ p }}</a>
            {% endif %}
        {% endfor %}
        {% if page < pages %}
            <a href=\"{{ path('admin_demande_index', app.request.query.all|merge({ page: page + 1 })) }}\" aria-label=\"Page suivante\">›</a>
        {% endif %}
    </nav>
{% endif %}
{% endblock %}
", "admin/demande/index.html.twig", "C:\\Users\\user\\Downloads\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\templates\\admin\\demande\\index.html.twig");
    }
}

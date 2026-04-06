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

/* admin/salle/index.html.twig */
class __TwigTemplate_9907a3d91528bca12b856cab0eecec30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/salle/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/salle/index.html.twig"));

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

        yield "Salles — Admin";
        
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
    <h1 class=\"admin-page-title\">Salles</h1>
    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_salle_new");
        yield "\" class=\"admin-btn admin-btn-primary\">Ajouter une salle</a>
</div>

<div class=\"admin-toolbar\">
    <form class=\"admin-toolbar__search\" method=\"get\" action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_salle_index");
        yield "\" role=\"search\">
        <label class=\"visually-hidden\" for=\"admin-salle-q\">Recherche</label>
        <input id=\"admin-salle-q\" type=\"search\" name=\"q\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Recherche par nom…\">
    </form>
</div>

<div class=\"admin-cards-grid\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 20
            yield "        <article class=\"admin-module-card admin-module-card--accent-salle ";
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["s"], "disponible", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("admin-module-card--unavailable") : (""));
            yield "\"
                 data-admin-salle-card>
            <div class=\"admin-module-card__head\">
                <h2 class=\"admin-module-card__title admin-module-card__title--lg\" style=\"margin:0;\">🏢 ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 23), "html", null, true);
            yield "</h2>
            </div>
            <div class=\"admin-module-card__body\">
                <p class=\"admin-module-card__meta\">👥 Capacité : ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "capacite", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
                <p class=\"admin-module-card__meta\">🔧 ";
            // line 27
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "equipements", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "equipements", [], "any", false, false, false, 27), 0, 80), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "equipements", [], "any", false, false, false, 27)) > 80)) {
                    yield "…";
                }
            } else {
                yield "—";
            }
            yield "</p>
                <p class=\"admin-module-card__meta\">
                    <button type=\"button\"
                            class=\"admin-salle-toggle js-salle-toggle ";
            // line 30
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "disponible", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-on") : ("is-off"));
            yield "\"
                            data-toggle-url=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_salle_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\"
                            data-csrf=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("admin_toggle_salle" . CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 32))), "html", null, true);
            yield "\"
                            aria-pressed=\"";
            // line 33
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "disponible", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\">
                        <span class=\"js-toggle-label\">";
            // line 34
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "disponible", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ON") : ("OFF"));
            yield "</span>
                        <span class=\"visually-hidden\">Disponibilité</span>
                    </button>
                </p>
            </div>
            <div class=\"admin-module-card__footer\">
                <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_salle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"admin-btn admin-btn-ghost\">Modifier</a>
                <form class=\"inline-form\" method=\"post\" action=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_salle_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cette salle ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("admin_delete_salle" . CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 42))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"admin-btn admin-btn-danger\">Supprimer</button>
                </form>
            </div>
        </article>
    ";
            $context['_iterated'] = true;
        }
        // line 47
        if (!$context['_iterated']) {
            // line 48
            yield "        <p class=\"admin-empty-hint\" style=\"grid-column: 1 / -1;\">Aucune salle.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "</div>

";
        // line 52
        if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 52, $this->source); })()) > 1)) {
            // line 53
            yield "    <nav class=\"admin-pagination-round\" aria-label=\"Pagination\">
        ";
            // line 54
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 54, $this->source); })()) > 1)) {
                // line 55
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_salle_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "query", [], "any", false, false, false, 55), "all", [], "any", false, false, false, 55), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 55, $this->source); })()) - 1)])), "html", null, true);
                yield "\">‹</a>
        ";
            }
            // line 57
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 57, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 58
                yield "            ";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 58, $this->source); })()))) {
                    // line 59
                    yield "                <span class=\"is-current\" aria-current=\"page\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</span>
            ";
                } else {
                    // line 61
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_salle_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "query", [], "any", false, false, false, 61), "all", [], "any", false, false, false, 61), ["page" => $context["p"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</a>
            ";
                }
                // line 63
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "        ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 64, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 64, $this->source); })()))) {
                // line 65
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_salle_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "query", [], "any", false, false, false, 65), "all", [], "any", false, false, false, 65), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 65, $this->source); })()) + 1)])), "html", null, true);
                yield "\">›</a>
        ";
            }
            // line 67
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
        return "admin/salle/index.html.twig";
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
        return array (  265 => 67,  259 => 65,  256 => 64,  250 => 63,  242 => 61,  236 => 59,  233 => 58,  228 => 57,  222 => 55,  220 => 54,  217 => 53,  215 => 52,  211 => 50,  204 => 48,  202 => 47,  192 => 42,  188 => 41,  184 => 40,  175 => 34,  171 => 33,  167 => 32,  163 => 31,  159 => 30,  146 => 27,  142 => 26,  136 => 23,  129 => 20,  124 => 19,  116 => 14,  111 => 12,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Salles — Admin{% endblock %}

{% block body %}
<div class=\"admin-topbar\">
    <h1 class=\"admin-page-title\">Salles</h1>
    <a href=\"{{ path('admin_salle_new') }}\" class=\"admin-btn admin-btn-primary\">Ajouter une salle</a>
</div>

<div class=\"admin-toolbar\">
    <form class=\"admin-toolbar__search\" method=\"get\" action=\"{{ path('admin_salle_index') }}\" role=\"search\">
        <label class=\"visually-hidden\" for=\"admin-salle-q\">Recherche</label>
        <input id=\"admin-salle-q\" type=\"search\" name=\"q\" value=\"{{ searchQuery }}\" placeholder=\"Recherche par nom…\">
    </form>
</div>

<div class=\"admin-cards-grid\">
    {% for s in salles %}
        <article class=\"admin-module-card admin-module-card--accent-salle {{ not s.disponible ? 'admin-module-card--unavailable' : '' }}\"
                 data-admin-salle-card>
            <div class=\"admin-module-card__head\">
                <h2 class=\"admin-module-card__title admin-module-card__title--lg\" style=\"margin:0;\">🏢 {{ s.nom }}</h2>
            </div>
            <div class=\"admin-module-card__body\">
                <p class=\"admin-module-card__meta\">👥 Capacité : {{ s.capacite }}</p>
                <p class=\"admin-module-card__meta\">🔧 {% if s.equipements %}{{ s.equipements|slice(0, 80) }}{% if s.equipements|length > 80 %}…{% endif %}{% else %}—{% endif %}</p>
                <p class=\"admin-module-card__meta\">
                    <button type=\"button\"
                            class=\"admin-salle-toggle js-salle-toggle {{ s.disponible ? 'is-on' : 'is-off' }}\"
                            data-toggle-url=\"{{ path('admin_salle_toggle', { id: s.id }) }}\"
                            data-csrf=\"{{ csrf_token('admin_toggle_salle' ~ s.id) }}\"
                            aria-pressed=\"{{ s.disponible ? 'true' : 'false' }}\">
                        <span class=\"js-toggle-label\">{{ s.disponible ? 'ON' : 'OFF' }}</span>
                        <span class=\"visually-hidden\">Disponibilité</span>
                    </button>
                </p>
            </div>
            <div class=\"admin-module-card__footer\">
                <a href=\"{{ path('admin_salle_edit', { id: s.id }) }}\" class=\"admin-btn admin-btn-ghost\">Modifier</a>
                <form class=\"inline-form\" method=\"post\" action=\"{{ path('admin_salle_delete', { id: s.id }) }}\" onsubmit=\"return confirm('Supprimer cette salle ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_delete_salle' ~ s.id) }}\">
                    <button type=\"submit\" class=\"admin-btn admin-btn-danger\">Supprimer</button>
                </form>
            </div>
        </article>
    {% else %}
        <p class=\"admin-empty-hint\" style=\"grid-column: 1 / -1;\">Aucune salle.</p>
    {% endfor %}
</div>

{% if pages > 1 %}
    <nav class=\"admin-pagination-round\" aria-label=\"Pagination\">
        {% if page > 1 %}
            <a href=\"{{ path('admin_salle_index', app.request.query.all|merge({ page: page - 1 })) }}\">‹</a>
        {% endif %}
        {% for p in 1..pages %}
            {% if p == page %}
                <span class=\"is-current\" aria-current=\"page\">{{ p }}</span>
            {% else %}
                <a href=\"{{ path('admin_salle_index', app.request.query.all|merge({ page: p })) }}\">{{ p }}</a>
            {% endif %}
        {% endfor %}
        {% if page < pages %}
            <a href=\"{{ path('admin_salle_index', app.request.query.all|merge({ page: page + 1 })) }}\">›</a>
        {% endif %}
    </nav>
{% endif %}
{% endblock %}
", "admin/salle/index.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/admin/salle/index.html.twig");
    }
}

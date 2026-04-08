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

/* admin/tache/index.html.twig */
class __TwigTemplate_144477310047bf6d27d335c537dc2e61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tache/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tache/index.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
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

        yield "Tâches — Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "<div class=\"admin-topbar\">
    <h1 class=\"admin-page-title\">Tâches</h1>
    <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_new");
        yield "\" class=\"admin-btn admin-btn-primary\">Ajouter une tâche</a>
</div>

<div class=\"admin-toolbar\">
    <form class=\"admin-toolbar__search\" method=\"get\" action=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_index");
        yield "\" role=\"search\">
        ";
        // line 25
        if ((($tmp = (isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<input type=\"hidden\" name=\"statut\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 25, $this->source); })()), "html", null, true);
            yield "\">";
        }
        // line 26
        yield "        <label class=\"visually-hidden\" for=\"admin-tache-q\">Recherche</label>
        <input id=\"admin-tache-q\" type=\"search\" name=\"q\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Recherche nom, notes…\">
    </form>
    ";
        // line 29
        $context["t_q_params"] = ["q" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 29, $this->source); })()), "page" => 1];
        // line 30
        yield "    <div class=\"admin-pills\">
        <a class=\"admin-pill ";
        // line 31
        yield ((((isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 31, $this->source); })()) == "")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_index", (isset($context["t_q_params"]) || array_key_exists("t_q_params", $context) ? $context["t_q_params"] : (function () { throw new RuntimeError('Variable "t_q_params" does not exist.', 31, $this->source); })())), "html", null, true);
        yield "\">Tous</a>
        <a class=\"admin-pill ";
        // line 32
        yield ((((isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 32, $this->source); })()) == "A_FAIRE")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_index", Twig\Extension\CoreExtension::merge((isset($context["t_q_params"]) || array_key_exists("t_q_params", $context) ? $context["t_q_params"] : (function () { throw new RuntimeError('Variable "t_q_params" does not exist.', 32, $this->source); })()), ["statut" => "A_FAIRE"])), "html", null, true);
        yield "\">TODO</a>
        <a class=\"admin-pill ";
        // line 33
        yield ((((isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 33, $this->source); })()) == "EN_COURS")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_index", Twig\Extension\CoreExtension::merge((isset($context["t_q_params"]) || array_key_exists("t_q_params", $context) ? $context["t_q_params"] : (function () { throw new RuntimeError('Variable "t_q_params" does not exist.', 33, $this->source); })()), ["statut" => "EN_COURS"])), "html", null, true);
        yield "\">DOING</a>
        <a class=\"admin-pill ";
        // line 34
        yield ((((isset($context["statutFiltre"]) || array_key_exists("statutFiltre", $context) ? $context["statutFiltre"] : (function () { throw new RuntimeError('Variable "statutFiltre" does not exist.', 34, $this->source); })()) == "TERMINEE")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_index", Twig\Extension\CoreExtension::merge((isset($context["t_q_params"]) || array_key_exists("t_q_params", $context) ? $context["t_q_params"] : (function () { throw new RuntimeError('Variable "t_q_params" does not exist.', 34, $this->source); })()), ["statut" => "TERMINEE"])), "html", null, true);
        yield "\">DONE</a>
    </div>
</div>

<div class=\"admin-cards-grid\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 40
            yield "        ";
            $context["dl"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["t"], "deadline", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "deadline", [], "any", false, false, false, 40), "Y-m-d")) : (null));
            // line 41
            yield "        ";
            $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
            // line 42
            yield "        ";
            $context["overdue"] = (((isset($context["dl"]) || array_key_exists("dl", $context) ? $context["dl"] : (function () { throw new RuntimeError('Variable "dl" does not exist.', 42, $this->source); })()) && ((isset($context["dl"]) || array_key_exists("dl", $context) ? $context["dl"] : (function () { throw new RuntimeError('Variable "dl" does not exist.', 42, $this->source); })()) < (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 42, $this->source); })()))) && (CoreExtension::getAttribute($this->env, $this->source, $context["t"], "statutTache", [], "any", false, false, false, 42) != "TERMINEE"));
            // line 43
            yield "        <article class=\"admin-module-card admin-module-card--accent-tache\">
            <div class=\"admin-module-card__head\">
                <h2 class=\"admin-module-card__title\" style=\"margin:0;padding-right:8px;\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "</h2>
                <span style=\"flex-shrink:0;\">";
            // line 46
            yield $this->getTemplateForMacro("macro_statut_badge", $context, 46, $this->getSourceContext())->macro_statut_badge(...[CoreExtension::getAttribute($this->env, $this->source, $context["t"], "statutTache", [], "any", false, false, false, 46)]);
            yield "</span>
            </div>
            <div class=\"admin-module-card__body\">
                <p class=\"admin-module-card__meta ";
            // line 49
            if ((($tmp = (isset($context["overdue"]) || array_key_exists("overdue", $context) ? $context["overdue"] : (function () { throw new RuntimeError('Variable "overdue" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "admin-module-card__meta--warn";
            }
            yield "\">📅 ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["t"], "deadline", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "deadline", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
                if ((($tmp = (isset($context["overdue"]) || array_key_exists("overdue", $context) ? $context["overdue"] : (function () { throw new RuntimeError('Variable "overdue" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " (dépassée)";
                }
            } else {
                yield "—";
            }
            yield "</p>
                <p class=\"admin-module-card__meta\">👤 —</p>
                <p class=\"admin-module-card__meta\">📝 ";
            // line 51
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["t"], "notes", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "notes", [], "any", false, false, false, 51), 0, 60), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "notes", [], "any", false, false, false, 51)) > 60)) {
                    yield "…";
                }
            } else {
                yield "—";
            }
            yield "</p>
            </div>
            <div class=\"admin-module-card__footer\">
                <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"admin-btn admin-btn-ghost\">Voir</a>
                <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"admin-btn admin-btn-ghost\">Modifier</a>
                <form class=\"inline-form\" method=\"post\" action=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("admin_delete_tache" . CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 57))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"admin-btn admin-btn-danger\">Supprimer</button>
                </form>
            </div>
        </article>
    ";
            $context['_iterated'] = true;
        }
        // line 62
        if (!$context['_iterated']) {
            // line 63
            yield "        <p class=\"admin-empty-hint\" style=\"grid-column: 1 / -1;\">Aucune tâche.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "</div>

";
        // line 67
        if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 67, $this->source); })()) > 1)) {
            // line 68
            yield "    <nav class=\"admin-pagination-round\" aria-label=\"Pagination\">
        ";
            // line 69
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 69, $this->source); })()) > 1)) {
                // line 70
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "query", [], "any", false, false, false, 70), "all", [], "any", false, false, false, 70), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 70, $this->source); })()) - 1)])), "html", null, true);
                yield "\">‹</a>
        ";
            }
            // line 72
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 72, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 73
                yield "            ";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 73, $this->source); })()))) {
                    // line 74
                    yield "                <span class=\"is-current\" aria-current=\"page\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</span>
            ";
                } else {
                    // line 76
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "query", [], "any", false, false, false, 76), "all", [], "any", false, false, false, 76), ["page" => $context["p"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</a>
            ";
                }
                // line 78
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "        ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 79, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 79, $this->source); })()))) {
                // line 80
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "query", [], "any", false, false, false, 80), "all", [], "any", false, false, false, 80), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()) + 1)])), "html", null, true);
                yield "\">›</a>
        ";
            }
            // line 82
            yield "    </nav>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    public function macro_statut_badge($s = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "s" => $s,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "statut_badge"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "statut_badge"));

            // line 4
            yield "    ";
            if (((isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 4, $this->source); })()) == "A_FAIRE")) {
                // line 5
                yield "        <span class=\"admin-badge\" style=\"background:#f3f4f6;color:#374151;\">TODO</span>
    ";
            } elseif ((            // line 6
(isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 6, $this->source); })()) == "EN_COURS")) {
                // line 7
                yield "        <span class=\"admin-badge\" style=\"background:#dbeafe;color:#1d4ed8;\">DOING</span>
    ";
            } elseif ((            // line 8
(isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 8, $this->source); })()) == "TERMINEE")) {
                // line 9
                yield "        <span class=\"admin-badge admin-badge--ok\">DONE</span>
    ";
            } else {
                // line 11
                yield "        <span class=\"admin-badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 11, $this->source); })()), "html", null, true);
                yield "</span>
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
        return "admin/tache/index.html.twig";
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
        return array (  352 => 11,  348 => 9,  346 => 8,  343 => 7,  341 => 6,  338 => 5,  335 => 4,  317 => 3,  304 => 82,  298 => 80,  295 => 79,  289 => 78,  281 => 76,  275 => 74,  272 => 73,  267 => 72,  261 => 70,  259 => 69,  256 => 68,  254 => 67,  250 => 65,  243 => 63,  241 => 62,  231 => 57,  227 => 56,  223 => 55,  219 => 54,  206 => 51,  190 => 49,  184 => 46,  180 => 45,  176 => 43,  173 => 42,  170 => 41,  167 => 40,  162 => 39,  152 => 34,  146 => 33,  140 => 32,  134 => 31,  131 => 30,  129 => 29,  124 => 27,  121 => 26,  115 => 25,  111 => 24,  104 => 20,  100 => 18,  87 => 17,  64 => 15,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% macro statut_badge(s) %}
    {% if s == 'A_FAIRE' %}
        <span class=\"admin-badge\" style=\"background:#f3f4f6;color:#374151;\">TODO</span>
    {% elseif s == 'EN_COURS' %}
        <span class=\"admin-badge\" style=\"background:#dbeafe;color:#1d4ed8;\">DOING</span>
    {% elseif s == 'TERMINEE' %}
        <span class=\"admin-badge admin-badge--ok\">DONE</span>
    {% else %}
        <span class=\"admin-badge\">{{ s }}</span>
    {% endif %}
{% endmacro %}

{% block title %}Tâches — Admin{% endblock %}

{% block body %}
<div class=\"admin-topbar\">
    <h1 class=\"admin-page-title\">Tâches</h1>
    <a href=\"{{ path('admin_tache_new') }}\" class=\"admin-btn admin-btn-primary\">Ajouter une tâche</a>
</div>

<div class=\"admin-toolbar\">
    <form class=\"admin-toolbar__search\" method=\"get\" action=\"{{ path('admin_tache_index') }}\" role=\"search\">
        {% if statutFiltre %}<input type=\"hidden\" name=\"statut\" value=\"{{ statutFiltre }}\">{% endif %}
        <label class=\"visually-hidden\" for=\"admin-tache-q\">Recherche</label>
        <input id=\"admin-tache-q\" type=\"search\" name=\"q\" value=\"{{ searchQuery }}\" placeholder=\"Recherche nom, notes…\">
    </form>
    {% set t_q_params = { q: searchQuery, page: 1 } %}
    <div class=\"admin-pills\">
        <a class=\"admin-pill {{ statutFiltre == '' ? 'is-active' : '' }}\" href=\"{{ path('admin_tache_index', t_q_params) }}\">Tous</a>
        <a class=\"admin-pill {{ statutFiltre == 'A_FAIRE' ? 'is-active' : '' }}\" href=\"{{ path('admin_tache_index', t_q_params|merge({ statut: 'A_FAIRE' })) }}\">TODO</a>
        <a class=\"admin-pill {{ statutFiltre == 'EN_COURS' ? 'is-active' : '' }}\" href=\"{{ path('admin_tache_index', t_q_params|merge({ statut: 'EN_COURS' })) }}\">DOING</a>
        <a class=\"admin-pill {{ statutFiltre == 'TERMINEE' ? 'is-active' : '' }}\" href=\"{{ path('admin_tache_index', t_q_params|merge({ statut: 'TERMINEE' })) }}\">DONE</a>
    </div>
</div>

<div class=\"admin-cards-grid\">
    {% for t in taches %}
        {% set dl = t.deadline ? t.deadline|date('Y-m-d') : null %}
        {% set today = 'now'|date('Y-m-d') %}
        {% set overdue = dl and dl < today and t.statutTache != 'TERMINEE' %}
        <article class=\"admin-module-card admin-module-card--accent-tache\">
            <div class=\"admin-module-card__head\">
                <h2 class=\"admin-module-card__title\" style=\"margin:0;padding-right:8px;\">{{ t.nom }}</h2>
                <span style=\"flex-shrink:0;\">{{ _self.statut_badge(t.statutTache) }}</span>
            </div>
            <div class=\"admin-module-card__body\">
                <p class=\"admin-module-card__meta {% if overdue %}admin-module-card__meta--warn{% endif %}\">📅 {% if t.deadline %}{{ t.deadline|date('d/m/Y') }}{% if overdue %} (dépassée){% endif %}{% else %}—{% endif %}</p>
                <p class=\"admin-module-card__meta\">👤 —</p>
                <p class=\"admin-module-card__meta\">📝 {% if t.notes %}{{ t.notes|slice(0, 60) }}{% if t.notes|length > 60 %}…{% endif %}{% else %}—{% endif %}</p>
            </div>
            <div class=\"admin-module-card__footer\">
                <a href=\"{{ path('admin_tache_show', { id: t.id }) }}\" class=\"admin-btn admin-btn-ghost\">Voir</a>
                <a href=\"{{ path('admin_tache_edit', { id: t.id }) }}\" class=\"admin-btn admin-btn-ghost\">Modifier</a>
                <form class=\"inline-form\" method=\"post\" action=\"{{ path('admin_tache_delete', { id: t.id }) }}\" onsubmit=\"return confirm('Supprimer ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_delete_tache' ~ t.id) }}\">
                    <button type=\"submit\" class=\"admin-btn admin-btn-danger\">Supprimer</button>
                </form>
            </div>
        </article>
    {% else %}
        <p class=\"admin-empty-hint\" style=\"grid-column: 1 / -1;\">Aucune tâche.</p>
    {% endfor %}
</div>

{% if pages > 1 %}
    <nav class=\"admin-pagination-round\" aria-label=\"Pagination\">
        {% if page > 1 %}
            <a href=\"{{ path('admin_tache_index', app.request.query.all|merge({ page: page - 1 })) }}\">‹</a>
        {% endif %}
        {% for p in 1..pages %}
            {% if p == page %}
                <span class=\"is-current\" aria-current=\"page\">{{ p }}</span>
            {% else %}
                <a href=\"{{ path('admin_tache_index', app.request.query.all|merge({ page: p })) }}\">{{ p }}</a>
            {% endif %}
        {% endfor %}
        {% if page < pages %}
            <a href=\"{{ path('admin_tache_index', app.request.query.all|merge({ page: page + 1 })) }}\">›</a>
        {% endif %}
    </nav>
{% endif %}
{% endblock %}
", "admin/tache/index.html.twig", "C:\\Users\\user\\Downloads\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\templates\\admin\\tache\\index.html.twig");
    }
}

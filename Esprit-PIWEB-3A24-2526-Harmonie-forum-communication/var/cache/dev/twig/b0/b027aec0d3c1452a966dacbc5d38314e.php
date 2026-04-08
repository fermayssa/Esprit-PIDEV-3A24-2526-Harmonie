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

/* evenement/index.html.twig */
class __TwigTemplate_be52099c9bf8d904416ca9b51b9ea399 extends Template
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
            'body_javascripts' => [$this, 'block_body_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        // line 19
        $macros["evcal"] = $this->macros["evcal"] = $this;
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
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

        yield "Calendrier — Événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/css/harmony-theme.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/css/harmony-forms.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/css/harmony-panel.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <style>
        .cal-page { max-width: 1100px; margin: 0 auto; }
        .cal-head-row {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: start;
            gap: 16px 24px;
            margin-bottom: 20px;
        }
        .cal-title-block { grid-column: 1; grid-row: 1; }
        .cal-title-block h1 {
            font-family: var(--font-head, 'Syne', sans-serif); font-weight: 800; font-size: 1.75rem;
            color: var(--text, #1C1733); letter-spacing: -0.02em; margin: 0;
        }
        .cal-weather { font-size: 13px; color: var(--text-muted, #9590B8); margin-top: 10px; grid-column: 1; grid-row: 2; }
        .cal-nav {
            display: flex; align-items: center; gap: 12px;
            justify-content: center;
            grid-column: 2;
            grid-row: 1 / span 2;
            align-self: center;
        }
        .cal-nav-btn {
            width: 40px; height: 36px; border-radius: 10px;
            border: 1px solid #e5e7eb; background: linear-gradient(180deg, #fafafa, #f3f4f6);
            color: var(--purple, #6A5ACD); font-size: 18px; font-weight: 700;
            cursor: pointer; text-decoration: none; display: grid; place-items: center;
        }
        .cal-nav-btn:hover { border-color: var(--purple-pale, #EDE8FA); background: var(--purple-pale, #EDE8FA); }
        .cal-nav-title { font-family: var(--font-head, 'Syne', sans-serif); font-weight: 700; font-size: 1.1rem; min-width: 160px; text-align: center; color: var(--text, #1C1733); }
        .cal-export-wrap { position: relative; grid-column: 3; grid-row: 1; justify-self: end; }
        .cal-export-summary {
            list-style: none; cursor: pointer;
            padding: 8px 16px; border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: linear-gradient(180deg, #fafafa, #f3f4f6);
            font-size: 13px; font-weight: 500; color: var(--text-mid, #4A4570);
        }
        .cal-export-summary::-webkit-details-marker { display: none; }
        .cal-export-menu {
            position: absolute; right: 0; top: calc(100% + 6px);
            background: var(--white, #fff); border: 1px solid var(--border, rgba(106,90,205,.12));
            border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,.08);
            min-width: 200px; padding: 6px; z-index: 50;
        }
        .cal-export-menu a {
            display: block; padding: 10px 12px; border-radius: 8px;
            color: var(--text, #1C1733); text-decoration: none; font-size: 14px;
        }
        .cal-export-menu a:hover { background: var(--purple-pale, #EDE8FA); color: var(--purple, #6A5ACD); }

        .cal-grid-wrap {
            background: var(--white, #fff); border: 1px solid var(--border, rgba(106,90,205,.12));
            border-radius: 18px; padding: 16px; box-shadow: 0 4px 24px rgba(106,90,205,.08);
        }
        .cal-dow-row {
            display: grid; grid-template-columns: repeat(7, 1fr);
            gap: 6px; margin-bottom: 8px;
        }
        .cal-dow { text-align: center; font-size: 12px; font-weight: 600; color: var(--text-muted, #9590B8); padding: 6px 0; }
        .cal-week { display: grid; grid-template-columns: repeat(7, 1fr); gap: 6px; margin-bottom: 6px; }
        .cal-cell {
            min-height: 118px; border: 1px solid #e5e7eb; border-radius: 10px;
            background: var(--white, #fff); padding: 6px 8px 8px;
            display: flex; flex-direction: column; gap: 4px;
        }
        .cal-cell--pad { background: var(--purple-pale, #EDE8FA); opacity: 0.45; border-color: transparent; min-height: 118px; cursor: default; }
        .cal-cell--today { border: 2px solid #7c3aed; box-shadow: 0 0 0 1px rgba(124,58,237,.12); }
        .cal-cell--today .cal-day-num { color: #7c3aed; font-weight: 700; }
        .cal-cell--has-events { border-color: #fdba74; }
        .cal-day-num { font-size: 13px; color: #374151; font-weight: 500; }
        .cal-day-num--sun { color: #7c3aed; font-weight: 600; }
        .cal-ev-stack { flex: 1; display: flex; flex-direction: column; gap: 4px; min-height: 0; overflow: hidden; }
        .cal-ev {
            font-size: 11px; line-height: 1.25; padding: 4px 6px; border-radius: 6px;
            border-left: 3px solid var(--evc, #6A5ACD);
            background: rgba(106, 90, 205, 0.08);
            word-break: break-word;
        }
        .cal-ev-title { display: block; font-weight: 600; }
        .cal-ev-time { display: block; font-size: 10px; opacity: 0.85; font-weight: 500; margin-top: 2px; }
        .cal-cell--holiday {
            background: linear-gradient(180deg, #fffbeb 0%, #fef3c7 100%) !important;
            border-color: #fcd34d;
        }
        .cal-holiday-name {
            font-size: 10px;
            font-weight: 600;
            color: #92400e;
            line-height: 1.2;
            margin-bottom: 2px;
        }
        @media (max-width: 900px) {
            .cal-head-row { grid-template-columns: 1fr; }
            .cal-nav { grid-column: 1; grid-row: auto; }
            .cal-export-wrap { grid-column: 1; justify-self: start; }
            .cal-weather { grid-column: 1; }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
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

        // line 130
        yield from $this->load("_planning_topbar.html.twig", 130)->unwrap()->yield($context);
        // line 131
        yield "<main class=\"page\">
<div id=\"evenement-calendar-root\"
     class=\"harmony-split-root cal-page\"
     data-calendar-year=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 134, $this->source); })()), "html", null, true);
        yield "\"
     data-edit-url-template=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => 888888888]), "html_attr");
        yield "\">
    <div class=\"harmony-split-main\">
        <div class=\"cal-head-row\">
            <div class=\"cal-title-block\">
                <h1>Calendrier</h1>
            </div>
            <details class=\"cal-export-wrap\">
                <summary class=\"cal-export-summary\">Exporter ▾</summary>
                <div class=\"cal-export-menu\">
                    <a href=\"#\" class=\"js-export-pdf\" data-type=\"pdf\">Exporter en PDF</a>
                    <a href=\"#\" class=\"js-export-excel\" data-type=\"excel\">Exporter en Excel</a>
                    <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_export_csv");
        yield "\">Télécharger CSV (legacy)</a>
                </div>
            </details>
            <div class=\"cal-nav\">
                <a class=\"cal-nav-btn\" href=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index", ["year" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 150, $this->source); })()), "Y"), "month" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 150, $this->source); })()), "n")]), "html", null, true);
        yield "\" aria-label=\"Mois précédent\">‹</a>
                <span class=\"cal-nav-title\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["monthLabel"]) || array_key_exists("monthLabel", $context) ? $context["monthLabel"] : (function () { throw new RuntimeError('Variable "monthLabel" does not exist.', 151, $this->source); })()), "html", null, true);
        yield "</span>
                <a class=\"cal-nav-btn\" href=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index", ["year" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 152, $this->source); })()), "Y"), "month" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 152, $this->source); })()), "n")]), "html", null, true);
        yield "\" aria-label=\"Mois suivant\">›</a>
            </div>
            <p class=\"cal-weather\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["weatherLine"]) || array_key_exists("weatherLine", $context) ? $context["weatherLine"] : (function () { throw new RuntimeError('Variable "weatherLine" does not exist.', 154, $this->source); })()), "html", null, true);
        yield "</p>
        </div>

        <div class=\"cal-grid-wrap\" id=\"cal-grid-root\">
            <div class=\"cal-dow-row\">
                ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"]);
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 160
            yield "                    <div class=\"cal-dow\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["d"], "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['d'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        yield "            </div>
            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["weeks"]) || array_key_exists("weeks", $context) ? $context["weeks"] : (function () { throw new RuntimeError('Variable "weeks" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["week"]) {
            // line 164
            yield "                <div class=\"cal-week\">
                    ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["week"]);
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 166
                yield "                        ";
                if ((null === $context["cell"])) {
                    // line 167
                    yield "                            <div class=\"cal-cell cal-cell--pad\" aria-hidden=\"true\"></div>
                        ";
                } else {
                    // line 169
                    yield "                            <div class=\"cal-cell";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "isToday", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " cal-cell--today";
                    }
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "events", [], "any", false, false, false, 169))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " cal-cell--has-events";
                    }
                    yield "\"
                                 data-iso-date=\"";
                    // line 170
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "date", [], "any", false, false, false, 170), "Y-m-d"), "html", null, true);
                    yield "\"
                                 role=\"button\"
                                 tabindex=\"0\"
                                 aria-label=\"Ajouter un événement le ";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "day", [], "any", false, false, false, 173), "html", null, true);
                    yield "\">
                                <span class=\"cal-day-num";
                    // line 174
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "isSunday", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " cal-day-num--sun";
                    }
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "day", [], "any", false, false, false, 174), "html", null, true);
                    yield "</span>
                                <div class=\"cal-ev-stack\">
                                    ";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "events", [], "any", false, false, false, 176));
                    foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
                        // line 177
                        yield "                                        <div class=\"cal-ev\" style=\"--evc: ";
                        yield $macros["evcal"]->getTemplateForMacro("macro_eventAccentColor", $context, 177, $this->getSourceContext())->macro_eventAccentColor(...[$context["ev"]]);
                        yield "\">
                                            <button type=\"button\"
                                                    class=\"cal-ev-open\"
                                                    data-id=\"";
                        // line 180
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 180), "html", null, true);
                        yield "\"
                                                    aria-label=\"Modifier ";
                        // line 181
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "titre", [], "any", true, true, false, 181) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "titre", [], "any", false, false, false, 181)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "titre", [], "any", false, false, false, 181)) : ("Sans titre")), "html_attr");
                        yield "\">
                                                <span class=\"cal-ev-title\">";
                        // line 182
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "titre", [], "any", true, true, false, 182) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "titre", [], "any", false, false, false, 182)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "titre", [], "any", false, false, false, 182), "html", null, true)) : ("Sans titre"));
                        yield "</span>
                                                ";
                        // line 183
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "dateDebut", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 184
                            yield "                                                    <span class=\"cal-ev-time\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "dateDebut", [], "any", false, false, false, 184), "H:i"), "html", null, true);
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "dateFin", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield " – ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "dateFin", [], "any", false, false, false, 184), "H:i"), "html", null, true);
                            }
                            yield "</span>
                                                ";
                        }
                        // line 186
                        yield "                                            </button>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 189
                    yield "                                </div>
                            </div>
                        ";
                }
                // line 192
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cell'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            yield "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['week'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "        </div>
    </div>

    <div id=\"harmony-panel-backdrop\" class=\"harmony-panel-backdrop\" aria-hidden=\"true\"></div>
    <aside id=\"harmony-side-panel\"
           class=\"harmony-side-panel\"
           role=\"dialog\"
           aria-modal=\"true\"
           aria-labelledby=\"harmony-panel-title\"
           aria-hidden=\"true\">
        <div class=\"harmony-panel-inner\">
            <h2 id=\"harmony-panel-title\" class=\"harmony-panel-title\">Nouvel événement</h2>
            <div id=\"harmony-panel-form-slot\"></div>
        </div>
    </aside>

    <template id=\"harmony-tpl-evenement-form-new\">
        ";
        // line 212
        yield from $this->load("evenement/_form_panel.html.twig", 212)->unwrap()->yield(CoreExtension::toArray(["form" => (isset($context["evenementFormNew"]) || array_key_exists("evenementFormNew", $context) ? $context["evenementFormNew"] : (function () { throw new RuntimeError('Variable "evenementFormNew" does not exist.', 212, $this->source); })()), "panel_mode" => "new"]));
        // line 213
        yield "    </template>
</div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 218
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascripts"));

        // line 219
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/js/cal-tunisia-holidays.js"), "html", null, true);
        yield "\" defer></script>
    <script src=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/js/evenement-form.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/js/export-handler.js"), "html", null, true);
        yield "\"></script>
    <script>
    (function () {
        var root = document.getElementById('evenement-calendar-root');
        if (!root) return;

        var backdrop = document.getElementById('harmony-panel-backdrop');
        var panel = document.getElementById('harmony-side-panel');
        var titleEl = document.getElementById('harmony-panel-title');
        var slot = document.getElementById('harmony-panel-form-slot');
        var tpl = document.getElementById('harmony-tpl-evenement-form-new');
        var grid = document.getElementById('cal-grid-root');
        var editTpl = root.getAttribute('data-edit-url-template') || '';

        function editUrl(id) {
            return editTpl.replace('888888888', String(id)) + '?panel=1';
        }

        function openPanel() {
            backdrop.classList.add('is-open');
            panel.classList.add('is-open');
            backdrop.setAttribute('aria-hidden', 'false');
            panel.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closePanel() {
            backdrop.classList.remove('is-open');
            panel.classList.remove('is-open');
            backdrop.setAttribute('aria-hidden', 'true');
            panel.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            if (slot) slot.innerHTML = '';
        }

        function bindCancel(scope) {
            var el = scope || document;
            el.querySelectorAll('.js-harmony-panel-cancel').forEach(function (btn) {
                btn.addEventListener('click', function () { closePanel(); });
            });
        }

        function bindAjaxForm(scope) {
            var form = scope.querySelector('#evenement-panel-form');
            if (!form) return;
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                fetch(form.getAttribute('action') || form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },
                    credentials: 'same-origin'
                }).then(function (res) {
                    var ct = (res.headers.get('Content-Type') || '').toLowerCase();
                    if (ct.indexOf('application/json') !== -1) {
                        return res.json().then(function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                                return;
                            }
                            if (data.ok === false && data.error) {
                                window.alert(data.error);
                            }
                        });
                    }
                    return res.text().then(function (html) {
                        if (!slot) return;
                        slot.innerHTML = html;
                        bindCancel(slot);
                        bindAjaxForm(slot);
                    });
                }).catch(function () {
                    window.alert('Une erreur réseau est survenue.');
                });
            });
            document.dispatchEvent(new CustomEvent('harmony:evenement-form-mounted', { detail: { root: scope } }));
        }

        function mountNewForm() {
            if (!slot || !tpl || !tpl.content) return;
            slot.innerHTML = '';
            slot.appendChild(tpl.content.cloneNode(true));
            var form = slot.querySelector('#evenement-panel-form');
            return form;
        }

        function setEvenementDates(form, isoDate) {
            if (!form || !isoDate) return;
            var d0 = isoDate + 'T09:00';
            var d1 = isoDate + 'T10:00';
            var i0 = form.querySelector('input[name=\"evenement[dateDebut]\"]');
            var i1 = form.querySelector('input[name=\"evenement[dateFin]\"]');
            if (i0) i0.value = d0;
            if (i1) i1.value = d1;
        }

        function openNew(isoDate) {
            if (titleEl) titleEl.textContent = 'Nouvel événement';
            var form = mountNewForm();
            if (form) {
                setEvenementDates(form, isoDate);
                bindCancel(slot);
                bindAjaxForm(slot);
            }
            openPanel();
        }

        function openEdit(id) {
            if (titleEl) titleEl.textContent = 'Modifier l’événement';
            if (!slot) return;
            slot.innerHTML = '<p style=\"color:#9590B8;font-size:14px;\">Chargement…</p>';
            openPanel();
            fetch(editUrl(id), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                credentials: 'same-origin'
            }).then(function (r) {
                if (!r.ok) throw new Error('HTTP ' + r.status);
                return r.text();
            }).then(function (html) {
                slot.innerHTML = html;
                bindCancel(slot);
                bindAjaxForm(slot);
            }).catch(function () {
                slot.innerHTML = '<p style=\"color:#dc2626;font-size:14px;\">Impossible de charger le formulaire.</p>';
            });
        }

        if (backdrop) {
            backdrop.addEventListener('click', function () { closePanel(); });
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && panel && panel.classList.contains('is-open')) {
                closePanel();
            }
        });

        if (grid) {
            grid.addEventListener('click', function (e) {
                var openEv = e.target.closest('.cal-ev-open');
                if (openEv) {
                    e.preventDefault();
                    e.stopPropagation();
                    var eid = openEv.getAttribute('data-id');
                    if (eid) openEdit(eid);
                    return;
                }
                if (e.target.closest('.cal-ev')) return;
                var cell = e.target.closest('.cal-cell[data-iso-date]');
                if (!cell) return;
                var iso = cell.getAttribute('data-iso-date');
                if (iso) openNew(iso);
            });

            grid.addEventListener('keydown', function (e) {
                if (e.key !== 'Enter' && e.key !== ' ') return;
                var cell = e.target.closest('.cal-cell[data-iso-date]');
                if (!cell) return;
                e.preventDefault();
                var iso = cell.getAttribute('data-iso-date');
                if (iso) openNew(iso);
            });
        }
    })();
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    public function macro_eventAccentColor($ev = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "ev" => $ev,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "eventAccentColor"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "eventAccentColor"));

            // line 4
            $context["et"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["ev"] ?? null), "eventType", [], "any", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 4, $this->source); })()), "eventType", [], "any", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 4, $this->source); })()), "eventType", [], "any", false, false, false, 4)) : ("")));
            // line 5
            if (((isset($context["et"]) || array_key_exists("et", $context) ? $context["et"] : (function () { throw new RuntimeError('Variable "et" does not exist.', 5, $this->source); })()) == "cours")) {
                yield "#2563eb";
            } elseif ((            // line 6
(isset($context["et"]) || array_key_exists("et", $context) ? $context["et"] : (function () { throw new RuntimeError('Variable "et" does not exist.', 6, $this->source); })()) == "reunion")) {
                yield "#7c3aed";
            } elseif ((            // line 7
(isset($context["et"]) || array_key_exists("et", $context) ? $context["et"] : (function () { throw new RuntimeError('Variable "et" does not exist.', 7, $this->source); })()) == "loisir")) {
                yield "#ea580c";
            } elseif ((            // line 8
(isset($context["et"]) || array_key_exists("et", $context) ? $context["et"] : (function () { throw new RuntimeError('Variable "et" does not exist.', 8, $this->source); })()) == "autre")) {
                yield "#6A5ACD";
            } else {
                // line 10
                $context["type"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["ev"] ?? null), "typeEvenement", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 10, $this->source); })()), "typeEvenement", [], "any", false, false, false, 10)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 10, $this->source); })()), "typeEvenement", [], "any", false, false, false, 10)) : ("")));
                // line 11
                if (CoreExtension::inFilter("COURS", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 11, $this->source); })()))) {
                    yield "#2563eb";
                } elseif ((CoreExtension::inFilter("REUNION",                 // line 12
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })())) || CoreExtension::inFilter("RÉUNION", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })())))) {
                    yield "#7c3aed";
                } elseif (CoreExtension::inFilter("LOISIR",                 // line 13
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 13, $this->source); })()))) {
                    yield "#ea580c";
                } elseif (CoreExtension::inFilter("EXAM",                 // line 14
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()))) {
                    yield "#dc2626";
                } else {
                    // line 15
                    yield "#6A5ACD";
                }
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
        return "evenement/index.html.twig";
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
        return array (  702 => 15,  698 => 14,  695 => 13,  692 => 12,  689 => 11,  687 => 10,  683 => 8,  680 => 7,  677 => 6,  674 => 5,  672 => 4,  654 => 3,  477 => 221,  473 => 220,  468 => 219,  455 => 218,  441 => 213,  439 => 212,  420 => 195,  413 => 193,  407 => 192,  402 => 189,  394 => 186,  384 => 184,  382 => 183,  378 => 182,  374 => 181,  370 => 180,  363 => 177,  359 => 176,  350 => 174,  346 => 173,  340 => 170,  330 => 169,  326 => 167,  323 => 166,  319 => 165,  316 => 164,  312 => 163,  309 => 162,  300 => 160,  296 => 159,  288 => 154,  283 => 152,  279 => 151,  275 => 150,  268 => 146,  254 => 135,  250 => 134,  245 => 131,  243 => 130,  230 => 129,  118 => 27,  114 => 26,  110 => 25,  105 => 24,  92 => 23,  69 => 21,  58 => 1,  56 => 19,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% macro eventAccentColor(ev) -%}
    {%- set et = (ev.eventType ?? '')|lower -%}
    {%- if et == 'cours' -%}#2563eb
    {%- elseif et == 'reunion' -%}#7c3aed
    {%- elseif et == 'loisir' -%}#ea580c
    {%- elseif et == 'autre' -%}#6A5ACD
    {%- else -%}
        {%- set type = (ev.typeEvenement ?? '')|upper -%}
        {%- if 'COURS' in type -%}#2563eb
        {%- elseif 'REUNION' in type or 'RÉUNION' in type -%}#7c3aed
        {%- elseif 'LOISIR' in type -%}#ea580c
        {%- elseif 'EXAM' in type -%}#dc2626
        {%- else -%}#6A5ACD
        {%- endif -%}
    {%- endif -%}
{%- endmacro %}
{% import _self as evcal %}

{% block title %}Calendrier — Événements{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('harmonie/css/harmony-theme.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('harmonie/css/harmony-forms.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('harmonie/css/harmony-panel.css') }}\" rel=\"stylesheet\">
    <style>
        .cal-page { max-width: 1100px; margin: 0 auto; }
        .cal-head-row {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: start;
            gap: 16px 24px;
            margin-bottom: 20px;
        }
        .cal-title-block { grid-column: 1; grid-row: 1; }
        .cal-title-block h1 {
            font-family: var(--font-head, 'Syne', sans-serif); font-weight: 800; font-size: 1.75rem;
            color: var(--text, #1C1733); letter-spacing: -0.02em; margin: 0;
        }
        .cal-weather { font-size: 13px; color: var(--text-muted, #9590B8); margin-top: 10px; grid-column: 1; grid-row: 2; }
        .cal-nav {
            display: flex; align-items: center; gap: 12px;
            justify-content: center;
            grid-column: 2;
            grid-row: 1 / span 2;
            align-self: center;
        }
        .cal-nav-btn {
            width: 40px; height: 36px; border-radius: 10px;
            border: 1px solid #e5e7eb; background: linear-gradient(180deg, #fafafa, #f3f4f6);
            color: var(--purple, #6A5ACD); font-size: 18px; font-weight: 700;
            cursor: pointer; text-decoration: none; display: grid; place-items: center;
        }
        .cal-nav-btn:hover { border-color: var(--purple-pale, #EDE8FA); background: var(--purple-pale, #EDE8FA); }
        .cal-nav-title { font-family: var(--font-head, 'Syne', sans-serif); font-weight: 700; font-size: 1.1rem; min-width: 160px; text-align: center; color: var(--text, #1C1733); }
        .cal-export-wrap { position: relative; grid-column: 3; grid-row: 1; justify-self: end; }
        .cal-export-summary {
            list-style: none; cursor: pointer;
            padding: 8px 16px; border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: linear-gradient(180deg, #fafafa, #f3f4f6);
            font-size: 13px; font-weight: 500; color: var(--text-mid, #4A4570);
        }
        .cal-export-summary::-webkit-details-marker { display: none; }
        .cal-export-menu {
            position: absolute; right: 0; top: calc(100% + 6px);
            background: var(--white, #fff); border: 1px solid var(--border, rgba(106,90,205,.12));
            border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,.08);
            min-width: 200px; padding: 6px; z-index: 50;
        }
        .cal-export-menu a {
            display: block; padding: 10px 12px; border-radius: 8px;
            color: var(--text, #1C1733); text-decoration: none; font-size: 14px;
        }
        .cal-export-menu a:hover { background: var(--purple-pale, #EDE8FA); color: var(--purple, #6A5ACD); }

        .cal-grid-wrap {
            background: var(--white, #fff); border: 1px solid var(--border, rgba(106,90,205,.12));
            border-radius: 18px; padding: 16px; box-shadow: 0 4px 24px rgba(106,90,205,.08);
        }
        .cal-dow-row {
            display: grid; grid-template-columns: repeat(7, 1fr);
            gap: 6px; margin-bottom: 8px;
        }
        .cal-dow { text-align: center; font-size: 12px; font-weight: 600; color: var(--text-muted, #9590B8); padding: 6px 0; }
        .cal-week { display: grid; grid-template-columns: repeat(7, 1fr); gap: 6px; margin-bottom: 6px; }
        .cal-cell {
            min-height: 118px; border: 1px solid #e5e7eb; border-radius: 10px;
            background: var(--white, #fff); padding: 6px 8px 8px;
            display: flex; flex-direction: column; gap: 4px;
        }
        .cal-cell--pad { background: var(--purple-pale, #EDE8FA); opacity: 0.45; border-color: transparent; min-height: 118px; cursor: default; }
        .cal-cell--today { border: 2px solid #7c3aed; box-shadow: 0 0 0 1px rgba(124,58,237,.12); }
        .cal-cell--today .cal-day-num { color: #7c3aed; font-weight: 700; }
        .cal-cell--has-events { border-color: #fdba74; }
        .cal-day-num { font-size: 13px; color: #374151; font-weight: 500; }
        .cal-day-num--sun { color: #7c3aed; font-weight: 600; }
        .cal-ev-stack { flex: 1; display: flex; flex-direction: column; gap: 4px; min-height: 0; overflow: hidden; }
        .cal-ev {
            font-size: 11px; line-height: 1.25; padding: 4px 6px; border-radius: 6px;
            border-left: 3px solid var(--evc, #6A5ACD);
            background: rgba(106, 90, 205, 0.08);
            word-break: break-word;
        }
        .cal-ev-title { display: block; font-weight: 600; }
        .cal-ev-time { display: block; font-size: 10px; opacity: 0.85; font-weight: 500; margin-top: 2px; }
        .cal-cell--holiday {
            background: linear-gradient(180deg, #fffbeb 0%, #fef3c7 100%) !important;
            border-color: #fcd34d;
        }
        .cal-holiday-name {
            font-size: 10px;
            font-weight: 600;
            color: #92400e;
            line-height: 1.2;
            margin-bottom: 2px;
        }
        @media (max-width: 900px) {
            .cal-head-row { grid-template-columns: 1fr; }
            .cal-nav { grid-column: 1; grid-row: auto; }
            .cal-export-wrap { grid-column: 1; justify-self: start; }
            .cal-weather { grid-column: 1; }
        }
    </style>
{% endblock %}

{% block body %}
{% include '_planning_topbar.html.twig' %}
<main class=\"page\">
<div id=\"evenement-calendar-root\"
     class=\"harmony-split-root cal-page\"
     data-calendar-year=\"{{ year }}\"
     data-edit-url-template=\"{{ path('app_evenement_edit', { id: 888888888 })|e('html_attr') }}\">
    <div class=\"harmony-split-main\">
        <div class=\"cal-head-row\">
            <div class=\"cal-title-block\">
                <h1>Calendrier</h1>
            </div>
            <details class=\"cal-export-wrap\">
                <summary class=\"cal-export-summary\">Exporter ▾</summary>
                <div class=\"cal-export-menu\">
                    <a href=\"#\" class=\"js-export-pdf\" data-type=\"pdf\">Exporter en PDF</a>
                    <a href=\"#\" class=\"js-export-excel\" data-type=\"excel\">Exporter en Excel</a>
                    <a href=\"{{ path('app_evenement_export_csv') }}\">Télécharger CSV (legacy)</a>
                </div>
            </details>
            <div class=\"cal-nav\">
                <a class=\"cal-nav-btn\" href=\"{{ path('app_evenement_index', { year: prev|date('Y'), month: prev|date('n') }) }}\" aria-label=\"Mois précédent\">‹</a>
                <span class=\"cal-nav-title\">{{ monthLabel }}</span>
                <a class=\"cal-nav-btn\" href=\"{{ path('app_evenement_index', { year: next|date('Y'), month: next|date('n') }) }}\" aria-label=\"Mois suivant\">›</a>
            </div>
            <p class=\"cal-weather\">{{ weatherLine }}</p>
        </div>

        <div class=\"cal-grid-wrap\" id=\"cal-grid-root\">
            <div class=\"cal-dow-row\">
                {% for d in ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'] %}
                    <div class=\"cal-dow\">{{ d }}</div>
                {% endfor %}
            </div>
            {% for week in weeks %}
                <div class=\"cal-week\">
                    {% for cell in week %}
                        {% if cell is null %}
                            <div class=\"cal-cell cal-cell--pad\" aria-hidden=\"true\"></div>
                        {% else %}
                            <div class=\"cal-cell{% if cell.isToday %} cal-cell--today{% endif %}{% if cell.events is not empty %} cal-cell--has-events{% endif %}\"
                                 data-iso-date=\"{{ cell.date|date('Y-m-d') }}\"
                                 role=\"button\"
                                 tabindex=\"0\"
                                 aria-label=\"Ajouter un événement le {{ cell.day }}\">
                                <span class=\"cal-day-num{% if cell.isSunday %} cal-day-num--sun{% endif %}\">{{ cell.day }}</span>
                                <div class=\"cal-ev-stack\">
                                    {% for ev in cell.events %}
                                        <div class=\"cal-ev\" style=\"--evc: {{ evcal.eventAccentColor(ev) }}\">
                                            <button type=\"button\"
                                                    class=\"cal-ev-open\"
                                                    data-id=\"{{ ev.id }}\"
                                                    aria-label=\"Modifier {{ (ev.titre ?? 'Sans titre')|e('html_attr') }}\">
                                                <span class=\"cal-ev-title\">{{ ev.titre ?? 'Sans titre' }}</span>
                                                {% if ev.dateDebut %}
                                                    <span class=\"cal-ev-time\">{{ ev.dateDebut|date('H:i') }}{% if ev.dateFin %} – {{ ev.dateFin|date('H:i') }}{% endif %}</span>
                                                {% endif %}
                                            </button>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            {% endfor %}
        </div>
    </div>

    <div id=\"harmony-panel-backdrop\" class=\"harmony-panel-backdrop\" aria-hidden=\"true\"></div>
    <aside id=\"harmony-side-panel\"
           class=\"harmony-side-panel\"
           role=\"dialog\"
           aria-modal=\"true\"
           aria-labelledby=\"harmony-panel-title\"
           aria-hidden=\"true\">
        <div class=\"harmony-panel-inner\">
            <h2 id=\"harmony-panel-title\" class=\"harmony-panel-title\">Nouvel événement</h2>
            <div id=\"harmony-panel-form-slot\"></div>
        </div>
    </aside>

    <template id=\"harmony-tpl-evenement-form-new\">
        {% include 'evenement/_form_panel.html.twig' with { form: evenementFormNew, panel_mode: 'new' } only %}
    </template>
</div>
</main>
{% endblock %}

{% block body_javascripts %}
    <script src=\"{{ asset('harmonie/js/cal-tunisia-holidays.js') }}\" defer></script>
    <script src=\"{{ asset('harmonie/js/evenement-form.js') }}\"></script>
    <script src=\"{{ asset('harmonie/js/export-handler.js') }}\"></script>
    <script>
    (function () {
        var root = document.getElementById('evenement-calendar-root');
        if (!root) return;

        var backdrop = document.getElementById('harmony-panel-backdrop');
        var panel = document.getElementById('harmony-side-panel');
        var titleEl = document.getElementById('harmony-panel-title');
        var slot = document.getElementById('harmony-panel-form-slot');
        var tpl = document.getElementById('harmony-tpl-evenement-form-new');
        var grid = document.getElementById('cal-grid-root');
        var editTpl = root.getAttribute('data-edit-url-template') || '';

        function editUrl(id) {
            return editTpl.replace('888888888', String(id)) + '?panel=1';
        }

        function openPanel() {
            backdrop.classList.add('is-open');
            panel.classList.add('is-open');
            backdrop.setAttribute('aria-hidden', 'false');
            panel.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closePanel() {
            backdrop.classList.remove('is-open');
            panel.classList.remove('is-open');
            backdrop.setAttribute('aria-hidden', 'true');
            panel.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            if (slot) slot.innerHTML = '';
        }

        function bindCancel(scope) {
            var el = scope || document;
            el.querySelectorAll('.js-harmony-panel-cancel').forEach(function (btn) {
                btn.addEventListener('click', function () { closePanel(); });
            });
        }

        function bindAjaxForm(scope) {
            var form = scope.querySelector('#evenement-panel-form');
            if (!form) return;
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                fetch(form.getAttribute('action') || form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },
                    credentials: 'same-origin'
                }).then(function (res) {
                    var ct = (res.headers.get('Content-Type') || '').toLowerCase();
                    if (ct.indexOf('application/json') !== -1) {
                        return res.json().then(function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                                return;
                            }
                            if (data.ok === false && data.error) {
                                window.alert(data.error);
                            }
                        });
                    }
                    return res.text().then(function (html) {
                        if (!slot) return;
                        slot.innerHTML = html;
                        bindCancel(slot);
                        bindAjaxForm(slot);
                    });
                }).catch(function () {
                    window.alert('Une erreur réseau est survenue.');
                });
            });
            document.dispatchEvent(new CustomEvent('harmony:evenement-form-mounted', { detail: { root: scope } }));
        }

        function mountNewForm() {
            if (!slot || !tpl || !tpl.content) return;
            slot.innerHTML = '';
            slot.appendChild(tpl.content.cloneNode(true));
            var form = slot.querySelector('#evenement-panel-form');
            return form;
        }

        function setEvenementDates(form, isoDate) {
            if (!form || !isoDate) return;
            var d0 = isoDate + 'T09:00';
            var d1 = isoDate + 'T10:00';
            var i0 = form.querySelector('input[name=\"evenement[dateDebut]\"]');
            var i1 = form.querySelector('input[name=\"evenement[dateFin]\"]');
            if (i0) i0.value = d0;
            if (i1) i1.value = d1;
        }

        function openNew(isoDate) {
            if (titleEl) titleEl.textContent = 'Nouvel événement';
            var form = mountNewForm();
            if (form) {
                setEvenementDates(form, isoDate);
                bindCancel(slot);
                bindAjaxForm(slot);
            }
            openPanel();
        }

        function openEdit(id) {
            if (titleEl) titleEl.textContent = 'Modifier l’événement';
            if (!slot) return;
            slot.innerHTML = '<p style=\"color:#9590B8;font-size:14px;\">Chargement…</p>';
            openPanel();
            fetch(editUrl(id), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                credentials: 'same-origin'
            }).then(function (r) {
                if (!r.ok) throw new Error('HTTP ' + r.status);
                return r.text();
            }).then(function (html) {
                slot.innerHTML = html;
                bindCancel(slot);
                bindAjaxForm(slot);
            }).catch(function () {
                slot.innerHTML = '<p style=\"color:#dc2626;font-size:14px;\">Impossible de charger le formulaire.</p>';
            });
        }

        if (backdrop) {
            backdrop.addEventListener('click', function () { closePanel(); });
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && panel && panel.classList.contains('is-open')) {
                closePanel();
            }
        });

        if (grid) {
            grid.addEventListener('click', function (e) {
                var openEv = e.target.closest('.cal-ev-open');
                if (openEv) {
                    e.preventDefault();
                    e.stopPropagation();
                    var eid = openEv.getAttribute('data-id');
                    if (eid) openEdit(eid);
                    return;
                }
                if (e.target.closest('.cal-ev')) return;
                var cell = e.target.closest('.cal-cell[data-iso-date]');
                if (!cell) return;
                var iso = cell.getAttribute('data-iso-date');
                if (iso) openNew(iso);
            });

            grid.addEventListener('keydown', function (e) {
                if (e.key !== 'Enter' && e.key !== ' ') return;
                var cell = e.target.closest('.cal-cell[data-iso-date]');
                if (!cell) return;
                e.preventDefault();
                var iso = cell.getAttribute('data-iso-date');
                if (iso) openNew(iso);
            });
        }
    })();
    </script>
{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\user\\Downloads\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\templates\\evenement\\index.html.twig");
    }
}

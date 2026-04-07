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

/* tache/_form_panel.html.twig */
class __TwigTemplate_d1c2afc011e98e9b5f8711ae3938f2b8 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/_form_panel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/_form_panel.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["form_div_layout.html.twig"], true);
        // line 2
        if (((((isset($context["panel_mode"]) || array_key_exists("panel_mode", $context) ? $context["panel_mode"] : (function () { throw new RuntimeError('Variable "panel_mode" does not exist.', 2, $this->source); })()) == "edit") && array_key_exists("entity", $context)) && (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "    ";
            $context["form_action"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]);
        } else {
            // line 5
            yield "    ";
            $context["form_action"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
        }
        // line 7
        yield "
";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["action" =>         // line 9
(isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 9, $this->source); })()), "attr" => ["class" => "harmony-panel-form harmony-form", "id" => "tache-panel-form", "autocomplete" => "off"]]);
        // line 15
        yield "
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'errors');
        yield "

    <div class=\"harmony-panel-visible-fields\">
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'row', ["label" => "Nom de la tâche"]);
        yield "
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "deadline", [], "any", false, false, false, 20), 'row', ["label" => "Deadline"]);
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "notes", [], "any", false, false, false, 21), 'row', ["attr" => ["rows" => 3]]);
        yield "
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "statutTache", [], "any", false, false, false, 22), 'row', ["label" => "Statut"]);
        yield "
    </div>

    <div class=\"harmony-panel-sr-hidden\" aria-hidden=\"true\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 27
            yield "            ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 27) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27) != "submit"))) {
                // line 28
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                yield "
            ";
            }
            // line 30
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "    </div>

    <div class=\"harmony-panel-actions\">
        <button type=\"button\" class=\"harmony-panel-cancel js-harmony-panel-cancel\">Annuler</button>
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "submit", [], "any", false, false, false, 35), 'row', ["label" => "Enregistrer", "attr" => ["class" => "harmony-panel-submit harmony-btn-submit"]]);
        // line 38
        yield "
    </div>
";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tache/_form_panel.html.twig";
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
        return array (  125 => 40,  121 => 38,  119 => 35,  113 => 31,  107 => 30,  101 => 28,  98 => 27,  94 => 26,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  69 => 16,  66 => 15,  64 => 9,  63 => 8,  60 => 7,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% form_theme form 'form_div_layout.html.twig' %}
{% if panel_mode == 'edit' and entity is defined and entity %}
    {% set form_action = path('app_tache_edit', { id: entity.id }) %}
{% else %}
    {% set form_action = path('app_tache_new') %}
{% endif %}

{{ form_start(form, {
    action: form_action,
    attr: {
        class: 'harmony-panel-form harmony-form',
        id: 'tache-panel-form',
        autocomplete: 'off'
    }
}) }}
    {{ form_errors(form) }}

    <div class=\"harmony-panel-visible-fields\">
        {{ form_row(form.nom, { label: 'Nom de la tâche' }) }}
        {{ form_row(form.deadline, { label: 'Deadline' }) }}
        {{ form_row(form.notes, { attr: { rows: 3 } }) }}
        {{ form_row(form.statutTache, { label: 'Statut' }) }}
    </div>

    <div class=\"harmony-panel-sr-hidden\" aria-hidden=\"true\">
        {% for child in form %}
            {% if not child.rendered and child.vars.name != 'submit' %}
                {{ form_row(child) }}
            {% endif %}
        {% endfor %}
    </div>

    <div class=\"harmony-panel-actions\">
        <button type=\"button\" class=\"harmony-panel-cancel js-harmony-panel-cancel\">Annuler</button>
        {{ form_row(form.submit, {
            label: 'Enregistrer',
            attr: { class: 'harmony-panel-submit harmony-btn-submit' }
        }) }}
    </div>
{{ form_end(form, { render_rest: false }) }}
", "tache/_form_panel.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/tache/_form_panel.html.twig");
    }
}

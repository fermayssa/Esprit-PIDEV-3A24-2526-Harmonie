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

/* evenement/_form_panel.html.twig */
class __TwigTemplate_84577d98b981825ec3354c71e67503f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form_panel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form_panel.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["form_div_layout.html.twig"], true);
        // line 2
        if (((((isset($context["panel_mode"]) || array_key_exists("panel_mode", $context) ? $context["panel_mode"] : (function () { throw new RuntimeError('Variable "panel_mode" does not exist.', 2, $this->source); })()) == "edit") && array_key_exists("entity", $context)) && (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "    ";
            $context["form_action"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]);
        } else {
            // line 5
            yield "    ";
            $context["form_action"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        }
        // line 7
        yield "
";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["action" =>         // line 9
(isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 9, $this->source); })()), "attr" => ["class" => "evenement-form harmony-panel-form", "id" => "evenement-panel-form", "autocomplete" => "off", "novalidate" => "novalidate", "data-api-salles" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_salles_api")]]);
        // line 17
        yield "

    <div class=\"mb-3\">
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), 'label');
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), 'widget');
        yield "
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "dateDebut", [], "any", false, false, false, 26), 'label');
        yield "
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "dateDebut", [], "any", false, false, false, 27), 'widget');
        yield "
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dateDebut", [], "any", false, false, false, 28), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateFin", [], "any", false, false, false, 32), 'label');
        yield "
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "dateFin", [], "any", false, false, false, 33), 'widget');
        yield "
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "dateFin", [], "any", false, false, false, 34), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "eventType", [], "any", false, false, false, 38), 'label');
        yield "
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "eventType", [], "any", false, false, false, 39), 'widget');
        yield "
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "eventType", [], "any", false, false, false, 40), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        <div class=\"form-check\">
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "rappelActif", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "rappelActif", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
        </div>
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "rappelActif", [], "any", false, false, false, 48), 'help');
        yield "
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "rappelActif", [], "any", false, false, false, 49), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "reminderMinutes", [], "any", false, false, false, 53), 'label');
        yield "
        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "reminderMinutes", [], "any", false, false, false, 54), 'widget');
        yield "
        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "reminderMinutes", [], "any", false, false, false, 55), 'help');
        yield "
        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "reminderMinutes", [], "any", false, false, false, 56), 'errors');
        yield "
    </div>

    <!-- Conteneur pour les boutons Présentiel/En ligne : apparaît si Cours ou Réunion -->
    <div class=\"js-lieu-buttons-container\" style=\"display: none;\">
        <div class=\"mb-3\">
            <label class=\"form-label\">Mode</label>
            <div class=\"btn-group\" role=\"group\">
                ";
        // line 64
        $context["lieuTypeValue"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "lieuType", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "data", [], "any", false, false, false, 64);
        // line 65
        yield "                <input type=\"radio\" class=\"btn-check js-lieu-button\" id=\"lieu_presentiel\" name=\"evenement[lieuType]\" value=\"presentiel\" ";
        if (((isset($context["lieuTypeValue"]) || array_key_exists("lieuTypeValue", $context) ? $context["lieuTypeValue"] : (function () { throw new RuntimeError('Variable "lieuTypeValue" does not exist.', 65, $this->source); })()) == "presentiel")) {
            yield "checked";
        }
        yield ">
                <label class=\"btn btn-outline-primary\" for=\"lieu_presentiel\">Présentiel</label>

                <input type=\"radio\" class=\"btn-check js-lieu-button\" id=\"lieu_enligne\" name=\"evenement[lieuType]\" value=\"en_ligne\" ";
        // line 68
        if (((isset($context["lieuTypeValue"]) || array_key_exists("lieuTypeValue", $context) ? $context["lieuTypeValue"] : (function () { throw new RuntimeError('Variable "lieuTypeValue" does not exist.', 68, $this->source); })()) == "en_ligne")) {
            yield "checked";
        }
        yield ">
                <label class=\"btn btn-outline-primary\" for=\"lieu_enligne\">En ligne</label>
            </div>
        </div>
        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "lieuType", [], "any", false, false, false, 72), 'errors');
        yield "
    </div>

    <!-- Conteneur pour le champ \"Où ?\" libre : apparaît si Loisir ou Autre -->
    <div class=\"js-lieu-free-container\" style=\"display: none;\">
        <div class=\"mb-3\">
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 78), 'label');
        yield "
            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 79), 'widget');
        yield "
            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 80), 'errors');
        yield "
        </div>
    </div>

    <!-- Conteneur pour le champ \"Où ?\" et le select salle : apparaît si Cours/Réunion + Présentiel -->
    <div class=\"js-lieu-presentiel-container\" style=\"display: none;\">
        <div class=\"mb-3\">
            <label class=\"form-label\">Où ?</label>
            <input 
                type=\"text\" 
                class=\"form-control js-lieu-adresse\" 
                name=\"evenement[lieuAdresse]\" 
                placeholder=\"Adresse, campus, ou tapez &quot;esprit&quot; pour les salles…\"
                data-toggle-salles=\"true\"
            >
        </div>

        <!-- Select des salles : apparaît si l'input contient \"esprit\" -->
        <div class=\"js-salle-select-container\" style=\"display: none;\">
            <div class=\"mb-3\">
                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "salle", [], "any", false, false, false, 100), 'label');
        yield "
                ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "salle", [], "any", false, false, false, 101), 'widget');
        yield "
                ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "salle", [], "any", false, false, false, 102), 'errors');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'errors');
        yield "

    <div class=\"harmony-panel-actions\">
        <button type=\"button\" class=\"harmony-panel-cancel js-harmony-panel-cancel\">Annuler</button>
        ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "submit", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "btn btn-primary harmony-panel-submit"]]);
        yield "
    </div>

";
        // line 114
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), 'form_end');
        yield "

<script src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/js/evenement-form.js"), "html", null, true);
        yield "\"></script>

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
        return "evenement/_form_panel.html.twig";
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
        return array (  269 => 116,  264 => 114,  258 => 111,  251 => 107,  243 => 102,  239 => 101,  235 => 100,  212 => 80,  208 => 79,  204 => 78,  195 => 72,  186 => 68,  177 => 65,  175 => 64,  164 => 56,  160 => 55,  156 => 54,  152 => 53,  145 => 49,  141 => 48,  136 => 46,  132 => 45,  124 => 40,  120 => 39,  116 => 38,  109 => 34,  105 => 33,  101 => 32,  94 => 28,  90 => 27,  86 => 26,  79 => 22,  75 => 21,  71 => 20,  66 => 17,  64 => 9,  63 => 8,  60 => 7,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% form_theme form 'form_div_layout.html.twig' %}
{% if panel_mode == 'edit' and entity is defined and entity %}
    {% set form_action = path('app_evenement_edit', { id: entity.id }) %}
{% else %}
    {% set form_action = path('app_evenement_new') %}
{% endif %}

{{ form_start(form, {
    action: form_action,
    attr: {
        class: 'evenement-form harmony-panel-form',
        id: 'evenement-panel-form',
        autocomplete: 'off',
        novalidate: 'novalidate',
        'data-api-salles': path('app_evenement_salles_api')
    }
}) }}

    <div class=\"mb-3\">
        {{ form_label(form.titre) }}
        {{ form_widget(form.titre) }}
        {{ form_errors(form.titre) }}
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.dateDebut) }}
        {{ form_widget(form.dateDebut) }}
        {{ form_errors(form.dateDebut) }}
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.dateFin) }}
        {{ form_widget(form.dateFin) }}
        {{ form_errors(form.dateFin) }}
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.eventType) }}
        {{ form_widget(form.eventType) }}
        {{ form_errors(form.eventType) }}
    </div>

    <div class=\"mb-3\">
        <div class=\"form-check\">
            {{ form_widget(form.rappelActif, {'attr': {'class': 'form-check-input'}}) }}
            {{ form_label(form.rappelActif, null, {'label_attr': {'class': 'form-check-label'}}) }}
        </div>
        {{ form_help(form.rappelActif) }}
        {{ form_errors(form.rappelActif) }}
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.reminderMinutes) }}
        {{ form_widget(form.reminderMinutes) }}
        {{ form_help(form.reminderMinutes) }}
        {{ form_errors(form.reminderMinutes) }}
    </div>

    <!-- Conteneur pour les boutons Présentiel/En ligne : apparaît si Cours ou Réunion -->
    <div class=\"js-lieu-buttons-container\" style=\"display: none;\">
        <div class=\"mb-3\">
            <label class=\"form-label\">Mode</label>
            <div class=\"btn-group\" role=\"group\">
                {% set lieuTypeValue = form.lieuType.vars.data %}
                <input type=\"radio\" class=\"btn-check js-lieu-button\" id=\"lieu_presentiel\" name=\"evenement[lieuType]\" value=\"presentiel\" {% if lieuTypeValue == 'presentiel' %}checked{% endif %}>
                <label class=\"btn btn-outline-primary\" for=\"lieu_presentiel\">Présentiel</label>

                <input type=\"radio\" class=\"btn-check js-lieu-button\" id=\"lieu_enligne\" name=\"evenement[lieuType]\" value=\"en_ligne\" {% if lieuTypeValue == 'en_ligne' %}checked{% endif %}>
                <label class=\"btn btn-outline-primary\" for=\"lieu_enligne\">En ligne</label>
            </div>
        </div>
        {{ form_errors(form.lieuType) }}
    </div>

    <!-- Conteneur pour le champ \"Où ?\" libre : apparaît si Loisir ou Autre -->
    <div class=\"js-lieu-free-container\" style=\"display: none;\">
        <div class=\"mb-3\">
            {{ form_label(form.lieuAdresse) }}
            {{ form_widget(form.lieuAdresse) }}
            {{ form_errors(form.lieuAdresse) }}
        </div>
    </div>

    <!-- Conteneur pour le champ \"Où ?\" et le select salle : apparaît si Cours/Réunion + Présentiel -->
    <div class=\"js-lieu-presentiel-container\" style=\"display: none;\">
        <div class=\"mb-3\">
            <label class=\"form-label\">Où ?</label>
            <input 
                type=\"text\" 
                class=\"form-control js-lieu-adresse\" 
                name=\"evenement[lieuAdresse]\" 
                placeholder=\"Adresse, campus, ou tapez &quot;esprit&quot; pour les salles…\"
                data-toggle-salles=\"true\"
            >
        </div>

        <!-- Select des salles : apparaît si l'input contient \"esprit\" -->
        <div class=\"js-salle-select-container\" style=\"display: none;\">
            <div class=\"mb-3\">
                {{ form_label(form.salle) }}
                {{ form_widget(form.salle) }}
                {{ form_errors(form.salle) }}
            </div>
        </div>
    </div>

    {{ form_errors(form) }}

    <div class=\"harmony-panel-actions\">
        <button type=\"button\" class=\"harmony-panel-cancel js-harmony-panel-cancel\">Annuler</button>
        {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary harmony-panel-submit'}}) }}
    </div>

{{ form_end(form) }}

<script src=\"{{ asset('harmonie/js/evenement-form.js') }}\"></script>

", "evenement/_form_panel.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/evenement/_form_panel.html.twig");
    }
}

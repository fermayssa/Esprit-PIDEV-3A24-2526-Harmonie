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
class __TwigTemplate_f9df848b74fedc4b04395c16ead2ae41 extends Template
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

    <!-- Conteneur pour les boutons Présentiel/En ligne : apparaît si Cours ou Réunion -->
    <div class=\"js-lieu-buttons-container\" style=\"display: none;\">
        <div class=\"mb-3\">
            <label class=\"form-label\">Mode</label>
            <div class=\"btn-group\" role=\"group\">
                ";
        // line 48
        $context["lieuTypeValue"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "lieuType", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "data", [], "any", false, false, false, 48);
        // line 49
        yield "                <input type=\"radio\" class=\"btn-check js-lieu-button\" id=\"lieu_presentiel\" name=\"evenement[lieuType]\" value=\"presentiel\" ";
        if (((isset($context["lieuTypeValue"]) || array_key_exists("lieuTypeValue", $context) ? $context["lieuTypeValue"] : (function () { throw new RuntimeError('Variable "lieuTypeValue" does not exist.', 49, $this->source); })()) == "presentiel")) {
            yield "checked";
        }
        yield ">
                <label class=\"btn btn-outline-primary\" for=\"lieu_presentiel\">Présentiel</label>

                <input type=\"radio\" class=\"btn-check js-lieu-button\" id=\"lieu_enligne\" name=\"evenement[lieuType]\" value=\"en_ligne\" ";
        // line 52
        if (((isset($context["lieuTypeValue"]) || array_key_exists("lieuTypeValue", $context) ? $context["lieuTypeValue"] : (function () { throw new RuntimeError('Variable "lieuTypeValue" does not exist.', 52, $this->source); })()) == "en_ligne")) {
            yield "checked";
        }
        yield ">
                <label class=\"btn btn-outline-primary\" for=\"lieu_enligne\">En ligne</label>
            </div>
        </div>
        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "lieuType", [], "any", false, false, false, 56), 'errors');
        yield "
    </div>

    <!-- Conteneur pour le champ \"Où ?\" libre : apparaît si Loisir ou Autre -->
    <div class=\"js-lieu-free-container\" style=\"display: none;\">
        <div class=\"mb-3\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 62), 'label');
        yield "
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 63), 'widget');
        yield "
            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 64), 'errors');
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
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "salle", [], "any", false, false, false, 84), 'label');
        yield "
                ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "salle", [], "any", false, false, false, 85), 'widget');
        yield "
                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "salle", [], "any", false, false, false, 86), 'errors');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'errors');
        yield "

    <div class=\"harmony-panel-actions\">
        <button type=\"button\" class=\"harmony-panel-cancel js-harmony-panel-cancel\">Annuler</button>
        ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "submit", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "btn btn-primary harmony-panel-submit"]]);
        yield "
    </div>

";
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
        yield "

<script src=\"";
        // line 100
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
        return array (  229 => 100,  224 => 98,  218 => 95,  211 => 91,  203 => 86,  199 => 85,  195 => 84,  172 => 64,  168 => 63,  164 => 62,  155 => 56,  146 => 52,  137 => 49,  135 => 48,  124 => 40,  120 => 39,  116 => 38,  109 => 34,  105 => 33,  101 => 32,  94 => 28,  90 => 27,  86 => 26,  79 => 22,  75 => 21,  71 => 20,  66 => 17,  64 => 9,  63 => 8,  60 => 7,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
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

", "evenement/_form_panel.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/evenement/_form_panel.html.twig");
    }
}

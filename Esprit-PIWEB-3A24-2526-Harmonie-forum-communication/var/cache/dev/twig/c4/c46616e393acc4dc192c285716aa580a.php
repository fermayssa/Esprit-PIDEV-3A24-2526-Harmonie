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

/* evenement/_form.html.twig */
class __TwigTemplate_dda0547769a89171a9307586ad6c3d9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["form_div_layout.html.twig"], true);
        // line 2
        yield "
<form method=\"POST\" class=\"evenement-form\" data-api-salles=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_salles_api");
        yield "\">
    ";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    <div class=\"mb-3\">
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), 'label');
        yield "
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), 'widget');
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "dateDebut", [], "any", false, false, false, 13), 'label');
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "dateDebut", [], "any", false, false, false, 14), 'widget');
        yield "
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "dateDebut", [], "any", false, false, false, 15), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "dateFin", [], "any", false, false, false, 19), 'label');
        yield "
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "dateFin", [], "any", false, false, false, 20), 'widget');
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "dateFin", [], "any", false, false, false, 21), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "eventType", [], "any", false, false, false, 25), 'label');
        yield "
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "eventType", [], "any", false, false, false, 26), 'widget');
        yield "
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "eventType", [], "any", false, false, false, 27), 'errors');
        yield "
    </div>

    <!-- Conteneur pour les boutons Présentiel/En ligne : apparaît si Cours ou Réunion -->
    <div class=\"js-lieu-buttons-container\" style=\"display: none;\">
        <div class=\"mb-3\">
            <label class=\"form-label\">Mode</label>
            <div class=\"btn-group\" role=\"group\">
                ";
        // line 35
        $context["lieuTypeValue"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "lieuType", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "data", [], "any", false, false, false, 35);
        // line 36
        yield "                <input type=\"radio\" class=\"btn-check js-lieu-button\" id=\"lieu_presentiel\" name=\"evenement[lieuType]\" value=\"presentiel\" ";
        if (((isset($context["lieuTypeValue"]) || array_key_exists("lieuTypeValue", $context) ? $context["lieuTypeValue"] : (function () { throw new RuntimeError('Variable "lieuTypeValue" does not exist.', 36, $this->source); })()) == "presentiel")) {
            yield "checked";
        }
        yield ">
                <label class=\"btn btn-outline-primary\" for=\"lieu_presentiel\">Présentiel</label>

                <input type=\"radio\" class=\"btn-check js-lieu-button\" id=\"lieu_enligne\" name=\"evenement[lieuType]\" value=\"en_ligne\" ";
        // line 39
        if (((isset($context["lieuTypeValue"]) || array_key_exists("lieuTypeValue", $context) ? $context["lieuTypeValue"] : (function () { throw new RuntimeError('Variable "lieuTypeValue" does not exist.', 39, $this->source); })()) == "en_ligne")) {
            yield "checked";
        }
        yield ">
                <label class=\"btn btn-outline-primary\" for=\"lieu_enligne\">En ligne</label>
            </div>
        </div>
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "lieuType", [], "any", false, false, false, 43), 'errors');
        yield "
    </div>

    <!-- Conteneur pour le champ \"Où ?\" libre : apparaît si Loisir ou Autre -->
    <div class=\"js-lieu-free-container\" style=\"display: none;\">
        <div class=\"mb-3\">
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 49), 'label');
        yield "
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 50), 'widget');
        yield "
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "lieuAdresse", [], "any", false, false, false, 51), 'errors');
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
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "salle", [], "any", false, false, false, 71), 'label');
        yield "
                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "salle", [], "any", false, false, false, 72), 'widget');
        yield "
                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "salle", [], "any", false, false, false, 73), 'errors');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'errors');
        yield "

    <div class=\"d-grid gap-2\">
        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "submit", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "btn btn-primary btn-lg"]]);
        yield "
    </div>

    <!-- Champs restants non rendus (lieuType, etc.) -->
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 86
            yield "        ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 86) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86) != "submit"))) {
                // line 87
                yield "            <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 87), "data", [], "any", false, false, false, 87), "html", null, true);
                yield "\">
        ";
            }
            // line 89
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "
    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        yield "
</form>

<script src=\"";
        // line 94
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
        return "evenement/_form.html.twig";
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
        return array (  246 => 94,  240 => 91,  237 => 90,  231 => 89,  223 => 87,  220 => 86,  216 => 85,  209 => 81,  203 => 78,  195 => 73,  191 => 72,  187 => 71,  164 => 51,  160 => 50,  156 => 49,  147 => 43,  138 => 39,  129 => 36,  127 => 35,  116 => 27,  112 => 26,  108 => 25,  101 => 21,  97 => 20,  93 => 19,  86 => 15,  82 => 14,  78 => 13,  71 => 9,  67 => 8,  63 => 7,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% form_theme form 'form_div_layout.html.twig' %}

<form method=\"POST\" class=\"evenement-form\" data-api-salles=\"{{ path('app_evenement_salles_api') }}\">
    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

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

    <div class=\"d-grid gap-2\">
        {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary btn-lg'}}) }}
    </div>

    <!-- Champs restants non rendus (lieuType, etc.) -->
    {% for child in form %}
        {% if not child.rendered and child.vars.name != 'submit' %}
            <input type=\"hidden\" name=\"{{ child.vars.name }}\" value=\"{{ child.vars.data }}\">
        {% endif %}
    {% endfor %}

    {{ form_end(form) }}
</form>

<script src=\"{{ asset('harmonie/js/evenement-form.js') }}\"></script>
", "evenement/_form.html.twig", "C:\\Users\\user\\Downloads\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\templates\\evenement\\_form.html.twig");
    }
}

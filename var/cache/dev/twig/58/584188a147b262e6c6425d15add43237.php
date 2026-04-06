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

/* _planning_topbar.html.twig */
class __TwigTemplate_0a1e27265fa3756f5cee4a454a01d2bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_planning_topbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_planning_topbar.html.twig"));

        // line 1
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1);
        // line 2
        yield "<header class=\"topbar\">
    <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
        <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
    </a>

    <nav class=\"nav-links\">
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\"   class=\"nav-link ";
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 8, $this->source); })()) == "activites")) {
            yield "active";
        }
        yield "\"><span class=\"nav-emoji\">🏋</span> Activités</a>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\"       class=\"nav-link ";
        if ((is_string($_v0 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 9, $this->source); })())) && is_string($_v1 = "forum") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\"><span class=\"nav-emoji\">💬</span> Forum</a>
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\"      class=\"nav-link ";
        if (((is_string($_v2 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 10, $this->source); })())) && is_string($_v3 = "app_tache") && str_starts_with($_v2, $_v3)) || ((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 10, $this->source); })()) == "taches"))) {
            yield "active";
        }
        yield "\"><span class=\"nav-emoji\">📚</span> Tâches</a>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\"  class=\"nav-link ";
        if (((is_string($_v4 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 11, $this->source); })())) && is_string($_v5 = "app_evenement") && str_starts_with($_v4, $_v5)) || ((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 11, $this->source); })()) == "evenements"))) {
            yield "active";
        }
        yield "\"><span class=\"nav-emoji\">📅</span> Événements</a>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\"   class=\"nav-link ";
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 12, $this->source); })()) == "nutrition")) {
            yield "active";
        }
        yield "\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\"  class=\"nav-link ";
        if ((is_string($_v6 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 13, $this->source); })())) && is_string($_v7 = "meditation") && str_starts_with($_v6, $_v7))) {
            yield "active";
        }
        yield "\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\"     class=\"nav-link ";
        if ((is_string($_v8 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 14, $this->source); })())) && is_string($_v9 = "journal") && str_starts_with($_v8, $_v9))) {
            yield "active";
        }
        yield "\"><span class=\"nav-emoji\">📔</span> Journal</a>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\"     class=\"nav-link ";
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 15, $this->source); })()) == "library")) {
            yield "active";
        }
        yield "\"><span class=\"nav-emoji\">📖</span> Library</a>
    </nav>

    <div class=\"topbar-right\">
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout-btn\" style=\"text-decoration:none;\">🚪 Déconnexion</a>

        <div class=\"profile-wrap\">
            <div class=\"avatar\" id=\"avatarBtn\">
                ";
        // line 23
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "firstName", [], "any", false, false, false, 23))), "html", null, true)) : ("E"));
        yield "
            </div>
            <div class=\"profile-dropdown\" id=\"profileDropdown\">
                <div class=\"pd-name\">";
        // line 26
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "firstName", [], "any", false, false, false, 26) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "lastName", [], "any", false, false, false, 26)), "html", null, true)) : ("Étudiant"));
        yield "</div>
                <div class=\"pd-email\">";
        // line 27
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), "html", null, true)) : ("email@exemple.com"));
        yield "</div>
                <div class=\"pd-divider\"></div>
                <div class=\"pd-hint\">Double-clic pour modifier</div>
            </div>
        </div>
    </div>
</header>
<script>
(function(){
    var b=document.getElementById('avatarBtn'),d=document.getElementById('profileDropdown');
    if(b&&d){b.addEventListener('click',function(e){e.stopPropagation();d.classList.toggle('open');});
    document.addEventListener('click',function(){d.classList.remove('open');});}
})();
</script>
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
        return "_planning_topbar.html.twig";
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
        return array (  148 => 27,  144 => 26,  138 => 23,  131 => 19,  120 => 15,  112 => 14,  104 => 13,  96 => 12,  88 => 11,  80 => 10,  72 => 9,  64 => 8,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set current_route = app.request.attributes.get('_route') %}
<header class=\"topbar\">
    <a href=\"{{ path('homepage') }}\" class=\"topbar-logo\">
        <img src=\"{{ asset('images/logo.png') }}\" class=\"logo-mark\" alt=\"Harmony\">
    </a>

    <nav class=\"nav-links\">
        <a href=\"{{ path('activites') }}\"   class=\"nav-link {% if current_route == 'activites' %}active{% endif %}\"><span class=\"nav-emoji\">🏋</span> Activités</a>
        <a href=\"{{ path('forum') }}\"       class=\"nav-link {% if current_route starts with 'forum' %}active{% endif %}\"><span class=\"nav-emoji\">💬</span> Forum</a>
        <a href=\"{{ path('taches') }}\"      class=\"nav-link {% if current_route starts with 'app_tache' or current_route == 'taches' %}active{% endif %}\"><span class=\"nav-emoji\">📚</span> Tâches</a>
        <a href=\"{{ path('evenements') }}\"  class=\"nav-link {% if current_route starts with 'app_evenement' or current_route == 'evenements' %}active{% endif %}\"><span class=\"nav-emoji\">📅</span> Événements</a>
        <a href=\"{{ path('nutrition') }}\"   class=\"nav-link {% if current_route == 'nutrition' %}active{% endif %}\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
        <a href=\"{{ path('meditation') }}\"  class=\"nav-link {% if current_route starts with 'meditation' %}active{% endif %}\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
        <a href=\"{{ path('journal') }}\"     class=\"nav-link {% if current_route starts with 'journal' %}active{% endif %}\"><span class=\"nav-emoji\">📔</span> Journal</a>
        <a href=\"{{ path('library') }}\"     class=\"nav-link {% if current_route == 'library' %}active{% endif %}\"><span class=\"nav-emoji\">📖</span> Library</a>
    </nav>

    <div class=\"topbar-right\">
        <a href=\"{{ path('app_logout') }}\" class=\"logout-btn\" style=\"text-decoration:none;\">🚪 Déconnexion</a>

        <div class=\"profile-wrap\">
            <div class=\"avatar\" id=\"avatarBtn\">
                {{ app.user ? app.user.firstName|first|upper : 'E' }}
            </div>
            <div class=\"profile-dropdown\" id=\"profileDropdown\">
                <div class=\"pd-name\">{{ app.user ? app.user.firstName ~ ' ' ~ app.user.lastName : 'Étudiant' }}</div>
                <div class=\"pd-email\">{{ app.user ? app.user.email : 'email@exemple.com' }}</div>
                <div class=\"pd-divider\"></div>
                <div class=\"pd-hint\">Double-clic pour modifier</div>
            </div>
        </div>
    </div>
</header>
<script>
(function(){
    var b=document.getElementById('avatarBtn'),d=document.getElementById('profileDropdown');
    if(b&&d){b.addEventListener('click',function(e){e.stopPropagation();d.classList.toggle('open');});
    document.addEventListener('click',function(){d.classList.remove('open');});}
})();
</script>
", "_planning_topbar.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/_planning_topbar.html.twig");
    }
}

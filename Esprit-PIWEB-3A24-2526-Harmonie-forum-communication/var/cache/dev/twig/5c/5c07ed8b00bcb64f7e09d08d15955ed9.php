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

/* meditation/admin/pdf_detail.html.twig */
class __TwigTemplate_04d7854a9e446b060da2be2e3bd885b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/pdf_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/pdf_detail.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body { font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: #1C1733; margin: 40px; }
        h1 { color: #6A5ACD; font-size: 22px; margin-bottom: 4px; }
        .subtitle { color: #9590B8; font-size: 11px; margin-bottom: 24px; }
        .info-table { width: 100%; margin-bottom: 24px; }
        .info-table td { padding: 6px 10px; font-size: 12px; }
        .info-table .label { color: #9590B8; font-weight: bold; width: 120px; }
        .info-table .value { color: #1C1733; }
        .divider { border: none; border-top: 1px solid #EDE8FA; margin: 20px 0; }
        h2 { color: #6A5ACD; font-size: 16px; margin-bottom: 12px; }
        .conseil { padding: 10px 14px; margin-bottom: 8px; background: #F7F5FD; border-radius: 6px; font-size: 12px; line-height: 1.5; }
        .conseil-num { color: #6A5ACD; font-weight: bold; }
        .footer { margin-top: 30px; font-size: 10px; color: #9590B8; text-align: center; border-top: 1px solid #EDE8FA; padding-top: 10px; }
    </style>
</head>
<body>
    <h1>HARMONIE - Session de Meditation</h1>
    <div class=\"subtitle\">Detail de la session - ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</div>

    <table class=\"info-table\">
        <tr><td class=\"label\">Theme :</td><td class=\"value\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 25, $this->source); })()), "theme", [], "any", false, false, false, 25), "html", null, true);
        yield "</td></tr>
        <tr><td class=\"label\">Auteur :</td><td class=\"value\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 26, $this->source); })()), "auteur", [], "any", false, false, false, 26), "html", null, true);
        yield "</td></tr>
        <tr><td class=\"label\">Duree :</td><td class=\"value\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 27, $this->source); })()), "duree", [], "any", false, false, false, 27), "html", null, true);
        yield " minutes</td></tr>
        ";
        // line 28
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 28, $this->source); })()), "audioUrl", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "        <tr><td class=\"label\">Audio URL :</td><td class=\"value\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 29, $this->source); })()), "audioUrl", [], "any", false, false, false, 29), "html", null, true);
            yield "</td></tr>
        ";
        }
        // line 31
        yield "    </table>

    <hr class=\"divider\">

    <h2>Conseils (";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 35, $this->source); })()), "conseils", [], "any", false, false, false, 35)), "html", null, true);
        yield ")</h2>

    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 37, $this->source); })()), "conseils", [], "any", false, false, false, 37));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 38
            yield "        <div class=\"conseil\">
            <span class=\"conseil-num\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39), "html", null, true);
            yield ".</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "contenu", [], "any", false, false, false, 39), "html", null, true);
            yield "
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 41
        if (!$context['_iterated']) {
            // line 42
            yield "        <p style=\"color:#9590B8; font-style:italic;\">Aucun conseil pour cette session.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conseil'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
    <div class=\"footer\">
        Genere le ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield " - Harmonie &copy; ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
    </div>
</body>
</html>
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
        return "meditation/admin/pdf_detail.html.twig";
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
        return array (  159 => 46,  155 => 44,  148 => 42,  146 => 41,  129 => 39,  126 => 38,  108 => 37,  103 => 35,  97 => 31,  91 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  71 => 22,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body { font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: #1C1733; margin: 40px; }
        h1 { color: #6A5ACD; font-size: 22px; margin-bottom: 4px; }
        .subtitle { color: #9590B8; font-size: 11px; margin-bottom: 24px; }
        .info-table { width: 100%; margin-bottom: 24px; }
        .info-table td { padding: 6px 10px; font-size: 12px; }
        .info-table .label { color: #9590B8; font-weight: bold; width: 120px; }
        .info-table .value { color: #1C1733; }
        .divider { border: none; border-top: 1px solid #EDE8FA; margin: 20px 0; }
        h2 { color: #6A5ACD; font-size: 16px; margin-bottom: 12px; }
        .conseil { padding: 10px 14px; margin-bottom: 8px; background: #F7F5FD; border-radius: 6px; font-size: 12px; line-height: 1.5; }
        .conseil-num { color: #6A5ACD; font-weight: bold; }
        .footer { margin-top: 30px; font-size: 10px; color: #9590B8; text-align: center; border-top: 1px solid #EDE8FA; padding-top: 10px; }
    </style>
</head>
<body>
    <h1>HARMONIE - Session de Meditation</h1>
    <div class=\"subtitle\">Detail de la session - {{ \"now\"|date(\"d/m/Y\") }}</div>

    <table class=\"info-table\">
        <tr><td class=\"label\">Theme :</td><td class=\"value\">{{ session.theme }}</td></tr>
        <tr><td class=\"label\">Auteur :</td><td class=\"value\">{{ session.auteur }}</td></tr>
        <tr><td class=\"label\">Duree :</td><td class=\"value\">{{ session.duree }} minutes</td></tr>
        {% if session.audioUrl %}
        <tr><td class=\"label\">Audio URL :</td><td class=\"value\">{{ session.audioUrl }}</td></tr>
        {% endif %}
    </table>

    <hr class=\"divider\">

    <h2>Conseils ({{ session.conseils|length }})</h2>

    {% for conseil in session.conseils %}
        <div class=\"conseil\">
            <span class=\"conseil-num\">{{ loop.index }}.</span> {{ conseil.contenu }}
        </div>
    {% else %}
        <p style=\"color:#9590B8; font-style:italic;\">Aucun conseil pour cette session.</p>
    {% endfor %}

    <div class=\"footer\">
        Genere le {{ \"now\"|date(\"d/m/Y H:i\") }} - Harmonie &copy; {{ \"now\"|date(\"Y\") }}
    </div>
</body>
</html>
", "meditation/admin/pdf_detail.html.twig", "C:\\Users\\user\\Downloads\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\templates\\meditation\\admin\\pdf_detail.html.twig");
    }
}

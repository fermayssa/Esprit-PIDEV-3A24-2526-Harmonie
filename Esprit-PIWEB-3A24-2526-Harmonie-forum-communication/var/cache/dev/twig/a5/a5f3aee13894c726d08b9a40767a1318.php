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

/* meditation/admin/pdf_list.html.twig */
class __TwigTemplate_c775d5876d123f79c15a0d952b750231 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/pdf_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/pdf_list.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body { font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: #1C1733; margin: 40px; }
        h1 { color: #6A5ACD; font-size: 22px; margin-bottom: 4px; }
        .subtitle { color: #9590B8; font-size: 11px; margin-bottom: 24px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th { background: #6A5ACD; color: white; text-align: left; padding: 8px 10px; font-size: 11px; }
        td { padding: 8px 10px; border-bottom: 1px solid #EDE8FA; font-size: 11px; }
        tr:nth-child(even) td { background: #F7F5FD; }
        .footer { margin-top: 30px; font-size: 10px; color: #9590B8; text-align: center; border-top: 1px solid #EDE8FA; padding-top: 10px; }
    </style>
</head>
<body>
    <h1>HARMONIE - Sessions de Meditation</h1>
    <div class=\"subtitle\">Liste complete des sessions - ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Theme</th>
                <th>Auteur</th>
                <th>Duree</th>
                <th>Conseils</th>
                <th>Audio</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 32, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 33
            yield "            <tr>
                <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "theme", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "auteur", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "duree", [], "any", false, false, false, 37), "html", null, true);
            yield " min</td>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "conseils", [], "any", false, false, false, 38)), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "audioUrl", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
            </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </tbody>
    </table>

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
        return "meditation/admin/pdf_list.html.twig";
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
        return array (  147 => 46,  141 => 42,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  101 => 33,  84 => 32,  67 => 18,  48 => 1,);
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
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th { background: #6A5ACD; color: white; text-align: left; padding: 8px 10px; font-size: 11px; }
        td { padding: 8px 10px; border-bottom: 1px solid #EDE8FA; font-size: 11px; }
        tr:nth-child(even) td { background: #F7F5FD; }
        .footer { margin-top: 30px; font-size: 10px; color: #9590B8; text-align: center; border-top: 1px solid #EDE8FA; padding-top: 10px; }
    </style>
</head>
<body>
    <h1>HARMONIE - Sessions de Meditation</h1>
    <div class=\"subtitle\">Liste complete des sessions - {{ \"now\"|date(\"d/m/Y\") }}</div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Theme</th>
                <th>Auteur</th>
                <th>Duree</th>
                <th>Conseils</th>
                <th>Audio</th>
            </tr>
        </thead>
        <tbody>
            {% for s in sessions %}
            <tr>
                <td>{{ loop.index }}</td>
                <td>{{ s.theme }}</td>
                <td>{{ s.auteur }}</td>
                <td>{{ s.duree }} min</td>
                <td>{{ s.conseils|length }}</td>
                <td>{{ s.audioUrl ? 'Oui' : 'Non' }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"footer\">
        Genere le {{ \"now\"|date(\"d/m/Y H:i\") }} - Harmonie &copy; {{ \"now\"|date(\"Y\") }}
    </div>
</body>
</html>
", "meditation/admin/pdf_list.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/meditation/admin/pdf_list.html.twig");
    }
}

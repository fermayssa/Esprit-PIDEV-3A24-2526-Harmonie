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

/* meditation/etudiant/show.html.twig */
class __TwigTemplate_8f545429b9c3a605bf0c109326703abe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/etudiant/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/etudiant/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 3, $this->source); })()), "theme", [], "any", false, false, false, 3), "html", null, true);
        yield " - Harmony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
            --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
            --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
            --border:rgba(106,90,205,.12);--white:#FFFFFF;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
        }
        html,body{height:100%;font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}


        .container{max-width:900px;margin:0 auto;padding:48px 40px 80px;}
        .back-link{display:inline-flex;align-items:center;gap:6px;color:var(--text-muted);text-decoration:none;font-size:13px;margin-bottom:20px;}
        .back-link:hover{color:var(--purple);}

        .detail-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:32px;margin-bottom:24px;}
        .detail-title{font-family:var(--font-head);font-size:28px;font-weight:700;color:var(--text);margin-bottom:16px;}
        .detail-row{display:flex;gap:8px;margin-bottom:10px;font-size:14px;}
        .detail-label{color:var(--text-muted);min-width:120px;}
        .detail-value{color:var(--text);font-weight:500;}
        .detail-value a{color:var(--purple);}
        .youtube-btn{display:inline-flex;align-items:center;gap:8px;padding:10px 22px;border-radius:12px;background:#E05252;color:white;font-size:14px;font-weight:600;text-decoration:none;margin-top:16px;transition:.15s;}
        .youtube-btn:hover{background:#c93c3c;}

        .section-title{font-family:var(--font-head);font-size:20px;font-weight:700;color:var(--text);margin-bottom:16px;}
        .conseil-card{background:var(--white);border:1px solid var(--border);border-radius:12px;padding:16px 20px;margin-bottom:12px;display:flex;align-items:flex-start;gap:14px;}
        .conseil-num{width:28px;height:28px;border-radius:50%;background:var(--purple-pale);color:var(--purple);font-weight:700;font-size:13px;display:grid;place-items:center;flex-shrink:0;}
        .conseil-text{flex:1;font-size:14px;color:var(--text);line-height:1.6;}
        .empty-conseils{text-align:center;padding:30px;color:var(--text-muted);font-size:14px;}

        @media(max-width:640px){.topbar{padding:0 20px;}.nav-links{display:none;}.container{padding:24px 20px 60px;}}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
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

        // line 45
        yield "    ";
        yield from $this->load("_planning_topbar.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "
    <div class=\"container\">
        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"back-link\">← Retour aux sessions</a>

        <div class=\"detail-card\">
            <div class=\"detail-title\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 51, $this->source); })()), "theme", [], "any", false, false, false, 51), "html", null, true);
        yield "</div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">👨‍⚕️ Auteur</span>
                <span class=\"detail-value\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 54, $this->source); })()), "auteur", [], "any", false, false, false, 54), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">⏱ Durée</span>
                <span class=\"detail-value\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 58, $this->source); })()), "duree", [], "any", false, false, false, 58), "html", null, true);
        yield " minutes</span>
            </div>
            ";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 60, $this->source); })()), "audioUrl", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 61, $this->source); })()), "audioUrl", [], "any", false, false, false, 61), "html", null, true);
            yield "\" target=\"_blank\" class=\"youtube-btn\">▶ Écouter sur YouTube</a>
            ";
        }
        // line 63
        yield "        </div>

        <div class=\"section-title\">💡 Conseils (";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 65, $this->source); })()), "conseils", [], "any", false, false, false, 65)), "html", null, true);
        yield ")</div>

        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 67, $this->source); })()), "conseils", [], "any", false, false, false, 67));
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
            // line 68
            yield "            <div class=\"conseil-card\">
                <div class=\"conseil-num\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 69), "html", null, true);
            yield "</div>
                <div class=\"conseil-text\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "contenu", [], "any", false, false, false, 70), "html", null, true);
            yield "</div>
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
        // line 72
        if (!$context['_iterated']) {
            // line 73
            yield "            <div class=\"empty-conseils\">Aucun conseil pour cette session.</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conseil'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "    </div>

    <script>
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "meditation/etudiant/show.html.twig";
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
        return array (  259 => 75,  252 => 73,  250 => 72,  235 => 70,  231 => 69,  228 => 68,  210 => 67,  205 => 65,  201 => 63,  195 => 61,  193 => 60,  188 => 58,  181 => 54,  175 => 51,  169 => 48,  165 => 46,  162 => 45,  149 => 44,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ session.theme }} - Harmony{% endblock %}

{% block stylesheets %}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
            --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
            --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
            --border:rgba(106,90,205,.12);--white:#FFFFFF;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
        }
        html,body{height:100%;font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}


        .container{max-width:900px;margin:0 auto;padding:48px 40px 80px;}
        .back-link{display:inline-flex;align-items:center;gap:6px;color:var(--text-muted);text-decoration:none;font-size:13px;margin-bottom:20px;}
        .back-link:hover{color:var(--purple);}

        .detail-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:32px;margin-bottom:24px;}
        .detail-title{font-family:var(--font-head);font-size:28px;font-weight:700;color:var(--text);margin-bottom:16px;}
        .detail-row{display:flex;gap:8px;margin-bottom:10px;font-size:14px;}
        .detail-label{color:var(--text-muted);min-width:120px;}
        .detail-value{color:var(--text);font-weight:500;}
        .detail-value a{color:var(--purple);}
        .youtube-btn{display:inline-flex;align-items:center;gap:8px;padding:10px 22px;border-radius:12px;background:#E05252;color:white;font-size:14px;font-weight:600;text-decoration:none;margin-top:16px;transition:.15s;}
        .youtube-btn:hover{background:#c93c3c;}

        .section-title{font-family:var(--font-head);font-size:20px;font-weight:700;color:var(--text);margin-bottom:16px;}
        .conseil-card{background:var(--white);border:1px solid var(--border);border-radius:12px;padding:16px 20px;margin-bottom:12px;display:flex;align-items:flex-start;gap:14px;}
        .conseil-num{width:28px;height:28px;border-radius:50%;background:var(--purple-pale);color:var(--purple);font-weight:700;font-size:13px;display:grid;place-items:center;flex-shrink:0;}
        .conseil-text{flex:1;font-size:14px;color:var(--text);line-height:1.6;}
        .empty-conseils{text-align:center;padding:30px;color:var(--text-muted);font-size:14px;}

        @media(max-width:640px){.topbar{padding:0 20px;}.nav-links{display:none;}.container{padding:24px 20px 60px;}}
    </style>
{% endblock %}

{% block body %}
    {% include '_planning_topbar.html.twig' %}

    <div class=\"container\">
        <a href=\"{{ path('meditation') }}\" class=\"back-link\">← Retour aux sessions</a>

        <div class=\"detail-card\">
            <div class=\"detail-title\">{{ session.theme }}</div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">👨‍⚕️ Auteur</span>
                <span class=\"detail-value\">{{ session.auteur }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">⏱ Durée</span>
                <span class=\"detail-value\">{{ session.duree }} minutes</span>
            </div>
            {% if session.audioUrl %}
            <a href=\"{{ session.audioUrl }}\" target=\"_blank\" class=\"youtube-btn\">▶ Écouter sur YouTube</a>
            {% endif %}
        </div>

        <div class=\"section-title\">💡 Conseils ({{ session.conseils|length }})</div>

        {% for conseil in session.conseils %}
            <div class=\"conseil-card\">
                <div class=\"conseil-num\">{{ loop.index }}</div>
                <div class=\"conseil-text\">{{ conseil.contenu }}</div>
            </div>
        {% else %}
            <div class=\"empty-conseils\">Aucun conseil pour cette session.</div>
        {% endfor %}
    </div>

    <script>
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));
    </script>
{% endblock %}
", "meditation/etudiant/show.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/meditation/etudiant/show.html.twig");
    }
}

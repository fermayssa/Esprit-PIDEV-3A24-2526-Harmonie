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

/* meditation/admin/show.html.twig */
class __TwigTemplate_f2347074b6c1a21f15f12f653a067d25 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/show.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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
        yield " - Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "🧘 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 4, $this->source); })()), "theme", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <style>
        .back-link { display:inline-flex; align-items:center; gap:6px; color:var(--text-muted); text-decoration:none; font-size:13px; margin-bottom:20px; }
        .back-link:hover { color:var(--purple); }
        .detail-card {
            background:var(--white); border:1px solid var(--border); border-radius:16px;
            padding:32px; margin-bottom:24px;
        }
        .detail-title { font-family:var(--font-head); font-size:24px; font-weight:700; color:var(--text); margin-bottom:16px; }
        .detail-row { display:flex; gap:8px; margin-bottom:10px; font-size:14px; }
        .detail-label { color:var(--text-muted); min-width:120px; }
        .detail-value { color:var(--text); font-weight:500; }
        .detail-value a { color:var(--purple); }
        .detail-actions { display:flex; gap:10px; margin-top:20px; }
        .action-btn {
            padding:8px 18px; border-radius:10px; font-size:13px; font-weight:500;
            text-decoration:none; border:1px solid var(--border); background:var(--white);
            color:var(--text-mid); cursor:pointer; transition:.15s; font-family:var(--font-body);
            display:inline-flex; align-items:center; gap:6px;
        }
        .action-btn:hover { background:var(--purple-pale); color:var(--purple); }
        .btn-primary { background:var(--purple); color:white; border-color:var(--purple); }
        .btn-primary:hover { background:var(--purple-dark); color:white; }
        .btn-del { color:#E05252; border-color:rgba(224,82,82,.2); }
        .btn-del:hover { background:#FEF2F2; color:#E05252; }
        .btn-pdf { background:#E05252; color:white; border-color:#E05252; }
        .btn-pdf:hover { background:#c93c3c; color:white; }

        .section-title { font-family:var(--font-head); font-size:18px; font-weight:700; color:var(--text); margin-bottom:16px; }
        .conseil-card {
            background:var(--white); border:1px solid var(--border); border-radius:12px;
            padding:16px 20px; margin-bottom:12px; display:flex; justify-content:space-between; align-items:flex-start; gap:16px;
        }
        .conseil-num {
            width:28px; height:28px; border-radius:50%; background:var(--purple-pale); color:var(--purple);
            font-weight:700; font-size:13px; display:grid; place-items:center; flex-shrink:0;
        }
        .conseil-text { flex:1; font-size:14px; color:var(--text); line-height:1.6; }
        .conseil-actions { display:flex; gap:6px; flex-shrink:0; }
        .conseil-actions a, .conseil-actions button {
            padding:5px 12px; border-radius:8px; font-size:11px; font-weight:500;
            text-decoration:none; border:1px solid var(--border); background:var(--white);
            color:var(--text-muted); cursor:pointer; transition:.15s; font-family:var(--font-body);
        }
        .conseil-actions a:hover { background:var(--purple-pale); color:var(--purple); }
        .conseil-actions .btn-del:hover { background:#FEF2F2; color:#E05252; }
        .empty-conseils { text-align:center; padding:30px; color:var(--text-muted); font-size:14px; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 56
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

        // line 57
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_index");
        yield "\" class=\"back-link\">← Retour aux sessions</a>

    <div class=\"detail-card\">
        <div class=\"detail-title\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 60, $this->source); })()), "theme", [], "any", false, false, false, 60), "html", null, true);
        yield "</div>
        <div class=\"detail-row\">
            <span class=\"detail-label\">👨‍⚕️ Auteur</span>
            <span class=\"detail-value\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 63, $this->source); })()), "auteur", [], "any", false, false, false, 63), "html", null, true);
        yield "</span>
        </div>
        <div class=\"detail-row\">
            <span class=\"detail-label\">⏱ Durée</span>
            <span class=\"detail-value\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 67, $this->source); })()), "duree", [], "any", false, false, false, 67), "html", null, true);
        yield " minutes</span>
        </div>
        ";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 69, $this->source); })()), "audioUrl", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "        <div class=\"detail-row\">
            <span class=\"detail-label\">🎵 Audio</span>
            <span class=\"detail-value\"><a href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 72, $this->source); })()), "audioUrl", [], "any", false, false, false, 72), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 72, $this->source); })()), "audioUrl", [], "any", false, false, false, 72), "html", null, true);
            yield "</a></span>
        </div>
        ";
        }
        // line 75
        yield "
        <div class=\"detail-actions\">
            <a href=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
        yield "\" class=\"action-btn\">✏️ Modifier</a>
            <a href=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_pdf_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
        yield "\" class=\"action-btn btn-pdf\" target=\"_blank\">📄 PDF</a>
            <form method=\"post\" action=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\" style=\"display:inline\" onsubmit=\"return confirm('Supprimer cette session et tous ses conseils ?')\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"action-btn btn-del\">🗑 Supprimer</button>
            </form>
        </div>
    </div>

    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;\">
        <div class=\"section-title\">💡 Conseils (";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 87, $this->source); })()), "conseils", [], "any", false, false, false, 87)), "html", null, true);
        yield ")</div>
        <a href=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_conseil_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
        yield "\" class=\"action-btn btn-primary\">+ Ajouter un conseil</a>
    </div>

    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 91, $this->source); })()), "conseils", [], "any", false, false, false, 91));
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
            // line 92
            yield "        <div class=\"conseil-card\">
            <div class=\"conseil-num\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 93), "html", null, true);
            yield "</div>
            <div class=\"conseil-text\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "contenu", [], "any", false, false, false, 94), "html", null, true);
            yield "</div>
            <div class=\"conseil-actions\">
                <a href=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_conseil_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\">✏️ Modifier</a>
                <form method=\"post\" action=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_conseil_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            yield "\" style=\"display:inline\" onsubmit=\"return confirm('Supprimer ce conseil ?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "id", [], "any", false, false, false, 98))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn-del\">🗑</button>
                </form>
            </div>
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
        // line 103
        if (!$context['_iterated']) {
            // line 104
            yield "        <div class=\"empty-conseils\">Aucun conseil pour cette session. Ajoutez-en un !</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conseil'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "meditation/admin/show.html.twig";
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
        return array (  331 => 104,  329 => 103,  311 => 98,  307 => 97,  303 => 96,  298 => 94,  294 => 93,  291 => 92,  273 => 91,  267 => 88,  263 => 87,  253 => 80,  249 => 79,  245 => 78,  241 => 77,  237 => 75,  229 => 72,  225 => 70,  223 => 69,  218 => 67,  211 => 63,  205 => 60,  198 => 57,  185 => 56,  127 => 7,  114 => 6,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}{{ session.theme }} - Admin{% endblock %}
{% block page_title %}🧘 {{ session.theme }}{% endblock %}

{% block stylesheets %}
    <style>
        .back-link { display:inline-flex; align-items:center; gap:6px; color:var(--text-muted); text-decoration:none; font-size:13px; margin-bottom:20px; }
        .back-link:hover { color:var(--purple); }
        .detail-card {
            background:var(--white); border:1px solid var(--border); border-radius:16px;
            padding:32px; margin-bottom:24px;
        }
        .detail-title { font-family:var(--font-head); font-size:24px; font-weight:700; color:var(--text); margin-bottom:16px; }
        .detail-row { display:flex; gap:8px; margin-bottom:10px; font-size:14px; }
        .detail-label { color:var(--text-muted); min-width:120px; }
        .detail-value { color:var(--text); font-weight:500; }
        .detail-value a { color:var(--purple); }
        .detail-actions { display:flex; gap:10px; margin-top:20px; }
        .action-btn {
            padding:8px 18px; border-radius:10px; font-size:13px; font-weight:500;
            text-decoration:none; border:1px solid var(--border); background:var(--white);
            color:var(--text-mid); cursor:pointer; transition:.15s; font-family:var(--font-body);
            display:inline-flex; align-items:center; gap:6px;
        }
        .action-btn:hover { background:var(--purple-pale); color:var(--purple); }
        .btn-primary { background:var(--purple); color:white; border-color:var(--purple); }
        .btn-primary:hover { background:var(--purple-dark); color:white; }
        .btn-del { color:#E05252; border-color:rgba(224,82,82,.2); }
        .btn-del:hover { background:#FEF2F2; color:#E05252; }
        .btn-pdf { background:#E05252; color:white; border-color:#E05252; }
        .btn-pdf:hover { background:#c93c3c; color:white; }

        .section-title { font-family:var(--font-head); font-size:18px; font-weight:700; color:var(--text); margin-bottom:16px; }
        .conseil-card {
            background:var(--white); border:1px solid var(--border); border-radius:12px;
            padding:16px 20px; margin-bottom:12px; display:flex; justify-content:space-between; align-items:flex-start; gap:16px;
        }
        .conseil-num {
            width:28px; height:28px; border-radius:50%; background:var(--purple-pale); color:var(--purple);
            font-weight:700; font-size:13px; display:grid; place-items:center; flex-shrink:0;
        }
        .conseil-text { flex:1; font-size:14px; color:var(--text); line-height:1.6; }
        .conseil-actions { display:flex; gap:6px; flex-shrink:0; }
        .conseil-actions a, .conseil-actions button {
            padding:5px 12px; border-radius:8px; font-size:11px; font-weight:500;
            text-decoration:none; border:1px solid var(--border); background:var(--white);
            color:var(--text-muted); cursor:pointer; transition:.15s; font-family:var(--font-body);
        }
        .conseil-actions a:hover { background:var(--purple-pale); color:var(--purple); }
        .conseil-actions .btn-del:hover { background:#FEF2F2; color:#E05252; }
        .empty-conseils { text-align:center; padding:30px; color:var(--text-muted); font-size:14px; }
    </style>
{% endblock %}

{% block body %}
    <a href=\"{{ path('admin_meditation_index') }}\" class=\"back-link\">← Retour aux sessions</a>

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
        <div class=\"detail-row\">
            <span class=\"detail-label\">🎵 Audio</span>
            <span class=\"detail-value\"><a href=\"{{ session.audioUrl }}\" target=\"_blank\">{{ session.audioUrl }}</a></span>
        </div>
        {% endif %}

        <div class=\"detail-actions\">
            <a href=\"{{ path('admin_meditation_edit', {id: session.id}) }}\" class=\"action-btn\">✏️ Modifier</a>
            <a href=\"{{ path('admin_meditation_pdf_detail', {id: session.id}) }}\" class=\"action-btn btn-pdf\" target=\"_blank\">📄 PDF</a>
            <form method=\"post\" action=\"{{ path('admin_meditation_delete', {id: session.id}) }}\" style=\"display:inline\" onsubmit=\"return confirm('Supprimer cette session et tous ses conseils ?')\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ session.id) }}\">
                <button type=\"submit\" class=\"action-btn btn-del\">🗑 Supprimer</button>
            </form>
        </div>
    </div>

    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;\">
        <div class=\"section-title\">💡 Conseils ({{ session.conseils|length }})</div>
        <a href=\"{{ path('admin_conseil_new', {id: session.id}) }}\" class=\"action-btn btn-primary\">+ Ajouter un conseil</a>
    </div>

    {% for conseil in session.conseils %}
        <div class=\"conseil-card\">
            <div class=\"conseil-num\">{{ loop.index }}</div>
            <div class=\"conseil-text\">{{ conseil.contenu }}</div>
            <div class=\"conseil-actions\">
                <a href=\"{{ path('admin_conseil_edit', {id: conseil.id}) }}\">✏️ Modifier</a>
                <form method=\"post\" action=\"{{ path('admin_conseil_delete', {id: conseil.id}) }}\" style=\"display:inline\" onsubmit=\"return confirm('Supprimer ce conseil ?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ conseil.id) }}\">
                    <button type=\"submit\" class=\"btn-del\">🗑</button>
                </form>
            </div>
        </div>
    {% else %}
        <div class=\"empty-conseils\">Aucun conseil pour cette session. Ajoutez-en un !</div>
    {% endfor %}
{% endblock %}
", "meditation/admin/show.html.twig", "C:\\Users\\user\\Downloads\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\templates\\meditation\\admin\\show.html.twig");
    }
}

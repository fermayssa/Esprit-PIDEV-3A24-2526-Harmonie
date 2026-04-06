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

/* forum/comment_form.html.twig */
class __TwigTemplate_ac8b8cd7a0ef9ce2a441b011e453d2d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/comment_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/comment_form.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Modifier commentaire — Harmony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<style>
    .page{max-width:600px;margin:0 auto;padding:48px 40px 80px;}
    .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;
        color:var(--text-muted);margin-bottom:24px;}
    .breadcrumb a{color:var(--purple);text-decoration:none;font-weight:500;}

    .post-ref{background:var(--purple-ghost);border:1px solid var(--border);
        border-radius:12px;padding:14px 18px;margin-bottom:24px;
        font-size:13px;color:var(--text-mid);}
    .post-ref strong{color:var(--text);font-size:14px;}

    .form-card{background:var(--white);border:1px solid var(--border);
        border-radius:20px;padding:40px;}
    .form-title{font-family:var(--font-head);font-size:22px;font-weight:800;
        color:var(--text);margin-bottom:24px;}
    .form-group{margin-bottom:20px;}
    .form-label{display:block;font-size:13px;font-weight:600;color:var(--text-mid);margin-bottom:7px;}
    .form-textarea{width:100%;padding:11px 14px;border:1.5px solid var(--border);
        border-radius:10px;font-family:var(--font-body);font-size:14px;color:var(--text);
        background:var(--white);transition:border-color .15s;outline:none;
        resize:vertical;min-height:120px;}
    .form-textarea:focus{border-color:var(--purple);box-shadow:0 0 0 3px rgba(106,90,205,.1);}
    .form-textarea.error{border-color:#E05252;}

    .error-box{background:#FEF2F2;border:1px solid rgba(239,68,68,.2);
        border-radius:10px;padding:12px 16px;margin-bottom:20px;
        color:#E05252;font-size:13px;display:flex;align-items:center;gap:8px;}

    .form-actions{display:flex;gap:12px;margin-top:24px;}
    .btn-submit{flex:1;padding:12px;background:var(--purple);color:white;border:none;
        border-radius:11px;font-family:var(--font-body);font-size:14px;font-weight:600;
        cursor:pointer;transition:background .15s;}
    .btn-submit:hover{background:var(--purple-dark);}
    .btn-cancel{padding:12px 24px;background:var(--purple-ghost);color:var(--text-mid);
        border:1.5px solid var(--border);border-radius:11px;font-family:var(--font-body);
        font-size:14px;font-weight:500;cursor:pointer;text-decoration:none;
        display:inline-flex;align-items:center;}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        // line 46
        yield from $this->load("_planning_topbar.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "
<main class=\"page\">
    <div class=\"breadcrumb\">
        <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\">💬 Forum</a>
        <span>›</span>
        <span>Modifier commentaire</span>
    </div>

    <div class=\"post-ref\">
        💬 Commentaire sur le post : <strong>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 56, $this->source); })()), "titre", [], "any", false, false, false, 56), "html", null, true);
        yield "</strong>
    </div>

    <div class=\"form-card\">
        <div class=\"form-title\"> ✏️ Modifier le commentaire</div>

        ";
        // line 62
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "        <div class=\"error-box\"> ⚠️ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "</div>
        ";
        }
        // line 65
        yield "
        <form method=\"POST\" action=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "\" id=\"commentForm\">
            <div class=\"form-group\">
                <label class=\"form-label\">Ton commentaire *</label>
                <textarea name=\"contenu\" id=\"contenuInput\"
                    class=\"form-textarea ";
        // line 70
        yield (((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 70, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("error") : (""));
        yield "\"
                    placeholder=\"Modifie ton commentaire...\"
                    required>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 72, $this->source); })()), "contenu", [], "any", false, false, false, 72), "html", null, true);
        yield "</textarea>
            </div>

            <div class=\"form-actions\">
                <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 76, $this->source); })()), "idCategorie", [], "any", false, false, false, 76)]), "html", null, true);
        yield "\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\"> 💾 Enregistrer</button>
            </div>
        </form>
    </div>
</main>

<script>
    document.getElementById('commentForm').addEventListener('submit', function(e) {
        const v = document.getElementById('contenuInput').value.trim();
        if (v.length < 3) {
            e.preventDefault();
            document.getElementById('contenuInput').classList.add('error');
        }
    });
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
        return "forum/comment_form.html.twig";
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
        return array (  218 => 76,  211 => 72,  206 => 70,  199 => 66,  196 => 65,  190 => 63,  188 => 62,  179 => 56,  170 => 50,  165 => 47,  163 => 46,  150 => 45,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Modifier commentaire — Harmony{% endblock %}

{% block stylesheets %}
<style>
    .page{max-width:600px;margin:0 auto;padding:48px 40px 80px;}
    .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;
        color:var(--text-muted);margin-bottom:24px;}
    .breadcrumb a{color:var(--purple);text-decoration:none;font-weight:500;}

    .post-ref{background:var(--purple-ghost);border:1px solid var(--border);
        border-radius:12px;padding:14px 18px;margin-bottom:24px;
        font-size:13px;color:var(--text-mid);}
    .post-ref strong{color:var(--text);font-size:14px;}

    .form-card{background:var(--white);border:1px solid var(--border);
        border-radius:20px;padding:40px;}
    .form-title{font-family:var(--font-head);font-size:22px;font-weight:800;
        color:var(--text);margin-bottom:24px;}
    .form-group{margin-bottom:20px;}
    .form-label{display:block;font-size:13px;font-weight:600;color:var(--text-mid);margin-bottom:7px;}
    .form-textarea{width:100%;padding:11px 14px;border:1.5px solid var(--border);
        border-radius:10px;font-family:var(--font-body);font-size:14px;color:var(--text);
        background:var(--white);transition:border-color .15s;outline:none;
        resize:vertical;min-height:120px;}
    .form-textarea:focus{border-color:var(--purple);box-shadow:0 0 0 3px rgba(106,90,205,.1);}
    .form-textarea.error{border-color:#E05252;}

    .error-box{background:#FEF2F2;border:1px solid rgba(239,68,68,.2);
        border-radius:10px;padding:12px 16px;margin-bottom:20px;
        color:#E05252;font-size:13px;display:flex;align-items:center;gap:8px;}

    .form-actions{display:flex;gap:12px;margin-top:24px;}
    .btn-submit{flex:1;padding:12px;background:var(--purple);color:white;border:none;
        border-radius:11px;font-family:var(--font-body);font-size:14px;font-weight:600;
        cursor:pointer;transition:background .15s;}
    .btn-submit:hover{background:var(--purple-dark);}
    .btn-cancel{padding:12px 24px;background:var(--purple-ghost);color:var(--text-mid);
        border:1.5px solid var(--border);border-radius:11px;font-family:var(--font-body);
        font-size:14px;font-weight:500;cursor:pointer;text-decoration:none;
        display:inline-flex;align-items:center;}
</style>
{% endblock %}

{% block body %}
{% include '_planning_topbar.html.twig' %}

<main class=\"page\">
    <div class=\"breadcrumb\">
        <a href=\"{{ path('forum') }}\">💬 Forum</a>
        <span>›</span>
        <span>Modifier commentaire</span>
    </div>

    <div class=\"post-ref\">
        💬 Commentaire sur le post : <strong>{{ post.titre }}</strong>
    </div>

    <div class=\"form-card\">
        <div class=\"form-title\"> ✏️ Modifier le commentaire</div>

        {% if error %}
        <div class=\"error-box\"> ⚠️ {{ error }}</div>
        {% endif %}

        <form method=\"POST\" action=\"{{ action }}\" id=\"commentForm\">
            <div class=\"form-group\">
                <label class=\"form-label\">Ton commentaire *</label>
                <textarea name=\"contenu\" id=\"contenuInput\"
                    class=\"form-textarea {{ error ? 'error' }}\"
                    placeholder=\"Modifie ton commentaire...\"
                    required>{{ comment.contenu }}</textarea>
            </div>

            <div class=\"form-actions\">
                <a href=\"{{ path('forum_posts', {id: post.idCategorie}) }}\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\"> 💾 Enregistrer</button>
            </div>
        </form>
    </div>
</main>

<script>
    document.getElementById('commentForm').addEventListener('submit', function(e) {
        const v = document.getElementById('contenuInput').value.trim();
        if (v.length < 3) {
            e.preventDefault();
            document.getElementById('contenuInput').classList.add('error');
        }
    });
</script>
{% endblock %}", "forum/comment_form.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/forum/comment_form.html.twig");
    }
}

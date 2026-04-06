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
class __TwigTemplate_edd2fa5d75eb9932a7d51394a1c3799b extends Template
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
        yield "<link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
<style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
    :root{--purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
        --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;--text:#1C1733;
        --text-mid:#4A4570;--text-muted:#9590B8;--border:rgba(106,90,205,.12);
        --white:#FFFFFF;--font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;}
    html,body{font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}
    .topbar{position:sticky;top:0;z-index:200;background:var(--white);
        border-bottom:1px solid var(--border);height:62px;display:flex;
        align-items:center;padding:0 40px;gap:8px;}
    .topbar-logo{display:flex;align-items:center;gap:10px;text-decoration:none;margin-right:32px;}
    .logo-mark{width:34px;height:34px;border-radius:10px;object-fit:contain;}
    .nav-links{display:flex;align-items:center;gap:2px;flex:1;}
    .nav-link{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;
        border-radius:9px;font-size:13.5px;font-weight:500;color:var(--text-mid);
        text-decoration:none;transition:background .15s,color .15s;}
    .nav-link:hover,.nav-link.active{background:var(--purple-pale);color:var(--purple);font-weight:600;}
    .topbar-right{display:flex;align-items:center;gap:10px;margin-left:auto;}
    .logout-btn{padding:7px 16px;border-radius:9px;border:1.5px solid rgba(239,68,68,.2);
        background:transparent;color:#E05252;font-size:13px;cursor:pointer;}
    .avatar{width:36px;height:36px;border-radius:50%;background:var(--purple);
        color:white;font-family:var(--font-head);font-weight:700;font-size:14px;
        display:grid;place-items:center;}

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

    // line 69
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

        // line 70
        yield "<header class=\"topbar\">
    <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
        <img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
    </a>
    <nav class=\"nav-links\">
        <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\" class=\"nav-link\"> 🏋 Activités </a>
        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\"     class=\"nav-link active\">💬 Forum</a>
        <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\"    class=\"nav-link\">📚 Tâches</a>
        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"nav-link\">📅 Événements</a>
        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\" class=\"nav-link\">🥗 Nutrition</a>
        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"nav-link\">🧘 Méditation</a>
        <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\"   class=\"nav-link\">📔 Journal</a>
        <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\"   class=\"nav-link\">📖 Library</a>
    </nav>
    <div class=\"topbar-right\">
        <button class=\"logout-btn\">🚪 Déconnexion</button>
        <div class=\"avatar\">E</div>
    </div>
</header>

<main class=\"page\">
    <div class=\"breadcrumb\">
        <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\">💬 Forum</a>
        <span>›</span>
        <span>Modifier commentaire</span>
    </div>

    <div class=\"post-ref\">
        💬 Commentaire sur le post : <strong>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 98, $this->source); })()), "titre", [], "any", false, false, false, 98), "html", null, true);
        yield "</strong>
    </div>

    <div class=\"form-card\">
        <div class=\"form-title\"> ✏️ Modifier le commentaire</div>

        ";
        // line 104
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 104, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "        <div class=\"error-box\"> ⚠️ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 105, $this->source); })()), "html", null, true);
            yield "</div>
        ";
        }
        // line 107
        yield "
        <form method=\"POST\" action=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 108, $this->source); })()), "html", null, true);
        yield "\" id=\"commentForm\">
            <div class=\"form-group\">
                <label class=\"form-label\">Ton commentaire *</label>
                <textarea name=\"contenu\" id=\"contenuInput\"
                    class=\"form-textarea ";
        // line 112
        yield (((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 112, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("error") : (""));
        yield "\"
                    placeholder=\"Modifie ton commentaire...\"
                    required>";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 114, $this->source); })()), "contenu", [], "any", false, false, false, 114), "html", null, true);
        yield "</textarea>
            </div>

            <div class=\"form-actions\">
                <a href=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 118, $this->source); })()), "idCategorie", [], "any", false, false, false, 118)]), "html", null, true);
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
        return array (  289 => 118,  282 => 114,  277 => 112,  270 => 108,  267 => 107,  261 => 105,  259 => 104,  250 => 98,  241 => 92,  228 => 82,  224 => 81,  220 => 80,  216 => 79,  212 => 78,  208 => 77,  204 => 76,  200 => 75,  194 => 72,  190 => 71,  187 => 70,  174 => 69,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Modifier commentaire — Harmony{% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
<style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
    :root{--purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
        --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;--text:#1C1733;
        --text-mid:#4A4570;--text-muted:#9590B8;--border:rgba(106,90,205,.12);
        --white:#FFFFFF;--font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;}
    html,body{font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}
    .topbar{position:sticky;top:0;z-index:200;background:var(--white);
        border-bottom:1px solid var(--border);height:62px;display:flex;
        align-items:center;padding:0 40px;gap:8px;}
    .topbar-logo{display:flex;align-items:center;gap:10px;text-decoration:none;margin-right:32px;}
    .logo-mark{width:34px;height:34px;border-radius:10px;object-fit:contain;}
    .nav-links{display:flex;align-items:center;gap:2px;flex:1;}
    .nav-link{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;
        border-radius:9px;font-size:13.5px;font-weight:500;color:var(--text-mid);
        text-decoration:none;transition:background .15s,color .15s;}
    .nav-link:hover,.nav-link.active{background:var(--purple-pale);color:var(--purple);font-weight:600;}
    .topbar-right{display:flex;align-items:center;gap:10px;margin-left:auto;}
    .logout-btn{padding:7px 16px;border-radius:9px;border:1.5px solid rgba(239,68,68,.2);
        background:transparent;color:#E05252;font-size:13px;cursor:pointer;}
    .avatar{width:36px;height:36px;border-radius:50%;background:var(--purple);
        color:white;font-family:var(--font-head);font-weight:700;font-size:14px;
        display:grid;place-items:center;}

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
<header class=\"topbar\">
    <a href=\"{{ path('homepage') }}\" class=\"topbar-logo\">
        <img src=\"{{ asset('images/logo.png') }}\" class=\"logo-mark\" alt=\"Harmony\">
    </a>
    <nav class=\"nav-links\">
        <a href=\"{{ path('activites') }}\" class=\"nav-link\"> 🏋 Activités </a>
        <a href=\"{{ path('forum') }}\"     class=\"nav-link active\">💬 Forum</a>
        <a href=\"{{ path('taches') }}\"    class=\"nav-link\">📚 Tâches</a>
        <a href=\"{{ path('evenements') }}\" class=\"nav-link\">📅 Événements</a>
        <a href=\"{{ path('nutrition') }}\" class=\"nav-link\">🥗 Nutrition</a>
        <a href=\"{{ path('meditation') }}\" class=\"nav-link\">🧘 Méditation</a>
        <a href=\"{{ path('journal') }}\"   class=\"nav-link\">📔 Journal</a>
        <a href=\"{{ path('library') }}\"   class=\"nav-link\">📖 Library</a>
    </nav>
    <div class=\"topbar-right\">
        <button class=\"logout-btn\">🚪 Déconnexion</button>
        <div class=\"avatar\">E</div>
    </div>
</header>

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
{% endblock %}", "forum/comment_form.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/forum/comment_form.html.twig");
    }
}

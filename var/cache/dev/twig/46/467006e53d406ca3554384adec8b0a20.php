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

/* forum/post_form.html.twig */
class __TwigTemplate_fbf41b37c37ff3543c5b3936a830f180 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/post_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/post_form.html.twig"));

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

        yield (((($tmp = (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouveau"));
        yield " post — Harmony";
        
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

    .page{max-width:680px;margin:0 auto;padding:48px 40px 80px;}
    .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;
        color:var(--text-muted);margin-bottom:24px;}
    .breadcrumb a{color:var(--purple);text-decoration:none;font-weight:500;}

    .form-card{background:var(--white);border:1px solid var(--border);
        border-radius:20px;padding:40px;}
    .form-title{font-family:var(--font-head);font-size:24px;font-weight:800;
        color:var(--text);margin-bottom:28px;}
    .cat-badge{display:inline-flex;align-items:center;gap:6px;
        background:var(--purple-pale);color:var(--purple);
        padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600;
        margin-bottom:20px;}

    .form-group{margin-bottom:20px;}
    .form-label{display:block;font-size:13px;font-weight:600;color:var(--text-mid);margin-bottom:7px;}
    .form-input,.form-textarea{width:100%;padding:11px 14px;border:1.5px solid var(--border);
        border-radius:10px;font-family:var(--font-body);font-size:14px;color:var(--text);
        background:var(--white);transition:border-color .15s,box-shadow .15s;outline:none;}
    .form-input:focus,.form-textarea:focus{border-color:var(--purple);
        box-shadow:0 0 0 3px rgba(106,90,205,.1);}
    .form-input.error,.form-textarea.error{border-color:#E05252;}
    .form-textarea{resize:vertical;min-height:160px;}
    .char-count{font-size:11px;color:var(--text-muted);text-align:right;margin-top:4px;}

    .error-box{background:#FEF2F2;border:1px solid rgba(239,68,68,.2);
        border-radius:10px;padding:12px 16px;margin-bottom:20px;
        color:#E05252;font-size:13px;display:flex;align-items:center;gap:8px;}

    .form-actions{display:flex;gap:12px;margin-top:28px;}
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

    // line 71
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

        // line 72
        yield "<header class=\"topbar\">
    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
        <img src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
    </a>
    <nav class=\"nav-links\">
        <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\" class=\"nav-link\">🏋 Activités</a>
        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\"     class=\"nav-link active\">💬 Forum</a>
        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\"    class=\"nav-link\">📚 Tâches</a>
        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"nav-link\">📅 Événements</a>
        <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\" class=\"nav-link\">🥗 Nutrition</a>
        <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"nav-link\">🧘 Méditation</a>
        <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\"   class=\"nav-link\">📔 Journal</a>
        <a href=\"";
        // line 84
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
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\">💬 Forum</a>
        <span>›</span>
        <a href=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 96, $this->source); })()), "idCategorie", [], "any", false, false, false, 96)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 96, $this->source); })()), "nomCategorie", [], "any", false, false, false, 96), "html", null, true);
        yield "</a>
        <span>›</span>
        <span>";
        // line 98
        yield (((($tmp = (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 98, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier le post") : ("Nouveau post"));
        yield "</span>
    </div>

    <div class=\"form-card\">
        <div class=\"form-title\">";
        // line 102
        yield (((($tmp = (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✏️ Modifier le post") : ("📝 Nouveau post"));
        yield "</div>
        <div class=\"cat-badge\">🗂 ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 103, $this->source); })()), "nomCategorie", [], "any", false, false, false, 103), "html", null, true);
        yield "</div>

        ";
        // line 105
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 105, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "        <div class=\"error-box\">⚠️ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 106, $this->source); })()), "html", null, true);
            yield "</div>
        ";
        }
        // line 108
        yield "
        <form method=\"POST\" action=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "\" id=\"postForm\">
            <div class=\"form-group\">
                <label class=\"form-label\">Titre *</label>
                <input type=\"text\" name=\"titre\" id=\"titreInput\"
                    class=\"form-input ";
        // line 113
        yield ((((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 113, $this->source); })()) && CoreExtension::inFilter("titre", (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 113, $this->source); })())))) ? ("error") : (""));
        yield "\"
                    value=\"";
        // line 114
        yield (((($tmp = (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 114, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 114, $this->source); })()), "titre", [], "any", false, false, false, 114), "html", null, true)) : (""));
        yield "\"
                    placeholder=\"Un titre clair et précis...\"
                    maxlength=\"150\" required>
                <div class=\"char-count\"><span id=\"titreCount\">0</span>/150</div>
            </div>

            <div class=\"form-group\">
                <label class=\"form-label\">Contenu *</label>
                <textarea name=\"contenu\" id=\"contenuInput\"
                    class=\"form-textarea ";
        // line 123
        yield ((((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 123, $this->source); })()) && CoreExtension::inFilter("contenu", (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 123, $this->source); })())))) ? ("error") : (""));
        yield "\"
                    placeholder=\"Développe ta question ou ton sujet...\"
                    required>";
        // line 125
        yield (((($tmp = (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 125, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 125, $this->source); })()), "contenu", [], "any", false, false, false, 125), "html", null, true)) : (""));
        yield "</textarea>
                <div class=\"char-count\"><span id=\"contenuCount\">0</span> caractères</div>
            </div>

            <div class=\"form-actions\">
                <a href=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 130, $this->source); })()), "idCategorie", [], "any", false, false, false, 130)]), "html", null, true);
        yield "\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\">
                    ";
        // line 132
        yield (((($tmp = (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 132, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("💾 Enregistrer") : ("📤 Publier le post"));
        yield "
                </button>
            </div>
        </form>
    </div>
</main>

<script>
    const titreInput   = document.getElementById('titreInput');
    const titreCount   = document.getElementById('titreCount');
    const contenuInput = document.getElementById('contenuInput');
    const contenuCount = document.getElementById('contenuCount');

    function updateTitre()   { titreCount.textContent   = titreInput.value.length; }
    function updateContenu() { contenuCount.textContent = contenuInput.value.length; }

    titreInput.addEventListener('input', updateTitre);
    contenuInput.addEventListener('input', updateContenu);
    updateTitre(); updateContenu();

    document.getElementById('postForm').addEventListener('submit', function(e) {
        let ok = true;
        if (titreInput.value.trim().length < 3) {
            titreInput.classList.add('error'); ok = false;
        }
        if (contenuInput.value.trim().length < 10) {
            contenuInput.classList.add('error'); ok = false;
        }
        if (!ok) e.preventDefault();
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
        return "forum/post_form.html.twig";
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
        return array (  324 => 132,  319 => 130,  311 => 125,  306 => 123,  294 => 114,  290 => 113,  283 => 109,  280 => 108,  274 => 106,  272 => 105,  267 => 103,  263 => 102,  256 => 98,  249 => 96,  244 => 94,  231 => 84,  227 => 83,  223 => 82,  219 => 81,  215 => 80,  211 => 79,  207 => 78,  203 => 77,  197 => 74,  193 => 73,  190 => 72,  177 => 71,  102 => 5,  89 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ post ? 'Modifier' : 'Nouveau' }} post — Harmony{% endblock %}

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

    .page{max-width:680px;margin:0 auto;padding:48px 40px 80px;}
    .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;
        color:var(--text-muted);margin-bottom:24px;}
    .breadcrumb a{color:var(--purple);text-decoration:none;font-weight:500;}

    .form-card{background:var(--white);border:1px solid var(--border);
        border-radius:20px;padding:40px;}
    .form-title{font-family:var(--font-head);font-size:24px;font-weight:800;
        color:var(--text);margin-bottom:28px;}
    .cat-badge{display:inline-flex;align-items:center;gap:6px;
        background:var(--purple-pale);color:var(--purple);
        padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600;
        margin-bottom:20px;}

    .form-group{margin-bottom:20px;}
    .form-label{display:block;font-size:13px;font-weight:600;color:var(--text-mid);margin-bottom:7px;}
    .form-input,.form-textarea{width:100%;padding:11px 14px;border:1.5px solid var(--border);
        border-radius:10px;font-family:var(--font-body);font-size:14px;color:var(--text);
        background:var(--white);transition:border-color .15s,box-shadow .15s;outline:none;}
    .form-input:focus,.form-textarea:focus{border-color:var(--purple);
        box-shadow:0 0 0 3px rgba(106,90,205,.1);}
    .form-input.error,.form-textarea.error{border-color:#E05252;}
    .form-textarea{resize:vertical;min-height:160px;}
    .char-count{font-size:11px;color:var(--text-muted);text-align:right;margin-top:4px;}

    .error-box{background:#FEF2F2;border:1px solid rgba(239,68,68,.2);
        border-radius:10px;padding:12px 16px;margin-bottom:20px;
        color:#E05252;font-size:13px;display:flex;align-items:center;gap:8px;}

    .form-actions{display:flex;gap:12px;margin-top:28px;}
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
        <a href=\"{{ path('activites') }}\" class=\"nav-link\">🏋 Activités</a>
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
        <a href=\"{{ path('forum_posts', {id: categorie.idCategorie}) }}\">{{ categorie.nomCategorie }}</a>
        <span>›</span>
        <span>{{ post ? 'Modifier le post' : 'Nouveau post' }}</span>
    </div>

    <div class=\"form-card\">
        <div class=\"form-title\">{{ post ? '✏️ Modifier le post' : '📝 Nouveau post' }}</div>
        <div class=\"cat-badge\">🗂 {{ categorie.nomCategorie }}</div>

        {% if error %}
        <div class=\"error-box\">⚠️ {{ error }}</div>
        {% endif %}

        <form method=\"POST\" action=\"{{ action }}\" id=\"postForm\">
            <div class=\"form-group\">
                <label class=\"form-label\">Titre *</label>
                <input type=\"text\" name=\"titre\" id=\"titreInput\"
                    class=\"form-input {{ error and 'titre' in error ? 'error' }}\"
                    value=\"{{ post ? post.titre : '' }}\"
                    placeholder=\"Un titre clair et précis...\"
                    maxlength=\"150\" required>
                <div class=\"char-count\"><span id=\"titreCount\">0</span>/150</div>
            </div>

            <div class=\"form-group\">
                <label class=\"form-label\">Contenu *</label>
                <textarea name=\"contenu\" id=\"contenuInput\"
                    class=\"form-textarea {{ error and 'contenu' in error ? 'error' }}\"
                    placeholder=\"Développe ta question ou ton sujet...\"
                    required>{{ post ? post.contenu : '' }}</textarea>
                <div class=\"char-count\"><span id=\"contenuCount\">0</span> caractères</div>
            </div>

            <div class=\"form-actions\">
                <a href=\"{{ path('forum_posts', {id: categorie.idCategorie}) }}\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\">
                    {{ post ? '💾 Enregistrer' : '📤 Publier le post' }}
                </button>
            </div>
        </form>
    </div>
</main>

<script>
    const titreInput   = document.getElementById('titreInput');
    const titreCount   = document.getElementById('titreCount');
    const contenuInput = document.getElementById('contenuInput');
    const contenuCount = document.getElementById('contenuCount');

    function updateTitre()   { titreCount.textContent   = titreInput.value.length; }
    function updateContenu() { contenuCount.textContent = contenuInput.value.length; }

    titreInput.addEventListener('input', updateTitre);
    contenuInput.addEventListener('input', updateContenu);
    updateTitre(); updateContenu();

    document.getElementById('postForm').addEventListener('submit', function(e) {
        let ok = true;
        if (titreInput.value.trim().length < 3) {
            titreInput.classList.add('error'); ok = false;
        }
        if (contenuInput.value.trim().length < 10) {
            contenuInput.classList.add('error'); ok = false;
        }
        if (!ok) e.preventDefault();
    });
</script>
{% endblock %}", "forum/post_form.html.twig", "/Users/rayen/Downloads/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication-3/templates/forum/post_form.html.twig");
    }
}

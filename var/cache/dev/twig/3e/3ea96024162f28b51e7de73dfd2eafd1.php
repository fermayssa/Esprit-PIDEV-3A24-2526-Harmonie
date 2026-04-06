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

/* forum/categorie_form.html.twig */
class __TwigTemplate_25e5ce378e9f27b1f4433e8828fd7747 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/categorie_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/categorie_form.html.twig"));

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

        yield (((($tmp = (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvelle"));
        yield " catégorie — Harmony";
        
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

    .form-card{background:var(--white);border:1px solid var(--border);
        border-radius:20px;padding:40px;}
    .form-title{font-family:var(--font-head);font-size:24px;font-weight:800;
        color:var(--text);margin-bottom:28px;display:flex;align-items:center;gap:10px;}

    .form-group{margin-bottom:20px;}
    .form-label{display:block;font-size:13px;font-weight:600;color:var(--text-mid);
        margin-bottom:7px;}
    .form-input,.form-textarea{width:100%;padding:11px 14px;border:1.5px solid var(--border);
        border-radius:10px;font-family:var(--font-body);font-size:14px;color:var(--text);
        background:var(--white);transition:border-color .15s,box-shadow .15s;outline:none;}
    .form-input:focus,.form-textarea:focus{border-color:var(--purple);
        box-shadow:0 0 0 3px rgba(106,90,205,.1);}
    .form-input.error,.form-textarea.error{border-color:#E05252;}
    .form-textarea{resize:vertical;min-height:100px;}
    .char-count{font-size:11px;color:var(--text-muted);text-align:right;margin-top:4px;}

    .error-box{background:#FEF2F2;border:1px solid rgba(239,68,68,.2);
        border-radius:10px;padding:12px 16px;margin-bottom:20px;
        color:#E05252;font-size:13px;display:flex;align-items:center;gap:8px;}

    .form-actions{display:flex;gap:12px;margin-top:28px;}
    .btn-submit{flex:1;padding:12px;background:var(--purple);color:white;
        border:none;border-radius:11px;font-family:var(--font-body);font-size:14px;
        font-weight:600;cursor:pointer;transition:background .15s;}
    .btn-submit:hover{background:var(--purple-dark);}
    .btn-cancel{padding:12px 24px;background:var(--purple-ghost);color:var(--text-mid);
        border:1.5px solid var(--border);border-radius:11px;font-family:var(--font-body);
        font-size:14px;font-weight:500;cursor:pointer;text-decoration:none;
        display:inline-flex;align-items:center;}
    .btn-cancel:hover{border-color:var(--purple-soft);}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
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

        // line 67
        yield "<header class=\"topbar\">
    <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
        <img src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
    </a>
    <nav class=\"nav-links\">
        <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\" class=\"nav-link\">🏋 Activités</a>
        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\"     class=\"nav-link active\">💬 Forum</a>
        <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\"    class=\"nav-link\">📚 Tâches</a>
        <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"nav-link\">📅 Événements</a>
        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\" class=\"nav-link\">🥗 Nutrition</a>
        <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"nav-link\">🧘 Méditation</a>
        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\"   class=\"nav-link\">📔 Journal</a>
        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\"   class=\"nav-link\">📖 Library</a>
    </nav>
    <div class=\"topbar-right\">
        <button class=\"logout-btn\">🚪 Déconnexion</button>
        <div class=\"avatar\">E</div>
    </div>
</header>

<main class=\"page\">
    <div class=\"form-card\">
        <div class=\"form-title\">
            ";
        // line 90
        yield (((($tmp = (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✏️ Modifier la catégorie") : ("➕ Nouvelle catégorie"));
        yield "
        </div>

        ";
        // line 93
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 93, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "        <div class=\"error-box\">⚠️ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "</div>
        ";
        }
        // line 96
        yield "
        <form method=\"POST\" action=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 97, $this->source); })()), "html", null, true);
        yield "\" id=\"catForm\">
            <div class=\"form-group\">
                <label class=\"form-label\">Nom de la catégorie *</label>
                <input type=\"text\" name=\"nom\" id=\"nomInput\"
                    class=\"form-input ";
        // line 101
        yield ((((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 101, $this->source); })()) && (is_string($_v0 = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 101, $this->source); })())) && is_string($_v1 = "Le nom") && str_starts_with($_v0, $_v1)))) ? ("error") : (""));
        yield "\"
                    value=\"";
        // line 102
        yield (((($tmp = (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 102, $this->source); })()), "nomCategorie", [], "any", false, false, false, 102), "html", null, true)) : (""));
        yield "\"
                    placeholder=\"Ex: Programmation, Base de données...\"
                    maxlength=\"100\" required>
                <div class=\"char-count\"><span id=\"nomCount\">0</span>/100</div>
            </div>

            <div class=\"form-group\">
                <label class=\"form-label\">Description</label>
                <textarea name=\"description\" id=\"descInput\"
                    class=\"form-textarea\"
                    placeholder=\"Décris brièvement cette catégorie...\">";
        // line 112
        yield (((($tmp = (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 112, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 112, $this->source); })()), "description", [], "any", false, false, false, 112), "html", null, true)) : (""));
        yield "</textarea>
            </div>

            <div class=\"form-actions\">
                <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\">
                    ";
        // line 118
        yield (((($tmp = (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("💾 Enregistrer") : ("➕ Créer la catégorie"));
        yield "
                </button>
            </div>
        </form>
    </div>
</main>

<script>
    const nomInput = document.getElementById('nomInput');
    const nomCount = document.getElementById('nomCount');
    function updateCount() { nomCount.textContent = nomInput.value.length; }
    nomInput.addEventListener('input', updateCount);
    updateCount();

    // Validation côté client
    document.getElementById('catForm').addEventListener('submit', function(e) {
        const nom = nomInput.value.trim();
        if (nom.length < 3) {
            e.preventDefault();
            nomInput.classList.add('error');
            nomInput.focus();
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
        return "forum/categorie_form.html.twig";
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
        return array (  293 => 118,  288 => 116,  281 => 112,  268 => 102,  264 => 101,  257 => 97,  254 => 96,  248 => 94,  246 => 93,  240 => 90,  226 => 79,  222 => 78,  218 => 77,  214 => 76,  210 => 75,  206 => 74,  202 => 73,  198 => 72,  192 => 69,  188 => 68,  185 => 67,  172 => 66,  102 => 5,  89 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ cat ? 'Modifier' : 'Nouvelle' }} catégorie — Harmony{% endblock %}

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

    .form-card{background:var(--white);border:1px solid var(--border);
        border-radius:20px;padding:40px;}
    .form-title{font-family:var(--font-head);font-size:24px;font-weight:800;
        color:var(--text);margin-bottom:28px;display:flex;align-items:center;gap:10px;}

    .form-group{margin-bottom:20px;}
    .form-label{display:block;font-size:13px;font-weight:600;color:var(--text-mid);
        margin-bottom:7px;}
    .form-input,.form-textarea{width:100%;padding:11px 14px;border:1.5px solid var(--border);
        border-radius:10px;font-family:var(--font-body);font-size:14px;color:var(--text);
        background:var(--white);transition:border-color .15s,box-shadow .15s;outline:none;}
    .form-input:focus,.form-textarea:focus{border-color:var(--purple);
        box-shadow:0 0 0 3px rgba(106,90,205,.1);}
    .form-input.error,.form-textarea.error{border-color:#E05252;}
    .form-textarea{resize:vertical;min-height:100px;}
    .char-count{font-size:11px;color:var(--text-muted);text-align:right;margin-top:4px;}

    .error-box{background:#FEF2F2;border:1px solid rgba(239,68,68,.2);
        border-radius:10px;padding:12px 16px;margin-bottom:20px;
        color:#E05252;font-size:13px;display:flex;align-items:center;gap:8px;}

    .form-actions{display:flex;gap:12px;margin-top:28px;}
    .btn-submit{flex:1;padding:12px;background:var(--purple);color:white;
        border:none;border-radius:11px;font-family:var(--font-body);font-size:14px;
        font-weight:600;cursor:pointer;transition:background .15s;}
    .btn-submit:hover{background:var(--purple-dark);}
    .btn-cancel{padding:12px 24px;background:var(--purple-ghost);color:var(--text-mid);
        border:1.5px solid var(--border);border-radius:11px;font-family:var(--font-body);
        font-size:14px;font-weight:500;cursor:pointer;text-decoration:none;
        display:inline-flex;align-items:center;}
    .btn-cancel:hover{border-color:var(--purple-soft);}
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
    <div class=\"form-card\">
        <div class=\"form-title\">
            {{ cat ? '✏️ Modifier la catégorie' : '➕ Nouvelle catégorie' }}
        </div>

        {% if error %}
        <div class=\"error-box\">⚠️ {{ error }}</div>
        {% endif %}

        <form method=\"POST\" action=\"{{ action }}\" id=\"catForm\">
            <div class=\"form-group\">
                <label class=\"form-label\">Nom de la catégorie *</label>
                <input type=\"text\" name=\"nom\" id=\"nomInput\"
                    class=\"form-input {{ error and error starts with 'Le nom' ? 'error' }}\"
                    value=\"{{ cat ? cat.nomCategorie : '' }}\"
                    placeholder=\"Ex: Programmation, Base de données...\"
                    maxlength=\"100\" required>
                <div class=\"char-count\"><span id=\"nomCount\">0</span>/100</div>
            </div>

            <div class=\"form-group\">
                <label class=\"form-label\">Description</label>
                <textarea name=\"description\" id=\"descInput\"
                    class=\"form-textarea\"
                    placeholder=\"Décris brièvement cette catégorie...\">{{ cat ? cat.description : '' }}</textarea>
            </div>

            <div class=\"form-actions\">
                <a href=\"{{ path('forum') }}\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\">
                    {{ cat ? '💾 Enregistrer' : '➕ Créer la catégorie' }}
                </button>
            </div>
        </form>
    </div>
</main>

<script>
    const nomInput = document.getElementById('nomInput');
    const nomCount = document.getElementById('nomCount');
    function updateCount() { nomCount.textContent = nomInput.value.length; }
    nomInput.addEventListener('input', updateCount);
    updateCount();

    // Validation côté client
    document.getElementById('catForm').addEventListener('submit', function(e) {
        const nom = nomInput.value.trim();
        if (nom.length < 3) {
            e.preventDefault();
            nomInput.classList.add('error');
            nomInput.focus();
        }
    });
</script>
{% endblock %}", "forum/categorie_form.html.twig", "/Users/rayen/Downloads/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication-3/templates/forum/categorie_form.html.twig");
    }
}

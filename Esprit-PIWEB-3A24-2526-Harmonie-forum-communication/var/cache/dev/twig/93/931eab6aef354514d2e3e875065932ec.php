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
class __TwigTemplate_f4513eeb29035e5e10ad1e81a422ef98 extends Template
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
        yield "<style>
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

    // line 42
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

        // line 43
        yield from $this->load("_planning_topbar.html.twig", 43)->unwrap()->yield($context);
        // line 44
        yield "
<main class=\"page\">
    <div class=\"form-card\">
        <div class=\"form-title\">
            ";
        // line 48
        yield (((($tmp = (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✏️ Modifier la catégorie") : ("➕ Nouvelle catégorie"));
        yield "
        </div>

        ";
        // line 51
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "        <div class=\"error-box\">⚠️ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "html", null, true);
            yield "</div>
        ";
        }
        // line 54
        yield "
        <form method=\"POST\" action=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "\" id=\"catForm\">
            <div class=\"form-group\">
                <label class=\"form-label\">Nom de la catégorie *</label>
                <input type=\"text\" name=\"nom\" id=\"nomInput\"
                    class=\"form-input ";
        // line 59
        yield ((((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })()) && (is_string($_v0 = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })())) && is_string($_v1 = "Le nom") && str_starts_with($_v0, $_v1)))) ? ("error") : (""));
        yield "\"
                    value=\"";
        // line 60
        yield (((($tmp = (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 60, $this->source); })()), "nomCategorie", [], "any", false, false, false, 60), "html", null, true)) : (""));
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
        // line 70
        yield (((($tmp = (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 70, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), "html", null, true)) : (""));
        yield "</textarea>
            </div>

            <div class=\"form-actions\">
                <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\">
                    ";
        // line 76
        yield (((($tmp = (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("💾 Enregistrer") : ("➕ Créer la catégorie"));
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
        return array (  222 => 76,  217 => 74,  210 => 70,  197 => 60,  193 => 59,  186 => 55,  183 => 54,  177 => 52,  175 => 51,  169 => 48,  163 => 44,  161 => 43,  148 => 42,  102 => 5,  89 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ cat ? 'Modifier' : 'Nouvelle' }} catégorie — Harmony{% endblock %}

{% block stylesheets %}
<style>
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
{% include '_planning_topbar.html.twig' %}

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
{% endblock %}", "forum/categorie_form.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/forum/categorie_form.html.twig");
    }
}

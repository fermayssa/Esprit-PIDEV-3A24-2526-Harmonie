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

/* profile/edit.html.twig */
class __TwigTemplate_fbfc90381163070f4f51e5ab39175552 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

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

        yield "Modifier mon profil — Harmony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        :root{--purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;--text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;--border:rgba(106,90,205,.12);--font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif}
        html,body{min-height:100vh;font-family:var(--font-body);background:var(--purple-ghost);padding:40px 20px}
        .wrap{max-width:600px;margin:0 auto}
        .card{background:#fff;border:1px solid var(--border);border-radius:22px;padding:44px;box-shadow:0 20px 60px rgba(106,90,205,.08)}
        .card-title{font-family:var(--font-head);font-size:22px;font-weight:800;color:var(--text);margin-bottom:6px}
        .card-sub{font-size:13.5px;color:var(--text-muted);margin-bottom:28px}
        .form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
        .form-group{margin-bottom:14px}
        .form-group label{display:block;font-size:13px;font-weight:500;color:var(--text-mid);margin-bottom:5px}
        .form-group input,.form-group select{width:100%;padding:10px 13px;border:1.5px solid var(--border);border-radius:10px;font-family:var(--font-body);font-size:14px;color:var(--text);background:var(--purple-ghost);outline:none;transition:border-color .15s}
        .form-group input:focus,.form-group select:focus{border-color:var(--purple);background:#fff}
        .form-error{color:#E05252;font-size:12px;margin-top:4px}
        .section-divider{font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--text-muted);margin:20px 0 12px;padding-bottom:6px;border-bottom:1px solid var(--border)}
        .btn-submit{width:100%;padding:13px;background:var(--purple);color:#fff;border:none;border-radius:11px;font-family:var(--font-body);font-size:14px;font-weight:600;cursor:pointer;margin-top:10px;box-shadow:0 4px 18px rgba(106,90,205,.3);transition:background .15s}
        .btn-submit:hover{background:var(--purple-dark)}
        .btn-back{display:inline-flex;align-items:center;gap:6px;color:var(--text-mid);text-decoration:none;font-size:13px;font-weight:500;margin-bottom:20px}
        .btn-back:hover{color:var(--purple)}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
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

        // line 27
        yield "    <div class=\"wrap\">
        <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn-back\">← Retour au profil</a>
        <div class=\"card\">
            <div class=\"card-title\">Modifier mon profil ✏</div>
            <div class=\"card-sub\">Mettez à jour vos informations personnelles</div>

            ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["method" => "POST", "attr" => ["enctype" => "multipart/form-data", "novalidate" => "novalidate"]]);
        yield "
            <div class=\"section-divider\">Informations personnelles</div>
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "userNom", [], "any", false, false, false, 37), 'label');
        yield "
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "userNom", [], "any", false, false, false, 38), 'widget');
        yield "
                    <div class=\"form-error\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "userNom", [], "any", false, false, false, 39), 'errors');
        yield "</div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "userPrenom", [], "any", false, false, false, 42), 'label');
        yield "
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "userPrenom", [], "any", false, false, false, 43), 'widget');
        yield "
                    <div class=\"form-error\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "userPrenom", [], "any", false, false, false, 44), 'errors');
        yield "</div>
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "userEmail", [], "any", false, false, false, 48), 'label');
        yield "
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "userEmail", [], "any", false, false, false, 49), 'widget');
        yield "
                <div class=\"form-error\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "userEmail", [], "any", false, false, false, 50), 'errors');
        yield "</div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 54), 'label');
        yield "
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 55), 'widget', ["attr" => ["type" => "date"]]);
        yield "
                    <div class=\"form-error\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 56), 'errors');
        yield "</div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "userSexe", [], "any", false, false, false, 59), 'label');
        yield "
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "userSexe", [], "any", false, false, false, 60), 'widget');
        yield "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "avatarFile", [], "any", false, false, false, 64), 'label');
        yield "
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "avatarFile", [], "any", false, false, false, 65), 'widget');
        yield "
                <div class=\"form-error\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "avatarFile", [], "any", false, false, false, 66), 'errors');
        yield "</div>
            </div>

            <div class=\"section-divider\">Physique (optionnel)</div>
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "userPoids", [], "any", false, false, false, 72), 'label');
        yield "
                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "userPoids", [], "any", false, false, false, 73), 'widget');
        yield "
                    <div class=\"form-error\">";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "userPoids", [], "any", false, false, false, 74), 'errors');
        yield "</div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "userTaille", [], "any", false, false, false, 77), 'label');
        yield "
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "userTaille", [], "any", false, false, false, 78), 'widget');
        yield "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "userNiveauActivitePhysique", [], "any", false, false, false, 82), 'label');
        yield "
                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "userNiveauActivitePhysique", [], "any", false, false, false, 83), 'widget');
        yield "
            </div>

            <div class=\"section-divider\">Scolarité (optionnel)</div>
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "userNiveauScolaire", [], "any", false, false, false, 89), 'label');
        yield "
                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "userNiveauScolaire", [], "any", false, false, false, 90), 'widget');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "userEtablissementScolaire", [], "any", false, false, false, 93), 'label');
        yield "
                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "userEtablissementScolaire", [], "any", false, false, false, 94), 'widget');
        yield "
                </div>
            </div>

            <button class=\"btn-submit\" type=\"submit\">Sauvegarder les modifications →</button>
            ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
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
        return "profile/edit.html.twig";
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
        return array (  310 => 99,  302 => 94,  298 => 93,  292 => 90,  288 => 89,  279 => 83,  275 => 82,  268 => 78,  264 => 77,  258 => 74,  254 => 73,  250 => 72,  241 => 66,  237 => 65,  233 => 64,  226 => 60,  222 => 59,  216 => 56,  212 => 55,  208 => 54,  201 => 50,  197 => 49,  193 => 48,  186 => 44,  182 => 43,  178 => 42,  172 => 39,  168 => 38,  164 => 37,  157 => 33,  149 => 28,  146 => 27,  133 => 26,  101 => 4,  88 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Modifier mon profil — Harmony{% endblock %}
{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        :root{--purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;--text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;--border:rgba(106,90,205,.12);--font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif}
        html,body{min-height:100vh;font-family:var(--font-body);background:var(--purple-ghost);padding:40px 20px}
        .wrap{max-width:600px;margin:0 auto}
        .card{background:#fff;border:1px solid var(--border);border-radius:22px;padding:44px;box-shadow:0 20px 60px rgba(106,90,205,.08)}
        .card-title{font-family:var(--font-head);font-size:22px;font-weight:800;color:var(--text);margin-bottom:6px}
        .card-sub{font-size:13.5px;color:var(--text-muted);margin-bottom:28px}
        .form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
        .form-group{margin-bottom:14px}
        .form-group label{display:block;font-size:13px;font-weight:500;color:var(--text-mid);margin-bottom:5px}
        .form-group input,.form-group select{width:100%;padding:10px 13px;border:1.5px solid var(--border);border-radius:10px;font-family:var(--font-body);font-size:14px;color:var(--text);background:var(--purple-ghost);outline:none;transition:border-color .15s}
        .form-group input:focus,.form-group select:focus{border-color:var(--purple);background:#fff}
        .form-error{color:#E05252;font-size:12px;margin-top:4px}
        .section-divider{font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--text-muted);margin:20px 0 12px;padding-bottom:6px;border-bottom:1px solid var(--border)}
        .btn-submit{width:100%;padding:13px;background:var(--purple);color:#fff;border:none;border-radius:11px;font-family:var(--font-body);font-size:14px;font-weight:600;cursor:pointer;margin-top:10px;box-shadow:0 4px 18px rgba(106,90,205,.3);transition:background .15s}
        .btn-submit:hover{background:var(--purple-dark)}
        .btn-back{display:inline-flex;align-items:center;gap:6px;color:var(--text-mid);text-decoration:none;font-size:13px;font-weight:500;margin-bottom:20px}
        .btn-back:hover{color:var(--purple)}
    </style>
{% endblock %}
{% block body %}
    <div class=\"wrap\">
        <a href=\"{{ path('app_profile') }}\" class=\"btn-back\">← Retour au profil</a>
        <div class=\"card\">
            <div class=\"card-title\">Modifier mon profil ✏</div>
            <div class=\"card-sub\">Mettez à jour vos informations personnelles</div>

            {{ form_start(form, {'method': 'POST', 'attr': {'enctype': 'multipart/form-data', 'novalidate': 'novalidate'}}) }}
            <div class=\"section-divider\">Informations personnelles</div>
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.userNom) }}
                    {{ form_widget(form.userNom) }}
                    <div class=\"form-error\">{{ form_errors(form.userNom) }}</div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.userPrenom) }}
                    {{ form_widget(form.userPrenom) }}
                    <div class=\"form-error\">{{ form_errors(form.userPrenom) }}</div>
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.userEmail) }}
                {{ form_widget(form.userEmail) }}
                <div class=\"form-error\">{{ form_errors(form.userEmail) }}</div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.userDateDeNaissance) }}
                    {{ form_widget(form.userDateDeNaissance, {'attr': {'type': 'date'}}) }}
                    <div class=\"form-error\">{{ form_errors(form.userDateDeNaissance) }}</div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.userSexe) }}
                    {{ form_widget(form.userSexe) }}
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.avatarFile) }}
                {{ form_widget(form.avatarFile) }}
                <div class=\"form-error\">{{ form_errors(form.avatarFile) }}</div>
            </div>

            <div class=\"section-divider\">Physique (optionnel)</div>
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.userPoids) }}
                    {{ form_widget(form.userPoids) }}
                    <div class=\"form-error\">{{ form_errors(form.userPoids) }}</div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.userTaille) }}
                    {{ form_widget(form.userTaille) }}
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.userNiveauActivitePhysique) }}
                {{ form_widget(form.userNiveauActivitePhysique) }}
            </div>

            <div class=\"section-divider\">Scolarité (optionnel)</div>
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.userNiveauScolaire) }}
                    {{ form_widget(form.userNiveauScolaire) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.userEtablissementScolaire) }}
                    {{ form_widget(form.userEtablissementScolaire) }}
                </div>
            </div>

            <button class=\"btn-submit\" type=\"submit\">Sauvegarder les modifications →</button>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "profile/edit.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/profile/edit.html.twig");
    }
}

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

/* registration/register_step1.html.twig */
class __TwigTemplate_4e863213bc37b987534e6e782ee3c02e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_step1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_step1.html.twig"));

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

        yield "Inscription — Étape 1 — Harmony";
        
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
        yield "    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        :root{
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-pale:#EDE8FA;
            --purple-ghost:#F7F5FD;--text:#1C1733;--text-mid:#4A4570;
            --text-muted:#9590B8;--border:rgba(106,90,205,.15);
            --green:#10B981;--red:#EF4444;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif
        }
        html,body{min-height:100vh;font-family:var(--font-body);background:var(--purple-ghost);display:flex;align-items:center;justify-content:center;padding:40px 20px}
        .wrap{width:100%;max-width:520px}

        /* Progress */
        .progress-wrap{display:flex;align-items:center;justify-content:center;gap:0;margin-bottom:32px}
        .step-circle{
            width:36px;height:36px;border-radius:50%;
            display:flex;align-items:center;justify-content:center;
            font-family:var(--font-head);font-size:14px;font-weight:800;
            transition:.3s;
        }
        .step-circle.active{background:var(--purple);color:#fff;box-shadow:0 4px 14px rgba(106,90,205,.4)}
        .step-circle.done{background:var(--green);color:#fff}
        .step-circle.inactive{background:#fff;color:var(--text-muted);border:2px solid var(--border)}
        .step-line{width:60px;height:3px;background:var(--border)}
        .step-line.done{background:var(--green)}
        .step-labels{display:flex;justify-content:space-between;margin-bottom:28px;padding:0 4px}
        .step-label{font-size:11px;font-weight:600;color:var(--text-muted);text-align:center;width:36px}
        .step-label.active{color:var(--purple)}

        /* Card */
        .card{background:#fff;border:1px solid var(--border);border-radius:24px;padding:44px;box-shadow:0 20px 60px rgba(106,90,205,.09);animation:fadeUp .4s ease both}
        @keyframes fadeUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:none}}
        .card-logo{display:flex;align-items:center;gap:10px;margin-bottom:28px}
        .card-logo img{width:32px;height:32px;border-radius:9px;object-fit:contain}
        .card-logo span{font-family:var(--font-head);font-size:18px;font-weight:800;color:var(--text)}
        .card-title{font-family:var(--font-head);font-size:26px;font-weight:800;color:var(--text);margin-bottom:4px}
        .card-sub{font-size:13px;color:var(--text-muted);margin-bottom:28px}

        /* Form */
        .form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
        .form-group{margin-bottom:16px;position:relative}
        .form-group label{display:block;font-size:12.5px;font-weight:600;color:var(--text-mid);margin-bottom:6px;letter-spacing:.3px}
        .form-group label .req{color:var(--purple)}
        .form-group input{
            width:100%;padding:11px 14px;border:1.5px solid var(--border);
            border-radius:11px;font-family:var(--font-body);font-size:14px;color:var(--text);
            background:var(--purple-ghost);outline:none;transition:border-color .2s,background .2s;
        }
        .form-group input:focus{border-color:var(--purple);background:#fff;box-shadow:0 0 0 3px rgba(106,90,205,.08)}
        .form-group input.is-valid{border-color:var(--green)}
        .form-group input.is-invalid{border-color:var(--red)}
        .form-error{color:var(--red);font-size:11.5px;margin-top:4px;display:flex;align-items:center;gap:4px}
        .form-error::before{content:'⚠';}
        .form-hint{font-size:11px;color:var(--text-muted);margin-top:4px}

        /* Password strength */
        .pwd-strength{margin-top:8px}
        .pwd-bars{display:flex;gap:4px;margin-bottom:6px}
        .pwd-bar{height:4px;flex:1;border-radius:4px;background:#eee;transition:background .3s}
        .pwd-rules{display:grid;grid-template-columns:1fr 1fr;gap:3px}
        .pwd-rule{font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:5px;transition:color .2s}
        .pwd-rule.ok{color:var(--green)}
        .pwd-rule::before{content:'○';font-size:10px}
        .pwd-rule.ok::before{content:'✓'}

        /* Btn */
        .btn-submit{
            width:100%;padding:13px;background:var(--purple);color:#fff;
            border:none;border-radius:12px;font-family:var(--font-body);
            font-size:15px;font-weight:600;cursor:pointer;margin-top:8px;
            box-shadow:0 4px 18px rgba(106,90,205,.35);transition:background .15s,transform .1s;
            display:flex;align-items:center;justify-content:center;gap:8px;
        }
        .btn-submit:hover{background:var(--purple-dark);transform:translateY(-1px)}
        .btn-submit:active{transform:translateY(0)}
        .auth-footer{text-align:center;margin-top:20px;font-size:13px;color:var(--text-muted)}
        .auth-footer a{color:var(--purple);text-decoration:none;font-weight:600}
        .auth-footer a:hover{text-decoration:underline}

        /* Flash */
        .flash-error{background:#FEF2F2;color:#991B1B;padding:12px 16px;border-radius:10px;font-size:13px;margin-bottom:16px;border:1px solid #FECACA}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
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

        // line 91
        yield "    <div class=\"wrap\">
        <!-- Progress bar -->
        <div class=\"progress-wrap\">
            <div class=\"step-circle active\">1</div>
            <div class=\"step-line\"></div>
            <div class=\"step-circle inactive\">2</div>
        </div>
        <div class=\"step-labels\">
            <span class=\"step-label active\">Compte</span>
            <span class=\"step-label\" style=\"width:auto;margin-left:auto;\">Profil</span>
        </div>

        <div class=\"card\">
            <div class=\"card-logo\">
                <img src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Harmony\">
                <span>Harmony</span>
            </div>
            <div class=\"card-title\">Créer un compte ✦</div>
            <div class=\"card-sub\">Étape 1 sur 2 — Vos informations de base</div>

            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "flashes", ["error"], "method", false, false, false, 111));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 112
            yield "                <div class=\"flash-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "
            ";
        // line 115
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "step1Form"]]);
        yield "

            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "userNom", [], "any", false, false, false, 119), 'label');
        yield "<span class=\"req\"> *</span>
                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "userNom", [], "any", false, false, false, 120), 'widget', ["attr" => ["placeholder" => "Votre nom", "id" => "nom"]]);
        yield "
                    <div class=\"form-error\" id=\"nom-error\" style=\"display:none\"></div>
                    ";
        // line 122
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "userNom", [], "any", false, false, false, 122), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "                        <div class=\"form-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "userNom", [], "any", false, false, false, 123), 'errors');
            yield "</div>
                    ";
        }
        // line 125
        yield "                </div>
                <div class=\"form-group\">
                    ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "userPrenom", [], "any", false, false, false, 127), 'label');
        yield "<span class=\"req\"> *</span>
                    ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "userPrenom", [], "any", false, false, false, 128), 'widget', ["attr" => ["placeholder" => "Votre prénom", "id" => "prenom"]]);
        yield "
                    <div class=\"form-error\" id=\"prenom-error\" style=\"display:none\"></div>
                    ";
        // line 130
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "userPrenom", [], "any", false, false, false, 130), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                        <div class=\"form-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "userPrenom", [], "any", false, false, false, 131), 'errors');
            yield "</div>
                    ";
        }
        // line 133
        yield "                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "userEmail", [], "any", false, false, false, 137), 'label');
        yield "<span class=\"req\"> *</span>
                ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "userEmail", [], "any", false, false, false, 138), 'widget', ["attr" => ["placeholder" => "votre@email.com", "id" => "email"]]);
        yield "
                <div class=\"form-error\" id=\"email-error\" style=\"display:none\"></div>
                ";
        // line 140
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "userEmail", [], "any", false, false, false, 140), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 141
            yield "                    <div class=\"form-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "userEmail", [], "any", false, false, false, 141), 'errors');
            yield "</div>
                ";
        }
        // line 143
        yield "            </div>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "plainPassword", [], "any", false, false, false, 147), "first", [], "any", false, false, false, 147), 'label');
        yield "<span class=\"req\"> *</span>
                    ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "plainPassword", [], "any", false, false, false, 148), "first", [], "any", false, false, false, 148), 'widget', ["attr" => ["id" => "pwd"]]);
        yield "
                    <div class=\"pwd-strength\" id=\"pwdStrength\">
                        <div class=\"pwd-bars\">
                            <div class=\"pwd-bar\" id=\"bar1\"></div>
                            <div class=\"pwd-bar\" id=\"bar2\"></div>
                            <div class=\"pwd-bar\" id=\"bar3\"></div>
                            <div class=\"pwd-bar\" id=\"bar4\"></div>
                        </div>
                        <div class=\"pwd-rules\">
                            <div class=\"pwd-rule\" id=\"r-len\">8 caractères min</div>
                            <div class=\"pwd-rule\" id=\"r-maj\">1 majuscule</div>
                            <div class=\"pwd-rule\" id=\"r-num\">1 chiffre</div>
                            <div class=\"pwd-rule\" id=\"r-sym\">1 symbole</div>
                        </div>
                    </div>
                    ";
        // line 163
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "plainPassword", [], "any", false, false, false, 163), "first", [], "any", false, false, false, 163), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 164
            yield "                        <div class=\"form-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "plainPassword", [], "any", false, false, false, 164), "first", [], "any", false, false, false, 164), 'errors');
            yield "</div>
                    ";
        }
        // line 166
        yield "                </div>
                <div class=\"form-group\">
                    ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "plainPassword", [], "any", false, false, false, 168), "second", [], "any", false, false, false, 168), 'label');
        yield "<span class=\"req\"> *</span>
                    ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "plainPassword", [], "any", false, false, false, 169), "second", [], "any", false, false, false, 169), 'widget', ["attr" => ["id" => "pwd2"]]);
        yield "
                    <div class=\"form-error\" id=\"pwd2-error\" style=\"display:none\"></div>
                    ";
        // line 171
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "plainPassword", [], "any", false, false, false, 171), "second", [], "any", false, false, false, 171), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 172
            yield "                        <div class=\"form-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "plainPassword", [], "any", false, false, false, 172), "second", [], "any", false, false, false, 172), 'errors');
            yield "</div>
                    ";
        }
        // line 174
        yield "                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 178), 'label');
        yield "<span class=\"req\"> *</span>
                ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 179), 'widget');
        yield "
                ";
        // line 180
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 180), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "                    <div class=\"form-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 181), 'errors');
            yield "</div>
                ";
        }
        // line 183
        yield "            </div>

            <button class=\"btn-submit\" type=\"submit\">
                Continuer → <span style=\"font-size:18px;\">🚀</span>
            </button>
            ";
        // line 188
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), 'form_end');
        yield "

            <div class=\"auth-footer\">
                Déjà un compte ? <a href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Se connecter</a>
            </div>
        </div>
    </div>

    <script>
        // ── Validation temps réel ──────────────────────────────────────────────────
        function validate(input, errorEl, rules) {
            const val = input.value.trim();
            for (const [test, msg] of rules) {
                if (!test(val)) {
                    errorEl.textContent = msg;
                    errorEl.style.display = 'flex';
                    input.classList.add('is-invalid');
                    input.classList.remove('is-valid');
                    return false;
                }
            }
            errorEl.style.display = 'none';
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            return true;
        }

        const nom    = document.getElementById('nom');
        const prenom = document.getElementById('prenom');
        const email  = document.getElementById('email');
        const pwd    = document.getElementById('pwd');
        const pwd2   = document.getElementById('pwd2');

        nom.addEventListener('blur', () => validate(nom, document.getElementById('nom-error'), [
            [v => v.length >= 4, 'Le nom doit contenir au moins 4 caractères.'],
            [v => /^[a-zA-ZÀ-ÿ\\s\\-]+\$/.test(v), 'Le nom ne peut contenir que des lettres.'],
        ]));

        prenom.addEventListener('blur', () => validate(prenom, document.getElementById('prenom-error'), [
            [v => v.length >= 4, 'Le prénom doit contenir au moins 4 caractères.'],
            [v => /^[a-zA-ZÀ-ÿ\\s\\-]+\$/.test(v), 'Le prénom ne peut contenir que des lettres.'],
        ]));

        email.addEventListener('blur', () => validate(email, document.getElementById('email-error'), [
            [v => /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(v), 'Format email invalide (ex: user@domain.com).'],
        ]));

        // ── Password strength ──────────────────────────────────────────────────────
        const rules = {
            len: v => v.length >= 8,
            maj: v => /[A-Z]/.test(v),
            num: v => /\\d/.test(v),
            sym: v => /[\\W_]/.test(v),
        };
        const colors = ['#EF4444','#F59E0B','#10B981','#6A5ACD'];

        pwd.addEventListener('input', () => {
            const v = pwd.value;
            const score = Object.values(rules).filter(r => r(v)).length;
            ['bar1','bar2','bar3','bar4'].forEach((id, i) => {
                document.getElementById(id).style.background = i < score ? colors[score-1] : '#eee';
            });
            Object.entries(rules).forEach(([key, fn]) => {
                document.getElementById('r-' + key).classList.toggle('ok', fn(v));
            });
        });

        pwd2.addEventListener('blur', () => {
            const err = document.getElementById('pwd2-error');
            if (pwd2.value !== pwd.value) {
                err.textContent = 'Les mots de passe ne correspondent pas.';
                err.style.display = 'flex';
                pwd2.classList.add('is-invalid');
            } else {
                err.style.display = 'none';
                pwd2.classList.remove('is-invalid');
                pwd2.classList.add('is-valid');
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
        return "registration/register_step1.html.twig";
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
        return array (  409 => 191,  403 => 188,  396 => 183,  390 => 181,  388 => 180,  384 => 179,  380 => 178,  374 => 174,  368 => 172,  366 => 171,  361 => 169,  357 => 168,  353 => 166,  347 => 164,  345 => 163,  327 => 148,  323 => 147,  317 => 143,  311 => 141,  309 => 140,  304 => 138,  300 => 137,  294 => 133,  288 => 131,  286 => 130,  281 => 128,  277 => 127,  273 => 125,  267 => 123,  265 => 122,  260 => 120,  256 => 119,  249 => 115,  246 => 114,  237 => 112,  233 => 111,  224 => 105,  208 => 91,  195 => 90,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Inscription — Étape 1 — Harmony{% endblock %}

{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        :root{
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-pale:#EDE8FA;
            --purple-ghost:#F7F5FD;--text:#1C1733;--text-mid:#4A4570;
            --text-muted:#9590B8;--border:rgba(106,90,205,.15);
            --green:#10B981;--red:#EF4444;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif
        }
        html,body{min-height:100vh;font-family:var(--font-body);background:var(--purple-ghost);display:flex;align-items:center;justify-content:center;padding:40px 20px}
        .wrap{width:100%;max-width:520px}

        /* Progress */
        .progress-wrap{display:flex;align-items:center;justify-content:center;gap:0;margin-bottom:32px}
        .step-circle{
            width:36px;height:36px;border-radius:50%;
            display:flex;align-items:center;justify-content:center;
            font-family:var(--font-head);font-size:14px;font-weight:800;
            transition:.3s;
        }
        .step-circle.active{background:var(--purple);color:#fff;box-shadow:0 4px 14px rgba(106,90,205,.4)}
        .step-circle.done{background:var(--green);color:#fff}
        .step-circle.inactive{background:#fff;color:var(--text-muted);border:2px solid var(--border)}
        .step-line{width:60px;height:3px;background:var(--border)}
        .step-line.done{background:var(--green)}
        .step-labels{display:flex;justify-content:space-between;margin-bottom:28px;padding:0 4px}
        .step-label{font-size:11px;font-weight:600;color:var(--text-muted);text-align:center;width:36px}
        .step-label.active{color:var(--purple)}

        /* Card */
        .card{background:#fff;border:1px solid var(--border);border-radius:24px;padding:44px;box-shadow:0 20px 60px rgba(106,90,205,.09);animation:fadeUp .4s ease both}
        @keyframes fadeUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:none}}
        .card-logo{display:flex;align-items:center;gap:10px;margin-bottom:28px}
        .card-logo img{width:32px;height:32px;border-radius:9px;object-fit:contain}
        .card-logo span{font-family:var(--font-head);font-size:18px;font-weight:800;color:var(--text)}
        .card-title{font-family:var(--font-head);font-size:26px;font-weight:800;color:var(--text);margin-bottom:4px}
        .card-sub{font-size:13px;color:var(--text-muted);margin-bottom:28px}

        /* Form */
        .form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
        .form-group{margin-bottom:16px;position:relative}
        .form-group label{display:block;font-size:12.5px;font-weight:600;color:var(--text-mid);margin-bottom:6px;letter-spacing:.3px}
        .form-group label .req{color:var(--purple)}
        .form-group input{
            width:100%;padding:11px 14px;border:1.5px solid var(--border);
            border-radius:11px;font-family:var(--font-body);font-size:14px;color:var(--text);
            background:var(--purple-ghost);outline:none;transition:border-color .2s,background .2s;
        }
        .form-group input:focus{border-color:var(--purple);background:#fff;box-shadow:0 0 0 3px rgba(106,90,205,.08)}
        .form-group input.is-valid{border-color:var(--green)}
        .form-group input.is-invalid{border-color:var(--red)}
        .form-error{color:var(--red);font-size:11.5px;margin-top:4px;display:flex;align-items:center;gap:4px}
        .form-error::before{content:'⚠';}
        .form-hint{font-size:11px;color:var(--text-muted);margin-top:4px}

        /* Password strength */
        .pwd-strength{margin-top:8px}
        .pwd-bars{display:flex;gap:4px;margin-bottom:6px}
        .pwd-bar{height:4px;flex:1;border-radius:4px;background:#eee;transition:background .3s}
        .pwd-rules{display:grid;grid-template-columns:1fr 1fr;gap:3px}
        .pwd-rule{font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:5px;transition:color .2s}
        .pwd-rule.ok{color:var(--green)}
        .pwd-rule::before{content:'○';font-size:10px}
        .pwd-rule.ok::before{content:'✓'}

        /* Btn */
        .btn-submit{
            width:100%;padding:13px;background:var(--purple);color:#fff;
            border:none;border-radius:12px;font-family:var(--font-body);
            font-size:15px;font-weight:600;cursor:pointer;margin-top:8px;
            box-shadow:0 4px 18px rgba(106,90,205,.35);transition:background .15s,transform .1s;
            display:flex;align-items:center;justify-content:center;gap:8px;
        }
        .btn-submit:hover{background:var(--purple-dark);transform:translateY(-1px)}
        .btn-submit:active{transform:translateY(0)}
        .auth-footer{text-align:center;margin-top:20px;font-size:13px;color:var(--text-muted)}
        .auth-footer a{color:var(--purple);text-decoration:none;font-weight:600}
        .auth-footer a:hover{text-decoration:underline}

        /* Flash */
        .flash-error{background:#FEF2F2;color:#991B1B;padding:12px 16px;border-radius:10px;font-size:13px;margin-bottom:16px;border:1px solid #FECACA}
    </style>
{% endblock %}

{% block body %}
    <div class=\"wrap\">
        <!-- Progress bar -->
        <div class=\"progress-wrap\">
            <div class=\"step-circle active\">1</div>
            <div class=\"step-line\"></div>
            <div class=\"step-circle inactive\">2</div>
        </div>
        <div class=\"step-labels\">
            <span class=\"step-label active\">Compte</span>
            <span class=\"step-label\" style=\"width:auto;margin-left:auto;\">Profil</span>
        </div>

        <div class=\"card\">
            <div class=\"card-logo\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Harmony\">
                <span>Harmony</span>
            </div>
            <div class=\"card-title\">Créer un compte ✦</div>
            <div class=\"card-sub\">Étape 1 sur 2 — Vos informations de base</div>

            {% for msg in app.flashes('error') %}
                <div class=\"flash-error\">{{ msg }}</div>
            {% endfor %}

            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'step1Form'}}) }}

            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.userNom) }}<span class=\"req\"> *</span>
                    {{ form_widget(form.userNom, {'attr': {'placeholder': 'Votre nom', 'id': 'nom'}}) }}
                    <div class=\"form-error\" id=\"nom-error\" style=\"display:none\"></div>
                    {% if form_errors(form.userNom) %}
                        <div class=\"form-error\">{{ form_errors(form.userNom) }}</div>
                    {% endif %}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.userPrenom) }}<span class=\"req\"> *</span>
                    {{ form_widget(form.userPrenom, {'attr': {'placeholder': 'Votre prénom', 'id': 'prenom'}}) }}
                    <div class=\"form-error\" id=\"prenom-error\" style=\"display:none\"></div>
                    {% if form_errors(form.userPrenom) %}
                        <div class=\"form-error\">{{ form_errors(form.userPrenom) }}</div>
                    {% endif %}
                </div>
            </div>

            <div class=\"form-group\">
                {{ form_label(form.userEmail) }}<span class=\"req\"> *</span>
                {{ form_widget(form.userEmail, {'attr': {'placeholder': 'votre@email.com', 'id': 'email'}}) }}
                <div class=\"form-error\" id=\"email-error\" style=\"display:none\"></div>
                {% if form_errors(form.userEmail) %}
                    <div class=\"form-error\">{{ form_errors(form.userEmail) }}</div>
                {% endif %}
            </div>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.plainPassword.first) }}<span class=\"req\"> *</span>
                    {{ form_widget(form.plainPassword.first, {'attr': {'id': 'pwd'}}) }}
                    <div class=\"pwd-strength\" id=\"pwdStrength\">
                        <div class=\"pwd-bars\">
                            <div class=\"pwd-bar\" id=\"bar1\"></div>
                            <div class=\"pwd-bar\" id=\"bar2\"></div>
                            <div class=\"pwd-bar\" id=\"bar3\"></div>
                            <div class=\"pwd-bar\" id=\"bar4\"></div>
                        </div>
                        <div class=\"pwd-rules\">
                            <div class=\"pwd-rule\" id=\"r-len\">8 caractères min</div>
                            <div class=\"pwd-rule\" id=\"r-maj\">1 majuscule</div>
                            <div class=\"pwd-rule\" id=\"r-num\">1 chiffre</div>
                            <div class=\"pwd-rule\" id=\"r-sym\">1 symbole</div>
                        </div>
                    </div>
                    {% if form_errors(form.plainPassword.first) %}
                        <div class=\"form-error\">{{ form_errors(form.plainPassword.first) }}</div>
                    {% endif %}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.plainPassword.second) }}<span class=\"req\"> *</span>
                    {{ form_widget(form.plainPassword.second, {'attr': {'id': 'pwd2'}}) }}
                    <div class=\"form-error\" id=\"pwd2-error\" style=\"display:none\"></div>
                    {% if form_errors(form.plainPassword.second) %}
                        <div class=\"form-error\">{{ form_errors(form.plainPassword.second) }}</div>
                    {% endif %}
                </div>
            </div>

            <div class=\"form-group\">
                {{ form_label(form.userDateDeNaissance) }}<span class=\"req\"> *</span>
                {{ form_widget(form.userDateDeNaissance) }}
                {% if form_errors(form.userDateDeNaissance) %}
                    <div class=\"form-error\">{{ form_errors(form.userDateDeNaissance) }}</div>
                {% endif %}
            </div>

            <button class=\"btn-submit\" type=\"submit\">
                Continuer → <span style=\"font-size:18px;\">🚀</span>
            </button>
            {{ form_end(form) }}

            <div class=\"auth-footer\">
                Déjà un compte ? <a href=\"{{ path('app_login') }}\">Se connecter</a>
            </div>
        </div>
    </div>

    <script>
        // ── Validation temps réel ──────────────────────────────────────────────────
        function validate(input, errorEl, rules) {
            const val = input.value.trim();
            for (const [test, msg] of rules) {
                if (!test(val)) {
                    errorEl.textContent = msg;
                    errorEl.style.display = 'flex';
                    input.classList.add('is-invalid');
                    input.classList.remove('is-valid');
                    return false;
                }
            }
            errorEl.style.display = 'none';
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            return true;
        }

        const nom    = document.getElementById('nom');
        const prenom = document.getElementById('prenom');
        const email  = document.getElementById('email');
        const pwd    = document.getElementById('pwd');
        const pwd2   = document.getElementById('pwd2');

        nom.addEventListener('blur', () => validate(nom, document.getElementById('nom-error'), [
            [v => v.length >= 4, 'Le nom doit contenir au moins 4 caractères.'],
            [v => /^[a-zA-ZÀ-ÿ\\s\\-]+\$/.test(v), 'Le nom ne peut contenir que des lettres.'],
        ]));

        prenom.addEventListener('blur', () => validate(prenom, document.getElementById('prenom-error'), [
            [v => v.length >= 4, 'Le prénom doit contenir au moins 4 caractères.'],
            [v => /^[a-zA-ZÀ-ÿ\\s\\-]+\$/.test(v), 'Le prénom ne peut contenir que des lettres.'],
        ]));

        email.addEventListener('blur', () => validate(email, document.getElementById('email-error'), [
            [v => /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(v), 'Format email invalide (ex: user@domain.com).'],
        ]));

        // ── Password strength ──────────────────────────────────────────────────────
        const rules = {
            len: v => v.length >= 8,
            maj: v => /[A-Z]/.test(v),
            num: v => /\\d/.test(v),
            sym: v => /[\\W_]/.test(v),
        };
        const colors = ['#EF4444','#F59E0B','#10B981','#6A5ACD'];

        pwd.addEventListener('input', () => {
            const v = pwd.value;
            const score = Object.values(rules).filter(r => r(v)).length;
            ['bar1','bar2','bar3','bar4'].forEach((id, i) => {
                document.getElementById(id).style.background = i < score ? colors[score-1] : '#eee';
            });
            Object.entries(rules).forEach(([key, fn]) => {
                document.getElementById('r-' + key).classList.toggle('ok', fn(v));
            });
        });

        pwd2.addEventListener('blur', () => {
            const err = document.getElementById('pwd2-error');
            if (pwd2.value !== pwd.value) {
                err.textContent = 'Les mots de passe ne correspondent pas.';
                err.style.display = 'flex';
                pwd2.classList.add('is-invalid');
            } else {
                err.style.display = 'none';
                pwd2.classList.remove('is-invalid');
                pwd2.classList.add('is-valid');
            }
        });
    </script>
{% endblock %}
", "registration/register_step1.html.twig", "/Users/rayen/Downloads/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication-3/templates/registration/register_step1.html.twig");
    }
}

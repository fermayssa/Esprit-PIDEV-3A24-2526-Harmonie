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

/* registration/register_step2.html.twig */
class __TwigTemplate_cc50b914880d761c127423b3a7ae296b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_step2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_step2.html.twig"));

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

        yield "Inscription — Étape 2 — Harmony";
        
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
            --green:#10B981;--red:#EF4444;--orange:#F59E0B;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif
        }
        html,body{min-height:100vh;font-family:var(--font-body);background:var(--purple-ghost);padding:40px 20px}
        .wrap{width:100%;max-width:560px;margin:0 auto}

        /* Progress */
        .progress-wrap{display:flex;align-items:center;justify-content:center;gap:0;margin-bottom:32px}
        .step-circle{width:36px;height:36px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:var(--font-head);font-size:14px;font-weight:800;transition:.3s}
        .step-circle.done{background:var(--green);color:#fff}
        .step-circle.active{background:var(--purple);color:#fff;box-shadow:0 4px 14px rgba(106,90,205,.4)}
        .step-line{width:60px;height:3px;background:var(--border)}
        .step-line.done{background:var(--green)}
        .step-labels{display:flex;justify-content:space-between;margin-bottom:28px;padding:0 4px}
        .step-label{font-size:11px;font-weight:600;color:var(--text-muted)}
        .step-label.active{color:var(--purple)}
        .step-label.done{color:var(--green)}

        /* Card global */
        .card{background:#fff;border:1px solid var(--border);border-radius:24px;padding:44px;box-shadow:0 20px 60px rgba(106,90,205,.09);animation:fadeUp .4s ease both;margin-bottom:20px}
        @keyframes fadeUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:none}}
        .card-logo{display:flex;align-items:center;gap:10px;margin-bottom:24px}
        .card-logo img{width:32px;height:32px;border-radius:9px;object-fit:contain}
        .card-logo span{font-family:var(--font-head);font-size:18px;font-weight:800;color:var(--text)}
        .card-title{font-family:var(--font-head);font-size:26px;font-weight:800;color:var(--text);margin-bottom:4px}
        .card-sub{font-size:13px;color:var(--text-muted);margin-bottom:28px}

        /* Sections colorées */
        .section-card{border-radius:18px;padding:24px;margin-bottom:20px}
        .section-purple{background:var(--purple-pale);border:1px solid rgba(106,90,205,.15)}
        .section-blue{background:#EFF6FF;border:1px solid rgba(59,130,246,.15)}
        .section-yellow{background:#FFFBEB;border:1px solid rgba(245,158,11,.15)}
        .section-title{font-family:var(--font-head);font-size:16px;font-weight:700;color:var(--text);margin-bottom:16px;display:flex;align-items:center;gap:8px}

        /* Avatar uploader */
        .avatar-section{display:flex;align-items:center;gap:20px;margin-bottom:16px}
        .avatar-preview{
            width:80px;height:80px;border-radius:50%;
            background:var(--purple);color:#fff;
            font-family:var(--font-head);font-size:28px;font-weight:800;
            display:flex;align-items:center;justify-content:center;
            flex-shrink:0;overflow:hidden;border:3px solid #fff;
            box-shadow:0 4px 14px rgba(106,90,205,.3);
        }
        .avatar-preview img{width:100%;height:100%;object-fit:cover}
        .avatar-controls{display:flex;flex-direction:column;gap:8px}
        .avatar-hint{font-size:11.5px;color:var(--text-muted)}
        .btn-upload{
            padding:9px 18px;background:var(--purple);color:#fff;
            border:none;border-radius:10px;font-size:13px;font-weight:600;
            cursor:pointer;display:flex;align-items:center;gap:7px;
            font-family:var(--font-body);transition:.15s;
        }
        .btn-upload:hover{background:var(--purple-dark)}
        .btn-remove{
            padding:9px 18px;background:#fff;color:var(--text-muted);
            border:1.5px solid var(--border);border-radius:10px;font-size:13px;
            font-weight:500;cursor:pointer;font-family:var(--font-body);transition:.15s;
        }
        .btn-remove:hover{border-color:#EF4444;color:#EF4444}

        /* Form */
        .form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
        .form-group{margin-bottom:14px}
        .form-group label{display:block;font-size:12.5px;font-weight:600;color:var(--text-mid);margin-bottom:6px}
        .form-group input,.form-group select{
            width:100%;padding:10px 13px;border:1.5px solid rgba(106,90,205,.15);
            border-radius:10px;font-family:var(--font-body);font-size:14px;color:var(--text);
            background:#fff;outline:none;transition:border-color .2s;
        }
        .form-group input:focus,.form-group select:focus{border-color:var(--purple);box-shadow:0 0 0 3px rgba(106,90,205,.08)}
        .form-error{color:var(--red);font-size:11.5px;margin-top:4px}
        .form-hint{font-size:11px;color:var(--text-muted);margin-top:3px}

        /* Buttons navigation */
        .nav-btns{display:flex;gap:12px;margin-top:8px}
        .btn-back{
            flex:1;padding:13px;background:#fff;color:var(--text-mid);
            border:1.5px solid var(--border);border-radius:12px;font-family:var(--font-body);
            font-size:14px;font-weight:500;cursor:pointer;text-decoration:none;
            display:flex;align-items:center;justify-content:center;gap:8px;transition:.15s;
        }
        .btn-back:hover{border-color:var(--purple);color:var(--purple)}
        .btn-submit{
            flex:2;padding:13px;background:var(--purple);color:#fff;
            border:none;border-radius:12px;font-family:var(--font-body);
            font-size:14px;font-weight:600;cursor:pointer;
            box-shadow:0 4px 18px rgba(106,90,205,.35);transition:.15s;
            display:flex;align-items:center;justify-content:center;gap:8px;
        }
        .btn-submit:hover{background:var(--purple-dark)}

        /* Flash */
        .flash-error{background:#FEF2F2;color:#991B1B;padding:12px 16px;border-radius:10px;font-size:13px;margin-bottom:16px;border:1px solid #FECACA}

        /* Security note */
        .security-note{
            background:var(--purple-ghost);border:1px solid var(--border);
            border-radius:12px;padding:14px 16px;font-size:12px;
            color:var(--text-muted);display:flex;align-items:flex-start;gap:10px;
            margin-top:16px;
        }
        .security-note .lock{font-size:18px;flex-shrink:0}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        // line 119
        yield "    <div class=\"wrap\">
        <!-- Progress -->
        <div class=\"progress-wrap\">
            <div class=\"step-circle done\">✓</div>
            <div class=\"step-line done\"></div>
            <div class=\"step-circle active\">2</div>
        </div>
        <div class=\"step-labels\">
            <span class=\"step-label done\">Compte</span>
            <span class=\"step-label active\">Profil</span>
        </div>

        <div class=\"card\">
            <div class=\"card-logo\">
                <img src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Harmony\">
                <span>Harmony</span>
            </div>
            <div class=\"card-title\">Informations complémentaires</div>
            <div class=\"card-sub\">Étape 2 sur 2 — Personnalisez votre profil</div>

            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "flashes", ["error"], "method", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 140
            yield "                <div class=\"flash-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "
            ";
        // line 143
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "novalidate" => "novalidate", "id" => "step2Form"]]);
        yield "

            <!-- Photo de profil -->
            <div class=\"section-card section-purple\">
                <div class=\"section-title\">📷 Photo de profil <span style=\"font-size:12px;font-weight:400;color:var(--text-muted)\">(optionnel)</span></div>
                <div class=\"avatar-section\">
                    <div class=\"avatar-preview\" id=\"avatarPreview\">
                        ";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["step1"]) || array_key_exists("step1", $context) ? $context["step1"] : (function () { throw new RuntimeError('Variable "step1" does not exist.', 150, $this->source); })()), "prenom", [], "any", false, false, false, 150))), "html", null, true);
        yield "
                    </div>
                    <div class=\"avatar-controls\">
                        <div class=\"avatar-hint\" id=\"avatarHint\">Aucune image sélectionnée</div>
                        <div style=\"display:flex;gap:8px\">
                            ";
        // line 160
        yield "                            <button type=\"button\" class=\"btn-upload\" id=\"openAvatarBtn\">
                                📁 Choisir une image
                            </button>
                            <button type=\"button\" class=\"btn-remove\" id=\"removeBtn\" onclick=\"removeAvatar()\" style=\"display:none\">
                                🗑 Supprimer
                            </button>
                        </div>
                        <div class=\"avatar-hint\">Formats acceptés : JPG, PNG, GIF, WebP (max 2 Mo)</div>
                    </div>
                </div>
                ";
        // line 171
        yield "                <div style=\"display:none\" id=\"avatarFieldWrapper\">
                    ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "avatarFile", [], "any", false, false, false, 172), 'widget');
        yield "
                </div>
                ";
        // line 174
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "avatarFile", [], "any", false, false, false, 174), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                    <div class=\"form-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "avatarFile", [], "any", false, false, false, 175), 'errors');
            yield "</div>
                ";
        }
        // line 177
        yield "            </div>

            <!-- Infos de santé -->
            <div class=\"section-card section-blue\">
                <div class=\"section-title\">💪 Informations de santé</div>

                <div class=\"form-group\">
                    ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "userSexe", [], "any", false, false, false, 184), 'label');
        yield "
                    ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "userSexe", [], "any", false, false, false, 185), 'widget');
        yield "
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "userPoids", [], "any", false, false, false, 190), 'label');
        yield "
                        ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "userPoids", [], "any", false, false, false, 191), 'widget');
        yield "
                        <div class=\"form-hint\">Entre 40 et 200 kg</div>
                        ";
        // line 193
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "userPoids", [], "any", false, false, false, 193), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 194
            yield "                            <div class=\"form-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "userPoids", [], "any", false, false, false, 194), 'errors');
            yield "</div>
                        ";
        }
        // line 196
        yield "                    </div>
                    <div class=\"form-group\">
                        ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "userTaille", [], "any", false, false, false, 198), 'label');
        yield "
                        ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "userTaille", [], "any", false, false, false, 199), 'widget');
        yield "
                        <div class=\"form-hint\">Entre 100 et 210 cm</div>
                        ";
        // line 201
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "userTaille", [], "any", false, false, false, 201), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 202
            yield "                            <div class=\"form-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "userTaille", [], "any", false, false, false, 202), 'errors');
            yield "</div>
                        ";
        }
        // line 204
        yield "                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "userNiveauActivitePhysique", [], "any", false, false, false, 208), 'label');
        yield "
                    ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "userNiveauActivitePhysique", [], "any", false, false, false, 209), 'widget');
        yield "
                </div>
            </div>

            <!-- Infos scolaires -->
            <div class=\"section-card section-yellow\">
                <div class=\"section-title\">🎓 Informations scolaires</div>

                <div class=\"form-group\">
                    ";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "userNiveauScolaire", [], "any", false, false, false, 218), 'label');
        yield "
                    ";
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "userNiveauScolaire", [], "any", false, false, false, 219), 'widget');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "userEtablissementScolaire", [], "any", false, false, false, 223), 'label');
        yield "
                    ";
        // line 224
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "userEtablissementScolaire", [], "any", false, false, false, 224), 'widget');
        yield "
                </div>
            </div>

            <!-- Navigation -->
            <div class=\"nav-btns\">
                <a href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn-back\">← Retour</a>
                <button type=\"submit\" class=\"btn-submit\">Créer mon compte ✦</button>
            </div>

            <div class=\"security-note\">
                <span class=\"lock\">🔒</span>
                <span>Vos données sont chiffrées et sécurisées. Les images sont vérifiées automatiquement.</span>
            </div>

            ";
        // line 239
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>

    <script>
        // ── Avatar preview ──────────────────────────────────────────────────────────
        // On récupère le vrai input file généré par Symfony (quel que soit son id préfixé)
        const avatarInput   = document.querySelector('#avatarFieldWrapper input[type=\"file\"]');
        const avatarPreview = document.getElementById('avatarPreview');
        const avatarHint    = document.getElementById('avatarHint');
        const removeBtn     = document.getElementById('removeBtn');
        const initiale      = '";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["step1"]) || array_key_exists("step1", $context) ? $context["step1"] : (function () { throw new RuntimeError('Variable "step1" does not exist.', 250, $this->source); })()), "prenom", [], "any", false, false, false, 250))), "html", null, true);
        yield "';

        // Le bouton \"Choisir une image\" déclenche le vrai input file caché
        document.getElementById('openAvatarBtn').addEventListener('click', function() {
            if (avatarInput) {
                avatarInput.click();
            }
        });

        if (avatarInput) {
            avatarInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const file = this.files[0];
                    const reader = new FileReader();
                    reader.onload = e => {
                        avatarPreview.innerHTML = `<img src=\"\${e.target.result}\" alt=\"Avatar\" style=\"width:80px;height:80px;border-radius:50%;object-fit:cover;\">`;
                        avatarHint.textContent = file.name + ' (' + (file.size / 1024).toFixed(0) + ' Ko)';
                        removeBtn.style.display = 'flex';
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        function removeAvatar() {
            if (avatarInput) avatarInput.value = '';
            avatarPreview.innerHTML = initiale;
            avatarHint.textContent = 'Aucune image sélectionnée';
            removeBtn.style.display = 'none';
        }
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
        return "registration/register_step2.html.twig";
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
        return array (  454 => 250,  440 => 239,  428 => 230,  419 => 224,  415 => 223,  408 => 219,  404 => 218,  392 => 209,  388 => 208,  382 => 204,  376 => 202,  374 => 201,  369 => 199,  365 => 198,  361 => 196,  355 => 194,  353 => 193,  348 => 191,  344 => 190,  336 => 185,  332 => 184,  323 => 177,  317 => 175,  315 => 174,  310 => 172,  307 => 171,  295 => 160,  287 => 150,  277 => 143,  274 => 142,  265 => 140,  261 => 139,  252 => 133,  236 => 119,  223 => 118,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Inscription — Étape 2 — Harmony{% endblock %}

{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        :root{
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-pale:#EDE8FA;
            --purple-ghost:#F7F5FD;--text:#1C1733;--text-mid:#4A4570;
            --text-muted:#9590B8;--border:rgba(106,90,205,.15);
            --green:#10B981;--red:#EF4444;--orange:#F59E0B;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif
        }
        html,body{min-height:100vh;font-family:var(--font-body);background:var(--purple-ghost);padding:40px 20px}
        .wrap{width:100%;max-width:560px;margin:0 auto}

        /* Progress */
        .progress-wrap{display:flex;align-items:center;justify-content:center;gap:0;margin-bottom:32px}
        .step-circle{width:36px;height:36px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:var(--font-head);font-size:14px;font-weight:800;transition:.3s}
        .step-circle.done{background:var(--green);color:#fff}
        .step-circle.active{background:var(--purple);color:#fff;box-shadow:0 4px 14px rgba(106,90,205,.4)}
        .step-line{width:60px;height:3px;background:var(--border)}
        .step-line.done{background:var(--green)}
        .step-labels{display:flex;justify-content:space-between;margin-bottom:28px;padding:0 4px}
        .step-label{font-size:11px;font-weight:600;color:var(--text-muted)}
        .step-label.active{color:var(--purple)}
        .step-label.done{color:var(--green)}

        /* Card global */
        .card{background:#fff;border:1px solid var(--border);border-radius:24px;padding:44px;box-shadow:0 20px 60px rgba(106,90,205,.09);animation:fadeUp .4s ease both;margin-bottom:20px}
        @keyframes fadeUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:none}}
        .card-logo{display:flex;align-items:center;gap:10px;margin-bottom:24px}
        .card-logo img{width:32px;height:32px;border-radius:9px;object-fit:contain}
        .card-logo span{font-family:var(--font-head);font-size:18px;font-weight:800;color:var(--text)}
        .card-title{font-family:var(--font-head);font-size:26px;font-weight:800;color:var(--text);margin-bottom:4px}
        .card-sub{font-size:13px;color:var(--text-muted);margin-bottom:28px}

        /* Sections colorées */
        .section-card{border-radius:18px;padding:24px;margin-bottom:20px}
        .section-purple{background:var(--purple-pale);border:1px solid rgba(106,90,205,.15)}
        .section-blue{background:#EFF6FF;border:1px solid rgba(59,130,246,.15)}
        .section-yellow{background:#FFFBEB;border:1px solid rgba(245,158,11,.15)}
        .section-title{font-family:var(--font-head);font-size:16px;font-weight:700;color:var(--text);margin-bottom:16px;display:flex;align-items:center;gap:8px}

        /* Avatar uploader */
        .avatar-section{display:flex;align-items:center;gap:20px;margin-bottom:16px}
        .avatar-preview{
            width:80px;height:80px;border-radius:50%;
            background:var(--purple);color:#fff;
            font-family:var(--font-head);font-size:28px;font-weight:800;
            display:flex;align-items:center;justify-content:center;
            flex-shrink:0;overflow:hidden;border:3px solid #fff;
            box-shadow:0 4px 14px rgba(106,90,205,.3);
        }
        .avatar-preview img{width:100%;height:100%;object-fit:cover}
        .avatar-controls{display:flex;flex-direction:column;gap:8px}
        .avatar-hint{font-size:11.5px;color:var(--text-muted)}
        .btn-upload{
            padding:9px 18px;background:var(--purple);color:#fff;
            border:none;border-radius:10px;font-size:13px;font-weight:600;
            cursor:pointer;display:flex;align-items:center;gap:7px;
            font-family:var(--font-body);transition:.15s;
        }
        .btn-upload:hover{background:var(--purple-dark)}
        .btn-remove{
            padding:9px 18px;background:#fff;color:var(--text-muted);
            border:1.5px solid var(--border);border-radius:10px;font-size:13px;
            font-weight:500;cursor:pointer;font-family:var(--font-body);transition:.15s;
        }
        .btn-remove:hover{border-color:#EF4444;color:#EF4444}

        /* Form */
        .form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
        .form-group{margin-bottom:14px}
        .form-group label{display:block;font-size:12.5px;font-weight:600;color:var(--text-mid);margin-bottom:6px}
        .form-group input,.form-group select{
            width:100%;padding:10px 13px;border:1.5px solid rgba(106,90,205,.15);
            border-radius:10px;font-family:var(--font-body);font-size:14px;color:var(--text);
            background:#fff;outline:none;transition:border-color .2s;
        }
        .form-group input:focus,.form-group select:focus{border-color:var(--purple);box-shadow:0 0 0 3px rgba(106,90,205,.08)}
        .form-error{color:var(--red);font-size:11.5px;margin-top:4px}
        .form-hint{font-size:11px;color:var(--text-muted);margin-top:3px}

        /* Buttons navigation */
        .nav-btns{display:flex;gap:12px;margin-top:8px}
        .btn-back{
            flex:1;padding:13px;background:#fff;color:var(--text-mid);
            border:1.5px solid var(--border);border-radius:12px;font-family:var(--font-body);
            font-size:14px;font-weight:500;cursor:pointer;text-decoration:none;
            display:flex;align-items:center;justify-content:center;gap:8px;transition:.15s;
        }
        .btn-back:hover{border-color:var(--purple);color:var(--purple)}
        .btn-submit{
            flex:2;padding:13px;background:var(--purple);color:#fff;
            border:none;border-radius:12px;font-family:var(--font-body);
            font-size:14px;font-weight:600;cursor:pointer;
            box-shadow:0 4px 18px rgba(106,90,205,.35);transition:.15s;
            display:flex;align-items:center;justify-content:center;gap:8px;
        }
        .btn-submit:hover{background:var(--purple-dark)}

        /* Flash */
        .flash-error{background:#FEF2F2;color:#991B1B;padding:12px 16px;border-radius:10px;font-size:13px;margin-bottom:16px;border:1px solid #FECACA}

        /* Security note */
        .security-note{
            background:var(--purple-ghost);border:1px solid var(--border);
            border-radius:12px;padding:14px 16px;font-size:12px;
            color:var(--text-muted);display:flex;align-items:flex-start;gap:10px;
            margin-top:16px;
        }
        .security-note .lock{font-size:18px;flex-shrink:0}
    </style>
{% endblock %}

{% block body %}
    <div class=\"wrap\">
        <!-- Progress -->
        <div class=\"progress-wrap\">
            <div class=\"step-circle done\">✓</div>
            <div class=\"step-line done\"></div>
            <div class=\"step-circle active\">2</div>
        </div>
        <div class=\"step-labels\">
            <span class=\"step-label done\">Compte</span>
            <span class=\"step-label active\">Profil</span>
        </div>

        <div class=\"card\">
            <div class=\"card-logo\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Harmony\">
                <span>Harmony</span>
            </div>
            <div class=\"card-title\">Informations complémentaires</div>
            <div class=\"card-sub\">Étape 2 sur 2 — Personnalisez votre profil</div>

            {% for msg in app.flashes('error') %}
                <div class=\"flash-error\">⚠ {{ msg }}</div>
            {% endfor %}

            {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'novalidate': 'novalidate', 'id': 'step2Form'}}) }}

            <!-- Photo de profil -->
            <div class=\"section-card section-purple\">
                <div class=\"section-title\">📷 Photo de profil <span style=\"font-size:12px;font-weight:400;color:var(--text-muted)\">(optionnel)</span></div>
                <div class=\"avatar-section\">
                    <div class=\"avatar-preview\" id=\"avatarPreview\">
                        {{ step1.prenom|first|upper }}
                    </div>
                    <div class=\"avatar-controls\">
                        <div class=\"avatar-hint\" id=\"avatarHint\">Aucune image sélectionnée</div>
                        <div style=\"display:flex;gap:8px\">
                            {#
                              IMPORTANT : on récupère l'id généré par Symfony avec form_widget
                              puis on cible ce champ depuis JS via document.querySelector('[name\$=\"[avatarFile]\"]')
                              pour éviter les problèmes de préfixe de nom de formulaire.
                            #}
                            <button type=\"button\" class=\"btn-upload\" id=\"openAvatarBtn\">
                                📁 Choisir une image
                            </button>
                            <button type=\"button\" class=\"btn-remove\" id=\"removeBtn\" onclick=\"removeAvatar()\" style=\"display:none\">
                                🗑 Supprimer
                            </button>
                        </div>
                        <div class=\"avatar-hint\">Formats acceptés : JPG, PNG, GIF, WebP (max 2 Mo)</div>
                    </div>
                </div>
                {# Champ fichier rendu par Symfony — caché visuellement #}
                <div style=\"display:none\" id=\"avatarFieldWrapper\">
                    {{ form_widget(form.avatarFile) }}
                </div>
                {% if form_errors(form.avatarFile) %}
                    <div class=\"form-error\">{{ form_errors(form.avatarFile) }}</div>
                {% endif %}
            </div>

            <!-- Infos de santé -->
            <div class=\"section-card section-blue\">
                <div class=\"section-title\">💪 Informations de santé</div>

                <div class=\"form-group\">
                    {{ form_label(form.userSexe) }}
                    {{ form_widget(form.userSexe) }}
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        {{ form_label(form.userPoids) }}
                        {{ form_widget(form.userPoids) }}
                        <div class=\"form-hint\">Entre 40 et 200 kg</div>
                        {% if form_errors(form.userPoids) %}
                            <div class=\"form-error\">{{ form_errors(form.userPoids) }}</div>
                        {% endif %}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.userTaille) }}
                        {{ form_widget(form.userTaille) }}
                        <div class=\"form-hint\">Entre 100 et 210 cm</div>
                        {% if form_errors(form.userTaille) %}
                            <div class=\"form-error\">{{ form_errors(form.userTaille) }}</div>
                        {% endif %}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.userNiveauActivitePhysique) }}
                    {{ form_widget(form.userNiveauActivitePhysique) }}
                </div>
            </div>

            <!-- Infos scolaires -->
            <div class=\"section-card section-yellow\">
                <div class=\"section-title\">🎓 Informations scolaires</div>

                <div class=\"form-group\">
                    {{ form_label(form.userNiveauScolaire) }}
                    {{ form_widget(form.userNiveauScolaire) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.userEtablissementScolaire) }}
                    {{ form_widget(form.userEtablissementScolaire) }}
                </div>
            </div>

            <!-- Navigation -->
            <div class=\"nav-btns\">
                <a href=\"{{ path('app_register') }}\" class=\"btn-back\">← Retour</a>
                <button type=\"submit\" class=\"btn-submit\">Créer mon compte ✦</button>
            </div>

            <div class=\"security-note\">
                <span class=\"lock\">🔒</span>
                <span>Vos données sont chiffrées et sécurisées. Les images sont vérifiées automatiquement.</span>
            </div>

            {{ form_end(form) }}
        </div>
    </div>

    <script>
        // ── Avatar preview ──────────────────────────────────────────────────────────
        // On récupère le vrai input file généré par Symfony (quel que soit son id préfixé)
        const avatarInput   = document.querySelector('#avatarFieldWrapper input[type=\"file\"]');
        const avatarPreview = document.getElementById('avatarPreview');
        const avatarHint    = document.getElementById('avatarHint');
        const removeBtn     = document.getElementById('removeBtn');
        const initiale      = '{{ step1.prenom|first|upper }}';

        // Le bouton \"Choisir une image\" déclenche le vrai input file caché
        document.getElementById('openAvatarBtn').addEventListener('click', function() {
            if (avatarInput) {
                avatarInput.click();
            }
        });

        if (avatarInput) {
            avatarInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const file = this.files[0];
                    const reader = new FileReader();
                    reader.onload = e => {
                        avatarPreview.innerHTML = `<img src=\"\${e.target.result}\" alt=\"Avatar\" style=\"width:80px;height:80px;border-radius:50%;object-fit:cover;\">`;
                        avatarHint.textContent = file.name + ' (' + (file.size / 1024).toFixed(0) + ' Ko)';
                        removeBtn.style.display = 'flex';
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        function removeAvatar() {
            if (avatarInput) avatarInput.value = '';
            avatarPreview.innerHTML = initiale;
            avatarHint.textContent = 'Aucune image sélectionnée';
            removeBtn.style.display = 'none';
        }
    </script>
{% endblock %}
", "registration/register_step2.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/registration/register_step2.html.twig");
    }
}

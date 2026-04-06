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

/* admin/users/edit.html.twig */
class __TwigTemplate_b1a1599e66c4ea375dde3401758e1927 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/edit.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Modifier — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "userPrenom", [], "any", false, false, false, 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "userNom", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        yield "✏ Modifier le compte";
        
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
        yield "    <style>
        .back-link { display: inline-flex; align-items: center; gap: 6px; color: var(--text-mid); text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; }
        .back-link:hover { color: var(--purple); }
        .edit-card { background: var(--white); border: 1px solid var(--border); border-radius: 22px; padding: 40px; max-width: 680px; }
        .edit-card h3 { font-family: var(--font-head); font-size: 18px; font-weight: 700; margin-bottom: 24px; color: var(--text); }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .form-group { margin-bottom: 14px; }
        .form-group label { display: block; font-size: 13px; font-weight: 500; color: var(--text-mid); margin-bottom: 5px; }
        .form-group input, .form-group select { width: 100%; padding: 10px 13px; border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 14px; color: var(--text); background: var(--purple-ghost); outline: none; transition: border-color .15s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--purple); background: #fff; }
        .form-error { color: #E05252; font-size: 12px; margin-top: 4px; }
        .section-divider { font-size: 11px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; color: var(--text-muted); margin: 20px 0 12px; padding-bottom: 6px; border-bottom: 1px solid var(--border); }
        .btn-submit { padding: 12px 28px; background: var(--purple); color: #fff; border: none; border-radius: 11px; font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 18px rgba(106,90,205,.3); transition: background .15s; }
        .btn-submit:hover { background: var(--purple-dark); }
        .btn-cancel { padding: 12px 22px; background: var(--purple-ghost); color: var(--text-mid); border: 1.5px solid var(--border); border-radius: 11px; font-family: var(--font-body); font-size: 14px; font-weight: 500; text-decoration: none; margin-left: 10px; }
        .btn-cancel:hover { border-color: var(--purple-soft); color: var(--purple); }

        /* Avatar uploader */
        .avatar-uploader {
            display: flex; align-items: center; gap: 20px;
            background: var(--purple-ghost); border: 1px solid var(--border);
            border-radius: 14px; padding: 16px; margin-bottom: 14px;
        }
        .avatar-current {
            width: 72px; height: 72px; border-radius: 50%; flex-shrink: 0;
            background: var(--purple); display: grid; place-items: center;
            font-family: var(--font-head); font-size: 26px; font-weight: 800; color: #fff;
            border: 3px solid var(--white); overflow: hidden;
        }
        .avatar-current img { width: 72px; height: 72px; object-fit: cover; border-radius: 50%; }
        .avatar-info { flex: 1; }
        .avatar-info p { font-size: 12.5px; color: var(--text-muted); margin-bottom: 8px; }
        .btn-pick-avatar {
            padding: 8px 16px; background: var(--purple); color: #fff;
            border: none; border-radius: 9px; font-size: 12.5px; font-weight: 600;
            cursor: pointer; font-family: var(--font-body); transition: .15s;
        }
        .btn-pick-avatar:hover { background: var(--purple-dark); }
        .avatar-filename { font-size: 11.5px; color: var(--text-muted); margin-top: 6px; font-style: italic; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
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

        // line 49
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        yield "\" class=\"back-link\">← Retour à la liste</a>

    <div class=\"edit-card\">
        <h3>Modification du compte : <span style=\"color:var(--purple);\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "userPrenom", [], "any", false, false, false, 52), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "userNom", [], "any", false, false, false, 52), "html", null, true);
        yield "</span></h3>

        ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "

        ";
        // line 57
        yield "        <div class=\"section-divider\">Photo de profil</div>
        <div class=\"avatar-uploader\">
            <div class=\"avatar-current\" id=\"avatarPreviewAdmin\">
                ";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "userImagePath", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "userImagePath", [], "any", false, false, false, 61)), "html", null, true);
            yield "\" alt=\"Avatar\" id=\"avatarImgAdmin\">
                ";
        } else {
            // line 63
            yield "                    <span id=\"avatarInitialAdmin\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "userPrenom", [], "any", false, false, false, 63))), "html", null, true);
            yield "</span>
                ";
        }
        // line 65
        yield "            </div>
            <div class=\"avatar-info\">
                <p>Image actuelle";
        // line 67
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "userImagePath", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " : aucune";
        }
        yield "</p>
                <button type=\"button\" class=\"btn-pick-avatar\" id=\"openAvatarAdminBtn\">
                    📁 Changer la photo
                </button>
                <div class=\"avatar-filename\" id=\"avatarFilenameAdmin\"></div>
            </div>
            ";
        // line 74
        yield "            <div style=\"display:none\" id=\"avatarAdminWrapper\">
                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "avatarFile", [], "any", false, false, false, 75), 'widget');
        yield "
            </div>
        </div>
        ";
        // line 78
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "avatarFile", [], "any", false, false, false, 78), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "            <div class=\"form-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "avatarFile", [], "any", false, false, false, 79), 'errors');
            yield "</div>
        ";
        }
        // line 81
        yield "
        <div class=\"section-divider\">Informations personnelles</div>
        <div class=\"form-row\">
            <div class=\"form-group\">";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "userNom", [], "any", false, false, false, 84), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "userNom", [], "any", false, false, false, 84), 'widget');
        yield "<div class=\"form-error\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "userNom", [], "any", false, false, false, 84), 'errors');
        yield "</div></div>
            <div class=\"form-group\">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "userPrenom", [], "any", false, false, false, 85), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "userPrenom", [], "any", false, false, false, 85), 'widget');
        yield "<div class=\"form-error\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "userPrenom", [], "any", false, false, false, 85), 'errors');
        yield "</div></div>
        </div>
        <div class=\"form-group\">";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "userEmail", [], "any", false, false, false, 87), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "userEmail", [], "any", false, false, false, 87), 'widget');
        yield "<div class=\"form-error\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "userEmail", [], "any", false, false, false, 87), 'errors');
        yield "</div></div>
        <div class=\"form-row\">
            <div class=\"form-group\">";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 89), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 89), 'widget', ["attr" => ["type" => "date"]]);
        yield "</div>
            <div class=\"form-group\">";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "userSexe", [], "any", false, false, false, 90), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "userSexe", [], "any", false, false, false, 90), 'widget');
        yield "</div>
        </div>

        <div class=\"section-divider\">Physique</div>
        <div class=\"form-row\">
            <div class=\"form-group\">";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "userPoids", [], "any", false, false, false, 95), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "userPoids", [], "any", false, false, false, 95), 'widget');
        yield "</div>
            <div class=\"form-group\">";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "userTaille", [], "any", false, false, false, 96), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "userTaille", [], "any", false, false, false, 96), 'widget');
        yield "</div>
        </div>
        <div class=\"form-group\">";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "userNiveauActivitePhysique", [], "any", false, false, false, 98), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "userNiveauActivitePhysique", [], "any", false, false, false, 98), 'widget');
        yield "</div>

        <div class=\"section-divider\">Scolarité</div>
        <div class=\"form-row\">
            <div class=\"form-group\">";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "userNiveauScolaire", [], "any", false, false, false, 102), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "userNiveauScolaire", [], "any", false, false, false, 102), 'widget');
        yield "</div>
            <div class=\"form-group\">";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "userEtablissementScolaire", [], "any", false, false, false, 103), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "userEtablissementScolaire", [], "any", false, false, false, 103), 'widget');
        yield "</div>
        </div>

        <div class=\"section-divider\">Administration</div>
        <div class=\"form-row\">
            <div class=\"form-group\">";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "typeUtilisateur", [], "any", false, false, false, 108), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "typeUtilisateur", [], "any", false, false, false, 108), 'widget');
        yield "</div>
            <div class=\"form-group\">";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "isActive", [], "any", false, false, false, 109), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "isActive", [], "any", false, false, false, 109), 'widget');
        yield "</div>
        </div>

        <div style=\"margin-top:24px;\">
            <button class=\"btn-submit\" type=\"submit\">💾 Sauvegarder</button>
            <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        yield "\" class=\"btn-cancel\">Annuler</a>
        </div>

        ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        yield "
    </div>

    <script>
        const avatarInputAdmin = document.querySelector('#avatarAdminWrapper input[type=\"file\"]');
        const openBtn          = document.getElementById('openAvatarAdminBtn');
        const previewEl        = document.getElementById('avatarPreviewAdmin');
        const filenameEl       = document.getElementById('avatarFilenameAdmin');

        if (openBtn && avatarInputAdmin) {
            openBtn.addEventListener('click', () => avatarInputAdmin.click());

            avatarInputAdmin.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const file = this.files[0];
                    const reader = new FileReader();
                    reader.onload = e => {
                        previewEl.innerHTML = `<img src=\"\${e.target.result}\" style=\"width:72px;height:72px;object-fit:cover;border-radius:50%;\" alt=\"preview\">`;
                        filenameEl.textContent = '📎 ' + file.name;
                    };
                    reader.readAsDataURL(file);
                }
            });
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
        return "admin/users/edit.html.twig";
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
        return array (  357 => 117,  351 => 114,  342 => 109,  337 => 108,  328 => 103,  323 => 102,  315 => 98,  309 => 96,  304 => 95,  295 => 90,  290 => 89,  282 => 87,  274 => 85,  267 => 84,  262 => 81,  256 => 79,  254 => 78,  248 => 75,  245 => 74,  234 => 67,  230 => 65,  224 => 63,  218 => 61,  216 => 60,  211 => 57,  206 => 54,  199 => 52,  192 => 49,  179 => 48,  128 => 6,  115 => 5,  92 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %}Modifier — {{ user.userPrenom }} {{ user.userNom }}{% endblock %}
{% block page_title %}✏ Modifier le compte{% endblock %}

{% block stylesheets %}
    <style>
        .back-link { display: inline-flex; align-items: center; gap: 6px; color: var(--text-mid); text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; }
        .back-link:hover { color: var(--purple); }
        .edit-card { background: var(--white); border: 1px solid var(--border); border-radius: 22px; padding: 40px; max-width: 680px; }
        .edit-card h3 { font-family: var(--font-head); font-size: 18px; font-weight: 700; margin-bottom: 24px; color: var(--text); }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .form-group { margin-bottom: 14px; }
        .form-group label { display: block; font-size: 13px; font-weight: 500; color: var(--text-mid); margin-bottom: 5px; }
        .form-group input, .form-group select { width: 100%; padding: 10px 13px; border: 1.5px solid var(--border); border-radius: 10px; font-family: var(--font-body); font-size: 14px; color: var(--text); background: var(--purple-ghost); outline: none; transition: border-color .15s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--purple); background: #fff; }
        .form-error { color: #E05252; font-size: 12px; margin-top: 4px; }
        .section-divider { font-size: 11px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; color: var(--text-muted); margin: 20px 0 12px; padding-bottom: 6px; border-bottom: 1px solid var(--border); }
        .btn-submit { padding: 12px 28px; background: var(--purple); color: #fff; border: none; border-radius: 11px; font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 18px rgba(106,90,205,.3); transition: background .15s; }
        .btn-submit:hover { background: var(--purple-dark); }
        .btn-cancel { padding: 12px 22px; background: var(--purple-ghost); color: var(--text-mid); border: 1.5px solid var(--border); border-radius: 11px; font-family: var(--font-body); font-size: 14px; font-weight: 500; text-decoration: none; margin-left: 10px; }
        .btn-cancel:hover { border-color: var(--purple-soft); color: var(--purple); }

        /* Avatar uploader */
        .avatar-uploader {
            display: flex; align-items: center; gap: 20px;
            background: var(--purple-ghost); border: 1px solid var(--border);
            border-radius: 14px; padding: 16px; margin-bottom: 14px;
        }
        .avatar-current {
            width: 72px; height: 72px; border-radius: 50%; flex-shrink: 0;
            background: var(--purple); display: grid; place-items: center;
            font-family: var(--font-head); font-size: 26px; font-weight: 800; color: #fff;
            border: 3px solid var(--white); overflow: hidden;
        }
        .avatar-current img { width: 72px; height: 72px; object-fit: cover; border-radius: 50%; }
        .avatar-info { flex: 1; }
        .avatar-info p { font-size: 12.5px; color: var(--text-muted); margin-bottom: 8px; }
        .btn-pick-avatar {
            padding: 8px 16px; background: var(--purple); color: #fff;
            border: none; border-radius: 9px; font-size: 12.5px; font-weight: 600;
            cursor: pointer; font-family: var(--font-body); transition: .15s;
        }
        .btn-pick-avatar:hover { background: var(--purple-dark); }
        .avatar-filename { font-size: 11.5px; color: var(--text-muted); margin-top: 6px; font-style: italic; }
    </style>
{% endblock %}

{% block body %}
    <a href=\"{{ path('admin_users_index') }}\" class=\"back-link\">← Retour à la liste</a>

    <div class=\"edit-card\">
        <h3>Modification du compte : <span style=\"color:var(--purple);\">{{ user.userPrenom }} {{ user.userNom }}</span></h3>

        {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}

        {# ── Photo de profil ───────────────────────────────────────────── #}
        <div class=\"section-divider\">Photo de profil</div>
        <div class=\"avatar-uploader\">
            <div class=\"avatar-current\" id=\"avatarPreviewAdmin\">
                {% if user.userImagePath %}
                    <img src=\"{{ asset(user.userImagePath) }}\" alt=\"Avatar\" id=\"avatarImgAdmin\">
                {% else %}
                    <span id=\"avatarInitialAdmin\">{{ user.userPrenom|first|upper }}</span>
                {% endif %}
            </div>
            <div class=\"avatar-info\">
                <p>Image actuelle{% if not user.userImagePath %} : aucune{% endif %}</p>
                <button type=\"button\" class=\"btn-pick-avatar\" id=\"openAvatarAdminBtn\">
                    📁 Changer la photo
                </button>
                <div class=\"avatar-filename\" id=\"avatarFilenameAdmin\"></div>
            </div>
            {# Champ caché rendu par Symfony #}
            <div style=\"display:none\" id=\"avatarAdminWrapper\">
                {{ form_widget(form.avatarFile) }}
            </div>
        </div>
        {% if form_errors(form.avatarFile) %}
            <div class=\"form-error\">{{ form_errors(form.avatarFile) }}</div>
        {% endif %}

        <div class=\"section-divider\">Informations personnelles</div>
        <div class=\"form-row\">
            <div class=\"form-group\">{{ form_label(form.userNom) }}{{ form_widget(form.userNom) }}<div class=\"form-error\">{{ form_errors(form.userNom) }}</div></div>
            <div class=\"form-group\">{{ form_label(form.userPrenom) }}{{ form_widget(form.userPrenom) }}<div class=\"form-error\">{{ form_errors(form.userPrenom) }}</div></div>
        </div>
        <div class=\"form-group\">{{ form_label(form.userEmail) }}{{ form_widget(form.userEmail) }}<div class=\"form-error\">{{ form_errors(form.userEmail) }}</div></div>
        <div class=\"form-row\">
            <div class=\"form-group\">{{ form_label(form.userDateDeNaissance) }}{{ form_widget(form.userDateDeNaissance, {'attr': {'type': 'date'}}) }}</div>
            <div class=\"form-group\">{{ form_label(form.userSexe) }}{{ form_widget(form.userSexe) }}</div>
        </div>

        <div class=\"section-divider\">Physique</div>
        <div class=\"form-row\">
            <div class=\"form-group\">{{ form_label(form.userPoids) }}{{ form_widget(form.userPoids) }}</div>
            <div class=\"form-group\">{{ form_label(form.userTaille) }}{{ form_widget(form.userTaille) }}</div>
        </div>
        <div class=\"form-group\">{{ form_label(form.userNiveauActivitePhysique) }}{{ form_widget(form.userNiveauActivitePhysique) }}</div>

        <div class=\"section-divider\">Scolarité</div>
        <div class=\"form-row\">
            <div class=\"form-group\">{{ form_label(form.userNiveauScolaire) }}{{ form_widget(form.userNiveauScolaire) }}</div>
            <div class=\"form-group\">{{ form_label(form.userEtablissementScolaire) }}{{ form_widget(form.userEtablissementScolaire) }}</div>
        </div>

        <div class=\"section-divider\">Administration</div>
        <div class=\"form-row\">
            <div class=\"form-group\">{{ form_label(form.typeUtilisateur) }}{{ form_widget(form.typeUtilisateur) }}</div>
            <div class=\"form-group\">{{ form_label(form.isActive) }}{{ form_widget(form.isActive) }}</div>
        </div>

        <div style=\"margin-top:24px;\">
            <button class=\"btn-submit\" type=\"submit\">💾 Sauvegarder</button>
            <a href=\"{{ path('admin_users_index') }}\" class=\"btn-cancel\">Annuler</a>
        </div>

        {{ form_end(form) }}
    </div>

    <script>
        const avatarInputAdmin = document.querySelector('#avatarAdminWrapper input[type=\"file\"]');
        const openBtn          = document.getElementById('openAvatarAdminBtn');
        const previewEl        = document.getElementById('avatarPreviewAdmin');
        const filenameEl       = document.getElementById('avatarFilenameAdmin');

        if (openBtn && avatarInputAdmin) {
            openBtn.addEventListener('click', () => avatarInputAdmin.click());

            avatarInputAdmin.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const file = this.files[0];
                    const reader = new FileReader();
                    reader.onload = e => {
                        previewEl.innerHTML = `<img src=\"\${e.target.result}\" style=\"width:72px;height:72px;object-fit:cover;border-radius:50%;\" alt=\"preview\">`;
                        filenameEl.textContent = '📎 ' + file.name;
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
    </script>
{% endblock %}
", "admin/users/edit.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/admin/users/edit.html.twig");
    }
}

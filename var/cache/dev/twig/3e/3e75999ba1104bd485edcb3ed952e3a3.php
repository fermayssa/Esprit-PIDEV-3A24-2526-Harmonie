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

/* journal/new.html.twig */
class __TwigTemplate_4885eb6634497766afb544ea00584e60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "journal/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "journal/new.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Nouvelle entrée - Harmony";
        
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
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
            --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
            --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
            --border:rgba(106,90,205,.12);--white:#FFFFFF;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
        }
        html,body{height:100%;font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}

        .topbar{position:sticky;top:0;z-index:200;background:var(--white);border-bottom:1px solid var(--border);height:62px;display:flex;align-items:center;padding:0 40px;gap:8px;}
        .topbar-logo{display:flex;align-items:center;gap:10px;text-decoration:none;margin-right:32px;}
        .logo-mark{width:34px;height:34px;border-radius:10px;object-fit:contain;flex-shrink:0;}
        .nav-links{display:flex;align-items:center;gap:2px;flex:1;flex-wrap:nowrap;overflow-x:auto;}
        .nav-link{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;border-radius:9px;font-size:13.5px;font-weight:500;color:var(--text-mid);text-decoration:none;white-space:nowrap;transition:background .15s,color .15s;}
        .nav-link:hover{background:var(--purple-pale);color:var(--purple);}
        .nav-link.active{background:var(--purple-pale);color:var(--purple);font-weight:600;}
        .nav-link .nav-emoji{font-size:14px;}
        .topbar-right{display:flex;align-items:center;gap:10px;margin-left:auto;flex-shrink:0;}
        .logout-btn{padding:7px 16px;border-radius:9px;border:1.5px solid rgba(239,68,68,.2);background:transparent;color:#E05252;font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;transition:background .15s,border-color .15s;white-space:nowrap;text-decoration:none;}
        .logout-btn:hover{background:#FEF2F2;border-color:#E05252;}
        .profile-wrap{position:relative;}
        .avatar{width:36px;height:36px;border-radius:50%;background:var(--purple);color:white;font-family:var(--font-head);font-weight:700;font-size:14px;display:grid;place-items:center;cursor:pointer;border:2px solid var(--purple-pale);transition:box-shadow .15s;}
        .avatar:hover{box-shadow:0 0 0 3px rgba(106,90,205,.25);}
        .profile-dropdown{position:absolute;top:calc(100% + 10px);right:0;width:220px;background:var(--white);border:1px solid var(--border);border-radius:14px;box-shadow:0 12px 40px rgba(0,0,0,.1);padding:16px;display:none;z-index:500;}
        .profile-dropdown.open{display:block;}
        .pd-name{font-size:14px;font-weight:600;color:var(--text);}
        .pd-email{font-size:12px;color:var(--text-muted);margin-top:2px;}
        .pd-divider{height:1px;background:var(--border);margin:12px 0;}
        .pd-hint{font-size:11px;color:var(--text-muted);font-style:italic;}

        .container{max-width:700px;margin:0 auto;padding:48px 40px 80px;}
        .back-link{display:inline-flex;align-items:center;gap:6px;color:var(--text-muted);text-decoration:none;font-size:13px;margin-bottom:20px;}
        .back-link:hover{color:var(--purple);}

        .form-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:32px;}
        .form-card h2{font-family:var(--font-head);font-size:22px;font-weight:700;margin-bottom:24px;color:var(--text);}
        .form-group{margin-bottom:20px;}
        .form-group label{display:block;font-size:13px;font-weight:600;color:var(--text-mid);margin-bottom:6px;}
        .form-group input,.form-group select,.form-group textarea{width:100%;padding:10px 14px;border:1px solid var(--border);border-radius:10px;font-size:14px;font-family:var(--font-body);color:var(--text);background:var(--white);transition:border-color .15s;}
        .form-group input:focus,.form-group select:focus,.form-group textarea:focus{outline:none;border-color:var(--purple);}
        .form-group textarea{resize:vertical;}
        .form-group ul{list-style:none;padding:0;margin:4px 0 0;}
        .form-group ul li{color:#E05252;font-size:12px;font-weight:500;}
        .form-actions{display:flex;gap:12px;margin-top:24px;}
        .btn-submit{padding:10px 24px;border-radius:10px;border:none;background:var(--purple);color:white;font-size:14px;font-weight:600;cursor:pointer;font-family:var(--font-body);}
        .btn-submit:hover{background:var(--purple-dark);}
        .btn-cancel{padding:10px 24px;border-radius:10px;border:1px solid var(--border);background:var(--white);color:var(--text-mid);font-size:14px;font-weight:500;text-decoration:none;display:inline-flex;align-items:center;}
        .btn-cancel:hover{background:var(--purple-ghost);}

        @media(max-width:640px){.topbar{padding:0 20px;}.nav-links{display:none;}.container{padding:24px 20px 60px;}}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
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

        // line 65
        yield "    ";
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", ["_route"], "method", false, false, false, 65);
        // line 66
        yield "
    <header class=\"topbar\">
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
        yield "\" class=\"nav-link\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\" class=\"nav-link\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\" class=\"nav-link\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"nav-link\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\" class=\"nav-link\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"nav-link\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\" class=\"nav-link active\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\" class=\"nav-link\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>
        <div class=\"topbar-right\">
            <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout-btn\">🚪 Déconnexion</a>
            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">";
        // line 84
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "firstName", [], "any", false, false, false, 84))), "html", null, true)) : ("E"));
        yield "</div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">";
        // line 86
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "firstName", [], "any", false, false, false, 86) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "lastName", [], "any", false, false, false, 86)), "html", null, true)) : ("Étudiant"));
        yield "</div>
                    <div class=\"pd-email\">";
        // line 87
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "email", [], "any", false, false, false, 87), "html", null, true)) : ("email@exemple.com"));
        yield "</div>
                    <div class=\"pd-divider\"></div>
                    <div class=\"pd-hint\">Double-clic pour modifier</div>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container\">
        <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\" class=\"back-link\">← Retour au journal</a>

        <div class=\"form-card\">
            <h2>📝 Nouvelle entrée</h2>

            ";
        // line 101
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

            <div class=\"form-group\">
                ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "humeur", [], "any", false, false, false, 104), 'label');
        yield "
                ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "humeur", [], "any", false, false, false, 105), 'widget');
        yield "
                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "humeur", [], "any", false, false, false, 106), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "dateJournal", [], "any", false, false, false, 110), 'label');
        yield "
                ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "dateJournal", [], "any", false, false, false, 111), 'widget');
        yield "
                ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "dateJournal", [], "any", false, false, false, 112), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "contenu", [], "any", false, false, false, 116), 'label');
        yield "
                ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "contenu", [], "any", false, false, false, 117), 'widget');
        yield "
                ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "contenu", [], "any", false, false, false, 118), 'errors');
        yield "
            </div>

            <div class=\"form-actions\">
                <button type=\"submit\" class=\"btn-submit\">✅ Enregistrer</button>
                <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\" class=\"btn-cancel\">Annuler</a>
            </div>

            ";
        // line 126
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>

    <script>
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));
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
        return "journal/new.html.twig";
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
        return array (  324 => 126,  318 => 123,  310 => 118,  306 => 117,  302 => 116,  295 => 112,  291 => 111,  287 => 110,  280 => 106,  276 => 105,  272 => 104,  266 => 101,  258 => 96,  246 => 87,  242 => 86,  237 => 84,  232 => 82,  226 => 79,  222 => 78,  218 => 77,  214 => 76,  210 => 75,  206 => 74,  202 => 73,  198 => 72,  192 => 69,  188 => 68,  184 => 66,  181 => 65,  168 => 64,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle entrée - Harmony{% endblock %}

{% block stylesheets %}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
            --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
            --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
            --border:rgba(106,90,205,.12);--white:#FFFFFF;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
        }
        html,body{height:100%;font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}

        .topbar{position:sticky;top:0;z-index:200;background:var(--white);border-bottom:1px solid var(--border);height:62px;display:flex;align-items:center;padding:0 40px;gap:8px;}
        .topbar-logo{display:flex;align-items:center;gap:10px;text-decoration:none;margin-right:32px;}
        .logo-mark{width:34px;height:34px;border-radius:10px;object-fit:contain;flex-shrink:0;}
        .nav-links{display:flex;align-items:center;gap:2px;flex:1;flex-wrap:nowrap;overflow-x:auto;}
        .nav-link{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;border-radius:9px;font-size:13.5px;font-weight:500;color:var(--text-mid);text-decoration:none;white-space:nowrap;transition:background .15s,color .15s;}
        .nav-link:hover{background:var(--purple-pale);color:var(--purple);}
        .nav-link.active{background:var(--purple-pale);color:var(--purple);font-weight:600;}
        .nav-link .nav-emoji{font-size:14px;}
        .topbar-right{display:flex;align-items:center;gap:10px;margin-left:auto;flex-shrink:0;}
        .logout-btn{padding:7px 16px;border-radius:9px;border:1.5px solid rgba(239,68,68,.2);background:transparent;color:#E05252;font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;transition:background .15s,border-color .15s;white-space:nowrap;text-decoration:none;}
        .logout-btn:hover{background:#FEF2F2;border-color:#E05252;}
        .profile-wrap{position:relative;}
        .avatar{width:36px;height:36px;border-radius:50%;background:var(--purple);color:white;font-family:var(--font-head);font-weight:700;font-size:14px;display:grid;place-items:center;cursor:pointer;border:2px solid var(--purple-pale);transition:box-shadow .15s;}
        .avatar:hover{box-shadow:0 0 0 3px rgba(106,90,205,.25);}
        .profile-dropdown{position:absolute;top:calc(100% + 10px);right:0;width:220px;background:var(--white);border:1px solid var(--border);border-radius:14px;box-shadow:0 12px 40px rgba(0,0,0,.1);padding:16px;display:none;z-index:500;}
        .profile-dropdown.open{display:block;}
        .pd-name{font-size:14px;font-weight:600;color:var(--text);}
        .pd-email{font-size:12px;color:var(--text-muted);margin-top:2px;}
        .pd-divider{height:1px;background:var(--border);margin:12px 0;}
        .pd-hint{font-size:11px;color:var(--text-muted);font-style:italic;}

        .container{max-width:700px;margin:0 auto;padding:48px 40px 80px;}
        .back-link{display:inline-flex;align-items:center;gap:6px;color:var(--text-muted);text-decoration:none;font-size:13px;margin-bottom:20px;}
        .back-link:hover{color:var(--purple);}

        .form-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:32px;}
        .form-card h2{font-family:var(--font-head);font-size:22px;font-weight:700;margin-bottom:24px;color:var(--text);}
        .form-group{margin-bottom:20px;}
        .form-group label{display:block;font-size:13px;font-weight:600;color:var(--text-mid);margin-bottom:6px;}
        .form-group input,.form-group select,.form-group textarea{width:100%;padding:10px 14px;border:1px solid var(--border);border-radius:10px;font-size:14px;font-family:var(--font-body);color:var(--text);background:var(--white);transition:border-color .15s;}
        .form-group input:focus,.form-group select:focus,.form-group textarea:focus{outline:none;border-color:var(--purple);}
        .form-group textarea{resize:vertical;}
        .form-group ul{list-style:none;padding:0;margin:4px 0 0;}
        .form-group ul li{color:#E05252;font-size:12px;font-weight:500;}
        .form-actions{display:flex;gap:12px;margin-top:24px;}
        .btn-submit{padding:10px 24px;border-radius:10px;border:none;background:var(--purple);color:white;font-size:14px;font-weight:600;cursor:pointer;font-family:var(--font-body);}
        .btn-submit:hover{background:var(--purple-dark);}
        .btn-cancel{padding:10px 24px;border-radius:10px;border:1px solid var(--border);background:var(--white);color:var(--text-mid);font-size:14px;font-weight:500;text-decoration:none;display:inline-flex;align-items:center;}
        .btn-cancel:hover{background:var(--purple-ghost);}

        @media(max-width:640px){.topbar{padding:0 20px;}.nav-links{display:none;}.container{padding:24px 20px 60px;}}
    </style>
{% endblock %}

{% block body %}
    {% set current_route = app.request.attributes.get('_route') %}

    <header class=\"topbar\">
        <a href=\"{{ path('homepage') }}\" class=\"topbar-logo\">
            <img src=\"{{ asset('images/logo.png') }}\" class=\"logo-mark\" alt=\"Harmony\">
        </a>
        <nav class=\"nav-links\">
            <a href=\"{{ path('activites') }}\" class=\"nav-link\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"{{ path('forum') }}\" class=\"nav-link\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"{{ path('taches') }}\" class=\"nav-link\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"{{ path('evenements') }}\" class=\"nav-link\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"{{ path('nutrition') }}\" class=\"nav-link\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"{{ path('meditation') }}\" class=\"nav-link\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"{{ path('journal') }}\" class=\"nav-link active\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"{{ path('library') }}\" class=\"nav-link\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>
        <div class=\"topbar-right\">
            <a href=\"{{ path('app_logout') }}\" class=\"logout-btn\">🚪 Déconnexion</a>
            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">{{ app.user ? app.user.firstName|first|upper : 'E' }}</div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">{{ app.user ? app.user.firstName ~ ' ' ~ app.user.lastName : 'Étudiant' }}</div>
                    <div class=\"pd-email\">{{ app.user ? app.user.email : 'email@exemple.com' }}</div>
                    <div class=\"pd-divider\"></div>
                    <div class=\"pd-hint\">Double-clic pour modifier</div>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container\">
        <a href=\"{{ path('journal') }}\" class=\"back-link\">← Retour au journal</a>

        <div class=\"form-card\">
            <h2>📝 Nouvelle entrée</h2>

            {{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}

            <div class=\"form-group\">
                {{ form_label(form.humeur) }}
                {{ form_widget(form.humeur) }}
                {{ form_errors(form.humeur) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.dateJournal) }}
                {{ form_widget(form.dateJournal) }}
                {{ form_errors(form.dateJournal) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.contenu) }}
                {{ form_widget(form.contenu) }}
                {{ form_errors(form.contenu) }}
            </div>

            <div class=\"form-actions\">
                <button type=\"submit\" class=\"btn-submit\">✅ Enregistrer</button>
                <a href=\"{{ path('journal') }}\" class=\"btn-cancel\">Annuler</a>
            </div>

            {{ form_end(form) }}
        </div>
    </div>

    <script>
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));
    </script>
{% endblock %}
", "journal/new.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/journal/new.html.twig");
    }
}

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

/* security/login.html.twig */
class __TwigTemplate_5f35610c5b9469af6ceb5c5f448517fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Connexion — Harmony";
        
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
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple: #6A5ACD; --purple-dark: #4B3B9E; --purple-pale: #EDE8FA;
            --purple-ghost: #F7F5FD; --text: #1C1733; --text-mid: #4A4570;
            --text-muted: #9590B8; --border: rgba(106,90,205,.12);
            --font-head: 'Syne', sans-serif; --font-body: 'Inter', sans-serif;
        }
        html, body { min-height: 100vh; font-family: var(--font-body); background: var(--purple-ghost); display: grid; place-items: center; }
        .auth-card {
            background: #fff; border: 1px solid var(--border); border-radius: 22px;
            padding: 48px 44px; width: 100%; max-width: 420px;
            box-shadow: 0 20px 60px rgba(106,90,205,.08);
            animation: fadeUp .4s ease both;
        }
        @keyframes fadeUp { from { opacity:0; transform:translateY(16px); } to { opacity:1; } }
        .auth-logo { display: flex; align-items: center; gap: 10px; margin-bottom: 28px; justify-content: center; }
        .auth-logo img { width: 36px; height: 36px; border-radius: 10px; object-fit: contain; }
        .auth-logo span { font-family: var(--font-head); font-size: 20px; font-weight: 800; color: var(--text); }
        .auth-title { font-family: var(--font-head); font-size: 26px; font-weight: 800; color: var(--text); margin-bottom: 6px; text-align: center; }
        .auth-sub { font-size: 13.5px; color: var(--text-muted); text-align: center; margin-bottom: 28px; }
        .form-group { margin-bottom: 16px; }
        .form-group label { display: block; font-size: 13px; font-weight: 500; color: var(--text-mid); margin-bottom: 6px; }
        .form-group input {
            width: 100%; padding: 11px 14px; border: 1.5px solid var(--border);
            border-radius: 10px; font-family: var(--font-body); font-size: 14px; color: var(--text);
            background: var(--purple-ghost); outline: none; transition: border-color .15s;
        }
        .form-group input:focus { border-color: var(--purple); background: #fff; }
        .btn-submit {
            width: 100%; padding: 13px; background: var(--purple); color: #fff;
            border: none; border-radius: 11px; font-family: var(--font-body);
            font-size: 14px; font-weight: 600; cursor: pointer;
            margin-top: 8px; box-shadow: 0 4px 18px rgba(106,90,205,.3);
            transition: background .15s, transform .15s;
        }
        .btn-submit:hover { background: var(--purple-dark); transform: translateY(-1px); }
        .alert-error { background: #FEE2E2; color: #991B1B; padding: 10px 14px; border-radius: 9px; font-size: 13px; margin-bottom: 16px; }
        .auth-footer { text-align: center; margin-top: 22px; font-size: 13px; color: var(--text-muted); }
        .auth-footer a { color: var(--purple); text-decoration: none; font-weight: 500; }
        .auth-footer a:hover { text-decoration: underline; }
        .divider { display: flex; align-items: center; gap: 12px; margin: 18px 0; }
        .divider::before, .divider::after { content: ''; flex: 1; height: 1px; background: var(--border); }
        .divider span { font-size: 12px; color: var(--text-muted); }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
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

        // line 54
        yield "    <div class=\"auth-card\">
        <div class=\"auth-logo\">
            <img src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Harmony\">
            <span>Harmony</span>
        </div>
        <div class=\"auth-title\">Bon retour 👋</div>
        <div class=\"auth-sub\">Connectez-vous à votre espace étudiant</div>

        ";
        // line 62
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "            <div class=\"alert-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageKey", [], "any", false, false, false, 63), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageData", [], "any", false, false, false, 63), "security"), "html", null, true);
            yield "</div>
        ";
        }
        // line 65
        yield "
        <form method=\"post\" action=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
            <div class=\"form-group\">
                <label for=\"email\">Adresse email</label>
                <input type=\"email\" id=\"email\" name=\"email\"
                       value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 70, $this->source); })()), "html", null, true);
        yield "\" required autofocus
                       placeholder=\"votre@email.com\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"password\" required placeholder=\"••••••••\">
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
            <button class=\"btn-submit\" type=\"submit\">Se connecter →</button>
        </form>

        <div class=\"divider\"><span>ou</span></div>

        <div class=\"auth-footer\">
            Pas encore de compte ? <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">S'inscrire</a>
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
        return "security/login.html.twig";
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
        return array (  222 => 84,  212 => 77,  202 => 70,  195 => 66,  192 => 65,  186 => 63,  184 => 62,  175 => 56,  171 => 54,  158 => 53,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Connexion — Harmony{% endblock %}

{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple: #6A5ACD; --purple-dark: #4B3B9E; --purple-pale: #EDE8FA;
            --purple-ghost: #F7F5FD; --text: #1C1733; --text-mid: #4A4570;
            --text-muted: #9590B8; --border: rgba(106,90,205,.12);
            --font-head: 'Syne', sans-serif; --font-body: 'Inter', sans-serif;
        }
        html, body { min-height: 100vh; font-family: var(--font-body); background: var(--purple-ghost); display: grid; place-items: center; }
        .auth-card {
            background: #fff; border: 1px solid var(--border); border-radius: 22px;
            padding: 48px 44px; width: 100%; max-width: 420px;
            box-shadow: 0 20px 60px rgba(106,90,205,.08);
            animation: fadeUp .4s ease both;
        }
        @keyframes fadeUp { from { opacity:0; transform:translateY(16px); } to { opacity:1; } }
        .auth-logo { display: flex; align-items: center; gap: 10px; margin-bottom: 28px; justify-content: center; }
        .auth-logo img { width: 36px; height: 36px; border-radius: 10px; object-fit: contain; }
        .auth-logo span { font-family: var(--font-head); font-size: 20px; font-weight: 800; color: var(--text); }
        .auth-title { font-family: var(--font-head); font-size: 26px; font-weight: 800; color: var(--text); margin-bottom: 6px; text-align: center; }
        .auth-sub { font-size: 13.5px; color: var(--text-muted); text-align: center; margin-bottom: 28px; }
        .form-group { margin-bottom: 16px; }
        .form-group label { display: block; font-size: 13px; font-weight: 500; color: var(--text-mid); margin-bottom: 6px; }
        .form-group input {
            width: 100%; padding: 11px 14px; border: 1.5px solid var(--border);
            border-radius: 10px; font-family: var(--font-body); font-size: 14px; color: var(--text);
            background: var(--purple-ghost); outline: none; transition: border-color .15s;
        }
        .form-group input:focus { border-color: var(--purple); background: #fff; }
        .btn-submit {
            width: 100%; padding: 13px; background: var(--purple); color: #fff;
            border: none; border-radius: 11px; font-family: var(--font-body);
            font-size: 14px; font-weight: 600; cursor: pointer;
            margin-top: 8px; box-shadow: 0 4px 18px rgba(106,90,205,.3);
            transition: background .15s, transform .15s;
        }
        .btn-submit:hover { background: var(--purple-dark); transform: translateY(-1px); }
        .alert-error { background: #FEE2E2; color: #991B1B; padding: 10px 14px; border-radius: 9px; font-size: 13px; margin-bottom: 16px; }
        .auth-footer { text-align: center; margin-top: 22px; font-size: 13px; color: var(--text-muted); }
        .auth-footer a { color: var(--purple); text-decoration: none; font-weight: 500; }
        .auth-footer a:hover { text-decoration: underline; }
        .divider { display: flex; align-items: center; gap: 12px; margin: 18px 0; }
        .divider::before, .divider::after { content: ''; flex: 1; height: 1px; background: var(--border); }
        .divider span { font-size: 12px; color: var(--text-muted); }
    </style>
{% endblock %}

{% block body %}
    <div class=\"auth-card\">
        <div class=\"auth-logo\">
            <img src=\"{{ asset('images/logo.png') }}\" alt=\"Harmony\">
            <span>Harmony</span>
        </div>
        <div class=\"auth-title\">Bon retour 👋</div>
        <div class=\"auth-sub\">Connectez-vous à votre espace étudiant</div>

        {% if error %}
            <div class=\"alert-error\">⚠ {{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        <form method=\"post\" action=\"{{ path('app_login') }}\">
            <div class=\"form-group\">
                <label for=\"email\">Adresse email</label>
                <input type=\"email\" id=\"email\" name=\"email\"
                       value=\"{{ last_username }}\" required autofocus
                       placeholder=\"votre@email.com\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"password\" required placeholder=\"••••••••\">
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <button class=\"btn-submit\" type=\"submit\">Se connecter →</button>
        </form>

        <div class=\"divider\"><span>ou</span></div>

        <div class=\"auth-footer\">
            Pas encore de compte ? <a href=\"{{ path('app_register') }}\">S'inscrire</a>
        </div>
    </div>
{% endblock %}
", "security/login.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/security/login.html.twig");
    }
}

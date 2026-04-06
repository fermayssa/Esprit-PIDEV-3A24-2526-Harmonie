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

/* base.html.twig */
class __TwigTemplate_d43bc71d4695f7fa53b606dc7d56ec4e extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
            'body_javascripts' => [$this, 'block_body_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <style>
/* ══ GLOBAL TOPBAR ══ */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
:root{
    --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
    --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
    --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
    --border:rgba(106,90,205,.12);--white:#FFFFFF;
    --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
}
html,body{font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}
.topbar{position:sticky;top:0;z-index:200;background:var(--white);border-bottom:1px solid var(--border);height:62px;display:flex;align-items:center;padding:0 40px;gap:8px;}
.topbar-logo{display:flex;align-items:center;gap:10px;text-decoration:none;margin-right:32px;}
.logo-mark{width:34px;height:34px;border-radius:10px;object-fit:contain;flex-shrink:0;}
.logo-name{font-family:var(--font-head);font-size:18px;font-weight:700;color:var(--text);}
.nav-links{display:flex;align-items:center;gap:2px;flex:1;flex-wrap:nowrap;overflow-x:auto;}
.nav-link{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;border-radius:9px;font-size:13.5px;font-weight:500;color:var(--text-mid);text-decoration:none;white-space:nowrap;transition:background .15s,color .15s;}
.nav-link:hover,.nav-link.active{background:var(--purple-pale);color:var(--purple);font-weight:600;}
.nav-link .nav-emoji{font-size:14px;}
.topbar-right{display:flex;align-items:center;gap:10px;margin-left:auto;flex-shrink:0;}
.logout-btn{padding:7px 16px;border-radius:9px;border:1.5px solid rgba(239,68,68,.2);background:transparent;color:#E05252;font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;text-decoration:none;transition:background .15s,border-color .15s;white-space:nowrap;}
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
</style>
        ";
        // line 41
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 43
        yield "
        ";
        // line 44
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 47
        yield "
        ";
        // line 48
        $context["frankenphpHotReload"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "server", [], "any", false, false, false, 48), "get", ["FRANKENPHP_HOT_RELOAD"], "method", false, false, false, 48);
        // line 49
        yield "        ";
        if ((($tmp = (isset($context["frankenphpHotReload"]) || array_key_exists("frankenphpHotReload", $context) ? $context["frankenphpHotReload"] : (function () { throw new RuntimeError('Variable "frankenphpHotReload" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "        <meta name=\"frankenphp-hot-reload:url\" content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["frankenphpHotReload"]) || array_key_exists("frankenphpHotReload", $context) ? $context["frankenphpHotReload"] : (function () { throw new RuntimeError('Variable "frankenphpHotReload" does not exist.', 50, $this->source); })()), "html", null, true);
            yield "\">
        <script src=\"https://cdn.jsdelivr.net/npm/idiomorph\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/frankenphp-hot-reload/+esm\" type=\"module\"></script>
        ";
        }
        // line 54
        yield "    </head>
    <body data-turbo=\"false\">
        ";
        // line 56
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 57
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body_javascripts', $context, $blocks);
        // line 58
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 46
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 56
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  263 => 57,  241 => 56,  218 => 45,  207 => 46,  204 => 45,  191 => 44,  180 => 42,  167 => 41,  144 => 5,  131 => 58,  128 => 57,  126 => 56,  122 => 54,  114 => 50,  111 => 49,  109 => 48,  106 => 47,  104 => 44,  101 => 43,  99 => 41,  60 => 5,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <style>
/* ══ GLOBAL TOPBAR ══ */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
:root{
    --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
    --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
    --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
    --border:rgba(106,90,205,.12);--white:#FFFFFF;
    --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
}
html,body{font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}
.topbar{position:sticky;top:0;z-index:200;background:var(--white);border-bottom:1px solid var(--border);height:62px;display:flex;align-items:center;padding:0 40px;gap:8px;}
.topbar-logo{display:flex;align-items:center;gap:10px;text-decoration:none;margin-right:32px;}
.logo-mark{width:34px;height:34px;border-radius:10px;object-fit:contain;flex-shrink:0;}
.logo-name{font-family:var(--font-head);font-size:18px;font-weight:700;color:var(--text);}
.nav-links{display:flex;align-items:center;gap:2px;flex:1;flex-wrap:nowrap;overflow-x:auto;}
.nav-link{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;border-radius:9px;font-size:13.5px;font-weight:500;color:var(--text-mid);text-decoration:none;white-space:nowrap;transition:background .15s,color .15s;}
.nav-link:hover,.nav-link.active{background:var(--purple-pale);color:var(--purple);font-weight:600;}
.nav-link .nav-emoji{font-size:14px;}
.topbar-right{display:flex;align-items:center;gap:10px;margin-left:auto;flex-shrink:0;}
.logout-btn{padding:7px 16px;border-radius:9px;border:1.5px solid rgba(239,68,68,.2);background:transparent;color:#E05252;font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;text-decoration:none;transition:background .15s,border-color .15s;white-space:nowrap;}
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
</style>
        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}

        {% set frankenphpHotReload = app.request.server.get('FRANKENPHP_HOT_RELOAD') %}
        {% if frankenphpHotReload %}
        <meta name=\"frankenphp-hot-reload:url\" content=\"{{ frankenphpHotReload }}\">
        <script src=\"https://cdn.jsdelivr.net/npm/idiomorph\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/frankenphp-hot-reload/+esm\" type=\"module\"></script>
        {% endif %}
    </head>
    <body data-turbo=\"false\">
        {% block body %}{% endblock %}
        {% block body_javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/base.html.twig");
    }
}

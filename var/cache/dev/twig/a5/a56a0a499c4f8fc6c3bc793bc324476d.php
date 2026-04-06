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

/* admin/base.html.twig */
class __TwigTemplate_f4d946613a812d3bb389eccc51e2a88a extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/css/harmony-theme.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/css/admin-harmony.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("harmonie/css/admin-cards.css"), "html", null, true);
        yield "\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple: #6A5ACD; --purple-dark: #4B3B9E; --purple-soft: #8B7FD4;
            --purple-pale: #EDE8FA; --purple-ghost: #F7F5FD;
            --text: #1C1733; --text-mid: #4A4570; --text-muted: #9590B8;
            --border: rgba(106,90,205,.12); --white: #FFFFFF;
            --sidebar-w: 240px;
            --font-head: 'Syne', sans-serif; --font-body: 'Inter', sans-serif;
        }
        html, body { height: 100%; font-family: var(--font-body); background: var(--purple-ghost); color: var(--text); }

        /* ── LAYOUT ── */
        .admin-layout { display: flex; min-height: 100vh; }

        /* ── SIDEBAR ── */
        .sidebar {
            width: var(--sidebar-w); flex-shrink: 0;
            background: var(--white);
            border-right: 1px solid var(--border);
            display: flex; flex-direction: column;
            position: sticky; top: 0; height: 100vh; overflow-y: auto;
        }
        .sidebar-logo {
            display: flex; align-items: center; gap: 10px;
            padding: 24px 20px 20px; border-bottom: 1px solid var(--border);
        }
        .logo-mark { width: 32px; height: 32px; border-radius: 9px; object-fit: contain; }
        .logo-name { font-family: var(--font-head); font-size: 17px; font-weight: 700; color: var(--text); }
        .sidebar-section { padding: 10px 12px 4px; font-size: 10px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; color: var(--text-muted); }
        .sidebar-nav { flex: 1; padding: 8px 12px; }
        .sidebar-link {
            display: flex; align-items: center; gap: 10px;
            padding: 9px 12px; border-radius: 10px;
            font-size: 13.5px; font-weight: 500; color: var(--text-mid);
            text-decoration: none; margin-bottom: 2px;
            transition: background .15s, color .15s;
        }
        .sidebar-link:hover { background: var(--purple-pale); color: var(--purple); }
        .sidebar-link.active { background: var(--purple-pale); color: var(--purple); font-weight: 600; }
        .sidebar-link .s-icon { font-size: 16px; width: 20px; text-align: center; }

        .sidebar-bottom {
            padding: 16px 12px;
            border-top: 1px solid var(--border);
            display: flex; flex-direction: column; gap: 8px;
        }
        .sidebar-admin-info { display: flex; align-items: center; gap: 10px; padding: 8px 12px; }
        .admin-avatar {
            width: 34px; height: 34px; border-radius: 50%;
            background: var(--purple); color: white;
            font-family: var(--font-head); font-weight: 700; font-size: 13px;
            display: grid; place-items: center; flex-shrink: 0;
        }
        .admin-name { font-size: 13px; font-weight: 600; color: var(--text); }
        .admin-role { font-size: 11px; color: var(--text-muted); }
        .sidebar-btn {
            display: flex; align-items: center; justify-content: center; gap: 8px;
            padding: 9px 14px; border-radius: 10px;
            font-size: 13px; font-weight: 500; cursor: pointer;
            text-decoration: none; transition: .15s;
        }
        .btn-profile { background: var(--purple-pale); color: var(--purple); }
        .btn-profile:hover { background: #ddd8f8; }
        .btn-logout { background: #FEF2F2; color: #E05252; border: none; }
        .btn-logout:hover { background: #FECACA; }

        /* ── MAIN ── */
        .admin-main { flex: 1; display: flex; flex-direction: column; }
        .admin-topbar {
            height: 58px; background: var(--white);
            border-bottom: 1px solid var(--border);
            display: flex; align-items: center;
            padding: 0 32px; gap: 12px; position: sticky; top: 0; z-index: 100;
        }
        .admin-topbar-title { font-family: var(--font-head); font-size: 16px; font-weight: 700; color: var(--text); }
        .admin-content { padding: 36px 32px 64px; flex: 1; }

        /* ── FLASH MESSAGES ── */
        .flash-success, .flash-error {
            padding: 12px 18px; border-radius: 10px; margin-bottom: 20px;
            font-size: 14px; font-weight: 500;
        }
        .flash-success { background: #D1FAE5; color: #065F46; border: 1px solid #6EE7B7; }
        .flash-error   { background: #FEE2E2; color: #991B1B; border: 1px solid #FCA5A5; }

        @keyframes fadeUp { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:translateY(0); } }
        .fade { animation: fadeUp .35s ease both; }
    </style>
    ";
        // line 100
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 101
        yield "</head>
<body>
<div class=\"admin-layout\">
    <!-- SIDEBAR -->
    <aside class=\"sidebar\">
        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"sidebar-logo\">
            <img src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
            <span class=\"logo-name\">Harmony</span>
        </a>

        <nav class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Tableau de bord</div>
            <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"sidebar-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "attributes", [], "any", false, false, false, 113), "get", ["_route"], "method", false, false, false, 113) == "admin_dashboard")) {
            yield "active";
        }
        yield "\">
                <span class=\"s-icon\">🏠</span> Accueil Admin
            </a>

            <div class=\"sidebar-section\" style=\"margin-top:8px;\">Utilisateurs</div>
            <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        yield "\" class=\"sidebar-link ";
        if ((CoreExtension::inFilter("admin_users", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "request", [], "any", false, false, false, 118), "attributes", [], "any", false, false, false, 118), "get", ["_route"], "method", false, false, false, 118)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "request", [], "any", false, false, false, 118), "attributes", [], "any", false, false, false, 118), "get", ["_route"], "method", false, false, false, 118) != "admin_users_suspended"))) {
            yield "active";
        }
        yield "\">
                <span class=\"s-icon\">👥</span> Tous les comptes
            </a>
            <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_suspended");
        yield "\" class=\"sidebar-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "attributes", [], "any", false, false, false, 121), "get", ["_route"], "method", false, false, false, 121) == "admin_users_suspended")) {
            yield "active";
        }
        yield "\">
                <span class=\"s-icon\">🔒</span> Comptes suspendus
            </a>

            <div class=\"sidebar-section\" style=\"margin-top:8px;\">Méditation</div>
            <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_index");
        yield "\" class=\"sidebar-link ";
        if ((CoreExtension::inFilter("admin_meditation", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "attributes", [], "any", false, false, false, 126), "get", ["_route"], "method", false, false, false, 126)) || CoreExtension::inFilter("admin_conseil", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "attributes", [], "any", false, false, false, 126), "get", ["_route"], "method", false, false, false, 126)))) {
            yield "active";
        }
        yield "\">
                <span class=\"s-icon\">🧘</span> Sessions
            </a>
            <div class=\"sidebar-section\" style=\"margin-top:8px;\">Forum</div>
            <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_dashboard");
        yield "\"
             class=\"sidebar-link ";
        // line 131
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "attributes", [], "any", false, false, false, 131), "get", ["_route"], "method", false, false, false, 131) == "back_dashboard")) ? ("active") : (""));
        yield "\">
                <span class=\"s-icon\">🏠</span> Back Forum
            </a>
            <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_categories");
        yield "\"
                class=\"sidebar-link ";
        // line 135
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, false, 135), "attributes", [], "any", false, false, false, 135), "get", ["_route"], "method", false, false, false, 135)) && is_string($_v1 = "back_categor") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
                <span class=\"s-icon\">🗂️</span> Catégories
            </a>

            <div class=\"sidebar-section\" style=\"margin-top:8px;\">Sport & Nutrition</div>
            <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_sport_index");
        yield "\" class=\"sidebar-link ";
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "attributes", [], "any", false, false, false, 140), "get", ["_route"], "method", false, false, false, 140)) && is_string($_v3 = "admin_sport") && str_starts_with($_v2, $_v3))) {
            yield "active";
        }
        yield "\">
                <span class=\"s-icon\">🏋️</span> Gestion Sport
            </a>
            <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_nutrition_index");
        yield "\" class=\"sidebar-link ";
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "request", [], "any", false, false, false, 143), "attributes", [], "any", false, false, false, 143), "get", ["_route"], "method", false, false, false, 143)) && is_string($_v5 = "admin_nutrition") && str_starts_with($_v4, $_v5))) {
            yield "active";
        }
        yield "\">
                <span class=\"s-icon\">🥗</span> Gestion Nutrition
            </a>

            <div class=\"sidebar-section\" style=\"margin-top:8px;\">Planning</div>
            <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index");
        yield "\" class=\"sidebar-link ";
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "request", [], "any", false, false, false, 148), "attributes", [], "any", false, false, false, 148), "get", ["_route"], "method", false, false, false, 148)) && is_string($_v7 = "admin_evenement") && str_starts_with($_v6, $_v7))) {
            yield "active";
        }
        yield "\">
                <span class=\"s-icon\">📅</span> Événements
            </a>
            <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tache_index");
        yield "\" class=\"sidebar-link ";
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "attributes", [], "any", false, false, false, 151), "get", ["_route"], "method", false, false, false, 151)) && is_string($_v9 = "admin_tache") && str_starts_with($_v8, $_v9))) {
            yield "active";
        }
        yield "\">
                <span class=\"s-icon\">📋</span> Tâches
            </a>
            <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_salle_index");
        yield "\" class=\"sidebar-link ";
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "request", [], "any", false, false, false, 154), "attributes", [], "any", false, false, false, 154), "get", ["_route"], "method", false, false, false, 154)) && is_string($_v11 = "admin_salle") && str_starts_with($_v10, $_v11))) {
            yield "active";
        }
        yield "\">
                <span class=\"s-icon\">🏢</span> Salles
            </a>
            <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_index");
        yield "\" class=\"sidebar-link ";
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "request", [], "any", false, false, false, 157), "attributes", [], "any", false, false, false, 157), "get", ["_route"], "method", false, false, false, 157)) && is_string($_v13 = "admin_demande") && str_starts_with($_v12, $_v13))) {
            yield "active";
        }
        yield "\">
                <span class=\"s-icon\">📨</span> Demandes
            </a>

        </nav>

        <div class=\"sidebar-bottom\">
            <div class=\"sidebar-admin-info\">
                <div class=\"admin-avatar\">
                    ";
        // line 166
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166), "firstName", [], "any", false, false, false, 166))), "html", null, true)) : ("A"));
        yield "
                </div>
                <div>
                    <div class=\"admin-name\">";
        // line 169
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "user", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "user", [], "any", false, false, false, 169), "firstName", [], "any", false, false, false, 169) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "user", [], "any", false, false, false, 169), "lastName", [], "any", false, false, false, 169)), "html", null, true)) : ("Admin"));
        yield "</div>
                    <div class=\"admin-role\">Administrateur</div>
                </div>
            </div>
            <a href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"sidebar-btn btn-profile\">⚙ Gérer mon profil</a>
            <a href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"sidebar-btn btn-logout\">🚪 Déconnexion</a>
        </div>
    </aside>

    <!-- MAIN -->
    <div class=\"admin-main\">
        <div class=\"admin-topbar\">
            <div class=\"admin-topbar-title\">";
        // line 181
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</div>
        </div>
        <div class=\"admin-content fade\">
            ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "flashes", ["success"], "method", false, false, false, 184));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 185
            yield "                <div class=\"flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "flashes", ["error"], "method", false, false, false, 187));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 188
            yield "                <div class=\"flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        yield "            ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 191
        yield "        </div>
    </div>
</div>
";
        // line 194
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 195
        yield "</body>
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

        yield "Admin — Harmony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 181
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

        yield "Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 190
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

    // line 194
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/base.html.twig";
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
        return array (  496 => 194,  474 => 190,  451 => 181,  429 => 100,  406 => 5,  393 => 195,  391 => 194,  386 => 191,  383 => 190,  374 => 188,  369 => 187,  360 => 185,  356 => 184,  350 => 181,  340 => 174,  336 => 173,  329 => 169,  323 => 166,  307 => 157,  297 => 154,  287 => 151,  277 => 148,  265 => 143,  255 => 140,  247 => 135,  243 => 134,  237 => 131,  233 => 130,  222 => 126,  210 => 121,  200 => 118,  188 => 113,  179 => 107,  175 => 106,  168 => 101,  166 => 100,  73 => 10,  69 => 9,  65 => 8,  59 => 5,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Admin — Harmony{% endblock %}</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('harmonie/css/harmony-theme.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('harmonie/css/admin-harmony.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('harmonie/css/admin-cards.css') }}\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple: #6A5ACD; --purple-dark: #4B3B9E; --purple-soft: #8B7FD4;
            --purple-pale: #EDE8FA; --purple-ghost: #F7F5FD;
            --text: #1C1733; --text-mid: #4A4570; --text-muted: #9590B8;
            --border: rgba(106,90,205,.12); --white: #FFFFFF;
            --sidebar-w: 240px;
            --font-head: 'Syne', sans-serif; --font-body: 'Inter', sans-serif;
        }
        html, body { height: 100%; font-family: var(--font-body); background: var(--purple-ghost); color: var(--text); }

        /* ── LAYOUT ── */
        .admin-layout { display: flex; min-height: 100vh; }

        /* ── SIDEBAR ── */
        .sidebar {
            width: var(--sidebar-w); flex-shrink: 0;
            background: var(--white);
            border-right: 1px solid var(--border);
            display: flex; flex-direction: column;
            position: sticky; top: 0; height: 100vh; overflow-y: auto;
        }
        .sidebar-logo {
            display: flex; align-items: center; gap: 10px;
            padding: 24px 20px 20px; border-bottom: 1px solid var(--border);
        }
        .logo-mark { width: 32px; height: 32px; border-radius: 9px; object-fit: contain; }
        .logo-name { font-family: var(--font-head); font-size: 17px; font-weight: 700; color: var(--text); }
        .sidebar-section { padding: 10px 12px 4px; font-size: 10px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; color: var(--text-muted); }
        .sidebar-nav { flex: 1; padding: 8px 12px; }
        .sidebar-link {
            display: flex; align-items: center; gap: 10px;
            padding: 9px 12px; border-radius: 10px;
            font-size: 13.5px; font-weight: 500; color: var(--text-mid);
            text-decoration: none; margin-bottom: 2px;
            transition: background .15s, color .15s;
        }
        .sidebar-link:hover { background: var(--purple-pale); color: var(--purple); }
        .sidebar-link.active { background: var(--purple-pale); color: var(--purple); font-weight: 600; }
        .sidebar-link .s-icon { font-size: 16px; width: 20px; text-align: center; }

        .sidebar-bottom {
            padding: 16px 12px;
            border-top: 1px solid var(--border);
            display: flex; flex-direction: column; gap: 8px;
        }
        .sidebar-admin-info { display: flex; align-items: center; gap: 10px; padding: 8px 12px; }
        .admin-avatar {
            width: 34px; height: 34px; border-radius: 50%;
            background: var(--purple); color: white;
            font-family: var(--font-head); font-weight: 700; font-size: 13px;
            display: grid; place-items: center; flex-shrink: 0;
        }
        .admin-name { font-size: 13px; font-weight: 600; color: var(--text); }
        .admin-role { font-size: 11px; color: var(--text-muted); }
        .sidebar-btn {
            display: flex; align-items: center; justify-content: center; gap: 8px;
            padding: 9px 14px; border-radius: 10px;
            font-size: 13px; font-weight: 500; cursor: pointer;
            text-decoration: none; transition: .15s;
        }
        .btn-profile { background: var(--purple-pale); color: var(--purple); }
        .btn-profile:hover { background: #ddd8f8; }
        .btn-logout { background: #FEF2F2; color: #E05252; border: none; }
        .btn-logout:hover { background: #FECACA; }

        /* ── MAIN ── */
        .admin-main { flex: 1; display: flex; flex-direction: column; }
        .admin-topbar {
            height: 58px; background: var(--white);
            border-bottom: 1px solid var(--border);
            display: flex; align-items: center;
            padding: 0 32px; gap: 12px; position: sticky; top: 0; z-index: 100;
        }
        .admin-topbar-title { font-family: var(--font-head); font-size: 16px; font-weight: 700; color: var(--text); }
        .admin-content { padding: 36px 32px 64px; flex: 1; }

        /* ── FLASH MESSAGES ── */
        .flash-success, .flash-error {
            padding: 12px 18px; border-radius: 10px; margin-bottom: 20px;
            font-size: 14px; font-weight: 500;
        }
        .flash-success { background: #D1FAE5; color: #065F46; border: 1px solid #6EE7B7; }
        .flash-error   { background: #FEE2E2; color: #991B1B; border: 1px solid #FCA5A5; }

        @keyframes fadeUp { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:translateY(0); } }
        .fade { animation: fadeUp .35s ease both; }
    </style>
    {% block stylesheets %}{% endblock %}
</head>
<body>
<div class=\"admin-layout\">
    <!-- SIDEBAR -->
    <aside class=\"sidebar\">
        <a href=\"{{ path('homepage') }}\" class=\"sidebar-logo\">
            <img src=\"{{ asset('images/logo.png') }}\" class=\"logo-mark\" alt=\"Harmony\">
            <span class=\"logo-name\">Harmony</span>
        </a>

        <nav class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Tableau de bord</div>
            <a href=\"{{ path('admin_dashboard') }}\" class=\"sidebar-link {% if app.request.attributes.get('_route') == 'admin_dashboard' %}active{% endif %}\">
                <span class=\"s-icon\">🏠</span> Accueil Admin
            </a>

            <div class=\"sidebar-section\" style=\"margin-top:8px;\">Utilisateurs</div>
            <a href=\"{{ path('admin_users_index') }}\" class=\"sidebar-link {% if 'admin_users' in app.request.attributes.get('_route') and app.request.attributes.get('_route') != 'admin_users_suspended' %}active{% endif %}\">
                <span class=\"s-icon\">👥</span> Tous les comptes
            </a>
            <a href=\"{{ path('admin_users_suspended') }}\" class=\"sidebar-link {% if app.request.attributes.get('_route') == 'admin_users_suspended' %}active{% endif %}\">
                <span class=\"s-icon\">🔒</span> Comptes suspendus
            </a>

            <div class=\"sidebar-section\" style=\"margin-top:8px;\">Méditation</div>
            <a href=\"{{ path('admin_meditation_index') }}\" class=\"sidebar-link {% if 'admin_meditation' in app.request.attributes.get('_route') or 'admin_conseil' in app.request.attributes.get('_route') %}active{% endif %}\">
                <span class=\"s-icon\">🧘</span> Sessions
            </a>
            <div class=\"sidebar-section\" style=\"margin-top:8px;\">Forum</div>
            <a href=\"{{ path('back_dashboard') }}\"
             class=\"sidebar-link {{ app.request.attributes.get('_route') == 'back_dashboard' ? 'active' }}\">
                <span class=\"s-icon\">🏠</span> Back Forum
            </a>
            <a href=\"{{ path('back_categories') }}\"
                class=\"sidebar-link {{ app.request.attributes.get('_route') starts with 'back_categor' ? 'active' }}\">
                <span class=\"s-icon\">🗂️</span> Catégories
            </a>

            <div class=\"sidebar-section\" style=\"margin-top:8px;\">Sport & Nutrition</div>
            <a href=\"{{ path('admin_sport_index') }}\" class=\"sidebar-link {% if app.request.attributes.get('_route') starts with 'admin_sport' %}active{% endif %}\">
                <span class=\"s-icon\">🏋️</span> Gestion Sport
            </a>
            <a href=\"{{ path('admin_nutrition_index') }}\" class=\"sidebar-link {% if app.request.attributes.get('_route') starts with 'admin_nutrition' %}active{% endif %}\">
                <span class=\"s-icon\">🥗</span> Gestion Nutrition
            </a>

            <div class=\"sidebar-section\" style=\"margin-top:8px;\">Planning</div>
            <a href=\"{{ path('admin_evenement_index') }}\" class=\"sidebar-link {% if app.request.attributes.get('_route') starts with 'admin_evenement' %}active{% endif %}\">
                <span class=\"s-icon\">📅</span> Événements
            </a>
            <a href=\"{{ path('admin_tache_index') }}\" class=\"sidebar-link {% if app.request.attributes.get('_route') starts with 'admin_tache' %}active{% endif %}\">
                <span class=\"s-icon\">📋</span> Tâches
            </a>
            <a href=\"{{ path('admin_salle_index') }}\" class=\"sidebar-link {% if app.request.attributes.get('_route') starts with 'admin_salle' %}active{% endif %}\">
                <span class=\"s-icon\">🏢</span> Salles
            </a>
            <a href=\"{{ path('admin_demande_index') }}\" class=\"sidebar-link {% if app.request.attributes.get('_route') starts with 'admin_demande' %}active{% endif %}\">
                <span class=\"s-icon\">📨</span> Demandes
            </a>

        </nav>

        <div class=\"sidebar-bottom\">
            <div class=\"sidebar-admin-info\">
                <div class=\"admin-avatar\">
                    {{ app.user ? (app.user.firstName|first)|upper : 'A' }}
                </div>
                <div>
                    <div class=\"admin-name\">{{ app.user ? app.user.firstName ~ ' ' ~ app.user.lastName : 'Admin' }}</div>
                    <div class=\"admin-role\">Administrateur</div>
                </div>
            </div>
            <a href=\"{{ path('app_profile_edit') }}\" class=\"sidebar-btn btn-profile\">⚙ Gérer mon profil</a>
            <a href=\"{{ path('app_logout') }}\" class=\"sidebar-btn btn-logout\">🚪 Déconnexion</a>
        </div>
    </aside>

    <!-- MAIN -->
    <div class=\"admin-main\">
        <div class=\"admin-topbar\">
            <div class=\"admin-topbar-title\">{% block page_title %}Admin{% endblock %}</div>
        </div>
        <div class=\"admin-content fade\">
            {% for msg in app.flashes('success') %}
                <div class=\"flash-success\">✅ {{ msg }}</div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"flash-error\">❌ {{ msg }}</div>
            {% endfor %}
            {% block body %}{% endblock %}
        </div>
    </div>
</div>
{% block javascripts %}{% endblock %}
</body>
</html>
", "admin/base.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/admin/base.html.twig");
    }
}

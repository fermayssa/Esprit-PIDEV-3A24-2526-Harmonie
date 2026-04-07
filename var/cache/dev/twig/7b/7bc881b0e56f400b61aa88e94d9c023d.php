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

/* profile/index.html.twig */
class __TwigTemplate_a8bdac4fd7cd8a6399a7a2280090ef53 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "homepage/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->load("homepage/index.html.twig", 1);
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

        yield "Mon Profil — Harmony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        // line 7
        yield "    <header class=\"topbar\">
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
            <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
        </a>
        <nav class=\"nav-links\">
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\"  class=\"nav-link\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\"      class=\"nav-link\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\"     class=\"nav-link\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"nav-link\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\"  class=\"nav-link\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"nav-link\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\"    class=\"nav-link\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\"    class=\"nav-link\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>
        <div class=\"topbar-right\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout-btn\">🚪 Déconnexion</a>
            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "firstName", [], "any", false, false, false, 24))), "html", null, true);
        yield "</div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "firstName", [], "any", false, false, false, 26), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "lastName", [], "any", false, false, false, 26), "html", null, true);
        yield "</div>
                    <div class=\"pd-email\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), "html", null, true);
        yield "</div>
                    <div class=\"pd-divider\"></div>
                    <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" style=\"font-size:13px;color:#6A5ACD;text-decoration:none;font-weight:500;\">✏ Modifier le profil</a>
                </div>
            </div>
        </div>
    </header>

    <style>
        :root { --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;--text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;--border:rgba(106,90,205,.12);--font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif; }
        .profile-page { max-width: 860px; margin: 0 auto; padding: 48px 32px 80px; }
        .profile-hero {
            background: #fff; border: 1px solid var(--border); border-radius: 22px;
            padding: 40px; display: flex; align-items: center; gap: 28px;
            margin-bottom: 28px; position: relative; overflow: hidden;
        }
        .profile-hero::before { content:''; position:absolute; top:-60px;right:-60px; width:240px;height:240px; background:radial-gradient(circle,rgba(106,90,205,.07) 0%,transparent 70%); pointer-events:none; }
        .profile-avatar-big {
            width: 90px; height: 90px; border-radius: 50%; flex-shrink: 0;
            background: var(--purple); display: grid; place-items: center;
            font-family: var(--font-head); font-size: 36px; font-weight: 800; color: #fff;
            border: 3px solid var(--purple-pale);
        }
        .profile-avatar-big img { width: 90px; height: 90px; border-radius: 50%; object-fit: cover; }
        .profile-hero-info h2 { font-family: var(--font-head); font-size: 24px; font-weight: 800; color: var(--text); }
        .profile-hero-info p { font-size: 13.5px; color: var(--text-muted); margin-top: 4px; }
        .edit-btn {
            margin-left: auto; padding: 10px 22px; background: var(--purple); color: #fff;
            border-radius: 10px; text-decoration: none; font-size: 13px; font-weight: 600;
            display: flex; align-items: center; gap: 8px;
            transition: background .15s; box-shadow: 0 4px 14px rgba(106,90,205,.25);
        }
        .edit-btn:hover { background: var(--purple-dark); }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px; }
        .info-card { background: #fff; border: 1px solid var(--border); border-radius: 16px; padding: 20px 22px; }
        .info-card-title { font-family: var(--font-head); font-size: 13px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: .8px; margin-bottom: 14px; display: flex; align-items: center; gap: 6px; }
        .info-row { display: flex; justify-content: space-between; align-items: center; padding: 8px 0; border-bottom: 1px solid var(--purple-ghost); }
        .info-row:last-child { border: none; }
        .info-label { font-size: 12.5px; color: var(--text-muted); }
        .info-value { font-size: 13.5px; font-weight: 600; color: var(--text); }
        .badge-active { background: #D1FAE5; color: #065F46; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }
        .badge-role { background: var(--purple-pale); color: var(--purple); padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }
    </style>

    <main class=\"profile-page\">
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "flashes", ["success"], "method", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 73
            yield "            <div style=\"background:#D1FAE5;color:#065F46;padding:12px 18px;border-radius:10px;margin-bottom:20px;font-size:14px;\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "
        <div class=\"profile-hero\">
            <div class=\"profile-avatar-big\">
                ";
        // line 78
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "userImagePath", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "userImagePath", [], "any", false, false, false, 79)), "html", null, true);
            yield "\" alt=\"Avatar\">
                ";
        } else {
            // line 81
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "firstName", [], "any", false, false, false, 81))), "html", null, true);
            yield "
                ";
        }
        // line 83
        yield "            </div>
            <div class=\"profile-hero-info\">
                <h2>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "userPrenom", [], "any", false, false, false, 85), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "userNom", [], "any", false, false, false, 85), "html", null, true);
        yield "</h2>
                <p>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "userEmail", [], "any", false, false, false, 86), "html", null, true);
        yield "</p>
                <p style=\"margin-top:6px;\">
                    <span class=\"badge-role\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "typeUtilisateur", [], "any", false, false, false, 88), "html", null, true);
        yield "</span>
                    ";
        // line 89
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "isActive", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                        <span class=\"badge-active\" style=\"margin-left:6px;\">Actif</span>
                    ";
        }
        // line 92
        yield "                </p>
            </div>
            <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"edit-btn\">✏ Modifier le profil</a>
        </div>

        <div class=\"info-grid\">
            <div class=\"info-card\">
                <div class=\"info-card-title\">👤 Informations personnelles</div>
                <div class=\"info-row\"><span class=\"info-label\">Nom</span><span class=\"info-value\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "userNom", [], "any", false, false, false, 100), "html", null, true);
        yield "</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Prénom</span><span class=\"info-value\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "userPrenom", [], "any", false, false, false, 101), "html", null, true);
        yield "</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Email</span><span class=\"info-value\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "userEmail", [], "any", false, false, false, 102), "html", null, true);
        yield "</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Date de naissance</span><span class=\"info-value\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 103), "html", null, true);
        yield "</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Sexe</span><span class=\"info-value\">";
        // line 104
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userSexe", [], "any", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "userSexe", [], "any", false, false, false, 104)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "userSexe", [], "any", false, false, false, 104), "html", null, true)) : ("—"));
        yield "</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Membre depuis</span><span class=\"info-value\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "dateInscription", [], "any", false, false, false, 105), "html", null, true);
        yield "</span></div>
            </div>

            <div class=\"info-card\">
                <div class=\"info-card-title\">📚 Scolarité & activité</div>
                <div class=\"info-row\"><span class=\"info-label\">Niveau</span><span class=\"info-value\">";
        // line 110
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userNiveauScolaire", [], "any", true, true, false, 110) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "userNiveauScolaire", [], "any", false, false, false, 110)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "userNiveauScolaire", [], "any", false, false, false, 110), "html", null, true)) : ("—"));
        yield "</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Établissement</span><span class=\"info-value\">";
        // line 111
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userEtablissementScolaire", [], "any", true, true, false, 111) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "userEtablissementScolaire", [], "any", false, false, false, 111)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "userEtablissementScolaire", [], "any", false, false, false, 111), "html", null, true)) : ("—"));
        yield "</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Activité physique</span><span class=\"info-value\">";
        // line 112
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userNiveauActivitePhysique", [], "any", true, true, false, 112) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "userNiveauActivitePhysique", [], "any", false, false, false, 112)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "userNiveauActivitePhysique", [], "any", false, false, false, 112), "html", null, true)) : ("—"));
        yield "</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Poids</span><span class=\"info-value\">";
        // line 113
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "userPoids", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "userPoids", [], "any", false, false, false, 113) . " kg"), "html", null, true)) : ("—"));
        yield "</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Taille</span><span class=\"info-value\">";
        // line 114
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "userTaille", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "userTaille", [], "any", false, false, false, 114) . " cm"), "html", null, true)) : ("—"));
        yield "</span></div>
            </div>
        </div>
    </main>

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
        return "profile/index.html.twig";
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
        return array (  330 => 114,  326 => 113,  322 => 112,  318 => 111,  314 => 110,  306 => 105,  302 => 104,  298 => 103,  294 => 102,  290 => 101,  286 => 100,  277 => 94,  273 => 92,  269 => 90,  267 => 89,  263 => 88,  258 => 86,  252 => 85,  248 => 83,  242 => 81,  236 => 79,  234 => 78,  229 => 75,  220 => 73,  216 => 72,  170 => 29,  165 => 27,  159 => 26,  154 => 24,  149 => 22,  143 => 19,  139 => 18,  135 => 17,  131 => 16,  127 => 15,  123 => 14,  119 => 13,  115 => 12,  109 => 9,  105 => 8,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homepage/index.html.twig' %}
{# On réutilise le topbar du homepage en overridant juste le body content #}
{% block title %}Mon Profil — Harmony{% endblock %}

{% block body %}
    {# Re-include topbar from homepage logic #}
    <header class=\"topbar\">
        <a href=\"{{ path('homepage') }}\" class=\"topbar-logo\">
            <img src=\"{{ asset('images/logo.png') }}\" class=\"logo-mark\" alt=\"Harmony\">
        </a>
        <nav class=\"nav-links\">
            <a href=\"{{ path('activites') }}\"  class=\"nav-link\"><span class=\"nav-emoji\">🏋</span> Activités</a>
            <a href=\"{{ path('forum') }}\"      class=\"nav-link\"><span class=\"nav-emoji\">💬</span> Forum</a>
            <a href=\"{{ path('taches') }}\"     class=\"nav-link\"><span class=\"nav-emoji\">📚</span> Tâches</a>
            <a href=\"{{ path('evenements') }}\" class=\"nav-link\"><span class=\"nav-emoji\">📅</span> Événements</a>
            <a href=\"{{ path('nutrition') }}\"  class=\"nav-link\"><span class=\"nav-emoji\">🥗</span> Nutrition</a>
            <a href=\"{{ path('meditation') }}\" class=\"nav-link\"><span class=\"nav-emoji\">🧘</span> Méditation</a>
            <a href=\"{{ path('journal') }}\"    class=\"nav-link\"><span class=\"nav-emoji\">📔</span> Journal</a>
            <a href=\"{{ path('library') }}\"    class=\"nav-link\"><span class=\"nav-emoji\">📖</span> Library</a>
        </nav>
        <div class=\"topbar-right\">
            <a href=\"{{ path('app_logout') }}\" class=\"logout-btn\">🚪 Déconnexion</a>
            <div class=\"profile-wrap\">
                <div class=\"avatar\" id=\"avatarBtn\">{{ app.user.firstName|first|upper }}</div>
                <div class=\"profile-dropdown\" id=\"profileDropdown\">
                    <div class=\"pd-name\">{{ app.user.firstName }} {{ app.user.lastName }}</div>
                    <div class=\"pd-email\">{{ app.user.email }}</div>
                    <div class=\"pd-divider\"></div>
                    <a href=\"{{ path('app_profile_edit') }}\" style=\"font-size:13px;color:#6A5ACD;text-decoration:none;font-weight:500;\">✏ Modifier le profil</a>
                </div>
            </div>
        </div>
    </header>

    <style>
        :root { --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;--text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;--border:rgba(106,90,205,.12);--font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif; }
        .profile-page { max-width: 860px; margin: 0 auto; padding: 48px 32px 80px; }
        .profile-hero {
            background: #fff; border: 1px solid var(--border); border-radius: 22px;
            padding: 40px; display: flex; align-items: center; gap: 28px;
            margin-bottom: 28px; position: relative; overflow: hidden;
        }
        .profile-hero::before { content:''; position:absolute; top:-60px;right:-60px; width:240px;height:240px; background:radial-gradient(circle,rgba(106,90,205,.07) 0%,transparent 70%); pointer-events:none; }
        .profile-avatar-big {
            width: 90px; height: 90px; border-radius: 50%; flex-shrink: 0;
            background: var(--purple); display: grid; place-items: center;
            font-family: var(--font-head); font-size: 36px; font-weight: 800; color: #fff;
            border: 3px solid var(--purple-pale);
        }
        .profile-avatar-big img { width: 90px; height: 90px; border-radius: 50%; object-fit: cover; }
        .profile-hero-info h2 { font-family: var(--font-head); font-size: 24px; font-weight: 800; color: var(--text); }
        .profile-hero-info p { font-size: 13.5px; color: var(--text-muted); margin-top: 4px; }
        .edit-btn {
            margin-left: auto; padding: 10px 22px; background: var(--purple); color: #fff;
            border-radius: 10px; text-decoration: none; font-size: 13px; font-weight: 600;
            display: flex; align-items: center; gap: 8px;
            transition: background .15s; box-shadow: 0 4px 14px rgba(106,90,205,.25);
        }
        .edit-btn:hover { background: var(--purple-dark); }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px; }
        .info-card { background: #fff; border: 1px solid var(--border); border-radius: 16px; padding: 20px 22px; }
        .info-card-title { font-family: var(--font-head); font-size: 13px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: .8px; margin-bottom: 14px; display: flex; align-items: center; gap: 6px; }
        .info-row { display: flex; justify-content: space-between; align-items: center; padding: 8px 0; border-bottom: 1px solid var(--purple-ghost); }
        .info-row:last-child { border: none; }
        .info-label { font-size: 12.5px; color: var(--text-muted); }
        .info-value { font-size: 13.5px; font-weight: 600; color: var(--text); }
        .badge-active { background: #D1FAE5; color: #065F46; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }
        .badge-role { background: var(--purple-pale); color: var(--purple); padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }
    </style>

    <main class=\"profile-page\">
        {% for msg in app.flashes('success') %}
            <div style=\"background:#D1FAE5;color:#065F46;padding:12px 18px;border-radius:10px;margin-bottom:20px;font-size:14px;\">✅ {{ msg }}</div>
        {% endfor %}

        <div class=\"profile-hero\">
            <div class=\"profile-avatar-big\">
                {% if user.userImagePath %}
                    <img src=\"{{ asset(user.userImagePath) }}\" alt=\"Avatar\">
                {% else %}
                    {{ user.firstName|first|upper }}
                {% endif %}
            </div>
            <div class=\"profile-hero-info\">
                <h2>{{ user.userPrenom }} {{ user.userNom }}</h2>
                <p>{{ user.userEmail }}</p>
                <p style=\"margin-top:6px;\">
                    <span class=\"badge-role\">{{ user.typeUtilisateur }}</span>
                    {% if user.isActive %}
                        <span class=\"badge-active\" style=\"margin-left:6px;\">Actif</span>
                    {% endif %}
                </p>
            </div>
            <a href=\"{{ path('app_profile_edit') }}\" class=\"edit-btn\">✏ Modifier le profil</a>
        </div>

        <div class=\"info-grid\">
            <div class=\"info-card\">
                <div class=\"info-card-title\">👤 Informations personnelles</div>
                <div class=\"info-row\"><span class=\"info-label\">Nom</span><span class=\"info-value\">{{ user.userNom }}</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Prénom</span><span class=\"info-value\">{{ user.userPrenom }}</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Email</span><span class=\"info-value\">{{ user.userEmail }}</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Date de naissance</span><span class=\"info-value\">{{ user.userDateDeNaissance }}</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Sexe</span><span class=\"info-value\">{{ user.userSexe ?? '—' }}</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Membre depuis</span><span class=\"info-value\">{{ user.dateInscription }}</span></div>
            </div>

            <div class=\"info-card\">
                <div class=\"info-card-title\">📚 Scolarité & activité</div>
                <div class=\"info-row\"><span class=\"info-label\">Niveau</span><span class=\"info-value\">{{ user.userNiveauScolaire ?? '—' }}</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Établissement</span><span class=\"info-value\">{{ user.userEtablissementScolaire ?? '—' }}</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Activité physique</span><span class=\"info-value\">{{ user.userNiveauActivitePhysique ?? '—' }}</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Poids</span><span class=\"info-value\">{{ user.userPoids ? user.userPoids ~ ' kg' : '—' }}</span></div>
                <div class=\"info-row\"><span class=\"info-label\">Taille</span><span class=\"info-value\">{{ user.userTaille ? user.userTaille ~ ' cm' : '—' }}</span></div>
            </div>
        </div>
    </main>

    <script>
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));
    </script>
{% endblock %}
", "profile/index.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/profile/index.html.twig");
    }
}

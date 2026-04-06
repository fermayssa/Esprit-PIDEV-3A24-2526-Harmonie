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

/* admin/users/show.html.twig */
class __TwigTemplate_e8f1f0a85dd4780f039cab223c6fbe51 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/show.html.twig"));

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

        yield "Détail — ";
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

        yield "👤 Détail du compte";
        
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
        .profile-card { background: var(--white); border: 1px solid var(--border); border-radius: 22px; padding: 36px; margin-bottom: 22px; display: flex; align-items: center; gap: 24px; }
        .big-avatar { width: 80px; height: 80px; border-radius: 50%; background: var(--purple); display: grid; place-items: center; font-family: var(--font-head); font-size: 32px; font-weight: 800; color: #fff; border: 3px solid var(--purple-pale); flex-shrink: 0; }
        .big-avatar img { width: 80px; height: 80px; border-radius: 50%; object-fit: cover; }
        .profile-card h2 { font-family: var(--font-head); font-size: 22px; font-weight: 800; color: var(--text); }
        .profile-card p { font-size: 13.5px; color: var(--text-muted); margin-top: 3px; }
        .actions { margin-left: auto; display: flex; gap: 10px; }
        .btn { padding: 10px 18px; border-radius: 10px; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; cursor: pointer; border: none; transition: .15s; }
        .btn-edit { background: var(--purple-pale); color: var(--purple); }
        .btn-edit:hover { background: #ddd8f8; }
        .btn-danger { background: #FEE2E2; color: #E05252; }
        .btn-danger:hover { background: #FECACA; }
        .btn-success { background: #D1FAE5; color: #065F46; }
        .btn-success:hover { background: #A7F3D0; }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .info-card { background: var(--white); border: 1px solid var(--border); border-radius: 16px; padding: 20px 22px; }
        .info-card-title { font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: .8px; color: var(--text-muted); margin-bottom: 14px; }
        .info-row { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid var(--purple-ghost); }
        .info-row:last-child { border: none; }
        .il { font-size: 12.5px; color: var(--text-muted); }
        .iv { font-size: 13.5px; font-weight: 600; color: var(--text); }
        .suspicion-panel { background: var(--white); border: 1px solid var(--border); border-radius: 16px; padding: 20px 22px; margin-bottom: 22px; }
        .suspicion-panel h3 { font-family: var(--font-head); font-size: 15px; font-weight: 700; margin-bottom: 12px; }
        .sus-bar-wrap { display: flex; align-items: center; gap: 14px; }
        .sus-bar { flex: 1; height: 10px; background: #eee; border-radius: 10px; overflow: hidden; }
        .sus-fill { height: 100%; border-radius: 10px; }
        .sus-score { font-family: var(--font-head); font-size: 20px; font-weight: 800; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
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

        // line 39
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        yield "\" class=\"back-link\">← Retour à la liste</a>

    <div class=\"profile-card\">
        <div class=\"big-avatar\">
            ";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "userImagePath", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "userImagePath", [], "any", false, false, false, 44)), "html", null, true);
            yield "\" alt=\"\">
            ";
        } else {
            // line 46
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "userPrenom", [], "any", false, false, false, 46))), "html", null, true);
            yield "
            ";
        }
        // line 48
        yield "        </div>
        <div>
            <h2>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "userPrenom", [], "any", false, false, false, 50), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "userNom", [], "any", false, false, false, 50), "html", null, true);
        yield "</h2>
            <p>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "userEmail", [], "any", false, false, false, 51), "html", null, true);
        yield "</p>
            <p style=\"margin-top:6px;\">
                ";
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "isActive", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                    <span style=\"background:#D1FAE5;color:#065F46;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;\">✓ Compte actif</span>
                ";
        } else {
            // line 56
            yield "                    <span style=\"background:#FEE2E2;color:#991B1B;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;\">✗ Compte suspendu</span>
                ";
        }
        // line 58
        yield "                <span style=\"background:var(--purple-pale);color:var(--purple);padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;margin-left:6px;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "typeUtilisateur", [], "any", false, false, false, 58), "html", null, true);
        yield "</span>
            </p>
        </div>
        <div class=\"actions\">
            <a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "userId", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\" class=\"btn btn-edit\">✏ Modifier</a>
            <form method=\"post\" action=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "userId", [], "any", false, false, false, 63)]), "html", null, true);
        yield "\" style=\"margin:0;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "userId", [], "any", false, false, false, 64))), "html", null, true);
        yield "\">
                ";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "isActive", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                    <button type=\"submit\" class=\"btn btn-danger\">🔒 Suspendre</button>
                ";
        } else {
            // line 68
            yield "                    <button type=\"submit\" class=\"btn btn-success\">✅ Réactiver</button>
                ";
        }
        // line 70
        yield "            </form>
        </div>
    </div>

    <div class=\"suspicion-panel\">
        <h3>⚠ Analyse de suspicion</h3>
        <div class=\"sus-bar-wrap\">
            <div class=\"sus-bar\">
                <div class=\"sus-fill\" style=\"width:";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 78, $this->source); })()), "html", null, true);
        yield "%;background:";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreColor"]) || array_key_exists("scoreColor", $context) ? $context["scoreColor"] : (function () { throw new RuntimeError('Variable "scoreColor" does not exist.', 78, $this->source); })()), "html", null, true);
        yield ";\"></div>
            </div>
            <span class=\"sus-score\" style=\"color:";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreColor"]) || array_key_exists("scoreColor", $context) ? $context["scoreColor"] : (function () { throw new RuntimeError('Variable "scoreColor" does not exist.', 80, $this->source); })()), "html", null, true);
        yield ";\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 80, $this->source); })()), "html", null, true);
        yield "/100</span>
            <span style=\"font-size:13px;font-weight:600;color:";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreColor"]) || array_key_exists("scoreColor", $context) ? $context["scoreColor"] : (function () { throw new RuntimeError('Variable "scoreColor" does not exist.', 81, $this->source); })()), "html", null, true);
        yield ";\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreLabel"]) || array_key_exists("scoreLabel", $context) ? $context["scoreLabel"] : (function () { throw new RuntimeError('Variable "scoreLabel" does not exist.', 81, $this->source); })()), "html", null, true);
        yield "</span>
        </div>
    </div>

    <div class=\"info-grid\">
        <div class=\"info-card\">
            <div class=\"info-card-title\">👤 Informations personnelles</div>
            <div class=\"info-row\"><span class=\"il\">Nom</span><span class=\"iv\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "userNom", [], "any", false, false, false, 88), "html", null, true);
        yield "</span></div>
            <div class=\"info-row\"><span class=\"il\">Prénom</span><span class=\"iv\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "userPrenom", [], "any", false, false, false, 89), "html", null, true);
        yield "</span></div>
            <div class=\"info-row\"><span class=\"il\">Email</span><span class=\"iv\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "userEmail", [], "any", false, false, false, 90), "html", null, true);
        yield "</span></div>
            <div class=\"info-row\"><span class=\"il\">Date de naissance</span><span class=\"iv\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "userDateDeNaissance", [], "any", false, false, false, 91), "html", null, true);
        yield "</span></div>
            <div class=\"info-row\"><span class=\"il\">Sexe</span><span class=\"iv\">";
        // line 92
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userSexe", [], "any", true, true, false, 92) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "userSexe", [], "any", false, false, false, 92)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "userSexe", [], "any", false, false, false, 92), "html", null, true)) : ("—"));
        yield "</span></div>
            <div class=\"info-row\"><span class=\"il\">Inscrit le</span><span class=\"iv\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "dateInscription", [], "any", false, false, false, 93), "html", null, true);
        yield "</span></div>
        </div>
        <div class=\"info-card\">
            <div class=\"info-card-title\">📚 Scolarité & physique</div>
            <div class=\"info-row\"><span class=\"il\">Niveau scolaire</span><span class=\"iv\">";
        // line 97
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userNiveauScolaire", [], "any", true, true, false, 97) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "userNiveauScolaire", [], "any", false, false, false, 97)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "userNiveauScolaire", [], "any", false, false, false, 97), "html", null, true)) : ("—"));
        yield "</span></div>
            <div class=\"info-row\"><span class=\"il\">Établissement</span><span class=\"iv\">";
        // line 98
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userEtablissementScolaire", [], "any", true, true, false, 98) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "userEtablissementScolaire", [], "any", false, false, false, 98)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "userEtablissementScolaire", [], "any", false, false, false, 98), "html", null, true)) : ("—"));
        yield "</span></div>
            <div class=\"info-row\"><span class=\"il\">Activité physique</span><span class=\"iv\">";
        // line 99
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userNiveauActivitePhysique", [], "any", true, true, false, 99) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "userNiveauActivitePhysique", [], "any", false, false, false, 99)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "userNiveauActivitePhysique", [], "any", false, false, false, 99), "html", null, true)) : ("—"));
        yield "</span></div>
            <div class=\"info-row\"><span class=\"il\">Poids</span><span class=\"iv\">";
        // line 100
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "userPoids", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "userPoids", [], "any", false, false, false, 100) . " kg"), "html", null, true)) : ("—"));
        yield "</span></div>
            <div class=\"info-row\"><span class=\"il\">Taille</span><span class=\"iv\">";
        // line 101
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "userTaille", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "userTaille", [], "any", false, false, false, 101) . " cm"), "html", null, true)) : ("—"));
        yield "</span></div>
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
        return "admin/users/show.html.twig";
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
        return array (  337 => 101,  333 => 100,  329 => 99,  325 => 98,  321 => 97,  314 => 93,  310 => 92,  306 => 91,  302 => 90,  298 => 89,  294 => 88,  282 => 81,  276 => 80,  269 => 78,  259 => 70,  255 => 68,  251 => 66,  249 => 65,  245 => 64,  241 => 63,  237 => 62,  229 => 58,  225 => 56,  221 => 54,  219 => 53,  214 => 51,  208 => 50,  204 => 48,  198 => 46,  192 => 44,  190 => 43,  182 => 39,  169 => 38,  128 => 6,  115 => 5,  92 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %}Détail — {{ user.userPrenom }} {{ user.userNom }}{% endblock %}
{% block page_title %}👤 Détail du compte{% endblock %}

{% block stylesheets %}
    <style>
        .back-link { display: inline-flex; align-items: center; gap: 6px; color: var(--text-mid); text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; }
        .back-link:hover { color: var(--purple); }
        .profile-card { background: var(--white); border: 1px solid var(--border); border-radius: 22px; padding: 36px; margin-bottom: 22px; display: flex; align-items: center; gap: 24px; }
        .big-avatar { width: 80px; height: 80px; border-radius: 50%; background: var(--purple); display: grid; place-items: center; font-family: var(--font-head); font-size: 32px; font-weight: 800; color: #fff; border: 3px solid var(--purple-pale); flex-shrink: 0; }
        .big-avatar img { width: 80px; height: 80px; border-radius: 50%; object-fit: cover; }
        .profile-card h2 { font-family: var(--font-head); font-size: 22px; font-weight: 800; color: var(--text); }
        .profile-card p { font-size: 13.5px; color: var(--text-muted); margin-top: 3px; }
        .actions { margin-left: auto; display: flex; gap: 10px; }
        .btn { padding: 10px 18px; border-radius: 10px; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; cursor: pointer; border: none; transition: .15s; }
        .btn-edit { background: var(--purple-pale); color: var(--purple); }
        .btn-edit:hover { background: #ddd8f8; }
        .btn-danger { background: #FEE2E2; color: #E05252; }
        .btn-danger:hover { background: #FECACA; }
        .btn-success { background: #D1FAE5; color: #065F46; }
        .btn-success:hover { background: #A7F3D0; }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .info-card { background: var(--white); border: 1px solid var(--border); border-radius: 16px; padding: 20px 22px; }
        .info-card-title { font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: .8px; color: var(--text-muted); margin-bottom: 14px; }
        .info-row { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid var(--purple-ghost); }
        .info-row:last-child { border: none; }
        .il { font-size: 12.5px; color: var(--text-muted); }
        .iv { font-size: 13.5px; font-weight: 600; color: var(--text); }
        .suspicion-panel { background: var(--white); border: 1px solid var(--border); border-radius: 16px; padding: 20px 22px; margin-bottom: 22px; }
        .suspicion-panel h3 { font-family: var(--font-head); font-size: 15px; font-weight: 700; margin-bottom: 12px; }
        .sus-bar-wrap { display: flex; align-items: center; gap: 14px; }
        .sus-bar { flex: 1; height: 10px; background: #eee; border-radius: 10px; overflow: hidden; }
        .sus-fill { height: 100%; border-radius: 10px; }
        .sus-score { font-family: var(--font-head); font-size: 20px; font-weight: 800; }
    </style>
{% endblock %}

{% block body %}
    <a href=\"{{ path('admin_users_index') }}\" class=\"back-link\">← Retour à la liste</a>

    <div class=\"profile-card\">
        <div class=\"big-avatar\">
            {% if user.userImagePath %}
                <img src=\"{{ asset(user.userImagePath) }}\" alt=\"\">
            {% else %}
                {{ user.userPrenom|first|upper }}
            {% endif %}
        </div>
        <div>
            <h2>{{ user.userPrenom }} {{ user.userNom }}</h2>
            <p>{{ user.userEmail }}</p>
            <p style=\"margin-top:6px;\">
                {% if user.isActive %}
                    <span style=\"background:#D1FAE5;color:#065F46;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;\">✓ Compte actif</span>
                {% else %}
                    <span style=\"background:#FEE2E2;color:#991B1B;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;\">✗ Compte suspendu</span>
                {% endif %}
                <span style=\"background:var(--purple-pale);color:var(--purple);padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;margin-left:6px;\">{{ user.typeUtilisateur }}</span>
            </p>
        </div>
        <div class=\"actions\">
            <a href=\"{{ path('admin_users_edit', {id: user.userId}) }}\" class=\"btn btn-edit\">✏ Modifier</a>
            <form method=\"post\" action=\"{{ path('admin_users_toggle', {id: user.userId}) }}\" style=\"margin:0;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle' ~ user.userId) }}\">
                {% if user.isActive %}
                    <button type=\"submit\" class=\"btn btn-danger\">🔒 Suspendre</button>
                {% else %}
                    <button type=\"submit\" class=\"btn btn-success\">✅ Réactiver</button>
                {% endif %}
            </form>
        </div>
    </div>

    <div class=\"suspicion-panel\">
        <h3>⚠ Analyse de suspicion</h3>
        <div class=\"sus-bar-wrap\">
            <div class=\"sus-bar\">
                <div class=\"sus-fill\" style=\"width:{{ score }}%;background:{{ scoreColor }};\"></div>
            </div>
            <span class=\"sus-score\" style=\"color:{{ scoreColor }};\">{{ score }}/100</span>
            <span style=\"font-size:13px;font-weight:600;color:{{ scoreColor }};\">{{ scoreLabel }}</span>
        </div>
    </div>

    <div class=\"info-grid\">
        <div class=\"info-card\">
            <div class=\"info-card-title\">👤 Informations personnelles</div>
            <div class=\"info-row\"><span class=\"il\">Nom</span><span class=\"iv\">{{ user.userNom }}</span></div>
            <div class=\"info-row\"><span class=\"il\">Prénom</span><span class=\"iv\">{{ user.userPrenom }}</span></div>
            <div class=\"info-row\"><span class=\"il\">Email</span><span class=\"iv\">{{ user.userEmail }}</span></div>
            <div class=\"info-row\"><span class=\"il\">Date de naissance</span><span class=\"iv\">{{ user.userDateDeNaissance }}</span></div>
            <div class=\"info-row\"><span class=\"il\">Sexe</span><span class=\"iv\">{{ user.userSexe ?? '—' }}</span></div>
            <div class=\"info-row\"><span class=\"il\">Inscrit le</span><span class=\"iv\">{{ user.dateInscription }}</span></div>
        </div>
        <div class=\"info-card\">
            <div class=\"info-card-title\">📚 Scolarité & physique</div>
            <div class=\"info-row\"><span class=\"il\">Niveau scolaire</span><span class=\"iv\">{{ user.userNiveauScolaire ?? '—' }}</span></div>
            <div class=\"info-row\"><span class=\"il\">Établissement</span><span class=\"iv\">{{ user.userEtablissementScolaire ?? '—' }}</span></div>
            <div class=\"info-row\"><span class=\"il\">Activité physique</span><span class=\"iv\">{{ user.userNiveauActivitePhysique ?? '—' }}</span></div>
            <div class=\"info-row\"><span class=\"il\">Poids</span><span class=\"iv\">{{ user.userPoids ? user.userPoids ~ ' kg' : '—' }}</span></div>
            <div class=\"info-row\"><span class=\"il\">Taille</span><span class=\"iv\">{{ user.userTaille ? user.userTaille ~ ' cm' : '—' }}</span></div>
        </div>
    </div>
{% endblock %}
", "admin/users/show.html.twig", "/Users/rayen/Downloads/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication-3/templates/admin/users/show.html.twig");
    }
}

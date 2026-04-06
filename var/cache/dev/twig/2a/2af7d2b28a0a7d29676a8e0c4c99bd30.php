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

/* forum/post_detail.html.twig */
class __TwigTemplate_c1e538dc36d3b562524195b653be2f69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/post_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/post_detail.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 2, $this->source); })()), "titre", [], "any", false, false, false, 2), "html", null, true);
        yield " — Forum Harmony";
        
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
        yield "<link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
<style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
    :root{
        --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
        --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
        --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
        --border:rgba(106,90,205,.12);--white:#FFFFFF;
        --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
    }
    html,body{font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}

    .topbar{position:sticky;top:0;z-index:200;background:var(--white);
        border-bottom:1px solid var(--border);height:62px;display:flex;
        align-items:center;padding:0 40px;gap:8px;}
    .topbar-logo{display:flex;align-items:center;gap:10px;text-decoration:none;margin-right:32px;}
    .logo-mark{width:34px;height:34px;border-radius:10px;object-fit:contain;}
    .logo-name{font-family:var(--font-head);font-size:18px;font-weight:700;color:var(--text);}
    .nav-links{display:flex;align-items:center;gap:2px;flex:1;}
    .nav-link{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;
        border-radius:9px;font-size:13.5px;font-weight:500;color:var(--text-mid);
        text-decoration:none;transition:background .15s,color .15s;}
    .nav-link:hover,.nav-link.active{background:var(--purple-pale);color:var(--purple);font-weight:600;}
    .topbar-right{display:flex;align-items:center;gap:10px;margin-left:auto;}
    .logout-btn{padding:7px 16px;border-radius:9px;border:1.5px solid rgba(239,68,68,.2);
        background:transparent;color:#E05252;font-size:13px;cursor:pointer;}
    .avatar{width:36px;height:36px;border-radius:50%;background:var(--purple);
        color:white;font-family:var(--font-head);font-weight:700;font-size:14px;
        display:grid;place-items:center;}

    .page{max-width:780px;margin:0 auto;padding:48px 40px 80px;}

    .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;
        color:var(--text-muted);margin-bottom:24px;}
    .breadcrumb a{color:var(--purple);text-decoration:none;font-weight:500;}
    .breadcrumb a:hover{text-decoration:underline;}

    /* POST */
    .post-box{background:var(--white);border:1px solid var(--border);
        border-radius:20px;padding:36px 40px;margin-bottom:28px;}
    .post-title{font-family:var(--font-head);font-size:26px;font-weight:800;
        color:var(--text);margin-bottom:12px;line-height:1.25;}
    .post-meta-row{display:flex;align-items:center;gap:10px;margin-bottom:20px;}
    .post-avatar{width:34px;height:34px;border-radius:50%;background:var(--purple);
        color:white;font-size:13px;font-weight:700;display:grid;place-items:center;
        font-family:var(--font-head);}
    .post-author{font-size:13px;font-weight:600;color:var(--text);}
    .post-date{font-size:12px;color:var(--text-muted);}
    .post-body{font-size:15px;color:var(--text-mid);line-height:1.8;
        border-top:1px solid var(--purple-ghost);padding-top:20px;}

    /* COMMENTAIRES */
    .comments-header{display:flex;align-items:center;justify-content:space-between;
        margin-bottom:16px;}
    .comments-title{font-family:var(--font-head);font-size:18px;font-weight:700;
        color:var(--text);display:flex;align-items:center;gap:8px;}
    .comments-count{font-size:12px;font-weight:600;color:var(--purple);
        background:var(--purple-pale);padding:3px 10px;border-radius:20px;}

    .comment-card{background:var(--white);border:1px solid var(--border);
        border-radius:14px;padding:18px 22px;margin-bottom:12px;
        border-left:3px solid var(--purple-soft);}
    .comment-header{display:flex;align-items:center;gap:10px;margin-bottom:10px;}
    .comment-avatar{width:30px;height:30px;border-radius:50%;background:var(--purple-soft);
        color:white;font-size:11px;font-weight:700;display:grid;place-items:center;
        font-family:var(--font-head);}
    .comment-author{font-size:13px;font-weight:600;color:var(--text);}
    .comment-date{font-size:11px;color:var(--text-muted);}
    .comment-body{font-size:14px;color:var(--text-mid);line-height:1.7;}

    .no-comments{text-align:center;padding:36px;color:var(--text-muted);
        background:var(--white);border:1px dashed var(--border);border-radius:14px;
        font-size:14px;}

    @keyframes fadeUp{from{opacity:0;transform:translateY(16px);}to{opacity:1;transform:translateY(0);}}
    .fade{animation:fadeUp .4s ease both;}
    .d1{animation-delay:.06s;}.d2{animation-delay:.12s;}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
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

        // line 86
        yield "<header class=\"topbar\">
    <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"topbar-logo\">
        <img src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" class=\"logo-mark\" alt=\"Harmony\">
        <span class=\"logo-name\">Harmony</span>
    </a>
    <nav class=\"nav-links\">
        <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites");
        yield "\"  class=\"nav-link\">🏋 Activités</a>
        <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\"      class=\"nav-link active\">💬 Forum</a>
        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taches");
        yield "\"     class=\"nav-link\">📚 Tâches</a>
        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements");
        yield "\" class=\"nav-link\">📅 Événements</a>
        <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition");
        yield "\"  class=\"nav-link\">🥗 Nutrition</a>
        <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation");
        yield "\" class=\"nav-link\">🧘 Méditation</a>
        <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("journal");
        yield "\"    class=\"nav-link\">📔 Journal</a>
        <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library");
        yield "\"    class=\"nav-link\">📖 Library</a>
    </nav>
    <div class=\"topbar-right\">
        <button class=\"logout-btn\">🚪 Déconnexion</button>
        <div class=\"avatar\">E</div>
    </div>
</header>

<main class=\"page\">

    <div class=\"breadcrumb fade\">
        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\">💬 Forum</a>
        <span>›</span>
        ";
        // line 112
        if ((($tmp = (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 112, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 113, $this->source); })()), "idCategorie", [], "any", false, false, false, 113)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 113, $this->source); })()), "nomCategorie", [], "any", false, false, false, 113), "html", null, true);
            yield "</a>
            <span>›</span>
        ";
        }
        // line 116
        yield "        <span>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 116, $this->source); })()), "titre", [], "any", false, false, false, 116), 0, 40), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 116, $this->source); })()), "titre", [], "any", false, false, false, 116)) > 40)) {
            yield "…";
        }
        yield "</span>
    </div>

    <!-- POST -->
    <div class=\"post-box fade\">
        <h1 class=\"post-title\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 121, $this->source); })()), "titre", [], "any", false, false, false, 121), "html", null, true);
        yield "</h1>
        <div class=\"post-meta-row\">
            <div class=\"post-avatar\">U</div>
            <div>
                <div class=\"post-author\">Utilisateur #";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 125, $this->source); })()), "userId", [], "any", false, false, false, 125), "html", null, true);
        yield "</div>
                <div class=\"post-date\">";
        // line 126
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 126, $this->source); })()), "dateCreation", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 126, $this->source); })()), "dateCreation", [], "any", false, false, false, 126), "d/m/Y à H:i"), "html", null, true)) : (""));
        yield "</div>
            </div>
        </div>
        <div class=\"post-body\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 129, $this->source); })()), "contenu", [], "any", false, false, false, 129), "html", null, true);
        yield "</div>
    </div>

    <!-- COMMENTAIRES -->
    <div class=\"fade d1\">
        <div class=\"comments-header\">
            <div class=\"comments-title\">
                💬 Commentaires
                <span class=\"comments-count\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 137, $this->source); })())), "html", null, true);
        yield "</span>
            </div>
        </div>

        ";
        // line 141
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 141, $this->source); })()))) {
            // line 142
            yield "            <div class=\"no-comments\">Aucun commentaire pour l'instant. Sois le premier ! 👋</div>
        ";
        } else {
            // line 144
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 144, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 145
                yield "            <div class=\"comment-card fade d2\">
                <div class=\"comment-header\">
                    <div class=\"comment-avatar\">U</div>
                    <div>
                        <div class=\"comment-author\">Utilisateur #";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "userId", [], "any", false, false, false, 149), "html", null, true);
                yield "</div>
                        <div class=\"comment-date\">";
                // line 150
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCommentaire", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCommentaire", [], "any", false, false, false, 150), "d/m/Y à H:i"), "html", null, true)) : (""));
                yield "</div>
                    </div>
                </div>
                <div class=\"comment-body\">";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 153), "html", null, true);
                yield "</div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            yield "        ";
        }
        // line 157
        yield "    </div>

</main>
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
        return "forum/post_detail.html.twig";
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
        return array (  362 => 157,  359 => 156,  350 => 153,  344 => 150,  340 => 149,  334 => 145,  329 => 144,  325 => 142,  323 => 141,  316 => 137,  305 => 129,  299 => 126,  295 => 125,  288 => 121,  276 => 116,  267 => 113,  265 => 112,  260 => 110,  246 => 99,  242 => 98,  238 => 97,  234 => 96,  230 => 95,  226 => 94,  222 => 93,  218 => 92,  211 => 88,  207 => 87,  204 => 86,  191 => 85,  102 => 5,  89 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ post.titre }} — Forum Harmony{% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
<style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
    :root{
        --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
        --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
        --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
        --border:rgba(106,90,205,.12);--white:#FFFFFF;
        --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
    }
    html,body{font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}

    .topbar{position:sticky;top:0;z-index:200;background:var(--white);
        border-bottom:1px solid var(--border);height:62px;display:flex;
        align-items:center;padding:0 40px;gap:8px;}
    .topbar-logo{display:flex;align-items:center;gap:10px;text-decoration:none;margin-right:32px;}
    .logo-mark{width:34px;height:34px;border-radius:10px;object-fit:contain;}
    .logo-name{font-family:var(--font-head);font-size:18px;font-weight:700;color:var(--text);}
    .nav-links{display:flex;align-items:center;gap:2px;flex:1;}
    .nav-link{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;
        border-radius:9px;font-size:13.5px;font-weight:500;color:var(--text-mid);
        text-decoration:none;transition:background .15s,color .15s;}
    .nav-link:hover,.nav-link.active{background:var(--purple-pale);color:var(--purple);font-weight:600;}
    .topbar-right{display:flex;align-items:center;gap:10px;margin-left:auto;}
    .logout-btn{padding:7px 16px;border-radius:9px;border:1.5px solid rgba(239,68,68,.2);
        background:transparent;color:#E05252;font-size:13px;cursor:pointer;}
    .avatar{width:36px;height:36px;border-radius:50%;background:var(--purple);
        color:white;font-family:var(--font-head);font-weight:700;font-size:14px;
        display:grid;place-items:center;}

    .page{max-width:780px;margin:0 auto;padding:48px 40px 80px;}

    .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;
        color:var(--text-muted);margin-bottom:24px;}
    .breadcrumb a{color:var(--purple);text-decoration:none;font-weight:500;}
    .breadcrumb a:hover{text-decoration:underline;}

    /* POST */
    .post-box{background:var(--white);border:1px solid var(--border);
        border-radius:20px;padding:36px 40px;margin-bottom:28px;}
    .post-title{font-family:var(--font-head);font-size:26px;font-weight:800;
        color:var(--text);margin-bottom:12px;line-height:1.25;}
    .post-meta-row{display:flex;align-items:center;gap:10px;margin-bottom:20px;}
    .post-avatar{width:34px;height:34px;border-radius:50%;background:var(--purple);
        color:white;font-size:13px;font-weight:700;display:grid;place-items:center;
        font-family:var(--font-head);}
    .post-author{font-size:13px;font-weight:600;color:var(--text);}
    .post-date{font-size:12px;color:var(--text-muted);}
    .post-body{font-size:15px;color:var(--text-mid);line-height:1.8;
        border-top:1px solid var(--purple-ghost);padding-top:20px;}

    /* COMMENTAIRES */
    .comments-header{display:flex;align-items:center;justify-content:space-between;
        margin-bottom:16px;}
    .comments-title{font-family:var(--font-head);font-size:18px;font-weight:700;
        color:var(--text);display:flex;align-items:center;gap:8px;}
    .comments-count{font-size:12px;font-weight:600;color:var(--purple);
        background:var(--purple-pale);padding:3px 10px;border-radius:20px;}

    .comment-card{background:var(--white);border:1px solid var(--border);
        border-radius:14px;padding:18px 22px;margin-bottom:12px;
        border-left:3px solid var(--purple-soft);}
    .comment-header{display:flex;align-items:center;gap:10px;margin-bottom:10px;}
    .comment-avatar{width:30px;height:30px;border-radius:50%;background:var(--purple-soft);
        color:white;font-size:11px;font-weight:700;display:grid;place-items:center;
        font-family:var(--font-head);}
    .comment-author{font-size:13px;font-weight:600;color:var(--text);}
    .comment-date{font-size:11px;color:var(--text-muted);}
    .comment-body{font-size:14px;color:var(--text-mid);line-height:1.7;}

    .no-comments{text-align:center;padding:36px;color:var(--text-muted);
        background:var(--white);border:1px dashed var(--border);border-radius:14px;
        font-size:14px;}

    @keyframes fadeUp{from{opacity:0;transform:translateY(16px);}to{opacity:1;transform:translateY(0);}}
    .fade{animation:fadeUp .4s ease both;}
    .d1{animation-delay:.06s;}.d2{animation-delay:.12s;}
</style>
{% endblock %}

{% block body %}
<header class=\"topbar\">
    <a href=\"{{ path('homepage') }}\" class=\"topbar-logo\">
        <img src=\"{{ asset('images/logo.png') }}\" class=\"logo-mark\" alt=\"Harmony\">
        <span class=\"logo-name\">Harmony</span>
    </a>
    <nav class=\"nav-links\">
        <a href=\"{{ path('activites') }}\"  class=\"nav-link\">🏋 Activités</a>
        <a href=\"{{ path('forum') }}\"      class=\"nav-link active\">💬 Forum</a>
        <a href=\"{{ path('taches') }}\"     class=\"nav-link\">📚 Tâches</a>
        <a href=\"{{ path('evenements') }}\" class=\"nav-link\">📅 Événements</a>
        <a href=\"{{ path('nutrition') }}\"  class=\"nav-link\">🥗 Nutrition</a>
        <a href=\"{{ path('meditation') }}\" class=\"nav-link\">🧘 Méditation</a>
        <a href=\"{{ path('journal') }}\"    class=\"nav-link\">📔 Journal</a>
        <a href=\"{{ path('library') }}\"    class=\"nav-link\">📖 Library</a>
    </nav>
    <div class=\"topbar-right\">
        <button class=\"logout-btn\">🚪 Déconnexion</button>
        <div class=\"avatar\">E</div>
    </div>
</header>

<main class=\"page\">

    <div class=\"breadcrumb fade\">
        <a href=\"{{ path('forum') }}\">💬 Forum</a>
        <span>›</span>
        {% if categorie %}
            <a href=\"{{ path('forum_posts', {id: categorie.idCategorie}) }}\">{{ categorie.nomCategorie }}</a>
            <span>›</span>
        {% endif %}
        <span>{{ post.titre|slice(0, 40) }}{% if post.titre|length > 40 %}…{% endif %}</span>
    </div>

    <!-- POST -->
    <div class=\"post-box fade\">
        <h1 class=\"post-title\">{{ post.titre }}</h1>
        <div class=\"post-meta-row\">
            <div class=\"post-avatar\">U</div>
            <div>
                <div class=\"post-author\">Utilisateur #{{ post.userId }}</div>
                <div class=\"post-date\">{{ post.dateCreation ? post.dateCreation|date('d/m/Y à H:i') : '' }}</div>
            </div>
        </div>
        <div class=\"post-body\">{{ post.contenu }}</div>
    </div>

    <!-- COMMENTAIRES -->
    <div class=\"fade d1\">
        <div class=\"comments-header\">
            <div class=\"comments-title\">
                💬 Commentaires
                <span class=\"comments-count\">{{ commentaires|length }}</span>
            </div>
        </div>

        {% if commentaires is empty %}
            <div class=\"no-comments\">Aucun commentaire pour l'instant. Sois le premier ! 👋</div>
        {% else %}
            {% for c in commentaires %}
            <div class=\"comment-card fade d2\">
                <div class=\"comment-header\">
                    <div class=\"comment-avatar\">U</div>
                    <div>
                        <div class=\"comment-author\">Utilisateur #{{ c.userId }}</div>
                        <div class=\"comment-date\">{{ c.dateCommentaire ? c.dateCommentaire|date('d/m/Y à H:i') : '' }}</div>
                    </div>
                </div>
                <div class=\"comment-body\">{{ c.contenu }}</div>
            </div>
            {% endfor %}
        {% endif %}
    </div>

</main>
{% endblock %}", "forum/post_detail.html.twig", "/Users/rayen/Downloads/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication-3/templates/forum/post_detail.html.twig");
    }
}

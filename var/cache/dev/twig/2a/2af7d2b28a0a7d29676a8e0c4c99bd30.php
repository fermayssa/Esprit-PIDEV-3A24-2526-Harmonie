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
        yield "<style>
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

        // line 57
        yield from $this->load("_planning_topbar.html.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "
<main class=\"page\">

    <div class=\"breadcrumb fade\">
        <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\">💬 Forum</a>
        <span>›</span>
        ";
        // line 64
        if ((($tmp = (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 65, $this->source); })()), "idCategorie", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 65, $this->source); })()), "nomCategorie", [], "any", false, false, false, 65), "html", null, true);
            yield "</a>
            <span>›</span>
        ";
        }
        // line 68
        yield "        <span>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 68, $this->source); })()), "titre", [], "any", false, false, false, 68), 0, 40), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 68, $this->source); })()), "titre", [], "any", false, false, false, 68)) > 40)) {
            yield "…";
        }
        yield "</span>
    </div>

    <!-- POST -->
    <div class=\"post-box fade\">
        <h1 class=\"post-title\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 73, $this->source); })()), "titre", [], "any", false, false, false, 73), "html", null, true);
        yield "</h1>
        <div class=\"post-meta-row\">
            <div class=\"post-avatar\">U</div>
            <div>
                <div class=\"post-author\">Utilisateur #";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 77, $this->source); })()), "userId", [], "any", false, false, false, 77), "html", null, true);
        yield "</div>
                <div class=\"post-date\">";
        // line 78
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 78, $this->source); })()), "dateCreation", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 78, $this->source); })()), "dateCreation", [], "any", false, false, false, 78), "d/m/Y à H:i"), "html", null, true)) : (""));
        yield "</div>
            </div>
        </div>
        <div class=\"post-body\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 81, $this->source); })()), "contenu", [], "any", false, false, false, 81), "html", null, true);
        yield "</div>
    </div>

    <!-- COMMENTAIRES -->
    <div class=\"fade d1\">
        <div class=\"comments-header\">
            <div class=\"comments-title\">
                💬 Commentaires
                <span class=\"comments-count\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 89, $this->source); })())), "html", null, true);
        yield "</span>
            </div>
        </div>

        ";
        // line 93
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 93, $this->source); })()))) {
            // line 94
            yield "            <div class=\"no-comments\">Aucun commentaire pour l'instant. Sois le premier ! 👋</div>
        ";
        } else {
            // line 96
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 97
                yield "            <div class=\"comment-card fade d2\">
                <div class=\"comment-header\">
                    <div class=\"comment-avatar\">U</div>
                    <div>
                        <div class=\"comment-author\">Utilisateur #";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "userId", [], "any", false, false, false, 101), "html", null, true);
                yield "</div>
                        <div class=\"comment-date\">";
                // line 102
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCommentaire", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCommentaire", [], "any", false, false, false, 102), "d/m/Y à H:i"), "html", null, true)) : (""));
                yield "</div>
                    </div>
                </div>
                <div class=\"comment-body\">";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 105), "html", null, true);
                yield "</div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "        ";
        }
        // line 109
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
        return array (  285 => 109,  282 => 108,  273 => 105,  267 => 102,  263 => 101,  257 => 97,  252 => 96,  248 => 94,  246 => 93,  239 => 89,  228 => 81,  222 => 78,  218 => 77,  211 => 73,  199 => 68,  190 => 65,  188 => 64,  183 => 62,  177 => 58,  175 => 57,  162 => 56,  102 => 5,  89 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ post.titre }} — Forum Harmony{% endblock %}

{% block stylesheets %}
<style>
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
{% include '_planning_topbar.html.twig' %}

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
{% endblock %}", "forum/post_detail.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/forum/post_detail.html.twig");
    }
}

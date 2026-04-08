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

/* forum/posts.html.twig */
class __TwigTemplate_609ec52dad6366da27b5483eba8b1934 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/posts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/posts.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 2, $this->source); })()), "nomCategorie", [], "any", false, false, false, 2), "html", null, true);
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
    .page{max-width:860px;margin:0 auto;padding:48px 40px 80px;}

    .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;
        color:var(--text-muted);margin-bottom:24px;}
    .breadcrumb a{color:var(--purple);text-decoration:none;font-weight:500;}

    /* CAT HEADER */
    .cat-header{background:linear-gradient(135deg,var(--purple) 0%,var(--purple-dark) 100%);
        border-radius:18px;padding:28px 36px;margin-bottom:22px;
        display:flex;align-items:center;justify-content:space-between;}
    .cat-header h1{font-family:var(--font-head);font-size:24px;font-weight:800;color:white;}
    .cat-header p{color:rgba(255,255,255,.75);font-size:13px;margin-top:4px;}
    .btn-new-post{display:inline-flex;align-items:center;gap:8px;padding:10px 20px;
        background:white;color:var(--purple-dark);border-radius:10px;font-size:13px;
        font-weight:700;text-decoration:none;transition:opacity .15s;}
    .btn-new-post:hover{opacity:.9;}

    /* BARRE RECHERCHE + TRI */
    .toolbar{display:flex;align-items:center;gap:12px;margin-bottom:20px;flex-wrap:wrap;}
    .search-wrap{flex:1;min-width:200px;position:relative;}
    .search-input{width:100%;padding:10px 14px 10px 38px;border:1.5px solid var(--border);
        border-radius:10px;font-family:var(--font-body);font-size:13.5px;color:var(--text);
        background:var(--white);outline:none;transition:border-color .15s;}
    .search-input:focus{border-color:var(--purple);box-shadow:0 0 0 3px rgba(106,90,205,.08);}
    .search-icon{position:absolute;left:12px;top:50%;transform:translateY(-50%);
        font-size:14px;pointer-events:none;}
    .search-btn{padding:10px 18px;background:var(--purple);color:white;border:none;
        border-radius:10px;font-size:13px;font-weight:600;cursor:pointer;
        font-family:var(--font-body);transition:background .15s;}
    .search-btn:hover{background:var(--purple-dark);}

    .tri-group{display:flex;gap:6px;flex-wrap:wrap;}
    .btn-tri{padding:8px 14px;border:1.5px solid var(--border);border-radius:9px;
        background:var(--white);color:var(--text-mid);font-size:12px;font-weight:600;
        cursor:pointer;text-decoration:none;transition:all .15s;white-space:nowrap;}
    .btn-tri:hover{border-color:var(--purple-soft);color:var(--purple);}
    .btn-tri.active{background:var(--purple-pale);border-color:var(--purple);color:var(--purple);}

    /* RÉSULTATS */
    .results-info{font-size:12px;color:var(--text-muted);margin-bottom:14px;}
    .results-info strong{color:var(--purple);}

    /* POST CARD */
    .posts-list{display:flex;flex-direction:column;gap:16px;}
    .post-card{background:var(--white);border:1px solid var(--border);
        border-radius:16px;overflow:hidden;transition:border-color .18s,box-shadow .18s;}
    .post-card:hover{border-color:var(--purple-soft);box-shadow:0 8px 28px rgba(106,90,205,.1);}

    .post-author-row{display:flex;align-items:center;justify-content:space-between;padding:16px 24px 0;}
    .post-author-left{display:flex;align-items:center;gap:10px;}
    .post-avatar{width:34px;height:34px;border-radius:50%;background:var(--purple);
        color:white;font-size:13px;font-weight:700;display:grid;place-items:center;
        font-family:var(--font-head);flex-shrink:0;}
    .post-author-name{font-size:13px;font-weight:600;color:var(--text);}
    .post-author-date{font-size:11px;color:var(--text-muted);}
    .post-actions-top{display:flex;gap:6px;}
    .btn-edit{display:inline-flex;align-items:center;gap:4px;padding:5px 11px;
        background:var(--purple-pale);color:var(--purple);border:none;border-radius:8px;
        font-size:12px;font-weight:600;cursor:pointer;text-decoration:none;transition:background .15s;}
    .btn-edit:hover{background:#ddd6f7;}
    .btn-delete{display:inline-flex;align-items:center;gap:4px;padding:5px 11px;
        background:#FEF2F2;color:#E05252;border:none;border-radius:8px;
        font-size:12px;font-weight:600;cursor:pointer;transition:background .15s;}
    .btn-delete:hover{background:#fde8e8;}

    .post-body{padding:12px 24px 0;}
    .post-title{font-family:var(--font-head);font-size:17px;font-weight:700;
        color:var(--text);margin-bottom:6px;line-height:1.3;}
    .post-excerpt{font-size:13.5px;color:var(--text-mid);line-height:1.7;}

    /* FOOTER LIKE + COMMENTAIRE */
    .post-footer{display:flex;align-items:center;gap:10px;
        padding:14px 24px;margin-top:12px;border-top:1px solid var(--purple-ghost);}
    .btn-like{display:inline-flex;align-items:center;gap:6px;padding:6px 16px;
        background:var(--purple-ghost);color:var(--text-muted);border:1px solid var(--border);
        border-radius:20px;font-size:13px;font-weight:600;cursor:pointer;
        transition:all .2s;font-family:var(--font-body);}
    .btn-like:hover{background:var(--purple-pale);color:var(--purple);border-color:var(--purple-soft);}
    .btn-like.liked{background:#FEE2E2;color:#E05252;border-color:#fca5a5;}
    .btn-comment-toggle{display:inline-flex;align-items:center;gap:6px;padding:6px 16px;
        background:var(--purple-ghost);color:var(--text-muted);border:1px solid var(--border);
        border-radius:20px;font-size:13px;font-weight:600;cursor:pointer;
        transition:all .15s;font-family:var(--font-body);}
    .btn-comment-toggle:hover,.btn-comment-toggle.open{background:var(--purple-pale);
        color:var(--purple);border-color:var(--purple-soft);}

    /* COMMENTAIRES REDDIT */
    .comments-section{display:none;padding:0 24px 20px;border-top:1px solid var(--purple-ghost);}
    .comments-section.open{display:block;}
    .add-comment-form{display:flex;gap:10px;align-items:flex-start;padding:16px 0 12px;}
    .add-comment-avatar{width:32px;height:32px;border-radius:50%;background:var(--purple-soft);
        color:white;font-size:12px;font-weight:700;display:grid;place-items:center;
        font-family:var(--font-head);flex-shrink:0;margin-top:2px;}
    .add-comment-right{flex:1;display:flex;flex-direction:column;gap:8px;}
    .add-comment-input{width:100%;padding:10px 14px;border:1.5px solid var(--border);
        border-radius:10px;font-family:var(--font-body);font-size:13.5px;color:var(--text);
        background:var(--purple-ghost);outline:none;resize:none;min-height:60px;
        transition:border-color .15s,background .15s;}
    .add-comment-input:focus{border-color:var(--purple);background:var(--white);}
    .add-comment-input.error{border-color:#E05252;}
    .add-comment-actions{display:flex;justify-content:flex-end;gap:8px;}
    .btn-send-comment{padding:6px 16px;background:var(--purple);color:white;border:none;
        border-radius:8px;font-size:12px;font-weight:600;cursor:pointer;font-family:var(--font-body);}
    .comments-divider{height:1px;background:var(--purple-ghost);margin:4px 0 12px;}
    .comment-row{display:flex;gap:10px;padding:10px 0;border-bottom:1px solid var(--purple-ghost);}
    .comment-row:last-child{border-bottom:none;}
    .comment-thread-line{width:2px;background:var(--border);border-radius:2px;flex-shrink:0;margin:4px 0;}
    .comment-main{flex:1;}
    .comment-header{display:flex;align-items:center;gap:8px;margin-bottom:5px;}
    .comment-avatar{width:26px;height:26px;border-radius:50%;background:var(--purple-soft);
        color:white;font-size:10px;font-weight:700;display:grid;place-items:center;font-family:var(--font-head);}
    .comment-author{font-size:12px;font-weight:700;color:var(--text);}
    .comment-date{font-size:11px;color:var(--text-muted);}
    .comment-body{font-size:13.5px;color:var(--text-mid);line-height:1.65;padding-left:2px;margin-bottom:6px;}
    .comment-actions{display:flex;align-items:center;gap:8px;}
    .btn-comment-edit{display:inline-flex;align-items:center;gap:3px;padding:3px 9px;
        background:var(--purple-pale);color:var(--purple);border:none;border-radius:6px;
        font-size:11px;font-weight:600;cursor:pointer;text-decoration:none;}
    .btn-comment-delete{display:inline-flex;align-items:center;gap:3px;padding:3px 9px;
        background:#FEF2F2;color:#E05252;border:none;border-radius:6px;
        font-size:11px;font-weight:600;cursor:pointer;}
    .no-comments{font-size:13px;color:var(--text-muted);text-align:center;padding:20px 0;font-style:italic;}

    /* PAGINATION */
    .pagination{display:flex;align-items:center;justify-content:center;gap:8px;margin-top:32px;}
    .pag-btn{display:inline-flex;align-items:center;padding:8px 16px;border:1.5px solid var(--border);
        border-radius:9px;background:var(--white);color:var(--text-mid);font-size:13px;
        font-weight:500;text-decoration:none;transition:all .15s;}
    .pag-btn:hover{border-color:var(--purple-soft);color:var(--purple);}
    .pag-btn.active{background:var(--purple);border-color:var(--purple);color:white;font-weight:700;}
    .pag-btn.disabled{opacity:.4;pointer-events:none;}
    .pag-info{font-size:12px;color:var(--text-muted);padding:0 8px;}

    .empty-state{text-align:center;padding:60px 20px;color:var(--text-muted);}

    @keyframes fadeUp{from{opacity:0;transform:translateY(16px);}to{opacity:1;transform:translateY(0);}}
    .fade{animation:fadeUp .4s ease both;}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 146
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

        // line 147
        yield from $this->load("_planning_topbar.html.twig", 147)->unwrap()->yield($context);
        // line 148
        yield "
<main class=\"page\">

    <div class=\"breadcrumb fade\">
        <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\">💬 Forum</a>
        <span>›</span>
        <span>";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 154, $this->source); })()), "nomCategorie", [], "any", false, false, false, 154), "html", null, true);
        yield "</span>
    </div>

    <div class=\"cat-header fade\">
        <div>
            <h1>";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 159, $this->source); })()), "nomCategorie", [], "any", false, false, false, 159), "html", null, true);
        yield "</h1>
            ";
        // line 160
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 160, $this->source); })()), "description", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 160, $this->source); })()), "description", [], "any", false, false, false, 160), "html", null, true);
            yield "</p>";
        }
        // line 161
        yield "        </div>
        <a href=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_post_new", ["idCat" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 162, $this->source); })()), "idCategorie", [], "any", false, false, false, 162)]), "html", null, true);
        yield "\"
           class=\"btn-new-post\">✏️ Nouveau post</a>
    </div>

    ";
        // line 167
        yield "    <form method=\"GET\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 167, $this->source); })()), "idCategorie", [], "any", false, false, false, 167)]), "html", null, true);
        yield "\">
        <div class=\"toolbar fade\">
            <div class=\"search-wrap\">
                <span class=\"search-icon\">🔍</span>
                <input type=\"text\" name=\"search\" class=\"search-input\"
                       placeholder=\"Rechercher dans les posts...\"
                       value=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 173, $this->source); })()), "html", null, true);
        yield "\">
            </div>
            <button type=\"submit\" class=\"search-btn\">Rechercher</button>

            ";
        // line 178
        yield "            <div class=\"tri-group\">
                <a href=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 179, $this->source); })()), "idCategorie", [], "any", false, false, false, 179), "tri" => "date_desc", "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 179, $this->source); })())]), "html", null, true);
        yield "\"
                   class=\"btn-tri ";
        // line 180
        yield ((((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 180, $this->source); })()) == "date_desc")) ? ("active") : (""));
        yield "\">🕐 Plus récent</a>
                <a href=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 181, $this->source); })()), "idCategorie", [], "any", false, false, false, 181), "tri" => "date_asc", "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 181, $this->source); })())]), "html", null, true);
        yield "\"
                   class=\"btn-tri ";
        // line 182
        yield ((((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 182, $this->source); })()) == "date_asc")) ? ("active") : (""));
        yield "\">🕐 Plus ancien</a>
                <a href=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 183, $this->source); })()), "idCategorie", [], "any", false, false, false, 183), "tri" => "likes", "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 183, $this->source); })())]), "html", null, true);
        yield "\"
                   class=\"btn-tri ";
        // line 184
        yield ((((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 184, $this->source); })()) == "likes")) ? ("active") : (""));
        yield "\">🔥 Populaire</a>
            </div>
        </div>
    </form>

    <div class=\"results-info\">
        ";
        // line 190
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 190, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 191
            yield "            <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 191, $this->source); })()), "html", null, true);
            yield "</strong> résultat(s) pour \"<strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 191, $this->source); })()), "html", null, true);
            yield "</strong>\"
        ";
        } else {
            // line 193
            yield "            <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 193, $this->source); })()), "html", null, true);
            yield "</strong> post(s) • Page <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 193, $this->source); })()), "html", null, true);
            yield "</strong>/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 193, $this->source); })()), "html", null, true);
            yield "
        ";
        }
        // line 195
        yield "    </div>

    ";
        // line 198
        yield "    <div class=\"posts-list\">
        ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 199, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 200
            yield "        ";
            $context["postComments"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["commentairesMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 200), [], "array", true, true, false, 200) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentairesMap"]) || array_key_exists("commentairesMap", $context) ? $context["commentairesMap"] : (function () { throw new RuntimeError('Variable "commentairesMap" does not exist.', 200, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 200), [], "array", false, false, false, 200)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentairesMap"]) || array_key_exists("commentairesMap", $context) ? $context["commentairesMap"] : (function () { throw new RuntimeError('Variable "commentairesMap" does not exist.', 200, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 200), [], "array", false, false, false, 200)) : ([]));
            // line 201
            yield "        ";
            $context["liked"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["likedByMe"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 201), [], "array", true, true, false, 201) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["likedByMe"]) || array_key_exists("likedByMe", $context) ? $context["likedByMe"] : (function () { throw new RuntimeError('Variable "likedByMe" does not exist.', 201, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 201), [], "array", false, false, false, 201)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["likedByMe"]) || array_key_exists("likedByMe", $context) ? $context["likedByMe"] : (function () { throw new RuntimeError('Variable "likedByMe" does not exist.', 201, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 201), [], "array", false, false, false, 201)) : (false));
            // line 202
            yield "        ";
            $context["nbLikes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["likesMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 202), [], "array", true, true, false, 202) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["likesMap"]) || array_key_exists("likesMap", $context) ? $context["likesMap"] : (function () { throw new RuntimeError('Variable "likesMap" does not exist.', 202, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 202), [], "array", false, false, false, 202)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["likesMap"]) || array_key_exists("likesMap", $context) ? $context["likesMap"] : (function () { throw new RuntimeError('Variable "likesMap" does not exist.', 202, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 202), [], "array", false, false, false, 202)) : (0));
            // line 203
            yield "
        <div class=\"post-card fade\">

            ";
            // line 207
            yield "            <div class=\"post-author-row\">
                <div class=\"post-author-left\">
                    <div class=\"post-avatar\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "userId", [], "any", false, false, false, 209), "html", null, true);
            yield "</div>
                    <div>
                        <div class=\"post-author-name\">Utilisateur #";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "userId", [], "any", false, false, false, 211), "html", null, true);
            yield "</div>
                        <div class=\"post-author-date\">
                            ";
            // line 213
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "dateCreation", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "dateCreation", [], "any", false, false, false, 213), "d/m/Y à H:i"), "html", null, true)) : (""));
            yield "
                        </div>
                    </div>
                </div>
                <div class=\"post-actions-top\">
                    <a href=\"";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_post_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 218)]), "html", null, true);
            yield "\" class=\"btn-edit\">✏️ Modifier</a>
                    <form method=\"POST\" action=\"";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_post_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 219)]), "html", null, true);
            yield "\"
                          onsubmit=\"return confirm('Supprimer ce post ?');\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn-delete\">🗑 Supprimer</button>
                    </form>
                </div>
            </div>

            ";
            // line 227
            yield "            <div class=\"post-body\">
                <div class=\"post-title\">";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 228), "html", null, true);
            yield "</div>
                <div class=\"post-excerpt\">";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contenu", [], "any", false, false, false, 229), "html", null, true);
            yield "</div>
            </div>

            ";
            // line 233
            yield "            <div class=\"post-footer\">
                <button type=\"button\"
                    class=\"btn-like ";
            // line 235
            yield (((($tmp = (isset($context["liked"]) || array_key_exists("liked", $context) ? $context["liked"] : (function () { throw new RuntimeError('Variable "liked" does not exist.', 235, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("liked") : (""));
            yield "\"
                    data-post-id=\"";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 236), "html", null, true);
            yield "\"
                    data-liked=\"";
            // line 237
            yield (((($tmp = (isset($context["liked"]) || array_key_exists("liked", $context) ? $context["liked"] : (function () { throw new RuntimeError('Variable "liked" does not exist.', 237, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                    onclick=\"toggleLike(this)\">
                ";
            // line 239
            yield (((($tmp = (isset($context["liked"]) || array_key_exists("liked", $context) ? $context["liked"] : (function () { throw new RuntimeError('Variable "liked" does not exist.', 239, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" ❤️") : ("🤍"));
            yield " <span class=\"like-count\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbLikes"]) || array_key_exists("nbLikes", $context) ? $context["nbLikes"] : (function () { throw new RuntimeError('Variable "nbLikes" does not exist.', 239, $this->source); })()), "html", null, true);
            yield "</span>
                </button>
                <button type=\"button\"
                    class=\"btn-comment-toggle\"
                    onclick=\"toggleComments('comments-";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 243), "html", null, true);
            yield "', this)\">
                💬 ";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["postComments"]) || array_key_exists("postComments", $context) ? $context["postComments"] : (function () { throw new RuntimeError('Variable "postComments" does not exist.', 244, $this->source); })())), "html", null, true);
            yield " commentaire(s)
                </button>
            </div>

            ";
            // line 249
            yield "            <div class=\"comments-section\" id=\"comments-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 249), "html", null, true);
            yield "\">

                <form method=\"POST\"
                      action=\"";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_comment_new", ["idPost" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 252)]), "html", null, true);
            yield "\"
                      class=\"add-comment-form\"
                      onsubmit=\"return validateComment(this)\">
                    <div class=\"add-comment-avatar\">U</div>
                    <div class=\"add-comment-right\">
                        <textarea name=\"contenu\" class=\"add-comment-input\"
                                  placeholder=\"Rejoindre la conversation...\" rows=\"2\"></textarea>
                        <div class=\"add-comment-actions\">
                            <button type=\"submit\" class=\"btn-send-comment\">💬 Commenter</button>
                        </div>
                    </div>
                </form>

                <div class=\"comments-divider\"></div>

                ";
            // line 267
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["postComments"]) || array_key_exists("postComments", $context) ? $context["postComments"] : (function () { throw new RuntimeError('Variable "postComments" does not exist.', 267, $this->source); })()))) {
                // line 268
                yield "                    <div class=\"no-comments\">Aucun commentaire — sois le premier ! 👋</div>
                ";
            } else {
                // line 270
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postComments"]) || array_key_exists("postComments", $context) ? $context["postComments"] : (function () { throw new RuntimeError('Variable "postComments" does not exist.', 270, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 271
                    yield "                    <div class=\"comment-row\">
                        <div class=\"comment-thread-line\"></div>
                        <div class=\"comment-main\">
                            <div class=\"comment-header\">
                                <div class=\"comment-avatar\">U</div>
                                <span class=\"comment-author\">Utilisateur #";
                    // line 276
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "userId", [], "any", false, false, false, 276), "html", null, true);
                    yield "</span>
                                <span class=\"comment-date\">
                                    • ";
                    // line 278
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCommentaire", [], "any", false, false, false, 278)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCommentaire", [], "any", false, false, false, 278), "d/m/Y à H:i"), "html", null, true)) : (""));
                    yield "
                                </span>
                            </div>
                            <div class=\"comment-body\">";
                    // line 281
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 281), "html", null, true);
                    yield "</div>
                            <div class=\"comment-actions\">
                                <a href=\"";
                    // line 283
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "idCommentaire", [], "any", false, false, false, 283)]), "html", null, true);
                    yield "\"
                                   class=\"btn-comment-edit\">✏️ Modifier</a>
                                <form method=\"POST\"
                                      action=\"";
                    // line 286
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "idCommentaire", [], "any", false, false, false, 286)]), "html", null, true);
                    yield "\"
                                      onsubmit=\"return confirm('Supprimer ?');\" style=\"display:inline;\">
                                    <button type=\"submit\" class=\"btn-comment-delete\">🗑</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 294
                yield "                ";
            }
            // line 295
            yield "            </div>

        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 298
        if (!$context['_iterated']) {
            // line 299
            yield "        <div class=\"empty-state fade\">
            <div style=\"font-size:48px;\">";
            // line 300
            yield (((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 300, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("🔍") : ("💬"));
            yield "</div>
            <p>";
            // line 301
            yield (((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 301, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("Aucun post trouvé pour \"" . (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 301, $this->source); })())) . "\""), "html", null, true)) : ("Aucun post dans cette catégorie."));
            yield "</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        yield "    </div>

    ";
        // line 307
        yield "    ";
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 307, $this->source); })()) > 1)) {
            // line 308
            yield "    <div class=\"pagination\">
        ";
            // line 309
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 309, $this->source); })()) > 1)) {
                // line 310
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 310, $this->source); })()), "idCategorie", [], "any", false, false, false, 310), "page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 310, $this->source); })()) - 1), "tri" => (isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 310, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 310, $this->source); })())]), "html", null, true);
                yield "\"
               class=\"pag-btn\">← Précédent</a>
        ";
            } else {
                // line 313
                yield "            <span class=\"pag-btn disabled\">← Précédent</span>
        ";
            }
            // line 315
            yield "
        ";
            // line 316
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 316, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 317
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 317, $this->source); })()), "idCategorie", [], "any", false, false, false, 317), "page" => $context["p"], "tri" => (isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 317, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 317, $this->source); })())]), "html", null, true);
                yield "\"
               class=\"pag-btn ";
                // line 318
                yield ((($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 318, $this->source); })()))) ? ("active") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 320
            yield "
        ";
            // line 321
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 321, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 321, $this->source); })()))) {
                // line 322
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 322, $this->source); })()), "idCategorie", [], "any", false, false, false, 322), "page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 322, $this->source); })()) + 1), "tri" => (isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 322, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 322, $this->source); })())]), "html", null, true);
                yield "\"
               class=\"pag-btn\">Suivant →</a>
        ";
            } else {
                // line 325
                yield "            <span class=\"pag-btn disabled\">Suivant →</span>
        ";
            }
            // line 327
            yield "    </div>
    ";
        }
        // line 329
        yield "
</main>

<script>
// ── LIKE AJAX ──────────────────────────────────────
async function toggleLike(btn) {
    const postId = btn.dataset.postId;
    try {
        const res = await fetch(`/forum/post/\${postId}/like`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: '_token='
        });
        const data = await res.json();
        if (data.liked) {
            btn.classList.add('liked');
            btn.innerHTML = '❤️ <span class=\"like-count\">' + data.count + '</span>';
        } else {
            btn.classList.remove('liked');
            btn.innerHTML = '🤍 <span class=\"like-count\">' + data.count + '</span>';
        }
        btn.dataset.liked = data.liked ? '1' : '0';
    } catch(e) { console.error('Like error', e); }
}

// ── TOGGLE COMMENTAIRES ────────────────────────────
function toggleComments(id, btn) {
    const section = document.getElementById(id);
    const isOpen  = section.classList.toggle('open');
    btn.classList.toggle('open', isOpen);

}

// ── VALIDATION COMMENTAIRE ─────────────────────────
function validateComment(form) {
    const ta = form.querySelector('textarea');
    if (ta.value.trim().length < 3) {
        ta.classList.add('error');
        ta.focus();
        return false;
    }
    ta.classList.remove('error');
    return true;
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
        return "forum/posts.html.twig";
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
        return array (  659 => 329,  655 => 327,  651 => 325,  644 => 322,  642 => 321,  639 => 320,  629 => 318,  624 => 317,  620 => 316,  617 => 315,  613 => 313,  606 => 310,  604 => 309,  601 => 308,  598 => 307,  594 => 304,  585 => 301,  581 => 300,  578 => 299,  576 => 298,  569 => 295,  566 => 294,  552 => 286,  546 => 283,  541 => 281,  535 => 278,  530 => 276,  523 => 271,  518 => 270,  514 => 268,  512 => 267,  494 => 252,  487 => 249,  480 => 244,  476 => 243,  467 => 239,  462 => 237,  458 => 236,  454 => 235,  450 => 233,  444 => 229,  440 => 228,  437 => 227,  427 => 219,  423 => 218,  415 => 213,  410 => 211,  405 => 209,  401 => 207,  396 => 203,  393 => 202,  390 => 201,  387 => 200,  382 => 199,  379 => 198,  375 => 195,  365 => 193,  357 => 191,  355 => 190,  346 => 184,  342 => 183,  338 => 182,  334 => 181,  330 => 180,  326 => 179,  323 => 178,  316 => 173,  306 => 167,  299 => 162,  296 => 161,  290 => 160,  286 => 159,  278 => 154,  273 => 152,  267 => 148,  265 => 147,  252 => 146,  102 => 5,  89 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ categorie.nomCategorie }} — Forum Harmony{% endblock %}

{% block stylesheets %}
<style>
    .page{max-width:860px;margin:0 auto;padding:48px 40px 80px;}

    .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;
        color:var(--text-muted);margin-bottom:24px;}
    .breadcrumb a{color:var(--purple);text-decoration:none;font-weight:500;}

    /* CAT HEADER */
    .cat-header{background:linear-gradient(135deg,var(--purple) 0%,var(--purple-dark) 100%);
        border-radius:18px;padding:28px 36px;margin-bottom:22px;
        display:flex;align-items:center;justify-content:space-between;}
    .cat-header h1{font-family:var(--font-head);font-size:24px;font-weight:800;color:white;}
    .cat-header p{color:rgba(255,255,255,.75);font-size:13px;margin-top:4px;}
    .btn-new-post{display:inline-flex;align-items:center;gap:8px;padding:10px 20px;
        background:white;color:var(--purple-dark);border-radius:10px;font-size:13px;
        font-weight:700;text-decoration:none;transition:opacity .15s;}
    .btn-new-post:hover{opacity:.9;}

    /* BARRE RECHERCHE + TRI */
    .toolbar{display:flex;align-items:center;gap:12px;margin-bottom:20px;flex-wrap:wrap;}
    .search-wrap{flex:1;min-width:200px;position:relative;}
    .search-input{width:100%;padding:10px 14px 10px 38px;border:1.5px solid var(--border);
        border-radius:10px;font-family:var(--font-body);font-size:13.5px;color:var(--text);
        background:var(--white);outline:none;transition:border-color .15s;}
    .search-input:focus{border-color:var(--purple);box-shadow:0 0 0 3px rgba(106,90,205,.08);}
    .search-icon{position:absolute;left:12px;top:50%;transform:translateY(-50%);
        font-size:14px;pointer-events:none;}
    .search-btn{padding:10px 18px;background:var(--purple);color:white;border:none;
        border-radius:10px;font-size:13px;font-weight:600;cursor:pointer;
        font-family:var(--font-body);transition:background .15s;}
    .search-btn:hover{background:var(--purple-dark);}

    .tri-group{display:flex;gap:6px;flex-wrap:wrap;}
    .btn-tri{padding:8px 14px;border:1.5px solid var(--border);border-radius:9px;
        background:var(--white);color:var(--text-mid);font-size:12px;font-weight:600;
        cursor:pointer;text-decoration:none;transition:all .15s;white-space:nowrap;}
    .btn-tri:hover{border-color:var(--purple-soft);color:var(--purple);}
    .btn-tri.active{background:var(--purple-pale);border-color:var(--purple);color:var(--purple);}

    /* RÉSULTATS */
    .results-info{font-size:12px;color:var(--text-muted);margin-bottom:14px;}
    .results-info strong{color:var(--purple);}

    /* POST CARD */
    .posts-list{display:flex;flex-direction:column;gap:16px;}
    .post-card{background:var(--white);border:1px solid var(--border);
        border-radius:16px;overflow:hidden;transition:border-color .18s,box-shadow .18s;}
    .post-card:hover{border-color:var(--purple-soft);box-shadow:0 8px 28px rgba(106,90,205,.1);}

    .post-author-row{display:flex;align-items:center;justify-content:space-between;padding:16px 24px 0;}
    .post-author-left{display:flex;align-items:center;gap:10px;}
    .post-avatar{width:34px;height:34px;border-radius:50%;background:var(--purple);
        color:white;font-size:13px;font-weight:700;display:grid;place-items:center;
        font-family:var(--font-head);flex-shrink:0;}
    .post-author-name{font-size:13px;font-weight:600;color:var(--text);}
    .post-author-date{font-size:11px;color:var(--text-muted);}
    .post-actions-top{display:flex;gap:6px;}
    .btn-edit{display:inline-flex;align-items:center;gap:4px;padding:5px 11px;
        background:var(--purple-pale);color:var(--purple);border:none;border-radius:8px;
        font-size:12px;font-weight:600;cursor:pointer;text-decoration:none;transition:background .15s;}
    .btn-edit:hover{background:#ddd6f7;}
    .btn-delete{display:inline-flex;align-items:center;gap:4px;padding:5px 11px;
        background:#FEF2F2;color:#E05252;border:none;border-radius:8px;
        font-size:12px;font-weight:600;cursor:pointer;transition:background .15s;}
    .btn-delete:hover{background:#fde8e8;}

    .post-body{padding:12px 24px 0;}
    .post-title{font-family:var(--font-head);font-size:17px;font-weight:700;
        color:var(--text);margin-bottom:6px;line-height:1.3;}
    .post-excerpt{font-size:13.5px;color:var(--text-mid);line-height:1.7;}

    /* FOOTER LIKE + COMMENTAIRE */
    .post-footer{display:flex;align-items:center;gap:10px;
        padding:14px 24px;margin-top:12px;border-top:1px solid var(--purple-ghost);}
    .btn-like{display:inline-flex;align-items:center;gap:6px;padding:6px 16px;
        background:var(--purple-ghost);color:var(--text-muted);border:1px solid var(--border);
        border-radius:20px;font-size:13px;font-weight:600;cursor:pointer;
        transition:all .2s;font-family:var(--font-body);}
    .btn-like:hover{background:var(--purple-pale);color:var(--purple);border-color:var(--purple-soft);}
    .btn-like.liked{background:#FEE2E2;color:#E05252;border-color:#fca5a5;}
    .btn-comment-toggle{display:inline-flex;align-items:center;gap:6px;padding:6px 16px;
        background:var(--purple-ghost);color:var(--text-muted);border:1px solid var(--border);
        border-radius:20px;font-size:13px;font-weight:600;cursor:pointer;
        transition:all .15s;font-family:var(--font-body);}
    .btn-comment-toggle:hover,.btn-comment-toggle.open{background:var(--purple-pale);
        color:var(--purple);border-color:var(--purple-soft);}

    /* COMMENTAIRES REDDIT */
    .comments-section{display:none;padding:0 24px 20px;border-top:1px solid var(--purple-ghost);}
    .comments-section.open{display:block;}
    .add-comment-form{display:flex;gap:10px;align-items:flex-start;padding:16px 0 12px;}
    .add-comment-avatar{width:32px;height:32px;border-radius:50%;background:var(--purple-soft);
        color:white;font-size:12px;font-weight:700;display:grid;place-items:center;
        font-family:var(--font-head);flex-shrink:0;margin-top:2px;}
    .add-comment-right{flex:1;display:flex;flex-direction:column;gap:8px;}
    .add-comment-input{width:100%;padding:10px 14px;border:1.5px solid var(--border);
        border-radius:10px;font-family:var(--font-body);font-size:13.5px;color:var(--text);
        background:var(--purple-ghost);outline:none;resize:none;min-height:60px;
        transition:border-color .15s,background .15s;}
    .add-comment-input:focus{border-color:var(--purple);background:var(--white);}
    .add-comment-input.error{border-color:#E05252;}
    .add-comment-actions{display:flex;justify-content:flex-end;gap:8px;}
    .btn-send-comment{padding:6px 16px;background:var(--purple);color:white;border:none;
        border-radius:8px;font-size:12px;font-weight:600;cursor:pointer;font-family:var(--font-body);}
    .comments-divider{height:1px;background:var(--purple-ghost);margin:4px 0 12px;}
    .comment-row{display:flex;gap:10px;padding:10px 0;border-bottom:1px solid var(--purple-ghost);}
    .comment-row:last-child{border-bottom:none;}
    .comment-thread-line{width:2px;background:var(--border);border-radius:2px;flex-shrink:0;margin:4px 0;}
    .comment-main{flex:1;}
    .comment-header{display:flex;align-items:center;gap:8px;margin-bottom:5px;}
    .comment-avatar{width:26px;height:26px;border-radius:50%;background:var(--purple-soft);
        color:white;font-size:10px;font-weight:700;display:grid;place-items:center;font-family:var(--font-head);}
    .comment-author{font-size:12px;font-weight:700;color:var(--text);}
    .comment-date{font-size:11px;color:var(--text-muted);}
    .comment-body{font-size:13.5px;color:var(--text-mid);line-height:1.65;padding-left:2px;margin-bottom:6px;}
    .comment-actions{display:flex;align-items:center;gap:8px;}
    .btn-comment-edit{display:inline-flex;align-items:center;gap:3px;padding:3px 9px;
        background:var(--purple-pale);color:var(--purple);border:none;border-radius:6px;
        font-size:11px;font-weight:600;cursor:pointer;text-decoration:none;}
    .btn-comment-delete{display:inline-flex;align-items:center;gap:3px;padding:3px 9px;
        background:#FEF2F2;color:#E05252;border:none;border-radius:6px;
        font-size:11px;font-weight:600;cursor:pointer;}
    .no-comments{font-size:13px;color:var(--text-muted);text-align:center;padding:20px 0;font-style:italic;}

    /* PAGINATION */
    .pagination{display:flex;align-items:center;justify-content:center;gap:8px;margin-top:32px;}
    .pag-btn{display:inline-flex;align-items:center;padding:8px 16px;border:1.5px solid var(--border);
        border-radius:9px;background:var(--white);color:var(--text-mid);font-size:13px;
        font-weight:500;text-decoration:none;transition:all .15s;}
    .pag-btn:hover{border-color:var(--purple-soft);color:var(--purple);}
    .pag-btn.active{background:var(--purple);border-color:var(--purple);color:white;font-weight:700;}
    .pag-btn.disabled{opacity:.4;pointer-events:none;}
    .pag-info{font-size:12px;color:var(--text-muted);padding:0 8px;}

    .empty-state{text-align:center;padding:60px 20px;color:var(--text-muted);}

    @keyframes fadeUp{from{opacity:0;transform:translateY(16px);}to{opacity:1;transform:translateY(0);}}
    .fade{animation:fadeUp .4s ease both;}
</style>
{% endblock %}

{% block body %}
{% include '_planning_topbar.html.twig' %}

<main class=\"page\">

    <div class=\"breadcrumb fade\">
        <a href=\"{{ path('forum') }}\">💬 Forum</a>
        <span>›</span>
        <span>{{ categorie.nomCategorie }}</span>
    </div>

    <div class=\"cat-header fade\">
        <div>
            <h1>{{ categorie.nomCategorie }}</h1>
            {% if categorie.description %}<p>{{ categorie.description }}</p>{% endif %}
        </div>
        <a href=\"{{ path('forum_post_new', {idCat: categorie.idCategorie}) }}\"
           class=\"btn-new-post\">✏️ Nouveau post</a>
    </div>

    {# ── BARRE RECHERCHE + TRI ── #}
    <form method=\"GET\" action=\"{{ path('forum_posts', {id: categorie.idCategorie}) }}\">
        <div class=\"toolbar fade\">
            <div class=\"search-wrap\">
                <span class=\"search-icon\">🔍</span>
                <input type=\"text\" name=\"search\" class=\"search-input\"
                       placeholder=\"Rechercher dans les posts...\"
                       value=\"{{ search }}\">
            </div>
            <button type=\"submit\" class=\"search-btn\">Rechercher</button>

            {# Tri — garde le search dans l'URL #}
            <div class=\"tri-group\">
                <a href=\"{{ path('forum_posts', {id: categorie.idCategorie, tri: 'date_desc', search: search}) }}\"
                   class=\"btn-tri {{ tri == 'date_desc' ? 'active' }}\">🕐 Plus récent</a>
                <a href=\"{{ path('forum_posts', {id: categorie.idCategorie, tri: 'date_asc', search: search}) }}\"
                   class=\"btn-tri {{ tri == 'date_asc' ? 'active' }}\">🕐 Plus ancien</a>
                <a href=\"{{ path('forum_posts', {id: categorie.idCategorie, tri: 'likes', search: search}) }}\"
                   class=\"btn-tri {{ tri == 'likes' ? 'active' }}\">🔥 Populaire</a>
            </div>
        </div>
    </form>

    <div class=\"results-info\">
        {% if search %}
            <strong>{{ total }}</strong> résultat(s) pour \"<strong>{{ search }}</strong>\"
        {% else %}
            <strong>{{ total }}</strong> post(s) • Page <strong>{{ page }}</strong>/{{ totalPages }}
        {% endif %}
    </div>

    {# ── LISTE POSTS ── #}
    <div class=\"posts-list\">
        {% for post in posts %}
        {% set postComments = commentairesMap[post.idPost] ?? [] %}
        {% set liked = likedByMe[post.idPost] ?? false %}
        {% set nbLikes = likesMap[post.idPost] ?? 0 %}

        <div class=\"post-card fade\">

            {# AUTEUR + CRUD #}
            <div class=\"post-author-row\">
                <div class=\"post-author-left\">
                    <div class=\"post-avatar\">{{ post.userId }}</div>
                    <div>
                        <div class=\"post-author-name\">Utilisateur #{{ post.userId }}</div>
                        <div class=\"post-author-date\">
                            {{ post.dateCreation ? post.dateCreation|date('d/m/Y à H:i') : '' }}
                        </div>
                    </div>
                </div>
                <div class=\"post-actions-top\">
                    <a href=\"{{ path('forum_post_edit', {id: post.idPost}) }}\" class=\"btn-edit\">✏️ Modifier</a>
                    <form method=\"POST\" action=\"{{ path('forum_post_delete', {id: post.idPost}) }}\"
                          onsubmit=\"return confirm('Supprimer ce post ?');\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn-delete\">🗑 Supprimer</button>
                    </form>
                </div>
            </div>

            {# TITRE + CONTENU #}
            <div class=\"post-body\">
                <div class=\"post-title\">{{ post.titre }}</div>
                <div class=\"post-excerpt\">{{ post.contenu }}</div>
            </div>

            {# FOOTER : LIKE + COMMENTAIRES #}
            <div class=\"post-footer\">
                <button type=\"button\"
                    class=\"btn-like {{ liked ? 'liked' }}\"
                    data-post-id=\"{{ post.idPost }}\"
                    data-liked=\"{{ liked ? '1' : '0' }}\"
                    onclick=\"toggleLike(this)\">
                {{ liked ? ' ❤️' : '🤍' }} <span class=\"like-count\">{{ nbLikes }}</span>
                </button>
                <button type=\"button\"
                    class=\"btn-comment-toggle\"
                    onclick=\"toggleComments('comments-{{ post.idPost }}', this)\">
                💬 {{ postComments|length }} commentaire(s)
                </button>
            </div>

            {# COMMENTAIRES STYLE REDDIT #}
            <div class=\"comments-section\" id=\"comments-{{ post.idPost }}\">

                <form method=\"POST\"
                      action=\"{{ path('forum_comment_new', {idPost: post.idPost}) }}\"
                      class=\"add-comment-form\"
                      onsubmit=\"return validateComment(this)\">
                    <div class=\"add-comment-avatar\">U</div>
                    <div class=\"add-comment-right\">
                        <textarea name=\"contenu\" class=\"add-comment-input\"
                                  placeholder=\"Rejoindre la conversation...\" rows=\"2\"></textarea>
                        <div class=\"add-comment-actions\">
                            <button type=\"submit\" class=\"btn-send-comment\">💬 Commenter</button>
                        </div>
                    </div>
                </form>

                <div class=\"comments-divider\"></div>

                {% if postComments is empty %}
                    <div class=\"no-comments\">Aucun commentaire — sois le premier ! 👋</div>
                {% else %}
                    {% for c in postComments %}
                    <div class=\"comment-row\">
                        <div class=\"comment-thread-line\"></div>
                        <div class=\"comment-main\">
                            <div class=\"comment-header\">
                                <div class=\"comment-avatar\">U</div>
                                <span class=\"comment-author\">Utilisateur #{{ c.userId }}</span>
                                <span class=\"comment-date\">
                                    • {{ c.dateCommentaire ? c.dateCommentaire|date('d/m/Y à H:i') : '' }}
                                </span>
                            </div>
                            <div class=\"comment-body\">{{ c.contenu }}</div>
                            <div class=\"comment-actions\">
                                <a href=\"{{ path('forum_comment_edit', {id: c.idCommentaire}) }}\"
                                   class=\"btn-comment-edit\">✏️ Modifier</a>
                                <form method=\"POST\"
                                      action=\"{{ path('forum_comment_delete', {id: c.idCommentaire}) }}\"
                                      onsubmit=\"return confirm('Supprimer ?');\" style=\"display:inline;\">
                                    <button type=\"submit\" class=\"btn-comment-delete\">🗑</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                {% endif %}
            </div>

        </div>
        {% else %}
        <div class=\"empty-state fade\">
            <div style=\"font-size:48px;\">{{ search ? '🔍' : '💬' }}</div>
            <p>{{ search ? 'Aucun post trouvé pour \"' ~ search ~ '\"' : 'Aucun post dans cette catégorie.' }}</p>
        </div>
        {% endfor %}
    </div>

    {# ── PAGINATION ── #}
    {% if totalPages > 1 %}
    <div class=\"pagination\">
        {% if page > 1 %}
            <a href=\"{{ path('forum_posts', {id: categorie.idCategorie, page: page-1, tri: tri, search: search}) }}\"
               class=\"pag-btn\">← Précédent</a>
        {% else %}
            <span class=\"pag-btn disabled\">← Précédent</span>
        {% endif %}

        {% for p in 1..totalPages %}
            <a href=\"{{ path('forum_posts', {id: categorie.idCategorie, page: p, tri: tri, search: search}) }}\"
               class=\"pag-btn {{ p == page ? 'active' }}\">{{ p }}</a>
        {% endfor %}

        {% if page < totalPages %}
            <a href=\"{{ path('forum_posts', {id: categorie.idCategorie, page: page+1, tri: tri, search: search}) }}\"
               class=\"pag-btn\">Suivant →</a>
        {% else %}
            <span class=\"pag-btn disabled\">Suivant →</span>
        {% endif %}
    </div>
    {% endif %}

</main>

<script>
// ── LIKE AJAX ──────────────────────────────────────
async function toggleLike(btn) {
    const postId = btn.dataset.postId;
    try {
        const res = await fetch(`/forum/post/\${postId}/like`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: '_token='
        });
        const data = await res.json();
        if (data.liked) {
            btn.classList.add('liked');
            btn.innerHTML = '❤️ <span class=\"like-count\">' + data.count + '</span>';
        } else {
            btn.classList.remove('liked');
            btn.innerHTML = '🤍 <span class=\"like-count\">' + data.count + '</span>';
        }
        btn.dataset.liked = data.liked ? '1' : '0';
    } catch(e) { console.error('Like error', e); }
}

// ── TOGGLE COMMENTAIRES ────────────────────────────
function toggleComments(id, btn) {
    const section = document.getElementById(id);
    const isOpen  = section.classList.toggle('open');
    btn.classList.toggle('open', isOpen);

}

// ── VALIDATION COMMENTAIRE ─────────────────────────
function validateComment(form) {
    const ta = form.querySelector('textarea');
    if (ta.value.trim().length < 3) {
        ta.classList.add('error');
        ta.focus();
        return false;
    }
    ta.classList.remove('error');
    return true;
}
</script>
{% endblock %}", "forum/posts.html.twig", "C:\\Users\\user\\Downloads\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\templates\\forum\\posts.html.twig");
    }
}

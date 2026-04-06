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

/* back/categories.html.twig */
class __TwigTemplate_951f05ba459c3fce6863c36cb58b1622 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/categories.html.twig"));

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

        yield "Catégories — Back Harmony";
        
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

        yield "Gestion des catégories";
        
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
        yield "<style>
.page-header {
    display:flex; align-items:center; gap:12px; margin-bottom:24px;
}
.page-header h1 { font-family:'Syne',sans-serif; font-size:22px; font-weight:800; color:#1C1733; flex:1; }
.btn-add {
    display:inline-flex; align-items:center; gap:8px;
    padding:10px 20px; background:#6A5ACD; color:white;
    border-radius:10px; font-size:13px; font-weight:600;
    text-decoration:none; transition:background .15s;
}
.btn-add:hover { background:#4B3B9E; }

.kpi-mini { display:grid; grid-template-columns:repeat(3,1fr); gap:14px; margin-bottom:24px; }
.kpi-mini-card {
    background:white; border:1px solid rgba(106,90,205,.12);
    border-radius:14px; padding:18px 20px;
    display:flex; align-items:center; gap:14px;
}
.kpi-mini-icon { width:44px; height:44px; border-radius:12px; display:grid; place-items:center; font-size:20px; flex-shrink:0; }
.kpi-mini-icon.purple { background:#EDE8FA; }
.kpi-mini-icon.green  { background:#D1FAE5; }
.kpi-mini-icon.amber  { background:#FEF3C7; }
.kpi-mini-val { font-family:'Syne',sans-serif; font-size:24px; font-weight:800; color:#1C1733; line-height:1; }
.kpi-mini-lbl { font-size:11px; color:#9590B8; margin-top:3px; }

.search-bar {
    display:flex; align-items:center; gap:8px;
    background:white; border:1.5px solid rgba(106,90,205,.15);
    border-radius:10px; padding:10px 16px; margin-bottom:20px;
    transition:border-color .15s;
}
.search-bar:focus-within { border-color:#6A5ACD; }
.search-bar input { border:none; outline:none; font-size:13.5px; color:#1C1733; width:100%; background:transparent; }
.search-bar input::placeholder { color:#9590B8; }

.data-table {
    background:white; border:1px solid rgba(106,90,205,.12);
    border-radius:16px; overflow:hidden;
}
.data-table-head {
    display:flex; align-items:center; justify-content:space-between;
    padding:16px 22px; border-bottom:1px solid rgba(106,90,205,.08);
}
.data-table-head h3 { font-family:'Syne',sans-serif; font-size:14px; font-weight:700; color:#1C1733; }
.data-table-count { font-size:12px; color:#9590B8; }

table { width:100%; border-collapse:collapse; }
th {
    font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:.07em;
    color:#9590B8; padding:10px 18px; text-align:left;
    background:#F7F5FD; border-bottom:1px solid rgba(106,90,205,.08);
}
td { padding:13px 18px; font-size:13.5px; color:#1C1733; border-bottom:1px solid rgba(106,90,205,.06); }
tr:last-child td { border-bottom:none; }
tr:hover td { background:#FAFAFE; }

.badge-cat { background:#EDE8FA; color:#6A5ACD; padding:3px 10px; border-radius:20px; font-size:11px; font-weight:700; }
.td-muted  { color:#9590B8; font-size:12px; }
.td-name   { font-weight:600; }
.td-desc   { color:#4A4570; font-size:12.5px; max-width:280px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }

.actions { display:flex; gap:6px; align-items:center; }
.btn-sm {
    display:inline-flex; align-items:center; gap:4px;
    padding:5px 12px; border-radius:8px; font-size:12px; font-weight:600;
    border:none; cursor:pointer; text-decoration:none; transition:all .15s;
    font-family:'Inter',sans-serif;
}
.btn-view   { background:#EDE8FA; color:#6A5ACD; }
.btn-view:hover { background:#ddd6f7; }
.btn-edit   { background:#F0FDF4; color:#16A34A; }
.btn-edit:hover { background:#dcfce7; }
.btn-del    { background:#FEF2F2; color:#E05252; }
.btn-del:hover { background:#fee2e2; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

        // line 85
        yield "
<div class=\"page-header\">
    <span style=\"font-size:24px\">🗂️</span>
    <h1>Catégories du Forum</h1>
    <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_categorie_new");
        yield "\" class=\"btn-add\">➕ Nouvelle catégorie</a>
</div>

<div class=\"kpi-mini\">
    <div class=\"kpi-mini-card\">
        <div class=\"kpi-mini-icon purple\">🗂️</div>
        <div><div class=\"kpi-mini-val\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 95, $this->source); })())), "html", null, true);
        yield "</div><div class=\"kpi-mini-lbl\">Total catégories</div></div>
    </div>
    <div class=\"kpi-mini-card\">
        <div class=\"kpi-mini-icon green\">📝</div>
        <div>
            <div class=\"kpi-mini-val\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["postCounts"]) || array_key_exists("postCounts", $context) ? $context["postCounts"] : (function () { throw new RuntimeError('Variable "postCounts" does not exist.', 100, $this->source); })()), function ($__carry__, $__v__) use ($context, $macros) { $context["carry"] = $__carry__; $context["v"] = $__v__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 100, $this->source); })()) + (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 100, $this->source); })())); }, 0), "html", null, true);
        yield "</div>
            <div class=\"kpi-mini-lbl\">Posts associés</div>
        </div>
    </div>
    <div class=\"kpi-mini-card\">
        <div class=\"kpi-mini-icon amber\">📅</div>
        <div>
            <div class=\"kpi-mini-val\">
                ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 108, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 108, $this->source); })()), "dateCreation", [], "any", false, false, false, 108)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 108, $this->source); })()), "dateCreation", [], "any", false, false, false, 108), "format", ["Y-m"], "method", false, false, false, 108) == $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m"))); })), "html", null, true);
        yield "
            </div>
            <div class=\"kpi-mini-lbl\">Créées ce mois</div>
        </div>
    </div>
</div>

<div class=\"search-bar\">
    <span style=\"font-size:15px;color:#9590B8\">🔍</span>
    <input type=\"text\" placeholder=\"Rechercher une catégorie…\" oninput=\"filterTable(this.value,'cat-tbody')\">
</div>

<div class=\"data-table\">
    <div class=\"data-table-head\">
        <h3>🗂️ Toutes les catégories</h3>
        <span class=\"data-table-count\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 123, $this->source); })())), "html", null, true);
        yield " catégorie(s)</span>
    </div>

    ";
        // line 126
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 126, $this->source); })()))) {
            // line 127
            yield "        <div style=\"text-align:center;padding:56px;color:#9590B8\">
            <div style=\"font-size:48px;margin-bottom:12px\">🗂️</div>
            <p style=\"font-size:14px;margin-bottom:16px\">Aucune catégorie pour l'instant.</p>
            <a href=\"";
            // line 130
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_categorie_new");
            yield "\" class=\"btn-add\">➕ Créer la première</a>
        </div>
    ";
        } else {
            // line 133
            yield "    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Posts</th>
                <th>Créée le</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"cat-tbody\">
            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 145, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 146
                yield "            <tr data-search=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nomCategorie", [], "any", false, false, false, 146)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "description", [], "any", false, false, false, 146)), "html", null, true);
                yield "\">
                <td class=\"td-muted\">#";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 147), "html", null, true);
                yield "</td>
                <td><span class=\"td-name\">";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nomCategorie", [], "any", false, false, false, 148), "html", null, true);
                yield "</span></td>
                <td class=\"td-desc\">";
                // line 149
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "description", [], "any", false, false, false, 149)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "description", [], "any", false, false, false, 149), "html", null, true)) : ("—"));
                yield "</td>
                <td><span class=\"badge-cat\">";
                // line 150
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["postCounts"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 150), [], "array", true, true, false, 150) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["postCounts"]) || array_key_exists("postCounts", $context) ? $context["postCounts"] : (function () { throw new RuntimeError('Variable "postCounts" does not exist.', 150, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 150), [], "array", false, false, false, 150)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postCounts"]) || array_key_exists("postCounts", $context) ? $context["postCounts"] : (function () { throw new RuntimeError('Variable "postCounts" does not exist.', 150, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 150), [], "array", false, false, false, 150), "html", null, true)) : (0));
                yield " post(s)</span></td>
                <td class=\"td-muted\">";
                // line 151
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "dateCreation", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "dateCreation", [], "any", false, false, false, 151), "d/m/Y"), "html", null, true)) : ("—"));
                yield "</td>
                <td>
                    <div class=\"actions\">
                        <a href=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 154)]), "html", null, true);
                yield "\" class=\"btn-sm btn-view\">👁️ Posts</a>
                        <a href=\"";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 155)]), "html", null, true);
                yield "\" class=\"btn-sm btn-edit\">✏️ Modifier</a>
                        <form method=\"POST\"
                              action=\"";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_categorie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 157)]), "html", null, true);
                yield "\"
                              onsubmit=\"return confirm('Supprimer « ";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nomCategorie", [], "any", false, false, false, 158), "html", null, true);
                yield " » ?')\"
                              style=\"display:inline\">
                            <button type=\"submit\" class=\"btn-sm btn-del\">🗑 Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            yield "        </tbody>
    </table>
    ";
        }
        // line 169
        yield "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 173
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

        // line 174
        yield "<script>
function filterTable(q, tbodyId) {
    document.getElementById(tbodyId).querySelectorAll('tr').forEach(row => {
        row.style.display = (row.dataset.search||'').includes(q.toLowerCase()) ? '' : 'none';
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
        return "back/categories.html.twig";
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
        return array (  402 => 174,  389 => 173,  376 => 169,  371 => 166,  357 => 158,  353 => 157,  348 => 155,  344 => 154,  338 => 151,  334 => 150,  330 => 149,  326 => 148,  322 => 147,  315 => 146,  311 => 145,  297 => 133,  291 => 130,  286 => 127,  284 => 126,  278 => 123,  260 => 108,  249 => 100,  241 => 95,  232 => 89,  226 => 85,  213 => 84,  126 => 6,  113 => 5,  90 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %}Catégories — Back Harmony{% endblock %}
{% block page_title %}Gestion des catégories{% endblock %}

{% block stylesheets %}
<style>
.page-header {
    display:flex; align-items:center; gap:12px; margin-bottom:24px;
}
.page-header h1 { font-family:'Syne',sans-serif; font-size:22px; font-weight:800; color:#1C1733; flex:1; }
.btn-add {
    display:inline-flex; align-items:center; gap:8px;
    padding:10px 20px; background:#6A5ACD; color:white;
    border-radius:10px; font-size:13px; font-weight:600;
    text-decoration:none; transition:background .15s;
}
.btn-add:hover { background:#4B3B9E; }

.kpi-mini { display:grid; grid-template-columns:repeat(3,1fr); gap:14px; margin-bottom:24px; }
.kpi-mini-card {
    background:white; border:1px solid rgba(106,90,205,.12);
    border-radius:14px; padding:18px 20px;
    display:flex; align-items:center; gap:14px;
}
.kpi-mini-icon { width:44px; height:44px; border-radius:12px; display:grid; place-items:center; font-size:20px; flex-shrink:0; }
.kpi-mini-icon.purple { background:#EDE8FA; }
.kpi-mini-icon.green  { background:#D1FAE5; }
.kpi-mini-icon.amber  { background:#FEF3C7; }
.kpi-mini-val { font-family:'Syne',sans-serif; font-size:24px; font-weight:800; color:#1C1733; line-height:1; }
.kpi-mini-lbl { font-size:11px; color:#9590B8; margin-top:3px; }

.search-bar {
    display:flex; align-items:center; gap:8px;
    background:white; border:1.5px solid rgba(106,90,205,.15);
    border-radius:10px; padding:10px 16px; margin-bottom:20px;
    transition:border-color .15s;
}
.search-bar:focus-within { border-color:#6A5ACD; }
.search-bar input { border:none; outline:none; font-size:13.5px; color:#1C1733; width:100%; background:transparent; }
.search-bar input::placeholder { color:#9590B8; }

.data-table {
    background:white; border:1px solid rgba(106,90,205,.12);
    border-radius:16px; overflow:hidden;
}
.data-table-head {
    display:flex; align-items:center; justify-content:space-between;
    padding:16px 22px; border-bottom:1px solid rgba(106,90,205,.08);
}
.data-table-head h3 { font-family:'Syne',sans-serif; font-size:14px; font-weight:700; color:#1C1733; }
.data-table-count { font-size:12px; color:#9590B8; }

table { width:100%; border-collapse:collapse; }
th {
    font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:.07em;
    color:#9590B8; padding:10px 18px; text-align:left;
    background:#F7F5FD; border-bottom:1px solid rgba(106,90,205,.08);
}
td { padding:13px 18px; font-size:13.5px; color:#1C1733; border-bottom:1px solid rgba(106,90,205,.06); }
tr:last-child td { border-bottom:none; }
tr:hover td { background:#FAFAFE; }

.badge-cat { background:#EDE8FA; color:#6A5ACD; padding:3px 10px; border-radius:20px; font-size:11px; font-weight:700; }
.td-muted  { color:#9590B8; font-size:12px; }
.td-name   { font-weight:600; }
.td-desc   { color:#4A4570; font-size:12.5px; max-width:280px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }

.actions { display:flex; gap:6px; align-items:center; }
.btn-sm {
    display:inline-flex; align-items:center; gap:4px;
    padding:5px 12px; border-radius:8px; font-size:12px; font-weight:600;
    border:none; cursor:pointer; text-decoration:none; transition:all .15s;
    font-family:'Inter',sans-serif;
}
.btn-view   { background:#EDE8FA; color:#6A5ACD; }
.btn-view:hover { background:#ddd6f7; }
.btn-edit   { background:#F0FDF4; color:#16A34A; }
.btn-edit:hover { background:#dcfce7; }
.btn-del    { background:#FEF2F2; color:#E05252; }
.btn-del:hover { background:#fee2e2; }
</style>
{% endblock %}

{% block body %}

<div class=\"page-header\">
    <span style=\"font-size:24px\">🗂️</span>
    <h1>Catégories du Forum</h1>
    <a href=\"{{ path('forum_categorie_new') }}\" class=\"btn-add\">➕ Nouvelle catégorie</a>
</div>

<div class=\"kpi-mini\">
    <div class=\"kpi-mini-card\">
        <div class=\"kpi-mini-icon purple\">🗂️</div>
        <div><div class=\"kpi-mini-val\">{{ categories|length }}</div><div class=\"kpi-mini-lbl\">Total catégories</div></div>
    </div>
    <div class=\"kpi-mini-card\">
        <div class=\"kpi-mini-icon green\">📝</div>
        <div>
            <div class=\"kpi-mini-val\">{{ postCounts|reduce((carry, v) => carry + v, 0) }}</div>
            <div class=\"kpi-mini-lbl\">Posts associés</div>
        </div>
    </div>
    <div class=\"kpi-mini-card\">
        <div class=\"kpi-mini-icon amber\">📅</div>
        <div>
            <div class=\"kpi-mini-val\">
                {{ categories|filter(c => c.dateCreation is not null and c.dateCreation.format('Y-m') == 'now'|date('Y-m'))|length }}
            </div>
            <div class=\"kpi-mini-lbl\">Créées ce mois</div>
        </div>
    </div>
</div>

<div class=\"search-bar\">
    <span style=\"font-size:15px;color:#9590B8\">🔍</span>
    <input type=\"text\" placeholder=\"Rechercher une catégorie…\" oninput=\"filterTable(this.value,'cat-tbody')\">
</div>

<div class=\"data-table\">
    <div class=\"data-table-head\">
        <h3>🗂️ Toutes les catégories</h3>
        <span class=\"data-table-count\">{{ categories|length }} catégorie(s)</span>
    </div>

    {% if categories is empty %}
        <div style=\"text-align:center;padding:56px;color:#9590B8\">
            <div style=\"font-size:48px;margin-bottom:12px\">🗂️</div>
            <p style=\"font-size:14px;margin-bottom:16px\">Aucune catégorie pour l'instant.</p>
            <a href=\"{{ path('forum_categorie_new') }}\" class=\"btn-add\">➕ Créer la première</a>
        </div>
    {% else %}
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Posts</th>
                <th>Créée le</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"cat-tbody\">
            {% for cat in categories %}
            <tr data-search=\"{{ cat.nomCategorie|lower }} {{ cat.description|lower }}\">
                <td class=\"td-muted\">#{{ cat.idCategorie }}</td>
                <td><span class=\"td-name\">{{ cat.nomCategorie }}</span></td>
                <td class=\"td-desc\">{{ cat.description ?: '—' }}</td>
                <td><span class=\"badge-cat\">{{ postCounts[cat.idCategorie] ?? 0 }} post(s)</span></td>
                <td class=\"td-muted\">{{ cat.dateCreation ? cat.dateCreation|date('d/m/Y') : '—' }}</td>
                <td>
                    <div class=\"actions\">
                        <a href=\"{{ path('forum_posts', {id: cat.idCategorie}) }}\" class=\"btn-sm btn-view\">👁️ Posts</a>
                        <a href=\"{{ path('forum_categorie_edit', {id: cat.idCategorie}) }}\" class=\"btn-sm btn-edit\">✏️ Modifier</a>
                        <form method=\"POST\"
                              action=\"{{ path('back_categorie_delete', {id: cat.idCategorie}) }}\"
                              onsubmit=\"return confirm('Supprimer « {{ cat.nomCategorie }} » ?')\"
                              style=\"display:inline\">
                            <button type=\"submit\" class=\"btn-sm btn-del\">🗑 Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    {% endif %}
</div>

{% endblock %}

{% block javascripts %}
<script>
function filterTable(q, tbodyId) {
    document.getElementById(tbodyId).querySelectorAll('tr').forEach(row => {
        row.style.display = (row.dataset.search||'').includes(q.toLowerCase()) ? '' : 'none';
    });
}
</script>
{% endblock %}", "back/categories.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/back/categories.html.twig");
    }
}

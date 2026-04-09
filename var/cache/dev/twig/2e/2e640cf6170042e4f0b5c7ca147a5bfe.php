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

/* back/posts.html.twig */
class __TwigTemplate_464d5c880e10af28e2d4bf6b5e399712 extends Template
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
            'topbar_icon' => [$this, 'block_topbar_icon'],
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/posts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/posts.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 2);
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

        yield "Posts — Back Harmony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topbar_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar_icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar_icon"));

        yield "📝";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield "Gestion des posts";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"page-hd\">
  <span style=\"font-size:20px\">📝</span>
  <h1>Posts du Forum</h1>
</div>

<div class=\"stats-row col3\">
  <div class=\"stat-card\">
    <div class=\"stat-icon purple\">📝</div>
    <div>
      <div class=\"stat-val\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 17, $this->source); })())), "html", null, true);
        yield "</div>
      <div class=\"stat-lbl\">Total posts</div>
    </div>
  </div>
  <div class=\"stat-card\">
    <div class=\"stat-icon green\">📷</div>
    <div>
      <div class=\"stat-val\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 24, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 24, $this->source); })()), "imagePath", [], "any", false, false, false, 24)); })), "html", null, true);
        yield "</div>
      <div class=\"stat-lbl\">Avec image</div>
    </div>
  </div>
  <div class=\"stat-card\">
    <div class=\"stat-icon amber\">🗂️</div>
    <div>
      <div class=\"stat-val\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 31, $this->source); })())), "html", null, true);
        yield "</div>
      <div class=\"stat-lbl\">Catégories</div>
    </div>
  </div>
</div>

";
        // line 38
        yield "<div class=\"toolbar\">
  <div class=\"search-box\">
    <span style=\"font-size:15px;color:var(--text-muted)\">🔍</span>
    <input type=\"text\" placeholder=\"Rechercher un post…\" oninput=\"filterTable(this.value,'post-tbody')\">
  </div>
  <select id=\"filter-cat\" onchange=\"filterByCat(this.value)\"
    style=\"padding:9px 14px;border:1.5px solid var(--border);border-radius:10px;font-family:var(--font-body);font-size:13px;background:white;color:var(--text);cursor:pointer;outline:none\">
    <option value=\"\">Toutes les catégories</option>
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 47
            yield "    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 47), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nomCategorie", [], "any", false, false, false, 47), "html", null, true);
            yield "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "  </select>
</div>

<div class=\"panel\">
  <div class=\"panel-head\">
    <h3>📝 Tous les posts</h3>
    <span style=\"font-size:13px;color:var(--text-muted)\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 55, $this->source); })())), "html", null, true);
        yield " post(s)</span>
  </div>

  ";
        // line 58
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 58, $this->source); })()))) {
            // line 59
            yield "    <div style=\"text-align:center;padding:48px;color:var(--text-muted)\">
      <div style=\"font-size:40px;margin-bottom:12px\">📝</div>
      Aucun post pour l'instant.
    </div>
  ";
        } else {
            // line 64
            yield "  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Titre</th>
        <th>Catégorie</th>
        <th>Auteur (ID)</th>
        <th>Date</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id=\"post-tbody\">
      ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 78
                yield "      <tr data-search=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 78)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contenu", [], "any", false, false, false, 78)), "html", null, true);
                yield "\"
          data-cat=\"";
                // line 79
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idCategorie", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idCategorie", [], "any", false, false, false, 79), "idCategorie", [], "any", false, false, false, 79), "html", null, true)) : (""));
                yield "\">
        <td class=\"td-muted\">#";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 80), "html", null, true);
                yield "</td>
        <td>
          <span class=\"td-name\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 82), "html", null, true);
                yield "</span>
          <div class=\"td-muted\" style=\"font-size:11.5px;margin-top:2px\">
            ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contenu", [], "any", false, false, false, 84), 0, 60), "html", null, true);
                yield "…
          </div>
        </td>
        <td>
          ";
                // line 88
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idCategorie", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 89
                    yield "            <span class=\"badge cat\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idCategorie", [], "any", false, false, false, 89), "nomCategorie", [], "any", false, false, false, 89), "html", null, true);
                    yield "</span>
          ";
                } else {
                    // line 91
                    yield "            <span class=\"td-muted\">—</span>
          ";
                }
                // line 93
                yield "        </td>
        <td class=\"td-muted\">User #";
                // line 94
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["post"], "userId", [], "any", true, true, false, 94) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["post"], "userId", [], "any", false, false, false, 94)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "userId", [], "any", false, false, false, 94), "html", null, true)) : ("—"));
                yield "</td>
        <td class=\"td-muted\">";
                // line 95
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "dateCreation", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "dateCreation", [], "any", false, false, false, 95), "d/m/Y"), "html", null, true)) : ("—"));
                yield "</td>
        <td>
          ";
                // line 97
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "imagePath", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 98
                    yield "            <span class=\"badge active\">📷 Oui</span>
          ";
                } else {
                    // line 100
                    yield "            <span class=\"td-muted\">—</span>
          ";
                }
                // line 102
                yield "        </td>
        <td>
          <div class=\"td-actions\">
            <a href=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_post_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\" class=\"btn ghost sm\">👁️ Voir</a>
            <form class=\"confirm-form\"
                  method=\"POST\"
                  action=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_post_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 108)]), "html", null, true);
                yield "\"
                  onsubmit=\"return confirm('Supprimer ce post et ses commentaires ?')\">
              <button type=\"submit\" class=\"btn danger sm\">🗑</button>
            </form>
          </div>
        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "    </tbody>
  </table>
  ";
        }
        // line 119
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 122
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

        // line 123
        yield "<script>
function filterTable(q, tbodyId) {
  const tbody = document.getElementById(tbodyId);
  tbody.querySelectorAll('tr').forEach(row => {
    const text = row.dataset.search || '';
    row.style.display = text.includes(q.toLowerCase()) ? '' : 'none';
  });
}
function filterByCat(catId) {
  document.querySelectorAll('#post-tbody tr').forEach(row => {
    row.style.display = (!catId || row.dataset.cat === catId) ? '' : 'none';
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
        return "back/posts.html.twig";
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
        return array (  373 => 123,  360 => 122,  348 => 119,  343 => 116,  329 => 108,  323 => 105,  318 => 102,  314 => 100,  310 => 98,  308 => 97,  303 => 95,  299 => 94,  296 => 93,  292 => 91,  286 => 89,  284 => 88,  277 => 84,  272 => 82,  267 => 80,  263 => 79,  256 => 78,  252 => 77,  237 => 64,  230 => 59,  228 => 58,  222 => 55,  214 => 49,  203 => 47,  199 => 46,  189 => 38,  180 => 31,  170 => 24,  160 => 17,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  67 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'admin/base.html.twig' %}
{% block title %}Posts — Back Harmony{% endblock %}
{% block topbar_icon %}📝{% endblock %}
{% block page_title %}Gestion des posts{% endblock %}

{% block body %}
<div class=\"page-hd\">
  <span style=\"font-size:20px\">📝</span>
  <h1>Posts du Forum</h1>
</div>

<div class=\"stats-row col3\">
  <div class=\"stat-card\">
    <div class=\"stat-icon purple\">📝</div>
    <div>
      <div class=\"stat-val\">{{ posts|length }}</div>
      <div class=\"stat-lbl\">Total posts</div>
    </div>
  </div>
  <div class=\"stat-card\">
    <div class=\"stat-icon green\">📷</div>
    <div>
      <div class=\"stat-val\">{{ posts|filter(p => p.imagePath is not null)|length }}</div>
      <div class=\"stat-lbl\">Avec image</div>
    </div>
  </div>
  <div class=\"stat-card\">
    <div class=\"stat-icon amber\">🗂️</div>
    <div>
      <div class=\"stat-val\">{{ categories|length }}</div>
      <div class=\"stat-lbl\">Catégories</div>
    </div>
  </div>
</div>

{# Filtres catégorie #}
<div class=\"toolbar\">
  <div class=\"search-box\">
    <span style=\"font-size:15px;color:var(--text-muted)\">🔍</span>
    <input type=\"text\" placeholder=\"Rechercher un post…\" oninput=\"filterTable(this.value,'post-tbody')\">
  </div>
  <select id=\"filter-cat\" onchange=\"filterByCat(this.value)\"
    style=\"padding:9px 14px;border:1.5px solid var(--border);border-radius:10px;font-family:var(--font-body);font-size:13px;background:white;color:var(--text);cursor:pointer;outline:none\">
    <option value=\"\">Toutes les catégories</option>
    {% for cat in categories %}
    <option value=\"{{ cat.idCategorie }}\">{{ cat.nomCategorie }}</option>
    {% endfor %}
  </select>
</div>

<div class=\"panel\">
  <div class=\"panel-head\">
    <h3>📝 Tous les posts</h3>
    <span style=\"font-size:13px;color:var(--text-muted)\">{{ posts|length }} post(s)</span>
  </div>

  {% if posts is empty %}
    <div style=\"text-align:center;padding:48px;color:var(--text-muted)\">
      <div style=\"font-size:40px;margin-bottom:12px\">📝</div>
      Aucun post pour l'instant.
    </div>
  {% else %}
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Titre</th>
        <th>Catégorie</th>
        <th>Auteur (ID)</th>
        <th>Date</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id=\"post-tbody\">
      {% for post in posts %}
      <tr data-search=\"{{ post.titre|lower }} {{ post.contenu|lower }}\"
          data-cat=\"{{ post.idCategorie ? post.idCategorie.idCategorie : '' }}\">
        <td class=\"td-muted\">#{{ post.idPost }}</td>
        <td>
          <span class=\"td-name\">{{ post.titre }}</span>
          <div class=\"td-muted\" style=\"font-size:11.5px;margin-top:2px\">
            {{ post.contenu|slice(0, 60) }}…
          </div>
        </td>
        <td>
          {% if post.idCategorie %}
            <span class=\"badge cat\">{{ post.idCategorie.nomCategorie }}</span>
          {% else %}
            <span class=\"td-muted\">—</span>
          {% endif %}
        </td>
        <td class=\"td-muted\">User #{{ post.userId ?? '—' }}</td>
        <td class=\"td-muted\">{{ post.dateCreation ? post.dateCreation|date('d/m/Y') : '—' }}</td>
        <td>
          {% if post.imagePath %}
            <span class=\"badge active\">📷 Oui</span>
          {% else %}
            <span class=\"td-muted\">—</span>
          {% endif %}
        </td>
        <td>
          <div class=\"td-actions\">
            <a href=\"{{ path('forum_post_detail', {id: post.idPost}) }}\" class=\"btn ghost sm\">👁️ Voir</a>
            <form class=\"confirm-form\"
                  method=\"POST\"
                  action=\"{{ path('back_post_delete', {id: post.idPost}) }}\"
                  onsubmit=\"return confirm('Supprimer ce post et ses commentaires ?')\">
              <button type=\"submit\" class=\"btn danger sm\">🗑</button>
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
  const tbody = document.getElementById(tbodyId);
  tbody.querySelectorAll('tr').forEach(row => {
    const text = row.dataset.search || '';
    row.style.display = text.includes(q.toLowerCase()) ? '' : 'none';
  });
}
function filterByCat(catId) {
  document.querySelectorAll('#post-tbody tr').forEach(row => {
    row.style.display = (!catId || row.dataset.cat === catId) ? '' : 'none';
  });
}
</script>
{% endblock %}
", "back/posts.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/back/posts.html.twig");
    }
}

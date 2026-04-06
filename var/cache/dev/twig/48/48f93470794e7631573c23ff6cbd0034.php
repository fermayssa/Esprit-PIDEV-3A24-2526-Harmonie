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

/* back/commentaires.html.twig */
class __TwigTemplate_a89be6efa2749e6f53ee1d30a738fba5 extends Template
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
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/commentaires.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/commentaires.html.twig"));

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

        yield "Commentaires — Back Harmony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        yield "💬";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        yield "Gestion des commentaires";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"page-hd\">
  <span style=\"font-size:20px\">💬</span>
  <h1>Commentaires du Forum</h1>
</div>

<div class=\"stats-row col3\" style=\"grid-template-columns:repeat(2,1fr)\">
  <div class=\"stat-card\">
    <div class=\"stat-icon purple\">💬</div>
    <div>
      <div class=\"stat-val\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 16, $this->source); })())), "html", null, true);
        yield "</div>
      <div class=\"stat-lbl\">Total commentaires</div>
    </div>
  </div>
  <div class=\"stat-card\">
    <div class=\"stat-icon amber\">📅</div>
    <div>
      <div class=\"stat-val\">
        ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 24, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 24, $this->source); })()), "dateCommentaire", [], "any", false, false, false, 24)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 24, $this->source); })()), "dateCommentaire", [], "any", false, false, false, 24), "format", ["Y-m"], "method", false, false, false, 24) == $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m"))); })), "html", null, true);
        yield "
      </div>
      <div class=\"stat-lbl\">Ce mois-ci</div>
    </div>
  </div>
</div>

<div class=\"toolbar\">
  <div class=\"search-box\">
    <span style=\"font-size:15px;color:var(--text-muted)\">🔍</span>
    <input type=\"text\" placeholder=\"Rechercher dans les commentaires…\" oninput=\"filterTable(this.value,'com-tbody')\">
  </div>
</div>

<div class=\"panel\">
  <div class=\"panel-head\">
    <h3>💬 Tous les commentaires</h3>
    <span style=\"font-size:13px;color:var(--text-muted)\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 41, $this->source); })())), "html", null, true);
        yield " commentaire(s)</span>
  </div>

  ";
        // line 44
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 44, $this->source); })()))) {
            // line 45
            yield "    <div style=\"text-align:center;padding:48px;color:var(--text-muted)\">
      <div style=\"font-size:40px;margin-bottom:12px\">💬</div>
      Aucun commentaire pour l'instant.
    </div>
  ";
        } else {
            // line 50
            yield "  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Contenu</th>
        <th>Post associé</th>
        <th>Auteur (ID)</th>
        <th>Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id=\"com-tbody\">
      ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
                // line 63
                yield "      <tr data-search=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["com"], "contenu", [], "any", false, false, false, 63)), "html", null, true);
                yield "\">
        <td class=\"td-muted\">#";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "idCommentaire", [], "any", false, false, false, 64), "html", null, true);
                yield "</td>
        <td class=\"td-desc\">";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "contenu", [], "any", false, false, false, 65), "html", null, true);
                yield "</td>
        <td>
          ";
                // line 67
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["com"], "idPost", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 68
                    yield "            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_post_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "idPost", [], "any", false, false, false, 68), "idPost", [], "any", false, false, false, 68)]), "html", null, true);
                    yield "\"
               style=\"color:var(--purple);font-size:12.5px;font-weight:600\">
              Post #";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "idPost", [], "any", false, false, false, 70), "idPost", [], "any", false, false, false, 70), "html", null, true);
                    yield "
            </a>
          ";
                } else {
                    // line 73
                    yield "            <span class=\"td-muted\">—</span>
          ";
                }
                // line 75
                yield "        </td>
        <td class=\"td-muted\">User #";
                // line 76
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["com"], "userId", [], "any", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["com"], "userId", [], "any", false, false, false, 76)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "userId", [], "any", false, false, false, 76), "html", null, true)) : ("—"));
                yield "</td>
        <td class=\"td-muted\">";
                // line 77
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["com"], "dateCommentaire", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "dateCommentaire", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true)) : ("—"));
                yield "</td>
        <td>
          <div class=\"td-actions\">
            <form class=\"confirm-form\"
                  method=\"POST\"
                  action=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commentaire_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["com"], "idCommentaire", [], "any", false, false, false, 82)]), "html", null, true);
                yield "\"
                  onsubmit=\"return confirm('Supprimer ce commentaire ?')\">
              <button type=\"submit\" class=\"btn danger sm\">🗑 Supprimer</button>
            </form>
          </div>
        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['com'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "    </tbody>
  </table>
  ";
        }
        // line 93
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
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

        // line 97
        yield "<script>
function filterTable(q, tbodyId) {
  document.querySelectorAll('#'+tbodyId+' tr').forEach(row => {
    const text = row.dataset.search || '';
    row.style.display = text.includes(q.toLowerCase()) ? '' : 'none';
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
        return "back/commentaires.html.twig";
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
        return array (  315 => 97,  302 => 96,  290 => 93,  285 => 90,  271 => 82,  263 => 77,  259 => 76,  256 => 75,  252 => 73,  246 => 70,  240 => 68,  238 => 67,  233 => 65,  229 => 64,  224 => 63,  220 => 62,  206 => 50,  199 => 45,  197 => 44,  191 => 41,  171 => 24,  160 => 16,  149 => 7,  136 => 6,  113 => 4,  90 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %}Commentaires — Back Harmony{% endblock %}
{% block topbar_icon %}💬{% endblock %}
{% block page_title %}Gestion des commentaires{% endblock %}

{% block body %}
<div class=\"page-hd\">
  <span style=\"font-size:20px\">💬</span>
  <h1>Commentaires du Forum</h1>
</div>

<div class=\"stats-row col3\" style=\"grid-template-columns:repeat(2,1fr)\">
  <div class=\"stat-card\">
    <div class=\"stat-icon purple\">💬</div>
    <div>
      <div class=\"stat-val\">{{ commentaires|length }}</div>
      <div class=\"stat-lbl\">Total commentaires</div>
    </div>
  </div>
  <div class=\"stat-card\">
    <div class=\"stat-icon amber\">📅</div>
    <div>
      <div class=\"stat-val\">
        {{ commentaires|filter(c => c.dateCommentaire is not null and c.dateCommentaire.format('Y-m') == 'now'|date('Y-m'))|length }}
      </div>
      <div class=\"stat-lbl\">Ce mois-ci</div>
    </div>
  </div>
</div>

<div class=\"toolbar\">
  <div class=\"search-box\">
    <span style=\"font-size:15px;color:var(--text-muted)\">🔍</span>
    <input type=\"text\" placeholder=\"Rechercher dans les commentaires…\" oninput=\"filterTable(this.value,'com-tbody')\">
  </div>
</div>

<div class=\"panel\">
  <div class=\"panel-head\">
    <h3>💬 Tous les commentaires</h3>
    <span style=\"font-size:13px;color:var(--text-muted)\">{{ commentaires|length }} commentaire(s)</span>
  </div>

  {% if commentaires is empty %}
    <div style=\"text-align:center;padding:48px;color:var(--text-muted)\">
      <div style=\"font-size:40px;margin-bottom:12px\">💬</div>
      Aucun commentaire pour l'instant.
    </div>
  {% else %}
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Contenu</th>
        <th>Post associé</th>
        <th>Auteur (ID)</th>
        <th>Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id=\"com-tbody\">
      {% for com in commentaires %}
      <tr data-search=\"{{ com.contenu|lower }}\">
        <td class=\"td-muted\">#{{ com.idCommentaire }}</td>
        <td class=\"td-desc\">{{ com.contenu }}</td>
        <td>
          {% if com.idPost %}
            <a href=\"{{ path('forum_post_detail', {id: com.idPost.idPost}) }}\"
               style=\"color:var(--purple);font-size:12.5px;font-weight:600\">
              Post #{{ com.idPost.idPost }}
            </a>
          {% else %}
            <span class=\"td-muted\">—</span>
          {% endif %}
        </td>
        <td class=\"td-muted\">User #{{ com.userId ?? '—' }}</td>
        <td class=\"td-muted\">{{ com.dateCommentaire ? com.dateCommentaire|date('d/m/Y') : '—' }}</td>
        <td>
          <div class=\"td-actions\">
            <form class=\"confirm-form\"
                  method=\"POST\"
                  action=\"{{ path('back_commentaire_delete', {id: com.idCommentaire}) }}\"
                  onsubmit=\"return confirm('Supprimer ce commentaire ?')\">
              <button type=\"submit\" class=\"btn danger sm\">🗑 Supprimer</button>
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
  document.querySelectorAll('#'+tbodyId+' tr').forEach(row => {
    const text = row.dataset.search || '';
    row.style.display = text.includes(q.toLowerCase()) ? '' : 'none';
  });
}
</script>
{% endblock %}

", "back/commentaires.html.twig", "/Users/rayen/Downloads/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication-3/templates/back/commentaires.html.twig");
    }
}

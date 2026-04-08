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

/* forum/index.html.twig */
class __TwigTemplate_edc62e0aade401f317b7a6b161049cc0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

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

        yield "Forum — Harmony";
        
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
    .page { max-width: 1200px; margin: 0 auto; padding: 48px 40px 80px; }

    /* HEADER */
    .forum-header {
        background: linear-gradient(135deg, var(--purple) 0%, var(--purple-dark) 100%);
        border-radius: 22px; padding: 40px 48px; margin-bottom: 36px;
        display: flex; align-items: center; justify-content: space-between;
        position: relative; overflow: hidden;
    }
    .forum-header::after {
        content: ''; position: absolute; right: -60px; top: -60px;
        width: 260px; height: 260px; border-radius: 50%;
        background: rgba(255,255,255,.06); pointer-events: none;
    }
    .fh-left h1 { font-family: var(--font-head); font-size: 32px; font-weight: 800;
        color: white; margin-bottom: 6px; }
    .fh-left p { color: rgba(255,255,255,.75); font-size: 14px; }
    .fh-right { display: flex; align-items: center; gap: 12px; position: relative; z-index: 1; }
    .fh-badge { background: rgba(255,255,255,.15); color: white;
        border: 1px solid rgba(255,255,255,.25);
        padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 600; }
    .btn-new-cat {
        display: inline-flex; align-items: center; gap: 8px;
        padding: 10px 20px; background: white; color: var(--purple-dark);
        border-radius: 10px; font-size: 13px; font-weight: 700;
        text-decoration: none; transition: opacity .15s;
    }
    .btn-new-cat:hover { opacity: .9; }

    /* GRID */
    .cat-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 18px; }

    /* CARTE catégorie */
    .cat-card {
        background: var(--white); border: 1px solid var(--border);
        border-radius: 18px; overflow: hidden;
        display: flex; flex-direction: column;
        transition: border-color .18s, transform .18s, box-shadow .18s;
        position: relative;
    }
    .cat-card:hover { border-color: var(--purple-soft); transform: translateY(-4px);
        box-shadow: 0 12px 36px rgba(106,90,205,.13); }
    .cat-card-top-bar {
        height: 3px;
        background: linear-gradient(90deg, var(--purple), var(--purple-soft));
    }
    .cat-card-body {
        padding: 22px 20px 14px;
        flex: 1;
        display: flex; flex-direction: column; gap: 8px;
        /* lien cliquable vers les posts */
        text-decoration: none; color: inherit;
    }
    .cat-icon { width: 44px; height: 44px; background: var(--purple-pale);
        border-radius: 12px; display: grid; place-items: center; font-size: 22px; }
    .cat-name { font-family: var(--font-head); font-size: 15px; font-weight: 700; color: var(--text); }
    .cat-desc { font-size: 12px; color: var(--text-muted); line-height: 1.6; flex: 1; }
    .cat-meta { font-size: 11px; color: var(--purple); font-weight: 600;
        background: var(--purple-pale); padding: 3px 10px; border-radius: 20px;
        display: inline-block; width: fit-content; }

    /* ACTIONS CRUD en bas de la carte */
    .cat-card-actions {
        display: flex; gap: 6px;
        padding: 10px 20px 14px;
        border-top: 1px solid var(--purple-ghost);
    }
    .btn-edit { display: inline-flex; align-items: center; gap: 4px;
        padding: 5px 12px; background: var(--purple-pale); color: var(--purple);
        border: none; border-radius: 8px; font-size: 12px; font-weight: 600;
        cursor: pointer; text-decoration: none; transition: background .15s; }
    .btn-edit:hover { background: #ddd6f7; }
    .btn-delete { display: inline-flex; align-items: center; gap: 4px;
        padding: 5px 12px; background: #FEF2F2; color: #E05252;
        border: none; border-radius: 8px; font-size: 12px; font-weight: 600;
        cursor: pointer; transition: background .15s; }
    .btn-delete:hover { background: #fde8e8; }

    @keyframes fadeUp { from { opacity:0; transform:translateY(16px); } to { opacity:1; transform:translateY(0); } }
    .fade { animation: fadeUp .4s ease both; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield from $this->load("_planning_topbar.html.twig", 90)->unwrap()->yield($context);
        // line 91
        yield "
<main class=\"page\">

    <div class=\"forum-header fade\">
        <div class=\"fh-left\">
            <h1>💬 Forum et Communauté</h1>
            <p>Explore les discussions, pose tes questions et partage tes connaissances</p>
        </div>
        <div class=\"fh-right\">
            <span class=\"fh-badge\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 100, $this->source); })())), "html", null, true);
        yield " catégories</span>
            <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_categorie_new");
        yield "\" class=\"btn-new-cat\">
                ➕ Nouvelle catégorie
            </a>
        </div>
    </div>

    <div class=\"cat-grid\">
        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 108, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 109
            yield "        <div class=\"cat-card fade\">

            <div class=\"cat-card-top-bar\"></div>

            ";
            // line 114
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_posts", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 114)]), "html", null, true);
            yield "\" class=\"cat-card-body\">
                <div class=\"cat-icon\">💬</div>
                <div class=\"cat-name\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nomCategorie", [], "any", false, false, false, 116), "html", null, true);
            yield "</div>
                ";
            // line 117
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "description", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 118
                yield "                    <div class=\"cat-desc\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "description", [], "any", false, false, false, 118), "html", null, true);
                yield "</div>
                ";
            }
            // line 120
            yield "                <span class=\"cat-meta\">Voir les posts →</span>
            </a>

            ";
            // line 124
            yield "            <div class=\"cat-card-actions\">
                <a href=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\"
                   class=\"btn-edit\">✏️ Modifier</a>
                <form method=\"POST\"
                      action=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_categorie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 128)]), "html", null, true);
            yield "\"
                      onsubmit=\"return confirm('Supprimer cette catégorie et tous ses posts ?');\"
                      style=\"display:inline;\">
                    <button type=\"submit\" class=\"btn-delete\">🗑 Supprimer</button>
                </form>
            </div>

        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 136
        if (!$context['_iterated']) {
            // line 137
            yield "            <p style=\"color:var(--text-muted); grid-column:1/-1; text-align:center; padding:40px;\">
                Aucune catégorie pour l'instant.
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
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
        return "forum/index.html.twig";
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
        return array (  301 => 141,  292 => 137,  290 => 136,  277 => 128,  271 => 125,  268 => 124,  263 => 120,  257 => 118,  255 => 117,  251 => 116,  245 => 114,  239 => 109,  234 => 108,  224 => 101,  220 => 100,  209 => 91,  207 => 90,  194 => 89,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Forum — Harmony{% endblock %}

{% block stylesheets %}
<style>
    .page { max-width: 1200px; margin: 0 auto; padding: 48px 40px 80px; }

    /* HEADER */
    .forum-header {
        background: linear-gradient(135deg, var(--purple) 0%, var(--purple-dark) 100%);
        border-radius: 22px; padding: 40px 48px; margin-bottom: 36px;
        display: flex; align-items: center; justify-content: space-between;
        position: relative; overflow: hidden;
    }
    .forum-header::after {
        content: ''; position: absolute; right: -60px; top: -60px;
        width: 260px; height: 260px; border-radius: 50%;
        background: rgba(255,255,255,.06); pointer-events: none;
    }
    .fh-left h1 { font-family: var(--font-head); font-size: 32px; font-weight: 800;
        color: white; margin-bottom: 6px; }
    .fh-left p { color: rgba(255,255,255,.75); font-size: 14px; }
    .fh-right { display: flex; align-items: center; gap: 12px; position: relative; z-index: 1; }
    .fh-badge { background: rgba(255,255,255,.15); color: white;
        border: 1px solid rgba(255,255,255,.25);
        padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 600; }
    .btn-new-cat {
        display: inline-flex; align-items: center; gap: 8px;
        padding: 10px 20px; background: white; color: var(--purple-dark);
        border-radius: 10px; font-size: 13px; font-weight: 700;
        text-decoration: none; transition: opacity .15s;
    }
    .btn-new-cat:hover { opacity: .9; }

    /* GRID */
    .cat-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 18px; }

    /* CARTE catégorie */
    .cat-card {
        background: var(--white); border: 1px solid var(--border);
        border-radius: 18px; overflow: hidden;
        display: flex; flex-direction: column;
        transition: border-color .18s, transform .18s, box-shadow .18s;
        position: relative;
    }
    .cat-card:hover { border-color: var(--purple-soft); transform: translateY(-4px);
        box-shadow: 0 12px 36px rgba(106,90,205,.13); }
    .cat-card-top-bar {
        height: 3px;
        background: linear-gradient(90deg, var(--purple), var(--purple-soft));
    }
    .cat-card-body {
        padding: 22px 20px 14px;
        flex: 1;
        display: flex; flex-direction: column; gap: 8px;
        /* lien cliquable vers les posts */
        text-decoration: none; color: inherit;
    }
    .cat-icon { width: 44px; height: 44px; background: var(--purple-pale);
        border-radius: 12px; display: grid; place-items: center; font-size: 22px; }
    .cat-name { font-family: var(--font-head); font-size: 15px; font-weight: 700; color: var(--text); }
    .cat-desc { font-size: 12px; color: var(--text-muted); line-height: 1.6; flex: 1; }
    .cat-meta { font-size: 11px; color: var(--purple); font-weight: 600;
        background: var(--purple-pale); padding: 3px 10px; border-radius: 20px;
        display: inline-block; width: fit-content; }

    /* ACTIONS CRUD en bas de la carte */
    .cat-card-actions {
        display: flex; gap: 6px;
        padding: 10px 20px 14px;
        border-top: 1px solid var(--purple-ghost);
    }
    .btn-edit { display: inline-flex; align-items: center; gap: 4px;
        padding: 5px 12px; background: var(--purple-pale); color: var(--purple);
        border: none; border-radius: 8px; font-size: 12px; font-weight: 600;
        cursor: pointer; text-decoration: none; transition: background .15s; }
    .btn-edit:hover { background: #ddd6f7; }
    .btn-delete { display: inline-flex; align-items: center; gap: 4px;
        padding: 5px 12px; background: #FEF2F2; color: #E05252;
        border: none; border-radius: 8px; font-size: 12px; font-weight: 600;
        cursor: pointer; transition: background .15s; }
    .btn-delete:hover { background: #fde8e8; }

    @keyframes fadeUp { from { opacity:0; transform:translateY(16px); } to { opacity:1; transform:translateY(0); } }
    .fade { animation: fadeUp .4s ease both; }
</style>
{% endblock %}

{% block body %}
{% include '_planning_topbar.html.twig' %}

<main class=\"page\">

    <div class=\"forum-header fade\">
        <div class=\"fh-left\">
            <h1>💬 Forum et Communauté</h1>
            <p>Explore les discussions, pose tes questions et partage tes connaissances</p>
        </div>
        <div class=\"fh-right\">
            <span class=\"fh-badge\">{{ categories|length }} catégories</span>
            <a href=\"{{ path('forum_categorie_new') }}\" class=\"btn-new-cat\">
                ➕ Nouvelle catégorie
            </a>
        </div>
    </div>

    <div class=\"cat-grid\">
        {% for cat in categories %}
        <div class=\"cat-card fade\">

            <div class=\"cat-card-top-bar\"></div>

            {# Zone cliquable → posts #}
            <a href=\"{{ path('forum_posts', {id: cat.idCategorie}) }}\" class=\"cat-card-body\">
                <div class=\"cat-icon\">💬</div>
                <div class=\"cat-name\">{{ cat.nomCategorie }}</div>
                {% if cat.description %}
                    <div class=\"cat-desc\">{{ cat.description }}</div>
                {% endif %}
                <span class=\"cat-meta\">Voir les posts →</span>
            </a>

            {# Boutons CRUD #}
            <div class=\"cat-card-actions\">
                <a href=\"{{ path('forum_categorie_edit', {id: cat.idCategorie}) }}\"
                   class=\"btn-edit\">✏️ Modifier</a>
                <form method=\"POST\"
                      action=\"{{ path('forum_categorie_delete', {id: cat.idCategorie}) }}\"
                      onsubmit=\"return confirm('Supprimer cette catégorie et tous ses posts ?');\"
                      style=\"display:inline;\">
                    <button type=\"submit\" class=\"btn-delete\">🗑 Supprimer</button>
                </form>
            </div>

        </div>
        {% else %}
            <p style=\"color:var(--text-muted); grid-column:1/-1; text-align:center; padding:40px;\">
                Aucune catégorie pour l'instant.
            </p>
        {% endfor %}
    </div>

</main>
{% endblock %}
", "forum/index.html.twig", "C:\\Users\\user\\Downloads\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\templates\\forum\\index.html.twig");
    }
}

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

/* meditation/etudiant/index.html.twig */
class __TwigTemplate_71ed7d6df41584d404c66129b9b9b482 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/etudiant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/etudiant/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Méditation - Harmony";
        
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
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
            --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
            --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
            --border:rgba(106,90,205,.12);--white:#FFFFFF;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
        }
        html,body{height:100%;font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}


        /* PAGE */
        .container{max-width:1200px;margin:0 auto;padding:48px 40px 80px;}
        .page-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;}
        .page-title{font-family:var(--font-head);font-weight:800;font-size:32px;color:var(--purple);}

        .toolbar{display:flex;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap;}
        .search-box{flex:1;min-width:200px;display:flex;align-items:center;background:var(--white);border:1px solid var(--border);border-radius:12px;padding:0 14px;height:42px;}
        .search-box input{border:none;outline:none;flex:1;font-size:14px;font-family:var(--font-body);background:transparent;color:var(--text);}
        .sort-btn{height:42px;padding:0 18px;border-radius:12px;border:1px solid var(--border);background:var(--white);color:var(--text-mid);font-size:13px;font-weight:500;cursor:pointer;transition:.15s;font-family:var(--font-body);}
        .sort-btn:hover{background:var(--purple-pale);color:var(--purple);border-color:var(--purple);}
        .sort-btn.active{background:var(--purple);color:white;border-color:var(--purple);}

        .results-count{font-size:13px;color:var(--text-muted);margin-bottom:16px;}
        .cards-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:20px;}
        .card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px;transition:box-shadow .2s;cursor:pointer;text-decoration:none;color:inherit;display:block;}
        .card:hover{box-shadow:0 8px 30px rgba(106,90,205,.1);}
        .card-theme{font-family:var(--font-head);font-size:18px;font-weight:700;color:var(--text);margin-bottom:8px;}
        .card-meta{font-size:13px;color:var(--text-muted);margin-bottom:4px;}
        .card-meta span{color:var(--text-mid);font-weight:500;}
        .badge{display:inline-flex;align-items:center;gap:4px;font-size:11px;font-weight:600;background:var(--purple-pale);color:var(--purple);padding:3px 10px;border-radius:20px;margin-top:8px;}
        .card-footer{margin-top:14px;font-size:13px;color:var(--purple);font-weight:500;}

        .loading{display:none;text-align:center;padding:40px;color:var(--text-muted);font-size:14px;}
        .empty-state{text-align:center;padding:60px 20px;color:var(--text-muted);}
        .empty-state .icon{font-size:48px;margin-bottom:12px;}

        @media(max-width:640px){.topbar{padding:0 20px;}.nav-links{display:none;}.container{padding:24px 20px 60px;}}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 51
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

        // line 52
        yield "    ";
        yield from $this->load("_planning_topbar.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">🧘 Méditation</h1>
        </div>

        <div class=\"toolbar\">
            <div class=\"search-box\">
                <span style=\"margin-right:8px;color:var(--text-muted)\">🔍</span>
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par thème ou auteur...\" value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "\">
            </div>
            <button class=\"sort-btn ";
        // line 64
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 64, $this->source); })()) == "theme")) ? ("active") : (""));
        yield "\" data-sort=\"theme\">Thème</button>
            <button class=\"sort-btn ";
        // line 65
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 65, $this->source); })()) == "auteur")) ? ("active") : (""));
        yield "\" data-sort=\"auteur\">Auteur</button>
            <button class=\"sort-btn ";
        // line 66
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 66, $this->source); })()) == "duree")) ? ("active") : (""));
        yield "\" data-sort=\"duree\">Durée</button>
        </div>

        <div class=\"results-count\" id=\"resultsCount\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 69, $this->source); })())), "html", null, true);
        yield " session(s)</div>
        <div class=\"loading\" id=\"loading\">⏳ Chargement...</div>

        <div class=\"cards-grid\" id=\"cardsGrid\">
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 73, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 74
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" class=\"card\">
                    <div class=\"card-theme\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "theme", [], "any", false, false, false, 75), "html", null, true);
            yield "</div>
                    <div class=\"card-meta\">👨‍⚕️ Auteur : <span>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "auteur", [], "any", false, false, false, 76), "html", null, true);
            yield "</span></div>
                    <div class=\"card-meta\">⏱ Durée : <span>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "duree", [], "any", false, false, false, 77), "html", null, true);
            yield " min</span></div>
                    <div class=\"badge\">💡 ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "conseils", [], "any", false, false, false, 78)), "html", null, true);
            yield " conseil(s)</div>
                    <div class=\"card-footer\">Voir les détails →</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        // line 81
        if (!$context['_iterated']) {
            // line 82
            yield "                <div class=\"empty-state\">
                    <div class=\"icon\">🧘</div>
                    <p>Aucune session de méditation disponible.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "        </div>
    </div>

    <script>
    (function(){
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));

        const searchInput = document.getElementById('searchInput');
        const grid = document.getElementById('cardsGrid');
        const count = document.getElementById('resultsCount');
        const loading = document.getElementById('loading');
        const sortBtns = document.querySelectorAll('.sort-btn');
        let currentSort = '";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 102, $this->source); })()), "html", null, true);
        yield "';
        let currentDir = '";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 103, $this->source); })()), "html", null, true);
        yield "';
        let debounce;

        function doSearch() {
            const q = searchInput.value.trim();
            loading.style.display = 'block';
            grid.style.opacity = '0.4';

            fetch(`";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meditation_search");
        yield "?q=\${encodeURIComponent(q)}&sort=\${currentSort}&dir=\${currentDir}`)
                .then(r => r.json())
                .then(data => {
                    loading.style.display = 'none';
                    grid.style.opacity = '1';
                    count.textContent = data.length + ' session(s)';

                    if (data.length === 0) {
                        grid.innerHTML = '<div class=\"empty-state\"><div class=\"icon\">🔍</div><p>Aucun résultat.</p></div>';
                        return;
                    }

                    grid.innerHTML = data.map(s => `
                        <a href=\"/meditation/\${s.id}\" class=\"card\">
                            <div class=\"card-theme\">\${esc(s.theme)}</div>
                            <div class=\"card-meta\">👨‍⚕️ Auteur : <span>\${esc(s.auteur)}</span></div>
                            <div class=\"card-meta\">⏱ Durée : <span>\${s.duree} min</span></div>
                            <div class=\"badge\">💡 \${s.conseilsCount} conseil(s)</div>
                            <div class=\"card-footer\">Voir les détails →</div>
                        </a>
                    `).join('');
                });
        }

        searchInput.addEventListener('input', () => {
            clearTimeout(debounce);
            debounce = setTimeout(doSearch, 250);
        });

        sortBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const s = btn.dataset.sort;
                if (currentSort === s) currentDir = currentDir === 'ASC' ? 'DESC' : 'ASC';
                else { currentSort = s; currentDir = 'ASC'; }
                sortBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                doSearch();
            });
        });

        function esc(str) { const d = document.createElement('div'); d.textContent = str || ''; return d.innerHTML; }
    })();
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
        return "meditation/etudiant/index.html.twig";
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
        return array (  282 => 111,  271 => 103,  267 => 102,  250 => 87,  240 => 82,  238 => 81,  230 => 78,  226 => 77,  222 => 76,  218 => 75,  213 => 74,  208 => 73,  201 => 69,  195 => 66,  191 => 65,  187 => 64,  182 => 62,  171 => 53,  168 => 52,  155 => 51,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Méditation - Harmony{% endblock %}

{% block stylesheets %}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple:#6A5ACD;--purple-dark:#4B3B9E;--purple-soft:#8B7FD4;
            --purple-pale:#EDE8FA;--purple-ghost:#F7F5FD;
            --text:#1C1733;--text-mid:#4A4570;--text-muted:#9590B8;
            --border:rgba(106,90,205,.12);--white:#FFFFFF;
            --font-head:'Syne',sans-serif;--font-body:'Inter',sans-serif;
        }
        html,body{height:100%;font-family:var(--font-body);background:var(--purple-ghost);color:var(--text);}


        /* PAGE */
        .container{max-width:1200px;margin:0 auto;padding:48px 40px 80px;}
        .page-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;}
        .page-title{font-family:var(--font-head);font-weight:800;font-size:32px;color:var(--purple);}

        .toolbar{display:flex;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap;}
        .search-box{flex:1;min-width:200px;display:flex;align-items:center;background:var(--white);border:1px solid var(--border);border-radius:12px;padding:0 14px;height:42px;}
        .search-box input{border:none;outline:none;flex:1;font-size:14px;font-family:var(--font-body);background:transparent;color:var(--text);}
        .sort-btn{height:42px;padding:0 18px;border-radius:12px;border:1px solid var(--border);background:var(--white);color:var(--text-mid);font-size:13px;font-weight:500;cursor:pointer;transition:.15s;font-family:var(--font-body);}
        .sort-btn:hover{background:var(--purple-pale);color:var(--purple);border-color:var(--purple);}
        .sort-btn.active{background:var(--purple);color:white;border-color:var(--purple);}

        .results-count{font-size:13px;color:var(--text-muted);margin-bottom:16px;}
        .cards-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:20px;}
        .card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px;transition:box-shadow .2s;cursor:pointer;text-decoration:none;color:inherit;display:block;}
        .card:hover{box-shadow:0 8px 30px rgba(106,90,205,.1);}
        .card-theme{font-family:var(--font-head);font-size:18px;font-weight:700;color:var(--text);margin-bottom:8px;}
        .card-meta{font-size:13px;color:var(--text-muted);margin-bottom:4px;}
        .card-meta span{color:var(--text-mid);font-weight:500;}
        .badge{display:inline-flex;align-items:center;gap:4px;font-size:11px;font-weight:600;background:var(--purple-pale);color:var(--purple);padding:3px 10px;border-radius:20px;margin-top:8px;}
        .card-footer{margin-top:14px;font-size:13px;color:var(--purple);font-weight:500;}

        .loading{display:none;text-align:center;padding:40px;color:var(--text-muted);font-size:14px;}
        .empty-state{text-align:center;padding:60px 20px;color:var(--text-muted);}
        .empty-state .icon{font-size:48px;margin-bottom:12px;}

        @media(max-width:640px){.topbar{padding:0 20px;}.nav-links{display:none;}.container{padding:24px 20px 60px;}}
    </style>
{% endblock %}

{% block body %}
    {% include '_planning_topbar.html.twig' %}

    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">🧘 Méditation</h1>
        </div>

        <div class=\"toolbar\">
            <div class=\"search-box\">
                <span style=\"margin-right:8px;color:var(--text-muted)\">🔍</span>
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par thème ou auteur...\" value=\"{{ q }}\">
            </div>
            <button class=\"sort-btn {{ sort == 'theme' ? 'active' }}\" data-sort=\"theme\">Thème</button>
            <button class=\"sort-btn {{ sort == 'auteur' ? 'active' }}\" data-sort=\"auteur\">Auteur</button>
            <button class=\"sort-btn {{ sort == 'duree' ? 'active' }}\" data-sort=\"duree\">Durée</button>
        </div>

        <div class=\"results-count\" id=\"resultsCount\">{{ sessions|length }} session(s)</div>
        <div class=\"loading\" id=\"loading\">⏳ Chargement...</div>

        <div class=\"cards-grid\" id=\"cardsGrid\">
            {% for s in sessions %}
                <a href=\"{{ path('meditation_show', {id: s.id}) }}\" class=\"card\">
                    <div class=\"card-theme\">{{ s.theme }}</div>
                    <div class=\"card-meta\">👨‍⚕️ Auteur : <span>{{ s.auteur }}</span></div>
                    <div class=\"card-meta\">⏱ Durée : <span>{{ s.duree }} min</span></div>
                    <div class=\"badge\">💡 {{ s.conseils|length }} conseil(s)</div>
                    <div class=\"card-footer\">Voir les détails →</div>
                </a>
            {% else %}
                <div class=\"empty-state\">
                    <div class=\"icon\">🧘</div>
                    <p>Aucune session de méditation disponible.</p>
                </div>
            {% endfor %}
        </div>
    </div>

    <script>
    (function(){
        const btn = document.getElementById('avatarBtn');
        const drop = document.getElementById('profileDropdown');
        btn.addEventListener('click', e => { e.stopPropagation(); drop.classList.toggle('open'); });
        document.addEventListener('click', () => drop.classList.remove('open'));

        const searchInput = document.getElementById('searchInput');
        const grid = document.getElementById('cardsGrid');
        const count = document.getElementById('resultsCount');
        const loading = document.getElementById('loading');
        const sortBtns = document.querySelectorAll('.sort-btn');
        let currentSort = '{{ sort }}';
        let currentDir = '{{ dir }}';
        let debounce;

        function doSearch() {
            const q = searchInput.value.trim();
            loading.style.display = 'block';
            grid.style.opacity = '0.4';

            fetch(`{{ path('meditation_search') }}?q=\${encodeURIComponent(q)}&sort=\${currentSort}&dir=\${currentDir}`)
                .then(r => r.json())
                .then(data => {
                    loading.style.display = 'none';
                    grid.style.opacity = '1';
                    count.textContent = data.length + ' session(s)';

                    if (data.length === 0) {
                        grid.innerHTML = '<div class=\"empty-state\"><div class=\"icon\">🔍</div><p>Aucun résultat.</p></div>';
                        return;
                    }

                    grid.innerHTML = data.map(s => `
                        <a href=\"/meditation/\${s.id}\" class=\"card\">
                            <div class=\"card-theme\">\${esc(s.theme)}</div>
                            <div class=\"card-meta\">👨‍⚕️ Auteur : <span>\${esc(s.auteur)}</span></div>
                            <div class=\"card-meta\">⏱ Durée : <span>\${s.duree} min</span></div>
                            <div class=\"badge\">💡 \${s.conseilsCount} conseil(s)</div>
                            <div class=\"card-footer\">Voir les détails →</div>
                        </a>
                    `).join('');
                });
        }

        searchInput.addEventListener('input', () => {
            clearTimeout(debounce);
            debounce = setTimeout(doSearch, 250);
        });

        sortBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const s = btn.dataset.sort;
                if (currentSort === s) currentDir = currentDir === 'ASC' ? 'DESC' : 'ASC';
                else { currentSort = s; currentDir = 'ASC'; }
                sortBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                doSearch();
            });
        });

        function esc(str) { const d = document.createElement('div'); d.textContent = str || ''; return d.innerHTML; }
    })();
    </script>
{% endblock %}
", "meditation/etudiant/index.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/meditation/etudiant/index.html.twig");
    }
}

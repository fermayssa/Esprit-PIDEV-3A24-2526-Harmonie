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

/* meditation/admin/index.html.twig */
class __TwigTemplate_bf0bd7fa42e1b5e112e2f4e7b6608c5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meditation/admin/index.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Sessions de méditation - Admin";
        
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

        yield "🧘 Sessions de méditation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <style>
        .toolbar { display:flex; align-items:center; gap:12px; margin-bottom:28px; flex-wrap:wrap; }
        .search-box {
            flex:1; min-width:200px; display:flex; align-items:center;
            background:var(--white); border:1px solid var(--border); border-radius:12px;
            padding:0 14px; height:42px;
        }
        .search-box input {
            border:none; outline:none; flex:1; font-size:14px; font-family:var(--font-body);
            background:transparent; color:var(--text);
        }
        .sort-btn, .action-btn {
            height:42px; padding:0 18px; border-radius:12px; border:1px solid var(--border);
            background:var(--white); color:var(--text-mid); font-size:13px; font-weight:500;
            cursor:pointer; transition:.15s; font-family:var(--font-body);
            display:inline-flex; align-items:center; gap:6px; text-decoration:none;
        }
        .sort-btn:hover, .action-btn:hover { background:var(--purple-pale); color:var(--purple); border-color:var(--purple); }
        .sort-btn.active { background:var(--purple); color:white; border-color:var(--purple); }
        .btn-primary { background:var(--purple); color:white; border-color:var(--purple); }
        .btn-primary:hover { background:var(--purple-dark); }
        .btn-pdf { background:#E05252; color:white; border-color:#E05252; }
        .btn-pdf:hover { background:#c93c3c; }

        .cards-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(320px,1fr)); gap:20px; }
        .card {
            background:var(--white); border:1px solid var(--border); border-radius:16px;
            padding:24px; transition:box-shadow .2s;
        }
        .card:hover { box-shadow:0 8px 30px rgba(106,90,205,.1); }
        .card-theme { font-family:var(--font-head); font-size:18px; font-weight:700; color:var(--text); margin-bottom:8px; }
        .card-meta { font-size:13px; color:var(--text-muted); margin-bottom:4px; }
        .card-meta span { color:var(--text-mid); font-weight:500; }
        .badge { display:inline-flex; align-items:center; gap:4px; font-size:11px; font-weight:600;
            background:var(--purple-pale); color:var(--purple); padding:3px 10px; border-radius:20px; margin-top:8px; }
        .card-actions { display:flex; gap:8px; margin-top:16px; }
        .card-actions a, .card-actions button {
            padding:6px 14px; border-radius:9px; font-size:12px; font-weight:500;
            text-decoration:none; border:1px solid var(--border); background:var(--white);
            color:var(--text-mid); cursor:pointer; transition:.15s; font-family:var(--font-body);
        }
        .card-actions a:hover { background:var(--purple-pale); color:var(--purple); }
        .card-actions .btn-del { color:#E05252; border-color:rgba(224,82,82,.2); }
        .card-actions .btn-del:hover { background:#FEF2F2; }

        .results-count { font-size:13px; color:var(--text-muted); margin-bottom:16px; }
        .empty-state { text-align:center; padding:60px 20px; color:var(--text-muted); }
        .empty-state .icon { font-size:48px; margin-bottom:12px; }
        .loading { display:none; text-align:center; padding:40px; color:var(--text-muted); font-size:14px; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
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

        // line 60
        yield "    <div class=\"toolbar\">
        <div class=\"search-box\">
            <span style=\"margin-right:8px;color:var(--text-muted)\">🔍</span>
            <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par thème ou auteur...\" value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "\">
        </div>
        <button class=\"sort-btn ";
        // line 65
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 65, $this->source); })()) == "theme")) ? ("active") : (""));
        yield "\" data-sort=\"theme\">Thème</button>
        <button class=\"sort-btn ";
        // line 66
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 66, $this->source); })()) == "auteur")) ? ("active") : (""));
        yield "\" data-sort=\"auteur\">Auteur</button>
        <button class=\"sort-btn ";
        // line 67
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 67, $this->source); })()) == "duree")) ? ("active") : (""));
        yield "\" data-sort=\"duree\">Durée</button>
        <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_new");
        yield "\" class=\"action-btn btn-primary\">+ Nouvelle session</a>
        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_pdf_list");
        yield "\" class=\"action-btn btn-pdf\" target=\"_blank\">📄 Export PDF</a>
    </div>

    <div class=\"results-count\" id=\"resultsCount\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 72, $this->source); })())), "html", null, true);
        yield " session(s) trouvée(s)</div>

    <div class=\"loading\" id=\"loading\">⏳ Chargement...</div>

    <div class=\"cards-grid\" id=\"cardsGrid\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 77, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 78
            yield "            <div class=\"card\">
                <div class=\"card-theme\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "theme", [], "any", false, false, false, 79), "html", null, true);
            yield "</div>
                <div class=\"card-meta\">👨‍⚕️ Auteur : <span>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "auteur", [], "any", false, false, false, 80), "html", null, true);
            yield "</span></div>
                <div class=\"card-meta\">⏱ Durée : <span>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "duree", [], "any", false, false, false, 81), "html", null, true);
            yield " min</span></div>
                ";
            // line 82
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "audioUrl", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "                    <div class=\"card-meta\">🎵 <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "audioUrl", [], "any", false, false, false, 83), "html", null, true);
                yield "\" target=\"_blank\" style=\"color:var(--purple)\">Lien YouTube</a></div>
                ";
            }
            // line 85
            yield "                <div class=\"badge\">💡 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "conseils", [], "any", false, false, false, 85)), "html", null, true);
            yield " conseil(s)</div>
                <div class=\"card-actions\">
                    <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\">👁 Voir</a>
                    <a href=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            yield "\">✏️ Modifier</a>
                    <form method=\"post\" action=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\" style=\"display:inline\" onsubmit=\"return confirm('Supprimer cette session ?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 90))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"btn-del\">🗑 Supprimer</button>
                    </form>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 95
        if (!$context['_iterated']) {
            // line 96
            yield "            <div class=\"empty-state\">
                <div class=\"icon\">🧘</div>
                <p>Aucune session de méditation pour le moment.</p>
                <a href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_new");
            yield "\" class=\"action-btn btn-primary\" style=\"margin-top:16px;display:inline-flex\">+ Créer une session</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 105
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

        // line 106
        yield "<script>
(function(){
    const searchInput = document.getElementById('searchInput');
    const grid = document.getElementById('cardsGrid');
    const count = document.getElementById('resultsCount');
    const loading = document.getElementById('loading');
    const sortBtns = document.querySelectorAll('.sort-btn');
    let currentSort = '";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 113, $this->source); })()), "html", null, true);
        yield "';
    let currentDir = '";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "';
    let debounce;

    function doSearch() {
        const q = searchInput.value.trim();
        loading.style.display = 'block';
        grid.style.opacity = '0.4';

        fetch(`";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_meditation_search");
        yield "?q=\${encodeURIComponent(q)}&sort=\${currentSort}&dir=\${currentDir}`)
            .then(r => r.json())
            .then(data => {
                loading.style.display = 'none';
                grid.style.opacity = '1';
                count.textContent = data.length + ' session(s) trouvée(s)';

                if (data.length === 0) {
                    grid.innerHTML = '<div class=\"empty-state\"><div class=\"icon\">🔍</div><p>Aucun résultat.</p></div>';
                    return;
                }

                grid.innerHTML = data.map(s => `
                    <div class=\"card\">
                        <div class=\"card-theme\">\${esc(s.theme)}</div>
                        <div class=\"card-meta\">👨‍⚕️ Auteur : <span>\${esc(s.auteur)}</span></div>
                        <div class=\"card-meta\">⏱ Durée : <span>\${s.duree} min</span></div>
                        \${s.audioUrl ? `<div class=\"card-meta\">🎵 <a href=\"\${esc(s.audioUrl)}\" target=\"_blank\" style=\"color:var(--purple)\">Lien YouTube</a></div>` : ''}
                        <div class=\"badge\">💡 \${s.conseilsCount} conseil(s)</div>
                        <div class=\"card-actions\">
                            <a href=\"/admin/meditation/\${s.id}\">👁 Voir</a>
                            <a href=\"/admin/meditation/\${s.id}/edit\">✏️ Modifier</a>
                        </div>
                    </div>
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
            if (currentSort === s) {
                currentDir = currentDir === 'ASC' ? 'DESC' : 'ASC';
            } else {
                currentSort = s;
                currentDir = 'ASC';
            }
            sortBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            doSearch();
        });
    });

    function esc(str) {
        const d = document.createElement('div');
        d.textContent = str || '';
        return d.innerHTML;
    }
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
        return "meditation/admin/index.html.twig";
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
        return array (  361 => 122,  350 => 114,  346 => 113,  337 => 106,  324 => 105,  312 => 102,  303 => 99,  298 => 96,  296 => 95,  286 => 90,  282 => 89,  278 => 88,  274 => 87,  268 => 85,  262 => 83,  260 => 82,  256 => 81,  252 => 80,  248 => 79,  245 => 78,  240 => 77,  232 => 72,  226 => 69,  222 => 68,  218 => 67,  214 => 66,  210 => 65,  205 => 63,  200 => 60,  187 => 59,  126 => 7,  113 => 6,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Sessions de méditation - Admin{% endblock %}
{% block page_title %}🧘 Sessions de méditation{% endblock %}

{% block stylesheets %}
    <style>
        .toolbar { display:flex; align-items:center; gap:12px; margin-bottom:28px; flex-wrap:wrap; }
        .search-box {
            flex:1; min-width:200px; display:flex; align-items:center;
            background:var(--white); border:1px solid var(--border); border-radius:12px;
            padding:0 14px; height:42px;
        }
        .search-box input {
            border:none; outline:none; flex:1; font-size:14px; font-family:var(--font-body);
            background:transparent; color:var(--text);
        }
        .sort-btn, .action-btn {
            height:42px; padding:0 18px; border-radius:12px; border:1px solid var(--border);
            background:var(--white); color:var(--text-mid); font-size:13px; font-weight:500;
            cursor:pointer; transition:.15s; font-family:var(--font-body);
            display:inline-flex; align-items:center; gap:6px; text-decoration:none;
        }
        .sort-btn:hover, .action-btn:hover { background:var(--purple-pale); color:var(--purple); border-color:var(--purple); }
        .sort-btn.active { background:var(--purple); color:white; border-color:var(--purple); }
        .btn-primary { background:var(--purple); color:white; border-color:var(--purple); }
        .btn-primary:hover { background:var(--purple-dark); }
        .btn-pdf { background:#E05252; color:white; border-color:#E05252; }
        .btn-pdf:hover { background:#c93c3c; }

        .cards-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(320px,1fr)); gap:20px; }
        .card {
            background:var(--white); border:1px solid var(--border); border-radius:16px;
            padding:24px; transition:box-shadow .2s;
        }
        .card:hover { box-shadow:0 8px 30px rgba(106,90,205,.1); }
        .card-theme { font-family:var(--font-head); font-size:18px; font-weight:700; color:var(--text); margin-bottom:8px; }
        .card-meta { font-size:13px; color:var(--text-muted); margin-bottom:4px; }
        .card-meta span { color:var(--text-mid); font-weight:500; }
        .badge { display:inline-flex; align-items:center; gap:4px; font-size:11px; font-weight:600;
            background:var(--purple-pale); color:var(--purple); padding:3px 10px; border-radius:20px; margin-top:8px; }
        .card-actions { display:flex; gap:8px; margin-top:16px; }
        .card-actions a, .card-actions button {
            padding:6px 14px; border-radius:9px; font-size:12px; font-weight:500;
            text-decoration:none; border:1px solid var(--border); background:var(--white);
            color:var(--text-mid); cursor:pointer; transition:.15s; font-family:var(--font-body);
        }
        .card-actions a:hover { background:var(--purple-pale); color:var(--purple); }
        .card-actions .btn-del { color:#E05252; border-color:rgba(224,82,82,.2); }
        .card-actions .btn-del:hover { background:#FEF2F2; }

        .results-count { font-size:13px; color:var(--text-muted); margin-bottom:16px; }
        .empty-state { text-align:center; padding:60px 20px; color:var(--text-muted); }
        .empty-state .icon { font-size:48px; margin-bottom:12px; }
        .loading { display:none; text-align:center; padding:40px; color:var(--text-muted); font-size:14px; }
    </style>
{% endblock %}

{% block body %}
    <div class=\"toolbar\">
        <div class=\"search-box\">
            <span style=\"margin-right:8px;color:var(--text-muted)\">🔍</span>
            <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par thème ou auteur...\" value=\"{{ q }}\">
        </div>
        <button class=\"sort-btn {{ sort == 'theme' ? 'active' }}\" data-sort=\"theme\">Thème</button>
        <button class=\"sort-btn {{ sort == 'auteur' ? 'active' }}\" data-sort=\"auteur\">Auteur</button>
        <button class=\"sort-btn {{ sort == 'duree' ? 'active' }}\" data-sort=\"duree\">Durée</button>
        <a href=\"{{ path('admin_meditation_new') }}\" class=\"action-btn btn-primary\">+ Nouvelle session</a>
        <a href=\"{{ path('admin_meditation_pdf_list') }}\" class=\"action-btn btn-pdf\" target=\"_blank\">📄 Export PDF</a>
    </div>

    <div class=\"results-count\" id=\"resultsCount\">{{ sessions|length }} session(s) trouvée(s)</div>

    <div class=\"loading\" id=\"loading\">⏳ Chargement...</div>

    <div class=\"cards-grid\" id=\"cardsGrid\">
        {% for s in sessions %}
            <div class=\"card\">
                <div class=\"card-theme\">{{ s.theme }}</div>
                <div class=\"card-meta\">👨‍⚕️ Auteur : <span>{{ s.auteur }}</span></div>
                <div class=\"card-meta\">⏱ Durée : <span>{{ s.duree }} min</span></div>
                {% if s.audioUrl %}
                    <div class=\"card-meta\">🎵 <a href=\"{{ s.audioUrl }}\" target=\"_blank\" style=\"color:var(--purple)\">Lien YouTube</a></div>
                {% endif %}
                <div class=\"badge\">💡 {{ s.conseils|length }} conseil(s)</div>
                <div class=\"card-actions\">
                    <a href=\"{{ path('admin_meditation_show', {id: s.id}) }}\">👁 Voir</a>
                    <a href=\"{{ path('admin_meditation_edit', {id: s.id}) }}\">✏️ Modifier</a>
                    <form method=\"post\" action=\"{{ path('admin_meditation_delete', {id: s.id}) }}\" style=\"display:inline\" onsubmit=\"return confirm('Supprimer cette session ?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ s.id) }}\">
                        <button type=\"submit\" class=\"btn-del\">🗑 Supprimer</button>
                    </form>
                </div>
            </div>
        {% else %}
            <div class=\"empty-state\">
                <div class=\"icon\">🧘</div>
                <p>Aucune session de méditation pour le moment.</p>
                <a href=\"{{ path('admin_meditation_new') }}\" class=\"action-btn btn-primary\" style=\"margin-top:16px;display:inline-flex\">+ Créer une session</a>
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block javascripts %}
<script>
(function(){
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

        fetch(`{{ path('admin_meditation_search') }}?q=\${encodeURIComponent(q)}&sort=\${currentSort}&dir=\${currentDir}`)
            .then(r => r.json())
            .then(data => {
                loading.style.display = 'none';
                grid.style.opacity = '1';
                count.textContent = data.length + ' session(s) trouvée(s)';

                if (data.length === 0) {
                    grid.innerHTML = '<div class=\"empty-state\"><div class=\"icon\">🔍</div><p>Aucun résultat.</p></div>';
                    return;
                }

                grid.innerHTML = data.map(s => `
                    <div class=\"card\">
                        <div class=\"card-theme\">\${esc(s.theme)}</div>
                        <div class=\"card-meta\">👨‍⚕️ Auteur : <span>\${esc(s.auteur)}</span></div>
                        <div class=\"card-meta\">⏱ Durée : <span>\${s.duree} min</span></div>
                        \${s.audioUrl ? `<div class=\"card-meta\">🎵 <a href=\"\${esc(s.audioUrl)}\" target=\"_blank\" style=\"color:var(--purple)\">Lien YouTube</a></div>` : ''}
                        <div class=\"badge\">💡 \${s.conseilsCount} conseil(s)</div>
                        <div class=\"card-actions\">
                            <a href=\"/admin/meditation/\${s.id}\">👁 Voir</a>
                            <a href=\"/admin/meditation/\${s.id}/edit\">✏️ Modifier</a>
                        </div>
                    </div>
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
            if (currentSort === s) {
                currentDir = currentDir === 'ASC' ? 'DESC' : 'ASC';
            } else {
                currentSort = s;
                currentDir = 'ASC';
            }
            sortBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            doSearch();
        });
    });

    function esc(str) {
        const d = document.createElement('div');
        d.textContent = str || '';
        return d.innerHTML;
    }
})();
</script>
{% endblock %}
", "meditation/admin/index.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/meditation/admin/index.html.twig");
    }
}

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

/* admin/users/index.html.twig */
class __TwigTemplate_3f2d9937c3e43a2bb5ec80e7fa3c3315 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

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

        yield "Gestion des comptes — Harmony";
        
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

        yield "👥 Gestion des comptes";
        
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
        .toolbar { display:flex;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap; }
        .search-wrap { position:relative;flex:1;min-width:240px; }
        .search-wrap .s-icon { position:absolute;left:14px;top:50%;transform:translateY(-50%);font-size:15px;pointer-events:none; }
        .search-box {
            width:100%;padding:10px 16px 10px 42px;
            border:1.5px solid var(--border);border-radius:11px;
            font-family:var(--font-body);font-size:14px;color:var(--text);
            background:var(--white);outline:none;transition:border-color .15s;
        }
        .search-box:focus { border-color:var(--purple); }

        .btn-tool {
            padding:10px 16px;border-radius:10px;font-size:12.5px;font-weight:600;
            text-decoration:none;cursor:pointer;border:none;display:flex;align-items:center;gap:6px;
            transition:.15s;white-space:nowrap;font-family:var(--font-body);
        }
        .btn-suspicion { background:var(--purple);color:#fff;box-shadow:0 3px 10px rgba(106,90,205,.3); }
        .btn-suspicion:hover { background:var(--purple-dark); }
        .btn-suspicion.active-sort { background:#4B3B9E;box-shadow:0 3px 14px rgba(106,90,205,.5); }
        .btn-suspended { background:#FEE2E2;color:#E05252; }
        .btn-suspended:hover { background:#FECACA; }

        .results-count { font-size:13px;color:var(--text-muted);margin-bottom:16px; }

        .cards-grid { display:grid;grid-template-columns:repeat(auto-fill,minmax(270px,1fr));gap:18px; }
        .user-card {
            background:var(--white);border:2.5px solid var(--border);border-radius:18px;
            overflow:hidden;transition:border-color .2s,transform .2s,box-shadow .2s;
            cursor:pointer;position:relative;
        }
        .user-card:hover { transform:translateY(-4px);box-shadow:0 12px 36px rgba(0,0,0,.1); }
        .user-card.suspended { opacity:.7; }

        .card-header { background:var(--purple-ghost);padding:20px;text-align:center;border-bottom:1px solid var(--border);position:relative; }
        .card-avatar {
            width:64px;height:64px;border-radius:50%;margin:0 auto 10px;
            background:var(--purple);display:grid;place-items:center;
            font-family:var(--font-head);font-size:24px;font-weight:800;color:#fff;
            border:3px solid var(--white);overflow:hidden;
        }
        .card-avatar img { width:64px;height:64px;border-radius:50%;object-fit:cover; }
        .card-name { font-family:var(--font-head);font-size:15px;font-weight:700;color:var(--text); }
        .card-email { font-size:12px;color:var(--text-muted);margin-top:3px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:220px;margin-inline:auto; }

        .card-body { padding:14px 16px; }
        .card-meta { display:flex;justify-content:space-between;align-items:center;margin-bottom:10px; }
        .badge { font-size:10px;font-weight:600;padding:3px 10px;border-radius:20px; }
        .badge-active { background:#D1FAE5;color:#065F46; }
        .badge-suspended { background:#FEE2E2;color:#991B1B; }

        .suspicion-bar { height:5px;border-radius:5px;background:#eee;margin-bottom:6px;overflow:hidden; }
        .suspicion-fill { height:100%;border-radius:5px;transition:width .4s; }
        .suspicion-label { font-size:11px;color:var(--text-muted); }

        .card-footer { padding:10px 16px;border-top:1px solid var(--border);display:flex;justify-content:space-between;align-items:center; }
        .card-date { font-size:11px;color:var(--text-muted); }

        .card-menu { position:relative; }
        .card-menu-btn { background:none;border:none;cursor:pointer;padding:5px 10px;font-size:20px;color:var(--text-muted);border-radius:7px;line-height:1; }
        .card-menu-btn:hover { background:var(--purple-ghost);color:var(--purple); }
        .card-dropdown {
            position:absolute;bottom:36px;right:0;width:185px;
            background:var(--white);border:1px solid var(--border);border-radius:12px;
            box-shadow:0 8px 28px rgba(0,0,0,.12);padding:6px;display:none;z-index:20;
        }
        .card-dropdown.open { display:block; }
        .card-dropdown a,.card-dropdown button {
            display:block;width:100%;text-align:left;
            padding:9px 13px;border-radius:8px;
            font-size:13px;font-weight:500;text-decoration:none;
            background:none;border:none;cursor:pointer;color:var(--text-mid);
            transition:background .12s;font-family:var(--font-body);
        }
        .card-dropdown a:hover,.card-dropdown button:hover { background:var(--purple-pale);color:var(--purple); }
        .card-dropdown .danger:hover { background:#FEE2E2;color:#E05252; }
        .card-dropdown .suspicion-btn { color:#E5A44B; }
        .card-dropdown .suspicion-btn:hover { background:#FEF3E2;color:#D97706; }

        .empty-state { text-align:center;padding:60px 20px;color:var(--text-muted);grid-column:1/-1; }
        #loadingSpinner { display:none;text-align:center;padding:20px;color:var(--text-muted); }

        /* ── Modal suspicion ── */
        .modal-overlay {
            position:fixed;inset:0;background:rgba(0,0,0,.45);
            display:flex;align-items:center;justify-content:center;
            z-index:1000;backdrop-filter:blur(4px);
            opacity:0;pointer-events:none;transition:opacity .2s;
        }
        .modal-overlay.open { opacity:1;pointer-events:all; }
        .modal-box {
            background:#fff;border-radius:22px;padding:36px;max-width:480px;width:90%;
            box-shadow:0 24px 64px rgba(0,0,0,.18);
            transform:scale(.95) translateY(10px);transition:transform .2s;
        }
        .modal-overlay.open .modal-box { transform:scale(1) translateY(0); }
        .modal-title { font-family:var(--font-head);font-size:18px;font-weight:800;color:var(--text);margin-bottom:4px; }
        .modal-sub { font-size:13px;color:var(--text-muted);margin-bottom:20px; }
        .modal-score-row { display:flex;align-items:center;gap:14px;margin-bottom:20px; }
        .modal-score-circle {
            width:70px;height:70px;border-radius:50%;
            display:grid;place-items:center;flex-shrink:0;
            font-family:var(--font-head);font-size:22px;font-weight:800;color:#fff;
        }
        .modal-bar-wrap { flex:1; }
        .modal-bar-bg { height:10px;background:#eee;border-radius:10px;overflow:hidden;margin-bottom:6px; }
        .modal-bar-fill { height:100%;border-radius:10px;transition:width .5s; }
        .modal-label { font-size:14px;font-weight:700; }

        .breakdown-list { display:flex;flex-direction:column;gap:8px; }
        .breakdown-item {
            display:flex;align-items:flex-start;gap:10px;
            padding:10px 12px;border-radius:10px;font-size:13px;
        }
        .breakdown-item.flag { background:#FEF2F2;border:1px solid #FECACA; }
        .breakdown-item.ok   { background:#F0FDF4;border:1px solid #BBF7D0; }
        .breakdown-item .bi-icon { font-size:16px;flex-shrink:0;margin-top:1px; }
        .breakdown-item .bi-text { flex:1; }
        .breakdown-item .bi-pts { font-weight:700;flex-shrink:0;margin-left:6px; }
        .breakdown-item.flag .bi-pts { color:#E05252; }
        .breakdown-item.ok .bi-pts   { color:#10B981; }

        .modal-close-btn {
            width:100%;margin-top:20px;padding:11px;
            background:var(--purple-pale);color:var(--purple);
            border:none;border-radius:11px;font-family:var(--font-body);
            font-size:14px;font-weight:600;cursor:pointer;transition:.15s;
        }
        .modal-close-btn:hover { background:#ddd8f8; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 138
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

        // line 139
        yield "    <div class=\"toolbar\">
        <div class=\"search-wrap\">
            <span class=\"s-icon\">🔍</span>
            <input type=\"text\" id=\"searchInput\" class=\"search-box\"
                   placeholder=\"Rechercher par nom, prénom ou email…\"
                   value=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 144, $this->source); })()), "html", null, true);
        yield "\" autocomplete=\"off\">
        </div>

        <button id=\"sortBtn\" class=\"btn-tool btn-suspicion ";
        // line 147
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 147, $this->source); })()) == "suspicion")) {
            yield "active-sort";
        }
        yield "\"
                onclick=\"toggleSort()\">
            ⚠ ";
        // line 149
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 149, $this->source); })()) == "suspicion")) {
            yield "Triés par suspicion";
        } else {
            yield "Trier par suspicion";
        }
        // line 150
        yield "        </button>

        <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_suspended");
        yield "\" class=\"btn-tool btn-suspended\">
            🔒 Suspendus
        </a>
    </div>

    <div class=\"results-count\" id=\"resultsCount\">
        ";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 158, $this->source); })())), "html", null, true);
        yield " compte(s) affiché(s)
    </div>

    <div id=\"loadingSpinner\">⏳ Recherche…</div>

    <div class=\"cards-grid\" id=\"usersGrid\">
        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 164, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 165
            yield "            ";
            $context["s"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 165, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 165), [], "array", false, false, false, 165);
            // line 166
            yield "            <div class=\"user-card ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "suspended";
            }
            yield "\"
                 style=\"border-color:";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 167, $this->source); })()), "border", [], "any", false, false, false, 167), "html", null, true);
            yield ";\"
                 ondblclick=\"window.location='";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 168)]), "html", null, true);
            yield "'\">

                <div class=\"card-header\">
                    <div class=\"card-avatar\">
                        ";
            // line 172
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userImagePath", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 173
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userImagePath", [], "any", false, false, false, 173)), "html", null, true);
                yield "\" alt=\"Avatar\">
                        ";
            } else {
                // line 175
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userPrenom", [], "any", false, false, false, 175))), "html", null, true);
                yield "
                        ";
            }
            // line 177
            yield "                    </div>
                    <div class=\"card-name\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userPrenom", [], "any", false, false, false, 178), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userNom", [], "any", false, false, false, 178), "html", null, true);
            yield "</div>
                    <div class=\"card-email\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userEmail", [], "any", false, false, false, 179), "html", null, true);
            yield "</div>
                </div>

                <div class=\"card-body\">
                    <div class=\"card-meta\">
                        ";
            // line 184
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 185
                yield "                            <span class=\"badge badge-active\">✓ Actif</span>
                        ";
            } else {
                // line 187
                yield "                            <span class=\"badge badge-suspended\">✗ Suspendu</span>
                        ";
            }
            // line 189
            yield "                        <span style=\"font-size:11px;color:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 189, $this->source); })()), "color", [], "any", false, false, false, 189), "html", null, true);
            yield ";font-weight:700;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 189, $this->source); })()), "label", [], "any", false, false, false, 189), "html", null, true);
            yield "</span>
                    </div>
                    <div class=\"suspicion-bar\">
                        <div class=\"suspicion-fill\" style=\"width:";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 192, $this->source); })()), "score", [], "any", false, false, false, 192), "html", null, true);
            yield "%;background:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 192, $this->source); })()), "color", [], "any", false, false, false, 192), "html", null, true);
            yield ";\"></div>
                    </div>
                    <div class=\"suspicion-label\">Score : ";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 194, $this->source); })()), "score", [], "any", false, false, false, 194), "html", null, true);
            yield "/100</div>
                </div>

                <div class=\"card-footer\">
                    <span class=\"card-date\">📅 ";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateInscription", [], "any", false, false, false, 198), "html", null, true);
            yield "</span>
                    <div class=\"card-menu\">
                        <button class=\"card-menu-btn\" onclick=\"toggleMenu(event,'menu-";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 200), "html", null, true);
            yield "')\">⋯</button>
                        <div class=\"card-dropdown\" id=\"menu-";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 201), "html", null, true);
            yield "\">
                            <button type=\"button\" class=\"suspicion-btn\"
                                    onclick=\"openSuspicionModal(";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 203), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userPrenom", [], "any", false, false, false, 203), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userNom", [], "any", false, false, false, 203), "html", null, true);
            yield "')\">
                                ⚠ Voir détail suspicion
                            </button>
                            <a href=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 206)]), "html", null, true);
            yield "\">✏ Modifier</a>
                            <form method=\"post\" action=\"";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 207)]), "html", null, true);
            yield "\" style=\"margin:0;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 208))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"danger\">
                                    ";
            // line 210
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("🔒 Suspendre") : ("✅ Réactiver"));
            yield "
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 217
        if (!$context['_iterated']) {
            // line 218
            yield "            <div class=\"empty-state\">
                <div style=\"font-size:48px;margin-bottom:12px;\">🔍</div>
                <p>Aucun compte trouvé";
            // line 220
            if ((($tmp = (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 220, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " pour « ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 220, $this->source); })()), "html", null, true);
                yield " »";
            }
            yield ".</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        yield "    </div>

    <!-- ── Modal Suspicion ──────────────────────────────────────────────────── -->
    <div class=\"modal-overlay\" id=\"suspicionModal\" onclick=\"closeSuspicionModal(event)\">
        <div class=\"modal-box\">
            <div class=\"modal-title\" id=\"modalName\">Analyse de suspicion</div>
            <div class=\"modal-sub\">Détail des critères évalués</div>
            <div class=\"modal-score-row\">
                <div class=\"modal-score-circle\" id=\"modalCircle\">—</div>
                <div class=\"modal-bar-wrap\">
                    <div class=\"modal-bar-bg\">
                        <div class=\"modal-bar-fill\" id=\"modalBarFill\"></div>
                    </div>
                    <div class=\"modal-label\" id=\"modalScoreLabel\">—</div>
                </div>
            </div>
            <div class=\"breakdown-list\" id=\"breakdownList\"></div>
            <button class=\"modal-close-btn\" onclick=\"document.getElementById('suspicionModal').classList.remove('open')\">
                Fermer
            </button>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 247
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

        // line 248
        yield "    <script>
        // ── State ──────────────────────────────────────────────────────────────────
        let currentSort = '";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 250, $this->source); })()), "html", null, true);
        yield "';
        let searchTimeout = null;

        // ── Toggle menu ────────────────────────────────────────────────────────────
        function toggleMenu(e, id) {
            e.stopPropagation();
            document.querySelectorAll('.card-dropdown').forEach(d => { if (d.id !== id) d.classList.remove('open'); });
            document.getElementById(id).classList.toggle('open');
        }
        document.addEventListener('click', () => {
            document.querySelectorAll('.card-dropdown').forEach(d => d.classList.remove('open'));
        });

        // ── Toggle sort ────────────────────────────────────────────────────────────
        function toggleSort() {
            currentSort = currentSort === 'suspicion' ? 'normal' : 'suspicion';
            const btn = document.getElementById('sortBtn');
            btn.textContent = currentSort === 'suspicion' ? '⚠ Triés par suspicion' : '⚠ Trier par suspicion';
            btn.classList.toggle('active-sort', currentSort === 'suspicion');
            fetchUsers(document.getElementById('searchInput').value.trim());
        }

        // ── Live search ────────────────────────────────────────────────────────────
        document.getElementById('searchInput').addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => fetchUsers(this.value.trim()), 250);
        });

        function fetchUsers(q) {
            document.getElementById('loadingSpinner').style.display = 'block';
            document.getElementById('usersGrid').style.opacity = '0.4';

            fetch(`";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_search");
        yield "?q=\${encodeURIComponent(q)}&sort=\${currentSort}`)
                .then(r => r.json())
                .then(users => {
                    document.getElementById('loadingSpinner').style.display = 'none';
                    document.getElementById('usersGrid').style.opacity = '1';
                    document.getElementById('resultsCount').textContent = `\${users.length} compte(s) affiché(s)`;

                    if (!users.length) {
                        document.getElementById('usersGrid').innerHTML = `
                    <div class=\"empty-state\">
                        <div style=\"font-size:48px;margin-bottom:12px;\">🔍</div>
                        <p>Aucun résultat\${q ? ' pour « ' + q + ' »' : ''}.</p>
                    </div>`;
                        return;
                    }

                    document.getElementById('usersGrid').innerHTML = users.map(u => `
                <div class=\"user-card \${u.active ? '' : 'suspended'}\"
                     style=\"border-color:\${u.border};\"
                     ondblclick=\"window.location='/admin/users/\${u.id}'\">
                    <div class=\"card-header\">
                        <div class=\"card-avatar\">
                            \${u.image
                        ? `<img src=\"/\${u.image}\" alt=\"\">`
                        : u.prenom.charAt(0).toUpperCase()
                    }
                        </div>
                        <div class=\"card-name\">\${u.prenom} \${u.nom}</div>
                        <div class=\"card-email\">\${u.email}</div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"card-meta\">
                            <span class=\"badge \${u.active ? 'badge-active' : 'badge-suspended'}\">
                                \${u.active ? '✓ Actif' : '✗ Suspendu'}
                            </span>
                            <span style=\"font-size:11px;color:\${u.color};font-weight:700;\">\${u.label}</span>
                        </div>
                        <div class=\"suspicion-bar\">
                            <div class=\"suspicion-fill\" style=\"width:\${u.score}%;background:\${u.color};\"></div>
                        </div>
                        <div class=\"suspicion-label\">Score : \${u.score}/100</div>
                    </div>
                    <div class=\"card-footer\">
                        <span class=\"card-date\">📅 \${u.date || ''}</span>
                        <div class=\"card-menu\">
                            <button class=\"card-menu-btn\" onclick=\"toggleMenu(event,'dmenu-\${u.id}')\">⋯</button>
                            <div class=\"card-dropdown\" id=\"dmenu-\${u.id}\">
                                <button type=\"button\" class=\"suspicion-btn\"
                                        onclick=\"openSuspicionModal(\${u.id}, '\${u.prenom} \${u.nom}')\">
                                    ⚠ Voir détail suspicion
                                </button>
                                <a href=\"/admin/users/\${u.id}/edit\">✏ Modifier</a>
                            </div>
                        </div>
                    </div>
                </div>`).join('');
                })
                .catch(() => {
                    document.getElementById('loadingSpinner').style.display = 'none';
                    document.getElementById('usersGrid').style.opacity = '1';
                });
        }

        // ── Modal suspicion ────────────────────────────────────────────────────────
        function openSuspicionModal(userId, userName) {
            document.querySelectorAll('.card-dropdown').forEach(d => d.classList.remove('open'));

            document.getElementById('modalName').textContent = '⚠ ' + userName;
            document.getElementById('modalCircle').textContent = '…';
            document.getElementById('modalScoreLabel').textContent = 'Chargement…';
            document.getElementById('breakdownList').innerHTML = '';
            document.getElementById('suspicionModal').classList.add('open');

            fetch(`/admin/users/\${userId}/suspicion`)
                .then(r => r.json())
                .then(data => {
                    const circle = document.getElementById('modalCircle');
                    circle.textContent = data.score;
                    circle.style.background = data.color;

                    const fill = document.getElementById('modalBarFill');
                    fill.style.width = data.score + '%';
                    fill.style.background = data.color;

                    document.getElementById('modalScoreLabel').style.color = data.color;
                    document.getElementById('modalScoreLabel').textContent = data.label + ' (' + data.score + '/100)';

                    const list = document.getElementById('breakdownList');
                    list.innerHTML = data.breakdown.map(item => `
                <div class=\"breakdown-item \${item.flag ? 'flag' : 'ok'}\">
                    <span class=\"bi-icon\">\${item.flag ? '🔴' : '✅'}</span>
                    <div class=\"bi-text\">
                        <strong>\${item.critere}</strong><br>
                        <span style=\"color:#6B7280;font-size:12px;\">\${item.detail}</span>
                    </div>
                    <span class=\"bi-pts\">+\${item.points}</span>
                </div>`).join('');
                });
        }

        function closeSuspicionModal(e) {
            if (e.target === document.getElementById('suspicionModal')) {
                document.getElementById('suspicionModal').classList.remove('open');
            }
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
        return "admin/users/index.html.twig";
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
        return array (  571 => 282,  536 => 250,  532 => 248,  519 => 247,  486 => 223,  473 => 220,  469 => 218,  467 => 217,  455 => 210,  450 => 208,  446 => 207,  442 => 206,  432 => 203,  427 => 201,  423 => 200,  418 => 198,  411 => 194,  404 => 192,  395 => 189,  391 => 187,  387 => 185,  385 => 184,  377 => 179,  371 => 178,  368 => 177,  362 => 175,  356 => 173,  354 => 172,  347 => 168,  343 => 167,  336 => 166,  333 => 165,  328 => 164,  319 => 158,  310 => 152,  306 => 150,  300 => 149,  293 => 147,  287 => 144,  280 => 139,  267 => 138,  126 => 6,  113 => 5,  90 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %}Gestion des comptes — Harmony{% endblock %}
{% block page_title %}👥 Gestion des comptes{% endblock %}

{% block stylesheets %}
    <style>
        .toolbar { display:flex;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap; }
        .search-wrap { position:relative;flex:1;min-width:240px; }
        .search-wrap .s-icon { position:absolute;left:14px;top:50%;transform:translateY(-50%);font-size:15px;pointer-events:none; }
        .search-box {
            width:100%;padding:10px 16px 10px 42px;
            border:1.5px solid var(--border);border-radius:11px;
            font-family:var(--font-body);font-size:14px;color:var(--text);
            background:var(--white);outline:none;transition:border-color .15s;
        }
        .search-box:focus { border-color:var(--purple); }

        .btn-tool {
            padding:10px 16px;border-radius:10px;font-size:12.5px;font-weight:600;
            text-decoration:none;cursor:pointer;border:none;display:flex;align-items:center;gap:6px;
            transition:.15s;white-space:nowrap;font-family:var(--font-body);
        }
        .btn-suspicion { background:var(--purple);color:#fff;box-shadow:0 3px 10px rgba(106,90,205,.3); }
        .btn-suspicion:hover { background:var(--purple-dark); }
        .btn-suspicion.active-sort { background:#4B3B9E;box-shadow:0 3px 14px rgba(106,90,205,.5); }
        .btn-suspended { background:#FEE2E2;color:#E05252; }
        .btn-suspended:hover { background:#FECACA; }

        .results-count { font-size:13px;color:var(--text-muted);margin-bottom:16px; }

        .cards-grid { display:grid;grid-template-columns:repeat(auto-fill,minmax(270px,1fr));gap:18px; }
        .user-card {
            background:var(--white);border:2.5px solid var(--border);border-radius:18px;
            overflow:hidden;transition:border-color .2s,transform .2s,box-shadow .2s;
            cursor:pointer;position:relative;
        }
        .user-card:hover { transform:translateY(-4px);box-shadow:0 12px 36px rgba(0,0,0,.1); }
        .user-card.suspended { opacity:.7; }

        .card-header { background:var(--purple-ghost);padding:20px;text-align:center;border-bottom:1px solid var(--border);position:relative; }
        .card-avatar {
            width:64px;height:64px;border-radius:50%;margin:0 auto 10px;
            background:var(--purple);display:grid;place-items:center;
            font-family:var(--font-head);font-size:24px;font-weight:800;color:#fff;
            border:3px solid var(--white);overflow:hidden;
        }
        .card-avatar img { width:64px;height:64px;border-radius:50%;object-fit:cover; }
        .card-name { font-family:var(--font-head);font-size:15px;font-weight:700;color:var(--text); }
        .card-email { font-size:12px;color:var(--text-muted);margin-top:3px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:220px;margin-inline:auto; }

        .card-body { padding:14px 16px; }
        .card-meta { display:flex;justify-content:space-between;align-items:center;margin-bottom:10px; }
        .badge { font-size:10px;font-weight:600;padding:3px 10px;border-radius:20px; }
        .badge-active { background:#D1FAE5;color:#065F46; }
        .badge-suspended { background:#FEE2E2;color:#991B1B; }

        .suspicion-bar { height:5px;border-radius:5px;background:#eee;margin-bottom:6px;overflow:hidden; }
        .suspicion-fill { height:100%;border-radius:5px;transition:width .4s; }
        .suspicion-label { font-size:11px;color:var(--text-muted); }

        .card-footer { padding:10px 16px;border-top:1px solid var(--border);display:flex;justify-content:space-between;align-items:center; }
        .card-date { font-size:11px;color:var(--text-muted); }

        .card-menu { position:relative; }
        .card-menu-btn { background:none;border:none;cursor:pointer;padding:5px 10px;font-size:20px;color:var(--text-muted);border-radius:7px;line-height:1; }
        .card-menu-btn:hover { background:var(--purple-ghost);color:var(--purple); }
        .card-dropdown {
            position:absolute;bottom:36px;right:0;width:185px;
            background:var(--white);border:1px solid var(--border);border-radius:12px;
            box-shadow:0 8px 28px rgba(0,0,0,.12);padding:6px;display:none;z-index:20;
        }
        .card-dropdown.open { display:block; }
        .card-dropdown a,.card-dropdown button {
            display:block;width:100%;text-align:left;
            padding:9px 13px;border-radius:8px;
            font-size:13px;font-weight:500;text-decoration:none;
            background:none;border:none;cursor:pointer;color:var(--text-mid);
            transition:background .12s;font-family:var(--font-body);
        }
        .card-dropdown a:hover,.card-dropdown button:hover { background:var(--purple-pale);color:var(--purple); }
        .card-dropdown .danger:hover { background:#FEE2E2;color:#E05252; }
        .card-dropdown .suspicion-btn { color:#E5A44B; }
        .card-dropdown .suspicion-btn:hover { background:#FEF3E2;color:#D97706; }

        .empty-state { text-align:center;padding:60px 20px;color:var(--text-muted);grid-column:1/-1; }
        #loadingSpinner { display:none;text-align:center;padding:20px;color:var(--text-muted); }

        /* ── Modal suspicion ── */
        .modal-overlay {
            position:fixed;inset:0;background:rgba(0,0,0,.45);
            display:flex;align-items:center;justify-content:center;
            z-index:1000;backdrop-filter:blur(4px);
            opacity:0;pointer-events:none;transition:opacity .2s;
        }
        .modal-overlay.open { opacity:1;pointer-events:all; }
        .modal-box {
            background:#fff;border-radius:22px;padding:36px;max-width:480px;width:90%;
            box-shadow:0 24px 64px rgba(0,0,0,.18);
            transform:scale(.95) translateY(10px);transition:transform .2s;
        }
        .modal-overlay.open .modal-box { transform:scale(1) translateY(0); }
        .modal-title { font-family:var(--font-head);font-size:18px;font-weight:800;color:var(--text);margin-bottom:4px; }
        .modal-sub { font-size:13px;color:var(--text-muted);margin-bottom:20px; }
        .modal-score-row { display:flex;align-items:center;gap:14px;margin-bottom:20px; }
        .modal-score-circle {
            width:70px;height:70px;border-radius:50%;
            display:grid;place-items:center;flex-shrink:0;
            font-family:var(--font-head);font-size:22px;font-weight:800;color:#fff;
        }
        .modal-bar-wrap { flex:1; }
        .modal-bar-bg { height:10px;background:#eee;border-radius:10px;overflow:hidden;margin-bottom:6px; }
        .modal-bar-fill { height:100%;border-radius:10px;transition:width .5s; }
        .modal-label { font-size:14px;font-weight:700; }

        .breakdown-list { display:flex;flex-direction:column;gap:8px; }
        .breakdown-item {
            display:flex;align-items:flex-start;gap:10px;
            padding:10px 12px;border-radius:10px;font-size:13px;
        }
        .breakdown-item.flag { background:#FEF2F2;border:1px solid #FECACA; }
        .breakdown-item.ok   { background:#F0FDF4;border:1px solid #BBF7D0; }
        .breakdown-item .bi-icon { font-size:16px;flex-shrink:0;margin-top:1px; }
        .breakdown-item .bi-text { flex:1; }
        .breakdown-item .bi-pts { font-weight:700;flex-shrink:0;margin-left:6px; }
        .breakdown-item.flag .bi-pts { color:#E05252; }
        .breakdown-item.ok .bi-pts   { color:#10B981; }

        .modal-close-btn {
            width:100%;margin-top:20px;padding:11px;
            background:var(--purple-pale);color:var(--purple);
            border:none;border-radius:11px;font-family:var(--font-body);
            font-size:14px;font-weight:600;cursor:pointer;transition:.15s;
        }
        .modal-close-btn:hover { background:#ddd8f8; }
    </style>
{% endblock %}

{% block body %}
    <div class=\"toolbar\">
        <div class=\"search-wrap\">
            <span class=\"s-icon\">🔍</span>
            <input type=\"text\" id=\"searchInput\" class=\"search-box\"
                   placeholder=\"Rechercher par nom, prénom ou email…\"
                   value=\"{{ q }}\" autocomplete=\"off\">
        </div>

        <button id=\"sortBtn\" class=\"btn-tool btn-suspicion {% if sort == 'suspicion' %}active-sort{% endif %}\"
                onclick=\"toggleSort()\">
            ⚠ {% if sort == 'suspicion' %}Triés par suspicion{% else %}Trier par suspicion{% endif %}
        </button>

        <a href=\"{{ path('admin_users_suspended') }}\" class=\"btn-tool btn-suspended\">
            🔒 Suspendus
        </a>
    </div>

    <div class=\"results-count\" id=\"resultsCount\">
        {{ users|length }} compte(s) affiché(s)
    </div>

    <div id=\"loadingSpinner\">⏳ Recherche…</div>

    <div class=\"cards-grid\" id=\"usersGrid\">
        {% for user in users %}
            {% set s = scores[user.userId] %}
            <div class=\"user-card {% if not user.isActive %}suspended{% endif %}\"
                 style=\"border-color:{{ s.border }};\"
                 ondblclick=\"window.location='{{ path('admin_users_show', {id: user.userId}) }}'\">

                <div class=\"card-header\">
                    <div class=\"card-avatar\">
                        {% if user.userImagePath %}
                            <img src=\"{{ asset(user.userImagePath) }}\" alt=\"Avatar\">
                        {% else %}
                            {{ (user.userPrenom|first)|upper }}
                        {% endif %}
                    </div>
                    <div class=\"card-name\">{{ user.userPrenom }} {{ user.userNom }}</div>
                    <div class=\"card-email\">{{ user.userEmail }}</div>
                </div>

                <div class=\"card-body\">
                    <div class=\"card-meta\">
                        {% if user.isActive %}
                            <span class=\"badge badge-active\">✓ Actif</span>
                        {% else %}
                            <span class=\"badge badge-suspended\">✗ Suspendu</span>
                        {% endif %}
                        <span style=\"font-size:11px;color:{{ s.color }};font-weight:700;\">{{ s.label }}</span>
                    </div>
                    <div class=\"suspicion-bar\">
                        <div class=\"suspicion-fill\" style=\"width:{{ s.score }}%;background:{{ s.color }};\"></div>
                    </div>
                    <div class=\"suspicion-label\">Score : {{ s.score }}/100</div>
                </div>

                <div class=\"card-footer\">
                    <span class=\"card-date\">📅 {{ user.dateInscription }}</span>
                    <div class=\"card-menu\">
                        <button class=\"card-menu-btn\" onclick=\"toggleMenu(event,'menu-{{ user.userId }}')\">⋯</button>
                        <div class=\"card-dropdown\" id=\"menu-{{ user.userId }}\">
                            <button type=\"button\" class=\"suspicion-btn\"
                                    onclick=\"openSuspicionModal({{ user.userId }}, '{{ user.userPrenom }} {{ user.userNom }}')\">
                                ⚠ Voir détail suspicion
                            </button>
                            <a href=\"{{ path('admin_users_edit', {id: user.userId}) }}\">✏ Modifier</a>
                            <form method=\"post\" action=\"{{ path('admin_users_toggle', {id: user.userId}) }}\" style=\"margin:0;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle' ~ user.userId) }}\">
                                <button type=\"submit\" class=\"danger\">
                                    {{ user.isActive ? '🔒 Suspendre' : '✅ Réactiver' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"empty-state\">
                <div style=\"font-size:48px;margin-bottom:12px;\">🔍</div>
                <p>Aucun compte trouvé{% if q %} pour « {{ q }} »{% endif %}.</p>
            </div>
        {% endfor %}
    </div>

    <!-- ── Modal Suspicion ──────────────────────────────────────────────────── -->
    <div class=\"modal-overlay\" id=\"suspicionModal\" onclick=\"closeSuspicionModal(event)\">
        <div class=\"modal-box\">
            <div class=\"modal-title\" id=\"modalName\">Analyse de suspicion</div>
            <div class=\"modal-sub\">Détail des critères évalués</div>
            <div class=\"modal-score-row\">
                <div class=\"modal-score-circle\" id=\"modalCircle\">—</div>
                <div class=\"modal-bar-wrap\">
                    <div class=\"modal-bar-bg\">
                        <div class=\"modal-bar-fill\" id=\"modalBarFill\"></div>
                    </div>
                    <div class=\"modal-label\" id=\"modalScoreLabel\">—</div>
                </div>
            </div>
            <div class=\"breakdown-list\" id=\"breakdownList\"></div>
            <button class=\"modal-close-btn\" onclick=\"document.getElementById('suspicionModal').classList.remove('open')\">
                Fermer
            </button>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        // ── State ──────────────────────────────────────────────────────────────────
        let currentSort = '{{ sort }}';
        let searchTimeout = null;

        // ── Toggle menu ────────────────────────────────────────────────────────────
        function toggleMenu(e, id) {
            e.stopPropagation();
            document.querySelectorAll('.card-dropdown').forEach(d => { if (d.id !== id) d.classList.remove('open'); });
            document.getElementById(id).classList.toggle('open');
        }
        document.addEventListener('click', () => {
            document.querySelectorAll('.card-dropdown').forEach(d => d.classList.remove('open'));
        });

        // ── Toggle sort ────────────────────────────────────────────────────────────
        function toggleSort() {
            currentSort = currentSort === 'suspicion' ? 'normal' : 'suspicion';
            const btn = document.getElementById('sortBtn');
            btn.textContent = currentSort === 'suspicion' ? '⚠ Triés par suspicion' : '⚠ Trier par suspicion';
            btn.classList.toggle('active-sort', currentSort === 'suspicion');
            fetchUsers(document.getElementById('searchInput').value.trim());
        }

        // ── Live search ────────────────────────────────────────────────────────────
        document.getElementById('searchInput').addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => fetchUsers(this.value.trim()), 250);
        });

        function fetchUsers(q) {
            document.getElementById('loadingSpinner').style.display = 'block';
            document.getElementById('usersGrid').style.opacity = '0.4';

            fetch(`{{ path('admin_users_search') }}?q=\${encodeURIComponent(q)}&sort=\${currentSort}`)
                .then(r => r.json())
                .then(users => {
                    document.getElementById('loadingSpinner').style.display = 'none';
                    document.getElementById('usersGrid').style.opacity = '1';
                    document.getElementById('resultsCount').textContent = `\${users.length} compte(s) affiché(s)`;

                    if (!users.length) {
                        document.getElementById('usersGrid').innerHTML = `
                    <div class=\"empty-state\">
                        <div style=\"font-size:48px;margin-bottom:12px;\">🔍</div>
                        <p>Aucun résultat\${q ? ' pour « ' + q + ' »' : ''}.</p>
                    </div>`;
                        return;
                    }

                    document.getElementById('usersGrid').innerHTML = users.map(u => `
                <div class=\"user-card \${u.active ? '' : 'suspended'}\"
                     style=\"border-color:\${u.border};\"
                     ondblclick=\"window.location='/admin/users/\${u.id}'\">
                    <div class=\"card-header\">
                        <div class=\"card-avatar\">
                            \${u.image
                        ? `<img src=\"/\${u.image}\" alt=\"\">`
                        : u.prenom.charAt(0).toUpperCase()
                    }
                        </div>
                        <div class=\"card-name\">\${u.prenom} \${u.nom}</div>
                        <div class=\"card-email\">\${u.email}</div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"card-meta\">
                            <span class=\"badge \${u.active ? 'badge-active' : 'badge-suspended'}\">
                                \${u.active ? '✓ Actif' : '✗ Suspendu'}
                            </span>
                            <span style=\"font-size:11px;color:\${u.color};font-weight:700;\">\${u.label}</span>
                        </div>
                        <div class=\"suspicion-bar\">
                            <div class=\"suspicion-fill\" style=\"width:\${u.score}%;background:\${u.color};\"></div>
                        </div>
                        <div class=\"suspicion-label\">Score : \${u.score}/100</div>
                    </div>
                    <div class=\"card-footer\">
                        <span class=\"card-date\">📅 \${u.date || ''}</span>
                        <div class=\"card-menu\">
                            <button class=\"card-menu-btn\" onclick=\"toggleMenu(event,'dmenu-\${u.id}')\">⋯</button>
                            <div class=\"card-dropdown\" id=\"dmenu-\${u.id}\">
                                <button type=\"button\" class=\"suspicion-btn\"
                                        onclick=\"openSuspicionModal(\${u.id}, '\${u.prenom} \${u.nom}')\">
                                    ⚠ Voir détail suspicion
                                </button>
                                <a href=\"/admin/users/\${u.id}/edit\">✏ Modifier</a>
                            </div>
                        </div>
                    </div>
                </div>`).join('');
                })
                .catch(() => {
                    document.getElementById('loadingSpinner').style.display = 'none';
                    document.getElementById('usersGrid').style.opacity = '1';
                });
        }

        // ── Modal suspicion ────────────────────────────────────────────────────────
        function openSuspicionModal(userId, userName) {
            document.querySelectorAll('.card-dropdown').forEach(d => d.classList.remove('open'));

            document.getElementById('modalName').textContent = '⚠ ' + userName;
            document.getElementById('modalCircle').textContent = '…';
            document.getElementById('modalScoreLabel').textContent = 'Chargement…';
            document.getElementById('breakdownList').innerHTML = '';
            document.getElementById('suspicionModal').classList.add('open');

            fetch(`/admin/users/\${userId}/suspicion`)
                .then(r => r.json())
                .then(data => {
                    const circle = document.getElementById('modalCircle');
                    circle.textContent = data.score;
                    circle.style.background = data.color;

                    const fill = document.getElementById('modalBarFill');
                    fill.style.width = data.score + '%';
                    fill.style.background = data.color;

                    document.getElementById('modalScoreLabel').style.color = data.color;
                    document.getElementById('modalScoreLabel').textContent = data.label + ' (' + data.score + '/100)';

                    const list = document.getElementById('breakdownList');
                    list.innerHTML = data.breakdown.map(item => `
                <div class=\"breakdown-item \${item.flag ? 'flag' : 'ok'}\">
                    <span class=\"bi-icon\">\${item.flag ? '🔴' : '✅'}</span>
                    <div class=\"bi-text\">
                        <strong>\${item.critere}</strong><br>
                        <span style=\"color:#6B7280;font-size:12px;\">\${item.detail}</span>
                    </div>
                    <span class=\"bi-pts\">+\${item.points}</span>
                </div>`).join('');
                });
        }

        function closeSuspicionModal(e) {
            if (e.target === document.getElementById('suspicionModal')) {
                document.getElementById('suspicionModal').classList.remove('open');
            }
        }
    </script>
{% endblock %}
", "admin/users/index.html.twig", "/Users/aziz/Downloads/symfony-etude/harmony-final/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication/templates/admin/users/index.html.twig");
    }
}

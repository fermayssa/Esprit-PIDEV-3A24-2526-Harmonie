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

/* back/base_back.html.twig */
class __TwigTemplate_e18fc3d104bde5aeaf6234838dce348e extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extra_styles' => [$this, 'block_extra_styles'],
            'extra_head' => [$this, 'block_extra_head'],
            'topbar_icon' => [$this, 'block_topbar_icon'],
            'topbar_title' => [$this, 'block_topbar_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/base_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/base_back.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
<link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --purple:#5B4FCF;--purple-dark:#3D2FA8;--purple-soft:#8B7FD4;
  --purple-pale:#EDEAFA;--purple-ghost:#F5F4FC;
  --gold:#D4A017;--gold-border:#F0C040;
  --text:#1A1733;--text-mid:#4A4570;--text-muted:#9590B8;
  --border:#E8E5F5;--white:#FFFFFF;
  --green:#22C55E;--green-pale:#F0FDF4;
  --red:#E05252;--red-pale:#FEF2F2;
  --amber:#F59E0B;
  --sidebar-w:256px;
  --font-head:'Syne',sans-serif;--font-body:'DM Sans',sans-serif;
}
html,body{font-family:var(--font-body);background:#F5F4FC;color:var(--text);min-height:100vh}

/* ─── LAYOUT ─── */
.shell{display:flex;min-height:100vh}

/* ─── SIDEBAR ─── */
.sidebar{
  width:var(--sidebar-w);flex-shrink:0;background:var(--white);
  border-right:1px solid var(--border);display:flex;flex-direction:column;
  position:fixed;top:0;left:0;height:100vh;z-index:200;overflow-y:auto;
}
.sb-logo{display:flex;align-items:center;gap:10px;padding:20px 20px 18px;border-bottom:1px solid var(--border);text-decoration:none}
.sb-logo-mark{width:36px;height:36px;border-radius:10px;display:grid;place-items:center;font-size:20px;background:var(--purple-pale);flex-shrink:0}
.sb-logo-name{font-family:var(--font-head);font-size:16px;font-weight:800;color:var(--text)}
.sb-section-label{font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--text-muted);padding:18px 20px 6px}
.sb-nav{flex:1;padding:0 10px 10px}
.sb-item{
  display:flex;align-items:center;gap:10px;padding:9px 12px;border-radius:10px;
  font-size:13.5px;font-weight:500;color:var(--text-mid);
  text-decoration:none;transition:all .15s;margin-bottom:2px;
}
.sb-item:hover{background:var(--purple-ghost);color:var(--purple)}
.sb-item.active{background:var(--purple-pale);color:var(--purple);font-weight:700}
.sb-item .sb-icon{font-size:15px;width:22px;text-align:center;flex-shrink:0}
.sb-badge{margin-left:auto;color:white;font-size:10px;font-weight:700;padding:2px 7px;border-radius:20px;min-width:20px;text-align:center}
.sb-badge.red{background:var(--red)}
.sb-badge.amber{background:var(--amber)}
.sb-badge.purple{background:var(--purple)}
.sb-footer{padding:16px 20px 20px;border-top:1px solid var(--border)}
.sb-admin{display:flex;align-items:center;gap:10px;margin-bottom:10px}
.sb-avatar{width:36px;height:36px;border-radius:50%;background:var(--purple);color:white;font-family:var(--font-head);font-weight:700;font-size:14px;display:grid;place-items:center;flex-shrink:0}
.sb-admin-name{font-size:13px;font-weight:600;color:var(--text)}
.sb-admin-role{font-size:11px;color:var(--text-muted)}
.sb-footer-btn{
  width:100%;padding:9px;border-radius:9px;border:1px solid var(--border);
  background:var(--white);color:var(--text-mid);font-size:12.5px;font-weight:500;
  cursor:pointer;font-family:var(--font-body);display:flex;align-items:center;
  justify-content:center;gap:6px;margin-bottom:6px;transition:all .15s;text-decoration:none;
}
.sb-footer-btn:hover{background:var(--purple-ghost);color:var(--purple);border-color:var(--purple-soft)}
.sb-footer-btn.logout{color:var(--red);border-color:rgba(224,82,82,.2)}
.sb-footer-btn.logout:hover{background:var(--red-pale)}

/* ─── MAIN ─── */
.main{margin-left:var(--sidebar-w);flex:1;display:flex;flex-direction:column}
.topbar{
  background:var(--white);border-bottom:1px solid var(--border);
  padding:0 36px;height:60px;display:flex;align-items:center;gap:12px;
  position:sticky;top:0;z-index:100;
}
.topbar-icon{font-size:16px}
.topbar-title{font-family:var(--font-head);font-size:15px;font-weight:700;color:var(--text)}
.topbar-right{margin-left:auto;display:flex;align-items:center;gap:8px}
.topbar-notif{width:36px;height:36px;border-radius:9px;background:var(--purple-ghost);border:none;cursor:pointer;font-size:16px;display:grid;place-items:center}

/* ─── CONTENT ─── */
.content{padding:28px 36px;flex:1}

/* ─── FLASH MESSAGES ─── */
.flash-list{margin-bottom:20px}
.flash{
  display:flex;align-items:center;gap:10px;padding:12px 18px;border-radius:12px;
  margin-bottom:10px;font-size:13.5px;font-weight:500;
}
.flash.success{background:var(--green-pale);color:#166534;border:1px solid #BBF7D0}
.flash.error{background:var(--red-pale);color:var(--red);border:1px solid #FECACA}
.flash.warning{background:#FFFBEB;color:#92400E;border:1px solid #FDE68A}

/* ─── PAGE HEADER ─── */
.page-hd{display:flex;align-items:center;gap:12px;margin-bottom:20px}
.page-hd h1{font-family:var(--font-head);font-size:20px;font-weight:800;color:var(--text)}

/* ─── TOOLBAR ─── */
.toolbar{display:flex;align-items:center;gap:10px;margin-bottom:20px}
.search-box{flex:1;display:flex;align-items:center;gap:8px;background:var(--white);border:1.5px solid var(--border);border-radius:10px;padding:9px 14px;transition:border-color .15s}
.search-box:focus-within{border-color:var(--purple-soft)}
.search-box input{border:none;background:transparent;outline:none;font-size:13.5px;font-family:var(--font-body);color:var(--text);width:100%}
.search-box input::placeholder{color:var(--text-muted)}
.count-label{font-size:13px;color:var(--text-muted);margin-bottom:16px}

/* ─── BUTTONS ─── */
.btn{padding:9px 18px;border-radius:9px;font-size:13px;font-weight:600;border:none;cursor:pointer;font-family:var(--font-body);transition:all .15s;display:inline-flex;align-items:center;gap:6px;text-decoration:none}
.btn.primary{background:var(--purple);color:white}
.btn.primary:hover{background:var(--purple-dark)}
.btn.ghost{background:var(--white);border:1.5px solid var(--border);color:var(--text-mid)}
.btn.ghost:hover{background:var(--purple-ghost);color:var(--purple)}
.btn.danger{background:var(--red);color:white}
.btn.danger:hover{background:#c94444}
.btn.sm{padding:5px 12px;font-size:12px;border-radius:8px}

/* ─── TABLE ─── */
.panel{background:var(--white);border:1px solid var(--border);border-radius:18px;overflow:hidden;margin-bottom:28px}
.panel-head{display:flex;align-items:center;gap:10px;padding:16px 20px;border-bottom:1px solid var(--border)}
.panel-head h3{font-family:var(--font-head);font-size:14px;font-weight:700;flex:1}
table{width:100%;border-collapse:collapse}
th{font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--text-muted);padding:10px 16px;text-align:left;background:var(--purple-ghost)}
td{padding:12px 16px;font-size:13.5px;border-top:1px solid var(--border)}
tr:hover td{background:#FAFAFE}
.td-name{font-weight:600;color:var(--text)}
.td-muted{color:var(--text-muted);font-size:12px}
.td-desc{color:var(--text-mid);font-size:12.5px;max-width:260px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.badge{display:inline-flex;align-items:center;gap:4px;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700}
.badge.cat{background:var(--purple-pale);color:var(--purple)}
.badge.active{background:var(--green-pale);color:#16A34A}
.badge.danger{background:var(--red-pale);color:var(--red)}
.td-actions{display:flex;gap:6px}

/* ─── STAT CARDS ─── */
.stats-row{display:grid;gap:16px;margin-bottom:28px}
.stats-row.col4{grid-template-columns:repeat(4,1fr)}
.stats-row.col3{grid-template-columns:repeat(3,1fr)}
.stat-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:20px;display:flex;align-items:center;gap:14px}
.stat-icon{width:46px;height:46px;border-radius:12px;display:grid;place-items:center;font-size:20px;flex-shrink:0}
.stat-icon.purple{background:var(--purple-pale)}
.stat-icon.green{background:var(--green-pale)}
.stat-icon.amber{background:#FFFBEB}
.stat-icon.red{background:var(--red-pale)}
.stat-val{font-family:var(--font-head);font-size:26px;font-weight:800;color:var(--text);line-height:1}
.stat-lbl{font-size:12px;color:var(--text-muted);margin-top:2px}

/* ─── CONFIRM FORM ─── */
.confirm-form{display:inline}

";
        // line 145
        yield from $this->unwrap()->yieldBlock('extra_styles', $context, $blocks);
        // line 146
        yield "</style>
";
        // line 147
        yield from $this->unwrap()->yieldBlock('extra_head', $context, $blocks);
        // line 148
        yield "</head>
<body>
<div class=\"shell\">

";
        // line 153
        yield "<aside class=\"sidebar\">
  <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_dashboard");
        yield "\" class=\"sb-logo\">
    <div class=\"sb-logo-mark\">🎵</div>
    <span class=\"sb-logo-name\">Harmony</span>
  </a>

  <nav class=\"sb-nav\">
    <p class=\"sb-section-label\">Tableau de bord</p>
    <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_dashboard");
        yield "\"
       class=\"sb-item ";
        // line 162
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "request", [], "any", false, false, false, 162), "attributes", [], "any", false, false, false, 162), "get", ["_route"], "method", false, false, false, 162) == "back_dashboard")) {
            yield "active";
        }
        yield "\">
      <span class=\"sb-icon\">🏠</span> Accueil Back
    </a>

    <p class=\"sb-section-label\">Utilisateurs</p>
    <a href=\"#\" class=\"sb-item\">
      <span class=\"sb-icon\">👥</span> Tous les comptes
    </a>
    <a href=\"#\" class=\"sb-item\">
      <span class=\"sb-icon\">🔒</span> Comptes suspendus
    </a>

    <p class=\"sb-section-label\">Contenu</p>
    <a href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_categories");
        yield "\"
       class=\"sb-item ";
        // line 176
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "request", [], "any", false, false, false, 176), "attributes", [], "any", false, false, false, 176), "get", ["_route"], "method", false, false, false, 176)) && is_string($_v1 = "back_categor") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\">
      <span class=\"sb-icon\">🗂️</span> Catégories
    </a>
    <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_posts");
        yield "\"
       class=\"sb-item ";
        // line 180
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "request", [], "any", false, false, false, 180), "attributes", [], "any", false, false, false, 180), "get", ["_route"], "method", false, false, false, 180)) && is_string($_v3 = "back_post") && str_starts_with($_v2, $_v3))) {
            yield "active";
        }
        yield "\">
      <span class=\"sb-icon\">📝</span> Posts
    </a>
    <a href=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commentaires");
        yield "\"
       class=\"sb-item ";
        // line 184
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "request", [], "any", false, false, false, 184), "attributes", [], "any", false, false, false, 184), "get", ["_route"], "method", false, false, false, 184)) && is_string($_v5 = "back_commentaire") && str_starts_with($_v4, $_v5))) {
            yield "active";
        }
        yield "\">
      <span class=\"sb-icon\">💬</span> Commentaires
    </a>
  </nav>

  <div class=\"sb-footer\">
    <div class=\"sb-admin\">
      <div class=\"sb-avatar\">A</div>
      <div>
        <div class=\"sb-admin-name\">Admin Harmony</div>
        <div class=\"sb-admin-role\">Administrateur</div>
      </div>
    </div>
    <a href=\"#\" class=\"sb-footer-btn\">⚙️ Gérer mon profil</a>
    <a href=\"#\" class=\"sb-footer-btn logout\">🚪 Se déconnecter</a>
  </div>
</aside>

";
        // line 203
        yield "<div class=\"main\">
  <header class=\"topbar\">
    <span class=\"topbar-icon\">";
        // line 205
        yield from $this->unwrap()->yieldBlock('topbar_icon', $context, $blocks);
        yield "</span>
    <span class=\"topbar-title\">";
        // line 206
        yield from $this->unwrap()->yieldBlock('topbar_title', $context, $blocks);
        yield "</span>
    <div class=\"topbar-right\">
      <button class=\"topbar-notif\">🔔</button>
    </div>
  </header>

  <div class=\"content\">
    ";
        // line 214
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "flashes", [], "any", false, false, false, 214)) > 0)) {
            // line 215
            yield "    <div class=\"flash-list\">
      ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "flashes", [], "any", false, false, false, 216));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 217
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 218
                    yield "          <div class=\"flash ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                    yield "\">
            ";
                    // line 219
                    if (($context["type"] == "success")) {
                        yield "✅";
                    } elseif (($context["type"] == "error")) {
                        yield "❌";
                    } else {
                        yield "⚠️";
                    }
                    // line 220
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
          </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            yield "    </div>
    ";
        }
        // line 226
        yield "
    ";
        // line 227
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 228
        yield "  </div>
</div>

</div>";
        // line 232
        yield "
";
        // line 233
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 234
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Back — Harmony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_styles"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_head"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 205
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

        yield "📊";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 206
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topbar_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar_title"));

        yield "Back Office";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 227
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 233
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/base_back.html.twig";
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
        return array (  532 => 233,  510 => 227,  487 => 206,  464 => 205,  442 => 147,  420 => 145,  397 => 6,  384 => 234,  382 => 233,  379 => 232,  374 => 228,  372 => 227,  369 => 226,  365 => 224,  359 => 223,  349 => 220,  341 => 219,  336 => 218,  331 => 217,  327 => 216,  324 => 215,  321 => 214,  311 => 206,  307 => 205,  303 => 203,  280 => 184,  276 => 183,  268 => 180,  264 => 179,  256 => 176,  252 => 175,  234 => 162,  230 => 161,  220 => 154,  217 => 153,  211 => 148,  209 => 147,  206 => 146,  204 => 145,  62 => 6,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>{% block title %}Back — Harmony{% endblock %}</title>
<link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --purple:#5B4FCF;--purple-dark:#3D2FA8;--purple-soft:#8B7FD4;
  --purple-pale:#EDEAFA;--purple-ghost:#F5F4FC;
  --gold:#D4A017;--gold-border:#F0C040;
  --text:#1A1733;--text-mid:#4A4570;--text-muted:#9590B8;
  --border:#E8E5F5;--white:#FFFFFF;
  --green:#22C55E;--green-pale:#F0FDF4;
  --red:#E05252;--red-pale:#FEF2F2;
  --amber:#F59E0B;
  --sidebar-w:256px;
  --font-head:'Syne',sans-serif;--font-body:'DM Sans',sans-serif;
}
html,body{font-family:var(--font-body);background:#F5F4FC;color:var(--text);min-height:100vh}

/* ─── LAYOUT ─── */
.shell{display:flex;min-height:100vh}

/* ─── SIDEBAR ─── */
.sidebar{
  width:var(--sidebar-w);flex-shrink:0;background:var(--white);
  border-right:1px solid var(--border);display:flex;flex-direction:column;
  position:fixed;top:0;left:0;height:100vh;z-index:200;overflow-y:auto;
}
.sb-logo{display:flex;align-items:center;gap:10px;padding:20px 20px 18px;border-bottom:1px solid var(--border);text-decoration:none}
.sb-logo-mark{width:36px;height:36px;border-radius:10px;display:grid;place-items:center;font-size:20px;background:var(--purple-pale);flex-shrink:0}
.sb-logo-name{font-family:var(--font-head);font-size:16px;font-weight:800;color:var(--text)}
.sb-section-label{font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--text-muted);padding:18px 20px 6px}
.sb-nav{flex:1;padding:0 10px 10px}
.sb-item{
  display:flex;align-items:center;gap:10px;padding:9px 12px;border-radius:10px;
  font-size:13.5px;font-weight:500;color:var(--text-mid);
  text-decoration:none;transition:all .15s;margin-bottom:2px;
}
.sb-item:hover{background:var(--purple-ghost);color:var(--purple)}
.sb-item.active{background:var(--purple-pale);color:var(--purple);font-weight:700}
.sb-item .sb-icon{font-size:15px;width:22px;text-align:center;flex-shrink:0}
.sb-badge{margin-left:auto;color:white;font-size:10px;font-weight:700;padding:2px 7px;border-radius:20px;min-width:20px;text-align:center}
.sb-badge.red{background:var(--red)}
.sb-badge.amber{background:var(--amber)}
.sb-badge.purple{background:var(--purple)}
.sb-footer{padding:16px 20px 20px;border-top:1px solid var(--border)}
.sb-admin{display:flex;align-items:center;gap:10px;margin-bottom:10px}
.sb-avatar{width:36px;height:36px;border-radius:50%;background:var(--purple);color:white;font-family:var(--font-head);font-weight:700;font-size:14px;display:grid;place-items:center;flex-shrink:0}
.sb-admin-name{font-size:13px;font-weight:600;color:var(--text)}
.sb-admin-role{font-size:11px;color:var(--text-muted)}
.sb-footer-btn{
  width:100%;padding:9px;border-radius:9px;border:1px solid var(--border);
  background:var(--white);color:var(--text-mid);font-size:12.5px;font-weight:500;
  cursor:pointer;font-family:var(--font-body);display:flex;align-items:center;
  justify-content:center;gap:6px;margin-bottom:6px;transition:all .15s;text-decoration:none;
}
.sb-footer-btn:hover{background:var(--purple-ghost);color:var(--purple);border-color:var(--purple-soft)}
.sb-footer-btn.logout{color:var(--red);border-color:rgba(224,82,82,.2)}
.sb-footer-btn.logout:hover{background:var(--red-pale)}

/* ─── MAIN ─── */
.main{margin-left:var(--sidebar-w);flex:1;display:flex;flex-direction:column}
.topbar{
  background:var(--white);border-bottom:1px solid var(--border);
  padding:0 36px;height:60px;display:flex;align-items:center;gap:12px;
  position:sticky;top:0;z-index:100;
}
.topbar-icon{font-size:16px}
.topbar-title{font-family:var(--font-head);font-size:15px;font-weight:700;color:var(--text)}
.topbar-right{margin-left:auto;display:flex;align-items:center;gap:8px}
.topbar-notif{width:36px;height:36px;border-radius:9px;background:var(--purple-ghost);border:none;cursor:pointer;font-size:16px;display:grid;place-items:center}

/* ─── CONTENT ─── */
.content{padding:28px 36px;flex:1}

/* ─── FLASH MESSAGES ─── */
.flash-list{margin-bottom:20px}
.flash{
  display:flex;align-items:center;gap:10px;padding:12px 18px;border-radius:12px;
  margin-bottom:10px;font-size:13.5px;font-weight:500;
}
.flash.success{background:var(--green-pale);color:#166534;border:1px solid #BBF7D0}
.flash.error{background:var(--red-pale);color:var(--red);border:1px solid #FECACA}
.flash.warning{background:#FFFBEB;color:#92400E;border:1px solid #FDE68A}

/* ─── PAGE HEADER ─── */
.page-hd{display:flex;align-items:center;gap:12px;margin-bottom:20px}
.page-hd h1{font-family:var(--font-head);font-size:20px;font-weight:800;color:var(--text)}

/* ─── TOOLBAR ─── */
.toolbar{display:flex;align-items:center;gap:10px;margin-bottom:20px}
.search-box{flex:1;display:flex;align-items:center;gap:8px;background:var(--white);border:1.5px solid var(--border);border-radius:10px;padding:9px 14px;transition:border-color .15s}
.search-box:focus-within{border-color:var(--purple-soft)}
.search-box input{border:none;background:transparent;outline:none;font-size:13.5px;font-family:var(--font-body);color:var(--text);width:100%}
.search-box input::placeholder{color:var(--text-muted)}
.count-label{font-size:13px;color:var(--text-muted);margin-bottom:16px}

/* ─── BUTTONS ─── */
.btn{padding:9px 18px;border-radius:9px;font-size:13px;font-weight:600;border:none;cursor:pointer;font-family:var(--font-body);transition:all .15s;display:inline-flex;align-items:center;gap:6px;text-decoration:none}
.btn.primary{background:var(--purple);color:white}
.btn.primary:hover{background:var(--purple-dark)}
.btn.ghost{background:var(--white);border:1.5px solid var(--border);color:var(--text-mid)}
.btn.ghost:hover{background:var(--purple-ghost);color:var(--purple)}
.btn.danger{background:var(--red);color:white}
.btn.danger:hover{background:#c94444}
.btn.sm{padding:5px 12px;font-size:12px;border-radius:8px}

/* ─── TABLE ─── */
.panel{background:var(--white);border:1px solid var(--border);border-radius:18px;overflow:hidden;margin-bottom:28px}
.panel-head{display:flex;align-items:center;gap:10px;padding:16px 20px;border-bottom:1px solid var(--border)}
.panel-head h3{font-family:var(--font-head);font-size:14px;font-weight:700;flex:1}
table{width:100%;border-collapse:collapse}
th{font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--text-muted);padding:10px 16px;text-align:left;background:var(--purple-ghost)}
td{padding:12px 16px;font-size:13.5px;border-top:1px solid var(--border)}
tr:hover td{background:#FAFAFE}
.td-name{font-weight:600;color:var(--text)}
.td-muted{color:var(--text-muted);font-size:12px}
.td-desc{color:var(--text-mid);font-size:12.5px;max-width:260px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.badge{display:inline-flex;align-items:center;gap:4px;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700}
.badge.cat{background:var(--purple-pale);color:var(--purple)}
.badge.active{background:var(--green-pale);color:#16A34A}
.badge.danger{background:var(--red-pale);color:var(--red)}
.td-actions{display:flex;gap:6px}

/* ─── STAT CARDS ─── */
.stats-row{display:grid;gap:16px;margin-bottom:28px}
.stats-row.col4{grid-template-columns:repeat(4,1fr)}
.stats-row.col3{grid-template-columns:repeat(3,1fr)}
.stat-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:20px;display:flex;align-items:center;gap:14px}
.stat-icon{width:46px;height:46px;border-radius:12px;display:grid;place-items:center;font-size:20px;flex-shrink:0}
.stat-icon.purple{background:var(--purple-pale)}
.stat-icon.green{background:var(--green-pale)}
.stat-icon.amber{background:#FFFBEB}
.stat-icon.red{background:var(--red-pale)}
.stat-val{font-family:var(--font-head);font-size:26px;font-weight:800;color:var(--text);line-height:1}
.stat-lbl{font-size:12px;color:var(--text-muted);margin-top:2px}

/* ─── CONFIRM FORM ─── */
.confirm-form{display:inline}

{% block extra_styles %}{% endblock %}
</style>
{% block extra_head %}{% endblock %}
</head>
<body>
<div class=\"shell\">

{# ═══ SIDEBAR ═══ #}
<aside class=\"sidebar\">
  <a href=\"{{ path('back_dashboard') }}\" class=\"sb-logo\">
    <div class=\"sb-logo-mark\">🎵</div>
    <span class=\"sb-logo-name\">Harmony</span>
  </a>

  <nav class=\"sb-nav\">
    <p class=\"sb-section-label\">Tableau de bord</p>
    <a href=\"{{ path('back_dashboard') }}\"
       class=\"sb-item {% if app.request.attributes.get('_route') == 'back_dashboard' %}active{% endif %}\">
      <span class=\"sb-icon\">🏠</span> Accueil Back
    </a>

    <p class=\"sb-section-label\">Utilisateurs</p>
    <a href=\"#\" class=\"sb-item\">
      <span class=\"sb-icon\">👥</span> Tous les comptes
    </a>
    <a href=\"#\" class=\"sb-item\">
      <span class=\"sb-icon\">🔒</span> Comptes suspendus
    </a>

    <p class=\"sb-section-label\">Contenu</p>
    <a href=\"{{ path('back_categories') }}\"
       class=\"sb-item {% if app.request.attributes.get('_route') starts with 'back_categor' %}active{% endif %}\">
      <span class=\"sb-icon\">🗂️</span> Catégories
    </a>
    <a href=\"{{ path('back_posts') }}\"
       class=\"sb-item {% if app.request.attributes.get('_route') starts with 'back_post' %}active{% endif %}\">
      <span class=\"sb-icon\">📝</span> Posts
    </a>
    <a href=\"{{ path('back_commentaires') }}\"
       class=\"sb-item {% if app.request.attributes.get('_route') starts with 'back_commentaire' %}active{% endif %}\">
      <span class=\"sb-icon\">💬</span> Commentaires
    </a>
  </nav>

  <div class=\"sb-footer\">
    <div class=\"sb-admin\">
      <div class=\"sb-avatar\">A</div>
      <div>
        <div class=\"sb-admin-name\">Admin Harmony</div>
        <div class=\"sb-admin-role\">Administrateur</div>
      </div>
    </div>
    <a href=\"#\" class=\"sb-footer-btn\">⚙️ Gérer mon profil</a>
    <a href=\"#\" class=\"sb-footer-btn logout\">🚪 Se déconnecter</a>
  </div>
</aside>

{# ═══ MAIN ═══ #}
<div class=\"main\">
  <header class=\"topbar\">
    <span class=\"topbar-icon\">{% block topbar_icon %}📊{% endblock %}</span>
    <span class=\"topbar-title\">{% block topbar_title %}Back Office{% endblock %}</span>
    <div class=\"topbar-right\">
      <button class=\"topbar-notif\">🔔</button>
    </div>
  </header>

  <div class=\"content\">
    {# Flash messages #}
    {% if app.flashes|length > 0 %}
    <div class=\"flash-list\">
      {% for type, messages in app.flashes %}
        {% for message in messages %}
          <div class=\"flash {{ type }}\">
            {% if type == 'success' %}✅{% elseif type == 'error' %}❌{% else %}⚠️{% endif %}
            {{ message }}
          </div>
        {% endfor %}
      {% endfor %}
    </div>
    {% endif %}

    {% block body %}{% endblock %}
  </div>
</div>

</div>{# /shell #}

{% block javascripts %}{% endblock %}
</body>
</html>
", "back/base_back.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/back/base_back.html.twig");
    }
}

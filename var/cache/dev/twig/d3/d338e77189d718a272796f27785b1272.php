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

/* nutrition/index.html.twig */
class __TwigTemplate_f1dcdecc85292262d25214894794da60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nutrition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nutrition/index.html.twig"));

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

        yield "Nutrition — Harmony";
        
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
        yield "<link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=JetBrains+Mono:wght@400;600&display=swap\" rel=\"stylesheet\">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}

:root{
  --pu:#6A5ACD;--pu-dk:#4B3B9E;--pu-lt:#8B7FD4;--pu-pale:#EDE8FA;--pu-ghost:#F7F5FD;--pu-deep:#2D2060;
  --tx:#1C1733;--tx-mid:#4A4570;--tx-muted:#9590B8;
  --border:rgba(106,90,205,.12);--white:#FFFFFF;--shadow:0 8px 32px rgba(106,90,205,.14);
  --green:#22C55E;--red:#EF4444;--orange:#F59E0B;
  --card-r:18px;
  --font-h:'Syne',sans-serif;--font-b:'DM Sans',sans-serif;--font-m:'JetBrains Mono',monospace;
  /* Meal colours */
  --breakfast:#F59E0B;--breakfast-pale:#FEF3C7;--breakfast-bg:#FFFBEB;
  --lunch:#10B981;--lunch-pale:#D1FAE5;--lunch-bg:#ECFDF5;
  --dinner:#6366F1;--dinner-pale:#E0E7FF;--dinner-bg:#EEF2FF;
  --snack:#F43F5E;--snack-pale:#FFE4E6;--snack-bg:#FFF1F2;
}

html,body{font-family:var(--font-b);background:var(--pu-ghost);color:var(--tx);overflow-x:hidden}

/* ── HERO ── */
.hero{
  background:linear-gradient(135deg,var(--pu-deep) 0%,#3D2A8A 50%,#5B45C0 100%);
  padding:28px 44px 32px;position:relative;overflow:hidden;
}
.hero::before{
  content:'';position:absolute;inset:0;
  background:url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\");
}
.hero-inner{position:relative;z-index:1;max-width:1280px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;gap:32px;flex-wrap:wrap}
.hero-left h1{font-family:var(--font-h);font-size:28px;font-weight:800;color:white;letter-spacing:-.3px;margin-bottom:4px;text-shadow:0 2px 12px rgba(0,0,0,.3)}
.hero-left p{font-size:13.5px;color:rgba(255,255,255,.65);font-weight:300}
/* Date navigator */
.date-nav{display:flex;align-items:center;gap:10px;margin-top:16px;background:rgba(255,255,255,.1);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,.2);border-radius:14px;padding:8px 14px;width:fit-content}
.date-nav-btn{width:32px;height:32px;border-radius:8px;border:none;background:rgba(255,255,255,.15);color:white;cursor:pointer;display:grid;place-items:center;font-size:14px;transition:background .15s}
.date-nav-btn:hover{background:rgba(255,255,255,.3)}
.date-nav-btn:disabled{opacity:.3;cursor:not-allowed}
.date-display{font-family:var(--font-h);font-size:14px;font-weight:700;color:white;min-width:160px;text-align:center}
.today-badge{font-size:10px;background:rgba(255,255,255,.2);color:white;padding:2px 8px;border-radius:10px;font-weight:600;margin-left:8px}
/* Hero stats */
.hero-stats{display:flex;gap:12px;flex-wrap:wrap}
.hstat{background:rgba(255,255,255,.1);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,.2);border-radius:14px;padding:14px 18px;text-align:center;min-width:90px;position:relative}
.hstat-val{font-family:var(--font-h);font-size:22px;font-weight:800;color:white}
.hstat-lbl{font-size:10px;color:rgba(255,255,255,.65);margin-top:2px;text-transform:uppercase;letter-spacing:.5px}
/* Calorie ring in hero */
.cal-ring-wrap{position:relative;width:90px;height:90px}
.cal-ring-wrap svg{transform:rotate(-90deg)}
.cal-ring-center{position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center}
.cal-ring-val{font-family:var(--font-h);font-size:16px;font-weight:800;color:white;line-height:1}
.cal-ring-sub{font-size:9px;color:rgba(255,255,255,.6);text-transform:uppercase;margin-top:1px}

/* ── LAYOUT ── */
.page{max-width:1280px;margin:0 auto;padding:28px 36px 80px;display:grid;grid-template-columns:1fr 320px;gap:24px;align-items:start}
.main-col{display:flex;flex-direction:column;gap:18px}
.side-col{display:flex;flex-direction:column;gap:16px;position:sticky;top:78px}

/* ── MEAL CARDS ── */
.meal-card{background:var(--white);border:1px solid var(--border);border-radius:var(--card-r);overflow:hidden;transition:box-shadow .2s}
.meal-card:hover{box-shadow:var(--shadow)}
.meal-header{padding:14px 20px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--border);position:relative}
.meal-header::before{content:'';position:absolute;left:0;top:0;bottom:0;width:4px;border-radius:0}
.meal-header.breakfast::before{background:var(--breakfast)}
.meal-header.lunch::before{background:var(--lunch)}
.meal-header.dinner::before{background:var(--dinner)}
.meal-header.snack::before{background:var(--snack)}
.meal-title-wrap{display:flex;align-items:center;gap:10px}
.meal-icon-wrap{width:38px;height:38px;border-radius:11px;display:grid;place-items:center;font-size:20px;flex-shrink:0}
.meal-icon-wrap.breakfast{background:var(--breakfast-pale)}
.meal-icon-wrap.lunch{background:var(--lunch-pale)}
.meal-icon-wrap.dinner{background:var(--dinner-pale)}
.meal-icon-wrap.snack{background:var(--snack-pale)}
.meal-name{font-family:var(--font-h);font-size:14px;font-weight:700;color:var(--tx)}
.meal-cal-badge{font-size:11.5px;font-weight:600;color:var(--tx-muted);background:var(--pu-ghost);padding:3px 10px;border-radius:10px;font-family:var(--font-m)}
.meal-actions{display:flex;align-items:center;gap:8px}
.btn-add-food{display:inline-flex;align-items:center;gap:5px;padding:7px 14px;border-radius:9px;border:1.5px solid var(--border);background:var(--white);font-family:var(--font-b);font-size:12px;font-weight:600;color:var(--pu);cursor:pointer;text-decoration:none;transition:all .15s}
.btn-add-food:hover{background:var(--pu);color:white;border-color:var(--pu)}
.meal-body{padding:8px 16px 12px}

/* ── FOOD ITEMS ── */
.food-item{display:flex;align-items:center;gap:12px;padding:10px 10px;border-radius:11px;margin-bottom:6px;transition:background .15s;position:relative}
.food-item:last-child{margin-bottom:0}
.food-item:hover{background:var(--pu-ghost)}
.food-dot{width:8px;height:8px;border-radius:50%;flex-shrink:0}
.food-dot.breakfast{background:var(--breakfast)}
.food-dot.lunch{background:var(--lunch)}
.food-dot.dinner{background:var(--dinner)}
.food-dot.snack{background:var(--snack)}
.food-info{flex:1;min-width:0}
.food-name{font-family:var(--font-h);font-size:13px;font-weight:700;color:var(--tx);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.food-meta{display:flex;gap:10px;margin-top:3px;flex-wrap:wrap}
.food-tag{font-size:11px;color:var(--tx-muted);display:flex;align-items:center;gap:3px}
.food-cal{font-family:var(--font-m);font-size:13px;font-weight:600;color:var(--pu);flex-shrink:0}
.food-actions{display:flex;gap:5px;flex-shrink:0;opacity:0;transition:opacity .15s}
.food-item:hover .food-actions{opacity:1}
.btn-icon-sm{width:28px;height:28px;border-radius:7px;border:1px solid var(--border);background:var(--white);cursor:pointer;display:grid;place-items:center;font-size:12px;transition:all .15s}
.btn-icon-sm.edit:hover{border-color:var(--pu);background:var(--pu-pale)}
.btn-icon-sm.del:hover{border-color:var(--red);background:#FEE2E2}

/* Empty meal */
.meal-empty{text-align:center;padding:20px 10px;color:var(--tx-muted)}
.meal-empty-icon{font-size:24px;opacity:.4;margin-bottom:5px}
.meal-empty-text{font-size:12px}

/* ── SIDEBAR ── */
.card{background:var(--white);border:1px solid var(--border);border-radius:var(--card-r);overflow:hidden}
.card-head{padding:14px 18px 12px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between}
.card-title{font-family:var(--font-h);font-size:14px;font-weight:700;color:var(--tx);display:flex;align-items:center;gap:7px}
.card-body{padding:16px 18px}

/* Macro bars */
.macro-row{margin-bottom:12px}
.macro-row:last-child{margin-bottom:0}
.macro-label{display:flex;justify-content:space-between;align-items:center;margin-bottom:5px}
.macro-name{font-size:12px;font-weight:600;color:var(--tx-mid);display:flex;align-items:center;gap:5px}
.macro-dot{width:7px;height:7px;border-radius:50%;flex-shrink:0}
.macro-val{font-family:var(--font-m);font-size:11px;color:var(--tx-muted)}
.macro-track{height:7px;background:var(--pu-ghost);border-radius:6px;overflow:hidden}
.macro-fill{height:100%;border-radius:6px;transition:width .6s ease}
.macro-fill.prot{background:linear-gradient(90deg,#F59E0B,#EF6C00)}
.macro-fill.gluc{background:linear-gradient(90deg,#10B981,#059669)}
.macro-fill.lip{background:linear-gradient(90deg,#6366F1,#4338CA)}

/* Water tracker */
.water-tracker{display:flex;flex-direction:column;gap:12px}
.water-visual{display:flex;align-items:flex-end;gap:6px}
.water-glass-wrap{position:relative;flex:1}
.water-progress-track{height:14px;background:rgba(59,130,246,.1);border-radius:7px;overflow:hidden;border:1.5px solid rgba(59,130,246,.2)}
.water-progress-fill{height:100%;background:linear-gradient(90deg,#38BDF8,#0EA5E9);border-radius:6px;transition:width .6s ease}
.water-pct-label{font-family:var(--font-m);font-size:12px;font-weight:600;color:#0369A1;margin-top:5px}
.water-btns{display:grid;grid-template-columns:repeat(4,1fr);gap:6px;margin-top:2px}
.water-btn{padding:7px 4px;border-radius:8px;border:1.5px solid rgba(59,130,246,.25);background:rgba(59,130,246,.06);font-family:var(--font-b);font-size:11px;font-weight:600;color:#0369A1;cursor:pointer;transition:all .15s;text-align:center}
.water-btn:hover{background:#0369A1;color:white;border-color:#0369A1}
.water-info{display:flex;justify-content:space-between;align-items:center}
.water-amount{font-family:var(--font-h);font-size:18px;font-weight:800;color:#0369A1}
.water-goal-lbl{font-size:11px;color:var(--tx-muted)}
.water-reset{padding:4px 10px;border-radius:7px;border:1px solid rgba(59,130,246,.2);background:transparent;font-size:10.5px;color:#0369A1;cursor:pointer;transition:all .15s}
.water-reset:hover{background:rgba(239,68,68,.1);color:var(--red);border-color:rgba(239,68,68,.2)}

/* Summary card */
.summary-row{display:flex;justify-content:space-between;align-items:center;padding:9px 0;border-bottom:1px solid var(--border)}
.summary-row:last-child{border-bottom:none}
.summary-lbl{font-size:12.5px;color:var(--tx-mid);font-weight:500}
.summary-val{font-family:var(--font-m);font-size:13px;font-weight:600;color:var(--tx)}
.summary-val.green{color:var(--green)}
.summary-val.orange{color:var(--orange)}
.summary-val.red{color:var(--red)}

/* ── MODALS ── */
.modal-overlay{position:fixed;inset:0;background:rgba(20,15,50,.6);backdrop-filter:blur(6px);z-index:1000;display:none;align-items:center;justify-content:center;padding:20px}
.modal-overlay.open{display:flex}
.modal{background:var(--white);border-radius:20px;width:100%;max-width:480px;overflow:hidden;animation:slideUp .28s ease}
@keyframes slideUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
.modal-head{padding:18px 22px 14px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between}
.modal-title{font-family:var(--font-h);font-size:15px;font-weight:700;color:var(--tx)}
.modal-close{width:28px;height:28px;border-radius:7px;border:none;background:var(--pu-ghost);cursor:pointer;font-size:14px;display:grid;place-items:center;color:var(--tx-muted);transition:background .15s}
.modal-close:hover{background:var(--pu-pale);color:var(--pu)}
.modal-body{padding:22px}
.form-group{display:flex;flex-direction:column;gap:4px;margin-bottom:14px}
.form-group:last-of-type{margin-bottom:0}
label{font-size:11.5px;font-weight:600;color:var(--tx-mid);text-transform:uppercase;letter-spacing:.4px}
input,select{padding:10px 13px;border:1.5px solid var(--border);border-radius:9px;font-family:var(--font-b);font-size:13.5px;color:var(--tx);background:var(--white);outline:none;transition:border-color .15s;width:100%}
input:focus,select:focus{border-color:var(--pu)}
input.err,select.err{border-color:var(--red)}
.err-msg{font-size:11px;color:var(--red);font-weight:500;display:none;margin-bottom:2px}
.err-msg.show{display:block}
.btn-primary{width:100%;padding:12px;border-radius:10px;border:none;background:var(--pu);color:white;font-family:var(--font-h);font-size:14px;font-weight:700;cursor:pointer;transition:background .15s,transform .1s;display:flex;align-items:center;justify-content:center;gap:8px;margin-top:16px}
.btn-primary:hover{background:var(--pu-dk);transform:translateY(-1px)}
.btn-primary:disabled{background:var(--tx-muted);cursor:not-allowed;transform:none}
/* Delete modal */
.del-modal-body{display:flex;flex-direction:column;align-items:center;gap:16px;text-align:center;padding:28px 22px}
.del-icon-circle{width:60px;height:60px;border-radius:50%;background:#FEE2E2;display:grid;place-items:center;font-size:28px}
.del-actions{display:flex;gap:10px;width:100%;margin-top:6px}
.btn-cancel{flex:1;padding:11px;border-radius:10px;border:1.5px solid var(--border);background:var(--white);font-family:var(--font-b);font-size:13px;font-weight:600;color:var(--tx-mid);cursor:pointer;transition:background .15s}
.btn-cancel:hover{background:var(--pu-ghost)}
.btn-danger{flex:1;padding:11px;border-radius:10px;border:none;background:#DC2626;font-family:var(--font-h);font-size:13px;font-weight:700;color:white;cursor:pointer;transition:background .15s;display:flex;align-items:center;justify-content:center;gap:6px}
.btn-danger:hover{background:#B91C1C}

/* ── TOAST ── */
.toast{position:fixed;bottom:26px;right:26px;z-index:2000;padding:12px 18px;border-radius:11px;font-family:var(--font-b);font-size:13px;font-weight:500;display:flex;align-items:center;gap:9px;transform:translateY(80px);opacity:0;transition:transform .3s,opacity .3s;max-width:340px}
.toast.show{transform:translateY(0);opacity:1}
.toast.success{background:#ECFDF5;color:#065F46;border:1px solid #A7F3D0}
.toast.error{background:#FEF2F2;color:#991B1B;border:1px solid #FCA5A5}
.toast.info{background:var(--pu-pale);color:var(--pu-dk);border:1px solid rgba(106,90,205,.25)}

/* ── ANIM ── */
@keyframes fadeUp{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.fade{animation:fadeUp .35s ease both}
.d1{animation-delay:.06s}.d2{animation-delay:.12s}.d3{animation-delay:.18s}.d4{animation-delay:.22s}

/* ── CAL PROGRESS HERO ── */
.cal-goal-bar{height:6px;background:rgba(255,255,255,.2);border-radius:3px;overflow:hidden;margin-top:10px}
.cal-goal-fill{height:100%;background:linear-gradient(90deg,#A3E635,#22C55E);border-radius:3px;transition:width .8s ease}
.cal-goal-fill.over{background:linear-gradient(90deg,#FCA5A5,#EF4444)}

/* ── RESPONSIVE ── */
@media(max-width:1024px){.page{grid-template-columns:1fr;padding:20px 18px 60px}.side-col{position:static}}
@media(max-width:640px){.topbar{padding:0 14px}.nav-links{display:none}.hero{padding:20px 18px 24px}.hero-inner{flex-direction:column}.hero-stats{flex-wrap:wrap}}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 206
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

        // line 207
        yield from $this->load("_planning_topbar.html.twig", 207)->unwrap()->yield($context);
        // line 208
        yield "
";
        // line 210
        $context["totalProtSide"] = (isset($context["totalProt"]) || array_key_exists("totalProt", $context) ? $context["totalProt"] : (function () { throw new RuntimeError('Variable "totalProt" does not exist.', 210, $this->source); })());
        // line 211
        $context["totalGlucSide"] = (isset($context["totalGluc"]) || array_key_exists("totalGluc", $context) ? $context["totalGluc"] : (function () { throw new RuntimeError('Variable "totalGluc" does not exist.', 211, $this->source); })());
        // line 212
        $context["totalLipSide"] = (isset($context["totalLip"]) || array_key_exists("totalLip", $context) ? $context["totalLip"] : (function () { throw new RuntimeError('Variable "totalLip" does not exist.', 212, $this->source); })());
        // line 213
        $context["calRaw"] = Twig\Extension\CoreExtension::round((((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 213, $this->source); })()) / (isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 213, $this->source); })())) * 100));
        // line 214
        $context["calPct"] = ((((isset($context["calRaw"]) || array_key_exists("calRaw", $context) ? $context["calRaw"] : (function () { throw new RuntimeError('Variable "calRaw" does not exist.', 214, $this->source); })()) < 0)) ? (0) : (((((isset($context["calRaw"]) || array_key_exists("calRaw", $context) ? $context["calRaw"] : (function () { throw new RuntimeError('Variable "calRaw" does not exist.', 214, $this->source); })()) > 100)) ? (100) : ((isset($context["calRaw"]) || array_key_exists("calRaw", $context) ? $context["calRaw"] : (function () { throw new RuntimeError('Variable "calRaw" does not exist.', 214, $this->source); })())))));
        // line 215
        yield "
<!-- ═══ HERO ═══ -->
<div class=\"hero\">
  <div class=\"hero-inner\">
    <div class=\"hero-left\">
      <h1>🥗 Journal Alimentaire</h1>
      <p>Suivez vos apports nutritionnels au quotidien.</p>

      <!-- Date navigator -->
      <div class=\"date-nav\">
        <a href=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition", ["date" => (isset($context["prevDate"]) || array_key_exists("prevDate", $context) ? $context["prevDate"] : (function () { throw new RuntimeError('Variable "prevDate" does not exist.', 225, $this->source); })())]), "html", null, true);
        yield "\" class=\"date-nav-btn\">◀</a>
        <div class=\"date-display\">
          ";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateObj"]) || array_key_exists("dateObj", $context) ? $context["dateObj"] : (function () { throw new RuntimeError('Variable "dateObj" does not exist.', 227, $this->source); })()), "d"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateObj"]) || array_key_exists("dateObj", $context) ? $context["dateObj"] : (function () { throw new RuntimeError('Variable "dateObj" does not exist.', 227, $this->source); })()), "F")), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateObj"]) || array_key_exists("dateObj", $context) ? $context["dateObj"] : (function () { throw new RuntimeError('Variable "dateObj" does not exist.', 227, $this->source); })()), "Y"), "html", null, true);
        yield "
          ";
        // line 228
        if ((($tmp = (isset($context["isToday"]) || array_key_exists("isToday", $context) ? $context["isToday"] : (function () { throw new RuntimeError('Variable "isToday" does not exist.', 228, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"today-badge\">Aujourd'hui</span>";
        }
        // line 229
        yield "        </div>
        <a href=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition", ["date" => (isset($context["nextDate"]) || array_key_exists("nextDate", $context) ? $context["nextDate"] : (function () { throw new RuntimeError('Variable "nextDate" does not exist.', 230, $this->source); })())]), "html", null, true);
        yield "\"
           class=\"date-nav-btn ";
        // line 231
        yield ((((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 231, $this->source); })()) >= $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"))) ? ("disabled") : (""));
        yield "\">▶</a>
      </div>
    </div>

    <!-- Hero stats -->
    <div class=\"hero-stats\">
      <!-- Calorie ring -->
      <div class=\"hstat\" style=\"min-width:110px\">
        <div style=\"display:flex;flex-direction:column;align-items:center;gap:4px\">
          <div class=\"hstat-val\" id=\"heroTotalCal\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 240, $this->source); })()), 0, ".", ""), "html", null, true);
        yield "</div>
          <div class=\"hstat-lbl\">/ ";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 241, $this->source); })()), "html", null, true);
        yield " kcal</div>
          <div class=\"cal-goal-bar\" style=\"width:80px\">
            <div class=\"cal-goal-fill ";
        // line 243
        yield ((((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 243, $this->source); })()) > (isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 243, $this->source); })()))) ? ("over") : (""));
        yield "\"
                 id=\"heroCalBar\"
                 style=\"width:";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["calPct"]) || array_key_exists("calPct", $context) ? $context["calPct"] : (function () { throw new RuntimeError('Variable "calPct" does not exist.', 245, $this->source); })()), "html", null, true);
        yield "%\"></div>
          </div>
        </div>
      </div>
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"heroTotalProt\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalProt"]) || array_key_exists("totalProt", $context) ? $context["totalProt"] : (function () { throw new RuntimeError('Variable "totalProt" does not exist.', 250, $this->source); })()), 1, ".", ""), "html", null, true);
        yield "</div>
        <div class=\"hstat-lbl\">Protéines g</div>
      </div>
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"heroTotalGluc\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalGluc"]) || array_key_exists("totalGluc", $context) ? $context["totalGluc"] : (function () { throw new RuntimeError('Variable "totalGluc" does not exist.', 254, $this->source); })()), 1, ".", ""), "html", null, true);
        yield "</div>
        <div class=\"hstat-lbl\">Glucides g</div>
      </div>
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"heroTotalLip\">";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalLip"]) || array_key_exists("totalLip", $context) ? $context["totalLip"] : (function () { throw new RuntimeError('Variable "totalLip" does not exist.', 258, $this->source); })()), 1, ".", ""), "html", null, true);
        yield "</div>
        <div class=\"hstat-lbl\">Lipides g</div>
      </div>
    </div>
  </div>
</div>

<!-- ═══ PAGE ═══ -->
<div class=\"page\">

  <!-- ══ MAIN: Meal sections ══ -->
  <div class=\"main-col\">

    ";
        // line 271
        $context["mealClasses"] = ["Petit-déjeuner" => "breakfast", "Déjeuner" => "lunch", "Dîner" => "dinner", "Snack" => "snack"];
        // line 277
        yield "
    ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["grouped"]) || array_key_exists("grouped", $context) ? $context["grouped"] : (function () { throw new RuntimeError('Variable "grouped" does not exist.', 278, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["repasName"] => $context["items"]) {
            // line 279
            yield "      ";
            $context["cls"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["mealClasses"] ?? null), $context["repasName"], [], "array", true, true, false, 279) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["mealClasses"]) || array_key_exists("mealClasses", $context) ? $context["mealClasses"] : (function () { throw new RuntimeError('Variable "mealClasses" does not exist.', 279, $this->source); })()), $context["repasName"], [], "array", false, false, false, 279)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["mealClasses"]) || array_key_exists("mealClasses", $context) ? $context["mealClasses"] : (function () { throw new RuntimeError('Variable "mealClasses" does not exist.', 279, $this->source); })()), $context["repasName"], [], "array", false, false, false, 279)) : ("lunch"));
            // line 280
            yield "      ";
            $context["mealInfo"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["repasTypes"] ?? null), $context["repasName"], [], "array", true, true, false, 280) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["repasTypes"]) || array_key_exists("repasTypes", $context) ? $context["repasTypes"] : (function () { throw new RuntimeError('Variable "repasTypes" does not exist.', 280, $this->source); })()), $context["repasName"], [], "array", false, false, false, 280)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["repasTypes"]) || array_key_exists("repasTypes", $context) ? $context["repasTypes"] : (function () { throw new RuntimeError('Variable "repasTypes" does not exist.', 280, $this->source); })()), $context["repasName"], [], "array", false, false, false, 280)) : (["icon" => "🍽️", "color" => "#6A5ACD"]));
            // line 281
            yield "
      ";
            // line 283
            yield "      ";
            $context["mealCal"] = 0;
            // line 284
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 285
                yield "        ";
                $context["mealCal"] = ((isset($context["mealCal"]) || array_key_exists("mealCal", $context) ? $context["mealCal"] : (function () { throw new RuntimeError('Variable "mealCal" does not exist.', 285, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["c"], "calories", [], "any", false, false, false, 285));
                // line 286
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            yield "
      <div class=\"meal-card fade d";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 288), "html", null, true);
            yield "\" id=\"meal-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cls"]) || array_key_exists("cls", $context) ? $context["cls"] : (function () { throw new RuntimeError('Variable "cls" does not exist.', 288, $this->source); })()), "html", null, true);
            yield "\">
        <div class=\"meal-header ";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cls"]) || array_key_exists("cls", $context) ? $context["cls"] : (function () { throw new RuntimeError('Variable "cls" does not exist.', 289, $this->source); })()), "html", null, true);
            yield "\">
          <div class=\"meal-title-wrap\">
            <div class=\"meal-icon-wrap ";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cls"]) || array_key_exists("cls", $context) ? $context["cls"] : (function () { throw new RuntimeError('Variable "cls" does not exist.', 291, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mealInfo"]) || array_key_exists("mealInfo", $context) ? $context["mealInfo"] : (function () { throw new RuntimeError('Variable "mealInfo" does not exist.', 291, $this->source); })()), "icon", [], "any", false, false, false, 291), "html", null, true);
            yield "</div>
            <div>
              <div class=\"meal-name\">";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["repasName"], "html", null, true);
            yield "</div>
            </div>
          </div>
          <div class=\"meal-actions\">
            <span class=\"meal-cal-badge\" id=\"mealCal-";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cls"]) || array_key_exists("cls", $context) ? $context["cls"] : (function () { throw new RuntimeError('Variable "cls" does not exist.', 297, $this->source); })()), "html", null, true);
            yield "\">
              🔥 ";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["mealCal"]) || array_key_exists("mealCal", $context) ? $context["mealCal"] : (function () { throw new RuntimeError('Variable "mealCal" does not exist.', 298, $this->source); })()), 0, ".", ""), "html", null, true);
            yield " kcal
            </span>
            <a href=\"";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition_ajouter", ["repas" => $context["repasName"], "date" => (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 300, $this->source); })())]), "html", null, true);
            yield "\"
               class=\"btn-add-food\">
              ＋ Ajouter
            </a>
          </div>
        </div>
        <div class=\"meal-body\" id=\"mealBody-";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cls"]) || array_key_exists("cls", $context) ? $context["cls"] : (function () { throw new RuntimeError('Variable "cls" does not exist.', 306, $this->source); })()), "html", null, true);
            yield "\">
          ";
            // line 307
            if (Twig\Extension\CoreExtension::testEmpty($context["items"])) {
                // line 308
                yield "            <div class=\"meal-empty\" id=\"mealEmpty-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cls"]) || array_key_exists("cls", $context) ? $context["cls"] : (function () { throw new RuntimeError('Variable "cls" does not exist.', 308, $this->source); })()), "html", null, true);
                yield "\">
              <div class=\"meal-empty-icon\">";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mealInfo"]) || array_key_exists("mealInfo", $context) ? $context["mealInfo"] : (function () { throw new RuntimeError('Variable "mealInfo" does not exist.', 309, $this->source); })()), "icon", [], "any", false, false, false, 309), "html", null, true);
                yield "</div>
              <div class=\"meal-empty-text\">Aucun aliment enregistré — <a href=\"";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrition_ajouter", ["repas" => $context["repasName"], "date" => (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 310, $this->source); })())]), "html", null, true);
                yield "\" style=\"color:var(--pu);text-decoration:none;font-weight:600\">Ajouter</a></div>
            </div>
          ";
            } else {
                // line 313
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["items"]);
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 314
                    yield "              <div class=\"food-item\" id=\"foodItem-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 314), "html", null, true);
                    yield "\">
                <div class=\"food-dot ";
                    // line 315
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cls"]) || array_key_exists("cls", $context) ? $context["cls"] : (function () { throw new RuntimeError('Variable "cls" does not exist.', 315, $this->source); })()), "html", null, true);
                    yield "\"></div>
                <div class=\"food-info\">
                  <div class=\"food-name\">";
                    // line 317
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "aliment", [], "any", false, false, false, 317), "nomAliment", [], "any", false, false, false, 317), "html", null, true);
                    yield "</div>
                  <div class=\"food-meta\">
                    <span class=\"food-tag\">⚖️ ";
                    // line 319
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "poidsGrammes", [], "any", false, false, false, 319), "html", null, true);
                    yield " g</span>
                    <span class=\"food-tag\">🥩 ";
                    // line 320
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "proteines", [], "any", false, false, false, 320), 1, ".", ""), "html", null, true);
                    yield "g prot</span>
                    <span class=\"food-tag\">🌾 ";
                    // line 321
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "glucides", [], "any", false, false, false, 321), 1, ".", ""), "html", null, true);
                    yield "g gluc</span>
                    <span class=\"food-tag\">💧 ";
                    // line 322
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "lipides", [], "any", false, false, false, 322), 1, ".", ""), "html", null, true);
                    yield "g lip</span>
                  </div>
                </div>
                <span class=\"food-cal\" id=\"foodCal-";
                    // line 325
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 325), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "calories", [], "any", false, false, false, 325), 0, ".", ""), "html", null, true);
                    yield " kcal</span>
                <div class=\"food-actions\">
                  <button class=\"btn-icon-sm edit\" title=\"Modifier\"
                          onclick=\"openEditModal(";
                    // line 328
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 328), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "poidsGrammes", [], "any", false, false, false, 328), "html", null, true);
                    yield ", '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "aliment", [], "any", false, false, false, 328), "nomAliment", [], "any", false, false, false, 328), "html_attr");
                    yield "', ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "aliment", [], "any", false, false, false, 328), "caloriesPour100g", [], "any", false, false, false, 328), "html", null, true);
                    yield ")\">✏️</button>
                  <button class=\"btn-icon-sm del\" title=\"Supprimer\"
                          onclick=\"openDeleteModal(";
                    // line 330
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 330), "html", null, true);
                    yield ", '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "aliment", [], "any", false, false, false, 330), "nomAliment", [], "any", false, false, false, 330), "html_attr");
                    yield "')\">🗑</button>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 334
                yield "          ";
            }
            // line 335
            yield "        </div>
      </div>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['repasName'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        yield "
  </div>

  <!-- ══ SIDE COLUMN ══ -->
  <div class=\"side-col\">

    <!-- RÉSUMÉ DU JOUR -->
    <div class=\"card fade\">
      <div class=\"card-head\">
        <div class=\"card-title\">📊 Résumé du jour</div>
        <span style=\"font-size:11px;color:var(--tx-muted)\">";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 349, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "</span>
      </div>
      <div class=\"card-body\" style=\"padding:12px 16px\">
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">🔥 Calories</span>
          <span class=\"summary-val ";
        // line 354
        yield ((((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 354, $this->source); })()) > (isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 354, $this->source); })()))) ? ("red") : (((((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 354, $this->source); })()) > ((isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 354, $this->source); })()) * 0.85))) ? ("orange") : ("green"))));
        yield "\" id=\"sideTotalCal\">
            ";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 355, $this->source); })()), 0, ".", ""), "html", null, true);
        yield " kcal
          </span>
        </div>
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">🎯 Objectif</span>
          <span class=\"summary-val\">";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 360, $this->source); })()), "html", null, true);
        yield " kcal</span>
        </div>
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">📉 Restant</span>
          <span class=\"summary-val ";
        // line 364
        yield (((((isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 364, $this->source); })()) - (isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 364, $this->source); })())) < 0)) ? ("red") : ("green"));
        yield "\" id=\"sideRestant\">
            ";
        // line 365
        if (((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 365, $this->source); })()) > (isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 365, $this->source); })()))) {
            // line 366
            yield "              +";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 366, $this->source); })()) - (isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 366, $this->source); })())), 0, ".", ""), "html", null, true);
            yield " kcal dépassé
            ";
        } else {
            // line 368
            yield "              ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 368, $this->source); })()) - (isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 368, $this->source); })())), 0, ".", ""), "html", null, true);
            yield " kcal restants
            ";
        }
        // line 370
        yield "          </span>
        </div>
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">🥩 Protéines</span>
          <span class=\"summary-val\" id=\"sideProt\">";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalProt"]) || array_key_exists("totalProt", $context) ? $context["totalProt"] : (function () { throw new RuntimeError('Variable "totalProt" does not exist.', 374, $this->source); })()), 1, ".", ""), "html", null, true);
        yield " g</span>
        </div>
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">🌾 Glucides</span>
          <span class=\"summary-val\" id=\"sideGluc\">";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalGluc"]) || array_key_exists("totalGluc", $context) ? $context["totalGluc"] : (function () { throw new RuntimeError('Variable "totalGluc" does not exist.', 378, $this->source); })()), 1, ".", ""), "html", null, true);
        yield " g</span>
        </div>
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">💧 Lipides</span>
          <span class=\"summary-val\" id=\"sideLip\">";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalLip"]) || array_key_exists("totalLip", $context) ? $context["totalLip"] : (function () { throw new RuntimeError('Variable "totalLip" does not exist.', 382, $this->source); })()), 1, ".", ""), "html", null, true);
        yield " g</span>
        </div>
      </div>
    </div>

    <!-- MACROS BREAKDOWN -->
    <div class=\"card fade d1\">
      <div class=\"card-head\"><div class=\"card-title\">📈 Répartition Macros</div></div>
      <div class=\"card-body\">
        ";
        // line 391
        $context["macroTotal"] = (((isset($context["totalProt"]) || array_key_exists("totalProt", $context) ? $context["totalProt"] : (function () { throw new RuntimeError('Variable "totalProt" does not exist.', 391, $this->source); })()) + (isset($context["totalGluc"]) || array_key_exists("totalGluc", $context) ? $context["totalGluc"] : (function () { throw new RuntimeError('Variable "totalGluc" does not exist.', 391, $this->source); })())) + (isset($context["totalLip"]) || array_key_exists("totalLip", $context) ? $context["totalLip"] : (function () { throw new RuntimeError('Variable "totalLip" does not exist.', 391, $this->source); })()));
        // line 392
        yield "        ";
        $context["protRaw"] = ((((isset($context["macroTotal"]) || array_key_exists("macroTotal", $context) ? $context["macroTotal"] : (function () { throw new RuntimeError('Variable "macroTotal" does not exist.', 392, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["totalProt"]) || array_key_exists("totalProt", $context) ? $context["totalProt"] : (function () { throw new RuntimeError('Variable "totalProt" does not exist.', 392, $this->source); })()) / (isset($context["macroTotal"]) || array_key_exists("macroTotal", $context) ? $context["macroTotal"] : (function () { throw new RuntimeError('Variable "macroTotal" does not exist.', 392, $this->source); })())) * 100))) : (0));
        // line 393
        yield "        ";
        $context["glucRaw"] = ((((isset($context["macroTotal"]) || array_key_exists("macroTotal", $context) ? $context["macroTotal"] : (function () { throw new RuntimeError('Variable "macroTotal" does not exist.', 393, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["totalGluc"]) || array_key_exists("totalGluc", $context) ? $context["totalGluc"] : (function () { throw new RuntimeError('Variable "totalGluc" does not exist.', 393, $this->source); })()) / (isset($context["macroTotal"]) || array_key_exists("macroTotal", $context) ? $context["macroTotal"] : (function () { throw new RuntimeError('Variable "macroTotal" does not exist.', 393, $this->source); })())) * 100))) : (0));
        // line 394
        yield "        ";
        $context["lipRaw"] = ((((isset($context["macroTotal"]) || array_key_exists("macroTotal", $context) ? $context["macroTotal"] : (function () { throw new RuntimeError('Variable "macroTotal" does not exist.', 394, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["totalLip"]) || array_key_exists("totalLip", $context) ? $context["totalLip"] : (function () { throw new RuntimeError('Variable "totalLip" does not exist.', 394, $this->source); })()) / (isset($context["macroTotal"]) || array_key_exists("macroTotal", $context) ? $context["macroTotal"] : (function () { throw new RuntimeError('Variable "macroTotal" does not exist.', 394, $this->source); })())) * 100))) : (0));
        // line 395
        yield "        ";
        $context["protPct"] = ((((isset($context["protRaw"]) || array_key_exists("protRaw", $context) ? $context["protRaw"] : (function () { throw new RuntimeError('Variable "protRaw" does not exist.', 395, $this->source); })()) > 100)) ? (100) : ((isset($context["protRaw"]) || array_key_exists("protRaw", $context) ? $context["protRaw"] : (function () { throw new RuntimeError('Variable "protRaw" does not exist.', 395, $this->source); })())));
        // line 396
        yield "        ";
        $context["glucPct"] = ((((isset($context["glucRaw"]) || array_key_exists("glucRaw", $context) ? $context["glucRaw"] : (function () { throw new RuntimeError('Variable "glucRaw" does not exist.', 396, $this->source); })()) > 100)) ? (100) : ((isset($context["glucRaw"]) || array_key_exists("glucRaw", $context) ? $context["glucRaw"] : (function () { throw new RuntimeError('Variable "glucRaw" does not exist.', 396, $this->source); })())));
        // line 397
        yield "        ";
        $context["lipPct"] = ((((isset($context["lipRaw"]) || array_key_exists("lipRaw", $context) ? $context["lipRaw"] : (function () { throw new RuntimeError('Variable "lipRaw" does not exist.', 397, $this->source); })()) > 100)) ? (100) : ((isset($context["lipRaw"]) || array_key_exists("lipRaw", $context) ? $context["lipRaw"] : (function () { throw new RuntimeError('Variable "lipRaw" does not exist.', 397, $this->source); })())));
        // line 398
        yield "
        <div class=\"macro-row\">
          <div class=\"macro-label\">
            <span class=\"macro-name\"><span class=\"macro-dot\" style=\"background:#F59E0B\"></span>Protéines</span>
            <span class=\"macro-val\" id=\"macroProt\">";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalProt"]) || array_key_exists("totalProt", $context) ? $context["totalProt"] : (function () { throw new RuntimeError('Variable "totalProt" does not exist.', 402, $this->source); })()), 1, ".", ""), "html", null, true);
        yield "g · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["protPct"]) || array_key_exists("protPct", $context) ? $context["protPct"] : (function () { throw new RuntimeError('Variable "protPct" does not exist.', 402, $this->source); })()), "html", null, true);
        yield "%</span>
          </div>
          <div class=\"macro-track\"><div class=\"macro-fill prot\" id=\"macroProtBar\" style=\"width:";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["protPct"]) || array_key_exists("protPct", $context) ? $context["protPct"] : (function () { throw new RuntimeError('Variable "protPct" does not exist.', 404, $this->source); })()), "html", null, true);
        yield "%\"></div></div>
        </div>
        <div class=\"macro-row\">
          <div class=\"macro-label\">
            <span class=\"macro-name\"><span class=\"macro-dot\" style=\"background:#10B981\"></span>Glucides</span>
            <span class=\"macro-val\" id=\"macroGluc\">";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalGluc"]) || array_key_exists("totalGluc", $context) ? $context["totalGluc"] : (function () { throw new RuntimeError('Variable "totalGluc" does not exist.', 409, $this->source); })()), 1, ".", ""), "html", null, true);
        yield "g · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["glucPct"]) || array_key_exists("glucPct", $context) ? $context["glucPct"] : (function () { throw new RuntimeError('Variable "glucPct" does not exist.', 409, $this->source); })()), "html", null, true);
        yield "%</span>
          </div>
          <div class=\"macro-track\"><div class=\"macro-fill gluc\" id=\"macroGlucBar\" style=\"width:";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["glucPct"]) || array_key_exists("glucPct", $context) ? $context["glucPct"] : (function () { throw new RuntimeError('Variable "glucPct" does not exist.', 411, $this->source); })()), "html", null, true);
        yield "%\"></div></div>
        </div>
        <div class=\"macro-row\">
          <div class=\"macro-label\">
            <span class=\"macro-name\"><span class=\"macro-dot\" style=\"background:#6366F1\"></span>Lipides</span>
            <span class=\"macro-val\" id=\"macroLip\">";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalLip"]) || array_key_exists("totalLip", $context) ? $context["totalLip"] : (function () { throw new RuntimeError('Variable "totalLip" does not exist.', 416, $this->source); })()), 1, ".", ""), "html", null, true);
        yield "g · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lipPct"]) || array_key_exists("lipPct", $context) ? $context["lipPct"] : (function () { throw new RuntimeError('Variable "lipPct" does not exist.', 416, $this->source); })()), "html", null, true);
        yield "%</span>
          </div>
          <div class=\"macro-track\"><div class=\"macro-fill lip\" id=\"macroLipBar\" style=\"width:";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lipPct"]) || array_key_exists("lipPct", $context) ? $context["lipPct"] : (function () { throw new RuntimeError('Variable "lipPct" does not exist.', 418, $this->source); })()), "html", null, true);
        yield "%\"></div></div>
        </div>
      </div>
    </div>

    <!-- HYDRATATION -->
    <div class=\"card fade d2\">
      <div class=\"card-head\">
        <div class=\"card-title\">💧 Hydratation</div>
        <button class=\"water-reset\" onclick=\"resetWater()\" title=\"Remettre à zéro\">🔄 Reset</button>
      </div>
      <div class=\"card-body\">
        <div class=\"water-tracker\">
          <div class=\"water-info\">
            <div>
              <div class=\"water-amount\" id=\"waterAmount\">0 ml</div>
              <div class=\"water-goal-lbl\">Objectif : ";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["waterGoal"]) || array_key_exists("waterGoal", $context) ? $context["waterGoal"] : (function () { throw new RuntimeError('Variable "waterGoal" does not exist.', 434, $this->source); })()), "html", null, true);
        yield " ml / jour</div>
            </div>
            <div style=\"font-size:28px\" id=\"waterEmoji\">🥤</div>
          </div>
          <div class=\"water-glass-wrap\">
            <div class=\"water-progress-track\">
              <div class=\"water-progress-fill\" id=\"waterBar\" style=\"width:0%\"></div>
            </div>
            <div class=\"water-pct-label\" id=\"waterPct\">0%</div>
          </div>
          <div class=\"water-btns\">
            <button class=\"water-btn\" onclick=\"addWater(150)\">+150ml</button>
            <button class=\"water-btn\" onclick=\"addWater(250)\">+250ml</button>
            <button class=\"water-btn\" onclick=\"addWater(500)\">+500ml</button>
            <button class=\"water-btn\" onclick=\"addWater(750)\">+750ml</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- ═══ EDIT MODAL ═══ -->
<div class=\"modal-overlay\" id=\"editModal\">
  <div class=\"modal\">
    <div class=\"modal-head\">
      <div class=\"modal-title\">✏️ Modifier la consommation</div>
      <button class=\"modal-close\" onclick=\"closeModal('editModal')\">✕</button>
    </div>
    <div class=\"modal-body\">
      <input type=\"hidden\" id=\"editId\">
      <p style=\"font-size:12.5px;color:var(--tx-muted);margin-bottom:14px\">
        Aliment : <strong id=\"editAlimentName\" style=\"color:var(--tx)\"></strong>
        &nbsp;·&nbsp; <span id=\"editCal100Info\" style=\"font-family:var(--font-m);color:var(--pu)\"></span>
      </p>
      <div class=\"form-group\">
        <label>Quantité consommée (g) *</label>
        <span class=\"err-msg\" id=\"err-edit-poids\">⚠ La quantité doit être supérieure à 0.</span>
        <input type=\"number\" id=\"editPoids\" min=\"1\" max=\"5000\" step=\"1\" placeholder=\"Ex : 150\">
      </div>
      <div style=\"background:var(--pu-ghost);border:1.5px solid var(--pu-pale);border-radius:10px;padding:12px 14px;display:flex;align-items:center;justify-content:space-between;margin-top:4px\">
        <span style=\"font-size:12.5px;color:var(--tx-mid)\">Calories calculées</span>
        <span style=\"font-family:var(--font-m);font-size:16px;font-weight:700;color:var(--pu)\" id=\"editCalPreview\">— kcal</span>
      </div>
      <button class=\"btn-primary\" id=\"editSubmitBtn\" onclick=\"submitEdit()\">
        <span>💾</span> Enregistrer
      </button>
    </div>
  </div>
</div>

<!-- ═══ DELETE MODAL ═══ -->
<div class=\"modal-overlay\" id=\"deleteModal\">
  <div class=\"modal\" style=\"max-width:400px\">
    <div class=\"modal-head\" style=\"background:linear-gradient(135deg,#FEF2F2,#FFF)\">
      <div class=\"modal-title\" style=\"color:#DC2626\">🗑 Supprimer l'aliment</div>
      <button class=\"modal-close\" onclick=\"closeModal('deleteModal')\">✕</button>
    </div>
    <div class=\"del-modal-body\">
      <div class=\"del-icon-circle\">🗑</div>
      <div>
        <div style=\"font-family:var(--font-h);font-size:15px;font-weight:700;color:var(--tx);margin-bottom:6px\">Confirmer la suppression</div>
        <div style=\"font-size:13px;color:var(--tx-mid)\">Retirer <strong id=\"deleteAlimentName\" style=\"color:var(--pu)\"></strong> du journal ?</div>
        <div style=\"font-size:11.5px;color:var(--tx-muted);margin-top:5px\">Cette action est irréversible.</div>
      </div>
      <div class=\"del-actions\">
        <button class=\"btn-cancel\" onclick=\"closeModal('deleteModal')\">Annuler</button>
        <button class=\"btn-danger\" id=\"deleteConfirmBtn\" onclick=\"confirmDelete()\">🗑 Supprimer</button>
      </div>
    </div>
  </div>
</div>

<!-- TOAST -->
<div class=\"toast\" id=\"toast\"></div>

<script>
// ═══ CONFIG ═══
const API = {
  supprimer: id => `/nutrition/api/supprimer/\${id}`,
  modifier:  id => `/nutrition/api/modifier/\${id}`,
};
const WATER_KEY  = 'harmony_water_";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 517, $this->source); })()), "html", null, true);
        yield "';
const WATER_GOAL = ";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["waterGoal"]) || array_key_exists("waterGoal", $context) ? $context["waterGoal"] : (function () { throw new RuntimeError('Variable "waterGoal" does not exist.', 518, $this->source); })()), "html", null, true);
        yield ";
const CAL_GOAL   = ";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["calGoal"]) || array_key_exists("calGoal", $context) ? $context["calGoal"] : (function () { throw new RuntimeError('Variable "calGoal" does not exist.', 519, $this->source); })()), "html", null, true);
        yield ";

// ═══ STATE ═══
let _deleteTargetId = null;
let _editCal100     = 0;

// ═══ INIT ═══
document.addEventListener('DOMContentLoaded', () => {
  initWater();
});

// ═══════════════════════════════════════════════════════
// WATER TRACKER (localStorage)
// ═══════════════════════════════════════════════════════
function initWater() {
  renderWater(getWaterMl());
}

function getWaterMl() {
  return parseInt(localStorage.getItem(WATER_KEY) || '0', 10);
}

function addWater(ml) {
  const current = getWaterMl();
  const next = Math.min(current + ml, WATER_GOAL * 2);
  localStorage.setItem(WATER_KEY, next);
  renderWater(next);
  showToast('info', `💧 +\${ml} ml ajouté`);
}

function resetWater() {
  localStorage.setItem(WATER_KEY, 0);
  renderWater(0);
}

function renderWater(ml) {
  const pct = Math.min(Math.round(ml / WATER_GOAL * 100), 100);
  document.getElementById('waterAmount').textContent = ml + ' ml';
  document.getElementById('waterBar').style.width    = pct + '%';
  document.getElementById('waterPct').textContent    = pct + '%';
  document.getElementById('waterEmoji').textContent  =
    pct >= 100 ? '🌊' : pct >= 60 ? '💧' : pct >= 30 ? '🥤' : '🫗';
}

// ═══════════════════════════════════════════════════════
// EDIT CONSOMMATION
// ═══════════════════════════════════════════════════════
function openEditModal(id, poids, nom, cal100) {
  document.getElementById('editId').value              = id;
  document.getElementById('editPoids').value           = poids;
  document.getElementById('editAlimentName').textContent = nom;
  document.getElementById('editCal100Info').textContent  = cal100 + ' kcal / 100 g';
  _editCal100 = cal100;
  updateEditPreview();
  document.getElementById('err-edit-poids').classList.remove('show');
  document.getElementById('editPoids').classList.remove('err');
  openModal('editModal');
}

function updateEditPreview() {
  const poids = parseFloat(document.getElementById('editPoids').value);
  const cal = isNaN(poids) || poids <= 0 ? '—' : Math.round(_editCal100 * poids / 100);
  document.getElementById('editCalPreview').textContent =
    cal === '—' ? '— kcal' : cal + ' kcal';
}

document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('editPoids')?.addEventListener('input', updateEditPreview);
});

async function submitEdit() {
  const id    = parseInt(document.getElementById('editId').value);
  const poids = parseFloat(document.getElementById('editPoids').value);
  const errEl = document.getElementById('err-edit-poids');
  const inp   = document.getElementById('editPoids');

  if (!poids || poids <= 0) {
    errEl.classList.add('show'); inp.classList.add('err'); return;
  }
  errEl.classList.remove('show'); inp.classList.remove('err');

  const btn = document.getElementById('editSubmitBtn');
  btn.disabled = true; btn.innerHTML = '⏳ Enregistrement...';

  try {
    const res  = await fetch(API.modifier(id), {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ poids_grammes: poids }),
    });
    const data = await res.json();
    if (data.success) {
      showToast('success', '✏️ Consommation modifiée !');
      updateMacros(data);
      closeModal('editModal');
      setTimeout(() => location.reload(), 600);
    } else {
      const msg = data.errors?.poids || 'Erreur.';
      errEl.textContent = '⚠ ' + msg; errEl.classList.add('show'); inp.classList.add('err');
    }
  } catch {
    showToast('error', '⚠ Erreur réseau.');
  } finally {
    btn.disabled = false; btn.innerHTML = '<span>💾</span> Enregistrer';
  }
}

// ═══════════════════════════════════════════════════════
// DELETE CONSOMMATION
// ═══════════════════════════════════════════════════════
function openDeleteModal(id, nom) {
  _deleteTargetId = id;
  document.getElementById('deleteAlimentName').textContent = nom;
  openModal('deleteModal');
}

async function confirmDelete() {
  if (!_deleteTargetId) return;
  const btn = document.getElementById('deleteConfirmBtn');
  btn.innerHTML = '⏳...'; btn.disabled = true;

  try {
    const res  = await fetch(API.supprimer(_deleteTargetId), { method: 'POST' });
    const data = await res.json();
    if (data.success) {
      closeModal('deleteModal');
      showToast('error', '🗑 Aliment retiré du journal');
      updateMacros(data);
      setTimeout(() => location.reload(), 500);
    } else {
      showToast('error', '⚠ Erreur lors de la suppression.');
    }
  } catch {
    showToast('error', '⚠ Erreur réseau.');
  } finally {
    btn.innerHTML = '🗑 Supprimer'; btn.disabled = false;
    _deleteTargetId = null;
  }
}

// ═══════════════════════════════════════════════════════
// UPDATE MACROS IN HERO + SIDEBAR
// ═══════════════════════════════════════════════════════
function updateMacros(data) {
  if (!data) return;
  const cal  = data.totalCal  ?? 0;
  const prot = data.totalProt ?? 0;
  const gluc = data.totalGluc ?? 0;
  const lip  = data.totalLip  ?? 0;

  // Hero
  document.getElementById('heroTotalCal').textContent  = Math.round(cal);
  document.getElementById('heroTotalProt').textContent = prot.toFixed(1);
  document.getElementById('heroTotalGluc').textContent = gluc.toFixed(1);
  document.getElementById('heroTotalLip').textContent  = lip.toFixed(1);
  const pct = Math.min(Math.round(cal / CAL_GOAL * 100), 100);
  const bar = document.getElementById('heroCalBar');
  bar.style.width = pct + '%';
  bar.className   = 'cal-goal-fill' + (cal > CAL_GOAL ? ' over' : '');

  // Sidebar summary
  document.getElementById('sideTotalCal').textContent  = Math.round(cal) + ' kcal';
  document.getElementById('sideProt').textContent      = prot.toFixed(1) + ' g';
  document.getElementById('sideGluc').textContent      = gluc.toFixed(1) + ' g';
  document.getElementById('sideLip').textContent       = lip.toFixed(1) + ' g';

  const restant = CAL_GOAL - cal;
  const rEl = document.getElementById('sideRestant');
  rEl.textContent = restant < 0
    ? '+' + Math.abs(Math.round(restant)) + ' kcal dépassé'
    : Math.round(restant) + ' kcal restants';
  rEl.className = 'summary-val ' + (restant < 0 ? 'red' : (restant < CAL_GOAL * 0.15 ? 'orange' : 'green'));

  // Macros bars
  const total = prot + gluc + lip || 1;
  const pp = Math.min(Math.round(prot / total * 100), 100);
  const gp = Math.min(Math.round(gluc / total * 100), 100);
  const lp = Math.min(Math.round(lip  / total * 100), 100);
  document.getElementById('macroProt').textContent    = prot.toFixed(1) + 'g · ' + pp + '%';
  document.getElementById('macroGluc').textContent    = gluc.toFixed(1) + 'g · ' + gp + '%';
  document.getElementById('macroLip').textContent     = lip.toFixed(1)  + 'g · ' + lp + '%';
  document.getElementById('macroProtBar').style.width = pp + '%';
  document.getElementById('macroGlucBar').style.width = gp + '%';
  document.getElementById('macroLipBar').style.width  = lp + '%';
}

// ═══════════════════════════════════════════════════════
// MODAL HELPERS
// ═══════════════════════════════════════════════════════
function openModal(id)  { document.getElementById(id).classList.add('open'); }
function closeModal(id) { document.getElementById(id).classList.remove('open'); }

// Click outside to close
document.querySelectorAll('.modal-overlay').forEach(o => {
  o.addEventListener('click', e => { if (e.target === o) o.classList.remove('open'); });
});

// ═══════════════════════════════════════════════════════
// TOAST
// ═══════════════════════════════════════════════════════
function showToast(type, msg) {
  const t = document.getElementById('toast');
  t.className = 'toast ' + type;
  t.textContent = msg;
  t.classList.add('show');
  clearTimeout(t._to);
  t._to = setTimeout(() => t.classList.remove('show'), 3200);
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
        return "nutrition/index.html.twig";
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
        return array (  907 => 519,  903 => 518,  899 => 517,  813 => 434,  794 => 418,  787 => 416,  779 => 411,  772 => 409,  764 => 404,  757 => 402,  751 => 398,  748 => 397,  745 => 396,  742 => 395,  739 => 394,  736 => 393,  733 => 392,  731 => 391,  719 => 382,  712 => 378,  705 => 374,  699 => 370,  693 => 368,  687 => 366,  685 => 365,  681 => 364,  674 => 360,  666 => 355,  662 => 354,  654 => 349,  642 => 339,  625 => 335,  622 => 334,  610 => 330,  599 => 328,  591 => 325,  585 => 322,  581 => 321,  577 => 320,  573 => 319,  568 => 317,  563 => 315,  558 => 314,  553 => 313,  547 => 310,  543 => 309,  538 => 308,  536 => 307,  532 => 306,  523 => 300,  518 => 298,  514 => 297,  507 => 293,  500 => 291,  495 => 289,  489 => 288,  486 => 287,  480 => 286,  477 => 285,  472 => 284,  469 => 283,  466 => 281,  463 => 280,  460 => 279,  443 => 278,  440 => 277,  438 => 271,  422 => 258,  415 => 254,  408 => 250,  400 => 245,  395 => 243,  390 => 241,  386 => 240,  374 => 231,  370 => 230,  367 => 229,  363 => 228,  355 => 227,  350 => 225,  338 => 215,  336 => 214,  334 => 213,  332 => 212,  330 => 211,  328 => 210,  325 => 208,  323 => 207,  310 => 206,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nutrition — Harmony{% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=JetBrains+Mono:wght@400;600&display=swap\" rel=\"stylesheet\">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}

:root{
  --pu:#6A5ACD;--pu-dk:#4B3B9E;--pu-lt:#8B7FD4;--pu-pale:#EDE8FA;--pu-ghost:#F7F5FD;--pu-deep:#2D2060;
  --tx:#1C1733;--tx-mid:#4A4570;--tx-muted:#9590B8;
  --border:rgba(106,90,205,.12);--white:#FFFFFF;--shadow:0 8px 32px rgba(106,90,205,.14);
  --green:#22C55E;--red:#EF4444;--orange:#F59E0B;
  --card-r:18px;
  --font-h:'Syne',sans-serif;--font-b:'DM Sans',sans-serif;--font-m:'JetBrains Mono',monospace;
  /* Meal colours */
  --breakfast:#F59E0B;--breakfast-pale:#FEF3C7;--breakfast-bg:#FFFBEB;
  --lunch:#10B981;--lunch-pale:#D1FAE5;--lunch-bg:#ECFDF5;
  --dinner:#6366F1;--dinner-pale:#E0E7FF;--dinner-bg:#EEF2FF;
  --snack:#F43F5E;--snack-pale:#FFE4E6;--snack-bg:#FFF1F2;
}

html,body{font-family:var(--font-b);background:var(--pu-ghost);color:var(--tx);overflow-x:hidden}

/* ── HERO ── */
.hero{
  background:linear-gradient(135deg,var(--pu-deep) 0%,#3D2A8A 50%,#5B45C0 100%);
  padding:28px 44px 32px;position:relative;overflow:hidden;
}
.hero::before{
  content:'';position:absolute;inset:0;
  background:url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\");
}
.hero-inner{position:relative;z-index:1;max-width:1280px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;gap:32px;flex-wrap:wrap}
.hero-left h1{font-family:var(--font-h);font-size:28px;font-weight:800;color:white;letter-spacing:-.3px;margin-bottom:4px;text-shadow:0 2px 12px rgba(0,0,0,.3)}
.hero-left p{font-size:13.5px;color:rgba(255,255,255,.65);font-weight:300}
/* Date navigator */
.date-nav{display:flex;align-items:center;gap:10px;margin-top:16px;background:rgba(255,255,255,.1);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,.2);border-radius:14px;padding:8px 14px;width:fit-content}
.date-nav-btn{width:32px;height:32px;border-radius:8px;border:none;background:rgba(255,255,255,.15);color:white;cursor:pointer;display:grid;place-items:center;font-size:14px;transition:background .15s}
.date-nav-btn:hover{background:rgba(255,255,255,.3)}
.date-nav-btn:disabled{opacity:.3;cursor:not-allowed}
.date-display{font-family:var(--font-h);font-size:14px;font-weight:700;color:white;min-width:160px;text-align:center}
.today-badge{font-size:10px;background:rgba(255,255,255,.2);color:white;padding:2px 8px;border-radius:10px;font-weight:600;margin-left:8px}
/* Hero stats */
.hero-stats{display:flex;gap:12px;flex-wrap:wrap}
.hstat{background:rgba(255,255,255,.1);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,.2);border-radius:14px;padding:14px 18px;text-align:center;min-width:90px;position:relative}
.hstat-val{font-family:var(--font-h);font-size:22px;font-weight:800;color:white}
.hstat-lbl{font-size:10px;color:rgba(255,255,255,.65);margin-top:2px;text-transform:uppercase;letter-spacing:.5px}
/* Calorie ring in hero */
.cal-ring-wrap{position:relative;width:90px;height:90px}
.cal-ring-wrap svg{transform:rotate(-90deg)}
.cal-ring-center{position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center}
.cal-ring-val{font-family:var(--font-h);font-size:16px;font-weight:800;color:white;line-height:1}
.cal-ring-sub{font-size:9px;color:rgba(255,255,255,.6);text-transform:uppercase;margin-top:1px}

/* ── LAYOUT ── */
.page{max-width:1280px;margin:0 auto;padding:28px 36px 80px;display:grid;grid-template-columns:1fr 320px;gap:24px;align-items:start}
.main-col{display:flex;flex-direction:column;gap:18px}
.side-col{display:flex;flex-direction:column;gap:16px;position:sticky;top:78px}

/* ── MEAL CARDS ── */
.meal-card{background:var(--white);border:1px solid var(--border);border-radius:var(--card-r);overflow:hidden;transition:box-shadow .2s}
.meal-card:hover{box-shadow:var(--shadow)}
.meal-header{padding:14px 20px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--border);position:relative}
.meal-header::before{content:'';position:absolute;left:0;top:0;bottom:0;width:4px;border-radius:0}
.meal-header.breakfast::before{background:var(--breakfast)}
.meal-header.lunch::before{background:var(--lunch)}
.meal-header.dinner::before{background:var(--dinner)}
.meal-header.snack::before{background:var(--snack)}
.meal-title-wrap{display:flex;align-items:center;gap:10px}
.meal-icon-wrap{width:38px;height:38px;border-radius:11px;display:grid;place-items:center;font-size:20px;flex-shrink:0}
.meal-icon-wrap.breakfast{background:var(--breakfast-pale)}
.meal-icon-wrap.lunch{background:var(--lunch-pale)}
.meal-icon-wrap.dinner{background:var(--dinner-pale)}
.meal-icon-wrap.snack{background:var(--snack-pale)}
.meal-name{font-family:var(--font-h);font-size:14px;font-weight:700;color:var(--tx)}
.meal-cal-badge{font-size:11.5px;font-weight:600;color:var(--tx-muted);background:var(--pu-ghost);padding:3px 10px;border-radius:10px;font-family:var(--font-m)}
.meal-actions{display:flex;align-items:center;gap:8px}
.btn-add-food{display:inline-flex;align-items:center;gap:5px;padding:7px 14px;border-radius:9px;border:1.5px solid var(--border);background:var(--white);font-family:var(--font-b);font-size:12px;font-weight:600;color:var(--pu);cursor:pointer;text-decoration:none;transition:all .15s}
.btn-add-food:hover{background:var(--pu);color:white;border-color:var(--pu)}
.meal-body{padding:8px 16px 12px}

/* ── FOOD ITEMS ── */
.food-item{display:flex;align-items:center;gap:12px;padding:10px 10px;border-radius:11px;margin-bottom:6px;transition:background .15s;position:relative}
.food-item:last-child{margin-bottom:0}
.food-item:hover{background:var(--pu-ghost)}
.food-dot{width:8px;height:8px;border-radius:50%;flex-shrink:0}
.food-dot.breakfast{background:var(--breakfast)}
.food-dot.lunch{background:var(--lunch)}
.food-dot.dinner{background:var(--dinner)}
.food-dot.snack{background:var(--snack)}
.food-info{flex:1;min-width:0}
.food-name{font-family:var(--font-h);font-size:13px;font-weight:700;color:var(--tx);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.food-meta{display:flex;gap:10px;margin-top:3px;flex-wrap:wrap}
.food-tag{font-size:11px;color:var(--tx-muted);display:flex;align-items:center;gap:3px}
.food-cal{font-family:var(--font-m);font-size:13px;font-weight:600;color:var(--pu);flex-shrink:0}
.food-actions{display:flex;gap:5px;flex-shrink:0;opacity:0;transition:opacity .15s}
.food-item:hover .food-actions{opacity:1}
.btn-icon-sm{width:28px;height:28px;border-radius:7px;border:1px solid var(--border);background:var(--white);cursor:pointer;display:grid;place-items:center;font-size:12px;transition:all .15s}
.btn-icon-sm.edit:hover{border-color:var(--pu);background:var(--pu-pale)}
.btn-icon-sm.del:hover{border-color:var(--red);background:#FEE2E2}

/* Empty meal */
.meal-empty{text-align:center;padding:20px 10px;color:var(--tx-muted)}
.meal-empty-icon{font-size:24px;opacity:.4;margin-bottom:5px}
.meal-empty-text{font-size:12px}

/* ── SIDEBAR ── */
.card{background:var(--white);border:1px solid var(--border);border-radius:var(--card-r);overflow:hidden}
.card-head{padding:14px 18px 12px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between}
.card-title{font-family:var(--font-h);font-size:14px;font-weight:700;color:var(--tx);display:flex;align-items:center;gap:7px}
.card-body{padding:16px 18px}

/* Macro bars */
.macro-row{margin-bottom:12px}
.macro-row:last-child{margin-bottom:0}
.macro-label{display:flex;justify-content:space-between;align-items:center;margin-bottom:5px}
.macro-name{font-size:12px;font-weight:600;color:var(--tx-mid);display:flex;align-items:center;gap:5px}
.macro-dot{width:7px;height:7px;border-radius:50%;flex-shrink:0}
.macro-val{font-family:var(--font-m);font-size:11px;color:var(--tx-muted)}
.macro-track{height:7px;background:var(--pu-ghost);border-radius:6px;overflow:hidden}
.macro-fill{height:100%;border-radius:6px;transition:width .6s ease}
.macro-fill.prot{background:linear-gradient(90deg,#F59E0B,#EF6C00)}
.macro-fill.gluc{background:linear-gradient(90deg,#10B981,#059669)}
.macro-fill.lip{background:linear-gradient(90deg,#6366F1,#4338CA)}

/* Water tracker */
.water-tracker{display:flex;flex-direction:column;gap:12px}
.water-visual{display:flex;align-items:flex-end;gap:6px}
.water-glass-wrap{position:relative;flex:1}
.water-progress-track{height:14px;background:rgba(59,130,246,.1);border-radius:7px;overflow:hidden;border:1.5px solid rgba(59,130,246,.2)}
.water-progress-fill{height:100%;background:linear-gradient(90deg,#38BDF8,#0EA5E9);border-radius:6px;transition:width .6s ease}
.water-pct-label{font-family:var(--font-m);font-size:12px;font-weight:600;color:#0369A1;margin-top:5px}
.water-btns{display:grid;grid-template-columns:repeat(4,1fr);gap:6px;margin-top:2px}
.water-btn{padding:7px 4px;border-radius:8px;border:1.5px solid rgba(59,130,246,.25);background:rgba(59,130,246,.06);font-family:var(--font-b);font-size:11px;font-weight:600;color:#0369A1;cursor:pointer;transition:all .15s;text-align:center}
.water-btn:hover{background:#0369A1;color:white;border-color:#0369A1}
.water-info{display:flex;justify-content:space-between;align-items:center}
.water-amount{font-family:var(--font-h);font-size:18px;font-weight:800;color:#0369A1}
.water-goal-lbl{font-size:11px;color:var(--tx-muted)}
.water-reset{padding:4px 10px;border-radius:7px;border:1px solid rgba(59,130,246,.2);background:transparent;font-size:10.5px;color:#0369A1;cursor:pointer;transition:all .15s}
.water-reset:hover{background:rgba(239,68,68,.1);color:var(--red);border-color:rgba(239,68,68,.2)}

/* Summary card */
.summary-row{display:flex;justify-content:space-between;align-items:center;padding:9px 0;border-bottom:1px solid var(--border)}
.summary-row:last-child{border-bottom:none}
.summary-lbl{font-size:12.5px;color:var(--tx-mid);font-weight:500}
.summary-val{font-family:var(--font-m);font-size:13px;font-weight:600;color:var(--tx)}
.summary-val.green{color:var(--green)}
.summary-val.orange{color:var(--orange)}
.summary-val.red{color:var(--red)}

/* ── MODALS ── */
.modal-overlay{position:fixed;inset:0;background:rgba(20,15,50,.6);backdrop-filter:blur(6px);z-index:1000;display:none;align-items:center;justify-content:center;padding:20px}
.modal-overlay.open{display:flex}
.modal{background:var(--white);border-radius:20px;width:100%;max-width:480px;overflow:hidden;animation:slideUp .28s ease}
@keyframes slideUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
.modal-head{padding:18px 22px 14px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between}
.modal-title{font-family:var(--font-h);font-size:15px;font-weight:700;color:var(--tx)}
.modal-close{width:28px;height:28px;border-radius:7px;border:none;background:var(--pu-ghost);cursor:pointer;font-size:14px;display:grid;place-items:center;color:var(--tx-muted);transition:background .15s}
.modal-close:hover{background:var(--pu-pale);color:var(--pu)}
.modal-body{padding:22px}
.form-group{display:flex;flex-direction:column;gap:4px;margin-bottom:14px}
.form-group:last-of-type{margin-bottom:0}
label{font-size:11.5px;font-weight:600;color:var(--tx-mid);text-transform:uppercase;letter-spacing:.4px}
input,select{padding:10px 13px;border:1.5px solid var(--border);border-radius:9px;font-family:var(--font-b);font-size:13.5px;color:var(--tx);background:var(--white);outline:none;transition:border-color .15s;width:100%}
input:focus,select:focus{border-color:var(--pu)}
input.err,select.err{border-color:var(--red)}
.err-msg{font-size:11px;color:var(--red);font-weight:500;display:none;margin-bottom:2px}
.err-msg.show{display:block}
.btn-primary{width:100%;padding:12px;border-radius:10px;border:none;background:var(--pu);color:white;font-family:var(--font-h);font-size:14px;font-weight:700;cursor:pointer;transition:background .15s,transform .1s;display:flex;align-items:center;justify-content:center;gap:8px;margin-top:16px}
.btn-primary:hover{background:var(--pu-dk);transform:translateY(-1px)}
.btn-primary:disabled{background:var(--tx-muted);cursor:not-allowed;transform:none}
/* Delete modal */
.del-modal-body{display:flex;flex-direction:column;align-items:center;gap:16px;text-align:center;padding:28px 22px}
.del-icon-circle{width:60px;height:60px;border-radius:50%;background:#FEE2E2;display:grid;place-items:center;font-size:28px}
.del-actions{display:flex;gap:10px;width:100%;margin-top:6px}
.btn-cancel{flex:1;padding:11px;border-radius:10px;border:1.5px solid var(--border);background:var(--white);font-family:var(--font-b);font-size:13px;font-weight:600;color:var(--tx-mid);cursor:pointer;transition:background .15s}
.btn-cancel:hover{background:var(--pu-ghost)}
.btn-danger{flex:1;padding:11px;border-radius:10px;border:none;background:#DC2626;font-family:var(--font-h);font-size:13px;font-weight:700;color:white;cursor:pointer;transition:background .15s;display:flex;align-items:center;justify-content:center;gap:6px}
.btn-danger:hover{background:#B91C1C}

/* ── TOAST ── */
.toast{position:fixed;bottom:26px;right:26px;z-index:2000;padding:12px 18px;border-radius:11px;font-family:var(--font-b);font-size:13px;font-weight:500;display:flex;align-items:center;gap:9px;transform:translateY(80px);opacity:0;transition:transform .3s,opacity .3s;max-width:340px}
.toast.show{transform:translateY(0);opacity:1}
.toast.success{background:#ECFDF5;color:#065F46;border:1px solid #A7F3D0}
.toast.error{background:#FEF2F2;color:#991B1B;border:1px solid #FCA5A5}
.toast.info{background:var(--pu-pale);color:var(--pu-dk);border:1px solid rgba(106,90,205,.25)}

/* ── ANIM ── */
@keyframes fadeUp{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.fade{animation:fadeUp .35s ease both}
.d1{animation-delay:.06s}.d2{animation-delay:.12s}.d3{animation-delay:.18s}.d4{animation-delay:.22s}

/* ── CAL PROGRESS HERO ── */
.cal-goal-bar{height:6px;background:rgba(255,255,255,.2);border-radius:3px;overflow:hidden;margin-top:10px}
.cal-goal-fill{height:100%;background:linear-gradient(90deg,#A3E635,#22C55E);border-radius:3px;transition:width .8s ease}
.cal-goal-fill.over{background:linear-gradient(90deg,#FCA5A5,#EF4444)}

/* ── RESPONSIVE ── */
@media(max-width:1024px){.page{grid-template-columns:1fr;padding:20px 18px 60px}.side-col{position:static}}
@media(max-width:640px){.topbar{padding:0 14px}.nav-links{display:none}.hero{padding:20px 18px 24px}.hero-inner{flex-direction:column}.hero-stats{flex-wrap:wrap}}
</style>
{% endblock %}

{% block body %}
{% include '_planning_topbar.html.twig' %}

{# ── Compute macro totals for sidebar ── #}
{% set totalProtSide = totalProt %}
{% set totalGlucSide = totalGluc %}
{% set totalLipSide  = totalLip %}
{% set calRaw = (totalCal / calGoal * 100)|round %}
{% set calPct = calRaw < 0 ? 0 : (calRaw > 100 ? 100 : calRaw) %}

<!-- ═══ HERO ═══ -->
<div class=\"hero\">
  <div class=\"hero-inner\">
    <div class=\"hero-left\">
      <h1>🥗 Journal Alimentaire</h1>
      <p>Suivez vos apports nutritionnels au quotidien.</p>

      <!-- Date navigator -->
      <div class=\"date-nav\">
        <a href=\"{{ path('nutrition', {'date': prevDate}) }}\" class=\"date-nav-btn\">◀</a>
        <div class=\"date-display\">
          {{ dateObj|date('d') }} {{ dateObj|date('F')|capitalize }} {{ dateObj|date('Y') }}
          {% if isToday %}<span class=\"today-badge\">Aujourd'hui</span>{% endif %}
        </div>
        <a href=\"{{ path('nutrition', {'date': nextDate}) }}\"
           class=\"date-nav-btn {{ date >= 'now'|date('Y-m-d') ? 'disabled' : '' }}\">▶</a>
      </div>
    </div>

    <!-- Hero stats -->
    <div class=\"hero-stats\">
      <!-- Calorie ring -->
      <div class=\"hstat\" style=\"min-width:110px\">
        <div style=\"display:flex;flex-direction:column;align-items:center;gap:4px\">
          <div class=\"hstat-val\" id=\"heroTotalCal\">{{ totalCal|number_format(0, '.', '') }}</div>
          <div class=\"hstat-lbl\">/ {{ calGoal }} kcal</div>
          <div class=\"cal-goal-bar\" style=\"width:80px\">
            <div class=\"cal-goal-fill {{ totalCal > calGoal ? 'over' : '' }}\"
                 id=\"heroCalBar\"
                 style=\"width:{{ calPct }}%\"></div>
          </div>
        </div>
      </div>
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"heroTotalProt\">{{ totalProt|number_format(1, '.', '') }}</div>
        <div class=\"hstat-lbl\">Protéines g</div>
      </div>
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"heroTotalGluc\">{{ totalGluc|number_format(1, '.', '') }}</div>
        <div class=\"hstat-lbl\">Glucides g</div>
      </div>
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"heroTotalLip\">{{ totalLip|number_format(1, '.', '') }}</div>
        <div class=\"hstat-lbl\">Lipides g</div>
      </div>
    </div>
  </div>
</div>

<!-- ═══ PAGE ═══ -->
<div class=\"page\">

  <!-- ══ MAIN: Meal sections ══ -->
  <div class=\"main-col\">

    {% set mealClasses = {
      'Petit-déjeuner': 'breakfast',
      'Déjeuner': 'lunch',
      'Dîner': 'dinner',
      'Snack': 'snack'
    } %}

    {% for repasName, items in grouped %}
      {% set cls = mealClasses[repasName] ?? 'lunch' %}
      {% set mealInfo = repasTypes[repasName] ?? {'icon': '🍽️', 'color': '#6A5ACD'} %}

      {# Compute meal calories #}
      {% set mealCal = 0 %}
      {% for c in items %}
        {% set mealCal = mealCal + c.calories %}
      {% endfor %}

      <div class=\"meal-card fade d{{ loop.index }}\" id=\"meal-{{ cls }}\">
        <div class=\"meal-header {{ cls }}\">
          <div class=\"meal-title-wrap\">
            <div class=\"meal-icon-wrap {{ cls }}\">{{ mealInfo.icon }}</div>
            <div>
              <div class=\"meal-name\">{{ repasName }}</div>
            </div>
          </div>
          <div class=\"meal-actions\">
            <span class=\"meal-cal-badge\" id=\"mealCal-{{ cls }}\">
              🔥 {{ mealCal|number_format(0, '.', '') }} kcal
            </span>
            <a href=\"{{ path('nutrition_ajouter', {'repas': repasName, 'date': date}) }}\"
               class=\"btn-add-food\">
              ＋ Ajouter
            </a>
          </div>
        </div>
        <div class=\"meal-body\" id=\"mealBody-{{ cls }}\">
          {% if items is empty %}
            <div class=\"meal-empty\" id=\"mealEmpty-{{ cls }}\">
              <div class=\"meal-empty-icon\">{{ mealInfo.icon }}</div>
              <div class=\"meal-empty-text\">Aucun aliment enregistré — <a href=\"{{ path('nutrition_ajouter', {'repas': repasName, 'date': date}) }}\" style=\"color:var(--pu);text-decoration:none;font-weight:600\">Ajouter</a></div>
            </div>
          {% else %}
            {% for c in items %}
              <div class=\"food-item\" id=\"foodItem-{{ c.id }}\">
                <div class=\"food-dot {{ cls }}\"></div>
                <div class=\"food-info\">
                  <div class=\"food-name\">{{ c.aliment.nomAliment }}</div>
                  <div class=\"food-meta\">
                    <span class=\"food-tag\">⚖️ {{ c.poidsGrammes }} g</span>
                    <span class=\"food-tag\">🥩 {{ c.proteines|number_format(1,'.','') }}g prot</span>
                    <span class=\"food-tag\">🌾 {{ c.glucides|number_format(1,'.','') }}g gluc</span>
                    <span class=\"food-tag\">💧 {{ c.lipides|number_format(1,'.','') }}g lip</span>
                  </div>
                </div>
                <span class=\"food-cal\" id=\"foodCal-{{ c.id }}\">{{ c.calories|number_format(0,'.','') }} kcal</span>
                <div class=\"food-actions\">
                  <button class=\"btn-icon-sm edit\" title=\"Modifier\"
                          onclick=\"openEditModal({{ c.id }}, {{ c.poidsGrammes }}, '{{ c.aliment.nomAliment|e('html_attr') }}', {{ c.aliment.caloriesPour100g }})\">✏️</button>
                  <button class=\"btn-icon-sm del\" title=\"Supprimer\"
                          onclick=\"openDeleteModal({{ c.id }}, '{{ c.aliment.nomAliment|e('html_attr') }}')\">🗑</button>
                </div>
              </div>
            {% endfor %}
          {% endif %}
        </div>
      </div>

    {% endfor %}

  </div>

  <!-- ══ SIDE COLUMN ══ -->
  <div class=\"side-col\">

    <!-- RÉSUMÉ DU JOUR -->
    <div class=\"card fade\">
      <div class=\"card-head\">
        <div class=\"card-title\">📊 Résumé du jour</div>
        <span style=\"font-size:11px;color:var(--tx-muted)\">{{ date|date('d/m/Y') }}</span>
      </div>
      <div class=\"card-body\" style=\"padding:12px 16px\">
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">🔥 Calories</span>
          <span class=\"summary-val {{ totalCal > calGoal ? 'red' : (totalCal > calGoal * 0.85 ? 'orange' : 'green') }}\" id=\"sideTotalCal\">
            {{ totalCal|number_format(0,'.','') }} kcal
          </span>
        </div>
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">🎯 Objectif</span>
          <span class=\"summary-val\">{{ calGoal }} kcal</span>
        </div>
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">📉 Restant</span>
          <span class=\"summary-val {{ (calGoal - totalCal) < 0 ? 'red' : 'green' }}\" id=\"sideRestant\">
            {% if totalCal > calGoal %}
              +{{ (totalCal - calGoal)|number_format(0,'.','') }} kcal dépassé
            {% else %}
              {{ (calGoal - totalCal)|number_format(0,'.','') }} kcal restants
            {% endif %}
          </span>
        </div>
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">🥩 Protéines</span>
          <span class=\"summary-val\" id=\"sideProt\">{{ totalProt|number_format(1,'.','') }} g</span>
        </div>
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">🌾 Glucides</span>
          <span class=\"summary-val\" id=\"sideGluc\">{{ totalGluc|number_format(1,'.','') }} g</span>
        </div>
        <div class=\"summary-row\">
          <span class=\"summary-lbl\">💧 Lipides</span>
          <span class=\"summary-val\" id=\"sideLip\">{{ totalLip|number_format(1,'.','') }} g</span>
        </div>
      </div>
    </div>

    <!-- MACROS BREAKDOWN -->
    <div class=\"card fade d1\">
      <div class=\"card-head\"><div class=\"card-title\">📈 Répartition Macros</div></div>
      <div class=\"card-body\">
        {% set macroTotal = totalProt + totalGluc + totalLip %}
        {% set protRaw = macroTotal > 0 ? (totalProt / macroTotal * 100)|round : 0 %}
        {% set glucRaw = macroTotal > 0 ? (totalGluc / macroTotal * 100)|round : 0 %}
        {% set lipRaw  = macroTotal > 0 ? (totalLip  / macroTotal * 100)|round : 0 %}
        {% set protPct = protRaw > 100 ? 100 : protRaw %}
        {% set glucPct = glucRaw > 100 ? 100 : glucRaw %}
        {% set lipPct  = lipRaw  > 100 ? 100 : lipRaw %}

        <div class=\"macro-row\">
          <div class=\"macro-label\">
            <span class=\"macro-name\"><span class=\"macro-dot\" style=\"background:#F59E0B\"></span>Protéines</span>
            <span class=\"macro-val\" id=\"macroProt\">{{ totalProt|number_format(1,'.','') }}g · {{ protPct }}%</span>
          </div>
          <div class=\"macro-track\"><div class=\"macro-fill prot\" id=\"macroProtBar\" style=\"width:{{ protPct }}%\"></div></div>
        </div>
        <div class=\"macro-row\">
          <div class=\"macro-label\">
            <span class=\"macro-name\"><span class=\"macro-dot\" style=\"background:#10B981\"></span>Glucides</span>
            <span class=\"macro-val\" id=\"macroGluc\">{{ totalGluc|number_format(1,'.','') }}g · {{ glucPct }}%</span>
          </div>
          <div class=\"macro-track\"><div class=\"macro-fill gluc\" id=\"macroGlucBar\" style=\"width:{{ glucPct }}%\"></div></div>
        </div>
        <div class=\"macro-row\">
          <div class=\"macro-label\">
            <span class=\"macro-name\"><span class=\"macro-dot\" style=\"background:#6366F1\"></span>Lipides</span>
            <span class=\"macro-val\" id=\"macroLip\">{{ totalLip|number_format(1,'.','') }}g · {{ lipPct }}%</span>
          </div>
          <div class=\"macro-track\"><div class=\"macro-fill lip\" id=\"macroLipBar\" style=\"width:{{ lipPct }}%\"></div></div>
        </div>
      </div>
    </div>

    <!-- HYDRATATION -->
    <div class=\"card fade d2\">
      <div class=\"card-head\">
        <div class=\"card-title\">💧 Hydratation</div>
        <button class=\"water-reset\" onclick=\"resetWater()\" title=\"Remettre à zéro\">🔄 Reset</button>
      </div>
      <div class=\"card-body\">
        <div class=\"water-tracker\">
          <div class=\"water-info\">
            <div>
              <div class=\"water-amount\" id=\"waterAmount\">0 ml</div>
              <div class=\"water-goal-lbl\">Objectif : {{ waterGoal }} ml / jour</div>
            </div>
            <div style=\"font-size:28px\" id=\"waterEmoji\">🥤</div>
          </div>
          <div class=\"water-glass-wrap\">
            <div class=\"water-progress-track\">
              <div class=\"water-progress-fill\" id=\"waterBar\" style=\"width:0%\"></div>
            </div>
            <div class=\"water-pct-label\" id=\"waterPct\">0%</div>
          </div>
          <div class=\"water-btns\">
            <button class=\"water-btn\" onclick=\"addWater(150)\">+150ml</button>
            <button class=\"water-btn\" onclick=\"addWater(250)\">+250ml</button>
            <button class=\"water-btn\" onclick=\"addWater(500)\">+500ml</button>
            <button class=\"water-btn\" onclick=\"addWater(750)\">+750ml</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- ═══ EDIT MODAL ═══ -->
<div class=\"modal-overlay\" id=\"editModal\">
  <div class=\"modal\">
    <div class=\"modal-head\">
      <div class=\"modal-title\">✏️ Modifier la consommation</div>
      <button class=\"modal-close\" onclick=\"closeModal('editModal')\">✕</button>
    </div>
    <div class=\"modal-body\">
      <input type=\"hidden\" id=\"editId\">
      <p style=\"font-size:12.5px;color:var(--tx-muted);margin-bottom:14px\">
        Aliment : <strong id=\"editAlimentName\" style=\"color:var(--tx)\"></strong>
        &nbsp;·&nbsp; <span id=\"editCal100Info\" style=\"font-family:var(--font-m);color:var(--pu)\"></span>
      </p>
      <div class=\"form-group\">
        <label>Quantité consommée (g) *</label>
        <span class=\"err-msg\" id=\"err-edit-poids\">⚠ La quantité doit être supérieure à 0.</span>
        <input type=\"number\" id=\"editPoids\" min=\"1\" max=\"5000\" step=\"1\" placeholder=\"Ex : 150\">
      </div>
      <div style=\"background:var(--pu-ghost);border:1.5px solid var(--pu-pale);border-radius:10px;padding:12px 14px;display:flex;align-items:center;justify-content:space-between;margin-top:4px\">
        <span style=\"font-size:12.5px;color:var(--tx-mid)\">Calories calculées</span>
        <span style=\"font-family:var(--font-m);font-size:16px;font-weight:700;color:var(--pu)\" id=\"editCalPreview\">— kcal</span>
      </div>
      <button class=\"btn-primary\" id=\"editSubmitBtn\" onclick=\"submitEdit()\">
        <span>💾</span> Enregistrer
      </button>
    </div>
  </div>
</div>

<!-- ═══ DELETE MODAL ═══ -->
<div class=\"modal-overlay\" id=\"deleteModal\">
  <div class=\"modal\" style=\"max-width:400px\">
    <div class=\"modal-head\" style=\"background:linear-gradient(135deg,#FEF2F2,#FFF)\">
      <div class=\"modal-title\" style=\"color:#DC2626\">🗑 Supprimer l'aliment</div>
      <button class=\"modal-close\" onclick=\"closeModal('deleteModal')\">✕</button>
    </div>
    <div class=\"del-modal-body\">
      <div class=\"del-icon-circle\">🗑</div>
      <div>
        <div style=\"font-family:var(--font-h);font-size:15px;font-weight:700;color:var(--tx);margin-bottom:6px\">Confirmer la suppression</div>
        <div style=\"font-size:13px;color:var(--tx-mid)\">Retirer <strong id=\"deleteAlimentName\" style=\"color:var(--pu)\"></strong> du journal ?</div>
        <div style=\"font-size:11.5px;color:var(--tx-muted);margin-top:5px\">Cette action est irréversible.</div>
      </div>
      <div class=\"del-actions\">
        <button class=\"btn-cancel\" onclick=\"closeModal('deleteModal')\">Annuler</button>
        <button class=\"btn-danger\" id=\"deleteConfirmBtn\" onclick=\"confirmDelete()\">🗑 Supprimer</button>
      </div>
    </div>
  </div>
</div>

<!-- TOAST -->
<div class=\"toast\" id=\"toast\"></div>

<script>
// ═══ CONFIG ═══
const API = {
  supprimer: id => `/nutrition/api/supprimer/\${id}`,
  modifier:  id => `/nutrition/api/modifier/\${id}`,
};
const WATER_KEY  = 'harmony_water_{{ date }}';
const WATER_GOAL = {{ waterGoal }};
const CAL_GOAL   = {{ calGoal }};

// ═══ STATE ═══
let _deleteTargetId = null;
let _editCal100     = 0;

// ═══ INIT ═══
document.addEventListener('DOMContentLoaded', () => {
  initWater();
});

// ═══════════════════════════════════════════════════════
// WATER TRACKER (localStorage)
// ═══════════════════════════════════════════════════════
function initWater() {
  renderWater(getWaterMl());
}

function getWaterMl() {
  return parseInt(localStorage.getItem(WATER_KEY) || '0', 10);
}

function addWater(ml) {
  const current = getWaterMl();
  const next = Math.min(current + ml, WATER_GOAL * 2);
  localStorage.setItem(WATER_KEY, next);
  renderWater(next);
  showToast('info', `💧 +\${ml} ml ajouté`);
}

function resetWater() {
  localStorage.setItem(WATER_KEY, 0);
  renderWater(0);
}

function renderWater(ml) {
  const pct = Math.min(Math.round(ml / WATER_GOAL * 100), 100);
  document.getElementById('waterAmount').textContent = ml + ' ml';
  document.getElementById('waterBar').style.width    = pct + '%';
  document.getElementById('waterPct').textContent    = pct + '%';
  document.getElementById('waterEmoji').textContent  =
    pct >= 100 ? '🌊' : pct >= 60 ? '💧' : pct >= 30 ? '🥤' : '🫗';
}

// ═══════════════════════════════════════════════════════
// EDIT CONSOMMATION
// ═══════════════════════════════════════════════════════
function openEditModal(id, poids, nom, cal100) {
  document.getElementById('editId').value              = id;
  document.getElementById('editPoids').value           = poids;
  document.getElementById('editAlimentName').textContent = nom;
  document.getElementById('editCal100Info').textContent  = cal100 + ' kcal / 100 g';
  _editCal100 = cal100;
  updateEditPreview();
  document.getElementById('err-edit-poids').classList.remove('show');
  document.getElementById('editPoids').classList.remove('err');
  openModal('editModal');
}

function updateEditPreview() {
  const poids = parseFloat(document.getElementById('editPoids').value);
  const cal = isNaN(poids) || poids <= 0 ? '—' : Math.round(_editCal100 * poids / 100);
  document.getElementById('editCalPreview').textContent =
    cal === '—' ? '— kcal' : cal + ' kcal';
}

document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('editPoids')?.addEventListener('input', updateEditPreview);
});

async function submitEdit() {
  const id    = parseInt(document.getElementById('editId').value);
  const poids = parseFloat(document.getElementById('editPoids').value);
  const errEl = document.getElementById('err-edit-poids');
  const inp   = document.getElementById('editPoids');

  if (!poids || poids <= 0) {
    errEl.classList.add('show'); inp.classList.add('err'); return;
  }
  errEl.classList.remove('show'); inp.classList.remove('err');

  const btn = document.getElementById('editSubmitBtn');
  btn.disabled = true; btn.innerHTML = '⏳ Enregistrement...';

  try {
    const res  = await fetch(API.modifier(id), {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ poids_grammes: poids }),
    });
    const data = await res.json();
    if (data.success) {
      showToast('success', '✏️ Consommation modifiée !');
      updateMacros(data);
      closeModal('editModal');
      setTimeout(() => location.reload(), 600);
    } else {
      const msg = data.errors?.poids || 'Erreur.';
      errEl.textContent = '⚠ ' + msg; errEl.classList.add('show'); inp.classList.add('err');
    }
  } catch {
    showToast('error', '⚠ Erreur réseau.');
  } finally {
    btn.disabled = false; btn.innerHTML = '<span>💾</span> Enregistrer';
  }
}

// ═══════════════════════════════════════════════════════
// DELETE CONSOMMATION
// ═══════════════════════════════════════════════════════
function openDeleteModal(id, nom) {
  _deleteTargetId = id;
  document.getElementById('deleteAlimentName').textContent = nom;
  openModal('deleteModal');
}

async function confirmDelete() {
  if (!_deleteTargetId) return;
  const btn = document.getElementById('deleteConfirmBtn');
  btn.innerHTML = '⏳...'; btn.disabled = true;

  try {
    const res  = await fetch(API.supprimer(_deleteTargetId), { method: 'POST' });
    const data = await res.json();
    if (data.success) {
      closeModal('deleteModal');
      showToast('error', '🗑 Aliment retiré du journal');
      updateMacros(data);
      setTimeout(() => location.reload(), 500);
    } else {
      showToast('error', '⚠ Erreur lors de la suppression.');
    }
  } catch {
    showToast('error', '⚠ Erreur réseau.');
  } finally {
    btn.innerHTML = '🗑 Supprimer'; btn.disabled = false;
    _deleteTargetId = null;
  }
}

// ═══════════════════════════════════════════════════════
// UPDATE MACROS IN HERO + SIDEBAR
// ═══════════════════════════════════════════════════════
function updateMacros(data) {
  if (!data) return;
  const cal  = data.totalCal  ?? 0;
  const prot = data.totalProt ?? 0;
  const gluc = data.totalGluc ?? 0;
  const lip  = data.totalLip  ?? 0;

  // Hero
  document.getElementById('heroTotalCal').textContent  = Math.round(cal);
  document.getElementById('heroTotalProt').textContent = prot.toFixed(1);
  document.getElementById('heroTotalGluc').textContent = gluc.toFixed(1);
  document.getElementById('heroTotalLip').textContent  = lip.toFixed(1);
  const pct = Math.min(Math.round(cal / CAL_GOAL * 100), 100);
  const bar = document.getElementById('heroCalBar');
  bar.style.width = pct + '%';
  bar.className   = 'cal-goal-fill' + (cal > CAL_GOAL ? ' over' : '');

  // Sidebar summary
  document.getElementById('sideTotalCal').textContent  = Math.round(cal) + ' kcal';
  document.getElementById('sideProt').textContent      = prot.toFixed(1) + ' g';
  document.getElementById('sideGluc').textContent      = gluc.toFixed(1) + ' g';
  document.getElementById('sideLip').textContent       = lip.toFixed(1) + ' g';

  const restant = CAL_GOAL - cal;
  const rEl = document.getElementById('sideRestant');
  rEl.textContent = restant < 0
    ? '+' + Math.abs(Math.round(restant)) + ' kcal dépassé'
    : Math.round(restant) + ' kcal restants';
  rEl.className = 'summary-val ' + (restant < 0 ? 'red' : (restant < CAL_GOAL * 0.15 ? 'orange' : 'green'));

  // Macros bars
  const total = prot + gluc + lip || 1;
  const pp = Math.min(Math.round(prot / total * 100), 100);
  const gp = Math.min(Math.round(gluc / total * 100), 100);
  const lp = Math.min(Math.round(lip  / total * 100), 100);
  document.getElementById('macroProt').textContent    = prot.toFixed(1) + 'g · ' + pp + '%';
  document.getElementById('macroGluc').textContent    = gluc.toFixed(1) + 'g · ' + gp + '%';
  document.getElementById('macroLip').textContent     = lip.toFixed(1)  + 'g · ' + lp + '%';
  document.getElementById('macroProtBar').style.width = pp + '%';
  document.getElementById('macroGlucBar').style.width = gp + '%';
  document.getElementById('macroLipBar').style.width  = lp + '%';
}

// ═══════════════════════════════════════════════════════
// MODAL HELPERS
// ═══════════════════════════════════════════════════════
function openModal(id)  { document.getElementById(id).classList.add('open'); }
function closeModal(id) { document.getElementById(id).classList.remove('open'); }

// Click outside to close
document.querySelectorAll('.modal-overlay').forEach(o => {
  o.addEventListener('click', e => { if (e.target === o) o.classList.remove('open'); });
});

// ═══════════════════════════════════════════════════════
// TOAST
// ═══════════════════════════════════════════════════════
function showToast(type, msg) {
  const t = document.getElementById('toast');
  t.className = 'toast ' + type;
  t.textContent = msg;
  t.classList.add('show');
  clearTimeout(t._to);
  t._to = setTimeout(() => t.classList.remove('show'), 3200);
}
</script>
{% endblock %}
", "nutrition/index.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/nutrition/index.html.twig");
    }
}

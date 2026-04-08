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

/* activites/index.html.twig */
class __TwigTemplate_6f67944797ac75de31c7a95cbb6f546a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/index.html.twig"));

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

        yield "Activités — Harmony";
        
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
  --pu:#6A5ACD;--pu-dk:#4B3B9E;--pu-lt:#8B7FD4;--pu-pale:#EDE8FA;
  --pu-ghost:#F7F5FD;--pu-deep:#2D2060;
  --tx:#1C1733;--tx-mid:#4A4570;--tx-muted:#9590B8;
  --border:rgba(106,90,205,.12);--white:#FFFFFF;
  --shadow:0 8px 32px rgba(106,90,205,.14);
  --green:#22C55E;--red:#EF4444;--orange:#F59E0B;
  --card-r:18px;
  --font-h:'Syne',sans-serif;--font-b:'DM Sans',sans-serif;--font-m:'JetBrains Mono',monospace;
}

html,body{font-family:var(--font-b);background:var(--pu-ghost);color:var(--tx);overflow-x:hidden}

/* ── HERO ── */
.hero-banner{
  position:relative;overflow:hidden;height:220px;
  background:linear-gradient(135deg,rgba(29,16,80,.85) 0%,rgba(106,90,205,.75) 100%);
}
.hero-bg-img{
  position:absolute;inset:0;width:100%;height:100%;
  object-fit:cover;z-index:0;opacity:.55;
  filter:brightness(.85) saturate(1.1);
}
.hero-overlay{
  position:absolute;inset:0;
  background:linear-gradient(135deg,rgba(29,16,80,.7) 0%,rgba(106,90,205,.45) 100%);
  z-index:1;
}
.hero-content{
  position:relative;z-index:2;height:100%;
  display:flex;align-items:center;justify-content:space-between;
  padding:0 44px;gap:24px;
}
.hero-left h1{font-family:var(--font-h);font-size:30px;font-weight:800;color:white;letter-spacing:-.4px;margin-bottom:6px;text-shadow:0 2px 12px rgba(0,0,0,.4)}
.hero-left p{font-size:14px;color:rgba(255,255,255,.75);font-weight:300;text-shadow:0 1px 6px rgba(0,0,0,.3)}
.hero-stats{display:flex;gap:14px;flex-shrink:0}
.hstat{background:rgba(255,255,255,.14);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,.25);border-radius:14px;padding:14px 20px;text-align:center;min-width:90px}
.hstat-val{font-family:var(--font-h);font-size:24px;font-weight:800;color:white;text-shadow:0 1px 6px rgba(0,0,0,.3)}
.hstat-lbl{font-size:10px;color:rgba(255,255,255,.7);margin-top:2px;text-transform:uppercase;letter-spacing:.5px}

/* ── LAYOUT ── */
.page{max-width:1280px;margin:0 auto;padding:28px 36px 80px;display:grid;grid-template-columns:1fr 340px;gap:24px;align-items:start}
.main-col{display:flex;flex-direction:column;gap:20px}
.side-col{display:flex;flex-direction:column;gap:18px;position:sticky;top:78px}

/* ── CARDS ── */
.card{background:var(--white);border:1px solid var(--border);border-radius:var(--card-r);overflow:hidden}
.card-head{padding:16px 22px 12px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between}
.card-title{font-family:var(--font-h);font-size:15px;font-weight:700;color:var(--tx);display:flex;align-items:center;gap:8px}
.card-body{padding:18px 22px}

/* ── FILTERS ── */
.toolbar{display:flex;align-items:center;gap:12px;flex-wrap:wrap}
.date-input{padding:9px 14px;border:1.5px solid var(--border);border-radius:10px;font-family:var(--font-b);font-size:13px;color:var(--tx);background:var(--white);outline:none;transition:border-color .15s;cursor:pointer}
.date-input:focus{border-color:var(--pu)}
.cat-filters{display:flex;gap:6px;flex-wrap:wrap;flex:1}
.cat-btn{display:inline-flex;align-items:center;gap:5px;padding:7px 13px;border-radius:20px;border:1.5px solid var(--border);background:var(--white);font-family:var(--font-b);font-size:12px;font-weight:500;color:var(--tx-mid);cursor:pointer;transition:all .15s;white-space:nowrap}
.cat-btn:hover{border-color:var(--pu-lt);color:var(--pu);background:var(--pu-ghost)}
.cat-btn.active{background:var(--pu);border-color:var(--pu);color:white}

/* ── EXERCISE GRID ── */
.ex-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(190px,1fr));gap:14px}
.ex-card{background:var(--white);border:1.5px solid var(--border);border-radius:14px;overflow:hidden;cursor:pointer;transition:border-color .18s,transform .18s,box-shadow .18s;position:relative}
.ex-card:hover{border-color:var(--pu-lt);transform:translateY(-2px);box-shadow:var(--shadow)}
.ex-card.selected{border-color:var(--pu);box-shadow:0 0 0 3px rgba(106,90,205,.15)}
.ex-thumb{height:100px;background:var(--pu-ghost);display:flex;align-items:center;justify-content:center;font-size:36px;position:relative;overflow:hidden}
.ex-badge{position:absolute;top:7px;right:7px;font-size:9px;font-weight:700;letter-spacing:.4px;text-transform:uppercase;padding:2px 7px;border-radius:20px}
.ex-badge.cardio{background:#FEE2E2;color:#DC2626}
.ex-badge.force{background:#DBEAFE;color:#1D4ED8}
.ex-badge.souplesse{background:#D1FAE5;color:#065F46}
.ex-badge.endurance{background:#FEF3C7;color:#B45309}
.ex-badge.perte{background:#EDE9FE;color:#6D28D9}
.ex-body{padding:10px 12px}
.ex-name{font-family:var(--font-h);font-size:12.5px;font-weight:700;color:var(--tx);margin-bottom:3px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.ex-type{font-size:10.5px;color:var(--tx-muted)}
.ex-actions{display:flex;gap:5px;padding:0 12px 10px}
.btn-xs{flex:1;padding:5px;border-radius:7px;border:none;font-family:var(--font-b);font-size:10.5px;font-weight:600;cursor:pointer;transition:all .15s;display:flex;align-items:center;justify-content:center;gap:3px}
.btn-xs.v{background:var(--pu-pale);color:var(--pu)}
.btn-xs.v:hover{background:var(--pu);color:white}
.btn-xs.q{background:#F3F4F6;color:var(--tx-mid)}
.btn-xs.q:hover{background:var(--tx-mid);color:white}

/* ── FORM ── */
.log-form{display:flex;flex-direction:column;gap:13px}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:11px}
.form-group{display:flex;flex-direction:column;gap:4px}
.form-group.full{grid-column:1/-1}
label{font-size:11.5px;font-weight:600;color:var(--tx-mid);text-transform:uppercase;letter-spacing:.4px}
input,select,textarea{padding:9px 13px;border:1.5px solid var(--border);border-radius:9px;font-family:var(--font-b);font-size:13px;color:var(--tx);background:var(--white);outline:none;transition:border-color .15s;width:100%}
input:focus,select:focus,textarea:focus{border-color:var(--pu)}
input.input-error,select.input-error{border-color:var(--red)}
.err-msg{font-size:11px;color:var(--red);margin-top:2px;display:none;font-weight:500}
.err-msg.show{display:block}
textarea{resize:vertical;min-height:68px;line-height:1.5}
.btn-submit{width:100%;padding:12px;border-radius:10px;border:none;background:var(--pu);color:white;font-family:var(--font-h);font-size:14px;font-weight:700;cursor:pointer;transition:background .15s,transform .15s;display:flex;align-items:center;justify-content:center;gap:8px}
.btn-submit:hover{background:var(--pu-dk);transform:translateY(-1px)}
.btn-submit:disabled{background:var(--tx-muted);cursor:not-allowed;transform:none}
.selected-ex-info{background:var(--pu-ghost);border:1.5px solid var(--pu-pale);border-radius:9px;padding:11px 13px;display:flex;align-items:center;gap:11px;display:none}
.selected-ex-info.show{display:flex}
.sei-icon{font-size:22px}
.sei-name{font-family:var(--font-h);font-size:13.5px;font-weight:700;color:var(--pu)}
.sei-type{font-size:10.5px;color:var(--tx-muted)}

/* ── SESSIONS HISTORY ── */
.sessions-list{display:flex;flex-direction:column;gap:14px}
.session-block{background:var(--white);border:1px solid var(--border);border-radius:15px;overflow:hidden;transition:box-shadow .15s}
.session-block:hover{box-shadow:0 4px 20px rgba(106,90,205,.08)}
.session-head{
  padding:14px 18px;background:linear-gradient(90deg,var(--pu-ghost),var(--white));
  display:flex;align-items:center;justify-content:space-between;cursor:pointer;
  border-bottom:1px solid var(--border);
}
.session-date{font-family:var(--font-h);font-size:14px;font-weight:700;color:var(--pu);display:flex;align-items:center;gap:8px}
.session-meta{display:flex;align-items:center;gap:12px}
.session-badge{font-size:11px;font-weight:600;color:var(--tx-muted);background:var(--pu-ghost);padding:3px 9px;border-radius:10px}
.session-toggle{font-size:12px;color:var(--tx-muted);transition:transform .2s}
.session-toggle.open{transform:rotate(180deg)}
.session-exercises{display:none;padding:10px 14px}
.session-exercises.open{display:block}
.ex-row{
  display:flex;align-items:center;gap:12px;
  padding:10px 12px;border-radius:11px;margin-bottom:6px;
  background:var(--pu-ghost);border:1px solid var(--border);
  transition:border-color .15s;
}
.ex-row:hover{border-color:var(--pu-lt)}
.ex-row-icon{width:36px;height:36px;border-radius:9px;background:var(--pu-pale);display:grid;place-items:center;font-size:18px;flex-shrink:0}
.ex-row-info{flex:1;min-width:0}
.ex-row-name{font-family:var(--font-h);font-size:13px;font-weight:700;color:var(--tx);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.ex-row-meta{display:flex;gap:10px;margin-top:3px;flex-wrap:wrap}
.ex-row-tag{font-size:11px;color:var(--tx-muted);display:flex;align-items:center;gap:3px}
.ex-row-actions{display:flex;gap:5px;flex-shrink:0}
.btn-icon{width:30px;height:30px;border-radius:7px;border:1px solid var(--border);background:transparent;cursor:pointer;display:grid;place-items:center;font-size:13px;transition:all .15s}
.btn-icon:hover.edit{border-color:var(--pu);background:var(--pu-pale)}
.btn-icon:hover.del{border-color:var(--red);background:#FEE2E2}
.session-del-btn{
  padding:5px 12px;border-radius:8px;border:1.5px solid rgba(239,68,68,.3);
  background:transparent;color:#DC2626;font-size:11.5px;font-weight:600;font-family:var(--font-b);
  cursor:pointer;transition:background .15s;
}
.session-del-btn:hover{background:#FEE2E2}

/* ── STATS SIDEBAR ── */
.stats-grid{display:grid;grid-template-columns:1fr 1fr;gap:9px;margin-bottom:16px}
.stat-box{background:var(--pu-ghost);border:1px solid var(--border);border-radius:11px;padding:12px 14px;text-align:center}
.stat-box-val{font-family:var(--font-h);font-size:19px;font-weight:800;color:var(--pu)}
.stat-box-lbl{font-size:10.5px;color:var(--tx-muted);margin-top:2px}
.prog-item{margin-bottom:12px}
.prog-label{display:flex;justify-content:space-between;margin-bottom:4px}
.prog-name{font-size:12px;font-weight:500;color:var(--tx-mid)}
.prog-pct{font-family:var(--font-m);font-size:11.5px;color:var(--pu);font-weight:600}
.prog-track{height:5px;background:var(--pu-ghost);border-radius:5px;overflow:hidden}
.prog-fill{height:100%;border-radius:5px;background:linear-gradient(90deg,var(--pu-lt),var(--pu));transition:width .6s ease}

/* ── AI COACH ── */
.ai-chat{background:linear-gradient(135deg,var(--pu-deep),#3D2A8A);border-radius:var(--card-r);overflow:hidden}
.ai-head{padding:14px 18px;display:flex;align-items:center;gap:11px;border-bottom:1px solid rgba(255,255,255,.12)}
.ai-avatar{width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.15);display:grid;place-items:center;font-size:18px}
.ai-name{font-family:var(--font-h);font-size:13.5px;font-weight:700;color:white}
.ai-status{display:flex;align-items:center;gap:5px;font-size:10.5px;color:rgba(255,255,255,.6)}
.ai-dot{width:5px;height:5px;border-radius:50%;background:var(--green);animation:blink 1.8s infinite}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}
.ai-messages{padding:14px;height:200px;overflow-y:auto;display:flex;flex-direction:column;gap:9px}
.ai-messages::-webkit-scrollbar{width:3px}
.ai-messages::-webkit-scrollbar-thumb{background:rgba(255,255,255,.2);border-radius:3px}
.ai-bubble{max-width:85%;border-radius:13px;padding:9px 13px;font-size:12px;line-height:1.55}
.ai-bubble.bot{background:rgba(255,255,255,.12);color:rgba(255,255,255,.9);border-bottom-left-radius:3px;align-self:flex-start}
.ai-bubble.user{background:rgba(255,255,255,.22);color:white;font-weight:500;border-bottom-right-radius:3px;align-self:flex-end}
.ai-input-area{padding:10px 14px;border-top:1px solid rgba(255,255,255,.12);display:flex;gap:7px}
.ai-input{flex:1;padding:9px 13px;border-radius:9px;border:1px solid rgba(255,255,255,.2);background:rgba(255,255,255,.1);color:white;font-family:var(--font-b);font-size:12.5px;outline:none}
.ai-input::placeholder{color:rgba(255,255,255,.4)}
.ai-input:focus{border-color:rgba(255,255,255,.4)}
.ai-send{width:36px;height:36px;border-radius:9px;border:none;background:rgba(255,255,255,.2);color:white;cursor:pointer;display:grid;place-items:center;font-size:15px;transition:background .15s}
.ai-send:hover{background:rgba(255,255,255,.35)}
.ai-thinking{display:flex;gap:4px;align-items:center;padding:7px 13px;background:rgba(255,255,255,.12);border-radius:13px;border-bottom-left-radius:3px;align-self:flex-start;display:none}
.ai-thinking.show{display:flex}
.think-dot{width:5px;height:5px;border-radius:50%;background:rgba(255,255,255,.6)}
.think-dot:nth-child(1){animation:bounce .8s .0s infinite}
.think-dot:nth-child(2){animation:bounce .8s .15s infinite}
.think-dot:nth-child(3){animation:bounce .8s .3s infinite}
@keyframes bounce{0%,100%{transform:translateY(0)}50%{transform:translateY(-5px)}}

/* ── MODALS ── */
.modal-overlay{position:fixed;inset:0;background:rgba(20,15,50,.6);backdrop-filter:blur(6px);z-index:1000;display:none;align-items:center;justify-content:center;padding:20px}
.modal-overlay.open{display:flex}
.modal{background:var(--white);border-radius:20px;width:100%;max-width:520px;overflow:hidden;animation:slideUp .28s ease}
@keyframes slideUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
.modal-head{padding:18px 22px 14px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between}
.modal-title{font-family:var(--font-h);font-size:16px;font-weight:700;color:var(--tx)}
.modal-close{width:28px;height:28px;border-radius:7px;border:none;background:var(--pu-ghost);cursor:pointer;font-size:14px;display:grid;place-items:center;color:var(--tx-muted);transition:background .15s}
.modal-close:hover{background:var(--pu-pale);color:var(--pu)}
.modal-body{padding:22px}
.video-wrap{width:100%;padding-top:56.25%;border-radius:11px;background:var(--tx);position:relative;overflow:hidden}
.video-wrap iframe{position:absolute;inset:0;width:100%;height:100%;border:none}
.edit-form{display:flex;flex-direction:column;gap:12px}
.edit-row{display:grid;grid-template-columns:1fr 1fr;gap:10px}

/* ── TOAST ── */
.toast{position:fixed;bottom:26px;right:26px;z-index:2000;padding:12px 18px;border-radius:11px;font-family:var(--font-b);font-size:13px;font-weight:500;display:flex;align-items:center;gap:9px;transform:translateY(80px);opacity:0;transition:transform .3s,opacity .3s;max-width:340px}
.toast.show{transform:translateY(0);opacity:1}
.toast.success{background:#ECFDF5;color:#065F46;border:1px solid #A7F3D0}
.toast.error{background:#FEF2F2;color:#991B1B;border:1px solid #FCA5A5}
.toast.info{background:var(--pu-pale);color:var(--pu-dk);border:1px solid rgba(106,90,205,.25)}

/* ── EMPTY ── */
.empty{text-align:center;padding:36px 20px;color:var(--tx-muted)}
.empty-icon{font-size:36px;margin-bottom:8px;opacity:.45}
.empty-text{font-size:13px}

.btn-xs.fav-btn{background:#F3F4F6;color:var(--tx-mid)}
.btn-xs.fav-btn:hover{background:#FEF9C3;color:#B45309}
.btn-xs.fav-btn.active{background:#FEF9C3;color:#B45309;border:1px solid #FDE68A}
.fav-item{display:flex;align-items:center;gap:9px;padding:8px 10px;border-radius:10px;background:var(--pu-ghost);border:1px solid var(--border);margin-bottom:7px;transition:border-color .15s}
.fav-item:last-child{margin-bottom:0}
.fav-item:hover{border-color:var(--pu-lt)}
.fav-item-icon{font-size:18px;flex-shrink:0}
.fav-item-info{flex:1;min-width:0}
.fav-item-name{font-family:var(--font-h);font-size:12px;font-weight:700;color:var(--tx);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.fav-item-type{font-size:10px;color:var(--tx-muted)}
.fav-item-del{width:22px;height:22px;border-radius:6px;border:none;background:transparent;cursor:pointer;font-size:11px;color:var(--tx-muted);display:grid;place-items:center;flex-shrink:0;transition:background .15s,color .15s}
.fav-item-del:hover{background:#FEE2E2;color:#DC2626}

/* ── ANIM ── */
@keyframes fadeUp{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.fade{animation:fadeUp .35s ease both}
.d1{animation-delay:.06s}.d2{animation-delay:.12s}.d3{animation-delay:.18s}

/* ── RESPONSIVE ── */
@media(max-width:1024px){.page{grid-template-columns:1fr;padding:20px 18px 60px}.side-col{position:static}}
@media(max-width:640px){.topbar{padding:0 14px}.nav-links{display:none}.hero-content{flex-direction:column;align-items:flex-start;padding:20px 18px}.hero-stats{flex-wrap:wrap}.form-row,.edit-row{grid-template-columns:1fr}.ex-grid{grid-template-columns:repeat(auto-fill,minmax(150px,1fr))}}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 243
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

        // line 244
        yield from $this->load("_planning_topbar.html.twig", 244)->unwrap()->yield($context);
        // line 245
        yield "
<!-- ═══ HERO BANNER (image de salle de sport) ═══ -->
<div class=\"hero-banner\">
  <img
    class=\"hero-bg-img\"
    src=\"https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=1400&q=80&auto=format&fit=crop\"
    alt=\"Salle de sport\"
    onerror=\"this.src='https://images.unsplash.com/photo-1571902943202-507ec2618e8f?w=1400&q=80'\"
  >
  <div class=\"hero-overlay\"></div>
  <div class=\"hero-content\">
    <div class=\"hero-left\">
      <h1>🏋 Journal d'Exercices</h1>
      <p>Planifiez, suivez et progressez — connecté à votre base de données.</p>
    </div>
    <div class=\"hero-stats\">
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"statSeances\">";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 262, $this->source); })()), "sessions", [], "any", false, false, false, 262), "html", null, true);
        yield "</div>
        <div class=\"hstat-lbl\">Séances</div>
      </div>
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"statMinutes\">";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 266, $this->source); })()), "minutes", [], "any", false, false, false, 266), "html", null, true);
        yield "</div>
        <div class=\"hstat-lbl\">Minutes</div>
      </div>
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"statCalories\">";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 270, $this->source); })()), "calories", [], "any", false, false, false, 270), "html", null, true);
        yield "</div>
        <div class=\"hstat-lbl\">Calories</div>
      </div>
    </div>
  </div>
</div>

<!-- ═══ PAGE ═══ -->
<div class=\"page\">

  <!-- ══ MAIN COLUMN ══ -->
  <div class=\"main-col\">

    <!-- FILTER BAR -->
    <div class=\"card fade\">
      <div class=\"card-body\" style=\"padding:14px 20px\">
        <div class=\"toolbar\">
          <div class=\"cat-filters\">
            <button class=\"cat-btn active\" data-cat=\"all\">🌟 Tous</button>
            <button class=\"cat-btn\" data-cat=\"Cardio\">🔴 Cardio</button>
            <button class=\"cat-btn\" data-cat=\"Force\">💪 Force</button>
            <button class=\"cat-btn\" data-cat=\"Souplesse\">🌿 Souplesse</button>
            <button class=\"cat-btn\" data-cat=\"Endurance\">⚡ Endurance</button>
            <button class=\"cat-btn\" data-cat=\"Perte\">🔥 Perte de poids</button>
          </div>
        </div>
      </div>
    </div>

    <!-- EXERCISE LIBRARY (from DB) -->
    <div class=\"card fade d1\">
      <div class=\"card-head\">
        <div class=\"card-title\">📚 Bibliothèque d'Exercices</div>
        <span style=\"font-size:11.5px;color:var(--tx-muted)\">Cliquez pour sélectionner</span>
      </div>
      <div class=\"card-body\">
        <div class=\"ex-grid\" id=\"exerciseGrid\">
          ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 307, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ex"]) {
            // line 308
            yield "            ";
            $context["cat"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "typeExercice", [], "any", false, false, false, 308));
            // line 309
            yield "            ";
            $context["badge"] = "force";
            // line 310
            yield "            ";
            if (CoreExtension::inFilter("cardio", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 310, $this->source); })()))) {
                $context["badge"] = "cardio";
                // line 311
                yield "            ";
            } elseif (CoreExtension::inFilter("souplesse", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 311, $this->source); })()))) {
                $context["badge"] = "souplesse";
                // line 312
                yield "            ";
            } elseif (CoreExtension::inFilter("endurance", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 312, $this->source); })()))) {
                $context["badge"] = "endurance";
                // line 313
                yield "            ";
            } elseif (CoreExtension::inFilter("perte", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 313, $this->source); })()))) {
                $context["badge"] = "perte";
                // line 314
                yield "            ";
            }
            // line 315
            yield "            ";
            $context["icon"] = "🏃";
            // line 316
            yield "            ";
            if (CoreExtension::inFilter("cardio", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 316, $this->source); })()))) {
                $context["icon"] = "🏃";
                // line 317
                yield "            ";
            } elseif ((CoreExtension::inFilter("force", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 317, $this->source); })())) && CoreExtension::inFilter("femme", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 317, $this->source); })())))) {
                $context["icon"] = "🧘‍♀️";
                // line 318
                yield "            ";
            } elseif (CoreExtension::inFilter("force", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 318, $this->source); })()))) {
                $context["icon"] = "💪";
                // line 319
                yield "            ";
            } elseif (CoreExtension::inFilter("souplesse", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 319, $this->source); })()))) {
                $context["icon"] = "🧘";
                // line 320
                yield "            ";
            } elseif (CoreExtension::inFilter("endurance", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 320, $this->source); })()))) {
                $context["icon"] = "⚡";
                // line 321
                yield "            ";
            } elseif (CoreExtension::inFilter("perte", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 321, $this->source); })()))) {
                $context["icon"] = "🔥";
                // line 322
                yield "            ";
            }
            // line 323
            yield "            <div class=\"ex-card\"
                 data-id=\"";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "id", [], "any", false, false, false, 324), "html", null, true);
            yield "\"
                 data-name=\"";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "nomExercice", [], "any", false, false, false, 325), "html", null, true);
            yield "\"
                 data-type=\"";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "typeExercice", [], "any", false, false, false, 326), "html", null, true);
            yield "\"
                 data-icon=\"";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 327, $this->source); })()), "html", null, true);
            yield "\"
                 data-video=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "videoExercice", [], "any", false, false, false, 328), "html", null, true);
            yield "\"
                 data-cat=\"";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "typeExercice", [], "any", false, false, false, 329), "html", null, true);
            yield "\"
                 onclick=\"selectExercise(this)\">
              <div class=\"ex-thumb\">
                <span>";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 332, $this->source); })()), "html", null, true);
            yield "</span>
                <span class=\"ex-badge ";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 333, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "typeExercice", [], "any", false, false, false, 333), ["_" => " "]), " ")), "html", null, true);
            yield "</span>
              </div>
              <div class=\"ex-body\">
                <div class=\"ex-name\" title=\"";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "nomExercice", [], "any", false, false, false, 336), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "nomExercice", [], "any", false, false, false, 336), "html", null, true);
            yield "</div>
                <div class=\"ex-type\">";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "typeExercice", [], "any", false, false, false, 337), ["_" => " "]), "html", null, true);
            yield "</div>
              </div>
              <div class=\"ex-actions\">
                ";
            // line 340
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "videoExercice", [], "any", false, false, false, 340) && CoreExtension::inFilter("http", CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "videoExercice", [], "any", false, false, false, 340)))) {
                // line 341
                yield "                  <button class=\"btn-xs v\" onclick=\"event.stopPropagation();openVideo('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "videoExercice", [], "any", false, false, false, 341), "html_attr");
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "nomExercice", [], "any", false, false, false, 341), "html_attr");
                yield "')\">▶ Vidéo</button>
                ";
            } else {
                // line 343
                yield "                  <button class=\"btn-xs v\" onclick=\"event.stopPropagation();showToast('info','Vidéo non disponible')\">▶ Vidéo</button>
                ";
            }
            // line 345
            yield "                <button class=\"btn-xs fav-btn\" 
                        data-id=\"";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "id", [], "any", false, false, false, 346), "html", null, true);
            yield "\"
                        data-name=\"";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "nomExercice", [], "any", false, false, false, 347), "html_attr");
            yield "\"
                        data-type=\"";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ex"], "typeExercice", [], "any", false, false, false, 348), "html_attr");
            yield "\"
                        data-icon=\"";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 349, $this->source); })()), "html", null, true);
            yield "\"
                        onclick=\"event.stopPropagation();toggleFav(this)\">⭐ Fav</button>
              </div>
            </div>
          ";
            $context['_iterated'] = true;
        }
        // line 353
        if (!$context['_iterated']) {
            // line 354
            yield "            <div class=\"empty\" style=\"grid-column:1/-1\"><div class=\"empty-icon\">🔍</div><div class=\"empty-text\">Aucun exercice en base de données</div></div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ex'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        yield "        </div>
      </div>
    </div>

    <!-- LOG FORM -->
    <div class=\"card fade d2\">
      <div class=\"card-head\">
        <div class=\"card-title\">✏️ Enregistrer un Exercice dans une Séance</div>
      </div>
      <div class=\"card-body\">
        <span class=\"err-msg\" id=\"err-exercice\" style=\"margin-bottom:6px\">⚠ Veuillez sélectionner un exercice dans la bibliothèque.</span>
        <div class=\"selected-ex-info\" id=\"selectedInfo\">
          <div class=\"sei-icon\" id=\"selectedIcon\">🏃</div>
          <div>
            <div class=\"sei-name\" id=\"selectedName\">—</div>
            <div class=\"sei-type\" id=\"selectedType\">—</div>
          </div>
        </div>

        <form class=\"log-form\" id=\"logForm\" novalidate style=\"margin-top:12px\">
          <input type=\"hidden\" id=\"exerciseId\" value=\"\">

          <div class=\"form-row\">
            <div class=\"form-group\">
              <label>Durée (minutes) *</label>
              <span class=\"err-msg\" id=\"err-duree\">⚠ Durée requise (1 – 300 min)</span>
              <input type=\"number\" id=\"duree\" placeholder=\"Ex: 30\" min=\"1\" max=\"300\">
            </div>
            <div class=\"form-group\">
              <label>Date de séance *</label>
              <span class=\"err-msg\" id=\"err-date\">⚠ Date requise</span>
              <input type=\"date\" id=\"dateSeance\">
            </div>
          </div>

          <div class=\"form-row\">
            <div class=\"form-group\">
              <label>Calories brûlées</label>
              <input type=\"number\" id=\"calories\" placeholder=\"Estimées\" min=\"0\">
            </div>
            <div class=\"form-group\">
              <label>Poids (kg)</label>
              <input type=\"number\" id=\"poids\" placeholder=\"Ex: 60\" min=\"0\" step=\"0.5\">
            </div>
          </div>

          <div class=\"form-row\">
            <div class=\"form-group\">
              <label>Séries</label>
              <input type=\"number\" id=\"series\" placeholder=\"Ex: 4\" min=\"0\">
            </div>
            <div class=\"form-group\">
              <label>Répétitions</label>
              <input type=\"number\" id=\"reps\" placeholder=\"Ex: 12\" min=\"0\">
            </div>
          </div>

          <div class=\"form-group full\">
            <label>Notes</label>
            <textarea id=\"notes\" placeholder=\"Observations, sensations...\"></textarea>
          </div>

          <button type=\"submit\" class=\"btn-submit\" id=\"submitBtn\">
            <span>💾</span> Enregistrer dans la séance
          </button>
        </form>
      </div>
    </div>

    <!-- SESSIONS HISTORY -->
    <div class=\"card fade d3\">
      <div class=\"card-head\">
        <div class=\"card-title\">📊 Historique des Séances</div>
        <span style=\"font-size:11.5px;color:var(--tx-muted)\" id=\"histCount\">
          ";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["grouped"]) || array_key_exists("grouped", $context) ? $context["grouped"] : (function () { throw new RuntimeError('Variable "grouped" does not exist.', 430, $this->source); })())), "html", null, true);
        yield " séance";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["grouped"]) || array_key_exists("grouped", $context) ? $context["grouped"] : (function () { throw new RuntimeError('Variable "grouped" does not exist.', 430, $this->source); })())) != 1)) ? ("s") : (""));
        yield "
        </span>
      </div>
      <div class=\"card-body\" style=\"padding:12px 20px\">
        <div class=\"sessions-list\" id=\"sessionsList\">

          ";
        // line 436
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["grouped"]) || array_key_exists("grouped", $context) ? $context["grouped"] : (function () { throw new RuntimeError('Variable "grouped" does not exist.', 436, $this->source); })()))) {
            // line 437
            yield "            <div class=\"empty\"><div class=\"empty-icon\">📋</div><div class=\"empty-text\">Aucune séance enregistrée.</div></div>
          ";
        } else {
            // line 439
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["grouped"]) || array_key_exists("grouped", $context) ? $context["grouped"] : (function () { throw new RuntimeError('Variable "grouped" does not exist.', 439, $this->source); })()));
            foreach ($context['_seq'] as $context["date"] => $context["acts"]) {
                // line 440
                yield "              ";
                $context["totalMin"] = 0;
                // line 441
                yield "              ";
                $context["totalCal"] = 0;
                // line 442
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["acts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 443
                    yield "                ";
                    $context["totalMin"] = ((isset($context["totalMin"]) || array_key_exists("totalMin", $context) ? $context["totalMin"] : (function () { throw new RuntimeError('Variable "totalMin" does not exist.', 443, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dureeMinutes", [], "any", false, false, false, 443));
                    // line 444
                    yield "                ";
                    $context["totalCal"] = ((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 444, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "caloriesBrulees", [], "any", false, false, false, 444));
                    // line 445
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 446
                yield "              <div class=\"session-block\" id=\"session-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["date"], ["-" => ""]), "html", null, true);
                yield "\">
                <div class=\"session-head\" onclick=\"toggleSession(this)\">
                  <div class=\"session-date\">
                    📅 ";
                // line 449
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($context["date"], "d/m/Y"), "html", null, true);
                yield "
                  </div>
                  <div class=\"session-meta\">
                    <span class=\"session-badge\">";
                // line 452
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["acts"]), "html", null, true);
                yield " exercice";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["acts"]) != 1)) ? ("s") : (""));
                yield "</span>
                    <span class=\"session-badge\">⏱ ";
                // line 453
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMin"]) || array_key_exists("totalMin", $context) ? $context["totalMin"] : (function () { throw new RuntimeError('Variable "totalMin" does not exist.', 453, $this->source); })()), "html", null, true);
                yield " min</span>
                    ";
                // line 454
                if (((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 454, $this->source); })()) > 0)) {
                    yield "<span class=\"session-badge\">🔥 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCal"]) || array_key_exists("totalCal", $context) ? $context["totalCal"] : (function () { throw new RuntimeError('Variable "totalCal" does not exist.', 454, $this->source); })()), "html", null, true);
                    yield " kcal</span>";
                }
                // line 455
                yield "                    <button class=\"session-del-btn\" onclick=\"event.stopPropagation();deleteSession('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["date"], "html", null, true);
                yield "')\">🗑 Suppr. séance</button>
                    <span class=\"session-toggle\">▼</span>
                  </div>
                </div>
                <div class=\"session-exercises\">
                  ";
                // line 460
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["acts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 461
                    yield "                    ";
                    $context["cat"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "exercice", [], "any", false, false, false, 461), "typeExercice", [], "any", false, false, false, 461));
                    // line 462
                    yield "                    ";
                    $context["icon"] = "🏃";
                    // line 463
                    yield "                    ";
                    if (CoreExtension::inFilter("cardio", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 463, $this->source); })()))) {
                        $context["icon"] = "🏃";
                        // line 464
                        yield "                    ";
                    } elseif ((CoreExtension::inFilter("force", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 464, $this->source); })())) && CoreExtension::inFilter("femme", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 464, $this->source); })())))) {
                        $context["icon"] = "🧘‍♀️";
                        // line 465
                        yield "                    ";
                    } elseif (CoreExtension::inFilter("force", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 465, $this->source); })()))) {
                        $context["icon"] = "💪";
                        // line 466
                        yield "                    ";
                    } elseif (CoreExtension::inFilter("souplesse", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 466, $this->source); })()))) {
                        $context["icon"] = "🧘";
                        // line 467
                        yield "                    ";
                    } elseif (CoreExtension::inFilter("endurance", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 467, $this->source); })()))) {
                        $context["icon"] = "⚡";
                        // line 468
                        yield "                    ";
                    } elseif (CoreExtension::inFilter("perte", (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 468, $this->source); })()))) {
                        $context["icon"] = "🔥";
                        // line 469
                        yield "                    ";
                    }
                    // line 470
                    yield "                    <div class=\"ex-row\" id=\"exrow-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 470), "html", null, true);
                    yield "\">
                      <div class=\"ex-row-icon\">";
                    // line 471
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 471, $this->source); })()), "html", null, true);
                    yield "</div>
                      <div class=\"ex-row-info\">
                        <div class=\"ex-row-name\">";
                    // line 473
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "exercice", [], "any", false, false, false, 473), "nomExercice", [], "any", false, false, false, 473), "html", null, true);
                    yield "</div>
                        <div class=\"ex-row-meta\">
                          <span class=\"ex-row-tag\">⏱ ";
                    // line 475
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dureeMinutes", [], "any", false, false, false, 475), "html", null, true);
                    yield " min</span>
                          ";
                    // line 476
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "caloriesBrulees", [], "any", false, false, false, 476)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<span class=\"ex-row-tag\">🔥 ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "caloriesBrulees", [], "any", false, false, false, 476), "html", null, true);
                        yield " kcal</span>";
                    }
                    // line 477
                    yield "                          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbSeries", [], "any", false, false, false, 477)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<span class=\"ex-row-tag\">✖ ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbSeries", [], "any", false, false, false, 477), "html", null, true);
                        yield "×";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbRepetitions", [], "any", false, false, false, 477)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbRepetitions", [], "any", false, false, false, 477), "html", null, true)) : ("?"));
                        yield "</span>";
                    }
                    // line 478
                    yield "                          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "poids", [], "any", false, false, false, 478)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<span class=\"ex-row-tag\">⚖ ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "poids", [], "any", false, false, false, 478), "html", null, true);
                        yield " kg</span>";
                    }
                    // line 479
                    yield "                        </div>
                        ";
                    // line 480
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "notes", [], "any", false, false, false, 480)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<div style=\"font-size:11px;color:var(--tx-muted);margin-top:3px;font-style:italic\">\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "notes", [], "any", false, false, false, 480), "html", null, true);
                        yield "\"</div>";
                    }
                    // line 481
                    yield "                      </div>
                      <div class=\"ex-row-actions\">
                        <button class=\"btn-icon edit\" title=\"Modifier\" onclick=\"openEdit(";
                    // line 483
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 483), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dureeMinutes", [], "any", false, false, false, 483), "html", null, true);
                    yield ", ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "caloriesBrulees", [], "any", false, false, false, 483)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "caloriesBrulees", [], "any", false, false, false, 483), "html", null, true)) : (0));
                    yield ", ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbSeries", [], "any", false, false, false, 483)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbSeries", [], "any", false, false, false, 483), "html", null, true)) : (0));
                    yield ", ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbRepetitions", [], "any", false, false, false, 483)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbRepetitions", [], "any", false, false, false, 483), "html", null, true)) : (0));
                    yield ", ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "poids", [], "any", false, false, false, 483)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "poids", [], "any", false, false, false, 483), "html", null, true)) : (0));
                    yield ", '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "notes", [], "any", false, false, false, 483), "html_attr");
                    yield "')\">✏️</button>
                        <button class=\"btn-icon del\" title=\"Supprimer de la séance\" onclick=\"event.stopPropagation();openDeleteModal(";
                    // line 484
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 484), "html", null, true);
                    yield ", '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "exercice", [], "any", false, false, false, 484), "nomExercice", [], "any", false, false, false, 484), "html_attr");
                    yield "')\">🗑</button>
                      </div>
                    </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 488
                yield "                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['date'], $context['acts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 491
            yield "          ";
        }
        // line 492
        yield "
        </div>
      </div>
    </div>

  </div>

  <!-- ══ SIDE COLUMN ══ -->
  <div class=\"side-col\">

    <!-- STATS -->
    <div class=\"card fade\">
      <div class=\"card-head\"><div class=\"card-title\">📈 Mes Stats</div></div>
      <div class=\"card-body\" style=\"padding:14px 18px\">
        <div class=\"stats-grid\">
          <div class=\"stat-box\"><div class=\"stat-box-val\" id=\"sideSeances\">";
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 507, $this->source); })()), "sessions", [], "any", false, false, false, 507), "html", null, true);
        yield "</div><div class=\"stat-box-lbl\">Séances</div></div>
          <div class=\"stat-box\"><div class=\"stat-box-val\" id=\"sideMin\">";
        // line 508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 508, $this->source); })()), "minutes", [], "any", false, false, false, 508), "html", null, true);
        yield "</div><div class=\"stat-box-lbl\">Minutes</div></div>
          <div class=\"stat-box\"><div class=\"stat-box-val\" id=\"sideCal\">";
        // line 509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 509, $this->source); })()), "calories", [], "any", false, false, false, 509), "html", null, true);
        yield "</div><div class=\"stat-box-lbl\">Calories</div></div>
          <div class=\"stat-box\"><div class=\"stat-box-val\" id=\"sideStreak\">—</div><div class=\"stat-box-lbl\">Exercices</div></div>
        </div>
        <div id=\"categoryProgress\">
          ";
        // line 513
        $context["cats"] = ["Cardio" => 0, "Force" => 0, "Souplesse" => 0, "Endurance" => 0, "Perte" => 0];
        // line 514
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["grouped"]) || array_key_exists("grouped", $context) ? $context["grouped"] : (function () { throw new RuntimeError('Variable "grouped" does not exist.', 514, $this->source); })()));
        foreach ($context['_seq'] as $context["date"] => $context["acts"]) {
            // line 515
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["acts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 516
                yield "              ";
                $context["t"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "exercice", [], "any", false, false, false, 516), "typeExercice", [], "any", false, false, false, 516);
                // line 517
                yield "              ";
                if (CoreExtension::inFilter("Cardio", (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 517, $this->source); })()))) {
                    $context["cats"] = Twig\Extension\CoreExtension::merge((isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 517, $this->source); })()), ["Cardio" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 517, $this->source); })()), "Cardio", [], "array", false, false, false, 517) + 1)]);
                }
                // line 518
                yield "              ";
                if (CoreExtension::inFilter("Force", (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 518, $this->source); })()))) {
                    $context["cats"] = Twig\Extension\CoreExtension::merge((isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 518, $this->source); })()), ["Force" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 518, $this->source); })()), "Force", [], "array", false, false, false, 518) + 1)]);
                }
                // line 519
                yield "              ";
                if (CoreExtension::inFilter("Souplesse", (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 519, $this->source); })()))) {
                    $context["cats"] = Twig\Extension\CoreExtension::merge((isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 519, $this->source); })()), ["Souplesse" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 519, $this->source); })()), "Souplesse", [], "array", false, false, false, 519) + 1)]);
                }
                // line 520
                yield "              ";
                if (CoreExtension::inFilter("Endurance", (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 520, $this->source); })()))) {
                    $context["cats"] = Twig\Extension\CoreExtension::merge((isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 520, $this->source); })()), ["Endurance" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 520, $this->source); })()), "Endurance", [], "array", false, false, false, 520) + 1)]);
                }
                // line 521
                yield "              ";
                if (CoreExtension::inFilter("Perte", (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 521, $this->source); })()))) {
                    $context["cats"] = Twig\Extension\CoreExtension::merge((isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 521, $this->source); })()), ["Perte" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 521, $this->source); })()), "Perte", [], "array", false, false, false, 521) + 1)]);
                }
                // line 522
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 523
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['date'], $context['acts'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 524
        yield "          ";
        $context["maxCat"] = 1;
        // line 525
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 525, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            if (($context["v"] > (isset($context["maxCat"]) || array_key_exists("maxCat", $context) ? $context["maxCat"] : (function () { throw new RuntimeError('Variable "maxCat" does not exist.', 525, $this->source); })()))) {
                $context["maxCat"] = $context["v"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 526
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 526, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 527
            yield "            <div class=\"prog-item\">
              <div class=\"prog-label\"><span class=\"prog-name\">";
            // line 528
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
            yield "</span><span class=\"prog-pct\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
            yield "</span></div>
              <div class=\"prog-track\"><div class=\"prog-fill\" style=\"width:";
            // line 529
            yield ((((isset($context["maxCat"]) || array_key_exists("maxCat", $context) ? $context["maxCat"] : (function () { throw new RuntimeError('Variable "maxCat" does not exist.', 529, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($context["v"] / (isset($context["maxCat"]) || array_key_exists("maxCat", $context) ? $context["maxCat"] : (function () { throw new RuntimeError('Variable "maxCat" does not exist.', 529, $this->source); })())) * 100)), "html", null, true)) : (0));
            yield "%\"></div></div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        yield "        </div>
      </div>
    </div>

    <!-- FAVORIS -->
    <div class=\"card fade d1\" id=\"favCard\">
      <div class=\"card-head\">
        <div class=\"card-title\">⭐ Mes Favoris</div>
        <span id=\"favCount\" style=\"font-size:11.5px;color:var(--tx-muted)\">0 exercice fav</span>
      </div>
      <div class=\"card-body\" style=\"padding:10px 14px\">
        <div id=\"favList\">
          <div class=\"empty\" style=\"padding:18px 10px\" id=\"favEmpty\">
            <div class=\"empty-icon\" style=\"font-size:26px\">⭐</div>
            <div class=\"empty-text\">0 exercices favoris</div>
          </div>
        </div>
      </div>
    </div>

    <!-- AI COACH -->
    <div class=\"ai-chat fade d1\">
      <div class=\"ai-head\">
        <div class=\"ai-avatar\">🤖</div>
        <div>
          <div class=\"ai-name\">Coach IA</div>
          <div class=\"ai-status\"><span class=\"ai-dot\"></span> En ligne</div>
        </div>
      </div>
      <div class=\"ai-messages\" id=\"aiMessages\">
        <div class=\"ai-bubble bot\">👋 Bonjour ! Posez-moi une question sur votre entraînement !</div>
        <div class=\"ai-thinking\" id=\"aiThinking\"><div class=\"think-dot\"></div><div class=\"think-dot\"></div><div class=\"think-dot\"></div></div>
      </div>
      <div class=\"ai-input-area\">
        <input class=\"ai-input\" id=\"aiInput\" placeholder=\"Conseil d'entraînement...\" onkeydown=\"if(event.key==='Enter')sendAI()\">
        <button class=\"ai-send\" onclick=\"sendAI()\">➤</button>
      </div>
    </div>

  </div>
</div>

<!-- ═══ VIDEO MODAL ═══ -->
<div class=\"modal-overlay\" id=\"videoModal\">
  <div class=\"modal\">
    <div class=\"modal-head\">
      <div class=\"modal-title\" id=\"videoTitle\">Démonstration</div>
      <button class=\"modal-close\" onclick=\"closeModal('videoModal')\">✕</button>
    </div>
    <div class=\"modal-body\">
      <div class=\"video-wrap\">
        <iframe id=\"videoFrame\" src=\"\" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!-- ═══ EDIT MODAL ═══ -->
<div class=\"modal-overlay\" id=\"editModal\">
  <div class=\"modal\">
    <div class=\"modal-head\">
      <div class=\"modal-title\">✏️ Modifier l'Exercice</div>
      <button class=\"modal-close\" onclick=\"closeModal('editModal')\">✕</button>
    </div>
    <div class=\"modal-body\">
      <form class=\"edit-form\" id=\"editForm\" novalidate>
        <input type=\"hidden\" id=\"editId\">
        <div class=\"edit-row\">
          <div class=\"form-group\">
            <label>Durée (min) *</label>
            <input type=\"number\" id=\"editDuree\" min=\"1\" max=\"300\" placeholder=\"Ex: 30\">
            <span class=\"err-msg\" id=\"err-edit-duree\">⚠ Durée requise (1–300)</span>
          </div>
          <div class=\"form-group\">
            <label>Calories</label>
            <input type=\"number\" id=\"editCalories\" min=\"0\" placeholder=\"Ex: 200\">
          </div>
        </div>
        <div class=\"edit-row\">
          <div class=\"form-group\">
            <label>Séries</label>
            <input type=\"number\" id=\"editSeries\" min=\"0\" placeholder=\"Ex: 4\">
          </div>
          <div class=\"form-group\">
            <label>Répétitions</label>
            <input type=\"number\" id=\"editReps\" min=\"0\" placeholder=\"Ex: 12\">
          </div>
        </div>
        <div class=\"form-group\">
          <label>Poids (kg)</label>
          <input type=\"number\" id=\"editPoids\" min=\"0\" step=\"0.5\" placeholder=\"Ex: 60\">
        </div>
        <div class=\"form-group\">
          <label>Notes</label>
          <textarea id=\"editNotes\" style=\"min-height:58px\"></textarea>
        </div>
        <button type=\"submit\" class=\"btn-submit\"><span>💾</span> Sauvegarder</button>
      </form>
    </div>
  </div>
</div>

<!-- ═══ DELETE CONFIRM MODAL ═══ -->
<div class=\"modal-overlay\" id=\"deleteModal\">
  <div class=\"modal\" style=\"max-width:400px\">
    <div class=\"modal-head\" style=\"background:linear-gradient(135deg,#FEF2F2,#FFF)\">
      <div class=\"modal-title\" style=\"color:#DC2626\">🗑 Supprimer l'exercice</div>
      <button class=\"modal-close\" onclick=\"closeModal('deleteModal')\">✕</button>
    </div>
    <div class=\"modal-body\" style=\"padding:24px 22px\">
      <div style=\"display:flex;flex-direction:column;align-items:center;gap:16px;text-align:center\">
        <div style=\"width:56px;height:56px;border-radius:50%;background:#FEE2E2;display:grid;place-items:center;font-size:26px\">🗑</div>
        <div>
          <div style=\"font-family:var(--font-h);font-size:15px;font-weight:700;color:var(--tx);margin-bottom:6px\">Confirmer la suppression</div>
          <div style=\"font-size:13px;color:var(--tx-mid)\">Voulez-vous retirer <strong id=\"deleteExName\" style=\"color:var(--pu)\"></strong> de cette séance ?</div>
          <div style=\"font-size:11.5px;color:var(--tx-muted);margin-top:6px\">Cette action est irréversible.</div>
        </div>
        <div style=\"display:flex;gap:10px;width:100%;margin-top:4px\">
          <button onclick=\"closeModal('deleteModal')\" 
                  style=\"flex:1;padding:11px;border-radius:10px;border:1.5px solid var(--border);background:var(--white);font-family:var(--font-b);font-size:13px;font-weight:600;color:var(--tx-mid);cursor:pointer;transition:background .15s\"
                  onmouseover=\"this.style.background='var(--pu-ghost)'\" onmouseout=\"this.style.background='var(--white)'\">
            Annuler
          </button>
          <button id=\"deleteConfirmBtn\" onclick=\"confirmDelete()\"
                  style=\"flex:1;padding:11px;border-radius:10px;border:none;background:#DC2626;font-family:var(--font-h);font-size:13px;font-weight:700;color:white;cursor:pointer;transition:background .15s;display:flex;align-items:center;justify-content:center;gap:6px\"
                  onmouseover=\"this.style.background='#B91C1C'\" onmouseout=\"this.style.background='#DC2626'\">
            🗑 Supprimer
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- TOAST -->
<div class=\"toast\" id=\"toast\"></div>

<script>
// ═══════════════════════════════════════════════════════
// CONFIG
// ═══════════════════════════════════════════════════════
const API = {
  list:   '/activites/api/list',
  add:    '/activites/api/add',
  update: id => `/activites/api/update/\${id}`,
  delete: id => `/activites/api/delete/\${id}`,
};

let selectedExercise = null;
let currentFilter    = 'all';
let editingId        = null;

// ═══════════════════════════════════════════════════════
// INIT
// ═══════════════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', () => {
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('dateSeance').value = today;

  // Category filter
  document.querySelectorAll('.cat-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.cat-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      currentFilter = btn.dataset.cat;
      filterExercises(currentFilter);
    });
  });

  // Log form
  document.getElementById('logForm').addEventListener('submit', handleLogSubmit);
  // Edit form
  document.getElementById('editForm').addEventListener('submit', handleEditSubmit);

  // Avatar dropdown
  const avatarBtn = document.getElementById('avatarBtn');
  const profileDropdown = document.getElementById('profileDropdown');
  avatarBtn.addEventListener('click', e => { e.stopPropagation(); profileDropdown.classList.toggle('open'); });

  // Init favourites
  initFavs();
  document.addEventListener('click', () => profileDropdown.classList.remove('open'));

  // Close modals on overlay click
  document.querySelectorAll('.modal-overlay').forEach(overlay => {
    overlay.addEventListener('click', e => { if (e.target === overlay) closeModal(overlay.id); });
  });

  // Update sidebar exercise count
  updateSideStreak();
});

// ═══════════════════════════════════════════════════════
// EXERCISE FILTER
// ═══════════════════════════════════════════════════════
function filterExercises(filter) {
  document.querySelectorAll('.ex-card').forEach(card => {
    const cat = (card.dataset.cat || '').toLowerCase();
    if (filter === 'all') {
      card.style.display = '';
    } else {
      card.style.display = cat.includes(filter.toLowerCase()) ? '' : 'none';
    }
  });
}

// ═══════════════════════════════════════════════════════
// SELECT EXERCISE
// ═══════════════════════════════════════════════════════
function selectExercise(el) {
  // Remove previous selection
  document.querySelectorAll('.ex-card.selected').forEach(c => c.classList.remove('selected'));
  el.classList.add('selected');

  selectedExercise = {
    id:    el.dataset.id,
    name:  el.dataset.name,
    type:  el.dataset.type,
    icon:  el.dataset.icon,
    video: el.dataset.video,
  };

  document.getElementById('exerciseId').value = selectedExercise.id;
  const info = document.getElementById('selectedInfo');
  info.classList.add('show');
  document.getElementById('selectedIcon').textContent = selectedExercise.icon;
  document.getElementById('selectedName').textContent = selectedExercise.name;
  document.getElementById('selectedType').textContent = selectedExercise.type.replace(/_/g, ' ');

  // Hide exercice error if it was shown
  document.getElementById('err-exercice').classList.remove('show');

  showToast('info', selectedExercise.icon + ' ' + selectedExercise.name + ' sélectionné');
}

// ═══════════════════════════════════════════════════════
// FORM SUBMIT — ADD
// ═══════════════════════════════════════════════════════
async function handleLogSubmit(e) {
  e.preventDefault();
  let valid = true;

  // Validate exercice
  const exerciceId = document.getElementById('exerciseId').value;
  const errEx = document.getElementById('err-exercice');
  if (!exerciceId) {
    errEx.classList.add('show');
    valid = false;
  } else {
    errEx.classList.remove('show');
  }

  // Validate durée
  const duree = parseInt(document.getElementById('duree').value);
  const dureeField = document.getElementById('duree');
  const errDuree = document.getElementById('err-duree');
  if (!duree || duree < 1 || duree > 300) {
    dureeField.classList.add('input-error');
    errDuree.classList.add('show');
    valid = false;
  } else {
    dureeField.classList.remove('input-error');
    errDuree.classList.remove('show');
  }

  // Validate date
  const dateSeance = document.getElementById('dateSeance').value;
  const dateField = document.getElementById('dateSeance');
  const errDate = document.getElementById('err-date');
  if (!dateSeance) {
    dateField.classList.add('input-error');
    errDate.classList.add('show');
    valid = false;
  } else {
    dateField.classList.remove('input-error');
    errDate.classList.remove('show');
  }

  if (!valid) { showToast('error', '⚠ Veuillez corriger les erreurs.'); return; }

  const btn = document.getElementById('submitBtn');
  btn.disabled = true;
  btn.textContent = '⏳ Enregistrement...';

  const payload = {
    exercice_id:     parseInt(exerciceId),
    duree_minutes:   duree,
    date_activite:   dateSeance,
    calories_brulees: parseInt(document.getElementById('calories').value) || null,
    poids:            parseFloat(document.getElementById('poids').value) || null,
    nb_series:        parseInt(document.getElementById('series').value) || null,
    nb_repetitions:   parseInt(document.getElementById('reps').value) || null,
    notes:            document.getElementById('notes').value.trim() || null,
  };

  try {
    const res = await fetch(API.add, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload),
    });
    const data = await res.json();

    if (data.success) {
      showToast('success', '✅ Exercice ajouté à la séance du ' + formatDate(dateSeance));
      updateStats(data.stats);
      // Reload page to reflect DB changes
      setTimeout(() => location.reload(), 800);
    } else {
      if (data.errors) {
        Object.entries(data.errors).forEach(([k, msg]) => {
          const el = document.getElementById('err-' + k);
          if (el) { el.textContent = '⚠ ' + msg; el.classList.add('show'); }
        });
      }
      showToast('error', '⚠ Erreur lors de l\\'enregistrement.');
    }
  } catch (err) {
    showToast('error', '⚠ Erreur réseau. Vérifiez la connexion.');
  } finally {
    btn.disabled = false;
    btn.innerHTML = '<span>💾</span> Enregistrer dans la séance';
  }
}

// ═══════════════════════════════════════════════════════
// EDIT ACTIVITE
// ═══════════════════════════════════════════════════════
function openEdit(id, duree, cal, ser, reps, poids, notes) {
  editingId = id;
  document.getElementById('editId').value      = id;
  document.getElementById('editDuree').value   = duree || '';
  document.getElementById('editCalories').value= cal || '';
  document.getElementById('editSeries').value  = ser || '';
  document.getElementById('editReps').value    = reps || '';
  document.getElementById('editPoids').value   = poids || '';
  document.getElementById('editNotes').value   = notes || '';
  openModal('editModal');
}

async function handleEditSubmit(e) {
  e.preventDefault();
  const duree = parseInt(document.getElementById('editDuree').value);
  const errDuree = document.getElementById('err-edit-duree');
  const dureeField = document.getElementById('editDuree');

  if (!duree || duree < 1 || duree > 300) {
    dureeField.classList.add('input-error');
    errDuree.classList.add('show');
    return;
  }
  dureeField.classList.remove('input-error');
  errDuree.classList.remove('show');

  const payload = {
    duree_minutes:   duree,
    calories_brulees: document.getElementById('editCalories').value || null,
    nb_series:        document.getElementById('editSeries').value || null,
    nb_repetitions:   document.getElementById('editReps').value || null,
    poids:            document.getElementById('editPoids').value || null,
    notes:            document.getElementById('editNotes').value.trim() || null,
  };

  try {
    const res = await fetch(API.update(editingId), {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload),
    });
    const data = await res.json();
    if (data.success) {
      showToast('success', '✏️ Exercice modifié avec succès !');
      updateStats(data.stats);
      closeModal('editModal');
      setTimeout(() => location.reload(), 600);
    } else {
      showToast('error', '⚠ Erreur lors de la modification.');
    }
  } catch {
    showToast('error', '⚠ Erreur réseau.');
  }
}

// ═══════════════════════════════════════════════════════
// DELETE ACTIVITE (with modal)
// ═══════════════════════════════════════════════════════
let _deleteTargetId = null;

function openDeleteModal(id, name) {
  _deleteTargetId = id;
  document.getElementById('deleteExName').textContent = name;
  openModal('deleteModal');
}

async function confirmDelete() {
  if (!_deleteTargetId) return;
  const btn = document.getElementById('deleteConfirmBtn');
  btn.innerHTML = '⏳ Suppression...';
  btn.disabled = true;
  try {
    const res = await fetch(API.delete(_deleteTargetId), { method: 'POST' });
    const data = await res.json();
    if (data.success) {
      closeModal('deleteModal');
      showToast('error', '🗑 Exercice retiré de la séance');
      updateStats(data.stats);
      setTimeout(() => location.reload(), 500);
    } else {
      showToast('error', '⚠ Erreur lors de la suppression.');
    }
  } catch {
    showToast('error', '⚠ Erreur réseau.');
  } finally {
    btn.innerHTML = '🗑 Supprimer';
    btn.disabled = false;
    _deleteTargetId = null;
  }
}

// ═══════════════════════════════════════════════════════
// DELETE WHOLE SESSION (by date) — deletes all activites on that date
// ═══════════════════════════════════════════════════════
async function deleteSession(date) {
  if (!confirm('Supprimer toute la séance du ' + formatDate(date) + ' ?')) return;
  try {
    const res = await fetch(API.list);
    const allData = await res.json();
    const session = allData.sessions.find(s => s.date === date);
    if (!session) { showToast('error', 'Séance introuvable.'); return; }

    for (const ex of session.exercises) {
      await fetch(API.delete(ex.id), { method: 'POST' });
    }
    showToast('error', '🗑 Séance du ' + formatDate(date) + ' supprimée');
    setTimeout(() => location.reload(), 600);
  } catch {
    showToast('error', '⚠ Erreur réseau.');
  }
}

// ═══════════════════════════════════════════════════════
// SESSION TOGGLE (accordion)
// ═══════════════════════════════════════════════════════
function toggleSession(headEl) {
  const block = headEl.closest('.session-block');
  const exercises = block.querySelector('.session-exercises');
  const toggle = block.querySelector('.session-toggle');
  exercises.classList.toggle('open');
  toggle.classList.toggle('open');
}

// ═══════════════════════════════════════════════════════
// UPDATE STATS (hero + sidebar)
// ═══════════════════════════════════════════════════════
function updateStats(stats) {
  if (!stats) return;
  document.getElementById('statSeances').textContent  = stats.sessions;
  document.getElementById('statMinutes').textContent  = stats.minutes;
  document.getElementById('statCalories').textContent = stats.calories;
  document.getElementById('sideSeances').textContent  = stats.sessions;
  document.getElementById('sideMin').textContent      = stats.minutes;
  document.getElementById('sideCal').textContent      = stats.calories;
}

function updateSideStreak() {
  // Count total exercises from server-side rendered data
  const rows = document.querySelectorAll('.ex-row').length;
  document.getElementById('sideStreak').textContent = rows;
}

// ═══════════════════════════════════════════════════════
// MODALS
// ═══════════════════════════════════════════════════════
function openModal(id) { document.getElementById(id).classList.add('open'); }
function closeModal(id) {
  document.getElementById(id).classList.remove('open');
  if (id === 'videoModal') document.getElementById('videoFrame').src = '';
}

function openVideo(url, name) {
  document.getElementById('videoTitle').textContent = '▶ ' + name;
  document.getElementById('videoFrame').src = url;
  openModal('videoModal');
}

// ═══════════════════════════════════════════════════════
// AI COACH
// ═══════════════════════════════════════════════════════
const AI_TIPS = [
  \"Pour progresser, augmentez la charge ou les répétitions chaque semaine ! 💪\",
  \"La récupération est essentielle : dormez 7-9h et reposez-vous 48h entre séances du même groupe.\",
  \"Hydratez-vous ! 500ml avant l'entraînement, 150ml toutes les 15-20 minutes pendant l'effort.\",
  \"Le HIIT brûle jusqu'à 30% de calories de plus que le cardio classique sur la même durée. ⚡\",
  \"Mangez des protéines dans les 30 minutes après l'effort pour optimiser la récupération musculaire. 🥩\",
  \"La constance bat l'intensité : 5 séances modérées > 1 séance intense par semaine. 🎯\",
  \"Faites des étirements dynamiques avant l'entraînement et statiques après. 🧘\",
];

function sendAI() {
  const input = document.getElementById('aiInput');
  const msg = input.value.trim();
  if (!msg) return;

  const msgs = document.getElementById('aiMessages');
  const thinking = document.getElementById('aiThinking');

  const userBubble = document.createElement('div');
  userBubble.className = 'ai-bubble user';
  userBubble.textContent = msg;
  msgs.insertBefore(userBubble, thinking);
  input.value = '';

  thinking.classList.add('show');
  msgs.scrollTop = msgs.scrollHeight;

  const lower = msg.toLowerCase();
  let response = AI_TIPS[Math.floor(Math.random() * AI_TIPS.length)];
  if (lower.includes('squat'))     response = \"Le squat : dos droit, genoux dans l'axe des pieds, descendez jusqu'à 90°. Maîtrisez la technique avant d'augmenter le poids ! 🦵\";
  else if (lower.includes('cardio')) response = \"Alternez HIIT et cardio Zone 2 pour progresser : le Zone 2 améliore l'endurance de base, le HIIT boost le métabolisme. ❤️\";
  else if (lower.includes('nutri') || lower.includes('manger')) response = \"Glucides complexes 1-2h avant l'entraînement, protéines + glucides dans les 30 min après. 🥗\";
  else if (lower.includes('repos') || lower.includes('récup')) response = \"Repos actif les jours off : marche légère, yoga ou stretching. Évitez l'inactivité totale. 😴\";

  setTimeout(() => {
    thinking.classList.remove('show');
    const botBubble = document.createElement('div');
    botBubble.className = 'ai-bubble bot';
    botBubble.textContent = response;
    msgs.insertBefore(botBubble, thinking);
    msgs.scrollTop = msgs.scrollHeight;
  }, 1000 + Math.random() * 600);
}

// ═══════════════════════════════════════════════════════
// FAVOURITES (localStorage)
// ═══════════════════════════════════════════════════════
const FAV_KEY = 'harmony_favs';

function loadFavs() {
  try { return JSON.parse(localStorage.getItem(FAV_KEY)) || {}; } catch { return {}; }
}

function saveFavs(favs) {
  localStorage.setItem(FAV_KEY, JSON.stringify(favs));
}

function toggleFav(btn) {
  const id   = btn.dataset.id;
  const name = btn.dataset.name;
  const type = btn.dataset.type;
  const icon = btn.dataset.icon;
  const favs = loadFavs();

  if (favs[id]) {
    delete favs[id];
    btn.classList.remove('active');
    btn.textContent = '⭐ Fav';
    showToast('info', '⭐ Retiré des favoris');
  } else {
    favs[id] = { id, name, type, icon };
    btn.classList.add('active');
    btn.textContent = '★ Favori';
    showToast('success', '⭐ ' + name + ' ajouté aux favoris !');
  }
  saveFavs(favs);
  renderFavList(favs);
}

function removeFav(id) {
  const favs = loadFavs();
  delete favs[id];
  saveFavs(favs);
  // Update button in grid if visible
  const btn = document.querySelector(`.fav-btn[data-id=\"\${id}\"]`);
  if (btn) { btn.classList.remove('active'); btn.textContent = '⭐ Fav'; }
  renderFavList(favs);
}

function renderFavList(favs) {
  const list  = document.getElementById('favList');
  const empty = document.getElementById('favEmpty');
  const count = document.getElementById('favCount');
  const keys  = Object.keys(favs);

  count.textContent = keys.length === 0
    ? '0 exercice fav'
    : keys.length + ' exercice' + (keys.length > 1 ? 's' : '') + ' fav';

  if (keys.length === 0) {
    list.innerHTML = '';
    list.appendChild(empty);
    empty.style.display = '';
    return;
  }

  list.innerHTML = '';
  keys.forEach(id => {
    const f = favs[id];
    const item = document.createElement('div');
    item.className = 'fav-item';
    item.innerHTML = `
      <div class=\"fav-item-icon\">\${f.icon}</div>
      <div class=\"fav-item-info\">
        <div class=\"fav-item-name\" title=\"\${f.name}\">\${f.name}</div>
        <div class=\"fav-item-type\">\${(f.type || '').replace(/_/g,' ')}</div>
      </div>
      <button class=\"fav-item-del\" title=\"Retirer des favoris\" onclick=\"removeFav('\${id}')\">✕</button>
    `;
    list.appendChild(item);
  });
}

function initFavs() {
  const favs = loadFavs();
  // Restore button states in the grid
  document.querySelectorAll('.fav-btn').forEach(btn => {
    if (favs[btn.dataset.id]) {
      btn.classList.add('active');
      btn.textContent = '★ Favori';
    }
  });
  renderFavList(favs);
}

// ═══════════════════════════════════════════════════════
// UTILS
// ═══════════════════════════════════════════════════════
function formatDate(dateStr) {
  if (!dateStr) return '';
  const d = new Date(dateStr + 'T00:00:00');
  return d.toLocaleDateString('fr-FR', { day: 'numeric', month: 'long', year: 'numeric' });
}

function showToast(type, msg) {
  const t = document.getElementById('toast');
  t.className = 'toast ' + type;
  t.textContent = msg;
  t.classList.add('show');
  clearTimeout(t._timeout);
  t._timeout = setTimeout(() => t.classList.remove('show'), 3400);
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
        return "activites/index.html.twig";
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
        return array (  1006 => 532,  997 => 529,  991 => 528,  988 => 527,  983 => 526,  971 => 525,  968 => 524,  962 => 523,  956 => 522,  951 => 521,  946 => 520,  941 => 519,  936 => 518,  931 => 517,  928 => 516,  923 => 515,  918 => 514,  916 => 513,  909 => 509,  905 => 508,  901 => 507,  884 => 492,  881 => 491,  873 => 488,  861 => 484,  845 => 483,  841 => 481,  835 => 480,  832 => 479,  825 => 478,  816 => 477,  810 => 476,  806 => 475,  801 => 473,  796 => 471,  791 => 470,  788 => 469,  784 => 468,  780 => 467,  776 => 466,  772 => 465,  768 => 464,  764 => 463,  761 => 462,  758 => 461,  754 => 460,  745 => 455,  739 => 454,  735 => 453,  729 => 452,  723 => 449,  716 => 446,  710 => 445,  707 => 444,  704 => 443,  699 => 442,  696 => 441,  693 => 440,  688 => 439,  684 => 437,  682 => 436,  671 => 430,  595 => 356,  588 => 354,  586 => 353,  577 => 349,  573 => 348,  569 => 347,  565 => 346,  562 => 345,  558 => 343,  550 => 341,  548 => 340,  542 => 337,  536 => 336,  528 => 333,  524 => 332,  518 => 329,  514 => 328,  510 => 327,  506 => 326,  502 => 325,  498 => 324,  495 => 323,  492 => 322,  488 => 321,  484 => 320,  480 => 319,  476 => 318,  472 => 317,  468 => 316,  465 => 315,  462 => 314,  458 => 313,  454 => 312,  450 => 311,  446 => 310,  443 => 309,  440 => 308,  435 => 307,  395 => 270,  388 => 266,  381 => 262,  362 => 245,  360 => 244,  347 => 243,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Activités — Harmony{% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=JetBrains+Mono:wght@400;600&display=swap\" rel=\"stylesheet\">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}

:root{
  --pu:#6A5ACD;--pu-dk:#4B3B9E;--pu-lt:#8B7FD4;--pu-pale:#EDE8FA;
  --pu-ghost:#F7F5FD;--pu-deep:#2D2060;
  --tx:#1C1733;--tx-mid:#4A4570;--tx-muted:#9590B8;
  --border:rgba(106,90,205,.12);--white:#FFFFFF;
  --shadow:0 8px 32px rgba(106,90,205,.14);
  --green:#22C55E;--red:#EF4444;--orange:#F59E0B;
  --card-r:18px;
  --font-h:'Syne',sans-serif;--font-b:'DM Sans',sans-serif;--font-m:'JetBrains Mono',monospace;
}

html,body{font-family:var(--font-b);background:var(--pu-ghost);color:var(--tx);overflow-x:hidden}

/* ── HERO ── */
.hero-banner{
  position:relative;overflow:hidden;height:220px;
  background:linear-gradient(135deg,rgba(29,16,80,.85) 0%,rgba(106,90,205,.75) 100%);
}
.hero-bg-img{
  position:absolute;inset:0;width:100%;height:100%;
  object-fit:cover;z-index:0;opacity:.55;
  filter:brightness(.85) saturate(1.1);
}
.hero-overlay{
  position:absolute;inset:0;
  background:linear-gradient(135deg,rgba(29,16,80,.7) 0%,rgba(106,90,205,.45) 100%);
  z-index:1;
}
.hero-content{
  position:relative;z-index:2;height:100%;
  display:flex;align-items:center;justify-content:space-between;
  padding:0 44px;gap:24px;
}
.hero-left h1{font-family:var(--font-h);font-size:30px;font-weight:800;color:white;letter-spacing:-.4px;margin-bottom:6px;text-shadow:0 2px 12px rgba(0,0,0,.4)}
.hero-left p{font-size:14px;color:rgba(255,255,255,.75);font-weight:300;text-shadow:0 1px 6px rgba(0,0,0,.3)}
.hero-stats{display:flex;gap:14px;flex-shrink:0}
.hstat{background:rgba(255,255,255,.14);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,.25);border-radius:14px;padding:14px 20px;text-align:center;min-width:90px}
.hstat-val{font-family:var(--font-h);font-size:24px;font-weight:800;color:white;text-shadow:0 1px 6px rgba(0,0,0,.3)}
.hstat-lbl{font-size:10px;color:rgba(255,255,255,.7);margin-top:2px;text-transform:uppercase;letter-spacing:.5px}

/* ── LAYOUT ── */
.page{max-width:1280px;margin:0 auto;padding:28px 36px 80px;display:grid;grid-template-columns:1fr 340px;gap:24px;align-items:start}
.main-col{display:flex;flex-direction:column;gap:20px}
.side-col{display:flex;flex-direction:column;gap:18px;position:sticky;top:78px}

/* ── CARDS ── */
.card{background:var(--white);border:1px solid var(--border);border-radius:var(--card-r);overflow:hidden}
.card-head{padding:16px 22px 12px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between}
.card-title{font-family:var(--font-h);font-size:15px;font-weight:700;color:var(--tx);display:flex;align-items:center;gap:8px}
.card-body{padding:18px 22px}

/* ── FILTERS ── */
.toolbar{display:flex;align-items:center;gap:12px;flex-wrap:wrap}
.date-input{padding:9px 14px;border:1.5px solid var(--border);border-radius:10px;font-family:var(--font-b);font-size:13px;color:var(--tx);background:var(--white);outline:none;transition:border-color .15s;cursor:pointer}
.date-input:focus{border-color:var(--pu)}
.cat-filters{display:flex;gap:6px;flex-wrap:wrap;flex:1}
.cat-btn{display:inline-flex;align-items:center;gap:5px;padding:7px 13px;border-radius:20px;border:1.5px solid var(--border);background:var(--white);font-family:var(--font-b);font-size:12px;font-weight:500;color:var(--tx-mid);cursor:pointer;transition:all .15s;white-space:nowrap}
.cat-btn:hover{border-color:var(--pu-lt);color:var(--pu);background:var(--pu-ghost)}
.cat-btn.active{background:var(--pu);border-color:var(--pu);color:white}

/* ── EXERCISE GRID ── */
.ex-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(190px,1fr));gap:14px}
.ex-card{background:var(--white);border:1.5px solid var(--border);border-radius:14px;overflow:hidden;cursor:pointer;transition:border-color .18s,transform .18s,box-shadow .18s;position:relative}
.ex-card:hover{border-color:var(--pu-lt);transform:translateY(-2px);box-shadow:var(--shadow)}
.ex-card.selected{border-color:var(--pu);box-shadow:0 0 0 3px rgba(106,90,205,.15)}
.ex-thumb{height:100px;background:var(--pu-ghost);display:flex;align-items:center;justify-content:center;font-size:36px;position:relative;overflow:hidden}
.ex-badge{position:absolute;top:7px;right:7px;font-size:9px;font-weight:700;letter-spacing:.4px;text-transform:uppercase;padding:2px 7px;border-radius:20px}
.ex-badge.cardio{background:#FEE2E2;color:#DC2626}
.ex-badge.force{background:#DBEAFE;color:#1D4ED8}
.ex-badge.souplesse{background:#D1FAE5;color:#065F46}
.ex-badge.endurance{background:#FEF3C7;color:#B45309}
.ex-badge.perte{background:#EDE9FE;color:#6D28D9}
.ex-body{padding:10px 12px}
.ex-name{font-family:var(--font-h);font-size:12.5px;font-weight:700;color:var(--tx);margin-bottom:3px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.ex-type{font-size:10.5px;color:var(--tx-muted)}
.ex-actions{display:flex;gap:5px;padding:0 12px 10px}
.btn-xs{flex:1;padding:5px;border-radius:7px;border:none;font-family:var(--font-b);font-size:10.5px;font-weight:600;cursor:pointer;transition:all .15s;display:flex;align-items:center;justify-content:center;gap:3px}
.btn-xs.v{background:var(--pu-pale);color:var(--pu)}
.btn-xs.v:hover{background:var(--pu);color:white}
.btn-xs.q{background:#F3F4F6;color:var(--tx-mid)}
.btn-xs.q:hover{background:var(--tx-mid);color:white}

/* ── FORM ── */
.log-form{display:flex;flex-direction:column;gap:13px}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:11px}
.form-group{display:flex;flex-direction:column;gap:4px}
.form-group.full{grid-column:1/-1}
label{font-size:11.5px;font-weight:600;color:var(--tx-mid);text-transform:uppercase;letter-spacing:.4px}
input,select,textarea{padding:9px 13px;border:1.5px solid var(--border);border-radius:9px;font-family:var(--font-b);font-size:13px;color:var(--tx);background:var(--white);outline:none;transition:border-color .15s;width:100%}
input:focus,select:focus,textarea:focus{border-color:var(--pu)}
input.input-error,select.input-error{border-color:var(--red)}
.err-msg{font-size:11px;color:var(--red);margin-top:2px;display:none;font-weight:500}
.err-msg.show{display:block}
textarea{resize:vertical;min-height:68px;line-height:1.5}
.btn-submit{width:100%;padding:12px;border-radius:10px;border:none;background:var(--pu);color:white;font-family:var(--font-h);font-size:14px;font-weight:700;cursor:pointer;transition:background .15s,transform .15s;display:flex;align-items:center;justify-content:center;gap:8px}
.btn-submit:hover{background:var(--pu-dk);transform:translateY(-1px)}
.btn-submit:disabled{background:var(--tx-muted);cursor:not-allowed;transform:none}
.selected-ex-info{background:var(--pu-ghost);border:1.5px solid var(--pu-pale);border-radius:9px;padding:11px 13px;display:flex;align-items:center;gap:11px;display:none}
.selected-ex-info.show{display:flex}
.sei-icon{font-size:22px}
.sei-name{font-family:var(--font-h);font-size:13.5px;font-weight:700;color:var(--pu)}
.sei-type{font-size:10.5px;color:var(--tx-muted)}

/* ── SESSIONS HISTORY ── */
.sessions-list{display:flex;flex-direction:column;gap:14px}
.session-block{background:var(--white);border:1px solid var(--border);border-radius:15px;overflow:hidden;transition:box-shadow .15s}
.session-block:hover{box-shadow:0 4px 20px rgba(106,90,205,.08)}
.session-head{
  padding:14px 18px;background:linear-gradient(90deg,var(--pu-ghost),var(--white));
  display:flex;align-items:center;justify-content:space-between;cursor:pointer;
  border-bottom:1px solid var(--border);
}
.session-date{font-family:var(--font-h);font-size:14px;font-weight:700;color:var(--pu);display:flex;align-items:center;gap:8px}
.session-meta{display:flex;align-items:center;gap:12px}
.session-badge{font-size:11px;font-weight:600;color:var(--tx-muted);background:var(--pu-ghost);padding:3px 9px;border-radius:10px}
.session-toggle{font-size:12px;color:var(--tx-muted);transition:transform .2s}
.session-toggle.open{transform:rotate(180deg)}
.session-exercises{display:none;padding:10px 14px}
.session-exercises.open{display:block}
.ex-row{
  display:flex;align-items:center;gap:12px;
  padding:10px 12px;border-radius:11px;margin-bottom:6px;
  background:var(--pu-ghost);border:1px solid var(--border);
  transition:border-color .15s;
}
.ex-row:hover{border-color:var(--pu-lt)}
.ex-row-icon{width:36px;height:36px;border-radius:9px;background:var(--pu-pale);display:grid;place-items:center;font-size:18px;flex-shrink:0}
.ex-row-info{flex:1;min-width:0}
.ex-row-name{font-family:var(--font-h);font-size:13px;font-weight:700;color:var(--tx);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.ex-row-meta{display:flex;gap:10px;margin-top:3px;flex-wrap:wrap}
.ex-row-tag{font-size:11px;color:var(--tx-muted);display:flex;align-items:center;gap:3px}
.ex-row-actions{display:flex;gap:5px;flex-shrink:0}
.btn-icon{width:30px;height:30px;border-radius:7px;border:1px solid var(--border);background:transparent;cursor:pointer;display:grid;place-items:center;font-size:13px;transition:all .15s}
.btn-icon:hover.edit{border-color:var(--pu);background:var(--pu-pale)}
.btn-icon:hover.del{border-color:var(--red);background:#FEE2E2}
.session-del-btn{
  padding:5px 12px;border-radius:8px;border:1.5px solid rgba(239,68,68,.3);
  background:transparent;color:#DC2626;font-size:11.5px;font-weight:600;font-family:var(--font-b);
  cursor:pointer;transition:background .15s;
}
.session-del-btn:hover{background:#FEE2E2}

/* ── STATS SIDEBAR ── */
.stats-grid{display:grid;grid-template-columns:1fr 1fr;gap:9px;margin-bottom:16px}
.stat-box{background:var(--pu-ghost);border:1px solid var(--border);border-radius:11px;padding:12px 14px;text-align:center}
.stat-box-val{font-family:var(--font-h);font-size:19px;font-weight:800;color:var(--pu)}
.stat-box-lbl{font-size:10.5px;color:var(--tx-muted);margin-top:2px}
.prog-item{margin-bottom:12px}
.prog-label{display:flex;justify-content:space-between;margin-bottom:4px}
.prog-name{font-size:12px;font-weight:500;color:var(--tx-mid)}
.prog-pct{font-family:var(--font-m);font-size:11.5px;color:var(--pu);font-weight:600}
.prog-track{height:5px;background:var(--pu-ghost);border-radius:5px;overflow:hidden}
.prog-fill{height:100%;border-radius:5px;background:linear-gradient(90deg,var(--pu-lt),var(--pu));transition:width .6s ease}

/* ── AI COACH ── */
.ai-chat{background:linear-gradient(135deg,var(--pu-deep),#3D2A8A);border-radius:var(--card-r);overflow:hidden}
.ai-head{padding:14px 18px;display:flex;align-items:center;gap:11px;border-bottom:1px solid rgba(255,255,255,.12)}
.ai-avatar{width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.15);display:grid;place-items:center;font-size:18px}
.ai-name{font-family:var(--font-h);font-size:13.5px;font-weight:700;color:white}
.ai-status{display:flex;align-items:center;gap:5px;font-size:10.5px;color:rgba(255,255,255,.6)}
.ai-dot{width:5px;height:5px;border-radius:50%;background:var(--green);animation:blink 1.8s infinite}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}
.ai-messages{padding:14px;height:200px;overflow-y:auto;display:flex;flex-direction:column;gap:9px}
.ai-messages::-webkit-scrollbar{width:3px}
.ai-messages::-webkit-scrollbar-thumb{background:rgba(255,255,255,.2);border-radius:3px}
.ai-bubble{max-width:85%;border-radius:13px;padding:9px 13px;font-size:12px;line-height:1.55}
.ai-bubble.bot{background:rgba(255,255,255,.12);color:rgba(255,255,255,.9);border-bottom-left-radius:3px;align-self:flex-start}
.ai-bubble.user{background:rgba(255,255,255,.22);color:white;font-weight:500;border-bottom-right-radius:3px;align-self:flex-end}
.ai-input-area{padding:10px 14px;border-top:1px solid rgba(255,255,255,.12);display:flex;gap:7px}
.ai-input{flex:1;padding:9px 13px;border-radius:9px;border:1px solid rgba(255,255,255,.2);background:rgba(255,255,255,.1);color:white;font-family:var(--font-b);font-size:12.5px;outline:none}
.ai-input::placeholder{color:rgba(255,255,255,.4)}
.ai-input:focus{border-color:rgba(255,255,255,.4)}
.ai-send{width:36px;height:36px;border-radius:9px;border:none;background:rgba(255,255,255,.2);color:white;cursor:pointer;display:grid;place-items:center;font-size:15px;transition:background .15s}
.ai-send:hover{background:rgba(255,255,255,.35)}
.ai-thinking{display:flex;gap:4px;align-items:center;padding:7px 13px;background:rgba(255,255,255,.12);border-radius:13px;border-bottom-left-radius:3px;align-self:flex-start;display:none}
.ai-thinking.show{display:flex}
.think-dot{width:5px;height:5px;border-radius:50%;background:rgba(255,255,255,.6)}
.think-dot:nth-child(1){animation:bounce .8s .0s infinite}
.think-dot:nth-child(2){animation:bounce .8s .15s infinite}
.think-dot:nth-child(3){animation:bounce .8s .3s infinite}
@keyframes bounce{0%,100%{transform:translateY(0)}50%{transform:translateY(-5px)}}

/* ── MODALS ── */
.modal-overlay{position:fixed;inset:0;background:rgba(20,15,50,.6);backdrop-filter:blur(6px);z-index:1000;display:none;align-items:center;justify-content:center;padding:20px}
.modal-overlay.open{display:flex}
.modal{background:var(--white);border-radius:20px;width:100%;max-width:520px;overflow:hidden;animation:slideUp .28s ease}
@keyframes slideUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
.modal-head{padding:18px 22px 14px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between}
.modal-title{font-family:var(--font-h);font-size:16px;font-weight:700;color:var(--tx)}
.modal-close{width:28px;height:28px;border-radius:7px;border:none;background:var(--pu-ghost);cursor:pointer;font-size:14px;display:grid;place-items:center;color:var(--tx-muted);transition:background .15s}
.modal-close:hover{background:var(--pu-pale);color:var(--pu)}
.modal-body{padding:22px}
.video-wrap{width:100%;padding-top:56.25%;border-radius:11px;background:var(--tx);position:relative;overflow:hidden}
.video-wrap iframe{position:absolute;inset:0;width:100%;height:100%;border:none}
.edit-form{display:flex;flex-direction:column;gap:12px}
.edit-row{display:grid;grid-template-columns:1fr 1fr;gap:10px}

/* ── TOAST ── */
.toast{position:fixed;bottom:26px;right:26px;z-index:2000;padding:12px 18px;border-radius:11px;font-family:var(--font-b);font-size:13px;font-weight:500;display:flex;align-items:center;gap:9px;transform:translateY(80px);opacity:0;transition:transform .3s,opacity .3s;max-width:340px}
.toast.show{transform:translateY(0);opacity:1}
.toast.success{background:#ECFDF5;color:#065F46;border:1px solid #A7F3D0}
.toast.error{background:#FEF2F2;color:#991B1B;border:1px solid #FCA5A5}
.toast.info{background:var(--pu-pale);color:var(--pu-dk);border:1px solid rgba(106,90,205,.25)}

/* ── EMPTY ── */
.empty{text-align:center;padding:36px 20px;color:var(--tx-muted)}
.empty-icon{font-size:36px;margin-bottom:8px;opacity:.45}
.empty-text{font-size:13px}

.btn-xs.fav-btn{background:#F3F4F6;color:var(--tx-mid)}
.btn-xs.fav-btn:hover{background:#FEF9C3;color:#B45309}
.btn-xs.fav-btn.active{background:#FEF9C3;color:#B45309;border:1px solid #FDE68A}
.fav-item{display:flex;align-items:center;gap:9px;padding:8px 10px;border-radius:10px;background:var(--pu-ghost);border:1px solid var(--border);margin-bottom:7px;transition:border-color .15s}
.fav-item:last-child{margin-bottom:0}
.fav-item:hover{border-color:var(--pu-lt)}
.fav-item-icon{font-size:18px;flex-shrink:0}
.fav-item-info{flex:1;min-width:0}
.fav-item-name{font-family:var(--font-h);font-size:12px;font-weight:700;color:var(--tx);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.fav-item-type{font-size:10px;color:var(--tx-muted)}
.fav-item-del{width:22px;height:22px;border-radius:6px;border:none;background:transparent;cursor:pointer;font-size:11px;color:var(--tx-muted);display:grid;place-items:center;flex-shrink:0;transition:background .15s,color .15s}
.fav-item-del:hover{background:#FEE2E2;color:#DC2626}

/* ── ANIM ── */
@keyframes fadeUp{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.fade{animation:fadeUp .35s ease both}
.d1{animation-delay:.06s}.d2{animation-delay:.12s}.d3{animation-delay:.18s}

/* ── RESPONSIVE ── */
@media(max-width:1024px){.page{grid-template-columns:1fr;padding:20px 18px 60px}.side-col{position:static}}
@media(max-width:640px){.topbar{padding:0 14px}.nav-links{display:none}.hero-content{flex-direction:column;align-items:flex-start;padding:20px 18px}.hero-stats{flex-wrap:wrap}.form-row,.edit-row{grid-template-columns:1fr}.ex-grid{grid-template-columns:repeat(auto-fill,minmax(150px,1fr))}}
</style>
{% endblock %}

{% block body %}
{% include '_planning_topbar.html.twig' %}

<!-- ═══ HERO BANNER (image de salle de sport) ═══ -->
<div class=\"hero-banner\">
  <img
    class=\"hero-bg-img\"
    src=\"https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=1400&q=80&auto=format&fit=crop\"
    alt=\"Salle de sport\"
    onerror=\"this.src='https://images.unsplash.com/photo-1571902943202-507ec2618e8f?w=1400&q=80'\"
  >
  <div class=\"hero-overlay\"></div>
  <div class=\"hero-content\">
    <div class=\"hero-left\">
      <h1>🏋 Journal d'Exercices</h1>
      <p>Planifiez, suivez et progressez — connecté à votre base de données.</p>
    </div>
    <div class=\"hero-stats\">
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"statSeances\">{{ stats.sessions }}</div>
        <div class=\"hstat-lbl\">Séances</div>
      </div>
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"statMinutes\">{{ stats.minutes }}</div>
        <div class=\"hstat-lbl\">Minutes</div>
      </div>
      <div class=\"hstat\">
        <div class=\"hstat-val\" id=\"statCalories\">{{ stats.calories }}</div>
        <div class=\"hstat-lbl\">Calories</div>
      </div>
    </div>
  </div>
</div>

<!-- ═══ PAGE ═══ -->
<div class=\"page\">

  <!-- ══ MAIN COLUMN ══ -->
  <div class=\"main-col\">

    <!-- FILTER BAR -->
    <div class=\"card fade\">
      <div class=\"card-body\" style=\"padding:14px 20px\">
        <div class=\"toolbar\">
          <div class=\"cat-filters\">
            <button class=\"cat-btn active\" data-cat=\"all\">🌟 Tous</button>
            <button class=\"cat-btn\" data-cat=\"Cardio\">🔴 Cardio</button>
            <button class=\"cat-btn\" data-cat=\"Force\">💪 Force</button>
            <button class=\"cat-btn\" data-cat=\"Souplesse\">🌿 Souplesse</button>
            <button class=\"cat-btn\" data-cat=\"Endurance\">⚡ Endurance</button>
            <button class=\"cat-btn\" data-cat=\"Perte\">🔥 Perte de poids</button>
          </div>
        </div>
      </div>
    </div>

    <!-- EXERCISE LIBRARY (from DB) -->
    <div class=\"card fade d1\">
      <div class=\"card-head\">
        <div class=\"card-title\">📚 Bibliothèque d'Exercices</div>
        <span style=\"font-size:11.5px;color:var(--tx-muted)\">Cliquez pour sélectionner</span>
      </div>
      <div class=\"card-body\">
        <div class=\"ex-grid\" id=\"exerciseGrid\">
          {% for ex in exercices %}
            {% set cat = ex.typeExercice|lower %}
            {% set badge = 'force' %}
            {% if 'cardio' in cat %}{% set badge = 'cardio' %}
            {% elseif 'souplesse' in cat %}{% set badge = 'souplesse' %}
            {% elseif 'endurance' in cat %}{% set badge = 'endurance' %}
            {% elseif 'perte' in cat %}{% set badge = 'perte' %}
            {% endif %}
            {% set icon = '🏃' %}
            {% if 'cardio' in cat %}{% set icon = '🏃' %}
            {% elseif 'force' in cat and 'femme' in cat %}{% set icon = '🧘‍♀️' %}
            {% elseif 'force' in cat %}{% set icon = '💪' %}
            {% elseif 'souplesse' in cat %}{% set icon = '🧘' %}
            {% elseif 'endurance' in cat %}{% set icon = '⚡' %}
            {% elseif 'perte' in cat %}{% set icon = '🔥' %}
            {% endif %}
            <div class=\"ex-card\"
                 data-id=\"{{ ex.id }}\"
                 data-name=\"{{ ex.nomExercice }}\"
                 data-type=\"{{ ex.typeExercice }}\"
                 data-icon=\"{{ icon }}\"
                 data-video=\"{{ ex.videoExercice }}\"
                 data-cat=\"{{ ex.typeExercice }}\"
                 onclick=\"selectExercise(this)\">
              <div class=\"ex-thumb\">
                <span>{{ icon }}</span>
                <span class=\"ex-badge {{ badge }}\">{{ ex.typeExercice|replace({'_':' '})|split(' ')|first }}</span>
              </div>
              <div class=\"ex-body\">
                <div class=\"ex-name\" title=\"{{ ex.nomExercice }}\">{{ ex.nomExercice }}</div>
                <div class=\"ex-type\">{{ ex.typeExercice|replace({'_':' '}) }}</div>
              </div>
              <div class=\"ex-actions\">
                {% if ex.videoExercice and 'http' in ex.videoExercice %}
                  <button class=\"btn-xs v\" onclick=\"event.stopPropagation();openVideo('{{ ex.videoExercice|e('html_attr') }}','{{ ex.nomExercice|e('html_attr') }}')\">▶ Vidéo</button>
                {% else %}
                  <button class=\"btn-xs v\" onclick=\"event.stopPropagation();showToast('info','Vidéo non disponible')\">▶ Vidéo</button>
                {% endif %}
                <button class=\"btn-xs fav-btn\" 
                        data-id=\"{{ ex.id }}\"
                        data-name=\"{{ ex.nomExercice|e('html_attr') }}\"
                        data-type=\"{{ ex.typeExercice|e('html_attr') }}\"
                        data-icon=\"{{ icon }}\"
                        onclick=\"event.stopPropagation();toggleFav(this)\">⭐ Fav</button>
              </div>
            </div>
          {% else %}
            <div class=\"empty\" style=\"grid-column:1/-1\"><div class=\"empty-icon\">🔍</div><div class=\"empty-text\">Aucun exercice en base de données</div></div>
          {% endfor %}
        </div>
      </div>
    </div>

    <!-- LOG FORM -->
    <div class=\"card fade d2\">
      <div class=\"card-head\">
        <div class=\"card-title\">✏️ Enregistrer un Exercice dans une Séance</div>
      </div>
      <div class=\"card-body\">
        <span class=\"err-msg\" id=\"err-exercice\" style=\"margin-bottom:6px\">⚠ Veuillez sélectionner un exercice dans la bibliothèque.</span>
        <div class=\"selected-ex-info\" id=\"selectedInfo\">
          <div class=\"sei-icon\" id=\"selectedIcon\">🏃</div>
          <div>
            <div class=\"sei-name\" id=\"selectedName\">—</div>
            <div class=\"sei-type\" id=\"selectedType\">—</div>
          </div>
        </div>

        <form class=\"log-form\" id=\"logForm\" novalidate style=\"margin-top:12px\">
          <input type=\"hidden\" id=\"exerciseId\" value=\"\">

          <div class=\"form-row\">
            <div class=\"form-group\">
              <label>Durée (minutes) *</label>
              <span class=\"err-msg\" id=\"err-duree\">⚠ Durée requise (1 – 300 min)</span>
              <input type=\"number\" id=\"duree\" placeholder=\"Ex: 30\" min=\"1\" max=\"300\">
            </div>
            <div class=\"form-group\">
              <label>Date de séance *</label>
              <span class=\"err-msg\" id=\"err-date\">⚠ Date requise</span>
              <input type=\"date\" id=\"dateSeance\">
            </div>
          </div>

          <div class=\"form-row\">
            <div class=\"form-group\">
              <label>Calories brûlées</label>
              <input type=\"number\" id=\"calories\" placeholder=\"Estimées\" min=\"0\">
            </div>
            <div class=\"form-group\">
              <label>Poids (kg)</label>
              <input type=\"number\" id=\"poids\" placeholder=\"Ex: 60\" min=\"0\" step=\"0.5\">
            </div>
          </div>

          <div class=\"form-row\">
            <div class=\"form-group\">
              <label>Séries</label>
              <input type=\"number\" id=\"series\" placeholder=\"Ex: 4\" min=\"0\">
            </div>
            <div class=\"form-group\">
              <label>Répétitions</label>
              <input type=\"number\" id=\"reps\" placeholder=\"Ex: 12\" min=\"0\">
            </div>
          </div>

          <div class=\"form-group full\">
            <label>Notes</label>
            <textarea id=\"notes\" placeholder=\"Observations, sensations...\"></textarea>
          </div>

          <button type=\"submit\" class=\"btn-submit\" id=\"submitBtn\">
            <span>💾</span> Enregistrer dans la séance
          </button>
        </form>
      </div>
    </div>

    <!-- SESSIONS HISTORY -->
    <div class=\"card fade d3\">
      <div class=\"card-head\">
        <div class=\"card-title\">📊 Historique des Séances</div>
        <span style=\"font-size:11.5px;color:var(--tx-muted)\" id=\"histCount\">
          {{ grouped|length }} séance{{ grouped|length != 1 ? 's' : '' }}
        </span>
      </div>
      <div class=\"card-body\" style=\"padding:12px 20px\">
        <div class=\"sessions-list\" id=\"sessionsList\">

          {% if grouped is empty %}
            <div class=\"empty\"><div class=\"empty-icon\">📋</div><div class=\"empty-text\">Aucune séance enregistrée.</div></div>
          {% else %}
            {% for date, acts in grouped %}
              {% set totalMin = 0 %}
              {% set totalCal = 0 %}
              {% for a in acts %}
                {% set totalMin = totalMin + a.dureeMinutes %}
                {% set totalCal = totalCal + a.caloriesBrulees %}
              {% endfor %}
              <div class=\"session-block\" id=\"session-{{ date|replace({'-':''}) }}\">
                <div class=\"session-head\" onclick=\"toggleSession(this)\">
                  <div class=\"session-date\">
                    📅 {{ date|date('d/m/Y') }}
                  </div>
                  <div class=\"session-meta\">
                    <span class=\"session-badge\">{{ acts|length }} exercice{{ acts|length != 1 ? 's' : '' }}</span>
                    <span class=\"session-badge\">⏱ {{ totalMin }} min</span>
                    {% if totalCal > 0 %}<span class=\"session-badge\">🔥 {{ totalCal }} kcal</span>{% endif %}
                    <button class=\"session-del-btn\" onclick=\"event.stopPropagation();deleteSession('{{ date }}')\">🗑 Suppr. séance</button>
                    <span class=\"session-toggle\">▼</span>
                  </div>
                </div>
                <div class=\"session-exercises\">
                  {% for a in acts %}
                    {% set cat = a.exercice.typeExercice|lower %}
                    {% set icon = '🏃' %}
                    {% if 'cardio' in cat %}{% set icon = '🏃' %}
                    {% elseif 'force' in cat and 'femme' in cat %}{% set icon = '🧘‍♀️' %}
                    {% elseif 'force' in cat %}{% set icon = '💪' %}
                    {% elseif 'souplesse' in cat %}{% set icon = '🧘' %}
                    {% elseif 'endurance' in cat %}{% set icon = '⚡' %}
                    {% elseif 'perte' in cat %}{% set icon = '🔥' %}
                    {% endif %}
                    <div class=\"ex-row\" id=\"exrow-{{ a.id }}\">
                      <div class=\"ex-row-icon\">{{ icon }}</div>
                      <div class=\"ex-row-info\">
                        <div class=\"ex-row-name\">{{ a.exercice.nomExercice }}</div>
                        <div class=\"ex-row-meta\">
                          <span class=\"ex-row-tag\">⏱ {{ a.dureeMinutes }} min</span>
                          {% if a.caloriesBrulees %}<span class=\"ex-row-tag\">🔥 {{ a.caloriesBrulees }} kcal</span>{% endif %}
                          {% if a.nbSeries %}<span class=\"ex-row-tag\">✖ {{ a.nbSeries }}×{{ a.nbRepetitions ?: '?' }}</span>{% endif %}
                          {% if a.poids %}<span class=\"ex-row-tag\">⚖ {{ a.poids }} kg</span>{% endif %}
                        </div>
                        {% if a.notes %}<div style=\"font-size:11px;color:var(--tx-muted);margin-top:3px;font-style:italic\">\"{{ a.notes }}\"</div>{% endif %}
                      </div>
                      <div class=\"ex-row-actions\">
                        <button class=\"btn-icon edit\" title=\"Modifier\" onclick=\"openEdit({{ a.id }}, {{ a.dureeMinutes }}, {{ a.caloriesBrulees ?: 0 }}, {{ a.nbSeries ?: 0 }}, {{ a.nbRepetitions ?: 0 }}, {{ a.poids ?: 0 }}, '{{ a.notes|e('html_attr') }}')\">✏️</button>
                        <button class=\"btn-icon del\" title=\"Supprimer de la séance\" onclick=\"event.stopPropagation();openDeleteModal({{ a.id }}, '{{ a.exercice.nomExercice|e('html_attr') }}')\">🗑</button>
                      </div>
                    </div>
                  {% endfor %}
                </div>
              </div>
            {% endfor %}
          {% endif %}

        </div>
      </div>
    </div>

  </div>

  <!-- ══ SIDE COLUMN ══ -->
  <div class=\"side-col\">

    <!-- STATS -->
    <div class=\"card fade\">
      <div class=\"card-head\"><div class=\"card-title\">📈 Mes Stats</div></div>
      <div class=\"card-body\" style=\"padding:14px 18px\">
        <div class=\"stats-grid\">
          <div class=\"stat-box\"><div class=\"stat-box-val\" id=\"sideSeances\">{{ stats.sessions }}</div><div class=\"stat-box-lbl\">Séances</div></div>
          <div class=\"stat-box\"><div class=\"stat-box-val\" id=\"sideMin\">{{ stats.minutes }}</div><div class=\"stat-box-lbl\">Minutes</div></div>
          <div class=\"stat-box\"><div class=\"stat-box-val\" id=\"sideCal\">{{ stats.calories }}</div><div class=\"stat-box-lbl\">Calories</div></div>
          <div class=\"stat-box\"><div class=\"stat-box-val\" id=\"sideStreak\">—</div><div class=\"stat-box-lbl\">Exercices</div></div>
        </div>
        <div id=\"categoryProgress\">
          {% set cats = {'Cardio':0,'Force':0,'Souplesse':0,'Endurance':0,'Perte':0} %}
          {% for date, acts in grouped %}
            {% for a in acts %}
              {% set t = a.exercice.typeExercice %}
              {% if 'Cardio' in t %}{% set cats = cats|merge({'Cardio': cats['Cardio']+1}) %}{% endif %}
              {% if 'Force' in t %}{% set cats = cats|merge({'Force': cats['Force']+1}) %}{% endif %}
              {% if 'Souplesse' in t %}{% set cats = cats|merge({'Souplesse': cats['Souplesse']+1}) %}{% endif %}
              {% if 'Endurance' in t %}{% set cats = cats|merge({'Endurance': cats['Endurance']+1}) %}{% endif %}
              {% if 'Perte' in t %}{% set cats = cats|merge({'Perte': cats['Perte']+1}) %}{% endif %}
            {% endfor %}
          {% endfor %}
          {% set maxCat = 1 %}
          {% for k, v in cats %}{% if v > maxCat %}{% set maxCat = v %}{% endif %}{% endfor %}
          {% for k, v in cats %}
            <div class=\"prog-item\">
              <div class=\"prog-label\"><span class=\"prog-name\">{{ k }}</span><span class=\"prog-pct\">{{ v }}</span></div>
              <div class=\"prog-track\"><div class=\"prog-fill\" style=\"width:{{ maxCat > 0 ? (v/maxCat*100)|round : 0 }}%\"></div></div>
            </div>
          {% endfor %}
        </div>
      </div>
    </div>

    <!-- FAVORIS -->
    <div class=\"card fade d1\" id=\"favCard\">
      <div class=\"card-head\">
        <div class=\"card-title\">⭐ Mes Favoris</div>
        <span id=\"favCount\" style=\"font-size:11.5px;color:var(--tx-muted)\">0 exercice fav</span>
      </div>
      <div class=\"card-body\" style=\"padding:10px 14px\">
        <div id=\"favList\">
          <div class=\"empty\" style=\"padding:18px 10px\" id=\"favEmpty\">
            <div class=\"empty-icon\" style=\"font-size:26px\">⭐</div>
            <div class=\"empty-text\">0 exercices favoris</div>
          </div>
        </div>
      </div>
    </div>

    <!-- AI COACH -->
    <div class=\"ai-chat fade d1\">
      <div class=\"ai-head\">
        <div class=\"ai-avatar\">🤖</div>
        <div>
          <div class=\"ai-name\">Coach IA</div>
          <div class=\"ai-status\"><span class=\"ai-dot\"></span> En ligne</div>
        </div>
      </div>
      <div class=\"ai-messages\" id=\"aiMessages\">
        <div class=\"ai-bubble bot\">👋 Bonjour ! Posez-moi une question sur votre entraînement !</div>
        <div class=\"ai-thinking\" id=\"aiThinking\"><div class=\"think-dot\"></div><div class=\"think-dot\"></div><div class=\"think-dot\"></div></div>
      </div>
      <div class=\"ai-input-area\">
        <input class=\"ai-input\" id=\"aiInput\" placeholder=\"Conseil d'entraînement...\" onkeydown=\"if(event.key==='Enter')sendAI()\">
        <button class=\"ai-send\" onclick=\"sendAI()\">➤</button>
      </div>
    </div>

  </div>
</div>

<!-- ═══ VIDEO MODAL ═══ -->
<div class=\"modal-overlay\" id=\"videoModal\">
  <div class=\"modal\">
    <div class=\"modal-head\">
      <div class=\"modal-title\" id=\"videoTitle\">Démonstration</div>
      <button class=\"modal-close\" onclick=\"closeModal('videoModal')\">✕</button>
    </div>
    <div class=\"modal-body\">
      <div class=\"video-wrap\">
        <iframe id=\"videoFrame\" src=\"\" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!-- ═══ EDIT MODAL ═══ -->
<div class=\"modal-overlay\" id=\"editModal\">
  <div class=\"modal\">
    <div class=\"modal-head\">
      <div class=\"modal-title\">✏️ Modifier l'Exercice</div>
      <button class=\"modal-close\" onclick=\"closeModal('editModal')\">✕</button>
    </div>
    <div class=\"modal-body\">
      <form class=\"edit-form\" id=\"editForm\" novalidate>
        <input type=\"hidden\" id=\"editId\">
        <div class=\"edit-row\">
          <div class=\"form-group\">
            <label>Durée (min) *</label>
            <input type=\"number\" id=\"editDuree\" min=\"1\" max=\"300\" placeholder=\"Ex: 30\">
            <span class=\"err-msg\" id=\"err-edit-duree\">⚠ Durée requise (1–300)</span>
          </div>
          <div class=\"form-group\">
            <label>Calories</label>
            <input type=\"number\" id=\"editCalories\" min=\"0\" placeholder=\"Ex: 200\">
          </div>
        </div>
        <div class=\"edit-row\">
          <div class=\"form-group\">
            <label>Séries</label>
            <input type=\"number\" id=\"editSeries\" min=\"0\" placeholder=\"Ex: 4\">
          </div>
          <div class=\"form-group\">
            <label>Répétitions</label>
            <input type=\"number\" id=\"editReps\" min=\"0\" placeholder=\"Ex: 12\">
          </div>
        </div>
        <div class=\"form-group\">
          <label>Poids (kg)</label>
          <input type=\"number\" id=\"editPoids\" min=\"0\" step=\"0.5\" placeholder=\"Ex: 60\">
        </div>
        <div class=\"form-group\">
          <label>Notes</label>
          <textarea id=\"editNotes\" style=\"min-height:58px\"></textarea>
        </div>
        <button type=\"submit\" class=\"btn-submit\"><span>💾</span> Sauvegarder</button>
      </form>
    </div>
  </div>
</div>

<!-- ═══ DELETE CONFIRM MODAL ═══ -->
<div class=\"modal-overlay\" id=\"deleteModal\">
  <div class=\"modal\" style=\"max-width:400px\">
    <div class=\"modal-head\" style=\"background:linear-gradient(135deg,#FEF2F2,#FFF)\">
      <div class=\"modal-title\" style=\"color:#DC2626\">🗑 Supprimer l'exercice</div>
      <button class=\"modal-close\" onclick=\"closeModal('deleteModal')\">✕</button>
    </div>
    <div class=\"modal-body\" style=\"padding:24px 22px\">
      <div style=\"display:flex;flex-direction:column;align-items:center;gap:16px;text-align:center\">
        <div style=\"width:56px;height:56px;border-radius:50%;background:#FEE2E2;display:grid;place-items:center;font-size:26px\">🗑</div>
        <div>
          <div style=\"font-family:var(--font-h);font-size:15px;font-weight:700;color:var(--tx);margin-bottom:6px\">Confirmer la suppression</div>
          <div style=\"font-size:13px;color:var(--tx-mid)\">Voulez-vous retirer <strong id=\"deleteExName\" style=\"color:var(--pu)\"></strong> de cette séance ?</div>
          <div style=\"font-size:11.5px;color:var(--tx-muted);margin-top:6px\">Cette action est irréversible.</div>
        </div>
        <div style=\"display:flex;gap:10px;width:100%;margin-top:4px\">
          <button onclick=\"closeModal('deleteModal')\" 
                  style=\"flex:1;padding:11px;border-radius:10px;border:1.5px solid var(--border);background:var(--white);font-family:var(--font-b);font-size:13px;font-weight:600;color:var(--tx-mid);cursor:pointer;transition:background .15s\"
                  onmouseover=\"this.style.background='var(--pu-ghost)'\" onmouseout=\"this.style.background='var(--white)'\">
            Annuler
          </button>
          <button id=\"deleteConfirmBtn\" onclick=\"confirmDelete()\"
                  style=\"flex:1;padding:11px;border-radius:10px;border:none;background:#DC2626;font-family:var(--font-h);font-size:13px;font-weight:700;color:white;cursor:pointer;transition:background .15s;display:flex;align-items:center;justify-content:center;gap:6px\"
                  onmouseover=\"this.style.background='#B91C1C'\" onmouseout=\"this.style.background='#DC2626'\">
            🗑 Supprimer
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- TOAST -->
<div class=\"toast\" id=\"toast\"></div>

<script>
// ═══════════════════════════════════════════════════════
// CONFIG
// ═══════════════════════════════════════════════════════
const API = {
  list:   '/activites/api/list',
  add:    '/activites/api/add',
  update: id => `/activites/api/update/\${id}`,
  delete: id => `/activites/api/delete/\${id}`,
};

let selectedExercise = null;
let currentFilter    = 'all';
let editingId        = null;

// ═══════════════════════════════════════════════════════
// INIT
// ═══════════════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', () => {
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('dateSeance').value = today;

  // Category filter
  document.querySelectorAll('.cat-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.cat-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      currentFilter = btn.dataset.cat;
      filterExercises(currentFilter);
    });
  });

  // Log form
  document.getElementById('logForm').addEventListener('submit', handleLogSubmit);
  // Edit form
  document.getElementById('editForm').addEventListener('submit', handleEditSubmit);

  // Avatar dropdown
  const avatarBtn = document.getElementById('avatarBtn');
  const profileDropdown = document.getElementById('profileDropdown');
  avatarBtn.addEventListener('click', e => { e.stopPropagation(); profileDropdown.classList.toggle('open'); });

  // Init favourites
  initFavs();
  document.addEventListener('click', () => profileDropdown.classList.remove('open'));

  // Close modals on overlay click
  document.querySelectorAll('.modal-overlay').forEach(overlay => {
    overlay.addEventListener('click', e => { if (e.target === overlay) closeModal(overlay.id); });
  });

  // Update sidebar exercise count
  updateSideStreak();
});

// ═══════════════════════════════════════════════════════
// EXERCISE FILTER
// ═══════════════════════════════════════════════════════
function filterExercises(filter) {
  document.querySelectorAll('.ex-card').forEach(card => {
    const cat = (card.dataset.cat || '').toLowerCase();
    if (filter === 'all') {
      card.style.display = '';
    } else {
      card.style.display = cat.includes(filter.toLowerCase()) ? '' : 'none';
    }
  });
}

// ═══════════════════════════════════════════════════════
// SELECT EXERCISE
// ═══════════════════════════════════════════════════════
function selectExercise(el) {
  // Remove previous selection
  document.querySelectorAll('.ex-card.selected').forEach(c => c.classList.remove('selected'));
  el.classList.add('selected');

  selectedExercise = {
    id:    el.dataset.id,
    name:  el.dataset.name,
    type:  el.dataset.type,
    icon:  el.dataset.icon,
    video: el.dataset.video,
  };

  document.getElementById('exerciseId').value = selectedExercise.id;
  const info = document.getElementById('selectedInfo');
  info.classList.add('show');
  document.getElementById('selectedIcon').textContent = selectedExercise.icon;
  document.getElementById('selectedName').textContent = selectedExercise.name;
  document.getElementById('selectedType').textContent = selectedExercise.type.replace(/_/g, ' ');

  // Hide exercice error if it was shown
  document.getElementById('err-exercice').classList.remove('show');

  showToast('info', selectedExercise.icon + ' ' + selectedExercise.name + ' sélectionné');
}

// ═══════════════════════════════════════════════════════
// FORM SUBMIT — ADD
// ═══════════════════════════════════════════════════════
async function handleLogSubmit(e) {
  e.preventDefault();
  let valid = true;

  // Validate exercice
  const exerciceId = document.getElementById('exerciseId').value;
  const errEx = document.getElementById('err-exercice');
  if (!exerciceId) {
    errEx.classList.add('show');
    valid = false;
  } else {
    errEx.classList.remove('show');
  }

  // Validate durée
  const duree = parseInt(document.getElementById('duree').value);
  const dureeField = document.getElementById('duree');
  const errDuree = document.getElementById('err-duree');
  if (!duree || duree < 1 || duree > 300) {
    dureeField.classList.add('input-error');
    errDuree.classList.add('show');
    valid = false;
  } else {
    dureeField.classList.remove('input-error');
    errDuree.classList.remove('show');
  }

  // Validate date
  const dateSeance = document.getElementById('dateSeance').value;
  const dateField = document.getElementById('dateSeance');
  const errDate = document.getElementById('err-date');
  if (!dateSeance) {
    dateField.classList.add('input-error');
    errDate.classList.add('show');
    valid = false;
  } else {
    dateField.classList.remove('input-error');
    errDate.classList.remove('show');
  }

  if (!valid) { showToast('error', '⚠ Veuillez corriger les erreurs.'); return; }

  const btn = document.getElementById('submitBtn');
  btn.disabled = true;
  btn.textContent = '⏳ Enregistrement...';

  const payload = {
    exercice_id:     parseInt(exerciceId),
    duree_minutes:   duree,
    date_activite:   dateSeance,
    calories_brulees: parseInt(document.getElementById('calories').value) || null,
    poids:            parseFloat(document.getElementById('poids').value) || null,
    nb_series:        parseInt(document.getElementById('series').value) || null,
    nb_repetitions:   parseInt(document.getElementById('reps').value) || null,
    notes:            document.getElementById('notes').value.trim() || null,
  };

  try {
    const res = await fetch(API.add, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload),
    });
    const data = await res.json();

    if (data.success) {
      showToast('success', '✅ Exercice ajouté à la séance du ' + formatDate(dateSeance));
      updateStats(data.stats);
      // Reload page to reflect DB changes
      setTimeout(() => location.reload(), 800);
    } else {
      if (data.errors) {
        Object.entries(data.errors).forEach(([k, msg]) => {
          const el = document.getElementById('err-' + k);
          if (el) { el.textContent = '⚠ ' + msg; el.classList.add('show'); }
        });
      }
      showToast('error', '⚠ Erreur lors de l\\'enregistrement.');
    }
  } catch (err) {
    showToast('error', '⚠ Erreur réseau. Vérifiez la connexion.');
  } finally {
    btn.disabled = false;
    btn.innerHTML = '<span>💾</span> Enregistrer dans la séance';
  }
}

// ═══════════════════════════════════════════════════════
// EDIT ACTIVITE
// ═══════════════════════════════════════════════════════
function openEdit(id, duree, cal, ser, reps, poids, notes) {
  editingId = id;
  document.getElementById('editId').value      = id;
  document.getElementById('editDuree').value   = duree || '';
  document.getElementById('editCalories').value= cal || '';
  document.getElementById('editSeries').value  = ser || '';
  document.getElementById('editReps').value    = reps || '';
  document.getElementById('editPoids').value   = poids || '';
  document.getElementById('editNotes').value   = notes || '';
  openModal('editModal');
}

async function handleEditSubmit(e) {
  e.preventDefault();
  const duree = parseInt(document.getElementById('editDuree').value);
  const errDuree = document.getElementById('err-edit-duree');
  const dureeField = document.getElementById('editDuree');

  if (!duree || duree < 1 || duree > 300) {
    dureeField.classList.add('input-error');
    errDuree.classList.add('show');
    return;
  }
  dureeField.classList.remove('input-error');
  errDuree.classList.remove('show');

  const payload = {
    duree_minutes:   duree,
    calories_brulees: document.getElementById('editCalories').value || null,
    nb_series:        document.getElementById('editSeries').value || null,
    nb_repetitions:   document.getElementById('editReps').value || null,
    poids:            document.getElementById('editPoids').value || null,
    notes:            document.getElementById('editNotes').value.trim() || null,
  };

  try {
    const res = await fetch(API.update(editingId), {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload),
    });
    const data = await res.json();
    if (data.success) {
      showToast('success', '✏️ Exercice modifié avec succès !');
      updateStats(data.stats);
      closeModal('editModal');
      setTimeout(() => location.reload(), 600);
    } else {
      showToast('error', '⚠ Erreur lors de la modification.');
    }
  } catch {
    showToast('error', '⚠ Erreur réseau.');
  }
}

// ═══════════════════════════════════════════════════════
// DELETE ACTIVITE (with modal)
// ═══════════════════════════════════════════════════════
let _deleteTargetId = null;

function openDeleteModal(id, name) {
  _deleteTargetId = id;
  document.getElementById('deleteExName').textContent = name;
  openModal('deleteModal');
}

async function confirmDelete() {
  if (!_deleteTargetId) return;
  const btn = document.getElementById('deleteConfirmBtn');
  btn.innerHTML = '⏳ Suppression...';
  btn.disabled = true;
  try {
    const res = await fetch(API.delete(_deleteTargetId), { method: 'POST' });
    const data = await res.json();
    if (data.success) {
      closeModal('deleteModal');
      showToast('error', '🗑 Exercice retiré de la séance');
      updateStats(data.stats);
      setTimeout(() => location.reload(), 500);
    } else {
      showToast('error', '⚠ Erreur lors de la suppression.');
    }
  } catch {
    showToast('error', '⚠ Erreur réseau.');
  } finally {
    btn.innerHTML = '🗑 Supprimer';
    btn.disabled = false;
    _deleteTargetId = null;
  }
}

// ═══════════════════════════════════════════════════════
// DELETE WHOLE SESSION (by date) — deletes all activites on that date
// ═══════════════════════════════════════════════════════
async function deleteSession(date) {
  if (!confirm('Supprimer toute la séance du ' + formatDate(date) + ' ?')) return;
  try {
    const res = await fetch(API.list);
    const allData = await res.json();
    const session = allData.sessions.find(s => s.date === date);
    if (!session) { showToast('error', 'Séance introuvable.'); return; }

    for (const ex of session.exercises) {
      await fetch(API.delete(ex.id), { method: 'POST' });
    }
    showToast('error', '🗑 Séance du ' + formatDate(date) + ' supprimée');
    setTimeout(() => location.reload(), 600);
  } catch {
    showToast('error', '⚠ Erreur réseau.');
  }
}

// ═══════════════════════════════════════════════════════
// SESSION TOGGLE (accordion)
// ═══════════════════════════════════════════════════════
function toggleSession(headEl) {
  const block = headEl.closest('.session-block');
  const exercises = block.querySelector('.session-exercises');
  const toggle = block.querySelector('.session-toggle');
  exercises.classList.toggle('open');
  toggle.classList.toggle('open');
}

// ═══════════════════════════════════════════════════════
// UPDATE STATS (hero + sidebar)
// ═══════════════════════════════════════════════════════
function updateStats(stats) {
  if (!stats) return;
  document.getElementById('statSeances').textContent  = stats.sessions;
  document.getElementById('statMinutes').textContent  = stats.minutes;
  document.getElementById('statCalories').textContent = stats.calories;
  document.getElementById('sideSeances').textContent  = stats.sessions;
  document.getElementById('sideMin').textContent      = stats.minutes;
  document.getElementById('sideCal').textContent      = stats.calories;
}

function updateSideStreak() {
  // Count total exercises from server-side rendered data
  const rows = document.querySelectorAll('.ex-row').length;
  document.getElementById('sideStreak').textContent = rows;
}

// ═══════════════════════════════════════════════════════
// MODALS
// ═══════════════════════════════════════════════════════
function openModal(id) { document.getElementById(id).classList.add('open'); }
function closeModal(id) {
  document.getElementById(id).classList.remove('open');
  if (id === 'videoModal') document.getElementById('videoFrame').src = '';
}

function openVideo(url, name) {
  document.getElementById('videoTitle').textContent = '▶ ' + name;
  document.getElementById('videoFrame').src = url;
  openModal('videoModal');
}

// ═══════════════════════════════════════════════════════
// AI COACH
// ═══════════════════════════════════════════════════════
const AI_TIPS = [
  \"Pour progresser, augmentez la charge ou les répétitions chaque semaine ! 💪\",
  \"La récupération est essentielle : dormez 7-9h et reposez-vous 48h entre séances du même groupe.\",
  \"Hydratez-vous ! 500ml avant l'entraînement, 150ml toutes les 15-20 minutes pendant l'effort.\",
  \"Le HIIT brûle jusqu'à 30% de calories de plus que le cardio classique sur la même durée. ⚡\",
  \"Mangez des protéines dans les 30 minutes après l'effort pour optimiser la récupération musculaire. 🥩\",
  \"La constance bat l'intensité : 5 séances modérées > 1 séance intense par semaine. 🎯\",
  \"Faites des étirements dynamiques avant l'entraînement et statiques après. 🧘\",
];

function sendAI() {
  const input = document.getElementById('aiInput');
  const msg = input.value.trim();
  if (!msg) return;

  const msgs = document.getElementById('aiMessages');
  const thinking = document.getElementById('aiThinking');

  const userBubble = document.createElement('div');
  userBubble.className = 'ai-bubble user';
  userBubble.textContent = msg;
  msgs.insertBefore(userBubble, thinking);
  input.value = '';

  thinking.classList.add('show');
  msgs.scrollTop = msgs.scrollHeight;

  const lower = msg.toLowerCase();
  let response = AI_TIPS[Math.floor(Math.random() * AI_TIPS.length)];
  if (lower.includes('squat'))     response = \"Le squat : dos droit, genoux dans l'axe des pieds, descendez jusqu'à 90°. Maîtrisez la technique avant d'augmenter le poids ! 🦵\";
  else if (lower.includes('cardio')) response = \"Alternez HIIT et cardio Zone 2 pour progresser : le Zone 2 améliore l'endurance de base, le HIIT boost le métabolisme. ❤️\";
  else if (lower.includes('nutri') || lower.includes('manger')) response = \"Glucides complexes 1-2h avant l'entraînement, protéines + glucides dans les 30 min après. 🥗\";
  else if (lower.includes('repos') || lower.includes('récup')) response = \"Repos actif les jours off : marche légère, yoga ou stretching. Évitez l'inactivité totale. 😴\";

  setTimeout(() => {
    thinking.classList.remove('show');
    const botBubble = document.createElement('div');
    botBubble.className = 'ai-bubble bot';
    botBubble.textContent = response;
    msgs.insertBefore(botBubble, thinking);
    msgs.scrollTop = msgs.scrollHeight;
  }, 1000 + Math.random() * 600);
}

// ═══════════════════════════════════════════════════════
// FAVOURITES (localStorage)
// ═══════════════════════════════════════════════════════
const FAV_KEY = 'harmony_favs';

function loadFavs() {
  try { return JSON.parse(localStorage.getItem(FAV_KEY)) || {}; } catch { return {}; }
}

function saveFavs(favs) {
  localStorage.setItem(FAV_KEY, JSON.stringify(favs));
}

function toggleFav(btn) {
  const id   = btn.dataset.id;
  const name = btn.dataset.name;
  const type = btn.dataset.type;
  const icon = btn.dataset.icon;
  const favs = loadFavs();

  if (favs[id]) {
    delete favs[id];
    btn.classList.remove('active');
    btn.textContent = '⭐ Fav';
    showToast('info', '⭐ Retiré des favoris');
  } else {
    favs[id] = { id, name, type, icon };
    btn.classList.add('active');
    btn.textContent = '★ Favori';
    showToast('success', '⭐ ' + name + ' ajouté aux favoris !');
  }
  saveFavs(favs);
  renderFavList(favs);
}

function removeFav(id) {
  const favs = loadFavs();
  delete favs[id];
  saveFavs(favs);
  // Update button in grid if visible
  const btn = document.querySelector(`.fav-btn[data-id=\"\${id}\"]`);
  if (btn) { btn.classList.remove('active'); btn.textContent = '⭐ Fav'; }
  renderFavList(favs);
}

function renderFavList(favs) {
  const list  = document.getElementById('favList');
  const empty = document.getElementById('favEmpty');
  const count = document.getElementById('favCount');
  const keys  = Object.keys(favs);

  count.textContent = keys.length === 0
    ? '0 exercice fav'
    : keys.length + ' exercice' + (keys.length > 1 ? 's' : '') + ' fav';

  if (keys.length === 0) {
    list.innerHTML = '';
    list.appendChild(empty);
    empty.style.display = '';
    return;
  }

  list.innerHTML = '';
  keys.forEach(id => {
    const f = favs[id];
    const item = document.createElement('div');
    item.className = 'fav-item';
    item.innerHTML = `
      <div class=\"fav-item-icon\">\${f.icon}</div>
      <div class=\"fav-item-info\">
        <div class=\"fav-item-name\" title=\"\${f.name}\">\${f.name}</div>
        <div class=\"fav-item-type\">\${(f.type || '').replace(/_/g,' ')}</div>
      </div>
      <button class=\"fav-item-del\" title=\"Retirer des favoris\" onclick=\"removeFav('\${id}')\">✕</button>
    `;
    list.appendChild(item);
  });
}

function initFavs() {
  const favs = loadFavs();
  // Restore button states in the grid
  document.querySelectorAll('.fav-btn').forEach(btn => {
    if (favs[btn.dataset.id]) {
      btn.classList.add('active');
      btn.textContent = '★ Favori';
    }
  });
  renderFavList(favs);
}

// ═══════════════════════════════════════════════════════
// UTILS
// ═══════════════════════════════════════════════════════
function formatDate(dateStr) {
  if (!dateStr) return '';
  const d = new Date(dateStr + 'T00:00:00');
  return d.toLocaleDateString('fr-FR', { day: 'numeric', month: 'long', year: 'numeric' });
}

function showToast(type, msg) {
  const t = document.getElementById('toast');
  t.className = 'toast ' + type;
  t.textContent = msg;
  t.classList.add('show');
  clearTimeout(t._timeout);
  t._timeout = setTimeout(() => t.classList.remove('show'), 3400);
}
</script>
{% endblock %}
", "activites/index.html.twig", "C:\\Users\\user\\Downloads\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\Esprit-PIWEB-3A24-2526-Harmonie-forum-communication\\templates\\activites\\index.html.twig");
    }
}

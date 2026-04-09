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

/* admin/dashboard.html.twig */
class __TwigTemplate_1097a0fbfeb81354fa6e3e86d89a56c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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

        yield "Dashboard Admin — Harmony";
        
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

        yield "Tableau de bord";
        
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
        /* ── KPI CARDS ──────────────────────────────────────────────────── */
        .stats-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 28px; }
        .stat-card {
            background: var(--white); border: 1px solid var(--border); border-radius: 16px; padding: 24px;
            display: flex; align-items: center; gap: 16px; transition: border-color .2s, box-shadow .2s;
        }
        .stat-card:hover { border-color: var(--purple-soft); box-shadow: 0 6px 24px rgba(106,90,205,.1); }
        .stat-card-icon { width: 50px; height: 50px; border-radius: 13px; background: var(--purple-pale); display: grid; place-items: center; font-size: 24px; flex-shrink: 0; }
        .stat-card-val { font-family: var(--font-head); font-size: 30px; font-weight: 800; color: var(--text); }
        .stat-card-lbl { font-size: 12px; color: var(--text-muted); margin-top: 2px; }

        /* ── SECTION TITLE ──────────────────────────────────────────────── */
        .sec-title {
            font-family: var(--font-head); font-size: 15px; font-weight: 700; color: var(--text);
            margin: 28px 0 14px; display: flex; align-items: center; gap: 8px;
        }
        .sec-title::before { content:''; width:4px; height:16px; background:var(--purple); border-radius:4px; display:inline-block; }

        /* ── CHART GRID ─────────────────────────────────────────────────── */
        .charts-grid-top { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 18px; margin-bottom: 18px; }
        .charts-grid-bot { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 28px; }

        .chart-card {
            background: var(--white); border: 1px solid var(--border); border-radius: 18px;
            padding: 22px; position: relative; overflow: hidden;
        }
        .chart-card-title {
            font-family: var(--font-head); font-size: 13px; font-weight: 700; color: var(--text);
            margin-bottom: 16px; display: flex; align-items: center; gap: 7px;
        }
        .chart-card-title .sub { font-size: 11px; font-weight: 400; color: var(--text-muted); margin-left: 4px; }
        .canvas-wrap { position: relative; }
        .canvas-wrap canvas { max-width: 100% !important; }

        /* ── PRINT BTN ──────────────────────────────────────────────────── */
        .toolbar-row {
            display: flex; align-items: center; justify-content: space-between;
            margin-bottom: 22px;
        }
        .btn-pdf {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 10px 20px; background: #E05252; color: #fff;
            border: none; border-radius: 11px; font-family: var(--font-body);
            font-size: 13px; font-weight: 600; cursor: pointer;
            box-shadow: 0 3px 12px rgba(224,82,82,.3); transition: .15s;
        }
        .btn-pdf:hover { background: #c94444; }

        /* ── RECENT TABLE ───────────────────────────────────────────────── */
        .widget { background: var(--white); border: 1px solid var(--border); border-radius: 18px; overflow: hidden; }
        .widget-head { padding: 16px 22px; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; }
        .widget-title { font-family: var(--font-head); font-size: 15px; font-weight: 700; color: var(--text); }
        .see-all { font-size: 13px; color: var(--purple); text-decoration: none; }
        .see-all:hover { opacity: .7; }
        table { width: 100%; border-collapse: collapse; }
        th { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .7px; color: var(--text-muted); padding: 10px 20px; text-align: left; background: var(--purple-ghost); }
        td { padding: 12px 20px; font-size: 13.5px; color: var(--text); border-bottom: 1px solid var(--purple-ghost); }
        tr:last-child td { border: none; }
        .badge-active { background: #D1FAE5; color: #065F46; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }
        .badge-suspended { background: #FEE2E2; color: #991B1B; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }

        /* ── PRINT STYLES ───────────────────────────────────────────────── */
        @media print {
            .sidebar, .admin-topbar, .btn-pdf, .widget { display: none !important; }
            .admin-layout { display: block !important; }
            .admin-content { padding: 0 !important; }
            .chart-card { break-inside: avoid; border: 1px solid #ccc !important; }
            .print-header { display: block !important; }
        }
        .print-header {
            display: none;
            font-family: var(--font-head);
            font-size: 20px; font-weight: 800; margin-bottom: 20px;
            border-bottom: 2px solid #6A5ACD; padding-bottom: 10px;
        }
        .print-date { font-size: 12px; color: #666; font-weight: 400; margin-left: 12px; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
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

        // line 87
        yield "
    ";
        // line 89
        yield "    <div class=\"print-header\">
        📊 Harmony — Rapport statistiques
        <span class=\"print-date\">Généré le ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</span>
    </div>

    ";
        // line 95
        yield "    <div class=\"stats-row\">
        <div class=\"stat-card\">
            <div class=\"stat-card-icon\">👥</div>
            <div><div class=\"stat-card-val\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "</div><div class=\"stat-card-lbl\">Total étudiants</div></div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-card-icon\" style=\"background:#D1FAE5;\">✅</div>
            <div><div class=\"stat-card-val\" style=\"color:#065F46;\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 102, $this->source); })()), "html", null, true);
        yield "</div><div class=\"stat-card-lbl\">Comptes actifs</div></div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-card-icon\" style=\"background:#FEE2E2;\">🔒</div>
            <div><div class=\"stat-card-val\" style=\"color:#E05252;\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["suspended"]) || array_key_exists("suspended", $context) ? $context["suspended"] : (function () { throw new RuntimeError('Variable "suspended" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "</div><div class=\"stat-card-lbl\">Comptes suspendus</div></div>
        </div>
    </div>

    ";
        // line 111
        yield "    <div class=\"toolbar-row\">
        <div class=\"sec-title\" style=\"margin:0;\">📊 Statistiques des étudiants</div>
        <button class=\"btn-pdf\" onclick=\"imprimerStats()\">
            🖨 Exporter en PDF
        </button>
    </div>

    ";
        // line 119
        yield "    <div class=\"charts-grid-top\">

        <div class=\"chart-card\">
            <div class=\"chart-card-title\">⚧ Répartition par sexe</div>
            <div class=\"canvas-wrap\">
                <canvas id=\"chartSexe\" height=\"200\"></canvas>
            </div>
        </div>

        <div class=\"chart-card\">
            <div class=\"chart-card-title\">⚠ Scores de suspicion</div>
            <div class=\"canvas-wrap\">
                <canvas id=\"chartSuspicion\" height=\"200\"></canvas>
            </div>
        </div>

        <div class=\"chart-card\">
            <div class=\"chart-card-title\">🏃 Activité physique</div>
            <div class=\"canvas-wrap\">
                <canvas id=\"chartActivite\" height=\"200\"></canvas>
            </div>
        </div>

    </div>

    ";
        // line 145
        yield "    <div class=\"charts-grid-bot\">

        <div class=\"chart-card\">
            <div class=\"chart-card-title\">📅 Inscriptions <span class=\"sub\">(12 derniers mois)</span></div>
            <div class=\"canvas-wrap\">
                <canvas id=\"chartInscriptions\" height=\"160\"></canvas>
            </div>
        </div>

        <div class=\"chart-card\">
            <div class=\"chart-card-title\">🎓 Niveau scolaire</div>
            <div class=\"canvas-wrap\">
                <canvas id=\"chartNiveau\" height=\"160\"></canvas>
            </div>
        </div>

    </div>

    ";
        // line 164
        yield "    <div class=\"widget\">
        <div class=\"widget-head\">
            <div class=\"widget-title\">👥 Derniers inscrits</div>
            <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        yield "\" class=\"see-all\">Voir tous →</a>
        </div>
        <table>
            <thead>
            <tr><th>Nom</th><th>Email</th><th>Inscrit le</th><th>Statut</th><th></th></tr>
            </thead>
            <tbody>
            ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent"]) || array_key_exists("recent", $context) ? $context["recent"] : (function () { throw new RuntimeError('Variable "recent" does not exist.', 174, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 175
            yield "                <tr>
                    <td><strong>";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userPrenom", [], "any", false, false, false, 176), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userNom", [], "any", false, false, false, 176), "html", null, true);
            yield "</strong></td>
                    <td style=\"color:var(--text-muted);\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userEmail", [], "any", false, false, false, 177), "html", null, true);
            yield "</td>
                    <td style=\"color:var(--text-muted);\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "dateInscription", [], "any", false, false, false, 178), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 180
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "isActive", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 181
                yield "                            <span class=\"badge-active\">Actif</span>
                        ";
            } else {
                // line 183
                yield "                            <span class=\"badge-suspended\">Suspendu</span>
                        ";
            }
            // line 185
            yield "                    </td>
                    <td><a href=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userId", [], "any", false, false, false, 186)]), "html", null, true);
            yield "\" style=\"color:var(--purple);font-size:12px;font-weight:600;\">Voir →</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        yield "            </tbody>
        </table>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 195
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

        // line 196
        yield "    ";
        // line 197
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>

    <script>
    // ── Données passées depuis PHP/Twig ──────────────────────────────────────
    const dataSexe = ";
        // line 201
        yield json_encode((isset($context["sexeCount"]) || array_key_exists("sexeCount", $context) ? $context["sexeCount"] : (function () { throw new RuntimeError('Variable "sexeCount" does not exist.', 201, $this->source); })()));
        yield ";
    const dataSuspicion = ";
        // line 202
        yield json_encode((isset($context["suspicionDist"]) || array_key_exists("suspicionDist", $context) ? $context["suspicionDist"] : (function () { throw new RuntimeError('Variable "suspicionDist" does not exist.', 202, $this->source); })()));
        yield ";
    const dataActivite = ";
        // line 203
        yield json_encode((isset($context["activiteCount"]) || array_key_exists("activiteCount", $context) ? $context["activiteCount"] : (function () { throw new RuntimeError('Variable "activiteCount" does not exist.', 203, $this->source); })()));
        yield ";
    const dataInscriptions = ";
        // line 204
        yield json_encode((isset($context["inscriptionsByMonth"]) || array_key_exists("inscriptionsByMonth", $context) ? $context["inscriptionsByMonth"] : (function () { throw new RuntimeError('Variable "inscriptionsByMonth" does not exist.', 204, $this->source); })()));
        yield ";
    const dataNiveau = ";
        // line 205
        yield json_encode((isset($context["niveauCount"]) || array_key_exists("niveauCount", $context) ? $context["niveauCount"] : (function () { throw new RuntimeError('Variable "niveauCount" does not exist.', 205, $this->source); })()));
        yield ";

    // ── Palette cohérente ─────────────────────────────────────────────────────
    const PURPLE   = '#6A5ACD';
    const COLORS   = ['#6A5ACD','#10B981','#E05252','#E5A44B','#5CB89E','#8B7FD4','#F59E0B','#3B82F6'];
    const SUSPICION_COLORS = { 'Normal':'#10B981', 'Modéré':'#8B7FD4', 'Suspect':'#E5A44B', 'Très suspect':'#E05252' };

    // Utilitaire : objet → tableaux clés/valeurs
    const keys   = obj => Object.keys(obj);
    const vals   = obj => Object.values(obj);

    // ── 1. Camembert — Sexe ───────────────────────────────────────────────────
    new Chart(document.getElementById('chartSexe'), {
        type: 'doughnut',
        data: {
            labels: keys(dataSexe),
            datasets: [{ data: vals(dataSexe), backgroundColor: COLORS, borderWidth: 2, borderColor: '#fff' }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom', labels: { font: { size: 11 }, padding: 12 } }
            },
            cutout: '60%'
        }
    });

    // ── 2. Camembert — Suspicion ──────────────────────────────────────────────
    new Chart(document.getElementById('chartSuspicion'), {
        type: 'doughnut',
        data: {
            labels: keys(dataSuspicion),
            datasets: [{
                data: vals(dataSuspicion),
                backgroundColor: keys(dataSuspicion).map(k => SUSPICION_COLORS[k] || '#ccc'),
                borderWidth: 2, borderColor: '#fff'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom', labels: { font: { size: 11 }, padding: 12 } } },
            cutout: '60%'
        }
    });

    // ── 3. Barres horizontales — Activité physique ────────────────────────────
    new Chart(document.getElementById('chartActivite'), {
        type: 'bar',
        data: {
            labels: keys(dataActivite),
            datasets: [{
                label: 'Étudiants',
                data: vals(dataActivite),
                backgroundColor: COLORS,
                borderRadius: 6,
                borderSkipped: false
            }]
        },
        options: {
            indexAxis: 'y',
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                x: { beginAtZero: true, ticks: { stepSize: 1 }, grid: { color: 'rgba(0,0,0,.05)' } },
                y: { ticks: { font: { size: 11 } } }
            }
        }
    });

    // ── 4. Courbe — Inscriptions par mois ─────────────────────────────────────
    // Formatter les labels \"YYYY-MM\" → \"MMM YYYY\"
    const monthNames = ['Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'];
    const inscLabels = keys(dataInscriptions).map(k => {
        const [y, m] = k.split('-');
        return monthNames[parseInt(m, 10) - 1] + ' ' + y;
    });

    new Chart(document.getElementById('chartInscriptions'), {
        type: 'line',
        data: {
            labels: inscLabels,
            datasets: [{
                label: 'Nouvelles inscriptions',
                data: vals(dataInscriptions),
                borderColor: PURPLE,
                backgroundColor: 'rgba(106,90,205,.08)',
                borderWidth: 2.5,
                pointBackgroundColor: PURPLE,
                pointRadius: 4,
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, ticks: { stepSize: 1 }, grid: { color: 'rgba(0,0,0,.05)' } },
                x: { ticks: { font: { size: 10 } } }
            }
        }
    });

    // ── 5. Barres — Niveau scolaire ───────────────────────────────────────────
    new Chart(document.getElementById('chartNiveau'), {
        type: 'bar',
        data: {
            labels: keys(dataNiveau),
            datasets: [{
                label: 'Étudiants',
                data: vals(dataNiveau),
                backgroundColor: COLORS,
                borderRadius: 7,
                borderSkipped: false
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, ticks: { stepSize: 1 }, grid: { color: 'rgba(0,0,0,.05)' } },
                x: { ticks: { font: { size: 11 } } }
            }
        }
    });

    // ── Export PDF (impression navigateur) ───────────────────────────────────
    function imprimerStats() {
        // Attendre que les charts soient fully rendered
        setTimeout(() => window.print(), 100);
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
        return "admin/dashboard.html.twig";
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
        return array (  434 => 205,  430 => 204,  426 => 203,  422 => 202,  418 => 201,  412 => 197,  410 => 196,  397 => 195,  382 => 189,  373 => 186,  370 => 185,  366 => 183,  362 => 181,  360 => 180,  355 => 178,  351 => 177,  345 => 176,  342 => 175,  338 => 174,  328 => 167,  323 => 164,  303 => 145,  276 => 119,  267 => 111,  260 => 106,  253 => 102,  246 => 98,  241 => 95,  235 => 91,  231 => 89,  228 => 87,  215 => 86,  126 => 6,  113 => 5,  90 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %}Dashboard Admin — Harmony{% endblock %}
{% block page_title %}Tableau de bord{% endblock %}

{% block stylesheets %}
    <style>
        /* ── KPI CARDS ──────────────────────────────────────────────────── */
        .stats-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 28px; }
        .stat-card {
            background: var(--white); border: 1px solid var(--border); border-radius: 16px; padding: 24px;
            display: flex; align-items: center; gap: 16px; transition: border-color .2s, box-shadow .2s;
        }
        .stat-card:hover { border-color: var(--purple-soft); box-shadow: 0 6px 24px rgba(106,90,205,.1); }
        .stat-card-icon { width: 50px; height: 50px; border-radius: 13px; background: var(--purple-pale); display: grid; place-items: center; font-size: 24px; flex-shrink: 0; }
        .stat-card-val { font-family: var(--font-head); font-size: 30px; font-weight: 800; color: var(--text); }
        .stat-card-lbl { font-size: 12px; color: var(--text-muted); margin-top: 2px; }

        /* ── SECTION TITLE ──────────────────────────────────────────────── */
        .sec-title {
            font-family: var(--font-head); font-size: 15px; font-weight: 700; color: var(--text);
            margin: 28px 0 14px; display: flex; align-items: center; gap: 8px;
        }
        .sec-title::before { content:''; width:4px; height:16px; background:var(--purple); border-radius:4px; display:inline-block; }

        /* ── CHART GRID ─────────────────────────────────────────────────── */
        .charts-grid-top { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 18px; margin-bottom: 18px; }
        .charts-grid-bot { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 28px; }

        .chart-card {
            background: var(--white); border: 1px solid var(--border); border-radius: 18px;
            padding: 22px; position: relative; overflow: hidden;
        }
        .chart-card-title {
            font-family: var(--font-head); font-size: 13px; font-weight: 700; color: var(--text);
            margin-bottom: 16px; display: flex; align-items: center; gap: 7px;
        }
        .chart-card-title .sub { font-size: 11px; font-weight: 400; color: var(--text-muted); margin-left: 4px; }
        .canvas-wrap { position: relative; }
        .canvas-wrap canvas { max-width: 100% !important; }

        /* ── PRINT BTN ──────────────────────────────────────────────────── */
        .toolbar-row {
            display: flex; align-items: center; justify-content: space-between;
            margin-bottom: 22px;
        }
        .btn-pdf {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 10px 20px; background: #E05252; color: #fff;
            border: none; border-radius: 11px; font-family: var(--font-body);
            font-size: 13px; font-weight: 600; cursor: pointer;
            box-shadow: 0 3px 12px rgba(224,82,82,.3); transition: .15s;
        }
        .btn-pdf:hover { background: #c94444; }

        /* ── RECENT TABLE ───────────────────────────────────────────────── */
        .widget { background: var(--white); border: 1px solid var(--border); border-radius: 18px; overflow: hidden; }
        .widget-head { padding: 16px 22px; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; }
        .widget-title { font-family: var(--font-head); font-size: 15px; font-weight: 700; color: var(--text); }
        .see-all { font-size: 13px; color: var(--purple); text-decoration: none; }
        .see-all:hover { opacity: .7; }
        table { width: 100%; border-collapse: collapse; }
        th { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .7px; color: var(--text-muted); padding: 10px 20px; text-align: left; background: var(--purple-ghost); }
        td { padding: 12px 20px; font-size: 13.5px; color: var(--text); border-bottom: 1px solid var(--purple-ghost); }
        tr:last-child td { border: none; }
        .badge-active { background: #D1FAE5; color: #065F46; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }
        .badge-suspended { background: #FEE2E2; color: #991B1B; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }

        /* ── PRINT STYLES ───────────────────────────────────────────────── */
        @media print {
            .sidebar, .admin-topbar, .btn-pdf, .widget { display: none !important; }
            .admin-layout { display: block !important; }
            .admin-content { padding: 0 !important; }
            .chart-card { break-inside: avoid; border: 1px solid #ccc !important; }
            .print-header { display: block !important; }
        }
        .print-header {
            display: none;
            font-family: var(--font-head);
            font-size: 20px; font-weight: 800; margin-bottom: 20px;
            border-bottom: 2px solid #6A5ACD; padding-bottom: 10px;
        }
        .print-date { font-size: 12px; color: #666; font-weight: 400; margin-left: 12px; }
    </style>
{% endblock %}

{% block body %}

    {# En-tête visible uniquement à l'impression #}
    <div class=\"print-header\">
        📊 Harmony — Rapport statistiques
        <span class=\"print-date\">Généré le {{ \"now\"|date(\"d/m/Y à H:i\") }}</span>
    </div>

    {# ── KPI ──────────────────────────────────────────────────────────────── #}
    <div class=\"stats-row\">
        <div class=\"stat-card\">
            <div class=\"stat-card-icon\">👥</div>
            <div><div class=\"stat-card-val\">{{ total }}</div><div class=\"stat-card-lbl\">Total étudiants</div></div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-card-icon\" style=\"background:#D1FAE5;\">✅</div>
            <div><div class=\"stat-card-val\" style=\"color:#065F46;\">{{ active }}</div><div class=\"stat-card-lbl\">Comptes actifs</div></div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-card-icon\" style=\"background:#FEE2E2;\">🔒</div>
            <div><div class=\"stat-card-val\" style=\"color:#E05252;\">{{ suspended }}</div><div class=\"stat-card-lbl\">Comptes suspendus</div></div>
        </div>
    </div>

    {# ── TOOLBAR ──────────────────────────────────────────────────────────── #}
    <div class=\"toolbar-row\">
        <div class=\"sec-title\" style=\"margin:0;\">📊 Statistiques des étudiants</div>
        <button class=\"btn-pdf\" onclick=\"imprimerStats()\">
            🖨 Exporter en PDF
        </button>
    </div>

    {# ── ROW 1 : Sexe + Suspicion + Activité ─────────────────────────────── #}
    <div class=\"charts-grid-top\">

        <div class=\"chart-card\">
            <div class=\"chart-card-title\">⚧ Répartition par sexe</div>
            <div class=\"canvas-wrap\">
                <canvas id=\"chartSexe\" height=\"200\"></canvas>
            </div>
        </div>

        <div class=\"chart-card\">
            <div class=\"chart-card-title\">⚠ Scores de suspicion</div>
            <div class=\"canvas-wrap\">
                <canvas id=\"chartSuspicion\" height=\"200\"></canvas>
            </div>
        </div>

        <div class=\"chart-card\">
            <div class=\"chart-card-title\">🏃 Activité physique</div>
            <div class=\"canvas-wrap\">
                <canvas id=\"chartActivite\" height=\"200\"></canvas>
            </div>
        </div>

    </div>

    {# ── ROW 2 : Inscriptions + Niveau scolaire ──────────────────────────── #}
    <div class=\"charts-grid-bot\">

        <div class=\"chart-card\">
            <div class=\"chart-card-title\">📅 Inscriptions <span class=\"sub\">(12 derniers mois)</span></div>
            <div class=\"canvas-wrap\">
                <canvas id=\"chartInscriptions\" height=\"160\"></canvas>
            </div>
        </div>

        <div class=\"chart-card\">
            <div class=\"chart-card-title\">🎓 Niveau scolaire</div>
            <div class=\"canvas-wrap\">
                <canvas id=\"chartNiveau\" height=\"160\"></canvas>
            </div>
        </div>

    </div>

    {# ── DERNIERS INSCRITS ────────────────────────────────────────────────── #}
    <div class=\"widget\">
        <div class=\"widget-head\">
            <div class=\"widget-title\">👥 Derniers inscrits</div>
            <a href=\"{{ path('admin_users_index') }}\" class=\"see-all\">Voir tous →</a>
        </div>
        <table>
            <thead>
            <tr><th>Nom</th><th>Email</th><th>Inscrit le</th><th>Statut</th><th></th></tr>
            </thead>
            <tbody>
            {% for u in recent %}
                <tr>
                    <td><strong>{{ u.userPrenom }} {{ u.userNom }}</strong></td>
                    <td style=\"color:var(--text-muted);\">{{ u.userEmail }}</td>
                    <td style=\"color:var(--text-muted);\">{{ u.dateInscription }}</td>
                    <td>
                        {% if u.isActive %}
                            <span class=\"badge-active\">Actif</span>
                        {% else %}
                            <span class=\"badge-suspended\">Suspendu</span>
                        {% endif %}
                    </td>
                    <td><a href=\"{{ path('admin_users_show', {id: u.userId}) }}\" style=\"color:var(--purple);font-size:12px;font-weight:600;\">Voir →</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}

{% block javascripts %}
    {# Chart.js depuis CDN #}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>

    <script>
    // ── Données passées depuis PHP/Twig ──────────────────────────────────────
    const dataSexe = {{ sexeCount|json_encode|raw }};
    const dataSuspicion = {{ suspicionDist|json_encode|raw }};
    const dataActivite = {{ activiteCount|json_encode|raw }};
    const dataInscriptions = {{ inscriptionsByMonth|json_encode|raw }};
    const dataNiveau = {{ niveauCount|json_encode|raw }};

    // ── Palette cohérente ─────────────────────────────────────────────────────
    const PURPLE   = '#6A5ACD';
    const COLORS   = ['#6A5ACD','#10B981','#E05252','#E5A44B','#5CB89E','#8B7FD4','#F59E0B','#3B82F6'];
    const SUSPICION_COLORS = { 'Normal':'#10B981', 'Modéré':'#8B7FD4', 'Suspect':'#E5A44B', 'Très suspect':'#E05252' };

    // Utilitaire : objet → tableaux clés/valeurs
    const keys   = obj => Object.keys(obj);
    const vals   = obj => Object.values(obj);

    // ── 1. Camembert — Sexe ───────────────────────────────────────────────────
    new Chart(document.getElementById('chartSexe'), {
        type: 'doughnut',
        data: {
            labels: keys(dataSexe),
            datasets: [{ data: vals(dataSexe), backgroundColor: COLORS, borderWidth: 2, borderColor: '#fff' }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom', labels: { font: { size: 11 }, padding: 12 } }
            },
            cutout: '60%'
        }
    });

    // ── 2. Camembert — Suspicion ──────────────────────────────────────────────
    new Chart(document.getElementById('chartSuspicion'), {
        type: 'doughnut',
        data: {
            labels: keys(dataSuspicion),
            datasets: [{
                data: vals(dataSuspicion),
                backgroundColor: keys(dataSuspicion).map(k => SUSPICION_COLORS[k] || '#ccc'),
                borderWidth: 2, borderColor: '#fff'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom', labels: { font: { size: 11 }, padding: 12 } } },
            cutout: '60%'
        }
    });

    // ── 3. Barres horizontales — Activité physique ────────────────────────────
    new Chart(document.getElementById('chartActivite'), {
        type: 'bar',
        data: {
            labels: keys(dataActivite),
            datasets: [{
                label: 'Étudiants',
                data: vals(dataActivite),
                backgroundColor: COLORS,
                borderRadius: 6,
                borderSkipped: false
            }]
        },
        options: {
            indexAxis: 'y',
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                x: { beginAtZero: true, ticks: { stepSize: 1 }, grid: { color: 'rgba(0,0,0,.05)' } },
                y: { ticks: { font: { size: 11 } } }
            }
        }
    });

    // ── 4. Courbe — Inscriptions par mois ─────────────────────────────────────
    // Formatter les labels \"YYYY-MM\" → \"MMM YYYY\"
    const monthNames = ['Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'];
    const inscLabels = keys(dataInscriptions).map(k => {
        const [y, m] = k.split('-');
        return monthNames[parseInt(m, 10) - 1] + ' ' + y;
    });

    new Chart(document.getElementById('chartInscriptions'), {
        type: 'line',
        data: {
            labels: inscLabels,
            datasets: [{
                label: 'Nouvelles inscriptions',
                data: vals(dataInscriptions),
                borderColor: PURPLE,
                backgroundColor: 'rgba(106,90,205,.08)',
                borderWidth: 2.5,
                pointBackgroundColor: PURPLE,
                pointRadius: 4,
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, ticks: { stepSize: 1 }, grid: { color: 'rgba(0,0,0,.05)' } },
                x: { ticks: { font: { size: 10 } } }
            }
        }
    });

    // ── 5. Barres — Niveau scolaire ───────────────────────────────────────────
    new Chart(document.getElementById('chartNiveau'), {
        type: 'bar',
        data: {
            labels: keys(dataNiveau),
            datasets: [{
                label: 'Étudiants',
                data: vals(dataNiveau),
                backgroundColor: COLORS,
                borderRadius: 7,
                borderSkipped: false
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, ticks: { stepSize: 1 }, grid: { color: 'rgba(0,0,0,.05)' } },
                x: { ticks: { font: { size: 11 } } }
            }
        }
    });

    // ── Export PDF (impression navigateur) ───────────────────────────────────
    function imprimerStats() {
        // Attendre que les charts soient fully rendered
        setTimeout(() => window.print(), 100);
    }
    </script>
{% endblock %}
", "admin/dashboard.html.twig", "/Users/rayen/Desktop/pi dev/mon_projet/templates/admin/dashboard.html.twig");
    }
}

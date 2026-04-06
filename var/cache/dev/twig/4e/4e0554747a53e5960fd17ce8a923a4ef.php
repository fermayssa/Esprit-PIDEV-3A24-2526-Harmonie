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

/* admin/users/suspended.html.twig */
class __TwigTemplate_8a8afaf99359cc8bf1f4f15635c15e5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/suspended.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/suspended.html.twig"));

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

        yield "Comptes suspendus — Harmony";
        
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

        yield "🔒 Comptes suspendus";
        
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
        .sus-table-wrap { background: var(--white); border: 1px solid var(--border); border-radius: 18px; overflow: hidden; }
        table { width: 100%; border-collapse: collapse; }
        th { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .7px; color: var(--text-muted); padding: 12px 20px; text-align: left; background: var(--purple-ghost); }
        td { padding: 14px 20px; font-size: 13.5px; color: var(--text); border-bottom: 1px solid var(--purple-ghost); }
        tr:last-child td { border: none; }
        tr:hover td { background: var(--purple-ghost); }
        .btn-sm { padding: 6px 14px; border-radius: 8px; font-size: 12px; font-weight: 600; text-decoration: none; cursor: pointer; border: none; }
        .btn-activate { background: #D1FAE5; color: #065F46; }
        .btn-activate:hover { background: #A7F3D0; }
        .btn-view { background: var(--purple-pale); color: var(--purple); margin-right: 6px; }
        .btn-view:hover { background: #ddd8f8; }
        .empty-state { text-align: center; padding: 60px 20px; color: var(--text-muted); }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

        // line 23
        yield "    ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "        <div class=\"empty-state\">
            <div style=\"font-size:48px;margin-bottom:12px;\">🎉</div>
            <p style=\"font-size:15px;\">Aucun compte suspendu. Tout est en ordre !</p>
        </div>
    ";
        } else {
            // line 29
            yield "        <p style=\"font-size:13.5px;color:var(--text-muted);margin-bottom:16px;\">
            ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 30, $this->source); })())), "html", null, true);
            yield " compte(s) suspendu(s)
        </p>
        <div class=\"sus-table-wrap\">
            <table>
                <thead>
                <tr>
                    <th>Utilisateur</th>
                    <th>Email</th>
                    <th>Inscrit le</th>
                    <th>Niveau</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 45
                yield "                    <tr>
                        <td><strong>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userPrenom", [], "any", false, false, false, 46), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userNom", [], "any", false, false, false, 46), "html", null, true);
                yield "</strong></td>
                        <td style=\"color:var(--text-muted);\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userEmail", [], "any", false, false, false, 47), "html", null, true);
                yield "</td>
                        <td style=\"color:var(--text-muted);\">";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "dateInscription", [], "any", false, false, false, 48), "html", null, true);
                yield "</td>
                        <td>";
                // line 49
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userNiveauScolaire", [], "any", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userNiveauScolaire", [], "any", false, false, false, 49)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userNiveauScolaire", [], "any", false, false, false, 49), "html", null, true)) : ("—"));
                yield "</td>
                        <td>
                            <a href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userId", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\" class=\"btn-sm btn-view\">Voir</a>
                            <form method=\"post\" action=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userId", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" style=\"display:inline;margin:0;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["u"], "userId", [], "any", false, false, false, 53))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn-sm btn-activate\">✅ Réactiver</button>
                            </form>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                </tbody>
            </table>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/users/suspended.html.twig";
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
        return array (  239 => 59,  227 => 53,  223 => 52,  219 => 51,  214 => 49,  210 => 48,  206 => 47,  200 => 46,  197 => 45,  193 => 44,  176 => 30,  173 => 29,  166 => 24,  163 => 23,  150 => 22,  125 => 6,  112 => 5,  89 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %}Comptes suspendus — Harmony{% endblock %}
{% block page_title %}🔒 Comptes suspendus{% endblock %}

{% block stylesheets %}
    <style>
        .sus-table-wrap { background: var(--white); border: 1px solid var(--border); border-radius: 18px; overflow: hidden; }
        table { width: 100%; border-collapse: collapse; }
        th { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .7px; color: var(--text-muted); padding: 12px 20px; text-align: left; background: var(--purple-ghost); }
        td { padding: 14px 20px; font-size: 13.5px; color: var(--text); border-bottom: 1px solid var(--purple-ghost); }
        tr:last-child td { border: none; }
        tr:hover td { background: var(--purple-ghost); }
        .btn-sm { padding: 6px 14px; border-radius: 8px; font-size: 12px; font-weight: 600; text-decoration: none; cursor: pointer; border: none; }
        .btn-activate { background: #D1FAE5; color: #065F46; }
        .btn-activate:hover { background: #A7F3D0; }
        .btn-view { background: var(--purple-pale); color: var(--purple); margin-right: 6px; }
        .btn-view:hover { background: #ddd8f8; }
        .empty-state { text-align: center; padding: 60px 20px; color: var(--text-muted); }
    </style>
{% endblock %}

{% block body %}
    {% if users is empty %}
        <div class=\"empty-state\">
            <div style=\"font-size:48px;margin-bottom:12px;\">🎉</div>
            <p style=\"font-size:15px;\">Aucun compte suspendu. Tout est en ordre !</p>
        </div>
    {% else %}
        <p style=\"font-size:13.5px;color:var(--text-muted);margin-bottom:16px;\">
            {{ users|length }} compte(s) suspendu(s)
        </p>
        <div class=\"sus-table-wrap\">
            <table>
                <thead>
                <tr>
                    <th>Utilisateur</th>
                    <th>Email</th>
                    <th>Inscrit le</th>
                    <th>Niveau</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for u in users %}
                    <tr>
                        <td><strong>{{ u.userPrenom }} {{ u.userNom }}</strong></td>
                        <td style=\"color:var(--text-muted);\">{{ u.userEmail }}</td>
                        <td style=\"color:var(--text-muted);\">{{ u.dateInscription }}</td>
                        <td>{{ u.userNiveauScolaire ?? '—' }}</td>
                        <td>
                            <a href=\"{{ path('admin_users_show', {id: u.userId}) }}\" class=\"btn-sm btn-view\">Voir</a>
                            <form method=\"post\" action=\"{{ path('admin_users_toggle', {id: u.userId}) }}\" style=\"display:inline;margin:0;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle' ~ u.userId) }}\">
                                <button type=\"submit\" class=\"btn-sm btn-activate\">✅ Réactiver</button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}
{% endblock %}
", "admin/users/suspended.html.twig", "/Users/rayen/Downloads/Esprit-PIWEB-3A24-2526-Harmonie-forum-communication-3/templates/admin/users/suspended.html.twig");
    }
}

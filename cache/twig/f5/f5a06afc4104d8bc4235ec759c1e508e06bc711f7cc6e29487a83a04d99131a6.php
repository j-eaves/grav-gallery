<?php

/* partials/login.html.twig */
class __TwigTemplate_1ee16d68b56f24be3e6ed239e9e3033f4e8d702ed257e45b4146fa98bc7b7189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/login.html.twig", 1);
        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
            'instructions' => [$this, 'block_instructions'],
            'integration' => [$this, 'block_integration'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_messages($context, array $blocks = [])
    {
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"login-box-shadow ";
        // line 7
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo "\">

        ";
        // line 9
        $this->loadTemplate("partials/login-logo.html.twig", "partials/login.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        $this->loadTemplate("partials/messages.html.twig", "partials/login.html.twig", 11)->display($context);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('instructions', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('integration', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $context["redirect"] = ((($context["redirect"] ?? null)) ? (($context["redirect"] ?? null)) : ((($this->getAttribute(($context["uri"] ?? null), "path", []) . $this->getAttribute(($context["uri"] ?? null), "params", [])) . (($this->getAttribute(($context["uri"] ?? null), "query", [])) ? (("?" . $this->getAttribute(($context["uri"] ?? null), "query", []))) : ("")))));
        // line 18
        echo "
        <form method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "\">
            <div class=\"padding\">
                ";
        // line 21
        $this->displayBlock('form', $context, $blocks);
        // line 22
        echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" />
                ";
        // line 23
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
            </div>
        </form>

        <script>
            \$(document).ready( function() {
                \$('#messages').delay(5000).animate({ height: 'toggle', opacity: 'toggle' }, 'slow');
            });
        </script>
    </section>
</body>
";
    }

    // line 13
    public function block_instructions($context, array $blocks = [])
    {
    }

    // line 15
    public function block_integration($context, array $blocks = [])
    {
    }

    // line 21
    public function block_form($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 21,  109 => 15,  104 => 13,  88 => 23,  83 => 22,  81 => 21,  76 => 19,  73 => 18,  71 => 17,  68 => 16,  66 => 15,  63 => 14,  61 => 13,  58 => 12,  56 => 11,  53 => 10,  51 => 9,  46 => 7,  43 => 6,  40 => 5,  35 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set scope = scope ?: 'data.' %}
{% block messages %}{% endblock %}

{% block body %}
<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"login-box-shadow {{ classes }}\">

        {% include 'partials/login-logo.html.twig' %}

        {% include 'partials/messages.html.twig' %}

        {% block instructions %}{% endblock %}

        {% block integration %}{% endblock %}

        {% set redirect = redirect ?: uri.path ~ uri.params ~ (uri.query ? '?' ~ uri.query : '') %}

        <form method=\"post\" action=\"{{ base_url_relative }}\">
            <div class=\"padding\">
                {% block form %}{% endblock %}
                <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
                {{ nonce_field('admin-form', 'admin-nonce')|raw }}
            </div>
        </form>

        <script>
            \$(document).ready( function() {
                \$('#messages').delay(5000).animate({ height: 'toggle', opacity: 'toggle' }, 'slow');
            });
        </script>
    </section>
</body>
{% endblock %}
", "partials/login.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/admin/themes/grav/templates/partials/login.html.twig");
    }
}

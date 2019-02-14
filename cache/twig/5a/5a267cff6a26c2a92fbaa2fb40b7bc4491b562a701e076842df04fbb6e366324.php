<?php

/* partials/login-logo.html.twig */
class __TwigTemplate_950bcdc2da9934bb51cd9f79d2308111fdf164a4e58bb4150582fd6e4ec4b863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "logo_text", [])) {
            // line 2
            echo "    <h1 class=\"text-logo\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "logo_text", []), "html", null, true);
            echo "
    </h1>
";
        } else {
            // line 6
            echo "    <h1 class=\"";
            echo ((($context["custom_login_logo"] ?? null)) ? ("custom-logo") : ("default-logo"));
            echo "\">
        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
        ";
            // line 8
            if (($context["custom_login_logo"] ?? null)) {
                // line 9
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["custom_login_logo"] ?? null)), "html", null, true);
                echo "\" title=\"Login\" />
        ";
            } else {
                // line 11
                echo "            ";
                $this->loadTemplate("@admin-images/logo.svg", "partials/login-logo.html.twig", 11)->display($context);
                // line 12
                echo "        ";
            }
            // line 13
            echo "    </h1>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/login-logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  50 => 12,  47 => 11,  41 => 9,  39 => 8,  35 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if config.plugins.admin.logo_text %}
    <h1 class=\"text-logo\">
        {{ config.plugins.admin.logo_text }}
    </h1>
{% else %}
    <h1 class=\"{{ custom_login_logo ? 'custom-logo' : 'default-logo' }}\">
        {{ title }}
        {% if custom_login_logo %}
            <img src=\"{{ url(custom_login_logo) }}\" title=\"Login\" />
        {% else %}
            {% include('@admin-images/logo.svg') %}
        {% endif %}
    </h1>
{% endif %}
", "partials/login-logo.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/admin/themes/grav/templates/partials/login-logo.html.twig");
    }
}

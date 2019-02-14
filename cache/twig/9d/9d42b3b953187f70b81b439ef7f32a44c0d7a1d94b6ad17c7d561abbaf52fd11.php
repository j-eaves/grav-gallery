<?php

/* partials/logo.html.twig */
class __TwigTemplate_62b36b0d381c2537a713f201c7e538e9a2b28a316278d64ac6a3c6570e6fb6cd extends Twig_Template
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
            echo "    <h3>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "logo_text", []), "html", null, true);
            echo "
        </a>
        <a class=\"front-end hint--left\" data-hint=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-external-link\"></i></a>
    </h3>
";
        } else {
            // line 9
            echo "    <div class=\"admin-logo ";
            echo ((($context["custom_admin_logo"] ?? null)) ? ("custom-logo") : ("default-logo"));
            echo "\">
        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 11
            if (($context["custom_admin_logo"] ?? null)) {
                // line 12
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["custom_admin_logo"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
                echo "\" />
            ";
            } else {
                // line 14
                echo "                ";
                $this->loadTemplate("@admin-images/grav-small.svg", "partials/logo.html.twig", 14)->display($context);
                // line 15
                echo "                ";
                $this->loadTemplate("@admin-images/grav-regular.svg", "partials/logo.html.twig", 15)->display($context);
                // line 16
                echo "            ";
            }
            // line 17
            echo "        </a>
        <a class=\"front-end hint--left\" data-hint=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-external-link\"></i></a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  52 => 12,  50 => 11,  46 => 10,  41 => 9,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
    <h3>
        <a href=\"{{ base_url_relative }}\">
            {{ config.plugins.admin.logo_text }}
        </a>
        <a class=\"front-end hint--left\" data-hint=\"{{ \"PLUGIN_ADMIN.VIEW_SITE_TIP\"|tu }}\" target=\"_blank\" href=\"{{ base_url_relative_frontend }}\"> <i class=\"fa fa-external-link\"></i></a>
    </h3>
{% else %}
    <div class=\"admin-logo {{ custom_admin_logo ? 'custom-logo' : 'default-logo' }}\">
        <a href=\"{{ base_url_relative }}\">
            {% if custom_admin_logo %}
                <img src=\"{{ url(custom_admin_logo) }}\" title=\"{{ site.title }}\" />
            {% else %}
                {% include('@admin-images/grav-small.svg') %}
                {% include('@admin-images/grav-regular.svg') %}
            {% endif %}
        </a>
        <a class=\"front-end hint--left\" data-hint=\"{{ \"PLUGIN_ADMIN.VIEW_SITE_TIP\"|tu }}\" target=\"_blank\" href=\"{{ base_url_relative_frontend }}\"> <i class=\"fa fa-external-link\"></i></a>
    </div>
{% endif %}
", "partials/logo.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/admin/themes/grav/templates/partials/logo.html.twig");
    }
}

<?php

/* forms/fields/xss/xss.html.twig */
class __TwigTemplate_8d7367ae134d9e3bb400e57b47671529d1956641ff6848ba26b62efa3d6d699c extends Twig_Template
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
        $context["xss_header"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFilter($this->getAttribute(($context["data"] ?? null), "value", [0 => "header"], "method"));
        // line 2
        $context["xss_content"] = $this->getAttribute(($context["data"] ?? null), "value", [0 => "content"], "method");
        // line 3
        $context["xss_status"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->xssFunc(["header" => ($context["xss_header"] ?? null), "content" => ($context["xss_content"] ?? null)]);
        // line 4
        if ( !twig_test_empty(($context["xss_status"] ?? null))) {
            // line 5
            echo "    <div class=\"notice alert\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.XSS_ISSUE", [0 => ($context["xss_status"] ?? null)]);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/xss/xss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set xss_header = data.value('header')|array %}
{% set xss_content = data.value('content') %}
{% set xss_status = xss({header: xss_header, content: xss_content}) %}
{% if xss_status is not empty %}
    <div class=\"notice alert\">{{ \"PLUGIN_ADMIN.XSS_ISSUE\"|tu([xss_status])|raw }}</div>
{% endif %}
", "forms/fields/xss/xss.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/admin/themes/grav/templates/forms/fields/xss/xss.html.twig");
    }
}

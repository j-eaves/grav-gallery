<?php

/* forms/fields/userinfo/userinfo.html.twig */
class __TwigTemplate_7071cfd4108d1255246882edc09e7ba542f5da2e1ec666268e7409d93db01a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/userinfo/userinfo.html.twig", 1);
        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        ";
        // line 6
        $this->loadTemplate("partials/userinfo-avatar.html.twig", "forms/fields/userinfo/userinfo.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
    <div class=\"form-data block size-2-3\">
        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "fullname", []), "html", null, true);
        echo "</h2>
        <h5>
        <a href=\"mailto:";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "email", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "email", []), "html", null, true);
        echo "</a>
        ";
        // line 12
        if ($this->getAttribute(($context["data"] ?? null), "title", [])) {
            // line 13
            echo "        - ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", []), "html", null, true);
            echo "
        ";
        }
        // line 15
        echo "        </h5>
        ";
        // line 16
        $this->loadTemplate("partials/userinfo-avatar-credit.html.twig", "forms/fields/userinfo/userinfo.html.twig", 16)->display($context);
        // line 17
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/userinfo/userinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  63 => 16,  60 => 15,  54 => 13,  52 => 12,  46 => 11,  41 => 9,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        {% include 'partials/userinfo-avatar.html.twig' %}
    </div>
    <div class=\"form-data block size-2-3\">
        <h2>{{ data.fullname }}</h2>
        <h5>
        <a href=\"mailto:{{ data.email }}\">{{ data.email }}</a>
        {% if data.title %}
        - {{ data.title }}
        {% endif %}
        </h5>
        {% include 'partials/userinfo-avatar-credit.html.twig' %}
    </div>
</div>
{% endblock %}", "forms/fields/userinfo/userinfo.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/admin/themes/grav/templates/forms/fields/userinfo/userinfo.html.twig");
    }
}

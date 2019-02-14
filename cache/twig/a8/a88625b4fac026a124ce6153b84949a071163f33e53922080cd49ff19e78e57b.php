<?php

/* forms/fields/tab/tab.html.twig */
class __TwigTemplate_ee626710dc4ccf8e387fee4f0a5b4c4e826418a4e5221b2dd4ca9ee0d431dc49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/tab/tab.html.twig", 1);
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
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 5
            echo "        <div class=\"form-tab\">
            ";
            // line 6
            $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/tab/tab.html.twig", 6)->display(array_merge($context, ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "fields" => $this->getAttribute(($context["field"] ?? null), "fields", [])]));
            // line 7
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/tab/tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
    {% if field.fields %}
        <div class=\"form-tab\">
            {% include 'forms/default/fields.html.twig' with {name: field.name, fields: field.fields} %}
        </div>
    {% endif %}
{% endblock %}", "forms/fields/tab/tab.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/form/templates/forms/fields/tab/tab.html.twig");
    }
}

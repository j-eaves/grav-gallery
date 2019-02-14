<?php

/* forms/fields/conditional/conditional.html.twig */
class __TwigTemplate_0a85aee9ab17bd66a65b77aca191ffce4225ec5119c6bd247a364b2291a367f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/conditional/conditional.html.twig", 1);
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
        $context["value"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($context, $this->getAttribute(($context["field"] ?? null), "condition", []));
        // line 5
        $context["value"] = (((($context["value"] ?? null) == "true")) ? (1) : (($context["value"] ?? null)));
        // line 6
        $context["value"] = (((($context["value"] ?? null) == "false")) ? (0) : (($context["value"] ?? null)));
        // line 7
        echo "
";
        // line 8
        if (($context["value"] ?? null)) {
            // line 9
            echo "    ";
            if ($this->getAttribute(($context["field"] ?? null), "classes", [])) {
                // line 10
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
                echo "\">
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
                // line 14
                echo "        ";
                $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/conditional/conditional.html.twig", 14)->display(array_merge($context, ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "fields" => $this->getAttribute(($context["field"] ?? null), "fields", [])]));
                // line 15
                echo "    ";
            }
            // line 16
            echo "
    ";
            // line 17
            if ($this->getAttribute(($context["field"] ?? null), "classes", [])) {
                // line 18
                echo "    </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/conditional/conditional.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  65 => 17,  62 => 16,  59 => 15,  56 => 14,  54 => 13,  51 => 12,  45 => 10,  42 => 9,  40 => 8,  37 => 7,  35 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
{% set value = evaluate(field.condition) %}
{% set value = value == 'true' ? 1 : value %}
{% set value = value == 'false' ? 0 : value %}

{% if value %}
    {% if field.classes %}
    <div class=\"{{ field.classes }}\">
    {% endif %}

    {% if field.fields %}
        {% include 'forms/default/fields.html.twig' with {name: field.name, fields: field.fields} %}
    {% endif %}

    {% if field.classes %}
    </div>
    {% endif %}
{% endif %}
{% endblock %}", "forms/fields/conditional/conditional.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/form/templates/forms/fields/conditional/conditional.html.twig");
    }
}

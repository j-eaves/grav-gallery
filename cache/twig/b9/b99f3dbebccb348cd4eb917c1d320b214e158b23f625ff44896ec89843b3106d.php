<?php

/* forms/fields/spacer/spacer.html.twig */
class __TwigTemplate_f9c406bd8a280b32c104a9d2b8736edf909b349459568dd569787d719514c22f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/spacer/spacer.html.twig", 1);
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
        echo "<div class=\"form-spacer ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\">
    ";
        // line 5
        if ($this->getAttribute(($context["field"] ?? null), "title", [])) {
            // line 6
            echo "        <h3>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", []));
            echo "</h3>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
            // line 10
            echo "        <p>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "text", [])));
            echo "</p>
    ";
        } else {
            // line 12
            echo "        <p>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "text", []));
            echo "</p>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->getAttribute(($context["field"] ?? null), "underline", [])) {
            // line 16
            echo "    <hr />
    ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/spacer/spacer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  66 => 16,  64 => 15,  61 => 14,  55 => 12,  49 => 10,  47 => 9,  44 => 8,  38 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"form-spacer {{ field.classes }}\">
    {% if field.title %}
        <h3>{{- field.title|t|raw -}}</h3>
    {% endif %}

    {% if field.markdown %}
        <p>{{- field.text|t|markdown|raw -}}</p>
    {% else %}
        <p>{{- field.text|t|raw -}}</p>
    {% endif %}

    {% if field.underline %}
    <hr />
    {% endif %}
</div>
{% endblock %}
", "forms/fields/spacer/spacer.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/form/templates/forms/fields/spacer/spacer.html.twig");
    }
}

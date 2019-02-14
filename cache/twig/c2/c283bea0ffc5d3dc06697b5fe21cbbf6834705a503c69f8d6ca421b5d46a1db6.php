<?php

/* forms/fields/column/column.html.twig */
class __TwigTemplate_c3b64af622df43658813a45cb5fe68aff508d949531ecf048a25ee7d71e92175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/column/column.html.twig", 1);
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
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 5
            echo "    <div class=\"form-column block pure-u-1-";
            echo twig_escape_filter($this->env, ($context["cols"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 7
                echo "        ";
                if (($this->getAttribute($context["child"], "type", []) &&  !$this->getAttribute($this->getAttribute($context["child"], "validate", []), "ignore", []))) {
                    // line 8
                    echo "            ";
                    $context["value"] = (($this->getAttribute($context["child"], "name", [])) ? ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "toArray", [])));
                    // line 9
                    echo "            ";
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/column/column.html.twig", 9)->display(array_merge($context, ["field" => $context["child"]]));
                    // line 10
                    echo "        ";
                }
                // line 11
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/column/column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  38 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
    <div class=\"form-column block pure-u-1-{{ cols }}\">
    {% for child in field.fields %}
        {% if child.type and not child.validate.ignore %}
            {% set value = child.name ? data.value(child.name) : data.toArray %}
            {% include [\"forms/fields/#{child.type}/#{child.type}.html.twig\", 'forms/fields/text/text.html.twig'] with {field: child} %}
        {% endif %}
    {% endfor %}
    </div>
{% endif %}
{% endblock %}
", "forms/fields/column/column.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/admin/themes/grav/templates/forms/fields/column/column.html.twig");
    }
}

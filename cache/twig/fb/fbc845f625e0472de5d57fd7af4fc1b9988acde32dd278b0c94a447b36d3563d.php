<?php

/* forms/default/fields.html.twig */
class __TwigTemplate_3057a1abf04b919e5937a6204014d6cae9ccee3dfa6998a43a80c848c619d0fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field_open' => [$this, 'block_field_open'],
            'field' => [$this, 'block_field'],
            'field_close' => [$this, 'block_field_close'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 2
            echo "    ";
            if (($this->getAttribute($context["field"], "type", []) &&  !$this->getAttribute($this->getAttribute($context["field"], "validate", []), "ignore", []))) {
                // line 3
                if ((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["field_name"]) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ".") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) {
                    // line 4
                    $context["field_name"] = ((($context["name"] ?? null)) ? ((($context["name"] ?? null) . $context["field_name"])) : (twig_slice($this->env, $context["field_name"], 1, null)));
                    // line 5
                    echo "            ";
                    $context["field"] = twig_array_merge($context["field"], ["name" => $context["field_name"]]);
                    // line 6
                    echo "        ";
                }
                // line 7
                echo "
        ";
                // line 8
                $context["value"] = ((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => $context["field_name"]], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => $context["field_name"]], "method")));
                // line 9
                echo "        ";
                $this->displayBlock('field_open', $context, $blocks);
                // line 10
                echo "        ";
                $this->displayBlock('field', $context, $blocks);
                // line 13
                echo "        ";
                $this->displayBlock('field_close', $context, $blocks);
                // line 14
                echo "    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 9
    public function block_field_open($context, array $blocks = [])
    {
    }

    // line 10
    public function block_field($context, array $blocks = [])
    {
        // line 11
        echo "            ";
        $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute(($context["field"] ?? null), "type", [])) . "/") . $this->getAttribute(($context["field"] ?? null), "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/default/fields.html.twig", 11)->display($context);
        // line 12
        echo "        ";
    }

    // line 13
    public function block_field_close($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/default/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  94 => 12,  91 => 11,  88 => 10,  83 => 9,  66 => 14,  63 => 13,  60 => 10,  57 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for field_name, field in fields %}
    {% if field.type and not field.validate.ignore %}
        {%- if field_name starts with '.' -%}
            {% set field_name = name ? name ~ field_name : field_name[1:] %}
            {% set field = field|merge({ name: field_name }) %}
        {% endif %}

        {% set value = form ? form.value(field_name) : data.value(field_name) %}
        {% block field_open %}{% endblock %}
        {% block field %}
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
        {% endblock %}
        {% block field_close %}{% endblock %}
    {% endif %}
{% endfor %}
", "forms/default/fields.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/form/templates/forms/default/fields.html.twig");
    }
}

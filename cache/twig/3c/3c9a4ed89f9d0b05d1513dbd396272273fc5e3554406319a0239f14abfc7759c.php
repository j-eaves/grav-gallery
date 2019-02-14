<?php

/* partials/navigation.html.twig */
class __TwigTemplate_1a41a1a7dc9ea24f9562acf394be50956dfbfcf3930cabcd7c6efcbeca645ea2 extends Twig_Template
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
        // line 18
        echo "
<ul class=\"nav sf-menu\">
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "photographer", []), "dropdown", []), "enabled", [])) {
            // line 21
            echo "        ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
        ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 24
                echo "            ";
                if ($this->getAttribute($context["page"], "visible", [])) {
                    // line 25
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                    // line 26
                    echo "                    <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                        <a href=\"";
                    // line 27
                    echo $this->getAttribute($context["page"], "url", []);
                    echo "\">
                            ";
                    // line 28
                    echo $this->getAttribute($context["page"], "menu", []);
                    echo "
                        </a>
                    </li>
                ";
                }
                // line 32
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 35
            echo "            <li>
                <a href=\"";
            // line 36
            echo $this->getAttribute($context["mitem"], "link", []);
            echo "\">
                    ";
            // line 37
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
                </a>
                ";
            // line 39
            if ($this->getAttribute($context["mitem"], "submenu", [])) {
                // line 40
                echo "                    <ul>
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mitem"], "submenu", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["sub1"]) {
                    // line 42
                    echo "                            <li>";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo "<img src=\"";
                        echo ($context["theme_url"] ?? null);
                        echo "/img/arrowup.png\" alt=\"\">";
                    }
                    // line 43
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["sub1"], "link", []);
                    echo "\">
                                    ";
                    // line 44
                    echo $this->getAttribute($context["sub1"], "text", []);
                    echo "
                                </a>
                                ";
                    // line 46
                    if ($this->getAttribute($context["sub1"], "submenu", [])) {
                        // line 47
                        echo "                                    <ul>
                                        ";
                        // line 48
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub1"], "submenu", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub2"]) {
                            // line 49
                            echo "                                            <li>
                                                <a href=\"";
                            // line 50
                            echo $this->getAttribute($context["sub2"], "link", []);
                            echo "\">
                                                    ";
                            // line 51
                            echo $this->getAttribute($context["sub2"], "text", []);
                            echo "
                                                </a>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "                                    </ul>
                                ";
                    }
                    // line 57
                    echo "                            </li>
                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                    </ul>
                ";
            }
            // line 61
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </ul>   ";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                if ($this->getAttribute($context["p"], "visible", [])) {
                    // line 4
                    echo "            ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                    // line 5
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                    ";
                    // line 7
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                ";
                    // line 9
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", []), "count", []) > 0)) {
                        // line 10
                        echo "                    <ul>
                        ";
                        // line 11
                        echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                        echo "
                    </ul>
                ";
                    }
                    // line 14
                    echo "            </li>
        ";
                }
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 16,  231 => 14,  225 => 11,  222 => 10,  220 => 9,  215 => 7,  211 => 6,  206 => 5,  203 => 4,  200 => 3,  195 => 2,  183 => 1,  179 => 63,  172 => 61,  168 => 59,  153 => 57,  149 => 55,  139 => 51,  135 => 50,  132 => 49,  128 => 48,  125 => 47,  123 => 46,  118 => 44,  113 => 43,  106 => 42,  89 => 41,  86 => 40,  84 => 39,  79 => 37,  75 => 36,  72 => 35,  67 => 34,  64 => 33,  58 => 32,  51 => 28,  47 => 27,  42 => 26,  39 => 25,  36 => 24,  31 => 23,  25 => 21,  23 => 20,  19 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children %}
        {% if p.visible %}
            {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\">
                    {{ p.menu }}
                </a>
                {% if p.children.count > 0 %}
                    <ul>
                        {{ _self.loop(p) }}
                    </ul>
                {% endif %}
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul class=\"nav sf-menu\">
    {% if config.themes.photographer.dropdown.enabled %}
        {{ _self.loop(pages) }}
        {% else %}
        {% for page in pages.children %}
            {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    <li class=\"{{ current_page }}\">
                        <a href=\"{{ page.url }}\">
                            {{ page.menu }}
                        </a>
                    </li>
                {% endif %}
            {% endfor %}
        {% endif %}
        {% for mitem in site.menu %}
            <li>
                <a href=\"{{ mitem.link }}\">
                    {{ mitem.text }}
                </a>
                {% if mitem.submenu %}
                    <ul>
                        {% for sub1 in mitem.submenu %}
                            <li>{% if loop.first %}<img src=\"{{ theme_url }}/img/arrowup.png\" alt=\"\">{% endif %}
                                <a href=\"{{ sub1.link }}\">
                                    {{ sub1.text }}
                                </a>
                                {% if sub1.submenu %}
                                    <ul>
                                        {% for sub2 in sub1.submenu %}
                                            <li>
                                                <a href=\"{{ sub2.link }}\">
                                                    {{ sub2.text }}
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                {% endif %}
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endfor %}
    </ul>   ", "partials/navigation.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/themes/photographer/templates/partials/navigation.html.twig");
    }
}

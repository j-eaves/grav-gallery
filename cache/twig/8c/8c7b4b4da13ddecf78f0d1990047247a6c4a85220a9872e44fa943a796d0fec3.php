<?php

/* default.html.twig */
class __TwigTemplate_f005b4c33b247181e9383ccb3fe5c963c947df42a56034e336555cb348785e99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "    <div id=\"content\">
        <div class=\"row_9\">
            <div class=\"container\">
                <div class=\"row ";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
                 ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
             </div> 
         </div>
     </div>
 </div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% block content %}
    <div id=\"content\">
        <div class=\"row_9\">
            <div class=\"container\">
                <div class=\"row {{ page.header.class }}\">
                 {{ page.content }}
             </div> 
         </div>
     </div>
 </div>
{% endblock %}
", "default.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/themes/photographer/templates/default.html.twig");
    }
}

<?php

/* error.html.twig */
class __TwigTemplate_9000ff2415aea5af0538a695cfd0b0d12647ec65854d1b3b12d4302c092e8a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
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
        echo "<div id=\"content\">
    <div class=\"row_10\">
        <div class=\"container\">
          <div class=\"row block-404\">
            <div class=\"col-lg-7 col-md-7 col-sm-7\">
                <figure class=\"img-polaroid\"><img src=\"";
        // line 8
        echo ($context["theme_url"] ?? null);
        echo "/img/404.jpg\" alt=\"\"></figure>
            </div>
            <div class=\"col-lg-3 col-md-5 col-sm-5 forminfo\">
                <div>
                    <h2 class=\"title404_1\">Error ";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h2>
                    ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </div>
            </div>  
          </div> 
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  45 => 12,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
    <div class=\"row_10\">
        <div class=\"container\">
          <div class=\"row block-404\">
            <div class=\"col-lg-7 col-md-7 col-sm-7\">
                <figure class=\"img-polaroid\"><img src=\"{{ theme_url }}/img/404.jpg\" alt=\"\"></figure>
            </div>
            <div class=\"col-lg-3 col-md-5 col-sm-5 forminfo\">
                <div>
                    <h2 class=\"title404_1\">Error {{ page.header.http_response_code }}</h2>
                    {{ page.content }}
                </div>
            </div>  
          </div> 
        </div>
    </div>
</div>
{% endblock %}
", "error.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/themes/photographer/templates/error.html.twig");
    }
}

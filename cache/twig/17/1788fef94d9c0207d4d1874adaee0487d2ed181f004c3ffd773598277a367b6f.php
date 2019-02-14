<?php

/* @Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/10.my-projects */
class __TwigTemplate_f42f932af38ad4e606b0bce09e258552ece7fc1f78d27c40f76bd42d5d5a5028 extends Twig_Template
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
        echo "<h1>This page contains galleries to some personal projects.</h1>
<h2>These are some of the things that I have done and documented over the years.</h2>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/10.my-projects";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>This page contains galleries to some personal projects.</h1>
<h2>These are some of the things that I have done and documented over the years.</h2>", "@Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/10.my-projects", "");
    }
}

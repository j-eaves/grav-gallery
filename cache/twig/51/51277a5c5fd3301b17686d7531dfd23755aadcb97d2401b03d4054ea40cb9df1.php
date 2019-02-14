<?php

/* @Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/09.personal-projects */
class __TwigTemplate_53dcc14b3864e192818030d4b2abdfe2cbd3cd4334ad97f1d0c425e5d2793b8b extends Twig_Template
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
        echo "<h2>I like to make things.</h2>
<h3>These are some of my past personal projects.</h3>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/09.personal-projects";
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
        return new Twig_Source("<h2>I like to make things.</h2>
<h3>These are some of my past personal projects.</h3>
<hr />", "@Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/09.personal-projects", "");
    }
}

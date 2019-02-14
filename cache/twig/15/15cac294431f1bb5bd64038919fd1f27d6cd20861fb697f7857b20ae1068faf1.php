<?php

/* @Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/01.home/_slider */
class __TwigTemplate_75ba0d50e1e11bf173b113c64b42492ccefaa3b1654197064c374079b5bc43a5 extends Twig_Template
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
        echo "<div class=\"slider\">
    <div class=\"camera_wrap\">
                     <div data-src=\"/user/pages/01.home/_slider/picture1.jpg\"></div>
                     <div data-src=\"/user/pages/01.home/_slider/picture2.jpg\"></div>
                     <div data-src=\"/user/pages/01.home/_slider/picture3.jpg\"></div>
                     <div data-src=\"/user/pages/01.home/_slider/picture4.jpg\"></div>
                
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/01.home/_slider";
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
        return new Twig_Source("<div class=\"slider\">
    <div class=\"camera_wrap\">
                     <div data-src=\"/user/pages/01.home/_slider/picture1.jpg\"></div>
                     <div data-src=\"/user/pages/01.home/_slider/picture2.jpg\"></div>
                     <div data-src=\"/user/pages/01.home/_slider/picture3.jpg\"></div>
                     <div data-src=\"/user/pages/01.home/_slider/picture4.jpg\"></div>
                
    </div>
</div>

", "@Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/01.home/_slider", "");
    }
}

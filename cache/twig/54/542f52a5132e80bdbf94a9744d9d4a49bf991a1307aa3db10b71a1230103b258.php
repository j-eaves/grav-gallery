<?php

/* @Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/07.location */
class __TwigTemplate_cff6e3af9658a9ddf7c6ca64e79b36433d7b5f7194261fe0db897fe09e0008eb extends Twig_Template
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
        echo "<h2>Postal Address</h2>
<address markdown=\"1\">
**8901 Marmora Road, Glasgow, D04 89GR.**

Telephone: +1 959 603 6035

FAX:  +1 504 889 9898

E-mail: mail@demolink.org
</address>
<address markdown=\"1\">
**9867 Mill Road, Cambridge, MG09 99HT**

Telephone: +1 959 603 6035

FAX: +1 504 889 9898

E-mail: mail@demolink.org
</address>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/07.location";
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
        return new Twig_Source("<h2>Postal Address</h2>
<address markdown=\"1\">
**8901 Marmora Road, Glasgow, D04 89GR.**

Telephone: +1 959 603 6035

FAX:  +1 504 889 9898

E-mail: mail@demolink.org
</address>
<address markdown=\"1\">
**9867 Mill Road, Cambridge, MG09 99HT**

Telephone: +1 959 603 6035

FAX: +1 504 889 9898

E-mail: mail@demolink.org
</address>", "@Page:/Users/catherder/My_WebApps/grav-admin_quark_theme/user/pages/07.location", "");
    }
}

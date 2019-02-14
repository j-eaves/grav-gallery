<?php

/* partials/userinfo-avatar.html.twig */
class __TwigTemplate_7422546ec2f1daa9da0a1dae03b53de81ce5db147e667806921d901babe760c3 extends Twig_Template
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
        if ($this->getAttribute(($context["data"] ?? null), "avatar", [])) {
            // line 2
            echo "    <label><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "avatarUrl", []), "html", null, true);
            echo "\" /></label>
";
        } else {
            // line 4
            echo "    <label><img referrerpolicy=\"no-referrer\" src=\"https://www.gravatar.com/avatar/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute(($context["data"] ?? null), "email", [])), "html", null, true);
            echo "?s=200\" /></label>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/userinfo-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.avatar %}
    <label><img src=\"{{ data.avatarUrl }}\" /></label>
{% else %}
    <label><img referrerpolicy=\"no-referrer\" src=\"https://www.gravatar.com/avatar/{{ data.email|md5 }}?s=200\" /></label>
{% endif %}", "partials/userinfo-avatar.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/admin/themes/grav/templates/partials/userinfo-avatar.html.twig");
    }
}

<?php

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_3ed12d6f91707ce1d7035ecf24711889d5344103de8cbd1ad2c72df9af64731d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/pagemedia/pagemedia.html.twig", 1);
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
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_field($context, array $blocks = [])
    {
        // line 6
        if ($this->getAttribute(($context["context"] ?? null), "folderExists", [])) {
            // line 7
            echo "    ";
            $context["pagemedia"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pagemedia"], "method");
            // line 8
            echo "    ";
            $context["pagemedia_settings"] = ["resolution" => ["min" => ["width" => (($this->getAttribute(            // line 11
($context["pagemedia"] ?? null), "res_min_width", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_min_width", [])) : (null)), "height" => (($this->getAttribute(            // line 12
($context["pagemedia"] ?? null), "res_min_height", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_min_height", [])) : (null))], "max" => ["width" => (($this->getAttribute(            // line 15
($context["pagemedia"] ?? null), "res_max_width", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_max_width", [])) : (null)), "height" => (($this->getAttribute(            // line 16
($context["pagemedia"] ?? null), "res_max_height", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_max_height", [])) : (null))]], "resizeWidth" => (($this->getAttribute(            // line 19
($context["pagemedia"] ?? null), "resize_width", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_width", [])) : (null)), "resizeHeight" => (($this->getAttribute(            // line 20
($context["pagemedia"] ?? null), "resize_height", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_height", [])) : (null)), "resizeQuality" => (($this->getAttribute(            // line 21
($context["pagemedia"] ?? null), "resize_quality", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_quality", [])) : (0.8))];
            // line 23
            echo "
    ";
            // line 24
            $context["media_url"] = (($this->getAttribute(($context["form"] ?? null), "getMediaTaskRoute", [], "method")) ? ($this->getAttribute(($context["form"] ?? null), "getMediaTaskRoute", [], "method")) : ((("/media/" . twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/")) . ".json")));
            // line 25
            echo "    ";
            $context["media_local"] = (($this->getAttribute(($context["form"] ?? null), "getMediaRoute", [], "method")) ? ($this->getAttribute(($context["form"] ?? null), "getMediaRoute", [], "method")) : ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . "/") . twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"))));
            // line 26
            echo "    ";
            $context["media_path"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["context"] ?? null), "relativePagePath", []));
            // line 27
            echo "    ";
            $context["media_uri"] = $this->getAttribute(($context["context"] ?? null), "mediaUri", [], "method");
            // line 28
            echo "    ";
            $context["upload_limit"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "system", []), "media", []), "upload_limit", []) / 1024) / 1024);
            // line 29
            echo "    ";
            $context["dropzone_settings"] = twig_array_merge(["maxFileSize" => ($context["upload_limit"] ?? null)], ($context["pagemedia_settings"] ?? null));
            // line 30
            echo "
    <div class=\"form-field grid vertical ";
            // line 31
            if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            }
            echo "\">
    <div class=\"form-label\">
        <label>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"";
            // line 38
            echo twig_escape_filter($this->env, (($context["base_url"] ?? null) . ($context["media_url"] ?? null)), "html_attr");
            echo "\"
             data-media-local=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["media_local"] ?? null), "html_attr");
            echo "\"
             data-media-path=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["media_path"] ?? null), "html_attr");
            echo "\"
             data-media-uri=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["media_uri"] ?? null), "html_attr");
            echo "\"
             data-dropzone-options=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropzone_settings"] ?? null)), "html_attr");
            echo "\"
             data-dropzone-field=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"></div>

        ";
            // line 45
            if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0")) {
                // line 46
                echo "        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null));
                echo "\" />
        ";
            }
            // line 48
            echo "    </div>
</div>
";
        } else {
            // line 51
            echo "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"), "html", null, true);
            echo "
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemedia/pagemedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 54,  127 => 51,  122 => 48,  114 => 46,  112 => 45,  107 => 43,  103 => 42,  99 => 41,  95 => 40,  91 => 39,  87 => 38,  79 => 33,  72 => 31,  69 => 30,  66 => 29,  63 => 28,  60 => 27,  57 => 26,  54 => 25,  52 => 24,  49 => 23,  47 => 21,  46 => 20,  45 => 19,  44 => 16,  43 => 15,  42 => 12,  41 => 11,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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

{% set value = (value is null ? field.default : value) %}

{% block field %}
{% if context.folderExists %}
    {% set pagemedia = config.get('plugins.admin.pagemedia') %}
    {% set pagemedia_settings = {
        resolution: {
            min: {
                width: pagemedia.res_min_width ?: null,
                height: pagemedia.res_min_height ?: null
            },
            max: {
                width: pagemedia.res_max_width ?: null,
                height: pagemedia.res_max_height ?: null
            }
        },
        resizeWidth: pagemedia.resize_width ?: null,
        resizeHeight: pagemedia.resize_height ?: null,
        resizeQuality: pagemedia.resize_quality ?: 0.8
    } %}

    {% set media_url = form.getMediaTaskRoute() ?: '/media/' ~ admin.route|trim('/') ~ '.json' %}
    {% set media_local = form.getMediaRoute() ?: base_url_relative_frontend|rtrim('/') ~ '/' ~ admin.route|trim('/') %}
    {% set media_path = url(context.relativePagePath) %}
    {% set media_uri = context.mediaUri() %}
    {% set upload_limit = grav.config.system.media.upload_limit / 1024 / 1024 %}
    {% set dropzone_settings = { maxFileSize: upload_limit }|merge(pagemedia_settings) %}

    <div class=\"form-field grid vertical {% if field.classes is defined %}{{ field.classes }}{% endif %}\">
    <div class=\"form-label\">
        <label>{{ field.label|tu }}</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"{{ (base_url ~ media_url)|e('html_attr') }}\"
             data-media-local=\"{{ media_local|e('html_attr') }}\"
             data-media-path=\"{{ media_path|e('html_attr') }}\"
             data-media-uri=\"{{ media_uri|e('html_attr') }}\"
             data-dropzone-options=\"{{ dropzone_settings|json_encode|e('html_attr') }}\"
             data-dropzone-field=\"{{ (scope ~ field.name)|fieldName }}\"></div>

        {% if admin.session.expert == '0' %}
        <input type=\"hidden\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{ value|e }}\" />
        {% endif %}
    </div>
</div>
{% else %}
<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            {{ \"PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED\"|tu }}
        </div>
    </div>
</div>
{% endif %}
{% endblock %}
", "forms/fields/pagemedia/pagemedia.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/admin/themes/grav/templates/forms/fields/pagemedia/pagemedia.html.twig");
    }
}

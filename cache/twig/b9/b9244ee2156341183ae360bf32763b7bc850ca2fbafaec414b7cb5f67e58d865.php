<?php

/* partials/tools-backups.html.twig */
class __TwigTemplate_9ce11df0f6dd8e779762b71225c191aa1b1423f3b742372092ac6a2df7b75991 extends Twig_Template
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
        echo "<div class=\"backups-content\">

    ";
        // line 3
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration_backups", 1 => "admin.super"])) {
            // line 4
            echo "
        ";
            // line 5
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => "config/backups"], "method");
            // line 6
            echo "        ";
            $context["backups"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getAvailableBackups", [], "method");
            // line 7
            echo "        ";
            $context["profiles"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getBackupProfiles", [], "method");
            // line 8
            echo "        ";
            $context["purge_config"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getPurgeConfig", [], "method");
            // line 9
            echo "        ";
            $context["newest_date"] = $this->getAttribute(twig_first($this->env, ($context["backups"] ?? null)), "date", []);
            // line 10
            echo "        ";
            $context["newest_backup"] = ((($context["newest_date"] ?? null)) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFunc(($context["newest_date"] ?? null), false, false)) : ("none"));
            // line 11
            echo "        ";
            $context["oldest_date"] = $this->getAttribute(twig_last($this->env, ($context["backups"] ?? null)), "date", []);
            // line 12
            echo "        ";
            $context["oldest_backup"] = ((($context["oldest_date"] ?? null)) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFunc(($context["oldest_date"] ?? null), false, false)) : ("none"));
            // line 13
            echo "
        ";
            // line 14
            switch ($this->getAttribute(($context["purge_config"] ?? null), "trigger", [])) {
                case "number":
                {
                    // line 16
                    echo "            ";
                    $context["count"] = count(($context["backups"] ?? null));
                    // line 17
                    echo "            ";
                    $context["percent_used"] = (((($context["count"] ?? null) == 0)) ? (0) : ((100 - ((($context["count"] ?? null) / $this->getAttribute(($context["purge_config"] ?? null), "max_backups_count", [])) * 100))));
                    // line 18
                    echo "            ";
                    $context["bar_msg"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_PURGE_NUMBER", [0 => ($context["count"] ?? null), 1 => $this->getAttribute(($context["purge_config"] ?? null), "max_backups_count", [])]);
                    // line 19
                    echo "        ";
                    break;
                }
                case "time":
                {
                    // line 20
                    echo "            ";
                    $context["last"] = twig_last($this->env, ($context["backups"] ?? null));
                    // line 21
                    echo "            ";
                    $context["days"] = (((($context["last"] ?? null) == null)) ? (0) : ($this->getAttribute($this->getAttribute(twig_date_converter($this->env, "now"), "diff", [0 => $this->getAttribute(($context["last"] ?? null), "time", [])], "method"), "days", [])));
                    // line 22
                    echo "            ";
                    $context["percent_used"] = (((($context["days"] ?? null) == 0)) ? (0) : ((100 - ((($context["days"] ?? null) / $this->getAttribute(($context["purge_config"] ?? null), "max_backups_time", [])) * 100))));
                    // line 23
                    echo "            ";
                    $context["bar_msg"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_PURGE_TIME", [0 => ($this->getAttribute(($context["purge_config"] ?? null), "max_backups_time", []) - ($context["days"] ?? null))]);
                    // line 24
                    echo "        ";
                    break;
                }
                default:
                {
                    // line 25
                    echo "            ";
                    $context["space_used"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getTotalBackupsSize", [], "method");
                    // line 26
                    echo "            ";
                    $context["space_available"] = ((($this->getAttribute(($context["purge_config"] ?? null), "max_backups_space", []) * 1024) * 1024) * 1024);
                    // line 27
                    echo "            ";
                    $context["percent_used"] = (((($context["space_used"] ?? null) == 0)) ? (0) : ((100 - ((($context["space_used"] ?? null) / ($context["space_available"] ?? null)) * 100))));
                    // line 28
                    echo "            ";
                    $context["bar_msg"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_PURGE_SPACE", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->niceFilesizeFunc(($context["space_used"] ?? null)), 1 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->niceFilesizeFunc(($context["space_available"] ?? null))]);
                    // line 29
                    echo "        ";
                }
            }
            // line 30
            echo "
        <div id=\"admin-dashboard\">
          <div id=\"backups-stats\" class=\"dashboard-item\">
            <div class=\"primary-accent default-box-shadow\">
              <h1>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_STATS"), "html", null, true);
            echo "</h1>
              <div class=\"admin-statistics-chart\">
                <div class=\"stats-info\">

                    <div id=\"backups-usage\">
                        <div class=\"backups-usage-wrapper\">
                            ";
            // line 40
            if ((($context["percent_used"] ?? null) >= 100)) {
                // line 41
                echo "                                <div class=\"usage full\"></div>
                            ";
            } else {
                // line 43
                echo "                                <div class=\"usage\" style=\"width:";
                echo twig_escape_filter($this->env, ($context["percent_used"] ?? null), "html", null, true);
                echo "%\"></div>
                            ";
            }
            // line 45
            echo "                        </div>
                        <h1>";
            // line 46
            echo twig_escape_filter($this->env, ($context["bar_msg"] ?? null), "html", null, true);
            echo "</h1>
                    </div>
                </div>

                <div class=\"flush-bottom button-bar stats-bar\">
                  <span class=\"stat\">
                      <b>";
            // line 52
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["backups"] ?? null)), "html", null, true);
            echo "</b>
                      <i>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_COUNT"), "html", null, true);
            echo "</i>
                  </span>
                  <span class=\"stat\">
                      <b>";
            // line 56
            echo twig_escape_filter($this->env, count(($context["profiles"] ?? null)), "html", null, true);
            echo "</b>
                      <i>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_PROFILES_COUNT"), "html", null, true);
            echo "</i>
                  </span>
                    <span class=\"stat\">
                      <b>";
            // line 60
            echo twig_escape_filter($this->env, ($context["newest_backup"] ?? null), "html", null, true);
            echo "</b>
                      <i>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_NEWEST"), "html", null, true);
            echo "</i>
                  </span>
                    <span class=\"stat\">
                      <b>";
            // line 64
            echo twig_escape_filter($this->env, ($context["oldest_backup"] ?? null), "html", null, true);
            echo "</b>
                      <i>";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_OLDEST"), "html", null, true);
            echo "</i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
            // line 73
            $this->loadTemplate("partials/blueprints.html.twig", "partials/tools-backups.html.twig", 73)->display(array_merge($context, ["blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", []), "data" => ($context["data"] ?? null)]));
            // line 74
            echo "
        ";
            // line 75
            $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/tools-backups.html.twig", 75)->display($context);
            // line 76
            echo "
    ";
        }
        // line 78
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/tools-backups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 78,  198 => 76,  196 => 75,  193 => 74,  191 => 73,  180 => 65,  176 => 64,  170 => 61,  166 => 60,  160 => 57,  156 => 56,  150 => 53,  146 => 52,  137 => 46,  134 => 45,  128 => 43,  124 => 41,  122 => 40,  113 => 34,  107 => 30,  103 => 29,  100 => 28,  97 => 27,  94 => 26,  91 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"backups-content\">

    {% if authorize(['admin.configuration_backups', 'admin.super']) %}

        {% set data = admin.data('config/backups') %}
        {% set backups = grav.backups.getAvailableBackups() %}
        {% set profiles = grav.backups.getBackupProfiles() %}
        {% set purge_config = grav.backups.getPurgeConfig() %}
        {% set newest_date = (backups|first).date %}
        {% set newest_backup = newest_date ? newest_date|nicetime(false, false) : 'none' %}
        {% set oldest_date = (backups|last).date %}
        {% set oldest_backup = oldest_date ? oldest_date|nicetime(false, false) : 'none' %}

        {% switch purge_config.trigger %}
        {% case 'number' %}
            {% set count = backups|count %}
            {% set percent_used = count == 0 ? 0 : 100 - (count / purge_config.max_backups_count * 100) %}
            {% set bar_msg = \"PLUGIN_ADMIN.BACKUPS_PURGE_NUMBER\"|tu([count, purge_config.max_backups_count]) %}
        {% case 'time' %}
            {% set last = backups|last %}
            {% set days = last == null ? 0 : (date('now')).diff(last.time).days %}
            {% set percent_used = days == 0 ? 0 : 100 - (days / purge_config.max_backups_time * 100) %}
            {% set bar_msg = \"PLUGIN_ADMIN.BACKUPS_PURGE_TIME\"|tu([(purge_config.max_backups_time - days)]) %}
        {% default %}
            {% set space_used = grav.backups.getTotalBackupsSize() %}
            {% set space_available = purge_config.max_backups_space * 1024 * 1024 * 1024 %}
            {% set percent_used = space_used == 0 ? 0 : 100 - (space_used / space_available * 100) %}
            {% set bar_msg = \"PLUGIN_ADMIN.BACKUPS_PURGE_SPACE\"|tu([space_used|nicefilesize, space_available|nicefilesize]) %}
        {% endswitch %}

        <div id=\"admin-dashboard\">
          <div id=\"backups-stats\" class=\"dashboard-item\">
            <div class=\"primary-accent default-box-shadow\">
              <h1>{{ \"PLUGIN_ADMIN.BACKUPS_STATS\"|tu }}</h1>
              <div class=\"admin-statistics-chart\">
                <div class=\"stats-info\">

                    <div id=\"backups-usage\">
                        <div class=\"backups-usage-wrapper\">
                            {% if percent_used >= 100 %}
                                <div class=\"usage full\"></div>
                            {% else %}
                                <div class=\"usage\" style=\"width:{{ percent_used }}%\"></div>
                            {% endif %}
                        </div>
                        <h1>{{ bar_msg }}</h1>
                    </div>
                </div>

                <div class=\"flush-bottom button-bar stats-bar\">
                  <span class=\"stat\">
                      <b>{{ backups|length }}</b>
                      <i>{{ \"PLUGIN_ADMIN.BACKUPS_COUNT\"|tu }}</i>
                  </span>
                  <span class=\"stat\">
                      <b>{{ profiles|count }}</b>
                      <i>{{ \"PLUGIN_ADMIN.BACKUPS_PROFILES_COUNT\"|tu }}</i>
                  </span>
                    <span class=\"stat\">
                      <b>{{ newest_backup }}</b>
                      <i>{{ \"PLUGIN_ADMIN.BACKUPS_NEWEST\"|tu }}</i>
                  </span>
                    <span class=\"stat\">
                      <b>{{ oldest_backup }}</b>
                      <i>{{ \"PLUGIN_ADMIN.BACKUPS_OLDEST\"|tu }}</i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}

        {% include 'partials/modal-changes-detected.html.twig' %}

    {% endif %}

</div>
", "partials/tools-backups.html.twig", "/Users/catherder/My_WebApps/grav-admin_quark_theme/user/plugins/admin/themes/grav/templates/partials/tools-backups.html.twig");
    }
}

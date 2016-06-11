<?php

/* forms/fields/list/list.html.twig */
class __TwigTemplate_6c98ea05d00217c368e22be92944241b7076a88c7e667ce306b82233edef8221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/list/list.html.twig", 1);
        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
            'global_attributes' => array($this, 'block_global_attributes'),
            '__internal_a45609fa92726e04fad9969f03665a74884ee06a48e645d63b810489306d00bc' => array($this, 'block___internal_a45609fa92726e04fad9969f03665a74884ee06a48e645d63b810489306d00bc'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 4
        $context["name"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
        // line 5
        $context["btnLabel"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "btnLabel", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "btnLabel", array())) : ("PLUGIN_ADMIN.ADD_ITEM"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_contents($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"form-label";
        if ( !(isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " block size-1-4 pure-u-1-4";
        }
        echo "\">
        ";
        // line 9
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array())) {
            // line 10
            echo "            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
            echo "\">
                <input type=\"checkbox\"
                       id=\"toggleable_";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
            echo "\"
                       ";
            // line 13
            if ((isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null)) {
                echo "value=\"1\"";
            }
            // line 14
            echo "                       name=\"toggleable_";
            echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
            echo "\"
                       ";
            // line 15
            if ((isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null)) {
                echo "checked=\"checked\"";
            }
            // line 16
            echo "                >
                <label for=\"toggleable_";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
            echo "\"></label>
            </span>
        ";
        }
        // line 20
        echo "        <label";
        echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array())) ? (((" class=\"toggleable\" for=\"toggleable_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) . "\"")) : (""));
        echo ">
            ";
        // line 21
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 22
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 24
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())), "html", null, true);
            echo "
            ";
        }
        // line 26
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data";
        // line 29
        if ( !(isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " block size-3-4 pure-u-3-4";
        }
        echo "\"
        ";
        // line 30
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 35
        echo "    >

        <div class=\"form-list-wrapper ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()), "html", null, true);
        echo "\" data-type=\"collection\">
            <ul data-collection-holder=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"
                ";
        // line 39
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sort", array()) === false)) {
            // line 40
            echo "                    data-collection-nosort
                ";
        }
        // line 41
        echo ">
                ";
        // line 42
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 43
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 44
                echo "                    ";
                $context["itemName"] = (((isset($context["name"]) ? $context["name"] : null)) ? ((((isset($context["name"]) ? $context["name"] : null) . ".") . $context["key"])) : ($context["key"]));
                // line 45
                echo "                    <li data-collection-item=\"";
                echo twig_escape_filter($this->env, (isset($context["itemName"]) ? $context["itemName"] : null), "html", null, true);
                echo "\" data-collection-key=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                        ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                    // line 47
                    echo "                            ";
                    if ((is_string($__internal_4464c9f3d5ac28914db886739568b357694494c9265960397effe9a6b8365b9b = $context["childName"]) && is_string($__internal_eb2df663a1f6eedb00ec7e1532eb53d75ad53046542545b09d129e5e337bec75 = ".") && ('' === $__internal_eb2df663a1f6eedb00ec7e1532eb53d75ad53046542545b09d129e5e337bec75 || 0 === strpos($__internal_4464c9f3d5ac28914db886739568b357694494c9265960397effe9a6b8365b9b, $__internal_eb2df663a1f6eedb00ec7e1532eb53d75ad53046542545b09d129e5e337bec75)))) {
                        // line 48
                        echo "                                ";
                        $context["childKey"] = trim($context["childName"], ".");
                        // line 49
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute($context["val"], twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                        // line 50
                        echo "                                ";
                        $context["childName"] = ((isset($context["itemName"]) ? $context["itemName"] : null) . $context["childName"]);
                        // line 51
                        echo "                            ";
                    } else {
                        // line 52
                        echo "                                ";
                        $context["childKey"] = $context["childName"];
                        // line 53
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"])), "method");
                        // line 54
                        echo "                                ";
                        $context["childName"] = twig_replace_filter($context["childName"], array("*" => $context["key"]));
                        // line 55
                        echo "                            ";
                    }
                    // line 56
                    echo "                            ";
                    $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                    // line 57
                    echo "
                            ";
                    // line 58
                    if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                        // line 59
                        echo "                                ";
                        // line 60
                        $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/list/list.html.twig", 60)->display(array_merge($context, array("field" =>                         // line 61
$context["child"], "value" => $context["key"])));
                        // line 63
                        echo "                            ";
                    } elseif ($this->getAttribute($context["child"], "type", array())) {
                        // line 64
                        echo "                                ";
                        // line 65
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                        // line 66
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/list/list.html.twig", 65)->display(array_merge($context, array("field" =>                         // line 68
$context["child"], "value" => (isset($context["childValue"]) ? $context["childValue"] : null))));
                        // line 70
                        echo "                            ";
                    }
                    // line 71
                    echo "                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                        <div class=\"item-actions\">
                            ";
                // line 73
                if ( !($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sort", array()) === false)) {
                    // line 74
                    echo "                            <i class=\"fa fa-bars\"></i>
                            <br />
                            ";
                }
                // line 77
                echo "                            <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                        </div>
                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                ";
        }
        // line 82
        echo "            </ul>
            <div class=\"collection-actions\">
                <button class=\"button\" type=\"button\" data-action=\"add\"
                ";
        // line 85
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        echo "><i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, (isset($context["btnLabel"]) ? $context["btnLabel"] : null))), "html", null, true);
        echo "</button>
            </div>";
        // line 88
        $context["itemName"] = (((isset($context["name"]) ? $context["name"] : null)) ? (((isset($context["name"]) ? $context["name"] : null) . ".*")) : ("*"));
        // line 89
        echo "<div style=\"display: none;\" data-collection-template=\"new\" data-collection-template-html=\"";
        echo twig_escape_filter($this->env, twig_replace_filter((string) $this->renderBlock("__internal_a45609fa92726e04fad9969f03665a74884ee06a48e645d63b810489306d00bc", $context, $blocks), array("   " => " ", "
" => " ")), "html_attr");
        // line 125
        echo "\"></div>

            <div style=\"display: none;\" data-collection-config=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"></div>
        </div>
    </div>
";
    }

    // line 30
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 31
        echo "        data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), "html", null, true);
        echo "\"
        data-grav-disabled=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null), "html", null, true);
        echo "\"
        data-grav-default=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
        ";
    }

    // line 89
    public function block___internal_a45609fa92726e04fad9969f03665a74884ee06a48e645d63b810489306d00bc($context, array $blocks = array())
    {
        // line 90
        echo "<li data-collection-item=\"";
        echo twig_escape_filter($this->env, (isset($context["itemName"]) ? $context["itemName"] : null), "html", null, true);
        echo "\">";
        // line 91
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 93
                if ((is_string($__internal_719df053fc43127fe5fde09c3297c2fc40f9e55dd5b84fa740b449983ca263f2 = $context["childName"]) && is_string($__internal_7feb284b3315f11cc58741595ef86d97181c9865b9f5bffc810399f5ce87e404 = ".") && ('' === $__internal_7feb284b3315f11cc58741595ef86d97181c9865b9f5bffc810399f5ce87e404 || 0 === strpos($__internal_719df053fc43127fe5fde09c3297c2fc40f9e55dd5b84fa740b449983ca263f2, $__internal_7feb284b3315f11cc58741595ef86d97181c9865b9f5bffc810399f5ce87e404)))) {
                    // line 94
                    $context["childKey"] = trim($context["childName"], ".");
                    // line 95
                    $context["childName"] = ((isset($context["itemName"]) ? $context["itemName"] : null) . $context["childName"]);
                } else {
                    // line 97
                    $context["childKey"] = $context["childName"];
                    // line 98
                    $context["childName"] = twig_replace_filter($context["childName"], array("*" => (isset($context["key"]) ? $context["key"] : null)));
                }
                // line 100
                $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                // line 102
                if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                    // line 104
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/list/list.html.twig", 104)->display(array_merge($context, array("field" =>                     // line 105
$context["child"], "value" => null)));
                } elseif ($this->getAttribute(                // line 107
$context["child"], "type", array())) {
                    // line 109
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                    // line 110
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/list/list.html.twig", 109)->display(array_merge($context, array("field" =>                     // line 112
$context["child"], "value" => null)));
                }
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
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                    <div class=\"item-actions\">
                        ";
            // line 117
            if ( !($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sort", array()) === false)) {
                // line 118
                echo "                        <i class=\"fa fa-bars\"></i>
                        <br />
                        ";
            }
            // line 121
            echo "                        <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                    </div>";
        }
        // line 124
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "forms/fields/list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 124,  404 => 121,  399 => 118,  397 => 117,  394 => 116,  379 => 112,  378 => 110,  377 => 109,  375 => 107,  373 => 105,  372 => 104,  370 => 102,  368 => 100,  365 => 98,  363 => 97,  360 => 95,  358 => 94,  356 => 93,  339 => 92,  337 => 91,  333 => 90,  330 => 89,  324 => 33,  320 => 32,  315 => 31,  312 => 30,  304 => 127,  300 => 125,  296 => 89,  294 => 88,  286 => 85,  281 => 82,  278 => 81,  261 => 77,  256 => 74,  254 => 73,  251 => 72,  237 => 71,  234 => 70,  232 => 68,  231 => 66,  230 => 65,  228 => 64,  225 => 63,  223 => 61,  222 => 60,  220 => 59,  218 => 58,  215 => 57,  212 => 56,  209 => 55,  206 => 54,  203 => 53,  200 => 52,  197 => 51,  194 => 50,  191 => 49,  188 => 48,  185 => 47,  168 => 46,  161 => 45,  158 => 44,  140 => 43,  138 => 42,  135 => 41,  131 => 40,  129 => 39,  125 => 38,  121 => 37,  117 => 35,  115 => 30,  109 => 29,  102 => 26,  96 => 24,  88 => 22,  86 => 21,  81 => 20,  75 => 17,  72 => 16,  68 => 15,  63 => 14,  59 => 13,  55 => 12,  49 => 10,  47 => 9,  40 => 8,  37 => 7,  33 => 1,  31 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% set value = (value is null ? field.default : value) %}*/
/* {% set name = field.name %}*/
/* {% set btnLabel = field.btnLabel is defined ? field.btnLabel : "PLUGIN_ADMIN.ADD_ITEM" %}*/
/* */
/* {% block contents %}*/
/*     <div class="form-label{% if not vertical %} block size-1-4 pure-u-1-4{% endif %}">*/
/*         {% if field.toggleable %}*/
/*             <span class="checkboxes toggleable" data-grav-field="toggleable" data-grav-field-name="{{ (scope ~ field.name)|fieldName }}">*/
/*                 <input type="checkbox"*/
/*                        id="toggleable_{{ field.name }}"*/
/*                        {% if toggleableChecked %}value="1"{% endif %}*/
/*                        name="toggleable_{{ (scope ~ field.name)|fieldName }}"*/
/*                        {% if toggleableChecked %}checked="checked"{% endif %}*/
/*                 >*/
/*                 <label for="toggleable_{{ field.name }}"></label>*/
/*             </span>*/
/*         {% endif %}*/
/*         <label{{ (field.toggleable ? ' class="toggleable" for="toggleable_' ~ field.name ~ '"')|raw }}>*/
/*             {% if field.help %}*/
/*             <span class="hint--bottom" data-hint="{{ field.help|e|tu }}">{{ field.label|tu }}</span>*/
/*             {% else %}*/
/*             {{ field.label|tu }}*/
/*             {% endif %}*/
/*             {{ field.validate.required in ['on', 'true', 1] ? '<span class="required">*</span>' }}*/
/*         </label>*/
/*     </div>*/
/*     <div class="form-data{% if not vertical %} block size-3-4 pure-u-3-4{% endif %}"*/
/*         {% block global_attributes %}*/
/*         data-grav-field="{{ field.type }}"*/
/*         data-grav-disabled="{{ toggleableChecked }}"*/
/*         data-grav-default="{{ field.default|json_encode|e('html_attr') }}"*/
/*         {% endblock %}*/
/*     >*/
/* */
/*         <div class="form-list-wrapper {{ field.size }}" data-type="collection">*/
/*             <ul data-collection-holder="{{ name }}"*/
/*                 {% if field.sort is same as(false) %}*/
/*                     data-collection-nosort*/
/*                 {% endif %}>*/
/*                 {% if field.fields %}*/
/*                 {% for key, val in value %}*/
/*                     {% set itemName = name ? name ~ '.' ~ key : key %}*/
/*                     <li data-collection-item="{{ itemName }}" data-collection-key="{{ key }}">*/
/*                         {% for childName, child in field.fields %}*/
/*                             {% if childName starts with '.' %}*/
/*                                 {% set childKey = childName|trim('.') %}*/
/*                                 {% set childValue = val[childName[1:]] %}*/
/*                                 {% set childName = itemName ~ childName %}*/
/*                             {% else %}*/
/*                                 {% set childKey = childName %}*/
/*                                 {% set childValue = data.value(scope ~ childName) %}*/
/*                                 {% set childName = childName|replace({'*': key}) %}*/
/*                             {% endif %}*/
/*                             {% set child = child|merge({ name: childName }) %}*/
/* */
/*                             {% if child.type == 'key' %}*/
/*                                 {%*/
/*                                     include 'forms/fields/key/key.html.twig'*/
/*                                     with { field: child, value: key }*/
/*                                 %}*/
/*                             {% elseif child.type %}*/
/*                                 {%*/
/*                                     include [*/
/*                                         "forms/fields/#{child.type}/#{child.type}.html.twig",*/
/*                                         'forms/fields/text/text.html.twig'*/
/*                                     ] with { field: child, value: childValue }*/
/*                                 %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                         <div class="item-actions">*/
/*                             {% if field.sort is not same as(false) %}*/
/*                             <i class="fa fa-bars"></i>*/
/*                             <br />*/
/*                             {% endif %}*/
/*                             <i class="fa fa-trash-o" data-action="delete"></i>*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*                 {% endif %}*/
/*             </ul>*/
/*             <div class="collection-actions">*/
/*                 <button class="button" type="button" data-action="add"*/
/*                 {% if field.disabled or isDisabledToggleable %}disabled="disabled"{% endif %}><i class="fa fa-plus"></i> {{ btnLabel|e|tu }}</button>*/
/*             </div>*/
/* */
/*             {%- set itemName = name ? name ~ '.*' : '*' -%}*/
/*             <div style="display: none;" data-collection-template="new" data-collection-template-html="{%- filter replace({'   ': ' ', '\n': ' '})|e('html_attr') -%}*/
/*                 <li data-collection-item="{{ itemName }}">*/
/*                     {%- if field.fields -%}*/
/*                     {%- for childName, child in field.fields -%}*/
/*                         {%- if childName starts with '.' -%}*/
/*                             {%- set childKey = childName|trim('.') -%}*/
/*                             {%- set childName = itemName ~ childName -%}*/
/*                         {%- else %}*/
/*                             {%- set childKey = childName -%}*/
/*                             {%- set childName = childName|replace({'*': key}) -%}*/
/*                         {%- endif %}*/
/*                         {%- set child = child|merge({ name: childName }) -%}*/
/* */
/*                         {%- if child.type == 'key' -%}*/
/*                             {%-*/
/*                                 include 'forms/fields/key/key.html.twig'*/
/*                                 with { field: child, value: null }*/
/*                             -%}*/
/*                         {%- elseif child.type -%}*/
/*                             {%-*/
/*                                 include [*/
/*                                     "forms/fields/#{child.type}/#{child.type}.html.twig",*/
/*                                     'forms/fields/text/text.html.twig'*/
/*                                 ] with { field: child, value: null }*/
/*                             -%}*/
/*                         {%- endif -%}*/
/*                     {%- endfor %}*/
/*                     <div class="item-actions">*/
/*                         {% if field.sort is not same as(false) %}*/
/*                         <i class="fa fa-bars"></i>*/
/*                         <br />*/
/*                         {% endif %}*/
/*                         <i class="fa fa-trash-o" data-action="delete"></i>*/
/*                     </div>*/
/*                     {%- endif -%}*/
/*                 </li>*/
/*             {%- endfilter -%}"></div>*/
/* */
/*             <div style="display: none;" data-collection-config="{{ name }}"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */

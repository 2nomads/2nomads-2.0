<?php

/* partials/navigation.html.twig */
class __TwigTemplate_4544a3cb0b9117c36b54b223956041c3b3887017d68124502c49cf6f9d9c23d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"overlay overlay-boxify\">
    <nav>
        ";
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 4
        echo "        ";
        // line 5
        echo "
         <ul>
                <li class=\"";
        // line 7
        echo (isset($context["current_module"]) ? $context["current_module"] : null);
        echo "\">
                    <a href=\"home\"><i class=\"fa fa-home\"></i>Home</a>
                </li>
                <li class=\"";
        // line 10
        echo (isset($context["current_module"]) ? $context["current_module"] : null);
        echo "\">
                    <a href=\"blog\"><i class=\"fa fa-pencil\"></i>Blog</a>
                </li>
                <li class=\"";
        // line 13
        echo (isset($context["current_module"]) ? $context["current_module"] : null);
        echo "\">
                    <a href=\"about\"><i class=\"fa fa-globe\"></i>About</a>
                </li>
                <li class=\"";
        // line 16
        echo (isset($context["current_module"]) ? $context["current_module"] : null);
        echo "\">
                    <a href=\"team\"><i class=\"fa fa-star\"></i>Team</a>
                </li>
    </ul>
    </ul>
    </ul>
    </nav>
</div>
";
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 4,  49 => 16,  43 => 13,  37 => 10,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="overlay overlay-boxify">*/
/*     <nav>*/
/*         {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}*/
/*         {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}*/
/* */
/*          <ul>*/
/*                 <li class="{{ current_module }}">*/
/*                     <a href="home"><i class="fa fa-home"></i>Home</a>*/
/*                 </li>*/
/*                 <li class="{{ current_module }}">*/
/*                     <a href="blog"><i class="fa fa-pencil"></i>Blog</a>*/
/*                 </li>*/
/*                 <li class="{{ current_module }}">*/
/*                     <a href="about"><i class="fa fa-globe"></i>About</a>*/
/*                 </li>*/
/*                 <li class="{{ current_module }}">*/
/*                     <a href="team"><i class="fa fa-star"></i>Team</a>*/
/*                 </li>*/
/*     </ul>*/
/*     </ul>*/
/*     </ul>*/
/*     </nav>*/
/* </div>*/
/* */

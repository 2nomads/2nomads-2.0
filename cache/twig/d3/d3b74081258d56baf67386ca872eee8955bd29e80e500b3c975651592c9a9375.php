<?php

/* partials/header.html.twig */
class __TwigTemplate_a8944fe1c6ddc845dddbb84af67b1d57f6f38defea2e509da2b357887d1c47bc extends Twig_Template
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
        echo "<header id=\"header\" class=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_class", array());
        echo "\">
  <h1 id=\"logo\"><a href=\"";
        // line 2
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "text1", array());
        echo " <span>";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "text2", array());
        echo "</span></a></h1>
  <nav id=\"nav\">
    <ul>
      <li class=\"submenu\">
        <a href=\"\">Menu</a>
        <ul>
          ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 9
            echo "          ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 10
                echo "          ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 11
                echo "          <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
            <a href=\"";
                // line 12
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
              ";
                // line 13
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
            </a>
          </li>
          ";
            }
            // line 17
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 19
            echo "          <li>
            <a href=\"";
            // line 20
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "          <li class=\"submenu\">
            <a href=\"\">Submenu</a>
            <ul>
              ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "submenu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
            // line 27
            echo "              <li><a href=\"";
            echo $this->getAttribute($context["submenu"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["submenu"], "text", array());
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
          </li>
        </ul>
      </li>

      ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 35
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["button"], "link", array());
            echo "\" class=\"button special\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </ul>
  </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  119 => 35,  115 => 34,  108 => 29,  97 => 27,  93 => 26,  88 => 23,  77 => 20,  74 => 19,  69 => 18,  63 => 17,  56 => 13,  52 => 12,  47 => 11,  44 => 10,  41 => 9,  37 => 8,  24 => 2,  19 => 1,);
    }
}
/* <header id="header" class="{{ page.header.header_class }}">*/
/*   <h1 id="logo"><a href="{{ base_url_absolute }}">{{ site.logo.text1 }} <span>{{ site.logo.text2 }}</span></a></h1>*/
/*   <nav id="nav">*/
/*     <ul>*/
/*       <li class="submenu">*/
/*         <a href="">Menu</a>*/
/*         <ul>*/
/*           {% for page in pages.children %}*/
/*           {% if page.visible %}*/
/*           {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}*/
/*           <li class="{{ current_page }}">*/
/*             <a href="{{ page.url }}">*/
/*               {{ page.menu }}*/
/*             </a>*/
/*           </li>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*           {% for mitem in site.menu %}*/
/*           <li>*/
/*             <a href="{{ mitem.link }}">{{ mitem.text }}</a>*/
/*           </li>*/
/*           {% endfor %}*/
/*           <li class="submenu">*/
/*             <a href="">Submenu</a>*/
/*             <ul>*/
/*               {% for submenu in site.submenu %}*/
/*               <li><a href="{{ submenu.link }}">{{ submenu.text }}</a></li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*           </li>*/
/*         </ul>*/
/*       </li>*/
/* */
/*       {% for button in site.buttons %}*/
/*       <li><a href="{{ button.link }}" class="button special">{{ button.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </nav>*/
/* </header>*/
/* */

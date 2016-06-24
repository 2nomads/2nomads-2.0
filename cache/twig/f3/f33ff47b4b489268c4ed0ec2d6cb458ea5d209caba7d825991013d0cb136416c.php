<?php

/* modular/downloads.html.twig */
class __TwigTemplate_30adcc858b7e7caeba849a5d027ee88684137dd7b4ae92686431d06935b480c8 extends Twig_Template
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
        echo "<section class=\"download\" id=\"download\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 text-center wp4\">
        ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/downloads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <section class="download" id="download">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12 text-center wp4">*/
/*         {{ page.content }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/

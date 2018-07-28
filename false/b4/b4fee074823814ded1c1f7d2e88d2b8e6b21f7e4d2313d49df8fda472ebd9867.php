<?php

/* layouts/main.twig */
class __TwigTemplate_3ac0c54d6d570caecbaa74c47a2893bc4f4d993c19f7f23afb7852ba14d513e0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css\">
    <script defer src=\"https://use.fontawesome.com/releases/v5.1.0/js/all.js\"></script>
  </head>
  <body>
  <section class=\"section\">
    <div class=\"container\">
        ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </div>
  </section>
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layouts/main.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  56 => 13,  51 => 6,  44 => 15,  42 => 13,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/main.twig", "/Users/mpilo/Desktop/Web Dev/slimPHP/learning-slimPHP-3/resources/views/layouts/main.twig");
    }
}

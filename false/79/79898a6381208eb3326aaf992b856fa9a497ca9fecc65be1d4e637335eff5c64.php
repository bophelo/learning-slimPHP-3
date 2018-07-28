<?php

/* layouts/app.twig */
class __TwigTemplate_30dec5ddfe3706c9a8868761a8d541043be855a69bb0a7835124541fc03fc66a extends Twig_Template
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
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    
    <body>
        ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layouts/app.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  50 => 9,  45 => 5,  40 => 11,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/app.twig", "/Users/mpilo/Desktop/Web Dev/slimPHP/learning-slimPHP-3/resources/views/layouts/app.twig");
    }
}

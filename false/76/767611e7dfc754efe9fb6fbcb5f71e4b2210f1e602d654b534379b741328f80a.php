<?php

/* home.twig */
class __TwigTemplate_0f359d16fdebe64d55ba9d37e0e1ccddcc18ba448470ef9d024351ba48e991fe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/app.twig", "home.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Home Page
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <p>Home</p>

    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("users.index"), "html", null, true);
        echo "\">Users Page</a>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  44 => 8,  41 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "/Users/mpilo/Desktop/Web Dev/slimPHP/learning-slimPHP-3/resources/views/home.twig");
    }
}

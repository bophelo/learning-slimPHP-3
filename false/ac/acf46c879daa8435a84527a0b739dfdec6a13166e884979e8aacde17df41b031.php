<?php

/* contact.twig */
class __TwigTemplate_a2e70b5e464b31ed156a1519e63eb134e30f5746a2878f7c1af5d264f9a96521 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/app.twig", "contact.twig", 1);
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
        echo "    Contact Page
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("contact"), "html", null, true);
        echo "\" method=\"post\">
        <label for=\"name\">Name</label>
        <input type=\"text\" placeholder=\"Name\" name=\"name\">
        <label for=\"email\">Email</label>
        <input type=\"email\" placeholder=\"Email\" name=\"email\">
        <label for=\"message\">Message</label>
        <input type=\"text\" placeholder=\"Message\" name=\"message\">
        <button type=\"submit\">Send Message</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact.twig", "/Users/mpilo/Desktop/Web Dev/slimPHP/learning-slimPHP-3/resources/views/contact.twig");
    }
}

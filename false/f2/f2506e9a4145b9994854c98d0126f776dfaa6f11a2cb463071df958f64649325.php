<?php

/* message_confirmed.twig */
class __TwigTemplate_66280f5929a93fb41f7d2f3afb9085ced6b1dd4488a4108354dd33ef84691464 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/main.twig", "message_confirmed.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Message Page
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"card column is-half is-offset-one-quarter\">
    <header class=\"card-header\">
        <p class=\"card-header-title\">
        Message Form
        </p>
    </header>
    <div class=\"card-content\">
        <p>Thank you for contacting us!</p>
    </div>
    <footer class=\"card-footer\">
        <p class=\"card-footer-item\">
            <span>
                <button class=\"button is-primary\">Send Message</button>
            </span>
        </p>
    </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "message_confirmed.twig";
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
        return new Twig_Source("", "message_confirmed.twig", "/Users/mpilo/Desktop/Web Dev/slimPHP/learning-slimPHP-3/resources/views/message_confirmed.twig");
    }
}

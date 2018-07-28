<?php

/* message.twig */
class __TwigTemplate_56475081ffdb2ef4e9f0c81bf70bbdb3a56a88e345eabfa092d1c7efcb5be31b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/main.twig", "message.twig", 1);
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
        <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("message"), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"field\">
            <label class=\"label\">Name</label>
            <div class=\"control\">
                <input class=\"input\" type=\"text\" placeholder=\"e.g Alex Smith\">
            </div>
            </div>

            <div class=\"field\">
            <label class=\"label\">Email</label>
            <div class=\"control\">
                <input class=\"input\" type=\"email\" placeholder=\"e.g. alexsmith@gmail.com\">
            </div>
            </div>

            <div class=\"field\">
            <label class=\"label\">Message</label>
            <div class=\"control\">
                <textarea class=\"textarea\" placeholder=\"e.g. Hello world\" cols=\"30\" rows=\"10\"></textarea>
            </div>
            </div>

            <div class=\"control\">
                <button class=\"button is-primary\" type=\"submit\">Send Message</button>
            </div>
            
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  44 => 8,  41 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "message.twig", "/Users/mpilo/Desktop/Web Dev/slimPHP/learning-slimPHP-3/resources/views/message.twig");
    }
}

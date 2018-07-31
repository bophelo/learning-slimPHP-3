<?php

/* users/profile.twig */
class __TwigTemplate_21700c1015c03c3d68e584857bbe418f90d8ef494dbf1af628a766c7286a312a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/app.twig", "users/profile.twig", 1);
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
        echo "    User Profile Page
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ( !($context["user"] ?? null)) {
            // line 9
            echo "        <p>No user found.</p>
    ";
        } else {
            // line 11
            echo "        <h1>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
            echo "</h1>
        <ul>
            <li>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
            echo "</li>
            <li>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "</li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "users/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 13,  51 => 11,  47 => 9,  44 => 8,  41 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/profile.twig", "/Users/mpilo/Desktop/Web Dev/slimPHP/learning-slimPHP-3/resources/views/users/profile.twig");
    }
}

<?php

/* profile.twig */
class __TwigTemplate_7f88c3f22bee535403086bab3a3f92a5e3822bed40e4da191c5b76d2d7255a0f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " #(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
        echo ") </h1>
<h1>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo " </h1>
<h1>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo " </h1>";
    }

    public function getTemplateName()
    {
        return "profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile.twig", "/Users/mpilo/Desktop/Web Dev/slimPHP/learning-slimPHP-3/resources/views/profile.twig");
    }
}

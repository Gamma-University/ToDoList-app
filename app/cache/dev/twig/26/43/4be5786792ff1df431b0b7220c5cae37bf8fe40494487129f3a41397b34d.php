<?php

/* ::layout.html.twig */
class __TwigTemplate_26434be5786792ff1df431b0b7220c5cae37bf8fe40494487129f3a41397b34d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <div class=\"container\">
            <div id=\"header\" class=\"jumbotron\">
                <h1><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">ToDoList</a></h1>
                <p>Unlock your potential</p>
            </div>

            <div class=\"row\">
            </div>
            <div id=\"content\">
                ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "            </div>

            <footer class=\"col-xs-12\">
                <hr>
                <p>Keynetic © 2014 and beyond.</p>
            </footer>

        </div>

        ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "The Best ToDoList Tool";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "                ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  100 => 34,  97 => 33,  93 => 23,  90 => 22,  83 => 9,  80 => 8,  74 => 6,  68 => 37,  66 => 33,  55 => 24,  53 => 22,  43 => 15,  37 => 11,  35 => 8,  30 => 6,  23 => 1,);
    }
}

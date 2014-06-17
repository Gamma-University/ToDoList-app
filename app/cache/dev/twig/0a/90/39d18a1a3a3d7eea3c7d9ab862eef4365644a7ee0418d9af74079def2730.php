<?php

/* KeyneticToDoListBundle::layout.html.twig */
class __TwigTemplate_0a9039d18a1a3a3d7eea3c7d9ab862eef4365644a7ee0418d9af74079def2730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'KeyneticToDoList_body' => array($this, 'block_KeyneticToDoList_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('KeyneticToDoList_body', $context, $blocks);
        // line 7
        echo "
";
    }

    // line 5
    public function block_KeyneticToDoList_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
    }

    public function getTemplateName()
    {
        return "KeyneticToDoListBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  42 => 5,  37 => 7,  35 => 5,  32 => 4,  29 => 3,  108 => 28,  99 => 24,  86 => 23,  83 => 22,  65 => 21,  58 => 17,  52 => 15,  46 => 12,  39 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}

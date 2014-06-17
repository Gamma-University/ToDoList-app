<?php

/* KeyneticToDoListBundle:ToDoList:modifier.html.twig */
class __TwigTemplate_26e05e4149dd5282b9abf0bf93513eef4ea91a872e9c38585dfb016458194512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KeyneticToDoListBundle::layout.html.twig");

        $this->blocks = array(
            'KeyneticToDoList_body' => array($this, 'block_KeyneticToDoList_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeyneticToDoListBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_KeyneticToDoList_body($context, array $blocks = array())
    {
        // line 4
        echo " 

        <form method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <div class=\"col-xs-4\">
                ";
        // line 9
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 12
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "

                ";
        // line 15
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </div>
            <div class=\"col-xs-2\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\"/>
            </div>
        </form>
        <div class=\"col-xs-2\">
            <form method=\"post\" ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["supprimerForm"]) ? $context["supprimerForm"] : $this->getContext($context, "supprimerForm")), 'enctype');
        echo ">

                ";
        // line 27
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["supprimerForm"]) ? $context["supprimerForm"] : $this->getContext($context, "supprimerForm")), 'errors');
        echo "

                ";
        // line 30
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["supprimerForm"]) ? $context["supprimerForm"] : $this->getContext($context, "supprimerForm")), 'widget');
        echo "

                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["supprimerForm"]) ? $context["supprimerForm"] : $this->getContext($context, "supprimerForm")), 'rest');
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer\"/>

            </form>
        </div>
   

";
    }

    public function getTemplateName()
    {
        return "KeyneticToDoListBundle:ToDoList:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  79 => 30,  73 => 27,  68 => 24,  58 => 17,  52 => 15,  46 => 12,  40 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}

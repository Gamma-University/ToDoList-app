<?php

/* KeyneticToDoListBundle:ToDoList:todo.html.twig */
class __TwigTemplate_0db2ce73a40b5d45b4534ec940b8d924ad1c8baf5723ab3bb4146586b4ee4e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    ";
        // line 2
        if ($this->getAttribute((isset($context["toDo"]) ? $context["toDo"] : $this->getContext($context, "toDo")), "done")) {
            // line 3
            echo "        <p><del>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["toDo"]) ? $context["toDo"] : $this->getContext($context, "toDo")), "description"), "html", null, true);
            echo "</del>&nbsp-&nbsp<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier", array("id" => $this->getAttribute((isset($context["toDo"]) ? $context["toDo"] : $this->getContext($context, "toDo")), "id"))), "html", null, true);
            echo "\">editer</a>
    ";
        } else {
            // line 5
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["toDo"]) ? $context["toDo"] : $this->getContext($context, "toDo")), "description"), "html", null, true);
            echo "&nbsp-&nbsp<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier", array("id" => $this->getAttribute((isset($context["toDo"]) ? $context["toDo"] : $this->getContext($context, "toDo")), "id"))), "html", null, true);
            echo "\">editer</a><p>
    ";
        }
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "KeyneticToDoListBundle:ToDoList:todo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}

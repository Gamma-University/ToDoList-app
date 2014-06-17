<?php

/* KeyneticToDoListBundle:ToDoList:index.html.twig */
class __TwigTemplate_c4b639af8bb00be92e303d226c3831cdb194db2c42b9cedf1949c982eaffc2f9 extends Twig_Template
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
        echo "<div>
    <form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["newToDoForm"]) ? $context["newToDoForm"] : $this->getContext($context, "newToDoForm")), 'enctype');
        echo ">
        <div class=\"col-xs-4\">
            ";
        // line 8
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["newToDoForm"]) ? $context["newToDoForm"] : $this->getContext($context, "newToDoForm")), 'errors');
        echo "


            ";
        // line 12
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newToDoForm"]) ? $context["newToDoForm"] : $this->getContext($context, "newToDoForm")), "description"), 'errors');
        echo "

            ";
        // line 15
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newToDoForm"]) ? $context["newToDoForm"] : $this->getContext($context, "newToDoForm")), "description"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Encore du travail ?")));
        echo "

            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["newToDoForm"]) ? $context["newToDoForm"] : $this->getContext($context, "newToDoForm")), 'rest');
        echo "
        </div>
        <div class=\"col-xs-8\">
            <input type=\"submit\" class=\"btn btn-primary \" value=\"Ajouter\"/>
        </div>
    </form>
</div>
<div class=\"col-xs-4\">
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["toDoList"]) ? $context["toDoList"] : $this->getContext($context, "toDoList")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["toDo"]) {
            // line 26
            echo "        ";
            $this->env->loadTemplate("KeyneticToDoListBundle:ToDoList:todo.html.twig")->display(array_merge($context, array("accueil" => true)));
            // line 27
            echo "
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 29
            echo "
            <p>Pas encore de travail !</p>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toDo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "

            </div>

            ";
    }

    public function getTemplateName()
    {
        return "KeyneticToDoListBundle:ToDoList:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  104 => 29,  90 => 27,  87 => 26,  69 => 25,  58 => 17,  52 => 15,  46 => 12,  39 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}

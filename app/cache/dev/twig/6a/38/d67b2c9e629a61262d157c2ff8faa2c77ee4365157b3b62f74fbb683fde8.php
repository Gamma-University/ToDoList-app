<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_6a38d67b2c9e629a61262d157c2ff8faa2c77ee4365157b3b62f74fbb683fde8 extends Twig_Template
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
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  24 => 3,  21 => 2,  350 => 327,  308 => 287,  306 => 286,  19 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  453 => 151,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  398 => 129,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  362 => 110,  360 => 109,  355 => 329,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  164 => 59,  147 => 58,  140 => 55,  132 => 51,  128 => 49,  125 => 44,  122 => 43,  111 => 37,  107 => 36,  101 => 32,  98 => 31,  61 => 13,  57 => 11,  48 => 8,  46 => 7,  29 => 3,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  199 => 67,  182 => 66,  173 => 65,  171 => 61,  163 => 62,  154 => 58,  143 => 56,  138 => 54,  135 => 53,  131 => 52,  119 => 42,  116 => 41,  108 => 36,  102 => 32,  99 => 31,  94 => 28,  91 => 27,  87 => 25,  78 => 21,  71 => 17,  67 => 15,  63 => 15,  54 => 10,  50 => 10,  47 => 9,  42 => 7,  39 => 6,  36 => 7,  33 => 6,  30 => 3,  672 => 345,  668 => 344,  664 => 342,  660 => 340,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 326,  626 => 325,  622 => 323,  613 => 320,  609 => 319,  606 => 318,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 281,  525 => 280,  522 => 279,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  457 => 153,  454 => 244,  448 => 240,  444 => 149,  438 => 236,  436 => 235,  428 => 230,  422 => 226,  418 => 224,  412 => 222,  410 => 221,  402 => 130,  400 => 214,  397 => 213,  393 => 126,  383 => 207,  380 => 206,  376 => 205,  367 => 339,  365 => 111,  361 => 195,  353 => 328,  351 => 192,  347 => 191,  341 => 105,  329 => 188,  317 => 185,  313 => 183,  304 => 181,  300 => 180,  297 => 179,  295 => 178,  288 => 176,  285 => 89,  273 => 96,  205 => 108,  201 => 106,  197 => 104,  188 => 102,  184 => 101,  179 => 69,  170 => 96,  166 => 95,  159 => 61,  157 => 89,  93 => 28,  90 => 26,  85 => 25,  79 => 21,  77 => 20,  72 => 17,  69 => 16,  64 => 14,  62 => 12,  59 => 14,  44 => 9,  41 => 8,  38 => 6,  35 => 5,  32 => 4,  27 => 3,);
    }
}

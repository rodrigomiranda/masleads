<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_0a5ae18dbbe9dc45a4eadd0da0805292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <img width=\"13\" height=\"28\" alt=\"Memory Usage\" style=\"vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcCAYAAAC6YTVCAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJBJREFUeNpi/P//PwOpgImBDDAcNbE4ODiAg+/AgQOC586d+4BLoZGRkQBQ7Xt0mxQIWKCAzXkCBDQJDEBAIHOKiooicSkEBtTz0WQ0xFI5Mqevr285HrUOMAajvb09ySULk5+f3w1SNIDUMwKLsAIg256IrAECoEx6EKQJlLkkgJiDCE0/gPgF4+AuLAECDAAolCeEmdURAgAAAABJRU5ErkJggg==\"/>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, sprintf("%.0f", ($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024)), "html", null, true);
        echo " KB
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  85 => 28,  61 => 17,  56 => 14,  45 => 9,  36 => 8,  170 => 56,  157 => 55,  130 => 48,  66 => 19,  271 => 124,  262 => 121,  258 => 120,  255 => 119,  250 => 118,  248 => 117,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 91,  164 => 63,  154 => 45,  151 => 53,  143 => 49,  140 => 52,  119 => 34,  106 => 35,  100 => 39,  83 => 26,  68 => 20,  65 => 18,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 44,  127 => 46,  123 => 35,  109 => 36,  93 => 33,  90 => 36,  54 => 13,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 16,  52 => 12,  97 => 38,  95 => 30,  88 => 29,  78 => 25,  71 => 21,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  92 => 37,  86 => 27,  79 => 28,  19 => 2,  42 => 10,  40 => 7,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 21,  47 => 11,  32 => 6,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 21,  63 => 18,  58 => 16,  49 => 12,  43 => 12,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 36,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 31,  82 => 27,  77 => 24,  75 => 24,  57 => 15,  50 => 12,  46 => 13,  44 => 11,  39 => 9,  33 => 7,  30 => 4,  27 => 4,  135 => 41,  129 => 38,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 40,  102 => 37,  94 => 32,  89 => 30,  87 => 32,  84 => 29,  81 => 28,  73 => 23,  70 => 26,  67 => 19,  62 => 22,  59 => 21,  55 => 15,  51 => 13,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}

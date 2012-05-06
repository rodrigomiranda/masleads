<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_5cc194a05c02307825c34d6558625023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
        if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
            // line 5
            echo "        ";
            $context["icon"] = ('' === $tmp = "            <img width=\"15\" height=\"28\" alt=\"Logs\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAcCAYAAAC+lOV/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQVJREFUeNpi/P//PwO5gImBAjBwmlm8vLyOf/v2zYJYDVxcXCe2bdvmeu7cuS+M9vb2ZIWYoKDgUrKcvWLFipWfP38OYcEmeeDAgQtA6gMQCzg4OBigy0tISHxhYmJiYMFh+EIgBhlgAMXo4DEwffzH5ewLwAA5ADUAG/g7lBMJNkFgCO8fGJsJxTNezUTEM15nE4rnAQ4wkjVraWm9BlK/wc62tLR8fOXKFZmmpqYHhoaGT4Fif/Do/Q7Ep/bt28fz+/dvDkZgKdI4ZcqUmMOHD0t8+vSJi1gXKCgoPGQE5ixTIBuExUjwKsiSpyDNnECGOBCLAjEnkeEA8vMbxqFZ6AMEGADoe2NON2x5yQAAAABJRU5ErkJggg==\"/>
        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
            // line 12
            echo "    ";
        }
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logger.png"), "html", null, true);
        echo "\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 19
        if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
            // line 20
            echo "        <span class=\"count\">
            <span>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 24
        echo "</span>
";
    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        // line 28
        echo "    <h2>Logs</h2>

    ";
        // line 30
        if ($this->getAttribute($this->getContext($context, "collector"), "logs")) {
            // line 31
            echo "        <ul class=\"alt\">
            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "logs"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 33
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
                if ((("ERR" == $this->getAttribute($this->getContext($context, "log"), "priorityName")) || ("ERROR" == $this->getAttribute($this->getContext($context, "log"), "priorityName")))) {
                    echo " error";
                }
                echo "\">
                    ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
                echo "
                    ";
                // line 35
                if (($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "log"), "context"))))) {
                    // line 36
                    echo "                        <br />
                        <small>
                            <strong>Context</strong>: ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "log"), "context")), "html", null, true);
                    echo "
                        </small>
                    ";
                }
                // line 41
                echo "                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 43
            echo "        </ul>
    ";
        } else {
            // line 45
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  85 => 28,  61 => 17,  56 => 14,  45 => 9,  36 => 5,  170 => 56,  157 => 55,  130 => 48,  66 => 19,  271 => 124,  262 => 121,  258 => 120,  255 => 119,  250 => 118,  248 => 117,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 91,  164 => 63,  154 => 45,  151 => 53,  143 => 49,  140 => 52,  119 => 34,  106 => 35,  100 => 39,  83 => 26,  68 => 20,  65 => 18,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 44,  127 => 46,  123 => 35,  109 => 36,  93 => 33,  90 => 36,  54 => 13,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 16,  52 => 12,  97 => 38,  95 => 30,  88 => 29,  78 => 25,  71 => 21,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  92 => 37,  86 => 27,  79 => 28,  19 => 2,  42 => 8,  40 => 7,  29 => 5,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 21,  47 => 11,  32 => 6,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 21,  63 => 18,  58 => 16,  49 => 12,  43 => 12,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 36,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 31,  82 => 27,  77 => 24,  75 => 24,  57 => 15,  50 => 12,  46 => 13,  44 => 11,  39 => 9,  33 => 7,  30 => 4,  27 => 4,  135 => 41,  129 => 38,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 40,  102 => 37,  94 => 32,  89 => 30,  87 => 32,  84 => 29,  81 => 28,  73 => 23,  70 => 26,  67 => 19,  62 => 22,  59 => 21,  55 => 15,  51 => 13,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}

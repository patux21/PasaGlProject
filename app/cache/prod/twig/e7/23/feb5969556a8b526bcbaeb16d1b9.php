<?php

/* ::base.html.twig */
class __TwigTemplate_e723feb5969556a8b526bcbaeb16d1b9 extends Twig_Template
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
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  97 => 34,  116 => 40,  103 => 34,  72 => 25,  114 => 53,  100 => 47,  81 => 35,  70 => 24,  49 => 17,  40 => 10,  21 => 1,  69 => 32,  41 => 12,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 45,  118 => 39,  90 => 31,  87 => 35,  66 => 18,  60 => 27,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 33,  95 => 29,  82 => 27,  73 => 31,  67 => 11,  52 => 21,  22 => 4,  55 => 9,  45 => 12,  36 => 18,  109 => 52,  104 => 34,  96 => 31,  84 => 14,  80 => 30,  26 => 4,  92 => 42,  79 => 40,  57 => 6,  46 => 7,  29 => 4,  19 => 1,  27 => 5,  112 => 21,  102 => 19,  89 => 16,  63 => 21,  56 => 12,  50 => 6,  47 => 16,  44 => 20,  37 => 8,  34 => 6,  30 => 3,  43 => 7,  33 => 7,  25 => 7,  20 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 43,  117 => 45,  113 => 34,  86 => 6,  83 => 30,  78 => 15,  68 => 9,  64 => 16,  61 => 15,  48 => 10,  39 => 15,  32 => 5,  24 => 4,  23 => 3,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 33,  94 => 29,  91 => 17,  88 => 16,  85 => 27,  77 => 26,  74 => 33,  71 => 19,  65 => 27,  62 => 10,  58 => 8,  54 => 18,  51 => 5,  42 => 11,  38 => 8,  35 => 7,  31 => 6,  28 => 4,);
    }
}

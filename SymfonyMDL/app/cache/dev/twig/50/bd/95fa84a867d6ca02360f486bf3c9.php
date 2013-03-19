<?php

/* LamMdlBundle:FormationInformatique:contenufi.html.twig */
class __TwigTemplate_50bd95fa84a867d6ca02360f486bf3c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LamMdlBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LamMdlBundle::layout.html.twig";
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
        $context["numFi"] = 0;
        // line 6
        $context["numO"] = 0;
        // line 7
        echo "
<p><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationinformatique"), "html", null, true);
        echo "\"> Retour </a></p>

";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contenuformationinfo"));
        foreach ($context['_seq'] as $context["_key"] => $context["unContenu"]) {
            // line 11
            echo "

";
            // line 13
            if (($this->getContext($context, "numFi") != $this->getAttribute($this->getContext($context, "unContenu"), "toto"))) {
                // line 14
                $context["nom"] = $this->env->getExtension('assets')->getAssetUrl(("bundles/LamMdl/images/" . $this->getAttribute($this->getContext($context, "unContenu"), "Logo")));
                // line 15
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
                echo "\" alt=\"logo\" width=\"130\" height=\"100\" />
    <p> <h2>Nom de la formation : </h2>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "Titre"), "html", null, true);
                echo " </p>
       <p> <h3>Objectif : </h3>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "Objectif"), "html", null, true);
                echo " </p>
          <p> <h3>Public : </h3>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "Public"), "html", null, true);
                echo " </p>
             <p> <h3>Prerequis : </h3>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "Prerequis"), "html", null, true);
                echo " </p>
   <h3>Nombre de places : ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "nbPlace"), "html", null, true);
                echo " </h3>
<h4>Descriptif:</h4>
    ";
                // line 22
                $context["numFi"] = $this->getAttribute($this->getContext($context, "unContenu"), "toto");
            }
            // line 24
            echo "
    ";
            // line 25
            if (($this->getContext($context, "numO") != $this->getAttribute($this->getContext($context, "unContenu"), "Ordre"))) {
                // line 26
                echo "    <h5> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "Ordre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "NomTheme"), "html", null, true);
                echo " </h5>
    ";
                // line 27
                $context["numO"] = $this->getAttribute($this->getContext($context, "unContenu"), "Ordre");
            }
            // line 29
            echo "\t\t\t     ";
            if (($this->getAttribute($this->getContext($context, "unContenu"), "Libelle") != "")) {
                // line 30
                echo "\t\t<h6>*  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "Libelle"), "html", null, true);
                echo " </h6>
                ";
            }
            // line 32
            echo "                  
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unContenu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "

";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle:FormationInformatique:contenufi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  56 => 15,  65 => 17,  61 => 16,  154 => 47,  130 => 42,  112 => 34,  106 => 32,  100 => 29,  85 => 24,  83 => 24,  66 => 20,  36 => 7,  110 => 32,  98 => 22,  76 => 13,  45 => 12,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 46,  145 => 45,  141 => 55,  134 => 43,  132 => 49,  127 => 41,  123 => 39,  109 => 32,  93 => 28,  90 => 26,  54 => 14,  133 => 44,  124 => 41,  111 => 34,  80 => 26,  60 => 16,  52 => 13,  97 => 27,  95 => 21,  88 => 25,  78 => 22,  71 => 21,  25 => 4,  72 => 16,  64 => 17,  53 => 15,  34 => 6,  92 => 27,  86 => 26,  79 => 23,  19 => 2,  42 => 10,  40 => 7,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 38,  117 => 44,  103 => 30,  74 => 27,  47 => 19,  32 => 5,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 18,  63 => 18,  58 => 9,  49 => 13,  43 => 13,  37 => 7,  20 => 1,  139 => 26,  131 => 38,  128 => 43,  125 => 37,  121 => 40,  115 => 39,  107 => 31,  99 => 34,  96 => 28,  91 => 26,  82 => 22,  77 => 20,  75 => 21,  57 => 16,  50 => 13,  46 => 10,  44 => 10,  39 => 8,  33 => 7,  30 => 4,  27 => 6,  135 => 50,  129 => 47,  122 => 36,  116 => 34,  113 => 32,  108 => 40,  104 => 30,  102 => 23,  94 => 21,  89 => 27,  87 => 32,  84 => 28,  81 => 22,  73 => 19,  70 => 6,  67 => 19,  62 => 24,  59 => 17,  55 => 14,  51 => 14,  48 => 11,  41 => 9,  38 => 8,  35 => 8,  31 => 7,  28 => 3,);
    }
}

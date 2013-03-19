<?php

/* LamMdlBundle:Formation:listeinformatique.html.twig */
class __TwigTemplate_8635b0ca4b30a4d5854c92c91a1b640d extends Twig_Template
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
        $context["nb"] = 1;
        // line 6
        echo "
<h1>Les stages organisés pour la formation '";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "laF"), "Titre"), "html", null, true);
        echo "' sont:  </h1>




  ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lesStages"));
        foreach ($context['_seq'] as $context["_key"] => $context["unS"]) {
            // line 13
            echo "
<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationinformatique"), "html", null, true);
            echo "\"> Retour </a>

     <h2>Stage ";
            // line 16
            echo twig_escape_filter($this->env, $this->getContext($context, "nb"), "html", null, true);
            echo "</h2>
      Date: ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Date"), "d-m-Y"), "html", null, true);
            echo "</br>
             Horaire:  ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Horaire"), "html", null, true);
            echo "</br>       
            Date limite d'inscription: ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "DateLimite"), "d-m-Y"), "html", null, true);
            echo "</br>             
             Salle: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Salle"), "html", null, true);
            echo "</br>
          Adresse: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Adresse"), "html", null, true);
            echo "</br>
        Coût: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Cout"), "html", null, true);
            echo "</br>
        Repas: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Repas"), "html", null, true);
            echo "</br>
     

        ";
            // line 26
            $context["nbi"] = twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "lesIntervenants"));
            // line 27
            echo "        ";
            if (($this->getContext($context, "nbi") > 1)) {
                // line 28
                echo "        <p>Les intervenants :</p>
            ";
            } else {
                // line 30
                echo "        <p>L'intervenant :</p>
            ";
            }
            // line 32
            echo "                
        ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "unS"), "lesIntervenants"));
            foreach ($context['_seq'] as $context["_key"] => $context["unI"]) {
                // line 34
                echo "        <h3>- ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unI"), "Prenom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unI"), "Nom"), "html", null, true);
                echo "</h3>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unI'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 36
            echo "  ";
            $context["nb"] = ($this->getContext($context, "nb") + 1);
            // line 37
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unS'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "

";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle:Formation:listeinformatique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  61 => 17,  154 => 47,  130 => 42,  112 => 34,  106 => 32,  100 => 30,  85 => 23,  83 => 24,  66 => 20,  36 => 5,  110 => 32,  98 => 22,  76 => 13,  45 => 12,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 46,  145 => 45,  141 => 55,  134 => 43,  132 => 49,  127 => 41,  123 => 39,  109 => 33,  93 => 27,  90 => 20,  54 => 36,  133 => 44,  124 => 41,  111 => 34,  80 => 26,  60 => 16,  52 => 14,  97 => 34,  95 => 21,  88 => 26,  78 => 25,  71 => 21,  25 => 4,  72 => 16,  64 => 15,  53 => 15,  34 => 6,  92 => 27,  86 => 19,  79 => 23,  19 => 2,  42 => 10,  40 => 7,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 38,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 5,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 19,  63 => 18,  58 => 9,  49 => 13,  43 => 13,  37 => 7,  20 => 1,  139 => 26,  131 => 38,  128 => 43,  125 => 37,  121 => 40,  115 => 39,  107 => 33,  99 => 34,  96 => 28,  91 => 26,  82 => 27,  77 => 21,  75 => 22,  57 => 16,  50 => 13,  46 => 10,  44 => 11,  39 => 9,  33 => 7,  30 => 4,  27 => 6,  135 => 50,  129 => 47,  122 => 36,  116 => 36,  113 => 33,  108 => 40,  104 => 32,  102 => 23,  94 => 21,  89 => 20,  87 => 32,  84 => 28,  81 => 22,  73 => 20,  70 => 6,  67 => 19,  62 => 24,  59 => 17,  55 => 14,  51 => 14,  48 => 10,  41 => 9,  38 => 8,  35 => 8,  31 => 7,  28 => 3,);
    }
}

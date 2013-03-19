<?php

/* LamMdlBundle:Default:inscription.html.twig */
class __TwigTemplate_e9787d678406ea5bd8285f4b02317c3d extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_inscription"), "html", null, true);
        echo "\"  method='POST' ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "idStage"), "html", null, true);
        echo "
        <p> <button type=\"submit\">Ajout</button></p>
</form>
";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle:Default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  29 => 4,  26 => 3,);
    }
}

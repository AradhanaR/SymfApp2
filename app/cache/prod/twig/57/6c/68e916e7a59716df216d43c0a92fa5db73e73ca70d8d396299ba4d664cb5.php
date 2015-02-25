<?php

/* myappBundle:Default:index.html.twig */
class __TwigTemplate_576c68e916e7a59716df216d43c0a92fa5db73e73ca70d8d396299ba4d664cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "   ";
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : null), "html", null, true);
        echo " old ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " is visiting the page!
 ";
    }

    public function getTemplateName()
    {
        return "myappBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  36 => 4,  11 => 2,);
    }
}

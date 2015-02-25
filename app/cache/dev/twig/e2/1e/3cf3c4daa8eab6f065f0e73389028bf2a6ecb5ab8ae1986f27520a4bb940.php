<?php

/* myappBundle:Gallery:index.html.twig */
class __TwigTemplate_e21e3cf3c4daa8eab6f065f0e73389028bf2a6ecb5ab8ae1986f27520a4bb940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'column3' => array($this, 'block_column3'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony Gallery";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_column3($context, array $blocks = array())
    {
        // line 10
        echo "\t<div id=\"gallery\">
\t\t<ul>
\t
\t\t
\t\t  <li class=\"placeholder\" style=\"background-image:url(";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/public/layout/images/gallery-placeholder.gif"), "html", null, true);
        echo "\">Image Holder</li>
\t\t  ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photoList"]) ? $context["photoList"] : $this->getContext($context, "photoList")));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 16
            echo "
\t\t  \t  ";
            // line 17
            $context["filepath"] = ("/public/upload_gallery/" . $this->getAttribute($context["photo"], "filename", array()));
            // line 18
            echo "\t\t  \t  ";
            $context["imgpath"] = $this->env->getExtension('assets')->getAssetUrl((isset($context["filepath"]) ? $context["filepath"] : $this->getContext($context, "filepath")));
            // line 19
            echo "\t\t\t  <li><a class=\"swap\" href=\"#\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["imgpath"]) ? $context["imgpath"] : $this->getContext($context, "imgpath")), "html", null, true);
            echo "\" alt=\"\" /><span><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["imgpath"]) ? $context["imgpath"] : $this->getContext($context, "imgpath")), "html", null, true);
            echo "\" width=\"950\" height=\"370\" alt=\"\" /></span></a></li>

\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "myappBundle:Gallery:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  79 => 19,  76 => 18,  74 => 17,  71 => 16,  67 => 15,  63 => 14,  57 => 10,  54 => 9,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}

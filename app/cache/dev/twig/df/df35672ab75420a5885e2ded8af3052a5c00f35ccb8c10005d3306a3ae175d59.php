<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_787da18136cb50cc21949135cd8e3b31ed3c6e41053efd9036af48153338ffad extends Twig_Template
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
        $__internal_6ef85b90d27c90cfb38421f4049c96ac55813ed6f04055f3fae5c08ea2bba5e3 = $this->env->getExtension("native_profiler");
        $__internal_6ef85b90d27c90cfb38421f4049c96ac55813ed6f04055f3fae5c08ea2bba5e3->enter($__internal_6ef85b90d27c90cfb38421f4049c96ac55813ed6f04055f3fae5c08ea2bba5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6ef85b90d27c90cfb38421f4049c96ac55813ed6f04055f3fae5c08ea2bba5e3->leave($__internal_6ef85b90d27c90cfb38421f4049c96ac55813ed6f04055f3fae5c08ea2bba5e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d7739524294a199c495c8dd45c7ba4db03ba47df4f9d27a762ce8bb92274e6b1 extends Twig_Template
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
        $__internal_106177c5f21e10e1cd8f9262505f86703f6427ec73a04dc3a9b744ccaa8d740d = $this->env->getExtension("native_profiler");
        $__internal_106177c5f21e10e1cd8f9262505f86703f6427ec73a04dc3a9b744ccaa8d740d->enter($__internal_106177c5f21e10e1cd8f9262505f86703f6427ec73a04dc3a9b744ccaa8d740d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_106177c5f21e10e1cd8f9262505f86703f6427ec73a04dc3a9b744ccaa8d740d->leave($__internal_106177c5f21e10e1cd8f9262505f86703f6427ec73a04dc3a9b744ccaa8d740d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

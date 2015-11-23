<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_dc926b4bad22e43818af42b6b378d82c9c375e3c64c0b79503ae36bf377ec867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31ac18068b89e992284777ca9ead0b9e57792976ce676e6f26603fa80ce02fb0 = $this->env->getExtension("native_profiler");
        $__internal_31ac18068b89e992284777ca9ead0b9e57792976ce676e6f26603fa80ce02fb0->enter($__internal_31ac18068b89e992284777ca9ead0b9e57792976ce676e6f26603fa80ce02fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ac18068b89e992284777ca9ead0b9e57792976ce676e6f26603fa80ce02fb0->leave($__internal_31ac18068b89e992284777ca9ead0b9e57792976ce676e6f26603fa80ce02fb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87f019fe4ccdbce6b83cd2d71b74b5e561b79671e7d37f62ed244e8cbaad62b4 = $this->env->getExtension("native_profiler");
        $__internal_87f019fe4ccdbce6b83cd2d71b74b5e561b79671e7d37f62ed244e8cbaad62b4->enter($__internal_87f019fe4ccdbce6b83cd2d71b74b5e561b79671e7d37f62ed244e8cbaad62b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_87f019fe4ccdbce6b83cd2d71b74b5e561b79671e7d37f62ed244e8cbaad62b4->leave($__internal_87f019fe4ccdbce6b83cd2d71b74b5e561b79671e7d37f62ed244e8cbaad62b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05b7a9f9c6d5da7c43a290e47daf5b0653e13d375db9e2d1ff86cbe0341b0d8f = $this->env->getExtension("native_profiler");
        $__internal_05b7a9f9c6d5da7c43a290e47daf5b0653e13d375db9e2d1ff86cbe0341b0d8f->enter($__internal_05b7a9f9c6d5da7c43a290e47daf5b0653e13d375db9e2d1ff86cbe0341b0d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_05b7a9f9c6d5da7c43a290e47daf5b0653e13d375db9e2d1ff86cbe0341b0d8f->leave($__internal_05b7a9f9c6d5da7c43a290e47daf5b0653e13d375db9e2d1ff86cbe0341b0d8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_431c549066ee7225667e2eae40400564fcc2d8c4a0b0fe0d94fb4393d9de2c95 = $this->env->getExtension("native_profiler");
        $__internal_431c549066ee7225667e2eae40400564fcc2d8c4a0b0fe0d94fb4393d9de2c95->enter($__internal_431c549066ee7225667e2eae40400564fcc2d8c4a0b0fe0d94fb4393d9de2c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_431c549066ee7225667e2eae40400564fcc2d8c4a0b0fe0d94fb4393d9de2c95->leave($__internal_431c549066ee7225667e2eae40400564fcc2d8c4a0b0fe0d94fb4393d9de2c95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

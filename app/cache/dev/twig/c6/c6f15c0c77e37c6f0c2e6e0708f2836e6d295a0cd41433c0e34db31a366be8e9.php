<?php

/* registration/register.html.twig */
class __TwigTemplate_4b3b241a3fe6d96bfad1263a954f5cee92b1cb0284dad86c3ea37edfa514333f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d31d8da60e23110ac3bb1a21245280c71b913dc6a061d5352ffa8f3d84faf5ed = $this->env->getExtension("native_profiler");
        $__internal_d31d8da60e23110ac3bb1a21245280c71b913dc6a061d5352ffa8f3d84faf5ed->enter($__internal_d31d8da60e23110ac3bb1a21245280c71b913dc6a061d5352ffa8f3d84faf5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d31d8da60e23110ac3bb1a21245280c71b913dc6a061d5352ffa8f3d84faf5ed->leave($__internal_d31d8da60e23110ac3bb1a21245280c71b913dc6a061d5352ffa8f3d84faf5ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f39ea883d91c20c26e124c064fef00bf6a6bad93f4f44c3e37522955895c386 = $this->env->getExtension("native_profiler");
        $__internal_1f39ea883d91c20c26e124c064fef00bf6a6bad93f4f44c3e37522955895c386->enter($__internal_1f39ea883d91c20c26e124c064fef00bf6a6bad93f4f44c3e37522955895c386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

        <button type=\"submit\">Register!</button>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1f39ea883d91c20c26e124c064fef00bf6a6bad93f4f44c3e37522955895c386->leave($__internal_1f39ea883d91c20c26e124c064fef00bf6a6bad93f4f44c3e37522955895c386_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*         {{ form_row(form.username) }}*/
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.plainPassword.first) }}*/
/*         {{ form_row(form.plainPassword.second) }}*/
/* */
/*         <button type="submit">Register!</button>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/

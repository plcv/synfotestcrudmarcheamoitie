<?php

/* AppBundle:User:new.html.twig */
class __TwigTemplate_521234795626181828b4392b024ea78414bd0652866bc9f419184cda4dafb2d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "AppBundle:User:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JordiLlonchCrudGeneratorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c64eb1ef2f68f4087c8cdcdd259cedf03d65686d6b7f1d8aa5dc2671b5e8518e = $this->env->getExtension("native_profiler");
        $__internal_c64eb1ef2f68f4087c8cdcdd259cedf03d65686d6b7f1d8aa5dc2671b5e8518e->enter($__internal_c64eb1ef2f68f4087c8cdcdd259cedf03d65686d6b7f1d8aa5dc2671b5e8518e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c64eb1ef2f68f4087c8cdcdd259cedf03d65686d6b7f1d8aa5dc2671b5e8518e->leave($__internal_c64eb1ef2f68f4087c8cdcdd259cedf03d65686d6b7f1d8aa5dc2671b5e8518e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_020d4038c96a2fa4eb84ad0ee688fb6de9502ef9955a05436476c31df0d5b7fc = $this->env->getExtension("native_profiler");
        $__internal_020d4038c96a2fa4eb84ad0ee688fb6de9502ef9955a05436476c31df0d5b7fc->enter($__internal_020d4038c96a2fa4eb84ad0ee688fb6de9502ef9955a05436476c31df0d5b7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.creation", array("%entity%" => "User"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
        
        $__internal_020d4038c96a2fa4eb84ad0ee688fb6de9502ef9955a05436476c31df0d5b7fc->leave($__internal_020d4038c96a2fa4eb84ad0ee688fb6de9502ef9955a05436476c31df0d5b7fc_prof);

    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        $__internal_7e4d9cf6a08f94fcfc7753f5e125b1ec5d8b96364d489dba2d730bb296033ed5 = $this->env->getExtension("native_profiler");
        $__internal_7e4d9cf6a08f94fcfc7753f5e125b1ec5d8b96364d489dba2d730bb296033ed5->enter($__internal_7e4d9cf6a08f94fcfc7753f5e125b1ec5d8b96364d489dba2d730bb296033ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 8
        echo "
<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.creation", array("%entity%" => "User"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h1>

<form class=\"well\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("user_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.create", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
    </p>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
        
        $__internal_7e4d9cf6a08f94fcfc7753f5e125b1ec5d8b96364d489dba2d730bb296033ed5->leave($__internal_7e4d9cf6a08f94fcfc7753f5e125b1ec5d8b96364d489dba2d730bb296033ed5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  86 => 20,  77 => 14,  72 => 12,  66 => 11,  61 => 9,  58 => 8,  52 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.new.creation'|trans({'%entity%': 'User'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h1>{{ 'views.new.creation'|trans({'%entity%': 'User'}, 'JordiLlonchCrudGeneratorBundle') }}</h1>*/
/* */
/* <form class="well" action="{{ path('user_create') }}" method="post" {{ form_enctype(form) }}>*/
/*     {{ form_widget(form) }}*/
/*     <p>*/
/*         <button type="submit" class="btn btn-success">{{ 'views.new.create'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*     </p>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('user') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/

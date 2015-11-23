<?php

/* AppBundle:User:edit.html.twig */
class __TwigTemplate_643fa8dee0febd43d5c4362e464de78210f3470934aa5e51ad871e4744069bed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "AppBundle:User:edit.html.twig", 1);
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
        $__internal_e4671a008aef0b19453e4ca15c64b15a43c58e70d7f1c97f2782cf94585969a2 = $this->env->getExtension("native_profiler");
        $__internal_e4671a008aef0b19453e4ca15c64b15a43c58e70d7f1c97f2782cf94585969a2->enter($__internal_e4671a008aef0b19453e4ca15c64b15a43c58e70d7f1c97f2782cf94585969a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4671a008aef0b19453e4ca15c64b15a43c58e70d7f1c97f2782cf94585969a2->leave($__internal_e4671a008aef0b19453e4ca15c64b15a43c58e70d7f1c97f2782cf94585969a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_436357430d3b8545f0a7d3270c919ade7514a11865026fd7a988e0609c348401 = $this->env->getExtension("native_profiler");
        $__internal_436357430d3b8545f0a7d3270c919ade7514a11865026fd7a988e0609c348401->enter($__internal_436357430d3b8545f0a7d3270c919ade7514a11865026fd7a988e0609c348401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "User"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
        
        $__internal_436357430d3b8545f0a7d3270c919ade7514a11865026fd7a988e0609c348401->leave($__internal_436357430d3b8545f0a7d3270c919ade7514a11865026fd7a988e0609c348401_prof);

    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        $__internal_924c0911be917b477d70b76ba58cf6ce23a7a4cf2c235a272e56df32b0151f94 = $this->env->getExtension("native_profiler");
        $__internal_924c0911be917b477d70b76ba58cf6ce23a7a4cf2c235a272e56df32b0151f94->enter($__internal_924c0911be917b477d70b76ba58cf6ce23a7a4cf2c235a272e56df32b0151f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 8
        echo "
<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "User"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h1>

<form class=\"well\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <p>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.editbutton", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
    </p>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.confirm", array(), "JordiLlonchCrudGeneratorBundle"), "js"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.delete", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>
";
        
        $__internal_924c0911be917b477d70b76ba58cf6ce23a7a4cf2c235a272e56df32b0151f94->leave($__internal_924c0911be917b477d70b76ba58cf6ce23a7a4cf2c235a272e56df32b0151f94_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  103 => 28,  98 => 26,  91 => 22,  87 => 21,  78 => 15,  73 => 13,  66 => 11,  61 => 9,  58 => 8,  52 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} -  {{ 'views.edit.edit'|trans({'%entity%': 'User'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h1>{{ 'views.edit.edit'|trans({'%entity%': 'User'}, 'JordiLlonchCrudGeneratorBundle') }}</h1>*/
/* */
/* <form class="well" action="{{ path('user_update', { 'id': entity.id }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*     <input type="hidden" name="_method" value="PUT" />*/
/*     {{ form_widget(edit_form) }}*/
/*     <p>*/
/*         <button type="submit" class="btn btn-success">{{ 'views.edit.editbutton'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*     </p>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('user') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <form action="{{ path('user_delete', { 'id': entity.id }) }}" method="post">*/
/*             <input type="hidden" name="_method" value="DELETE" />*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/

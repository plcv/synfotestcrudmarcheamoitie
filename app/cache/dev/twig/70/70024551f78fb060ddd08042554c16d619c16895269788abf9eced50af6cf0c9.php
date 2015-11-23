<?php

/* AppBundle:User:show.html.twig */
class __TwigTemplate_b23ccaa9b8bd82f1b9156dafda91e561d5cd2715e022d077d4af446aae8483bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "AppBundle:User:show.html.twig", 1);
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
        $__internal_51b0918716e01e387b1422e4d93d14ae33327447fc14cc4289f19c368b139abe = $this->env->getExtension("native_profiler");
        $__internal_51b0918716e01e387b1422e4d93d14ae33327447fc14cc4289f19c368b139abe->enter($__internal_51b0918716e01e387b1422e4d93d14ae33327447fc14cc4289f19c368b139abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51b0918716e01e387b1422e4d93d14ae33327447fc14cc4289f19c368b139abe->leave($__internal_51b0918716e01e387b1422e4d93d14ae33327447fc14cc4289f19c368b139abe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fc6f966ebffaadf98e5ee5692731aa5f2b569231d408dc4fad1609feabcb273 = $this->env->getExtension("native_profiler");
        $__internal_8fc6f966ebffaadf98e5ee5692731aa5f2b569231d408dc4fad1609feabcb273->enter($__internal_8fc6f966ebffaadf98e5ee5692731aa5f2b569231d408dc4fad1609feabcb273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.show.show", array("%entity%" => "User"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
        
        $__internal_8fc6f966ebffaadf98e5ee5692731aa5f2b569231d408dc4fad1609feabcb273->leave($__internal_8fc6f966ebffaadf98e5ee5692731aa5f2b569231d408dc4fad1609feabcb273_prof);

    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        $__internal_f597f7145414075ed8f0a428e8683d1c3c44021c0eaeebb2c2c16cae5f318e57 = $this->env->getExtension("native_profiler");
        $__internal_f597f7145414075ed8f0a428e8683d1c3c44021c0eaeebb2c2c16cae5f318e57->enter($__internal_f597f7145414075ed8f0a428e8683d1c3c44021c0eaeebb2c2c16cae5f318e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 8
        echo "
<h1>User</h1>

<form class=\"form-horizontal\">
    <fieldset>        <div class=\"control-group\">
            <label class=\"control-label\">Id</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Username</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Password</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Email</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Isactive</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Apikey</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apiKey", array()), "html", null, true);
        echo "</span>            </div>
        </div>    </fieldset>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <a class=\"btn btn-primary\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <form action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.confirm", array(), "JordiLlonchCrudGeneratorBundle"), "js"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.delete", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>
";
        
        $__internal_f597f7145414075ed8f0a428e8683d1c3c44021c0eaeebb2c2c16cae5f318e57->leave($__internal_f597f7145414075ed8f0a428e8683d1c3c44021c0eaeebb2c2c16cae5f318e57_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 48,  132 => 47,  127 => 45,  120 => 41,  116 => 40,  109 => 36,  105 => 35,  96 => 29,  90 => 26,  84 => 23,  78 => 20,  72 => 17,  66 => 14,  58 => 8,  52 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.show.show'|trans({'%entity%': 'User'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h1>User</h1>*/
/* */
/* <form class="form-horizontal">*/
/*     <fieldset>        <div class="control-group">*/
/*             <label class="control-label">Id</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.id }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Username</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.username }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Password</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.password }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Email</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.email }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Isactive</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.isActive }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Apikey</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.apiKey }}</span>            </div>*/
/*         </div>    </fieldset>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('user') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <a class="btn btn-primary" href="{{ path('user_edit', { 'id': entity.id }) }}">*/
/*             {{ 'views.recordactions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
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

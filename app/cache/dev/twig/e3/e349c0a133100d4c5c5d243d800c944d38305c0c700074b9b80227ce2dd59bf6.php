<?php

/* AppBundle:User:index.html.twig */
class __TwigTemplate_c94c58d3af440aff2ab70d9e063d949a2702cf798368af61dce1073f56748b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "AppBundle:User:index.html.twig", 1);
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
        $__internal_833abe288d07c1d691b91e8cb607fc9005da81e369649c062527db3f985afe5c = $this->env->getExtension("native_profiler");
        $__internal_833abe288d07c1d691b91e8cb607fc9005da81e369649c062527db3f985afe5c->enter($__internal_833abe288d07c1d691b91e8cb607fc9005da81e369649c062527db3f985afe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_833abe288d07c1d691b91e8cb607fc9005da81e369649c062527db3f985afe5c->leave($__internal_833abe288d07c1d691b91e8cb607fc9005da81e369649c062527db3f985afe5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42fc11ac5f11e4c3f29470854b9e5b218bd6c7fb59c696ff4f48993306713ba2 = $this->env->getExtension("native_profiler");
        $__internal_42fc11ac5f11e4c3f29470854b9e5b218bd6c7fb59c696ff4f48993306713ba2->enter($__internal_42fc11ac5f11e4c3f29470854b9e5b218bd6c7fb59c696ff4f48993306713ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "User"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
        
        $__internal_42fc11ac5f11e4c3f29470854b9e5b218bd6c7fb59c696ff4f48993306713ba2->leave($__internal_42fc11ac5f11e4c3f29470854b9e5b218bd6c7fb59c696ff4f48993306713ba2_prof);

    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        $__internal_f2542282bc20e75c0e3e6f6e15da588866c93b5f6b1c588a9b61c07ab0310840 = $this->env->getExtension("native_profiler");
        $__internal_f2542282bc20e75c0e3e6f6e15da588866c93b5f6b1c588a9b61c07ab0310840->enter($__internal_f2542282bc20e75c0e3e6f6e15da588866c93b5f6b1c588a9b61c07ab0310840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 8
        echo "
<div class=\"row\">

    <div class=\"span8\">
        <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "User"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"span2\">
        ";
        // line 15
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), 'errors')) {
            // line 16
            echo "        <div class=\"alert alert-block alert-error fade in form-errors\">
            ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), 'errors');
            echo "
        </div>
        ";
        }
        // line 20
        echo "        &nbsp;
    </div>
    <div class=\"span2\">
        <div class=\"filters-right\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"collapse\" data-target=\"#filters\">
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filters", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
                <span class=\"caret\"></span>
            </a>
        </div>
    </div>

    <div class=\"span12\">
        <div id=\"filters\" class=\"collapse\">

            <form class=\"well\" action=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), 'enctype');
        echo ">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), "id", array()), 'row');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), "username", array()), 'row');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), "password", array()), 'row');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), "email", array()), 'row');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), "isActive", array()), 'row');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), "apiKey", array()), 'row');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), 'rest');
        echo "

                <p>
                    <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                    <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.reset", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                </p>
            </form>
        </div>
    </div>

    <div class=\"span12\">

    <table class=\"table table-striped table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Isactive</th>
            <th>Apikey</th>
            <th>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 67
            echo "        <tr>
            <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "password", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "isActive", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apiKey", array()), "html", null, true);
            echo "</td>
            <td>
        <a class=\"btn btn-mini\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>
        <a class=\"btn btn-mini\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    </tbody>
</table>
    </div>

    <div class=\"span4\">
    ";
        // line 88
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : $this->getContext($context, "pagerHtml"));
        echo "
    </div>

        <div class=\"span8\">
    <a class=\"btn btn-primary likepaginator\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">
            ";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.createnew", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo " User
        </a>
    </div>
    </div>

";
        
        $__internal_f2542282bc20e75c0e3e6f6e15da588866c93b5f6b1c588a9b61c07ab0310840->leave($__internal_f2542282bc20e75c0e3e6f6e15da588866c93b5f6b1c588a9b61c07ab0310840_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 93,  238 => 92,  231 => 88,  224 => 83,  214 => 79,  210 => 78,  205 => 76,  201 => 75,  196 => 73,  192 => 72,  188 => 71,  184 => 70,  180 => 69,  174 => 68,  171 => 67,  167 => 66,  160 => 62,  140 => 45,  136 => 44,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  100 => 34,  88 => 25,  81 => 20,  75 => 17,  72 => 16,  70 => 15,  64 => 12,  58 => 8,  52 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.index.list'|trans({'%entity%': 'User'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <div class="row">*/
/* */
/*     <div class="span8">*/
/*         <h1>{{ 'views.index.list'|trans({'%entity%': 'User'}, 'JordiLlonchCrudGeneratorBundle') }}</h1>*/
/*     </div>*/
/*     <div class="span2">*/
/*         {% if form_errors(filterForm) %}*/
/*         <div class="alert alert-block alert-error fade in form-errors">*/
/*             {{ form_errors(filterForm) }}*/
/*         </div>*/
/*         {% endif %}*/
/*         &nbsp;*/
/*     </div>*/
/*     <div class="span2">*/
/*         <div class="filters-right">*/
/*             <a class="btn dropdown-toggle" data-toggle="collapse" data-target="#filters">*/
/*                 {{ 'views.index.filters'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                 <span class="caret"></span>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="span12">*/
/*         <div id="filters" class="collapse">*/
/* */
/*             <form class="well" action="{{ path('user') }}" method="get" {{ form_enctype(filterForm) }}>*/
/*                 {{ form_row(filterForm.id) }}*/
/*                 {{ form_row(filterForm.username) }}*/
/*                 {{ form_row(filterForm.password) }}*/
/*                 {{ form_row(filterForm.email) }}*/
/*                 {{ form_row(filterForm.isActive) }}*/
/*                 {{ form_row(filterForm.apiKey) }}*/
/*                 {{ form_rest(filterForm) }}*/
/* */
/*                 <p>*/
/*                     <button type="submit" name="filter_action" value="filter">{{ 'views.index.filter'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                     <button type="submit" name="filter_action" value="reset">{{ 'views.index.reset'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                 </p>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="span12">*/
/* */
/*     <table class="table table-striped table-bordered table-condensed">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <th>Username</th>*/
/*             <th>Password</th>*/
/*             <th>Email</th>*/
/*             <th>Isactive</th>*/
/*             <th>Apikey</th>*/
/*             <th>{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for entity in entities %}*/
/*         <tr>*/
/*             <td><a href="{{ path('user_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*             <td>{{ entity.username }}</td>*/
/*             <td>{{ entity.password }}</td>*/
/*             <td>{{ entity.email }}</td>*/
/*             <td>{{ entity.isActive }}</td>*/
/*             <td>{{ entity.apiKey }}</td>*/
/*             <td>*/
/*         <a class="btn btn-mini" href="{{ path('user_show', { 'id': entity.id }) }}">*/
/*             {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*         <a class="btn btn-mini" href="{{ path('user_edit', { 'id': entity.id }) }}">*/
/*             {{ 'views.actions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>            </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/*     </div>*/
/* */
/*     <div class="span4">*/
/*     {{ pagerHtml|raw }}*/
/*     </div>*/
/* */
/*         <div class="span8">*/
/*     <a class="btn btn-primary likepaginator" href="{{ path('user_new') }}">*/
/*             {{ 'views.index.createnew'|trans({}, 'JordiLlonchCrudGeneratorBundle') }} User*/
/*         </a>*/
/*     </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/

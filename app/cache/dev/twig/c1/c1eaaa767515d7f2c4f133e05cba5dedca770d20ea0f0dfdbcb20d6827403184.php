<?php

/* JordiLlonchCrudGeneratorBundle::layout.html.twig */
class __TwigTemplate_ce766a3cb72455b2a84a885d22a6ad66caf126bfdf7d4f11c7f09d76d900b9f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'page' => array($this, 'block_page'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef5ad11e0758a2113200f3003eba4ad61b398fb31baff1e83c1acb1725f27cc8 = $this->env->getExtension("native_profiler");
        $__internal_ef5ad11e0758a2113200f3003eba4ad61b398fb31baff1e83c1acb1725f27cc8->enter($__internal_ef5ad11e0758a2113200f3003eba4ad61b398fb31baff1e83c1acb1725f27cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JordiLlonchCrudGeneratorBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jordillonchcrudgenerator/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jordillonchcrudgenerator/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jordillonchcrudgenerator/css/crud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jordillonchcrudgenerator/images/favicon.ico"), "html", null, true);
        echo "\">
</head>

<body>

<div class=\"container\">
    ";
        // line 32
        $this->displayBlock('menu', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
            // line 35
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 36
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"], array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('page', $context, $blocks);
        // line 43
        echo "
</div>


<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jordillonchcrudgenerator/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jordillonchcrudgenerator/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        // line 50
        $this->displayBlock('javascript', $context, $blocks);
        // line 51
        echo "</body>
</html>";
        
        $__internal_ef5ad11e0758a2113200f3003eba4ad61b398fb31baff1e83c1acb1725f27cc8->leave($__internal_ef5ad11e0758a2113200f3003eba4ad61b398fb31baff1e83c1acb1725f27cc8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9d69e243b6c8d2aa959bf24e59c58f991076fe91336014fd8dc9bf5b5fad828 = $this->env->getExtension("native_profiler");
        $__internal_d9d69e243b6c8d2aa959bf24e59c58f991076fe91336014fd8dc9bf5b5fad828->enter($__internal_d9d69e243b6c8d2aa959bf24e59c58f991076fe91336014fd8dc9bf5b5fad828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.layout.bannersadmin", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        
        $__internal_d9d69e243b6c8d2aa959bf24e59c58f991076fe91336014fd8dc9bf5b5fad828->leave($__internal_d9d69e243b6c8d2aa959bf24e59c58f991076fe91336014fd8dc9bf5b5fad828_prof);

    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2753ded44c6836441be9b5c00153bad9ae5fc4eb4f41db0f9b4077c2c44007ea = $this->env->getExtension("native_profiler");
        $__internal_2753ded44c6836441be9b5c00153bad9ae5fc4eb4f41db0f9b4077c2c44007ea->enter($__internal_2753ded44c6836441be9b5c00153bad9ae5fc4eb4f41db0f9b4077c2c44007ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_2753ded44c6836441be9b5c00153bad9ae5fc4eb4f41db0f9b4077c2c44007ea->leave($__internal_2753ded44c6836441be9b5c00153bad9ae5fc4eb4f41db0f9b4077c2c44007ea_prof);

    }

    // line 42
    public function block_page($context, array $blocks = array())
    {
        $__internal_194d5c3c6afe649a7ade7ae2109413b3d5106f76f375d7e6aea8dfd205fbe169 = $this->env->getExtension("native_profiler");
        $__internal_194d5c3c6afe649a7ade7ae2109413b3d5106f76f375d7e6aea8dfd205fbe169->enter($__internal_194d5c3c6afe649a7ade7ae2109413b3d5106f76f375d7e6aea8dfd205fbe169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        
        $__internal_194d5c3c6afe649a7ade7ae2109413b3d5106f76f375d7e6aea8dfd205fbe169->leave($__internal_194d5c3c6afe649a7ade7ae2109413b3d5106f76f375d7e6aea8dfd205fbe169_prof);

    }

    // line 50
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_bf031f5267f77fff181ed87fa4c3ebb539aa5de03cbdcdad4bf433901375ec77 = $this->env->getExtension("native_profiler");
        $__internal_bf031f5267f77fff181ed87fa4c3ebb539aa5de03cbdcdad4bf433901375ec77->enter($__internal_bf031f5267f77fff181ed87fa4c3ebb539aa5de03cbdcdad4bf433901375ec77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_bf031f5267f77fff181ed87fa4c3ebb539aa5de03cbdcdad4bf433901375ec77->leave($__internal_bf031f5267f77fff181ed87fa4c3ebb539aa5de03cbdcdad4bf433901375ec77_prof);

    }

    public function getTemplateName()
    {
        return "JordiLlonchCrudGeneratorBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 50,  161 => 42,  150 => 32,  138 => 5,  130 => 51,  128 => 50,  123 => 48,  119 => 47,  113 => 43,  111 => 42,  108 => 41,  102 => 40,  93 => 37,  88 => 36,  83 => 35,  79 => 34,  76 => 33,  74 => 32,  65 => 26,  54 => 18,  50 => 17,  41 => 11,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}{{ 'views.layout.bannersadmin'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}{% endblock %}</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <!-- Le styles -->*/
/*     <link href="{{ asset('bundles/jordillonchcrudgenerator/css/bootstrap.css') }}" rel="stylesheet">*/
/*     <style>*/
/*         body {*/
/*             padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar *//* */
/*         }*/
/*     </style>*/
/*     <link href="{{ asset('bundles/jordillonchcrudgenerator/css/bootstrap-responsive.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/jordillonchcrudgenerator/css/crud.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <!-- Le fav and touch icons -->*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/jordillonchcrudgenerator/images/favicon.ico') }}">*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div class="container">*/
/*     {% block menu %}{% endblock %}*/
/* */
/*     {% for type, flashMessages in app.session.flashbag.all() %}*/
/*         {% for flashMessage in flashMessages %}*/
/*             <div class="alert alert-{{ type }}">*/
/*                 {{ flashMessage|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/*     {% block page %}{% endblock %}*/
/* */
/* </div>*/
/* */
/* */
/* <script src="{{ asset('bundles/jordillonchcrudgenerator/js/jquery.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/jordillonchcrudgenerator/js/bootstrap.js') }}"></script>*/
/* */
/* {% block javascript %}{% endblock %}*/
/* </body>*/
/* </html>*/

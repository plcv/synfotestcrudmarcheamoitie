<?php

/* base.html.twig */
class __TwigTemplate_dd43421daa6e14150961dbf216685eaa46992c6b905b9fadebf03c39870db7af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c88b09068874885c0c9641b327b2bddaf2d7fdcb979d62e163386072698e62d = $this->env->getExtension("native_profiler");
        $__internal_0c88b09068874885c0c9641b327b2bddaf2d7fdcb979d62e163386072698e62d->enter($__internal_0c88b09068874885c0c9641b327b2bddaf2d7fdcb979d62e163386072698e62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_0c88b09068874885c0c9641b327b2bddaf2d7fdcb979d62e163386072698e62d->leave($__internal_0c88b09068874885c0c9641b327b2bddaf2d7fdcb979d62e163386072698e62d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6280d4cc7391d2da3e25c14dc21d917145f850d7b93055b5a4e98bb3def083ff = $this->env->getExtension("native_profiler");
        $__internal_6280d4cc7391d2da3e25c14dc21d917145f850d7b93055b5a4e98bb3def083ff->enter($__internal_6280d4cc7391d2da3e25c14dc21d917145f850d7b93055b5a4e98bb3def083ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6280d4cc7391d2da3e25c14dc21d917145f850d7b93055b5a4e98bb3def083ff->leave($__internal_6280d4cc7391d2da3e25c14dc21d917145f850d7b93055b5a4e98bb3def083ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_921ef31a84fc046fe88642ea49a5522a781a4282ef46b5929fa50b35857613a5 = $this->env->getExtension("native_profiler");
        $__internal_921ef31a84fc046fe88642ea49a5522a781a4282ef46b5929fa50b35857613a5->enter($__internal_921ef31a84fc046fe88642ea49a5522a781a4282ef46b5929fa50b35857613a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc4742d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d_part_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        } else {
            // asset "dc4742d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
        
        $__internal_921ef31a84fc046fe88642ea49a5522a781a4282ef46b5929fa50b35857613a5->leave($__internal_921ef31a84fc046fe88642ea49a5522a781a4282ef46b5929fa50b35857613a5_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9cbefd070fe69640efb5488f578879af9ff93288c5090b4574626b87d23874e = $this->env->getExtension("native_profiler");
        $__internal_f9cbefd070fe69640efb5488f578879af9ff93288c5090b4574626b87d23874e->enter($__internal_f9cbefd070fe69640efb5488f578879af9ff93288c5090b4574626b87d23874e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9cbefd070fe69640efb5488f578879af9ff93288c5090b4574626b87d23874e->leave($__internal_f9cbefd070fe69640efb5488f578879af9ff93288c5090b4574626b87d23874e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8056733c530c40c0a601e8eddc0d4494d5d7cd21e36a32f90e25441cc7d0c23e = $this->env->getExtension("native_profiler");
        $__internal_8056733c530c40c0a601e8eddc0d4494d5d7cd21e36a32f90e25441cc7d0c23e->enter($__internal_8056733c530c40c0a601e8eddc0d4494d5d7cd21e36a32f90e25441cc7d0c23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4d1d496_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496_part_1.js");
            // line 17
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "4d1d496"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
        
        $__internal_8056733c530c40c0a601e8eddc0d4494d5d7cd21e36a32f90e25441cc7d0c23e->leave($__internal_8056733c530c40c0a601e8eddc0d4494d5d7cd21e36a32f90e25441cc7d0c23e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  125 => 17,  120 => 16,  114 => 15,  103 => 14,  96 => 10,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets '@adminlte_css' %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}">*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             {% javascripts '@adminlte_js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

<?php

/* security/login.html.twig */
class __TwigTemplate_4fa6c238f683e2b28e316df6de30c93ca0232ce2b33416792ed749c7d7f88aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_9beb14903454654c19dc1fed7af5f1449c86af605afb476782105b4ae3124b35 = $this->env->getExtension("native_profiler");
        $__internal_9beb14903454654c19dc1fed7af5f1449c86af605afb476782105b4ae3124b35->enter($__internal_9beb14903454654c19dc1fed7af5f1449c86af605afb476782105b4ae3124b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9beb14903454654c19dc1fed7af5f1449c86af605afb476782105b4ae3124b35->leave($__internal_9beb14903454654c19dc1fed7af5f1449c86af605afb476782105b4ae3124b35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9f034791c00ad328b292f18a2e489609af5bcf9b498f5a064c4d9eee5f9d74e = $this->env->getExtension("native_profiler");
        $__internal_c9f034791c00ad328b292f18a2e489609af5bcf9b498f5a064c4d9eee5f9d74e->enter($__internal_c9f034791c00ad328b292f18a2e489609af5bcf9b498f5a064c4d9eee5f9d74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 20
        echo "
        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_c9f034791c00ad328b292f18a2e489609af5bcf9b498f5a064c4d9eee5f9d74e->leave($__internal_c9f034791c00ad328b292f18a2e489609af5bcf9b498f5a064c4d9eee5f9d74e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">Password:</label>*/
/*         <input type="password" id="password" name="_password" />*/
/* */
/*         {#*/
/*             If you want to control the URL the user*/
/*             is redirected to on success (more details below)*/
/*             <input type="hidden" name="_target_path" value="/account" />*/
/*         #}*/
/* */
/*         <button type="submit">login</button>*/
/*     </form>*/
/* {% endblock %}*/
/* */

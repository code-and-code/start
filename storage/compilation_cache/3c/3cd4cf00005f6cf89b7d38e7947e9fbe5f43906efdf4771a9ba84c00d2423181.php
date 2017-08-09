<?php

/* profile/img.html.twig */
class __TwigTemplate_2e133851c4b274d4f5c16e3349fe7d3465f724635c0a821056eb262f30efba55 extends Twig_Template
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
        // line 1
        echo "<div class=\"col-md-4\">
    <div class=\"card card-user\">
        <div class=\"image\">
            <img src=\"https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400\" alt=\"...\"/>
        </div>
        <div class=\"content\">
            <div class=\"author\">
                <a href=\"#\">
                    <img class=\"avatar border-gray\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("profile/avatar/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "file", array()), "html", null, true);
        echo "\" alt=\"...\"/>

                    <h4 class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "name", array()), "html", null, true);
        echo "<br />
                        <small>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profile"] ?? null), "user", array()), "email", array()), "html", null, true);
        echo "</small>
                    </h4>
                </a>
            </div>
        </div>
        <hr>
        <div class=\"text-center\">
            <a href=\"/admin/user/profile/sendimage/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-simple\" title=\"enviar image\"><i class=\"fa fa-upload\"></i></a>
            <a href=\"/admin/user/profile/deleteimage/";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-simple\" title=\"deletar image\"><i class=\"fa fa-trash\"></i></a>
        </div>
    </div>

</div>



";
    }

    public function getTemplateName()
    {
        return "profile/img.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  49 => 19,  39 => 12,  35 => 11,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile/img.html.twig", "C:\\laragon\\www\\start\\App\\views\\profile\\img.html.twig");
    }
}

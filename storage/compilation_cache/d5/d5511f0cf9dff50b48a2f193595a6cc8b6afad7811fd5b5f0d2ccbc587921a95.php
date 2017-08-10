<?php

/* profile/edit.html.twig */
class __TwigTemplate_f2c969af812a7a229d756b775d4fb41e38b6a96f0f904c5bf8dc4529aa68006c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "profile/edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"header\">
                    <h4 class=\"title\">Editar Perfil</h4>
                </div>

                <div class=\"content\">
                    <form method=\"POST\" action=\"/admin/user/profile/update/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "id", array()), "html", null, true);
        echo "\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label>Nome</label>
                                    <input type=\"text\" class=\"form-control\"  name=\"name\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "name", array()), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label>Sobre nome</label>
                                    <input type=\"text\" class=\"form-control\" name=\"last_name\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "last_name", array()), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-info btn-fill pull-right\">Atualizar</button>
                        <div class=\"clearfix\"></div>
                    </form>
                </div>
            </div>
        </div>

        ";
        // line 35
        $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("profile.img"), "profile/edit.html.twig", 35)->display($context);
        // line 36
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  72 => 35,  58 => 24,  49 => 18,  41 => 13,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile/edit.html.twig", "C:\\laragon\\www\\start\\App\\views\\profile\\edit.html.twig");
    }
}

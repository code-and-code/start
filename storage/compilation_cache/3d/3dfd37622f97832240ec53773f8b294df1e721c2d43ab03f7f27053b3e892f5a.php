<?php

/* profile/upload.html.twig */
class __TwigTemplate_de485298e09bd9d7778468b1ae38ab38c16c663be80ebaf344b390b4e72292e3 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "profile/upload.html.twig", 1);
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
                    <h4 class=\"title\">Image Perfil</h4>
                </div>
                <div class=\"content\">
                    <form method=\"POST\" action=\"/admin/user/profile/uploadimage/";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "id", array()), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label>Image</label>
                                    <input type=\"file\" class=\"form-control\" name=\"file\">
                                </div>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-info btn-fill pull-right\">Enviar</button>
                        <div class=\"clearfix\"></div>
                    </form>
                </div>
            </div>
        </div>
        ";
        // line 27
        $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("profile.img"), "profile/upload.html.twig", 27)->display($context);
        // line 28
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "profile/upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  58 => 27,  40 => 12,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile/upload.html.twig", "C:\\laragon\\www\\start\\App\\views\\profile\\upload.html.twig");
    }
}

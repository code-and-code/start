<?php

/* admin/index.html.twig */
class __TwigTemplate_ccf0f3915f7ab3fbfa1906b2a40838702edce38254afa7e1facd7c3314fdd2d5 extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "admin/index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"header\">
                    <h4 class=\"title\"></h4>
                    <p class=\"category\"></p>
                </div>
                <div class=\"content\">
                    <div class=\"typo-line\">
                        <p class=\"category\">Oi sou Start</p>
                        <blockquote>
                            <p>
                                um micro framework de aplicação web. Acredito que o desenvolvimento deve ser uma experiência agradável e eficiente. Tento facilitar a vida do desenvolvedor iniciante.
                            </p>
                            <small>
                                let's go
                            </small>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/index.html.twig", "C:\\laragon\\www\\start\\App\\views\\admin\\index.html.twig");
    }
}

<?php

/* user/index.html.twig */
class __TwigTemplate_39aaaad93e025a5c989f259b64845c2d7db3ce519a963adde069d89532207a5d extends Twig_Template
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
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "user/index.html.twig", 1);
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
                    <h4 class=\"title\">Usuários</h4>
                    <p class=\"category\">Teste BANCO DE DADOS</p>
                </div>
                <div class=\"content table-responsive table-full-width\">
                    <table class=\"table table-hover table-striped\">
                        <thead>
                        <th>ID</th>
                        <th>E-mail</th>
                        <th>Nome</th>
                        <th>Sobre nome</th>
                        <th>#</th>
                        </thead>
                        <tbody>
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "                        <tr>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"/admin/user/profile/edit\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "Profile", array()), "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "Profile", array()), "last_name", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"/admin/user/delete/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-simple\"><i class=\"fa fa-trash\"></i></a></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  72 => 27,  68 => 26,  64 => 25,  60 => 24,  56 => 23,  53 => 22,  49 => 21,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/index.html.twig", "C:\\laragon\\www\\start\\App\\views\\user\\index.html.twig");
    }
}

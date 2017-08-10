<?php

/* app.html.twig */
class __TwigTemplate_ac6cee6084cb9452ccdff401178cbcfd32d3503b8822c13e9733ad5d31901f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("admin/img/favicon.ico"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

    <title>Start</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />

    <!-- Bootstrap core CSS     -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Animation library for notifications   -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("assets/img/favicon.ico"), "html", null, true);
        echo "assets/css/animate.min.css\" rel=\"stylesheet\"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("admin/css/light-bootstrap-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("admin/css/demo.css"), "html", null, true);
        echo "\"\" rel=\"stylesheet\" />


    <!--     Fonts and icons     -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("admin/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

</head>
<body>

<div class=\"wrapper\">
    <div class=\"sidebar\" data-color=\"orange\">
        <!--
            Tip 1: you can change the color of the sidebar using: data-color=\"blue | azure | green | orange | red | purple\"
        -->
        <div class=\"sidebar-wrapper\">
            <div class=\"logo\">
                <a href=\"\" class=\"simple-text\">
                    Start
                </a>
            </div>
            <ul class=\"nav\">
                <li>
                    <a href=\"/admin\">
                        <i class=\"pe-7s-graph\"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href=\"/admin/user\">
                        <i class=\"pe-7s-user\"></i>
                        <p>Usuários</p>
                    </a>
                </li>
                <li class=\"active\">
                    <a href=\"https://github.com/code-and-code/start/blob/master/README.md\" target=\"_blank\">
                        <i class=\"fa fa-github\"></i>
                        <p>Documentação</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"main-panel\">
        <nav class=\"navbar navbar-default navbar-fixed\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation-example-2\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\"></a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-left\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-globe\"></i>
                                <b class=\"caret\"></b>
                                <span class=\"notification\">1</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Bem vindo!</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"/\">
                                Home
                            </a>
                        </li>

                        ";
        // line 102
        if (($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getGuest() == true)) {
            // line 103
            echo "                            <li>
                                <a href=\"/auth\">
                                    Entrar
                                </a>
                            </li>
                        ";
        } else {
            // line 109
            echo "
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                ";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAuth(), "email", array()), "html", null, true);
            echo "
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"/admin/user/profile/edit\">Perfil</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"/auth/logout\">Sair</a></li>
                            </ul>
                        </li>

                        ";
        }
        // line 123
        echo "                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"content\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 133
        if (($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getHasMessages() == true)) {
            // line 134
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getDisplay(), "html", null, true);
            echo "
                        ";
        }
        // line 136
        echo "                     </div>
                 </div>

                ";
        // line 139
        $this->displayBlock('content', $context, $blocks);
        // line 140
        echo "
            </div>
        </div>

        <footer class=\"footer\">
            <div class=\"container-fluid\">
                <p class=\"copyright pull-right\">
                    &copy; 2016 <a href=\"https://codeandcode.com.br\">Code&Code</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("admin/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--  Notifications Plugin    -->
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("admin/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("admin/js/light-bootstrap-dashboard.js"), "html", null, true);
        echo "\"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("admin/js/demo.js"), "html", null, true);
        echo "\"></script>

</html>
";
    }

    // line 139
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 139,  240 => 169,  234 => 166,  228 => 163,  222 => 160,  218 => 159,  197 => 140,  195 => 139,  190 => 136,  184 => 134,  182 => 133,  170 => 123,  156 => 112,  151 => 109,  143 => 103,  141 => 102,  66 => 30,  57 => 24,  50 => 20,  44 => 17,  38 => 14,  26 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "app.html.twig", "C:\\laragon\\www\\start\\App\\views\\app.html.twig");
    }
}

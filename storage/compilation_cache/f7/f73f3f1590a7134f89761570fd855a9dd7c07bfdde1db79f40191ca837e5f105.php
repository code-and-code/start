<?php

/* home/index.html.twig */
class __TwigTemplate_5edc7dd720d720f987fce6d1efed310d78fb47a3495c546150e18a51519b323e extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title>Start</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("home/css/main.css"), "html", null, true);
        echo "\"/>
\t</head>
\t<body class=\"landing\">
\t\t<div id=\"page-wrapper\">

\t\t\t<!-- Header -->
\t\t\t\t<header id=\"header\">
\t\t\t\t\t<h1 id=\"logo\"><a href=\"/\">Start</a></h1>
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#help\" class=\"scrolly\">Ajude</a></li>
\t\t\t\t\t\t\t<li><a href=\"/admin\"     class=\"button special\">Teste</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</header>

\t\t\t<!-- Banner -->
\t\t\t\t<section id=\"banner\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t<p>Comece sua viagem no mundo da programação WEB, com PHP + MVC.</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<span class=\"image\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("images/start.jpg"), "html", null, true);
        echo "\" alt=\"Start Framework\" /></span>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#help\" class=\"goto-next scrolly\">Next</a>
\t\t\t\t</section>

\t\t\t<!-- Four -->
\t\t\t\t<section id=\"info\" class=\"wrapper style1 special fade-up\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>Start é um micro framework de aplicação web.</h2>
\t\t\t\t\t\t\t<p>Acreditamos que o desenvolvimento deve ser uma experiência agradável e eficiente. O Start tenta facilitar a vida do desenvolvedor iniciante, disponibilizando os seguintes recursos:</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<div class=\"box alt\">
\t\t\t\t\t\t\t<div class=\"row uniform\">
\t\t\t\t\t\t\t\t<section class=\"4u 6u(medium) 12u\$(xsmall)\">
\t\t\t\t\t\t\t\t\t<span class=\"icon alt major fa-area-chart\"></span>
\t\t\t\t\t\t\t\t\t<h3>Banco de Dados</h3>
\t\t\t\t\t\t\t\t\t<p>ORM expressivo e intuitivo</p>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"4u 6u\$(medium) 12u\$(xsmall)\">
\t\t\t\t\t\t\t\t\t<span class=\"icon alt major fa fa-code\"></span>
\t\t\t\t\t\t\t\t\t<h3>Back-end</h3>
\t\t\t\t\t\t\t\t\t<p>Vários recursos como: armazenamento de sessão e cache</p>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"4u\$ 6u(medium) 12u\$(xsmall)\">
\t\t\t\t\t\t\t\t\t<span class=\"icon alt major fa fa-html5\"></span>
\t\t\t\t\t\t\t\t\t<h3>Front-end</h3>
\t\t\t\t\t\t\t\t\t<p>Motor de renderização simples e rápido</p>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"4u 6u\$(medium) 12u\$(xsmall)\">
\t\t\t\t\t\t\t\t\t<span class=\"icon alt major fa fa-lock\"></span>
\t\t\t\t\t\t\t\t\t<h3>Autenticação</h3>
\t\t\t\t\t\t\t\t\t<p>Sistema de login nativo</p>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"4u 6u(medium) 12u\$(xsmall)\">
\t\t\t\t\t\t\t\t\t<span class=\"icon alt major fa fa-envelope-o\"></span>
\t\t\t\t\t\t\t\t\t<h3>E-mail</h3>
\t\t\t\t\t\t\t\t\t<p>Envio de email</p>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"4u\$ 6u\$(medium) 12u\$(xsmall)\">
\t\t\t\t\t\t\t\t\t<span class=\"icon alt major fa-file\"></span>
\t\t\t\t\t\t\t\t\t<h3>Arquivo</h3>
\t\t\t\t\t\t\t\t\t<p>Fácil sistema de upload</p>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"4u 6u\$(medium) 12u\$(xsmall)\">
\t\t\t\t\t\t\t\t\t<span class=\"icon alt major fa fa-road\"\"></span>
\t\t\t\t\t\t\t\t\t<h3>Rotas</h3>
\t\t\t\t\t\t\t\t\t<p>Gerencie suas URLs</p>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"4u 6u(medium) 12u\$(xsmall)\">
\t\t\t\t\t\t\t\t\t<span class=\"icon alt major fa fa-exclamation\"></span>
\t\t\t\t\t\t\t\t\t<h3>Validation</h3>
\t\t\t\t\t\t\t\t\t<p>Validação de atributos</p>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"4u\$ 6u\$(medium) 12u\$(xsmall)\">
\t\t\t\t\t\t\t\t\t<span class=\"icon alt major fa fa-globe\"></span>
\t\t\t\t\t\t\t\t\t<h3>Packages</h3>
\t\t\t\t\t\t\t\t\t<p>Crie seus próprios pacotes</p>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<footer class=\"major\">
\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</footer>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t<!-- Five -->
\t\t\t\t<section id=\"help\" class=\"wrapper style2 special fade\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t<h2>Ajude o START a crescer !!</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<form method=\"post\" action=\"/send\" class=\"container 50%\">
\t\t\t\t\t\t\t<div class=\"row uniform 50%\">
\t\t\t\t\t\t\t\t<div class=\"8u 12u\$(xsmall)\"><input type=\"email\" name=\"email\" id=\"email\" placeholder=\"E-mail\" required /></div>
\t\t\t\t\t\t\t\t<div class=\"4u\$ 12u\$(xsmall)\"><input type=\"submit\" value=\"Start\" class=\"fit special\" /></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t<!-- Footer -->
\t\t\t\t<footer id=\"footer\">
\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t<li><a href=\"https://github.com/code-and-code/start\" class=\"icon alt fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"copyright\">
\t\t\t\t\t\t<li>Todos os direitos reservados ®</li><li><a href=\"http://codeandcode.com.br\" target=\"_blank\">{Code&Code}</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</footer>

\t\t</div>

\t\t<!-- Scripts -->
\t\t<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("home/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("home/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("home/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("home/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("home/js/skel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("home/js/util.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getAssets("home/js/main.js"), "html", null, true);
        echo "\"></script>

\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 131,  171 => 130,  167 => 129,  163 => 128,  159 => 127,  155 => 126,  151 => 125,  52 => 29,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/index.html.twig", "C:\\laragon\\www\\start\\App\\views\\home\\index.html.twig");
    }
}

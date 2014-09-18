<?php

/* login.twig */
class __TwigTemplate_f5e7a70634c984797ff1e29ae8f24e12c795e92345f7070b32de144b5c4f58de extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    ";
        // line 18
        echo Asset::css("plugins/metisMenu/metisMenu.min.css");
        echo "

    <!-- Custom CSS -->
    <link href=\"assets/css/sb-admin-2.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"assets/font-awesome-4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    
    <!-- My Style -->
    <link href=\"assets/css/plugins/social-buttons.css\" rel=\"stylesheet\">
    <link href=\"assets/css/style.css\" rel=\"stylesheet\">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>
<body>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Đăng nhập vào MFB</h3>
                    </div>
                    <div class=\"panel-body\">
                        <a href=\"";
        // line 48
        echo (isset($context["loginUrl"]) ? $context["loginUrl"] : null);
        echo "\" class=\"btn btn-block btn-social btn-facebook\">
                            <i class=\"fa fa-facebook\"></i> Sign in with Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 48,  38 => 18,  19 => 1,);
    }
}

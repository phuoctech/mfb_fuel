<?php

/* layout.twig */
class __TwigTemplate_0f60421f17e0ef4dd853b51656ecff2517bae025d8af082305a5e954abae787e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
    <link href=\"assets/css/plugins/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"assets/css/sb-admin-2.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"assets/font-awesome-4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    
    <!-- My Style -->
    <link href=\"assets/css/style.css\" rel=\"stylesheet\">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\" class=\"container-fluid\">
        ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "        <!-- Page Content -->
        <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Geekboy</h1>
                </div>
                ";
        // line 50
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src=\"assets/js/jquery-1.11.0.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"assets/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"assets/js/plugins/metisMenu/metisMenu.min.js\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"assets/js/sb-admin-2.js\"></script>

</body>

</html>

";
        // line 76
        if (array_key_exists("modals", $context)) {
            // line 77
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modals"]) ? $context["modals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modal"]) {
                // line 78
                echo "        ";
                echo (isset($context["modal"]) ? $context["modal"] : null);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 81
        echo "


";
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "            ";
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  124 => 41,  117 => 81,  107 => 78,  102 => 77,  100 => 76,  72 => 50,  64 => 44,  62 => 41,  20 => 1,);
    }
}

<?php

/* add_new_fanpage.twig */
class __TwigTemplate_eb404e658185b903a2a574c501fe14eb485adcbb89231b5424e19c2ad4000ee3 extends Twig_Template
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
        echo "<!-- Modal -->
";
        // line 2
        echo Form::open("fanpage/add_fanpage");
        echo "
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Add new fanpage</h4>
            </div>
            <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label>Select a fanpage</label>
                        <select class=\"form-control\" name=\"fanpage\">
                            <?php if (!empty(\$user_pages)): ?>
                                <?php foreach(\$user_pages as \$item): ?>
                                    <option value=\"<?php echo \$item['id'] ?>\" ><?php echo \$item['name'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>                            
                        </select>
                    </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Save\"/>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
";
        // line 31
        echo Form::close();
    }

    public function getTemplateName()
    {
        return "add_new_fanpage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 31,  22 => 2,  19 => 1,);
    }
}

<?php

/* ProductionBundle:Workflow:new.html.twig */
class __TwigTemplate_b08ad0a0bb85e324035b72bd8b7e36b5e5dc2dda81bce3180fec3ae31d2c1253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"page-title\">
        <h2>Création des Workflows</h2>


    </div>
<div class=\"row\">
    <form class=\"form-horizontal col-md-8 test\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("workflow_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">


        <div class=\"form-group \">
            <div class=\"col-md-offset-6 col-md-6\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'row', array("label" => "Titre"));
        echo "
            </div>
        </div>
        <div class=\"form-group \">
            <div class=\"col-md-offset-6 col-md-6\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row', array("label" => "Description"));
        echo "
            </div>
        </div>
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "


    <div class=\"form-group\">
        <div class=\"col-md-offset-6 col-md-6\">
            <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"fui-new\"></span> Ajouter</button>
        </div>
    </div>


    </form>
    </div>
    <div class=\"row\">
        <div class=\"panel\">
            <div class=\"panel-body\">
                <h3 class=\"title-hero\">
                    Liste des Workflows
                </h3>
                <div class=\"example-box-wrapper\">
                    <table id=\"datatable-responsive\" class=\"table table-striped table-bordered responsive no-wrap\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Code WF</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Etapes</th>

                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Code WF</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Etapes</th>

                        </tr>
                        </tfoot>

                        <tbody>
                        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 66
            echo "                        <tr>

                            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-link\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("workflow_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Etapes</a></td>

                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-responsive.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        /* Datatables responsive */
        \$(document).ready(function() {
            \$('#datatable-responsive').DataTable( {
                responsive: true
            } );
        } );

        \$(document).ready(function() {
            \$('.dataTables_filter input').attr(\"placeholder\", \"Search...\");
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ProductionBundle:Workflow:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 86,  160 => 85,  156 => 84,  145 => 75,  135 => 71,  131 => 70,  127 => 69,  123 => 68,  119 => 66,  115 => 65,  71 => 24,  65 => 21,  57 => 16,  47 => 11,  39 => 5,  36 => 3,  11 => 1,);
    }
}

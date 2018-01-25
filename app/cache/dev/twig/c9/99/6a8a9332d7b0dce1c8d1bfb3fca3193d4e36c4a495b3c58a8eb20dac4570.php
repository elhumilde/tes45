<?php

/* ProductionBundle:BonCommande:wc.html.twig */
class __TwigTemplate_c9996a8a9332d7b0dce1c8d1bfb3fca3193d4e36c4a495b3c58a8eb20dac4570 extends Twig_Template
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
        // line 6
        echo "<div id=\"page-title\">
        <h2>Liste de Bon Commandes Non valider </h2>


    </div>

    <br/>
    <form class=\"form-horizontal bordered-row\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("commande_recherched");
        echo "\" method=\"get\">
        <div class=\"row\">

            <div class=\"col-md-6\">



                <div class=\"form-group\">

                    <label class=\"col-sm-3 control-label\">Raison Sociale </label>

                    <div class=\"col-sm-6\">
                        <input type=\"text\" placeholder=\"Raison sociale...\"";
        // line 25
        if (array_key_exists("var", $context)) {
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var"))) != 0)) {
                echo "value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "client", array()), "html", null, true);
                echo "\"";
            }
        }
        echo " name=\"client\"  class=\"form-control\" data-parsley-id=\"3655\"><ul class=\"parsley-errors-list\" id=\"parsley-id-3655\"></ul>
                    </div>
                </div>

            </div>

            <div class=\"col-md-6\">



                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">Code firme</label>
                    <div class=\"col-sm-6\">
                        <input type=\"text\" placeholder=\"Entrer le code firme \" ";
        // line 38
        if (array_key_exists("var", $context)) {
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var"))) != 0)) {
                echo "value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "cfirme", array()), "html", null, true);
                echo "\"";
            }
        }
        echo " name=\"cfirme\" class=\"form-control\" data-parsley-id=\"3655\"><ul class=\"parsley-errors-list\" id=\"parsley-id-3655\"></ul>
                    </div>
                </div>


            </div>
        </div>
        <div class=\"bg-default content-box text-center pad20A mrg25T\">
            <button class=\"btn btn-lg btn-primary\"><i class=\"fa fa-filter\"> </i>Filtrer</button>
        </div>
    </form>
    <div class=\"row\">
        <div class=\"panel\">
            <div class=\"panel-body\">
                <h3 class=\"title-hero\">
                    Liste Des Etapes Workflow
                </h3>
                <div class=\"example-box-wrapper\">
                    <table id=\"datatable-responsive\" class=\"table table-striped table-bordered responsive no-wrap\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>

                            <th>Numéro bc</th>
                            <th>Codefirme</th>
                            <th>Date bc</th>
                            ";
        // line 64
        echo "                            <th>Code vendeur</th>
                            <th>Vendeur</th>
                            <th>Montant ht</th>
                            <th>Montant ttc</th>
                            <th>Code client</th>
                            <th>Etat</th>
                            <th>Welcome Call</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>

                            <th>Numéro bc</th>
                            <th>Codefirme</th>
                            <th>Date bc</th>
                            ";
        // line 80
        echo "                            <th>Code vendeur</th>
                            <th>Code vendeur</th>
                            <th>Montant ht</th>
                            <th>Montant ttc</th>
                            <th>Code client</th>
                            <th>Etat</th>
                            <th>Welcome Call</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 91
            echo "                            <tr>

                                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numBc", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codeFirme", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-success\">";
            // line 95
            if ($this->getAttribute($context["entity"], "dateBc", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateBc", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                ";
            // line 97
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "vendeur", array()), "code", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "vendeur", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "vendeur", array()), "prenom", array()), "html", null, true);
            echo "      </td>
                                <td class=\"text-warning\">    ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "montantHt", array()), "html", null, true);
            echo "           </td>
                                <td class=\"text-warning\">    ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "montantTtc", array()), "html", null, true);
            echo "          </td>
                                <td class=\"text-danger\">     ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "customer", array()), "client", array()), "html", null, true);
            echo "     </td>
                                <td class=\"\">     ";
            // line 102
            if (($this->getAttribute($context["entity"], "valider", array()) == 1)) {
                echo "<span class=\"text-danger\">NON</span>";
            }
            if (($this->getAttribute($context["entity"], "valider", array()) == 2)) {
                echo "<span class=\"text-success\">Valider</span>";
            }
            echo "    </td>
                                <td><a class=\"btn btn-link\" target=\"_blank\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commande_wf", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">WC</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 116
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
        return "ProductionBundle:BonCommande:wc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 116,  227 => 115,  223 => 114,  213 => 106,  204 => 103,  195 => 102,  191 => 101,  187 => 100,  183 => 99,  177 => 98,  172 => 97,  166 => 95,  162 => 94,  158 => 93,  154 => 91,  150 => 90,  138 => 80,  121 => 64,  86 => 38,  63 => 25,  48 => 13,  39 => 6,  36 => 3,  11 => 1,);
    }
}

<?php

/* ProductionBundle:BonCommandeLigne:index.html.twig */
class __TwigTemplate_5f83ef84e66d6200ec4735ecc1b344476f57cea5a30237066f8aa48a6ef77941 extends Twig_Template
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
        echo "<div id=\"page-title\">
    <h2>Liste Des lignes <span class=\"text-success\"> En attente</span> </h2>


</div>
    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("boncommandeligne");
        echo "\" class=\"btn btn-success\">En attente </a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("boncommandeligne_affecter");
        echo "\" class=\"btn btn-success\">Affecté</a>
    <br/>
    <br/>
    <br/>
    <form class=\"form-horizontal bordered-row\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("boncommandeligne_recherche");
        echo "\" method=\"get\">
        <div class=\"row\">

            <div class=\"col-md-6\">

                <div class=\"form-group\">

                    <label class=\"col-sm-3 control-label\">Code firme </label>

                    <div class=\"col-sm-6\">
                        <input type=\"text\" placeholder=\"5555555\" name=\"cfirme\"  ";
        // line 22
        if (array_key_exists("var", $context)) {
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var"))) != 0)) {
                echo "value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "cfirme", array()), "html", null, true);
                echo "\"";
            }
        }
        echo " class=\"form-control\" data-parsley-id=\"3655\"><ul class=\"parsley-errors-list\" id=\"parsley-id-3655\"></ul>
                    </div>
                </div>

                <div class=\"form-group\">

                     <label class=\"col-sm-3 control-label\">Raison Sociale </label>

                     <div class=\"col-sm-6\">
                        <input type=\"text\" placeholder=\"Raison sociale\"";
        // line 31
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
                    <label class=\"col-sm-3 control-label\">Produit</label>
                    <div class=\"col-sm-6\">
                        <input type=\"text\" placeholder=\"Titre de produit\" name=\"produit\" ";
        // line 42
        if (array_key_exists("var", $context)) {
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var"))) != 0)) {
                echo "value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "produit", array()), "html", null, true);
                echo "\"";
            }
        }
        echo "  class=\"form-control\" data-parsley-id=\"3655\"><ul class=\"parsley-errors-list\" id=\"parsley-id-3655\"></ul>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">Numéro commande</label>
                    <div class=\"col-sm-6\">
                        <input type=\"text\" placeholder=\"Entrer le numéro de commande\" ";
        // line 49
        if (array_key_exists("var", $context)) {
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var"))) != 0)) {
                echo "value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "numero", array()), "html", null, true);
                echo "\"";
            }
        }
        echo " name=\"numero\" class=\"form-control\" data-parsley-id=\"3655\"><ul class=\"parsley-errors-list\" id=\"parsley-id-3655\"></ul>
                    </div>
                </div>


            </div>
        </div>
        <div class=\"bg-default content-box text-center pad20A mrg25T\">
            <button class=\"btn btn-lg btn-primary\"><i class=\"fa fa-filter\"> </i>Filtrer</button>
        </div>
    </form>
<form action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("boncommandeligne_production");
        echo "\"  method=\"post\" >
    <div class=\"row\">
        <div class=\"panel\">
            <div class=\"panel-body\">
                <h3 class=\"title-hero\">
                    Liste Des lignes
                </h3>
                <div class=\"example-box-wrapper\">
                    <table id=\"datatable-responsive\" class=\"table table-striped table-bordered responsive no-wrap\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                            <th>Numéro bc</th>
                            <th>Produit</th>
                            <th>Montant ht produit</th>
                            <th>Client </th>
                            <th>Date BC</th>
                            <th>Etat d'affectation</th>
                            <th>Cloturee</th>

                            <th>Etapes</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th>Numéro bc</th>
                            <th>Produit</th>
                            <th>Montant ht</th>
                            <th>Client</th>
                            <th>Date BC</th>
                            <th>Etat d'affectation</th>
                            <th>Cloturee</th>

                            <th>Etapes</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        ";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 99
            echo "                            <tr>
                                <td ><input type=\"checkbox\" name=\"users[]\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "produit", array()), "customer", array()), "id", array()), "html", null, true);
            echo "\"></td>
                                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "commande", array()), "numBc", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "produit", array()), "titre", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-warning\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "montantHt", array()), "html", null, true);
            echo "  </td>
                                <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "commande", array()), "customer", array()), "client", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-success\">";
            // line 105
            if ($this->getAttribute($this->getAttribute($context["entity"], "commande", array()), "dateBc", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "commande", array()), "dateBc", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                <td>
                                    <div class=\"row demo-margin\">
                                        <div class=\"col-md-3\">
                                            <div class=\"text-center font-gray-dark pad5B text-transform-upr font-size-11\">Affectation</div>
                                            <div class=\"chart-alt-2 easyPieChart\" data-percent=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('config_extension')->count($this->getAttribute($this->getAttribute($context["entity"], "produit", array()), "idWorkflow", array()), $this->getAttribute($context["entity"], "id", array())), "html", null, true);
            echo "\" style=\"width: 50px; height: 50px; line-height: 50px;\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('config_extension')->count($this->getAttribute($this->getAttribute($context["entity"], "produit", array()), "idWorkflow", array()), $this->getAttribute($context["entity"], "id", array())), "html", null, true);
            echo "</span>%<canvas width=\"50\" height=\"50\"></canvas></div>
                                        </div>
                                    </div>

                                </td>
                                <td ><div class=\"col-md-3\">
                                        <div class=\"text-center font-gray-dark pad5B text-transform-upr font-size-11\">Cloture</div>
                                        <div class=\"chart-alt-2 easyPieChart\" data-percent=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('config_extension')->countFin($this->getAttribute($this->getAttribute($context["entity"], "produit", array()), "idWorkflow", array()), $this->getAttribute($context["entity"], "id", array())), "html", null, true);
            echo "\" data-bar-color=\"#2980b9\" style=\"width: 50px; height: 50px; line-height: 50px;\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('config_extension')->countFin($this->getAttribute($this->getAttribute($context["entity"], "produit", array()), "idWorkflow", array()), $this->getAttribute($context["entity"], "id", array())), "html", null, true);
            echo "</span>%<canvas width=\"50\" height=\"50\"></canvas></div>
                                    </div> </td>

                                <td><a class=\"btn btn-link\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boncommandeligne_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Etapes</a></td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class=\"panel panel-warning hidden-print\">
        <div class=\"panel-heading\"><h2>Action :</h2></div>



        ";
        // line 137
        echo "        <span class=\"text-success\"><h3>Affectaion : </h3></span>

        <label class=\"btn btn-default\"><input type=\"checkbox\" name=\"checkbox_production\" id=\"PRODUCTION\"  style=\"vertical-align: top;\" disabled=\"disabled\" >Production</label>
        </br>
        </br>
        </br>
        <span class=\"text-success\"><h3><i class=\"fa fa-briefcase\"></i>Collaborateur :</h3></span>


        <div   id=\"autoUpdate5\"  style=\"display: none\">
            <p>Service : <span class=\"text-success\">Production</span></p>
            ";
        // line 148
        if (array_key_exists("production", $context)) {
            // line 149
            echo "                <input type=\"hidden\" name=\"count_production\" value=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["production"]) ? $context["production"] : $this->getContext($context, "production"))), "html", null, true);
            echo "\">
                ";
            // line 150
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["production"]) ? $context["production"] : $this->getContext($context, "production")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entit"]) {
                // line 151
                echo "
                    <div class=\"one_element\">
                        <div class=\"rs_one_title\">
                            <label class=\"btn btn-default\"><input type=\"checkbox\" name=\"checkbox_utilisateur_prod";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" id=\"PRODUCTION\" style=\"vertical-align: top;\"   > ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "fullName", array()), "html", null, true);
                echo "</label>


                        </div>
                        <input type=\"hidden\" name=\"utilisateur_prod";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "id", array()), "html", null, true);
                echo "\">
                        <div class=\"one_element_footer\">

                            <textarea style=\"display: block; margin: 0px 125px 0px 0px; width: 564px; height: 60px;\" name=\"cmt_prod";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" id=\"adresse_raison\"  placeholder=\"votre commentaire\"></textarea>
                        </div>
                    </div>

                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "
            ";
        }
        // line 168
        echo "
        </div>
        <hr>
        <center>
            <input type=\"submit\" name=\"valider\" value=\"Valider les affectations\" class=\"btn btn-success btn-gradient\" disabled=\"disabled\">
        </center>

    </div>

    </form>
    <script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-responsive.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">




        \$(document).ready(function () {
            \$('#PRODUCTION').change(function () {
                if (!this.checked)
                //  ^
                    \$('#autoUpdate5').fadeOut('slow');
                else
                    \$('#autoUpdate5').fadeIn('slow');
            });
        });

        \$(\"#checkall\").click(function(){
            if(\$(\"#checkall\").prop(\"checked\")) \$(\"td input:checkbox\").prop(\"checked\",true);
            else \$(\" td input:checkbox\").prop(\"checked\",false);
        });
        function getCheckedRows () {
            var users = [];
            dataContainer.find('input:checkbox:checked').each(function() {
                users.push(\$(this).val());
            });
            return users.join(',');
        }
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
        return "ProductionBundle:BonCommandeLigne:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 180,  367 => 179,  363 => 178,  351 => 168,  347 => 166,  328 => 161,  320 => 158,  311 => 154,  306 => 151,  289 => 150,  284 => 149,  282 => 148,  269 => 137,  255 => 124,  245 => 120,  237 => 117,  225 => 110,  215 => 105,  211 => 104,  207 => 103,  203 => 102,  199 => 101,  193 => 100,  190 => 99,  186 => 98,  145 => 60,  124 => 49,  107 => 42,  86 => 31,  67 => 22,  54 => 12,  45 => 8,  36 => 3,  11 => 1,);
    }
}

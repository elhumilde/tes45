<?php

/* ProductionBundle:BonCommande:index.html.twig */
class __TwigTemplate_b028578785f254be5e9302ddcd3aff6c2cf3cf0f5c0442f4eb6040ac1bba2316 extends Twig_Template
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
        <h2>Liste de Bon Commandes validée</h2>


    </div>

    <br/>
    <form class=\"form-horizontal bordered-row\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("commande_recherche");
        echo "\" method=\"get\">
        <div class=\"row\">

            <div class=\"col-md-6\">



                <div class=\"form-group\">

                    <label class=\"col-sm-3 control-label\">Raison Sociale </label>

                    <div class=\"col-sm-6\">
                        <input type=\"text\" placeholder=\"Raison sociale...\"";
        // line 24
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
        // line 37
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
                            <th>Date prevue reunion client</th>
                            <th>Code vendeur</th>
                            <th>Vendeur</th>
                            <th>Montant ht</th>
                            <th>Montant ttc</th>
                            <th>Code client</th>
                            <th>Priorité</th>
                            <th>Etat d'affectation </th>
                            <th>Cloturee</th>
                            <th>Liste des produits</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>

                            <th>Numéro bc</th>
                            <th>Codefirme</th>
                            <th>Date bc</th>
                            <th>Date prevue reunion client</th>
                            <th>Code vendeur</th>
                            <th>Code vendeur</th>
                            <th>Montant ht</th>
                            <th>Montant ttc</th>
                            <th>Code client</th>
                            <th>Priorité</th>
                            <th>Etat d'affectation </th>
                            <th>Cloturee</th>
                            <th>Liste des produits</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 94
            echo "                            <tr>

                                <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numBc", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codeFirme", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-success\">";
            // line 98
            if ($this->getAttribute($context["entity"], "dateBc", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateBc", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                <td class=\"text-success\">";
            // line 99
            if ($this->getAttribute($context["entity"], "welcomes", array())) {
                if ($this->getAttribute($this->getAttribute($context["entity"], "welcomes", array()), "dateReunion", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "welcomes", array()), "dateReunion", array()), "d-m-Y"), "html", null, true);
                }
                echo " ";
            }
            echo "</td>
                                <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "vendeur", array()), "code", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "vendeur", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "vendeur", array()), "prenom", array()), "html", null, true);
            echo " </td>
                                <td class=\"text-warning\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "montantHt", array()), "html", null, true);
            echo "  </td>
                                <td class=\"text-warning\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "montantTtc", array()), "html", null, true);
            echo " </td>
                                <td class=\"text-danger\">";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "customer", array()), "client", array()), "html", null, true);
            echo "   </td>
                                <td class=\"text-danger\"> <select class=\"form-control\" id=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"  name=\"Reason";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" onchange=\"Valider(this)\"  >
                                        <option></option>
                                        <option value=\"2\"    ";
            // line 107
            if (($this->getAttribute($context["entity"], "ordre", array()) == 2)) {
                echo "selected";
            }
            echo "> <sapn class=\"text-success\">élevée</sapn></option>
                                        <option value=\"1\" id=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"   ";
            if (($this->getAttribute($context["entity"], "ordre", array()) == 1)) {
                echo "selected";
            }
            echo "><sapn class=\"text-danger\">Normal</sapn></option>

                                    </select>   </td>
                                <td>
                                    ";
            // line 112
            $context["totalPrice"] = 0;
            // line 113
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "ligne", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entit"]) {
                // line 114
                echo "                                        ";
                $context["totalPrice"] = ((isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice")) + $this->env->getExtension('config_extension')->count($this->getAttribute($this->getAttribute($context["entit"], "produit", array()), "idWorkflow", array()), $this->getAttribute($context["entit"], "id", array())));
                // line 115
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                    <div class=\"row demo-margin\">
                                        <div class=\"col-md-3\">
                                            <div class=\"text-center font-gray-dark pad5B text-transform-upr font-size-11\">Affectation</div>
                                            <div class=\"chart-alt-2 easyPieChart\" data-percent=\"";
            // line 120
            echo twig_escape_filter($this->env, ((isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice")) / twig_length_filter($this->env, $this->getAttribute($context["entity"], "ligne", array()))), "html", null, true);
            echo "\" style=\"width: 50px; height: 50px; line-height: 50px;\"><span>";
            echo twig_escape_filter($this->env, ((isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice")) / twig_length_filter($this->env, $this->getAttribute($context["entity"], "ligne", array()))), "html", null, true);
            echo "</span>%<canvas width=\"50\" height=\"50\"></canvas></div>
                                        </div>
                                    </div>
                                </td>
                                <td >
                                    ";
            // line 125
            $context["totalPrices"] = 0;
            // line 126
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "ligne", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entit"]) {
                // line 127
                echo "                                        ";
                $context["totalPrices"] = ((isset($context["totalPrices"]) ? $context["totalPrices"] : $this->getContext($context, "totalPrices")) + $this->env->getExtension('config_extension')->countFin($this->getAttribute($this->getAttribute($context["entit"], "produit", array()), "idWorkflow", array()), $this->getAttribute($context["entit"], "id", array())));
                // line 128
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                                    <div class=\"row demo-margin\">
                                        <div class=\"col-md-3\">
                                            <div class=\"text-center font-gray-dark pad5B text-transform-upr font-size-11\">Cloture</div>
                                            <div class=\"chart-alt-2 easyPieChart\" data-percent=\"";
            // line 133
            echo twig_escape_filter($this->env, ((isset($context["totalPrices"]) ? $context["totalPrices"] : $this->getContext($context, "totalPrices")) / twig_length_filter($this->env, $this->getAttribute($context["entity"], "ligne", array()))), "html", null, true);
            echo "\" style=\"width: 50px; height: 50px; line-height: 50px;\"><span>";
            echo twig_escape_filter($this->env, ((isset($context["totalPrices"]) ? $context["totalPrices"] : $this->getContext($context, "totalPrices")) / twig_length_filter($this->env, $this->getAttribute($context["entity"], "ligne", array()))), "html", null, true);
            echo "</span>%<canvas width=\"50\" height=\"50\"></canvas></div>
                                        </div>
                                    </div>


                                </td>
                                <td><a class=\"btn btn-link\" href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commande_produit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Liste des produits</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-responsive.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">

        function Valider(\$this)
        {
            var selectedOption =\$(\$this).val();
            var id_avis =\$(\$this).attr('id');



            var data_send = {id: id_avis, 'etat': selectedOption};

            //Ici on peut ajouter un loader...
            \$.ajax({

                url: '";
        // line 168
        echo $this->env->getExtension('routing')->getPath("commande_nond");
        echo "',
                type: 'POST',
                data: data_send,

                statusCode: {
                    //traitement en cas de succès
                    200: function (response) {

                        var successMessage = response.nom;


                        // alert(successMessage+''+successM+''+successF+' c bien passée');
                        //on vide les champs formulaires ou on le supprime ou ...

                        //on retire le loader...
                        //on prévient l'utilistateur du bonne envoi...

                    },
                    //traitement en cas d'erreur (on peut aussi traiter le cas erreur 500...)
                    412: function (response) {
                        var errorsForm = response.responseJSON.formErrors;
                        //on affiche les erreurs...
                    }
                }
            });

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
        return "ProductionBundle:BonCommande:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 168,  322 => 152,  318 => 151,  314 => 150,  304 => 142,  295 => 139,  284 => 133,  279 => 130,  272 => 128,  269 => 127,  264 => 126,  262 => 125,  252 => 120,  247 => 117,  240 => 115,  237 => 114,  232 => 113,  230 => 112,  219 => 108,  213 => 107,  206 => 105,  202 => 104,  198 => 103,  194 => 102,  188 => 101,  184 => 100,  174 => 99,  168 => 98,  164 => 97,  160 => 96,  156 => 94,  152 => 93,  86 => 37,  63 => 24,  48 => 12,  39 => 5,  36 => 3,  11 => 1,);
    }
}

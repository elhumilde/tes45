<?php

/* ProductionBundle:BonCommandeLigne:show.html.twig */
class __TwigTemplate_fc24d02a09f27c75c94a035fc182494001ba273ced8db95f04889a862a44a477 extends Twig_Template
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
    <h2>Liste Des <span class=\"text-success\">Etapes</span> </h2>


</div>

    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("affectation_production");
        echo "\"  method=\"post\" >
        <div class=\"row\">
            <div class=\"row\">
            <div class=\" col-md-6\">
                <div>   <label for=\"bc\" class=\"required\">Numéro BC </label><input type=\"text\" id=\"bc\" name=\"bc\" required=\"required\" class=\"form-control has-feedback-left\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commande", array()), "numBc", array()), "html", null, true);
        echo "\" readonly></div>
            </div>
            <div class=\" col-md-6\">
                <div>   <label for=\"bc\" class=\"required\">Produit </label><input type=\"text\" id=\"bc\" name=\"bc\" required=\"required\" class=\"form-control has-feedback-left\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "produit", array()), "titre", array()), "html", null, true);
        echo "\" readonly></div>
            </div>
            <div class=\" col-md-6\">
                <div>   <label for=\"bc\" class=\"required\">Client </label><input type=\"text\" id=\"bc\" name=\"bc\" required=\"required\" class=\"form-control has-feedback-left\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commande", array()), "customer", array()), "client", array()), "html", null, true);
        echo "\" readonly></div>
            </div>
            <div class=\" col-md-6\">
                <div>   <label for=\"bc\" class=\"required\">Montant ht produit </label><input type=\"text\" id=\"bc\" name=\"bc\" required=\"required\" class=\"form-control has-feedback-left\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montantHt", array()), "html", null, true);
        echo " \" readonly></div>
            </div>
            <div class=\" col-md-6\">
                <div>   <label for=\"bc\" class=\"required\">Vendeur</label><input type=\"text\" id=\"bc\" name=\"bc\" required=\"required\" class=\"form-control has-feedback-left\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commande", array()), "vendeur", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commande", array()), "vendeur", array()), "prenom", array()), "html", null, true);
        echo " \" readonly></div>
            </div>
            <div class=\" col-md-6\">
                <div>   <label for=\"bc\" class=\"required\">Date arrivée bon commande</label><input type=\"text\" id=\"bc\" name=\"bc\" required=\"required\" class=\"form-control has-feedback-left\" value=\"";
        // line 28
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commande", array()), "dateBc", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commande", array()), "dateBc", array()), "d-m-Y"), "html", null, true);
        }
        echo " \" readonly></div>
            </div>
            </div>
            <br/>
            <div class=\"example-box-wrapper\">
                <div class=\"row\">

                    <div class=\"col-md-2\">
                        <a href=\"#\" title=\"Example tile shortcut\" class=\"tile-box tile-box-alt btn-danger\">
                            <div class=\"tile-header\">
                               Etat d'affectation
                            </div>
                            <div class=\"tile-content-wrapper\">
                                <div class=\"chart-alt-10 easyPieChart\" data-percent=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('config_extension')->count($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "produit", array()), "idWorkflow", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "html", null, true);
        echo "\" style=\"width: 100px; height: 100px; line-height: 100px;\"><span>54</span>%<canvas width=\"100\" height=\"100\"></canvas></div>
                            </div>
                        </a>
                    </div>

                    <div class=\"col-md-2\">
                        <a href=\"#\" title=\"Example tile shortcut\" class=\"tile-box tile-box-alt btn-success\">
                            <div class=\"tile-header\">
                                Etat d cloture
                            </div>
                            <div class=\"tile-content-wrapper\">
                                <div class=\"chart-alt-10 easyPieChart\" data-percent=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('config_extension')->countFin($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "produit", array()), "idWorkflow", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "html", null, true);
        echo "\" style=\"width: 100px; height: 100px; line-height: 100px;\"><span>42</span>%<canvas width=\"100\" height=\"100\"></canvas></div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

              <br/>
              <br/>

                <div class=\"panel\">
                     <div class=\"panel-body\">
                             <h3 class=\"title-hero\">
                              Liste Des Etapes
                             </h3>


                            <div class=\"example-box-wrapper\">
                                <table id=\"datatable-responsive\" class=\"table table-striped table-bordered responsive no-wrap\" cellspacing=\"0\" width=\"100%\">
                                    <thead>
                                        <tr>
                                            <th><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                                            <th>Numéro bc</th>
                                            <th >Nom Etapes</th>
                                            <th>Description Etapes</th>
                                            <th>Temps Prevu Etapes</th>
                                            <th>Cloturee</th>
                                            <th>Affectée a</th>
                                            <th>Statut</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Numéro bc</th>
                                                <th>Nom Etapes</th>
                                                <th>Description Etapes</th>
                                                <th>Temps Prevu Etapes</th>
                                                <th>Cloturee</th>
                                                <th>Affectée a</th>
                                                <th>Statut</th>
                                            </tr>
                                    </tfoot>
                            <tbody>
                            ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "produit", array()), "customer", array()), "carts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entit"]) {
            // line 98
            echo "                                     <tr>
                                    <td >";
            // line 99
            if ($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))) {
                echo " ";
            } else {
                echo " <input type=\"checkbox\" name=\"users[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "id", array()), "html", null, true);
                echo "|";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
                echo "\"> ";
            }
            echo "</td>
                                    <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commande", array()), "numBc", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-success\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "titre", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "description", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-success\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "tempsPrevu", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-warning text-center\">";
            // line 104
            if ($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))) {
                if ($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array())) {
                    if (($this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "Fin", array()) == 2)) {
                        echo "OUI";
                    }
                }
            }
            echo " ";
            if ($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))) {
                if ($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array())) {
                    if (($this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "Fin", array()) == 1)) {
                        echo "NON";
                    }
                }
            }
            echo "</td>
                                     <td>";
            // line 105
            if ($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "utilisateur", array()), "fullname", array()), "html", null, true);
                echo " ";
            } else {
                echo " <span class=\"text-danger\">NON</span>";
            }
            echo "</td>
                                    <td>";
            // line 106
            if ($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))) {
                if ($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array())) {
                    if ($this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "dateFin", array())) {
                        echo " <span class=\"label label-warning\"> Cloturée , le : ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "dateFin", array()), "d-m-Y H:i"), "html", null, true);
                        echo "  </span>

                                             <button type=\"button\" class=\"btn btn-info mrg20B collapsed\" data-toggle=\"collapse\" data-target=\"#demo-";
                        // line 108
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "id", array()), "html", null, true);
                        echo "\">
                                                + Détails
                                                <div class=\"ripple-wrapper\"></div></button>

                                            <div id=\"demo-";
                        // line 112
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "id", array()), "html", null, true);
                        echo "\" class=\"collapse\" style=\"height: 0px;\">

                                                <div class=\"panel\">
                                                    <div class=\"panel-heading\">

                                                        ";
                        // line 117
                        if ($this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "detailsEx", array())) {
                            // line 118
                            echo "                                                            ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "detailsEx", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["det"]) {
                                // line 119
                                echo "
                                                                <h3 class=\"panel-title\">";
                                // line 120
                                if (($this->getAttribute($context["det"], "type", array()) == 2)) {
                                    echo "<span class=\"text-danger\">Pause</span> le : ";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["det"], "dateDebut", array()), "d-m-Y H:i"), "html", null, true);
                                    echo " ";
                                }
                                if (($this->getAttribute($context["det"], "type", array()) == 1)) {
                                    echo "<span class=\"text-success\">Reprise</span> le : ";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["det"], "dateDebut", array()), "d-m-Y H:i"), "html", null, true);
                                    echo " ";
                                }
                                echo "</h3>

                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['det'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 123
                            echo "                                                        ";
                        }
                        // line 124
                        echo "                                                    </div>
                                                    <div class=\"panel-body\">
                                                        ";
                        // line 126
                        if ($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array())) {
                            echo "  ";
                            if ($this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "commentaire", array())) {
                                echo " <p>
                                                            ";
                                // line 127
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "commentaire", array()), "html", null, true);
                                echo "
                                                        </p>
                                                        ";
                            }
                            // line 130
                            echo "                                                        ";
                        }
                        // line 131
                        echo "                                                    </div>
                                                    <span class=\"label label-success\">  démarrage   le : ";
                        // line 132
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "dateDebut", array()), "d-m-Y H:i"), "html", null, true);
                        echo " </span>
                                                </div>

                                            </div>

                                        ";
                    } else {
                        // line 137
                        echo "<span class=\"label label-success\"> En cours ,  démarrage   le : ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "dateDebut", array()), "d-m-Y H:i"), "html", null, true);
                        echo " </span>  <button type=\"button\" class=\"btn btn-info mrg20B collapsed\" data-toggle=\"collapse\" data-target=\"#demo-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "id", array()), "html", null, true);
                        echo "\">
                                            + Détails
                                            <div class=\"ripple-wrapper\"></div></button>

                                            <div id=\"demo-";
                        // line 141
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "id", array()), "html", null, true);
                        echo "\" class=\"collapse\" style=\"height: 0px;\">

                                                <div class=\"panel\">
                                                    <div class=\"panel-heading\">

                                                        ";
                        // line 146
                        if ($this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "detailsEx", array())) {
                            // line 147
                            echo "                                                        ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "detailsEx", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["det"]) {
                                // line 148
                                echo "
                                                        <h3 class=\"panel-title\">";
                                // line 149
                                if (($this->getAttribute($context["det"], "type", array()) == 2)) {
                                    echo "<span class=\"text-danger\">Pause</span> le : ";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["det"], "dateDebut", array()), "d-m-Y H:i"), "html", null, true);
                                    echo " ";
                                }
                                if (($this->getAttribute($context["det"], "type", array()) == 1)) {
                                    echo "<span class=\"text-success\">Reprise</span> le : ";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["det"], "dateDebut", array()), "d-m-Y H:i"), "html", null, true);
                                    echo " ";
                                }
                                echo "</h3>

                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['det'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 152
                            echo "                                                        ";
                        }
                        // line 153
                        echo "                                                    </div>
                                                    <div class=\"panel-body\">
                                            ";
                        // line 155
                        if ($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array())) {
                            echo "  ";
                            if ($this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "commentaire", array())) {
                                echo " <p>
                                                           ";
                                // line 156
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->env->getExtension('config_extension')->affecter($this->getAttribute($context["entit"], "id", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), "exucEtape", array()), "commentaire", array()), "html", null, true);
                                echo "
                                                       </p>
                                                ";
                            }
                            // line 159
                            echo "                                                ";
                        }
                        // line 160
                        echo "                                                    </div>
                                                </div>

                                            </div>

                                        ";
                    }
                    // line 166
                    echo "
                                        ";
                } else {
                    // line 167
                    echo " <span class=\"label label-danger\"> Dans l'attente du démarrage </span> ";
                }
                echo " ";
            }
            echo "</td>
                                     </tr>
                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>

        </div>
        <div class=\"panel panel-warning hidden-print\">
            <div class=\"panel-heading\"><h2>Action :</h2></div>



            ";
        // line 183
        echo "            <span class=\"text-success\"><h3>Affectaion : </h3></span>

            <label class=\"btn btn-default\"><input type=\"checkbox\" name=\"checkbox_production\" id=\"PRODUCTION\"  style=\"vertical-align: top;\"  >Production</label>
            </br>
            </br>
            </br>
            <span class=\"text-success\"><h3><i class=\"fa fa-briefcase\"></i>Collaborateur :</h3></span>


            <div   id=\"autoUpdate5\"  style=\"display: none\">
                <p>Service : <span class=\"text-success\">Production</span></p>
                ";
        // line 194
        if (array_key_exists("production", $context)) {
            // line 195
            echo "                    <input type=\"hidden\" name=\"count_production\" value=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["production"]) ? $context["production"] : $this->getContext($context, "production"))), "html", null, true);
            echo "\">
                    ";
            // line 196
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
                // line 197
                echo "
                        <div class=\"one_element\">
                            <div class=\"rs_one_title\">
                                <label class=\"btn btn-default\"><input type=\"checkbox\" class=\"subject-list\"  name=\"checkbox_utilisateur_prod";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" id=\"PRODUCTION\" style=\"vertical-align: top;\"   > ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "fullName", array()), "html", null, true);
                echo "</label>


                            </div>
                            <input type=\"hidden\" name=\"utilisateur_prod";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "id", array()), "html", null, true);
                echo "\">
                            <div class=\"one_element_footer\">

                                <textarea style=\"display: block; margin: 0px 125px 0px 0px; width: 564px; height: 60px;\" name=\"cmt_prod";
                // line 207
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
            // line 212
            echo "
                ";
        }
        // line 214
        echo "
            </div>
            <hr>
            <center>
                <input type=\"submit\" name=\"valider\" value=\"Valider les affectations\" class=\"btn btn-success btn-gradient\">
            </center>

        </div>

    </form>
    <script type=\"text/javascript\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-responsive.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">


        \$('.subject-list').on('change', function() {
            \$('.subject-list').not(this).prop('checked', false);
        });

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
        return "ProductionBundle:BonCommandeLigne:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 226,  518 => 225,  514 => 224,  502 => 214,  498 => 212,  479 => 207,  471 => 204,  462 => 200,  457 => 197,  440 => 196,  435 => 195,  433 => 194,  420 => 183,  406 => 170,  394 => 167,  390 => 166,  382 => 160,  379 => 159,  373 => 156,  367 => 155,  363 => 153,  360 => 152,  342 => 149,  339 => 148,  334 => 147,  332 => 146,  324 => 141,  314 => 137,  305 => 132,  302 => 131,  299 => 130,  293 => 127,  287 => 126,  283 => 124,  280 => 123,  262 => 120,  259 => 119,  254 => 118,  252 => 117,  244 => 112,  237 => 108,  228 => 106,  218 => 105,  200 => 104,  196 => 103,  192 => 102,  188 => 101,  184 => 100,  172 => 99,  169 => 98,  165 => 97,  117 => 52,  103 => 41,  85 => 28,  77 => 25,  71 => 22,  65 => 19,  59 => 16,  53 => 13,  46 => 9,  36 => 3,  11 => 1,);
    }
}

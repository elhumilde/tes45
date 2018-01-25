<?php

/* ProductionBundle:BonCommande:produit.html.twig */
class __TwigTemplate_a0d02e56f33709c642eb557e10558e7daba5d9ff3ad243a79bef56e9ba1b96cc extends Twig_Template
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
    <h2>Liste Des lignes <span class=\"text-success\"> En attente</span> </h2>
</div>

    ";
        // line 10
        echo "<div class=\"row\">

    <div class=\" col-md-6\">
        <div>   <label for=\"bc\" class=\"required\">Date prévu réunion client </label><input type=\"text\" id=\"bc\" name=\"bc\" required=\"required\" class=\"form-control has-feedback-left\" value=\"";
        // line 13
        if ($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "welcomes", array())) {
            if ($this->getAttribute($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "welcomes", array()), "dateReunion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "welcomes", array()), "dateReunion", array()), "d-m-Y"), "html", null, true);
                echo " ";
            }
        }
        echo "\" readonly=\"\"></div>
    </div>

    <div class=\" col-md-6\">
        <div>   <label for=\"bc\" class=\"required\">Date prévu mise enligne </label><input type=\"text\" id=\"bc\" name=\"bc\" required=\"required\" class=\"form-control has-feedback-left\" value=\"";
        // line 17
        if ($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "welcomes", array())) {
            if ($this->getAttribute($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "welcomes", array()), "dateMise", array())) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "welcomes", array()), "dateMise", array()), "d-m-Y"), "html", null, true);
            }
            echo " ";
        }
        echo "\" readonly=\"\"></div>
    </div>

    <div class=\" col-md-8\" style=\"margin-top: 20px;\">
            <div>
                    <label class=\"col-sm-3 control-label\">Commentaire</label>
                    <div class=\"col-sm-6\">
                        <textarea id=\"one_text\" name=\"\" rows=\"5\" cols=\"50\" class=\"form-control textarea-counter\" readonly> ";
        // line 24
        if ($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "welcomes", array())) {
            if ($this->getAttribute($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "welcomes", array()), "commentaire", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "welcomes", array()), "commentaire", array()), "html", null, true);
            }
        }
        echo " </textarea>
                        <div class=\"character-remaining clear input-description\">125 characters left</div>
                    </div>
            </div>

    </div>

</div>
    <div class=\"example-box-wrapper\">
        <div class=\"row\">

            <div class=\"col-md-2\">
                ";
        // line 36
        $context["totalPrice"] = 0;
        // line 37
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "ligne", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["enti"]) {
            // line 38
            echo "                    ";
            $context["totalPrice"] = ((isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice")) + $this->env->getExtension('config_extension')->count($this->getAttribute($this->getAttribute($context["enti"], "produit", array()), "idWorkflow", array()), $this->getAttribute($context["enti"], "id", array())));
            // line 39
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                <a href=\"#\" title=\"Example tile shortcut\" class=\"tile-box tile-box-alt btn-danger\">
                    <div class=\"tile-header\">
                        Etat d'affectation
                    </div>
                    <div class=\"tile-content-wrapper\">
                        <div class=\"chart-alt-10 easyPieChart\" data-percent=\"";
        // line 46
        echo twig_escape_filter($this->env, ((isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice")) / twig_length_filter($this->env, $this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "ligne", array()))), "html", null, true);
        echo "\" style=\"width: 100px; height: 100px; line-height: 100px;\"><span>54</span>%<canvas width=\"100\" height=\"100\"></canvas></div>
                    </div>
                </a>
            </div>

            <div class=\"col-md-2\">
                <a href=\"#\" title=\"Example tile shortcut\" class=\"tile-box tile-box-alt btn-success\">
                    ";
        // line 53
        $context["totalPrices"] = 0;
        // line 54
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "ligne", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["enti"]) {
            // line 55
            echo "                        ";
            $context["totalPrices"] = ((isset($context["totalPrices"]) ? $context["totalPrices"] : $this->getContext($context, "totalPrices")) + $this->env->getExtension('config_extension')->countFin($this->getAttribute($this->getAttribute($context["enti"], "produit", array()), "idWorkflow", array()), $this->getAttribute($context["enti"], "id", array())));
            // line 56
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    <div class=\"tile-header\">
                        Etat d cloture
                    </div>
                    <div class=\"tile-content-wrapper\">
                        <div class=\"chart-alt-10 easyPieChart\" data-percent=\"";
        // line 62
        echo twig_escape_filter($this->env, ((isset($context["totalPrices"]) ? $context["totalPrices"] : $this->getContext($context, "totalPrices")) / twig_length_filter($this->env, $this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "ligne", array()))), "html", null, true);
        echo "\" style=\"width: 100px; height: 100px; line-height: 100px;\"><span>42</span>%<canvas width=\"100\" height=\"100\"></canvas></div>
                    </div>
                </a>
            </div>

        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <form action=\"";
        // line 72
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
                                <th>Etat d'affectation</th>
                                <th>Cloturee</th>

                                <th>Etapes</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 109
            echo "                                <tr>
                                    <td ><input type=\"checkbox\" name=\"users[]\" value=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "produit", array()), "customer", array()), "id", array()), "html", null, true);
            echo "\"></td>
                                    <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "commande", array()), "numBc", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "produit", array()), "titre", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-warning\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "montantHt", array()), "html", null, true);
            echo "  </td>
                                    <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "commande", array()), "customer", array()), "client", array()), "html", null, true);
            echo "</td>
                                    <td><div class=\"row demo-margin\">
                                            <div class=\"col-md-3\">
                                                <div class=\"text-center font-gray-dark pad5B text-transform-upr font-size-11\">Affectation</div>
                                                <div class=\"chart-alt-2 easyPieChart\" data-percent=\"";
            // line 118
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
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('config_extension')->countFin($this->getAttribute($this->getAttribute($context["entity"], "produit", array()), "idWorkflow", array()), $this->getAttribute($context["entity"], "id", array())), "html", null, true);
            echo "\" data-bar-color=\"#2980b9\" style=\"width: 50px; height: 50px; line-height: 50px;\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('config_extension')->countFin($this->getAttribute($this->getAttribute($context["entity"], "produit", array()), "idWorkflow", array()), $this->getAttribute($context["entity"], "id", array())), "html", null, true);
            echo "</span>%<canvas width=\"50\" height=\"50\"></canvas></div>
                                        </div> </td>

                                    <td><a class=\"btn btn-link\" href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boncommandeligne_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Etapes</a></td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"panel panel-warning hidden-print\">
            <div class=\"panel-heading\"><h2>Action :</h2></div>



            ";
        // line 145
        echo "            <span class=\"text-success\"><h3>Affectaion : </h3></span>

            <label class=\"btn btn-default\"><input type=\"checkbox\" name=\"checkbox_production\" id=\"PRODUCTION\"  style=\"vertical-align: top;\" disabled=\"disabled\" >Production</label>
            </br>
            </br>
            </br>
            <span class=\"text-success\"><h3><i class=\"fa fa-briefcase\"></i>Collaborateur :</h3></span>


            <div   id=\"autoUpdate5\"  style=\"display: none\">
                <p>Service : <span class=\"text-success\">Production</span></p>
                ";
        // line 156
        if (array_key_exists("production", $context)) {
            // line 157
            echo "                    <input type=\"hidden\" name=\"count_production\" value=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["production"]) ? $context["production"] : $this->getContext($context, "production"))), "html", null, true);
            echo "\">
                    ";
            // line 158
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
                // line 159
                echo "
                        <div class=\"one_element\">
                            <div class=\"rs_one_title\">
                                <label class=\"btn btn-default\"><input type=\"checkbox\" name=\"checkbox_utilisateur_prod";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" id=\"PRODUCTION\" style=\"vertical-align: top;\"   > ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "fullName", array()), "html", null, true);
                echo "</label>


                            </div>
                            <input type=\"hidden\" name=\"utilisateur_prod";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entit"], "id", array()), "html", null, true);
                echo "\">
                            <div class=\"one_element_footer\">

                                <textarea style=\"display: block; margin: 0px 125px 0px 0px; width: 564px; height: 60px;\" name=\"cmt_prod";
                // line 169
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
            // line 174
            echo "
                ";
        }
        // line 176
        echo "
            </div>
            <hr>
            <center>
                <input type=\"submit\" name=\"valider\" value=\"Valider les affectations\" class=\"btn btn-success btn-gradient\" disabled=\"disabled\">
            </center>

        </div>

    </form>
    <script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 188
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
        return "ProductionBundle:BonCommande:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 188,  381 => 187,  377 => 186,  365 => 176,  361 => 174,  342 => 169,  334 => 166,  325 => 162,  320 => 159,  303 => 158,  298 => 157,  296 => 156,  283 => 145,  269 => 132,  259 => 128,  251 => 125,  239 => 118,  232 => 114,  228 => 113,  224 => 112,  220 => 111,  214 => 110,  211 => 109,  207 => 108,  168 => 72,  155 => 62,  149 => 58,  142 => 56,  139 => 55,  134 => 54,  132 => 53,  122 => 46,  115 => 41,  108 => 39,  105 => 38,  100 => 37,  98 => 36,  78 => 24,  62 => 17,  50 => 13,  45 => 10,  39 => 5,  36 => 3,  11 => 1,);
    }
}

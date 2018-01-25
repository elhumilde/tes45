<?php

/* ProductionBundle:Default:index.html.twig */
class __TwigTemplate_a6ee87b109ae2b53879c821f036c8324f9f9675d07cec41836bece0bdcbcea89 extends Twig_Template
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
        // line 4
        echo "<div id=\"page-title\">
        <h2>Accueil</h2>
        <p>Bienvenu dans le backoffice EDICOM</p>

    </div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("affectation");
        echo "\" title=\"Example tile shortcut\" class=\"tile-box tile-box-shortcut btn-danger\">
                        <span class=\"bs-badge badge-absolute\">1</span>
                        <div class=\"tile-header\">
                            Liste Produit
                        </div>
                        <div class=\"tile-content-wrapper\">
                            <i class=\"glyph-icon icon-file-photo-o\"></i>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-3\">
                    <a href=\"#\" title=\"Example tile shortcut\" class=\"tile-box tile-box-shortcut btn-success\">
                        <div class=\"tile-header\">
                            Site connect
                        </div>
                        <div class=\"tile-content-wrapper\">
                            <i class=\"glyph-icon icon-desktop\"></i>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-3\">
                    <a href=\"#\" title=\"Example tile shortcut\" class=\"tile-box tile-box-shortcut btn-info\">
                        <span class=\"bs-badge badge-absolute\">2</span>
                        <div class=\"tile-header\">
                            Modul Logo
                        </div>
                        <div class=\"tile-content-wrapper\">
                            <i class=\"glyph-icon icon-download\"></i>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-3\">
                    <a href=\"#\" title=\"Example tile shortcut\" class=\"tile-box tile-box-shortcut btn-warning\">
                        <div class=\"tile-header\">
                            Site vitrine PVI
                        </div>
                        <div class=\"tile-content-wrapper\">
                            <i class=\"glyph-icon icon-code-fork\"></i>
                        </div>
                    </a>
                </div>
            </div>
            </div>
            </div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"row\">

        </div>
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "ProductionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  39 => 4,  36 => 3,  11 => 1,);
    }
}

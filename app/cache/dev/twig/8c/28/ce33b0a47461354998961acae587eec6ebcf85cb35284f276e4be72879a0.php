<?php

/* ::base.html.twig */
class __TwigTemplate_8c28ce33b0a47461354998961acae587eec6ebcf85cb35284f276e4be72879a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "    <style>
        #loading .svg-icon-loader {position: absolute;top: 50%;left: 50%;margin: -50px 0 0 -50px;}
    </style>


    <meta charset=\"UTF-8\">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <!-- Favicons -->

    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/icons/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\" >
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/images/icons/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/icons/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/icons/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/icons/favicon.png"), "html", null, true);
        echo "\">



    <!-- HELPERS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/boilerplate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/border-radius.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/grid.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/page-transitions.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/spacing.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/typography.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/utils.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/colors.css"), "html", null, true);
        echo "\">

    <!-- MATERIAL -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/material/ripple.css"), "html", null, true);
        echo "\">

    <!-- ELEMENTS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/badges.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/buttons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/content-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/dashboard-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/forms.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/images.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/info-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/invoice.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/loading-indicators.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/menus.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/panel-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/response-messages.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/responsive-tables.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/ribbon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/social-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/tables.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/tile-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/timeline.css"), "html", null, true);
        echo "\">

    <!-- ICONS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/icons/fontawesome/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/icons/linecons/linecons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/icons/spinnericon/spinnericon.css"), "html", null, true);
        echo "\">


    <!-- WIDGETS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/accordion-ui/accordion.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/calendar/calendar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/carousel/carousel.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/justgage/justgage.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/morris/morris.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/piegage/piegage.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/xcharts/xcharts.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/chosen/chosen.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/colorpicker/colorpicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datepicker/datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datepicker-ui/datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/dialog/dialog.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/dropdown/dropdown.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/dropzone/dropzone.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/file-input/fileinput.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/input-switch/inputswitch.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/input-switch/inputswitch-alt.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/ionrangeslider/ionrangeslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/jcrop/jcrop.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/jgrowl-notifications/jgrowl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/loading-bar/loadingbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/maps/vector-maps/vectormaps.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/markdown/markdown.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/modal/modal.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/multi-select/multiselect.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/multi-upload/fileupload.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/nestable/nestable.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/noty-notifications/noty.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/popover/popover.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/pretty-photo/prettyphoto.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/progressbar/progressbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/range-slider/rangeslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/slidebars/slidebars.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/slider-ui/slider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/tabs-ui/tabs.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/timepicker/timepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/tocify/tocify.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/tooltip/tooltip.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/touchspin/touchspin.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/uniform/uniform.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/wizard/wizard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/xeditable/xeditable.css"), "html", null, true);
        echo "\">

    <!-- SNIPPETS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/chat.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/files-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/login-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/notification-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/progress-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/todo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/user-profile.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/mobile-navigation.css"), "html", null, true);
        echo "\">

    <!-- APPLICATIONS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/applications/mailbox.css"), "html", null, true);
        echo "\">

    <!-- Admin theme -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/themes/admin/layout.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/themes/admin/color-schemes/default.css"), "html", null, true);
        echo "\">

    <!-- Components theme -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/themes/components/default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/themes/components/border-radius.css"), "html", null, true);
        echo "\">

    <!-- Admin responsive -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/responsive-elements.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/admin-responsive.css"), "html", null, true);
        echo "\">

    <!-- JS Core -->

    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-core.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-ui-core.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-ui-widget.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-ui-mouse.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-ui-position.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/transition.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-cookie.js"), "html", null, true);
        echo "\"></script>





    <script type=\"text/javascript\">
        \$(window).load(function(){
            setTimeout(function() {
                \$('#loading').fadeOut( 400, \"linear\" );
            }, 300);
        });
    </script>



</head>


<body>
<div id=\"sb-site\">
    <div class=\"sb-slidebar bg-black sb-left sb-style-overlay\">
        <div class=\"scrollable-content scrollable-slim-sidebar\">
            <div class=\"pad10A\">
                <div class=\"divider-header\">Online</div>
                <ul class=\"chat-box\">
                    <li>
                        <div class=\"status-badge\">
                            <img class=\"img-circle\" width=\"40\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/people/testimonial1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"small-badge bg-green\"></div>
                        </div>
                        <b>
                            Grace Padilla
                        </b>
                        <p>On the other hand, we denounce...</p>
                        <a href=\"#\" class=\"btn btn-md no-border radius-all-100 btn-black\"><i class=\"glyph-icon icon-comments-o\"></i></a>
                    </li>
                    <li>
                        <div class=\"status-badge\">
                            <img class=\"img-circle\" width=\"40\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/people/testimonial2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"small-badge bg-green\"></div>
                        </div>
                        <b>
                            Carl Gamble
                        </b>
                        <p>Dislike men who are so beguiled...</p>
                        <a href=\"#\" class=\"btn btn-md no-border radius-all-100 btn-black\"><i class=\"glyph-icon icon-comments-o\"></i></a>
                    </li>
                    <li>
                        <div class=\"status-badge\">
                            <img class=\"img-circle\" width=\"40\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/people/testimonial3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"small-badge bg-green\"></div>
                        </div>
                        <b>
                            Michael Poole
                        </b>
                        <p>Of pleasure of the moment, so...</p>
                        <a href=\"#\" class=\"btn btn-md no-border radius-all-100 btn-black\"><i class=\"glyph-icon icon-comments-o\"></i></a>
                    </li>
                    <li>
                        <div class=\"status-badge\">
                            <img class=\"img-circle\" width=\"40\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/people/testimonial4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"small-badge bg-green\"></div>
                        </div>
                        <b>
                            Bill Green
                        </b>
                        <p>That they cannot foresee the...</p>
                        <a href=\"#\" class=\"btn btn-md no-border radius-all-100 btn-black\"><i class=\"glyph-icon icon-comments-o\"></i></a>
                    </li>
                    <li>
                        <div class=\"status-badge\">
                            <img class=\"img-circle\" width=\"40\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/people/testimonial5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"small-badge bg-green\"></div>
                        </div>
                        <b>
                            Cheryl Soucy
                        </b>
                        <p>Pain and trouble that are bound...</p>
                        <a href=\"#\" class=\"btn btn-md no-border radius-all-100 btn-black\"><i class=\"glyph-icon icon-comments-o\"></i></a>
                    </li>
                </ul>
                <div class=\"divider-header\">Idle</div>
                <ul class=\"chat-box\">
                    <li>
                        <div class=\"status-badge\">
                            <img class=\"img-circle\" width=\"40\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/people/testimonial6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"small-badge bg-orange\"></div>
                        </div>
                        <b>
                            Jose Kramer
                        </b>
                        <p>Equal blame belongs to those...</p>
                        <a href=\"#\" class=\"btn btn-md no-border radius-all-100 btn-black\"><i class=\"glyph-icon icon-comments-o\"></i></a>
                    </li>
                    <li>
                        <div class=\"status-badge\">
                            <img class=\"img-circle\" width=\"40\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/people/testimonial7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"small-badge bg-orange\"></div>
                        </div>
                        <b>
                            Dan Garcia
                        </b>
                        <p>Weakness of will, which is same...</p>
                        <a href=\"#\" class=\"btn btn-md no-border radius-all-100 btn-black\"><i class=\"glyph-icon icon-comments-o\"></i></a>
                    </li>
                    <li>
                        <div class=\"status-badge\">
                            <img class=\"img-circle\" width=\"40\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/people/testimonial8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"small-badge bg-orange\"></div>
                        </div>
                        <b>
                            Edward Bridges
                        </b>
                        <p>These cases are perfectly simple...</p>
                        <a href=\"#\" class=\"btn btn-md no-border radius-all-100 btn-black\"><i class=\"glyph-icon icon-comments-o\"></i></a>
                    </li>
                </ul>
                <div class=\"divider-header\">Offline</div>
                <ul class=\"chat-box\">
                    <li>
                        <div class=\"status-badge\">
                            <img class=\"img-circle\" width=\"40\" src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/people/testimonial1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"small-badge bg-red\"></div>
                        </div>
                        <b>
                            Randy Herod
                        </b>
                        <p>In a free hour, when our power...</p>
                        <a href=\"#\" class=\"btn btn-md no-border radius-all-100 btn-black\"><i class=\"glyph-icon icon-comments-o\"></i></a>
                    </li>
                    <li>
                        <div class=\"status-badge\">
                            <img class=\"img-circle\" width=\"40\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/people/testimonial2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"small-badge bg-red\"></div>
                        </div>
                        <b>
                            Patricia Bagley
                        </b>
                        <p>when nothing prevents our being...</p>
                        <a href=\"#\" class=\"btn btn-md no-border radius-all-100 btn-black\"><i class=\"glyph-icon icon-comments-o\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"sb-slidebar bg-black sb-right sb-style-overlay\">
        <div class=\"scrollable-content scrollable-slim-sidebar\">
            <div class=\"pad15A\">
                <a href=\"#\" title=\"\" data-toggle=\"collapse\" data-target=\"#sidebar-toggle-1\" class=\"popover-title\">
                    Cloud status
                    <span class=\"caret\"></span>
                </a>
                <div id=\"sidebar-toggle-1\" class=\"collapse in\">
                    <div class=\"pad15A\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"text-center font-gray pad5B text-transform-upr font-size-12\">New visits</div>
                                <div class=\"chart-alt-3 font-gray-dark\" data-percent=\"55\"><span>55</span>%</div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"text-center font-gray pad5B text-transform-upr font-size-12\">Bounce rate</div>
                                <div class=\"chart-alt-3 font-gray-dark\" data-percent=\"46\"><span>46</span>%</div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"text-center font-gray pad5B text-transform-upr font-size-12\">Server load</div>
                                <div class=\"chart-alt-3 font-gray-dark\" data-percent=\"92\"><span>92</span>%</div>
                            </div>
                        </div>
                        <div class=\"divider mrg15T mrg15B\"></div>
                        <div class=\"text-center\">
                            <a href=\"#\" class=\"btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart\">
                                <i class=\"glyph-icon icon-refresh\"></i>
                                Update charts
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"clear\"></div>

                <a href=\"#\" title=\"\" data-toggle=\"collapse\" data-target=\"#sidebar-toggle-6\" class=\"popover-title\">
                    Latest transfers
                    <span class=\"caret\"></span>
                </a>
                <div id=\"sidebar-toggle-6\" class=\"collapse in\">

                    <ul class=\"files-box\">
                        <li>
                            <i class=\"files-icon glyph-icon font-red icon-file-archive-o\"></i>
                            <div class=\"files-content\">
                                <b>blog_export.zip</b>
                                <div class=\"files-date\">
                                    <i class=\"glyph-icon icon-clock-o\"></i>
                                    added on <b>22.10.2014</b>
                                </div>
                            </div>
                            <div class=\"files-buttons\">
                                <a href=\"#\" class=\"btn btn-xs hover-info tooltip-button\" data-placement=\"left\" title=\"Download\">
                                    <i class=\"glyph-icon icon-cloud-download\"></i>
                                </a>
                                <a href=\"#\" class=\"btn btn-xs hover-danger tooltip-button\" data-placement=\"left\" title=\"Delete\">
                                    <i class=\"glyph-icon icon-times\"></i>
                                </a>
                            </div>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <i class=\"files-icon glyph-icon icon-file-code-o\"></i>
                            <div class=\"files-content\">
                                <b>homepage-test.html</b>
                                <div class=\"files-date\">
                                    <i class=\"glyph-icon icon-clock-o\"></i>
                                    added  <b>19.10.2014</b>
                                </div>
                            </div>
                            <div class=\"files-buttons\">
                                <a href=\"#\" class=\"btn btn-xs hover-info tooltip-button\" data-placement=\"left\" title=\"Download\">
                                    <i class=\"glyph-icon icon-cloud-download\"></i>
                                </a>
                                <a href=\"#\" class=\"btn btn-xs hover-danger tooltip-button\" data-placement=\"left\" title=\"Delete\">
                                    <i class=\"glyph-icon icon-times\"></i>
                                </a>
                            </div>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <i class=\"files-icon glyph-icon font-yellow icon-file-image-o\"></i>
                            <div class=\"files-content\">
                                <b>monthlyReport.jpg</b>
                                <div class=\"files-date\">
                                    <i class=\"glyph-icon icon-clock-o\"></i>
                                    added on <b>10.9.2014</b>
                                </div>
                            </div>
                            <div class=\"files-buttons\">
                                <a href=\"#\" class=\"btn btn-xs hover-info tooltip-button\" data-placement=\"left\" title=\"Download\">
                                    <i class=\"glyph-icon icon-cloud-download\"></i>
                                </a>
                                <a href=\"#\" class=\"btn btn-xs hover-danger tooltip-button\" data-placement=\"left\" title=\"Delete\">
                                    <i class=\"glyph-icon icon-times\"></i>
                                </a>
                            </div>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <i class=\"files-icon glyph-icon font-green icon-file-word-o\"></i>
                            <div class=\"files-content\">
                                <b>new_presentation.doc</b>
                                <div class=\"files-date\">
                                    <i class=\"glyph-icon icon-clock-o\"></i>
                                    added on <b>5.9.2014</b>
                                </div>
                            </div>
                            <div class=\"files-buttons\">
                                <a href=\"#\" class=\"btn btn-xs hover-info tooltip-button\" data-placement=\"left\" title=\"Download\">
                                    <i class=\"glyph-icon icon-cloud-download\"></i>
                                </a>
                                <a href=\"#\" class=\"btn btn-xs hover-danger tooltip-button\" data-placement=\"left\" title=\"Delete\">
                                    <i class=\"glyph-icon icon-times\"></i>
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>

                <div class=\"clear\"></div>

                <a href=\"#\" title=\"\" data-toggle=\"collapse\" data-target=\"#sidebar-toggle-3\" class=\"popover-title\">
                    Tasks for today
                    <span class=\"caret\"></span>
                </a>
                <div id=\"sidebar-toggle-3\" class=\"collapse in\">

                    <ul class=\"progress-box\">
                        <li>
                            <div class=\"progress-title\">
                                New features development
                                <b>87%</b>
                            </div>
                            <div class=\"progressbar-smaller progressbar\" data-value=\"87\">
                                <div class=\"progressbar-value bg-azure\">
                                    <div class=\"progressbar-overlay\"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress-title\">
                                Finishing uploading files
                                <b>66%</b>
                            </div>
                            <div class=\"progressbar-smaller progressbar\" data-value=\"66\">
                                <div class=\"progressbar-value bg-red\">
                                    <div class=\"progressbar-overlay\"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress-title\">
                                Creating tutorials
                                <b>58%</b>
                            </div>
                            <div class=\"progressbar-smaller progressbar\" data-value=\"58\">
                                <div class=\"progressbar-value bg-blue-alt\"></div>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress-title\">
                                Frontend bonus theme
                                <b>74%</b>
                            </div>
                            <div class=\"progressbar-smaller progressbar\" data-value=\"74\">
                                <div class=\"progressbar-value bg-purple\"></div>
                            </div>
                        </li>
                    </ul>

                </div>

                <div class=\"clear\"></div>

                <a href=\"#\" title=\"\" data-toggle=\"collapse\" data-target=\"#sidebar-toggle-4\" class=\"popover-title\">
                    Pending notifications
                    <span class=\"bs-label bg-orange tooltip-button\" title=\"Label example\">New</span>
                    <span class=\"caret\"></span>
                </a>
                <div id=\"sidebar-toggle-4\" class=\"collapse in\">
                    <ul class=\"notifications-box notifications-box-alt\">
                        <li>
                            <span class=\"bg-purple icon-notification glyph-icon icon-users\"></span>
                            <span class=\"notification-text\">This is an error notification</span>
                            <div class=\"notification-time\">
                                a few seconds ago
                                <span class=\"glyph-icon icon-clock-o\"></span>
                            </div>
                            <a href=\"#\" class=\"notification-btn btn btn-xs btn-black tooltip-button\" data-placement=\"left\" title=\"View details\">
                                <i class=\"glyph-icon icon-arrow-right\"></i>
                            </a>
                        </li>
                        <li>
                            <span class=\"bg-warning icon-notification glyph-icon icon-ticket\"></span>
                            <span class=\"notification-text\">This is a warning notification</span>
                            <div class=\"notification-time\">
                                <b>15</b> minutes ago
                                <span class=\"glyph-icon icon-clock-o\"></span>
                            </div>
                            <a href=\"#\" class=\"notification-btn btn btn-xs btn-black tooltip-button\" data-placement=\"left\" title=\"View details\">
                                <i class=\"glyph-icon icon-arrow-right\"></i>
                            </a>
                        </li>
                        <li>
                            <span class=\"bg-green icon-notification glyph-icon icon-random\"></span>
                            <span class=\"notification-text font-green\">A success message example.</span>
                            <div class=\"notification-time\">
                                <b>2 hours</b> ago
                                <span class=\"glyph-icon icon-clock-o\"></span>
                            </div>
                            <a href=\"#\" class=\"notification-btn btn btn-xs btn-black tooltip-button\" data-placement=\"left\" title=\"View details\">
                                <i class=\"glyph-icon icon-arrow-right\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id=\"loading\">
        <div class=\"svg-icon-loader\">
            <img src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/svg-loaders/bars.svg"), "html", null, true);
        echo "\" width=\"40\" alt=\"\">
        </div>
    </div>

    <div id=\"page-wrapper\">
        <div id=\"mobile-navigation\">
            <button id=\"nav-toggle\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#page-sidebar\"><span></span></button>
        </div>
        <div id=\"page-sidebar\">
            <div id=\"header-logo\" class=\"logo-bg\">
                <a href=\"";
        // line 540
        echo $this->env->getExtension('routing')->getPath("production_homepage");
        echo "\" class=\"logo-content-big\" title=\"EDIPROD\">
                    EDIPROD <i>UI</i>
                    <span>EDIPROD Back-office</span>
                </a>
                <a href=\"";
        // line 544
        echo $this->env->getExtension('routing')->getPath("production_homepage");
        echo "\" class=\"logo-content-small\" title=\"EDIPROD\">
                    EDIPROD <i>UI</i>
                    <span>EDIPROD</span>
                </a>
                <a id=\"close-sidebar\" href=\"#\" title=\"Close sidebar\">
                    <i class=\"glyph-icon icon-outdent\"></i>
                </a>
            </div>
            <div class=\"scroll-sidebar\">
                <ul id=\"sidebar-menu\">
                    ";
        // line 554
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 555
            echo "                    <li class=\"header\"><span>Administration</span></li>
                    <li>
                        <a href=\"";
            // line 557
            echo $this->env->getExtension('routing')->getPath("production_homepage_test");
            echo "\" title=\"Admin Dashboard\">
                            <i class=\"glyph-icon icon-linecons-tv\"></i>
                            <span>Admin</span>
                        </a>
                        <div class=\"sidebar-submenu\">

                            <ul>
                                <li><a href=\"";
            // line 564
            echo $this->env->getExtension('routing')->getPath("workflow_new");
            echo "\" title=\"Workflow\"><span>Workflow</span></a></li>
                                <li><a href=\"";
            // line 565
            echo $this->env->getExtension('routing')->getPath("workflowetape_new");
            echo "\" title=\"Etape Workflow \"><span>Etape Workflow </span></a></li>
                                <li><a href=\"";
            // line 566
            echo $this->env->getExtension('routing')->getPath("produit_new");
            echo "\" title=\"Produit\"><span>Produit</span></a></li>
                                <li><a href=\"";
            // line 567
            echo $this->env->getExtension('routing')->getPath("vendeur_new");
            echo "\" title=\"Vendeur\"><span>Vendeur </span></a></li>


                            </ul>

                        </div><!-- .sidebar-submenu -->
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\" title=\"Charts\">
                            <i class=\"glyph-icon icon-linecons-paper-plane\"></i>
                            <span>Commandes</span>
                        </a>
                        <div class=\"sidebar-submenu\">

                            <ul>
                                <li> <a href=\"";
            // line 582
            echo $this->env->getExtension('routing')->getPath("commande_wc");
            echo "\" title=\"Liste bon command\"><span>Liste bon commande  <strong>wc</strong></span></a></li>
                                <li> <a href=\"";
            // line 583
            echo $this->env->getExtension('routing')->getPath("commande");
            echo "\" title=\"Liste bon command\"><span>Liste bon commande validée </span></a> </li>
                                <li> <a href=\"";
            // line 584
            echo $this->env->getExtension('routing')->getPath("boncommandeligne");
            echo "\" title=\"Liste Ligne commande\"><span>Liste Ligne commande </span></a> </li>
                                <li> <a href=\"";
            // line 585
            echo $this->env->getExtension('routing')->getPath("clients");
            echo "\"  title=\"Liste Client\"><span>Liste Client </span> </a> </li>

                            </ul>

                        </div><!-- .sidebar-submenu -->
                    </li>
                    ";
        }
        // line 613
        echo "

                </ul><!-- #sidebar-menu -->
            </div>
        </div>
        <div id=\"page-content-wrapper\">
            <div id=\"page-content\">
                <div id=\"page-header\">
                    <div id=\"header-nav-left\">
                        <a class=\"header-btn\" id=\"logout-btn\" href=\"#\" title=\"Lockscreen page example\">
                            <i class=\"glyph-icon icon-linecons-lock\"></i>
                        </a>
                        <div class=\"user-account-btn dropdown\">
                            <a href=\"#\" title=\"My Account\" class=\"user-profile clearfix\" data-toggle=\"dropdown\">
                                <img width=\"28\" src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/gravatar.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\">
                                <span>";
        // line 628
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                                <i class=\"glyph-icon icon-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu float-right\">
                                <div class=\"box-sm\">
                                    <div class=\"login-box clearfix\">
                                        <div class=\"user-img\">
                                            <a href=\"#\" title=\"\" class=\"change-img\">Change photo</a>
                                            <img src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image-resources/gravatar.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"user-info\">
                            <span>
                                ";
        // line 640
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                <i>UX/UI developer</i>
                            </span>
                                            <a href=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_profile_edit", array("name" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))), "html", null, true);
        echo "\" title=\"Edit profile\">Afficher mon profil</a>

                                        </div>
                                    </div>
                                    <div class=\"divider\"></div>

                                    <div class=\"button-pane button-pane-alt pad5L pad5R text-center\">
                                        <a href=\"";
        // line 650
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-flat display-block font-normal btn-danger\">
                                            <i class=\"glyph-icon icon-power-off\"></i>
                                            Déconnexion
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- #header-nav-left -->

                    <div id=\"header-nav-right\">
                        <a href=\"#\" class=\"hdr-btn popover-button\" title=\"Search\" data-placement=\"bottom\" data-id=\"#popover-search\">
                            <i class=\"glyph-icon icon-search\"></i>
                        </a>
                        <div class=\"hide\" id=\"popover-search\">
                            <div class=\"pad5A box-md\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search terms here ...\">
                    <span class=\"input-group-btn\">
                        <a class=\"btn btn-primary\" href=\"#\">Search</a>
                    </span>
                                </div>
                            </div>
                        </div>

                        <a href=\"#\" class=\"hdr-btn\" id=\"fullscreen-btn\" title=\"Fullscreen\">
                            <i class=\"glyph-icon icon-arrows-alt\"></i>
                        </a>

                        <div class=\"dropdown\" id=\"progress-btn\">
                            <a data-toggle=\"dropdown\" href=\"#\" title=\"\">
                                <span class=\"small-badge bg-azure\"></span>
                                <i class=\"glyph-icon icon-linecons-params\"></i>
                            </a>
                            <div class=\"dropdown-menu pad0A box-sm float-left\" id=\"progress-dropdown\">
                                <div class=\"scrollable-content scrollable-slim-box\">
                                    <ul class=\"no-border progress-box progress-box-links\">
                                        <li>
                                            <a href=\"#\" title=\"\">
                                                <div class=\"progress-title\">
                                                    Finishing uploading files
                                                    <b>23%</b>
                                                </div>
                                                <div class=\"progressbar-smaller progressbar\" data-value=\"23\">
                                                    <div class=\"progressbar-value bg-blue-alt\">
                                                        <div class=\"progressbar-overlay\"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" title=\"\">
                                                <div class=\"progress-title\">
                                                    Roadmap progress
                                                    <b>91%</b>
                                                </div>
                                                <div class=\"progressbar-smaller progressbar\" data-value=\"91\">
                                                    <div class=\"progressbar-value bg-red\">
                                                        <div class=\"progressbar-overlay\"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" title=\"\">
                                                <div class=\"progress-title\">
                                                    Images upload
                                                    <b>58%</b>
                                                </div>
                                                <div class=\"progressbar-smaller progressbar\" data-value=\"58\">
                                                    <div class=\"progressbar-value bg-green\"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" title=\"\">
                                                <div class=\"progress-title\">
                                                    WordPress migration
                                                    <b>74%</b>
                                                </div>
                                                <div class=\"progressbar-smaller progressbar\" data-value=\"74\">
                                                    <div class=\"progressbar-value bg-purple\"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" title=\"\">
                                                <div class=\"progress-title\">
                                                    Agile development procedures
                                                    <b>91%</b>
                                                </div>
                                                <div class=\"progressbar-smaller progressbar\" data-value=\"91\">
                                                    <div class=\"progressbar-value bg-black\">
                                                        <div class=\"progressbar-overlay\"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" title=\"\">
                                                <div class=\"progress-title\">
                                                    Systems integration
                                                    <b>58%</b>
                                                </div>
                                                <div class=\"progressbar-smaller progressbar\" data-value=\"58\">
                                                    <div class=\"progressbar-value bg-azure\"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" title=\"\">
                                                <div class=\"progress-title\">
                                                    Code optimizations
                                                    <b>97%</b>
                                                </div>
                                                <div class=\"progressbar-smaller progressbar\" data-value=\"97\">
                                                    <div class=\"progressbar-value bg-yellow\"></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"button-pane button-pane-alt pad5A text-center\">
                                    <a href=\"#\" class=\"btn btn-flat display-block font-normal hover-green\" title=\"View all notifications\">
                                        View all notifications
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div><!-- #header-nav-right -->

                </div>




                <!-- Skycons -->

                <script type=\"text/javascript\" src=\"";
        // line 790
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/skycons/skycons.js"), "html", null, true);
        echo "\"></script>

                <!-- Data tables -->

                <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 794
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.css"), "html", null, true);
        echo "\">-->
                <script type=\"text/javascript\" src=\"";
        // line 795
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 796
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-bootstrap.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 797
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-tabletools.js"), "html", null, true);
        echo "\"></script>

                <script type=\"text/javascript\">

                    /* Datatables basic */

                    \$(document).ready(function() {
                        \$('#datatable-example').dataTable();
                    });

                    /* Datatables hide columns */

                    \$(document).ready(function() {
                        var table = \$('#datatable-hide-columns').DataTable( {
                            \"scrollY\": \"300px\",
                            \"paging\": false
                        } );

                        \$('#datatable-hide-columns_filter').hide();

                        \$('a.toggle-vis').on( 'click', function (e) {
                            e.preventDefault();

                            // Get the column API object
                            var column = table.column( \$(this).attr('data-column') );

                            // Toggle the visibility
                            column.visible( ! column.visible() );
                        } );
                    } );

                    /* Datatable row highlight */

                    \$(document).ready(function() {
                        var table = \$('#datatable-row-highlight').DataTable();

                        \$('#datatable-row-highlight tbody').on( 'click', 'tr', function () {
                            \$(this).toggleClass('tr-selected');
                        } );
                    });



                    \$(document).ready(function() {
                        \$('.dataTables_filter input').attr(\"placeholder\", \"Search...\");
                    });

                </script>

                <!-- Chart.js -->

                <script type=\"text/javascript\" src=\"";
        // line 848
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/chart-js/chart-core.js"), "html", null, true);
        echo "\"></script>

                <script type=\"text/javascript\" src=\"";
        // line 850
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/chart-js/chart-doughnut.js"), "html", null, true);
        echo "\"></script>

                <!-- Flot charts -->


                <!-- Sparklines charts -->

                <script type=\"text/javascript\" src=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/sparklines/sparklines.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/sparklines/sparklines-demo.js"), "html", null, true);
        echo "\"></script>

                <!-- Owl carousel -->

                <link  rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 862
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/owlcarousel/owlcarousel.css"), "html", null, true);
        echo "\">
                <script type=\"text/javascript\" src=\"";
        // line 863
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/owlcarousel/owlcarousel.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 864
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/owlcarousel/owlcarousel-demo.js"), "html", null, true);
        echo "\"></script>



                ";
        // line 868
        $this->displayBlock('body', $context, $blocks);
        // line 869
        echo "




            </div>
        </div>
    </div>


    <!-- WIDGETS -->

    <!-- Bootstrap Dropdown -->

    <script type=\"text/javascript\" src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/dropdown/dropdown.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Tooltip -->

    <script type=\"text/javascript\" src=\"";
        // line 887
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/tooltip/tooltip.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Popover -->

    <script type=\"text/javascript\" src=\"";
        // line 891
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/popover/popover.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Progress Bar -->

    <script type=\"text/javascript\" src=\"";
        // line 895
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/progressbar/progressbar.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Buttons -->

    <script type=\"text/javascript\" src=\"";
        // line 899
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/button/button.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Collapse -->

    <script type=\"text/javascript\" src=\"";
        // line 903
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/collapse/collapse.js"), "html", null, true);
        echo "\"></script>

    <!-- Superclick -->

    <script type=\"text/javascript\" src=\"";
        // line 907
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/superclick/superclick.js"), "html", null, true);
        echo "\"></script>

    <!-- Input switch alternate -->

    <script type=\"text/javascript\" src=\"";
        // line 911
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/input-switch/inputswitch-alt.js"), "html", null, true);
        echo "\"></script>

    <!-- Slim scroll -->

    <script type=\"text/javascript\" src=\"";
        // line 915
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/slimscroll/slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- Slidebars -->

    <script type=\"text/javascript\" src=\"";
        // line 919
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/slidebars/slidebars.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 920
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/slidebars/slidebars-demo.js"), "html", null, true);
        echo "\"></script>

    <!-- PieGage -->

    <script type=\"text/javascript\" src=\"";
        // line 924
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/piegage/piegage.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 925
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/piegage/piegage-demo.js"), "html", null, true);
        echo "\"></script>

    <!-- Screenfull -->

    <script type=\"text/javascript\" src=\"";
        // line 929
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/screenfull/screenfull.js"), "html", null, true);
        echo "\"></script>

    <!-- Content box -->

    <script type=\"text/javascript\" src=\"";
        // line 933
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/content-box/contentbox.js"), "html", null, true);
        echo "\"></script>

    <!-- Material -->

    <script type=\"text/javascript\" src=\"";
        // line 937
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/material/material.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 938
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/material/ripples.js"), "html", null, true);
        echo "\"></script>

    <!-- Overlay -->

    <script type=\"text/javascript\" src=\"";
        // line 942
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/overlay/overlay.js"), "html", null, true);
        echo "\"></script>

    <!-- Widgets init for demo -->

    <script type=\"text/javascript\" src=\"";
        // line 946
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-init/widgets-init.js"), "html", null, true);
        echo "\"></script>

    <!-- Theme layout -->

    <script type=\"text/javascript\" src=\"";
        // line 950
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/themes/admin/layout.js"), "html", null, true);
        echo "\"></script>

</div>


";
        // line 955
        $this->displayBlock('javascripts', $context, $blocks);
        // line 956
        echo "</body>
</html>";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "EDICOM PRODUCTION !";
    }

    // line 868
    public function block_body($context, array $blocks = array())
    {
    }

    // line 955
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1487 => 955,  1482 => 868,  1476 => 13,  1471 => 4,  1466 => 956,  1464 => 955,  1456 => 950,  1449 => 946,  1442 => 942,  1435 => 938,  1431 => 937,  1424 => 933,  1417 => 929,  1410 => 925,  1406 => 924,  1399 => 920,  1395 => 919,  1388 => 915,  1381 => 911,  1374 => 907,  1367 => 903,  1360 => 899,  1353 => 895,  1346 => 891,  1339 => 887,  1332 => 883,  1316 => 869,  1314 => 868,  1307 => 864,  1303 => 863,  1299 => 862,  1292 => 858,  1288 => 857,  1278 => 850,  1273 => 848,  1219 => 797,  1215 => 796,  1211 => 795,  1207 => 794,  1200 => 790,  1057 => 650,  1047 => 643,  1041 => 640,  1034 => 636,  1023 => 628,  1019 => 627,  1003 => 613,  993 => 585,  989 => 584,  985 => 583,  981 => 582,  963 => 567,  959 => 566,  955 => 565,  951 => 564,  941 => 557,  937 => 555,  935 => 554,  922 => 544,  915 => 540,  902 => 530,  662 => 293,  648 => 282,  631 => 268,  617 => 257,  603 => 246,  586 => 232,  572 => 221,  558 => 210,  544 => 199,  530 => 188,  499 => 160,  495 => 159,  491 => 158,  487 => 157,  483 => 156,  479 => 155,  475 => 154,  471 => 153,  464 => 149,  460 => 148,  453 => 144,  449 => 143,  442 => 139,  438 => 138,  431 => 134,  424 => 130,  420 => 129,  416 => 128,  412 => 127,  408 => 126,  404 => 125,  400 => 124,  396 => 123,  389 => 119,  385 => 118,  381 => 117,  377 => 116,  373 => 115,  369 => 114,  365 => 113,  361 => 112,  357 => 111,  353 => 110,  349 => 109,  345 => 108,  341 => 107,  337 => 106,  333 => 105,  329 => 104,  325 => 103,  321 => 102,  317 => 101,  313 => 100,  309 => 99,  305 => 98,  301 => 97,  297 => 96,  293 => 95,  289 => 94,  285 => 93,  281 => 92,  277 => 91,  273 => 90,  269 => 89,  265 => 88,  261 => 87,  257 => 86,  253 => 85,  249 => 84,  245 => 83,  241 => 82,  236 => 80,  232 => 79,  228 => 78,  224 => 77,  219 => 75,  215 => 74,  211 => 73,  203 => 68,  199 => 67,  195 => 66,  188 => 62,  184 => 61,  180 => 60,  176 => 59,  172 => 58,  168 => 57,  164 => 56,  160 => 55,  156 => 54,  152 => 53,  148 => 52,  144 => 51,  140 => 50,  136 => 49,  132 => 48,  128 => 47,  124 => 46,  120 => 45,  113 => 41,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  65 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  40 => 13,  30 => 5,  28 => 4,  23 => 1,);
    }
}

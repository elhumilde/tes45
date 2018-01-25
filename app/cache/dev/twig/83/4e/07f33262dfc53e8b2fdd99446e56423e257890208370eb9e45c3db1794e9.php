<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_834e07f33262dfc53e8b2fdd99446e56423e257890208370eb9e45c3db1794e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <style>
        #loading .svg-icon-loader {position: absolute;top: 50%;left: 50%;margin: -50px 0 0 -50px;}
    </style>


    <meta charset=\"UTF-8\">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <!-- Favicons -->

    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/icons/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\" >
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/images/icons/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/icons/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/icons/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/icons/favicon.png"), "html", null, true);
        echo "\">



    <!-- HELPERS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/boilerplate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/border-radius.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/grid.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/page-transitions.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/spacing.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/typography.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/utils.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/colors.css"), "html", null, true);
        echo "\">

    <!-- MATERIAL -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/material/ripple.css"), "html", null, true);
        echo "\">

    <!-- ELEMENTS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/badges.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/buttons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/content-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/dashboard-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/forms.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/images.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/info-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/invoice.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/loading-indicators.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/menus.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/panel-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/response-messages.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/responsive-tables.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/ribbon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/social-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/tables.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/tile-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/elements/timeline.css"), "html", null, true);
        echo "\">

    <!-- ICONS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/icons/fontawesome/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/icons/linecons/linecons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/icons/spinnericon/spinnericon.css"), "html", null, true);
        echo "\">


    <!-- WIDGETS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/accordion-ui/accordion.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/calendar/calendar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/carousel/carousel.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/justgage/justgage.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/morris/morris.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/piegage/piegage.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/xcharts/xcharts.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/chosen/chosen.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/colorpicker/colorpicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datepicker/datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datepicker-ui/datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/dialog/dialog.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/dropdown/dropdown.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/dropzone/dropzone.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/file-input/fileinput.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/input-switch/inputswitch.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/input-switch/inputswitch-alt.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/ionrangeslider/ionrangeslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/jcrop/jcrop.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/jgrowl-notifications/jgrowl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/loading-bar/loadingbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/maps/vector-maps/vectormaps.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/markdown/markdown.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/modal/modal.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/multi-select/multiselect.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/multi-upload/fileupload.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/nestable/nestable.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/noty-notifications/noty.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/popover/popover.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/pretty-photo/prettyphoto.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/progressbar/progressbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/range-slider/rangeslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/slidebars/slidebars.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/slider-ui/slider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/tabs-ui/tabs.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/timepicker/timepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/tocify/tocify.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/tooltip/tooltip.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/touchspin/touchspin.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/uniform/uniform.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/wizard/wizard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/xeditable/xeditable.css"), "html", null, true);
        echo "\">

    <!-- SNIPPETS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/chat.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/files-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/login-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/notification-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/progress-box.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/todo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/user-profile.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/snippets/mobile-navigation.css"), "html", null, true);
        echo "\">

    <!-- APPLICATIONS -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/applications/mailbox.css"), "html", null, true);
        echo "\">

    <!-- Admin theme -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/themes/admin/layout.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/themes/admin/color-schemes/default.css"), "html", null, true);
        echo "\">

    <!-- Components theme -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/themes/components/default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/themes/components/border-radius.css"), "html", null, true);
        echo "\">

    <!-- Admin responsive -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/responsive-elements.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/helpers/admin-responsive.css"), "html", null, true);
        echo "\">

    <!-- JS Core -->

    <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-core.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-ui-core.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-ui-widget.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-ui-mouse.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/jquery-ui-position.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/transition.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js-core/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 159
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
<div id=\"loading\">
    <div class=\"svg-icon-loader\">
        <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/svg-loaders/bars.svg"), "html", null, true);
        echo "\" width=\"40\" alt=\"\">
    </div>
</div>

<style type=\"text/css\">

    html,body {
        height: 100%;
    }

</style>

<div class=\"center-vertical bg-black\">

    ";
        // line 190
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 191
            echo "        <div class=\"alert alert-danger fade in\">
            <strong><i class=\"icon-warning-sign\"></i> erreur : </strong> ";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 195
        echo "    <div class=\"center-content\">
        <form action=\"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" id=\"login-validation\" class=\"col-md-5 col-sm-5 col-xs-11 center-margin\" method=\"POST\">
            <h3 class=\"text-center pad25B font-gray font-size-23\">EDIPROD <span class=\"opacity-80\">V1.0</span></h3>
            <div id=\"login-form\" class=\"content-box\">
                <div class=\"content-box-wrapper pad20A\">

                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Email address:</label>
                        <div class=\"input-group input-group-lg\">
                            <span class=\"input-group-addon addon-inside bg-white font-primary\">
                                <i class=\"glyph-icon icon-envelope-o\"></i>
                            </span>
                            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\" name=\"_username\" value=\"";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required autofocus>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Password:</label>
                        <div class=\"input-group input-group-lg\">
                            <span class=\"input-group-addon addon-inside bg-white font-primary\">
                                <i class=\"glyph-icon icon-unlock-alt\"></i>
                            </span>
                            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" name=\"_password\" required>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"checkbox-primary col-md-6\" style=\"height: 20px;\">
                            <label>
                                <input type=\"checkbox\" id=\"loginCheckbox1\" class=\"custom-checkbox\" name=\"_remember_me\" value=\"on\">
                                Remember me
                            </label>
                        </div>
                        <div class=\"text-right col-md-6\">
                            <a href=\"#\" class=\"switch-button\" switch-target=\"#login-forgot\" switch-parent=\"#login-form\" title=\"Recover password\" >Mots de pass oublié ?</a>
                        </div>
                    </div>
                </div>
                <div class=\"button-pane\">
                    <button type=\"submit\" class=\"btn btn-block btn-primary\">Login</button>
                </div>
            </div>

            <div id=\"login-forgot\" class=\"content-box modal-content hide\">
                <div class=\"content-box-wrapper pad20A\">

                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Email address:</label>
                        <div class=\"input-group input-group-lg\">
                            <span class=\"input-group-addon addon-inside bg-white font-primary\">
                                <i class=\"glyph-icon icon-envelope-o\"></i>
                            </span>
                            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                        </div>
                    </div>
                </div>
                <div class=\"button-pane text-center\">
                    <button type=\"submit\" class=\"btn btn-md btn-primary\">Recover Password</button>
                    <a href=\"#\" class=\"btn btn-md btn-link switch-button\" switch-target=\"#login-form\" switch-parent=\"#login-forgot\" title=\"Cancel\">Cancel</a>
                </div>
            </div>

        </form>

    </div>
</div>

<!-- Data tables -->

<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.css"), "html", null, true);
        echo "\">-->
<script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/datatable/datatable-tabletools.js"), "html", null, true);
        echo "\"></script>



<!-- Chart.js -->

<script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/chart-js/chart-core.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/chart-js/chart-doughnut.js"), "html", null, true);
        echo "\"></script>

<!-- Flot charts -->


<!-- Sparklines charts -->

<script type=\"text/javascript\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/sparklines/sparklines.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/sparklines/sparklines-demo.js"), "html", null, true);
        echo "\"></script>

<!-- Owl carousel -->

<link  rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/owlcarousel/owlcarousel.css"), "html", null, true);
        echo "\">
<script type=\"text/javascript\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/owlcarousel/owlcarousel.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/owlcarousel/owlcarousel-demo.js"), "html", null, true);
        echo "\"></script>



<!-- WIDGETS -->

<!-- Bootstrap Dropdown -->

<script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/dropdown/dropdown.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Tooltip -->

<script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/tooltip/tooltip.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Popover -->

<script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/popover/popover.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Progress Bar -->

<script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/progressbar/progressbar.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Buttons -->

<script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/button/button.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Collapse -->

<script type=\"text/javascript\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/collapse/collapse.js"), "html", null, true);
        echo "\"></script>

<!-- Superclick -->

<script type=\"text/javascript\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/superclick/superclick.js"), "html", null, true);
        echo "\"></script>

<!-- Input switch alternate -->

<script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/input-switch/inputswitch-alt.js"), "html", null, true);
        echo "\"></script>

<!-- Slim scroll -->

<script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/slimscroll/slimscroll.js"), "html", null, true);
        echo "\"></script>

<!-- Slidebars -->

<script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/slidebars/slidebars.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/slidebars/slidebars-demo.js"), "html", null, true);
        echo "\"></script>

<!-- PieGage -->

<script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/piegage/piegage.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/charts/piegage/piegage-demo.js"), "html", null, true);
        echo "\"></script>

<!-- Screenfull -->

<script type=\"text/javascript\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/screenfull/screenfull.js"), "html", null, true);
        echo "\"></script>

<!-- Content box -->

<script type=\"text/javascript\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/content-box/contentbox.js"), "html", null, true);
        echo "\"></script>

<!-- Material -->

<script type=\"text/javascript\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/material/material.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/material/ripples.js"), "html", null, true);
        echo "\"></script>


<!-- Overlay -->

<script type=\"text/javascript\" src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/widgets/overlay/overlay.js"), "html", null, true);
        echo "\"></script>

<!-- Widgets init for demo -->



<!-- Theme layout -->

<script type=\"text/javascript\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/themes/admin/layout.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "EDICOM PRODUCTION !";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 12,  803 => 363,  792 => 355,  784 => 350,  780 => 349,  773 => 345,  766 => 341,  759 => 337,  755 => 336,  748 => 332,  744 => 331,  737 => 327,  730 => 323,  723 => 319,  716 => 315,  709 => 311,  702 => 307,  695 => 303,  688 => 299,  681 => 295,  670 => 287,  666 => 286,  662 => 285,  655 => 281,  651 => 280,  641 => 273,  636 => 271,  627 => 265,  623 => 264,  619 => 263,  615 => 262,  557 => 207,  543 => 196,  540 => 195,  534 => 192,  531 => 191,  529 => 190,  512 => 176,  492 => 159,  488 => 158,  484 => 157,  480 => 156,  476 => 155,  472 => 154,  468 => 153,  464 => 152,  457 => 148,  453 => 147,  446 => 143,  442 => 142,  435 => 138,  431 => 137,  424 => 133,  417 => 129,  413 => 128,  409 => 127,  405 => 126,  401 => 125,  397 => 124,  393 => 123,  389 => 122,  382 => 118,  378 => 117,  374 => 116,  370 => 115,  366 => 114,  362 => 113,  358 => 112,  354 => 111,  350 => 110,  346 => 109,  342 => 108,  338 => 107,  334 => 106,  330 => 105,  326 => 104,  322 => 103,  318 => 102,  314 => 101,  310 => 100,  306 => 99,  302 => 98,  298 => 97,  294 => 96,  290 => 95,  286 => 94,  282 => 93,  278 => 92,  274 => 91,  270 => 90,  266 => 89,  262 => 88,  258 => 87,  254 => 86,  250 => 85,  246 => 84,  242 => 83,  238 => 82,  234 => 81,  229 => 79,  225 => 78,  221 => 77,  217 => 76,  212 => 74,  208 => 73,  204 => 72,  196 => 67,  192 => 66,  188 => 65,  181 => 61,  177 => 60,  173 => 59,  169 => 58,  165 => 57,  161 => 56,  157 => 55,  153 => 54,  149 => 53,  145 => 52,  141 => 51,  137 => 50,  133 => 49,  129 => 48,  125 => 47,  121 => 46,  117 => 45,  113 => 44,  106 => 40,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  83 => 32,  79 => 31,  75 => 30,  71 => 29,  67 => 28,  58 => 22,  54 => 21,  50 => 20,  46 => 19,  42 => 18,  33 => 12,  20 => 1,);
    }
}

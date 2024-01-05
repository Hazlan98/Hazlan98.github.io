<!DOCTYPE html>
<!-- 
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.5.1
Author: Sunnyat A.
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0?ref=myorange
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        My Portfolio
    </title>
    <meta name="description" content="Marketing Dashboard">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="css/datagrid/datatables/datatables.bundle.css">
</head>
<!-- BEGIN Body -->

<body class="mod-bg-1 mod-nav-link ">
    <!-- DOC: script to save and load page settings -->
    <script>
        /**
         *	This script should be placed right after the body tag for fast execution 
         *	Note: the script is written in pure javascript and does not depend on thirdparty library
         **/
        'use strict';

        var classHolder = document.getElementsByTagName("BODY")[0],
            /** 
             * Load from localstorage
             **/
            themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) : {},
            themeURL = themeSettings.themeURL || '',
            themeOptions = themeSettings.themeOptions || '';
        /** 
         * Load theme options
         **/
        if (themeSettings.themeOptions) {
            classHolder.className = themeSettings.themeOptions;
            console.log("%c✔ Theme settings loaded", "color: #148f32");
        } else {
            console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
        }
        if (themeSettings.themeURL && !document.getElementById('mytheme')) {
            var cssfile = document.createElement('link');
            cssfile.id = 'mytheme';
            cssfile.rel = 'stylesheet';
            cssfile.href = themeURL;
            document.getElementsByTagName('head')[0].appendChild(cssfile);

        } else if (themeSettings.themeURL && document.getElementById('mytheme')) {
            document.getElementById('mytheme').href = themeSettings.themeURL;
        }
        /** 
         * Save to localstorage 
         **/
        var saveSettings = function() {
            themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item) {
                return /^(nav|header|footer|mod|display)-/i.test(item);
            }).join(' ');
            if (document.getElementById('mytheme')) {
                themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
            };
            localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
        }
        /** 
         * Reset settings
         **/
        var resetSettings = function() {
            localStorage.setItem("themeSettings", "");
        }
    </script>
    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-inner">
            <!-- BEGIN Left Aside -->
            <aside class="page-sidebar">
                <div class="page-logo">
                    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                        <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                        <span class="page-logo-text mr-1">Hazlan Portfolio</span>
                        <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                    </a>
                </div>
                <!-- BEGIN PRIMARY NAVIGATION -->
                <nav id="js-primary-nav" class="primary-nav" role="navigation">
                    <div class="nav-filter">
                        <div class="position-relative">
                            <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                            <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                <i class="fal fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="info-card">
                        <img src="img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Muhammad Hazlan Shah Bin Idris">
                        <div class="info-card-text">
                            <a href="#" class="d-flex align-items-center text-white">
                                <span class="text-truncate text-truncate-sm d-inline-block">
                                    Muhammad Hazlan Shah Bin Idris
                                </span>
                            </a>
                            <span class="d-inline-block text-truncate text-truncate-sm">Sungkai, Perak, Malaysia</span>
                        </div>
                        <img src="img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
                        <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                            <i class="fal fa-angle-down"></i>
                        </a>
                    </div>
                    <ul id="js-nav-menu" class="nav-menu">
                        <li class="active open">
                            <a href="#" title="Application Intel" data-filter-tags="application intel">
                                <i class="fal fa-info-circle"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">Application Intel</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="intel_analytics_dashboard.html" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard">
                                        <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Analytics Dashboard</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="intel_marketing_dashboard.html" title="Marketing Dashboard" data-filter-tags="application intel marketing dashboard">
                                        <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">Marketing Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="intel_introduction.html" title="Introduction" data-filter-tags="application intel introduction">
                                        <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Introduction</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="intel_privacy.html" title="Privacy" data-filter-tags="application intel privacy">
                                        <span class="nav-link-text" data-i18n="nav.application_intel_privacy">Privacy</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Theme Settings" data-filter-tags="theme settings">
                                <i class="fal fa-cog"></i>
                                <span class="nav-link-text" data-i18n="nav.theme_settings">Theme Settings</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="settings_how_it_works.html" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">How it works</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="settings_layout_options.html" title="Layout Options" data-filter-tags="theme settings layout options">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_layout_options">Layout Options</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="settings_theme_modes.html" title="Theme Modes (beta)" data-filter-tags="theme settings theme modes (beta)">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_theme_modes_(beta)">Theme Modes (beta)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="settings_skin_options.html" title="Skin Options" data-filter-tags="theme settings skin options">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_skin_options">Skin Options</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="settings_saving_db.html" title="Saving to Database" data-filter-tags="theme settings saving to database">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_saving_to_database">Saving to Database</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Documentation" data-filter-tags="documentation">
                                <i class="fal fa-book"></i>
                                <span class="nav-link-text" data-i18n="nav.documentation">Documentation</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="docs_general.html" title="General Docs" data-filter-tags="documentation general docs">
                                        <span class="nav-link-text" data-i18n="nav.documentation_general_docs">General Docs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs_project_structure.html" title="Project Structure" data-filter-tags="documentation project structure">
                                        <span class="nav-link-text" data-i18n="nav.documentation_project_structure">Project Structure</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs_flavors_editions.html" title="Flavors & Editions" data-filter-tags="documentation flavors & editions">
                                        <span class="nav-link-text" data-i18n="nav.documentation_flavors_&_editions">Flavors & Editions</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs_community_support.html" title="Community Support" data-filter-tags="documentation community support">
                                        <span class="nav-link-text" data-i18n="nav.documentation_community_support">Community Support</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs_premium_support.html" title="Premium Support" data-filter-tags="documentation premium support">
                                        <span class="nav-link-text" data-i18n="nav.documentation_premium_support">Premium Support</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs_licensing.html" title="Licensing" data-filter-tags="documentation licensing">
                                        <span class="nav-link-text" data-i18n="nav.documentation_licensing">Licensing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs_buildnotes.html" title="Build Notes" data-filter-tags="documentation build notes">
                                        <span class="nav-link-text" data-i18n="nav.documentation_build_notes">Build Notes</span>
                                        <span class="">v4.5.1</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-title">Tools & Components</li>
                        <li>
                            <a href="#" title="UI Components" data-filter-tags="ui components">
                                <i class="fal fa-window"></i>
                                <span class="nav-link-text" data-i18n="nav.ui_components">UI Components</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="ui_alerts.html" title="Alerts" data-filter-tags="ui components alerts">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_alerts">Alerts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_accordion.html" title="Accordions" data-filter-tags="ui components accordions">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_accordions">Accordions</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_badges.html" title="Badges" data-filter-tags="ui components badges">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_badges">Badges</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_breadcrumbs.html" title="Breadcrumbs" data-filter-tags="ui components breadcrumbs">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_breadcrumbs">Breadcrumbs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_buttons.html" title="Buttons" data-filter-tags="ui components buttons">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_buttons">Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_button_group.html" title="Button Group" data-filter-tags="ui components button group">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_button_group">Button Group</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_cards.html" title="Cards" data-filter-tags="ui components cards">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_cards">Cards</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_carousel.html" title="Carousel" data-filter-tags="ui components carousel">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_carousel">Carousel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_collapse.html" title="Collapse" data-filter-tags="ui components collapse">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_collapse">Collapse</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_dropdowns.html" title="Dropdowns" data-filter-tags="ui components dropdowns">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_dropdowns">Dropdowns</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_list_filter.html" title="List Filter" data-filter-tags="ui components list filter">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_list_filter">List Filter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_modal.html" title="Modal" data-filter-tags="ui components modal">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_modal">Modal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_navbars.html" title="Navbars" data-filter-tags="ui components navbars">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_navbars">Navbars</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_panels.html" title="Panels" data-filter-tags="ui components panels">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_panels">Panels</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_pagination.html" title="Pagination" data-filter-tags="ui components pagination">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_pagination">Pagination</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_popovers.html" title="Popovers" data-filter-tags="ui components popovers">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_popovers">Popovers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_progress_bars.html" title="Progress Bars" data-filter-tags="ui components progress bars">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_progress_bars">Progress Bars</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_scrollspy.html" title="ScrollSpy" data-filter-tags="ui components scrollspy">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_scrollspy">ScrollSpy</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_side_panel.html" title="Side Panel" data-filter-tags="ui components side panel">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_side_panel">Side Panel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_spinners.html" title="Spinners" data-filter-tags="ui components spinners">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_spinners">Spinners</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_tabs_pills.html" title="Tabs & Pills" data-filter-tags="ui components tabs & pills">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_tabs_&_pills">Tabs & Pills</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_toasts.html" title="Toasts" data-filter-tags="ui components toasts">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_toasts">Toasts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_tooltips.html" title="Tooltips" data-filter-tags="ui components tooltips">
                                        <span class="nav-link-text" data-i18n="nav.ui_components_tooltips">Tooltips</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Utilities" data-filter-tags="utilities">
                                <i class="fal fa-bolt"></i>
                                <span class="nav-link-text" data-i18n="nav.utilities">Utilities</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="utilities_borders.html" title="Borders" data-filter-tags="utilities borders">
                                        <span class="nav-link-text" data-i18n="nav.utilities_borders">Borders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_clearfix.html" title="Clearfix" data-filter-tags="utilities clearfix">
                                        <span class="nav-link-text" data-i18n="nav.utilities_clearfix">Clearfix</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_color_pallet.html" title="Color Pallet" data-filter-tags="utilities color pallet">
                                        <span class="nav-link-text" data-i18n="nav.utilities_color_pallet">Color Pallet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_display_property.html" title="Display Property" data-filter-tags="utilities display property">
                                        <span class="nav-link-text" data-i18n="nav.utilities_display_property">Display Property</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_fonts.html" title="Fonts" data-filter-tags="utilities fonts">
                                        <span class="nav-link-text" data-i18n="nav.utilities_fonts">Fonts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_flexbox.html" title="Flexbox" data-filter-tags="utilities flexbox">
                                        <span class="nav-link-text" data-i18n="nav.utilities_flexbox">Flexbox</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_helpers.html" title="Helpers" data-filter-tags="utilities helpers">
                                        <span class="nav-link-text" data-i18n="nav.utilities_helpers">Helpers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_position.html" title="Position" data-filter-tags="utilities position">
                                        <span class="nav-link-text" data-i18n="nav.utilities_position">Position</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_responsive_grid.html" title="Responsive Grid" data-filter-tags="utilities responsive grid">
                                        <span class="nav-link-text" data-i18n="nav.utilities_responsive_grid">Responsive Grid</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_sizing.html" title="Sizing" data-filter-tags="utilities sizing">
                                        <span class="nav-link-text" data-i18n="nav.utilities_sizing">Sizing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_spacing.html" title="Spacing" data-filter-tags="utilities spacing">
                                        <span class="nav-link-text" data-i18n="nav.utilities_spacing">Spacing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utilities_typography.html" title="Typography" data-filter-tags="utilities typography fonts headings bold lead colors sizes link text states list styles truncate alignment">
                                        <span class="nav-link-text" data-i18n="nav.utilities_typography">Typography</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">
                                        <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Menu child</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" title="Sublevel Item" data-filter-tags="utilities menu child sublevel item">
                                                <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Sublevel Item</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" title="Another Item" data-filter-tags="utilities menu child another item">
                                                <span class="nav-link-text" data-i18n="nav.utilities_menu_child_another_item">Another Item</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="disabled">
                                    <a href="javascript:void(0);" title="Disabled item" data-filter-tags="utilities disabled item">
                                        <span class="nav-link-text" data-i18n="nav.utilities_disabled_item">Disabled item</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Font Icons" data-filter-tags="font icons">
                                <i class="fal fa-map-marker-alt"></i>
                                <span class="nav-link-text" data-i18n="nav.font_icons">Font Icons</span>
                                <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">7,500+</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" title="FontAwesome" data-filter-tags="font icons fontawesome">
                                        <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome">FontAwesome Pro</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="icons_fontawesome_light.html" title="Light" data-filter-tags="font icons fontawesome light">
                                                <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_light">Light</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons_fontawesome_regular.html" title="Regular" data-filter-tags="font icons fontawesome regular">
                                                <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_regular">Regular</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons_fontawesome_solid.html" title="Solid" data-filter-tags="font icons fontawesome solid">
                                                <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_solid">Solid</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons_fontawesome_duotone.html" title="Duotone" data-filter-tags="font icons fontawesome duotone">
                                                <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_duotone">Duotone</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons_fontawesome_brand.html" title="Brand" data-filter-tags="font icons fontawesome brand">
                                                <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_brand">Brand</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" title="NextGen Icons" data-filter-tags="font icons nextgen icons">
                                        <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons">NextGen Icons</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="icons_nextgen_general.html" title="General" data-filter-tags="font icons nextgen icons general">
                                                <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons_general">General</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons_nextgen_base.html" title="Base" data-filter-tags="font icons nextgen icons base">
                                                <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons_base">Base</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" title="Stack Icons" data-filter-tags="font icons stack icons">
                                        <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons">Stack Icons</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="icons_stack_showcase.html" title="Showcase" data-filter-tags="font icons stack icons showcase">
                                                <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons_showcase">Showcase</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons_stack_generate.html?layers=3" title="Generate Stack" data-filter-tags="font icons stack icons generate stack">
                                                <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons_generate_stack">Generate Stack</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Tables" data-filter-tags="tables">
                                <i class="fal fa-th-list"></i>
                                <span class="nav-link-text" data-i18n="nav.tables">Tables</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="tables_basic.html" title="Basic Tables" data-filter-tags="tables basic tables">
                                        <span class="nav-link-text" data-i18n="nav.tables_basic_tables">Basic Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tables_generate_style.html" title="Generate Table Style" data-filter-tags="tables generate table style">
                                        <span class="nav-link-text" data-i18n="nav.tables_generate_table_style">Generate Table Style</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Form Stuff" data-filter-tags="form stuff">
                                <i class="fal fa-edit"></i>
                                <span class="nav-link-text" data-i18n="nav.form_stuff">Form Stuff</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="form_basic_inputs.html" title="Basic Inputs" data-filter-tags="form stuff basic inputs">
                                        <span class="nav-link-text" data-i18n="nav.form_stuff_basic_inputs">Basic Inputs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_checkbox_radio.html" title="Checkbox & Radio" data-filter-tags="form stuff checkbox & radio">
                                        <span class="nav-link-text" data-i18n="nav.form_stuff_checkbox_&_radio">Checkbox & Radio</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_input_groups.html" title="Input Groups" data-filter-tags="form stuff input groups">
                                        <span class="nav-link-text" data-i18n="nav.form_stuff_input_groups">Input Groups</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_validation.html" title="Validation" data-filter-tags="form stuff validation">
                                        <span class="nav-link-text" data-i18n="nav.form_stuff_validation">Validation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-title">Plugins & Addons</li>
                        <li>
                            <a href="#" title="Plugins" data-filter-tags="plugins">
                                <i class="fal fa-shield-alt"></i>
                                <span class="nav-link-text" data-i18n="nav.plugins">Core Plugins</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="plugins_faq.html" title="Plugins FAQ" data-filter-tags="plugins plugins faq">
                                        <span class="nav-link-text" data-i18n="nav.plugins_plugins_faq">Plugins FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="plugins_waves.html" title="Waves" data-filter-tags="plugins waves">
                                        <span class="nav-link-text" data-i18n="nav.plugins_waves">Waves</span>
                                        <span class="dl-ref label bg-primary-400 ml-2">9 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="plugins_pacejs.html" title="PaceJS" data-filter-tags="plugins pacejs">
                                        <span class="nav-link-text" data-i18n="nav.plugins_pacejs">PaceJS</span>
                                        <span class="dl-ref label bg-primary-500 ml-2">13 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="plugins_smartpanels.html" title="SmartPanels" data-filter-tags="plugins smartpanels">
                                        <span class="nav-link-text" data-i18n="nav.plugins_smartpanels">SmartPanels</span>
                                        <span class="dl-ref label bg-primary-600 ml-2">9 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="plugins_bootbox.html" title="BootBox" data-filter-tags="plugins bootbox alert sound">
                                        <span class="nav-link-text" data-i18n="nav.plugins_bootbox">BootBox</span>
                                        <span class="dl-ref label bg-primary-600 ml-2">15 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="plugins_slimscroll.html" title="Slimscroll" data-filter-tags="plugins slimscroll">
                                        <span class="nav-link-text" data-i18n="nav.plugins_slimscroll">Slimscroll</span>
                                        <span class="dl-ref label bg-primary-700 ml-2">5 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="plugins_throttle.html" title="Throttle" data-filter-tags="plugins throttle">
                                        <span class="nav-link-text" data-i18n="nav.plugins_throttle">Throttle</span>
                                        <span class="dl-ref label bg-primary-700 ml-2">1 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="plugins_navigation.html" title="Navigation" data-filter-tags="plugins navigation">
                                        <span class="nav-link-text" data-i18n="nav.plugins_navigation">Navigation</span>
                                        <span class="dl-ref label bg-primary-700 ml-2">2 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="plugins_i18next.html" title="i18next" data-filter-tags="plugins i18next">
                                        <span class="nav-link-text" data-i18n="nav.plugins_i18next">i18next</span>
                                        <span class="dl-ref label bg-primary-700 ml-2">10 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="plugins_appcore.html" title="App.Core" data-filter-tags="plugins app.core">
                                        <span class="nav-link-text" data-i18n="nav.plugins_app.core">App.Core</span>
                                        <span class="dl-ref label bg-success-700 ml-2">14 KB</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Datatables" data-filter-tags="datatables datagrid">
                                <i class="fal fa-table"></i>
                                <span class="nav-link-text" data-i18n="nav.datatables">Datatables</span>
                                <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">235 KB</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="datatables_basic.html" title="Basic" data-filter-tags="datatables datagrid basic">
                                        <span class="nav-link-text" data-i18n="nav.datatables_basic">Basic</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_autofill.html" title="Autofill" data-filter-tags="datatables datagrid autofill">
                                        <span class="nav-link-text" data-i18n="nav.datatables_autofill">Autofill</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_buttons.html" title="Buttons" data-filter-tags="datatables datagrid buttons">
                                        <span class="nav-link-text" data-i18n="nav.datatables_buttons">Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_export.html" title="Export" data-filter-tags="datatables datagrid export tables pdf excel print csv">
                                        <span class="nav-link-text" data-i18n="nav.datatables_export">Export</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_colreorder.html" title="ColReorder" data-filter-tags="datatables datagrid colreorder">
                                        <span class="nav-link-text" data-i18n="nav.datatables_colreorder">ColReorder</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_columnfilter.html" title="ColumnFilter" data-filter-tags="datatables datagrid columnfilter">
                                        <span class="nav-link-text" data-i18n="nav.datatables_columnfilter">ColumnFilter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_fixedcolumns.html" title="FixedColumns" data-filter-tags="datatables datagrid fixedcolumns">
                                        <span class="nav-link-text" data-i18n="nav.datatables_fixedcolumns">FixedColumns</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_fixedheader.html" title="FixedHeader" data-filter-tags="datatables datagrid fixedheader">
                                        <span class="nav-link-text" data-i18n="nav.datatables_fixedheader">FixedHeader</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_keytable.html" title="KeyTable" data-filter-tags="datatables datagrid keytable">
                                        <span class="nav-link-text" data-i18n="nav.datatables_keytable">KeyTable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_responsive.html" title="Responsive" data-filter-tags="datatables datagrid responsive">
                                        <span class="nav-link-text" data-i18n="nav.datatables_responsive">Responsive</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_responsive_alt.html" title="Responsive Alt" data-filter-tags="datatables datagrid responsive alt">
                                        <span class="nav-link-text" data-i18n="nav.datatables_responsive_alt">Responsive Alt</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_rowgroup.html" title="RowGroup" data-filter-tags="datatables datagrid rowgroup">
                                        <span class="nav-link-text" data-i18n="nav.datatables_rowgroup">RowGroup</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_rowreorder.html" title="RowReorder" data-filter-tags="datatables datagrid rowreorder">
                                        <span class="nav-link-text" data-i18n="nav.datatables_rowreorder">RowReorder</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_scroller.html" title="Scroller" data-filter-tags="datatables datagrid scroller">
                                        <span class="nav-link-text" data-i18n="nav.datatables_scroller">Scroller</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_select.html" title="Select" data-filter-tags="datatables datagrid select">
                                        <span class="nav-link-text" data-i18n="nav.datatables_select">Select</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables_alteditor.html" title="AltEditor" data-filter-tags="datatables datagrid alteditor">
                                        <span class="nav-link-text" data-i18n="nav.datatables_alteditor">AltEditor</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Statistics" data-filter-tags="statistics chart graphs">
                                <i class="fal fa-chart-pie"></i>
                                <span class="nav-link-text" data-i18n="nav.statistics">Statistics</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="statistics_flot.html" title="Flot" data-filter-tags="statistics chart graphs flot bar pie">
                                        <span class="nav-link-text" data-i18n="nav.statistics_flot">Flot</span>
                                        <span class="dl-ref label bg-primary-500 ml-2">36 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="statistics_chartjs.html" title="Chart.js" data-filter-tags="statistics chart graphs chart.js bar pie">
                                        <span class="nav-link-text" data-i18n="nav.statistics_chart.js">Chart.js</span>
                                        <span class="dl-ref label bg-primary-500 ml-2">205 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="statistics_chartist.html" title="Chartist.js" data-filter-tags="statistics chart graphs chartist.js">
                                        <span class="nav-link-text" data-i18n="nav.statistics_chartist.js">Chartist.js</span>
                                        <span class="dl-ref label bg-primary-600 ml-2">39 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="statistics_c3.html" title="C3 Charts" data-filter-tags="statistics chart graphs c3 charts">
                                        <span class="nav-link-text" data-i18n="nav.statistics_c3_charts">C3 Charts</span>
                                        <span class="dl-ref label bg-primary-600 ml-2">197 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="statistics_peity.html" title="Peity" data-filter-tags="statistics chart graphs peity small">
                                        <span class="nav-link-text" data-i18n="nav.statistics_peity">Peity</span>
                                        <span class="dl-ref label bg-primary-700 ml-2">4 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="statistics_sparkline.html" title="Sparkline" data-filter-tags="statistics chart graphs sparkline small tiny">
                                        <span class="nav-link-text" data-i18n="nav.statistics_sparkline">Sparkline</span>
                                        <span class="dl-ref label bg-primary-700 ml-2">42 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="statistics_easypiechart.html" title="Easy Pie Chart" data-filter-tags="statistics chart graphs easy pie chart">
                                        <span class="nav-link-text" data-i18n="nav.statistics_easy_pie_chart">Easy Pie Chart</span>
                                        <span class="dl-ref label bg-primary-700 ml-2">4 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="statistics_dygraph.html" title="Dygraph" data-filter-tags="statistics chart graphs dygraph complex">
                                        <span class="nav-link-text" data-i18n="nav.statistics_dygraph">Dygraph</span>
                                        <span class="dl-ref label bg-primary-700 ml-2">120 KB</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Notifications" data-filter-tags="notifications">
                                <i class="fal fa-exclamation-circle"></i>
                                <span class="nav-link-text" data-i18n="nav.notifications">Notifications</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="notifications_sweetalert2.html" title="SweetAlert2" data-filter-tags="notifications sweetalert2">
                                        <span class="nav-link-text" data-i18n="nav.notifications_sweetalert2">SweetAlert2</span>
                                        <span class="dl-ref label bg-primary-500 ml-2">40 KB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="notifications_toastr.html" title="Toastr" data-filter-tags="notifications toastr">
                                        <span class="nav-link-text" data-i18n="nav.notifications_toastr">Toastr</span>
                                        <span class="dl-ref label bg-primary-600 ml-2">5 KB</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Form Plugins" data-filter-tags="form plugins">
                                <i class="fal fa-credit-card-front"></i>
                                <span class="nav-link-text" data-i18n="nav.form_plugins">Form Plugins</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="form_plugins_colorpicker.html" title="Color Picker" data-filter-tags="form plugins color picker">
                                        <span class="nav-link-text" data-i18n="nav.form_plugins_color_picker">Color Picker</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_plugins_datepicker.html" title="Date Picker" data-filter-tags="form plugins date picker">
                                        <span class="nav-link-text" data-i18n="nav.form_plugins_date_picker">Date Picker</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_plugins_daterange_picker.html" title="Date Range Picker" data-filter-tags="form plugins date range picker">
                                        <span class="nav-link-text" data-i18n="nav.form_plugins_date_range_picker">Date Range Picker</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_plugins_dropzone.html" title="Dropzone" data-filter-tags="form plugins dropzone">
                                        <span class="nav-link-text" data-i18n="nav.form_plugins_dropzone">Dropzone</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_plugins_ionrangeslider.html" title="Ion.RangeSlider" data-filter-tags="form plugins ion.rangeslider">
                                        <span class="nav-link-text" data-i18n="nav.form_plugins_ion.rangeslider">Ion.RangeSlider</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_plugins_inputmask.html" title="Inputmask" data-filter-tags="form plugins inputmask">
                                        <span class="nav-link-text" data-i18n="nav.form_plugins_inputmask">Inputmask</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_plugins_imagecropper.html" title="Image Cropper" data-filter-tags="form plugins image cropper">
                                        <span class="nav-link-text" data-i18n="nav.form_plugins_image_cropper">Image Cropper</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_plugins_select2.html" title="Select2" data-filter-tags="form plugins select2">
                                        <span class="nav-link-text" data-i18n="nav.form_plugins_select2">Select2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_plugins_summernote.html" title="Summernote" data-filter-tags="form plugins summernote texteditor editor">
                                        <span class="nav-link-text" data-i18n="nav.form_plugins_summernote">Summernote</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Miscellaneous" data-filter-tags="miscellaneous">
                                <i class="fal fa-globe"></i>
                                <span class="nav-link-text" data-i18n="nav.miscellaneous">Miscellaneous</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="miscellaneous_fullcalendar.html" title="FullCalendar" data-filter-tags="miscellaneous fullcalendar">
                                        <span class="nav-link-text" data-i18n="nav.miscellaneous_fullcalendar">FullCalendar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="miscellaneous_lightgallery.html" title="Light Gallery" data-filter-tags="miscellaneous light gallery">
                                        <span class="nav-link-text" data-i18n="nav.miscellaneous_light_gallery">Light Gallery</span>
                                        <span class="dl-ref label bg-primary-500 ml-2">61 KB</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-title">Layouts & Apps</li>
                        <li>
                            <a href="#" title="Pages" data-filter-tags="pages">
                                <i class="fal fa-plus-circle"></i>
                                <span class="nav-link-text" data-i18n="nav.pages">Page Views</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="page_chat.html" title="Chat" data-filter-tags="pages chat">
                                        <span class="nav-link-text" data-i18n="nav.pages_chat">Chat</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_contacts.html" title="Contacts" data-filter-tags="pages contacts">
                                        <span class="nav-link-text" data-i18n="nav.pages_contacts">Contacts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" title="Forum" data-filter-tags="pages forum">
                                        <span class="nav-link-text" data-i18n="nav.pages_forum">Forum</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="page_forum_list.html" title="List" data-filter-tags="pages forum list">
                                                <span class="nav-link-text" data-i18n="nav.pages_forum_list">List</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_forum_threads.html" title="Threads" data-filter-tags="pages forum threads">
                                                <span class="nav-link-text" data-i18n="nav.pages_forum_threads">Threads</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_forum_discussion.html" title="Discussion" data-filter-tags="pages forum discussion">
                                                <span class="nav-link-text" data-i18n="nav.pages_forum_discussion">Discussion</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" title="Inbox" data-filter-tags="pages inbox">
                                        <span class="nav-link-text" data-i18n="nav.pages_inbox">Inbox</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="page_inbox_general.html" title="General" data-filter-tags="pages inbox general">
                                                <span class="nav-link-text" data-i18n="nav.pages_inbox_general">General</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_inbox_read.html" title="Read" data-filter-tags="pages inbox read">
                                                <span class="nav-link-text" data-i18n="nav.pages_inbox_read">Read</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_inbox_write.html" title="Write" data-filter-tags="pages inbox write">
                                                <span class="nav-link-text" data-i18n="nav.pages_inbox_write">Write</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page_invoice.html" title="Invoice (printable)" data-filter-tags="pages invoice (printable)">
                                        <span class="nav-link-text" data-i18n="nav.pages_invoice_(printable)">Invoice (printable)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" title="Authentication" data-filter-tags="pages authentication">
                                        <span class="nav-link-text" data-i18n="nav.pages_authentication">Authentication</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="page_forget.html" title="Forget Password" data-filter-tags="pages authentication forget password">
                                                <span class="nav-link-text" data-i18n="nav.pages_authentication_forget_password">Forget Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_locked.html" title="Locked Screen" data-filter-tags="pages authentication locked screen">
                                                <span class="nav-link-text" data-i18n="nav.pages_authentication_locked_screen">Locked Screen</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_login.html" title="Login" data-filter-tags="pages authentication login">
                                                <span class="nav-link-text" data-i18n="nav.pages_authentication_login">Login</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_login_alt.html" title="Login Alt" data-filter-tags="pages authentication login alt">
                                                <span class="nav-link-text" data-i18n="nav.pages_authentication_login_alt">Login Alt</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_register.html" title="Register" data-filter-tags="pages authentication register">
                                                <span class="nav-link-text" data-i18n="nav.pages_authentication_register">Register</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_confirmation.html" title="Confirmation" data-filter-tags="pages authentication confirmation">
                                                <span class="nav-link-text" data-i18n="nav.pages_authentication_confirmation">Confirmation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" title="Error Pages" data-filter-tags="pages error pages">
                                        <span class="nav-link-text" data-i18n="nav.pages_error_pages">Error Pages</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="page_error.html" title="General Error" data-filter-tags="pages error pages general error">
                                                <span class="nav-link-text" data-i18n="nav.pages_error_pages_general_error">General Error</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_error_404.html" title="Server Error" data-filter-tags="pages error pages server error">
                                                <span class="nav-link-text" data-i18n="nav.pages_error_pages_server_error">Server Error</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_error_announced.html" title="Announced Error" data-filter-tags="pages error pages announced error">
                                                <span class="nav-link-text" data-i18n="nav.pages_error_pages_announced_error">Announced Error</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page_profile.html" title="Profile" data-filter-tags="pages profile">
                                        <span class="nav-link-text" data-i18n="nav.pages_profile">Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_projects.html" title="Projects" data-filter-tags="pages projects">
                                        <span class="nav-link-text" data-i18n="nav.pages_projects">Projects</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_search.html" title="Search Results" data-filter-tags="pages search results">
                                        <span class="nav-link-text" data-i18n="nav.pages_search_results">Search Results</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="filter-message js-filter-message bg-success-600"></div>
                </nav>
                <!-- END PRIMARY NAVIGATION -->
                <!-- NAV FOOTER -->
                <div class="nav-footer shadow-top">
                    <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
                        <i class="ni ni-chevron-right"></i>
                        <i class="ni ni-chevron-right"></i>
                    </a>
                    <ul class="list-table m-auto nav-footer-buttons">
                        <li>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                                <i class="fal fa-comments"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                                <i class="fal fa-life-ring"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                                <i class="fal fa-phone"></i>
                            </a>
                        </li>
                    </ul>
                </div> <!-- END NAV FOOTER -->
            </aside>
            <!-- END Left Aside -->
            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->
                <header class="page-header" role="banner">
                    <!-- we need this logo when user switches to nav-function-top -->
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                        </a>
                    </div>
                    <!-- DOC: nav menu layout change shortcut -->
                    <div class="hidden-md-down dropdown-icon-menu position-relative">
                        <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                            <i class="ni ni-menu"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                    <i class="ni ni-minify-nav"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                                    <i class="ni ni-lock-nav"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- DOC: mobile button appears during mobile width -->
                    <div class="hidden-lg-up">
                        <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                            <i class="ni ni-menu"></i>
                        </a>
                    </div>
                    <div class="search">
                        <form class="app-forms hidden-xs-down" role="search" action="page_search.html" autocomplete="off">
                            <input type="text" id="search-field" placeholder="Search for anything" class="form-control" tabindex="1">
                            <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
                                <i class="fal fa-times"></i>
                            </a>
                        </form>
                    </div>
                    <div class="ml-auto d-flex">
                        <!-- activate app search icon (mobile) -->
                        <div class="hidden-sm-up">
                            <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                                <i class="fal fa-search"></i>
                            </a>
                        </div>
                        <!-- app settings -->
                        <div class="hidden-md-down">
                            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                                <i class="fal fa-cog"></i>
                            </a>
                        </div>
                        <!-- app shortcuts -->
                        <div>
                            <a href="#" class="header-icon" data-toggle="dropdown" title="My Apps">
                                <i class="fal fa-cube"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated w-auto h-auto">
                                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top">
                                    <h4 class="m-0 text-center color-white">
                                        Quick Shortcut
                                        <small class="mb-0 opacity-80">User Applications & Addons</small>
                                    </h4>
                                </div>
                                <div class="custom-scroll h-100">
                                    <ul class="app-list">
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-2 icon-stack-3x color-primary-600"></i>
                                                    <i class="base-3 icon-stack-2x color-primary-700"></i>
                                                    <i class="ni ni-settings icon-stack-1x text-white fs-lg"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Services
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-2 icon-stack-3x color-primary-400"></i>
                                                    <i class="base-10 text-white icon-stack-1x"></i>
                                                    <i class="ni md-profile color-primary-800 icon-stack-2x"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Account
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-9 icon-stack-3x color-success-400"></i>
                                                    <i class="base-2 icon-stack-2x color-success-500"></i>
                                                    <i class="ni ni-shield icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Security
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-18 icon-stack-3x color-info-700"></i>
                                                    <span class="position-absolute pos-top pos-left pos-right color-white fs-md mt-2 fw-400">28</span>
                                                </span>
                                                <span class="app-list-name">
                                                    Calendar
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-7 icon-stack-3x color-info-500"></i>
                                                    <i class="base-7 icon-stack-2x color-info-700"></i>
                                                    <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Stats
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-4 icon-stack-3x color-danger-500"></i>
                                                    <i class="base-4 icon-stack-1x color-danger-400"></i>
                                                    <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Messages
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-4 icon-stack-3x color-fusion-400"></i>
                                                    <i class="base-5 icon-stack-2x color-fusion-200"></i>
                                                    <i class="base-5 icon-stack-1x color-fusion-100"></i>
                                                    <i class="fal fa-keyboard icon-stack-1x color-info-50"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Notes
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                                    <i class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                                    <i class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                                    <i class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Photos
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                    <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                    <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                    <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                    <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Maps
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-5 icon-stack-3x color-success-700 opacity-80"></i>
                                                    <i class="base-12 icon-stack-2x color-success-700 opacity-30"></i>
                                                    <i class="fal fa-comment-alt icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Chat
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-5 icon-stack-3x color-warning-600"></i>
                                                    <i class="base-7 icon-stack-2x color-warning-800 opacity-50"></i>
                                                    <i class="fal fa-phone icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Phone
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-6 icon-stack-3x color-danger-600"></i>
                                                    <i class="fal fa-chart-line icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Projects
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-100">
                                            <a href="#" class="btn btn-default mt-4 mb-2 pr-5 pl-5"> Add more apps </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- app message -->
                        <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-messenger">
                            <i class="fal fa-globe"></i>
                            <span class="badge badge-icon">!</span>
                        </a>
                        <!-- app notification -->
                        <div>
                            <a href="#" class="header-icon" data-toggle="dropdown" title="You got 11 notifications">
                                <i class="fal fa-bell"></i>
                                <span class="badge badge-icon">11</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                                    <h4 class="m-0 text-center color-white">
                                        11 New
                                        <small class="mb-0 opacity-80">User Notifications</small>
                                    </h4>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-clean" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab" href="#tab-messages" data-i18n="drpdwn.messages">Messages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab" href="#tab-feeds" data-i18n="drpdwn.feeds">Feeds</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab" href="#tab-events" data-i18n="drpdwn.events">Events</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-notification">
                                    <div class="tab-pane active p-3 text-center">
                                        <h5 class="mt-4 pt-4 fw-500">
                                            <span class="d-block fa-3x pb-4 text-muted">
                                                <i class="ni ni-arrow-up text-gradient opacity-70"></i>
                                            </span> Select a tab above to activate
                                            <small class="mt-3 fs-b fw-400 text-muted">
                                                This blank page message helps protect your privacy, or you can show the first message here automatically through
                                                <a href="#">settings page</a>
                                            </small>
                                        </h5>
                                    </div>
                                    <div class="tab-pane" id="tab-messages" role="tabpanel">
                                        <div class="custom-scroll h-100">
                                            <ul class="notification">
                                                <li class="unread">
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-c.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Melissa Ayre <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-1">INBOX</span></span>
                                                            <span class="msg-a fs-sm">Re: New security codes</span>
                                                            <span class="msg-b fs-xs">Hello again and thanks for being part...</span>
                                                            <span class="fs-nano text-muted mt-1">56 seconds ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="unread">
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-a.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Adison Lee</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">2 minutes ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status status-success mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-b.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Oliver Kopyuv</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">3 days ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status status-warning mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-e.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Dr. John Cook PhD</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">2 weeks ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status status-success mr-2">
                                                            <!-- <img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-h.png" class="profile-image rounded-circle" alt="Sarah McBrook" /> -->
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-h.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Sarah McBrook</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">3 weeks ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status status-success mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-m.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Anothony Bezyeth</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">one month ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <span class="status status-danger mr-2">
                                                            <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-j.png')"></span>
                                                        </span>
                                                        <span class="d-flex flex-column flex-1 ml-1">
                                                            <span class="name">Lisa Hatchensen</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                            <span class="fs-nano text-muted mt-1">one year ago</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-feeds" role="tabpanel">
                                        <div class="custom-scroll h-100">
                                            <ul class="notification">
                                                <li class="unread">
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <span class="d-flex flex-column flex-1">
                                                            <span class="name d-flex align-items-center">Administrator <span class="badge badge-success fw-n ml-1">UPDATE</span></span>
                                                            <span class="msg-a fs-sm">
                                                                System updated to version <strong>4.5.1</strong> <a href="docs_buildnotes.html">(patch notes)</a>
                                                            </span>
                                                            <span class="fs-nano text-muted mt-1">5 mins ago</span>
                                                        </span>
                                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                            <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <div class="d-flex flex-column flex-1">
                                                            <span class="name">
                                                                Adison Lee <span class="fw-300 d-inline">replied to your video <a href="#" class="fw-400"> Cancer Drug</a> </span>
                                                            </span>
                                                            <span class="msg-a fs-sm mt-2">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day...</span>
                                                            <span class="fs-nano text-muted mt-1">10 minutes ago</span>
                                                        </div>
                                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                            <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-k.png" class="profile-image rounded-circle" alt="k" />-->
                                                        <div class="d-flex flex-column flex-1">
                                                            <span class="name">
                                                                Troy Norman'<span class="fw-300">s new connections</span>
                                                            </span>
                                                            <div class="fs-sm d-flex align-items-center mt-2">
                                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                                <div data-hasmore="+3" class="rounded-circle profile-image-md mr-1">
                                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                                                </div>
                                                            </div>
                                                            <span class="fs-nano text-muted mt-1">55 minutes ago</span>
                                                        </div>
                                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                            <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle align-self-start mt-1" alt="k" />-->
                                                        <div class="d-flex flex-column flex-1">
                                                            <span class="name">Dr John Cook <span class="fw-300">sent a <span class="text-danger">new signal</span></span></span>
                                                            <span class="msg-a fs-sm mt-2">Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</span>
                                                            <span class="fs-nano text-muted mt-1">10 minutes ago</span>
                                                        </div>
                                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                            <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <div class="d-flex flex-column flex-1">
                                                            <span class="name">Lab Images <span class="fw-300">were updated!</span></span>
                                                            <div class="fs-sm d-flex align-items-center mt-1">
                                                                <a href="#" class="mr-1 mt-1" title="Cell A-0012">
                                                                    <span class="d-block img-share" style="background-image:url('img/thumbs/pic-7.png'); background-size: cover;"></span>
                                                                </a>
                                                                <a href="#" class="mr-1 mt-1" title="Patient A-473 saliva">
                                                                    <span class="d-block img-share" style="background-image:url('img/thumbs/pic-8.png'); background-size: cover;"></span>
                                                                </a>
                                                                <a href="#" class="mr-1 mt-1" title="Patient A-473 blood cells">
                                                                    <span class="d-block img-share" style="background-image:url('img/thumbs/pic-11.png'); background-size: cover;"></span>
                                                                </a>
                                                                <a href="#" class="mr-1 mt-1" title="Patient A-473 Membrane O.C">
                                                                    <span class="d-block img-share" style="background-image:url('img/thumbs/pic-12.png'); background-size: cover;"></span>
                                                                </a>
                                                            </div>
                                                            <span class="fs-nano text-muted mt-1">55 minutes ago</span>
                                                        </div>
                                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                            <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center show-child-on-hover">
                                                        <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-h.png" class="profile-image rounded-circle align-self-start mt-1" alt="k" />-->
                                                        <div class="d-flex flex-column flex-1">
                                                            <div class="name mb-2">
                                                                Lisa Lamar<span class="fw-300"> updated project</span>
                                                            </div>
                                                            <div class="row fs-b fw-300">
                                                                <div class="col text-left">
                                                                    Progress
                                                                </div>
                                                                <div class="col text-right fw-500">
                                                                    45%
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-sm d-flex mt-1">
                                                                <span class="progress-bar bg-primary-500 progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></span>
                                                            </div>
                                                            <span class="fs-nano text-muted mt-1">2 hrs ago</span>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-events" role="tabpanel">
                                        <div class="d-flex flex-column h-100">
                                            <div class="h-auto">
                                                <table class="table table-bordered table-calendar m-0 w-100 h-100 border-0">
                                                    <tr>
                                                        <th colspan="7" class="pt-3 pb-2 pl-3 pr-3 text-center">
                                                            <div class="js-get-date h5 mb-2">[your date here]</div>
                                                        </th>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <th>Sun</th>
                                                        <th>Mon</th>
                                                        <th>Tue</th>
                                                        <th>Wed</th>
                                                        <th>Thu</th>
                                                        <th>Fri</th>
                                                        <th>Sat</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted bg-faded">30</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                        <td><i class="fal fa-birthday-cake mt-1 ml-1 position-absolute pos-left pos-top text-primary"></i> 6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>8</td>
                                                        <td>9</td>
                                                        <td class="bg-primary-300 pattern-0">10</td>
                                                        <td>11</td>
                                                        <td>12</td>
                                                        <td>13</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>15</td>
                                                        <td>16</td>
                                                        <td>17</td>
                                                        <td>18</td>
                                                        <td>19</td>
                                                        <td>20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>22</td>
                                                        <td>23</td>
                                                        <td>24</td>
                                                        <td>25</td>
                                                        <td>26</td>
                                                        <td>27</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>29</td>
                                                        <td>30</td>
                                                        <td>31</td>
                                                        <td class="text-muted bg-faded">1</td>
                                                        <td class="text-muted bg-faded">2</td>
                                                        <td class="text-muted bg-faded">3</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="flex-1 custom-scroll">
                                                <div class="p-2">
                                                    <div class="d-flex align-items-center text-left mb-3">
                                                        <div class="width-5 fw-300 text-primary l-h-n mr-1 align-self-start fs-xxl">
                                                            15
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="d-flex flex-column">
                                                                <span class="l-h-n fs-md fw-500 opacity-70">
                                                                    October 2020
                                                                </span>
                                                                <span class="l-h-n fs-nano fw-400 text-secondary">
                                                                    Friday
                                                                </span>
                                                            </div>
                                                            <div class="mt-3">
                                                                <p>
                                                                    <strong>2:30PM</strong> - Doctor's appointment
                                                                </p>
                                                                <p>
                                                                    <strong>3:30PM</strong> - Report overview
                                                                </p>
                                                                <p>
                                                                    <strong>4:30PM</strong> - Meeting with Donnah V.
                                                                </p>
                                                                <p>
                                                                    <strong>5:30PM</strong> - Late Lunch
                                                                </p>
                                                                <p>
                                                                    <strong>6:30PM</strong> - Report Compression
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2 px-3 bg-faded d-block rounded-bottom text-right border-faded border-bottom-0 border-right-0 border-left-0">
                                    <a href="#" class="fs-xs fw-500 ml-auto">view all notifications</a>
                                </div>
                            </div>
                        </div>
                        <!-- app user menu -->
                        <div>
                            <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
                                <img src="img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Muhammad Hazlan Shah Bin Idris">
                                <!-- you can also add username next to the avatar with the codes below:
									<span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
									<i class="ni ni-chevron-down hidden-xs-down"></i> -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                        <span class="mr-2">
                                            <img src="img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="Muhammad Hazlan Shah Bin Idris">
                                        </span>
                                        <div class="info-card-text">
                                            <div class="fs-lg text-truncate text-truncate-lg">Muhammad Hazlan Shah Bin Idris</div>
                                            <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider m-0"></div>
                                <a href="#" class="dropdown-item" data-action="app-reset">
                                    <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
                                </a>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                                    <span data-i18n="drpdwn.settings">Settings</span>
                                </a>
                                <div class="dropdown-divider m-0"></div>
                                <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                    <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                                    <i class="float-right text-muted fw-n">F11</i>
                                </a>
                                <a href="#" class="dropdown-item" data-action="app-print">
                                    <span data-i18n="drpdwn.print">Print</span>
                                    <i class="float-right text-muted fw-n">Ctrl + P</i>
                                </a>
                                <div class="dropdown-multilevel dropdown-multilevel-left">
                                    <div class="dropdown-item">
                                        Language
                                    </div>
                                    <div class="dropdown-menu">
                                        <a href="#?lang=fr" class="dropdown-item" data-action="lang" data-lang="fr">Français</a>
                                        <a href="#?lang=en" class="dropdown-item active" data-action="lang" data-lang="en">English (US)</a>
                                        <a href="#?lang=es" class="dropdown-item" data-action="lang" data-lang="es">Español</a>
                                        <a href="#?lang=ru" class="dropdown-item" data-action="lang" data-lang="ru">Русский язык</a>
                                        <a href="#?lang=jp" class="dropdown-item" data-action="lang" data-lang="jp">日本語</a>
                                        <a href="#?lang=ch" class="dropdown-item" data-action="lang" data-lang="ch">中文</a>
                                    </div>
                                </div>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item fw-500 pt-3 pb-3" href="page_login.html">
                                    <span data-i18n="drpdwn.page-logout">Logout</span>
                                    <span class="float-right fw-n">&commat;codexlantern</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- END Page Header -->
                <!-- BEGIN Page Content -->
                <!-- the #js-page-content id is needed for some plugins to initialize -->
                <main id="js-page-content" role="main" class="page-content">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                        <li class="breadcrumb-item">Application Intel</li>
                        <li class="breadcrumb-item active">Marketing Dashboard</li>
                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <?php echo "Cubaa" ?>
                            <i class='subheader-icon fal fa-chart-area'></i> Marketing <span class='fw-300'>Dashboard</span>
                        </h1>
                        <div class="subheader-block d-lg-flex align-items-center">
                            <div class="d-flex mr-4">
                                <div class="mr-2">
                                    <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#967bbd&quot;, &quot;#ccbfdf&quot;],  &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }">7/10</span>
                                </div>
                                <div>
                                    <label class="fs-sm mb-0 mt-2 mt-md-0">New Sessions</label>
                                    <h4 class="font-weight-bold mb-0">70.60%</h4>
                                </div>
                            </div>
                            <div class="d-flex mr-0">
                                <div class="mr-2">
                                    <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#2196F3&quot;, &quot;#9acffa&quot;],  &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }">3/10</span>
                                </div>
                                <div>
                                    <label class="fs-sm mb-0 mt-2 mt-md-0">Page Views</label>
                                    <h4 class="font-weight-bold mb-0">14,134</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                                <div class="">
                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                        21.5k
                                        <small class="m-0 l-h-n">users signed up</small>
                                    </h3>
                                </div>
                                <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                                <div class="">
                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                        $10,203
                                        <small class="m-0 l-h-n">Visual Index Figure</small>
                                    </h3>
                                </div>
                                <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                                <div class="">
                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                        - 103.72
                                        <small class="m-0 l-h-n">Offset Balance Ratio</small>
                                    </h3>
                                </div>
                                <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                                <div class="">
                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                        +40%
                                        <small class="m-0 l-h-n">Product level increase</small>
                                    </h3>
                                </div>
                                <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Marketing profits
                                    </h2>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content bg-subtlelight-fade">
                                        <div id="js-checkbox-toggles" class="d-flex mb-3">
                                            <div class="custom-control custom-switch mr-2">
                                                <input type="checkbox" class="custom-control-input" name="gra-0" id="gra-0" checked="checked">
                                                <label class="custom-control-label" for="gra-0">Target Profit</label>
                                            </div>
                                            <div class="custom-control custom-switch mr-2">
                                                <input type="checkbox" class="custom-control-input" name="gra-1" id="gra-1" checked="checked">
                                                <label class="custom-control-label" for="gra-1">Actual Profit</label>
                                            </div>
                                            <div class="custom-control custom-switch mr-2">
                                                <input type="checkbox" class="custom-control-input" name="gra-2" id="gra-2" checked="checked">
                                                <label class="custom-control-label" for="gra-2">User Signups</label>
                                            </div>
                                        </div>
                                        <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div id="panel-2" class="panel panel-locked" data-panel-sortable data-panel-collapsed data-panel-close>
                                <div class="panel-hdr">
                                    <h2>
                                        Returning <span class="fw-300"><i>Target</i></span>
                                    </h2>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content poisition-relative">
                                        <div class="p-1 position-absolute pos-right pos-top mt-3 mr-3 z-index-cloud d-flex align-items-center justify-content-center">
                                            <div class="border-faded border-top-0 border-left-0 border-bottom-0 py-2 pr-4 mr-3 hidden-sm-down">
                                                <div class="text-right fw-500 l-h-n d-flex flex-column">
                                                    <div class="h3 m-0 d-flex align-items-center justify-content-end">
                                                        <div class='icon-stack mr-2'>
                                                            <i class="base base-7 icon-stack-3x opacity-100 color-success-600"></i>
                                                            <i class="base base-7 icon-stack-2x opacity-100 color-success-500"></i>
                                                            <i class="fal fa-arrow-up icon-stack-1x opacity-100 color-white"></i>
                                                        </div>
                                                        $44.34 / GE
                                                    </div>
                                                    <span class="m-0 fs-xs text-muted">Increased Profit as per redux margins and estimates</span>
                                                </div>
                                            </div>
                                            <div class="js-easy-pie-chart color-info-400 position-relative d-inline-flex align-items-center justify-content-center" data-percent="35" data-piesize="95" data-linewidth="10" data-scalelength="5">
                                                <div class="js-easy-pie-chart color-success-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="65" data-piesize="60" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                                    <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">78%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="flot-area" style="width:100%; height:300px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div id="panel-3" class="panel panel-locked" data-panel-sortable data-panel-collapsed data-panel-close>
                                <div class="panel-hdr">
                                    <h2>
                                        Effective <span class="fw-300"><i>Marketing</i></span>
                                    </h2>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content poisition-relative">
                                        <div class="pb-5 pt-3">
                                            <div class="row">
                                                <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                                    <div class="p-2 mr-3 bg-info-200 rounded">
                                                        <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">3,4,5,8,2</span>
                                                    </div>
                                                    <div>
                                                        <label class="fs-sm mb-0">Bounce Rate</label>
                                                        <h4 class="font-weight-bold mb-0">37.56%</h4>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                                    <div class="p-2 mr-3 bg-info-300 rounded">
                                                        <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">5,3,1,7,9</span>
                                                    </div>
                                                    <div>
                                                        <label class="fs-sm mb-0">Sessions</label>
                                                        <h4 class="font-weight-bold mb-0">759</h4>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                                    <div class="p-2 mr-3 bg-success-300 rounded">
                                                        <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">3,4,3,5,5</span>
                                                    </div>
                                                    <div>
                                                        <label class="fs-sm mb-0">New Sessions</label>
                                                        <h4 class="font-weight-bold mb-0">12.17%</h4>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                                    <div class="p-2 mr-3 bg-success-500 rounded">
                                                        <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">6,4,7,5,6</span>
                                                    </div>
                                                    <div>
                                                        <label class="fs-sm mb-0">Clickthrough</label>
                                                        <h4 class="font-weight-bold mb-0">19.77%</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="flotVisit" style="width:100%; height:208px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div id="panel-4" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Sale <span class="fw-300"><i>Records</i></span>
                                    </h2>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                            <thead class="bg-warning-200">
                                                <tr>
                                                    <th>CustomerID</th>
                                                    <th>Name</th>
                                                    <th>PurchaseDate</th>
                                                    <th>CustomerEmail</th>
                                                    <th>CustomerCVV</th>
                                                    <th>Country</th>
                                                    <th>InvoiceAmount</th>
                                                    <th>Controls</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>268410636</td>
                                                    <td>Cooley, Walker J.</td>
                                                    <td>03-13-19</td>
                                                    <td>odio.auctor@orcilobortis.edu</td>
                                                    <td>717</td>
                                                    <td>Timor-Leste</td>
                                                    <td>$7,007</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>077610947</td>
                                                    <td>Wise, Ruby R.</td>
                                                    <td>04-10-19</td>
                                                    <td>mi.Aliquam@afeugiat.edu</td>
                                                    <td>715</td>
                                                    <td>Burkina Faso</td>
                                                    <td>$7,052</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>959104621</td>
                                                    <td>Orr, Isabella V.</td>
                                                    <td>05-14-20</td>
                                                    <td>amet.lorem@risus.edu</td>
                                                    <td>256</td>
                                                    <td>Sri Lanka</td>
                                                    <td>$6,697</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>756590147</td>
                                                    <td>Schwartz, Xander P.</td>
                                                    <td>11-05-18</td>
                                                    <td>sagittis.placerat.Cras@nonlaciniaat.com</td>
                                                    <td>963</td>
                                                    <td>Liberia</td>
                                                    <td>$8,117</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>533801387</td>
                                                    <td>Gilmore, Cedric O.</td>
                                                    <td>01-16-20</td>
                                                    <td>consectetuer.adipiscing@semegestasblandit.co.uk</td>
                                                    <td>754</td>
                                                    <td>Svalbard and Jan Mayen Islands</td>
                                                    <td>$5,328</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>403080948</td>
                                                    <td>Foley, Cynthia M.</td>
                                                    <td>07-14-18</td>
                                                    <td>a.auctor.non@nuncrisus.net</td>
                                                    <td>826</td>
                                                    <td>Afghanistan</td>
                                                    <td>$6,823</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>114290869</td>
                                                    <td>Marshall, Carter V.</td>
                                                    <td>08-30-18</td>
                                                    <td>porttitor.interdum@dolordolortempus.com</td>
                                                    <td>256</td>
                                                    <td>Singapore</td>
                                                    <td>$6,679</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>033182882</td>
                                                    <td>Reilly, Jacob K.</td>
                                                    <td>09-19-18</td>
                                                    <td>vestibulum.lorem@adipiscing.ca</td>
                                                    <td>703</td>
                                                    <td>Chile</td>
                                                    <td>$5,252</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>471026559</td>
                                                    <td>Barlow, Jena S.</td>
                                                    <td>12-16-19</td>
                                                    <td>mollis@lacusUtnec.org</td>
                                                    <td>998</td>
                                                    <td>Botswana</td>
                                                    <td>$5,542</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>223467911</td>
                                                    <td>Huber, Warren Z.</td>
                                                    <td>05-30-20</td>
                                                    <td>Nulla@ipsumdolorsit.edu</td>
                                                    <td>127</td>
                                                    <td>Equatorial Guinea</td>
                                                    <td>$7,331</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>571295351</td>
                                                    <td>Miller, Emerald G.</td>
                                                    <td>11-08-19</td>
                                                    <td>dui@faucibus.co.uk</td>
                                                    <td>791</td>
                                                    <td>Chile</td>
                                                    <td>$8,318</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>314268756</td>
                                                    <td>Randolph, Ina Y.</td>
                                                    <td>04-20-19</td>
                                                    <td>sodales.Mauris@pharetraNamac.ca</td>
                                                    <td>272</td>
                                                    <td>Bermuda</td>
                                                    <td>$9,181</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>010785095</td>
                                                    <td>Stephens, Brady K.</td>
                                                    <td>04-18-19</td>
                                                    <td>Suspendisse.sed.dolor@elementumdui.edu</td>
                                                    <td>810</td>
                                                    <td>Mayotte</td>
                                                    <td>$8,253</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>522462928</td>
                                                    <td>Eaton, Cathleen M.</td>
                                                    <td>03-18-20</td>
                                                    <td>rhoncus@tincidunt.com</td>
                                                    <td>238</td>
                                                    <td>Belgium</td>
                                                    <td>$5,585</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>833601081</td>
                                                    <td>Conner, Wylie U.</td>
                                                    <td>09-07-18</td>
                                                    <td>diam@infaucibus.edu</td>
                                                    <td>917</td>
                                                    <td>Hong Kong</td>
                                                    <td>$6,687</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>462938945</td>
                                                    <td>Mccall, Hyacinth M.</td>
                                                    <td>06-22-19</td>
                                                    <td>ante@gravida.com</td>
                                                    <td>335</td>
                                                    <td>Mayotte</td>
                                                    <td>$5,419</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>465431336</td>
                                                    <td>Calderon, Bruno L.</td>
                                                    <td>06-22-19</td>
                                                    <td>enim.nisl@natoquepenatibus.com</td>
                                                    <td>449</td>
                                                    <td>Pitcairn Islands</td>
                                                    <td>$7,833</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>700402324</td>
                                                    <td>Barnes, Brittany O.</td>
                                                    <td>08-23-19</td>
                                                    <td>nonummy@massanon.org</td>
                                                    <td>200</td>
                                                    <td>Jordan</td>
                                                    <td>$9,673</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>999816267</td>
                                                    <td>Lambert, Nerea A.</td>
                                                    <td>04-01-20</td>
                                                    <td>interdum.libero@sed.com</td>
                                                    <td>347</td>
                                                    <td>Hong Kong</td>
                                                    <td>$5,805</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>230094773</td>
                                                    <td>Hartman, Murphy I.</td>
                                                    <td>02-19-19</td>
                                                    <td>Aenean.sed.pede@utodio.ca</td>
                                                    <td>120</td>
                                                    <td>Equatorial Guinea</td>
                                                    <td>$5,785</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>656291846</td>
                                                    <td>Hartman, Griffin I.</td>
                                                    <td>09-04-19</td>
                                                    <td>diam@tellusNunc.com</td>
                                                    <td>369</td>
                                                    <td>Suriname</td>
                                                    <td>$6,885</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>667672315</td>
                                                    <td>Buchanan, Jack N.</td>
                                                    <td>09-19-19</td>
                                                    <td>odio.vel.est@quam.co.uk</td>
                                                    <td>394</td>
                                                    <td>India</td>
                                                    <td>$6,480</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>895637221</td>
                                                    <td>Holloway, Molly T.</td>
                                                    <td>12-04-19</td>
                                                    <td>Aliquam.gravida.mauris@acnullaIn.net</td>
                                                    <td>978</td>
                                                    <td>Qatar</td>
                                                    <td>$7,940</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>582511127</td>
                                                    <td>Pacheco, Nicholas Q.</td>
                                                    <td>12-17-19</td>
                                                    <td>aliquam.enim.nec@eros.edu</td>
                                                    <td>860</td>
                                                    <td>Botswana</td>
                                                    <td>$9,291</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>473206092</td>
                                                    <td>Woods, Lucian Y.</td>
                                                    <td>04-04-20</td>
                                                    <td>ac@bibendumsedest.co.uk</td>
                                                    <td>267</td>
                                                    <td>Reunion</td>
                                                    <td>$6,514</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>058837337</td>
                                                    <td>Shelton, Benedict Q.</td>
                                                    <td>08-18-18</td>
                                                    <td>Suspendisse.non@convallisligulaDonec.net</td>
                                                    <td>556</td>
                                                    <td>Senegal</td>
                                                    <td>$5,960</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>435186291</td>
                                                    <td>Mcmahon, Zephania V.</td>
                                                    <td>03-20-19</td>
                                                    <td>commodo@viverra.ca</td>
                                                    <td>313</td>
                                                    <td>Estonia</td>
                                                    <td>$9,119</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>290955491</td>
                                                    <td>Bryant, Paloma S.</td>
                                                    <td>08-09-18</td>
                                                    <td>tellus.id.nunc@nonlorem.com</td>
                                                    <td>564</td>
                                                    <td>Belarus</td>
                                                    <td>$7,675</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>960011146</td>
                                                    <td>Sutton, Dominique R.</td>
                                                    <td>03-31-19</td>
                                                    <td>nisi.magna.sed@ipsumsodales.co.uk</td>
                                                    <td>517</td>
                                                    <td>Central African Republic</td>
                                                    <td>$5,836</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>332794726</td>
                                                    <td>Whitehead, Amal R.</td>
                                                    <td>05-02-20</td>
                                                    <td>ultricies.adipiscing@insodales.edu</td>
                                                    <td>450</td>
                                                    <td>Equatorial Guinea</td>
                                                    <td>$5,351</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>270594724</td>
                                                    <td>Hopkins, Taylor I.</td>
                                                    <td>05-03-20</td>
                                                    <td>neque.venenatis@tristique.net</td>
                                                    <td>509</td>
                                                    <td>Uzbekistan</td>
                                                    <td>$5,373</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>062276811</td>
                                                    <td>Dalton, Ursula I.</td>
                                                    <td>05-23-19</td>
                                                    <td>sit.amet.consectetuer@Fusce.org</td>
                                                    <td>235</td>
                                                    <td>Grenada</td>
                                                    <td>$8,587</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>475988143</td>
                                                    <td>Velasquez, Harper B.</td>
                                                    <td>05-03-20</td>
                                                    <td>et.ultrices@Proinvel.ca</td>
                                                    <td>166</td>
                                                    <td>Cuba</td>
                                                    <td>$5,844</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>959744004</td>
                                                    <td>Flowers, Jackson U.</td>
                                                    <td>10-06-19</td>
                                                    <td>Cras.pellentesque@interdum.edu</td>
                                                    <td>654</td>
                                                    <td>Tokelau</td>
                                                    <td>$8,953</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>461623134</td>
                                                    <td>Massey, Mercedes R.</td>
                                                    <td>05-22-20</td>
                                                    <td>Suspendisse.tristique.neque@Praesentinterdum.com</td>
                                                    <td>199</td>
                                                    <td>Bahamas</td>
                                                    <td>$7,332</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>197211170</td>
                                                    <td>Barrera, Ulysses V.</td>
                                                    <td>02-17-19</td>
                                                    <td>leo.in@duiaugueeu.com</td>
                                                    <td>809</td>
                                                    <td>Spain</td>
                                                    <td>$9,416</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>918682220</td>
                                                    <td>Wilder, Sophia L.</td>
                                                    <td>03-06-19</td>
                                                    <td>et@mienim.net</td>
                                                    <td>480</td>
                                                    <td>Congo, the Democratic Republic of the</td>
                                                    <td>$5,571</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>268276169</td>
                                                    <td>Lott, Tucker E.</td>
                                                    <td>02-03-19</td>
                                                    <td>pede.ultrices.a@pharetra.org</td>
                                                    <td>344</td>
                                                    <td>Congo, the Democratic Republic of the</td>
                                                    <td>$7,563</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>690297924</td>
                                                    <td>Morse, Alyssa G.</td>
                                                    <td>11-27-19</td>
                                                    <td>sed.sem@Aliquamauctor.edu</td>
                                                    <td>513</td>
                                                    <td>Malta</td>
                                                    <td>$8,768</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>591331798</td>
                                                    <td>Kemp, Darrel H.</td>
                                                    <td>04-17-20</td>
                                                    <td>nunc.ac.mattis@facilisisSuspendissecommodo.co.uk</td>
                                                    <td>479</td>
                                                    <td>Papua New Guinea</td>
                                                    <td>$7,197</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>186475257</td>
                                                    <td>Madden, Keaton R.</td>
                                                    <td>04-27-20</td>
                                                    <td>lectus@convallisconvallis.net</td>
                                                    <td>361</td>
                                                    <td>Serbia</td>
                                                    <td>$9,904</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>510961618</td>
                                                    <td>Chaney, Brynne H.</td>
                                                    <td>10-23-19</td>
                                                    <td>Aliquam@venenatisamagna.edu</td>
                                                    <td>305</td>
                                                    <td>Indonesia</td>
                                                    <td>$6,660</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>543494850</td>
                                                    <td>Carroll, Alexis S.</td>
                                                    <td>07-07-19</td>
                                                    <td>erat.eget@tincidunt.org</td>
                                                    <td>640</td>
                                                    <td>Falkland Islands</td>
                                                    <td>$9,617</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>304655673</td>
                                                    <td>Key, Chase F.</td>
                                                    <td>03-09-19</td>
                                                    <td>lectus@convallisconvallisdolor.edu</td>
                                                    <td>171</td>
                                                    <td>Cyprus</td>
                                                    <td>$8,533</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>462690355</td>
                                                    <td>Douglas, Sebastian Z.</td>
                                                    <td>03-16-19</td>
                                                    <td>scelerisque.neque@utlacus.com</td>
                                                    <td>432</td>
                                                    <td>Guyana</td>
                                                    <td>$6,932</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>156043267</td>
                                                    <td>Spence, Gillian K.</td>
                                                    <td>09-03-18</td>
                                                    <td>pellentesque.eget@Fusce.org</td>
                                                    <td>557</td>
                                                    <td>Christmas Island</td>
                                                    <td>$9,081</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>163510126</td>
                                                    <td>Hill, Ingrid N.</td>
                                                    <td>02-01-20</td>
                                                    <td>pede.nec.ante@pellentesque.edu</td>
                                                    <td>395</td>
                                                    <td>French Guiana</td>
                                                    <td>$8,552</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>622838605</td>
                                                    <td>Larson, Matthew C.</td>
                                                    <td>05-09-20</td>
                                                    <td>consequat@vitaeeratvel.net</td>
                                                    <td>771</td>
                                                    <td>Rwanda</td>
                                                    <td>$6,559</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>916243272</td>
                                                    <td>Wagner, Xerxes X.</td>
                                                    <td>07-19-18</td>
                                                    <td>erat@egestaslaciniaSed.org</td>
                                                    <td>647</td>
                                                    <td>Oman</td>
                                                    <td>$8,061</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>218462067</td>
                                                    <td>Yang, Savannah M.</td>
                                                    <td>08-10-18</td>
                                                    <td>lacinia.at@Morbiaccumsan.co.uk</td>
                                                    <td>632</td>
                                                    <td>China</td>
                                                    <td>$6,029</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>641016894</td>
                                                    <td>Blankenship, Silas Y.</td>
                                                    <td>10-08-19</td>
                                                    <td>tristique.aliquet.Phasellus@habitant.edu</td>
                                                    <td>780</td>
                                                    <td>Indonesia</td>
                                                    <td>$8,447</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>736823352</td>
                                                    <td>Schneider, Kamal E.</td>
                                                    <td>02-11-20</td>
                                                    <td>nec.leo.Morbi@liberoet.com</td>
                                                    <td>905</td>
                                                    <td>Hungary</td>
                                                    <td>$6,009</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>014625222</td>
                                                    <td>Goodwin, Carol T.</td>
                                                    <td>05-20-19</td>
                                                    <td>luctus@tortordictum.com</td>
                                                    <td>915</td>
                                                    <td>Saint Barthélemy</td>
                                                    <td>$7,961</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>665870531</td>
                                                    <td>Sargent, Rogan I.</td>
                                                    <td>11-08-19</td>
                                                    <td>non.sollicitudin.a@elitelitfermentum.org</td>
                                                    <td>759</td>
                                                    <td>Jordan</td>
                                                    <td>$7,840</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>341513158</td>
                                                    <td>Mendez, Alfonso Z.</td>
                                                    <td>08-14-19</td>
                                                    <td>Vestibulum.ante@sem.edu</td>
                                                    <td>766</td>
                                                    <td>Falkland Islands</td>
                                                    <td>$7,280</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>746815364</td>
                                                    <td>Deleon, Rachel C.</td>
                                                    <td>02-16-20</td>
                                                    <td>nisl@semperpretium.edu</td>
                                                    <td>183</td>
                                                    <td>Peru</td>
                                                    <td>$6,726</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>273111385</td>
                                                    <td>Hopper, Tobias W.</td>
                                                    <td>05-17-20</td>
                                                    <td>convallis@eratneque.edu</td>
                                                    <td>315</td>
                                                    <td>Cook Islands</td>
                                                    <td>$6,870</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>025589813</td>
                                                    <td>Richmond, Dolan H.</td>
                                                    <td>07-20-19</td>
                                                    <td>fringilla@liberoduinec.co.uk</td>
                                                    <td>969</td>
                                                    <td>American Samoa</td>
                                                    <td>$8,530</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>318399474</td>
                                                    <td>Nunez, Thane P.</td>
                                                    <td>10-17-19</td>
                                                    <td>consequat.lectus@nunc.org</td>
                                                    <td>636</td>
                                                    <td>Sweden</td>
                                                    <td>$5,656</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>945440014</td>
                                                    <td>Rosario, Kenneth D.</td>
                                                    <td>04-07-19</td>
                                                    <td>in.molestie@dolorelit.net</td>
                                                    <td>722</td>
                                                    <td>Puerto Rico</td>
                                                    <td>$6,326</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>044328789</td>
                                                    <td>Chen, Sharon W.</td>
                                                    <td>01-24-19</td>
                                                    <td>imperdiet.ornare@augue.co.uk</td>
                                                    <td>419</td>
                                                    <td>Lesotho</td>
                                                    <td>$7,406</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>348706227</td>
                                                    <td>Kennedy, Garth B.</td>
                                                    <td>08-20-18</td>
                                                    <td>Donec.feugiat@adipiscing.edu</td>
                                                    <td>145</td>
                                                    <td>Palestine, State of</td>
                                                    <td>$6,961</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>706217387</td>
                                                    <td>Barton, Paki W.</td>
                                                    <td>03-13-20</td>
                                                    <td>at.velit.Pellentesque@Suspendisse.ca</td>
                                                    <td>847</td>
                                                    <td>Sao Tome and Principe</td>
                                                    <td>$8,342</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>570593442</td>
                                                    <td>Reed, Adria M.</td>
                                                    <td>08-25-18</td>
                                                    <td>feugiat@justonec.co.uk</td>
                                                    <td>474</td>
                                                    <td>Cyprus</td>
                                                    <td>$7,680</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>308696228</td>
                                                    <td>Patton, Blaine M.</td>
                                                    <td>10-05-19</td>
                                                    <td>elementum@auctorvelit.org</td>
                                                    <td>689</td>
                                                    <td>Bermuda</td>
                                                    <td>$8,421</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>225437920</td>
                                                    <td>Malone, Serina K.</td>
                                                    <td>12-20-19</td>
                                                    <td>interdum.Sed.auctor@dolor.com</td>
                                                    <td>936</td>
                                                    <td>Luxembourg</td>
                                                    <td>$7,529</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>913619417</td>
                                                    <td>Snow, Skyler K.</td>
                                                    <td>07-02-19</td>
                                                    <td>Curabitur.sed.tortor@euneque.com</td>
                                                    <td>284</td>
                                                    <td>Costa Rica</td>
                                                    <td>$8,341</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>246424915</td>
                                                    <td>Snider, Cecilia C.</td>
                                                    <td>12-17-18</td>
                                                    <td>orci.adipiscing@maurissapien.ca</td>
                                                    <td>170</td>
                                                    <td>Serbia</td>
                                                    <td>$7,146</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>054562889</td>
                                                    <td>Mcgee, Quyn R.</td>
                                                    <td>01-14-20</td>
                                                    <td>semper@interdumenimnon.com</td>
                                                    <td>281</td>
                                                    <td>Spain</td>
                                                    <td>$7,673</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>651566150</td>
                                                    <td>Berger, Echo X.</td>
                                                    <td>10-08-19</td>
                                                    <td>magnis.dis@nequeInornare.co.uk</td>
                                                    <td>686</td>
                                                    <td>Niue</td>
                                                    <td>$8,190</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>234164663</td>
                                                    <td>Carter, Sopoline N.</td>
                                                    <td>07-01-19</td>
                                                    <td>sit.amet.metus@imperdiet.org</td>
                                                    <td>538</td>
                                                    <td>Cambodia</td>
                                                    <td>$8,042</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>132403056</td>
                                                    <td>Hernandez, Desirae W.</td>
                                                    <td>10-06-18</td>
                                                    <td>commodo.auctor@tempus.edu</td>
                                                    <td>531</td>
                                                    <td>Saint Barthélemy</td>
                                                    <td>$7,241</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>302907167</td>
                                                    <td>Kidd, Unity R.</td>
                                                    <td>07-02-19</td>
                                                    <td>fermentum.vel@atliberoMorbi.co.uk</td>
                                                    <td>881</td>
                                                    <td>Guinea</td>
                                                    <td>$9,476</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>457711257</td>
                                                    <td>Mays, Quynn G.</td>
                                                    <td>04-17-19</td>
                                                    <td>eget.dictum.placerat@Donec.co.uk</td>
                                                    <td>179</td>
                                                    <td>Bangladesh</td>
                                                    <td>$6,944</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>822402913</td>
                                                    <td>Cobb, Heather Q.</td>
                                                    <td>01-30-19</td>
                                                    <td>pharetra.nibh@erat.org</td>
                                                    <td>591</td>
                                                    <td>Barbados</td>
                                                    <td>$6,243</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>133496570</td>
                                                    <td>Norman, Elijah I.</td>
                                                    <td>03-16-19</td>
                                                    <td>ridiculus.mus.Proin@ipsum.edu</td>
                                                    <td>313</td>
                                                    <td>Bosnia and Herzegovina</td>
                                                    <td>$9,748</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>143641645</td>
                                                    <td>Cherry, Phyllis W.</td>
                                                    <td>08-06-19</td>
                                                    <td>ipsum.leo@quis.co.uk</td>
                                                    <td>626</td>
                                                    <td>Sri Lanka</td>
                                                    <td>$7,641</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>997733126</td>
                                                    <td>Wright, Warren X.</td>
                                                    <td>06-09-19</td>
                                                    <td>a.auctor@interdum.org</td>
                                                    <td>876</td>
                                                    <td>Egypt</td>
                                                    <td>$8,458</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>433765625</td>
                                                    <td>Daugherty, Sylvia O.</td>
                                                    <td>04-07-19</td>
                                                    <td>blandit.Nam@disparturientmontes.edu</td>
                                                    <td>973</td>
                                                    <td>Bermuda</td>
                                                    <td>$5,551</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>468916945</td>
                                                    <td>Myers, Bryar W.</td>
                                                    <td>10-03-18</td>
                                                    <td>Nulla.semper@nonjustoProin.com</td>
                                                    <td>273</td>
                                                    <td>Isle of Man</td>
                                                    <td>$6,671</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>874521677</td>
                                                    <td>Brennan, Vance I.</td>
                                                    <td>03-04-20</td>
                                                    <td>urna@pharetra.edu</td>
                                                    <td>509</td>
                                                    <td>Puerto Rico</td>
                                                    <td>$5,918</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>609952775</td>
                                                    <td>Banks, Portia T.</td>
                                                    <td>05-26-20</td>
                                                    <td>Proin.vel.nisl@justonec.com</td>
                                                    <td>754</td>
                                                    <td>Romania</td>
                                                    <td>$6,316</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>672207271</td>
                                                    <td>Mccoy, Brady F.</td>
                                                    <td>09-02-18</td>
                                                    <td>lobortis.mauris@atnisiCum.net</td>
                                                    <td>179</td>
                                                    <td>Venezuela</td>
                                                    <td>$7,909</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>140391038</td>
                                                    <td>Mcconnell, Hamish C.</td>
                                                    <td>05-19-20</td>
                                                    <td>egestas@Loremipsum.co.uk</td>
                                                    <td>424</td>
                                                    <td>Netherlands</td>
                                                    <td>$6,285</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>100877406</td>
                                                    <td>Stuart, Hilda C.</td>
                                                    <td>02-24-20</td>
                                                    <td>Vivamus.nibh@quis.ca</td>
                                                    <td>514</td>
                                                    <td>Afghanistan</td>
                                                    <td>$6,408</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>083842419</td>
                                                    <td>Page, Emi G.</td>
                                                    <td>09-16-18</td>
                                                    <td>Integer.sem.elit@quispedePraesent.ca</td>
                                                    <td>835</td>
                                                    <td>Tokelau</td>
                                                    <td>$5,696</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>025865486</td>
                                                    <td>Rasmussen, Piper C.</td>
                                                    <td>01-18-19</td>
                                                    <td>blandit@molestiesodales.com</td>
                                                    <td>496</td>
                                                    <td>Slovakia</td>
                                                    <td>$8,843</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>602908154</td>
                                                    <td>Kinney, Laurel N.</td>
                                                    <td>01-27-20</td>
                                                    <td>neque.Nullam@penatibuset.org</td>
                                                    <td>718</td>
                                                    <td>Norfolk Island</td>
                                                    <td>$8,374</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>103910519</td>
                                                    <td>Hess, Oren I.</td>
                                                    <td>10-29-19</td>
                                                    <td>tincidunt.pede.ac@tellusNunclectus.edu</td>
                                                    <td>804</td>
                                                    <td>Mauritius</td>
                                                    <td>$5,009</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>053136990</td>
                                                    <td>Baldwin, Beau W.</td>
                                                    <td>03-20-19</td>
                                                    <td>a.felis@nisiaodio.org</td>
                                                    <td>133</td>
                                                    <td>Saint Lucia</td>
                                                    <td>$8,786</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>554906412</td>
                                                    <td>Herrera, Lila R.</td>
                                                    <td>01-10-19</td>
                                                    <td>habitant.morbi.tristique@aptent.edu</td>
                                                    <td>441</td>
                                                    <td>Malawi</td>
                                                    <td>$7,422</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>813289717</td>
                                                    <td>Rowland, Jameson U.</td>
                                                    <td>10-19-19</td>
                                                    <td>est.vitae@molestieorcitincidunt.com</td>
                                                    <td>224</td>
                                                    <td>Bouvet Island</td>
                                                    <td>$7,380</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>552262891</td>
                                                    <td>Burks, Tanya X.</td>
                                                    <td>03-26-19</td>
                                                    <td>nunc.risus@leo.co.uk</td>
                                                    <td>168</td>
                                                    <td>Australia</td>
                                                    <td>$9,070</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>925675126</td>
                                                    <td>Santana, Knox B.</td>
                                                    <td>06-05-20</td>
                                                    <td>at.libero@molestie.org</td>
                                                    <td>288</td>
                                                    <td>Armenia</td>
                                                    <td>$7,205</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>042657015</td>
                                                    <td>Russell, Ima J.</td>
                                                    <td>10-06-18</td>
                                                    <td>egestas.lacinia.Sed@risusDonec.com</td>
                                                    <td>588</td>
                                                    <td>New Caledonia</td>
                                                    <td>$7,272</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>379067929</td>
                                                    <td>Knowles, Chanda J.</td>
                                                    <td>09-06-18</td>
                                                    <td>tristique@antedictum.co.uk</td>
                                                    <td>747</td>
                                                    <td>Lebanon</td>
                                                    <td>$8,249</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>322274499</td>
                                                    <td>Mcclain, Bree J.</td>
                                                    <td>03-12-20</td>
                                                    <td>ante@nislelementumpurus.org</td>
                                                    <td>224</td>
                                                    <td>Korea, South</td>
                                                    <td>$5,587</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>404718686</td>
                                                    <td>Bailey, Lani X.</td>
                                                    <td>08-07-19</td>
                                                    <td>Proin@massaMauris.ca</td>
                                                    <td>761</td>
                                                    <td>Australia</td>
                                                    <td>$6,092</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>359926938</td>
                                                    <td>Sloan, Keefe I.</td>
                                                    <td>10-14-18</td>
                                                    <td>Nullam@utaliquamiaculis.org</td>
                                                    <td>806</td>
                                                    <td>South Georgia and The South Sandwich Islands</td>
                                                    <td>$5,003</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>369436084</td>
                                                    <td>Stephenson, Lilah J.</td>
                                                    <td>07-13-19</td>
                                                    <td>nisl@metus.com</td>
                                                    <td>394</td>
                                                    <td>Zambia</td>
                                                    <td>$6,766</td>
                                                    <td>1</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>CustomerID</th>
                                                    <th>Name</th>
                                                    <th>PurchaseDate</th>
                                                    <th>CustomerEmail</th>
                                                    <th>CustomerCVV</th>
                                                    <th>Country</th>
                                                    <th>InvoiceAmount</th>
                                                    <th>Controls</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <!-- datatable end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- this overlay is activated only when mobile menu is triggered -->
                <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
                <!-- BEGIN Page Footer -->
                <footer class="page-footer" role="contentinfo">
                    <div class="d-flex align-items-center flex-1 text-muted">
                        <span class="hidden-md-down fw-700">2020 © SmartAdmin by&nbsp;<a href='https://www.gotbootstrap.com' class='text-primary fw-500' title='gotbootstrap.com' target='_blank'>gotbootstrap.com</a></span>
                    </div>
                    <div>
                        <ul class="list-table m-0">
                            <li><a href="intel_introduction.html" class="text-secondary fw-700">About</a></li>
                            <li class="pl-3"><a href="info_app_licensing.html" class="text-secondary fw-700">License</a></li>
                            <li class="pl-3"><a href="info_app_docs.html" class="text-secondary fw-700">Documentation</a></li>
                            <li class="pl-3 fs-xl"><a href="https://wrapbootstrap.com/user/MyOrange" class="text-secondary" target="_blank"><i class="fal fa-question-circle" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </footer>
                <!-- END Page Footer -->
                <!-- BEGIN Shortcuts -->
                <div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog" aria-labelledby="modal-shortcut" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <ul class="app-list w-auto h-auto p-0 text-left">
                                    <li>
                                        <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                            <div class="icon-stack">
                                                <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                                <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                                            </div>
                                            <span class="app-list-name">
                                                Home
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_inbox_general.html" class="app-list-item text-white border-0 m-0">
                                            <div class="icon-stack">
                                                <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                                <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                                <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                            </div>
                                            <span class="app-list-name">
                                                Inbox
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                            <div class="icon-stack">
                                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                                <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                                            </div>
                                            <span class="app-list-name">
                                                Add More
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Shortcuts -->
                <!-- BEGIN Color profile -->
                <!-- this area is hidden and will not be seen on screens or screen readers -->
                <!-- we use this only for CSS color refernce for JS stuff -->
                <p id="js-color-profile" class="d-none">
                    <span class="color-primary-50"></span>
                    <span class="color-primary-100"></span>
                    <span class="color-primary-200"></span>
                    <span class="color-primary-300"></span>
                    <span class="color-primary-400"></span>
                    <span class="color-primary-500"></span>
                    <span class="color-primary-600"></span>
                    <span class="color-primary-700"></span>
                    <span class="color-primary-800"></span>
                    <span class="color-primary-900"></span>
                    <span class="color-info-50"></span>
                    <span class="color-info-100"></span>
                    <span class="color-info-200"></span>
                    <span class="color-info-300"></span>
                    <span class="color-info-400"></span>
                    <span class="color-info-500"></span>
                    <span class="color-info-600"></span>
                    <span class="color-info-700"></span>
                    <span class="color-info-800"></span>
                    <span class="color-info-900"></span>
                    <span class="color-danger-50"></span>
                    <span class="color-danger-100"></span>
                    <span class="color-danger-200"></span>
                    <span class="color-danger-300"></span>
                    <span class="color-danger-400"></span>
                    <span class="color-danger-500"></span>
                    <span class="color-danger-600"></span>
                    <span class="color-danger-700"></span>
                    <span class="color-danger-800"></span>
                    <span class="color-danger-900"></span>
                    <span class="color-warning-50"></span>
                    <span class="color-warning-100"></span>
                    <span class="color-warning-200"></span>
                    <span class="color-warning-300"></span>
                    <span class="color-warning-400"></span>
                    <span class="color-warning-500"></span>
                    <span class="color-warning-600"></span>
                    <span class="color-warning-700"></span>
                    <span class="color-warning-800"></span>
                    <span class="color-warning-900"></span>
                    <span class="color-success-50"></span>
                    <span class="color-success-100"></span>
                    <span class="color-success-200"></span>
                    <span class="color-success-300"></span>
                    <span class="color-success-400"></span>
                    <span class="color-success-500"></span>
                    <span class="color-success-600"></span>
                    <span class="color-success-700"></span>
                    <span class="color-success-800"></span>
                    <span class="color-success-900"></span>
                    <span class="color-fusion-50"></span>
                    <span class="color-fusion-100"></span>
                    <span class="color-fusion-200"></span>
                    <span class="color-fusion-300"></span>
                    <span class="color-fusion-400"></span>
                    <span class="color-fusion-500"></span>
                    <span class="color-fusion-600"></span>
                    <span class="color-fusion-700"></span>
                    <span class="color-fusion-800"></span>
                    <span class="color-fusion-900"></span>
                </p>
                <!-- END Color profile -->
            </div>
        </div>
    </div>
    <!-- END Page Wrapper -->
    <!-- BEGIN Quick Menu -->
    <!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
    <nav class="shortcut-menu d-none d-sm-block">
        <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
        <label for="menu_open" class="menu-open-button ">
            <span class="app-shortcut-icon d-block"></span>
        </label>
        <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
            <i class="fal fa-arrow-up"></i>
        </a>
        <a href="page_login.html" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Logout">
            <i class="fal fa-sign-out"></i>
        </a>
        <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left" title="Full Screen">
            <i class="fal fa-expand"></i>
        </a>
        <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left" title="Print page">
            <i class="fal fa-print"></i>
        </a>
        <a href="#" class="menu-item btn" data-action="app-voice" data-toggle="tooltip" data-placement="left" title="Voice command">
            <i class="fal fa-microphone"></i>
        </a>
    </nav>
    <!-- END Quick Menu -->
    <!-- BEGIN Messenger -->
    <div class="modal fade js-modal-messenger modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content h-100">
                <div class="dropdown-header bg-trans-gradient d-flex align-items-center w-100">
                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                        <span class="mr-2">
                            <span class="rounded-circle profile-image d-block" style="background-image:url('img/demo/avatars/avatar-d.png'); background-size: cover;"></span>
                        </span>
                        <div class="info-card-text">
                            <a href="javascript:void(0);" class="fs-lg text-truncate text-truncate-lg text-white" data-toggle="dropdown" aria-expanded="false">
                                Tracey Chang
                                <i class="fal fa-angle-down d-inline-block ml-1 text-white fs-md"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Send Email</a>
                                <a class="dropdown-item" href="#">Create Appointment</a>
                                <a class="dropdown-item" href="#">Block User</a>
                            </div>
                            <span class="text-truncate text-truncate-md opacity-80">IT Director</span>
                        </div>
                    </div>
                    <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body p-0 h-100 d-flex">
                    <!-- BEGIN msgr-list -->
                    <div class="msgr-list d-flex flex-column bg-faded border-faded border-top-0 border-right-0 border-bottom-0 position-absolute pos-top pos-bottom">
                        <div>
                            <div class="height-4 width-3 h3 m-0 d-flex justify-content-center flex-column color-primary-500 pl-3 mt-2">
                                <i class="fal fa-search"></i>
                            </div>
                            <input type="text" class="form-control bg-white" id="msgr_listfilter_input" placeholder="Filter contacts" aria-label="FriendSearch" data-listfilter="#js-msgr-listfilter">
                        </div>
                        <div class="flex-1 h-100 custom-scroll">
                            <div class="w-100">
                                <ul id="js-msgr-listfilter" class="list-unstyled m-0">
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="tracey chang online">
                                            <div class="d-table-cell align-middle status status-success status-sm ">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-d.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    Tracey Chang
                                                    <small class="d-block font-italic text-success fs-xs">
                                                        Online
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="oliver kopyuv online">
                                            <div class="d-table-cell align-middle status status-success status-sm ">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    Oliver Kopyuv
                                                    <small class="d-block font-italic text-success fs-xs">
                                                        Online
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="dr john cook phd away">
                                            <div class="d-table-cell align-middle status status-warning status-sm ">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    Dr. John Cook PhD
                                                    <small class="d-block font-italic fs-xs">
                                                        Away
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney online">
                                            <div class="d-table-cell align-middle status status-success status-sm ">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-g.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    Ali Amdaney
                                                    <small class="d-block font-italic fs-xs text-success">
                                                        Online
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="sarah mcbrook online">
                                            <div class="d-table-cell align-middle status status-success status-sm">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    Sarah McBrook
                                                    <small class="d-block font-italic fs-xs text-success">
                                                        Online
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney offline">
                                            <div class="d-table-cell align-middle status status-sm">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    oliver.kopyuv@gotbootstrap.com
                                                    <small class="d-block font-italic fs-xs">
                                                        Offline
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney busy">
                                            <div class="d-table-cell align-middle status status-danger status-sm">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-j.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    oliver.kopyuv@gotbootstrap.com
                                                    <small class="d-block font-italic fs-xs text-danger">
                                                        Busy
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney offline">
                                            <div class="d-table-cell align-middle status status-sm">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    oliver.kopyuv@gotbootstrap.com
                                                    <small class="d-block font-italic fs-xs">
                                                        Offline
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney inactive">
                                            <div class="d-table-cell align-middle">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-m.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    +714651347790
                                                    <small class="d-block font-italic fs-xs opacity-50">
                                                        Missed Call
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="filter-message js-filter-message"></div>
                            </div>
                        </div>
                        <div>
                            <a class="fs-xl d-flex align-items-center p-3">
                                <i class="fal fa-cogs"></i>
                            </a>
                        </div>
                    </div>
                    <!-- END msgr-list -->
                    <!-- BEGIN msgr -->
                    <div class="msgr d-flex h-100 flex-column bg-white">
                        <!-- BEGIN custom-scroll -->
                        <div class="custom-scroll flex-1 h-100">
                            <div id="chat_container" class="w-100 p-4">
                                <!-- start .chat-segment -->
                                <div class="chat-segment">
                                    <div class="time-stamp text-center mb-2 fw-400">
                                        Jun 19
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-sent">
                                    <div class="chat-message">
                                        <p>
                                            Hey Tracey, did you get my files?
                                        </p>
                                    </div>
                                    <div class="text-right fw-300 text-muted mt-1 fs-xs">
                                        3:00 pm
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-get">
                                    <div class="chat-message">
                                        <p>
                                            Hi
                                        </p>
                                        <p>
                                            Sorry going through a busy time in office. Yes I analyzed the solution.
                                        </p>
                                        <p>
                                            It will require some resource, which I could not manage.
                                        </p>
                                    </div>
                                    <div class="fw-300 text-muted mt-1 fs-xs">
                                        3:24 pm
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-sent chat-start">
                                    <div class="chat-message">
                                        <p>
                                            Okay
                                        </p>
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-sent chat-end">
                                    <div class="chat-message">
                                        <p>
                                            Sending you some dough today, you can allocate the resources to this project.
                                        </p>
                                    </div>
                                    <div class="text-right fw-300 text-muted mt-1 fs-xs">
                                        3:26 pm
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-get chat-start">
                                    <div class="chat-message">
                                        <p>
                                            Perfect. Thanks a lot!
                                        </p>
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-get">
                                    <div class="chat-message">
                                        <p>
                                            I will have them ready by tonight.
                                        </p>
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-get chat-end">
                                    <div class="chat-message">
                                        <p>
                                            Cheers
                                        </p>
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment for timestamp -->
                                <div class="chat-segment">
                                    <div class="time-stamp text-center mb-2 fw-400">
                                        Jun 20
                                    </div>
                                </div>
                                <!--  end .chat-segment for timestamp -->
                            </div>
                        </div>
                        <!-- END custom-scroll  -->
                        <!-- BEGIN msgr__chatinput -->
                        <div class="d-flex flex-column">
                            <div class="border-faded border-right-0 border-bottom-0 border-left-0 flex-1 mr-3 ml-3 position-relative shadow-top">
                                <div class="pt-3 pb-1 pr-0 pl-0 rounded-0" tabindex="-1">
                                    <div id="msgr_input" contenteditable="true" data-placeholder="Type your message here..." class="height-10 form-content-editable"></div>
                                </div>
                            </div>
                            <div class="height-8 px-3 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                <a href="javascript:void(0);" class="btn btn-icon fs-xl width-1 mr-1" data-toggle="tooltip" data-original-title="More options" data-placement="top">
                                    <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Attach files" data-placement="top">
                                    <i class="fal fa-paperclip color-fusion-300"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Insert photo" data-placement="top">
                                    <i class="fal fa-camera color-fusion-300"></i>
                                </a>
                                <div class="ml-auto">
                                    <a href="javascript:void(0);" class="btn btn-info">Send</a>
                                </div>
                            </div>
                        </div>
                        <!-- END msgr__chatinput -->
                    </div>
                    <!-- END msgr -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Messenger -->
    <!-- BEGIN Page Settings -->
    <div class="modal fade js-modal-settings modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right modal-md">
            <div class="modal-content">
                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center w-100">
                    <h4 class="m-0 text-center color-white">
                        Layout Settings
                        <small class="mb-0 opacity-80">User Interface Settings</small>
                    </h4>
                    <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="settings-panel">
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">
                                    App Layout
                                </h5>
                            </div>
                        </div>
                        <div class="list" id="fh">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="header-function-fixed"></a>
                            <span class="onoffswitch-title">Fixed Header</span>
                            <span class="onoffswitch-title-desc">header is in a fixed at all times</span>
                        </div>
                        <div class="list" id="nff">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-fixed"></a>
                            <span class="onoffswitch-title">Fixed Navigation</span>
                            <span class="onoffswitch-title-desc">left panel is fixed</span>
                        </div>
                        <div class="list" id="nfm">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-minify"></a>
                            <span class="onoffswitch-title">Minify Navigation</span>
                            <span class="onoffswitch-title-desc">Skew nav to maximize space</span>
                        </div>
                        <div class="list" id="nfh">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-hidden"></a>
                            <span class="onoffswitch-title">Hide Navigation</span>
                            <span class="onoffswitch-title-desc">roll mouse on edge to reveal</span>
                        </div>
                        <div class="list" id="nft">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-top"></a>
                            <span class="onoffswitch-title">Top Navigation</span>
                            <span class="onoffswitch-title-desc">Relocate left pane to top</span>
                        </div>
                        <div class="list" id="fff">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="footer-function-fixed"></a>
                            <span class="onoffswitch-title">Fixed Footer</span>
                            <span class="onoffswitch-title-desc">page footer is fixed</span>
                        </div>
                        <div class="list" id="mmb">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-main-boxed"></a>
                            <span class="onoffswitch-title">Boxed Layout</span>
                            <span class="onoffswitch-title-desc">Encapsulates to a container</span>
                        </div>
                        <div class="expanded">
                            <ul class="mb-3 mt-1">
                                <li>
                                    <div class="bg-fusion-50" data-action="toggle" data-class="mod-bg-1"></div>
                                </li>
                                <li>
                                    <div class="bg-warning-200" data-action="toggle" data-class="mod-bg-2"></div>
                                </li>
                                <li>
                                    <div class="bg-primary-200" data-action="toggle" data-class="mod-bg-3"></div>
                                </li>
                                <li>
                                    <div class="bg-success-300" data-action="toggle" data-class="mod-bg-4"></div>
                                </li>
                                <li>
                                    <div class="bg-white border" data-action="toggle" data-class="mod-bg-none"></div>
                                </li>
                            </ul>
                            <div class="list" id="mbgf">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-fixed-bg"></a>
                                <span class="onoffswitch-title">Fixed Background</span>
                            </div>
                        </div>
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">
                                    Mobile Menu
                                </h5>
                            </div>
                        </div>
                        <div class="list" id="nmp">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-push"></a>
                            <span class="onoffswitch-title">Push Content</span>
                            <span class="onoffswitch-title-desc">Content pushed on menu reveal</span>
                        </div>
                        <div class="list" id="nmno">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-no-overlay"></a>
                            <span class="onoffswitch-title">No Overlay</span>
                            <span class="onoffswitch-title-desc">Removes mesh on menu reveal</span>
                        </div>
                        <div class="list" id="sldo">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-slide-out"></a>
                            <span class="onoffswitch-title">Off-Canvas <sup>(beta)</sup></span>
                            <span class="onoffswitch-title-desc">Content overlaps menu</span>
                        </div>
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">
                                    Accessibility
                                </h5>
                            </div>
                        </div>
                        <div class="list" id="mbf">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-bigger-font"></a>
                            <span class="onoffswitch-title">Bigger Content Font</span>
                            <span class="onoffswitch-title-desc">content fonts are bigger for readability</span>
                        </div>
                        <div class="list" id="mhc">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-high-contrast"></a>
                            <span class="onoffswitch-title">High Contrast Text (WCAG 2 AA)</span>
                            <span class="onoffswitch-title-desc">4.5:1 text contrast ratio</span>
                        </div>
                        <div class="list" id="mcb">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-color-blind"></a>
                            <span class="onoffswitch-title">Daltonism <sup>(beta)</sup> </span>
                            <span class="onoffswitch-title-desc">color vision deficiency</span>
                        </div>
                        <div class="list" id="mpc">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-pace-custom"></a>
                            <span class="onoffswitch-title">Preloader Inside</span>
                            <span class="onoffswitch-title-desc">preloader will be inside content</span>
                        </div>
                        <div class="list" id="mpi">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-panel-icon"></a>
                            <span class="onoffswitch-title">SmartPanel Icons (not Panels)</span>
                            <span class="onoffswitch-title-desc">smartpanel buttons will appear as icons</span>
                        </div>
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">
                                    Global Modifications
                                </h5>
                            </div>
                        </div>
                        <div class="list" id="mcbg">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-clean-page-bg"></a>
                            <span class="onoffswitch-title">Clean Page Background</span>
                            <span class="onoffswitch-title-desc">adds more whitespace</span>
                        </div>
                        <div class="list" id="mhni">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-nav-icons"></a>
                            <span class="onoffswitch-title">Hide Navigation Icons</span>
                            <span class="onoffswitch-title-desc">invisible navigation icons</span>
                        </div>
                        <div class="list" id="dan">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-disable-animation"></a>
                            <span class="onoffswitch-title">Disable CSS Animation</span>
                            <span class="onoffswitch-title-desc">Disables CSS based animations</span>
                        </div>
                        <div class="list" id="mhic">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-info-card"></a>
                            <span class="onoffswitch-title">Hide Info Card</span>
                            <span class="onoffswitch-title-desc">Hides info card from left panel</span>
                        </div>
                        <div class="list" id="mlph">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-lean-subheader"></a>
                            <span class="onoffswitch-title">Lean Subheader</span>
                            <span class="onoffswitch-title-desc">distinguished page header</span>
                        </div>
                        <div class="list" id="mnl">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-nav-link"></a>
                            <span class="onoffswitch-title">Hierarchical Navigation</span>
                            <span class="onoffswitch-title-desc">Clear breakdown of nav links</span>
                        </div>
                        <div class="list" id="mdn">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-nav-dark"></a>
                            <span class="onoffswitch-title">Dark Navigation</span>
                            <span class="onoffswitch-title-desc">Navigation background is darkend</span>
                        </div>
                        <hr class="mb-0 mt-4">
                        <div class="mt-4 d-table w-100 pl-5 pr-3">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">
                                    Global Font Size
                                </h5>
                            </div>
                        </div>
                        <div class="list mt-1">
                            <div class="btn-group btn-group-sm btn-group-toggle my-2" data-toggle="buttons">
                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-sm" data-target="html">
                                    <input type="radio" name="changeFrontSize"> SM
                                </label>
                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text" data-target="html">
                                    <input type="radio" name="changeFrontSize" checked=""> MD
                                </label>
                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-lg" data-target="html">
                                    <input type="radio" name="changeFrontSize"> LG
                                </label>
                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-xl" data-target="html">
                                    <input type="radio" name="changeFrontSize"> XL
                                </label>
                            </div>
                            <span class="onoffswitch-title-desc d-block mb-0">Change <strong>root</strong> font size to effect rem
                                values (resets on page refresh)</span>
                        </div>
                        <hr class="mb-0 mt-4">
                        <div class="mt-4 d-table w-100 pl-5 pr-3">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0 pr-2 d-flex">
                                    Theme colors
                                    <a href="#" class="ml-auto fw-400 fs-xs" data-toggle="popover" data-trigger="focus" data-placement="top" title="" data-html="true" data-content="The settings below uses <code>localStorage</code> to load the external <strong>CSS</strong> file as an overlap to the base css. Due to network latency and <strong>CPU utilization</strong>, you may experience a brief flickering effect on page load which may show the intial applied theme for a split second. Setting the prefered style/theme in the header will prevent this from happening." data-original-title="<span class='text-primary'><i class='fal fa-exclamation-triangle mr-1'></i> Heads up!</span>" data-template="<div class=&quot;popover bg-white border-white&quot; role=&quot;tooltip&quot;><div class=&quot;arrow&quot;></div><h3 class=&quot;popover-header bg-transparent&quot;></h3><div class=&quot;popover-body fs-xs&quot;></div></div>"><i class="fal fa-info-circle mr-1"></i> more info</a>
                                </h5>
                            </div>
                        </div>
                        <div class="expanded theme-colors pl-5 pr-3">
                            <ul class="m-0">
                                <li>
                                    <a href="#" id="myapp-0" data-action="theme-update" data-themesave data-theme="" data-toggle="tooltip" data-placement="top" title="Wisteria (base css)" data-original-title="Wisteria (base css)"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-1" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-1.css" data-toggle="tooltip" data-placement="top" title="Tapestry" data-original-title="Tapestry"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-2" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-2.css" data-toggle="tooltip" data-placement="top" title="Atlantis" data-original-title="Atlantis"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-3" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-3.css" data-toggle="tooltip" data-placement="top" title="Indigo" data-original-title="Indigo"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-4" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-4.css" data-toggle="tooltip" data-placement="top" title="Dodger Blue" data-original-title="Dodger Blue"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-5" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-5.css" data-toggle="tooltip" data-placement="top" title="Tradewind" data-original-title="Tradewind"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-6" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-6.css" data-toggle="tooltip" data-placement="top" title="Cranberry" data-original-title="Cranberry"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-7" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-7.css" data-toggle="tooltip" data-placement="top" title="Oslo Gray" data-original-title="Oslo Gray"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-8" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-8.css" data-toggle="tooltip" data-placement="top" title="Chetwode Blue" data-original-title="Chetwode Blue"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-9" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-9.css" data-toggle="tooltip" data-placement="top" title="Apricot" data-original-title="Apricot"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-10" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-10.css" data-toggle="tooltip" data-placement="top" title="Blue Smoke" data-original-title="Blue Smoke"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-11" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-11.css" data-toggle="tooltip" data-placement="top" title="Green Smoke" data-original-title="Green Smoke"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-12" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-12.css" data-toggle="tooltip" data-placement="top" title="Wild Blue Yonder" data-original-title="Wild Blue Yonder"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-13" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-13.css" data-toggle="tooltip" data-placement="top" title="Emerald" data-original-title="Emerald"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-14" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-14.css" data-toggle="tooltip" data-placement="top" title="Supernova" data-original-title="Supernova"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-15" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-15.css" data-toggle="tooltip" data-placement="top" title="Hoki" data-original-title="Hoki"></a>
                                </li>
                            </ul>
                        </div>
                        <hr class="mb-0 mt-4">
                        <div class="mt-4 d-table w-100 pl-5 pr-3">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0 pr-2 d-flex">
                                    Theme Modes (beta)
                                    <a href="#" class="ml-auto fw-400 fs-xs" data-toggle="popover" data-trigger="focus" data-placement="top" title="" data-html="true" data-content="This is a brand new technique we are introducing which uses CSS variables to infiltrate color options. While this has been working nicely on modern browsers without much issues, some users <strong>may still face issues on Internet Explorer </strong>. Until these issues are resolved or Internet Explorer improves, this feature will remain in Beta" data-original-title="<span class='text-primary'><i class='fal fa-question-circle mr-1'></i> Why beta?</span>" data-template="<div class=&quot;popover bg-white border-white&quot; role=&quot;tooltip&quot;><div class=&quot;arrow&quot;></div><h3 class=&quot;popover-header bg-transparent&quot;></h3><div class=&quot;popover-body fs-xs&quot;></div></div>"><i class="fal fa-question-circle mr-1"></i> why beta?</a>
                                </h5>
                            </div>
                        </div>
                        <div class="pl-5 pr-3 py-3">
                            <div class="ie-only alert alert-warning d-none">
                                <h6>Internet Explorer Issue</h6>
                                This particular component may not work as expected in Internet Explorer. Please use with caution.
                            </div>
                            <div class="row no-gutters">
                                <div class="col-4 pr-2 text-center">
                                    <div id="skin-default" data-action="toggle-replace" data-replaceclass="mod-skin-light mod-skin-dark" data-class="" data-toggle="tooltip" data-placement="top" title="" class="d-flex bg-white border border-primary rounded overflow-hidden text-success js-waves-on" data-original-title="Default Mode" style="height: 80px">
                                        <div class="bg-primary-600 bg-primary-gradient px-2 pt-0 border-right border-primary"></div>
                                        <div class="d-flex flex-column flex-1">
                                            <div class="bg-white border-bottom border-primary py-1"></div>
                                            <div class="bg-faded flex-1 pt-3 pb-3 px-2">
                                                <div class="py-3" style="background:url('img/demo/s-1.png') top left no-repeat;background-size: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    Default
                                </div>
                                <div class="col-4 px-1 text-center">
                                    <div id="skin-light" data-action="toggle-replace" data-replaceclass="mod-skin-dark" data-class="mod-skin-light" data-toggle="tooltip" data-placement="top" title="" class="d-flex bg-white border border-secondary rounded overflow-hidden text-success js-waves-on" data-original-title="Light Mode" style="height: 80px">
                                        <div class="bg-white px-2 pt-0 border-right border-"></div>
                                        <div class="d-flex flex-column flex-1">
                                            <div class="bg-white border-bottom border- py-1"></div>
                                            <div class="bg-white flex-1 pt-3 pb-3 px-2">
                                                <div class="py-3" style="background:url('img/demo/s-1.png') top left no-repeat;background-size: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    Light
                                </div>
                                <div class="col-4 pl-2 text-center">
                                    <div id="skin-dark" data-action="toggle-replace" data-replaceclass="mod-skin-light" data-class="mod-skin-dark" data-toggle="tooltip" data-placement="top" title="" class="d-flex bg-white border border-dark rounded overflow-hidden text-success js-waves-on" data-original-title="Dark Mode" style="height: 80px">
                                        <div class="bg-fusion-500 px-2 pt-0 border-right"></div>
                                        <div class="d-flex flex-column flex-1">
                                            <div class="bg-fusion-600 border-bottom py-1"></div>
                                            <div class="bg-fusion-300 flex-1 pt-3 pb-3 px-2">
                                                <div class="py-3 opacity-30" style="background:url('img/demo/s-1.png') top left no-repeat;background-size: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    Dark
                                </div>
                            </div>
                        </div>
                        <hr class="mb-0 mt-4">
                        <div class="pl-5 pr-3 py-3 bg-faded">
                            <div class="row no-gutters">
                                <div class="col-6 pr-1">
                                    <a href="#" class="btn btn-outline-danger fw-500 btn-block" data-action="app-reset">Reset Settings</a>
                                </div>
                                <div class="col-6 pl-1">
                                    <a href="#" class="btn btn-danger fw-500 btn-block" data-action="factory-reset">Factory Reset</a>
                                </div>
                            </div>
                        </div>
                    </div> <span id="saving"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Settings -->
    <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
    <script src="js/vendors.bundle.js"></script>
    <script src="js/app.bundle.js"></script>
    <script type="text/javascript">
        /* Activate smart panels */
        $('#js-page-content').smartPanel();
    </script>
    <!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
    <script src="js/statistics/peity/peity.bundle.js"></script>
    <script src="js/statistics/flot/flot.bundle.js"></script>
    <script src="js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="js/datagrid/datatables/datatables.bundle.js"></script>
    <script>
        /* defined datas */
        var dataTargetProfit = [
            [1354586000000, 153],
            [1364587000000, 658],
            [1374588000000, 198],
            [1384589000000, 663],
            [1394590000000, 801],
            [1404591000000, 1080],
            [1414592000000, 353],
            [1424593000000, 749],
            [1434594000000, 523],
            [1444595000000, 258],
            [1454596000000, 688],
            [1464597000000, 364]
        ]
        var dataProfit = [
            [1354586000000, 53],
            [1364587000000, 65],
            [1374588000000, 98],
            [1384589000000, 83],
            [1394590000000, 980],
            [1404591000000, 808],
            [1414592000000, 720],
            [1424593000000, 674],
            [1434594000000, 23],
            [1444595000000, 79],
            [1454596000000, 88],
            [1464597000000, 36]
        ]
        var dataSignups = [
            [1354586000000, 647],
            [1364587000000, 435],
            [1374588000000, 784],
            [1384589000000, 346],
            [1394590000000, 487],
            [1404591000000, 463],
            [1414592000000, 479],
            [1424593000000, 236],
            [1434594000000, 843],
            [1444595000000, 657],
            [1454596000000, 241],
            [1464597000000, 341]
        ]
        var dataSet1 = [
            [0, 10],
            [100, 8],
            [200, 7],
            [300, 5],
            [400, 4],
            [500, 6],
            [600, 3],
            [700, 2]
        ];
        var dataSet2 = [
            [0, 9],
            [100, 6],
            [200, 5],
            [300, 3],
            [400, 3],
            [500, 5],
            [600, 2],
            [700, 1]
        ];

        $(document).ready(function() {

            /* init datatables */
            $('#dt-basic-example').dataTable({
                responsive: true,
                dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [{
                        extend: 'colvis',
                        text: 'Column Visibility',
                        titleAttr: 'Col visibility',
                        className: 'btn-outline-default'
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'CSV',
                        titleAttr: 'Generate CSV',
                        className: 'btn-outline-default'
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copy',
                        titleAttr: 'Copy to clipboard',
                        className: 'btn-outline-default'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fal fa-print"></i>',
                        titleAttr: 'Print Table',
                        className: 'btn-outline-default'
                    }

                ],
                columnDefs: [{
                        targets: -1,
                        title: '',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            /*
                            -- ES6
                            -- convert using https://babeljs.io online transpiler
                            return `
                            <a href='javascript:void(0);' class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete Record'>
                            	<i class="fal fa-times"></i>
                            </a>
                            <div class='dropdown d-inline-block dropleft '>
                            	<a href='#'' class='btn btn-sm btn-icon btn-outline-primary rounded-circle shadow-0' data-toggle='dropdown' aria-expanded='true' title='More options'>
                            		<i class="fal fa-ellipsis-v"></i>
                            	</a>
                            	<div class='dropdown-menu'>
                            		<a class='dropdown-item' href='javascript:void(0);'>Change Status</a>
                            		<a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>
                            	</div>
                            </div>`;
                            	
                            ES5 example below:	

                            */
                            return "\n\t\t\t\t\t\t<a href='javascript:void(0);' class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete Record'>\n\t\t\t\t\t\t\t<i class=\"fal fa-times\"></i>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t\t<div class='dropdown d-inline-block dropleft'>\n\t\t\t\t\t\t\t<a href='#'' class='btn btn-sm btn-icon btn-outline-primary rounded-circle shadow-0' data-toggle='dropdown' aria-expanded='true' title='More options'>\n\t\t\t\t\t\t\t\t<i class=\"fal fa-ellipsis-v\"></i>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t<div class='dropdown-menu'>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Change Status</a>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>";
                        },
                    },

                ]

            });


            /* flot toggle example */
            var flot_toggle = function() {

                var data = [{
                        label: "Target Profit",
                        data: dataTargetProfit,
                        color: color.info._400,
                        bars: {
                            show: true,
                            align: "center",
                            barWidth: 30 * 30 * 60 * 1000 * 80,
                            lineWidth: 0,
                            /*fillColor: {
                            	colors: [color.primary._500, color.primary._900]
                            },*/
                            fillColor: {
                                colors: [{
                                        opacity: 0.9
                                    },
                                    {
                                        opacity: 0.1
                                    }
                                ]
                            }
                        },
                        highlightColor: 'rgba(255,255,255,0.3)',
                        shadowSize: 0
                    },
                    {
                        label: "Actual Profit",
                        data: dataProfit,
                        color: color.warning._500,
                        lines: {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points: {
                            show: true
                        }
                    },
                    {
                        label: "User Signups",
                        data: dataSignups,
                        color: color.success._500,
                        lines: {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points: {
                            show: true
                        }
                    }
                ]

                var options = {
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: 'rgba(0,0,0,0.05)',
                        borderWidth: 1,
                        borderColor: 'rgba(0,0,0,0.05)'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        cssClass: 'tooltip-inner',
                        defaultTheme: false
                    },
                    xaxis: {
                        mode: "time",
                        tickColor: 'rgba(0,0,0,0.05)',
                    },
                    yaxes: {
                        tickColor: 'rgba(0,0,0,0.05)',
                        tickFormatter: function(val, axis) {
                            return "$" + val;
                        },
                        max: 1200
                    }

                };

                var plot2 = null;

                function plotNow() {
                    var d = [];
                    $("#js-checkbox-toggles").find(':checkbox').each(function() {
                        if ($(this).is(':checked')) {
                            d.push(data[$(this).attr("name").substr(4, 1)]);
                        }
                    });
                    if (d.length > 0) {
                        if (plot2) {
                            plot2.setData(d);
                            plot2.draw();
                        } else {
                            plot2 = $.plot($("#flot-toggles"), d, options);
                        }
                    }

                };

                $("#js-checkbox-toggles").find(':checkbox').on('change', function() {
                    plotNow();
                });
                plotNow()
            }
            flot_toggle();
            /* flot toggle example -- end*/

            /* flot area */
            var flotArea = $.plot($('#flot-area'), [{
                    data: dataSet1,
                    label: 'New Customer',
                    color: color.success._200
                },
                {
                    data: dataSet2,
                    label: 'Returning Customer',
                    color: color.info._200
                }
            ], {
                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                    opacity: 0
                                },
                                {
                                    opacity: 0.5
                                }
                            ]
                        }
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    noColumns: 1,
                    position: 'nw'
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    borderColor: '#ddd',
                    tickColor: 'rgba(0,0,0,0.05)',
                    aboveData: true,
                    borderWidth: 0,
                    labelMargin: 5,
                    backgroundColor: 'transparent'
                },
                yaxis: {
                    tickLength: 1,
                    min: 0,
                    max: 15,
                    color: '#eee',
                    tickColor: 'rgba(0,0,0,0.05)',
                    font: {
                        size: 0,
                        color: '#999'
                    }
                },
                xaxis: {
                    tickLength: 1,
                    color: '#eee',
                    tickColor: 'rgba(0,0,0,0.05)',
                    font: {
                        size: 10,
                        color: '#999'
                    }
                }

            });
            /* flot area -- end */

            var flotVisit = $.plot('#flotVisit', [{
                    data: [
                        [3, 0],
                        [4, 1],
                        [5, 3],
                        [6, 3],
                        [7, 10],
                        [8, 11],
                        [9, 12],
                        [10, 9],
                        [11, 12],
                        [12, 8],
                        [13, 5]
                    ],
                    color: color.success._200
                },
                {
                    data: [
                        [1, 0],
                        [2, 0],
                        [3, 1],
                        [4, 2],
                        [5, 2],
                        [6, 5],
                        [7, 8],
                        [8, 12],
                        [9, 9],
                        [10, 11],
                        [11, 5]
                    ],
                    color: color.info._200
                }
            ], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                    opacity: 0
                                },
                                {
                                    opacity: 0.12
                                }
                            ]
                        }
                    }
                },
                grid: {
                    borderWidth: 0
                },
                yaxis: {
                    min: 0,
                    max: 15,
                    tickColor: 'rgba(0,0,0,0.05)',
                    ticks: [
                        [0, ''],
                        [5, '100K'],
                        [10, '200K'],
                        [15, '300K']
                    ],
                    font: {
                        color: '#444',
                        size: 10
                    }
                },
                xaxis: {

                    tickColor: 'rgba(0,0,0,0.05)',
                    ticks: [
                        [2, '2am'],
                        [3, '3am'],
                        [4, '4am'],
                        [5, '5am'],
                        [6, '6am'],
                        [7, '7am'],
                        [8, '8am'],
                        [9, '9am'],
                        [10, '1pm'],
                        [11, '2pm'],
                        [12, '3pm'],
                        [13, '4pm']
                    ],
                    font: {
                        color: '#999',
                        size: 9
                    }
                }
            });


        });
    </script>
</body>
<!-- END Body -->

</html>
{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
*}
<!DOCTYPE html>
<html {$langHeader}>
<head>
    <!--<link rel="SHORTCUT ICON" href="custom/themes/default/images/company_logo.png">-->
    <link href="custom/themes/default/images/company_logo.png" type="image/x-icon" rel="icon">
    <meta http-equiv="Content-Type" content="text/html; charset={$APP.LBL_CHARSET}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <!-- Bootstrap -->
    {assign var=unique_id value=15|mt_rand:2000}
    <link href="themes/SuiteP/css/normalize.css" rel="stylesheet" type="text/css"/>
    <link href='themes/SuiteP/css/fonts.css' rel='stylesheet' type='text/css'>
    <link href="themes/SuiteP/css/grid.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="themes/SuiteP/css/footable.core.css" rel="stylesheet" type="text/css"/>
    <link href="https://tympanus.net/Tutorials/ThumbnailGridExpandingPreview/css/component.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" type="text/css" />
    
    <title>{$APP.LBL_BROWSER_TITLE} </title>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <![endif]-->
    {$SUGAR_JS}
    {literal}
    <script type="text/javascript">
        <!--
        SUGAR.themes.theme_name = '{/literal}{$THEME}{literal}';
        SUGAR.themes.theme_ie6compat = '{/literal}{$THEME_IE6COMPAT}{literal}';
        SUGAR.themes.hide_image = '{/literal}{sugar_getimagepath file="hide.gif"}{literal}';
        SUGAR.themes.show_image = '{/literal}{sugar_getimagepath file="show.gif"}{literal}';
        SUGAR.themes.loading_image = '{/literal}{sugar_getimagepath file="img_loading.gif"}{literal}';
        
        if (YAHOO.env.ua)
            UA = YAHOO.env.ua;
        -->
    </script>
    {/literal}
    {$SUGAR_CSS}
   
    <link rel="stylesheet" type="text/css" href="themes/SuiteP/css/colourSelector.php">

     
    <script type="text/javascript" src='{sugar_getjspath file="themes/SuiteP/js/jscolor.js"}'></script>
    <script type="text/javascript" src='{sugar_getjspath file="cache/include/javascript/sugar_field_grp.js"}'></script>
    <script type="text/javascript" src='{sugar_getjspath file="include/javascript/mozaik/vendor/tinymce/tinymce/tinymce.min.js"}'></script>
    <script type="text/javascript">{literal}window.$crisp=[];window.CRISP_WEBSITE_ID="f65d4a88-5cee-4c26-9d09-f7430b186900";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();{/literal}</script>
    <link href="themes/SuiteP/css/Day/main.css?v='{$unique_id}'" rel="stylesheet" type="text/css"/>
     <link href="themes/SuiteP/css/Day/material/css/material-icons.css" rel="stylesheet" type="text/css"/>
  

    
</head>
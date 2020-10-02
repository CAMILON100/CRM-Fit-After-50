<?php /* Smarty version 2.6.31, created on 2020-10-02 02:56:06
         compiled from themes/SuiteP/tpls/_head.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'mt_rand', 'themes/SuiteP/tpls/_head.tpl', 51, false),array('function', 'sugar_getimagepath', 'themes/SuiteP/tpls/_head.tpl', 76, false),array('function', 'sugar_getjspath', 'themes/SuiteP/tpls/_head.tpl', 90, false),)), $this); ?>
<!DOCTYPE html>
<html <?php echo $this->_tpl_vars['langHeader']; ?>
>
<head>
    <!--<link rel="SHORTCUT ICON" href="custom/themes/default/images/company_logo.png">-->
    <link href="custom/themes/default/images/company_logo.png" type="image/x-icon" rel="icon">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['APP']['LBL_CHARSET']; ?>
">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <!-- Bootstrap -->
    <?php $this->assign('unique_id', ((is_array($_tmp=15)) ? $this->_run_mod_handler('mt_rand', true, $_tmp, 2000) : mt_rand($_tmp, 2000))); ?>
    <link href="themes/SuiteP/css/normalize.css" rel="stylesheet" type="text/css"/>
    <link href='themes/SuiteP/css/fonts.css' rel='stylesheet' type='text/css'>
    <link href="themes/SuiteP/css/grid.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="themes/SuiteP/css/footable.core.css" rel="stylesheet" type="text/css"/>
    <link href="https://tympanus.net/Tutorials/ThumbnailGridExpandingPreview/css/component.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" type="text/css" />
    
    <title><?php echo $this->_tpl_vars['APP']['LBL_BROWSER_TITLE']; ?>
 </title>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <![endif]-->
    <?php echo $this->_tpl_vars['SUGAR_JS']; ?>

    <?php echo '
    <script type="text/javascript">
        <!--
        SUGAR.themes.theme_name = \''; ?>
<?php echo $this->_tpl_vars['THEME']; ?>
<?php echo '\';
        SUGAR.themes.theme_ie6compat = \''; ?>
<?php echo $this->_tpl_vars['THEME_IE6COMPAT']; ?>
<?php echo '\';
        SUGAR.themes.hide_image = \''; ?>
<?php echo smarty_function_sugar_getimagepath(array('file' => "hide.gif"), $this);?>
<?php echo '\';
        SUGAR.themes.show_image = \''; ?>
<?php echo smarty_function_sugar_getimagepath(array('file' => "show.gif"), $this);?>
<?php echo '\';
        SUGAR.themes.loading_image = \''; ?>
<?php echo smarty_function_sugar_getimagepath(array('file' => "img_loading.gif"), $this);?>
<?php echo '\';
        
        if (YAHOO.env.ua)
            UA = YAHOO.env.ua;
        -->
    </script>
    '; ?>

    <?php echo $this->_tpl_vars['SUGAR_CSS']; ?>

   
    <link rel="stylesheet" type="text/css" href="themes/SuiteP/css/colourSelector.php">

     
    <script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "themes/SuiteP/js/jscolor.js"), $this);?>
'></script>
    <script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "cache/include/javascript/sugar_field_grp.js"), $this);?>
'></script>
    <script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/javascript/mozaik/vendor/tinymce/tinymce/tinymce.min.js"), $this);?>
'></script>
    <script type="text/javascript"><?php echo 'window.$crisp=[];window.CRISP_WEBSITE_ID="f65d4a88-5cee-4c26-9d09-f7430b186900";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();'; ?>
</script>
    <link href="themes/SuiteP/css/Day/main.css?v='<?php echo $this->_tpl_vars['unique_id']; ?>
'" rel="stylesheet" type="text/css"/>
     <link href="themes/SuiteP/css/Day/material/css/material-icons.css" rel="stylesheet" type="text/css"/>
  

    
</head>
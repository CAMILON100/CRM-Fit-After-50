<?php /* Smarty version 2.6.31, created on 2020-08-30 13:45:51
         compiled from themes/SuiteP/tpls/header.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/SuiteP/tpls/_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body onMouseOut="closeMenus();">

<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
    <div id="ajaxHeader">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/SuiteP/tpls/_headerModuleList.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?>
<?php echo '
    <iframe id=\'ajaxUI-history-iframe\' src=\'index.php?entryPoint=getImage&imageName=blank.png\' title=\'empty\'
            style=\'display:none\'></iframe>
<input id=\'ajaxUI-history-field\' type=\'hidden\'>
<script type=\'text/javascript\'>
    if (SUGAR.ajaxUI && !SUGAR.ajaxUI.hist_loaded) {
        YAHOO.util.History.register(\'ajaxUILoc\', "", SUGAR.ajaxUI.go);
        '; ?>
<?php if ($_REQUEST['module'] != 'ModuleBuilder'): ?>        YAHOO.util.History.initialize("ajaxUI-history-field", "ajaxUI-history-iframe");
        <?php endif; ?><?php echo '
    }
</script>
'; ?>

<!-- Start of page content -->
<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>

<?php if (isset ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) && is_array ( $this->_tpl_vars['shortcutTopMenu'] ) && count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0): ?>
<div id="bootstrap-container" class="main col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2  bootstrap-container">
<?php else: ?>
<div id="bootstrap-container" class="main col-sm-0 col-sm-offset-0 col-md-0 col-md-offset-0 bootstrap-container">
     <?php endif; ?>
     
    <div id="content" class="content">
        <div id="pagecontent" class=".pagecontent">
<?php endif; ?>


   
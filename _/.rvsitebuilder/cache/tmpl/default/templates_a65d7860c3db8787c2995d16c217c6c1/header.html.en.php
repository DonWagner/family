<?php if (!$t->ignoreXmlDeclare)  {?><?php echo "<"; ?>?xml version="1.0" encoding="<?php echo htmlspecialchars($t->charset);?>" ?><?php }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo htmlspecialchars($t->currLang);?>" xml:lang="<?php echo htmlspecialchars($t->currLang);?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo htmlspecialchars($t->charset);?>" /> 
    <meta http-equiv="Content-Language" content="<?php echo htmlspecialchars($t->currLang);?>" />
    <!-- Support IE 6 / IE 7 open dialog submit form -->
	<base target="_self" />
	
    <title><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Rvglobalsoft");?> :: <?php echo htmlspecialchars($t->pageTitle);?></title>
    <style type="text/css" media="screen">
    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isDirectAdminMode'))) if ($t->isDirectAdminMode()) { ?>
		@import url("<?php echo htmlspecialchars($t->webRoot);?>/themes/default/sitebuilder/css/style.raw?charset=<?php echo htmlspecialchars($t->charset);?>");
	<?php } else {?>
		<?php if ($t->phpSuExecRoot)  {?>
		    @import url("<?php echo htmlspecialchars($t->phpSuExecRoot);?>/www/themes/default/sitebuilder/css/style.<?php echo htmlspecialchars($t->fileType);?>?charset=<?php echo htmlspecialchars($t->charset);?>");
			@import url("<?php echo htmlspecialchars($t->webRoot);?>/themes/default/sitebuilder/css/style.<?php echo htmlspecialchars($t->fileType);?>?charset=<?php echo htmlspecialchars($t->charset);?>");
		<?php } else {?>
	        @import url("<?php echo htmlspecialchars($t->webRoot);?>/themes/default/sitebuilder/css/style.<?php echo htmlspecialchars($t->fileType);?>?charset=<?php echo htmlspecialchars($t->charset);?>");
		<?php }?>
	<?php }?>
    </style>

	<!-- START include cssGlobal -->
    <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('cssGlobal.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
	<!-- END include cssGlobal -->
	
	<?php if ($t->aCssFiles)  {?>
    <!-- START Optimize css -->
    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeCssOptimizerLink'))) echo $t->makeCssOptimizerLink("",$t->aCssFiles);?>
    <!-- END Optimize css --> 
    <?php }?>
	
	<?php echo $t->scriptOpen;?>
        var SGL_JS_WEBROOT          = "<?php echo htmlspecialchars($t->webThemeUrl);?>";
		var SGL_USERDATA_URL        = "<?php echo htmlspecialchars($t->SGL_USERDATA_URL);?>";
        var SGL_JS_RAW_URL          = "<?php echo htmlspecialchars($t->webRoot);?>";
        var SGL_FILE_TYPE           = "<?php echo htmlspecialchars($t->fileType);?>";
		var phpFileType             = "<?php echo htmlspecialchars($t->fileType);?>";
        var SGL_JS_WINHEIGHT=<?php echo htmlspecialchars($t->conf['popup']['winHeight']);?>;
        var SGL_JS_WINWIDTH=<?php echo htmlspecialchars($t->conf['popup']['winWidth']);?>;
        var SGL_JS_SESSID="<?php echo htmlspecialchars($t->sessID);?>";
        var SGL_JS_CURRURL="<?php echo htmlspecialchars($t->currUrl);?>";
        var SGL_JS_INDEX = "<?php echo htmlspecialchars($t->webRoot);?>/<?php echo htmlspecialchars($t->conf['site']['frontScriptName']);?>"
    <?php echo $t->scriptClose;?>
    
	<!-- START include jsGlobal -->
    <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('jsGlobal.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
	<!-- END include jsGlobal -->
	
	<!-- START Optimize js -->
    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeJsOptimizerLink'))) echo $t->makeJsOptimizerLink();?>
    <!-- END Optimize js -->
    
    <?php echo $t->scriptOpen;?>
	    <?php if ($this->options['strict'] || (is_array($t->onReadyDom)  || is_object($t->onReadyDom))) foreach($t->onReadyDom as $eventHandler) {?>
	        sgl.ready("<?php echo htmlspecialchars($eventHandler);?>");
	    <?php }?>
	    <?php if ($t->onLoad)  {?>
	    window.onload = function() {
	        <?php if ($this->options['strict'] || (is_array($t->onLoad)  || is_object($t->onLoad))) foreach($t->onLoad as $eventHandler) {?>
	             <?php echo htmlspecialchars($eventHandler);?>;
	        <?php }?>
	    }
	    <?php }?>
	    <?php if ($t->onUnload)  {?>
	    window.onunload = function() {
	        <?php if ($this->options['strict'] || (is_array($t->onUnload)  || is_object($t->onUnload))) foreach($t->onUnload as $eventHandler) {?>
	             <?php echo htmlspecialchars($eventHandler);?>;
	        <?php }?>
	    }
	    <?php }?>
    <?php echo $t->scriptClose;?>

<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addjQueryEvent'))) echo htmlspecialchars($t->addjQueryEvent("click","{{SHARP}}globalsFrmPublish","jQuery.sitebuilder.Publish.confirm(jQuery(this), \"{{SHARP}}globalFrmPublish\");"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addjQueryEvent'))) echo htmlspecialchars($t->addjQueryEvent("click","{{SHARP}}globalsFrmBackupProject","jQuery.sitebuilder.backupProject.confirm(jQuery(this), \"{{SHARP}}globalFrmExport\");"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addjQueryEvent'))) echo htmlspecialchars($t->addjQueryEvent("click","{{SHARP}}userViweLog","jQuery(\"{{SHARP}}viewlogForm\").rvsDialog(\"open\");"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addjQueryEvent'))) echo htmlspecialchars($t->addjQueryEvent("click","{{SHARP}}clickChangeUserLevel","jQuery(\"{{SHARP}}changeUserLevel\").rvsDialog(\"open\");"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addjQueryEvent'))) echo htmlspecialchars($t->addjQueryEvent("mouseover",".inlinehelp","jQuery.sitebuilder.sitebuilder.classinlineHelp(jQuery(this))"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addjQueryEvent'))) echo htmlspecialchars($t->addjQueryEvent("hover",".jqShortcut","jQuery.sitebuilder.sitebuilder.overShortCutLoadImge(jQuery(this));","jQuery.sitebuilder.sitebuilder.outShortCutLoadImge(jQuery(this));"));?>

<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("chkUserAgent")) { ?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addjQueryEvent'))) echo htmlspecialchars($t->addjQueryEvent("ready","document","jQuery.sitebuilder.sitebuilder.setUserAgent();"));?>
<?php }?>
<?php if ($t->disPlayHeader)  {?>
    <?php echo $t->disPlayHeader;?>
<?php }?>
</head>
 
<body onbeforeunload="return dirtyFormWin()" <?php echo htmlspecialchars($t->templateBodyElements);?>>

<!-- close sgl-main -->
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/viewlog.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?> 
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/backupproject.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>

<script>
//<![CDATA[
if (window.addwarning) {
   jQuery.sitebuilder.sitebuilder.addwarning();
}
//]]>
</script>

<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makejQueryEvent'))) echo $t->makejQueryEvent();?>
<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getSitebuilderFooter");?>

<form id="globalFrmExport" name="globalFrmExport" method="post" action="">
<input type="hidden" name="project_id" id="ExportProjectList" value="<?php echo htmlspecialchars($t->rvs_project_id);?>">
<input type="hidden" name="project_name" id="ExportProjectName" value="<?php echo htmlspecialchars($t->rvs_project_name);?>">
</form>

<!--start sent LogMessage -->
<div id ="divViewLog">
<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isUserEnableLog")) { ?>
    <!-- Display user log -->
    <textarea style="width:99%" rows="20" readonly="readonly"><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getUserLogMessage");?></textarea>
<?php }?>
</div>

<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getReportSql");?>

<div>
    <span style="display:none" id="defaultLoadIng"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/loading02.gif" alt="" width="29" height="27" border="0" align="middle" />
        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("loading...");?>
    </span>
</div>

</body>
</html>
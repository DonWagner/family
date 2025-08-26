<?php echo $t->scriptOpen;?>
var msgProjectNameEmpty    = "<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Please, specify your project name"));?>";
var msgProjectNameExist    = "<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Project name is already taken."));?>";
var msgSelectListPage   = "<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Please select list web page"));?>";
var msgdoesChangeProjectName = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","The name does not change"));?>';
var msgdoesRenameProjectName = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","The name duplicate"));?>';
var msgRenameProject = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Please rename The Project"));?>';
//skip dirty form 
bSubmitted=true;   
<?php echo $t->scriptClose;?>

<?php if ($t->aProjectNotInDb)  {?>
<?php echo $t->scriptOpen;?>

<?php if ($t->aProjectJson)  {?>
/* For more project */
var aProjectJson = '<?php echo $t->aProjectJson;?>';
var maxProjectMore = '<?php echo htmlspecialchars($t->maxProjectMore);?>';
<?php }?>

function isSelectProject() {
    var isSelectProject = 0;
    /* validate checked */
    <?php if ($this->options['strict'] || (is_array($t->aProjectNotInDb)  || is_object($t->aProjectNotInDb))) foreach($t->aProjectNotInDb as $k => $v) {?>

    if(document.getElementById("aProjectData[<?php echo htmlspecialchars($v['projectId']);?>]").checked == true){
        isSelectProject = 1;
    }
    <?php }?>

    if (isSelectProject == 0) {
	    var strdelete = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Please select project to do action"));?>';
        alert(strdelete);
        return false;
    } else {
        return true;
    }
}

function checkConfirmDeleteProject() {
    strvalue = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Confirm delete project folder"));?>';
    actionSubmit = document.getElementById('actionSubmit').value;
    if (actionSubmit == 'delete') {
        return (confirm(strvalue)) ? true : false;
    } else {
        return true;
    }
}
<?php echo $t->scriptClose;?>
<?php }?>

<!-- start preview --> 
<div class="stephome_lang">

<div style="border-bottom:1px solid #dcdcdc; position:fixed; width:100%; top:64px; z-index:1000;">
    <div class="bottom_header" align="right" style="padding:8px 0; height:22px;">
		
 <!-- start listbox lang -->
      <div class="blockLang">  
       <form method="post" id="FrmChangelang" name="FrmChangelang" enctype="multipart/form-data" action="">
          <input type="hidden" name="action" value="submitChangeLang" class="btn">
		  <?php if (!$t->conf['Admin']['SiteBuilder']['projectChangeLang'])  {?>
		   <div class="ui-state-info ui-corner-all">
                <span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
                <div align="left"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Language is not avaible to selete");?></div>
            </div>
		  <?php }?>
		  <table cellpadding="0" cellspacing="1" align="right">
		  	<tr>
		  		<td align="left"><span class="txtlang"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Interface Language");?>:  </span>
				  <select name="user_charset" id="user_charset" class="boxlang" <?php echo htmlspecialchars($t->isprojectChangeLang);?>>
		          <?php echo $t->langOptions;?>
	          </select>
	          </td>
          	</tr>
          </table>
          
       </form>
     </div> 
     <!-- end listbox lang --> 

	</div></div>

</div>

<div style="margin:130px 0 10px 30px;"></div>

<div class="stephome" style="margin:0 0 0 30px;">

<?php if ($t->aCurrentProject)  {?>
    <div class="block-project-left">
    <!--   <h1 class="title">{translate(#Recent Project#):h}</h1>-->
    
       <!-- Start Show Project Detail -->
        <div class="recent">
            <div id="divShowCurrent" style="padding:5px 0;">
            <?php if ($this->options['strict'] || (is_array($t->aCurrentProject)  || is_object($t->aCurrentProject))) foreach($t->aCurrentProject as $k => $v) {?>
                <table cellpadding="0" cellspacing="0" width="100%" class="frameproj_cur">
                    <tr>
                        <td align="left" valign="top" nowrap="nowrap">
                            <div class="bdrpreview"><img class="showpreview bdr_preview" src="<?php echo htmlspecialchars($v->templateurl);?>" width="224" height="168" /></div>
			                <!-- <div class="icon_control"></div> -->
                        </td>

                        <td><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images5/spacer.gif" alt="" width="20" height="1" /></td>
                        <td align="left" valign="top" width="99%">
                        	<!-- remove project x
                        	<div style="float:right;">
                        	<span class="inlinehelp" onmouseover="this.className='inlinehelpOver';" onMouseOut="this.className='inlinehelp';">
	                        	<input type="button" value="" projectName="{v.project_name}" checkRemovePublish = "{v.rvs_publish_path}" urlPublish ="{v.urlPublish}" projectId="{v.project_id}" class="btnRemoveProject spicon btn_removeProject">
	                        	<span class="removepro">Remove Project</span>
                        	</span>
                        	</div>
                        	-->
                        	
                        	<div class="titleproj"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Current Project");?></div>
                        	<div>
	                            <div style="width:24em; overflow:hidden; padding-top:6px; color:#464646;"><span style="font-weight:bold; color:#3d454b; font-size:11px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("proejctName");?></span>: <span class="showNameProejct"><?php echo htmlspecialchars($v->project_name);?></span></div>
	                            <div class="nowrap" style="color:#464646; line-height:10px;"><span style="font-weight:bold; color:#3d454b; font-size:11px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Latest update");?></span>: <span class="showLastUpdate"><?php echo htmlspecialchars($v->last_update);?></span></div>
	                            <div><a class="btneditwebsite"><span style="padding:0;"><input type="button" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("edit website"));?>" projectName="<?php echo htmlspecialchars($v->project_name);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" class="btnEditProject btn_editProject" style="padding:10px;"></span></a></div>
	                       		
	                       		<div class="rvclearit"></div>
	                       		
	                       		<table cellpadding="0" cellspacing="0">
			                     <tr>
			                        <td align="left" valign="top">
			                        	<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isAllowExport")) { ?>
			                        	<!-- <input type="button" value="{translate(#Backup#)}" projectName="{v.project_name}" projectId="{v.project_id}" class="btnBackUpProject spicon btn_backupProject"> -->
			                        	<a projectName="<?php echo htmlspecialchars($v->project_name);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" class="btnBackUpProject spicon btn_backupProject"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Backup"));?></a>
			                        	<?php }?>
			                        </td>
			                        <td class="padseparate"> | </td>
			                        <td align="left" valign="top"><!-- <input type="button" divShow="divShowCurrent" value="{translate(#Rename#)}" projectId="{v.project_id}" projectName="{v.project_name}"class="btnRenameProject spicon btn_renameProject">  -->
			                        <a divShow="divShowCurrent" projectId="<?php echo htmlspecialchars($v->project_id);?>" projectName="<?php echo htmlspecialchars($v->project_name);?>" class="btnRenameProject spicon btn_renameProject"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Rename"));?></a>
			                        </td>
			                   	    <td class="padseparate"> | </td>   
			                   	    <td align="left" valign="top"><!-- <input type="button" value="{translate(#Delete#)}" projectName="{v.project_name}" checkRemovePublish = "{v.rvs_publish_path}" urlPublish ="{v.urlPublish}" projectId="{v.project_id}" class="btnRemoveProject spicon btn_removeProject"> -->
			                   	    <a projectName="<?php echo htmlspecialchars($v->project_name);?>" checkRemovePublish ="<?php echo htmlspecialchars($v->rvs_publish_path);?>" urlPublish ="<?php echo htmlspecialchars($v->urlPublish);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" class="btnRemoveProject spicon btn_removeProject"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Delete"));?></a>
			                   	    </td>           
			                     </tr>
			                     </table>

           
	                        </div>
                        </td>
                    </tr>
                </table>
                <?php if ($v->urlPublish)  {?>
                    <div class="nowrap" style="padding:10px 0; font-size:11px;"><span class="txtpublishpath"><b><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project URL");?></span>:</b> <span style="color:#474747;"><?php echo htmlspecialchars($v->urlPublish);?></span></div>
                <?php }?>
            <?php }?>
            </div>
        </div>
        <!-- end preview -->  

    <!-- remove project list  -->

    </div>
    
    
<!-- start btn mgr -->
<form id="FrmChkCovertProjectUTF8Format" name="FrmChkCovertProjectUTF8Format" method="post" action="">
<input id="editProjectList" name="project_id" type="hidden" value="<?php echo htmlspecialchars($t->Projectid);?>" />
<span><input name="submitEdit" type="hidden" id="submitEdit" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Edit");?>" class="btnEdit" /></span>  
</form>

<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isAllowExport")) { ?>
<form id="FrmExport" name="FrmExport" method="post" action="">
<input id="ExportProjectList" name="project_id" projectName="<?php echo htmlspecialchars($t->projectNameCurrent);?>" type="hidden" value="<?php echo htmlspecialchars($t->Projectid);?>" />
</form>
<?php }?>
<!-- end project list-->
<?php } else {?>

<!-- Start Welcome -->
<div class="block-project-left">
<!-- {translate(#Build your reponsive website#):h} -->
<br />
<img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images5/banner_buildwebsite.jpg" alt="" width="599" />
<br />
</div>
<!-- End Welcome -->     

<?php }?>
<!-- end {if:aCurrentProject} -->


<!-- start box right -->
 <div class="block-project-right" style="margin:0px 0 0 20px; width:580px;"> 
 
<!-- raiseMsg -->
<div style="width:500px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) if ($t->msgGet()) { ?><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo $t->msgGet();?></span><?php }?></div>
<div class="clearit">&nbsp;</div> 
 
<!-- Restore Missing -->
<!--
{if:aProjectNotInDb}
<div class="missingbrd">
<div class="missingbox">
<b>{translate(#Missing project message#,#vprintf#,#countProjectNotInDb|countProjectNotInDb#):h}</b> <a href="#" id="openRestoreMissing" class="linkorange"> {translate(#Recover Project#):h}</a>
</div>
</div>
{end:} 
-->

<!-- Restore Missing -->
        <div class="titleproj" style="margin:10px 0 10px 12px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Start Your Web-Building Project");?></div>
        <div class="import-project">
        <table cellspacing="0" style="margin-left:12px;">
            <tr>
            <td align="left" valign="top">
            <!-- start dialog button create project -->
              <h2 class="title"><a class="btncreateweb"><span><input type="button" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("createProjectDialog"));?>" id="createProjectD" class="create" /></span></a></h2>
	        <!-- end dialog button create project -->
	        </td>
			<?php if ($t->isTryoutActive)  {?>
	        <td align="left" valign="top">
	        	
				<!--  Disable compodb by tryout mode -->
                <?php if (!$t->isTryoutMod)  {?>
                <!-- Input Text Box add DBname & username & password -->
                <form name="FrmDBConfig" id="FrmDBConfig" method="post" action="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","createdbforcomponent","sitebuilder"));?>componentName/tryout/createNewDatabase/1">
                <div style="padding-bottom:15px;">
                <input type="hidden" name="action" value="" />
                <input type="hidden" name="openDBPopup" value="1" />
				<input type="hidden" name="componentName" value="tryout" />

                <input type="hidden" name="loadFrmAction" value="viewcreatedbconfig" />
                <a class="btncreateweb"><span><input name="submitdbconfig" type="button" id="submitImport" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Create Tryout"));?>" class="create" /></span></a>
                </div>
                </form>
                <?php }?>
	        </td>
			<?php }?>
	        </tr>
        </table>
        </div>
        
        <div class="clearit"></div>
        
        <!-- Start restore project-->
		<?php if ($t->isAllowImport)  {?>
		<div style="margin-left:12px;">
		<a href="#" id="FrmRestoreProject" class="linkorange"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Restore Project");?></a> 
		<?php }?>
		<!-- End restore project-->
        <div class="clearit"></div>
        
    </div>
</div>
</div>

<!-- end box right-->

    <div class="rvclearit"></div>
    <!-- Start List Project -->
     <div class="project-list" style="width:1200px;">

        <!-- start project list -->
        <div id="displayProjectList" class="padgroup" style="width:100%;">

		<!-- START search project -->

		   <?php if ($t->aProject)  {?>
		   <div class="projectlistbox">
		   <div style="padding:10px 2px 0 3px; float:left; font-size:16px; font-weight:bold; color:#5a5a5a;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project List");?></div>
           <?php if ($t->isSearch)  {?>
		    <!-- Search Project -->
	        <div style="padding:0 0px 8px 0px;" align="right">
	            <input type="hidden" id="search-val" value="" />
	            <?php echo $this->elements['searchProject']->toHtml();?>
	            <!-- <input type="button" id="clearSearchProject" name ="clearSearchProject" value="Clear" onclick="" /> -->
            </div>
           <?php }?>
           
		   <!-- Sort เอาออกไปก่อน -->
		   <!--
           <table cellpadding="0" cellspacing="4" width="100%" class="padname">
                <tr>
                    <td style="width:360px;" align="left" valign="top"><a href ="javascript:void(0);" class="sortName">{translate(#Name#):h} <img src="{webThemeUrl}/themes/{theme}/sitebuilder/images5/icon_lastupdate.gif" alt="" width="5" height="8" border="0" /></a></td> 
                    
                    <td align="left" valign="top"><a href ="javascript:void(0);" class="sortLastUpdate">{translate(#Latest Update#):h} <img src="{webThemeUrl}/themes/{theme}/sitebuilder/images5/icon_lastupdate.gif" alt="" width="5" height="8" border="0" /></a></td>
                    
                </tr>
            </table>
			-->
			<?php }?>
			
        </div>
        <!-- END search project -->
           
        <div class="clearit"></div>
        <div>
        <?php if ($this->options['strict'] || (is_array($t->aProject)  || is_object($t->aProject))) foreach($t->aProject as $k => $v) {?>
			
			<!-- Call plugin count >= maxProjectMore set display:none -->
			<div style="margin-left:30px;">
			<div class="frameproject">
			<div style="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("countDisplayNone",$k,$t->maxProjectMore);?>" id="div<?php echo htmlspecialchars($k);?>" class="itemSort searchHidden" onmouseover="showoption(jQuery(this));" onmouseout="hideoption(jQuery(this));" projectname="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'strToLower'))) echo htmlspecialchars($t->strToLower($v->project_name));?>" lastupdate="<?php echo htmlspecialchars($v->last_updatetxt);?>">
	            <div class="pad">
	            	<table cellpadding="0" cellspacing="0" width="100%">
		                <tr>
		                    <td align="left" valign="top"><div style="margin:5px 20px 3px 8px;"><img class="showpreview bdr_preview" src="<?php echo htmlspecialchars($v->templateurl);?>" width="224" height="168" /></div></td> 
		                    <td align="left" valign="top" style="white-space:normal;" width="99%">
		                    	<div align="right" id="showiconproject" style="float:right; padding:0px 0 10px 0px;">
		                    	     <!-- remove project x
		                    	      <span class="inlinehelp" onmouseover="this.className='inlinehelpOver';" onMouseOut="this.className='inlinehelp';">
		                    	         <input type="button" value="" projectName="{v.project_name}" projectId="{v.project_id}" checkRemovePublish = "{v.rvs_publish_path}" urlPublish ="{v.urlPublish}" class="btnRemoveProject spicon icon_deletepro"> 
		                    	         <span class="removepro" style="margin:-1px 0 0 -25px; padding:0;">Remove Project</span>
		                    	     </span>
		                    	     -->
		                    	</div>
		                    	
		                    	<div class="rvclearit"></div>
		                    	<!-- ห้ามลบ class showNameProejct , showLastUpdate -->
		                        <div projectId="<?php echo htmlspecialchars($v->project_id);?>"><span style="line-height:15px; font-weight:bold; color:#3d454b; font-size:11px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project Name");?>: </span><span class="showNameProejct"><?php echo htmlspecialchars($v->project_name);?></span></div>
								  <span style="font-weight:bold; color:#3d454b; font-size:11px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Latest update");?>: </span><span class="showLastUpdate"><?php echo htmlspecialchars($v->last_update);?></span>
									
									<div class="icon" id="showiconproject" style="visibility: hidden;"><a class="btneditwebsite"><span style="padding:0;"><input type="button" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("edit website");?>" projectName="<?php echo htmlspecialchars($v->project_name);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" class="btnEditProject btn_editProject" style="padding:10px;" /></span></a></div>
									<div class="rvclearit"></div>
									<div id="showiconproject" style="visibility: hidden; margin-top:5px;">
									<table cellpadding="0" cellspacing="0"><tr>
									<td align="left" valign="top">
									<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isAllowExport")) { ?>
                                        <!-- <input type="button" value="{translate(#Backup#):h}" projectName="{v.project_name}" projectId="{v.project_id}" class="btnBackUpProject spicon icon_backuppro" /> -->
                                        <a projectName="<?php echo htmlspecialchars($v->project_name);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" class="btnBackUpProject spicon btn_backupProject"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Backup");?></a>
                                    <?php }?> </td>
                                    <td class="padseparate"> | </td>
                                    <td align="left" valign="top"><!-- <input type="button" value="{translate(#Rename#):h}" divShow="div{k}" projectId="{v.project_id}" projectName="{v.project_name}" class="btnRenameProject spicon icon_renamepro" /> -->
                                        <a divShow="div<?php echo htmlspecialchars($k);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" projectName="<?php echo htmlspecialchars($v->project_name);?>" class="btnRenameProject spicon btn_renameProject"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Rename");?></a>
                                    </td>
                                    <td class="padseparate"> | </td>
                                    <td align="left" valign="top"><!-- <input type="button" value="{translate(#Delete#):h}" projectName="{v.project_name}" projectId="{v.project_id}" checkRemovePublish = "{v.rvs_publish_path}" urlPublish ="{v.urlPublish}" class="btnRemoveProject spicon icon_deletepro"> -->
                                        <a projectName="<?php echo htmlspecialchars($v->project_name);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" checkRemovePublish ="<?php echo htmlspecialchars($v->rvs_publish_path);?>" urlPublish ="<?php echo htmlspecialchars($v->urlPublish);?>" class="btnRemoveProject spicon btn_removeProject"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Delete");?></a>
                                    </td>
                                    </tr></table>
									
					               	   
								</div>
							</td>
		                </tr>
		            </table>
	           </div> 
               <div class="clearit"></div>	
               <div class="pad" id="showiconproject" style="visibility: hidden; display:none;">
	                <input type="button" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Edit");?>" projectName="<?php echo htmlspecialchars($v->project_name);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" class="btnEditProject spicon icon_editpro" />
	                <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isAllowExport")) { ?>
	               	<input type="button" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Backup");?>" projectName="<?php echo htmlspecialchars($v->project_name);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" class="btnBackUpProject spicon icon_backuppro" />
	               	<?php }?>  
	                <input type="button" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Rename");?>" divShow="div<?php echo htmlspecialchars($k);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" projectName="<?php echo htmlspecialchars($v->project_name);?>" class="btnRenameProject spicon icon_renamepro" />
	                <input type="button" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Remove");?>" projectName="<?php echo htmlspecialchars($v->project_name);?>" projectId="<?php echo htmlspecialchars($v->project_id);?>" checkRemovePublish ="<?php echo htmlspecialchars($v->rvs_publish_path);?>" urlPublish ="<?php echo htmlspecialchars($v->urlPublish);?>" class="btnRemoveProject spicon icon_deletepro"> 
               	</div>
                <div class="clearit"></div>
            </div>

			<div style="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("countDisplayNone",$k,$t->maxProjectMore);?> margin:-5px 0;" id="projectUrl_<?php echo htmlspecialchars($k);?>" class="searchHidden" projectname="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'strToLower'))) echo htmlspecialchars($t->strToLower($v->project_name));?>">
                <?php if ($v->urlPublish)  {?>
                <span class="txtpublishpath"><label><b><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project URL");?>:</b> <?php echo htmlspecialchars($v->urlPublish);?></label></span>
                <?php } else {?>
                <span class="txtpublishpath"><label><b><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project URL");?>:</b> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("None publish url");?></label></span>
                <?php }?>
            </div>

            </div> <!-- end frameproject -->
			</div>

        <?php }?>
        <div class="emptyResSearch" style="display: none; text-align:center; color:#ff0000;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("The recuested project does no exist"));?></div>
      </div>
    </div>
        
     </div>
    
    <!-- End List Project --> 

    <div class="clearit"></div>

            <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isOver'))) if ($t->isOver($t->countProject,$t->maxProjectMore)) { ?>
			<div style="width:1200px;">
				<div id="slidMoreProject" onclick="jQuery.sitebuilder.restoreMissingProject.slideShowProject(aProjectJson,maxProjectMore);">
				
				<table align="center" class="moreprojectbox"><tr>
				<td align="center"><b><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("More Projects");?></b></td>
				</tr></table>
				
				</div>
			</div>
			<?php }?>

<p style="height:50px;">&nbsp;</p>

<div class="blockAllowScript" style="width:100%; bottom:20px; position:fixed; z-index:99;">
    <div><?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('wysiwygAllowScript.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?></div>
</div>

<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/restoreMissingProject.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/removeproject.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/restoreproject.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/showBuyAccount.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<!-- demo -->
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/ConvertProjectUTF8Format.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/SiteBuilder.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<!-- end demo -->

<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/formcreatedatabase.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>

<div id="ExportProject" style="display:none"><?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('ExportProject.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?></div>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('header.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>

<!-- NEW Design -->
<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="left" valign="top">
            
            <div class="rvclearit"></div>
            <div class="rvmain" style="position:fixed; width:100%; z-index:999;">
               <div class="rvinner-wrapper">
               <!-- Start TOP BAR -->
               <div class="topbar">
               
               <!-- Start Logo text & Logo brand --> 
				<div class="brand" style="position:absolute; padding-top:10px;">

					<div><span class="website_name"><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getTextBrand");?></span></div>
				</div>
				<!-- End Logo text & Logo brand --> 
				
				<div class="menutopbar" style="position:absolute; right:0;">
                	<div class="rvright">
                          <a href="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getHomeUrl"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Control Panel");?></a>
                       <!-- change user level for nocp mode only -->
                      <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isEqual'))) if ($t->isEqual($t->conf['SiteBuilder']['cpmode'],"nocp")) { ?>
                      	<img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images5/bar.gif" alt="" width="2" height="18" align="absmiddle" />
                           <a href="#" id="clickChangeUserLevel">Change user (nocp only)</a>
                      <?php }?>
                           
                       <!-- start back to tryout-->
                       <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("getUrlBackToTryout")) { ?>
                       <img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images5/bar.gif" alt="" width="2" height="18" align="absmiddle" />
                       <a href="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getHomeUrl"));?><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getUrlBackToTryout"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Back to Tryout");?></a>
                       <?php }?>
                       <!--end  back to tryout-->
                       
                       <!-- start Link Buy Account-->
                       <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("getBuyAccountUrl")) { ?>
                       <img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images5/bar.gif" alt="" width="2" height="18" align="absmiddle" />
                       <a href="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getBuyAccountUrl"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Buy Account");?></a>
                       <?php }?>
                       <!-- end Link Buy Account-->
                       <img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images5/bar.gif" alt="" width="2" height="18" align="absmiddle" />
                       <a href="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getHomeUrl"));?><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getLogoutUrl"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Logout");?></a>
                      </div>
               	</div>
               	
               </div>
               <!-- End Topbar -->
               
                <!--start sitebuilder v5 -->
                 <div>
                   <div class="leftstepnav">
                         <div class="stepnavigator">
                             <ul class="stepnavigator">
                                 <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","sitebuilder","sitebuilder"));?>" class="navstep0 <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("currentStep0",$t->step,0));?>"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("HOME");?></span></a></li> 
                    <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isProjectSessionExists")) { ?>
                    <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isTemplateItemForderExists")) { ?>
                                 <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>" class="navstep1 <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("currentStep",$t->step,1));?>"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("STEP1");?></span></a></li> 
                                 <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","adjustStyle","sitebuilder"));?>" class="navstep2 <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("currentStep2",$t->step,2));?>"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("STEP2");?></span></a></li> 
                                <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","PageContent","sitebuilder"));?>" class="navstep3 <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("currentStep3",$t->step,3));?>"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("STEP3");?></span></a></li> 
                               </ul>
                               <div class="rvclearit"></div>
                           </div>
                    </div>
                    <?php } else {?>
                    
		            <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>" class="navstep1"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("STEP1");?></span></a></li>
		            <li><a href="javascript:void(0);" class="navstep2none navstepnone"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("STEP2");?></span></a></li>
		            <li><a href="javascript:void(0);" class="navstep3none navstepnone"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("STEP3");?></span></a></li>
		            </ul>
		            <div class="rvclearit"></div>
                  </div>
                  <div class="rvclearit"></div>
                </div>
                          
            	<?php }?>
            	<?php } else {?>
            
		            <li><a href="javascript:void(0);" class="navstep1none navstepnone"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("STEP1");?></span></a></li>
		            <li><a href="javascript:void(0);" class="navstep2none navstepnone"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("STEP2");?></span></a></li>
		            <li><a href="javascript:void(0);" class="navstep3none navstepnone"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("STEP3");?></span></a></li>
		            </ul>
		            <div class="rvclearit"></div>
                 </div>
              </div>     
            <?php }?>
              
              
              	<div align="right" style="right:0; float:right; padding-top:33px;">					
					
					<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isProjectSessionExists")) { ?> 
									 <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isTemplateItemForderExists")) { ?>
		                     <!-- move button backup project  nipaporn -->
		                        	<span>
		                        	<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isAllowExport")) { ?>
		                                 <?php if ($t->rvs_project_id)  {?>
		                                 <div id="globalsFrmBackupProject" class="icon_sprbackup">
		                                 <a href="javascript:void(0);" id="globalsSubmitExport" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?></a>
		                                 </div>
		                                  <?php } else {?>
		                                  <div class="icon_sprbackup"><a href="#" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?></a>
		                                 </div>
		                                  <?php }?>
		                              <?php }?>
		                             </span>
									 <!---end  backup project nipaporn -->
								    <div class="icon_sprpreview">
		                            <a href="javascript:void(0);" onclick="previewFocus('<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","publishsite","sitebuilder"));?>action/sitepreview/PreviewId/<?php echo htmlspecialchars($t->md5Id);?>')" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?></a> 
		                            </div>
		                            <div class="icon_sprpublish">
		                            <a href="javascript:void(0);" onclick="jQuery.sitebuilder.Publish.confirm();" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Publish");?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Publish");?></a> 
		                          	</div>
		                          	<?php } else {?>
		                          	
		                          	<a href="javascript:void(0);" class="btn_pvnone" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?></a> 
                        			<a href="javascript:void(0);" class="btn_publishnone" title="Publish"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Publish");?></a> 
                        			<?php }?>
                        			<?php } else {?>
                        			<a href="javascript:void(0);" class="btn_pvnone" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?></a> 
                        			<a href="javascript:void(0);" class="btn_publishnone" title="PUBLISH"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Publish");?></a> 
                        			<?php }?>
                        			
                        			
				</div>
			    <div class="rvclearit"></div>
              
            </div>
            
           
            
        </div>
      </div>
            <!--End step sitebuilder 5 -->
                        
            <!-- Start STEP FRAME -->
            <?php if (!$t->step)  {?>
    
        <div>
            <div><!--  class top_header  -->
                <div class="rvinner">
                 	<div class="pad">
	                    <table cellpadding="0" cellspacing="0" width="100%" style="display:none;">
						    <tr>
						        <td align="left" valign="top" width="50%">
			                        <span class="titlenavigator"> 
			                        <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"stepName",$t->mode);?>
			                        </span>
			                    
						    </td>
				    
						    <td align="right" valign="top" width="50%" class="padbackup">
						    <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isProjectSessionExists")) { ?> 
									 <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isTemplateItemForderExists")) { ?>
		                     <!-- move button backup project  nipaporn -->
		                        	<span>
		                        	<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isAllowExport")) { ?>
		                                 <?php if ($t->rvs_project_id)  {?>
		                                 <a id="globalsFrmBackupProject" class="btn_backup">
		                                 <input name="globalsSubmitExport" type="button" id="globalsSubmitExport" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>" />
		                                 </a> 
		                                  <?php } else {?>
		                                 <a href="#" class="btn_backup"><input type="button" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>" /></a>
		                                  <?php }?>
		                              <?php }?>
		                             </span>
									 <!---end  backup project nipaporn -->
								
		                            <a href="#" onclick="previewFocus('<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","publishsite","sitebuilder"));?>action/sitepreview/PreviewId/<?php echo htmlspecialchars($t->md5Id);?>')" class="btn_pv" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?></a> 
		                            <a href="#" onclick="jQuery.sitebuilder.Publish.confirm();" class="btn_publish" title="Publish"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Publish");?></a> 
		                          	<?php } else {?>
		                          	
		                          	<a href="#" class="btn_pvnone" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?></a> 
                        			<a href="#" class="btn_publishnone" title="Publish"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Publish");?></a> 
                        			<?php }?>
                        			<?php } else {?>
                        			<a href="#" class="btn_pvnone" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?></a> 
                        			<a href="#" class="btn_publishnone" title="PUBLISH"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Publish");?></a> 
                        			<?php }?>
		                    </td>
                    	</tr>
                    </table>
                </div>
                <div class="rvclearit"></div>
                
            </div>
            
        </div>
 
        
		<!--START MAIN BODY-->
		
		
        <div class="rvbody">
			<!--START msg box-->
            <div id="rvDisplayMSGBOXALL">
                <div id ="rvDisplayMSGBOX">
                    <?php if (!$t->DisableResMsg)  {?>
                    <!-- Start Display Error -->
                    <div id ="rvDisplayError" align="center" style="margin-bottom:0px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) if ($t->msgGet()) { ?><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo $t->msgGet();?></span><?php }?></div>
                    <!-- End Display Error -->
                    </div>
                    </div>
                    <!-- End Warning Error -->
                    <?php }?> 
			<!--END msg box-->

				<div class="rvinner">
                	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'outputBody'))) echo htmlspecialchars($t->outputBody());?>
			     </div>
            </div>
            
         
            
		<!--END MAIN BODY-->
        </td>
    </tr>

    <?php } else {?>
		 </td>
	</tr>
	<tr>
    <?php if ($t->iswysiwyg)  {?>
        <td id="stepFrameWysiwyg"> 
    <?php } else {?> 
        <td> 
	<?php }?>
        <div style="padding-top:0px;"><!-- padtop15 -->
            <div class="top_header">
                <div class="rvinner">
                    <div class=" pad" style="display:none;">
                        <table cellpadding="0" cellspacing="0" width="100%">
						    <tr>
						        <td align="left" valign="top" width="50%" style="padding-top:5px;">
			                        <span class="titlenavigator">  
		                             <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"stepNo",$t->mode);?>
		                          </span>
						    </td>
				    
						    <td align="right" valign="top" width="50%" class="padbackup">
		                     <!-- move button backup project  nipaporn -->
		                        	<span>
		                        	<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isAllowExport")) { ?>
		                                 <?php if ($t->rvs_project_id)  {?>
		                                 <a id="globalsFrmBackupProject" class="btn_backup">
		                                 <input name="globalsSubmitExport" type="button" id="globalsSubmitExport" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>" />
		                                 </a> 
		                                  <?php } else {?>
		                                 <a href="#" class="btn_backup"><input type="button" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>" /></a>
		                                  <?php }?>
		                             <?php }?>
		                             </span>
									 <!---end  backup project nipaporn -->
									 
		                            <a href="#" onclick="previewFocus('<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","publishsite","sitebuilder"));?>action/sitepreview/PreviewId/<?php echo htmlspecialchars($t->md5Id);?>')" class="btn_pv" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Site preview");?></a> 
		                            <a href="#" onclick="jQuery.sitebuilder.Publish.confirm();" class="btn_publish" title="Publish"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Publish");?></a> 
		                          
		                    </td>
                    	</tr>
                    </table>
                      </div>  
                                      
                      <!-- showlog js --> 
                      <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialogTool.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
                      <!-- end showlog js -->
                      
                 </div>
                 <div class="rvclearit"></div>
             </div>
             
        </div>  
        
        <div> 
		
		<?php if ($t->isWysiwygAllowScript)  {?>
            <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('wysiwygAllowScript.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
            <?php }?>
            <?php if ($t->componentConfigUser)  {?>
            <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('rvs_usercomponent.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
            <?php } else {?>
            <!-- START OUT PUT BODY COMPONENT CONFIG-->
            
            <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isEqual'))) if ($t->isEqual($t->step,1)) { ?>
                <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('rvs_catelogue_menu.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
            <?php }?>
            
            <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isEqual'))) if ($t->isEqual($t->step,3)) { ?>
                <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('rvs_pagecontent_menu.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
            <?php }?>
            <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'outputBody'))) echo htmlspecialchars($t->outputBody());?>
            <!-- END OUT PUT BODY COMPONENT CONFIG-->
            <?php }?> 
        </div>
       <?php }?>
    <!-- End STEP FRAME -->
        </div>
        </td>
    </tr>
    <tr>
       <td class="footerversion" style="bottom:0; position:fixed; width:99%; z-index:9999;">
       	<!--START FOOTER-->
            <div style="float:left;">version<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getRVSVersion");?> <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getRVSProjectId");?></div>
            <div align="right">
                <!-- icon view log -->
                <a hrefLog="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("view","viewlog","sitebuilder"));?>" id="userViweLog" class="viewlog">
                    <img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/logview.gif" alt="" width="10" height="11" border="0" align="absbottom" /> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Viewlog");?>
                </a>
            </div>
			<!--END FOOTER-->
       </td>
    </tr>

</table>




<!-- middle column -->
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/PublishSite.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/ChangeUserLevel.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<?php if ($t->conf['SiteBuilder']['showAckKnowledge'])  {?>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/acknowledge.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?> 
<?php }?>
<!-- footer column -->
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('footer.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>

<?php echo $t->scriptOpen;?>
    var aCate = {};
    var aItemId = {};
	var numAllData = 0;
	var thumbperpage = 12;
	var cateId = '<?php echo htmlspecialchars($t->cateIdCurrent);?>';
	var temStyleId = '0';
	var pagerUrl = '<?php echo $t->pagerUrl;?>';
	var onDemandTemplate = <?php echo $t->ondemand_template;?>;
	var urlPreview = '<?php echo $t->url_preview;?>';
	var aCurrent = <?php echo $t->categoryData;?>;
	var downloadTemplateUser = false;
	var isImport = false;
	var isDiyTemplate = false;
	var reuploadIcon = false;
	var deleteIcon = false;
	var aTemplateMissing = <?php echo $t->aTemplateMissing;?>;
	var rvsDiy = "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("editview","diytemplate","sitebuilderpro"));?>";
	var rvsDeletetemplate = "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("deleteTemplate","editdeletetemplate","sitebuilder"));?>";
	var rvsMgrCategory = "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>";
	var objectCateData = {};
	var msgPreview = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Preview"));?>';
	var msgdownload = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Download"));?>';
	var msgReupload = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Reupload"));?>';
	var currentIsResponsive = "<?php echo htmlspecialchars($t->currentIsResponsive);?>";

	<?php if ($t->searchImportTemplateId)  {?>
		var searchImportTemplateId = <?php echo $t->searchImportTemplateId;?>;
	<?php } else {?>
		var searchImportTemplateId = {};
	<?php }?>
	<?php if ($t->noLink)  {?>
	    <?php if ($t->downloadTemplate)  {?>
		  var downloadTemplateUser = true;
		<?php }?>
	<?php }?>
	

<?php echo $t->scriptClose;?>

<?php if ($t->noLink)  {?>
    <?php if ($t->downloadTemplate)  {?>
       <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('ImportTemplateMenu.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
    <?php }?>
<?php }?>
<!--  End Design Box Search -->

    <div class="rvinner"> 
    <!-- menu import template -->
    <?php if ($t->submitUserImport)  {?>               
       <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('UploadTemplate.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
    <?php }?>
    <!-- End menu import template -->
    </div>

	 
<?php if (!$t->reupload)  {?> 

<!--  Start Design bgBlack -->
  <div class="step1_linebot" style="position:fixed; width:100%; z-index:99;">
     <div class="step1_linetop" style="min-width:1200px;">
        <div class="rvinner">            
		<!--  Start Design Select Category and Pager -->
		<!--  Start Design Box Search -->
		<div class="rvfright" style="position:relative; padding-top:15px;">
			<table class="templateCate_bgboxsearch" cellpadding="1" cellspacing="0">
			   <tr> 
				   <td align="left" valign="middle" width="99%">
				    <input type="text" size="20" id="suggestBox" class="templateCate_boxsearch" onclick="if(this.value == '<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Search For Keyword and Id");?>') this.value='';" onblur="if(this.value.length == 0) this.value='<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Search For Keyword and Id");?>';" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Search For Keyword and Id");?>" />
				    </td>
				   <td align="left" valign="top" style="border-left:#b8b8b8 solid 1px;"><?php echo $this->elements['btnSearch']->toHtml();?></td>
			    </tr>
			</table>
		</div> 
		  <div class="rvfleft">
			  <table cellpadding="0" cellspacing="0">
			     <tr>
			         <td nowrap="nowrap" align="left" valign="top">
					     <form name="newSelectCategory" method="post" action="">
					       <div style="float:left;"><div style="padding-bottom:5px; font-weight:bold; color:#474747;">Category</div>
					       <span class="templateCate_bgbox">
							 <select name="listCategory" id="listCategory">
								  <?php echo $t->currentOption;?>
						          <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'generateSelect'))) echo $t->generateSelect($t->aListCategory,$t->cateIdCurrent);?>
						     </select>
					       </span>
					       </div>
					       
					       <div style="float:left;"><div style="padding-bottom:5px; font-weight:bold; color:#474747;">Style</div>
						   <span class="templateCate_bgboxstyle">
							 <select name="templateTypeStyle" id="templateTypeStyle">
								 <option value="0"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("All Styles");?></option>
							      <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'generateSelect'))) echo $t->generateSelect($t->aTemplateTypeStyle,$t->aTemplateTypeStyle);?>
							 </select>
						   </span>
						   </div>
				        </form>
				
				     <!-- for replace category-->
				        <div class="previewTemplate">
						   <div id ="dataCategory" style="display:none;">
							  <div class="#currentDisplay#" style="display:none;" onmouseover="jQuery.sitebuilder.RvsCategory.showoptionTemCategory(jQuery(this));" onmouseout="jQuery.sitebuilder.RvsCategory.hideoptionTemCategory(jQuery(this));">
						
							    	<div class="templateCate"> 
								       <img src="#url#" class="disImgCate templateCate_imgborder" itemId="#itemID#" data-currentitem="#itemID#" id="img#CategoryId#" width="224" height="168" />
									   
									   <div id="showcurrent" class="templateid templateIdCurrent">#CategoryId#</div>

									   <div class="templateIconControl">
    									    <div style="float:left;">
    										    <a href="#urlSelectCurrent#" class="urlSelectCurrent" title="" style="display:none;">
    										      <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Current Template");?>
    										    </a>
    										</div>

										      <?php if ($t->submitUserImport)  {?>
										      <span id="showcurrent">										   	
											     <?php } else {?>  
											     <span id="showcurrent" style="visibility:hidden; padding:0px;">
											     <?php }?>
											         <span class="pad">
												        <a href="javascript:void(0);" class="urlSelect" title="" focusImg="img#CategoryId#" onclick="jQuery.sitebuilder.RvsCategory.confirmTemplateChange(jQuery(this),'#isResponsive#', false)"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Select");?></span></a>
											               #Preview#       
											            <div style="float:right;">
        											       <a href="#urlSwitch#" class="urlSwitch" currentTem="color2" focusImg="img#CategoryId#" setStyle="#styleDisplay#" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Switch");?>"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images5/spacer.gif" alt="" width="12" height="1" border="0" /></a>
        											       #colorImgData#
        											       #download#
        											       #EditDiyTemplate#
        											       #deleteIcon#
        											       #reuploadIcon#
											  		    </div>
											  		    
        											    <div id="mc_preview" class="padPreview">
        											      #ImgResponsive#                                                           
                                                        </div>
											         <span><!-- End pad -->
											      </span><!-- End showcurrent -->                                                  
										       </span><!-- End showcurrent -->
									         
								         </div><!-- End templateIconControl -->
								      </div><!-- End templateCate -->
								      
							   </div><!-- End currentDisplay -->
							</div><!-- End dataCategory -->
						</div><!-- End previewTemplate -->
				    </td>
				
				    <td class="pagcolor" nowrap="nowrap" align="left">			
						<!-- start pager --> 
						
					       <table cellpadding="0" cellspacing="0" width="100%" style="margin-top:15px;">
					           <tr>
					               <td align="left" valign="top" nowrap="nowrap">
									   <span id="pagination"></span>
								    </td>
								    <td align="left" valign="middle" nowrap="nowrap">
									   <span class="templateCate_bgNum"><select name="changePerPage" id="changePerpage" onchange="changePerPage(this)"></select><span style="line-height:20px; margin:5px 0 0 10px;">-</span></span>
						            </td>
						       </tr>
						       <!-- 
						       <tr>
                                    <td align="left" valign="middle" class="txtnum" nowrap="nowrap" style="padding:10px 0 10px 80px;">(Total <span id="totalTemplateCate"></span> {translate(#templates#):h} ) --> <!-- <span id="showDescPager"> , Page  <span id="pageNowCurrent"></span> of <span id="pageAll"></span> </span>-->
                                    <!-- </td>
                               </tr> -->
						   </table>
						<!-- end pager -->
				   </td>
				</tr>
              </table>
			 </div> 
			 
			 
			<!--  End Design Select Category and Pager -->
				
            <div class="rvclearit"></div>
            </div>
        </div>
    </div> 
    <div style="padding-top:50px;">&nbsp;</div>
    <div class="bgline_home" style="position:fixed; width:100%;"></div>
<!--  End Design bgBlack -->

<!-- start Design Show Preview-->  
<div class="rvstep1" style="padding-top:18px;">

    <div style="padding:0 0 10px 10px;">( Total <span id="sumPageSelect"></span> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("templates");?> )<!--(Total <span id="totalTemplateCate"></span> {translate(#templates#):h} )--></div>

    <div class="rvinner">	
	
	      <div id ="newDataCategory"></div>
	      <!-- search show no template -->
	      <div id="showDescSearch" style="display:none;">
	           <span class="f12b_orange">
	             <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("There is no template. Please change your filter and try again."));?> <br>
			     <?php echo $this->elements['btnBack']->toHtml();?>
	           </span>
          </div> 
          <!-- End search show no template -->
	      
	      <!-- show no template -->
		  <div id="showNotTemplate" style="display:none;">
			 <span class="f12b_orange">
		        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("There is no template. Please change your filter and try again."));?>
		     </span>  
		 </div> 
		 <!-- End show no template -->
	
	</div>     
</div> 

<!-- End Design Show Preview-->    
       
<?php }?>




<!-- Disable Download template -->
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('TemplateRandom.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/RvsCategory.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<?php if (!$t->tryoutMode)  {?>
<div id="ConfirmDelete" style="display:none"><?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('ConfirmDelete.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?></div>
 <!-- <div id="TemplateDetail" style="display:none"><flexy:include src="TemplateDetail.html" /></div>  -->
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/TemplateDetail.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?></div>

<?php }?>
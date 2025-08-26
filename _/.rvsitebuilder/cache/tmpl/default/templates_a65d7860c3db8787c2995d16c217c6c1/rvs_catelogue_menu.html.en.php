<!-- START STEP 1 Menu Catelogue -->
<div class="bottom_header_brd" style="margin-top:79px; position:fixed; width:100%; z-index:99;">
<div class="bottom_header">
   <div class="rvinner">
        <!-- link menu  -->
        
        <!-- TODO: programmer add class="tabheader_curr" -->
        <ul class="rvtabheader">
        <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>" class="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("currentSubStep",$t->mode,"Template"));?>"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Template Catalogue");?></span></a></li>
        <?php if ($t->allowDIYTemplate)  {?>
		 <li><span><a href="javascript:void(0);" class="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("currentSubStep",$t->mode,"diytemplate"));?>" onclick="jQuery.sitebuilder.DiyResponsive.GenerateDiyresponsive(jQuery(this));"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Create DIY Template");?></span></a></li>
         <!-- <li><span><a  href="{makeUrl(#view#,#diytemplate#,#sitebuilderpro#)}create/1" class="{this.plugin(#currentSubStep#,mode,#diytemplate#)}"><span>{translate(#Create DIY Template#):h}</span></a></li> -->
        <?php }?>
        <?php if ($t->allowImportTemplate)  {?> 
         <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isAdmin'))) if (!$t->isAdmin()) { ?>
		 <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>submitUserImport/1" class="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("currentSubStep",$t->mode,"exportandimport"));?>"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export And Import");?></span></a></li>
		 <?php } else {?>
		 <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","uploadtemplate","sitebuilder"));?>parent/1" target="_blank" class="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("currentSubStep",$t->mode,"exportandimport"));?>"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export And Import");?></span></a></li>
		 <?php }?>
        <?php }?>
       <div class="rvclearit"></div>
        </ul>
        <!-- End link menu  -->
    </div>
    <div class="rvclearit"></div>
</div>
</div><!-- end bottom header brd -->
<div class="tabsteb_line" style="height:135px;"></div>
<!-- END STEP 1 Menu Catelogue -->
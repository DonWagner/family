<table width="100%" border="0" cellspacing="0" cellpadding="0" class="attentionPad">
	<tr>
		<td valign="top"><!--class="attentionBorder"-->

<div>
<!--
	<div id="attentionLeft">
		<div class="at_icon"><img src="{webThemeUrl}/themes/{theme}/sitebuilder/images/attetion.gif" alt="" width="24" height="24" /></div>

		<div class="at_text">{translate(#Attention#):h} : </div>
	</div>
-->



	<div id="attentionLeft">
<!--<span>{translate(#Java Applet#):h} :</span>-->
		<table width="100%" cellspacing="0" cellpadding="0" style="font-size:10px;">
		  <tr>
		  <td align="left" valign="top">
		  <div class="at_text">
	        <?php if ($t->conf['wysiwyg']['allowApplet'])  {?>
	            <span>
	                <img class="spicon iconAplet" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" align="absmiddle" />
	                <div style="margin-top:5px;margin-right:30px;"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Java Applet");?>: <font color="#84ba11"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Enable");?></font></span></div>
	             </span>
	        <?php } else {?>
	            <span><img class="spicon iconAplet_off" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" align="absmiddle" />
	            <div style="margin-top:5px;margin-right:30px;"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Java Applet");?>: <font color="#E00404"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Disable");?></font></span></div>
	            </span>
	        <?php }?>
	        </div>
		  </td>
		  <td align="left" valign="top">
		        <div class="at_text">
		        <?php if ($t->conf['wysiwyg']['allowScript'])  {?>
		            <span><img class="spicon iconJava" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" align="absmiddle" />
		            <div style="margin-top:5px;margin-right:30px;"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Java Script");?>: <font color="#84ba11"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Enable");?></font></span></div>
		            </span>
		        <?php } else {?>
		            <span><img class="spicon iconJava_off" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" align="absmiddle" />
		            <div style="margin-top:5px;margin-right:30px;"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Java Script");?>: <font color="#E00404"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Disable");?></font></span></div>
		            </span>
		        <?php }?>
		        </div>
		  </td>
		  <td align="left" valign="top">
			  <div class="at_text">
	        <?php if ($t->conf['wysiwyg']['allowPhp'])  {?>
	            <span><img class="spicon iconPHP" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" align="absmiddle" />
	            <div style="margin-top:5px;margin-right:30px;"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("PHP Script");?>: <font color="#84ba11"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Enable");?></font></span></div>
	            </span>
	        <?php } else {?>
	            <span><img class="spicon iconPHP_off" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" align="absmiddle" />
	            <div style="margin-top:5px;margin-right:30px;"><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("PHP Script");?>: <font color="#E00404"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Disable");?></font></span></div>
	            </span>
	        <?php }?>
	        </div>
		  </td>
		  </tr>
		</table>
		
	</div>
</div>

</td>
</tr>
</table>
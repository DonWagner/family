<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addCssFile2'))) echo htmlspecialchars($t->addCssFile2("rvlayout.css","default","sitebuilder"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addCssFile2'))) echo htmlspecialchars($t->addCssFile2("rvstep1.css","default","sitebuilder"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addCssFile2'))) echo htmlspecialchars($t->addCssFile2("rvstep2.css","default","sitebuilder"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addCssFile2'))) echo htmlspecialchars($t->addCssFile2("rvstep3.css","default","sitebuilder"));?>

<link id ="linkcssglobal" rel="stylesheet" type="text/css" media="screen" href="<?php echo htmlspecialchars($t->webThemeUrl);?>/js/jquery-ui/themes/base/jquery.ui.all.css" />
<link id ="linkcssglobal" rel="stylesheet" type="text/css" media="screen" href="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/default/sitebuilder/css/ui.all.css" />

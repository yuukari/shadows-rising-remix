<?php /* Smarty version 2.6.6, created on 2011-05-12 19:37:38
         compiled from mapgen_top.tpl.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<!--
Title:			Shadows Rising RPG "Deep Blue" Theme (experimental) 
Designed by:	Maugrim The Reaper (http://www.quantum-star.com)
Compliance:		XHTML 1.1
Optimisation:	1024x768 Resolution // Mozilla Firefox 0.8
-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title><?php echo $this->_tpl_vars['game_name']; ?>
 :: <?php echo $this->_tpl_vars['location']['loc_name']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="language" content="en" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url_prefix']; ?>
/core/themes/Deep_Blue/style_deepblue.css" type="text/css" />

<!--changeTerrainImage(): simple image replacement function based on whether the tile is selected or not. To determine whether tile is selected we search the <img> 'src' attribute to see if it was set to selected.gif search() returns -1 if search finds nothing-->

<!--We only need to use literal Smarty tags to surround non-Smarty curly braces such as those in Javascript - otherwise the Smarty engine would parse these by accident, cause an error, and return a blank page!-->

<script type="text/javascript">
<!--

<?php echo '

	function changeTerrainImage(imgID, originalImage, divID, tileID) {
		var newImage;
		var newHTML;
		var tileImage = document.getElementById(imgID).src.search(\'selected.gif\');
		if (tileImage != -1)
		{
			newImage = originalImage;
			newHTML = \'\';
		}
		else
		{
			newImage = \'selected.gif\';
			newHTML = \'<input type="hidden" name="changedtiles[]" value="\' + tileID + \'" />\';
		}
		document.getElementById(imgID).src = \'';  echo $this->_tpl_vars['url_prefix'];  echo '/core/images/terrain/\' + newImage;
		document.getElementById(imgID).alt = newImage;
		document.getElementById(divID).innerHTML = newHTML;
	}

'; ?>


// -->
</script>



<!--End of Javascript Functions for MapGen Editor-->

</head>
<body class="default">

<table cellspacing="0" class="default" width="100%" style="text-align: center; border: 0px;">
	<tr>
		<td width="100%" colspan="5" class="internal" style="text-align: center; background-color: #000000;">
			<img src="<?php echo $this->_tpl_vars['url_prefix']; ?>
/core/themes/Deep_Blue/images/logo.gif" alt="Shadows Rising" title="Shadows Rising" />
		</td>
	</tr>
	<tr>
		<td width="100%" colspan="5" style="height: 5px">
		</td>
	</tr>
</table>


<table cellspacing="0" class="default" width="100%" style="text-align: center; border: 0px;">
	<tr>
		<td id="page_leftpanel">
<!--This is the left side panel, this holding table cell will contain tables for user information-->

	<table cellspacing="0" class="block">
	<tr>
		<td>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "blocks/nav_menu.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
	</table><br />

	<table cellspacing="0" class="block">
	<tr>
		<td>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "blocks/character_details.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
	</table><br />

	<table cellspacing="0" class="block">
	<tr>
		<td>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "blocks/character_attributes.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
	</table><br />

<!--This is the end of the left side panel-->
		</td>
		<td width="5">
		&nbsp;
		</td>
		<td id="page_centerpanel">
			<table cellspacing="0" class="module">
				<tr>
					<td>
<!--This is the center panel where user actions, text, and menus will appear-->
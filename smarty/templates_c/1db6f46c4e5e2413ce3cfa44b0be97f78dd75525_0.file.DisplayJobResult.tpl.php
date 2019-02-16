<?php
/* Smarty version 3.1.30, created on 2019-01-17 17:43:45
  from "/home/MSF/www/smarty/templates/DisplayJobResult.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c40b0c1b8f221_38514482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1db6f46c4e5e2413ce3cfa44b0be97f78dd75525' => 
    array (
      0 => '/home/MSF/www/smarty/templates/DisplayJobResult.tpl',
      1 => 1473770940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5c40b0c1b8f221_38514482 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<title><?php echo $_smarty_tpl->tpl_vars['web_pages_title']->value;?>
</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/main.css" />
  <link href="./scripts/themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
  <link href="./scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
  <link class="include" rel="stylesheet" type="text/css" href="./scripts/jquery.jqplot.min.css" />
  
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div align="center">
    <font size=5 color=#0000ff><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
<br> </font>
    <br>
    <?php if ($_smarty_tpl->tpl_vars['PlayAudio']->value == 1) {?>
      <?php if (!empty($_smarty_tpl->tpl_vars['AudioFileName']->value)) {?>
          <EMBED SRC="<?php echo $_smarty_tpl->tpl_vars['AudioFileName']->value;?>
" HREF="./"   >
      <?php }?>
    <?php }?>
  </div>
  <br>
  <div align=left>
      <input class="btn btn-info" type="button" onClick="history.go(-1);" value="Back"> 
  </div>

	<font size=3>
      <?php if (!$_smarty_tpl->tpl_vars['GetLog']->value) {?>
	    <a class="btn btn-info"  href="download.php?file=<?php echo $_smarty_tpl->tpl_vars['DisplayedFileName']->value;?>
&Type=results">Download the displayed file</a>
      <?php }?>
      <?php echo $_smarty_tpl->tpl_vars['GetLog']->value;?>

	</font>
  <br>

  <br>
   <FONT FACE="courier">
    <div align="left">
  <?php if (!empty($_smarty_tpl->tpl_vars['VisuListe']->value)) {?>
      <div align=right>
        <?php if (!empty($_smarty_tpl->tpl_vars['pagination']->value)) {?>
           <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

        <?php }?>
      </div>
      <br>
      <div style="font-size:12px; ">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VisuListe']->value, 'foo2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo2']->value) {
?>
                <?php echo $_smarty_tpl->tpl_vars['foo2']->value;?>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <br>
      <?php if (!empty($_smarty_tpl->tpl_vars['pagination']->value)) {?>
        <div align=right>
           <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

        </div>
      <?php }?>

    </div>

   <?php }?>

    </div>

  </FONT> 
   <!--
    <div align="left">
        <br><br><br><br>
		color red    : low confidency<br>
		color yellow : medium confidency<br>
		color green  : high confidency<br>
    </div>
   -->
</body>
</html>


<?php }
}

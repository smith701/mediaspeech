<?php
/* Smarty version 3.1.30, created on 2019-01-17 14:31:36
  from "/home/MSF/www/smarty/templates/StartTranscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4083b8a602f8_96689603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbb9ee52535c3bd0aa498cc0c5d0aab9a4c3a954' => 
    array (
      0 => '/home/MSF/www/smarty/templates/StartTranscription.tpl',
      1 => 1473770939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:StartScripts.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:StartSourceAudio.tpl' => 1,
  ),
),false)) {
function content_5c4083b8a602f8_96689603 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['web_pages_title']->value;?>
 - transcription</title>

  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/tableau.css">
  <link rel="stylesheet" type="text/css" href="./css/jquery.multiselect.css" />
  <link rel="stylesheet" type="text/css" href="./css/multiselect/style.css" />
  <link rel="stylesheet" type="text/css" href="./css/multiselect/prettify.css" />
  <link rel="stylesheet" type="text/css" href="./css/jquery-ui.css" />
  <!-- Generic page styles -->
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
  <link rel="stylesheet" type="text/css" href="./css/jquery.fileupload-ui.css">
  <link rel="stylesheet" type="text/css" href="./css/panels.css">

  <?php echo '<script'; ?>
 src="scripts/load-image.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="scripts/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="scripts/jquery-ui.min.js"><?php echo '</script'; ?>
>
  <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
  <?php echo '<script'; ?>
 src="scripts/vendor/jquery.ui.widget.js"><?php echo '</script'; ?>
>
  <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
  <?php echo '<script'; ?>
 src="scripts/jquery.iframe-transport.js"><?php echo '</script'; ?>
>
  <!-- The basic File Upload plugin -->
  <?php echo '<script'; ?>
 src="scripts/jquery.fileupload.js"><?php echo '</script'; ?>
>
  <!-- The File Upload processing plugin -->
  <?php echo '<script'; ?>
 src="scripts/jquery.fileupload-process.js"><?php echo '</script'; ?>
>
  <!-- The File Upload audio preview plugin -->
  <?php echo '<script'; ?>
 src="scripts/jquery.fileupload-audio.js"><?php echo '</script'; ?>
>
  <!-- The File Upload video preview plugin -->
  <?php echo '<script'; ?>
 src="scripts/jquery.fileupload-video.js"><?php echo '</script'; ?>
>
  <!-- The File Upload validation plugin -->
  <?php echo '<script'; ?>
 src="scripts/jquery.fileupload-validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="scripts/prettify.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="scripts/jquery.multiselect.js"><?php echo '</script'; ?>
>
	
</head>
<body>         
<?php $_smarty_tpl->_subTemplateRender("file:StartScripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, ((string)$_SESSION['lang']).".txt", null, 0);
?>




<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	$("#selectaudio").multiselect({

    noneSelectedText:"<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'MSG_SelectMsf');?>
",

    height:450});

    var $Button   = $("#StartAction"), 
        $window    = $(window),
        offset     = $Button.offset(),
        topPadding = 80;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) 
        {
            $Button.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } 
        else 
        {
            $Button.stop().animate({
                marginTop: 80
            });
        }
    });

});

<?php echo '</script'; ?>
>




<?php if ($_smarty_tpl->tpl_vars['JobId']->value) {?>
    <div align="center">
    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'JobIdSubmission');?>
 
    <br><br>
    <b> 
    <?php
$__section_nIndex_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_nIndex']) ? $_smarty_tpl->tpl_vars['__smarty_section_nIndex'] : false;
$__section_nIndex_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['JobId']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nIndex_0_total = $__section_nIndex_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nIndex'] = new Smarty_Variable(array());
if ($__section_nIndex_0_total != 0) {
for ($__section_nIndex_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nIndex']->value['index'] = 0; $__section_nIndex_0_iteration <= $__section_nIndex_0_total; $__section_nIndex_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nIndex']->value['index']++){
?>
        <a href="StatusAndResults.php"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ViewStatus');?>
 <?php echo $_smarty_tpl->tpl_vars['JobId']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nIndex']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nIndex']->value['index'] : null)];?>
</a><br>
    <?php
}
}
if ($__section_nIndex_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_nIndex'] = $__section_nIndex_0_saved;
}
?>
      </b>
    </div>
<?php }?>
<br>
<div align=left>
<font size=4 color=#ff0000>
<b><?php echo $_smarty_tpl->tpl_vars['MessageDeRetour']->value;?>
</b>
</font>




</head>

<body>




<?php if ($_smarty_tpl->tpl_vars['ModeView']->value == 1) {?>
    <form name="formulaire" method="get" enctype="multipart/form-data" action='' >
        <input type="hidden" name="function" value="transcription">
	<input type="hidden" name="jobid" value="<?php echo $_smarty_tpl->tpl_vars['JobId']->value;?>
">
        <button class="btn btn-info" style="float:left;display:inline;margin-left:100px;margin-right:30px" name="StartAction"  id="StartAction" value="Exec" type="submit" onClick="" style="font: 16px Arial" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'BTN_StartTranscription');?>
</button>
	    
	  <div  class="panel-trans" id="PanelTrans">
                <div class="grid">
<?php $_smarty_tpl->_subTemplateRender("file:StartSourceAudio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
          </div>
    </form>

<div id="container">

</div>

<div class="panel">
    <b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CallbackURL');?>
</b><br>
    <font size=1>
            http://your.address/callback[?param1=value1...]<br> []=optionnal<br>
    </font>
    <input type="text" name="callbackurl" size="40" value="">
    <br>
    <br>
    <div Id="gpgkey" style="font-size:80%;">
        <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'MSG_PgpKey');?>

        <input type="text" name="gpgkey" size="40" maxlength="1024"></td>
    </div>

</div>
<a class="trigger" href="#"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ShowOptionnalfields');?>
</a>
<?php }?>

</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>

</body>
</html>


<?php }
}

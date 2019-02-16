<?php
/* Smarty version 3.1.30, created on 2019-01-17 14:25:47
  from "/home/MSF/www/smarty/templates/Home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c40825ba987e5_23905715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acfd62e82bfb52f92dee8b0f8e86536f2e099a89' => 
    array (
      0 => '/home/MSF/www/smarty/templates/Home.tpl',
      1 => 1483688271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5c40825ba987e5_23905715 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['web_pages_title']->value;?>
</title>
<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, ((string)$_SESSION['lang']).".txt", null, 0);
?>

    <link rel="stylesheet" type="text/css" href="./css/panels.css">

</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br><br><br><br><br><br><br>
<center>

<br>

<font size=4 color=#0000FF>
<?php echo $_smarty_tpl->tpl_vars['MessageDeRetour']->value;?>

</font>

    <div style="clear:both"></div>

    <div class="one-third">

        <h2>
            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'AccountInformations');?>

        </h2>
        <p>
            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Username');?>
 : <?php echo $_SESSION['login'];?>
            <br>
            <?php echo $_smarty_tpl->tpl_vars['Quota']->value;?>

            <br>
            <?php echo $_smarty_tpl->tpl_vars['MaxDate']->value;?>

            <br>
            <?php echo $_smarty_tpl->tpl_vars['QuotaDisk']->value;?>

        </p>
    </div>
    <div class="one-third">
        <h2>
            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Documentation');?>

        </h2>
        <p>
             <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DocQuickStartGuide');?>
 : <a href="./download.php?file=MSF_WebQuickStartAndModelUpdate.pdf&Type=pdf" >Download</a><br><br>
             <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DocWebserviceInterface');?>
 : <a href="./download.php?file=MSF_SpecificationsInterfaceWebservice.pdf&Type=pdf" >Download</a><br>
             <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ExWebserviceInterface');?>
 : <a href="./webservice" >Examples</a><br><br>
             <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DocRestInterface');?>
 : <a href="./download.php?file=MSF_SpecificationsInterfaceHttp.pdf&Type=pdf" >Download</a><br><br>
        </p>
    </div>
    <div class="one-third last">
        <h2>
            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'QuickStart');?>

        </h2>
        <p>
            <a href="./StartTranscription.php" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'LinkStartTranscription');?>
</a><br><br>
            <a href="./StatusAndResults.php" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'LinkStatusAndResults');?>
</a><br><br>
            <a href="./StartAlignment.php" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'LinkStartAlignment');?>
</a><br><br>
        </p>

    </div>
    <div style="clear:both"></div>

</body>
</html>


<?php }
}

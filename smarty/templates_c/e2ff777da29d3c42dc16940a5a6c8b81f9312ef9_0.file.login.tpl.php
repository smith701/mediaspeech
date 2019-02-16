<?php
/* Smarty version 3.1.30, created on 2019-01-17 14:25:20
  from "/home/MSF/www/smarty/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c408240bcd028_73445889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2ff777da29d3c42dc16940a5a6c8b81f9312ef9' => 
    array (
      0 => '/home/MSF/www/smarty/templates/login.tpl',
      1 => 1498207751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5c408240bcd028_73445889 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Vecsys - <?php echo $_smarty_tpl->tpl_vars['web_pages_title']->value;?>
</title>
    <link rel="stylesheet" type="text/css" href="./css/login-form.css">
   </head>
<body>
  <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/jquery.min.js"><?php echo '</script'; ?>
>

  <center>
    <img  src="./images/mediaspeech.png" alt="" name="logo-client"  border="0" width="600">

      <?php if ($_smarty_tpl->tpl_vars['Erreur']->value == 0) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </br>
        <div id="acceuil"> Welcome </div>
      <?php } else { ?>

        </br>

        </br>
        </br>

        <?php if ($_smarty_tpl->tpl_vars['Erreur']->value == 1001) {?>

          <H1>Login failed ! </H1>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['Erreur']->value == 1025) {?>

          <H1> Your account has expired, please consider buying access rights ! </H1>
        <?php }?>

        <font size=5 color=#25badd>Welcome to Mediaspeech factory</font></br></br>

        <?php if ($_smarty_tpl->tpl_vars['Maintenance']->value == 1) {?>
          </br> </br> </br> </br> </br> </br>
          </br> </br> </br> </br> </br> </br>
          <font size=6 color=#ff0000>MAINTENANCE IN PROGRESS</br>please come back later</font></br>  
        <?php } else { ?>

          <font size=5 color=#ff0000>
          </font></br>  

          
          <div class="login-form">

            <h1>Login to MSF</h1>

            <form action='login.php' method='post' autocomplete="off">

              <input type="text" name="username" placeholder="username">

              <input type="password" name="password" placeholder="password" autocomplete="off">

              <input type="submit" value="log in">

            </form>

          </div>          

        <?php }?>
      <?php }?>
      </br></br></br></br>
      <div align=left>
        <font size=4 color=#ff00ff>
          <b> </b> 
        </font>
        </br></br></br></br>
        You have no login and you want one ? </br> 
        You may ask one at the support, but please provide some details about you, your Company, the transcription usage ...</br>
        <font size=3 color=#ff0000>
          If you need support email us at : "support at mediaspeech dot com"</br>
        </font>
      </div>
      </br></br></br>
      </br>
      (c)2017 Vecsys
      </body>
      </html>
<?php }
}

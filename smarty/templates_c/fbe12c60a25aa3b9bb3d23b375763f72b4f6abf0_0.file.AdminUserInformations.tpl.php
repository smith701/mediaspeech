<?php
/* Smarty version 3.1.30, created on 2019-01-17 14:26:05
  from "/home/MSF/www/smarty/templates/AdminUserInformations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c40826dab1244_14447532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe12c60a25aa3b9bb3d23b375763f72b4f6abf0' => 
    array (
      0 => '/home/MSF/www/smarty/templates/AdminUserInformations.tpl',
      1 => 1497857244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:ProcessingInfoPbs.tpl' => 1,
    'file:ProcessingInfoSlurm.tpl' => 1,
    'file:ProcessingInfoActiveMQ.tpl' => 1,
  ),
),false)) {
function content_5c40826dab1244_14447532 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home/MSF/www/SmartyEngine/plugins/function.html_options.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['web_pages_title']->value;?>
</title>

    <!-- link rel="stylesheet" href="css/bootstrap.min.css"-->
    <!-- link rel="stylesheet" type="text/css" href="./css/tableau.css"-->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/screen.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/stylesheetform.css" />
    
    <?php echo '<script'; ?>
 src="./scripts/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./scripts/jquery.validate.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./scripts/additional-methods.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./scripts/jquery.mockjax.js"><?php echo '</script'; ?>
>

    

      <style type="text/css">
        form.cmxform { width: 50em; }
        em.error {
          background:url("./images/unchecked.gif") no-repeat 0px 0px;
          padding-left: 16px;
        }
        em.success {
          background:url("./images/checked.gif") no-repeat 0px 0px;
          padding-left: 16px;
        }

        form.cmxform label.error {
          margin-left: auto;
          width: 250px;
        }
        em.error { color: black; }
        #warning { display: none; }
      </style>
    
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, ((string)$_SESSION['lang']).".txt", null, 0);
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/datetimepicker_css.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/md5.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
      $().ready(function() {
        var validator = $("#userform").bind("invalid-form.validate", function() {
          $("#summary").html("Your form contains " + validator.numberOfInvalids() + " errors, see details below.");
        }).validate({
          debug: true,
          errorElement: "em",
          //errorContainer: $("#warning, #summary"),
          errorPlacement: function(error, element) {
            error.appendTo( element.parent("td").next("td") );
          },
          submitHandler: function(form) {
            $("div.error").hide();
            form.submit();
          },              
          success: function(label) {
            label.text("ok!").addClass("success");
          },
          rules: {
            username: {
              required:true,
              minlength:3,
              maxlength:15	
            },
            FirstName: {
              required:true,
              minlength:3,
              maxlength:15	
            },
            LastName: {
              required:true,
              minlength:3,
              maxlength:15	
            },
            CompanyName: {
              required:true,
              minlength:3,
              maxlength:30	
            },
            EmailAddress:{
              required:true,
              email:true
            },
            PhoneNumber:{
              required:true
            },
            ProcessPriority:{
              required:true,
              number:true
            },
            password: {
 
           <?php if ($_smarty_tpl->tpl_vars['CreatePwd']->value == true) {?>
              required: true,
              minlength: 6,
           <?php } else { ?>
              required: false
           <?php }?>
            }
             <?php if ($_smarty_tpl->tpl_vars['CRYPT_PASSWORD']->value == true) {?>
            ,confirm_password: {

           <?php if ($_smarty_tpl->tpl_vars['CreatePwd']->value == true) {?>
              required: true,
              minlength: 6,
 
              equalTo: "#password"
 
           <?php } else { ?>
              required: false
           <?php }?>

            }
              <?php }?>
 
          },
          messages: {
              password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
              }
 
             <?php if ($_smarty_tpl->tpl_vars['CRYPT_PASSWORD']->value == true) {?>
 
              ,
              confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long",
                equalTo: "Please enter the same password as above"
              }
              
 
              <?php }?>
 
          }
        });

      });
    <?php echo '</script'; ?>
>
 

    </br>
<font size=4 color=#0000ff>
<b><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</b>
</font>    
    
  <center>
    <form class="cmxform" id="userform" method="get" action="">
      <INPUT TYPE=hidden NAME="IdUser" VALUE="<?php echo $_smarty_tpl->tpl_vars['IdUser']->value;?>
">
      <input type="hidden" name="function" value="Add">
      <h2 id="summary"></h2>
      <fieldset>
        <legend>User's administration</legend>
         <div class="buttonSubmit">
            <span></span>
            <input class="formButton"  type="submit" value="<?php echo $_smarty_tpl->tpl_vars['ActionButton']->value;?>
" style="width: 140px" />
          </div>

            <table>
              <tr>
                <td colspan="2">
                  <h2 style="border-bottom: 1px solid #CCCCCC;">Login Information</h2>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="username">Login</label>
                </td> 
                <td>
                  <input id="username" name="username" type="text" title="Please enter a login name at least 3 and max 15 characters!" required  value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
                </td> 
                <td></td>
              </tr>
              <tr>
                <td>
                <label for="password">Password</label>
                </td> 
                <td>
                   <input name="password" type="<?php echo $_smarty_tpl->tpl_vars['PasswordType']->value;?>
" id="password" minlength="6" style="width:200px;" required value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
">
                </td>
                <td></td>
              </tr>
             <?php if ($_smarty_tpl->tpl_vars['CRYPT_PASSWORD']->value == true) {?>
                
              <tr>
                <td>
                <label for="confirm_password">Confirm Password</label>
                </td> 
                <td>
                  <input name="confirm_password" type="password" id="confirm_password" minlength="6" style="width:200px;" value="" required value="">
                </td>
                <td></td>
              </tr>
               <?php }?>
              <tr>
                <td colspan="2">
                  <h2 style="border-bottom: 1px solid #CCCCCC;">User Information</h2>
                </td>
              </tr>
              <tr>
                <td><label for="info_emailaddress">Email</label></td> 
                <td>
                  <input name="info_emailaddress" type="text" id="info_emailaddress" style="width:250px;" value="<?php echo $_smarty_tpl->tpl_vars['EmailAddress']->value;?>
" required>
                </td>
                <td></td>
              </tr>
              <tr>
                <td><label for="info_lastname">Name</label></td>
                <td><input id="info_lastname" type="text" name="info_lastname" value="<?php echo $_smarty_tpl->tpl_vars['LastName']->value;?>
" required title="Please enter name at least 3 and max 15 characters!"></td>
                <td></td>
              </tr>
              <tr>
                <td><label for="info_firstname">First Name</label></td>
                <td><input id="info_firstname" type="text" name="info_firstname" value="<?php echo $_smarty_tpl->tpl_vars['FirstName']->value;?>
" required title="Please enter firstname at least 3 and max 15 characters!"></td>
                <td></td>
              </tr>
              <tr>
                <td><label for="info_companyname">Company</label></td>
                <td><input type="text" id="info_companyname" name="info_companyname" value="<?php echo $_smarty_tpl->tpl_vars['CompanyName']->value;?>
"  required title="Please enter Company name at least 3 and max 15 characters!"></td>
                <td></td>
              </tr>
              <tr>
                <td><label for="info_phonenumber">Phone</label></td>
                <td><input type="text" id="info_phonenumber" name="info_phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['PhoneNumber']->value;?>
" required title="Please enter valid phone number"></td>
                <td></td>
              </tr>
              <tr>
                <td>Country</td>
                <td>
                  <select name="info_country" >
                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['CountryIds']->value,'output'=>$_smarty_tpl->tpl_vars['Country']->value,'selected'=>$_smarty_tpl->tpl_vars['CountrySelected']->value),$_smarty_tpl);?>

                  </select>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>Max date of use</td> 
                <td>
                  <input id="datepicker" name="quota_maxdate" type="text" size="25" onclick="NewCssCal('datepicker', 'yyyymmdd');" value=<?php echo $_smarty_tpl->tpl_vars['MaxDate']->value;?>
>
                    <a href="javascript:NewCssCal('datepicker','yyyymmdd')">
                      <img src="images/cal.gif" width="16" height="16"></a> 
                </td>
                <td></td>
              </tr>
              <tr>
                <td>Role</td> 
                <td>
                  <select name="info_role">
                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['RoleId']->value,'output'=>$_smarty_tpl->tpl_vars['RoleName']->value,'selected'=>$_smarty_tpl->tpl_vars['RoleSelected']->value),$_smarty_tpl);?>

                  </select>
                </td>
                <td></td>
              </tr>
<?php if ($_smarty_tpl->tpl_vars['Sched']->value == 0) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:ProcessingInfoPbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['Sched']->value == 1) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:ProcessingInfoSlurm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['Sched']->value == 3) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:ProcessingInfoActiveMQ.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
              <tr>
                <td>Processing Script</td>
                <td>
                  <select name="quota_scriptname" >
                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ScriptNameId']->value,'output'=>$_smarty_tpl->tpl_vars['ScriptName']->value,'selected'=>$_smarty_tpl->tpl_vars['ScriptNameSelected']->value),$_smarty_tpl);?>

                  </select>
                </td>
                <td></td>
              </tr>
<?php if ($_smarty_tpl->tpl_vars['Sched']->value == 1) {?>
              <tr>
                <td>Priority</td>
                <td>
                  <select name="sched_priority" >
                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['SlurmPriorityId']->value,'output'=>$_smarty_tpl->tpl_vars['SlurmPriority']->value,'selected'=>$_smarty_tpl->tpl_vars['SlurmPrioritySelected']->value),$_smarty_tpl);?>

                  </select>
                </td>
                <td></td>
              </tr>
<?php }?>

        </table>
    </br>

	</fieldset>
  </br>
  <input name="SendEmail" type="checkbox">Send the new user it's account informations</br>
    <TEXTAREA name="EmailText" COLS=80 ROWS=15 style="width:800px">
Dear Sir or Madam,
Please find hereafter a login and a password allowing you to test our SaaS system for automatic speech transcription.
 
URL: https://mediaspeech.com/login.php
Login:%s
Password:%s 

To start a transcription go to  : https://mediaspeech.com/StartTranscription.php
Select :
   BN for Broadcast News audio files 
   CTS for Telephonic conversation audio files
   CCS for call center speach

To view your results go to : https://mediaspeech.com/StatusAndResults.php

A documentation about the webservice interface can be downloaded at https://mediaspeech.com/Home.php
 
If you encounter any issue while using this system, do not hesitate to contact us at : 
   support@mediaspeech.com.
 
Best regards,	
The MediaSpeech Team	
	
	</TEXTAREA>

</form>

</body>
</html>

<?php }
}

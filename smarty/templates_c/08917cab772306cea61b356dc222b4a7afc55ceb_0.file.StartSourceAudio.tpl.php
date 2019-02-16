<?php
/* Smarty version 3.1.30, created on 2019-01-17 14:31:36
  from "/home/MSF/www/smarty/templates/StartSourceAudio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4083b8a83a27_64389543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08917cab772306cea61b356dc222b4a7afc55ceb' => 
    array (
      0 => '/home/MSF/www/smarty/templates/StartSourceAudio.tpl',
      1 => 1473770940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:UploadFile.tpl' => 1,
  ),
),false)) {
function content_5c4083b8a83a27_64389543 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home/MSF/www/SmartyEngine/plugins/function.html_options.php';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, ((string)$_SESSION['lang']).".txt", null, 0);
?>




  <SCRIPT LANGUAGE="JavaScript">
    $(document).ready(function() {
      $('#CorpusCheck').click('change',function(){
        if($('#CorpusCheck:checked').length) {
                  $("#ModelsName").show();
              } else {
                  $("#ModelsName").hide();
              }
      });
	$(".trigger").click(function(){
		$(".panel").toggle("fast");
		$(this).toggleClass("active");
		return false;
	});
      
    });

    function ShowHideFieldsFile(mySel)
    {
      switch (mySel)
      {
        case 'upload':
          {
            document.getElementById("file_upload").style.display = "inline";
            document.getElementById("file_url").style.display = "none";
            document.getElementById("file_msf").style.display = "none";
            break;
          }
        case 'url':
          {
            document.getElementById("file_upload").style.display = "none";
            document.getElementById("file_url").style.display = "inline";
            document.getElementById("file_msf").style.display = "none";
            break;
          }
        case 'msf':
          {
            document.getElementById("file_upload").style.display = "none";
            document.getElementById("file_url").style.display = "none";
            document.getElementById("file_msf").style.display = "inline";
            break;
          }

      }
    }
   function ChangeLanguage(mySel)
    {
        xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", "./scripts/jQmemo.php?DefaultLanguage="+mySel, false );
        xmlHttp.send( null );
    }
   function ShowHideFields(mySel)
    {
        switch (mySel)
        {
            case 'ccs':
            {
              $('#LangBN').hide();
              $('#LangLCS').hide();
              $('#LangCTS').hide();
              $('#LangCCS').show();
              lang=$( "#LangCCS option:selected" ).val();
               break;
            }
            case 'cts':
            {
              $('#LangBN').hide();
              $('#LangLCS').hide();
              $('#LangCCS').hide();
              $('#LangCTS').show();
              lang=$( "#LangCTS option:selected" ).val();
               break;
            }
            case 'bn' : 
            {
              $('#LangCTS').hide();
              $('#LangLCS').hide();
              $('#LangCCS').hide();
              $('#LangBN').show();
              lang=$( "#LangBN option:selected" ).val();
               break;
            }
            case 'lcs' : 
            {
              $('#LangCTS').hide();
              $('#LangBN').hide();
              $('#LangCCS').hide();
              $('#LangLCS').show();
              lang=$( "#LangLCS option:selected" ).val();
               break;
            }
       }
        xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", "./scripts/jQmemo.php?DefaultAudioType="+mySel+"&DefaultLanguage="+lang, false );
        xmlHttp.send( null );
    }   
  <?php echo '</script'; ?>
>


<td Id="cadre" style="border-left:1px solid #fff; border-top:1px solid #fff; border-right:1px solid #999; border-bottom:1px solid #999;">

    <table>
      <tr>
        <td>
          <b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SelectAudio');?>
</b>
        </td>
        <td>
            <select name="type"  onChange="ShowHideFields(this.value);" >
              <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['TypeIds']->value,'output'=>$_smarty_tpl->tpl_vars['Type']->value,'selected'=>$_smarty_tpl->tpl_vars['TypeSelected']->value),$_smarty_tpl);?>

            </select>
        </td>
      </tr>
<?php if ($_smarty_tpl->tpl_vars['Transcription']->value == "trans") {?>
    <tr>
      <td>
          <b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Language');?>
</b>
      </td>
      <td>
        <select name="languageBN" id="LangBN" style="width:150px;display:<?php echo $_smarty_tpl->tpl_vars['ShowBN']->value;?>
" onChange="ChangeLanguage(this.value);">
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['LanguageBNIds']->value,'output'=>$_smarty_tpl->tpl_vars['LanguageBN']->value,'selected'=>$_smarty_tpl->tpl_vars['LanguageSelectedBN']->value),$_smarty_tpl);?>

        </select>
        <select name="languageCTS" id="LangCTS" style="width:150px;display:<?php echo $_smarty_tpl->tpl_vars['ShowCTS']->value;?>
"  onChange="ChangeLanguage(this.value);">
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['LanguageCTSIds']->value,'output'=>$_smarty_tpl->tpl_vars['LanguageCTS']->value,'selected'=>$_smarty_tpl->tpl_vars['LanguageSelectedCTS']->value),$_smarty_tpl);?>

        </select>
        <select name="languageCCS" id="LangCCS" style="width:150px;display:<?php echo $_smarty_tpl->tpl_vars['ShowCCS']->value;?>
"  onChange="ChangeLanguage(this.value);">
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['LanguageCCSIds']->value,'output'=>$_smarty_tpl->tpl_vars['LanguageCCS']->value,'selected'=>$_smarty_tpl->tpl_vars['LanguageSelectedCCS']->value),$_smarty_tpl);?>

        </select>
        <select name="languageLCS" id="LangLCS" style="width:150px;display:<?php echo $_smarty_tpl->tpl_vars['ShowLCS']->value;?>
"  onChange="ChangeLanguage(this.value);">
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['LanguageLCSIds']->value,'output'=>$_smarty_tpl->tpl_vars['LanguageLCS']->value,'selected'=>$_smarty_tpl->tpl_vars['LanguageSelectedLCS']->value),$_smarty_tpl);?>

        </select>
      </td>
    </tr>
    <tr>
      <td>
          <b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TransQuality');?>
 </b>
      </td>
      <td>
          <select name="TransQuality" style="width:150px">
            <option VALUE="0" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TransQuality1Pass');?>
</option>
            <option VALUE="1" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TransQualityMedium');?>
</option>
            <option VALUE="2" selected><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TransQuality2Pass');?>
</option>
          </select>
     </td>
    </tr>
    <tr>
      <td>
        <b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ModelName');?>
</b>
      </td>
      <td>
        <select name="ModelsName" id="ModelsName" style="display: block">
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ModelsNames']->value,'output'=>$_smarty_tpl->tpl_vars['ModelsNames']->value,'selected'=>$_smarty_tpl->tpl_vars['ModelSelected']->value),$_smarty_tpl);?>

        </select>
      </td>
    </tr>
<?php }?>           
    </table>


       <div style=" text-align:left">
       <b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'AudioFileSource');?>
</b></br>
      <fieldset style="border-left:1px solid #fff; border-top:1px solid #fff; border-right:1px solid #999; border-bottom:1px solid #999;font-size:80%;">
        <input type="radio" name="FileSource" value="upload"  onClick="ShowHideFieldsFile(this.value);" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CHOICE_UploadFile');?>
</br>
        <input type="radio" name="FileSource" value="url"   onClick="ShowHideFieldsFile(this.value);" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CHOICE_Ftp');?>
</br>
        <input type="radio" name="FileSource" value="msf"   onClick="ShowHideFieldsFile(this.value);" checked><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CHOICE_SelectMsf');?>
</br>
      </fieldset>   
       </div>
      </br>
      </br>

      <div Id="file_upload"  style="display: none">   
        <b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'MSG_Upload2');?>
</b>
        &nbsp;
        <?php $_smarty_tpl->_subTemplateRender("file:UploadFile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        File uploaded : 
        <input type="text" id="UploadedFileName" name="UploadedFileName" size="50" value="<?php echo $_smarty_tpl->tpl_vars['UploadedFileName']->value;?>
" readonly>

      </div>

      <div Id="file_url"  style="display: none">   
        <b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'MSG_ChooseWebServer');?>
 </b><br>Syntax : http://login:pwd@ip/path.to/file OR ftp://login:pwd@ip/path.to/file 
        </br>
        <input type="text" name="UrlFilename" size="70">
        </br>
      </div>

      <div Id="file_msf"  >   
          <select id="selectaudio" multiple="multiple" name="FilenameList[]" size="10" style="width:500px">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['AudioListe']->value,'output'=>$_smarty_tpl->tpl_vars['AudioListe']->value),$_smarty_tpl);?>

          </select>
          </br>                 
          </br>                 
          <a href="?RescanDirectory=1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FTP_Uploaded');?>
</a>
          
      </div>
</div>
</td>
<?php }
}

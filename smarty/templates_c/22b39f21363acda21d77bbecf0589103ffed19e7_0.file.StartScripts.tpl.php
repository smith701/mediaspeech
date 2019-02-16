<?php
/* Smarty version 3.1.30, created on 2019-01-17 14:31:36
  from "/home/MSF/www/smarty/templates/StartScripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4083b8a63be6_54670310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22b39f21363acda21d77bbecf0589103ffed19e7' => 
    array (
      0 => '/home/MSF/www/smarty/templates/StartScripts.tpl',
      1 => 1473770940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4083b8a63be6_54670310 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php echo '<script'; ?>
 type="text/javascript">
    function selectAllAudio(x) 
    {
        document.formulaire.sAll.checked != document.formulaire.sAll.checked
        for(var i=0,l=x.form.length; i<l; i++)
        {
              if (x.form[i].name == 'FilenameList[]')
                x.form[i].checked=document.formulaire.sAll.checked
        }
    }
    
    function ShowOptionsFields(form)
    {
        switch (document.getElementById("ShowOptions").checked)
        {
            case true: 
            {
               document.getElementById("cadreoptions").style.display = "inline";
               break;
            }
            case false : 
            {
               document.getElementById("cadreoptions").style.display = "none";
               break;
            }
       }
    }   

 
<?php echo '</script'; ?>
>

<?php }
}

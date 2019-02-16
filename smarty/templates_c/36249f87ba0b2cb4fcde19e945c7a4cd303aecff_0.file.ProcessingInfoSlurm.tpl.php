<?php
/* Smarty version 3.1.30, created on 2019-01-17 14:26:05
  from "/home/MSF/www/smarty/templates/ProcessingInfoSlurm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c40826dabbdf7_31289666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36249f87ba0b2cb4fcde19e945c7a4cd303aecff' => 
    array (
      0 => '/home/MSF/www/smarty/templates/ProcessingInfoSlurm.tpl',
      1 => 1473770939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40826dabbdf7_31289666 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <tr>
    <td colspan="2">
      <h2 style="border-bottom: 1px solid #CCCCCC;">Processing Information (Slurm)</h2>
    </td>
  </tr>
  <tr>
    <td>User's FairShare
    </td> 
    <td  style="width:400px">
      <input name="quota_processpriority" type="text" id="nom" style="width:50px;" value="<?php echo $_smarty_tpl->tpl_vars['ProcessPriority']->value;?>
" >
      (0 -> 10000, default 1000)
    </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Max running jobs
    </td>
    <td>
      <input type="text" name="sched_queueprocesslimit" value="<?php echo $_smarty_tpl->tpl_vars['sched_queueprocesslimit']->value;?>
" style="width:50px;" SIZE=3 MAXLENGTH=3> 
    </td>
    <td></td>
  </tr>
  <tr>
    <td>
      Number of cores per job
    </td>
    <td>
      <input type="text" name="quota_maxthread" value="<?php echo $_smarty_tpl->tpl_vars['ProcessMaxThread']->value;?>
" style="width:50px;" SIZE=3 MAXLENGTH=3>
    <td></td>
  </td>
  </tr>
<?php }
}

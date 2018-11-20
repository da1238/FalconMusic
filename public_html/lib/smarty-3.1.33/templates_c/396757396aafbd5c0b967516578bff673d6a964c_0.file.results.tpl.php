<?php
/* Smarty version 3.1.33, created on 2018-10-09 10:57:21
  from 'C:\@CloudDrives\Dropbox\@Messiah\@courses\cis291\291WebExamples\Smarty Example #2\public_html\templates\results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbcc1d17eb559_48745224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '396757396aafbd5c0b967516578bff673d6a964c' => 
    array (
      0 => 'C:\\@CloudDrives\\Dropbox\\@Messiah\\@courses\\cis291\\291WebExamples\\Smarty Example #2\\public_html\\templates\\results.tpl',
      1 => 1539092940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbcc1d17eb559_48745224 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
    <div class="row">
        <div class="col-2"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
:</div>
        <div class="col-10"><?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
</div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

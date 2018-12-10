<?php
/* Smarty version 3.1.33, created on 2018-11-21 22:42:17
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/helpers/tree/tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf633a9600120_87724802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e8991a6ac31a0a2a4a9f2db56755b0b5d992de' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1541561062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf633a9600120_87724802 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}

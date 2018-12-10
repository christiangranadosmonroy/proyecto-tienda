<?php
/* Smarty version 3.1.33, created on 2018-11-21 23:09:16
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/controllers/cart_rules/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf639fcab3af2_65035431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '097bd896a9eaef47c8c70148704e4fee0c4d7463' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/controllers/cart_rules/helpers/list/list_header.tpl',
      1 => 1541561062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf639fcab3af2_65035431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21203898185bf639fca9f997_93701994', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_21203898185bf639fca9f997_93701994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_21203898185bf639fca9f997_93701994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$('#voucher', window.parent.document).val('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['new_cart_rule']->value->code,'html','UTF-8' ));?>
');
		parent.add_cart_rule(<?php echo intval($_smarty_tpl->tpl_vars['new_cart_rule']->value->id);?>
);
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}

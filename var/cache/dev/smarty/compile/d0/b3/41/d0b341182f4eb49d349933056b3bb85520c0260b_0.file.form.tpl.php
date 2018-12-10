<?php
/* Smarty version 3.1.33, created on 2018-11-28 17:26:10
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/controllers/attributes_groups/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bff2412d46b52_03601371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b341182f4eb49d349933056b3bb85520c0260b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/controllers/attributes_groups/helpers/form/form.tpl',
      1 => 1541561062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bff2412d46b52_03601371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5632330005bff2412d37e46_68875509', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_5632330005bff2412d37e46_68875509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_5632330005bff2412d37e46_68875509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'public_name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAttributeGroupForm",'id_attribute_group'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}

<?php
/* Smarty version 3.1.33, created on 2018-11-21 22:42:17
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf633a96d4e52_94014811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfdcc80983105caca4529a286eb5f0e58d426fda' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1541561062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf633a96d4e52_94014811 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}

<?php
/* Smarty version 3.1.33, created on 2018-11-18 01:57:56
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf0b9149128e9_06165031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b723ade4351a402b2485e43b4bdc0182d58439d9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/content.tpl',
      1 => 1541561062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf0b9149128e9_06165031 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}

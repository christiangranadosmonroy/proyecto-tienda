<?php
/* Smarty version 3.1.33, created on 2018-11-28 17:17:32
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/controllers/slip/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bff220c22d478_88032555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4331b73f6a6320ca094800a3cda1e70a6ee9320' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda/admin041te4fcd/themes/default/template/controllers/slip/helpers/form/form.tpl',
      1 => 1541561062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bff220c22d478_88032555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9164708425bff220c22a3f4_61995502', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_9164708425bff220c22a3f4_61995502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9164708425bff220c22a3f4_61995502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	$(document).ready(function() {
		var btn_save_date = $('span[class~="process-icon-save-date"]').parent();
		var btn_submit_date = $('#submitPrint');

		if (btn_save_date.length > 0 && btn_submit_date.length > 0)
		{
			btn_submit_date.hide();
			btn_save_date.find('span').removeClass('process-icon-save-date');
			btn_save_date.find('span').addClass('process-icon-save-calendar');
			btn_save_date.click(function() {
				btn_submit_date.before('<input type="hidden" name="'+btn_submit_date.attr("name")+'" value="1" />');

				$('#order_slip_form').submit();
			});
		}
	});

<?php
}
}
/* {/block 'script'} */
}

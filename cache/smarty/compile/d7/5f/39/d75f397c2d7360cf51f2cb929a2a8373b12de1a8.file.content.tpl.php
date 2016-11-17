<?php /* Smarty version Smarty-3.1.19, created on 2016-11-16 20:34:34
         compiled from "/var/www/vhosts/minemania.eu/public_html/admin406qai46j/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:710724386582cb4cabebd29-70642964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd75f397c2d7360cf51f2cb929a2a8373b12de1a8' => 
    array (
      0 => '/var/www/vhosts/minemania.eu/public_html/admin406qai46j/themes/default/template/content.tpl',
      1 => 1473167112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '710724386582cb4cabebd29-70642964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582cb4cabf2e87_25003773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cb4cabf2e87_25003773')) {function content_582cb4cabf2e87_25003773($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>

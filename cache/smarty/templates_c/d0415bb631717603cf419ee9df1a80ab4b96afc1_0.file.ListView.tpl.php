<?php
/* Smarty version 4.5.3, created on 2025-02-24 12:42:50
  from 'C:\xampp\htdocs\SuiteCRM-7.14.6\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67bc5b3a1b7f09_59368626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0415bb631717603cf419ee9df1a80ab4b96afc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-7.14.6\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1738595879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bc5b3a1b7f09_59368626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-7.14.6\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}

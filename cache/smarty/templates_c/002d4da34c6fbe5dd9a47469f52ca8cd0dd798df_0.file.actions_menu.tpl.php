<?php
/* Smarty version 4.5.3, created on 2025-02-24 12:42:50
  from 'C:\xampp\htdocs\SuiteCRM-7.14.6\themes\SuiteP\include\MySugar\tpls\actions_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67bc5b3a36cfa0_15145487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '002d4da34c6fbe5dd9a47469f52ca8cd0dd798df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-7.14.6\\themes\\SuiteP\\include\\MySugar\\tpls\\actions_menu.tpl',
      1 => 1738595976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bc5b3a36cfa0_15145487 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="dropdown-menu tab-actions">
    <?php if (!$_smarty_tpl->tpl_vars['lock_homepage']->value) {?>

        <li>
            <input class="button addDashlets" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashlet" value="<?php echo $_smarty_tpl->tpl_vars['lblAddDashlets']->value;?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashboard" value="<?php echo $_smarty_tpl->tpl_vars['lblAddTab']->value;?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-edit-dashboard" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_EDIT_TAB'];?>
">
        </li>
    <?php }?>
</ul>
<?php }
}

<?php
/* Smarty version 4.5.3, created on 2025-02-24 12:42:49
  from 'C:\xampp\htdocs\SuiteCRM-7.14.6\themes\SuiteP\include\ListView\ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67bc5b39786048_28857700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de68193279940a3dd56d0dc9cc8fd9bcc403620b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-7.14.6\\themes\\SuiteP\\include\\ListView\\ListViewSelectObjects.tpl',
      1 => 1738595983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bc5b39786048_28857700 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}

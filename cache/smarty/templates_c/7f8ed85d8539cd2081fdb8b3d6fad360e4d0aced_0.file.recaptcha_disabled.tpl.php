<?php
/* Smarty version 4.5.3, created on 2025-02-24 12:42:35
  from 'C:\xampp\htdocs\SuiteCRM-7.14.6\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67bc5b2bca8f49_37613917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f8ed85d8539cd2081fdb8b3d6fad360e4d0aced' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-7.14.6\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1738595550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bc5b2bca8f49_37613917 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}

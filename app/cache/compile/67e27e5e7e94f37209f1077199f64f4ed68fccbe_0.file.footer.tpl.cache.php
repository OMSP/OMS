<?php
/* Smarty version 3.1.32, created on 2018-07-31 02:10:12
  from 'C:\xampp\htdocs\assets\themes\default\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5fa8e45b42a5_65498946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67e27e5e7e94f37209f1077199f64f4ed68fccbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\assets\\themes\\default\\footer.tpl',
      1 => 1532995805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5fa8e45b42a5_65498946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18472792685b5fa8e459e3e3_74134476';
?>
<!-- Javascript -->
<footer>
<div class="footerOMS">
  <div class="container">
    <span class="text-muted">&copy; <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['credityn']->value == 'true') {?>
    | Powered by <a href="<?php echo $_smarty_tpl->tpl_vars['crediturl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['credit']->value;?>
</a><?php }?>
  </div>
</div>
</footer>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
/assets/themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/theme.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
/assets/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}

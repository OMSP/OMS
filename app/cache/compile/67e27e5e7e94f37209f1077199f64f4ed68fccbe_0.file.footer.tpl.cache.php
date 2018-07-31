<?php
/* Smarty version 3.1.32, created on 2018-07-31 19:24:14
  from 'C:\xampp\htdocs\assets\themes\default\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b609b3ecb6429_46565215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67e27e5e7e94f37209f1077199f64f4ed68fccbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\assets\\themes\\default\\footer.tpl',
      1 => 1533057737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b609b3ecb6429_46565215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13242205635b609b3eb57769_51115424';
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

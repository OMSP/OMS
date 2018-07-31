<?php
/* Smarty version 3.1.32, created on 2018-07-31 19:24:17
  from 'C:\xampp\htdocs\app\view\other-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b609b419ee1c6_06017770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893941a647c0192b69f9c6de5ed8b06ca93ed1d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app\\view\\other-page.tpl',
      1 => 1533057737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b609b419ee1c6_06017770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12865837145b609b4194ebd5_46555325';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Generated content</h1>
        <?php echo $_smarty_tpl->tpl_vars['pageContent']->value;?>

        <p>Cached with smarty to simulate loading content from a database just once.</p>
    </div>

</main><!-- /.container -->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

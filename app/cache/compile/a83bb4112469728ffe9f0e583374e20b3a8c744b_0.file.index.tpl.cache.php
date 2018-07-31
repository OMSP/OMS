<?php
/* Smarty version 3.1.32, created on 2018-07-31 19:32:51
  from 'C:\xampp\htdocs\app\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b609d43cde8b5_98788233',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    'a83bb4112469728ffe9f0e583374e20b3a8c744b' =>
    array (
      0 => 'C:\\xampp\\htdocs\\app\\view\\index.tpl',
      1 => 1533058369,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b609d43cde8b5_98788233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11736148965b609d43c9b0c1_23721238';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

</main><!-- /.container -->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.32, created on 2018-07-31 15:49:47
  from 'C:\xampp\htdocs\app\view\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6068fb8ca438_87459011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceab98c12473ae207c924c15ec00c12a15f18882' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app\\view\\error.tpl',
      1 => 1533044982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b6068fb8ca438_87459011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19000198755b6068facd48f6_28555703';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

$service->smarty->assign("pageTitle", "Error");

<main role="main" class="container">

    <div class="starter-template">
        <h1>ERROR 404</h1>
        <p class="lead">Oh no.<br> Something went completely wrong!</p>
    </div>

</main><!-- /.container -->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

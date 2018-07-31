<?php
/* Smarty version 3.1.32, created on 2018-07-31 02:17:11
  from 'C:\xampp\htdocs\assets\themes\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5faa87184018_26168825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a288bd3973551242e9f30f590808b766c39156d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\assets\\themes\\default\\header.tpl',
      1 => 1532996218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5faa87184018_26168825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '476476525b5faa87157730_28976380';
?>
<!-- Default -->

<!doctype html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
    <link href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" rel="shortcut icon" type="image/png">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageTitle']->value)===null||$tmp==='' ? "Untitled Page" : $tmp);?>
</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link href="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
/assets/themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/theme.css" rel="stylesheet">
</head>

<body>
<!-- Navigation bar, you can add or remove items, but be aware that you might break our code -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
/other-page">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search - Does nothing" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<!-- This is some theme specific HTML, it is suggested to keep this so the navbar does not hit the content -->
<br>
<?php }
}

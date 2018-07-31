<?php
/* Smarty version 3.1.32, created on 2018-07-31 15:49:47
  from 'C:\xampp\htdocs\app\view\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6068fb998f07_02808176',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    'ceab98c12473ae207c924c15ec00c12a15f18882' =>
    array (
      0 => 'C:\\xampp\\htdocs\\app\\view\\error.tpl',
      1 => 1533044982,
      2 => 'file',
    ),
    'a288bd3973551242e9f30f590808b766c39156d9' =>
    array (
      0 => 'C:\\xampp\\htdocs\\assets\\themes\\default\\header.tpl',
      1 => 1532996218,
      2 => 'file',
    ),
    '67e27e5e7e94f37209f1077199f64f4ed68fccbe' =>
    array (
      0 => 'C:\\xampp\\htdocs\\assets\\themes\\default\\footer.tpl',
      1 => 1532995805,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5b6068fb998f07_02808176 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Default -->

<!doctype html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="OMS">
    <meta name="description" content="Your website description here">
    <link href="https://cdn.energysys.com/wp-content/uploads/2012/03/Energysys_avatar-logo-transparent-bg.png" rel="shortcut icon" type="image/png">
    <title>My Website - Untitled Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link href="http://localhost/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/assets/themes/default/css/theme.css" rel="stylesheet">
</head>

<body>
<!-- Navigation bar, you can add or remove items, but be aware that you might break our code -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">My Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/other-page">Link</a>
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

$service->smarty->assign("pageTitle", "Error");

<main role="main" class="container">

    <div class="starter-template">
        <h1>ERROR 404</h1>
        <p class="lead">Oh no.<br> Something went completely wrong!</p>
    </div>

</main><!-- /.container -->

<!-- Javascript -->
<footer>
<div class="footerOMS">
  <div class="container">
    <span class="text-muted">&copy; My Website 2018     | Powered by <a href="https://omsp.org">OMSP</a>  </div>
</div>
</footer>
<script src="http://localhost/assets/js/jquery.min.js"></script>
<script src="http://localhost/assets/themes/default/js/theme.js"></script>
<script src="http://localhost/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php }
}

<?php
$dbhost = '';
$dbuser = '';
$dbpass = '';
$dbdb   = '';
if (!isset($_POST['step'])) {

} elseif (isset($_POST['step'])) {
  $step = $_POST['step'];
  if ($step == '1') {

  } elseif ($step == '2') {
    if (!isset($_POST['host']) || !isset($_POST['user']) || !isset($_POST['pass']) || !isset($_POST['db'])) {
      echo $step1;
    } else {
      $dbhost = $_POST['host'];
      $dbuser = $_POST['user'];
      $dbpass = $_POST['pass'];
      $dbdb   = $_POST['db'];
    }

  } elseif ($step == '3') {
    if (!isset($_POST['host']) || !isset($_POST['user']) || !isset($_POST['pass']) || !isset($_POST['db'])) {
      echo $step1;
    } else {
      $dbhost = $_POST['host'];
      $dbuser = $_POST['user'];
      $dbpass = $_POST['pass'];
      $dbdb   = $_POST['db'];
    }

  } elseif ($step == '4') {
    if (!isset($_POST['host']) || !isset($_POST['user']) || !isset($_POST['pass']) || !isset($_POST['db'])) {
      echo $step1;
    } else {
      $dbhost = $_POST['host'];
      $dbuser = $_POST['user'];
      $dbpass = $_POST['pass'];
      $dbdb   = $_POST['db'];
    }

  } else {

  }
} else {

}

//STEP 1: DATABASE

  $step1 = '
  <!DOCTYPE html>
  <html>
    <head>
      <title>OMSP OpenCMS Setup</title>
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="/assets/css/setup.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.bundle.min.js"></script>
      <script src="/assets/js/setup.js"></script>
    </head>
    <body>
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-3">
            <div class="item active">Database</div>
            <div class="item">Personalization</div>
            <div class="item">Configuration</div>
          </div>
          <div class="col-sm-9">
            <div class="form">
              <strong><h2>Let\'s setup your database</h2></strong><br><br>
              <form method="POST">
                <input type="text" name="step" value="2" hidden>
                <div class="from-group">
                  <input type="text" class="form-control" name="host" placeholder="Hostname" required><br>
                </div>
                <div class="from-group">
                  <input type="text" class="form-control" name="user" placeholder="Username" required><br>
                </div>
                <div class="from-group">
                  <input type="password" class="form-control" name="pass" placeholder="Password"><br>
                </div>
                <div class="from-group">
                  <input type="text" class="form-control" name="db" placeholder="Database Name" required><br>
                </div>
                <input type="submit" class="btn btn-primary" value="Next step">
              </form>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>
  ';

//STEP 2: PERSONALIZATION

  $step2 = '
  <!DOCTYPE html>
  <html>
    <head>
      <title>OMSP OpenCMS Setup</title>
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="/assets/css/setup.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.bundle.min.js"></script>
      <script src="/assets/js/setup.js"></script>
    </head>
    <body>
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-3">
            <div class="item">Setup database</div>
            <div class="item active">Personalization</div>
            <div class="item">Configuration</div>
          </div>
          <div class="col-sm-9">
            <div class="form">
              <strong><h2>Personalization</h2></strong><br><br>
              <form method="POST">
                <input type="text" name="step" value="3" hidden>
                <input type="text" name="host" value="'.$dbhost.'" hidden>
                <input type="text" name="user" value="'.$dbuser.'" hidden>
                <input type="password" name="pass" value="'.$dbpass.'" hidden>
                <input type="text" name="db" value="'.$dbdb.'" hidden>
                <div class="from-group">
                  <p style="font-size: 13px;" align="left" for="name"><b>Website name</b></p>
                  <input id="name" type="text" class="form-control" name="site_name" placeholder="example: OMS" required><br><br>
                </div>
                <div class="from-group">
                  <textarea class="form-control" name="site_desc" placeholder="What is this website about"></textarea><br><br>
                </div>
                <div class="from-group">
                  <input type="text" class="form-control" name="site_author" placeholder="Site author, example: \' John Doe \'" required><br><br>
                </div>
                <div class="from-group">
                  <input type="text" class="form-control" name="db" placeholder="Database Name" required><br><br>
                </div>
                <input type="submit" class="btn btn-primary" value="Next step">
              </form>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>
  ';

// STEP 3: CONFIGURATION

  $step3 = '
  <!DOCTYPE html>
  <html>
    <head>
      <title>OMSP OpenCMS Setup</title>
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="/assets/css/setup.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.bundle.min.js"></script>
      <script src="/assets/js/setup.js"></script>
    </head>
    <body>
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-3">
            <div class="item">Setup database</div>
            <div class="item">Personalization</div>
            <div class="item active">Configuration</div>
          </div>
          <div class="col-sm-9">
            <div class="form">
              <strong><h2>Let\'s setup your database step3</h2></strong><br><br>
              <form method="POST">
                <input type="text" name="step" value="4" hidden>
                <input type="text" name="host" value="'.$dbhost.'" hidden>
                <input type="text" name="user" value="'.$dbuser.'" hidden>
                <input type="password" name="pass" value="'.$dbpass.'" hidden>
                <input type="text" name="db" value="'.$dbdb.'" hidden>
                <div class="from-group">
                  <input type="text" class="form-control" name="host" placeholder="Hostname" required><br>
                </div>
                <div class="from-group">
                  <input type="text" class="form-control" name="user" placeholder="Username" required><br>
                </div>
                <div class="from-group">
                  <input type="password" class="form-control" name="pass" placeholder="Password" required><br>
                </div>
                <div class="from-group">
                  <input type="text" class="form-control" name="db" placeholder="Database Name" required><br>
                </div>
                <input type="submit" class="btn btn-primary" value="Next step">
              </form>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>
  ';

  if (!isset($_POST['step'])) {
    echo $step1;
  } elseif (isset($_POST['step'])) {
    $step = $_POST['step'];
    if ($step == '1') {
      echo $step1;
    } elseif ($step == '2') {
      echo $step2;
    } elseif ($step == '3') {
      echo $step3;
    } elseif ($step == '4') {
      echo $step4;
    } else {
      echo $step1;
    }
  } else {
    echo $step1;
  }
?>

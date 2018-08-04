<?php

?>
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
          <div class="item active">Setup database</div>
          <div class="item">bla</div>
          <div class="item">bla</div>
          <div class="item">bla</div>
          <div class="item">bla</div>
        </div>
        <div class="col-sm-9">
          <div class="form">
            <strong><h2>Let's setup your database</h2></strong><br><br>
            <form name="conn">
              <div class="from-group">
                <input type="text" class="form-control" name="host" placeholder="Hostname" required><br>
              </div>
              <div class="from-group">
                <input type="text" class="form-control" name="user" placeholder="Username" required><br>
              </div>
              <div class="from-group">
                <input type="text" class="form-control" name="pass" placeholder="Password" required><br>
              </div>
              <div class="from-group">
                <input type="text" class="form-control" name="db" placeholder="Database Name" required><br>
              </div>
            </form>
            <a onclick="submitConn();" class="btn btn-primary">Next step</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

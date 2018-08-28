<?php
$dbhost = '';
$dbuser = '';
$dbpass = '';
$dbdb   = '';
$site_name = '';
$site_desc = '';
$site_author = '';
$site_keywords = '';
$site_logo = '';
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (substr($actual_link, -1) == '/') {
  $actual_link = substr($actual_link, 0, -1);
}
if (!isset($_POST['step'])) {
  $step = '1';
} elseif (isset($_POST['step'])) {
  $step = $_POST['step'];
  if ($step == '1') {

  } elseif ($step == '2') {
    if (!isset($_POST['db_host']) || !isset($_POST['db_user']) || !isset($_POST['db_pass']) || !isset($_POST['db_name'])) {
      echo $step1;
    } else {
      $dbhost = $_POST['db_host'];
      $dbuser = $_POST['db_user'];
      $dbpass = $_POST['db_pass'];
      $dbdb   = $_POST['db_name'];
    }

  } elseif ($step == '3') {
    if (!isset($_POST['db_host']) || !isset($_POST['db_user']) || !isset($_POST['db_pass']) || !isset($_POST['db_name']) || !isset($_POST['site_name']) || !isset($_POST['site_desc'])) {
      echo $step1;
    } else {
      $dbhost = $_POST['db_host'];
      $dbuser = $_POST['db_user'];
      $dbpass = $_POST['db_pass'];
      $dbdb   = $_POST['db_name'];

      $site_name = $_POST['site_name'];
      $site_desc = $_POST['site_desc'];
      $site_author = $_POST['site_author'];
      $site_keywords = $_POST['site_keywords'];

      $file = $_FILES['site_logo'];
      $fileName = $_FILES['site_logo']['name'];
      $fileTmpName = $_FILES['site_logo']['tmp_name'];
      $fileSize = $_FILES['site_logo']['size'];
      $fileError = $_FILES['site_logo']['error'];
      $fileType = $_FILES['site_logo']['type'];
      $file_Ext = explode('.', $fileName);
      $fileExt = strtolower(end($file_Ext));
      $allowed = array('jpg', 'jpeg', 'png');
      if (in_array($fileExt, $allowed)) {
        if ($fileError === 0) {
          if ($fileSize < 5000000) {
            $newFileName = "logo.".$fileExt;
            $location = "assets/img/";
            $final = $location.$newFileName;
            move_uploaded_file($fileTmpName, $final);
          } else {
            echo "YOUR FILE IS TOO BIG...";
          }
        } else {
          if ($fileError === '1' || '2') {
            echo "logo too big, try a smaller file size";
          } else if ($fileError === '3') {
            echo "logo not fully uploaded, try again";
          } else if ($fileError === '4') {
            echo "no logo has been selected, select one";
          } else if ($fileError === '6') {
            echo "no tmp dir for the logo, try again";
          } else if ($fileError === '7') {
            echo "failed to write logo to the disk, try again";
          } else if ($fileError === '8') {
            echo "there was an error uploading you're logo, try again";
          }
        }
      } else {
        echo "INVALID FILE TYPE...";
      }
      $site_logo = $final;
    }

  } elseif ($step == '4') {
    if (!isset($_POST['db_host']) || !isset($_POST['db_user']) || !isset($_POST['db_pass']) || !isset($_POST['db_name'])) {
      echo $step1;
    } else {
      $dbhost = $_POST['db_host'];
      $dbuser = $_POST['db_user'];
      $dbpass = $_POST['db_pass'];
      $dbdb   = $_POST['db_name'];

      $conf_host = $_POST['conf_host'];
      $conf_lang = $_POST['conf_lang'];
      $conf_country = $_POST['conf_country'];

      if (substr($conf_host, -1) == '/') {
        $conf_host = substr($conf_host, 0, -1);
      }

      $site_name = $_POST['site_name'];
      $site_desc = $_POST['site_desc'];
      $site_author = $_POST['site_author'];
      $site_keywords = $_POST['site_keywords'];
      $site_logo = $conf_host."/".$_POST['site_logo'];


      $config = '
        <?php

        // Everything here can be edited from the control panel, there\'s no reason to touch this.
        // You can edit this, but it\'s not recommended. Code might break as a result.

        $config = [
            // Meta and titles
            \'title\'             => "'.$site_name.'", // Title, used all over the site.
            \'logo\'              => "'.$site_logo.'", // Logo, must be a direct url or direct path to file, used all over the site.
            \'alt\'               => "Alternative", // Alternative, used when the logo does not load, mainly in meta.
            \'favicon\'           => "'.$site_logo.'", // Favicon, must be a direct url or direct path to file, used all over the site.
            \'description\'       => "'.$site_desc.'", // Description, used for meta purposes.
            \'author\'            => "'.$site_author.'", // Website author, your name or alias, used for meta purposes.
            \'keywords\'          => "'.$site_keywords.'", // Keywords, please divide all keywords using a comma, used for meta purposes.
            \'country_lang\'      => "'.$conf_country.'", // Country and language, if you don\'t know what to put here, don\'t change it, used for meta purposes.

            // General
            \'basePath\'          => "'.$conf_host.'", // Your website url and installation path, ex; http://localhost/oms.
            \'homePage\'          => "index", // Home page, do not add the page extension.
            \'errorDocument\'     => "error", // Error page, do not add the page extension.
            \'credityn\'          => "true", // Credits, set to true if you want to add credits to OpenCMS in your footer.
            \'homepageJumbotron\' => "true", // Homepage Jumbotron, set to true if you want to add a homepage jumbotron to OpenCMS on your homepage.
            \'navbaryn\'          => "true", // Site navigation bar, set to true if you want to add a navigation bar to OpenCMS.
            \'cookiewarning\'     => "true", // Cookie warning, set to true if you want to add a cookie warning to OpenCMS.
            \'usessl\'            => "false", // Not functional yet.
            \'lang\'              => "'.$conf_lang.'", //set a supported country code (en, nl).

            // Database
            \'DatabaseServer\'    => "'.$dbhost.'", // Database server you want to connect to.
            \'DatabaseUser\'      => "'.$dbuser.'", // Database username you have set, usually root when running locally.
            \'DatabasePass\'      => "'.$dbpass.'", // Database password you have set, usually empty when running locally.
            \'DatabaseName\'      => "'.$dbdb.'", // Database name you have set, can\'t be empty.

            // Theme
            \'theme\'             => "template", // Enter the theme name here

            // Widgets

            // Advanced, WARNING DO NOT EDIT THIS UNLESS YOU KNOW WHAT YOU\'RE DOING!
            \'debug\'             => "true", // WARNING; Using this on live sites is dangerous, as it exposes PHP code!
            \'corever\'           => "1", // Do not touch this
            \'corevernr\'         => "20983", // Do not touch this
            \'corestatus\'        => "dev", // Do not touch this
            \'year\'              => date("Y"), // Do not touch this
            \'phpversion\'        => phpversion(), // Do not touch this
            \'credit\'            => "OMSP", // Do not touch this
            \'crediturl\'         => "https://omsp.org", // Do not touch this
            \'revised\'           => "Tuesday, August 7th, 2018, 0:00 pm", // Will soon get functionality to auto update
            \'pageExtension\'     => "tpl", // Standard Smarty template extension
            \'charset\'           => "utf-8", //
            \'bootstrapyn\'       => "true", //

        ];

        // Compiled

        // Advanced, WARNING DO NOT EDIT THIS UNLESS YOU KNOW WHAT YOU\'RE DOING!

        // General compiled variables
        $config["omsfullver"] = "OpenCMS R".$config[\'corever\']." (".$config[\'corever\'].".".$config[\'corevernr\']."-".$config[\'corestatus\'].")";
        $config["homePageInt"] = $config[\'homePage\'].".".$config[\'pageExtension\'];
        $config["errorPageInt"] = $config[\'errorDocument\'].".".$config[\'pageExtension\'];

        // Easy variables for theme makers
        $config["meta_favicon"] = \'<link href="\'.$config[\'favicon\'].\'" rel="shortcut icon" type="image/png"/>\'; // Use in theme as {$meta_keywords}.

        // Meta variables

        // Normal Meta
        $config["meta_keywords"] = \'<meta name="keywords" content="\'.$config[\'keywords\'].\'"/>\'; // Use in theme as {$meta_keywords}.
        $config["meta_description"] = \'<meta name="description" content="\'.$config[\'description\'].\'"/>\'; // Use in theme as {$meta_description}.
        $config["meta_revised"] = \'<meta name="revised" content="\'.$config[\'revised\'].\'"/>\'; // Use in theme as {$meta_revised}.
        $config["meta_url"] = \'<meta name="url" content="\'.$config[\'basePath\'].\'"/>\'; // Use in theme as {$meta_url}.
        $config["meta_copyright"] = \'<meta name="copyright" content="\'.$config[\'title\'].\'"/>\'; // Use in theme as {$meta_copyright}.

        // OG Meta
        $config["og_title"] = \'<meta property="og:title" content="\'.$config[\'title\'].\'"/>\'; // Use in theme as {$og_title}.
        $config["og_description"] = \'<meta property="og:description" content="\'.$config[\'description\'].\'"/>\'; // Use in theme as {$og_description}.
        $config["og_img"] = \'<meta property="og:image" content="\'.$config[\'logo\'].\'"/>\'; // Use in theme as {$og_img}.
        $config["og_alt"] = \'<meta property="og:image:alt" content="\'.$config[\'alt\'].\'"/>\'; // Use in theme as {$og_alt}.
        $config["og_locale"] = \'<meta property="og:locale" content="\'.$config[\'country_lang\'].\'"/>\'; // Use in theme as {$og_locale}.

      ';
      chmod(__DIR__, 755);
      $file = fopen(__DIR__ . "/config.php","wb");
      fwrite($file, $config);
      fclose($file);
      header("Location: ".$conf_host);
    }

  } else {
    $step = '1';
  }
} else {
  $step = '1';
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
                  <input type="text" class="form-control" name="db_host" placeholder="Hostname" required><br>
                </div>
                <div class="from-group">
                  <input type="text" class="form-control" name="db_user" placeholder="Username" required><br>
                </div>
                <div class="from-group">
                  <input type="password" class="form-control" name="db_pass" placeholder="Password"><br>
                </div>
                <div class="from-group">
                  <input type="text" class="form-control" name="db_name" placeholder="Database Name" required><br>
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
              <form method="POST" enctype="multipart/form-data">
                <input type="text" name="step" value="3" hidden>
                <input type="text" name="db_host" value="'.$dbhost.'" hidden>
                <input type="text" name="db_user" value="'.$dbuser.'" hidden>
                <input type="password" name="db_pass" value="'.$dbpass.'" hidden>
                <input type="text" name="db_name" value="'.$dbdb.'" hidden>
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
                  <input type="text" class="form-control" name="site_keywords" placeholder="Keywords, example: \'drawing, designing, user-friendly\'" required><br><br>
                </div>
                <p style="font-size: 13px;" align="left" for="name"><b>Logo</b></p>
                <div class="custom-file">
                  <input type="file" name="site_logo" class="custom-file-input" id="customFile"><br><br>
                  <label class="custom-file-label" for="customFile" align="left">Choose file</label>
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
              <strong><h2>Configuration</h2></strong>
              <p>Automaticly filled in</p><br><br>
              <form method="POST">
                <input type="text" name="step" value="4" hidden>
                <input type="text" name="db_host" value="'.$dbhost.'" hidden>
                <input type="text" name="db_user" value="'.$dbuser.'" hidden>
                <input type="password" name="db_pass" value="'.$dbpass.'" hidden>
                <input type="text" name="db_name" value="'.$dbdb.'" hidden>

                <input type="text" name="site_name" value="'.$site_name.'" hidden>
                <input type="text" name="site_desc" value="'.$site_desc.'" hidden>
                <input type="text" name="site_author" value="'.$site_author.'" hidden>
                <input type="text" name="site_keywords" value="'.$site_keywords.'" hidden>
                <input type="text" name="site_logo" value="'.$site_logo.'" hidden>
                <div class="from-group">
                  <p style="font-size: 13px;" align="left" for="name"><b>Base Path</b></p>
                  <input type="text" class="form-control" name="conf_host" value="'.$actual_link.'" required><br>
                </div>
                <div class="from-group">
                  <p style="font-size: 13px;" align="left" for="name"><b>Language</b></p>
                  <select id="name" name="conf_lang" class="form-control">
                    <option value="en">English (English)</option>
                    <option value="nl">Dutch   (Nederlands)</option>
                  </select><br>
                </div>
                <div class="from-group">
                  <p style="font-size: 13px;" align="left" for="name"><b>Country</b></p>
                  <select id="name" name="conf_country" class="form-control" required>
                    <option selected hidden value="none">Choose a country</option>
                  	<option value="AF">Afghanistan</option>
                  	<option value="AX">Åland Islands</option>
                  	<option value="AL">Albania</option>
                  	<option value="DZ">Algeria</option>
                  	<option value="AS">American Samoa</option>
                  	<option value="AD">Andorra</option>
                  	<option value="AO">Angola</option>
                  	<option value="AI">Anguilla</option>
                  	<option value="AQ">Antarctica</option>
                  	<option value="AG">Antigua and Barbuda</option>
                  	<option value="AR">Argentina</option>
                  	<option value="AM">Armenia</option>
                  	<option value="AW">Aruba</option>
                  	<option value="AU">Australia</option>
                  	<option value="AT">Austria</option>
                  	<option value="AZ">Azerbaijan</option>
                  	<option value="BS">Bahamas</option>
                  	<option value="BH">Bahrain</option>
                  	<option value="BD">Bangladesh</option>
                  	<option value="BB">Barbados</option>
                  	<option value="BY">Belarus</option>
                  	<option value="BE">Belgium</option>
                  	<option value="BZ">Belize</option>
                  	<option value="BJ">Benin</option>
                  	<option value="BM">Bermuda</option>
                  	<option value="BT">Bhutan</option>
                  	<option value="BO">Bolivia, Plurinational State of</option>
                  	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  	<option value="BA">Bosnia and Herzegovina</option>
                  	<option value="BW">Botswana</option>
                  	<option value="BV">Bouvet Island</option>
                  	<option value="BR">Brazil</option>
                  	<option value="IO">British Indian Ocean Territory</option>
                  	<option value="BN">Brunei Darussalam</option>
                  	<option value="BG">Bulgaria</option>
                  	<option value="BF">Burkina Faso</option>
                  	<option value="BI">Burundi</option>
                  	<option value="KH">Cambodia</option>
                  	<option value="CM">Cameroon</option>
                  	<option value="CA">Canada</option>
                  	<option value="CV">Cape Verde</option>
                  	<option value="KY">Cayman Islands</option>
                  	<option value="CF">Central African Republic</option>
                  	<option value="TD">Chad</option>
                  	<option value="CL">Chile</option>
                  	<option value="CN">China</option>
                  	<option value="CX">Christmas Island</option>
                  	<option value="CC">Cocos (Keeling) Islands</option>
                  	<option value="CO">Colombia</option>
                  	<option value="KM">Comoros</option>
                  	<option value="CG">Congo</option>
                  	<option value="CD">Congo, the Democratic Republic of the</option>
                  	<option value="CK">Cook Islands</option>
                  	<option value="CR">Costa Rica</option>
                  	<option value="CI">Côte d\'Ivoire</option>
                  	<option value="HR">Croatia</option>
                  	<option value="CU">Cuba</option>
                  	<option value="CW">Curaçao</option>
                  	<option value="CY">Cyprus</option>
                  	<option value="CZ">Czech Republic</option>
                  	<option value="DK">Denmark</option>
                  	<option value="DJ">Djibouti</option>
                  	<option value="DM">Dominica</option>
                  	<option value="DO">Dominican Republic</option>
                  	<option value="EC">Ecuador</option>
                  	<option value="EG">Egypt</option>
                  	<option value="SV">El Salvador</option>
                  	<option value="GQ">Equatorial Guinea</option>
                  	<option value="ER">Eritrea</option>
                  	<option value="EE">Estonia</option>
                  	<option value="ET">Ethiopia</option>
                  	<option value="FK">Falkland Islands (Malvinas)</option>
                  	<option value="FO">Faroe Islands</option>
                  	<option value="FJ">Fiji</option>
                  	<option value="FI">Finland</option>
                  	<option value="FR">France</option>
                  	<option value="GF">French Guiana</option>
                  	<option value="PF">French Polynesia</option>
                  	<option value="TF">French Southern Territories</option>
                  	<option value="GA">Gabon</option>
                  	<option value="GM">Gambia</option>
                  	<option value="GE">Georgia</option>
                  	<option value="DE">Germany</option>
                  	<option value="GH">Ghana</option>
                  	<option value="GI">Gibraltar</option>
                  	<option value="GR">Greece</option>
                  	<option value="GL">Greenland</option>
                  	<option value="GD">Grenada</option>
                  	<option value="GP">Guadeloupe</option>
                  	<option value="GU">Guam</option>
                  	<option value="GT">Guatemala</option>
                  	<option value="GG">Guernsey</option>
                  	<option value="GN">Guinea</option>
                  	<option value="GW">Guinea-Bissau</option>
                  	<option value="GY">Guyana</option>
                  	<option value="HT">Haiti</option>
                  	<option value="HM">Heard Island and McDonald Islands</option>
                  	<option value="VA">Holy See (Vatican City State)</option>
                  	<option value="HN">Honduras</option>
                  	<option value="HK">Hong Kong</option>
                  	<option value="HU">Hungary</option>
                  	<option value="IS">Iceland</option>
                  	<option value="IN">India</option>
                  	<option value="ID">Indonesia</option>
                  	<option value="IR">Iran, Islamic Republic of</option>
                  	<option value="IQ">Iraq</option>
                  	<option value="IE">Ireland</option>
                  	<option value="IM">Isle of Man</option>
                  	<option value="IL">Israel</option>
                  	<option value="IT">Italy</option>
                  	<option value="JM">Jamaica</option>
                  	<option value="JP">Japan</option>
                  	<option value="JE">Jersey</option>
                  	<option value="JO">Jordan</option>
                  	<option value="KZ">Kazakhstan</option>
                  	<option value="KE">Kenya</option>
                  	<option value="KI">Kiribati</option>
                  	<option value="KP">Korea, Democratic People\'s Republic of</option>
                  	<option value="KR">Korea, Republic of</option>
                  	<option value="KW">Kuwait</option>
                  	<option value="KG">Kyrgyzstan</option>
                  	<option value="LA">Lao People\'s Democratic Republic</option>
                  	<option value="LV">Latvia</option>
                  	<option value="LB">Lebanon</option>
                  	<option value="LS">Lesotho</option>
                  	<option value="LR">Liberia</option>
                  	<option value="LY">Libya</option>
                  	<option value="LI">Liechtenstein</option>
                  	<option value="LT">Lithuania</option>
                  	<option value="LU">Luxembourg</option>
                  	<option value="MO">Macao</option>
                  	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
                  	<option value="MG">Madagascar</option>
                  	<option value="MW">Malawi</option>
                  	<option value="MY">Malaysia</option>
                  	<option value="MV">Maldives</option>
                  	<option value="ML">Mali</option>
                  	<option value="MT">Malta</option>
                  	<option value="MH">Marshall Islands</option>
                  	<option value="MQ">Martinique</option>
                  	<option value="MR">Mauritania</option>
                  	<option value="MU">Mauritius</option>
                  	<option value="YT">Mayotte</option>
                  	<option value="MX">Mexico</option>
                  	<option value="FM">Micronesia, Federated States of</option>
                  	<option value="MD">Moldova, Republic of</option>
                  	<option value="MC">Monaco</option>
                  	<option value="MN">Mongolia</option>
                  	<option value="ME">Montenegro</option>
                  	<option value="MS">Montserrat</option>
                  	<option value="MA">Morocco</option>
                  	<option value="MZ">Mozambique</option>
                  	<option value="MM">Myanmar</option>
                  	<option value="NA">Namibia</option>
                  	<option value="NR">Nauru</option>
                  	<option value="NP">Nepal</option>
                  	<option value="NL">Netherlands</option>
                  	<option value="NC">New Caledonia</option>
                  	<option value="NZ">New Zealand</option>
                  	<option value="NI">Nicaragua</option>
                  	<option value="NE">Niger</option>
                  	<option value="NG">Nigeria</option>
                  	<option value="NU">Niue</option>
                  	<option value="NF">Norfolk Island</option>
                  	<option value="MP">Northern Mariana Islands</option>
                  	<option value="NO">Norway</option>
                  	<option value="OM">Oman</option>
                  	<option value="PK">Pakistan</option>
                  	<option value="PW">Palau</option>
                  	<option value="PS">Palestinian Territory, Occupied</option>
                  	<option value="PA">Panama</option>
                  	<option value="PG">Papua New Guinea</option>
                  	<option value="PY">Paraguay</option>
                  	<option value="PE">Peru</option>
                  	<option value="PH">Philippines</option>
                  	<option value="PN">Pitcairn</option>
                  	<option value="PL">Poland</option>
                  	<option value="PT">Portugal</option>
                  	<option value="PR">Puerto Rico</option>
                  	<option value="QA">Qatar</option>
                  	<option value="RE">Réunion</option>
                  	<option value="RO">Romania</option>
                  	<option value="RU">Russian Federation</option>
                  	<option value="RW">Rwanda</option>
                  	<option value="BL">Saint Barthélemy</option>
                  	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                  	<option value="KN">Saint Kitts and Nevis</option>
                  	<option value="LC">Saint Lucia</option>
                  	<option value="MF">Saint Martin (French part)</option>
                  	<option value="PM">Saint Pierre and Miquelon</option>
                  	<option value="VC">Saint Vincent and the Grenadines</option>
                  	<option value="WS">Samoa</option>
                  	<option value="SM">San Marino</option>
                  	<option value="ST">Sao Tome and Principe</option>
                  	<option value="SA">Saudi Arabia</option>
                  	<option value="SN">Senegal</option>
                  	<option value="RS">Serbia</option>
                  	<option value="SC">Seychelles</option>
                  	<option value="SL">Sierra Leone</option>
                  	<option value="SG">Singapore</option>
                  	<option value="SX">Sint Maarten (Dutch part)</option>
                  	<option value="SK">Slovakia</option>
                  	<option value="SI">Slovenia</option>
                  	<option value="SB">Solomon Islands</option>
                  	<option value="SO">Somalia</option>
                  	<option value="ZA">South Africa</option>
                  	<option value="GS">South Georgia and the South Sandwich Islands</option>
                  	<option value="SS">South Sudan</option>
                  	<option value="ES">Spain</option>
                  	<option value="LK">Sri Lanka</option>
                  	<option value="SD">Sudan</option>
                  	<option value="SR">Suriname</option>
                  	<option value="SJ">Svalbard and Jan Mayen</option>
                  	<option value="SZ">Swaziland</option>
                  	<option value="SE">Sweden</option>
                  	<option value="CH">Switzerland</option>
                  	<option value="SY">Syrian Arab Republic</option>
                  	<option value="TW">Taiwan, Province of China</option>
                  	<option value="TJ">Tajikistan</option>
                  	<option value="TZ">Tanzania, United Republic of</option>
                  	<option value="TH">Thailand</option>
                  	<option value="TL">Timor-Leste</option>
                  	<option value="TG">Togo</option>
                  	<option value="TK">Tokelau</option>
                  	<option value="TO">Tonga</option>
                  	<option value="TT">Trinidad and Tobago</option>
                  	<option value="TN">Tunisia</option>
                  	<option value="TR">Turkey</option>
                  	<option value="TM">Turkmenistan</option>
                  	<option value="TC">Turks and Caicos Islands</option>
                  	<option value="TV">Tuvalu</option>
                  	<option value="UG">Uganda</option>
                  	<option value="UA">Ukraine</option>
                  	<option value="AE">United Arab Emirates</option>
                  	<option value="GB">United Kingdom</option>
                  	<option value="US">United States</option>
                  	<option value="UM">United States Minor Outlying Islands</option>
                  	<option value="UY">Uruguay</option>
                  	<option value="UZ">Uzbekistan</option>
                  	<option value="VU">Vanuatu</option>
                  	<option value="VE">Venezuela, Bolivarian Republic of</option>
                  	<option value="VN">Viet Nam</option>
                  	<option value="VG">Virgin Islands, British</option>
                  	<option value="VI">Virgin Islands, U.S.</option>
                  	<option value="WF">Wallis and Futuna</option>
                  	<option value="EH">Western Sahara</option>
                  	<option value="YE">Yemen</option>
                  	<option value="ZM">Zambia</option>
                  	<option value="ZW">Zimbabwe</option>
                  </select><br>
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
      print_r($_POST);
    } elseif ($step == '4') {

    } else {
      echo $step1;
    }
  } else {
    echo $step1;
  }
?>

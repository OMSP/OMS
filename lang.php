<?php
  include 'app/config.php';
  $basepath = $config['basePath'];
  if (isset($_COOKIE['lang'])) {
    $lang_code = $_COOKIE['lang'];
    $file = $basepath.'/assets/lang/'.$lang_code.'.json';
  } else {
    $file = $basepath.'/assets/lang/en.json';
  }
  $json = file_get_contents($file);
  $lang = json_decode($json, true);
  $lang = print_r($lang);
  echo $lang;
?>

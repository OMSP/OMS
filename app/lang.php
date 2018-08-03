<?php
  if (isset($_GET['update']) && isset($_GET['lang']) && !empty($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time() + (86400 * 365 * 20), "/"); // 86400 = 1 day, times 365 a year, and that times 20 years is the maximum supported seconds for a php cookie
  } else {
    include 'config.php';
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
  }
?>

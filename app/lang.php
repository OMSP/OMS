<?php
if (isset($_GET['update']) && isset($_GET['lang']) && !empty($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time() + (86400 * 365 * 20), "/"); // 86400 = 1 day, times 365 a year, and that times 20 years is the maximum supported seconds for a php cookie
} else {
    if (isset($_COOKIE['lang'])) {
        $lang_code = $_COOKIE['lang'];
        $file = 'assets/lang/' . $lang_code . '.json';
    } else {
        $file = 'assets/lang/en.json';
    }
    $json = file_get_contents($file);
    $lang = json_decode($json, true);
}

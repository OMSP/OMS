<?php
session_start();
include 'config.php';
?>

<!doctype html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8" />
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="<?php echo $description ?>" />
<meta property="og:title" content="<?php echo $title ?>" />
<meta property="og:image" content="<?php echo $logo ?>" />
<meta property="og:site_name" content="<?php echo $title ?>" />
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="author" content="<?php echo $author ?>" />

<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

<!-- css -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
<link href="<?php echo '/themes/'.$theme.'/css/theme.css'; ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

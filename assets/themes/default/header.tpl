<!--Default-->

<!doctype html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="{$author}">
    <meta name="description" content="{$description}">
    <link href="{$favicon}" rel="shortcut icon" type="image/png">
    <title>{$title} - {$pageTitle|default:"Untitled Page"}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link href="{$basePath}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$basePath}/assets/themes/{$theme}/css/theme.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    <!-- JS -->
    <script src="{$basePath}/assets/js/cookies.js"></script>
</head>

<body>
{if $cookiewarning eq 'true'}
<div class="cookie-notice">
    {$cookieText}
    <button class="accept">{$cookieAccept}</button>
    <button class="read-more">{$cookieReadmore}</button>
</div>
<div class="cookie-readmore">
    <div class="window">
        {$cookieReadmoreText}
        <button class="done">{$cookieReadmoreDone}</button>
    </div>
</div>
{/if}
<!-- Navigation bar, you can add or remove items, but be aware that you might break our code -->
{if $navbaryn eq 'true'}
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">{$title}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{$basePath}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{$basePath}/other-page">Link</a>
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
{/if}

<!-- This is some theme specific HTML, it is suggested to keep this so the navbar does not hit the content -->
<br>

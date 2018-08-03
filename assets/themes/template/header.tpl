<!-- Demonstration theme -->
<!doctype html>
<html lang="en">
<head>
    <!-- The meta tags your theme uses. Our config files offers configuration for every single one of them. -->
    <!-- Our demonstration theme uses all the meta tags, you can remove lines you don't need in yours. -->
    <meta charset="{$charset}"> <!-- Defined in the configuration file. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Used for optimization. -->
    <meta name="author" content="{$author}"> <!-- Defined in the configuration file. -->
    <meta name="description" content="{$description}"> <!-- Defined in the configuration file. -->
    <link href="{$favicon}" rel="shortcut icon" type="image/png"> <!-- Defined in the configuration file. -->
    <title>{$title} - {$pageTitle|default:"Untitled Page"}</title> <!-- Defined in the configuration file and pagerouter. -->

    <!-- CSS -->
    <!-- If required, you can add css to your theme as shown here; -->
    <link href="{$basePath}/assets/themes/{$theme}/css/theme.css" rel="stylesheet"> <!-- The basePath and theme variables are both defined inside the configuration file and should not be edited. -->
    <!-- These are OpenCMS' standard CSS files, they can be removed or edited, but it's not adviced. -->
    {if $bootstrapyn eq 'true'}
    <link href="{$basePath}/assets/css/bootstrap.min.css" rel="stylesheet">
    {/if}
    <!-- As you can see, use of external stylesheets is also supported -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
</head>

<body>
<!-- Navigation bar -->
<!-- You can add HtMl, classes and change text, just like you would do on any website -->
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

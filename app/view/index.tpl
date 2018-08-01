{include file="header.tpl"}

<!-- Homepage Jumbotron -->
{if $homepageJumbotron eq 'true'}
<div class="headtext bg">
  <div class="overlay"></div>
  <div class="overlay2"></div>
  <h1>Welcome to {$title}</h1>
  <div class="overlay3"></div>
  <div class="overlay4"></div>
</div>
{/if}

<main role="main" class="container">
    <div class="starter-template">
        <h1>{$title} | Basic homepage</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

</main> <!-- /.container -->

{include file="footer.tpl"}

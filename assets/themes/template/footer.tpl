<footer> <!-- Footer opening tag -->
<div class="footerOMS"> <!-- Example class, you can remove this and place ones of your own -->
  <div class="container"> <!-- Standard bootstrap container class -->
    <span class="text-muted">&copy; {$title} {$year} {if $credityn eq 'true'} <!-- Smarty's way of checking if the variable is true via an if statment. -->
    | Powered by <a href="{$crediturl}">{$credit}</a>{/if} <!-- You can use all the configuration file variables inside HtML by like this {$variable}. -->
  </div> <!-- FooterOMS div closing tag -->
</div> <!-- Container div closing tag -->
</footer> <!-- Footer closing tag -->

<!-- Javascript -->
<!-- These are OpenCMS' standard Javascript files, they can be removed or edited, but it's not adviced. -->
<script src="{$basePath}/assets/js/jquery.min.js"></script> <!-- Jquery must be loaded before your JS when using Jquery inside your JS files. -->
{if $bootstapyn eq 'true'}
<script src="{$basePath}/assets/js/bootstrap.bundle.min.js"></script>
{/if}
<!-- If required, you can add js to your theme as shown here; -->
<script src="{$basePath}/assets/themes/{$theme}/js/theme.js"></script>

<!-- These are the standard closing tags that close up every single page on the site, this is why you don't need to add them on the pages themselves. -->
</body> <!-- Closing the body tag that was openned in header.tpl -->
</html> <!-- Closing the HtML tag that was openned in header.tpl -->

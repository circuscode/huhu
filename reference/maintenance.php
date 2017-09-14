<?php

$protocol = wp_get_server_protocol();
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );
header( 'Retry-After: 600' );

?>

<!DOCTYPE html>
<html lang="de-DE">

<head>
    <meta charset="UTF-8">
    <title>Wartungsarbeiten @ unmus</title>
    <style>
        #site-branding { display:none; }
        .entry-header h1 { display:none; }
        .entry-content p { display:none; }
        .maintenance {
            display:block; max-width:900px; margin:auto;
            padding-top:150px; 
        }
    </style>
</head>

<body class="maintenance">
<div class="main-container">

<header id="masthead" class="site-header">

    <div id="site-branding">
    <p class="site-title"><strong>
    <a class="blogname" title="Startseite" href="https://www.unmus.de/" rel="home">
    unmus
    </a>
    </strong></p>
    <p class="site-description"><em>
    Blog, Podcast, Sketchnotes, Tweets, WordPress
    </em></p>
    </div>

</header>

<main id="primary" class="site-content">

        <section class="page">
        <header class="entry-header">
        <h1 class="entry-title">Maintenance</h1>
        </header>

        <div class="entry-content">
        <p>Wir sind gleich wieder da ...</p>
        <img src="https://www.unmus.de/wp-content/uploads/maintenance.gif" alt="Wartungsarbeiten @ unmus" width="900" heigth="295" />
        </div>
        </section>

</main>

<footer id="colophon" class="site-footer">
<!-- Null -->
</footer>

</div> <!-- Main Containter @ header.php -->

<?php

	$current_host = $_SERVER['HTTP_HOST'];
    
    if($current_host == 'www.unmus.de') {

?>
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setCookieDomain", "*.www.unmus.de"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.unmus.de/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>

<?php
    }
?>

</body>
</html>
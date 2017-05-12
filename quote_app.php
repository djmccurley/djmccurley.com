<!doctype html>
<html class="no-js" lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Dan McCurley - Random Quote App</title>
      <meta name="description" content="Dan McCurley Web Development and Design Portfolio - Random Quote App">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="apple-touch-icon" href="apple-touch-icon.png">
      <!-- Place favicon.ico in the root directory -->
      <script src="https://use.fontawesome.com/a26c54cc82.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
      <script src="js/modernizr-2.8.3.min.js"></script>
  </head>
  <body id="body" class="">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <i id="menu_button" class="fa fa-bars menu_button"></i>
    <div id="page_wrapper" class="page_wrapper clearfix">    
      <?php include 'php/sidebar.php' ; ?>

      <section class="main">
          <h2>Random Quote Generator</h2>

          <p>Responsive web app that displays a random quote from the <a href="http://forismatic.com/en/api/" target="_blank">forismatic API</a>. Users can also tweet the displayed quote. Built for <a href="https://www.freecodecamp.com/djmccurley" target="_blank">freeCodeCamp</a> coding challenge.</p>

          <p>The app makes use of:</p>
          <ul>
              <li>HTML / HTML5Boilerplate</li>
              <li>CSS / Media Queries</li>
              <li>Javascript / JSON / JSONP</li>
              <li>jQuery</li>
              <li>AJAX</li>
              <li>Google Fonts</li>
              <li><a href="http://fontawesome.io/" target="_blank">Font Awesome</a></li>
          </ul>

          <p><a href="quote_app/index.html" class="project" target="_blank">Launch App</a> | <a href="https://github.com/djmccurley/random-quote-app" class="project" target="_blank">Project on GitHub</a></p>

          <p><img src="img/quote_app_phone_600.jpg" alt="random quote app mockup"></p>
          <p><img src="img/quote_app_mobile_600.png" alt="random quote app mockup"></p>
          <p><img src="img/quote_app_macbook_600.jpg" alt="random quote app mockup"></p>

      </section>
    </div><!-- page_wrapper -->
    <?php include 'php/mobile.php' ; ?>
    <?php include 'php/scripts.php' ; ?>  
  </body>
</html>

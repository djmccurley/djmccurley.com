<!doctype html>
<html class="no-js" lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Dan McCurley - Local Weather App</title>
      <meta name="description" content="Dan McCurley Web Development and Design Portfolio - Local Weather App">
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
          <h2>Local Weather App</h2>

          <p>A mobile friendly web app to show the user's local weather based on IP location. The color palette changes depending on the temperature and the time of day. Users can choose to show temps in Celsius or Fahrenheit. Built for <a href="https://www.freecodecamp.com/djmccurley" target="_blank">freeCodeCamp</a> coding challenge.</p>

          <p>The app makes use of <a href="http://ip-api.com" target="_blank">ip-api.com</a> and the <a href="http://openweathermap.org/current" target="_blank">openweathermap.org</a> API. Early versions used the browser's geolocation feature, but I ran into http vs https security issues once it went live. Other resources include:</p>
          <ul>
              <li>HTML / HTML5Boilerplate</li>
              <li>CSS</li>
              <li>Javascript / JSON</li>
              <li>jQuery</li>
              <li>AJAX</li>
              <li>Google Fonts</li>
              <li><a href="https://erikflowers.github.io/weather-icons/" target="_blank">weather-icons.css</a></li>
          </ul>

          <p><a href="weather_app/index.html" class="project" target="_blank">Launch App</a> | <a href="https://github.com/djmccurley/weather_app" class="project" target="_blank">Project on GitHub</a></p>

          <p><img src="img/weather_app_day_600.jpg" alt="local weather app daytime mockup"></p>
          <p><img src="img/weather_app_night_600.jpg" alt="local weather app night mockup"></p>

      </section>
    </div><!-- page_wrapper -->
    <?php include 'php/mobile.php' ; ?>
    <?php include 'php/scripts.php' ; ?>  
  </body>
</html>

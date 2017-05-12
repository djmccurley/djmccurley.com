<!doctype html>
<html class="no-js" lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Dan McCurley - Wikipedia Search</title>
      <meta name="description" content="Dan McCurley Web Development and Design Portfolio - Wikipedia search app">
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
    <i id="menu_button" class="fa fa-bars menu_button"></i>
    <div id="page_wrapper" class="page_wrapper clearfix">    
      <?php include 'php/sidebar.php' ; ?>

      <section class="main">
          <h2>Wikipedia Search App</h2>

          <p>This responsive web app allows users to search for Wikipedia articles using the Wikipedia API. I built this app from scratch for a class project. The inspiration for the app is from a freeCodeCamp coding challenge.</p>

          <p>After an intial build, the app went through user testing. Most of the feedback and pain points revolved around UI considerations, like using the Enter key to search, etc. The current version reflects updates based on that user feedback and additional testing with friends and colleagues.</p>


          <p><a href="wiki_app/index.html" class="project" target="_blank">Launch App</a> | <a href="https://github.com/djmccurley/IDM-6660-SP17-FINAL-PROJECT-MCCURLEY-DANIEL" class="project" target="_blank">Project on GitHub</a></p>

          <p><img src="img/wiki_app_1.jpg" alt="wikipedia search app screenshot"></p>

          <p><img src="img/wiki_app_2.jpg" alt="wikipedia search app screenshot"></p>

          <p><img src="img/wiki_app_3.jpg" alt="wikipedia search app screenshot"></p>

      </section>
    </div><!-- page_wrapper -->
    <?php include 'php/mobile.php' ; ?>
    <?php include 'php/scripts.php' ; ?>  
  </body>
</html>

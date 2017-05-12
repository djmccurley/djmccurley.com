<!doctype html>
<html class="no-js" lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Dan McCurley - Codeboy App</title>
      <meta name="description" content="Dan McCurley Web Development and Design Portfolio - Codeboy App">
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
    <?php include 'php/sidebar.php'; ?>  

      <section class="main">
          <h2>Codeboy 1.0</h2>

          <p>A fun web app that allows users to encode and decode secret messages to and from their friends (or enemies). With a heavy influence from 80's action movies and GI Joe cartoons, the app is great for sending encoded messages like 'GET TO THE CHOPPA!' and 'WHAT ARE YOU WAITING FOR? DO IT NOW!'</p>

          <p>Users can enter text and see the live output as they type. They can also switch between Encode and Decode modes, as well as change 'code channels' (varying <a href="https://en.wikipedia.org/wiki/ROT13" target="_blank">rot-n</a> codes). Finally, the output can be copied to the clipboard or sent as a tweet.</p>

          <p>Future plans for Codeboy include making it more mobile friendly for on the go espionage.</p>

          <p><a href="codeboy/index.html" class="project" target="_blank">Launch App</a> | <a href="https://github.com/djmccurley/idm-javascript/tree/master/final" class="project" target="_blank">Project on GitHub</a></p>

          <p><img src="img/codeboy.png" alt="codeboy app screenshot"></p>

      </section>
    </div><!-- page_wrapper -->
    <?php include 'php/mobile.php' ; ?>
    <?php include 'php/scripts.php' ; ?>  
  </body>
</html>

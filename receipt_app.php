<!doctype html>
<html class="no-js" lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Dan McCurley - Receipt App</title>
      <meta name="description" content="Dan McCurley Web Development and Design Portfolio - Receipt App">
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
          <h2>Receipt Splitter</h2>

          <p>This responsive web app helps you categorize expenses from a receipt. Let's say you went to Target and spent $100 on some groceries, some toiletries and some baby supplies. Now you want to enter your expenses into your monthly budget categories, but you aren't sure how much of that $100 you spent in each category.</p>

          <p>I built this app to help with our monthly budgeting using <a href="http://ynab.com" target="_blank">YNAB</a>. YNAB is great software, but it didn't allow me to split receipts like this in the app itself. This project grew out of a local spreadsheet that I wanted to access while on the go.</p>

          <p>This app is currently under development - check GitHub for an updated listed of issues and features in development.</p>

          <p><a href="receipt_app/index.html" class="project" target="_blank">Launch App</a> | <a href="https://github.com/djmccurley/receipt-splitter" class="project" target="_blank">Project on GitHub</a></p>

          <p><img src="img/receipt_app.png" alt="receipt splitter app screenshot"></p>

      </section>
    </div><!-- page_wrapper -->
    <?php include 'php/mobile.php' ; ?>
    <?php include 'php/scripts.php' ; ?>  
  </body>
</html>

<?php
  $myemail = "aleriumproductions@gmail.com";
  $subject = "Form Submitted via Alerium Productions";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $comments = $_POST['comments'];
  $message  = <<<EMAIL

Name:   $name
Email:  $email

Message:

$comments

EMAIL;

if($_POST){
  mail($myemail,$subject,$message);
  $feedback = "Thanks for contacting us! We'll be in touch soon.";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alerium Productions</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/x-icon.ico" >
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="wrapper">
      <header id="home">
    
      <!-- Nav -->
        <nav>
          
          <ul class="top-nav">
            <li class="logo"><h1>Alerium<br>Productions</h1></li>
            <li class="nav-item initial"><a href="index.html">HOME</a></li>
            <li class="nav-item"><a href="about.html">ABOUT</a></li>
            <li class="nav-item"><a href="featured.html">FEATURED</a></li>
            <li class="nav-item"><a href="contact.php">CONTACT</a></li>
          </ul>
        </nav>
      <!-- End Nav -->

      </header>
      <section class="contact text-center" id="contact">
        <h1>INTRODUCE YOURSELF</h1>
        <div class="line"></div>
        <div class="text-center">
          <h3 id="feedback"><?php echo $feedback; ?></h1>
        </div>
        <form id="mainForm" name="mainForm" method="post" action="?" class="contactform">
          <div class="center">
            <input type="text" id="name" name="name" placeholder="Name">
          </div>
          <div class="center">
            <input type="email" id="email" name="email" placeholder="Email">
          </div>
          <div class="center" id="messagearea">
            <textarea id="comments" name="comments"  rows="5" cols="10" placeholder="Message..."></textarea>
          </div>
          <br><input type="submit" id="submit" value="Contact">
        </form>
      </section>
      <footer id="footer">
        <div class="credit">
          <h6>Designed &amp; Developed by <a href="#">Travis Waelbroeck</a></h6>
        </div>
      </footer>
    </div>
  </body>
</html>
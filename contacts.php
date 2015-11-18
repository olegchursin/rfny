<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="russia, russian forum, russian business, investing in russia, russian economy, economic forum, business forum, russian and the USA, US-Russia relations, US-Russia cooperation, Russia-US, russia forum new york, discussion, preventing cold war II, partners, international relations">
  <meta name="description" content="This a Contacts page of the official web resource for the Russia Forum New York - a platform for proactive diplomacy, mutual understanding and respect of each nation’s geopolitical interests, and initiatives to promote political, commercial, scientific, educational, and cultural cooperation.">
  <title>Russia Forum New York - Contacts</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700|Open+Sans:400,300,700,600|Roboto+Slab:400,100,300,700|Ubuntu:400,300,500,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
</head>
<body>
  <div class="wrapper">
    <nav class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">| Russia Forum New York</a>
          </div> <!-- navbar-header -->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="about.html">About</a></li>
              <li><a href="register.html">Register</a></li>
              <li><a href="program.html">Program</a></li>
              <li><a href="speakers.html">Speakers</a></li>
              <li><a href="past-forums.html">Past Forums</a></li>
              <li><a href="sponsors.html">Sponsors</a></li>
              <li><a href="contacts.php">Contacts</a></li>
            </ul>
          </div> <!-- navbar-collapse collapse -->
        </div> <!-- container -->
      </div> <!-- navbar -->
    </nav> <!-- navbar wrapper -->
    
    <!-- contacts page marquee starts. Marquee - background image in BW with text overlay. -->
    <section id="marquee">
      <img class="img-responsive" src="img/rfny-contacts-marquee-bw.jpg" alt="rfny homepage marquee">
    </section><!-- Contacts page marquee ends -->

    <section id="internal-page-section">
      <h1 class="slab">Russia Forum New York</h1>
      <h2 class="slab weight-300">Contact Us</h2>

      <p>Russia Forum New York provides industrial and academic leaders an opportunity to share their experiences relating to current issues in international business, finance, regulation, and infrastructure develop a framework to improve interaction between the Russian and U.S. fiscal markets; and discuss issues such as the formation of an international financial center in Moscow, investment opportunities in Russia’s vast, varied geographic regions and economic sectors, as well as innovative projects currently underway or on the drawing board.</p>

      <h3>RFNY email:</h3>
       <a class="learn-more" href="mailto:hello@russiaforumny.com">hello@russiaforumn.com</a>

      <div class="whitespace"></div>

      <h3>Contact us using the form below:</h3>

        <?php if ($_GET['s'] == 'success') { ?>
        <p>Thank you. Your message has been sent successfully!</p>
        <?php } else if ($_GET['s'] == 'error') { ?>
        <p>Your message was not sent. Make sure you type in the proper verification numbers. <a href="conctacts.php">Cleck here to try again</a>. If issues persist please send email to the site admin (hello@russiaforumny.com).</p>
        <?php } else { ?>

        <form action="mailer.php" method="post">
            <span id="fullname-error" class="error">Must be more than two characters.</span>
            <input class="form-element" id="fullname" type="text" name="fullname" placeholder="Fullname">

            <span id="email-error" class="error">Must be a valid email.</span>
            <input class="form-element" id="email" type="text" name="email" placeholder="Email">
            
            <span id="message-error" class="error">Can not be left nlank.</span>
            <textarea class="form-element" id="message" type="text" name="message" placeholder="Message"></textarea>

            <input type="text" name="verify" class="form-element" placeholder="Verify you're human">
            <img class="verify-img" src="verificationimage.php?<?php echo rand(0,9999) ?>" alt="verification image">

            <input class="form-element" type="submit" value="SUBMIT">
            <?php } ?>
        </form>
      
      <p>Follow us on social media for future updates and announcements.</p>
      <p><a href="https://www.facebook.com/RussiaForumNY">Facebook</a> | <a href="https://twitter.com/RussiaForumNY">Twitter</a> | <a href="https://www.youtube.com/channel/UCXzhAq7LUl2yai5oXqpE8Wg">YouTube</a></p>

      <div class="whitespace"></div>
    </section>
    
    <section class="quote-section"> <!-- Quote section starts -->
      <p class="quote-text slab weight-500">"Great event — we made several valuable connections."</p>
    </section> <!-- Quote section ends -->


    <footer class="clearfix">
      <article class="footer-social-icons"> <!-- RFNY Social media accounts list. -->
        <a href="https://www.facebook.com/RussiaForumNY"><i class="fa fa-facebook-square fa-3x"></i></a>
        <a href="https://twitter.com/RussiaForumNY"><i class="fa fa-twitter-square fa-3x"></i></a>
        <a href="https://www.youtube.com/channel/UCXzhAq7LUl2yai5oXqpE8Wg"><i class="fa fa-youtube-square fa-3x"></i></a>
      </article> <!-- RFNY social media accounts list ends. -->
      
      <article class="footer-copyright">
        <p>&copy Russia Forum New York. Project of the <a href="http://russiancenterny.org">Russian Center New York</a>.</p>
      </article>

      <article class="footer-dev">
        <p>Built by: <a href="http://hinteraction.com">Oleg Chursin</a></p>
      </article>
    </div> <!-- Wrapper ends -->
  </footer>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
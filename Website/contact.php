<!DOCTYPE HTML>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href = "css/font-awesome.min.css" rel = "stylesheet"/>
    <link href = "css/bootstrap.min.css" rel = "stylesheet"/>
    <link href = "css/style-contact.css" rel = "stylesheet" />
    <link href = "css/hover-min.css" rel = "stylesheet"/>
    <link href = "css/hover.css" rel = "stylesheet"/>
  </head>
  <body>
    <!-- BEGINING HERO SECTION -->
    <section id ="hero-section">
      <header>

        <!--NEW MENU-->

        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand logo" href="Index.php"><img src = "img/logo.png" height="70"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="Index.php">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Contacts</a>
                </li>
              </ul>
            <form class="form-inline my-2 my-lg-0">
              <div class = "social-media">
                <div class = "social-media-button" id = "search-button">
                  <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                </div>
                <div class = "social-media-button">
                  <i class="fa fa-facebook fa-sm" aria-hidden="true"></i>
                </div>
                <div class = "social-media-button">
                  <i class="fa fa-twitter fa-sm" aria-hidden="true"></i>
                </div>
                <div class = "social-media-button">
                  <i class="fa fa-instagram fa-sm" aria-hidden="true"></i>
                </div>
                <button class="hvr-grow">
                  Send request
                  <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                </button>
              </div>
            </form>
          </div>
        </nav>
      </header>
    </section>
    <!--ENDING HERO SECTION-->

    <!--BEGINNING CONTACT SECTION-->
    <section id = "contact-section" class = "container-fluid">
      <div class = "row">
        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 title">
          Contacts
        </div>
        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 address">
          Home * Contacts
        </div>
        <div class = "col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12 description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt equi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
        </div>
        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class = "row">
            <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 phone">
              <i class="fa fa-mobile icon" aria-hidden="true"></i>
              <div class = "text-icons">
                0743388075
              </div>
            </div>
            <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 map-marker">
              <i class="fa fa-map-marker icon" aria-hidden="true"></i>
              <div class = "text-icons">
                CHICAGO, IL 60606 123
              </div>
            </div>
            <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 message">
              <i class="fa fa-envelope icon" aria-hidden="true"></i>
              <div class = "text-icons">
                INFO@EXAMPLE.COM
              </div>
            </div>
          </div>
        </div>
      </div>
      <form action = "contact.php" method = "POST">
        <div class = "row inputs">
          <input class = "name-input" placeholder = "Name" name = "name"/>
          <input class = "email-input" type="email" placeholder = "Email"  name = "email"/>
        </div>
        <div class = "miau">
          <input class = "message-input" placeholder = "Message"  name = "message"/>
        </div>
        <button class = "hvr-grow" type = "submit" name = "buton">
          Send Message
        </button>
      </form>
      <?php
        ini_set('display_errors',0);
        $server = "localhost";
        $user = "id14263776_marketingmanagement5";
        $pass = "Dorel@123456";
        $db = "id14263776_website";

        $connect = new mysqli($server, $user, $pass, $db);
        $email = $_POST["email"];
        $name = $_POST["name"];
        $message = $_POST["message"];
        $sql = "INSERT INTO contact(name, email, message) VALUES('".$name."','".$email."','".$message."')";
        $to = "patainearobertpp@gmail.com";
        if(isset($_POST["buton"])){
          if( $email != "" && $name != "" && $message != ""){
            if($connect->query($sql) === true){
              echo "<div class = 'error1'>"."Mesajul a fost salvat"."</div>";
              mail($to, "Website Message", $message);
            }
          }
          else{
            echo "<div class = 'error2'>"."Toate campurile sunt obligatorii"."</div>";
          }
        }
      ?>
    </section>
    <!--ENDING CONTACT SECTION-->

    <!--BEGINNING MAP SECTION-->
    <section id = "map-section" class="container-fluid">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91160.56672559929!2d26.024598204473307!3d44.4379269202705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f93abf3cad4f%3A0xac0632e37c9ca628!2sBucure%C8%99ti!5e0!3m2!1sro!2sro!4v1593009632881!5m2!1sro!2sro" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
    <!--ENDING MAP SECTION-->

    <!-- BEGINING FOOTER SECTION -->
    <footer id = "footer-section" class = "container-fluid">
      <div class = "row">
        <div class = "col-xl-3 offset-xl-1 col-lg-4 col-md-4 col-sm-6 col-6 offset-xs-2 padding">
          <div>
            <img class = "img-fluid" src = "img/logo.png"/>
          </div>
          <div class = "left-side">
            <div class = "description">
              Our goal is to help our clients solve their business problems and make their ideas come true.
            </div>
            <div>
              <div class = "address">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                Address: 12 Street Avenue, New York, USA
              </div>
              <div class = "phone">
                <i class="fa fa-phone" aria-hidden="true"></i>
                Phone: 0743388075
              </div>
              <div class = "email">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                Email: hello@universe.com
              </div>
            </div>
          </div>
        </div>
        <div class = "col-xl-2 offset-xl-1 col-lg-3 col-md-3 col-sm-6 col-6 news">
          <div  class = "title">
            Recent News
          </div>
          <div class = "news-title">
            Security Habits Putting Businesses at Risk
          </div>
          <div class = "subtitle">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            November 7, 2017
          </div>
          <div class = "news-title">
            Health Care Means & Your Business
          </div>
          <div class = "subtitle">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            November 7, 2017
          </div>
        </div>
        <div class = "col-xl-4 offset-xl-1 col-lg-5 col-md-5 col-sm-12 col-12 subscription">
          <div class = "subscribe-title">
            Subscribe
          </div>
            <form>
              <input type="email" placeholder="Email Address"/>
              <button class = "hvr-grow">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                Subscribe
              </button>
            </form>
            <input type="checkbox" class="checkbox1" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1" class="checkbox"> I have read and agree to the terms & conditions</label><br>
          <div class = "update">
            Get latest updates and offers.
          </div>
        </div>
      </div>
      <div class = "external">
        <div class = "row">
          <div class = "col-xl-7 col-lg-7 col-md-7 col-sm-6 col-6 copyright-title">
            Copyright 2020 by Robert Patainea
          </div>
          <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-6 col-6 padding">
              <div class = "external-social-media-button">
                <i class="fa fa-twitter"></i>
              </div>
              <div class = "external-social-media-button">
                <i class="fa fa-facebook"></i>
              </div>
              <div class = "external-social-media-button">
                <i class="fa fa-linkedin"></i>
              </div>
              <div class = "external-social-media-button">
                <i class="fa fa-instagram"></i>
              </div>
              <div class = "external-social-media-button">
                <i class="fa fa-snapchat-ghost"></i>
              </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- END FOOTER SECTION -->
    <script src = "js/jquery.min.js"></script>
    <script src = "js/bootstrap.min.js"></script>
    <script src = "js/purecounter_vanilla.js"></script>
    <script src = "js/progressbar.min.js"></script>
    <script>
      $('.carousel').carousel();

      var circle = new ProgressBar.Circle('#profit', {
        color: '#71B347',
        duration: 3000,
        easing: 'easeInOut',
        strokeWidth: 2.1,
        text: {
          value: '88%',
        }
      });
      circle.animate(0.88);

      var circle = new ProgressBar.Circle('#contracts', {
        color: '#71B347',
        duration: 3000,
        easing: 'easeInOut',
        strokeWidth: 2.1,
        text: {
          value: '70%',
        }
      });
      circle.animate(0.7);

      var circle = new ProgressBar.Circle('#management', {
        color: '#71B347',
        duration: 3000,
        easing: 'easeInOut',
        strokeWidth: 2.1,
        text: {
          value: '97%',
        }
      });
      circle.animate(0.97);

    </script>
  </body>
</html>

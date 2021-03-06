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
    <link href = "css/style.css" rel = "stylesheet" />
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
                  <a class="nav-link" href="contact.php">Contact Us</a>
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

      <!--BEGINNING CAROUSEL-->

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carousel1-new.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class = "title-and-buttons">
                <div class = "first-title">
                  NEW GENERATION MANAGEMENT COMPANY
                </div>
                <div class = "second-title">
                  WE MAKE MANAGEMENT
                </div>
                <div class = "third-title">
                  But I must explain to you how all this mistaken idea and praising 
                </div>
                <div class = "buttons">
                  <button class = "about-us-button hvr-grow">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    About us
                  </button>
                  <button class = "presentation-button hvr-grow">
                    <i class="fa fa-play" aria-hidden="true"></i>
                    Presentation
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class = "title-and-buttons-2">
                <div class = "first-title">
                  FIND OUT MORE ABOUT OUR MISSIONS
                </div>
                <div class = "second-title">
                  WE MAKE MANAGEMENT
                </div>
                <div class = "third-title">
                  Check out our awards
                </div>
                <div class = "buttons">
                  <button class = "mission-button hvr-grow">
                    <i class="fa fa-certificate" aria-hidden="true"></i>
                    Missions
                  </button>
                  <button class = "award-button hvr-grow">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    Awards
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class = "title-and-buttons-3">
                <div class = "first-title">
                  Check out our services
                </div>
                <div class = "second-title">
                  WE MAKE MANAGEMENT
                </div>
                <div class = "third-title">
                  Contact us for more informations 
                </div>
                <div class = "buttons">
                  <button class = "services-button hvr-grow">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    Services
                  </button>
                  <button class = "contact-button hvr-grow">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    Contact us
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!--ENDING CAROUSEL-->

    </section>
    
    <!-- END HERO SECTION -->

    <!-- BEGINING MISSION SECTION -->

    <section id = "mission-section" class = "container-fluid">
      <div class = "row">
        <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6" id = "firstdiv">
          <span>
            Our Main Missions
          </span>
          <div>
            I must explain to you how all this mistaken idea of denouncing pleasure nand praising pain was born and I will give you a complete account.
          </div>
          <button class = "hvr-grow">
            READ MORE
          </button>
        </div>
        <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
          <img class = "img-fluid" src = "img/tax-consulting.jpg"/>
          <div class = "text">
            <div class = "numbers">
              01
            </div>
            <span>
              TAX CONSULTING
            </span>
            I must explain to you how all this mistaken idea of denouncing pleasure
          </div>
        </div>
        <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
          <img class = "img-fluid" src = "img/conduct-negotiations.jpg"/>
          <div class = "text">
            <div class = "numbers">
              02
            </div>
            <span>
              CONDUCT NEGOTIATIONS
            </span>
            I must explain to you how all this mistaken idea of denouncing pleasure
          </div>
        </div>
        <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
          <img class = "img-fluid" src = "img/company-management.jpg"/>
          <div class = "text">
            <div class = "numbers">
              03
            </div>
            <span>
              COMPANY MANAGEMENT
            </span>
            I must explain to you how all this mistaken idea of denouncing pleasure
          </div>
        </div>
      </div>
    </section>
    <!-- END MISSION SECTION -->

    <!-- BEGINING ABOUT US SECTION -->
    <section id = "about-section" class = "container-fluid">
      <div id = "about-text-button">
        <div class = "row">
          <div class = "col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 col-12">
            <div class = "title">
              Future in consulting Professional Management and Experiences for our clients
            </div>
          </div>
        </div>
        <div class = "row">
          <div class = "col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-10 offset-sm-1 col-10 offset-1">
            <div class = "text">
              I must explain to you how all this mistaken idea of denouncing pleasure nand praising pain was born and I will give you a complete account of the system and expoun the actual teachings of the great. Cing pleasure and praising pain was
            </div>
          </div>
        </div>
        <button class = "about-us-button-2 hvr-grow">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          ABOUT US
        </button>
      </div>
      <div class = "container" id = "sponsor">
        <div class = "row">
          <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 text-center">
            <img class = "img-fluid" src = "img/sponsor1.png"/>
          </div>
          <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 text-center">
            <img class = "img-fluid" src = "img/sponsor2.png"/>
          </div>
          <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 text-center">
            <img class = "img-fluid" src = "img/sponsor3.png"/>
          </div>
          <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 text-center">
            <img class = "img-fluid" src = "img/sponsor4.png"/>
          </div>
          <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 text-center">
            <img class = "img-fluid" src = "img/sponsor5.png"/>
          </div>
          <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 text-center">
            <img class = "img-fluid" src = "img/sponsor6.png"/>
          </div>
        </div>
      </div>
    </section>
    <!-- END ABOUT US SECTION -->

    <!-- BEGINING BENEFITS SECTION -->
    <section class = "benefits-section container-fluid">
      <div class = "row">
        <div class = "col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12" id = "benefits-title-text">
          <span>
            Build smart and effective management
          </span>
          But I must explain to you how all this mistaken idea
        </div>
      </div>
      <div class = "row">
        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id = "benefits-background">
          <img class = "img-fluid" src = "img/new.jpg"/>
        </div>
      </div>
      <div class = "benefits-grey-background container">
        <div class = "row">
          <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div id = "banner1">
              <div class = "text1">
                <i class="fa fa-handshake-o fa-lg" aria-hidden="true"></i>
                <span>
                  Tax Consulting
                </span>
                I must explain to you how all this mistaken idea of denouncing pleasure nand praising
              </div>
            </div>
          </div>
          <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div id = "banner2">
              <div class = "text2">
                <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
                <span>
                  Conduct Negotiations
                </span>
                I must explain to you how all this mistaken idea of denouncing pleasure nand praising
              </div>
            </div>
          </div>
          <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div id = "banner3"> 
              <div class = "text3">
                <i class="fa fa-gg-circle fa-lg" aria-hidden="true"></i>
                <span>
                  Commercial Practice
                </span>
                I must explain to you how all this mistaken idea of denouncing pleasure nand praising
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END BENEFITS SECTION -->

    <!-- BEGINING RANKING AND AWARDS SECTION -->
    <section id = "ranking-section" class = "container-fluid">
      <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class = "title-subtitle">
          <span>
            Company rankings and awards
          </span>
          Eliminate your management & support
        </div>
      </div>
      <div class = "row">
        <div class = "col-xl-2 offset-xl-2 col-lg-2 offset-lg-2 col-md-5 offset-md-1 col-sm-5 offset-sm-1 col-5 offset-1 title">
          <span>
            <div data-purecounter-start="0" data-purecounter-end="12" class = "purecounter">
              0
            </div>
          </span>
          <div>
            YEARS EXPERIENCE
          </div>
        </div>
        <div class = "col-xl-2 col-lg-2 col-md-5 col-sm-5 col-5 title">
          <span>
            <div data-purecounter-start="0" data-purecounter-end="89" class = "purecounter">
              0
            </div>
          </span>
          <div>
            COMPANY MEMBERS
          </div>
        </div>
        <div class = "col-xl-2 offset-xl-0 col-lg-2 offset-lg-0 col-md-5 offset-md-1 col-sm-5 offset-sm-1 col-5 offset-1 title">
          <span>
            <div data-purecounter-start="0" data-purecounter-end="234" class = "purecounter">
              0
            </div>
          </span>
          <div>
            SATISFIED CLIENTS
          </div>
        </div>
        <div class = "col-xl-2 col-lg-2 col-md-5 col-sm-5 col-5 title">
          <span>
            <div data-purecounter-start="0" data-purecounter-end="70" class = "purecounter">
              0
            </div>
          </span>
          <div>
            AWARDS WIN
          </div>
        </div>
      </div>
    </section>
    <!-- END RANKING AND AWARDS SECTION -->

    <!-- BEGINING COLABORATE SECTION -->
    <section id = "colaborate-section" class = "container-fluid">
      <div class = "row">
        <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" id = "colaborate-background">
          <img class = "img-fluid" src = "img/newv2.png"/>
        </div>
        <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" id = "colaborate">
          <div>
            <span>
              Easy way to colaborate with our company
            </span>
            <div class = "description">
              I must explain to you how all this mistaken idea of denouncing pleasure nand praising pain was born and I will give you a complete account of the system and expoun the actual teachings of the great. Cing pleasure and praising pain was
            </div>
          </div>
          <div class = "row">
            <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 statistics">
              <div id = "profit">
                
              </div>
              <div class = "text">
                PROFIT INCREASE
              </div>
            </div>
            <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 statistics">
              <div id = "contracts">
                
              </div>
              <div class = "text">
                SUCCESSFUL CONTRACTS
              </div>
            </div>
            <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 statistics">
              <div id = "management">
                
              </div>
              <div class = "text">
                PROJECT MANAGEMENT
              </div>
            </div>
          </div>
          <button class = "more-about-us-button hvr-grow">
            MORE ABOUT US
          </button>
        </div>
      </div>
    </section>
    <!-- END COLABORATE SECTION -->

    <!-- BEGINING SERVICES SECTION -->
    <section id = "services-section" class = "container-fluid">
      <div class = "row">
        <div class = "col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12" id = "services-text-button">
          <div class = "title">
            <span>
              We make future in consulting
            </span>
            I must explain to you how all this mistaken idea of denouncing pleasure nand praising pain was born and I will give you a complete account of the system and expoun the actual teachings of the great. Cing pleasure and praising pain was
          </div>
          <div class = "subtitle">
            <div class = "icons">
              <i class="fa fa-diamond" aria-hidden="true"></i>
            </div>
            <div>
              <span>
                Financial Services Consulting
              </span>
              I must explain to you how all this mistaken idea of denouncing pleasure nand aising in was born and give you a complete.
            </div>
          </div>
          <div class = "subtitle">
            <div class = "icons">
              <i class="fa fa-life-ring" aria-hidden="true"></i>
            </div>
            <div>
              <span>
                Company Management
              </span>
              I must explain to you how all this mistaken idea of denouncing pleasure nand aising in was born and give you a complete.
            </div>
          </div>
          <button class = "services-button hvr-grow">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            SERVICES
          </button>
        </div>
        <div class = "col-xl-6 col-lg-6 col-md-5 col-sm-12 col-12" id = "services-background">
          <img class = "img-fluid" src = "img/services.jpg"/>
        </div>
      </div>
    </section>
    <!-- END SERVICES SECTION -->

    <!-- BEGINING STAFF SECTION -->
    <section id = "staff-section">
      <div class = "col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 col-12 title">
        We are Professionals of Management and Strategy Planning
      </div>
      <div class = "container">
        <div class = "row">
          <div class = "col-xl-4 offset-xl-0 col-lg-4 offset-lg-0 col-md-4 offset-md-0 col-sm-10 offset-sm-1 staff-members">
            <img class = "img-fluid" src = "img/staff1-removebg-preview.png"/>
            <div class = "description">
              <span>
                Samantha Fox
              </span>
              Chief Economist of LeGrand Securities
            </div>
          </div>
            <div class = "col-xl-4 offset-xl-0 col-lg-4 offset-lg-0 col-md-4 offset-md-0 col-sm-10 offset-sm-1 staff-members">
              <img class = "img-fluid" src = "img/staff2-removebg-preview.png"/>
              <div class = "description">
                <span>
                  Samantha Fox
                </span>
                Chief Economist of LeGrand Securities
              </div>
            </div>
            <div class = "col-xl-4 offset-xl-0 col-lg-4 offset-lg-0 col-md-4 offset-md-0 col-sm-10 offset-sm-1 staff-members">
              <img class = "img-fluid" src = "img/staff3-removebg-preview.png"/>
              <div class = "description">
                <span>
                  Roger Simmons
                </span>
                Chief Economist of LeGrand Securities
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- END STAFF SECTION -->

    <!-- BEGINING REVIEWS SECTION -->
    <section id = "reviews-section" class = "container-fluid">
      <div class = "title-subtitle">
        <span>
          What Clients Say
        </span>
        Eliminate your management and support
      </div>
      <div class = "row">
          <div class = "col-lg-4 col-md-4 col-sm-12 col-12 photos">
            <div class = "text">
              I must explain to you how all this mistaken idea of denouncing pleasure nand praising pain was born and I will give you a complete account of the system and expoun the actual teachings of the great. Cing pleasure and praising pain was
            </div>
            <div class = "image">
              <img class = "img-fluid" src = "img/review-removebg-preview.png"/>
            </div>
            <div class = "name-function">
              <span>
                Bryan Smith
              </span>
              Chief Economist, Morgan CO
            </div>
          </div>
          <div class = "col-lg-4 col-md-4 col-sm-12 col-12 photos">
            <div class = "text">
              I must explain to you how all this mistaken idea of denouncing pleasure nand praising pain was born and I will give you a complete account of the system and expoun the actual teachings of the great. Cing pleasure and praising pain was
            </div>
            <div class = "image">
              <img class = "img-fluid" src = "img/review-removebg-preview.png"/>
            </div>
            <div class = "name-function">
              <span>
                Bryan Smith
              </span>
              Chief Economist, Morgan CO
            </div>
          </div>
          <div class = "col-lg-4 col-md-4 col-sm-12 col-12 photos">
            <div class = "text">
              I must explain to you how all this mistaken idea of denouncing pleasure nand praising pain was born and I will give you a complete account of the system and expoun the actual teachings of the great. Cing pleasure and praising pain was
            </div>
            <div class = "image">
              <img class = "img-fluid" src = "img/review-removebg-preview.png"/>
            </div>
            <div class = "name-function">
              <span>
                Bryan Smith
              </span>
              Chief Economist, Morgan CO
            </div>
          </div>
      </div>
    </section>
    <!-- END REVIEWS SECTION -->

    <!-- BEGINING NEWS SECTION -->
    <section id = "news-section">
      <div class = "news-title">
        News & Views
      </div>
      <div class = "container">
        <div class = "row">
          <div class = "col-lg-4 col-md-4 col-sm-12 col-12">
            <img class="img-fluid" src="img/news1.png"/>
            <div class = "subtitle">
              investment management
            </div>
            <div class = "title smecherie">
              Questions Interns are Dying To Ask but Don't
            </div>
            <div class = "date">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              August 22 2016    ,
              <i class="fa fa-commenting-o" aria-hidden="true"></i>
              22
            </div>
          </div>
          <div class = "col-lg-4 col-md-4 col-sm-12 col-12">
            <img class="img-fluid" src="img/news2.png"/>
            <div class = "subtitle">
              wealth management
            </div>
            <div class = "title">
              Must explain to you how all this mistaken idea of denouncing pleasure
            </div>
            <div class = "date">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              August 22 2016    ,
              <i class="fa fa-commenting-o" aria-hidden="true"></i>
              22
            </div>
          </div>
          <div class = "col-lg-4 col-md-4 col-sm-12 col-12">
            <img class="img-fluid" src="img/news3.png"/>
            <div class = "subtitle">
              news & events
            </div>
            <div class = "title">
              Give you a complete account of the system, and expound the actual
            </div>
            <div class = "date">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              August 22 2016    ,
              <i class="fa fa-commenting-o" aria-hidden="true"></i>
              22
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END NEWS SECTION -->

    <!-- BEGINING REQUEST SECTION -->
    <section id = "request-section" class = "container-fluid">
      <div class = "row">
        <div class = "col-xl-7 col-lg-7 col-md-7 col-sm-8 col-8 title-subtitle">
          <div class = "title">
            We are leaders on management market
          </div>
          I must explain to you how all this mistaken idea of denouncing
        </div>
        <button class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 hvr-grow">
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
          Make Request
        </button>
      </div>
    </section>
    <!-- END REQUEST SECTION -->

    <!-- BEGINING FOOTER SECTION -->
    <footer id = "footer-section" class = "container-fluid">
      <div class = "row">
        <div class = "col-xl-3 offset-xl-1 col-lg-4 col-md-4 col-sm-6 col-6 offset-xs-2 padding">
          <div>
            <img class = "img-fluid" src = "img/logo.png"/>
          </div>
          <div class = "left-side">
            <div class = "description">
              I must explain to you how all this mistaken idea of denouncing
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
            Must explain to you how all this mistaken idea of denouncing pleasure
          </div>
          <div class = "subtitle">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            August 22, 2016
          </div>
          <div class = "news-title">
            Praising pain was born and I will give you a complete account
          </div>
          <div class = "subtitle">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            August 22, 2016
          </div>
        </div>
        <div class = "col-xl-4 offset-xl-1 col-lg-5 col-md-3 col-sm-12 col-12 subscription">
          <div class = "subscribe-title">
            Subscribe
          </div>
            <form action = "Index.php" method = "POST">
              <input type="email" placeholder="Email Address" name = "email"/>
              <button class = "hvr-grow" type = "submit">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                Subscribe
              </button>
            </form>
            <?php
              $server = "localhost";
              $user = "root";
              $pass = "";
              $db = "website";

              $email = $_POST["email"];
              $connect = new mysqli($server, $user, $pass, $db);
              $sql = "INSERT INTO newsletter(email) VALUES ('".$email."')";
              if($connect->query($sql) === true){
                echo "Mesajul a fost salvat";
              }
            ?>
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
      nume = "radu";
      salut = "salut ma numesc '"+ nume + "' si am 10 ani";
      console.log(salut);
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

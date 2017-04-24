<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal Website">
    <meta name="author" content="Kaitlyn Shields">
    <title>Kaitlyn Shields</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/stylish-portfolio.css" rel="stylesheet">
  </head>
  <body>
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
      <img src="./img/hamburger.png" class="menu-button">
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
          <img src="./img/hamburger.png" class="menu-button">
        </a>
        <li class="sidebar-brand">
          <a href="#top" onclick=$("#menu-close").click();>Kaitlyn Shields</a>
        </li>
        <li>
          <a href="#top" onclick=$("#menu-close").click();>Home</a>
        </li>
        <li>
          <a href="#about" onclick=$("#menu-close").click();>About Me</a>
        </li>
        <li>
          <a href="#pitt-experience" onclick=$("#menu-close").click();>H2P</a>
        </li>
        <li>
          <a href="#adventures" onclick=$("#menu-close").click();>My Adventures</a>
        </li>
        <li>
          <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
        </li>
      </ul>
    </nav>

    <header id="top" class="header">
      <div class="text-vertical-center">
        <h1>Kaitlyn Shields</h1>
          <span id="subtitle-header">
            Computer Engineer//Student Leader//Food Lover//Unicorn Enthusiast
          </span>
          <br>
          <br>
          <a href="#contact" class="btn btn-dark btn-lg">Contact</a>
          <a href="#resume" class="btn btn-dark btn-lg">Resume</a>
      </div>
    </header>

    <section id="about" class="about">
      <div class="container">
          <div class="col-lg-9 col-centered">
            <h2 class="text-center">Hello, its me.</h2>
            <br>
            <img src="./img/it_me.jpg" class="me-icon" alt="photo of me">
            <br>
              <p class="about">
                Welcome to my site! If you are here looking for Kaitlyn (aka
                Kait) Shields, then you are in the right place. I am 22 year old
                studying Computer Engineering at the University of Pittsburgh.
                This school has become a second home to be in these past four
                years, but soon enough, I will be moving on to bigger and better
                things in the real world. But first, let me tell you a little
                bit about my college experience!
              </p>
              <p class="about">
                Freshman year, I enrolled in the Swanson School of Engineering
                as a Chemical Engineer; however, though an Introduction to
                Engineering class, I was introduced to the world of coding and
                computing and haven't turned back since! Though still very new
                and unusal to me, I soon became emersed in the knowlege of Pitt's
                Computer Science and Engineering community. Since then, I have been
                constantly working on broadening my knowlege by mastering different
                languages, studying different computer elements/stuctures, practicing
                with hardware design tools, and applying my skills in and out of
                the classroom in order to become the best CoE I possibly can.
              </p>
              <p class="about">
                One of highlights of my college experience thus far, was the
                time I have spent at my Co-Op (Cooperative Education). By the
                time I graduate, I will have completed three semesterly rotations
                as a full time employee at a company in my field. I have worked
                two out of my three rotations with an outstanding company called
                Compunetix. While there, I have worked on application and web
                development. I helped produce an app that connects customers
                to conference calls in seconds. The app is currently in the
                App Store and the Google Play Store and is used my many of
                Compunetix's customers. I also worked on some web development
                for their conference record and billing services.
              </p>
              <p class="about">
                As I approach graduation, I am finishing up my course load with
                alot of awesome and higher level classes. Currently, I am taking
                Software Engineering, Advanced Digital Design, Programming for
                Web Apps, and Intro to Computer Architecture. They're all really
                cool classes and I've been doing projects in each that are furthering
                both my technical and communication skills.
              </p>
              <p class="about">
                I am very eager to get started on my new career as a Computer Engineer
                and would love for anyone visiting this site to send me any advice,
                input, or opportunities! My contact info can be found at the bottom
                of the page.
              </p>
          </div>
      </div>
    </section>
    <section id="pitt-experience" class="experience">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-10 col-lg-offset-1">
            <h2>My Pitt Experience</h2>
            <hr class="medium">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="experience-item">
                  <h4>Delta Phi Epsilon</h4>
                  <p>
                    My sorority has helped shape me into the person I am today and
                    has given me so many wonderful opportunities.I have learned so
                    much from this sisterhood and don't know whatI would do without
                    them. Check out some of the awesome things that my Chapter has done!
                  </p>
                  <a href="http://pittdphie.tumblr.com"
                  target="_blank" class="btn btn-light">Pitt DPhiE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="experience-item">
                  <h4>Pitt Dance Marathon</h4>
                  <p>
                    PDM is something I lookforward to every year.  I've danced 8,
                    16, and 24 hours and past marathons and plan on dancing again
                    this year! We raise money for Children's Miracle Network and
                    it's one of the most rewarding  experiences I've had here at Pitt.
                  </p>
                  <a href="https://pdm.pitt.edu/" target="_blank" class="btn btn-light">For The Kids!</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="experience-item">
                  <h4>PGH Food</h4>
                  <p>
                    The food in the burgh may be one of the greatest things I've
                    come across on this side of PA. From pastries, to pizza shops,
                    to brunch places, to ice creameries, my taste buds have been
                    living it up throughout my time here. Checkout my restauraunt
                    bucket-list!
                  </p>
                  <a href="./restaurant-list.php" target="_blank" class="btn btn-light">NOM-NOM</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div id="resume">
        <h2 class="text-center"> My Resume </h2>
        <hr class="medium">
        <img class="my-resume" src="./img/my-resume.jpg" alt="current resume"></img>
      </div>
    </section>

    <section id="adventures" class="adventures">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center">
              <h2>Adventure is Out There</h2>
              <hr class="small">
              <div class="row">
                <div class="col-md-6">
                  <div class="adventure-item">
                    <img class="img-adventure img-responsive" src="img/bermuda-cave.jpg"
                    alt="me in a cave">
                    <p class="img-description">
                      My sister, Megan, and I in one of Bermuda's crystal caves.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="adventure-item">
                    <img class="img-adventure img-responsive" src="img/boston-commons.png"
                    alt="me in the boston commons">
                    <p class="img-description">
                      The duck statue was one of my favorite things I saw while visiting
                      my friend in Boston. That and the chowder.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="adventure-item">
                    <img class="img-adventure img-responsive" src="img/dphie-convention.jpg"
                    alt="me at dphie's convention">
                    <p class="img-description">
                      My executive board and I were honored to recieve the the Triangle placque
                      at the Delta Phi Epsilon International Leadership Forum.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="adventure-item">
                    <img class="img-adventure img-responsive" src="img/mt-washington.png"
                    alt="me on mt. washington">
                    <p class="img-description">
                      I took my friend Ryann to see Mt. Washington at sunset while
                      she was visiting Pittsburgh.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="adventure-item">
                    <img class="img-adventure img-responsive" src="img/pitt-bowl-game.jpg"
                    alt="me at the pitt bowl game">
                    <p class="img-description">
                      My friends and I we're fortunated enough to watch Pitt lose
                      yet another bowl game this year in NYC.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="adventure-item">
                  <img class="img-adventure img-responsive" src="img/greek-banquet.jpg"
                  alt="me at the greek awards banquet">
                  <p class="img-description">
                    The Greek Week team was thrilled to place in the year long competition
                    this past year!
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="adventure-item">
                  <img class="img-adventure img-responsive" src="img/pitt-dance-marathon.jpg"
                  alt="me at PDM">
                  <p class="img-description">
                    We all had a blast at Pitt Dance Marathon supporting one of the
                    kiddos of the Children's Hospital of Pittsburgh.
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="adventure-item">
                  <img class="img-adventure img-responsive" src="img/pitt-kayak.png"
                  alt="me kayaking">
                  <p class="img-description">
                    Catch me out on the river when the sun is shining!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container" id="contact">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center">
            <h4><b>Kaitlyn Shields<b></h4>
              <p>
                University of Pittsburgh
                <br>
                Pittsburgh, PA 15213
                <br>
                (215)-520-7956
                <br>
                <a href="mailto:kes156@pitt.edu">kes156@pitt.edu</a>
                <form method="post" name="myemailform" action="my_email_form.php">
                  Name <br><input type="text" name="name"> <br>
                  Email <br><input type="text" name="email"><br>
                  Message<br><textarea name="message" ></textarea><br>
                  <input type="submit" value="Send!">
                </form>
              </p>
              <br>
              <ul class="list-inline">
                <li>
                  <a href="https://github.com/kshields14" target="_blank">
                    <img src="./img/github_icon.png" class="social-media-icon" alt="github icon">
                  </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                    <img src="./img/linkedin_icon.png" class="social-media-icon" alt="linkedin icon">
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/k8_shields/" target="_blank">
                    <img src="./img/instagram_icon.png" class="social-media-icon" alt="instagram icon">
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/k8.liz" target="_blank">
                    <img src="./img/facebook_icon.png" class="social-media-icon" alt="facebook icon">
                  </a>
                </li>
              </ul>
              <p class="text-muted">Copyright &copy; Kaitlyn Shields 2017</p>
            </div>
          </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg">To Top ^</a>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sidebar.js"></script>
  </body>

</html>

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="/js/java.js">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sophia Lynne Illustrations</title>
    <link rel = "icon" href = "./assets/dev/favicon.png" type="image/x-icon"/>
  </head>
  <body> -->

  <!-- Header Template -->
  <?php get_header(); ?>

<!-- header -->
      <header class="main_header">
        <div class="header_left">
          <img class="logo_img" src="<?php echo get_template_directory_uri(); ?>./assets/dev/transparent_logo.png" alt="logo image click for home"></a>
        </div>
<!-- nav -->
        <!-- <div class="header_right">
            <ul class="nav_ul">
              <a href="#">HOME</a></li>
              <li><a href="./portfolio.html">PORTFOLIO</a></li>
              <li><a href="./about.html">ABOUT ME</a></li>
              <li><a href="./contact.html">CONTACT ME</a></li>
            </ul>
        </div> -->
      </header>

<section class="header_right">
  <nav class="nav_ul">
      <?php
        $args = array(
          'theme_location' => 'primary'
        );
        wp_nav_menu($args);
       ?>
  </nav>
</section>
<br><br><br>
<!-- beginning of body content -->


      <div class="header_center">
        <div data-aos="zoom-out-down" data-aos-duration="1000" data-aos-delay="1000"><h1><u>WELCOME</u></h1></div>
        <br><br><br><br><br><br><br>
        <a id="link" href="./portfolio.html"><h2>Check Out My Work</h2></a>
      </div>



    <main>
      <section class="grid_container">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/rainbow.jpg" alt="rainbow">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/winter.jpg" alt="winter">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/sun.jpg" alt="sun">
      </section>

    </main>

    <br><br><br><br><br><br>

    <?php get_footer(); ?>


<!-- footer -->
<!-- <footer>
  <section class="footer_left">
    <ul>
      <li><img src="./assets/dev/behance.PNG" alt="behance logo"/><a href="https://www.behance.net/sophialynne">BEHANCE</a></li>
      <li><img src="./assets/dev/dribble.PNG" alt="dribble logo"/><a href="https://dribbble.com/Sophialynne4">DRIBBLE</a></li>
      <li><img src="./assets/dev/linked.PNG" alt="linkedin logo"/><a href="https://www.linkedin.com/in/sophia-waddell-00aa2214b/">LINKEDIN</a></li>
      <li><img src="./assets/dev/instagram.PNG" alt="instagram logo"/><a href="https://www.instagram.com/sophialynne4/">INSTAGRAM</a></li>
    </ul>
  </section>

  <section class="footer_center">
    <h2 id="bye">Thank you so much for visiting!</h2>
    <br><br>
  </section>

  <section class="footer_right">
    <ul>
      <li><a href="./index.html">HOME</a></li>
      <li><a href="./portfolio.html">PORTFOLIO</a></li>
      <li><a href="./about.html">ABOUT ME</a></li>
      <li><a href="./contact.html">CONTACT ME</a></li>
    </ul>
  </section>
  <p id="c">&copy; Sophia Lynne Illustrations</p>


</footer>


<script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <!-- </body>
</html> -->

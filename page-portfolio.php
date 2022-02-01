<!--Header -->
<?php get_header(); ?>
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




<main class="content">
  <?php
    while(have_posts()){
      the_post(); ?>
      <h1>
        <?php
        the_title();
        ?>
      </h1>
      <?php
      // the_content();
    }
  ?>
  <br><br><br>
  <div class="port_options">
      <ul class="port_ul">
        <div data-aos="fade-up" data-aos-delay="1000"><li class="chosen"><a href="#">digital art<a></li>
        <li><a href="./traditional.html">traditional art<a></li>
        <!-- <li><a href="#">animations<a></li></div> -->
      </ul>


      <section class="grid_container">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/winter.jpg" alt="winter">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/rainbow.jpg" alt="rainbow">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/sun.jpg" alt="sun">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/pink.jpg" alt="pink">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/orange.jpg" alt="orange">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/yellow.jpg" alt="yellow">
        <img class="grid_img"src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/fall.jpg" alt="fall">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/alicia.jpg" alt="alicia">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/emilia.jpg" alt="emilia">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/purple_portrait.jpg" alt="purple portrait">
        <img class="grid_img"src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/miley.jpg" alt="miley">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/turtleneck.jpg" alt="turtleneck">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/uneven.jpg" alt="green-uneven">
        <img class="grid_img" src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/earrings.jpg" alt="earrings">
        <img class="grid_img"src="<?php echo get_template_directory_uri(); ?>./assets/portfolio/space.jpg" alt="outerspace">


      </section>
</main>


<!-- Footer -->
<?php get_footer(); ?>

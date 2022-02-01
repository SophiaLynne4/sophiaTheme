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

  <!-- <div data-aos="zoom-out-down" data-aos-duration="1000" data-aos-delay="1000"><h1>About Me</h1></div> -->

<div class="about_me">
  <img class="photo_me" src="<?php echo get_template_directory_uri(); ?>./assets/dev/profile_pic.jpg" alt="My Photo">

  <section class="me">
    <article>
      <p>Hi! My names Sophia. I'm a Illustrator and Graphic Designer. I believe in the statement, "work hard now so you can work less later". My perfect day would be at the beach, book in one hand, sketchbook in the other, while simultaneously trying to eat sushi. However, I think you will know everything you need to know about me once you hear I'm an INFJ, a middle-child, and a Cancer.</p>
    </article>
</section>

</div>

</main>


<!-- Footer -->
<?php get_footer(); ?>

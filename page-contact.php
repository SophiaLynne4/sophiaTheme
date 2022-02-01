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

   <!-- <section>
   <ul> -->
   <?php
     // $num = 0;
     //
     // while($num < 5){
     //   echo '<li>List Item: #' . $num . '</li>';
     //   $num++;
     // }
   ?>
   <!-- </ul>
   </section> -->


<!-- To show content that you made on wordpress page/post -->
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



   <!-- <div data-aos="zoom-out-down" data-aos-duration="1000" data-aos-delay="1000"><h1>Contact Me</h1></div> -->
   <br><br><br>
   <p class="center_text" id="info">If you want to get in contact with me, here's my information:</p>
   <br><br>
   <!-- <p><u>Email:</u> -->
     <!-- <br> sophialynne4@gmail.com</p> -->
   <br>
   <div class="socials">

   <p><u>Socials:</u></p>
   <a href="https://www.behance.net/sophialynne"><p>Behance</p></a>
   <a href="https://www.instagram.com/sophialynne4/"><p>Instagram</p></a>
   <a href="https://www.linkedin.com/in/sophia-waddell-00aa2214b/"><p>Linkedin</p></a>
   <a href="https://dribbble.com/Sophialynne4"><p>Dribble</p></a>

 </div>


 <br><br><br><br>

   <form  class="form" action="#" target="_blank" method="post">
       <legend id="personal"><u>Personal Information</u></legend>
       <br><br>
   <!--First and Last Name -->
   <div class="information">

     <label for="f_name">First Name:</label>
     <input type="text" name="f_name"/>
   </br> </br>
     <label for="l_name">Last Name:</label>
     <input type="text" name="l_name">
   </br></br>
   <!-- Topic -->
     <label for="topic">What do you want to talk about?</label>
   </br>
     <input type="radio" name="topic" value="Social Media Pack"/> Social Media Pack
   </br>
     <input type="radio" name="topic" value="Illustrations"/> Illustration
   </br>
     <input type="radio" name="topic" value="Just wanted to say 'hi'"/> Just wanted to say "hi" :)
   </br>
     <input type="radio" name="topic" value="other"/> Other
   </br></br>
   <!-- what Im doing -->
     <label for="cheeses">What do you need done for you?</label>
   </br>
     <input type="checkbox" name="cheese1" value="logo"/> Logo
   </br>
     <input type="checkbox" name="cheese2" value="illustration"/> Illustration
   </br>
     <input type="checkbox" name="cheese3" value="website"/> Website
   </br>
     <input type="checkbox" name="cheese4" value="none"/> None
   </br>
     <input type="checkbox" name="cheese4" value="other"/> Other
   </br></br>

   <!-- Experience -->
     <label for="experience">Explain what you want</label>
   </br>
     <textarea name="experience">...</textarea>
   </br></br>

   <!-- Submit -->
     <input type="submit" name="submit" value="Submit"/>
     <input type="reset" name="reset"/>
   </form>
 </div>

 </main>




<!-- Footer -->
<?php get_footer(); ?>

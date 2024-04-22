<?php get_header(); ?>
        
        <div id="hero-section">
            
                  <img id='hero' src="<?php echo get_stylesheet_directory_uri(); ?>/images/talking.png" alt="hero image">
          <div class="hero-content">
            <h1>We build brands and communities</h1>
            <a href="contact.php" class="cta-button1">Get in Touch →</a>
          </div>
        </div>


        <main>

            <h2><?php single_post_title();?> </h2>
            <?php 
if ( have_posts() ) : 
 while ( have_posts() ) : the_post(); 
  the_content(); 
 endwhile; 
else : 
 _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
?> 
            
            <div class="slideshow-container">
                <div class="slides-wrapper"> 
                  <div class="mySlides fade">
                
                    <img id="slideshow-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2p1.png" style="width:100%">
                    
                  </div>
                  
                  <div class="mySlides fade">
                    
                    <img id="slideshow-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2p2.png" style="width:100%">
                    
                  </div>
                  
                  <div class="mySlides fade">
               
                    <img id="slideshow-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2p3.png" style="width:100%">
                    
                  </div>
                  <div class="mySlides fade">
               
                    <img id="slideshow-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2p4.png" style="width:100%">
                    
                  </div>
                  <div class="mySlides fade">
               
                    <img id="slideshow-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2p5.png" style="width:100%">
                    
                  </div>
                  <div class="mySlides fade">
               
                    <img id="slideshow-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2p6.png" style="width:100%">
                    
                  </div>
                </div>
              </div>


              
              <div class="testimonials-section">
                <h2 id="testimonial1">TESTIMONIALS</h2>
                
                <div class="testimonial-slider">
                  <button class="slide-arrow left-arrow" onclick="moveSlide(-1)">&#10094;</button>
                  <div class="testimonial active" >
                    <p> "Mi Amiga: Engaging platform fostering meaningful connections, sparking joy daily."</p>
                    <footer id="footer1">-Jamie</footer>
                  </div>

                  <div class="testimonial">
                    <p> "Fantastic interface, seamless navigation, Mi Amiga truly connects people."</p>
                    <footer id="footer1">-Ryan</footer>
                  </div>
                  
                  <button class="slide-arrow right-arrow" onclick="moveSlide(1)">&#10095;</button>
                </div>
              </div>
                
            
              <section id="services-section">
                <h2>SERVICES</h2>
    
                <details>
                  <summary>Social Media Management</summary>
                  <p class='p-font'>ssssWe work with businesses to develop a customized social media strategy that aligns with their goals and target audience. Our team will help create a plan for content creation, posting schedule, and advertising campaigns.</p>
                </details>
    
                <details>
                  <summary>Media Buying</summary>
                  <p class='p-font'>Our team of expert content creators will work with businesses to create visually appealing and engaging content for their social media channels. This includes copywriting, graphic design, and video/image production.</p>
                </details>
    
                <details>
                    <summary>Community Management</summary>
                    <p class='p-font'>We offer community management services to help businesses effectively engage with their followers and build relationships. This includes responding to comments and messages and fostering a positive online community through advanced engagement practices.</p>
                  </details>
    
                  <details>
                    <summary>Copywriting</summary>
                    <p class='p-font'>Writing copy for advertisements across various platforms such as social media, Google Ads, print media, and more. This includes creating attention-grabbing headlines, persuasive body text, and enticing offers.</p>
                  </details>
    
                  <details>
                    <summary>Email Marketing</summary>
                    <p class='p-font'>Crafting compelling content for websites, including homepage copy, product or service descriptions, about pages, and landing pages. This involves using persuasive language, SEO optimization, and a clear call-to-action.</p>
                  </details>
    
                  <details>
                    <summary>Go to Market Strategy</summary>
                    <p class='p-font'>We specialize in creating and managing social media advertising campaigns that target specific audiences and drive conversions. Our team is experienced in creating effective ads on platforms like Facebook, Instagram, TikTok, Twitter, Pinterest and LinkedIn.</p>
                  </details>
                  </section>
       
       


                  <div class="pink-rect">
                    <div class="footer-text">
                        Ready to speak with a social media expert?
                    </div>
                    <a href="contact.php" button class="footer-button"><h2>Contact Now!</h2></a>
                </div>
        
    </main>

    <?php
    include 'footer.php';
    ?>
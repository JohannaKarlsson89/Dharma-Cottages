<?php
get_header();
?>

         <?php
         if (have_posts()) :
            while (have_posts()) :
               the_post();
               ?>
               <article class="news">
                   <h2><?php the_title(); ?></h2>
                   <p><?php the_time(); ?></p>
               <?php
               the_content();
               ?>
               </article>
               <?php
            endwhile;
         endif;
         //get_sidebar();
         ?>
 
<?php
get_footer();
?>
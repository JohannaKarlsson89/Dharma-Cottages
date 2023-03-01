<?php
/*Template name: Contact */
get_header();
?>
<div class="main-content">

   <?php
   if (is_active_sidebar('start_puff')) :  ?>
      <div id="start_puff">
         <?php dynamic_sidebar('start_puff') ?>
      </div>
      <?php
   endif;
   //The query
   $args = array('category_name' => 'aboutus');
   $the_query = new WP_Query($args);
   //The loop for the content
   if ($the_query->have_posts()) {
      while ($the_query->have_posts()) {
         $the_query->the_post();
      ?>

         <div class="cottages-container">
            <div class='row'>
               <div class='column'>
                  <article>
                     <div class="text-cottages">
                        <div class="text-content">
                           <h2>
                              <?= get_the_title(); ?>
                           </h2>
                           <p>
                              <?= the_content(); ?>
                           </p>
                        </div>
                     </div>
               </div>

               <?php
               if (has_post_thumbnail()) {
               ?>

                  <div class='column'>
                     <div class="img-cottages">
                        <?php
                        the_post_thumbnail(array(500, 800));
                        ?>
                     </div>
                  </div>
               <?php
               }
               ?>

               </article>
            </div>
         </div>
   <?php
      }
   }
   ?>

</div>



<?php

get_footer();
?>
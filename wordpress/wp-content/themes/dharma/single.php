<?php
get_header();
?>
<div class="wrapper">

    <div class="text_wrapper">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <div class="cottages-container">
                    <div class='row'>
                        <div class='column'>
                            <article>
                                <div class="text-cottages">
                                    <div class="text-content">
                                        <h2>
                                            <?= the_title(); ?>
                                        </h2>
                                        <i>
                                            <?php (the_time('Y-m-d \k\l H:i')); ?>
                                        </i>
                                        <br>
                                        <?php
                                        the_content();
                                        ?>
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
            endwhile;
        endif;
                ?>
                        </article>
                </div>
            </div>

    <?php
    //get_sidebar();
    get_footer();
    ?>
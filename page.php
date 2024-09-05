<?php 
/**
 * The page template file
 * 
 * @package Day Six theme
 */


get_header(); ?>
<main>
    <!-- GRADIENT -->
    <div class="w-full bg-gradient-to-b from-black to-[#3D4343]">
        <?php the_content(); ?>
    </div>
</main>
<?php get_footer(); ?>
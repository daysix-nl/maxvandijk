<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block hamburger-nonactive bg-black' ); ?>>
<header class="w-full px-[20px] xl:px-[35px] bg-black fixed top-0 left-0 right-0 z-[9999]">
    <section class="w-full flex justify-end">
        <div class="h-[40px] flex items-center space-x-[20px]">
            <a href="https://www.google.nl/maps/place/Cliffordweg+10,+3646+AG+Waverveen/@52.222249,4.9004676,17z/data=!3m1!4b1!4m6!3m5!1s0x47c674f959b67d5b:0x45ae7d9826c3d147!8m2!3d52.222249!4d4.9030425!16s%2Fg%2F11bw4pf8tq?hl=nl&entry=ttu&g_ep=EgoyMDI0MDkwMi4xIKXMDSoASAFQAw%3D%3D"  class="text-white font-rubik font-normal text-13 hidden lg:flex items-center hover" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="10.993" height="17.007" viewBox="0 0 10.993 17.007" class="mr-[8px]">
                <path id="Shape_69" data-name="Shape 69" d="M5.172,17a.614.614,0,0,1-.433-.177A17.467,17.467,0,0,1,0,5.363,5.441,5.441,0,0,1,5.5-.007a5.44,5.44,0,0,1,5.5,5.37c0,6.7-5.2,11.3-5.418,11.487A.611.611,0,0,1,5.172,17ZM5.5,1.179A4.239,4.239,0,0,0,1.215,5.363,16.362,16.362,0,0,0,5.2,15.545C6.419,14.308,9.781,10.43,9.781,5.363A4.239,4.239,0,0,0,5.5,1.179ZM5.5,8.1a2.974,2.974,0,0,1-3-2.935,2.973,2.973,0,0,1,3-2.934,2.973,2.973,0,0,1,3,2.934A2.973,2.973,0,0,1,5.5,8.1Zm0-4.683a1.749,1.749,0,1,0,1.79,1.748A1.771,1.771,0,0,0,5.5,3.418Z" transform="translate(-0.001 0.007)" fill="#fff"/>
                </svg>
                Cliffordweg 10 | 3646 AG | Waverveen
            </a>
            <a href="tel:+31 (0)6 - 36 17 64 28" class="text-white font-rubik font-normal text-13 hidden lg:flex items-center hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.936" height="13.966" viewBox="0 0 13.936 13.966" class="mr-[8px]">
                <path id="Path_19253" data-name="Path 19253" d="M-487.166,498.923a6.01,6.01,0,0,0,3.62,3.619,1.326,1.326,0,0,0,1.531-.835h0a1.3,1.3,0,0,1,2.158-.487l1.949,1.949a1.39,1.39,0,0,1,0,1.879l-1.323,1.322c-1.392,1.392-5.081-.139-8.353-3.411s-4.733-6.961-3.411-8.353l1.323-1.323a1.39,1.39,0,0,1,1.879,0l1.949,1.949a1.3,1.3,0,0,1-.487,2.158h0A1.262,1.262,0,0,0-487.166,498.923Z" transform="translate(491.48 -492.919)" fill="#fff"/>
                </svg>
                +31 (0)6 - 36 17 64 28
            </a>
            <a href="mailto:info@max-van-dijk.nl" class="text-white font-rubik font-normal text-13 hidden lg:flex items-center hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.204" height="13.353" viewBox="0 0 18.204 13.353" class="mr-[8px]">
                <path id="Shape_39" data-name="Shape 39" d="M16.51,13.652H1.693A1.661,1.661,0,0,1,0,12.03V1.921A1.661,1.661,0,0,1,1.693.3H16.51A1.66,1.66,0,0,1,18.2,1.921V12.03A1.66,1.66,0,0,1,16.51,13.652ZM1.27,2.123V12.03a.415.415,0,0,0,.423.406H16.51a.415.415,0,0,0,.424-.406V2.123L9.483,7.478a.664.664,0,0,1-.762,0Zm1.272-.608L9.1,6.229l6.56-4.714Z" transform="translate(0.001 -0.299)" fill="#fff"/>
                </svg>
                info@max-van-dijk.nl
            </a>
            <div class="flex items-center space-x-[20px]">
                <a href="https://www.facebook.com/Max-van-dijk-groen-grond-infra-100418558489974" class="hover" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7.748" height="14.733" viewBox="0 0 7.748 14.733">
                        <path id="Path_1" data-name="Path 1" d="M6.071.617c.394,0,.791.021,1.183.039.256.011.513.047.753.073L7.989,3.1H7.8c-.26,0-.521,0-.781,0-.2,0-.391,0-.586.008-.629.021-1.091.257-1.123,1.042-.02.566-.034,1.814-.035,1.88.033,0,.654,0,1.279,0,.313,0,.618,0,.831,0h.508c-.127.911-.244,1.785-.371,2.665H5.276l-.05,6.655H2.466l.051-6.666H.26l.02-2.65H2.547v-.2c0-.534,0-1.068.018-1.6a6.615,6.615,0,0,1,.086-1.016A3.014,3.014,0,0,1,3.862,1.237,3.471,3.471,0,0,1,5.851.619Z" transform="translate(-0.26 -0.617)" fill="#fff"/>
                    </svg>
                </a>
                <!-- <a href="#" class="hover" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.042" height="13.038" viewBox="0 0 13.042 13.038">
                        <path id="Union_2" data-name="Union 2" d="M107.938,14.5a21.2,21.2,0,0,1-3.624-.193,3.258,3.258,0,0,1-2.6-2.843,36.722,36.722,0,0,1,.123-7.321,3.321,3.321,0,0,1,2.842-2.534,24.678,24.678,0,0,1,3.268-.148c1.115,0,2.365.029,3.184.074a3.605,3.605,0,0,1,2.381.975,3.432,3.432,0,0,1,1.04,2.225,41.448,41.448,0,0,1-.142,7.012,3.335,3.335,0,0,1-2.879,2.608A32.283,32.283,0,0,1,107.938,14.5Zm.231-11.857c-1.376,0-2.616.038-3.159.1A2.24,2.24,0,0,0,102.927,4.7a44.445,44.445,0,0,0-.045,6.583,2.1,2.1,0,0,0,1.609,1.843,22.074,22.074,0,0,0,3.507.193c1.349,0,2.7-.041,3.216-.1a2.235,2.235,0,0,0,2.088-1.975,47.038,47.038,0,0,0,.081-6.4,2.2,2.2,0,0,0-1.953-2.079A29.186,29.186,0,0,0,108.169,2.64Zm-.083,8.685a3.312,3.312,0,0,1-3.316-3.346,3.375,3.375,0,0,1,3.363-3.342h.008a3.314,3.314,0,0,1,3.316,3.347A3.377,3.377,0,0,1,108.086,11.325Zm.043-5.51a2.188,2.188,0,0,0-2.18,2.142,2.142,2.142,0,0,0,2.125,2.183h.019A2.191,2.191,0,0,0,110.275,8a2.142,2.142,0,0,0-2.126-2.184Zm3.48-.523a.783.783,0,0,1,.007-1.566h.009a.768.768,0,0,1,.549.229.776.776,0,0,1,.226.557A.791.791,0,0,1,111.61,5.292Z" transform="translate(-101.595 -1.458)" fill="#fff"/>
                    </svg>
                </a> -->
                <a href="tel:+31 (0)6 - 36 17 64 28" class="lg:hidden hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.936" height="13.966" viewBox="0 0 13.936 13.966" class="mr-[8px]">
                        <path id="Path_19253" data-name="Path 19253" d="M-487.166,498.923a6.01,6.01,0,0,0,3.62,3.619,1.326,1.326,0,0,0,1.531-.835h0a1.3,1.3,0,0,1,2.158-.487l1.949,1.949a1.39,1.39,0,0,1,0,1.879l-1.323,1.322c-1.392,1.392-5.081-.139-8.353-3.411s-4.733-6.961-3.411-8.353l1.323-1.323a1.39,1.39,0,0,1,1.879,0l1.949,1.949a1.3,1.3,0,0,1-.487,2.158h0A1.262,1.262,0,0,0-487.166,498.923Z" transform="translate(491.48 -492.919)" fill="#fff"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <hr class="broder-[2px] border-[#FFDD00]">
    <section class="h-[80px] w-full flex justify-between items-center">
        <a href="/" class="h-[42px] lg:h-[42px] xl:h-[48px]">
          <?php include get_template_directory() . '/componenten/logo.php'; ?>
        </a>
        <div class="flex space-x-[25px] items-center">
            <a href="/over-ons/" class="text-white text-16 font-rubik font-medium hidden lg:block hover">Over ons</a>
            <a href="/projecten/" class="text-white text-16 font-rubik font-medium hidden lg:block hover">Projecten</a>
            <div class="w-[3px] rounded-[8px] bg-[#7F8A8B] h-[22px] hidden lg:block"></div>
            <?php
                $loop = new WP_Query( array(
                    'post_type' => 'dienst',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'ASC'
                )
                );
                ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                <a href="<?php the_permalink();?>" class="text-white text-16 font-rubik font-medium hidden lg:block hover"><?php the_title();?></a>
            <?php endwhile; wp_reset_query(); ?>
            <a href="/contact/" class="text-black text-16 font-rubik font-medium h-[42px] px-[20px] items-center bg-[#FFE500] button rounded-[10px] hidden lg:flex">Contact</a>
            <div id="nav-icon" class="lg:hidden">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </section>
</header>

<div class="bg-black h-[120px]"></div>

<div id="hamburger-menu" class="fixed top-0 left-0 right-0 h-full bg-black lg:hidden z-[9998]">
    <div class="pt-[121px]">
        <div class="container h-[calc(100dvh-121px)] flex items-center">
            <div class="w-full grid gap-[30px] md:gap-[30px] text-center md:mb-[40px]">
                <a href="/over-ons/" class="text-white text-22 leading-22 font-rubik font-medium fade-menu-item">Over ons</a>
                <a href="/projecten/" class="text-white text-22 leading-22 font-rubik font-medium fade-menu-item">Projecten</a>
                <div class="w-[22px] rounded-[8px] bg-[#7F8A8B] h-[3px] mx-auto fade-menu-element"></div>
                <?php
                $loop = new WP_Query( array(
                    'post_type' => 'dienst',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'ASC'
                )
                );
                ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                    <a href="<?php the_permalink();?>" class="text-white text-22 leading-22 font-rubik font-medium fade-menu-item"><?php the_title();?></a>
                <?php endwhile; wp_reset_query(); ?>
                <a href="/contact/" class="text-black text-16 font-rubik font-medium h-[42px] px-[20px] items-center bg-[#FFE500] rounded-[10px] flex w-fit mx-auto fade-menu-item">Contact</a>
            </div>
        </div>
    </div>
</div>

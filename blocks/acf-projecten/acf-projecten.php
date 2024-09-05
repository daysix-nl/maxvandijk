<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
 <!-- PROJECTEN -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> element-fade-in">
    <div class="w-full max-w-[1840px] mx-auto px-[25px] xl:px-[35px] grid-cols-3 gap-[30px] hidden lg:grid grow-item">
        <div class="w-full grid gap-[30px]">
            <?php
                $loop = new WP_Query( array(
                    'post_type' => 'project',
                    'posts_per_page' => 2,
                    'orderby' => 'date',
                    'order' => 'DECS'
                )
                );
                ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
            <a href="<?php the_permalink();?>" class="w-full aspect-[16/10] rounded-[10px] overflow-hidden relative">
                <div class="absolute bottom-[20px] left-[20px] right-[20px] lg:left-[25px] lg:right-[25px] z-[4]">
                    <div class="w-full">
                        <h3 class="text-24 leading-34 font-rubik font-bold text-[#FFE500]"><?php the_title();?></h3>
                        <p class="flex items-center text-white text-16 leading-26 font-rubik font-medium">Lees meer 
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.432" height="10.167" viewBox="0 0 10.432 10.167" class="mlicon">
                            <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M4.435,3.328l.517-.517a.556.556,0,0,1,.789,0l4.526,4.524a.556.556,0,0,1,0,.789L5.741,12.651a.556.556,0,0,1-.789,0l-.517-.517a.559.559,0,0,1,.009-.8L7.25,8.662H.559A.557.557,0,0,1,0,8.1V7.358A.557.557,0,0,1,.559,6.8H7.25L4.445,4.127A.555.555,0,0,1,4.435,3.328Z" transform="translate(0 -2.647)" fill="#ffe500"/>
                            </svg>
                        </p>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-[200px] md:h-[127px] lg:h-[279px] bg-gradient-to-b from-transparent to-black z-[3]"></div>
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Project: <?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
            </a>
            <?php endwhile; wp_reset_query(); ?>  
        </div>
        <div class="w-full rounded-[10px] overflow-hidden">
            <?php
            $loop = new WP_Query( array(
                'post_type' => 'project',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DECS',
                'offset' => 2,
            )
            );
            ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
            <a href="<?php the_permalink();?>" class="w-full h-full rounded-[10px] overflow-hidden relative">
                <div class="absolute bottom-[20px] left-[20px] right-[20px] lg:left-[25px] lg:right-[25px] z-[4] overflow-hidden">
                    <div class="w-full">
                        <h3 class="text-24 leading-34 font-rubik font-bold text-[#FFE500]"><?php the_title();?></h3>
                        <p class="flex items-center text-white text-16 leading-26 font-rubik font-medium">Lees meer 
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.432" height="10.167" viewBox="0 0 10.432 10.167" class="mlicon">
                            <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M4.435,3.328l.517-.517a.556.556,0,0,1,.789,0l4.526,4.524a.556.556,0,0,1,0,.789L5.741,12.651a.556.556,0,0,1-.789,0l-.517-.517a.559.559,0,0,1,.009-.8L7.25,8.662H.559A.557.557,0,0,1,0,8.1V7.358A.557.557,0,0,1,.559,6.8H7.25L4.445,4.127A.555.555,0,0,1,4.435,3.328Z" transform="translate(0 -2.647)" fill="#ffe500"/>
                            </svg>
                        </p>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-[200px] md:h-[127px] lg:h-[279px] bg-gradient-to-b from-transparent to-black z-[3]"></div>
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Project: <?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
            </a>
            <?php endwhile; wp_reset_query(); ?> 
        </div>
        <div class="w-full grid gap-[30px]">
            <?php
                $loop = new WP_Query( array(
                    'post_type' => 'project',
                    'posts_per_page' => 2,
                    'orderby' => 'date',
                    'order' => 'DECS',
                    'offset' => 3,
                )
                );
                ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
            <a href="<?php the_permalink();?>" class="w-full aspect-[16/10] rounded-[10px] overflow-hidden relative">
                <div class="absolute bottom-[20px] left-[20px] right-[20px] lg:left-[25px] lg:right-[25px] z-[4]">
                    <div class="w-full">
                        <h3 class="text-24 leading-34 font-rubik font-bold text-[#FFE500]"><?php the_title();?></h3>
                        <p class="flex items-center text-white text-16 leading-26 font-rubik font-medium">Lees meer 
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.432" height="10.167" viewBox="0 0 10.432 10.167" class="mlicon">
                            <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M4.435,3.328l.517-.517a.556.556,0,0,1,.789,0l4.526,4.524a.556.556,0,0,1,0,.789L5.741,12.651a.556.556,0,0,1-.789,0l-.517-.517a.559.559,0,0,1,.009-.8L7.25,8.662H.559A.557.557,0,0,1,0,8.1V7.358A.557.557,0,0,1,.559,6.8H7.25L4.445,4.127A.555.555,0,0,1,4.435,3.328Z" transform="translate(0 -2.647)" fill="#ffe500"/>
                            </svg>
                        </p>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-[200px] md:h-[127px] lg:h-[279px] bg-gradient-to-b from-transparent to-black z-[3]"></div>
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Project: <?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
            </a>
            <?php endwhile; wp_reset_query(); ?>  
        </div>
    </div>
    <div class="container grid gap-[20px] lg:hidden element-fade-in">
        <?php
                $loop = new WP_Query( array(
                    'post_type' => 'project',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DECS',
                )
                );
                ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
            <a href="<?php the_permalink();?>" class="fade-item w-full h-[74px] md:h-[92px] bg-[#3D4343] shadow-md rounded-[5px] border-l-[7px] border-[#FFE500] flex items-center px-[20px]">
                <h3 class="text-24 leading-34 font-rubik font-bold text-[#FFE500] flex items-center"><?php the_title();?> 
                    <svg id="Group_7790" data-name="Group 7790" xmlns="http://www.w3.org/2000/svg" width="15.887" height="15.485" viewBox="0 0 15.887 15.485" class="ml-[12px]">
                        <g id="Group_1305" data-name="Group 1305" transform="translate(0)">
                        <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M6.755,3.684,7.542,2.9a.847.847,0,0,1,1.2,0l6.893,6.89a.848.848,0,0,1,0,1.2L8.744,17.882a.847.847,0,0,1-1.2,0l-.787-.787a.852.852,0,0,1,.014-1.216l4.273-4.071H.851A.849.849,0,0,1,0,10.957V9.822a.849.849,0,0,1,.851-.851H11.042L6.769,4.9A.846.846,0,0,1,6.755,3.684Z" transform="translate(0 -2.647)" fill="#fff"/>
                        </g>
                    </svg>
                </h3>
            </a>
            <?php endwhile; wp_reset_query(); ?>  
        <a href="/projecten/" class="fade-item flex items-center text-white text-16 leading-26 font-rubik font-medium">Bekijk alle projecten 
            <svg xmlns="http://www.w3.org/2000/svg" width="10.432" height="10.167" viewBox="0 0 10.432 10.167" class="mlicon">
            <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M4.435,3.328l.517-.517a.556.556,0,0,1,.789,0l4.526,4.524a.556.556,0,0,1,0,.789L5.741,12.651a.556.556,0,0,1-.789,0l-.517-.517a.559.559,0,0,1,.009-.8L7.25,8.662H.559A.557.557,0,0,1,0,8.1V7.358A.557.557,0,0,1,.559,6.8H7.25L4.445,4.127A.555.555,0,0,1,4.435,3.328Z" transform="translate(0 -2.647)" fill="#ffe500"/>
            </svg>
        </a>
    </div>
</section>
<?php endif; ?>

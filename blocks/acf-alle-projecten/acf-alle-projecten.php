<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- DIENSTEN -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="container grid md:grid-cols-2 lg:grid-cols-3 gap-[30px] lg:gap-[25px] element-fade-in">
        <?php
            $loop = new WP_Query( array(
                'post_type' => 'project',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            )
            );
            ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
           <a href="<?php the_permalink();?>" class="w-full h-[205px] md:h-[255px] lg:h-[450px] rounded-[10px] overflow-hidden relative fade-item">
                <div class="absolute bottom-[20px] left-[20px] right-[20px] lg:left-[25px] lg:right-[25px] z-[4]">
                    <div class="w-full flex justify-between items-end">
                        <div class="w-full">
                        <h3 class="text-24 leading-34 font-rubik font-bold text-[#FFE500]"><?php the_title();?></h3>
                        <p class="flex items-center text-white text-16 leading-26 font-rubik font-medium">Lees meer 
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.432" height="10.167" viewBox="0 0 10.432 10.167" class="mlicon">
                            <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M4.435,3.328l.517-.517a.556.556,0,0,1,.789,0l4.526,4.524a.556.556,0,0,1,0,.789L5.741,12.651a.556.556,0,0,1-.789,0l-.517-.517a.559.559,0,0,1,.009-.8L7.25,8.662H.559A.557.557,0,0,1,0,8.1V7.358A.557.557,0,0,1,.559,6.8H7.25L4.445,4.127A.555.555,0,0,1,4.435,3.328Z" transform="translate(0 -2.647)" fill="#ffe500"/>
                            </svg>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-[200px] md:h-[127px] lg:h-[279px] bg-gradient-to-b from-transparent to-black z-[3]"></div>
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Dienst: <?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
            </a>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>
<?php endif; ?>

<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>

<!-- FOTO SLIDER -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="swiper mySwiper pl-[calc(50vw-195px)] md:pl-[calc(50vw-340px)] lg:pl-[calc(50vw-572.5px)] xl:pl-[calc(50vw-585px)]">
        <div class="swiper-wrapper element-fade-in">
            <?php
            if( have_rows('fotoslider') ):
                while( have_rows('fotoslider') ) : the_row(); ?>
                <?php
                $image = get_sub_field('afbeelding');
                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                ?>
            <div class="swiper-slide fade-item w-[325px] md:w-[325px] lg:w-[365px] xl:w-[373.33px] h-[205px] md:h-[255px] lg:h-[450px] rounded-[10px] overflow-hidden relative">
                <div class="absolute bottom-0 left-0 right-0 h-[200px] md:h-[127px] lg:h-[279px] bg-gradient-to-b from-transparent to-black z-[3]"></div>
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
            </div>
                <?php
                    endwhile;
                else :
                endif;
                ?>
        </div>
    </div>
</section>
<?php endif; ?>

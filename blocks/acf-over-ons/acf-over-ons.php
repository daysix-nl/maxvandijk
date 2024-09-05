<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<?php
$image1 = get_field('afbeelding_1');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<?php
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
 <!-- AFBEELDING -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> element-fade-in">
    <div class="w-full max-w-[390px] md:max-w-[680px] lg:max-w-[1840px] mx-auto lg:px-[25px] xl:px-[35px] grow-item">
        <div class="grid lg:grid-cols-2 rounded-[10px] overflow-hidden">
            <div class="w-full aspect-[1/1] overflow-hidden relative">
                <div class="absolute bottom-0 left-0 right-0 h-[200px] md:h-[127px] lg:h-[279px] bg-gradient-to-b from-transparent to-black"></div>
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
            </div>
            <div class="w-full md:aspect-[1/1] md:overflow-hidden relative">
                <div class="md:absolute bottom-0 left-0 right-0 top-0 z-[5] mt-[30px] md:mt-[unset]">
                    <div class="h-full w-full flex items-center md:border-l-[7px] lg:border-l-[0px] lg:border-t-[7px] border-[#FFE500]">
                        <div class="md:mx-[80px] w-full max-w-[588px]">
                            <?php if (get_field('subtitel')): ?>  
                            <h3 class="text-18 leading-28 md:text-20 md:leading-30 font-rubik font-medium text-[#FFE500]"><?php echo get_field('subtitel');?></h3>
                            <?php endif; ?>
                            <h2 class="text-26 leading-36 md:text-40 md:leading-50 font-jost font-medium text-white"><?php echo get_field('titel');?></h2>
                            <div class="text-16 leading-28 md:text-18 md:leading-30 lg:text-18 lg:leading-30 xl:text-18 xl:leading-30 text-white font-rubik font-normal text-editor mt-[25px]"><?php echo get_field('tekst');?></div>
                            <?php if (get_field('link')): ?>  
                            <a href="<?php echo $link_url; ?>" class="text-black text-16 font-rubik font-medium h-[42px] px-[20px] items-center bg-[#FFE500] button rounded-[10px] flex w-fit mt-[30px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block absolute bottom-0 left-0 right-0 top-0 bg-black opacity-80 z-[4]"></div>
                <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="hidden md:block h-full min-h-full min-w-full object-cover object-center">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

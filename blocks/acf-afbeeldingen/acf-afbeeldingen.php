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
 <!-- AFBEELDING -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="container grid md:grid-cols-2 gap-[30px] element-fade-in">
        <div class="w-full aspect-[16/10] relative fade-item">
            <div class="h-full w-full relative rounded-[10px] overflow-hidden">
                <div class="absolute bottom-0 left-0 right-0 h-[200px] md:h-[127px] lg:h-[279px] bg-gradient-to-b from-transparent to-black"></div>
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
            </div> 
        </div>
        <div class="w-full aspect-[16/10] relative fade-item">
            <div class="h-full w-full relative rounded-[10px] overflow-hidden">
                <div class="absolute bottom-0 left-0 right-0 h-[200px] md:h-[127px] lg:h-[279px] bg-gradient-to-b from-transparent to-black"></div>
                <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
            </div> 
        </div>
    </div>
</section>
<?php endif; ?>

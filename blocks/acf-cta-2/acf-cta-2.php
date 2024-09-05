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
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
 <!-- CTA 1 -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> element-fade-in">
    <div class="container grid gap-[30px] items-center  grow-item">
    <div class="w-full md:aspect-[16/10] order-2 lg:order-1 relative">
        <div class="absolute left-[30px] top-0 bottom-0 right-0 overflow-hidden hidden md:block">
            <div class="h-full w-full relative rounded-[10px] overflow-hidden">
                <div class="absolute bottom-0 left-0 right-0 h-[200px] md:h-[127px] lg:h-[279px] bg-gradient-to-b from-transparent to-black"></div>
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
            </div>
        </div>
        <div class="pb-[21px] md:pb-[unset] md:absolute md:w-[400px] left-0 bottom-[41px] top-[0px]">
            <div class="h-full w-full flex items-end">
                <div class="w-full relative bg-white border-t-[7px] border-[#FFE500]">
                <div class="px-[30px] pt-[40px] pb-[50px]">
                    <h2 class="text-black font-jost text-40 leading-50 font-medium"><?php echo get_field('titel');?></h2>
                    <p class="font-rubik text-16 leading-26 text-black font-normal mt-[20px]"><?php echo get_field('tekst');?></p>
                </div>
                <?php if (get_field('link')): ?>   
                <div class="absolute right-[30px] bottom-[-21px] rounded-[10px] bg-black">
                    <a href="<?php echo $link_url; ?>" class="text-black text-16 font-rubik font-medium h-[42px] px-[20px] items-center bg-[#FFE500] button rounded-[10px] flex" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php endif; ?>

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
<?php
$link1 = get_field('over_link');
$link1_url = isset($link1['url']) ? esc_url($link1['url']) : '';
$link1_text = isset($link1['title']) ? esc_html($link1['title']) : '';
$link1_target = isset($link1['target']) ? esc_attr($link1['target']) : '';
?>
 <!-- CTA 1 -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> element-fade-in">
    <div class="container grid lg:grid-cols-3 items-center gap-[30px] grow-item">
    <div class="w-full md:aspect-[16/10] lg:col-span-2 order-2 lg:order-1 relative">
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
    <div class="w-full lg:col-span-1 order-1 lg:order-2">
        <h2 class="text-18 leading-28 md:text-20 md:leading-30 font-rubik font-medium text-[#FFE500]"><?php echo get_field('over_titel');?></h2>
        <p class="text-white font-jost text-40 leading-50 font-medium md:max-w-[530px] lg:max-w-[unset]"><?php echo get_field('over_tekst');?></p>
        <?php if (get_field('over_link')): ?>   
        <a href="<?php echo $link1_url; ?>" class="flex items-center text-white text-16 leading-26 font-rubik font-medium mt-[20px]" target="<?php echo $link1_target; ?>"><?php echo $link1_text; ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="10.432" height="10.167" viewBox="0 0 10.432 10.167" class="mlicon">
            <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M4.435,3.328l.517-.517a.556.556,0,0,1,.789,0l4.526,4.524a.556.556,0,0,1,0,.789L5.741,12.651a.556.556,0,0,1-.789,0l-.517-.517a.559.559,0,0,1,.009-.8L7.25,8.662H.559A.557.557,0,0,1,0,8.1V7.358A.557.557,0,0,1,.559,6.8H7.25L4.445,4.127A.555.555,0,0,1,4.435,3.328Z" transform="translate(0 -2.647)" fill="#ffe500"/>
            </svg>
        </a>
        <?php endif; ?>
    </div>
    </div>
</section>
<?php endif; ?>

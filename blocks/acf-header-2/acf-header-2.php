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
<!-- HEADER 2 -->
<section class="w-full h-[400px] overflow-hidden relative">
    <div class="absolute top-0 left-0 right-0 bottom-0 z-[2]">
    <div class="h-full container flex items-center">
        <div class="grid">
            <h1 class="text-18 leading-18 font-rubik font-medium uppercase text-[#FFE500] drop-shadow-md"><?php echo get_field('subtitel');?></h1>
            <h2 class="text-40 leading-50 font-bold font-jost text-white mt-[20px] max-w-[575px] drop-shadow-md"><?php echo get_field('titel');?></h2>
        </div>
    </div>
    </div>
    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
    <div class="absolute top-0 left-0 right-0 bottom-0 bg-black opacity-[0.3]"></div>
    <div class="absolute top-0 left-0 right-0 h-[300px] bg-gradient-to-b from-black to-transparent"></div>
</section>
<?php endif; ?>

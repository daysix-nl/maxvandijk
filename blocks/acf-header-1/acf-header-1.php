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
<!-- HEADER -->
<section class="w-full h-[calc(100dvh-195px)] min-h-[425px] max-h-[480px] md:min-h-[400px] md:max-h-[600px] lg:min-h-[525px] lg:max-h-[900px] bg-white overflow-hidden relative">
    <div class="absolute top-0 left-0 right-0 bottom-0 z-[2]">
    <div class="h-full container flex items-center">
        <div class="grid">
            <h2 class="text-18 leading-18 font-rubik font-medium uppercase text-[#FFE500] drop-shadow-md"><?php echo get_field('subtitel');?></h2>
            <h1 class="text-45 leading-55 font-bold font-jost text-white mt-[20px] max-w-[575px] drop-shadow-md"><?php echo get_field('titel');?></h1>
        </div>
    </div>
    </div>
    <div class="slideshow h-full min-h-full min-w-full object-cover object-center">
    <div class="slide" style="background-image: url('<?php echo $image_url; ?>');"></div>
    <div class="slide" style="background-image: url('<?php echo $image_url; ?>');"></div>
    <div class="slide" style="background-image: url('<?php echo $image_url; ?>');"></div>
    </div>
    <!-- <img src="/wp-content/themes/maxvandijk/img/local/afbeelding_001.png" alt="" class="h-full min-h-full min-w-full object-cover object-center"> -->
    <div class="absolute top-0 left-0 right-0 bottom-0 bg-black opacity-[0.3]"></div>
    <div class="absolute top-0 left-0 right-0 h-[300px] bg-gradient-to-b from-black to-transparent"></div>
</section>
<!-- OVER ONS -->
<section class="mt-[-75px] z-[4] relative">
    <div class="container max-w-[360px] md:max-w-[680px] lg:max-w-[1145px] xl:max-w-[1170px] w-full bg-[#3D4343] rounded-[10px] px-[25px] py-[40px] lg:px-[60px] lg:py-[45px]">
    <h3 class="text-24 leading-34 lg:text-36 lg:leading-46 font-just font-medium text-[#FFE500]"><?php echo get_field('over_titel');?></h3>
    <p class="text-16 leading-26 font-normal font-rubik text-white mt-[25px]"><?php echo get_field('tekst');?></p>
    </div>
</section>
<?php endif; ?>

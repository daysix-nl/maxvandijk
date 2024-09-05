<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- HEADER 3 -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="container text-center">
        <h1 class="text-26 leading-36 md:text-40 md:leading-50 font-jost font-medium text-white"><?php echo get_field('titel');?></h1>
        <?php if (get_field('subtitel')): ?>  
        <p class="text-16 leading-28 md:text-18 md:leading-30 lg:text-18 lg:leading-30 xl:text-18 xl:leading-30 text-white font-rubik font-normal mt-[25px]"><?php echo get_field('subtitel');?></p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

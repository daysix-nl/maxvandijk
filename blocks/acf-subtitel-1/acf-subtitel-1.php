<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- SUBTITEL 1 -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="container lg:text-center">
        <?php if (get_field('subtitel')): ?>  
        <h3 class="text-18 leading-28 md:text-20 md:leading-30 font-rubik font-medium text-[#FFE500]"><?php echo get_field('subtitel');?></h3>
        <?php endif; ?>
        <h2 class="text-26 leading-36 md:text-40 md:leading-50 font-jost font-medium text-white"><?php echo get_field('titel');?></h2>
    </div>
</section>
<?php endif; ?>

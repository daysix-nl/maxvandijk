<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- FEATURES -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="container grid md:grid-cols-2 gap-[30px] element-fade-in">
        <div class="flex justify-between fade-item">
            <div class="w-[77px] h-[77px] lg:w-[119px] lg:h-[119px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 77 77" class="lg:scale-[1.5] origin-top-left">
                    <g id="Group_7962" data-name="Group 7962" transform="translate(-34 -609)">
                        <g id="Group_7833" data-name="Group 7833" transform="translate(34 609)">
                        <circle id="Ellipse_29" data-name="Ellipse 29" cx="38.5" cy="38.5" r="38.5" fill="#ffe500" opacity="0.1"/>
                        <circle id="Ellipse_32" data-name="Ellipse 32" cx="28.5" cy="28.5" r="28.5" transform="translate(10 10)" fill="#ffe500" opacity="0.3"/>
                        <circle id="Ellipse_27" data-name="Ellipse 27" cx="18.5" cy="18.5" r="18.5" transform="translate(20 20)" fill="#ffe500" opacity="0.88"/>
                        </g>
                        <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M6.57,3.656l.766-.766a.824.824,0,0,1,1.169,0l6.7,6.7a.824.824,0,0,1,0,1.169l-6.7,6.7a.824.824,0,0,1-1.169,0L6.57,16.7a.829.829,0,0,1,.014-1.183l4.156-3.959H.828A.826.826,0,0,1,0,10.729v-1.1A.826.826,0,0,1,.828,8.8h9.911L6.583,4.839A.823.823,0,0,1,6.57,3.656Z" transform="translate(64.56 637.322)"/>
                    </g>
                </svg>
            </div>
            <div class="w-[283px] md:w-[223px] lg:w-[393.5px] xl:w-[406px]">
                <div class="text-16 leading-28 md:text-18 md:leading-30 lg:text-18 lg:leading-30 xl:text-18 xl:leading-30 text-white font-rubik font-normal text-editor lg:mt-[16px]"><?php echo get_field('tekst_1');?></div>
            </div>
        </div>
        <div class="flex justify-between fade-item">
            <div class="w-[77px] h-[77px] lg:w-[119px] lg:h-[119px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 77 77" class="lg:scale-[1.5] origin-top-left">
                    <g id="Group_7962" data-name="Group 7962" transform="translate(-34 -609)">
                        <g id="Group_7833" data-name="Group 7833" transform="translate(34 609)">
                        <circle id="Ellipse_29" data-name="Ellipse 29" cx="38.5" cy="38.5" r="38.5" fill="#ffe500" opacity="0.1"/>
                        <circle id="Ellipse_32" data-name="Ellipse 32" cx="28.5" cy="28.5" r="28.5" transform="translate(10 10)" fill="#ffe500" opacity="0.3"/>
                        <circle id="Ellipse_27" data-name="Ellipse 27" cx="18.5" cy="18.5" r="18.5" transform="translate(20 20)" fill="#ffe500" opacity="0.88"/>
                        </g>
                        <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M6.57,3.656l.766-.766a.824.824,0,0,1,1.169,0l6.7,6.7a.824.824,0,0,1,0,1.169l-6.7,6.7a.824.824,0,0,1-1.169,0L6.57,16.7a.829.829,0,0,1,.014-1.183l4.156-3.959H.828A.826.826,0,0,1,0,10.729v-1.1A.826.826,0,0,1,.828,8.8h9.911L6.583,4.839A.823.823,0,0,1,6.57,3.656Z" transform="translate(64.56 637.322)"/>
                    </g>
                </svg>
            </div>
            <div class="w-[283px] md:w-[223px] lg:w-[393.5px] xl:w-[406px]">
                <div class="text-16 leading-28 md:text-18 md:leading-30 lg:text-18 lg:leading-30 xl:text-18 xl:leading-30 text-white font-rubik font-normal text-editor lg:mt-[16px]"><?php echo get_field('tekst_2');?></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

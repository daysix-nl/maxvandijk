<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CONTACT -->
<section class="<?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> element-fade-in">
    <div class="container lg:flex justify-between grow-item">
        <div class="w-full lg:w-[390px] xl:w-[410px]">
            <?php if (get_field('subtitel')): ?>  
            <h3 class="text-18 leading-28 md:text-20 md:leading-30 font-rubik font-medium text-[#FFE500]"><?php echo get_field('subtitel');?></h3>
            <?php endif; ?>
            <h2 class="text-26 leading-36 md:text-40 md:leading-50 font-jost font-medium text-white"><?php echo get_field('titel');?></h2>
            <div class="text-16 leading-28 md:text-18 md:leading-30 lg:text-18 lg:leading-30 xl:text-18 xl:leading-30 text-white font-rubik font-normal text-editor mt-[25px]"><?php echo get_field('tekst');?></div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-1  gap-[16px] w-[220px] md:w-full lg:w-[220px] xl:w-[225px] mt-[30px]">
                <a href="" class="flex justify-between hover">
                    <div class="h-[30px] w-[30px] flex justify-center items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="22" viewBox="0 0 16 22" class="mt-[10px]">
                            <defs>
                                <clipPath id="clip-path">
                                <rect id="Rectangle_120" data-name="Rectangle 120" width="16" height="22" transform="translate(-0.219 0.187)" fill="#ffe500"/>
                                </clipPath>
                            </defs>
                            <g id="Group_73" data-name="Group 73" transform="translate(0.219 -0.186)">
                                <g id="Group_72" data-name="Group 72" transform="translate(0 -0.001)" clip-path="url(#clip-path)">
                                <path id="Path_271" data-name="Path 271" d="M215.17,311.8a7.527,7.527,0,0,0-6.4-3.8c-.113,0-.228,0-.341,0a7.527,7.527,0,0,0-6.4,3.8,7.723,7.723,0,0,0-.1,7.63l5.5,10.068.008.013a1.337,1.337,0,0,0,2.319,0l.007-.013,5.5-10.068a7.723,7.723,0,0,0-.1-7.63ZM208.6,318.05a3.119,3.119,0,1,1,3.119-3.119,3.123,3.123,0,0,1-3.119,3.119Zm0,0" transform="translate(-200.92 -307.927)" fill="#ffe500"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="w-[175px] xl:w-[180px]">
                        <p class="text-15 leading-28 text-white font-rubik font-normal">Cliffordweg 10<br>3646 AG, Waverveen</p>
                    </div>
                </a>
                <a href="" class="flex justify-between hover">
                    <div class="h-[30px] w-[30px] flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.082" height="22.128" viewBox="0 0 22.082 22.128">
                            <path id="Path_302" data-name="Path 302" d="M-484.645,502.432c.551,2.316,3.529,5.184,5.735,5.735a2.1,2.1,0,0,0,2.426-1.323h0a2.054,2.054,0,0,1,3.419-.772l3.088,3.088a2.2,2.2,0,0,1,0,2.978l-2.1,2.1c-2.206,2.206-8.051-.221-13.235-5.4s-7.5-11.029-5.4-13.235l2.1-2.1a2.2,2.2,0,0,1,2.978,0l3.088,3.088a2.054,2.054,0,0,1-.772,3.419h0A2,2,0,0,0-484.645,502.432Z" transform="translate(491.48 -492.919)" fill="#ffe500"/>
                        </svg>
                    </div>
                    <div class="w-[175px] xl:w-[180px]">
                        <p class="text-15 leading-28 text-white font-rubik font-normal">+31 (0)6 - 36 17 64 28</p>
                    </div>
                </a>
                <a href="" class="flex justify-between hover">
                    <div class="h-[30px] w-[30px] flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.198" height="16.636" viewBox="0 0 24.198 16.636">
                            <g id="Group_82" data-name="Group 82" transform="translate(0 -96)">
                                <path id="Path_280" data-name="Path 280" d="M347.55,160.9v10.532l-8.158-5.157Z" transform="translate(-323.352 -61.829)" fill="#ffe500"/>
                                <path id="Path_281" data-name="Path 281" d="M8.158,166.271,0,171.428V160.9Z" transform="translate(0 -61.829)" fill="#ffe500"/>
                                <path id="Path_282" data-name="Path 282" d="M25.067,97.287A1.494,1.494,0,0,0,23.6,96H2.427A1.494,1.494,0,0,0,.96,97.287l12.054,7.942Z" transform="translate(-0.915 0)" fill="#ffe500"/>
                                <path id="Path_283" data-name="Path 283" d="M13.491,295.331a.759.759,0,0,1-.832,0l-2.14-1.411-9.495,6.006A1.491,1.491,0,0,0,2.488,301.2H23.661a1.491,1.491,0,0,0,1.464-1.276l-9.495-6Z" transform="translate(-0.976 -188.566)" fill="#ffe500"/>
                            </g>
                        </svg>
                    </div>
                    <div class="w-[175px] xl:w-[180px]">
                        <p class="text-15 leading-28 text-white font-rubik font-normal">info@max-van-dijk.nl</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="lg:w-[695px] xl:w-[701px] bg-[#3D4343] rounded-[10px] mt-[30px] lg:mt-[unset] h-fit">
            <div class="px-[30px] py-[40px]">
                <h3 class="text-[#FFE500] font-jost font-semibold text-26 leading-36">Contactformulier</h3>
                <div class="contactform mt-[25px]">
                    <?php echo do_shortcode('[gravityform id="2" title="false"]'); ?>
                </div>
            </div>
            
        </div>
        
    </div>
</section>
<?php endif; ?>

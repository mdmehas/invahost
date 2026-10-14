<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hoxia/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();
$page= 'nav';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();
?>

<!-- Start -->
<section class="relative lg:py-44 py-36 bg-gradient-to-br from-primary to-yellow-500">
    <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/shape-1.png'; ?>');"></div>
    <div class="container relative">
        <div class="relative grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="me-6">
                    <div class="bg-white dark:bg-slate-900 text-slate-400 py-2 px-4 inline-flex items-center font-medium rounded-full shadow-sm dark:shadow-gray-800 mb-2"><span class="bg-yellow-500 text-white text-[12px] font-bold px-2.5 py-0 rounded-full me-2">Hosting</span> 99.9% Uptime Guarantee</div>
                    <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Enjoy Powerful and <br> Secure Web Hosting</h4>
                    <p class="text-white/70 max-w-xl">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                
                    <div class="mt-6">
                        <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-md text-center align-middle transition-all duration-500">Registration</a>
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="h-11 w-11 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center bg-primary border border-primary text-white focus:outline-none rounded-full ms-1 lightbox"><i class="mdi mdi-play text-xl align-middle"></i></a><small class="text-sm font-semibold uppercase align-middle text-white ms-2">Watch Now</small>
                    </div>
                </div>
            </div><!--end col-->

            <div class="relative md:col-span-5">
                <img src="<?php echo $static_url; ?>/images/4.png" class="mover" alt="">
                <div class="overflow-hidden after:content-[''] after:absolute after:h-12 after:w-12 after:bg-yellow-500/20 after:top-0 after:start-0 after:z-1 after:rounded-lg after:animate-[spin_10s_linear_infinite]"></div>
            </div><!--end col-->
        </div><!--end grid-->

        <div class="relative animate-[spin_60s_linear_infinite] z-1">
            <span class="after:absolute after:start-0 after:bottom-1/2 after:translate-y-1/2 after:h-2 after:w-8 after:rounded-md after:bg-yellow-500/20 relative after:z-10"></span>
            <span class="after:absolute after:start-0 after:bottom-1/2 after:translate-y-1/2 after:rotate-90 after:h-2 after:w-8 after:rounded-md after:bg-yellow-500/20 relative after:z-10"></span>
        </div>
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End -->

<!-- Start -->
<section class="relative md:pb-24 pb-16 -mt-[86px] z-1">
    <div class="container">
        <div class="grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 justify-center gap-[30px]">
            
            <!-- domain2 code  -->
            <?php
                include "$base_dir/Components/Home/index-three/domain2.php";
            ?>

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="relative grid grid-cols-1 pb-8 text-center z-1">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Data Center Around The World</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <!-- world code  -->
        <?php
            include "$base_dir/Components/Home/index-two/world.php";
        ?>

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
            
        <!-- about code  -->
        <?php
            include "$base_dir/Components/Home/index/about.php";
        ?>

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Explore Our Hosting Pricing</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <!-- pricing code  -->
        <?php
            include "$base_dir/Components/Home/index/pricing.php";
        ?>

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="relative grid grid-cols-1 pb-8 text-center z-1">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Trusted by more than 10K users</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->
        
        <div class="grid grid-cols-1 relative mt-8">
            <div class="tiny-three-item">
                    
                <!-- reviews code  -->
                <?php
                    include "$base_dir/Components/Home/index/reviews.php";
                ?>

            </div><!--end tiny slider-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Questions & Answers</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- q&a code  -->
            <?php
                include "$base_dir/Components/Home/index-three/q&a.php";
            ?>

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
            
        <!-- subscribe code  -->
        <?php
            include "$base_dir/Components/Home/index/subscribe.php";
        ?>

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>
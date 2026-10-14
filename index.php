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
<section class="relative lg:py-44 py-36 bg-gradient-to-br from-primary-700 to-blue-600">
    <div class="absolute inset-0 bg-center bg-cover opacity-5" style="background-image: url('<?php echo $static_url . '/images/bg/shape-1.png'; ?>');"></div>
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="me-6">
                    <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Hosting & Domain In One Plateform</h4>
                    <p class="text-white/70 text-lg max-w-xl">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                
                    <div class="mt-6">
                        <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-yellow-500 hover:bg-yellow-600 border border-yellow-500 hover:border-yellow-600 text-white focus:ring-[3px] focus:ring-yellow-500 focus:ring-opacity-25 focus:outline-none rounded-md text-center align-middle transition-all duration-500">Learn more</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-5">
                <img src="<?php echo $static_url; ?>/images/1.png" alt="">
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative py-24 bg-slate-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] items-center">
            <div>
                <h4 class="md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Find your perfect business <br> name and domain</h4>
            </div>
            
            <div class="">
                <form class="relative max-w-xl">
                    <input type="text" id="searchDomain" name="text" class="pt-4 pe-40 pb-4 ps-6 w-full h-12 outline-none text-black dark:text-white rounded-lg bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800" placeholder="Search Your Domain">
                    <button type="submit" class="absolute top-[0] end-[0] h-12 inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-e-lg align-middle transition-all duration-500"><i class="uil uil-search"></i> Search</button>
                </form><!--end form-->
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:pb-24 pb-16 -mt-[74px]">
    <div class="container relative">
        <div class="grid grid-cols-1 relative">
            <div class="tiny-six-item">

                <!-- domains code  -->
                <?php
                    include "$base_dir/Components/Home/index/domains.php";
                ?>
            
            </div>
        </div>
    </div>

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Hosting Services</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- services code  -->
            <?php
                include "$base_dir/Components/Home/index/services.php";
            ?>

        </div>
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
        
        <!-- security code  -->
        <?php
            include "$base_dir/Components/Home/index/security.php";
        ?>
    
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 lg:pt-24 pt-16">
        <div class="absolute inset-0 opacity-25 dark:opacity-50 bg-no-repeat bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/map.png'; ?>');"></div>
        <div class="relative grid grid-cols-1 pb-8 text-center z-1">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Trusted by more than 10K users</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="relative grid md:grid-cols-3 grid-cols-1 items-center mt-8 gap-[30px] z-1">
            
            <!-- counter code  -->
            <?php
                include "$base_dir/Components/Home/index/counter.php";
            ?>

        </div>
    </div>
    
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 relative">
            <div class="tiny-three-item">
                
                <!-- reviews code  -->
                <?php
                    include "$base_dir/Components/Home/index/reviews.php";
                ?>

            </div><!--end tiny slider-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Frequently Asked Questions</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <!-- faq code  -->
        <?php
            include "$base_dir/Components/Home/index/faq.php";
        ?>
        
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
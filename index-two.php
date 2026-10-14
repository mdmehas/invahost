<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hoxia/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();
$page= 'nav2';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();
?>

<!-- Start -->
<section class="relative pt-28 before:content-[''] before:absolute before:bottom-40 xl:before:start-[45rem] xl:before:w-[90rem] xl:before:h-[35rem] ltr:before:rotate-[115deg] rtl:before:rotate-[65deg] before:bg-amber-500 after:content-[''] after:absolute xl:after:bottom-96 xl:after:start-[30rem] xl:after:w-[75rem] xl:after:h-40 ltr:after:rotate-[115deg] rtl:after:rotate-[65deg] after:bg-amber-500/10 after:-z-1 before:start-40 before:w-[75rem] before:h-[30rem] after:start-0 after:bottom-80 after:w-[75rem] after:h-60 overflow-hidden bg-top bg-cover" id="home" style="background-image: url('<?php echo $static_url . '/images/bg/bg5.png'; ?>');">
    <div class="absolute inset-0 bg-primary/5"></div>
    <div class="container relative">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div>
                <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Fastest <span class="text-primary">Performance</span> and <span class="text-primary">Best</span> Web Hosting</h4>
                <p class="text-slate-400 text-[17px] max-w-xl">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
            
                <div class="mt-6 ">
                    <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-amber-500 hover:bg-amber-600 border border-amber-500 hover:border-amber-600 text-white focus:ring-[3px] focus:ring-amber-500 focus:ring-opacity-25 focus:outline-none rounded-md text-center align-middle transition-all duration-500">Get Started</a>

                    <span class="h6 text-[22px] font-semibold mb-0 ms-2 align-middle">50% OFF</span>
                </div>
            </div>

            <div class="relative">
                <img src="<?php echo $static_url; ?>/images/hero.png" alt="">
                <div class="absolute bottom-1/2 translate-y-1/2 lg:-end-7 -end-5 p-4 rounded-md shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 w-48 m-3">
                    <h5 class="text-lg font-medium mb-3">Revanue</h5>
                    <div class="flex justify-between mt-3 mb-2">
                        <span class="text-slate-400">Profit</span>
                        <span class="text-slate-400">84%</span>
                    </div>
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-primary h-[6px] rounded-full" style="width: 84%"></div>
                    </div>
                </div>

                <div class="absolute flex justify-between items-center lg:bottom-20 bottom-10 md:start-12 -start-2 p-4 rounded-md shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 m-3">
                    <div class="flex items-center">
                        <div class="flex items-center me-3">
                            <img src="<?php echo $static_url; ?>/images/client/01.jpg" class="h-10 w-10 rounded-full border-2 border-gray-200 dark:border-gray-700 shadow-md dark:shadow-gray-800 hover:z-2" alt="">
                            <img src="<?php echo $static_url; ?>/images/client/02.jpg" class="h-10 w-10 rounded-full border-2 border-gray-200 dark:border-gray-700 shadow-md dark:shadow-gray-800 hover:z-2 -ms-3" alt="">
                            <img src="<?php echo $static_url; ?>/images/client/03.jpg" class="h-10 w-10 rounded-full border-2 border-gray-200 dark:border-gray-700 shadow-md dark:shadow-gray-800 hover:z-2 -ms-3" alt="">
                        </div>
                        <div class="flex-1">
                            <ul class="list-none mb-0 text-amber-400">
                                <li class="inline font-medium text-[18px]">4.6</li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                            <p class="font-medium">10K Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:pb-24 pb-16 -mt-12">
    <div class="container relative">
        <div class="md:flex">
            <div class="lg:w-2/3 md:w-full bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800 md:p-8 p-6">
                <form class="relative mb-2">
                    <input type="text" id="searchDomain" name="text" class="pt-4 pe-40 pb-4 ps-6 w-full h-12 outline-none text-black dark:text-white rounded-lg bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800" placeholder="Search Your Domain">
                    <button type="submit" class="absolute top-[0] end-[0] h-12 inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-e-lg align-middle transition-all duration-500"><i class="uil uil-search"></i> Search</button>
                </form><!--end form-->

                <ul class="list-none">
                    
                    <!-- domain code  -->
                    <?php
                        include "$base_dir/Components/Home/index-two/domain.php";
                    ?>

                </ul>
            </div>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
            
        <!-- about code  -->
        <?php
            include "$base_dir/Components/Home/index/about.php";
        ?>

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
            
        <!-- security code  -->
        <?php
            include "$base_dir/Components/Home/index/security.php";
        ?>
    
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Web Hosting Features</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- services2 code  -->
            <?php
                include "$base_dir/Components/Home/index-two/services2.php";
            ?>

        </div>
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

    </div>

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Explore Our Hosting Pricing</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- pricing2 code  -->
            <?php
                include "$base_dir/Components/Home/index-two/pricing2.php";
            ?>

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Our Respected Clients</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-4 grid-cols-2 mt-8 gap-[30px]">
            
            <!-- clients code  -->
            <?php
                include "$base_dir/Components/Home/index-two/clients.php";
            ?>

        </div>
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
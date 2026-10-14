<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hoxia/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();
$page= 'nav3';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();
?>

<!-- Start Hero -->
<section class="relative table w-full py-36 bg-center bg-no-repeat bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/bg6.jpg'; ?>');">
    <div class="absolute inset-0 bg-primary-900/80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">About Us</h3>

        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] text-white ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white">About Us</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-5 md:col-span-6">
                <img src="<?php echo $static_url; ?>/images/3.png" alt="">
            </div>

            <div class="lg:col-span-7 md:col-span-6 mt-14 md:mt-0">
                <div class="lg:ms-5">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Welcome to Hoxia Web Hosting</h3>

                    <p class="text-slate-400 max-w-xl">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                    <p class="text-slate-400 max-w-xl mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora facere commodi ex ipsum, optio vitae rerum quisquam ducimus eaque minima voluptas iste consequatur nostrum. Harum rem laudantium error quidem tempora.</p>

                    <ul class="list-none text-slate-400 mt-4">
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Create your own skin to match your brand</li>
                    </ul>
                
                    <div class="mt-6">
                        <a href="contact.php" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-md text-center align-middle transition-all duration-500"><i class="uil uil-envelope"></i> Contact us</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Why choose Shared Hosting ?</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- hosting code  -->
            <?php
                include "$base_dir/Components/About-Us/hosting.php";
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
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Our Team Members</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-4 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- team code  -->
            <?php
                include "$base_dir/Components/About-Us/team.php";
            ?>

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
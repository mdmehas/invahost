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
<section class="relative table w-full md:pt-40 md:pb-56 pt-32 pb-48 bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/bg5.png'; ?>');">
    <div class="absolute inset-0 bg-primary/5"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-12">
            <h3 class="text-4xl leading-normal font-semibold mb-6">Shared Web Hosting</h3>
            <p class="text-slate-400 text-[17px] max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>

            <ul class="tracking-[0.5px] mt-6 inline-block">
                <li class="inline-block uppercase text-[13px] font-semibold duration-500 ease-in-out hover:text-primary"><a href="index.php">Hoxia</a></li>
                <li class="inline-block ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-semibold text-primary" aria-current="page">Shared Hosting</li>
            </ul>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End -->

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container relative z-2 -mt-36">
        
        <!-- pricing4 code  -->
        <?php
            include "$base_dir/Components/Hosting/pricing4.php";
        ?>

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
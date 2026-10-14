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
<section class="relative table w-full md:py-48 py-36 bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/bg5.png'; ?>');">
    <div class="absolute inset-0 bg-primary/5"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-12">
            <h3 class="text-4xl leading-normal font-semibold mb-6">Dedicated Web Hosting</h3>
            <p class="text-slate-400 text-[17px] max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>

            <ul class="tracking-[0.5px] mt-6 inline-block">
                <li class="inline-block uppercase text-[13px] font-semibold duration-500 ease-in-out hover:text-primary"><a href="index.php">Hoxia</a></li>
                <li class="inline-block ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-semibold text-primary" aria-current="page">Dedicated Hosting</li>
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
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-5 lg:pb-0 pb-8 lg:text-start text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Why Choose Dedicated Server?</h3>
                <p class="text-slate-400 max-w-xl lg:text-start mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                
                <div class="mt-4">
                    <a href="page-aboutus.php" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-7 lg:mt-0 mt-8">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                    
                    <!-- server code  -->
                    <?php
                        include "$base_dir/Components/Hosting/server.php";
                    ?>
                
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Dedicated Server Plans</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->
    
        <div class="grid grid-cols-1 mt-8">
            <ul class="inline-block w-fit mx-auto flex-wrap justify-center text-center shadow-sm dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                <li role="presentation" class="inline-block">
                    <button class="px-6 py-2 text-sm font-semibold rounded-md w-full transition-all duration-500 ease-in-out text-white bg-primary" id="start-month-tab" data-tabs-target="#start-month" type="button" role="tab" aria-controls="start-month" aria-selected="true"><img src="<?php echo $static_url; ?>/images/flags/india.png" class="h-12" alt=""><span class="block mt-1">India</span></button>
                </li>
                <li role="presentation" class="inline-block">
                    <button class="px-6 py-2 text-sm font-semibold rounded-md w-full transition-all duration-500 ease-in-out hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-slate-800" id="start-year-tab" data-tabs-target="#start-year" type="button" role="tab" aria-controls="start-year" aria-selected="false"><img src="<?php echo $static_url; ?>/images/flags/usa.png" class="h-12" alt=""><span class="block mt-1">USA</span></button>
                </li>
            </ul>

            <div id="StarterContent" class="mt-6">
                
                <!-- plans2 code  -->
                <?php
                    include "$base_dir/Components/Hosting/plans2.php";
                ?>

            </div>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Questions regarding Dedicated Server ?</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-8 gap-[30px]">
            
            <!-- questions code  -->
            <?php
                include "$base_dir/Components/Hosting/questions.php";
            ?>

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>
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
<section class="relative lg:py-44 py-36 bg-gradient-to-br from-yellow-500 to-primary">
    <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/shape-1.png'; ?>');"></div>
    <div class="container relative">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 mt-12 items-center gap-[30px]">
            <div class="lg:col-span-8">
                <h3 class="text-4xl leading-normal text-white font-semibold mb-6">Cloud Hosting</h3>
                <p class="text-white/60 text-[17px] max-w-xl">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                
                <ul class="list-none text-white/80 mt-6">
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-yellow-500 text-xl me-2"></i> <span class="font-medium me-1">10GB</span> Ram</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-yellow-500 text-xl me-2"></i> <span class="font-medium me-1">100GB</span> Bandwith</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-yellow-500 text-xl me-2"></i> <span class="font-medium me-1">100GB SSD</span> Storage</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-yellow-500 text-xl me-2"></i> <span class="font-medium me-1">3 Domain</span> Hosted Support</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-yellow-500 text-xl me-2"></i> <span class="font-medium me-1">50</span> Email Account</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-yellow-500 text-xl me-2"></i> <span class="font-medium me-1">5</span> Database</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-yellow-500 text-xl me-2"></i> <span class="font-medium me-1">Unlimited</span> Traffic</li>
                </ul>
            </div>

            <div class="lg:col-span-4">
                <div class="group p-[1px] relative overflow-hidden shadow-lg dark:shadow-gray-800 rounded-md text-center bg-gradient-to-tr from-primary to-blue-700 h-fit">
                    <div class="p-8 py-12 bg-white dark:bg-slate-900 rounded-md text">
                        <h6 class="font-medium mb-5 text-xl">Special Offer Price</h6>

                        <div class="d-flex justify-content-center font-semibold mt-3">
                            <span class="h6 text-slate-400 mb-0 mt-2">$</span>
                            <span class="price text-primary text-5xl h1 mb-0">4.99</span>
                            <span class="h6 text-slate-400 align-self-end mb-1">/mo</span>
                        </div>

                        <p class="text-slate-400 mt-4">Original Price <span class="text-yellow-500">$10.99</span></p>

                        <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary/10 hover:bg-primary border border-primary/10 hover:border-primary text-primary hover:text-white focus:outline-none rounded-md text-center align-middle transition-all duration-500 w-full mt-5">Talk to us</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] text-white/70 font-medium duration-500 ease-in-out hover:text-white"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] text-white/70 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white">Cloud hosting</li>
        </ul>
    </div>
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
    <div class="container lg mx-auto">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Features</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">
            
            <!-- services3 code  -->
            <?php
                include "$base_dir/Components/Hosting/services3.php";
            ?>
        
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container-fluid relative pt-36 pb-56 md:mt-24 mt-16 bg-gradient-to-br from-primary to-yellow-500 opacity-80">
        <div class="container relative">
            <div class="grid grid-cols-1 items-center text-center">
                <h4 class="mb-4 font-medium leading-normal text-3xl text-white">Pricing Table</h4>
                <p class="text-white/70 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
            </div>
        </div><!--end container-->
    </div><!--end container-->

    <div class="container relative">
        <div class="relative -mt-36">
            <div class="grid md:grid-cols-3 gap-[30px]">
                
                <!-- pricing5 code  -->
                <?php
                    include "$base_dir/Components/Hosting/pricing5.php";
                ?>

            </div><!--end grid-->
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
<!-- End  -->

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>
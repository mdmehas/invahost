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

<!-- Start Hero -->
<section class="relative items-center overflow-hidden bg-gradient-to-t from-primary/70 to-primary/10 dark:from-primary/80 dark:to-primary/20">
    <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/shape-1.png'; ?>');"></div>
    <div class="container relative z-2">
        <div class="grid grid-cols-1 md:mt-44 mt-32 text-center">
            <h4 class="text-4xl leading-normal font-semibold mb-6">Unlimited Reseller Hosting</h4>
            <p class="text-slate-400 text-[17px] max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>

            <div class="mt-6">
                <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-yellow-500 hover:bg-yellow-600 border border-yellow-500 hover:border-yellow-600 text-white focus:ring-[3px] focus:ring-yellow-500 focus:ring-opacity-25 focus:outline-none rounded-md text-center align-middle transition-all duration-500">Get Started</a>
            </div>
        </div><!--end grid-->

        <div class="md:flex justify-center mt-10">
            <div class="lg:w-1/2 md:w-2/3">
                <img src="<?php echo $static_url; ?>/images/reseller.svg" class="mx-auto" alt="">
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 marketing-hero md:h-[250px] sm:h-[140px] h-[60px] bg-white dark:bg-slate-900 overflow-hidden z-1 text-white dark:text-slate-900"></div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Choose Your Reseller Hosting</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- plans3 code  -->
            <?php
                include "$base_dir/Components/Hosting/plans3.php";
            ?>

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">All the power and performance you'll ever need</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- hosting2 code  -->
            <?php
                include "$base_dir/Components/Hosting/hosting2.php";
            ?>

        </div>
    </div><!--end container-->

    <div class="container-fluid relative py-36 md:mt-24 mt-16 bg-gradient-to-br from-primary to-yellow-500 opacity-80">
        <div class="container relative">
            <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                <div>
                    <h4 class="font-semibold leading-normal text-4xl text-white">High quality <br> website hosting</h4>
                </div>
                
                <div>
                    <ul class="list-none text-slate-400">
                        <li class="mb-1 flex text-white/70"><i class="uil uil-check-circle text-yellow-500 text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-1 flex text-white/70"><i class="uil uil-check-circle text-yellow-500 text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-1 flex text-white/70"><i class="uil uil-check-circle text-yellow-500 text-xl me-2"></i> Create your own skin to match your brand</li>
                    </ul>
                </div>
            </div>
        </div><!--end container-->
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
</section><!--end section-->
<!-- End -->

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>
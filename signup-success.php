<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hoxia/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();

// Optionally define the Hero block content
ob_start();
?>

<!-- Start Hero -->
<section class="relative h-screen flex justify-center items-center bg-slate-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="md:flex justify-center">
            <div class="lg:w-2/6 md:w-2/4 relative overflow-hidden rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800">
                <div class="px-6 py-12 bg-primary text-center">
                    <i class="uil uil-check-circle text-white text-8xl"></i>
                    <h5 class="text-white text-xl tracking-wide uppercase font-semibold mt-2">Success</h5>
                </div>

                <div class="p-6 text-center">
                    <p class="text-slate-900 font-semibold text-xl dark:text-white">Congratulations! 🎉</p> 
                    <p class="text-slate-400 mt-4">Your account has been successfully created. <br> Enjoy your journey. Thank you</p>
                    
                    <div class="mt-6">
                        <a href="index.php" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-lg align-middle transition-all duration-500 w-full">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/no-header.php";
?>
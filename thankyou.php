<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hoxia/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();

// Optionally define the Hero block content
ob_start();
?>

<!-- Start -->
<section class="relative h-screen flex items-center justify-center text-center bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="title-heading text-center my-auto">
                <div class="w-24 h-24 bg-primary/5 dark:bg-primary/20 text-primary rounded-full text-5xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-thumbs-up"></i>
                </div>
                <h1 class="mt-6 mb-8 md:text-5xl text-3xl font-medium">Thank You</h1>
                <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                
                <div class="mt-6">
                    <a href="index.php" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary/5 dark:bg-primary/20 hover:bg-primary dark:hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white focus:outline-none rounded-lg align-middle transition-all duration-500">Back to Home</a>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/no-header.php";
?>
<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hoxia/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();

// Optionally define the Hero block content
ob_start();
?>

<section class="md:h-screen py-36 flex items-center justify-center relative overflow-hidden bg-no-repeat bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/bg6.jpg'; ?>');">
    <div class="absolute inset-0 bg-slate-950/70"></div>
    <div class="container relative z-3 text-center">
        <div class="grid grid-cols-1">
            <img src="<?php echo $static_url; ?>/images/logo-icon-40.png" class="mx-auto h-10" alt="">
            <h1 class="text-white mb-6 mt-8 md:text-5xl text-3xl font-semibold">We Are Back Soon...</h1>
            <p class="text-white/70 text-md max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-10">
            <div class="text-center">
                <span id="maintenance" class="timer text-white text-[56px] tracking-[1px]"></span>
                <span class="block text-base font-medium uppercase text-white">Minutes</span>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="text-center subcribe-form">
                <form class="relative mx-auto max-w-xl">
                    <input type="email" id="subemail" name="name" class="pt-4 pe-40 pb-4 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-lg bg-white/70 dark:bg-slate-900/70 border border-gray-200 dark:border-gray-700" placeholder="Enter your email id..">
                    <button type="submit" class="absolute top-[2px] end-[3px] h-[46px] inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-lg align-middle transition-all duration-500">Subcribe Now</button>
                </form><!--end form-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/no-header.php";
?>
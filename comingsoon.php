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
    <div class="container-fluid relative z-3">
        <div class="grid grid-cols-1">
            <div class="flex flex-col min-h-screen justify-center md:px-10 py-10 px-4">
                <div class="text-center">
                    <a href="index.php"><img src="<?php echo $static_url; ?>/images/logo-icon-40.png" class="mx-auto h-10" alt=""></a>
                </div>
                <div class="title-heading text-center my-auto">
                    <h1 class="text-white mt-3 mb-6 md:text-5xl text-3xl font-semibold">We Are Coming Soon...</h1>
                    <p class="text-white/70 text-md max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                
                    <div id="countdown">
                        <ul class="count-down list-none inline-block text-white text-center mt-8 m-6">
                            <li id="days" class="count-number inline-block m-2"></li>
                            <li id="hours" class="count-number inline-block m-2"></li>
                            <li id="mins" class="count-number inline-block m-2"></li>
                            <li id="secs" class="count-number inline-block m-2"></li>
                            <li id="end" class="h1"></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <p class="mb-0 text-slate-400 font-medium">© <script>document.write(new Date().getFullYear())</script> Hoxia. Design & Develop with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/no-header.php";
?>
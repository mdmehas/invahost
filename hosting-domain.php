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
<section class="relative md:flex md:h-screen md:py-0 table w-full py-36 justify-center items-center bg-top bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/domain.jpg'; ?>');">
    <div class="container relative">
        <div class="grid grid-cols-1 mt-12">
            <h3 class="lg:text-5xl text-4xl lg:leading-normal leading-normal font-semibold text-slate-900 mb-6">The Perfect Place to <br> Host Your Website</h3>
            <p class="text-slate-400 text-[17px] max-w-xl">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>

            <div class="mt-6">
                <form class="relative max-w-xl">
                    <input type="text" id="searchDomain" name="text" class="pt-4 pe-40 pb-4 ps-6 w-full h-12 outline-none text-black rounded-lg bg-white shadow" placeholder="Search Your Domain">
                    <button type="submit" class="absolute top-[0] end-[0] h-12 inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-e-lg align-middle transition-all duration-500"><i class="uil uil-search"></i> Search</button>
                </form><!--end form-->
            </div>

            <ul class="list-none mt-2">
                
                <!-- domain3 code  -->
                <?php
                    include "$base_dir/Components/Hosting/domain3.php";
                ?>

            </ul>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Web Hosting Features</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                
            <!-- hosting2 code  -->
            <?php
                include "$base_dir/Components/Hosting/hosting2.php";
            ?>

        </div>
    </div>

    <div class="container md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Domain Pricing Table</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">
                <table class="w-full text-start">
                    
                    <!-- table code  -->
                    <?php
                        include "$base_dir/Components/Hosting/table.php";
                    ?>

                </table>
            </div>
        </div>
    </div><!--end container-->

    <div class="container-fluid md:mt-24 mt-16 relative bg-top bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/cta.png'; ?>');">
        <div class="py-36">
            <div class="absolute inset-0 bg-gradient-to-br from-primary to-yellow-500 opacity-80"></div>

            <div class="container relative">
                <div class="grid grid-cols-1 text-center">
                    <h4 class="font-semibold leading-normal text-4xl mb-5 text-white">Managed WordPress Hosting Or Server</h4>
                    <p class="text-white/70 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                
                    <div class="mt-6">
                        <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-yellow-500 hover:bg-yellow-600 border border-yellow-500 hover:border-yellow-600 text-white focus:ring-[3px] focus:ring-yellow-500 focus:ring-opacity-25 focus:outline-none rounded-md text-center align-middle transition-all duration-500">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
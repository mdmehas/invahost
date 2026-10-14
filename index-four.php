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
<section class="relative lg:py-64 py-36 bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/bg1.jpg'; ?>');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950 to-transparent "></div>
    <div class="container relative">
        <div class="grid grid-cols-1 items-center text-center mt-10">
            <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Choose your web hosting <br> plan for <span class="typewrite text-yellow-500" data-period="2000" data-type='[ "Personal", "Business", "Starup", "Enterprise" ]'> <span class="wrap"></span> </span></h4>
            <p class="text-white/70 text-lg max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        
            <div class="mt-6">
                <form class="relative max-w-xl mx-auto">
                    <input type="text" id="searchDomain" name="text" class="pt-4 pe-40 pb-4 ps-6 w-full h-12 outline-none text-black rounded-lg bg-white shadow" placeholder="Search Your Domain">
                    <button type="submit" class="absolute top-[0] end-[0] h-12 inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-e-lg align-middle transition-all duration-500"><i class="uil uil-search"></i> Search</button>
                </form><!--end form-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:pb-24 pb-16 -mt-[74px]">
    <div class="container relative">
        <div class="grid grid-cols-1 relative">
            <div class="tiny-six-item">
                
                <!-- domains code  -->
                <?php
                    include "$base_dir/Components/Home/index/domains.php";
                ?>
            
            </div>
        </div>
    </div>

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Explore Our Hosting Pricing</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <!-- pricing3 code  -->
        <?php
            include "$base_dir/Components/Home/index-four/pricing3.php";
        ?>

    </div>

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Hosting Services</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                
            <!-- services code  -->
            <?php
                include "$base_dir/Components/Home/index/services.php";
            ?>

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
            
        <!-- about code  -->
        <?php
            include "$base_dir/Components/Home/index/about.php";
        ?>

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
            
        <!-- security code  -->
        <?php
            include "$base_dir/Components/Home/index/security.php";
        ?>
    
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
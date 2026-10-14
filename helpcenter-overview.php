<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hoxia/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();
$page= 'nav3';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();
?>

<!-- Start Hero -->
<section class="relative table w-full py-36 bg-center bg-no-repeat bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/bg6.jpg'; ?>');">
    <div class="absolute inset-0 bg-primary-900/80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-snug leading-snug font-medium text-white">Hello ! <br> How can we help you?</h3>

            <div class="text-center subcribe-form mt-4 pt-2">
                <form class="relative mx-auto max-w-xl">
                    <input type="text" id="help" name="name" class="pt-4 pe-40 pb-4 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-lg bg-white/70 dark:bg-slate-900/70 shadow-sm dark:shadow-gray-800" placeholder="Search your questions or topic...">
                    <button type="submit" class="absolute top-[2px] end-[3px] h-[46px] inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-lg align-middle transition-all duration-500">Search</button>
                </form><!--end form-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] text-white ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white">Helpcenter</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl md:leading-snug leading-snug font-medium">Find The Help You Need</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">
            
            <!-- needs code  -->
            <?php
                include "$base_dir/Components/Pages/needs.php";
            ?>
        
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl md:leading-snug leading-snug font-medium">Get Started</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="flex justify-center mt-8">
            <div class="lg:w-2/3">
                <div id="accordion-collapseone" data-accordion="collapse" class="mt-6">
                    <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden">
                        <h2 class="text-base font-medium" id="accordion-collapse-heading-1">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                <span class="text-[17px]">How does it work ?</span>
                                <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                        <h2 class="text-base font-medium" id="accordion-collapse-heading-2">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span class="text-[17px]">Do I need a designer to use Hoxia ?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                        <h2 class="text-base font-medium" id="accordion-collapse-heading-3">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                <span class="text-[17px]">What do I need to do to start selling ?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                        <h2 class="text-base font-medium" id="accordion-collapse-heading-4">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                                <span class="text-[17px]">What happens when I receive an order ?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>
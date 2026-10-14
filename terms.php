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
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Terms & Services</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] text-white ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white">Terms & Services</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Terms & Conditions -->
<section class="relative lg:py-24 py-16">
    <div class="container relative">
        <div class="md:flex justify-center">
            <div class="md:w-3/4">
                <div class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                    <h5 class="text-xl font-medium mb-4">Introduction :</h5>
                    <p class="text-slate-400">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text.</p>

                    <h5 class="text-xl font-medium mb-4 mt-8">User Agreements :</h5>
                    <p class="text-slate-400">The most well-known dummy text is the 'Lorem Ipsum', which is said to have <span class="text-red-600">originated</span> in the 16th century. Lorem Ipsum is <span class="text-red-600">composed</span> in a pseudo-Latin language which more or less <span class="text-red-600">corresponds</span> to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also <span class="text-red-600">incomprehensible</span>, but it imitates the rhythm of most European languages in Latin script. The <span class="text-red-600">advantage</span> of its Latin origin and the relative <span class="text-red-600">meaninglessness</span> of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's <span class="text-red-600">attention</span> from the layout.</p>
                    <p class="text-slate-400 mt-3">There is now an <span class="text-red-600">abundance</span> of readable dummy texts. These are usually used when a text is <span class="text-red-600">required purely</span> to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or <span class="text-red-600">nonsensical</span> stories.</p>
                    <p class="text-slate-400 mt-3">It seems that only <span class="text-red-600">fragments</span> of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text.</p>
                    
                    <h5 class="text-xl font-medium mb-4 mt-8">Restrictions :</h5>
                    <p class="text-slate-400">You are specifically restricted from all of the following :</p>
                    <ul class="list-none text-slate-400 mt-3">
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-primary align-middle me-2"></i>Digital Marketing Solutions for Tomorrow</li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-primary align-middle me-2"></i>Our Talented & Experienced Marketing Agency</li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-primary align-middle me-2"></i>Create your own skin to match your brand</li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-primary align-middle me-2"></i>Digital Marketing Solutions for Tomorrow</li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-primary align-middle me-2"></i>Our Talented & Experienced Marketing Agency</li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-primary align-middle me-2"></i>Create your own skin to match your brand</li>
                    </ul>

                    <h5 class="text-xl font-medium mt-8">Users Question & Answer :</h5>

                    <div id="accordion-collapse" data-accordion="collapse" class="mt-6">
                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-1">
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
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-2">
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
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-3">
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
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-4">
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

                    <div class="mt-6">
                        <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-lg align-middle transition-all duration-500">Accept</a>
                        <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-transparent hover:bg-primary border border-primary text-primary hover:text-white focus:outline-none rounded-lg align-middle transition-all duration-500 ms-1">Decline</a>
                    </div>
                </div>
            </div><!--end -->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Terms & Conditions -->

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>
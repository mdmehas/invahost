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
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Frequently Asked Questions</h3>

        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] text-white ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white/50 hover:text-white"><a href="helpcenter-overview.php">Helpcenter</a></li>
            <li class="inline-block text-[15px] text-white ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white">FAQs</li>
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

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-5">
                <div class="rounded-md shadow-sm dark:shadow-gray-800 p-6 sticky top-20">
                    <ul class="list-none sidebar-nav mb-0 py-0" id="navmenu-nav">
                        <li class="navbar-item p-0"><a href="#tech" class="text-base font-medium navbar-link">Buying Questions</a></li>
                        <li class="navbar-item mt-3 p-0"><a href="#general" class="text-base font-medium navbar-link">General Questions</a></li>
                        <li class="navbar-item mt-3 p-0"><a href="#payment" class="text-base font-medium navbar-link">Payments Questions</a></li>
                        <li class="navbar-item mt-3 p-0"><a href="#support" class="text-base font-medium navbar-link">Support Questions</a></li>
                    </ul>
                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-7">
                <div id="tech">
                    <h5 class="text-2xl font-medium">Buying Product</h5>

                    <div id="accordion-collapseone" data-accordion="collapse" class="mt-6">
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
                </div>

                <div id="general" class="mt-8">
                    <h5 class="text-2xl font-medium">General Questions</h5>

                    <div id="accordion-collapsetwo" data-accordion="collapse" class="mt-6">
                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-5">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-5" aria-expanded="true" aria-controls="accordion-collapse-body-5">
                                    <span class="text-[17px]">How does it work ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-6">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-6" aria-expanded="false" aria-controls="accordion-collapse-body-6">
                                    <span class="text-[17px]">Do I need a designer to use Hoxia ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-7">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-7" aria-expanded="false" aria-controls="accordion-collapse-body-7">
                                    <span class="text-[17px]">What do I need to do to start selling ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-7">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-8">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-8" aria-expanded="false" aria-controls="accordion-collapse-body-8">
                                    <span class="text-[17px]">What happens when I receive an order ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-8" class="hidden" aria-labelledby="accordion-collapse-heading-8">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="payment" class="mt-8">
                    <h5 class="text-2xl font-medium">Payments Questions</h5>

                    <div id="accordion-collapsethree" data-accordion="collapse" class="mt-6">
                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-9">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-9" aria-expanded="true" aria-controls="accordion-collapse-body-9">
                                    <span class="text-[17px]">How does it work ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-9" class="hidden" aria-labelledby="accordion-collapse-heading-9">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-10">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-10" aria-expanded="false" aria-controls="accordion-collapse-body-10">
                                    <span class="text-[17px]">Do I need a designer to use Hoxia ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-10" class="hidden" aria-labelledby="accordion-collapse-heading-10">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-11">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-11" aria-expanded="false" aria-controls="accordion-collapse-body-11">
                                    <span class="text-[17px]">What do I need to do to start selling ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-11" class="hidden" aria-labelledby="accordion-collapse-heading-11">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-12">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-12" aria-expanded="false" aria-controls="accordion-collapse-body-12">
                                    <span class="text-[17px]">What happens when I receive an order ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-12" class="hidden" aria-labelledby="accordion-collapse-heading-12">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="support" class="mt-8">
                    <h5 class="text-2xl font-medium">Support Questions</h5>

                    <div id="accordion-collapsefour" data-accordion="collapse" class="mt-6">
                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-13">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-13" aria-expanded="true" aria-controls="accordion-collapse-body-13">
                                    <span class="text-[17px]">How does it work ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-13" class="hidden" aria-labelledby="accordion-collapse-heading-13">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-14">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-14" aria-expanded="false" aria-controls="accordion-collapse-body-14">
                                    <span class="text-[17px]">Do I need a designer to use Hoxia ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-14" class="hidden" aria-labelledby="accordion-collapse-heading-14">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-15">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-15" aria-expanded="false" aria-controls="accordion-collapse-body-15">
                                    <span class="text-[17px]">What do I need to do to start selling ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-15" class="hidden" aria-labelledby="accordion-collapse-heading-15">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-16">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-16" aria-expanded="false" aria-controls="accordion-collapse-body-16">
                                    <span class="text-[17px]">What happens when I receive an order ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-16" class="hidden" aria-labelledby="accordion-collapse-heading-16">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
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
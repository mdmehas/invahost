<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hoxia/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();
$page= 'nav4';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();
?>

<!-- Start -->
<section class="relative table w-full md:py-40 py-36 bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/bg5.png'; ?>');">
    <div class="absolute inset-0 bg-primary/5"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-12">
            <h3 class="md:text-4xl text-3xl md:leading-snug leading-snug font-medium">Hoxia.com</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out hover:text-primary"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out hover:text-primary"><a href="hosting-domain.php">Domain</a></li>
            <li class="inline-block text-[15px] ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-primary">Hoxia.com</li>
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
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] items-center">
            <div class="lg:col-span-5 md:col-span-6">
                <div class="tiny-single-item">
                    <div class="tiny-slide">
                        <img src="<?php echo $static_url; ?>/images/shop/com.jpg" class="rounded-md shadow-sm dark:shadow-gray-800" alt="">
                    </div><!--end content-->
                </div><!--end tiny slider-->
            </div><!--end col-->

            <div class="lg:col-span-7 md:col-span-6">
                <div class="lg:ms-6">
                    <h5 class="text-2xl font-semibold">hoxia.com</h5>
                    <div class="mt-2">
                        <span class="text-slate-400 font-semibold me-1">$16USD <del class="text-red-600">$21USD</del></span>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-lg font-semibold">Overview :</h5>
                        <p class="text-slate-400 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero exercitationem, unde molestiae sint quae inventore atque minima natus fugiat nihil quisquam voluptates ea omnis. Modi laborum soluta tempore unde accusantium.</p>
                    
                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Create your own skin to match your brand</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-md text-center align-middle transition-all duration-500 me-2 mt-2">Shop Now</a>
                        <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary/5 hover:bg-primary border border-primary/10 hover:border-primary text-primary hover:text-white focus:outline-none rounded-md text-center align-middle transition-all duration-500 mt-2">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-10 gap-[30px]">
            <div class="lg:col-span-3 md:col-span-5">
                <div class="sticky top-20">
                    <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full hover:text-primary transition-all duration-500 ease-in-out" id="description-tab" data-tabs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 transition-all duration-500 ease-in-out" id="addinfo-tab" data-tabs-target="#addinfo" type="button" role="tab" aria-controls="addinfo" aria-selected="false">Additional Information</button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 transition-all duration-500 ease-in-out" id="review-tab" data-tabs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="lg:col-span-9 md:col-span-7">
                <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">
                    <div class="" id="description" role="tabpanel">
                        <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area). For this reason, dummy text usually consists of a more or less random series of words or syllables.</p>
                    </div>

                    <div class="hidden" id="addinfo" role="tabpanel" aria-labelledby="addinfo-tab">
                        <table class="w-full text-start">
                            <tbody>
                                <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                    <td class="font-semibold py-4" style="width: 100px;">Name</td>
                                    <td class="text-slate-400 py-4">.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="hidden" id="review" role="tabpanel" aria-labelledby="review-tab">
                        
                        <!-- reviews2 code  -->
                        <?php
                            include "$base_dir/Components/Hosting/reviews2.php";
                        ?>

                        <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 mt-8">
                            <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                            <form class="mt-8">
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-start">
                                            <label for="name" class="font-semibold">Your Name:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input name="name" id="name" type="text" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-start">
                                            <label for="email" class="font-semibold">Your Email:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input name="email" id="email" type="email" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="Email :">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <div class="text-start">
                                            <label for="comments" class="font-semibold">Your Comment:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="message-circle" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block tracking-wide align-middle transition duration-500 ease-in-out text-base text-center bg-primary border border-primary text-white rounded-md w-full">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>
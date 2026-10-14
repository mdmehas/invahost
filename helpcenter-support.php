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
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Submit Your Support Request</h3>

        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] text-white ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white/50 hover:text-white"><a href="helpcenter-overview.php">Helpcenter</a></li>
            <li class="inline-block text-[15px] text-white ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white">Support</li>
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
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] mx-auto">
            <div class="lg:col-start-3 lg:col-span-8 md:col-start-2 md:col-span-10">
                <div class="bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800 p-6">
                    <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                        <p class="mb-0" id="error-msg"></p>
                        <div id="simple-msg"></div>
                        <div class="grid lg:grid-cols-12 lg:gap-6">
                            <div class="lg:col-span-6 mb-5">
                                <div class="text-start">
                                    <label for="name" class="form-lable font-medium">Your Name:</label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                        <input name="name" id="name" type="text" class="form-input w-full text-[15px] py-2 px-3 ps-11 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="Name :">
                                    </div>
                                </div>
                            </div>

                            <div class="lg:col-span-6 mb-5">
                                <div class="text-start">
                                    <label for="email" class="form-lable font-medium">Your Email:</label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                        <input name="email" id="email" type="email" class="form-input w-full text-[15px] py-2 px-3 ps-11 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="Email :">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="mb-5">
                                <div class="text-start">
                                    <label for="subject" class="form-lable font-medium">Your Question:</label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="book" class="w-4 h-4 absolute top-3 start-4"></i>
                                        <input name="subject" id="subject" class="form-input w-full text-[15px] py-2 px-3 ps-11 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="Subject :">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <div class="text-start">
                                    <label for="comments" class="form-lable font-medium">Your Comment:</label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="message-circle" class="w-4 h-4 absolute top-3 start-4"></i>
                                        <textarea name="comments" id="comments" class="form-input w-full text-[15px] py-2 px-3 ps-11 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="Message :"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="send" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-lg align-middle transition-all duration-500">Send Message</button>
                    </form>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="container relative md:mt-24 mt-16">
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
</section><!--end section-->
<!-- End Section-->

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>
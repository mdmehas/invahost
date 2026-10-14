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
            <h3 class="md:text-4xl text-3xl md:leading-snug leading-snug font-medium">Contact Us</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out hover:text-primary"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-primary">Contact Us</li>
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
<section class="relative lg:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-7 md:col-span-6">
                <img src="<?php echo $static_url; ?>/images/contact.svg" alt="">
            </div>

            <div class="lg:col-span-5 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-700 p-6">
                        <h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch !</h3>

                        <form method="post" name="myForm" id="myForm">
                            <p class="mb-0" id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <label for="name" class="font-medium">Your Name:</label>
                                    <input name="name" id="name" type="text" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Name :">
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <label for="email" class="font-medium">Your Email:</label>
                                    <input name="email" id="email" type="email" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Email :">
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <label for="subject" class="font-medium">Your Question:</label>
                                    <input name="subject" id="subject" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Subject :">
                                </div>

                                <div class="mb-5">
                                    <label for="comments" class="font-medium">Your Comment:</label>
                                    <textarea name="comments" id="comments" class="form-input w-full text-[15px] py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Message :"></textarea>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-md text-center align-middle transition-all duration-500">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
    
    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            
            <!-- contacts code  -->
            <?php
                include "$base_dir/Components/Contact/contacts.php";
            ?>

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>
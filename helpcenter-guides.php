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
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Guides & Support</h3>

        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] text-white ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white/50 hover:text-white"><a href="helpcenter-overview.php">Helpcenter</a></li>
            <li class="inline-block text-[15px] text-white ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-white">Guides</li>
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
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div class="">
                <h5 class="font-medium text-xl">Getting started</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Deciding to purchase</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>List your space</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Landing an experience or adventure</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Top uses questions</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-medium text-xl">Your calendar</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Pricing & availability</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Booking settings</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Responding to enquiries & requests</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Snoozing or deactivating your listing</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-medium text-xl">Your listings</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Updating your listing</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Neighbourhoods</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Listing photos & photography</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Hoxia Plus</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>API-connected software</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-medium text-xl">How payouts work</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Getting paid</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Adding payout info</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Your payout status</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Donations</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Taxes</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-medium text-xl">Your reservations</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Hoxia safely</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Hoxia Experiences and Adventures</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Changing a reservation</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Cancelling a reservation</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Long-term reservations</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-medium text-xl">Reservation help</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Help with a reservation or guest</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Guest cancellations</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-medium text-xl">Your account</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Your profile</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Account security</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Identification & verifications</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Reviews</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-primary me-2"></i>Superhost status</a></li>
                </ul>
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
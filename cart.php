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
            <h3 class="md:text-4xl text-3xl md:leading-snug leading-snug font-medium">Shop Cart</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out hover:text-primary"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-primary">Cart</li>
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
    <div class="container">
        <div class="grid lg:grid-cols-1">
            <div class="relative overflow-x-auto shadow-sm dark:shadow-gray-800 rounded-md">
                <table class="w-full text-start">
                    <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                        <tr>
                            <th scope="col" class="font-medium p-4 w-4"></th>
                            <th scope="col" class="font-medium text-start p-4 min-w-[220px]">Product</th>
                            <th scope="col" class="font-medium p-4 w-24 min-w-[100px]">Price</th>
                            <th scope="col" class="font-medium p-4 w-56 min-w-[220px]">Qty</th>
                            <th scope="col" class="font-medium p-4 w-24 min-w-[100px]">Total($)</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <!-- carts code  -->
                        <?php
                            include "$base_dir/Components/Domain/carts.php";
                        ?>

                    </tbody>
                </table>
            </div>

            <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-9 md:order-1 order-3">
                    <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-md text-center align-middle transition-all duration-500 me-2 mt-2">Shop Now</a>
                    <a href="" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary/10 hover:bg-primary border border-primary/10 hover:border-primary text-primary hover:text-white focus:outline-none rounded-md text-center align-middle transition-all duration-500 mt-2">Add to Cart</a>
                </div>

                <div class="lg:col-span-3 md:order-2 order-1">
                    <ul class="list-none shadow-sm dark:shadow-gray-800 rounded-md">
                        <li class="flex justify-between p-4">
                            <span class="font-medium">Subtotal :</span>
                            <span class="text-slate-400">$ 33</span>
                        </li>
                        <li class="flex justify-between p-4 border-t border-gray-100 dark:border-gray-800">
                            <span class="font-medium">Taxes :</span>
                            <span class="text-slate-400">$ 3</span>
                        </li>
                        <li class="flex justify-between font-medium p-4 border-t border-gray-200 dark:border-gray-600">
                            <span class="font-medium">Total :</span>
                            <span class="font-medium">$ 36</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- available code  -->
        <?php
            include "$base_dir/Components/Domain/available.php";
        ?>

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>
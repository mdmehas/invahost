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
            <h3 class="md:text-4xl text-3xl md:leading-snug leading-snug font-medium">Checkouts</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out hover:text-primary"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-primary">Checkout</li>
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
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8">
                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800">
                    <h3 class="text-xl leading-normal font-medium">Billing address</h3>

                    <form>
                        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-5">
                            <div class="lg:col-span-6">
                                <label class="form-label font-medium">First Name : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="First Name:" id="firstname" name="name" required="">
                            </div>

                            <div class="lg:col-span-6">
                                <label class="form-label font-medium">Last Name : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Last Name:" id="lastname" name="name" required="">
                            </div>

                            <div class="lg:col-span-6">
                                <label class="form-label font-medium">Username</label>
                                <div class="relative mt-2">
                                    <span class="absolute top-0.5 start-0.5 w-9 h-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="basic-addon1"><i class="uil uil-at"></i></span>
                                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="username" id="username" required>
                                </div>
                            </div>

                            <div class="lg:col-span-6">
                                <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                <input type="email" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Email" name="email" required="">
                            </div>

                            <div class="lg:col-span-12">
                                <label class="form-label font-medium">Address : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Address:" id="address" name="name" required="">
                            </div>

                            <div class="lg:col-span-12">
                                <label class="form-label font-medium">Address 2 : </label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Address:" id="address2" name="name" required="">
                            </div>

                            <div class="lg:col-span-4">
                                <label class="font-medium">Country:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0">
                                    <option value="USA">USA</option>
                                    <option value="CAD">Canada</option>
                                    <option value="CHINA">China</option>
                                </select>
                            </div>

                            <div class="lg:col-span-4">
                                <label class="font-medium">State:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0">
                                    <option value="CAL">California</option>
                                    <option value="TEX">Texas</option>
                                    <option value="FLOR">Florida</option>
                                </select>
                            </div>

                            <div class="lg:col-span-4">
                                <label class="form-label font-medium">Zip Code : <span class="text-red-600">*</span></label>
                                <input type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Zip:" id="zipcode" name="number" required="">
                            </div>

                            <div class="lg:col-span-12">
                                <div class="flex items-center w-full mb-0">
                                    <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-primary focus:border-primary-300 focus:ring focus:ring-offset-0 focus:ring-primary-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="sameaddress">
                                    <label class="form-check-label text-slate-400" for="sameaddress">Shipping address is the same as my billing address</label>
                                </div>

                                <div class="flex items-center w-full mb-0">
                                    <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-primary focus:border-primary-300 focus:ring focus:ring-offset-0 focus:ring-primary-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="savenexttime">
                                    <label class="form-check-label text-slate-400" for="savenexttime">Save this information for next time</label>
                                </div>
                            </div>
                        </div>
                    </form>

                    <h3 class="text-xl leading-normal font-medium mt-6">Payment</h3>

                    <form>
                        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-5">
                            <div class="lg:col-span-12">
                                <div class="block">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio border-gray-200 dark:border-gray-800 text-primary focus:border-primary-300 focus:ring focus:ring-offset-0 focus:ring-primary-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1" checked>
                                            <span class="text-slate-400">Credit card</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="block mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio border-gray-200 dark:border-gray-800 text-primary focus:border-primary-300 focus:ring focus:ring-offset-0 focus:ring-primary-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                                            <span class="text-slate-400">Debit Card</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="block mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio border-gray-200 dark:border-gray-800 text-primary focus:border-primary-300 focus:ring focus:ring-offset-0 focus:ring-primary-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                                            <span class="text-slate-400">PayPal</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="lg:col-span-6">
                                <label class="form-label font-medium">Account Holder Name : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Name:" id="accountname" name="name" required="">
                            </div>

                            <div class="lg:col-span-6">
                                <label class="form-label font-medium">Credit card number : <span class="text-red-600">*</span></label>
                                <input type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="**** **** **** ****" id="cardnumber" name="number" required="">
                            </div>

                            <div class="lg:col-span-3">
                                <label class="form-label font-medium">Expiration : <span class="text-red-600">*</span></label>
                                <input type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="" id="expiration" name="number" required="">
                            </div>

                            <div class="lg:col-span-3">
                                <label class="form-label font-medium">CVV : <span class="text-red-600">*</span></label>
                                <input type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="" id="cvv" name="number" required="">
                            </div>
                        </div>
                    </form>
                    <div class="mt-4">
                        <input type="submit" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-md text-center align-middle transition-all duration-500 w-full" value="Continue to checkout">
                    </div>
                </div>

            </div><!--end col-->

            <div class="lg:col-span-4">
                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800">
                    <div class="flex justify-between items-center">
                        <h5 class="text-lg font-medium">Your Cart</h5>

                        <a href="javascript:void(0)" class="bg-primary flex justify-center items-center text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full h-5">3</a>
                    </div>

                    <div class="mt-4 rounded-md shadow-sm dark:shadow-gray-800">
                        <div class="p-3 flex justify-between items-center">
                            <div>
                                <h5 class="font-medium">Product Name</h5>
                                <p class="text-sm text-slate-400">Brief description</p>
                            </div>

                            <p class="text-slate-400 font-medium">$ 12</p>
                        </div>
                        <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800">
                            <div>
                                <h5 class="font-medium">Second product</h5>
                                <p class="text-sm text-slate-400">Brief description</p>
                            </div>

                            <p class="text-slate-400 font-medium">$ 18</p>
                        </div>
                        <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800">
                            <div>
                                <h5 class="font-medium">Third item</h5>
                                <p class="text-sm text-slate-400">Brief description</p>
                            </div>

                            <p class="text-slate-400 font-medium">$ 20</p>
                        </div>
                        <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-slate-800 text-green-600">
                            <div>
                                <h5 class="font-medium">Promo code</h5>
                                <p class="text-sm text-green-600">EXAMPLECODE</p>
                            </div>

                            <p class="text-red-600 font-medium">-$ 10</p>
                        </div>
                        <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800">
                            <div>
                                <h5 class="font-medium">Total (USD)</h5>
                            </div>

                            <p class="font-medium">$ 30</p>
                        </div>
                    </div>

                    <div class="subcribe-form mt-6">
                        <form class="relative max-w-xl">
                            <input type="email" id="subcribe" name="email" class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800" placeholder="Promo code">
                            <button type="submit" class="py-2 px-5 inline-block font-medium tracking-wide align-middle transition duration-500 ease-in-out text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-primary border border-primary text-white rounded-full">Redeem</button>
                        </form><!--end form-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
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
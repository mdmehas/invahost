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
            <h3 class="md:text-4xl text-3xl md:leading-snug leading-snug font-medium">My Account</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out hover:text-primary"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-primary">Account</li>
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
            <div class="lg:col-span-3 md:col-span-5">
                <div class="flex items-center">
                    <img src="<?php echo $static_url; ?>/images/client/05.jpg" class="h-16 w-16 rounded-full shadow-sm dark:shadow-gray-800" alt="">
                    <div class="ms-2">
                        <p class="font-medium text-slate-400">Hello,</p>
                        <h5 class="text-lg font-medium">Cally Joseph</h5>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-9 md:col-span-7">
                <p class="text-slate-400 max-w-xl">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
            </div><!--end col-->

            <div class="lg:col-span-3 md:col-span-5">
                <div class="sticky top-20">
                    <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-medium rounded-md w-full hover:text-primary transition-all duration-500 ease-in-out" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true"><i class="uil uil-dashboard text-[20px] me-2 align-middle"></i> Dashboard</button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-medium rounded-md w-full mt-3 transition-all duration-500 ease-in-out" id="order-tab" data-tabs-target="#order" type="button" role="tab" aria-controls="order" aria-selected="false"><i class="uil uil-list-ul text-[20px] me-2 align-middle"></i> Orders</button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-medium rounded-md w-full mt-3 transition-all duration-500 ease-in-out" id="download-tab" data-tabs-target="#download" type="button" role="tab" aria-controls="download" aria-selected="false"><i class="uil uil-arrow-circle-down text-[20px] me-2 align-middle"></i> Downloads</button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-medium rounded-md w-full mt-3 transition-all duration-500 ease-in-out" id="address-tab" data-tabs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false"><i class="uil uil-map-marker text-[20px] me-2 align-middle"></i> Addresses</button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-medium rounded-md w-full mt-3 transition-all duration-500 ease-in-out" id="accountdetail-tab" data-tabs-target="#accountdetail" type="button" role="tab" aria-controls="accountdetail" aria-selected="false"><i class="uil uil-user text-[20px] me-2 align-middle"></i> Account Details</button>
                        </li>
                        <li role="presentation">
                            <a href="login.php" class="px-4 py-2 text-start text-base font-medium rounded-md w-full mt-3 duration-500 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary dark:hover:text-white block"><i class="uil uil-sign-out-alt text-[20px] me-2 align-middle"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-9 md:col-span-7">
                <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">
                    <div class="" id="dashboard" role="tabpanel">
                        <p class="text-slate-400 font-medium">Hello <span class="text-slate-900 dark:text-white">cally_joseph</span> (not <span class="text-slate-900 dark:text-white">cally_joseph</span>? <a href="javascript:void(0)" class="text-red-600">Log out</a>)</p>

                        <p class="text-slate-400 font-medium mt-4">From your account dashboard you can view your <a href="javascript:void(0)" class="text-red-600">recent orders</a>, manage your <a href="javascript:void(0)" class="text-red-600">shipping and billing addresses</a>, and <a href="javascript:void(0)" class="text-red-600">edit your password and account details</a>.</p>
                    </div>

                    <div class="hidden" id="order" role="tabpanel" aria-labelledby="order-tab">
                        <div class="relative overflow-x-auto shadow-sm dark:shadow-gray-800 rounded-md">
                            <table class="w-full text-start text-slate-500 dark:text-slate-400">
                                <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                                    <tr class="text-start">
                                        <th scope="col" class="px-2 py-3 text-start">Order no.</th>
                                        <th scope="col" class="px-2 py-3 text-start">Date</th>
                                        <th scope="col" class="px-2 py-3 text-start">Status</th>
                                        <th scope="col" class="px-2 py-3 text-start">Total</th>
                                        <th scope="col" class="px-2 py-3 text-start">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <!-- orders code  -->
                                    <?php
                                        include "$base_dir/Components/Domain/orders.php";
                                    ?>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="hidden" id="download" role="tabpanel" aria-labelledby="download-tab">
                        <div class="relative overflow-x-auto shadow-sm dark:shadow-gray-800 rounded-md">
                            <table class="w-full text-start text-slate-500 dark:text-slate-400">
                                <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                                    <tr class="text-start">
                                        <th scope="col" class="px-2 py-3 text-start min-w-[160px]">Product Name</th>
                                        <th scope="col" class="px-2 py-3 text-start min-w-[360px]">Description</th>
                                        <th scope="col" class="px-2 py-3 text-start min-w-[160px]">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white dark:bg-slate-900 text-start">
                                        <th class="px-2 py-3 text-start" scope="row">Quick heal</th>
                                        <td class="px-2 py-3 text-start">It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody.</td>
                                        <td class="px-2 py-3 text-start text-green-600">Downloaded</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="hidden" id="address" role="tabpanel" aria-labelledby="address-tab">
                        <h6 class="text-slate-400 mb-0">The following addresses will be used on the checkout page by default.</h6>
                        <div class="md:flex mt-6">
                            <div class="md:w-1/2 md:px-3">
                                <div class="flex items-center mb-4 justify-between">
                                    <h5 class="text-xl font-medium">Billing Address:</h5>
                                    <a href="#" class="text-primary text-lg"><i class="uil uil-edit align-middle"></i></a>
                                </div>
                                <div class="pt-4 border-t border-gray-100 dark:border-gray-700">
                                    <p class="text-lg font-medium mb-2">Cally Joseph</p>

                                    <ul class="list-none">
                                        <li class="flex">
                                            <i class="uil uil-map-marker text-lg me-2"></i>
                                            <p class="text-slate-400">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>
                                        </li>

                                        <li class="flex mt-1">
                                            <i class="uil uil-phone text-lg me-2"></i>
                                            <p class="text-slate-400">+123 897 5468</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="md:w-1/2 md:px-3 mt-[30] md:mt-0">
                                <div class="flex items-center mb-4 justify-between">
                                    <h5 class="text-xl font-medium">Shipping Address:</h5>
                                    <a href="#" class="text-primary text-lg"><i class="uil uil-edit align-middle"></i></a>
                                </div>
                                <div class="pt-4 border-t border-gray-100 dark:border-gray-700">
                                    <p class="text-lg font-medium mb-2">Cally Joseph</p>

                                    <ul class="list-none">
                                        <li class="flex">
                                            <i class="uil uil-map-marker text-lg me-2"></i>
                                            <p class="text-slate-400">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>
                                        </li>

                                        <li class="flex mt-1">
                                            <i class="uil uil-phone text-lg me-2"></i>
                                            <p class="text-slate-400">+123 897 5468</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden" id="accountdetail" role="tabpanel" aria-labelledby="accountdetail-tab">
                        <h5 class="text-lg font-medium mb-4">Personal Detail :</h5>
                        <form>
                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                <div>
                                    <label class="form-label font-medium">First Name : <span class="text-red-600">*</span></label>
                                    <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="First Name:" id="firstname" name="name" required="">
                                </div>
                                <div>
                                    <label class="form-label font-medium">Last Name : <span class="text-red-600">*</span></label>
                                    <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Last Name:" id="lastname" name="name" required="">
                                </div>
                                <div>
                                    <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                    <input type="email" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Email" name="email" required="">
                                </div>
                                <div>
                                    <label class="form-label font-medium">Occupation : </label>
                                    <input name="name" id="occupation" type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Occupation :">
                                </div>
                            </div><!--end grid-->

                            <div class="grid grid-cols-1">
                                <div class="mt-5">
                                    <label class="form-label font-medium">Description : </label>
                                    <textarea name="comments" id="comments" class="form-input w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Message :"></textarea>
                                </div>
                            </div><!--end row-->

                            <input type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-medium tracking-wide align-middle transition duration-500 ease-in-out text-base text-center bg-primary border border-primary text-white rounded-md mt-5" value="Save Changes">
                        </form><!--end form-->

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-6">
                            <div>
                                <h5 class="text-lg font-medium mb-4">Contact Info :</h5>

                                <form>
                                    <div class="grid grid-cols-1 gap-5">
                                        <div>
                                            <label class="form-label font-medium">Phone No. :</label>
                                            <input name="number" id="number" type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Phone :">
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">Website :</label>
                                            <input name="url" id="url" type="url" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Url :">
                                        </div>
                                    </div><!--end grid-->

                                    <button class="py-2 px-5 inline-block font-medium tracking-wide align-middle transition duration-500 ease-in-out text-base text-center bg-primary border border-primary text-white rounded-md mt-5">Add</button>
                                </form>
                            </div><!--end col-->
                            
                            <div> 
                                <h5 class="text-lg font-medium mb-4">Change password :</h5>
                                <form>
                                    <div class="grid grid-cols-1 gap-5">
                                        <div>
                                            <label class="form-label font-medium">Old password :</label>
                                            <input type="password" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Old password" required="">
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">New password :</label>
                                            <input type="password" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="New password" required="">
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">Re-type New password :</label>
                                            <input type="password" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Re-type New password" required="">
                                        </div>
                                    </div><!--end grid-->

                                    <button class="py-2 px-5 inline-block font-medium tracking-wide align-middle transition duration-500 ease-in-out text-base text-center bg-primary border border-primary text-white rounded-md mt-5">Save password</button>
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
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
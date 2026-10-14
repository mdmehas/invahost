<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hoxia/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();

// Optionally define the Hero block content
ob_start();
?>

<section class="h-screen flex items-center justify-center relative overflow-hidden bg-no-repeat bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/bg6.jpg'; ?>');">
    
    <div class="container relative">
        <div class="md:flex justify-center">
            <div class="lg:w-2/6 md:w-2/4 relative overflow-hidden bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                <div class="p-6">
                    <a href="">
                        <img src="<?php echo $static_url; ?>/images/logo-dark.png" class="mx-auto h-7 block dark:hidden" alt="">
                        <img src="<?php echo $static_url; ?>/images/logo-light.png" class="mx-auto h-7 dark:block hidden" alt="">
                    </a>
                    <h5 class="my-6 text-xl font-medium">Signup</h5>
                    <form action="signup-success.php" class="text-start">
                        <div class="grid grid-cols-1">
                            <div class="mb-4 text-start">
                                <label class="form-label font-medium" for="RegisterName">Your Name:</label>
                                <input id="RegisterName" type="text" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Harry">
                            </div>

                            <div class="mb-4 text-start">
                                <label class="form-label font-medium" for="LoginEmail">Email Address:</label>
                                <input id="LoginEmail" type="email" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="name@example.com">
                            </div>

                            <div class="mb-4 text-start">
                                <label class="form-label font-medium" for="LoginPassword">Password:</label>
                                <input id="LoginPassword" type="password" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Password:">
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center mb-0">
                                    <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-primary focus:border-primary-300 focus:ring focus:ring-offset-0 focus:ring-primary-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="Accept:T&C">
                                    <label class="form-checkbox-label text-slate-400" for="Accept:T&C">I Accept <a href="" class="text-primary">Terms And Condition</a></label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <input type="submit" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-lg align-middle transition-all duration-500 w-full" value="Register">
                            </div>

                            <div class="text-center">
                                <span class="text-slate-400 me-2">Already have an account ? </span> <a href="login.php" class="text-slate-900 dark:text-white font-medium">Sign in</a>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section><!--end section -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/no-header.php";
?>
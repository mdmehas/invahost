<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="index.php">
            <img src="<?php echo $static_url; ?>/images/logo-dark.png" class="h-7 inline-block dark:hidden" alt="">
            <img src="<?php echo $static_url; ?>/images/logo-white.png" class="h-7 hidden dark:inline-block" alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="dropdown inline-block relative">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle h-8 w-8 inline-flex items-center text-center justify-center text-base bg-primary border border-primary text-white focus:outline-none rounded-full align-middle transition-all duration-500" type="button">
                    <i class="uil uil-search"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-48 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <div class="relative">
                        <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                        <input type="text" class="w-full text-[15px] py-2 px-3 h-9 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none focus:ring-0" name="s" id="navSearch" placeholder="Search...">
                    </div>
                </div>
            </li>

            <li class="dropdown inline-block relative ps-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle h-8 w-8 inline-flex items-center text-center justify-center text-base bg-primary border border-primary text-white focus:outline-none rounded-full align-middle transition-all duration-500" type="button">
                    <img src="<?php echo $static_url; ?>/images/flags/usa.png" alt="">
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-36 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <ul class="py-2 text-start">
                        <li class="my-1">
                            <a href="" class="flex items-center text-[14px] font-medium py-1.5 px-4 hover:text-primary"><img src="<?php echo $static_url; ?>/images/flags/germany.png" class="h-6 w-6 rounded-full me-2 shadow-sm dark:shadow-gray-800" alt=""> German</a>
                        </li>
                        <li class="my-1">
                            <a href="" class="flex items-center text-[14px] font-medium py-1.5 px-4 hover:text-primary"><img src="<?php echo $static_url; ?>/images/flags/italy.png" class="h-6 w-6 rounded-full me-2 shadow-sm dark:shadow-gray-800" alt=""> Italian</a>
                        </li>
                        <li class="my-1">
                            <a href="" class="flex items-center text-[14px] font-medium py-1.5 px-4 hover:text-primary"><img src="<?php echo $static_url; ?>/images/flags/russia.png" class="h-6 w-6 rounded-full me-2 shadow-sm dark:shadow-gray-800" alt=""> Russian</a>
                        </li>
                        <li class="my-1">
                            <a href="" class="flex items-center text-[14px] font-medium py-1.5 px-4 hover:text-primary"><img src="<?php echo $static_url; ?>/images/flags/spain.png" class="h-6 w-6 rounded-full me-2 shadow-sm dark:shadow-gray-800" alt=""> Spanish</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="dropdown inline-block relative ps-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle h-8 w-8 inline-flex items-center text-center justify-center text-base bg-primary border border-primary text-white focus:outline-none rounded-full align-middle transition-all duration-500" type="button">
                    <i class="uil uil-shopping-bag"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-60 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <ul class="py-3 text-start" >
                        <li>
                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                <span class="flex items-center">
                                    <img src="<?php echo $static_url; ?>/images/shop/com.jpg" class="rounded shadow-sm dark:shadow-gray-800 w-9" alt="">
                                    <span class="ms-3">
                                        <span class="block h6 text-[16px] font-medium hover:text-primary">hoxia.com</span>
                                        <span class="block text-sm text-slate-400">$12</span>
                                    </span>
                                </span>

                                <span class="text-sm font-semibold">$12</span>
                            </a>
                        </li>

                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>

                        <li class="flex items-center justify-between py-1.5 px-4">
                            <h6 class="font-medium mb-0">Total($):</h6>
                            <h6 class="font-medium mb-0">$12</h6>
                        </li>

                        <li class="py-1.5 px-4">
                            <a href="javascript:void(0)" class="inline-block px-4 py-[6px] text-sm tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-lg align-middle transition-all duration-500">View Cart</a>
                            <a href="javascript:void(0)" class="inline-block px-4 py-[6px] text-sm tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-lg align-middle transition-all duration-500">Checkout</a>
                            <p class="text-sm text-slate-400 mt-1">*T&C Apply</p>
                        </li>
        
                    </ul>
                </div>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="index.php" class="sub-menu-item">Hero One</a></li>
                        <li><a href="index-two.php" class="sub-menu-item">Hero Two</a></li>
                        <li><a href="index-three.php" class="sub-menu-item">Hero Three</a></li>
                        <li><a href="index-four.php" class="sub-menu-item">Hero Four</a></li>
                    </ul>
                </li>

                <li><a href="aboutus.php" class="sub-menu-item">About Us</a></li>

                <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)"> Hosting </a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="hosting-shared.php" class="sub-menu-item">Shared Hosting</a></li>
                        <li><a href="hosting-vps.php" class="sub-menu-item">VPS Hosting</a></li>     
                        <li><a href="hosting-dedicated.php" class="sub-menu-item">Dedicated Server</a></li> 
                        <li><a href="hosting-cloud.php" class="sub-menu-item">Cloud Hosting</a></li>
                        <li><a href="hosting-domain.php" class="sub-menu-item">Domain Name</a></li>
                        <li><a href="hosting-reseller.php" class="sub-menu-item">Reseller Hosting</a></li>
                    </ul>  
                </li>

                <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)"> Domain </a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="domain-detail.php" class="sub-menu-item">Domain Detail</a></li>
                        <li><a href="cart.php" class="sub-menu-item">Cart</a></li>
                        <li><a href="checkouts.php" class="sub-menu-item">Checkout</a></li>
                        <li><a href="my-account.php" class="sub-menu-item">Account</a></li>
                    </ul>
                </li>
        
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="helpcenter-overview.php" class="sub-menu-item">Overview</a></li>
                                <li><a href="helpcenter-faqs.php" class="sub-menu-item">FAQs</a></li>
                                <li><a href="helpcenter-guides.php" class="sub-menu-item">Guides</a></li>
                                <li><a href="helpcenter-support.php" class="sub-menu-item">Support</a></li>
                            </ul>  
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blogs.php" class="sub-menu-item"> Blogs</a></li>
                                <li><a href="blog-detail.php" class="sub-menu-item"> Blog Detail</a></li>
                            </ul> 
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="login.php" class="sub-menu-item"> Login</a></li>
                                <li><a href="signup.php" class="sub-menu-item"> Signup</a></li>
                                <li><a href="reset-password.php" class="sub-menu-item"> Forgot Password</a></li>
                                <li><a href="lock-screen.php" class="sub-menu-item"> Lock Screen</a></li>
                            </ul> 
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="terms.php" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="privacy.php" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>  
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="comingsoon.php" class="sub-menu-item"> Coming Soon</a></li>
                                <li><a href="maintenance.php" class="sub-menu-item"> Maintenance</a></li>
                                <li><a href="error.php" class="sub-menu-item"> 404!</a></li>
                                <li><a href="thankyou.php" class="sub-menu-item"> Thank you</a></li>
                            </ul> 
                        </li>
                    </ul>
                </li>
        
                <li><a href="contact.php" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
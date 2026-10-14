<?php
// $base_dir = __DIR__ . '/Base';
$static_url = '/Hoxia/assets';

// Define the content for the navlink block
ob_start();
?>

<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hoxia - PHP Web Hosting Template</title>
        <meta name="description" content="Tailwind CSS Web Hosting Template">
        <meta name="keywords" content="creative, modern, Tailwind CSS, multipurpose, clean, cloud hosting, creative hosting, dedicated hosting, email hosting, hosting, html5, modern, reseller hosting, sass, server hosting, service, shop, startup hosting, web hosting">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.1.0">
        <!-- favicon -->
        <link href="<?php echo $static_url; ?>/images/favicon.ico" rel="shortcut icon">

        <!-- Css -->
        <!-- Main Css -->
        <link href="<?php echo $static_url; ?>/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $static_url; ?>/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo $static_url; ?>/css/output.css">
        <link rel="stylesheet" href="<?php echo $static_url; ?>/css/tailwind.css">

    </head>
    
    <body class="font-inter text-base text-slate-900 dark:text-white bg-white dark:bg-slate-900">

        <!-- Main Content -->
        <main>
            <?php echo $hero_content ?? '<!-- Default hero content here -->'; ?>
        </main>

        <div class="fixed bottom-3 end-3">
            <a href="" class="back-button h-9 w-9 inline-flex items-center text-center justify-center text-base bg-primary border border-primary text-white focus:outline-none rounded-full align-middle transition-all duration-500"><i data-feather="arrow-left" class="h-4 w-4"></i></a>
        </div>

        <!-- Switcher -->
        <div class="fixed top-1/3 -right-2 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow-sm dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-1/2 -right-3 z-50">
            <a href="" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow-sm dark:shadow-gray-800 font-semibold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow-sm dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="<?php echo $static_url; ?>/libs/feather-icons/feather.min.js"></script>
        <script src="<?php echo $static_url; ?>/js/plugins.init.js"></script>
        <script src="<?php echo $static_url; ?>/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>
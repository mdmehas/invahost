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

$title = isset($_GET['title']) ? $_GET['title'] : '';

$blogs = [
    [
        'id' => 1,
        'img' => '/images/blog/1.jpg', 
        'name' => 'VPS Hosting',
        'title' => 'Quickly formulate backend',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'id' => 2,
        'img' => '/images/blog/2.jpg', 
        'name' => 'VPS Hosting',
        'title' => 'Progressively visualize enabled',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'id' => 3,
        'img' => '/images/blog/3.jpg', 
        'name' => 'VPS Hosting',
        'title' => 'Credibly implement maximizing',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'id' => 4,
        'img' => '/images/blog/4.jpg', 
        'name' => 'VPS Hosting',
        'title' => 'Design your apps in your own way',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'id' => 5,
        'img' => '/images/blog/5.jpg', 
        'name' => 'VPS Hosting',
        'title' => 'How apps is changing the IT world',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'id' => 6,
        'img' => '/images/blog/6.jpg', 
        'name' => 'VPS Hosting',
        'title' => 'Smartest Applications for Business',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'id' => 7,
        'img' => '/images/blog/7.jpg', 
        'name' => 'VPS Hosting',
        'title' => 'QChange Your Strategy',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'id' => 8,
        'img' => '/images/blog/8.jpg', 
        'name' => 'VPS Hosting',
        'title' => 'Find a Business Consultant',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'id' => 9,
        'img' => '/images/blog/9.jpg', 
        'name' => 'VPS Hosting',
        'title' => 'On the other hand we provide',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ]
];

$article = null;
if ($title === '') {
    $article = $blogs;

} else {
    // Search for the article by slugified title
    foreach ($blogs as $item) {
        $slugifiedTitle = str_replace(' ', '-', strtolower($item['title']));
        if ($slugifiedTitle === $title) {
            $article = $item;
            break;
        }
    }
}

if ($article === null) {
    echo "Article not found.";
    exit;
}
?>

<!-- Start -->
<section class="relative table w-full md:py-40 py-36 bg-center bg-cover" style="background-image: url('<?php echo $static_url . '/images/bg/bg5.png'; ?>');">
    <div class="absolute inset-0 bg-primary/5"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-12">
            <h3 class="text-3xl leading-snug font-medium">
                <?php 
                    if (!empty($article['title'])) {
                            echo $article['title']; 
                    } else {
                        echo "How to work with Web Hosting ?"; 
                    }
                ?>
            </h3>

            <ul class="list-none mt-6">
                <li class="inline-block text-slate-400 mx-5"> <span class="text-slate-900 dark:text-white block">Author :</span> <span class="block">Google</span></li>
                <li class="inline-block text-slate-400 mx-5"> <span class="text-slate-900 dark:text-white block">Date :</span> <span class="block">21st Feb, 2026</span></li>
                <li class="inline-block text-slate-400 mx-5"> <span class="text-slate-900 dark:text-white block">Time :</span> <span class="block">8 Min Read</span></li>
            </ul>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out hover:text-primary"><a href="index.php">Hoxia</a></li>
            <li class="inline-block text-[15px] ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
            <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-primary">Blogs</li>
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
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">

                    <img src="<?php echo !empty($article['img']) ? $static_url . $article['img'] : $static_url . '/images/blog/9.jpg'; ?>" alt="">

                    <div class="p-6">
                        <p class="text-slate-400">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script.</p>
                        <p class="text-slate-400 italic border-x-4 border-primary rounded-ss-xl rounded-ee-xl mt-3 p-3">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                        <p class="text-slate-400 mt-3">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                    </div>
                </div>

                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 mt-8">
                    <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                    <form class="mt-8">
                        <div class="grid lg:grid-cols-12 lg:gap-6">
                            <div class="lg:col-span-6 mb-5">
                                <div class="text-start">
                                    <label for="name" class="font-semibold">Your Name:</label>
                                    <input name="name" id="name" type="text" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Name :">
                                </div>
                            </div>

                            <div class="lg:col-span-6 mb-5">
                                <div class="text-start">
                                    <label for="email" class="font-semibold">Your Email:</label>
                                    <input name="email" id="email" type="email" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2" placeholder="Email :">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="mb-5">
                                <div class="text-start">
                                    <label for="comments" class="font-semibold">Your Comment:</label>
                                    <textarea name="comments" id="comments" class="form-input w-full text-[15px] py-2 px-3 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-lg outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0 mt-2 h-28" placeholder="Message :"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="send" class="inline-block px-8 py-2.5 text-[16px] font-medium tracking-wide bg-primary border border-primary text-white focus:outline-none rounded-md text-center align-middle transition-all duration-500 w-full">Send Message</button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-medium bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center">Author</h5>
                    <div class="text-center mt-8">
                        <img src="<?php echo $static_url; ?>/images/client/05.jpg" class="h-20 w-20 mx-auto rounded-full shadow-smmb-4" alt="">

                        <a href="" class="text-lg font-medium hover:text-primary transition-all duration-500 ease-in-out h5">Cristina Romsey</a>
                        <p class="text-slate-400">Content Writer</p>
                    </div>

                    <h5 class="text-lg font-medium bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Social sites</h5>
                    <ul class="list-none text-center mt-8">
                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center text-center justify-center text-base border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-primary hover:text-white hover:bg-primary focus:outline-none align-middle transition-all duration-500"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center text-center justify-center text-base border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-primary hover:text-white hover:bg-primary focus:outline-none align-middle transition-all duration-500"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center text-center justify-center text-base border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-primary hover:text-white hover:bg-primary focus:outline-none align-middle transition-all duration-500"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center text-center justify-center text-base border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-primary hover:text-white hover:bg-primary focus:outline-none align-middle transition-all duration-500"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center text-center justify-center text-base border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-primary hover:text-white hover:bg-primary focus:outline-none align-middle transition-all duration-500"><i data-feather="github" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center text-center justify-center text-base border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-primary hover:text-white hover:bg-primary focus:outline-none align-middle transition-all duration-500"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center text-center justify-center text-base border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-primary hover:text-white hover:bg-primary focus:outline-none align-middle transition-all duration-500"><i data-feather="gitlab" class="h-4 w-4"></i></a></li>
                    </ul><!--end icon-->
                </div>
            </div>
        </div>
    </div>

    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-medium">Related Blogs</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px] mt-8">
            
            <!-- blog2 code  -->
            <?php
                include "$base_dir/Components/Pages/blog2.php";
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
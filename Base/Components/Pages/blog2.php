<?php
$blogs = [
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
    ]
];
?>

<?php foreach ($blogs as $item): ?>
    <div class="relative overflow-hidden group rounded-md shadow-smhover:shadow-md dark:shadow-gray-800 transition duration-500">
        <img src="<?php echo $static_url, $item['img']; ?>" alt="">

        <div class="p-6">
            <span class="bg-primary/5 text-primary text-xs font-semibold px-2.5 py-0.5 rounded-full h-5 ms-1"><?php echo $item['name']; ?></span>

            <h5 class="mt-3"><a href="blog-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="title text-lg font-medium hover:text-primary duration-500"><?php echo $item['title']; ?></a></h5>
        
            <p class="text-slate-400 mt-3"><?php echo $item['desc']; ?></p>
            
            <div class="mt-4">
                <a href="blog-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
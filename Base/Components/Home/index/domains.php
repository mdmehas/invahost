<?php
$domains = [
    [
        'img' => '/images/shop/biz.jpg', 
        'dollar' => '$',
        'number' => '3.99',
        'title' => '/year',
    ],
    [
        'img' => '/images/shop/com.jpg', 
        'dollar' => '$',
        'number' => '3.99',
        'title' => '/year',
    ],
    [
        'img' => '/images/shop/me.jpg', 
        'dollar' => '$',
        'number' => '3.99',
        'title' => '/year',
    ],
    [
        'img' => '/images/shop/mobi.jpg', 
        'dollar' => '$',
        'number' => '3.99',
        'title' => '/year',
    ],
    [
        'img' => '/images/shop/net.jpg', 
        'dollar' => '$',
        'number' => '3.99',
        'title' => '/year',
    ],
    [
        'img' => '/images/shop/org.jpg', 
        'dollar' => '$',
        'number' => '3.99',
        'title' => '/year',
    ],
    [
        'img' => '/images/shop/tv.jpg', 
        'dollar' => '$',
        'number' => '3.99',
        'title' => '/year',
    ],
    [
        'img' => '/images/shop/us.jpg', 
        'dollar' => '$',
        'number' => '3.99',
        'title' => '/year',
    ]
];
?>

<?php foreach ($domains as $item): ?>
    <div class="tiny-slide">
        <div class="bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800 p-4 m-2 text-center">
            <img src="<?php echo $static_url, $item['img']; ?>" class="rounded-md shadow-sm dark:shadow-gray-800 mx-auto h-16 w-16 mb-3" alt="">
            <span class="flex justify-center mt-2">
                <span class="text-base text-slate-400"><?php echo $item['dollar']; ?></span>
                <span class="text-lg font-semibold h6 mx-1"><?php echo $item['number']; ?></span>
                <span class="text-base text-slate-400 self-end"><?php echo $item['title']; ?></span>
            </span>
        </div>
    </div>
<?php endforeach; ?>
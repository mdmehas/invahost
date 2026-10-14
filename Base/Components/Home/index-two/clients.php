<?php
$clients = [
    [
        'img' => '/images/client/logo-1.png', 
    ],
    [
        'img' => '/images/client/logo-2.png', 
    ],
    [
        'img' => '/images/client/logo-3.png', 
    ],
    [
        'img' => '/images/client/logo-4.png', 
    ],
    [
        'img' => '/images/client/logo-5.png', 
    ],
    [
        'img' => '/images/client/logo-6.png', 
    ],
    [
        'img' => '/images/client/logo-7.png', 
    ],
    [
        'img' => '/images/client/logo-8.png', 
    ],
    [
        'img' => '/images/client/logo-9.png', 
    ],
    [
        'img' => '/images/client/logo-10.png', 
    ],
    [
        'img' => '/images/client/logo-11.png', 
    ],
    [
        'img' => '/images/client/logo-12.png', 
    ]
];
?>

<?php foreach ($clients as $item): ?>
    <div class="p-5 rounded-md shadow-sm dark:shadow-gray-800 bg-gray-50 dark:bg-gray-800">
        <img src="<?php echo $static_url, $item['img']; ?>" class="mx-auto" alt="">
    </div>
<?php endforeach; ?>
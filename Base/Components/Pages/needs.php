<?php
$needs = [
    [
        'icon' => 'uil uil-question-circle', 
        'title' => 'FAQs',
        'link' => 'helpcenter-faqs.php',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-file-bookmark-alt', 
        'title' => 'Guides / Support',
        'link' => 'helpcenter-guides.php',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-cog', 
        'title' => 'Support Request',
        'link' => 'helpcenter-support.php',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ]
];
?>

<?php foreach ($needs as $item): ?>
    <div class="text-center px-6 mt-6">
        <div class="w-14 h-14 bg-primary/5 text-primary rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-xs dark:shadow-gray-800">
            <i class="<?php echo $item['icon']; ?>"></i>
        </div>

        <div class="content mt-7">
            <a href="<?php echo $item['link']; ?>" class="title h5 text-lg font-medium hover:text-primary"><?php echo $item['title']; ?></a>
            <p class="text-slate-400 mt-3"><?php echo $item['desc']; ?></p>
            
            <div class="mt-5">
                <a href="<?php echo $item['link']; ?>" class="hover:text-primary after:bg-primary duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
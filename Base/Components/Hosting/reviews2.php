<?php
$reviews = [
    [
        'img' => '/images/client/01.jpg', 
        'title' => 'Calvin Carlo',
        'time' => '6th May 2026 at 01:25 pm',
        'desc' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
        'class' => '',
    ],
    [
        'img' => '/images/client/02.jpg', 
        'title' => 'Calvin Carlo',
        'time' => '6th May 2026 at 01:25 pm',
        'desc' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
        'class' => 'mt-8',
    ],
    [
        'img' => '/images/client/03.jpg', 
        'title' => 'Calvin Carlo',
        'time' => '6th May 2026 at 01:25 pm',
        'desc' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
        'class' => 'mt-8',
    ],
    [
        'img' => '/images/client/04.jpg', 
        'title' => 'Calvin Carlo',
        'time' => '6th May 2026 at 01:25 pm',
        'desc' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
        'class' => 'mt-8',
    ]
];
?>

<?php foreach ($reviews as $item): ?>
    <div class="<?php echo $item['class']; ?>">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="<?php echo $static_url, $item['img']; ?>" class="h-11 w-11 rounded-full shadow" alt="">

                <div class="ms-3 flex-1">
                    <a href="" class="text-lg font-semibold hover:text-primary transition-all duration-500 ease-in-out"><?php echo $item['title']; ?></a>
                    <p class="text-sm text-slate-400"><?php echo $item['time']; ?></p>
                </div>
            </div>

            <a href="" class="text-slate-400 hover:text-primary transition-all duration-500 ease-in-out ms-5"><i class="mdi mdi-reply"></i> Reply</a>
        </div>
        <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow-sm dark:shadow-gray-800 mt-6">
            <ul class="list-none inline-block text-orange-400">
                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                <li class="inline text-slate-400 font-semibold">5.0</li>
            </ul>

            <p class="text-slate-400 italic">" <?php echo $item['desc']; ?> "</p>
        </div>
    </div>
<?php endforeach; ?>
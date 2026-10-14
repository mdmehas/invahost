<?php
$teams = [
    [
        'img' => '/images/client/04.jpg', 
        'name' => 'Jack John',
        'title' => 'Designer',
    ],
    [
        'img' => '/images/client/05.jpg', 
        'name' => 'Krista John',
        'title' => 'Designer',
    ],
    [
        'img' => '/images/client/06.jpg', 
        'name' => 'Roger Jackson',
        'title' => 'Designer',
    ],
    [
        'img' => '/images/client/07.jpg', 
        'name' => 'Johnny English',
        'title' => 'Designer',
    ]
];
?>

<?php foreach ($teams as $item): ?>
    <div class="group text-center overflow-hidden">
        <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
            <img src="<?php echo $static_url, $item['img']; ?>" class="" alt="">

            <ul class="list-none absolute top-1/2 -translate-y-1/2 -end-20 group-hover:end-5 transition-all duration-500 ease-in-out">
                <li class=""><a href="" class="h-8 w-8 inline-flex items-center text-center justify-center text-base bg-primary border border-primary text-white focus:outline-none rounded-full align-middle transition-all duration-500"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                <li class="mt-1"><a href="" class="h-8 w-8 inline-flex items-center text-center justify-center text-base bg-primary border border-primary text-white focus:outline-none rounded-full align-middle transition-all duration-500"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                <li class="mt-1"><a href="" class="h-8 w-8 inline-flex items-center text-center justify-center text-base bg-primary border border-primary text-white focus:outline-none rounded-full align-middle transition-all duration-500"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
            </ul><!--end icon-->
        </div>

        <div class="content mt-3">
            <a href="" class="text-lg hover:text-primary transition-all duration-500 ease-in-out h5 font-medium"><?php echo $item['name']; ?></a>
            <p class="text-slate-400"><?php echo $item['title']; ?></p>
        </div>
    </div>
<?php endforeach; ?>
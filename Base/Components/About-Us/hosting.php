<?php
$hostings = [
    [
        'icon' => 'uil uil-server', 
        'title' => 'Web Hosting',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-cloud-heart', 
        'title' => 'Domains',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-envelope-check', 
        'title' => 'Emails',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-users-alt', 
        'title' => 'Supported',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ]
];
?>

<?php foreach ($hostings as $item): ?>
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary transition-all duration-500 ease-in-out rounded-md bg-white dark:bg-slate-900 overflow-hidden">
        <div class="relative overflow-hidden text-transparent -m-3">
            <i data-feather="hexagon" class="h-24 w-24 fill-primary/[0.07] group-hover:fill-white/20"></i>
            <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-md group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                <i class="<?php echo $item['icon']; ?>"></i>
            </div>
        </div>

        <div class="mt-6">
            <h5><a href="" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out"><?php echo $item['title']; ?></a></h5>
            <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3"><?php echo $item['desc']; ?></p>
        </div>
    </div>
<?php endforeach; ?>
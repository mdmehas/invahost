<?php
$domains = [
    [
        'icon' => 'uil uil-server', 
        'title' => 'Web Hosting',
    ],
    [
        'icon' => 'uil uil-cloud-heart', 
        'title' => 'Domains',
    ],
    [
        'icon' => 'uil uil-envelope-check', 
        'title' => 'Emails',
    ],
    [
        'icon' => 'uil uil-users-alt', 
        'title' => 'Supported',
    ],
    [
        'icon' => 'uil uil-tachometer-fast-alt', 
        'title' => 'Speedy',
    ],
    [
        'icon' => 'uil uil-compact-disc', 
        'title' => 'Reliable',
    ]
];
?>

<?php foreach ($domains as $item): ?>
    <div class="relative overflow-hidden text-transparent -m-3">
        <i data-feather="hexagon" class="sm:h-48 h-40 sm:w-48 w-40 fill-gray-50 dark:fill-slate-800 mx-auto"></i>
        <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto transition-all duration-500 ease-in-out text-4xl grid align-middle justify-center items-center">
            <i class="<?php echo $item['icon']; ?> text-4xl text-primary mx-auto"></i>
            <a href="" class="sm:text-lg text-base font-medium mt-1 h5 text-slate-900 hover:text-primary dark:text-white dark:hover:text-primary transition-all duration-500 ease-in-out"><?php echo $item['title']; ?></a>
        </div>
    </div>
<?php endforeach; ?>
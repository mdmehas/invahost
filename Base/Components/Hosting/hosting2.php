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
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary transition-all duration-500 ease-in-out rounded-md bg-slate-50 dark:bg-slate-800 hover:scale-[1.02] overflow-hidden">
        <i class="<?php echo $item['icon']; ?> text-[36px] text-primary group-hover:text-white/70 duration-500"></i>

        <div class="mt-6">
            <h5><a href="" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out"><?php echo $item['title']; ?></a></h5>
            <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3"><?php echo $item['desc']; ?></p>
        </div>
        
        <i class="<?php echo $item['icon']; ?> text-8xl text-slate-400/10 dark:text-slate-100/[0.02] group-hover:text-white/10 dark:group-hover:text-white/5 absolute -top-5 group-hover:-top-2 -end-10 group-hover:-end-5 duration-500"></i>
    </div>
<?php endforeach; ?>
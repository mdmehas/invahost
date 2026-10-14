<?php
$services = [
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
    ],
    [
        'icon' => 'uil uil-tachometer-fast-alt', 
        'title' => 'Speedy',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-compact-disc', 
        'title' => 'Reliable',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ]
];
?>

<?php foreach ($services as $item): ?>
    <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
        <div class="relative overflow-hidden text-transparent -m-3">
            <i data-feather="hexagon" class="h-28 w-28 fill-primary/5 mx-auto rotate-[30deg]"></i>
            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-primary rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                <i class="<?php echo $item['icon']; ?>"></i>
            </div>
        </div>

        <div class="mt-6">
            <h5><a href="" class="text-lg font-medium hover:text-primary transition-all duration-500 ease-in-out"><?php echo $item['title']; ?></a></h5>
            <p class="text-slate-400 transition-all duration-500 ease-in-out mt-3"><?php echo $item['desc']; ?></p>

            <div class="mt-4">
                <a href="" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
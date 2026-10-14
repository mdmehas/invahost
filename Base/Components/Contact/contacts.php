<?php
$contacts = [
    [
        'icon' => 'uil uil-phone', 
        'title' => 'Phone',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
        'link' => 'tel:+152534-468-854',
        'name' => '+152 534-468-854',
        'type' => '',
        'class' => '',
    ],
    [
        'icon' => 'uil uil-envelope', 
        'title' => 'Email',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
        'link' => 'mailto:contact@example.com',
        'name' => 'contact@example.com',
        'type' => '',
        'class' => '',
    ],
    [
        'icon' => 'uil uil-map-marker', 
        'title' => 'Location',
        'desc' => 'C/54 Northwest Freeway, Suite 558, Houston, USA 485',
        'link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin',
        'name' => 'View on Google map',
        'type' => 'iframe',
        'class' => 'read-more lightbox',
    ]
];
?>

<?php foreach ($contacts as $item): ?>
    <div class="text-center px-6">
        <div class="relative text-transparent">
            <div class="w-14 h-14 bg-primary/5 text-primary rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-xs dark:shadow-gray-800">
                <i class="<?php echo $item['icon']; ?>"></i>
            </div>
        </div>

        <div class="content mt-7">
            <h5 class="title h5 text-lg font-medium"><?php echo $item['title']; ?></h5>
            <p class="text-slate-400 mt-3"><?php echo $item['desc']; ?></p>
            
            <div class="mt-4">
                <a href="<?php echo $item['link']; ?>" data-type="<?php echo $item['type']; ?>" class="<?php echo $item['class']; ?> relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out"><?php echo $item['name']; ?></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php
$reviews = [
    [
        'img' => '/images/client/01.jpg', 
        'title' => 'Thomas Israel',
        'name' => 'C.E.O',
        'desc' => "I didn't know a thing about icon design until I read this book. Now I can create any icon I need in no time. Great resource!",
    ],
    [
        'img' => '/images/client/05.jpg', 
        'title' => 'Barbara McIntosh',
        'name' => 'C.E.O',
        'desc' => "There are so many things I had to do with my old software that I just don't do at all with Techwind. Suspicious but I can't say I don't love it.",
    ],
    [
        'img' => '/images/client/02.jpg', 
        'title' => 'Carl Oliver',
        'name' => 'C.E.O',
        'desc' => "The best part about Techwind is every time I pay my employees, my bank balance doesn't go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined.",
    ],
    [
        'img' => '/images/client/04.jpg', 
        'title' => 'Jill Webb',
        'name' => 'C.E.O',
        'desc' => "I'm trying to get a hold of someone in support, I'm in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.",
    ],
    [
        'img' => '/images/client/03.jpg', 
        'title' => 'Barbara McIntosh',
        'name' => 'C.E.O',
        'desc' => "I used to have to remit tax to the EU and with Techwind I somehow don't have to do that anymore. Nervous to travel there now though.",
    ],
    [
        'img' => '/images/client/06.jpg', 
        'title' => 'Janisha Doll',
        'name' => 'C.E.O',
        'desc' => "This is the fourth email I've sent to your support team. I am literally being held in jail for tax fraud. Please answer your damn emails, this is important.",
    ]
];
?>

<?php foreach ($reviews as $item): ?>
    <div class="tiny-slide">
        <div class="rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 p-6 m-2">
            <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                <img src="<?php echo $static_url, $item['img']; ?>" class="h-16 w-16 rounded-full shadow-sm dark:shadow-gray-800" alt="">
                
                <div class="ps-4">
                    <a href="" class="text-lg h6 hover:text-primary duration-500 ease-in-out"><?php echo $item['title']; ?></a>
                    <p class="text-slate-400"><?php echo $item['name']; ?></p>
                </div>
            </div>
            
            <div class="mt-6">
                <p class="text-slate-400"><?php echo $item['desc']; ?></p>
                <ul class="list-none mb-0 text-amber-400 mt-2">
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                </ul>
            </div>
        </div>
    </div>
<?php endforeach; ?>
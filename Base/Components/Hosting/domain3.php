<?php
$domains = [
    [
        'title' => '.com',
    ],
    [
        'title' => '.in',
    ],
    [
        'title' => '.net',
    ],
    [
        'title' => '.info',
    ],
    [
        'title' => '.tv',
    ],
    [
        'title' => '.mobi',
    ],
    [
        'title' => '.me',
    ],
    [
        'title' => '.biz',
    ],
    [
        'title' => '.org',
    ]
];
?>

<?php foreach ($domains as $item): ?>
    <li class="inline-grid m-1"><a href="" class="font-medium px-2 rounded-md shadow-smbg-white text-slate-900 hover:text-primary"><?php echo $item['title']; ?></a></li>
<?php endforeach; ?>
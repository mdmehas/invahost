<?php
$counters = [
    [
        'target' => '1548',
        'number' => '1010',
        'symbol' => '+',
        'title' => 'Properties Sell',
    ],
    [
        'target' => '25',
        'number' => '2',
        'symbol' => '+',
        'title' => 'Award Gained',
    ],
    [
        'target' => '9',
        'number' => '0',
        'symbol' => '+',
        'title' => 'Years Experience',
    ]
];
?>

<?php foreach ($counters as $item): ?>
    <div class="counter-box text-center">
        <h1 class="lg:text-4xl text-3xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="<?php echo $item['target']; ?>"><?php echo $item['number']; ?></span><?php echo $item['symbol']; ?></h1>
        <h5 class="counter-head text-lg font-medium"><?php echo $item['title']; ?></h5>
    </div>
<?php endforeach; ?>
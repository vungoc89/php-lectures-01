
<?php
/*
 Khi dung foreach trong php, neu ko muon su dung dau {} cua foreach 
 * ta thay them dau : sau dau ) cua foreach <=> thay cho dấu mở {,
 * va them <?php endforeach; ?> để
 * thay thế cho dấu đóng }, và <?= thay cho echo
 */

// 3. Hien thi mang danh muc theo da cap
/**
 * Giao duc
 * -- Khuyen hoc
 * -- Du hoc
 * The thao
 * -- CHau Au
 * -- Chau A
 * 
 * 
 */

//ARRAY: CACH VIET OLD: 
//$list_cat = array(
//    'giao duc' => array(
//        0 => "khuyen hoc",
//        1 => "du hoc",
//        2 => "hoc bong",
//    ),
//    'the thao' => array(
//        0 => "chau au",
//        1 => "chau a",
//        2 => 'chau my',
//    ),
//);
//ARRAY: CACH VIET NEW:
$list_cat = [
    'giao duc' => [
        0 => "khuyen hoc",
        1 => "du hoc",
        2 => "hoc bong",
    ],
    'the thao' => [
        0 => "chau au",
        1 => "chau a",
        2 => 'chau my',
    ],
];
//https://stackoverflow.com/questions/1813098/php-array-to-list 
//$cities = [
//    'Camden' => [
//        0 => "La Dominican",
//        1 => "A Lounge",
//    ],
//    'Coastal' => [
//        0 => "Royal Hotel",
//    ],
//    'Como' => [
//        0 => "Casa Producto",
//        1 => "Casa Wow",
//    ],
//    'Florence' =>
//        [
//        0 => "Florenciana Hotel",
//        1 => "Metrol Hotel",
//    ],
//];

?>
<?php ?>

<html>
    <head>
        <title>
            Danh muc da cap
        </title>
    </head>
</html>

<body>
 <h1>BAI 03: OLD-WAY: FOREACH DUNG {} </h1>   
 <div id="content1">
        <ul>
            <?php foreach ($list_cat as $cat => $items) { ?>
                <li><?= $cat ?>
                    <ul>
                        <?php foreach ($items as $item) { ?>
                            <?php // echo"{$item}.<br>" ?>
                            <li><?= str_repeat('--', 1) . ' ' . $item ?></li>
                        <?php }// endforeach; ?>
                    </ul>
                </li>
            <?php }// endforeach; ?>
        </ul>
    </div>
 
    <h1>BAI 03: NEW-WAY: FOREACH DUNG : va endforeach VÀ DẤU "< ? =" THAY CHO echo</h1>
    <div id="content2">
        <ul>
            <?php foreach ($list_cat as $cat => $items): ?>
                <li><?= $cat ?>
                    <ul>
                        <?php foreach ($items as $item): ?>
                            <li><?= str_repeat('--', 1) . ' ' . $item ?></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>




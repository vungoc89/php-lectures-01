
<?php
/*
  Khi dung foreach trong php, neu ko muon su dung dau {} cua foreach
 * ta thay them dau : sau dau ) cua foreach <=> thay cho dấu mở {,
 * va them <?php endforeach; ?> để
 * thay thế cho dấu đóng }
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

$list_cat_02 = [
    1 => [
        'cat_id' => 1,
        'cat_title' => 'Giao duc',
        'level' => 0,
    ],
    2 => [
        'cat_id' => 2,
        'cat_title' => 'Khuyen hoc',
        'level' => 1,
    ],
    3 => [
        'cat_id' => 3,
        'cat_title' => 'Du hoc',
        'level' => 1,
    ],
    4 => [
        'cat_id' => 4,
        'cat_title' => 'Hoc bong',
        'level' => 1,
    ],
    5 => [
        'cat_id' => 5,
        'cat_title' => 'The thao',
        'level' => 0,
    ],
    6 => [
        'cat_id' => 6,
        'cat_title' => 'CHau au',
        'level' => 1,
    ],
    7 => [
        'cat_id' => 6,
        'cat_title' => 'Ngoai hang Anh',
        'level' => 2,
    ],
    8 => [
        'cat_id' => 7,
        'cat_title' => 'CHau A',
        'level' => 1,
    ],
    9 => [
        'cat_id' => 8,
        'cat_title' => 'CHau My',
        'level' => 1,
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
                            <?php // echo"{$item}.<br>"  ?>
                            <li><?= str_repeat('--', 1) . ' ' . $item ?></li>
                        <?php }// endforeach;  ?>
                    </ul>
                </li>
            <?php }// endforeach;   ?>
        </ul>
    </div>

    <h1>BAI 03: NEW-WAY: FOREACH DUNG : va endforeach </h1>
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

    <h1>BAI 03: C2: use table </h1>
    <table>
        <thead>
            <tr>
                <td>STT</td>
                <td>Category</td>

            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($list_cat_02)){
                $temp = 0;
            foreach ($list_cat_02 as $item) {
                $temp++;
                ?>
                <tr>
                    <td>
                        <?= $temp ?>
                    </td>
                    <td>
                        <?= str_repeat('---', $item['level']).' '.$item['cat_title'] ?>
                    </td>
                </tr>

            <?php 
            }
            } ?>
        </tbody>
    </table>
</body>




<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//1. Tinh so trang $num_page hien thi khi co tong so bai $total_rows va so bai 
//tren moi trang $num_per_page => $num_page = round($total_rows/$num_per_page)
//2. Xuat mot mang so nguyen chan tu mang so nguyen cho truoc
//$list_numbers = array(-23, -45, 23, 45, 23, 58, 23, 56, 90);
// C1
//$list_even_num = array();
//$id_even = 0;
//for($idx = 0; $idx < count($list_numbers); $idx++ ){
//    if($list_numbers[$idx] % 2 == 0){
//        $list_even_num[$id_even++] = $list_numbers[$idx];
//    }
//}
//
// echo"<pre>";
// print_r($list_even_num);
// echo"</pre>";
//C2: 
$list_numbers = array(-23, -46, 23, 45, 23, 58, 23, 56, 90);
$list_even_num = array();
$id_even = 0;
if (!empty($list_numbers) && is_array($list_numbers)) {
    foreach ($list_numbers as $key => $value) {
        if ($value % 2 == 0) {
//        $list_even_num[] = $list_numbers[$key];
            $list_even_num[] = $value;
        }
    }
}

echo"<pre>";
print_r($list_even_num);
echo"</pre>";

/** Chi can de empty [] trong $list_even_num[] vi key cua array tu dong tang
  Array
  (
  [0] => -46
  [1] => 58
  [2] => 56
  [3] => 90
  )
 */
// 3. Hien thi mang danh muc theo da cap
/**
 * Giao duc
 * -- Khuyen hoc
 * -- Du hoc
 * The thao
 * -- CHau Au
 * -- Chau A
 */
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
$cities = [
    'Camden' => [
        0 => "La Dominican",
        1 => "A Lounge",
    ],
    'Coastal' => [
        0 => "Royal Hotel",
    ],
    'Como' => [
        0 => "Casa Producto",
        1 => "Casa Wow",
    ],
    'Florence' =>
        [
        0 => "Florenciana Hotel",
        1 => "Metrol Hotel",
    ],
];

$input = "Alien";
echo str_pad($input, 10); // produces "Alien     "
echo "<br>";
echo str_pad($input, 10, "--", STR_PAD_LEFT);  // produces "-=-=-Alien"
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
    <ul>
        <?php foreach ($cities as $city => $hotels): ?>
            <li><?= $city ?>
                <ul>
                    <?php foreach ($hotels as $hotel): ?>
                        <li><?= $hotel ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>

    <!--BAI 03-->
    <div id="content">
        <ul>
            <?php foreach ($list_cat as $cat => $items):  ?>
                <li><?= $cat ?>
                    <ul>
                        <?php foreach ($items as $item):  ?>
                            <li><?= str_repeat('--', 1) . ' ' . $item ?></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>
        
    </div>
</body>


<?php
/*
  BOOLEAN:
 * -> La kieu data chi co value la true hoac false
 * -> Dung nhan value return cua bieu thuc dieu khien, func.
 */

function show_data($data) {
    echo"<pre>";
    print_r($data);
    echo"</pre>";
}

global $list_number;
$list_number = [0 => 0, 1 => 1, 2 => 22, 3 => 3, 4 => 4, 5 => 5, 6 => 66, 7 => 7, 8 => 8, 9 => 9, 10 => 10];
//global $list_number; $list_number = [0, 1, 22, 3, 4, 5, 66, 7, 8, 9, 10];
$amount = count($list_number);

echo "So luong = {$amount}<br>"; // 11
show_data($list_number);

//global $list_even;

function checkEven($number) {
    return $number % 2 ? 0 : 1;
//   return $number % 2 == 0 ? TRUE : FALSE; //tu khoa true, false KO ACTIVE trong PHP ?
//   return $number % 2 == 0 ? 'TRUE' : 'FALSE';
//   return $number % 2;
}

$res = checkEven(10);
echo "kq = {$res}<br><br>";

//TÁCH RA 1 MẢNG CHỈ CHỨA SỐ CHẴN ($list_even) from $list_nubmer ban đầu 
$list_even = [];
function printEven($numbers) {
   global $list_even; // global phải thêm vào sau khi đã khai báo biến $list_even ở bên ngoài
    $amount = count($numbers);
    for ($index = 0; $index <= $amount - 1; $index++) {
        if (checkEven($numbers[$index])) {
            $list_even[] = $numbers[$index]; //C1:ok
//            array_push($list_even, $numbers[$index]);//C2:ok
        }
    }
    echo "List even numbers: ";
    show_data($list_even);
}

printEven($list_number); //ok
print_r($list_even);//ok
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BOOLEAN</title>

    </head>
    <body>
        <div class="print-even">
            <p>So Chan: </p>
            <?php
//            foreach ($list_number as $ele) {
            foreach ($list_even as $ele) {
                if ($ele % 2 == 0) {
                    ?>
                    <span><?= $ele ?> ,</span>


                    <?php
                }
            }
            ?>

            <p>So Le: </p>
            <?php
//            foreach ($list_number as $ele) {
            foreach ($list_even as $ele) {
                if ($ele % 2) {
                    ?>
                    <span><?= $ele ?> ,</span>


                    <?php
                }
            }
            ?>
        </div>
    </body>
</html>

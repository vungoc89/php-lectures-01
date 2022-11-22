<?php

/**
 * http://php.net/manual/en/ref.strings.php
 * 
 * 1.strlen
 * 2.ucfirst -> in hoa chu dau tien cua word dau tien
 * 3.strim -> delete khoang trang dau va cuoi cua tu
 * 4.str_repeat -> lap lai mot chuoi
 * 5.md5 -> ma hoa (xem doc: KO nen dung ham nay de ma hoa pass nua vi ko dam bao)
 * 6.join -> KO can dung, chi can dung implode (vi join la alias cua implode( xem doc))
 * 7.implode -> ket hop string vs ky tu
 * 8.explode -> giai nen string (nguoc lai vs implode)
 * 9.htmlspecialchars :  Convert special characters to HTML entities
 * https://www.php.net/manual/en/function.htmlspecialchars
 * 
 */

$str1 = 'Hello php';
echo strlen($str1);
echo '<br>';
echo ucfirst($str1);
echo '<br><br>';

$str2 = '  Hello php2   ';
echo trim($str2);
echo '<br>';
echo str_repeat($str2, 2);

echo '<br><br>';
$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}




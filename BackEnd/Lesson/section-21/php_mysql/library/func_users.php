<?php
function show_gender($gender){
    $list_gender = [
    'male' => 'Nam',
    'female' => 'Nữ',
];
    if(array_key_exists($gender, $list_gender)){
        return $list_gender[$gender];
    }
}


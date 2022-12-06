<?php

function get_pagging($num_page, $page, $base_url = "") {
    if($num_page == 0){
    $num_page = "Ko co data";
    return;
}
    $str_pagging = "<ul class='pagging'>";

    if ($page > 1) {
        $prev = $page - 1;
        $str_pagging .= "<li><a href= \"{$base_url}&page={$prev}\">Trước</a></li>";
    }
    for ($idx = 1; $idx <= $num_page; $idx++) {
        $active = "";
        if ($idx = $page) 
            $active = "class='active'";
      
//        $str_pagging .= "<li><a href='{$base_url}&page={$idx}'></a></li>";//

            $str_pagging .= "<li {$active}><a href= \"{$base_url}&page={$idx}\">$idx</a></li>";
    }
    if ($page < $num_page) {

        $next = $page + 1;
        $str_pagging .= "<li><a href= \"{$base_url}&page={$next}\">Sau</a></li>";
    }

    $str_pagging .= "</ul>";
    return $str_pagging;
}
?>
<!--<ul class="pagging">
    <li><a href="">Previous</a></li>
    <li class="active"><a  href="?mod=users&act=main&page=1">1</a></li>
    <li><a href="?mod=users&act=main&page=2">2</a></li>
    <li><a href="?mod=users&act=main&page=3">3</a></li>
    <li><a href="?mod=users&act=main&page=4">4</a></li>
    <li><a href="?mod=users&act=main&page=2">Next</a></li>
</ul>-->
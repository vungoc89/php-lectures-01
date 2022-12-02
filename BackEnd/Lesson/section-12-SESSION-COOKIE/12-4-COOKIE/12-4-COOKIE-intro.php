<?php

/* 
-> Cookie là phương thức lưu info trên browser của user, dùng để truy xuất
 * khi user gửi yêu cầu xem page.
 * -> Cookie được lưu trữ theo cặp key/value
 * -> Cookie được lưu ở browser of user và can access từ server khi user access page.
 * -> Time life của server tối đa 3 năm
 * -> Cookie có tầm ảnh hưởng đến các vùng server do ta quy định. 
 * 
 * THIẾT LẬP COOKIE
 * setcookie($name, $value, $expire, $path, $domain)
 * -> $name: tên cookie
 * -> $value: giá trị cookie (mặc định là chuỗi empty)
 * -> $expire: time sống của cookie nếu là 0 thì khi tắt browser thì cookie tự mất (max time = 3 năm)
 * -> $path: đường dẫn trên server mà cookie có hiệu lực. Nếu set là / thì 
 * cookie có hiệu lực với all file trên server. 
 * -> $domain: tên miền cookie có hiệu lực
 * 
 * VD: 
 * <?php setcookie('is_login', true, time() + 3600, '/'); ?>
 * 
 * LẤY VALUE COOKIE
 * -> Biến toàn cục $_COOKIE là nơi lưu info của cookie
 * -> Dựa theo tên của cookie để truy xuất và lấy giá trị
 * <?
 * php $is_login = $_COOKIE['is_login'];
 * echo $is_login; 
 * ?>
 * 
 * XÓA COOKIE
 * -> Để xóa cookie ta cập nhật time sống = một time trong quá khứ
 * -> Khi cookie được xóa, info của cookie được loại bỏ ra khỏi browser và biến hệ thống $_COOKIE
 * VD: 
 * <?php setcookie('is_login', true, time() - 3600, '/'); ?>
 */


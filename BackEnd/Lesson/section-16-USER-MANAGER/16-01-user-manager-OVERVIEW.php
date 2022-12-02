<?php

/* 
1.VAI TRÒ CỦA LOGIN
 * -> Help user đi vào system theo tài khoản
 * -> Phân chia sử dụng tài nguyên system theo đối tượng
2.CÁC BƯỚC XÂY DỰNG CHỨC NĂNG (CHECKLIST) (16-02)
 * 1 -> Tạo database ứng dụng
 * 2 -> Tạo giao diện
 * 3 -> Ý tưởng lưu thông tin phiên login
 * 4 -> Chuẩn hoá data form login
 * 5 -> Viết chức năng login
 * 6 -> Hiển thị info login
 * 7 -> Xử lý logout
 * 8 -> Xử lý route khi chưa login
 * ...
 * 
2.1 Tạo DB 
 * -> Lưu trữ dạng mảng
 * -> Lưu nhiều user
 * -> Info gồm: id, username, password, fullname, email
2.2 Tao giao dien (16-4)
 * 
2.3 Luu phien login(16-5)
 * Sau khi login need save:
 * -> Login state
 * -> User login
 * Use session
 * 
 * $_SESSION['is_login'] = true;
 * $_SESSION['user_login'] ='user01';
 * 
2.4 Chuẩn hoá data form login(16-6)
2.5 Viết chức năng login(16-7) 
 * -> Viet ham check login status
 * check_login();
 * -> Save info into Session va route neu login success
 * -> Report to user if account not exist on system.
 */


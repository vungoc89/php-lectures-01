<?php

/* 
1.SESSION(PHIÊN) LÀ GÌ ?
 * -> Là 1 process user gửi request lên server và được server hồi đáp.
 * Sau khi server hồi đáp(trả lại trang), nó (server) sẽ đóng kết nối.
 * 
 * -> Các phiên làm việc của web server KO THỂ kết nối các phiên làm việc 
 * vs nhau để phục vụ công việc nào đó.
 * 
 * -> Session use theo dõi và kết nối giữa các phiên làm việc của người dùng
 * (Session use follow and connect sessions of user)
 * 
 * -> INfo của session được lưu trong mảng hệ thống $_SESSION
 * 
 * -> Session dùng để tạo các app giỏ hàng, đăng nhập
 * 
 * TẠO SESSION
     <?php 
        session_start();
        $_SESSION['is_login'] = true;
     ?>
 * TẠO DATA SESSION
     <?php 
        
        $_SESSION['is_login'] = true;
        $_SESSION['user_login'] = 'user_account';
     ?>
 * 
 * ADD session_start(); both at hompage and login page
 * 
 * 2.DELETE SESSION
     <?php 
        session_start();
 * 
        // Delete one session
        unset($_SESSION['is_login']);
        
 *      // Delete ALL session
 *      session_destroy();
     ?>
 */


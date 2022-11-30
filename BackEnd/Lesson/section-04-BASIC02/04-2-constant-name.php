<?php

/**
 * -> Cú pháp <?php define ('TÊN_HẰNG', giá_trị_hằng); ?>
 * -> KHai báo hằng KO CẦN dấu $ ở trước. 
 * -> Hằng KO nhận value từ phép gán. Hằng chỉ được SET khi dùng hàm define()
 * -> Hằng có thể truy cập mọi nơi (ko phụ thuộc tầm vực của biến)
 * -> Hằng KO thể định nghĩa lại hoặc hủy bỏ khi đã được thiết lập
 * 
 * HẰNG HỆ THỐNG
 * __LINE__ : số dòng hiện tại khi gọi giá trị hằng __LINE__
 * __FILE__ : đường dẫn đến file được gọi hằng
 * __DIR__ : đường dẫn đến folder chứa file hiện hành
 * __CLASS__ : lớp được gọi trong lập trình OOP
 * __METHOD__ : phương thức được gọi trong lập trình OOP
 * __NAMESPACE__ : tên NAMESPACE trong lập trình OOP
 */
define ('SIZE', 100);
echo "<br>";
echo __LINE__;
<?php

/* Một số hàm xử lý file
 * 
1.CHECK IF FILE EXIST
 * bool file_exists(string $filename)
 * -> Hàm check file or url có tồn tại hay ko.
 * 
2.COPY FILE
 * bool copy(string $source, string $dest)
 * -> Hàm copy 1 file đã tồn tại.
 * 
 * $source: file nguồn
 * $dest: file sau copy
 * 
 * $source = 'uploads/img.jpg;
 * $dest = 'uploads/img-1.jpg;
 * if(copy($source, $dest)) echo "Copy file success";
 * 
 * 3.FILE SIZE
 * int filesize(string $file_url)
 * -> Hàm xđ size of file.
 * 
 * ...See more: php.net
 */


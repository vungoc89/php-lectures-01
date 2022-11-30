<?php

/* 
DANH SACH SYSTEM VARIABLES:
 * 1.   $GLOBALS

 * 2.   $_SEVER

 * 3.   $_RESQUEST

 * 4.   $_POST

 * 5.   $_GET

 * 6.   $_FILES

 * 7.   $_ENV

 * 8.   $_COOKIE

 * 9.   $_SESSION

 * ...
 */
function show_data($data){
    echo"<pre>";
    print_r($data);
    echo"</pre>";
}
show_data($_SERVER);

//IN ra cac thanh phan: VD
show_data($_SERVER['HTTP_USER_AGENT']);
/**
Array
(
    [MIBDIRS] => /xampp/php/extras/mibs
    [MYSQL_HOME] => \xampp\mysql\bin
    [OPENSSL_CONF] => /xampp/apache/bin/openssl.cnf
    [PHP_PEAR_SYSCONF_DIR] => \xampp\php
    [PHPRC] => \xampp\php
    [TMP] => \xampp\tmp
    [HTTP_HOST] => localhost
    [HTTP_CONNECTION] => keep-alive
    [HTTP_SEC_CH_UA] => "Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"
    [HTTP_SEC_CH_UA_MOBILE] => ?0
    [HTTP_SEC_CH_UA_PLATFORM] => "Windows"
    [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
    [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36
    [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
//    [HTTP_SEC_FETCH_SITE] => same-origin
//    [HTTP_SEC_FETCH_MODE] => navigate
//    [HTTP_SEC_FETCH_USER] => ?1
//    [HTTP_SEC_FETCH_DEST] => document
//    [HTTP_REFERER] => http://localhost/phpLectures01/BackEnd/Lesson/section-04-BASIC02/
//    [HTTP_ACCEPT_ENCODING] => gzip, deflate, br
//    [HTTP_ACCEPT_LANGUAGE] => en,en-US;q=0.9,vi;q=0.8
//    [PATH] => C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\Microsoft VS Code\bin;C:\Program Files\Git\cmd;C:\Program Files\Docker\Docker\resources\bin;C:\ProgramData\DockerDesktop\version-bin;C:\Users\Administrator\AppData\Roaming\nvm;C:\Program Files\nodejs;C:\Users\Administrator\AppData\Local\Microsoft\WindowsApps;C:\Users\Administrator\AppData\Roaming\nvm;C:\Program Files\nodejs
//    [SystemRoot] => C:\Windows
//    [COMSPEC] => C:\Windows\system32\cmd.exe
//    [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
//    [WINDIR] => C:\Windows
//    [SERVER_SIGNATURE] => 
//Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.1.10 Server at localhost Port 80
//
//
//    [SERVER_SOFTWARE] => Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.1.10
//    [SERVER_NAME] => localhost
//    [SERVER_ADDR] => ::1
//    [SERVER_PORT] => 80
//    [REMOTE_ADDR] => ::1
//    [DOCUMENT_ROOT] => C:/xampp/htdocs
//    [REQUEST_SCHEME] => http
//    [CONTEXT_PREFIX] => 
//    [CONTEXT_DOCUMENT_ROOT] => C:/xampp/htdocs
//    [SERVER_ADMIN] => postmaster@localhost
//    [SCRIPT_FILENAME] => C:/xampp/htdocs/phpLectures01/BackEnd/Lesson/section-04-BASIC02/04-7-SYSTEM-VARIABLE.php
//    [REMOTE_PORT] => 55628
//    [GATEWAY_INTERFACE] => CGI/1.1
//    [SERVER_PROTOCOL] => HTTP/1.1
//    [REQUEST_METHOD] => GET
//    [QUERY_STRING] => 
//    [REQUEST_URI] => /phpLectures01/BackEnd/Lesson/section-04-BASIC02/04-7-SYSTEM-VARIABLE.php
//    [SCRIPT_NAME] => /phpLectures01/BackEnd/Lesson/section-04-BASIC02/04-7-SYSTEM-VARIABLE.php
//    [PHP_SELF] => /phpLectures01/BackEnd/Lesson/section-04-BASIC02/04-7-SYSTEM-VARIABLE.php
//    [REQUEST_TIME_FLOAT] => 1669713320.1267
//    [REQUEST_TIME] => 1669713320
//)
 
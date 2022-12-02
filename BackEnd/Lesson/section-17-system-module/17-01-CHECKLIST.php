<?php

/* 
1. Push access request to url
 * <a href="?mod=product&act=main&id=1">Computer</a>
 * <a href="?mod=product&act=main&id=2">Smart Phone</a>

2. Get data from url
 * $mod = $_GET[mod];
 * $act = $_GET[act];

3. Create path
 * $path = "modules/{$mod}/{$act}.php";

4. Call handler-file exist
 * require ($path);
 */


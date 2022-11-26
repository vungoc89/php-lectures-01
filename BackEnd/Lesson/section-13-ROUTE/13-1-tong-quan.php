<?php

/* 
1. HE THONG DIEU HUONG LA GI ?
 * -> Toi uu xay dung he thong
 * -> De quan ly
 * -> De chinh sua
 * -> Ro rang
 * 
2. Cong cu xay dung
 * -> Include file
 * -> Get info from URL
 * -> Function
 * -> Cat ghep giao dien
 * 
13-2: IDEA HE THONG DIEU HUONG
 * 1. Toi uu data dung chung(customized common data)
 * -> File giao dien dung chung (common interface file) 
 * -> Ham dung chung (common func)
 * 
 * 2. CHECKLIST
 * B1: Day yeu cau truy cap len url(Push access request to url)
 * <a href = "?page=contact">Lien he</a>
 * <a href = "?page=product">San pham</a>
 * 
 * B2: Lay du lieu page tu url (Get data of page from url)
 * $page = $_GET['page'];
 * 
 * B3: Tao duong dan (Create a path)
 * $path = "pages/{$page}.php";
 * 
 * B4: Goi file xu ly hien tai (Call exist handle file) 
 * require($path);
 */


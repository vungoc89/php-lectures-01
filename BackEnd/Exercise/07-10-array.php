
<?php ?>
<?php
//    Bai 1: Tao mang luu cac so le tu 3 -> 150
    $list_odd = array();
    
//    $key = 0; //ko can cho nay vi key cua arr trong php se auto tang len.
    for($i = 3; $i < 150; $i+=2){
        $list_odd[] = $i;
    }
    
// echo"<pre>";
//    print_r($list_odd);
// echo"</pre>";
 
 //Bai 2: Tao mang nhieu chieu quan ly cac bai viet trong website tin tuc
 $list_news = array(
     1 => array(
        'id' => 1001, 
        'post_author' => 'author01',
        'post_title' => 'bai viet 01', 
        'post_content' => 'Day la content 01',
        'post_desc' => 'Content 01',
        'category_id' => 001,
        'post_thumb' => 'img01',
        'post_date' => '01/01/2001',
    ), 
    2 => array(
        'id' => 1002, 
        'post_author' => 'author02',
        'post_title' => 'bai viet 02', 
        'post_content' => 'Day la content 02',
        'post_desc' => 'Content 02',
        'category_id' => 002,
        'post_thumb' => 'img01',
        'post_date' => '01/01/2001',
    ),
 );
 
 //Bai 2: Tao mang nhieu chieu quan ly cac san pham trong website ban hang
  $list_products = array(
    1 => array(
        'id' => 1001, 
        'product_name' => 'banana01',
        'unit' => 'kg',
        'amount' => '1000', 
        'price' => 15000,
        'produce_date' => '01/01/2001',
        'expire_date' => '10/10/2001',
    ), 
    2 => array(
        'id' => 1002, 
        'product_name' => 'apple01',
        'unit' => 'kg',
        'amount' => '500', 
        'price' => 20000,
        'produce_date' => '01/01/2001',
        'expire_date' => '10/10/2001',
    ), 
 );
?>

<html>
    <head>
        <title>
            Truyen array vao html
        </title>
    </head>
</html>

<body>
     <br>
    <h1>Danh sach bai viet</h1>
    <!--/
    'id' => 1001, 
        'post_author' => 'author01',
        'post_title' => 'bai viet 01', 
        'post_content' => 'Day la content 01',
        'post_desc' => 'Content 01',
        'category_id' => 001,
        'post_thum' => 'img01',
        'post_date' => '01/01/2001',
    -->
    <?php if(!empty($list_news)) { ?>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="50">Stt</td>
                <td align="center" width="100">Id</td>
                <td align="center" width="150">Tac gia</td>
                <td align="center" width="150">Tieu de</td>
                <td align="center" width="150">Noi dung</td>
                <td align="center" width="150">Mo ta</td>
                <td align="center" width="150">ID thu muc</td>
                <td align="center" width="150">Anh minh hoa</td>
                <td align="center" width="150">Ngay viet</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $idx = 0;
                foreach($list_news as $news){
                    $idx++;
            ?>
                    <tr>
                        <td align="center" ><?php echo $idx ?></td>
                        <td align="center" ><?php echo $news['id'] ?></td>
                        <td align="center" ><?php echo $news['post_author'] ?></td>
                        <td align="center" ><?php echo $news['post_title'] ?></td>
                        <td align="center" ><?php echo $news['post_content'] ?></td>
                        <td align="center" ><?php echo $news['post_desc'] ?></td>
                        <td align="center" ><?php echo $news['category_id'] ?></td>
                        <td align="center" ><?php echo $news['post_thumb'] ?></td>
                        <td align="center" ><?php echo $news['post_date'] ?></td>
                    </tr>
            <?php
                }
            ?>
            
        </tbody>
    </table>
   <?php }else{ ?>
    <p>Khong ton tai du lieu</p>
   <?php } ?>
    
    <ul>
        <?php if(!empty($list_news)){
            foreach ($list_news as $item) {
            ?>
            <li>
                <a href="#"><?php echo $item['post_title'] ?></a>
                <p><?php echo $item['post_desc'] ?></p>
            </li>
        
    <?php  
            }
        } ?>
    </ul>
    <!--=============================================-->
    <br>
    <h1>Danh sach san pham trai cay</h1>
    <?php if(!empty($list_products)) { ?>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="50">Stt</td>
                <td align="center" width="100">Id</td>
                <td align="center" width="150">Ten san pham</td>
                <td align="center" width="150">Đơn vị tính</td>
                <td align="center" width="150">Số lượng</td>
                <td align="center" width="150">Đơn giá(vnd)</td>
                <td align="center" width="150">Ngày sản xuất</td>
                <td align="center" width="150">Ngày hết hạn</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $idx = 0;
                foreach($list_products as $item){
                    $idx++;
            ?>
                    <tr>
                        <td align="center" ><?php echo $idx ?></td>
                        <td align="center" ><?php echo $item['id'] ?></td>
                        <td align="center" ><?php echo $item['product_name'] ?></td>
                        <td align="center" ><?php echo $item['unit'] ?></td>
                        <td align="center" ><?php echo $item['amount'] ?></td>
                        <td align="center" ><?php echo $item['price'] ?></td>
                        <td align="center" ><?php echo $item['produce_date'] ?></td>
                        <td align="center" ><?php echo $item['expire_date'] ?></td>
                    </tr>
            <?php
                }
            ?>
            
        </tbody>
    </table>
   <?php }else{ ?>
    <p>Khong ton tai du lieu</p>
   <?php } ?>
    
   
</body>


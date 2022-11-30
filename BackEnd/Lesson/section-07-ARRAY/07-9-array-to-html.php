
<?php ?>
<?php
    $list_prime = array(2, 3, 5, 7); 
    
    $list_user = array(
    1 => array(
        'id' => 1001, 
        'fullName' => 'nguyen van a', 
        'email' => 'abc@gmail.com',
    ), 
    2 => array(
        'id' => 1002, 
        'fullName' => 'nguyen van b', 
        'email' => 'cde@gmail.com',
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
    <h1>Danh sach so nguyen to</h1>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="50">Stt</td>
                <td align="center" width="300">So nguyen to</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $idx = 0;
                foreach($list_prime as $value){
                    $idx++;
            ?>
                    <tr>
                        <td align="center" ><?php echo $idx ?></td>
                        <td align="center" ><?php echo $value ?></td>
                    </tr>
            <?php
                }
            ?>
            
        </tbody>
    </table>
    
    <br>
    
    <h1>Danh sach nhan vien</h1>
    <?php if(!empty($list_user)) { ?>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="50">Stt</td>
                <td align="center" width="100">Id</td>
                <td align="center" width="150">Ho va ten</td>
                <td align="center" width="150">Email</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $idx = 0;
                foreach($list_user as $user){
                    $idx++;
            ?>
                    <tr>
                        <td align="center" ><?php echo $idx ?></td>
                        <td align="center" ><?php echo $user['id'] ?></td>
                        <td align="center" ><?php echo $user['fullName'] ?></td>
                        <td align="center" ><?php echo $user['email'] ?></td>
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
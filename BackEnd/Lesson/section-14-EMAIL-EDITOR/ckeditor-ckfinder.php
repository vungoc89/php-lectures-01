<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <title>
            Tich hop ckeditor ckfinder
        </title>
        <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="ckfinder/ckfinder.js" type="text/javascript"></script>
    </head>
    
    <body>
        <div id="content">
            <textarea class="editor" name="editor">
                
            </textarea>
        </div>
    </body>
    <script>
        CKEDITOR.replace( 'editor', {
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
//            filebrowserWindowWidth: '1000',
//            filebrowserWindowHeight: '700'
} );
    </script>
</html>


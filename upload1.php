<!DOCTYPE html>
   <head>
     <meta http-equiv="content-type"content="text/html; charset=sjis">
   </head>
     <body>
<?php
    ini_set( 'display_errors', 1 );
   date_default_timezone_set('Asia/Tokyo');


if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
        echo $_FILES["upfile"]["tmp_name"];
        echo $_FILES["upfile"];
 if(move_uploaded_file($_FILES["upfile"]["tmp_name"], "img/" . $_FILES["upfile"]["name"])) {
        echo $file, 'のアップロードに成功しました。';
        $tempfile = $_FILES["upfile"]["name"];
        echo $tempfile;
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "ファイルが選択されていません。";
}
?>
      <form method="post" action="upload1.php" enctype="multipart/form-data">
         <input type="file" name="upfile"/><br/>
         <input type="submit" value="送信する" />
       </form>
     <br>
     <br>
   </body>
</html>

<!DOCTYPE html>
   <head>
     <meta http-equiv="content-type"content="text/html; charset=sjis">
   </head>
     <body>
      <form method="post" action="upload.php" enctype="multipart/form-data">
         <input type="file" name="kouhei"/><br/>
         <input type="submit" value="送信する" />
       </form>
     <br>
     <br>
<?php
class upload{
	public function uploadfile($value,$value1,$value2){
		// ini_set( 'display_errors', 1 );
        if (is_uploaded_file($value)) {
                echo $value;
                echo $value1;
          if(move_uploaded_file($value, "img/" . $value2)) {
                echo $file, 'のアップロードに成功しました。';
                $tempfile = $value2;
                echo $tempfile;
          }else{
              echo "ファイルをアップロードできません。";
          }

        }else{
             echo "ファイルが選択されていません。";
       }
     }
}
$values = $_FILES["kouhei"]["tmp_name"];
$values1 = $_FILES["kouhei"];
$values2 = $_FILES["kouhei"]["name"];

$ans = new upload();
$ans1 = $ans->uploadfile($values,$values1,$values2);
echo $ans1;
?>
   </body>
</html>

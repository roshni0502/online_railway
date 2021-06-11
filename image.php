<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    
    <form id="form" name="form" action="image.php" method="post" enctype="multipart/form-data">
    	<input type="file" name="file">
    	<button type="submit" name="submit">Submit</button>
    </form>





</body>
</html>

<?php
 include 'connection.php' ;
date_default_timezone_set('Asia/Kolkata');

 if(isset($_POST['submit']))
 {
 	 $files=$_FILES['file']['tmp_name'];
 	 $data=getimagesize($files);
 	 print_r($data);

     list($width,$height)=getimagesize($files);
     echo $width;
     $nwidth=80;
     $nheight=80;
     $newimage=imagecreatetruecolor($nwidth,$nheight);

    if ($_FILES['file']['type']=='image/jpeg') {

      $source=imagecreatefromjpeg($files);
      imagecopyresized($newimage, $source, 0, 0, 0, 0, $nwidth , $nheight , $width, $height);
      $file_name=time().'.jpg';
      imagejpeg($newimage,'documents_upload/'. $file_name);
     

       
    }
     if ($_FILES['file']['type']=='image/png') {
      
      $source=imagecreatefrompng($files);
      imagecopyresized($newimage, $source, 0, 0, 0, 0, $nwidth , $nheight , $width, $height);
      $file_name=time().'.png';
      imagepng($newimage,'documents_upload/'. $file_name);
      
 }
}
?>

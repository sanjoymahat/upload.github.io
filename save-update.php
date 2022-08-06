<?php
include "config.php";
if(empty($_FILES['new-image']['name'])){
    $file_name = $_POST['old_image'];
}else{
    $errors = array();

    $file_name = $_FILES['new-image']['name'];
    $file_size = $_FILES['new-image']['size'];
    $file_tmp = $_FILES['new-image']['tmp_name'];
    $file_type = $_FILES['new-image']['type'];
    $file_ext = end(explode('.',$file_name));

    $extensions = array("jpeg","jpg","png","pdf","doc");

    if(in_array($file_ext,$extensions) === false)
    {
      $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
    }

    if($file_size > 2097152){
      $errors[] = "File size must be 2mb or lower.";
    }
    $new_name = time(). "-".basename($file_name);
    $target ="upload/". $new_name;

    if(empty($errors) == true){
      move_uploaded_file($file_tmp,$target);
    }else{
      print_r($errors);
      die();
    }
}

$sql = "UPDATE tbimg SET name ='{$_POST["image_title"]}',description='{$_POST["imagedesc"]}',img='{$file_name}'
        WHERE id={$_POST["id"]};";


$result = mysqli_multi_query($conn,$sql);

if($result){
  header("location: {$hostname}/post.php");
}else{
  echo "Query Failed";
}




?>
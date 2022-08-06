<?php

include "config.php";
$id=$_GET['id'];
$sql="SELECT * FROM tbimg WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>upload</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
</head>
<body>
    <div id="admin-content">
        <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <h1 class="admin-heading">Edit Image</h1>
               </div>
                <div class="col-md-offset-3 col-md-6">
                    <!-- Form -->
                    <form  action="save-update.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <input type="hidden" name="id"  class="form-control" value="<?php echo $row['id']; ?>" placeholder="">
                         </div>
                        <div class="form-group">
                            <label for="post_title">Name</label>
                            <input type="text" name="image_title" class="form-control" value="<?php echo $row['name']; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Description</label>
                            <textarea name="imagedesc" class="form-control"  rows="5"  required> <?php echo $row['description']; ?></textarea>
                        </div>
                      
                        <div class="form-group">
                          <label for="">Edit image</label>
                           <input type="file" name="new-image">
                           <img  src="upload/<?php echo $row['img']; ?>" height="150px">
                             <input type="hidden" name="old_image" value="<?php echo $row['img']; ?>">
                             </div>
                        <input type="submit" name="update" class="btn btn-primary" value="Save" required />
                    </form>
                    <!--/Form -->
                </div>
            </div>
        </div>
    </div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

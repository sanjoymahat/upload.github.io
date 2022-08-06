<?php include "config.php";?>
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
                   <h1 class="admin-heading">upload description</h1>
               </div>
                <div class="col-md-offset-3 col-md-6">
                    <!-- Form -->
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST"">
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Description1</label>
                            <textarea name="desc1" class="form-control" rows="5"  required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Description2</label>
                            <textarea name="desc2" class="form-control" rows="5"  required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Description3</label>
                            <textarea name="desc3" class="form-control" rows="5"  required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Description4</label>
                            <textarea name="desc4" class="form-control" rows="5"  required></textarea>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                    </form>


                    <?php
             if(isset($_POST['submit'])){
    $des1=mysqli_real_escape_string($conn,$_POST['desc1']);
    $des2=mysqli_real_escape_string($conn,$_POST['desc2']);
    $des3=mysqli_real_escape_string($conn,$_POST['desc3']);
    $des4=mysqli_real_escape_string($conn,$_POST['desc4']);

    $sql = "INSERT INTO description(des1,des2,des3,des4) VALUES('$des1','$des2','$des3','$des4');";
    $result=mysqli_query($conn,$sql);
    if ($result)
    {  
        header("location: {$hostname}/docum.php");                          
?>                                             
       <div class=
     "alert alert-success alert-dismissible fade show text-center">
         <a class="close" data-dismiss="alert" aria-label="close">
           ×
         </a>
         <strong>Success!</strong> Data submitted successfully.
       </div>
     <?php
     }
     else
     {
     ?>
       <div class=
     "alert alert-danger alert-dismissible fade show text-center">
         <a class="close" data-dismiss="alert" aria-label="close">
           ×
         </a>
         <strong>Failed!</strong> Try Again!
       </div>
     <?php
     }

}
else
                            {
                              ?>
                                <div class=
                                "alert alert-danger alert-dismissible fade show text-center">
                                  <a class="close" data-dismiss="alert" aria-label="close">
                                      ×
                                  </a>
                                  <strong>Failed!</strong> File must be uploaded in PDF format!
                                </div>
                              <?php
                            }// en
?>
                    <!--/Form -->
                </div>
            </div>
        </div>
    </div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>


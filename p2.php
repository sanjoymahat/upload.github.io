
 
<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <strong>Fill dname and Upload Document</strong>
                <form method="post" enctype="multipart/form-data">
                    <?php
					include 'config.php';
                        // If submit button is clicked
                        if (isset($_POST['submit']))
						
                        {
                          // get name from the form when submitted
                          $name = $_POST['name'];                    
 
                          if (isset($_FILES['doc_file']['name']))
                          {  
                          // If the ‘doc_file’ field has an attachment
                            $file_name = $_FILES['doc_file']['name'];
                            $file_tmp = $_FILES['doc_file']['tmp_name'];
                            move_uploaded_file($file_tmp,"./docx/".$file_name);

                             $sql = "INSERT INTO doc_data(dname,dfile) VALUES('$name','$file_name')";
                             
                            // Execute insert query
                              $result = mysqli_query($conn, $sql);  

 
                                if ($result)
                               {                            
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
                            }// end if
                        }// end if
                    ?>
                     
                    <div class="form-input py-2">
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   placeholder="Enter your name" name="name">
                        </div>                                 
                        <div class="form-group">
                            <input type="file" name="doc_file"
                                   class="form-control" accept=".docx" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit"
                                  class="btnRegister" name="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>           
             
			<?php 
                          include "config.php"; 
                             $sql="SELECT * FROM doc_data";
                             $result=mysqli_query($conn,$sql);
                               $data=mysqli_num_rows($result);
                               ?>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card">
                <div class="card-header text-center">
                  <h4>Records from Database</h4>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                      <table>
                        <thead>
                            <th>ID</th>
                            <th>dname</th>
                            <th>dfile</th>
                        </thead>
						<?php
                        $serial = $offset + 1;
                        while($row = mysqli_fetch_assoc($result)) {?>
                        <tbody>
						
							<tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['dname']; ?></td>
                            <td><?php echo $row['dfile']; ?></td>
                          </tr>
						  <?php
                          $serial++;
                        } ?>
                        </tbody>
						<?php include "config.php"; ?>
                      </table>               
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
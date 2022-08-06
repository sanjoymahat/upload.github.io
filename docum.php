<?php 
include "config.php"; 
$sql="SELECT * FROM description";
$result=mysqli_query($conn,$sql);
$data=mysqli_num_rows($result);
?>
 <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
  <div id="admin-content">
      <div class="container">
          <div class="row">
          
              <div class="col-md-10">
                  <h1 class="admin-heading"> All Description</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="p3.php">ADD Description</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Description1</th>
                          <th>Description2</th>
                          <th>Description3</th>
                          <th>Description4</th>
                      </thead>
                      <?php
                        $serial = $offset + 1;
                        while($row = mysqli_fetch_assoc($result)) {?>
                          <tr>
                              <td class='id'><?php echo $serial; ?></td>
                              <td><?php echo $row['des1']; ?></td>
                              <td><?php echo $row['des2']; ?></td>
                              <td><?php echo $row['des3']; ?></td>
                              <td><?php echo $row['des4']; ?></td>
                             
                          </tr>
                          <?php
                          $serial++;
                        } ?>
                      </tbody>
                  </table>
                  
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
              </div>

          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
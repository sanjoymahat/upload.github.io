<?php 

include "config.php"; 
$sql="SELECT * FROM tbimg";
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
                  <h1 class="admin-heading">All Record</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="form.php">ADD Image</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <?php
                        $serial = $offset + 1;
                        while($row = mysqli_fetch_assoc($result)) {?>
                          <tr>
                              <td class='id'><?php echo $serial; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['description']; ?></td>
                              <td><img src="upload/<?php echo $row['img']; ?>height="80px" weight="60px" "></td>
                              <td class='edit'><a href='edit.php?id=<?php echo $row['id']; ?>'>Edit<i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete.php?id=<?php echo $row['id']; ?>'> Delete<i class='fa fa-trash-o'></i></a></td>
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
<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">

              <?php
                

               
                if(isset($_POST['save'])){
                    $conn = mysqli_connect('localhost', 'root', '', 'news-site');
            
                    //$cat_id = mysqli_real_escape_string($conn,$_POST['category_id']);
                    $cat_name = mysqli_real_escape_string($conn,$_POST['category_name']);
                  
            
                        $sql1 = "INSERT INTO category(category_name) VALUES ('{$cat_name}')";
                        if(mysqli_query($conn,$sql1)){
                            header ('Location: http://localhost/news-template/admin/category.php');
                        }else {
                            echo "SQL ERROR";
                        }
                       
                    
            
                }


              ?>
                  <!-- Form Start -->
                  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="category_name" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>

<?php require_once 'include/header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <?php  
                if($_GET['id']) {

                  $id = $_GET['id'];
                  $sql = "SELECT name FROM category_tbl WHERE id = $id";
                  $mysql = mysqli_query($con,$sql) or die("Mysql Error!!");
                  $my_res = mysqli_fetch_assoc($mysql);

                  if(isset($_POST['submit'])){
                    $name = $_POST['category_name'];
                    if($name == ""){
                        echo "<p class='alert alert-danger'>Input Required!</p>";
                    } else {
                      $update = "UPDATE category_tbl SET name='$name',updated_at='$timestamp' WHERE id=$id";
                      $update_res = mysqli_query($con,$update);
                      echo "<script>location.href='category_index.php'</script>";
                    }
                  }
                }
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="category_name">Category Name <span class="text-danger">*</span></label>
                    <input type="text" value="<?php echo $my_res['name'];?>" class="form-control form-control-sm" name="category_name" placeholder="Enter Category Name..." id="category_name">
                </div>
                <div class="form-group">
                    <a href="category_index.php" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                    <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fa fa-check"></i></button>
                </div>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php require_once 'include/footer.php'; ?>
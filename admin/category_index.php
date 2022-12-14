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
            <a href="category_add.php" class="btn btn-sm btn-primary float-right"><i class="fa fa-plus"></i></a>
            <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Option</th>
                      <th>Name</th>
                      <th>Created At</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        $i = 1;
                        $sql = "SELECT * FROM category_tbl WHERE deleted_at IS NULL ORDER BY created_at DESC";
                        $res = mysqli_query($con, $sql) or die("PC_ERROR_2: MYSQL SELECT QUERY ERROR");
                        while($row = mysqli_fetch_assoc($res)){
                          ?>
                              <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td>
                                  <a href="category_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                  <a href="category_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
                                </td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                              </tr>
                          <?php
                        }
                      ?>
                  </tbody>
                </table>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php require_once 'include/footer.php'; ?>
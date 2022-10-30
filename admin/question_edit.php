<?php require_once 'include/header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Question Update</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Question Update</li>
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
                if(isset($_GET["id"])) {
                    $id = $_GET['id'];
                    if($id == "") {
                        echo "<p class='alert alert-danger'>Your Question's id must be equal!</p>";
                    }
                    else {
                        $fetch_sql = "SELECT * FROM question_tbl WHERE id=$id";
                        $fetch_res = mysqli_query($con,$fetch_sql);
                        $res = mysqli_fetch_assoc($fetch_res);
                        if(isset($_POST['submit'])){
                        $name = $_POST['question_name'];
                        $ans1 = $_POST['ans1'];
                        $ans2 = $_POST['ans2'];
                        $ans3 = $_POST['ans3'];
                        $ans4 = $_POST['ans4'];
                        $correct_ans = $_POST['correct_ans'];
                        $category_id = $_POST['category_id'];
                        if($name == ""){
                                echo "<p class='alert alert-danger'>Question must be entered!</p>";
                        }
                        else {
                            $question_sql = "UPDATE question_tbl SET question = '$name' updated_at = '$timestamp' WHERE id=$id";
                            $questino_res = mysqli_query($con, $sql) or die("MYSQL INSERT QUERY ERROR!");
                          if($ans1 == "") {
                                echo "<p class='alert alert-danger'>Answer1 must be entered!</p>";
                          } else {
                                $ans1_sql = "UPDATE question_tbl SET ans_1 = '$ans1'updated_at = '$timestamp' WHERE id=$id";
                                $ans1_res = mysqli_query($con, $sql) or die("MYSQL INSERT QUERY ERROR!");
                          // }
                                if($ans2 == "") {
                                  echo "<p class='alert alert-danger'>Answer2 must be entered!</p>";
                                } else {
                                  $ans2_sql = "UPDATE question_tbl SET ans_2 = '$ans2'updated_at = '$timestamp' WHERE id=$id";
                                  $ans2_res = mysqli_query($con, $sql) or die("MYSQL INSERT QUERY ERROR!");
                                  if($ans3 == "") {
                                        echo "<p class='alert alert-danger'>Answer1 must be entered!</p>";
                                  } else {
                                        $ans3_sql = "UPDATE question_tbl SET ans_3 = '$ans3'updated_at = '$timestamp' WHERE id=$id";
                                        $ans3_res = mysqli_query($con, $sql) or die("MYSQL INSERT QUERY ERROR!");
                                    if($ans4 == "") {
                                          echo "<p class='alert alert-danger'>Answer2 must be entered!</p>";
                                    } else {
                                          $ans4_sql = "UPDATE question_tbl SET ans_4 = '$ans4'updated_at = '$timestamp' WHERE id=$id";
                                          $ans4_res = mysqli_query($con, $sql) or die("MYSQL INSERT QUERY ERROR!");
                                        if($correct_ans == "") {
                                              echo "<p class='alert alert-danger'>Answer2 must be entered!</p>";
                                        } else {
                                              $correct_ans_sql = "UPDATE question_tbl SET correct_ans = '$correct_ans'updated_at = '$timestamp' WHERE id=$id";
                                              $correct_ans_res = mysqli_query($con, $sql) or die("MYSQL INSERT QUERY ERROR!");
                                        // }
                            
                                          if($category_id == ""){
                                                echo "<p class='alert alert-danger'>Category must be choosed!</p>";
                                          }
                                          else{
                                            $sql = "UPDATE question_tbl SET question = '$name', category_id = '$category_id', updated_at = '$timestamp' WHERE id=$id"; 
                                            $stmt = mysqli_query($con, $sql) or die("MYSQL INSERT QUERY ERROR!");
                                            echo "<script>location.href='question_index.php'</script>";

                                          
                                          }
                                        }
                                    }
                                  }
                                }
                          }
                        }
                    }   
                }
              }
              //   else {
              //   echo "<script>location.href='question_index.php'</script>";
              // }
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="question_name">Question Name <span class="text-danger">*</span></label>
                    <input type="text" value = "<?php echo $res['question']; ?>" class="form-control form-control-sm" name="question_name" placeholder="Enter Question..." id="category_name">
                </div>
                
                <div class="form-group">
                    <label for="answer_name">Answer One <span class="text-danger">*</span></label>
                    <input type="text" value = "<?php echo $res['ans_1']; ?>" class="form-control form-control-sm" name="ans1" placeholder="Ans1..." id="category_name">
                </div>
                <div class="form-group">
                    <label for="answer_name">Answer Two <span class="text-danger">*</span></label>
                    <input type="text" value = "<?php echo $res['ans_2']; ?>" class="form-control form-control-sm" name="ans2" placeholder=" Ans2..." id="category_name">
                </div>
                <div class="form-group">
                    <label for="question_name">Answer Three <span class="text-danger">*</span></label>
                    <input type="text" value = "<?php echo $res['ans_3']; ?>" class="form-control form-control-sm" name="ans3" placeholder="Ans3..." id="category_name">
                </div>
                <div class="form-group">
                    <label for="question_name">Answer Four <span class="text-danger">*</span></label>
                    <input type="text" value = "<?php echo $res['ans_4']; ?>" class="form-control form-control-sm" name="ans4" placeholder="Ans4..." id="category_name">
                </div>
                <div class="form-group">
                    <label for="question_name">Correct Answer <span class="text-danger">*</span></label>
                    <input type="text" value = "<?php echo $res['correct_ans']; ?>" class="form-control form-control-sm" name="correct_ans" placeholder="Enter Question..." id="category_name">
                </div>
                <div class="form-group">
                    <a href="question_index.php" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                    <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fa fa-check"></i></button>
                </div>
                <div class="form-group">
                    <label for="category_name">Category<span class="text-danger">*</span></label>
                    <select class="form-control form-control-sm" name="category_id" id="category_id">
                        <?php
                            $sel_sql = "SELECT * FROM category_tbl WHERE deleted_at IS NULL";
                            $sel_res = mysqli_query($con, $sel_sql) or die("MYSQL: SELECT QUERY ERROR!");
                            while($row = mysqli_fetch_assoc($sel_res)):
                        ?>
                            <option value="<?php echo $row['id']; ?>" <?php if($res['category_id'] == $row['id']) echo 'selected'; ?>><?php echo $row['name']; ?></option>
                        <?php
                            endwhile;
                        ?>
                    </select>
                </div>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php require_once 'include/footer.php'; ?>
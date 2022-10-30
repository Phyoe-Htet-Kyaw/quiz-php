<?php require_once 'include/header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Question</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Question</li>
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
                if(isset($_POST['submit'])):
                    $name = $_POST['question_name'];
                    $ans_1 = $_POST['answer_one'];
                    $ans_2 = $_POST['answer_two'];
                    $ans_3 = $_POST['answer_three'];
                    $ans_4 = $_POST['answer_four'];
                    $correct_answer = $_POST['correct_answer'];
                    $category_id = $_POST['category_id'];
                      if($name == ""){
                        echo "<p class='alert alert-danger'>Name must be entered!</p>";
                      }else{
                        if($ans_1 == ""){
                          echo "<p class='alert alert-danger'>Answer one must be entered!</p>";
                        }else{
                          if($ans_2 == ""){
                            echo "<p class='alert alert-danger'>Answer two must be entered!</p>";
                          }else{
                            if($ans_3 == ""){
                              echo "<p class='alert alert-danger'>Answer three must be entered!</p>";
                            }else{
                              if($ans_4 == ""){
                                echo "<p class='alert alert-danger'>Answer four must be entered!</p>";
                              }else{
                                if($correct_answer == ""){
                                  echo "<p class='alert alert-danger'>Correct answer must be entered!</p>";
                                }else{
                                  $sql = "INSERT INTO question_tbl (question, ans_1, ans_2, ans_3, ans_4, correct_ans, category_id, created_at) VALUES ('$name','$ans_1', '$ans_2', '$ans_3', '$ans_4', '$correct_answer', '$category_id', '$timestamp')";
                                  echo $sql;
                                  $stmt = mysqli_query($con, $sql) or die("MYSQL INSERT QUERY ERROR!");
                                  echo "<script>location.href='question_index.php'</script>";
                                }
                              }
                            }
                          }
                        }
                      }
                endif;
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="question_name">Question Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="question_name" placeholder="Enter Question..." id="category_name">
                </div>
                <div class="form-group">
                    <label for="answer_one">Answer_1 <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="answer_one" placeholder="Enter Answer_1..." id="category_name">
                </div>
                <div class="form-group">
                    <label for="answer_two">Answer_2<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="answer_two" placeholder="Enter Answer_2..." id="category_name">
                </div>
                <div class="form-group">
                    <label for="answer_three">Answer_3<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="answer_three" placeholder="Enter Answer_3..." id="category_name">
                </div>
                <div class="form-group">
                    <label for="answer_four">Answer_4<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="answer_four" placeholder="Enter Answer_4..." id="category_name">
                </div>
                <div class="form-group">
                    <label for="correct_answer">Correct Answer<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="correct_answer" placeholder="Enter Correct Answer..." id="category_name">
                </div>
                <div class="form-group">
                    <label for="category_name">Category<span class="text-danger">*</span></label>
                    <select class="form-control form-control-sm" name="category_id" id="category_id">
                        <?php
                            $sel_sql = "SELECT * FROM category_tbl WHERE deleted_at IS NULL";
                            $sel_res = mysqli_query($con, $sel_sql) or die("MYSQL: SELECT QUERY ERROR!");
                            while($row = mysqli_fetch_assoc($sel_res)):
                        ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php
                            endwhile;
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <a href="question_index.php" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
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
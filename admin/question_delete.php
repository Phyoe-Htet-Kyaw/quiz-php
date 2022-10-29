<?php
    require_once 'include/header.php';
    if(isset($_GET['id'])):
        $id = $_GET['id'];
        $del = "UPDATE question_tbl SET deleted_at='$timestamp' WHERE id=$id";
        $del_res = mysqli_query($con, $del) or die("MYSQL: UPDATE QUERY ERROR!");
        echo "<script>location.href='question_index.php'</script>";
    else:
        echo "<script>location.href='question_index.php'</script>";
    endif;
?>
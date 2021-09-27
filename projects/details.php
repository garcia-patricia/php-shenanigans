<?php
//query
if(isset($_GET['id'])){
    include './../includes/connect.php';
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = " SELECT * FROM tbl_project WHERE project_link = '$id' ";
    $result = mysqli_query($conn , $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_array($result);
    

} else {
    header ('Location: index.php');
}


?>

<h1><?php echo $row['project_name'] ?></h1>
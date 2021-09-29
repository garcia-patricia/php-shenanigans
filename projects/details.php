<?php
//query
if(isset($_GET['project'])){
    include './../includes/connect.php';
    $project = mysqli_real_escape_string($conn, $_GET['project']);
    $sql = " SELECT * FROM tbl_project WHERE project_link = '$project' ";
    $result = mysqli_query($conn , $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_array($result);
    
} else {
    header ('Location: index.php');
}

?>

<h1><?php echo $row['project_name']; ?></h1>
<br>
<p><?php echo $row['project_objective']; ?></p>
<br>
<p><?php echo $row['project_result']; ?></p>


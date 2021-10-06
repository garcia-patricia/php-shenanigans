<?php 
if (isset($_GET['id'])) {
require_once '.././includes/connect.php';

$sql = "SELECT * FROM tbl_project WHERE project_id='$id' ";
$result = mysqli_query($conn, $sql) or die ("Bad query : $sql ");
$row = mysqli_fetch_array($result);

} else {
    header ('Location: ././index.php');
}
// run this query to echo the information on the page. the top query is for the id
$proj = " SELECT * FROM tbl_project;";
    $project_result = mysqli_query($conn, $proj);
    // this id '$projects' is where the data is stored
    $projects = mysqli_fetch_array($project_result);

?>


Header image <br>
<?php echo $projects['project_name']; ?> <br><br>

Info: Year, title, role <br><br>

<div class="project-views">
            <img src="img/<?php echo $projects['project_view_1'];?>" alt="TBE">
            <img src="img/<?php echo $projects['project_view_2'];?>" alt="TBE">
            <img src="img/<?php echo $projects['project_view_3'];?>" alt="TBE">
            <img src="img/<?php echo $projects['project_view_4'];?>" alt="TBE">
</div>


<a href=".././index.php">View All Projects</a>
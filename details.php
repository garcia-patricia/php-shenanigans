<?php 
if (isset($_GET['id'])) {
require_once 'includes/connect.php';

$sql = "SELECT * FROM tbl_project WHERE project_id='$id' ";
$result = mysqli_query($conn, $sql) or die ("Bad query : $sql ");
$row = mysqli_fetch_array($result);

} else {
    header ('Location: index.php');
}
// run this query to echo the information on the page. the top query is for the id
$proj = " SELECT * FROM tbl_project;";
    $project_result = mysqli_query($conn, $proj);
    // this id '$projects' is where the data is stored
    $projects = mysqli_fetch_array($project_result);
?>

<?php
//query
include_once 'includes/connect.php';
include_once 'sections/header.html';
?>

<section class="proj-header-image">
    <p class="project-details-page-title">
        <?php echo $projects['project_name']; ?> <br><br>
</p>
</section>

<section class="proj-details-overview">
    <div class="wrapper">
        <div class="proj-details-info-container">
            <div class="details-proj">
                <h3 class="details-title">project details</h3>
        
                <ul class="details-list">
                    <li>
                        <span class="bold details-list-small-title">role(s)</span>
                                <span class="details-sm-divider"></span>
                                        <?php echo $projects['project_roles']; ?> </li>
                    <li>
                        <span class="bold details-list-small-title">project type</span>
                        <span class="details-sm-divider"></span>
                        <?php echo $projects['project_type']; ?> </li>
                    <li><span class="bold details-list-small-title">year</span>
                    <span class="details-sm-divider"></span><?php echo $projects['project_year']; ?> </li>
                </ul>
            </div>
            <div class="overview-proj">
                <h3 class="overview-title">overview</h3>
                <?php echo $projects['project_objective']; ?> 
            </div>
        </div>
    </div>
</section>

<section class="proj-details-parallax">

</section>

<section class="proj-details-result">
    <div class="wrapper">
        <p>
            <?php echo $projects['project_result']; ?> 
        </p>
    </div> 
</section>

<div class="proj-view-container">
    <div class="project-views">
            <img src="img/<?php echo $projects['project_view_1'];?>" alt="TBE">
            <img src="img/<?php echo $projects['project_view_2'];?>" alt="TBE">
            <img src="img/<?php echo $projects['project_view_3'];?>" alt="TBE">
            <img src="img/<?php echo $projects['project_view_4'];?>" alt="TBE">
    </div>
</div>



<div class="view-container">
            <a href="index.php" class="view-all-proj-link">View All Projects</a>      
</div>


<?php
//query
include_once 'sections/footer.php';
?>
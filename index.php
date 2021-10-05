<?php
//query
include_once 'includes/connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <link rel="stylesheet" href="css/main.css"> 
     <link rel="stylesheet" href="css/reset.css"> 
</head>

<body>
<?php
    $sql = " SELECT * FROM tbl_project;";
    $result = mysqli_query($conn, $sql);
    $projects = array();
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $projects[] = $row;
        }
    }
?>

<section id="gallery-container" >

<?php foreach($projects as $project): ?>
<div class="project-container" style="background-image: url(img/<?php echo $project['project_thumbnail'];?>)">
    <a class="modal-button proj-title" href="#<?php echo $project['project_link'];?>">
            <?php echo $project['project_name'];?>
    </a>

</div>    



<!-- modal -->
<div id="<?php echo $project['project_link'];?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <div class="modal-header" style="background-image: url(img/<?php echo $project['project_image'];?>) ; background-repeat: no-repeat ; height:100%; background-position: center; background-size: cover;" >
        <span class="close">×</span>
        <h2><?php echo $project['project_name'];?></h2>
        <p><?php echo $project['project_roles'];?></p>
      <p><?php echo $project['project_year'];?></p>
      <p><?php echo $project['project_type'];?></p>
    </div>
        <div class="modal-body">
             <p><?php echo $project['project_objective'];?></p>
        </div>

        <span class="parallax-image-first"></span>
        <div class="results-text">
            <p><?php echo $project['project_result'];?></p>
        </div>
        <div class="project-views">
            <img src="img/<?php echo $project['project_view_1'];?>" alt="TBE">
            <img src="img/<?php echo $project['project_view_2'];?>" alt="TBE">
            <img src="img/<?php echo $project['project_view_3'];?>" alt="TBE">
            <img src="img/<?php echo $project['project_view_4'];?>" alt="TBE">
        </div>
        
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>

<?php endforeach; ?>


</div>

</section>



</body>

<script src="js/lightbox.js"></script>

</html>
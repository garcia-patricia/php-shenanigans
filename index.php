<?php
//query
include_once 'includes/connect.php';
?>
<?php
include_once 'sections/header.html';
?>
<?php
include_once 'sections/main-nav.html';
?>

<!-- begin content -->
<body>


<?php
include_once 'sections/intro.html';
?>  



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

<section id="gallery-container">

<?php foreach($projects as $project): ?>
<div class="project-container" style="background-image: url(img/<?php echo $project['project_thumbnail'];?>)">
    <a class="modal-button proj-title" href="#<?php echo $project['project_link'];?>">
            <?php echo $project['project_name'];?><br>
            
    </a>

</div>    

<!-- modal -->
<div id="<?php echo $project['project_link'];?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content group">
    <div class="modal-header" style="background-image: url(img/<?php echo $project['project_image'];?>) ; background-repeat: no-repeat ; height:100%; background-position: center; background-size: cover;" ></div>
      <div class="modal-body">
          <h2><?php echo $project['project_name'];?></h2>
             <p>Project over view.<?php echo $project['project_objective'];?></p>
        <a href="projects/details.php?id=<?php echo $project['project_id'];?> ">
          <div class="view-project-btn">view</div>
        </a>
    </div>
    
  </div>

</div>

<?php endforeach; ?>


</div>

</section>




<?php
include_once 'sections/footer.php';
?>


</body>

<script src="js/lightbox.js"></script>
<script src="js/hamburger.js"></script>


</html>
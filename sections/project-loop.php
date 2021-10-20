
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

<!-- dynamic styling -->
<style scoped>
.on-the-fly-behavior {
    background-image: url('particular_ad.png'); 
}
@media (max-width: 300px) {
    .on-the-fly-behavior {
        background-image: url('particular_ad_small.png');
    }
}
</style>


<!-- modal -->
<div id="<?php echo $project['project_link'];?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header" style="background-image: url(img/<?php echo $project['project_image'];?>) ; background-repeat: no-repeat ; height:100%; background-position: center; background-size: cover;" ></div>
          <div class="modal-body  ">
                <h2 class="project-modal-title"><?php echo $project['project_name'];?></h2>
                        <span class="divider"></span>
             <p class="project-modal-text">Project over view.<?php echo $project['project_objective'];?>or re-watching sitcom classics. If you're interested in learning more about me and my design background you can click that big ol' button down there - enjoy!</p>
            <div class="btn-container-modal">



            
              <a href="details.php?project=<?php echo $project['project_id'];?>"class="btn-view-modal">
                  <div class="main-btn">view</div>
              </a>

            </div>
            <div class="modal-project-tools">
              tools used
            </div>
            </div>
           

    </div>

    </div>

    
  </div>

</div>

<?php endforeach; ?>


</div>

</section>

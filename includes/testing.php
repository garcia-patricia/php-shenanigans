<?php foreach($projects as $project): ?>
    <!-- view project button/link -->
    <br>
    <a class="modal-button" href="#<?php echo $project['project_link'];?>">test</a>
    <!-- <button class="modal-button" href="#<?php echo $project['project_link'];?>">Open Modal</button> -->
    
    <!-- The Modal -->

<div id="<?php echo $project['project_link'];?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <div class="modal-header" style="background-image: url(http://i54.tinypic.com/4zuxif.jpg)" >
        <span class="close">×</span>
        <h2><?php echo $project['project_name'];?></h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
<?php endforeach; ?>

testing GET id with PHP

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


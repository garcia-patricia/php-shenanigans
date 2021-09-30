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
</head>

<style>

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #01223770; /* Fallback color */
    background-color: rgba(255,255,255,0.4); /* Black w/ opacity */
    z-index: 999;
    backdrop-filter: blur(10px);
    transition: .4s;
    
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: fadein;
    -webkit-animation-duration: 0.4s;
    animation-name: fadein;
    animation-duration: 0.4s;
     z-index: 999;
}

/* Add Animation */
@-webkit-keyframes fadein {
    from {opacity:0}
    to {opacity:1}
}

@keyframes fadein {
    from {opacity:0}
    to {opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
.modal-body {padding: 2px 16px; }
.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

#gallery-container {
    display: grid;
    overflow: hidden;
    grid-template-columns: 1fr 1fr;
    grid-row-gap: 10px;
    grid-column-gap: 10px;
}
.proj-title  {
    text-decoration: none;
    opacity: 0;
}
.proj-title:hover{
    display: block;
    color: #fff;
    opacity: 1;
}
.project-container {
    display: block;
    overflow: hidden;
    text-align: center;
    opacity: 1;
    transition: .2s;
    background-color: pink;
}
.project-container:hover img {
    opacity: .95;
}
.modal-button {
    display: block;
    height: 100%;
    padding: 45% 0;
    transition: .2s;
    opacity: 0;
}
.modal-button a:hover {
    opacity: 1;
}
</style>


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
<div class="project-container">
    <a class="modal-button proj-title" href="#<?php echo $project['project_link'];?>">
            <?php echo $project['project_name'];?>
    </a>

</div>    



<!-- modal -->
<div id="<?php echo $project['project_link'];?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <div class="modal-header" style="background-image: url(http://i54.tinypic.com/4zuxif.jpg)" >
        <span class="close">×</span>
        <h2><?php echo $project['project_name'];?></h2>
    </div>
    <div class="modal-body">
      <p><?php echo $project['project_objective'];?></p>
      <p><?php echo $project['project_roles'];?>.</p>
      <p><?php echo $project['project_year'];?>.</p>
      <p><?php echo $project['project_type'];?>.</p>
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
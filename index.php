<?php
//query
require_once 'includes/connect.php';

$sql = "SELECT * FROM tbl_project";
$result = mysqli_query($conn, $sql) or die("Bad query: $sql");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
<!-- loop results from query -->
<?php 
    if(mysqli_num_rows($result) > 0 ) {
        while ($row = mysqli_fetch_array($result)) {
            echo " <a href='projects/details.php?project={$row['project_link']}'> {$row['project_name']} </a> <br>";
        }      
    } else {
        echo " Something went wrong";
    }
?>




</body>
</html>
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

<?php
include './../includes/connect.php';

$results_per_page = 1;

$query = "SELECT * FROM tbl_project LIMIT 0 , 100 ";
$result = mysqli_query($conn,$query);
$number_of_results = mysqli_num_rows($result);


//display all results
// while ($row = mysqli_fetch_array($result)) {
//     echo $row['project_id'] . ' ' . $row['project_link'] . '<br>';
// }

//determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

//determine which page # user is currently on
if (!isset($_GET['project'])) {
    $page= 1;
} else {
    $page = $_GET['project'];
}

// determine the sql LIMIT starting number for the results on the displaying page
echo $this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page

$count_query = "SELECT * FROM tbl_project LIMIT" . $this_page_first_result . ',' . $results_per_page;
$count_result = mysqli_query($conn,$count_query);

while ($row = mysqli_fetch_array($count_result)) {
    echo $row['project_id'] . ' ' . $row['project_name'] . '<br>';
}

//display links to the pages
for($page=1;$page<=$number_of_pages;$page++){
    echo '<a href="./../projects/details.php?project=' . $page . '">' . $page . '</a>';
}

?>


<?php

include 'includes/connect.php';

$portfolio_query = 'SELECT * FROM tbl_project';

$getPortfolio = $pdo->query($portfolio_query);

$results = array();
while($row = $getPortfolio->fetch(PDO::FETCH_ASSOC)){
    $results[] = $row;
}
echo $results;

?>
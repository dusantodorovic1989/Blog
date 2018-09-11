<?php

include ('povezivanje_sa_bazom.php');
?>

<?php
$sql = "SELECT * FROM comments ORDER BY desc;
$statment = $connection->prepare($sql);
$statment->execute();
$statment->setFetchMode(PDO::FETCH_ASSOC);
$singlepost = $statment->fetch();


<?php
include('header.php');
include('footer.php');

include('povezivanje_sa_bazom.php')
?>

<?php

$sql = "SELECT * FROM posts WHERE posts.Id = {$_GET['post_id']}";
$statment = $connection->prepare($sql);
$statment->execute();
$statment->setFetchMode(PDO::FETCH_ASSOC);
$singlepost = $statment->fetch();

?>


<h2 class="blog-post-title"><?php echo ($singlepost['Title']);?></h2>
               <p class="blog-post-meta"><?php echo ($singlepost['Created_at']);?><a href="#"><?php echo ($singlepost['Author']);?></a></p>
               <p> <?php echo ($singlepost['Body']);?></p>
               <hr>
<button onclick="myFunction()" id = 'btn' class="btn">Hide Comments</button>
<div id = 'postComments'>
<?php
    include('comments.php')
?>
</div>

<script src="java.js"></script>
<?php
include('sidebar.php');
?>
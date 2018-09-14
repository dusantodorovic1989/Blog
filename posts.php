<?php

include ('povezivanje_sa_bazom.php');
?>
<main role="main" class="container">

<div class="row">

    <div class="col-sm-8 blog-main">
<?php
 $sql = 'SELECT * FROM posts ORDER BY Created_at DESC';
 $statment = $connection->prepare($sql);
 $statment-> execute();
 $statment->setFetchMode(PDO::FETCH_ASSOC);
 $posts = $statment->fetchALL();
 
 ?> 
<?php
    foreach($posts as $post){
?>
<div class="blog-post">
                <h2 class="blog-post-title"><a href= "single-post.php?post_id=<?php echo $post['Id']?>"><?php echo ($post['Title']); ?></h2>
                <p class="blog-post-meta"><?php echo ($post['Created_at']); ?> by <a href="#"><?php echo ($post['Author']); ?></a></p>
                <?php echo ($post['Body']); ?>
                </div>
<?php
}?>
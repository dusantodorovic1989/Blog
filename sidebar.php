<?php
include 'povezivanje_sa_bazom.php';

$sql3 = "SELECT Title, Id FROM posts ORDER BY Created_at DESC LIMIT 5";
$state3 = $connection->prepare($sql3);
$state3->execute();
$state3->setFetchMode(PDO::FETCH_ASSOC);
$titles = $state3->fetchAll();

 ?>
<aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Latest posts</h4>
                <?php

                    foreach ($titles as $title) {
                ?>
                    <div>
                        <a href = "single-post.php?post_id=<?php echo($title['Id']) ?>"><?php echo ($title['Title'])?> </a>
                    </div>

                <?php } ?>
            </div>
</aside><!-- /.blog-sidebar -->
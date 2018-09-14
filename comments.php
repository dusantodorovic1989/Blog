
<?php

    $sqlUpitComments = "SELECT * FROM comments WHERE Post_id = {$postId}";
       $stmt2 = $connection->prepare($sqlUpitComments);
       $stmt2->execute();
       $stmt2->setFetchMode(PDO::FETCH_ASSOC);
       $comments = $stmt2->fetchAll();

           foreach ($comments as $comment) {

       ?>

       <div class="single-comment">
           <ul>
               <li>
       <hr>
                   <div>posted by: <strong><?php echo($comment['Author']); ?>
                   </strong> </div>

           <div><?php echo($comment['Text']); ?></div>

       </div>

        <form action="delete-comment.php" method="post" name="dltForm">
            <input name="postId" type="hidden" value="<?php echo $postId ?>">
            <input name="cmtId" type="hidden" value="<?php echo $comment['Id'] ?>">
            <button id="dltBtn" type="submit" class="btn btn-default">Delete comment</button>
        </form>

       <?php } ?>
               </li>
           </ul>


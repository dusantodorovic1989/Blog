<?php
        include ('head.php')
        
?>
<?php
    include('header.php');
    

    include('povezivanje_sa_bazom.php')
?>

<?php
    $postId = $_GET['post_id'];
      $sql = "SELECT * FROM posts WHERE posts.Id = $postId";
    $statment = $connection->prepare($sql);
    $statment->execute();
    $statment->setFetchMode(PDO::FETCH_ASSOC);
    $singlepost = $statment->fetch();


?>
<main role="main" class="container">

<div class="row">

    <div class="col-sm-8 blog-main">
    

<h2 class="blog-post-title"><?php echo ($singlepost['Title']);?></h2>
               <p class="blog-post-meta"><?php echo ($singlepost['Created_at']);?><a href="#"><?php echo ($singlepost['Author']);?></a></p>
               <p> <?php echo ($singlepost['Body']);?></p>
               <div>
               <form action="delete-post.php" method="post" name="dltPost">
                        <button id="dltBtn" type="submit" onclick="return areYouSure()">Delete this post</button>
                        <input name="postId" type="hidden" value="<?php echo $postId?>">
                    </form>
                    <br>

                </div><!-- /.blog-post --> 

            <script>
                function areYouSure(){
                    var sure = prompt('Are you sure? (yes/no)');
                    if(sure == 'yes' || sure == 'Yes'){
                        return true;
                    } else {
                        return false;
                    }
                }            
            </script>
               <hr>
               <script src="java.js"></script>
<form name="commForm" action="create-comment.php" onsubmit="return addComm()" method="post">
                <label for="author">Your Name: </label><br>  
                <input type="text" name="author"><br>  
                             
                <label for="text">Comment: </label><br>  
                <textarea name="text" cols="30" rows="10"></textarea><br>   
                <input type="hidden" name="postId" value=<?php echo $postId?>><br>  
                
                <button id ="commBtn" type="submit" class="btn btn-default">Post comment</button>
                <br><br><br><br>                         
</form>

<button onclick="myFunction()" id = 'btn' class="btn">Hide Comments</button>

<div id = 'postComments'>
    <?php
        include('comments.php')
    ?>
</div>
</div>
<?php
    include('sidebar.php');
?>
</div>
</main>




<?php
    include('footer.php');
?>
<?php
        include ('head.php')
        
    ?>
<?php
        
        include('povezivanje_sa_bazom.php');
    ?>
    <?php
        include('header.php');
    ?>
    <!doctype html>
<html lang="en">

<body>
<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">
                <?php 
                include('posts.php');
                ?>

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

        <?php
            include('sidebar.php');
        ?>

    </div><!-- /.row -->

</main><!-- /.container -->

        <?php
            include('footer.php');
        ?>
</body>
</html>


<?php include 'povezivanje_sa_bazom.php';
               

    if(isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if(isset($_POST['body'])){
        $body = $_POST['body'];
    }
    if(isset($_POST['author'])){
        $author = $_POST['author'];
    }
    
    if(isset($title) && isset($body)){
        $sql = "INSERT INTO posts (Title, Body, Author) VALUES ('$title', '$body', '$author')";
        $statement = $connection->prepare($sql);
        $statement->execute();
        header("Location: index.php");
    }
?>

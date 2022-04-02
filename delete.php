<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM places WHERE id = {$id}" ;
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $photo = $data['photo'];
        $name = $data['name'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">

        <title>Mount Everest Travel Firm</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 70% ;
            }     
               
        </style>
    </head>
    <body>
    <header>
        <?php
            include_once 'components/nav.php';
        ?>
    </header> 
    <div class="text-center">
        <fieldset>
            <legend class='h2 mb-3'>Delete request 
            <h5>You have selected the data below:</h5>   </legend>
            <img class="card-img-top" src=<?php echo $photo ?> alt="<?php echo $name?>">  
            <h6 class="mb-4">Do you really want to delete this product?</h6>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="photo" value="<?php echo $photo ?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
            </form>
            
        </fieldset>
        </div>
        <footer class="mt-5">
            <?php require_once 'components/foot.php' ?>
        </footer>
    </body>
</html>
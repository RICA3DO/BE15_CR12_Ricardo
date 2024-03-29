<?php
require_once 'db_connect.php';

if ($_POST) {   
    $photo = $_POST['photo'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description']; 
    $period = $_POST['period'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST["latitude"];


    $sql = 
    " INSERT INTO places (photo, name, price, description, period, longitude,latitude)
    VALUES ('$photo', '$name', '$price', '$description', '$period','$longitude','$latitude')";
    

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'>
                <tr><td> $photo </td></tr>
                <tr><td> $name </td></tr> 
            </table>
        <hr>";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
    <header>
        <?php
            include_once '../components/nav.php';
        ?>
    </header>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
                <a href='../create.php' class="btn btn-primary my-2">Add another Location</a>

            </div>
        </div>
        
    </body>
</html>
<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM places WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $photo = $data['photo'];
        $name = $data['name'];
        $price = $data['price'];
        $description = $data['description'];
        $period = $data['period'];
        $longitude = $data["longitude"];
        $latitude = $data["latitude"];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}


?>

<!DOCTYPE html>
<html>
    <head>
    <title>Mount Everest Travel Firm</title>
        <link rel="stylesheet" href="style/style.css">
        <?php require_once 'components/boot.php'?>
        
    </head>
    <header>
    <?php require_once 'components/nav.php'?>
    </header>
    <body>

   <div class="container w-100">
          <div class=" d-flex justify-content-center shadow" >
          <img class="card-img-top"  src='<?php echo "images/$photo" ?>' alt="<?php echo $name ?>">
          </div>
          <h2 class="text-center" >Change Info:</h2>
            <form action="actions/a_update.php"  method="post">
            <table class='table  table-striped '>   
                    <tr>
                        <th>Photo:</th>
                        <td><input class='form-control' type="text" name="photo" placeholder ="photo"  value="<?php echo $photo ?>"/></td>
                    </tr>    
                    <tr>
                        <th>Name:</th>
                        <td><input class='form-control' type="text" name= "name" placeholder ="Location:" value="<?php echo $name ?>"/></td>
                    </tr>
                    <tr>
                        <th>Price:</th>
                        <td><input class='form-control' type="text" name="price" placeholder ="Price:" value="<?php echo $price ?>"/></td>
                    </tr>
                    <tr>
                        <th>Description:</th>
                        <td><input class='form-control' type="text" name="description" placeholder ="Description :" value="<?php echo $description ?>"/></td>
                    </tr>                  
                    <tr>
                        <th>Period:</th>
                        <td><input class='form-control' type="text" name="period" placeholder ="Period:" value="<?php echo $period ?>"/></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="text" name="latitude"  placeholder="latitude" value="<?php echo $latitude ?>"/></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="text" name="longitude"  placeholder="longitude" value="<?php echo $longitude ?>" /></td>
                    </tr>
                   
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "photo" value= "<?php echo $data['photo'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back to Home</button></a></td>
                    </tr>
                </table>
            </form>
            </div>
        <footer>
            <?php require_once 'components/foot.php' ?>
        </footer>
    </body>
</html>
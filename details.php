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

        <style>
            .list-group-item {
                border: none;
                background: transparent;
            }      
        </style>
    </head>
    <body>
        <header>
            <?php include_once 'components/nav.php';   ?>
        </header>
        <div class="container text-center w-50">
           <div class="card h-100 my-4 " >
           <img src="<?php echo "images/$photo" ?>" class="card-img-top " >
                <div class="card-body mt-3 bg-dark text-light">
                    <h5 class="card-title text-center fs-2"><?php echo $name ?></h5>  
                <ul class="list-group">
                    <li class="list-group-item text-light"><p class="card-text">Price: <?php echo $price ?> €</p></li>
                    <li class="list-group-item text-light"> <p class="card-text">Description: <?php echo $description ?></p>  </li>
                    <li class="list-group-item text-light"><p class="card-text">Period: <?php echo $period ?></p></li>
                    <li class="list-group-item text-light"><p class="card-text">Latitude: <?php echo $latitude?></p></li> 
                    <li class="list-group-item text-light"><p class="card-text">Longitude: <?php echo $longitude ?></p></li>                         
                </ul> 
                </div>
                </div>        
            <div id="map" style="height: 500px;"></div>
                    <div class="d-flex justify-content-center my-3">
                        <a href="index.php" class='btn btn-warning'>Back to Home</a>
                    </div>
       </div>
       <footer>
        <?php include_once 'components/foot.php';?>
    </footer> 

<script>
// ================================Google Map Function===========
    function initMap() {
        var location = {
            lat: <?php echo $latitude ?>,
            lng: <?php echo $longitude ?>
            
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: location,
            zoom: 10
        });
        var pinpoint = new google.maps.Marker({
            position: location,
            map: map
        });
    }
    </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
    </body>
</html>
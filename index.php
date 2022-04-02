<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM places";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .=   ' 
        <div class="col">
        <div class="card-group h-100  ">
          <img src="images/'.$row['photo'].'" class="card-img-top" alt="'.$row['name'].'">
          <div class="card-body bg-transparent text-light">
            <h5 class="card-title">'.$row['name'].'</h5>
            <p class="card-text">'.$row['description'].'</p>
            <p class="card-text">Period: '.$row['period'].'</p>
          </div>
          <div class="mt-5">
            <a href="update.php?id=' .$row['id'].'"><button class="btn btn-warning btn-md" type="button" title="Edit"><i class="fa fa-edit"></i></button></a>
            <a href="delete.php?id=' .$row['id'].'"><button class="btn btn-danger btn-md" type="button" title="Delete"><i class="fas fa-trash-alt"></i> </button></a>
            <a href="details.php?id=' .$row['id'].'"><button class="btn btn-info btn-md" type="button" title="Info"><i class="fas fa-info"></i></button></a>
          </div>
        </div>
      </div>
            ';
        
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>Nothings Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mount Everest Travel Firm</title>
        <link rel="stylesheet" href="style/style.css">
        <?php require_once 'components/boot.php'?>
    </head>
    <body>
    <header>
        <?php include_once 'components/nav.php';   ?>
        <?php include_once 'components/hero.php';   ?>

    </header>
       <main class="container container w-75 mt-3 mb-3">
           <div class="text-center m-5">
           <h2 class="text-light"> <i>Places We Offer:</i> </h2>
           <hr>
           </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <tbody>
                    <?= $tbody;?>
                </tbody>
                </div>
                </div>
                <hr>
        </main>
      
        <footer>
            <?php require_once 'components/foot.php' ?>
        </footer>
    </body>
</html>
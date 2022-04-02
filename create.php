<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="style/style.css">

        <title>Mount Everest Travel Firm</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 50px;
                width: 45% ;
            }       
        </style>
    </head>
    <body>
    <header>
        <?php include_once 'components/nav.php'; ?>
    </header>
        <div class="container">
        <div class="card bg-transparent shadow my-5 border border-2 border-light">
        <fieldset>
            <legend class='text-light text-center'>Add Location</legend>
            <form action="actions/a_create.php" method= "post" >
                <table class='table text-light'>
                    <tr>
                        <th>Image:</th>
                        <td><input class='form-control' type="text" name="image"  placeholder="Add Image URL" /></td>
                    </tr>    
                    <tr>
                        <th>Name:</th>
                        <td><input class='form-control' type="text" name= "name" placeholder="Add Name" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="text" name="price" placeholder="Add Price" /></td>
                    </tr>
                    <tr>
                        <th>Description:</th>
                        <td><input class='form-control' type="text" name="description" placeholder="Add a short description" /></td>
                    </tr>
                    <tr>
                        <th>Period:</th>
                        <td><input class='form-control' type="text" name="duration" placeholder="Add Duration of the trip" /></td>
                    </tr>
                    <tr>
                            <th>Latitude</th>
                            <td><input class='form-control' type="text" name="latitude"  placeholder="Add Latitude" /></td>
                    </tr>
                    <tr>
                            <th>Longitude</th>
                            <td><input class='form-control' type="text" name="longitude"  placeholder="Add Longitude" /></td>
                    </tr>
                    
                    <tr>
                        <td><button class='btn btn-success' type="submit">Add the Location</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        </div>
        </div>
        <footer>
        <?php include_once 'components/foot.php';?>
    </footer> 
    </body>
</html>
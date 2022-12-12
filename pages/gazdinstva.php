<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Gazdinstva</title>
    <div class="container">
        <?php echo  "<h1 class='text-center mt-2'>"."Gazdinstvo " .$_GET["gazdinstvo"]. "<h1>" ;?>
        <div class="img-container w-50 d-flex justify-content-center">
            <?php 
            $img = $_GET["slika"];
            echo $img;
            exit();
            "<img src='$img' class='w-100'  "?>
            
        </div>
    </div>

</head>
<body>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

<table class="table table-hover table-bordered">
    <tr>
    <th>ID</th>
    <th>NAMES</th>
    <th>GENDER</th>
    <th>PHONE NO</th>
    <th>LOCATION</th>
    <th>VEHICLE</th>
    <th>DATE OF HIRE</th>
    <th>DAYS</th>
    <th>PEOPLE</th>
    <th>OTHERS</th>
    <th>Actions</th>
    </tr>
    <?php
      $conn=mysqli_connect("localhost","root","","ecarhire");
      $query="SELECT * FROM booking";
      $exec=mysqli_query($conn,$query);

      while($data=mysqli_fetch_array($exec))
      {


    ?>

    <tr>
    <td> <?=$data[0] ?> </td>
    <td> <?=$data[1] ?> </td>
    <td> <?=$data[2] ?> </td>
    <td> <?=$data[3] ?> </td>
    <td> <?=$data[4] ?> </td>
    <td> <?=$data[5] ?> </td>
    <td> <?=$data[6] ?> </td>
    <td> <?=$data[7] ?> </td>
    <td> <?=$data[8] ?> </td>
    <td> <?=$data[9] ?> </td>
    <td>
       <a class="btn btn-primary" href="edit.php">EDIT</a>
       <a class="btn btn-danger" href="delete.php?id=<?=$data[0] ?>">DELETE</a> 
    </td>
    </tr>

    <?php
      }
    ?>

</table>


    
</body>
</html>
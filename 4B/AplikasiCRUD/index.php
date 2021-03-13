<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li><a href="addhero.php"> Add Hero</a></li>
          <li><a href="addtype.php">Add Type</a></li>
        </ul>
      </div>
    </nav>

    <?php
        include 'connectDB.php';
        $gethero = $connection->query("SELECT * FROM heroes_tb");
        while($fetchhero = $gethero->fetch_assoc()){
    ?>

        <table style="display:inline-table; width:200px;">
            <tr>
                <td><img style="width:100%" src="<?=$fetchhero["photo"]?>"></td>
            </tr>

            <tr>
                <td>
                    <strong><?=$fetchhero["name"]?></strong>
                </td>
            </tr>
        </table>
        
    <?php
        }
    ?>
</body>
</html>
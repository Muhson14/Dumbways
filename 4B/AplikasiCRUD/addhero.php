<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Hero</title>
</head>
<body>
<form action="addnewhero.php" method="post">

    <label for="">Nama Hero</label>
    <input type="text" name="name"> <br>

    <label for="">Tipe Hero</label>
    <input type="text" name="type_id"> <br>

    <label for="">Gambar</label>
    <input type="file" name="photo"> <br>

    <button>Save</button>

</form>

<?php
    if(isset($_SESSION["message"])){
        echo $_SESSION["message"];
        unset ($_SESSION["message"]);
    }
?>
</body>
</html>
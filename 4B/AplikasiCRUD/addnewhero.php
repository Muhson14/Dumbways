<?php
session_start();
if(isset($_POST["name"])){
    include 'connectDB.php';

    $name = $_POST["name"];
    $type_id = $_POST["type_id"];
    $photo = $_FILES["photo"];

    $message = "";

    if($name == ""){
        $message = "Nama Hero harus di isi !";
    }else if($type_id == ""){
        $message = "Tipe Hero harus di isi !";
    }else{
        $filepath = "upload/".basename($photo["name"]);
        move_uploaded_file($photo["tmp_name"],$filepath);

        $connection->query("INSERT INTO heroes_tb VALUES (null, '".$name."','".$type_id."',
        '".$filepath."' )");

        $message = "Data Hero berhasil di isi !";
    }
    $_SESSION["message"] = $message;

}
header("location:addhero.php");
exit();

?>
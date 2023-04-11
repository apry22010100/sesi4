<?php
    $usr = "";
    $pwd = "";
    $Salah  = 0;

    if(isset($_POST["txUSR"])){
        $usr = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];

        if($usr==""){
            $salah = 1;
        }else{
            echo "Isi dari Field User : ".$usr;
        }
        if($pwd==""){
            $salah = 1;
        }else{
            echo "Isi dari Field password : ".$pwd;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>form dengan metode GET</title>
</head>
<body>

<?php
    if($salah ==1){
        echo "<div style='color: red'> User Name/Password masih kosong </div>";
    }
?>

    <form method="POST" action="Latihan02.php">
        <div>
            User name
            <input type="text" name="txUSER">
        </div>
        <div>
            <button type="sumbit"> Login </button>
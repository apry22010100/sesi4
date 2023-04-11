<?php
    $usr = "";
    $pwd = "";
    $Salah = 0;

    if(isset($_GET["txUSER"])){
        $usr = $_GET["txUSER"];
        $pwd = $_GET["txPASS"];

        if($usr==""){
            $salah = 1;
        }else{
            echo "Isi dari Field User : ".$user;
        }
        if($pwd==""){
            $salah = 1;
        }else{
            echo "Isi dari Field Password : ".$pwd;
        }
    }
?>
<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Comatible" content="IE=edge">
    <title>form dengan Metode Get</title>
</head>
<body>

<?php
    if($salah == 1){
        echo "<div style= 'color: red'>User Name/Password masih kosong</div>";
    }
?>
    <form method="GET" action="latihan.php">
        <div>
            User Name
            <input type="text" name ="txUSER" required>
        </div>
        <div>
            password
            <input type="password" nama="txPASS" required>
        </div>
        <div>
            <button type="sumbit"> Login </button>
        </div>
    </form>

</body>
<html>
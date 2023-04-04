<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validasi</title>
</head>
<body>

<?php
    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        if($usr==""){
            echo "<div> <h1 style='color:blue;padding:5px;text-align:center;'> User Name/Password salah </h1></div>";
        }
    }
    if(isset($_POST["txPASSKEY"])){
        $pwd = $_POST["txPASSKEY"];
        if($pwd==""){
            echo "<div> <h1 style='color:blue;padding:5px;text-align:center;'> User Name/Password salah  </h1></div>";
        }
    }
?>

    <form style='text-align:center;' action="latihan2_2.php" method="POST" >
        <div>
            User Name
            <input type="text" id="txUSER" name="txUSER">
        </div>

        <div>
            Password
            <input type="password" id="txPASSKEY" name="txPASSKEY">
        </div>

        <br>

        <div>
            <button type="submit">LOGIN</button>
            <a href="daftar.php">Daftar</a>
        </div>

    </form>

</body>
</html>
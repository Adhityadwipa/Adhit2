<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    if(isset($_GET["txUSER"])){
        $usr = $_GET["txUSER"];
        if($usr==""){
           echo "<div> <h1 style='color:red;padding:5px;'> User Name belum diisikan  </h1></div>";
        }
    }
?>

    <form action="latihan1.php" method="GET">
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
<?php
if(isset($_POST['vorname'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect("localhost", "root", "") or die
            ("Keine Verbindung zum Datenbankserver");

        mysqli_select_db($con, "hogwarts") or
            die ("Keine Verbindung zur Datenbank");

        $tabelle = "trip";

        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname'];
        $email = $_POST['email'];
        $handynummer = $_POST['handynummer'];
        $kommentar = $_POST['kommentar'];

    $sql = "INSERT INTO `trip`(`vorname`, `nachname`, `email`, `handynummer`, 
    `kommentar`, `date`) VALUES ('$vorname', '$nachname', '$email', '$handynummer', 
    '$kommentar', current_timestamp())";

    if($con->query($sql) == true){
        echo "Danke Schön";
            }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap');</style>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="Bilder/hog.jpg" class="hog" alt="Hogwarts">
        <h3>Welcome to Hogwarts</h3>
       
        <div class= "container">
           
            <p>Geben Sie Ihre Daten ein</p>

            <form action="travel.php" method="post">
                <input type="text" name="vorname" id="vname" placeholder="Bitte geben Sie ihre vorname" >
                <input type="text" name="nachname" id="nname" placeholder="Bitte geben Sie ihre nachname">
                <input type="text" name="email" id="mail" placeholder="Bitte geben Sie ihre E-Mail">
                <input type="phone" name="handynummer" id="fone" placeholder="Bitte geben Sie ihre Handynummer">
                <textarea name="kommentar" id="" cols="30" rows="5" placeholder="Kommentar"></textarea>
                <button class="btn">Submit</button>
            


            </form>

        </div>
       
    
</body>
</html>
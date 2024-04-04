<?php

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["fnavn"], $_POST["enavn"], $_POST["epost"], $_POST["beskrivelse"])) {
        $fnavn = htmlspecialchars($_POST["fnavn"]);
        $enavn = htmlspecialchars($_POST["enavn"]);
        $epost = htmlspecialchars($_POST["epost"]);
        $beskrivelse = htmlspecialchars($_POST["beskrivelse"]);}

        $sql = "INSERT INTO bruker (navn, etternavn, epost, beskrivelse) VALUES ('$fnavn', '$enavn', '$epost', '$beskrivelse')";
        if (mysqli_query($kobling,$sql)) { 
            echo"takk for at du sendte inn din hendvendelse";}
            else { echo"feil";}
        
}

$kobling ->close();
echo"hei"
?>

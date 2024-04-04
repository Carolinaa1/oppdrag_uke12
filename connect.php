<?php
//Oppretter kobling
$kobling = new mysqli('localhost', 'root', 'root', 'ticket');

//sjekke om kobling virker
if($kobling->connect_error) {
    die("Noe gikk galt: ".$kobling->connect_error);
}

//angi utf8 som tegnsett
$kobling->set_charset("utf8");

?>
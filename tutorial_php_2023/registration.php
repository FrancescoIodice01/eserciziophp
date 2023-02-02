<?php
$servername = "localhost";
$username = "Francesco";
$password = "1234";
$dbname = "esercizio";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}
echo "Connessione stabilita";


$sql = "INSERT INTO utenti (utenti_id, nome, cognome, nickname, passwd)
VALUES ('serial', 'Paolo', 'Tucci', 'PaoloTucci91', '1234')";

if (mysqli_query($conn, $sql)) {
    echo "Inserimento eseguito con successo";
} else {
    echo "Errore nell'inserimento: " . mysqli_error($conn);
}
mysqli_close($conn);

?>










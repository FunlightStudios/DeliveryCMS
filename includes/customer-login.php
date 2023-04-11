<?php
// Datenbankverbindung herstellen
require_once('../system/config.php');

// Benutzername und Passwort vom Formular empfangen
$username = $_POST['username'];
$password = $_POST['password'];

// SQL-Abfrage vorbereiten und ausführen
$stmt = $conn->prepare("SELECT * FROM customers WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

// Überprüfen, ob Benutzer gefunden wurde
if ($result->num_rows == 1) {
    // Benutzerdaten auslesen
    $row = $result->fetch_assoc();
    $customer_id = $row['id'];

    // Session-Variable setzen
    session_start();
    $_SESSION['customer_id'] = $customer_id;

    // Weiterleitung zur Startseite
    header("Location: index.php");
    exit();
} else {
    // Fehlermeldung ausgeben
    echo "Benutzername oder Passwort ungültig";
}
?>

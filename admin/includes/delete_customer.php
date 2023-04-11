<?php
// Einbinden der Konfigurationsdatei und der Datei mit den Datenbankfunktionen
include_once '../../system/config.php';
include_once '../../system/core.php';

// Prüfen, ob die Formular-Übermittlung stattgefunden hat
if (isset($_POST['delete'])) {
    // Kunden-ID aus dem POST-Array auslesen
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // SQL-Abfrage zum Löschen des Kunden
    $sql = "DELETE FROM customers WHERE id = $id";

    // Abfrage an die Datenbank senden
    if (mysqli_query($conn, $sql)) {
        // Erfolgsmeldung ausgeben
        header("Location: ../customers.php");
    } else {
        // Fehlermeldung ausgeben
        echo "Fehler beim Löschen des Kunden: " . mysqli_error($conn);
    }
}

// Verbindung zur Datenbank schließen
mysqli_close($conn);
?>

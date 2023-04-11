<?php
// Array mit verfügbaren Sprachen und ihren Namen
$languages = array(
    'de' => 'Deutsch',
    'en' => 'English',
    'fr' => 'Français'
);

// Aktuelle Sprache auswählen oder Standard-Sprache setzen
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $languages)) {
    $langCode = $_GET['lang'];
} else {
    $langCode = 'de'; // Standard-Sprache hier einstellen
}

// Array mit Sprach-Dateien
$lang_files = array(
    'de' => 'lang/de.php',
    'en' => 'lang/en.php',
    'fr' => 'lang/fr.php'
);

// Sprach-Datei einbinden
require_once($lang_files[$langCode]);

// Funktion zum Erstellen des Dropdown-Menüs
function language_dropdown($languages, $currentLang) {
    echo '<div class="language-dropdown">';
    foreach($languages as $key=>$value) {
        if($key == $currentLang) {
            echo '<a href="?lang='.$key.'" class="selected"><img src="http://localhost/style/images/flags/'.$key.'.png" alt="'.$value.'" /></a>';
        } else {
            echo '<a href="?lang='.$key.'"><img src="http://localhost/style/images/flags/'.$key.'.png" alt="'.$value.'" /></a>';
        }
    }
    echo '</div>';
}
// SQL-Abfrage, um alle Einträge in der Tabelle "customers" zu zählen
$sql = "SELECT COUNT(*) AS tourstotal FROM tours";
$result = mysqli_query($conn, $sql);

// Ergebnis abrufen und als Zahl ausgeben
$sql_customers = "SELECT COUNT(*) AS count_customers FROM customers";
$result_customers = mysqli_query($conn, $sql_customers);
$row_customers = mysqli_fetch_assoc($result_customers);
$count_customers = $row_customers['count_customers'];

// Anzahl der Touren ermitteln
$sql_tours = "SELECT COUNT(*) AS count_tours FROM tours";
$result_tours = mysqli_query($conn, $sql_tours);
$row_tours = mysqli_fetch_assoc($result_tours);
$count_tours = $row_tours['count_tours'];

// Kunde zur Datenbank hinzufügen
if(isset($_POST['addcustomer'])) {

    
    // Eingabevalidierung und Escaping durchführen
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $store_name = mysqli_real_escape_string($conn, $_POST['store_name']);
    $franchise = mysqli_real_escape_string($conn, $_POST['franchise']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $rank = mysqli_real_escape_string($conn, $_POST['rank']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $canton = mysqli_real_escape_string($conn, $_POST['canton']);
    $distance = mysqli_real_escape_string($conn, $_POST['distance']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
  
    // Kunden in die Datenbank einfügen
    $sql = "INSERT INTO customers (username, first_name, last_name, store_name, franchise, category, rank, address, zip, city, canton, distance, country) 
            VALUES ('$username', '$first_name', '$last_name', '$store_name', '$franchise', '$category', '$rank', '$address', '$zip', '$city', '$canton', '$distance', '$country')";
            
    if(mysqli_query($conn, $sql)) {
      // Erfolgreich eingefügte Kunden-ID zurückgeben
      $customer_id = mysqli_insert_id($conn);
      header("Location: customers.php");
      echo "<script>alert('Kunde erfolgreich hinzugefügt. Kunden-ID: $customer_id')</script>";
    } else {
      echo "<script>alert('Fehler beim Hinzufügen des Kunden')</script>";
    }
  }
?>
<?php
      if (isset($_POST['submit'])) {
        $search_term = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM customers WHERE username LIKE '%$search_term%' OR first_name LIKE '%$search_term%' OR last_name LIKE '%$search_term%' OR store_name LIKE '%$search_term%' OR franchise LIKE '%$search_term%' OR category LIKE '%$search_term%' OR address LIKE '%$search_term%' OR city LIKE '%$search_term%' OR zip LIKE '%$search_term%' OR canton LIKE '%$search_term%' OR distance LIKE '%$search_term%' OR country LIKE '%$search_term%'";
      } else {
        $sql = "SELECT * FROM customers ORDER BY id ASC";
      }
      // SQL-Abfrage
      
      $result = mysqli_query($conn, $sql);

      // Prüfen, ob Kunden vorhanden sind
      if(mysqli_num_rows($result) > 0) {
        // Kunden in der Tabelle ausgeben
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['username'] . "</td>";
          echo "<td>" . $row['first_name'] . "</td>";
          echo "<td>" . $row['last_name'] . "</td>";
          echo "<td>" . $row['store_name'] . "</td>";
          echo "<td>" . $row['franchise'] . "</td>";
          echo "<td>" . $row['category'] . "</td>";
          echo "<td>" . $row['address'] . "</td>";
          echo "<td>" . $row['city'] . "</td>";
          echo "<td>" . $row['zip'] . "</td>";
          echo "<td>" . $row['canton'] . "</td>";
          echo "<td>" . $row['distance'] . "</td>";
          echo "<td>" . $row['country'] . "</td>";
          echo "<td><form method='post' action='includes/delete_customer.php'><input type='hidden' name='id' value='" . $row['id'] . "'><b><button class='btn-close' style='color:red' type='submit' name='delete' aria-label='Kunde löschen'></button></b></form></td>";
          echo "</tr>";
        }
      } else {
        // Wenn keine Kunden gefunden werden, eine entsprechende Meldung ausgeben
        echo "<tr><td colspan='11'>Keine Kunden gefunden</td></tr>";
      }
?>
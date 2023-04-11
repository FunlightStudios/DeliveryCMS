function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("customerTable");
  switching = true;
  dir = "asc";
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("td")[n];
      y = rows[i + 1].getElementsByTagName("td")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++;
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
$(document).ready(function(){
  // Sort table by column
  $('.sortable').click(function(){
    var table = $(this).closest('table');
    var rows = table.find('tbody > tr').get();
    var ascending = $(this).hasClass('asc');
    var index = $(this).index();

    rows.sort(function(a, b){
      var aVal = $(a).children('td').eq(index).text().toUpperCase();
      var bVal = $(b).children('td').eq(index).text().toUpperCase();
      if(ascending){
        return (aVal > bVal) ? 1 : -1;
      } else {
        return (aVal < bVal) ? 1 : -1;
      }
    });

    $.each(rows, function(index,row){
      table.children('tbody').append(row);
    });

    $('.sortable').removeClass('asc').removeClass('desc');
    $(this).addClass(ascending ? 'desc' : 'asc');
  });
});

$(document).ready(function() {
  // Handler für Klick auf Kundenzeile
  $('#customerTable tbody').on('click', 'tr', function() {
    // Daten des angeklickten Kunden extrahieren
    var id = $(this).find('td:eq(0)').text();
    var username = $(this).find('td:eq(1)').text();
    var firstName = $(this).find('td:eq(2)').text();
    var lastName = $(this).find('td:eq(3)').text();
    var storeName = $(this).find('td:eq(4)').text();
    var franchise = $(this).find('td:eq(5)').text();
    var category = $(this).find('td:eq(6)').text();
    var address = $(this).find('td:eq(7)').text();
    var city = $(this).find('td:eq(8)').text();
    var zip = $(this).find('td:eq(9)').text();
    var country = $(this).find('td:eq(10)').text();

    // HTML-Code für Popup-Fenster generieren
    var html = '<div class="customer-popup">';
    html += '<h2>Kunde ' + id + '</h2>';
    html += '<p><strong>Benutzername:</strong> ' + username + '</p>';
    html += '<p><strong>Vorname:</strong> ' + firstName + '</p>';
    html += '<p><strong>Nachname:</strong> ' + lastName + '</p>';
    html += '<p><strong>Store-Name:</strong> ' + storeName + '</p>';
    html += '<p><strong>Franchise:</strong> ' + franchise + '</p>';
    html += '<p><strong>Kategorie:</strong> ' + category + '</p>';
    html += '<p><strong>Adresse:</strong> ' + address + '</p>';
    html += '<p><strong>Stadt:</strong> ' + city + '</p>';
    html += '<p><strong>PLZ:</strong> ' + zip + '</p>';
    html += '<p><strong>Land:</strong> ' + country + '</p>';
    html += '</div>';

    // Popup-Fenster einblenden
    $.dialog({
      title: 'Kunde ' + id,
      content: html,
      backgroundDismiss: true,
      closeAnimation: 'scale',
      columnClass: 'col-md-6'
    });
  });
});
function showPopup(id) {
    document.getElementById(id).style.display = "block";
}
function hidePopup(id) {
    document.getElementById(id).style.display = "none";
}

//System Message
$(document).ready(function() {
    var toast = $('.toast');
    
    // Überprüfen, ob der Hinweis bereits geschlossen wurde
    if (localStorage.getItem('toast-closed') !== 'true') {
      // Wenn nicht, den Toast anzeigen
      toast.toast('show');
    }
    
    // Event-Listener zum Schließen des Toasts hinzufügen
    toast.find('.btn-close').on('click', function() {
      // Toast schließen
      toast.toast('hide');
      
      // Hinweis speichern, dass der Toast geschlossen wurde
      localStorage.setItem('toast-closed', 'true');
    });
  });
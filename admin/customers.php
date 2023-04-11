<?php
require_once "../includes/admin_header.php";
?>
<div class="admin-main">
<div class="admin-content">
    <div class="tableDiv">
        <div class="addcustomer">
        <button name="add-customer-btn" class="btn btn-success"; onclick="showPopup('add-customer-modal')"><?php echo $lang['AbuttonAddCustomer'] ?></button>
        </div>
    <div class="admin-customer-head">
      <h3><?php echo $lang['AcustomerTitle'] ?></h3>
    </div>
        <form action="#" method="post">
            <div class="form-group">
                <input type="text" name="search" class="form-control" id="search-input" placeholder="Suchbegriff eingeben...">
                <button type="submit" name="submit" class="btn btn-primary"><?php echo $lang['AbuttonSearch'] ?></button>
            </div>
        </form><br>
    <table class="table table-sm" id="customerTable">
        <thead>
            <tr>
                <th scope="col" onclick="sortTable(0)">ID</th>
                <th scope="col" onclick="sortTable(1)">Username</th>
                <th scope="col" onclick="sortTable(2)">Vorname</th>
                <th scope="col" onclick="sortTable(3)">Nachname</th>
                <th scope="col" onclick="sortTable(4)">Store-Name</th>
                <th scope="col" onclick="sortTable(5)">Franchise</th>
                <th scope="col" onclick="sortTable(6)">Kategorie</th>
                <th scope="col" onclick="sortTable(7)">Adresse</th>
                <th scope="col" onclick="sortTable(8)">Stadt</th>
                <th scope="col" onclick="sortTable(9)">PLZ</th>
                <th scope="col" onclick="sortTable(10)">Knton</th>
                <th scope="col" onclick="sortTable(11)">Km</th>
                <th scope="col" onclick="sortTable(12)">Land</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "includes/customertable.php";
            ?>
        </tbody>
    </table>
    <div id="add-customer-modal" class="modal">
        <div class="modalwidth">
        <form class="modal-content" action="" method="post">
            <div class="container"> 
            <h1>Neuen Kunden hinzufügen</h1>
            <div class="container-left">
            <hr>
                <label for="username"><b>Benutzername:</b></label>
                <input class="form-control" type="text" placeholder="Benutzername" name="username" required>

                <label for="first_name"><b>Vorname:</b></label>
                <input class="form-control" type="text" placeholder="Vorname" name="first_name" required>

                <label for="last_name"><b>Nachname:</b></label>
                <input class="form-control" type="text" placeholder="Nachname" name="last_name" required>

                <label for="store_name"><b>Store-Name:</b></label>
                <input class="form-control" type="text" placeholder="Firmenname" name="store_name" required>
            </div>
            <div class="container-middle">
                <label for="franchise"><b>Franchise:</b></label>
                <select class="form-select" name="franchise" id="franchise">
                    <option value="">-- Bitte auswählen --</option>
                    <option value="-">Solo-Firma</option>
                    <option value="SunStore Ag">SunStore Ag</option>
                </select>

                <label for="category"><b>Kategorie:</b></label>
                <select class="form-select" name="category" id="category">
                    <option value="">-- Bitte auswählen --</option>
                    <option value="Apotheke">Apotheke</option>
                    <option value="Drogerie">Drogerie</option>
                </select>

                <label for="rank"><b>Rank:</b></label>
                <select class="form-select" name="rank" id="rank">
                    <option value="">-- Bitte auswählen --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>

                <label for="address"><b>Adresse:</b></label>
                <input class="form-control" type="text" placeholder="Adresse" name="address" required>
            </div>
            <div class="container-right">
                <label for="zip"><b>PLZ:</b></label>
                <input class="form-control" type="text" placeholder="PLZ" name="zip" required>

                <label for="city"><b>Stadt:</b></label>
                <input class="form-control" type="text" placeholder="Stadt" name="city" required>

                <label for="canton"><b>Kanton:</b></label>
                <select class="form-select" class="dropdown" name="canton" id="canton">
                    <option value="">-- Bitte auswählen --</option>
                    <option value="AG">Aargau</option>
                    <option value="AR">Appenzell Ausserrhoden</option>
                    <option value="AI">Appenzell Innerrhoden</option>
                    <option value="BL">Basel-Landschaft</option>
                    <option value="BS">Basel-Stadt</option>
                    <option value="BE">Bern</option>
                    <option value="FR">Freiburg</option>
                    <option value="GE">Genf</option>
                    <option value="GL">Glarus</option>
                    <option value="GR">Graubünden</option>
                    <option value="JU">Jura</option>
                    <option value="LU">Luzern</option>
                    <option value="NE">Neuenburg</option>
                    <option value="NW">Nidwalden</option>
                    <option value="OW">Obwalden</option>
                    <option value="SG">St. Gallen</option>
                    <option value="SH">Schaffhausen</option>
                    <option value="SZ">Schwyz</option>
                    <option value="SO">Solothurn</option>
                    <option value="TG">Thurgau</option>
                    <option value="TI">Tessin</option>
                    <option value="UR">Uri</option>
                    <option value="VS">Wallis</option>
                    <option value="VD">Waadt</option>
                    <option value="ZG">Zug</option>
                    <option value="ZH">Zürich</option>
                </select>

                <label for="distance"><b>Distanz:</b></label>
                <input class="form-control" type="text" placeholder="Distanz" name="distance" required>

                <label for="country"><b>Land:</b></label>
                <select class="form-select" name="country" id="country">
                    <option value="">-- Bitte auswählen --</option>
                    <option value="CH">Schweiz</option>
                    <option value="DE">Deutschland</option>
                    <option value="FR">Frankreich</option>
                </select>
</div>
                <div class="clearfix">
                    <div class="closec">
                        <button type="button" onclick="document.getElementById('add-customer-modal').style.display='none'" class="btn btn-danger">Abbrechen</button>
                    </div>
                    <div class="savec">
                        <button type="post" name="addcustomer" id="addcustomer" class="btn btn-warning">Speichern</button>
                    </div>
                </div>
            </hr>
            </div>
        </form>
        </div>
    </div>
</div>
    </div>
</div>
</div>
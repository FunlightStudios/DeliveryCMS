<?php
//---------------------------------------------------------------------------------------------------
//   _____       _ _                       _____ __  __  _____   ____       _          __   ___  
//  |  __ \     | (_)                     / ____|  \/  |/ ____| |  _ \     | |        /_ | / _ \ 
//  | |  | | ___| |___   _____ _ __ _   _| |    | \  / | (___   | |_) | ___| |_ __ _   | || | | |
//  | |  | |/ _ \ | \ \ / / _ \ '__| | | | |    | |\/| |\___ \  |  _ < / _ \ __/ _` |  | || | | |
//  | |__| |  __/ | |\ V /  __/ |  | |_| | |____| |  | |____) | | |_) |  __/ || (_| |  | || |_| |
//  |_____/ \___|_|_| \_/ \___|_|   \__, |\_____|_|  |_|_____/  |____/ \___|\__\__,_|  |_(_)___/ 
//                                   __/ |                                                       
//                                  |___/                                                        
//
//                              DeliveryCMS Beta 1.0 by Lohm Holding AG
//                  This Software is released under GNU General Public License v3.0
//                      Read more about DeliveryCMS at https://deliverycms.com/
//                and read the license at https://choosealicense.com/licenses/gpl-3.0/
//---------------------------------------------------------------------------------------------------

//   _____ __  __  _____    _____ ______ _______ _______ _____ _   _  _____  _____     
//  / ____|  \/  |/ ____|  / ____|  ____|__   __|__   __|_   _| \ | |/ ____|/ ____|  _ 
// | |    | \  / | (___   | (___ | |__     | |     | |    | | |  \| | |  __| (___   (_)
// | |    | |\/| |\___ \   \___ \|  __|    | |     | |    | | | . ` | | |_ |\___ \     
// | |____| |  | |____) |  ____) | |____   | |     | |   _| |_| |\  | |__| |____) |  _ 
//  \_____|_|  |_|_____/  |_____/|______|  |_|     |_|  |_____|_| \_|\_____|_____/  (_)
                                                                                   
  /*********************/
 /* DATABASE SETTINGS */
/*⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩*/
$servername = "localhost"; // Datenbank-Server-Adresse
$username = "root"; // Datenbank-Benutzername
$password = ""; // Datenbank-Passwort
$dbname = "r8"; // Datenbank-Name

  /***************/
 /* Maintenance */
/*⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩*/
$settings['isMaintenance'] = false; //Is Webpage in maintenance?

  /*********************************/
 /* BASIC SETTINGS DO NOT CHANGE! */
/*⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩⇩*/
$conn = new mysqli($servername, $username, $password, $dbname);

// Fehlerausgabe, falls Verbindung nicht hergestellt werden konnte
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
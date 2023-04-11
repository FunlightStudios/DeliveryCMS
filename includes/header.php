<html lang="<?php echo $lang['langCode']; ?>">
<?php
// Einbindung der Konfigurationsdatei
require_once('system/config.php');
require_once('system/core.php');
if ($settings['isMaintenance'] == true) {
	header(“Location: maintenance.php”);
		exit;
}
session_start();
$current_language = $_SESSION['language'] ?? 'de'; // standardmäßig Deutsch
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Sitetitle -->
	<title><?php echo $lang['siteTitle'] ?></title>
		<!-- Style-import -->
		<link rel="stylesheet" href="style/css/main.css">
		<link rel="stylesheet" href="style/css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="style/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style/css/bootstrap/css/bootstrap.rtl.css">
		<link rel="stylesheet" href="style/css/fa/css/all.css">
		<link rel="stylesheet" href="style/css/fa/css/fontawesome.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="style/js/front.js"></script>
		<script src="style/css/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<header>
	<div class="header">
		<!--Header-Code -->
		<div class="menu">
			<div class="logo">
				<img src="style/images/logo.png"></img>
			</div>
			<div class="main-menu">
			<div class="center">
				<ul>
    				<li><a href="#"><?php echo $lang['menuHome'] ?></a></li>
    				<li><a href="#"><?php echo $lang['menuAbout'] ?></a></li>
    				<li><a href="#"><?php echo $lang['menuServices'] ?></a></li>
    				<li><a href="#"><?php echo $lang['menuContact'] ?></a></li>
    				<li class="dropdown">
      					<a href="#" class="dropbtn"><?php echo $lang['menuMore'] ?> <i class="fa fa-angle-down"></i></a>
      					<div class="dropdown-content">
        					<a href="#"><?php echo $lang['menuReference'] ?></a>
        					<a href="#">Link 2</a>
        					<a href="#">Link 3</a>
    					</div>
    				</li>
  				</ul>
			</div>
			<div class="login-buttons">
				<button class="btn btn-success"; onclick="showPopup('customer-login-popup')"><?php echo $lang['customerLogin'] ?></button>
				<button class="btn btn-danger"; onclick="showPopup('admin-login-popup')"><?php echo $lang['adminLogin'] ?></button>
				<div class="language-dropdown">
					<?php language_dropdown($languages, $langCode); ?>
				</div>
			</div>		
			<!-- Kunden-Login-Formular -->
			<div id="customer-login-popup" class="popup">
				<div class="popup-inner">
					<div class="popupheader">
						<h2>Kunden-Login</h2>
						<form action="includes/customer-login.php" method="post">
							<input class="form-control" type="text" name="username" placeholder="Benutzername">
							<input class="form-control" type="password" name="password" placeholder="Passwort">
							<button class="btn btn-success"; type="submit">Einloggen</button>
						</form>
					</div>
					<div class="popup-close" onclick="hidePopup('customer-login-popup')"><i style="color:red"; class="fa fa-times-circle"></i></div>
				</div>
			</div>
			<!-- Admin-Login-Formular -->
			<div id="admin-login-popup" class="popup">
				<div class="popup-inner">
					<div class="popupheader">
						<h2>Admin-Login</h2>
						<form action="includes/admin-login.php" method="post">
							<input class="form-control" type="text" name="username" placeholder="Benutzername">
							<input class="form-control" type="password" name="password" placeholder="Passwort">
							<button class="btn btn-success"; type="submit">Einloggen</button>
						</form>
					</div>
					<div class="popup-close" onclick="hidePopup('admin-login-popup')"><i style="color:red"; class="fa fa-times-circle"></i></div>
				</div>
			</div>
		</div>
		<script>
			function showPopup(id) {
				document.getElementById(id).style.display = "block";
			}
			function hidePopup(id) {
				document.getElementById(id).style.display = "none";
			}
		</script>
		<video autoplay muted loop id="video">
  			<source src="style/videos/background.mp4" type="video/mp4">
		</video>
		<div id="header-text">
    		<h1>RÜFENACHT</h1>
			<h1>DÉCORATIONS SA</h1>
			<h3>Outsourcing von Merchandising im Bereich Apotheke, Drogerie, Arztpraxis</h3>
  		</div>
	</div>
	<div id="acceptcookies" class="alert alert-dismissible text-center cookiealert" role="alert">
  <div class="cookiealert-container">
    Wir verwenden Cookies, um Ihnen das beste Erlebnis auf unserer Website zu bieten. Durch die Nutzung unserer Website stimmen Sie der Verwendung von Cookies zu.
    <button type="button" id`="acceptcookies" name="acceptcookies" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
      OK
    </button>
  </div>
</div>
	</header>

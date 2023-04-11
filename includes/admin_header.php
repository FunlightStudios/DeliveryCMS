<?php
require_once('../system/config.php');
require_once('../system/core.php');
require_once('../admin/includes/checkadmin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang['AsiteTitle'] ?></title>
		<link rel="stylesheet" href="../style/css/main.css">
		<link rel="stylesheet" href="../style/css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../style/css/fa/css/all.css">
		<link rel="stylesheet" href="../style/css/fa/css/fontawesome.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../style/js/admin.js"></script>
        <script src="../style/css/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../style/css/bootstrap/js/bootstrap.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-inner">
            
                <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php"><?php echo $lang['AmenuDash'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/tours.php"><?php echo $lang['AmenuTours'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/customers.php"><?php echo $lang['AmenuCustomers'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/products.php"><?php echo $lang['AmenuProducts'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/lager/index.php"><?php echo $lang['AmenuStorage'] ?></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                <div class="language-dropdown-admin">
					<?php language_dropdown($languages, $langCode); ?>
				</div>
                    <li class="nav-item">
                        <a href="includes/logout.php">
                        <button class="btn btn-danger"><?php echo $lang['AmenuButtonLogout'] ?></button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

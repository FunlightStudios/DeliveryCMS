<?php
require_once "../includes/admin_header.php";
?>
<main>
<div class="admin-content">
  <div class="admin-main-head">
    <div class="admin-dash-head">
      <h3><?php echo $lang['Awelcome'] ?> <?php echo "$username"; ?></h3>
    </div>
  </div>


  <div class="customer-count-div">
    <div class="customer-count">
      <span class="count"><?php echo $row_customers['count_customers']; ?></span>
      <span class="label">Kunden Insgesamt</span>
    </div>
    <div class="customer-count">
      <span class="count"><?php echo $row_tours['count_tours']; ?></span>
      <span class="label">Touren Insgesamt</span>
    </div>
    <div class="customer-count-div-right">
    <div class="customer-count-right">
      <span class="count">65</span>
      <span class="label">Produkte Insgesamt</span>
    </div>
    <div class="customer-count">
      <span class="count">7364</span>
      <span class="label">Items im Lager</span>
    </div>
</div>
  </div>

  <div class="cardsbox">
    <div class="cards1">
  <div class="card" style="width: 18rem; height:100%;">
    <img src="../style/images/pascalcrelier-48-scaled.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Neue Tour erstellen</h5>
        <p class="card-text">Erstelle eine neue Tour für einen Mitarbeiter. Bearbeite oder verwalte bestehende Touren.</p>
        <a href="tours.php" class="btn btn-primary">LOS</a>
      </div>
  </div>
</div>
  <div class="cards2">
  <div class="card" style="width: 18rem; height:100%;">
    <img src="../style/images/comm-scaled-e1639390931102-1536x679.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Produkte verwalten</h5>
        <p class="card-text">Verwalte alle Produkte zur Lieferung oder retoure. Füge neue Produkte hinzu oder lösche alte.</p>
        <a href="products.php" class="btn btn-primary">LOS</a>
      </div>
  </div>
</div>
<div class="cards3">
  <div class="card" style="width: 18rem; height:100%;">
    <img src="../style/images/presentoir2-1024x683.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kunden verwalten</h5>
        <p class="card-text">Verwalte Zugriffsrechte, User und Standorte, füge neue Kunden hinzu oder lösche alte Standorte. </p>
        <a href="customers.php" class="btn btn-primary">LOS</a>
      </div>
  </div>
</div>
<div class="cards4">
  <div class="card" style="width: 18rem; height:100%;">
    <img src="../style/images/lOGISTIQUE1-e1639391453491-1536x664.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lager verwalten</h5>
        <p class="card-text">Vollschtändiges Lagersystem angepasst an die bedürfnisse der Rüfenacht Decorations SA.</p>
        <a href="#" class="btn btn-primary">LOS</a>
      </div>
  </div>
</div>
</div>

  <div class="toast-pos">
    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
      <div class="toast-header">
        <b><i style="color:red; margin-right:2px; font-width:5px;"class="fa fa-info" aria-hidden="true"></i></b>
        <strong class="me-auto"> DeliveryCMS</strong>
        <small class="text-body-secondary">Beta 1.0</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        DeliveryCMS is in Beta, please report Issues <a href="#" target="_blank" >here.</a> Before report a Issue check the <a href="#" target="_blank">known Bugs</a> list first.
      </div>
    </div>
  </div>



</div>
</main>
<footer>
	</footer>
</body>
</html>
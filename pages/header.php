<head>
    <link rel="stylesheet" href="css/header.css">
</head>

<?php
  $currentPage;
  switch($view) {
    case "home":
      $currentPage = "home";
      break;
  }

?>

<nav class="navbar sticky-top navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand ps-4 pe-3" href="#"><img src="img/logo_shinegg_noir.png" alt="" width="45" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-header">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php
            if($currentPage == "home") {
              echo '<div class="nav-link current">Home</div>';
            } else {
              echo '<a class="nav-link" href="index.php?view=home">Home</a>';
            }
          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact.php">Tournaments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Community</a>
        </li>
      </ul>
      <div class="d-flex">
        <img id="header-profile" src="img/default_picture.png" alt="def">
      </div>
    </div> 
  </div>
</nav>
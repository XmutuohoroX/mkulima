<?php include './theme/header.php'?>
<?php
    require('./include/db.php')
?>
    <style>
        body{
            background:#1abc9c;
        }
    </style>
<nav class="navbar navbar-expand-lg navbar-dark border border-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src=" https://dummyimage.com/100x30/007bff/efefef" alt="UI Kit"
            style="width: 100px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo03"
          aria-controls="navbarTogglerDemo03" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ms-auto me-sm-2 mt-2 mt-lg-0">
            <li class="nav-item active me-3">
              <a class="nav-link " href="dashboard.php">Dasboard <span
                  class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link bg-secondary" href="animals.php">Animals</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="produce.php">Produce</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="events.php">Events</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="expenses.php">Expenses</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img class="rounded-circle u-box-shadow-sm me-2" width="25"
                  height="25" src=" https://dummyimage.com/100/007bff/efefef"
                  alt="Htmlstream"> John Doe <i class="fa fa-angle-down   "></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Account Settings</a>
                <a class="dropdown-item" href="#">Newsletter</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Sign Out</a>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </nav>


    <?php include './theme/footer.php'?>
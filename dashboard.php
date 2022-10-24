<?php include './theme/header.php'?>
<?php
    require('./include/db.php')
?>
    <style>
        body{
            background:#eee;
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
              <a class="nav-link bg-secondary" href="dashboard.php">Dasboard <span
                  class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="animals.php">Animals</a>
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


    <section id="section-1" class="pt-2 pb-1">
      <div class="container w-100">
        <div class="row align-content-center">
          <a class="card p-2 col-md-3  no-gutters text-light  border-light "
            data-toggle="modal" data-target=".bd-example-modal-lg">
            <img class="card-img h-100 shadow"
              src="https://images.pexels.com/photos/735968/pexels-photo-735968.jpeg?cs=srgb&dl=pexels-kat-smith-735968.jpg&fm=jpg&amp;s=6c3524e0ea8d0107f85384392d779467&amp;auto=format&amp;fit=crop&amp;w=666&amp;q=80"
              alt="Card image">
            <div
              class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
              <div class="container-fluid h-25">
                <div class="row h-100 align-items-center">
                  <div class="col-6">
                    <h5 class="text-white mt-2 mb-2">1</h5>
                  </div>
                  <div class="col-6 text-end">
                    <h5 class="  mt-2 mb-2 text-white">+24c</h5>
                  </div>
                </div>
              </div>
              <div class="container-fluid  h-50  text-center">
                <div class="row h-100 align-items-center">
                  <div class="col-12">
                    <h2 class="text-white  mt-3 mb-3">Animals<br>
                      <small> Cows</small>
                    </h2>
                  </div>
                </div>
              </div>
              <div class="container-fluid h-25  ">
                <div class="row h-100 align-items-center">
                  <div class="col-6">
                    <i class="fa fa-cloud fa-lg" aria-hidden="true"></i>
                  </div>
                  <div class="col-6 text-end">
                    <h5 class="  mt-2 mb-2 text-white">$2,240</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="card p-2 col-md-3  no-gutters text-light  border-light "
            data-toggle="modal" data-target=".bd-example-modal-lg">
            <img class="card-img h-100 shadow"
              src="https://images.pexels.com/photos/244579/pexels-photo-244579.jpeg?cs=srgb&dl=pexels-bamusiime-sylvia-244579.jpg&fm=jpg&amp;s=13ea309e96c29da90ee6453003ba8408&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80"
              alt="Card image">
            <div
              class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
              <div class="container-fluid h-25">
                <div class="row h-100 align-items-center">
                  <div class="col-6">
                    <h5 class="text-white mt-2 mb-2">2</h5>
                  </div>
                  <div class="col-6 text-end">
                    <h5 class="  mt-2 mb-2 text-white">+24c</h5>
                  </div>
                </div>
              </div>
              <div class="container-fluid  h-50  text-center">
                <div class="row h-100 align-items-center">
                  <div class="col-12">
                    <h2 class="text-white  mt-3 mb-3">Produce<br>
                      <small>Milk</small>
                    </h2>
                  </div>
                </div>
              </div>
              <div class="container-fluid h-25  ">
                <div class="row h-100 align-items-center">
                  <div class="col-6">
                    <i class="fa fa-cloud fa-lg" aria-hidden="true"></i>
                  </div>
                  <div class="col-6 text-end">
                    <h5 class="  mt-2 mb-2 text-white">$2,240</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="card p-2 col-md-3  no-gutters text-light  border-light "
            data-toggle="modal" data-target=".bd-example-modal-lg">
            <img class="card-img h-100 shadow"
              src="https://images.unsplash.com/photo-1517659649778-bae24b8c2e26?ixlib=rb-0.3.5&amp;s=6c3524e0ea8d0107f85384392d779467&amp;auto=format&amp;fit=crop&amp;w=666&amp;q=80"
              alt="Card image">
            <div
              class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
              <div class="container-fluid h-25">
                <div class="row h-100 align-items-center">
                  <div class="col-6">
                    <h5 class="text-white mt-2 mb-2">3</h5>
                  </div>
                  <div class="col-6 text-end">
                    <h5 class="  mt-2 mb-2 text-white">+24c</h5>
                  </div>
                </div>
              </div>
              <div class="container-fluid  h-50  text-center">
                <div class="row h-100 align-items-center">
                  <div class="col-12">
                    <h2 class="text-white  mt-3 mb-3">Events<br>
                      <small> </small>
                    </h2>
                  </div>
                </div>
              </div>
              <div class="container-fluid h-25  ">
                <div class="row h-100 align-items-center">
                  <div class="col-6">
                    <i class="fa fa-cloud fa-lg" aria-hidden="true"></i>
                  </div>
                  <div class="col-6 text-end">
                    <h5 class="  mt-2 mb-2 text-white">$2,240</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a class="card p-2 col-md-3  no-gutters text-light  border-light "
            data-toggle="modal" data-target=".bd-example-modal-lg">
            <img class="card-img h-100 shadow"
              src="https://images.pexels.com/photos/6958539/pexels-photo-6958539.jpeg?cs=srgb&dl=pexels-karolina-grabowska-6958539.jpg&fm=jpg&amp;s=13ea309e96c29da90ee6453003ba8408&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80"
              alt="Card image">
            <div
              class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
              <div class="container-fluid h-25">
                <div class="row h-100 align-items-center">
                  <div class="col-6">
                    <h5 class="text-white mt-2 mb-2">4</h5>
                  </div>
                  <div class="col-6 text-end">
                    <h5 class="  mt-2 mb-2 text-white">+24c</h5>
                  </div>
                </div>
              </div>
              <div class="container-fluid  h-50  text-center">
                <div class="row h-100 align-items-center">
                  <div class="col-12">
                    <h2 class="text-white  mt-3 mb-3">Expenses<br>
                      <small>Calculator</small>
                    </h2>
                  </div>
                </div>
              </div>
              <div class="container-fluid h-25  ">
                <div class="row h-100 align-items-center">
                  <div class="col-6">
                    <i class="fa fa-cloud fa-lg" aria-hidden="true"></i>
                  </div>
                  <div class="col-6 text-end">
                    <h5 class="  mt-2 mb-2 text-white">$2,240</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
    <?php include './theme/footer.php'?>
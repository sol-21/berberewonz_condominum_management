
<nav class="navbar navbar-expand-lg navbar-dark top-nav fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >berbere Wonz</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end drop-back">
                <li><a class="nav-link text-white ms-2" href="#"><?php if(isset($_SESSION["admin"])){
                  echo $_SESSION["admin"];
                }
                ?></a></li>
                <li></li>
                <li><a class="nav-link text-white ms-2" href="logout.php">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div
      class="offcanvas offcanvas-start sidebar-nav"
      
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><button
          class="navbar-toggler close-sidebar"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
      </span>
             
          <a href="./index.php" class="nav-link"><span class="me-2 ms-3"><i class="bi bi-house-door-fill"></i></span> <span class="text-light">Dashboard</span></a>
                <div class="container-fluid">
        
              </a>
              
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            
            
            <!-- employees -->

            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#employees"
              >
                <span class="me-2"><i class="bi bi-person-circle"></i></span>
                <span>Personal information</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-arrow-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="employees">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="update_personal_info.php?view_id='<?php  echo $_SESSION["id"]?>'" class="nav-link px-3">
                      
                      <span>View Personal Information</span>
                    </a>
                  </li>
                  <li><hr class="dropdown-divider bg-light" /></li>
                  
                </ul>
              </div>
            </li>
            <!-- conflict -->

            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#conflicts"
              >
                <span class="me-2"><i class="bi bi-emoji-frown-fill"></i></span>
                <span>Conflicts</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-arrow-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="conflicts">
                <ul class="navbar-nav ps-3">
                  
                  <li><hr class="dropdown-divider bg-light" /></li>
                  <li>
                    <a href="report_conflict.php" class="nav-link px-3">
                      
                      <span>report Conflicts</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <!-- maintenance -->
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#maintenance"
              >
                <span class="me-2"><i class="bi bi-tools"></i></span>
                <span>Maintenance</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-arrow-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="maintenance">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="view_maintenance.php" class="nav-link px-3">
                      
                      <span>View Maintenance</span>
                    </a>
                  </li>
                  <li><hr class="dropdown-divider bg-light" /></li>
                  <li>
                    <a href="report_maintenance.php" class="nav-link px-3">
                      
                      <span>Report maintenance</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            
          </ul>
        </nav>
      </div>
    </div>
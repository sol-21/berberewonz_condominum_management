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
                <span>Dashboard</span>
                <div class="container-fluid">
        
              </a>
              
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            
            
            
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#personalinfo"
              >
                <span class="me-2"><i class="bi bi-person-circle"></i></span>
                <span>Personal Information</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-arrow-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="personalinfo">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="update_personal_info.php?view_id='<?php  echo $_SESSION["id"]?>' " class="nav-link px-3">
                      
                      <span>View Personal Information</span>
                    </a>
                  </li>
                  <li><hr class="dropdown-divider bg-light" /></li>
                  
                </ul>
              </div>
            </li>
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
                    <a href="#" class="nav-link px-3">
                      
                      <span>Add maintenance</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- emergency -->

            
            
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            
            
            
          </ul>
        </nav>
      </div>
    </div>
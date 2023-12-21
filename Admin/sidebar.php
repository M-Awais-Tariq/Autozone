  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Auto Zone</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
           <?php
           if (isset($_SESSION['name'])) {
               $name = $_SESSION['name'];
               ?>
                <div class="info">
                <a href="#" class="d-block"><?php echo "Welcome, $name!"; ?></a>
              </div>
               <?php
              //  echo "Welcome, $name!";
           } else {
               echo "Please log in to view this page.";
           }
           ?>
        
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
               <a href="dashboard.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>">
               <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                  Admin Dashboard
                  </p>
                </a>
              </li>
              <hr>
               <li class="nav-item">
               <a href="users_view.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'users_view.php') ? 'active' : ''; ?>">
                  <i class="nav-icon ion ion-person-add"></i>
                  <p>
                  All Users
                  </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="admin_view.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'admin_view.php') ? 'active' : ''; ?>">
                  
                  <i class="nav-icon fas fa-toolbox"></i>
                  <p>
                  Admin
                  </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="services_view.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'services_view.php') ? 'active' : ''; ?>">
                  <!-- <i class="nav-icon fas fa-th"></i> -->
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                  Booked Services
                  </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="customers_view.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'customers_view.php') ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                  All Customers
                  </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="messages_view.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'messages_view.php') ? 'active' : ''; ?>">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                  Contact Messages
                  </p>
                </a>
              </li>

              
              <li class="nav-item">
              <a href="admin_user_chat.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'admin_user_chat.php') ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-regular fa-comment-dots"></i>
                  <p>
                  Chat with Users
                  </p>
                </a>
              </li>

              <li class="nav-item">
              <a href="logout.php" class="nav-item nav-link text-danger"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
              </li>
              
              </li>
             
            </ul>
          </li>
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
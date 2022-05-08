<!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <!-- offcanvas Tigger -->
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
                  </button>
                <!-- offcanvas Tigger-->  

              <a class="navbar-brand me-auto" href="#">MBM Training & Placement </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <form class="d-flex ms-auto">
                <div class="input-group my-3 my-lg-0">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </div>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                      </ul>
                    </li>
                  </ul>
              </div>
            </div>
        </nav>
        <!--navbar-->
        <!-- offcanvas --> 
          <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title text-light" id="offcanvasExampleLabel"><?php echo $_SESSION['username'];?><br> </h5>
            </div>
            <div class="offcanvas-body">
                <nav class="navbar-dark">
                    <ul class="navbar-nav text-light">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="admin_dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="volunter.php">volunter List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="placed.php">palced Student</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link active" href="student_request.php">Student Request</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link active" href="company_request.php">Company Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="admin_genrate_notification.php">Notification</a>
                        </li>
                        
                      </ul>
                </nav>
            </div>
          </div>
                                    <!-- offcanvas -->
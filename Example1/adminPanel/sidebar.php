
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav vertical-nav-menu">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Faculty & Department</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basicc" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Faculty & Department</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basicc">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button></li>
                <li class="nav-item"> <a class="nav-link" href="pages/add-department.php">Add Department</a></li>

              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Program</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Program</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/add-Program.php">Add Program</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-Program.php">Manage Program</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Forms Lecturer</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Lecturer</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/add-lecturer">Add Lecturer</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="manage-lecturer.php">Manage Lecturer</a></li>
              </ul>
            </div>
            <li class="nav-item nav-category">Forms Subject</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elementss" aria-expanded="false" aria-controls="form-elementss">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Add Subject</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elementss">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/add-subject">Add Subject</a></li>
              </ul>
          </li>
          
        </ul>
      </nav>
      
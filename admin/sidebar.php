<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="?page=dashboard">
        <i class="ri-home-heart-line"></i>
          <span>Dashboard</span>
        </a>
      </li> 
      <!-- dashboard nav end -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="?page=home">
        <i class="ri-folder-open-line"></i>
        <span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="?page=admin">
              <i class="bi bi-circle"></i><span>Data Admin</span>
            </a>
          </li>
          <li>
            <a href="?page=pendaftaran">
              <i class="bi bi-circle"></i><span>Data Pendaftaran</span>
            </a>
          </li>
          <li>
            <a href="?page=jadwal">
              <i class="bi bi-circle"></i><span>Data Jadwal</span>
            </a>
          </li>
          <li>
            <a href="?page=mentor">
              <i class="bi bi-circle"></i><span>Data Mentor</span>
            </a>
          </li>
          
          
        </ul>
    </li>
    <li class="nav-heading">Lanjutan</li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
        <i class="bi bi-box-arrow-right"></i>
          <span>Log Out</span>
        </a>
    </li><!-- keluar end -->

    </ul> 
</aside>
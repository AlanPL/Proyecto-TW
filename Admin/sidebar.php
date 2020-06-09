<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if( !isset($_SESSION["correo"])){
        header("location:../LoginAdmin.html");
    }
?>

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-text mx-3">Administracion SEIIAE </div>
      </a>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <button  class="btn btn-link nav-link" id="EstadisticasBtn">
          <i class="fas fa-fw fa-table"></i>
          <span>Estadisticas</span></button>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <button  class="btn btn-link nav-link" id="infoAlumnosBtn">
          <i class="fas fa-users"></i>
          <span>Alumnos</span></button>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item">
        <button  class="btn btn-link nav-link" id="infoUABtn">
          <i class="fas fa-users"></i>
          <span>Unidades de Aprendizaje</span></button>
      </li>




      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <button  class="btn btn-link nav-link" id="editarInfoBtn">
          <i class="fas fa-fw fa-cog"></i>
          <span>Editar Informacion</span></button>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

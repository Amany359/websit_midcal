<!--<aside class="main-sidebar sidebar-dark-primary elevation-4">-->
  <aside class="main-sidebar custom-sidebar elevation-6">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
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
          
               
            <a href="{{route('Options.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Options
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('achievement.index')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Achievement
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('educated.index')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Educated
              </p>
            </a>
          </li>
         
              
          <li class="nav-item">
            <a href="{{route('service.index')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Service
              </p>
            </a>
          </li>  
     
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">@yield('title-home')</a></li>
              <li class="breadcrumb-item active">@yield('title-dashbroad')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
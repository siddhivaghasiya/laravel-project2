  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
          
          
          <li class="nav-header">EXAMPLES</li>
          
          <li class="nav-item">
            <a href="{{route('newslater.listing-newslater')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                news later
              </p>
            </a>
          </li>
          
          
           <li class="nav-item">
            <a href="{{route('blog.listing-blog')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
               Blog 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('service.listing-service')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
               Service 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('testimonial.listing-testimonial')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
               Testimonial 
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="{{route('footer.listing-footer')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
               Footer 
              </p>
            </a>
          </li>
         
         <li class="nav-item">
            <a href="{{route('social.listing-social')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
               Social-media 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('setting.add')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
               Setting 
              </p>
            </a>
          </li>
         
         

         
         

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
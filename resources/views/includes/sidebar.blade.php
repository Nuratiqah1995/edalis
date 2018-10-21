 <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>


 @if(Auth::user()->role==1)
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="./index.html" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Top 5
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Weeks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Years</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-envelope-o"></i>
              <p>
                Mailbox
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="fa fa-paper-plane nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
             </ul>
          </li>
          <li class="nav-header fa fa-edit">  Manage </li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Entrepreneur Profile
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fa fa-briefcase"></i>
              <p>
                Entrepreneur Business
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Entrepreneur Sales
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>


          <li class="nav-header fa fa-file">  Report </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>Chart</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>Tables</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->

@else
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('profile.index')}}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                My Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('business-info.index')}}" class="nav-link">
              <i class="nav-icon fa fa-briefcase"></i>
              <p>
                Business Info
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('sales-info.index')}}" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Sales Info
                </p>
            </a>
           </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-calculator"></i>
              <p>
                Calculator
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
                 
          
          <li class="nav-header">Report</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>Chart</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>Tables</p>
            </a>
          </li>
          
        </ul>
      </nav>
@endif
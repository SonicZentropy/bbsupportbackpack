@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->

            {{--@role('Admin', 'SuperAdmin', 'Viewer')--}}


            @role('Admin', 'SuperAdmin')
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
            <li><a href="{{ url('admin/session') }}"><i class="fa fa-tag"></i> <span>Manage Sessions</span></a></li>
            <li><a href="{{ url('admin/user') }}"><i class="fa fa-tag"></i> <span>Manage Users</span></a></li>
            <li><a href="{{ url('admin/registrations') }}"><i class="fa fa-tag"></i> <span>Manage Registrations</span></a></li>
            @endrole

            @role('Viewer', 'Admin', 'SuperAdmin')
            <li><a href="{{ url('admin/viewcertifications') }}"><i class="fa fa-tag"></i> <span>View Certifications</span></a></li>
            @endrole

            @role('SuperAdmin')
            <li class="treeview">
                <a href="#"><i class="fa fa-group"></i> <span>Roles And Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
                    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
                    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/userroles') }}"><i class="fa fa-user"></i> <span>User Roles</span></a></li>
                </ul>
            </li>
            @endrole

          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif


  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('bower_components/admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{url('admin/home')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/homezakat')}}">
            <i class="fa fa-line-chart"></i> <span>Dashboard Zakat Fitrah</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/homezakatmal')}}">
            <i class="fa fa-line-chart"></i> <span>Dashboard Zakat Mal</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/homefidiyah')}}">
            <i class="fa fa-line-chart"></i> <span>Dashboard Fidiyah</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/citizens')}}">
            <i class="fa fa-users"></i> <span>Data Penduduk</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/zakatfitrah')}}">
            <i class="fa fa-money"></i> <span>Zakat Fitrah</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/zakatmal')}}">
            <i class="fa fa-money"></i> <span>Zakat Mal</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/fidiyah')}}">
            <i class="fa fa-cutlery"></i> <span>Fidiyah</span>
          </a>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Requirement</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/')}}"><i class="fa fa-circle-o"></i> Religion</a></li>
            <li><a href="{{url('/')}}"><i class="fa fa-circle-o"></i> Marital Status</a></li>
            <li><a href="{{url('/')}}"><i class="fa fa-circle-o"></i> Family Status</a></li>
            <li><a href="{{url('/')}}"><i class="fa fa-circle-o"></i> Occupation</a></li>
          </ul>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
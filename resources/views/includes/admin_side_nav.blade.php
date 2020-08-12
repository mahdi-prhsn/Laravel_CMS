<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li class="sidebar-search">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
        <!-- /input-group -->
      </li>
      <li>
        <a href="{{ url('/admin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
      </li>

      <li>
        <a href="{{route('admin.users.index')}}"><i class="fa fa-user fa-fw"></i> Users</a>
        <ul class="nav nav-second-level">
          <li>
            <a href="{{route('admin.users.create')}}">Create User</a>
          </li>

        </ul>
        <!-- /.nav-second-level -->
      </li>

      <li>
        <a href="{{route('admin.posts.index')}}"><i class="fa fa-link fa-fw"></i> Posts</a>
        <ul class="nav nav-second-level">
          <li>
            <a href="{{route('admin.posts.create')}}">Create Post</a>
          </li>

          <li>
            <a href="{{route('admin.comments.index')}}">All Comments</a>
          </li>

        </ul>
        <!-- /.nav-second-level -->
      </li>


      <li>
        <a href="{{route('admin.categories.index')}}"><i class="fa fa-tag fa-fw"></i> Categories</a>
      </li>


      <li>
        <a href="{{route('admin.media.index')}}"><i class="fa fa-inbox fa-fw"></i> Media</a>
        <ul class="nav nav-second-level">
          <li>
            <a href="{{route('admin.media.create')}}">Upload Media</a>
          </li>

        </ul>
        <!-- /.nav-second-level -->
      </li>



    </ul>


  </div>
  <!-- /.sidebar-collapse -->
</div>
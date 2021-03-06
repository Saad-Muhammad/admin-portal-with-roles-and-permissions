<div class="sidebar" data-color="cyan" data-active-color="info">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
          <img src="{{asset("storage/profile-pic/".Auth::user()->avatar)}}" alt="{{Auth::user()->name}}"/>
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          {{ Auth::user()->name }}<br>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li {{Route::is('home')? 'class=active':''}}>
            <a href="{{route('home')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>

       @role('admin')
          <li {{Route::is('permissions.index')||Route::is('permissions.create')||Route::is('permissions.edit')||Route::is('roles.index')||Route::is('roles.create')||Route::is('roles.edit')||Route::is('users.index')||Route::is('users.create')||Route::is('users.edit')? 'class=active':''}}>
          <a data-toggle="collapse" href="#users" aria-expanded="false" class="collapsed">
              <i class="fa fa-users"></i>
              <p>Manage Users</p>
              <b class="caret"></b>
          </a>
        <div class="collapse" id="users" aria-expanded="false" style="height: 0px;">
          <ul class="nav">
          <li {{Route::is('permissions.index')||Route::is('permissions.create')||Route::is('permissions.edit')? 'class=active':''}}>
              <a href="{{route('permissions.index')}}">
              <i class="nc-icon nc-single-02"></i>
                  <p>Permissions</p>
              </a>
            </li>
            <li {{Route::is('roles.index')||Route::is('roles.create')||Route::is('roles.edit')? 'class=active':''}}>
              <a href="{{route('roles.index')}}">
              <i class="nc-icon nc-single-02"></i>
                  <p>Roles</p>
              </a>
            </li>
            <li {{Route::is('users.index')||Route::is('users.create')||Route::is('users.edit')? 'class=active':''}}>
              <a href="{{route('users.index')}}">
              <i class="nc-icon nc-single-02"></i>
                  <p>Users</p>
              </a>
            </li>
          </ul>
        </div>
      </li>

      @endrole

      @can('product-list')
        <li {{Route::is('products.index')||Route::is('products.create')||Route::is('products.edit')||Route::is('products.show')? 'class=active':''}}>
          <a href="{{ route('products.index') }}">
            <i class="fa fa-shopping-bag"></i>
            <p>Products</p>
          </a>
        </li>
      @endcan
      

      <li {{Route::is('profile.index')? 'class=active':''}}>
        <a href="{{ route('profile.index') }}">
          <i class="nc-icon nc-circle-10"></i>
          <p>User Profile</p>
        </a>
      </li>

        </ul>
      </div>
</div>

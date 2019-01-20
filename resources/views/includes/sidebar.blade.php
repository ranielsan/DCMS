<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-title">
        General
      </li>
      @if(Auth()->user()->role_name == 'Administrator')
       <li class="nav-item">
        <a class="nav-link {{ Request::is('administrator*') ? 'active' : '' }}" href="/administrator"><i class="icon-briefcase"></i> User Management</a>
      </li>
            <li class="nav-item">
        <a class="nav-link {{ Request::is('changepassword*') ? 'active' : '' }}" href="{{route('changepassword.index')}}"><i class="icon-key"></i> Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
          document.getElementById('logout-form').submit();"><i class="icon-lock"></i> Logout</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/"><i class="icon-speedometer"></i> Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('patient*') ? 'active' : '' }}" href="/patient"><i class="icon-briefcase"></i> Patient</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('inventory*') ? 'active' : '' }}" href="/inventory"><i class="fa fa-dropbox"></i> Inventory</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('schedule*') ? 'active' : '' }}" href="/schedule"><i class="fa fa-calendar"></i> Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('reports*') ? 'active' : '' }}" href="/reports"><i class="fa fa-file-text-o"></i> Audit Trail</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link {{ Request::is('changepassword*') ? 'active' : '' }}" href="{{route('changepassword.index')}}"><i class="icon-key"></i> Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
          document.getElementById('logout-form').submit();"><i class="icon-lock"></i> Logout</a>
      </li> -->
      @endif
      <!-- Dropdown nav -->
      <!-- <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="/sample/icons-font-awesome"><i class="icon-star"></i> Font Awesome<span class="badge badge-secondary">4.7</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sample/icons-simple-line"><i class="icon-star"></i> Simple Line</a>
            </li>
          </ul>
        </li> -->
    </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer invisible" type="button"></button>
</div>

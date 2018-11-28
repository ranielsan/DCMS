<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-title">
        General
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('voucher*') ? 'active' : '' }}" href="/voucher"><i class="icon-briefcase"></i> Voucher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('changepassword*') ? 'active' : '' }}" href="{{route('changepassword.index')}}"><i class="icon-key"></i> Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
          document.getElementById('logout-form').submit();"><i class="icon-lock"></i> Logout</a>
      </li>
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

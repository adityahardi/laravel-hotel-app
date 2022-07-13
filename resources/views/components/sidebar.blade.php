<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="/dashboard">
      <span class="align-middle">Hotel App</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Menu
      </li>

      <li class="sidebar-item {{ str_contains(request()->path(), 'dashboard') ? 'active' : null }}">
        <a class="sidebar-link" href="/dashboard">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      <li class="sidebar-item {{ str_contains(request()->path(), 'user') ? 'active' : null }}">
        <a class="sidebar-link" href="/user">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">User</span>
        </a>
      </li>

      <li class="sidebar-item {{ str_contains(request()->path(), 'order') ? 'active' : null }}">
        <a class="sidebar-link" href="/order-detail">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book align-middle"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> <span class="align-middle">Pemesanan</span>
        </a>
      </li>
  </div>
</nav>
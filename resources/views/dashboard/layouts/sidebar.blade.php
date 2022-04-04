<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/employee*') ? 'active' : '' }}" href="/dashboard/employee">
                    <span data-feather="users"></span>
                    Employee Management
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/schedule*') ? 'active' : '' }}" href="/dashboard/schedule">
                    <span data-feather="layers"></span>
                    Schedule
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/parts*') ? 'active' : '' }}" href="/dashboard/parts">
                    <span data-feather="phone"></span>
                    Parts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/calendar*') ? 'active' : '' }}" href="/dashboard/calendar">
                    <span data-feather="calendar"></span>
                    Calendar
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/reports*') ? 'active' : '' }}" href="/dashboard/reports">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('admin_file/img/sidebar-2.jpg') }}">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="{{ route('admin.dashboard.index') }}" class="simple-text logo-normal">LU_Alumni</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Route::is('admin.dashboard.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.profile.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('admin.profile.index') }}">
                    <i class="material-icons">person</i>
                    <p>Admin Profile</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.alumni.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('admin.alumni.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Alumni List</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.currentstd.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('admin.currentstd.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Current Student List</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.userspost.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('admin.userspost.index') }}">
                    <i class="material-icons">location_ons</i>
                    <p>User's Post</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.club.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('admin.club.index') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Clubs</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.departments.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('admin.departments.index') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Departments</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.events.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('admin.events.index') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Programs And Events</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.map.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('admin.map.index') }}">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.notifications.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('admin.notifications.index') }}">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="sidebar" data-background-color="white" data-active-color="danger">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/" class="simple-text">
                HRMS
            </a>
        </div>

        <ul class="nav">
            @if (Request::is('/'))
                <li class="active">
            @else
                <li>
            @endif
            {{-- <li @class(['active' => Request::is('/')])> --}}
                <a href="/">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('jobTitle')?'active':'' }}">
                <a href="/jobTitle">
                    <i class="fas fa-list"></i>
                    <p>Job Titles</p>
                </a>
            </li>
            <li class="{{ Request::is('user')?'active':'' }}">
                <a href="/user">
                    <i class="ti-user"></i>
                    <p>User Profile</p>
                </a>
            </li>
        </ul>
    </div>
</div>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Posts
                </a>
            </li>
            
        </ul>
        <ul class="nav flex-column position-absolute bottomagakkeatas start-0">
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <span data-feather="chevron-left" class="align-text-bottom"></span>
                Back
                </a>
                
            </li>
        </ul>

        
    </div>
</nav>
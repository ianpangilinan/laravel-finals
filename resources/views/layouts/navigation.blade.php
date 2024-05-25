<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard Nav Item -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : 'collapsed' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>{{ __('Dashboard') }}</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <!-- Resources Nav Item -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('post') || Request::is('comment') ? 'collapse active' : 'collapsed' }}"
                data-bs-target="#resources-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i>
                <span>Resources</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <!-- Resources Submenu -->
            <ul id="resources-nav"
                class="nav-content collapse {{ Request::is('post') || Request::is('comment') ? 'show' : 'collapsed' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a class="nav-link {{ Request::is('post') ? 'active' : '' }}" href="{{ route('post.index') }}">
                        <i class="bi bi-circle"></i>
                        <span>Posts</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('comment') ? 'active' : '' }}"
                        href="{{ route('comment.index') }}">
                        <i class="bi bi-circle"></i>
                        <span>Comments</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('postPage') ? 'active' : 'collapsed' }}" href="{{ route('postPage') }}">
                <i class="bi bi-grid"></i>
                <span>{{ __('Post Page') }}</span>
            </a>
        </li><!-- End Resources Nav -->

    </ul>
</aside>
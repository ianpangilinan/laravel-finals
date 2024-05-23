<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>{{ __('Dashboard') }}</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('post.index') || request()->routeIs('comment.index') || request()->routeIs('resources') ? 'active' : '' }}"
                data-bs-target="#resources-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i>
                <span>Resources</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="resources-nav"
                class="nav-content collapse {{ request()->routeIs('post.index') || request()->routeIs('comment.index') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a class="nav-link {{ request()->routeIs('post.index') ? 'active' : '' }}"
                        href="{{ route('post.index') }}">
                        <i class="bi bi-circle"></i>
                        <span>Posts</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ request()->routeIs('comment.index') ? 'active' : '' }}"
                        href="{{ route('comment.index') }}">
                        <i class="bi bi-circle"></i>
                        <span>Comment</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('postPage') ? 'active' : '' }}" href="{{ route('postPage') }}">
                <i class="bi bi-grid"></i>
                <span>{{ __('Post Page') }}</span>
            </a>
        </li>
    </ul>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('.sidebar-nav .nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                // Remove active class from all nav links
                navLinks.forEach(link => link.classList.remove('active'));

                // Add active class to the clicked nav link
                this.classList.add('active');
            });
        });

        // Set the Resources menu active if any of its children are active on page load
        const activeChild = document.querySelector('#resources-nav .nav-link.active');
        const resourceNav = document.querySelector('a[data-bs-target="#resources-nav"]');
        if (activeChild) {
            resourceNav.classList.add('active');
            const parentMenu = activeChild.closest('.nav-content');
            if (parentMenu) {
                parentMenu.classList.add('show');
            }
        }
    });
</script>

<style>
    .nav-link.active {
        color: #007bff;
        /* Change this to your desired active text color */
    }
</style>
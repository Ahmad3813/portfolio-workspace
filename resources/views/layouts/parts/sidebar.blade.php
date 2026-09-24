<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
    <a href="/#" class="brand">
        <span class="brand-logo">A.</span>

        <span>
            <strong>Ahmad Sameer</strong>
            <small>Portfolio workspace</small>
        </span>
    </a>

    <button class="close-button" id="close-menu" type="button">
        ×
    </button>

    <p class="menu-label">WORKSPACE</p>

    <nav class="sidebar-menu">
        <a href="{{ route('dashboard') }}"
            class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <span aria-hidden="true">▦</span>
            Dashboard
        </a>

        <a href="#" class="menu-link">
            <span aria-hidden="true">◎</span>
            About Me
        </a>

        <a href="{{ route('skill.index') }}"
            class="menu-link {{ request()->routeIs('skill.*') ? 'active' : '' }}">
            <span aria-hidden="true">&lt;/&gt;</span>
            Skills
        </a>

        <a href="#" class="menu-link">
            <span aria-hidden="true">▤</span>
            Projects
        </a>

        <a href="{{ route('blog.index') }}"
            class="menu-link {{ request()->routeIs('blog.*') ? 'active' : '' }}">
            <span aria-hidden="true">▤</span>
            Blogs
        </a>

        <a href="{{ route('contact.index') }}"
            class="menu-link {{ request()->routeIs('contact.*') ? 'active' : '' }}">
            <span class="menu-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                    <path d="m3 7 9 6 9-6"></path>
                </svg>
            </span>
            Contact
        </a>
    </nav>


    <div class="sidebar-bottom">
        <div class="sidebar-card">
            <span class="card-star">✦</span>
            <h3>A little progress,<br>every day.</h3>
            <p>Your next chapter starts with what you build today.</p>
            <a>View portfolio ↗</a>
        </div>

        <div class="user-profile">
            <span class="avatar">AS</span>

            <div>
                <strong>Ahmad Sameer</strong>
                <small>Administrator</small>
            </div>
        </div>
    </div>
</aside>

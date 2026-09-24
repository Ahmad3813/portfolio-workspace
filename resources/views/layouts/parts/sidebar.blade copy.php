<!-- Sidebar -->
<aside class="sidebar" id="sidebar" aria-label="Sidebar">
    <a href="/com" class="brand">
        <span class="brand-logo">A.</span>

        <div>
            <strong>Ahmad Sameer</strong>
            <small>Portfolio workspace</small>
        </div>
    </a>

    <button
        type="button"
        class="close-button"
        aria-label="Close menu"
    >
        &times;
    </button>

    <p class="menu-label">WORKSPACE</p>

    <nav class="sidebar-menu" aria-label="Main navigation">
        <a href="/com" class="menu-link active">
            <span aria-hidden="true">▦</span>
            Dashboard
        </a>

        <a href="/com#about" class="menu-link">
            <span aria-hidden="true">◎</span>
            About Me
        </a>

        <a href="{{ route('skills.index') }}" class="menu-link">
            <span aria-hidden="true">&lt;/&gt;</span>
            Skills
        </a>

        <a href="/com#projects" class="menu-link">
            <span aria-hidden="true">▤</span>
            Projects
        </a>

        <a href="/com#contact" class="menu-link">
            <span aria-hidden="true">✉</span>
            Contact
        </a>
    </nav>

    <div class="sidebar-bottom">
        <div class="sidebar-card">
            <span class="card-star" aria-hidden="true">✦</span>

            <h3>A little progress,<br>every day.</h3>

            <p>
                Your next chapter starts with
                what you build today.
            </p>

            <a href="/" target="_blank" rel="noopener noreferrer">
                View portfolio ↗
            </a>
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
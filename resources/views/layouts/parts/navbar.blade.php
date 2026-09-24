<!-- Navbar -->
<header class="navbar">
    <div class="navbar-left">
        <button class="menu-button" id="open-menu" type="button">
            ☰
        </button>

        <div class="breadcrumb">
            <span>Workspace</span>
            <b>/</b>
            <strong>Dashboard</strong>
        </div>
    </div>
    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button type="submit" class="website-button">
            Logout
        </button>
    </form>


</header>
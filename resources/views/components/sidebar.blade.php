<div class="sidebar close" id="sidebar">

    <div class="sidebar-header">
        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
        <span class="menu-title">Menu</span>
    </div>

    @php
        $user = session('user');
        $username = request('username') ?? ($user['username'] ?? '');
    @endphp

    <a href="/dashboard?username={{ $username }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">
        <span class="icon">🏠</span>
        <span class="text">Dashboard</span>
    </a>

    <a href="/profile?username={{ $username }}" class="{{ request()->is('profile*') ? 'active' : '' }}">
        <span class="icon">👤</span>
        <span class="text">Profil</span>
    </a>

    <a href="/pengelolaan?username={{ $username }}" class="{{ request()->is('pengelolaan*') ? 'active' : '' }}">
        <span class="icon">🎣</span>
        <span class="text">Pengelolaan</span>
    </a>

    <div class="sidebar-bottom">
        <hr>
        <a href="#" onclick="openModal()">
            <span class="icon">🚪</span>
            <span class="text">Logout</span>
        </a>
    </div>
</div>

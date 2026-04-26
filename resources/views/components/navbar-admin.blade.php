<div class="navbar">
    <div class="left">
        <img src="{{ asset('images/logo.png') }}" alt="Logo HookPoint">
        <span class="brand">HookPoint - Club Pemancingan</span>
    </div>
    <div class="right">
        @if(isset($username))
            <p>Selamat datang, {{ $username }}</p>
        @elseif(session('user'))
            <p>Selamat datang, {{ session('user.username') }}</p>
        @endif
    </div>
</div>

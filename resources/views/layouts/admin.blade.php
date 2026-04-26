<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HookPoint</title>

    @yield('styles')
</head>

<body>

    @include('components.sidebar')

    <div class="main">
        @include('components.navbar-admin')

        <div class="content">
            @yield('content')
        </div>
    </div>

    @include('components.logout-modal')

    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("close");
        }

        function openModal() {
            document.getElementById("logoutModal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("logoutModal").style.display = "none";
        }

        function confirmLogout() {
            window.location.href = "/logout";
        }

        window.onclick = function(e) {
            const modal = document.getElementById("logoutModal");
            if (e.target === modal) {
                modal.style.display = "none";
            }
        }
        </script>

    @yield('scripts')

</body>
</html>

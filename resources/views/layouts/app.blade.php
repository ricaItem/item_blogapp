<!DOCTYPE html>
<html>

<head>
    <title>BlogApp | Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-4">
        @if(session('success'))
        <div id="success-notification" class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </div>

    <script>
        const notification = document.getElementById('success-notification');
        if (notification) {

            setTimeout(() => {
                notification.style.display = 'none';
            }, 2000);
        }
    </script>
</body>

</html>
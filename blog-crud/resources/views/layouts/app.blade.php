<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen flex flex-col justify-between font-sans">
    <header class="bg-gray-800 border-b border-gray-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('posts.index') }}" class="text-2xl font-bold text-rose-500 flex items-center gap-2">
                <i class="fa-solid fa-blog"></i> Blog Manager
            </a>
            <a href="{{ route('posts.create') }}" class="bg-rose-600 hover:bg-rose-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition">
                <i class="fa-solid fa-plus"></i> Tambah Artikel
            </a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-8 flex-grow w-full">
        @yield('content')
    </main>

    <footer class="bg-gray-800 border-t border-gray-700 py-4 text-center text-gray-400 text-sm">
        <p>&copy; {{ date('Y') }} Blog CRUD Laravel</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>{{ $title ?? 'CV' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    <main class="max-w-4xl mx-auto p-8">
        {{ $slot }}
    </main>
</body>
</html>

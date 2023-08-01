<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Video Collection</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography,forms"></script>
</head>
<body class="min-h-screen bg-gray-50 font-sans text-black antialiased">
    <header>
        <nav class="mx-auto max-w-2xl flex items-center p-6">
          <a href="/" wire:navigate>Home</a>
        </nav>
    </header>
    {{ $slot }}

    @persist('chat')
    <livewire:chat />
    @endpersist
</body>
</html>

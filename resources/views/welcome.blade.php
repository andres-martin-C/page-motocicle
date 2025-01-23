<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="bg-gray-800">
    <div x-data="{ count: 0 }">
        <button class="bg-amber-100 border-2 border-white" x-on:click="count++">Increment</button>

        <span class="text-white text-6xl" x-text="count"></span>
    </div>
</body>

</html>
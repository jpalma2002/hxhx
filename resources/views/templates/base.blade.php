<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/htmx.org@1.9.12/dist/htmx.min.js"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>

</head>
<body>
    <div class="w-[1200px] mx-auto">
        <section class="bg-teal-700 text-white flex items-center justify-between mt-3">
            <div class="text-xl px-4" id="brand">
                Thrifty System
            </div>
            <nav id="main-nav" class="flex">
                <a href="/" class="p-3 hover:bg-teal-600">Home</a>
                <a href="/about" class="p-3 hover:bg-teal-600">About</a>
                <a href="/product" class="p-3 hover:bg-teal-600">Products</a>
                <a href="/contact" class="p-3 hover:bg-teal-600">Contact Us</a>
            </nav>
        </section>

        <article id="content" class="min-h-[35rem] p-5">
            @yield('content')
        </article>
    </div>


</body>
</html>

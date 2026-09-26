<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>@yield('title' , 'RITRA TECH — Cyber Security & Technology')</title>
<meta
    name="description"
    content="@yield('meta_description', 'RITRA TECH — Cyber Security, Technology, Digital Forensics, AI, Portfolio, Blog, and Digital Products.')">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1">

<meta
    name="robots"
    content="index, follow">
@vite([
'resources/css/app.css',
'resources/js/app.js'
])

</head>

<body>

@include('components.navbar')

<main>

@yield('content')

</main>

@include('components.footer')

</body>

</html>
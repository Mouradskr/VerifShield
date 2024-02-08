<!DOCTYPE html>
<html lang="fr">
<style>

    html, body {
        background-color: #010146;
        color: #010146;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 10px;
        background-color: #010146;
    }

    .logo {
        width: 20%;
    }

    .gif {
        width: 50px;
        position: absolute;
        top: 10px;
        right: 10px;
    }
</style>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
</head>
<body>
<header>

    <img src="TPPHACK.gif" class="logo">
</header>
<div class="text-center" style="width: auto">
    @include('flash::message')
</div>
@yield('content')
</body>
</html>

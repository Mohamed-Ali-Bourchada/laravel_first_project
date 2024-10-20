<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<header class="bg-dark text-white py-4">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <h1 class="h4">My Website</h1>
        </div>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-white" href="home">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="about">About</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="service">Services</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="matiere">Matieres</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="epreuve">Epreuves</a></li>
            </ul>
        </nav>
    </div>
</header>


<main class="container mt-4">
    @yield('content')
</main>

<footer class="bg-dark text-white text-center py-1 fixed-bottom">
    <div class="container">
        <p class="mb-0">&copy; 2024 My Website. All rights reserved.</p>
        <ul class="list-inline mt-2">
            <li class="list-inline-item"><a href="#" class="text-white">Privacy Policy</a></li>
            <li class="list-inline-item"><a href="#" class="text-white">Terms of Service</a></li>
            <li class="list-inline-item"><a href="#" class="text-white">Contact Us</a></li>
            
        </ul>
    </div>
</footer>


<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-5gYvXk5/suMSEJ5C5tQmJdZ2b8GgqZtN1kJNZDfsbIH5aP2O2QR+B4mUIuHhyDcu" crossorigin="anonymous"></script>
</body>
</html>

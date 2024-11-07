<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
</head>
<body>
    {{-- Navbar --}}
    <nav>
        <div class="nav-logo">
            <img src="https://cdn4.iconfinder.com/data/icons/cute-funny-monster-characters/66/36-512.png" alt="error">
        </div>
        <div class="nav-font">
            <a href="{{route('dashboard')}}"><li>Home</li></a>
            <a href=""><li>About Us</li></a>
            <a href="#"><li>Register</li></a>
            <button><a href="{{asset('login')}}"><li>Login</li></a></button>
        </div>
    </nav>

    {{-- Hero Section --}}
    <header>
        <div class="hero">
            <div class="hero-font">
                <h1>Redefining Your Business Experience</h1>
                <span>Creating top-notch websites, mobile apps and brand identity with you.</span>
                <a href=""><button>Join Us</button></a>
            </div>
        </div>
    </header>



    {{-- footer --}}
    <footer>
        <div class="foot-logo">
            <a href="https://twitter.com/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/1409/1409946.png" alt="twitter"></a>
            <a href="https://www.facebook.com/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2504/2504903.png" alt="facebook"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2504/2504947.png" alt="instagram"></a>
        </div>
        <div class="foot-font">
            <p>Copyright 2022 Vincent. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>



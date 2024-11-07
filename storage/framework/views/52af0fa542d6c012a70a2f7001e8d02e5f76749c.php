<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/nav.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body>
    
    <nav>
        <div class="nav-logo">
            <img src="https://cdn4.iconfinder.com/data/icons/cute-funny-monster-characters/66/36-512.png" alt="error">
        </div>
        <div class="nav-font">
            <a href="<?php echo e(route('dashboard')); ?>"><li>Home</li></a>
            <a href=""><li>About Us</li></a>
            <a href="#"><li>Register</li></a>
            <button><a href="<?php echo e(asset('login')); ?>"><li>Login</li></a></button>
        </div>
    </nav>

    
    <header>
        <div class="card-form">
            <div class="auth-form">
                <div class="auth-head">Login</div>
                    <input type="text" placeholder="Email"><br>
                    <input type="email" placeholder="Email2"><br>
                    <input type="password" placeholder="Password"><br>
                    <button class="auth-button" type="submit">Login</button><br>
            </div>
        </div>
    </header>




    
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


<?php /**PATH C:\tugas\Kuliah binus\backend\pertemuan3B\pertemuan3B\resources\views/login.blade.php ENDPATH**/ ?>
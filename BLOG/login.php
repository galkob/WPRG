<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/0729b01b27.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include("app/includes/header.php")?>


<div class="auth-content">
    <form action="login.php" method="post">
        <h2 class="form-title">Logowanie</h2>
        <div>
            <label>Nazwa użytkownika</label>
            <input type="text" name="username" class="text_input">
        </div>

        <div>
            <label>Hasło</label>
            <input type="text" name="password" class="text_input">
        </div>

        <div>
            <button type="submit" name="login-btn" class="btn">Rejestruj</button>
        </div>
        <p>Lub <a href="register.php">Zarejestruj się</a></p>


    </form>
</div>


<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Slick -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- Skrypt -->
<script src="assets/js/scripts.js"></script>
</body>
</html>
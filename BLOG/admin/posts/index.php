<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Section - manage posts</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/0729b01b27.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- admin CSS -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

</head>
<body>
<header>
    <div class="logo">
        <h1 class="logo-text"><span>G</span>Blog</h1>
        <i class="fa-solid fa-bars menu-toggle"></i>
    </div>
    <ul class="nav">
        <li>
            <a href="#">
                <i class="fa fa-user"></i>
                Błażej Gałkowski
                <i class="fa fa-chevron-down"></i>
            </a>
            <ul>
                <li><a href="#" class="logout">Wyloguj</a></li>
            </ul>
        </li>
    </ul>
</header>
<!-- Page Wrapper -->
<div class="admin-wrapper">
    <!-- Left sidebar -->
    <div class="left-sidebar">
        <ul>
            <li><a href="../users/index.php">Użytkownicy</a></li>
            <li><a href="index.php">Posty</a></li>
        </ul>
    </div>
    <!-- // Left sidebar -->
    <div class="button-group">
        <a href="create.php" class="btn btn-big">Dodaj post</a>
        <a href="index.php" class="btn btn-big">Zarządzaj postami</a>
    </div>

    <div class="content">
        <h2 class="page-title">Zarządzaj postami</h2>

        <table>
            <thead>
            <th>N</th>
            <th>Tytuł</th>
            <th>Autor</th>
            <th colspan="3">Akcja</th>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Post</td>
                <td>Błażej</td>
                <td><a href="#" class="edit">edytuj</a></td>
                <td><a href="#" class="delete">usuń</a></td>
                <td><a href="#" class="publish">publikuj</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Post</td>
                <td>Błażej</td>
                <td><a href="#" class="edit">edytuj</a></td>
                <td><a href="#" class="delete">usuń</a></td>
                <td><a href="#" class="publish">publikuj</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- Admin Content -->
    <div class="admin-content">

    </div>
    <!-- // Admin Content -->

</div>
<!-- // Page Wrapper -->

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Skrypt -->
<script src="../../assets/js/scripts.js"></script>
</body>
</html>
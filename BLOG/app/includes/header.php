<?php include('path.php') ?>

<header>
    <div class="logo">
        <h1 class="logo-text"><span>G</span>Blog</h1>
        <i class="fa-solid fa-bars menu-toggle"></i>
    </div>
    <ul class="nav">
    <li><a href="<?php echo BASE_URL?>">Glowna</a></li>
        <li><a href="#">Info</a></li>
        <li><a href="#">Uslugi</a></li>
        <!--        <li><a href="#">Zarejestruj się</a></li>-->
        <!--        <li><a href="#">Login</a></li>-->
        <li>
            <a href="#">
                <i class="fa fa-user"></i>
                Błażej Gałkowski
                <i class="fa fa-chevron-down"></i>
            </a>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#" class="logout">Wyloguj</a></li>
            </ul>
        </li>
    </ul>
</header>
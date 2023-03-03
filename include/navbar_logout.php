<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">"Nasz Wydział"</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link" onclick="getData('content', 'include/newpostcon.php')" href="#">Nowy post</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" onclick="getData('content', 'include/myposts_load.php')" href="#">Moje posty</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" onclick="getData('content', 'include/contactform.php')" href="#">Kontakt</a>
                </li>
            </ul>

            Witaj <?php echo $_SESSION['name']; ?>
            <a class="btn btn-primary btn-sm ms-2" href="include/logout.php" role="button">Wyloguj się</a>

        </div>

    </div>
</nav>
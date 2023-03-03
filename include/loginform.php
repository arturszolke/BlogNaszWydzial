<?php
    include 'include/db_connect_user.php';
    
    $password = isset($_POST['Pass']) ? $_POST['Pass'] : null;
    $password = md5($password);
    $email = isset($_POST['Email']) ? $_POST['Email'] : null;

    $query = "SELECT * FROM user WHERE email='$email' AND haslo='$password'";
    $result = mysqli_query($conn, $query);
    $row  = mysqli_fetch_assoc($result);

    if (is_array($row)) {
        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['imie'] . " " . $row['nazwisko'];
    }

    if (isset($_SESSION["id"])) {
        header("location:index.php");
    }
?>
<div class="row align-items-center">
    <div class="col"></div>
    <div class="col-9 col-sm-7 col-md-5 col-lg-3">
        <form action="" onsubmit="return(validate_login());" method="POST" name="myForm">

            <div class="form-outline my-4">
                <label class="form-label">Adres e-mail</label>
                <input type="email" class="form-control" name="Email" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label">Hasło</label>
                <input type="password" class="form-control" name="Pass" />
            </div>

            <button type="submit" class="btn btn-primary mb-4 float-end">Zaloguj się</button>

            <div class="text-center">
                <p>Nie masz konta? <a href="register.php">Załóż konto</a>
                </p>
            </div>
        </form>
    </div>
    <div class="col"></div>
</div>
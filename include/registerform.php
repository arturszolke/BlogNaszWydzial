<div class="row">
    <div class="col"></div>
    <div class="col-9 col-sm-8 col-md-7">
        <form action="include/action_register.php" onsubmit="return(validate_register());" method="POST" name="myForm">
            <div class="row my-4">
                <div class="col">
                    <label class="form-label">Imię</label>
                    <input type="text" class="form-control" name="Name" />
                </div>
                <div class="col">
                    <label class="form-label">Nazwisko</label>
                    <input type=" text" class="form-control" name="Surname" />
                </div>
            </div>

            <div class="row my-4">
                <div class="col">
                    <label class="form-label">Adres email</label>
                    <input type="email" class="form-control" name="Email" />
                </div>
                <div class="col">
                    <label class="form-label">Potwierdź adres email</label>
                    <input type="email" class="form-control" name="EmailRe" />
                </div>
            </div>

            <div class="row my-4">
                <div class="col">
                    <label class="form-label">Hasło</label>
                    <input type="password" class="form-control" name="Pass" />
                </div>
                <div class="col">
                    <label class="form-label">Potwierdź hasło</label>
                    <input type="password" class="form-control" name="PassRe" />
                </div>
            </div>
    
            <button type="submit" class="btn btn-primary mb-4 float-end">Załóż konto</button>

            <div class="text-center">
                <p>Masz konto? <a href="login.php">Zaloguj się</a></p>
            </div>
        </form>
    </div>
    <div class="col"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <form action="include/action_contact_form.php" onsubmit="return(validate_contact());" method="post" name="myForm">

                <div class="form-outline my-4">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Imię</label>
                            <input type="text" class="form-control" name="Name" />
                        </div>
                        <div class="col">
                            <label class="form-label"">Nazwisko</label>
                            <input type=" text" class="form-control" name="Surname" />
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Adres e-mail</label>
                            <input type="email" class="form-control" name="Email" />
                        </div>
                        <div class="col"></div>
                    </div>

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label">Wiadomość</label>
                    <textarea class="form-control" rows="4" name="Content"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-4 float-end">Wyślij</button>
                
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
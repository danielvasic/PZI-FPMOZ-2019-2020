    <main class="login-form mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Prijavite se</div>
                        <div class="card-body">
                            <?php if (isset($greska)) { ?>
                            <div class="alert alert-danger">
                                <b>Nastala je pogreška:</b>
                                <p><?php echo $greska; ?></p>
                            </div>
                            <?php } ?>
                            <form action="index.php?kontroler=login&metoda=index" method="POST">
                                <div class="form-group row">
                                    <label for="korisnickoime" class="col-md-4 col-form-label text-md-right">Korisničko ime</label>
                                    <div class="col-md-6">
                                        <input type="text" id="korisnickoime" class="form-control" name="korisnickoime" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Lozinka</label>
                                    <div class="col-md-6">
                                        <input type="password" id="lozinka" class="form-control" name="lozinka" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Prijavite se
                                    </button>
                                </div>
                                <div class="form-group row">
                                    <p class="col-md-12 col-form-label text-md-left">Nemate račun? <a href="index.php?kontroler=registracija&metoda=index">Napravite ga.</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

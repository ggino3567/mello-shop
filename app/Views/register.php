<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
            <div class="container">
                <h2>Register</h2>
                <hr>
                <form action="/" class="" method="post">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control mb-3" name="email" id="email" value="<?= set_value('email')?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control mb-4" name="password" id="password" value="">
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <div class="col-12 col-sm-8 text-end">
                            <a href="/login">already have account yet?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
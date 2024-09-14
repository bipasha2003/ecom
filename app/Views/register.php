<?= $this->extend('public_layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <div class="card mt-5">
                <div class="card_body">
                    <h2>Create New Account</h2>
                    <form action="">
                       
                        <form>
  <div class="mb-2">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username"  placeholder="Enter username">

  </div>
  <div class="mb-2">
    <label for="email">Email id</label>
    <input type="email" class="form-control" name="email"  placeholder="Enter email">

  </div>
  <div class="mb-2">
    <label for="password">Password</label>
    <input type="text" class="form-control" name="password"  placeholder="Enter password">

  </div>
  <div class="mb-2">
    <label for="cpassword">Confirm Password</label>
    <input type="text" class="form-control" name="cpassword"  placeholder="Re-Enter password">

  </div>
  <button type="submit" name="register" class="btn btn-primary">Submit</button>
</form>
                        </div>
                    </form>

                    <a href="<?=base_url('login')?>" >Already have an account</a>
                
            </div>

        

        </div>
    </div>
</div>

<?= $this->endsection() ?>



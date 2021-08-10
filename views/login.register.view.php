<?php require "partials/top.php"; ?>

<nav class="navbar navbar-expand bg-light navbar-light">
  <a class="navbar-brand" href="index.php">Blogger</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Back to home page</a>
    </li>
  </ul>
</nav>

<div class="jumbotron text-center">
    <h4>Login/Register</h4>
</div>

<div class="container">
    <div class="row">

        <div class="col-6">
            <h5>Login</h5><br>
            <form action="login_register.php" method="POST">
                <input type="email" name="login_email" placeholder="email" class="form-control" required><br>
                <input type="password" name="login_password" placeholder="password" class="form-control" required><br>
                <button class="btn btn-info pr-5 pl-5" name="loginBtn">Log in</button>
            </form>
            <?php if(isset($_POST['loginBtn'])): ?>
                <?php if($user->successLogin): ?>
                    <?php header("Location: index.php"); ?>
                <?php else: ?>
                    <div class="alert-danger p-2 mt-2"><p>Dogodila se pogreška, pokušajte ponovo!</p></div>
                <?php endif ?>
            <?php endif ?>
        </div>

        <div class="col-6">
            <h5>Register</h5><br>
            <form action="login_register.php" method="POST">
                <input type="text" name="name" placeholder="name" class="form-control" required><br>
                <input type="email" name="register_email" placeholder="email" class="form-control" required><br>
                <input type="password" name="register_password" placeholder="password" class="form-control" required><br>
                <button class="btn btn-info pr-5 pl-5" name="registerBtn">Register</button>
            </form>
            <?php if(isset($_POST['registerBtn'])): ?>
                <?php if($user->successRegister): ?>
                    <div class="alert-success p-2 mt-2"><p>Uspješna registracija. Ulogujte se! </p></div>
                <?php else: ?>
                    <div class="alert-danger p-2 mt-2"><p>Dogodila se pogreška, pokušajte ponovo!</p></div>
                <?php endif ?>
            <?php endif ?>
        </div>
        

    </div>
</div>

<?php require "partials/bottom.php"; ?>
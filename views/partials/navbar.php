

<nav class="navbar navbar-expand bg-light navbar-light">
  <a class="navbar-brand" href="index.php">Blogger</a>
  <ul class="navbar-nav ml-auto">

      <?php if(isset($_SESSION['loggedUser'])): ?>
        <li class="nav-item nav-link"><?php echo "Zdravo ".$_SESSION['loggedUser'] -> name."!"; ?></li>
        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="add_post.php">Add post</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
      <?php else: ?>
        <li class="nav-item"><a class="nav-link" href="login_register.php">Login/Register</a></li>
      <?php endif ?>

  </ul>
</nav>
<?php require "partials/top.php"; ?>

<?php require "partials/navbar.php"; ?>

<div class="jumbotron text-center">
    <h4>Add new post</h4>
</div>

<div class="container">
<div class="row">
    <div class="col-8 offset-2">
        <form action="add_post.php" method="POST">
        
        
                <input type="text" name="title" placeholder="title" class="form-control" required><br>
                <textarea name="description" placeholder="description" cols="30" rows="10" class="form-control mb-3" required></textarea>
                <button class="btn btn-info pr-5 pl-5" name="postBtn">Create</button>
            
            <?php if(isset($_POST['postBtn'])): ?>
                <?php if($post->successPost): ?>
                    <div class="alert-success p-2 mt-2"><p>Objava kreirana. Idite na <a href="index.php">ovdje!</a></p></div>

                <?php else: ?>
                    <div class="alert-danger p-2 mt-2"><p>Dogodila se pogreška, pokušajte ponovo!</p></div>
                <?php endif ?>
            <?php endif ?>
      
        
        </form>
    </div>
</div>
</div>

<?php require "partials/bottom.php"; ?>
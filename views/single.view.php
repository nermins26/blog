<?php require "partials/top.php"; ?>

<?php require "partials/navbar.php"; ?>

<div class="jumbotron text-center">
    <h4><?php echo $singlePost -> title ?></h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="row">
                
                <div class="col-10">
                    <div class="card mb-5">
                        <div class="card-header bg-info"><?php echo $singlePost->title; ?>
                        <?php if(isset($_SESSION['loggedUser']) && ($singlePost->user_id == $_SESSION['loggedUser']->id)): ?>
                            <span><a href="delete_post.php?id=<?php echo $singlePost->id; ?>" class="btn btn-sm btn-danger float-right">Delete</a></span>
                        <?php endif ?>
                        
                    </div>
                        <div class="card-body"><?php echo $singlePost -> description; ?></div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm float-left"><?php echo $singlePost -> created_at; ?></button>
                        
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>


<?php require "partials/bottom.php"; ?>
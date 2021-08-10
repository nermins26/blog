<?php 

require "bootstrap.php";

$postId = $_GET['id'];

$singlePost = $post -> getSinglePost($postId);

//view

require "views/single.view.php";

?>
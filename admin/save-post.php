<?php

$conn = mysqli_connect('localhost', 'root', '', 'news-site');

if(isset($_FILES['fileToUpload'])) {
    $error = array();

    print_r($_FILES['fileToUpload']);
}

// $title = mysqli_real_escape_string($conn,$_POST['post_title']);
// $postdesc = mysqli_real_escape_string($conn,$_POST['postdesc']);
// $category = mysqli_real_escape_string($conn,$_POST['category']);
// $date = date("d M, Y");
// session_start();
// $author = $_SESSION['user_id'];


?>
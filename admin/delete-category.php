<?php
session_start();
if($_SESSION['role'] == '0'){
    header ('Location: http://localhost/news-template/admin/post.php');
}

?>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'news-site');
$category_id = $_GET['id'];

$sql = "DELETE FROM category WHERE category_id = {$category_id}";

if(mysqli_query($conn, $sql)){
    header ('Location: http://localhost/news-template/admin/category.php');
} else {echo "ERRRROOORRR";}
?>

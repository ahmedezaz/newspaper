<?php

if($_SESSION['role'] == '0'){
    header ('Location: http://localhost/news-template/admin/post.php');
}

?>
<?php

include 'config.php';
$user_id = $_GET['id'];
$cat_id = $_GET['catid'];

$sql1 = "SELECT * FROM post WHERE post_id = {$user_id}";
$result1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result1);

unlink("upload/".$row['post_img']);

//unlink use to delete from folder not from database

$sql = "DELETE FROM post WHERE post_id = {$user_id};";
$sql .= "UPDATE category SET post= post - 1 WHERE category_id = {$cat_id}";

if(mysqli_multi_query($conn, $sql)){
    header ('Location: http://localhost/news-template/admin/post.php');
}
?>

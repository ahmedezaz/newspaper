<?php

if($_SESSION['role'] == '0'){
    header ('Location: http://localhost/news-template/admin/post.php');
}

?>
<?php

include 'config.php';
$user_id = $_GET['id'];

$sql = "DELETE FROm user WHERE user_id = {$user_id}";

if(mysqli_query($conn, $sql)){
    header ('Location: http://localhost/news-template/admin/users.php');
}
?>

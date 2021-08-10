<?php
$conn = mysqli_connect('localhost', 'root', '', 'news-site');
if(empty($_FILES['new-image']['name'])){
    $file_name = $_POST['old_image'];
}else {
    $error = array();

    $file_name = $_FILES['new-image']['name'];
    $file_size = $_FILES['new-image']['size'];
    $file_temp = $_FILES['new-image']['tmp_name'];
    $file_type = $_FILES['new-image']['type'];
    $file_exp = explode('.',$file_name);
    $file_ext = end($file_exp);
    $extension = array('jpeg','jpg','png');

    if(in_array($file_ext,$extension) == false ){
        $error = 'File type should be jpeg, jpg or png';
    }elseif($file_size > 2097152){
        $error = 'File should be less than 2 MB';
    }
    
    if(empty($error) == true) {
        move_uploaded_file($file_temp, 'upload/'.$file_name);
    }else {
        print_r ($error);
        die();
    }  
}
    $sql = "UPDATE post SET title='{$_POST["post_title"]}', description='{$_POST["postdesc"]}',category='{$_POST["category"]}',post_img='{$file_name}'
    
            WHERE post_id = {$_POST["post_id"]}";

$result = mysqli_query($conn,$sql) or die ('SQL ERROR');

if($result){
   header ('Location: http://localhost/news-template/admin/post.php');
}else {
    echo "SOMETHING WENT WRONG";
    }


?>

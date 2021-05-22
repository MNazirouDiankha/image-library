<?php
if( isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn=mysqli_connect("localhost","felix","ninja@konoha#","projet");
    $req="delete from photo where id=$id";
    $result=mysqli_query($conn,$req);

    header("Location: homePage.php");
}
?>  
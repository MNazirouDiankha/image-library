<?php
$im=$_FILES["img"]["name"];
$dossier="image/";
$dest=$_FILES["img"]["tmp_name"];
$description=$_REQUEST["desc"];
$conn=mysqli_connect("localhost","felix","ninja@konoha#","projet");

if (!$conn) {
	echo "echec de connection à la base un ou plusieurs des éléments précèdement saisi est incorrect";
}
else {

	if(isset($im) && ($_FILES['img']['type']=='image/jpeg' || $_FILES['img']['type']=='image/jpg' || $_FILES['img']['type']=='image/png')){
		$req1="insert into photo (description,image) values ('$description','$im')";
		$result1=mysqli_query($conn,$req1);
		if(move_uploaded_file($dest,$dossier.$im)) {
				echo "telechargement réussi<br>";
				header("Location: homePage.php?message=true");
			} else echo "echec<br>";  
	} else {
		header("Location: form.php?erreur=true");
	}
**----
}
?>
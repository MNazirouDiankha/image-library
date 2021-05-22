<?php
    $conn=mysqli_connect("localhost","felix","ninja@konoha#","projet");
    $req="select * from photo";
	$result=mysqli_query($conn,$req);
	$tab= mysqli_fetch_all($result);

	for($i = 0; $i < count($tab); $i++) {
		$id = $tab[$i][0];
		$name = $tab[$i][2];
		$descrip = $tab[$i][1];
		echo "
		<figure>
			<form action='delete.php' method='GET' class='deleteButton'>
				<input type='hidden' value='$id' name='delete'>
				<input type='submit' value='X' style='border-top-left-radius: 20px; font-size:20px'	 class='Close' />
			</form>
			<img src='image/$name' width='400' height='400' class='IMG' style='border-radius:20px;margin-left:20px' >
			<figcaption style='display:none;' class='figcaption'>$descrip</figcaption>
		</figure>";
	}
?>
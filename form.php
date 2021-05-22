<html>
	<head>
		<title>projetphp</title>
		<link rel="stylesheet" href="form.css" />
		<style type="text/css">
		</style>
	</head>
	<body>
		<div class="imgDiv">
			<img src="pexels-oleg-magni-2033981.jpg" height='100%' width="100%"/>
		</div>
		<div class="main_div">
			<div class="title_div" ><h1>Add an Image</h1></div>
			<div class="form_div">
				<form action="upload.php" method="POST" enctype="multipart/form-data" class="form">
					<div><input type="text" name="desc" placeholder="Image description" class="input"></div>
					<div><input type="file" name="img" class="file" ></div>
					<div><input type="submit" name="envoyer" class="submitButton" value="Submit"></div>
					<?php 
						 if(isset($_GET['erreur']) && $_GET['erreur'] == 'true') {
						 	echo "<p style='color: red;'> le type de fichier n'est pas supporte</p>";
			 				}
					?>
				</form>
			</div>
		</div>
	</body>
</html>
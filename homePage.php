<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="homePage.css" />
    <title>Document</title>
</head>
<body>
<p style="display: none;" class="message"><?php if(isset($_GET['message'])) {
        echo "Image succefully added";
    } else {
        echo "false";
    } ?></p>
    <?php 
        
        include("Popup.php");
    
    ?>
    <h1 class="header">
        <div class="siteName">
        <div><img src="T.jpg" width='50px' height="60px" /></div><p>he<p>
        <div><img src="T.jpg" width='50px' height="60px" style="margin-left: ;" /></div><p>hree Musqueteers<p></div>
    </h1>
    <div id="barNav">
        <button class="bouton1"><a href="form.php" >Add an image</a></button>
        <button class="bouton"><a href="pagination.php?start=true" >Show page per page</a></button>
    </div>

    <div id="image" class="imgDiv" >
        <?php 
            include("request.php");
        ?> 
    </div>        
    <script src="script.js"></script>
</body>
</html>
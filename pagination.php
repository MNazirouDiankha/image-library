<?php session_start(); 
    if(!isset($_SESSION['beginning'])) {
        $_SESSION['beginning'] = 0;
    }
    if(!isset($_SESSION['Blue_Case'])) {
        $_SESSION['Blue_Case'] = 1;
    }
    if(!isset($_SESSION['ending'])) {
        $_SESSION['ending'] = 3;
    }
    if(!isset($_SESSION['n'])) {
        $_SESSION['n'] = 0;
    }
    if($_GET['start'] == 'true') {
        $_SESSION['beginning'] = 0;
        $_SESSION['ending'] = 3;
        $_SESSION['Blue_Case'] = 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="homePage.css" />
    <title>Document</title>
</head>
<body>
<?php 
        
        include("Popup.php");
    
    ?>
    <h1 class="header">Showing page per page</h1>
    
    <div id="barNav">
        <button class="bouton1"><a href="form.php" >Add an image</a></button>
        <button class="bouton"><a href="homePage.php">Show all</a></button>
    </div>

    <div id="image" class="imgDiv">
    
    <?php
            $conn=mysqli_connect("localhost","felix","ninja@konoha#","projet");
            $req="select * from photo";
            $result=mysqli_query($conn,$req);
            $tab= mysqli_fetch_all($result);
            for($i = $_SESSION['beginning']; $i<$_SESSION['ending']; $i++) {
                $id = $tab[$i][0];
                $name = $tab[$i][2];
                $descrip = $tab[$i][1];
                echo "
                <figure>
                    <form action='delete.php' method='GET' class='deleteButton'>
                        <input type='hidden' value='$id' name='delete'>
                        <input type='submit' value='X'  style='border-top-left-radius: 20px; font-size:20px' class='Close'/>
                    </form>
                    
                    <img src='image/$name' width='400' height='400' class='IMG' style='border-radius:20px;margin-left:20px'>
                    <figcaption style='display:none;' class='figcaption'>$descrip</figcaption>
                </figure>";
            }

            function Button ($color, $value) {
                 if($value == '<<' || $value == '>>') {
                    echo "<form action='PpP.php' method='POST'>
                    <input type='submit' value='$value' name='caseValue' style='font-size:20px'/>
                </form>";
                 } else {
                    echo "<form action='PpP.php' method='POST'>
                    <input type='submit' value='$value' name='caseNum' style='background:$color;font-size:20px'/>
                </form>";
                 }
            }
    ?>
    </div>

    <div class="pagBar">
        <?php 
            $_SESSION['n'] = count($tab);
            if($_SESSION['Blue_Case'] != 1) {
                Button('', '<<');
            }
            for($i = 1; $i <= ceil ($_SESSION['n']/3); $i++) {
                if($i == $_SESSION['Blue_Case']) {
                    Button('blue', $i);
                } else {
                    Button('', $i);
                }
            }
            if($_SESSION['Blue_Case'] != ceil ($_SESSION['n']/3)) {
                Button('', '>>');
            }

        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>
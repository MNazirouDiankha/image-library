<?php 
session_start();
if(isset($_POST['caseNum'])) {
    $_SESSION['Blue_Case'] = $_SESSION['Blue_Case'] + ($_POST['caseNum'] - $_SESSION['Blue_Case']);
} else if(isset($_POST['caseValue'])) {
    if($_POST['caseValue'] == '<<') {
        $_SESSION['Blue_Case']--;    
    } else if($_POST['caseValue'] == '>>') {
        $_SESSION['Blue_Case']++;
    }
    
    if($_SESSION['Blue_Case'] < 1) {
        $_SESSION['Blue_Case'] = 1;
    }
    if($_SESSION['Blue_Case'] > ceil($_SESSION['n']/3)) {
        $_SESSION['Blue_Case'] = ceil($_SESSION['n']/3);
    }
}
$_SESSION['ending'] = $_SESSION['Blue_Case'] * 3;
$_SESSION['beginning'] = $_SESSION['ending'] - 3;

if($_SESSION['ending'] > $_SESSION['n']) {
    $_SESSION['ending'] = $_SESSION['n'];
}
header('Location: pagination.php');

?>
<?php
ob_start();
session_start();
session_unset();
session_destroy();
if(isset($_GET['idleTimer']))
    header('Location: index.php?idleTimer='.$_GET['idleTimer']);
else
    header('Location: index.php');
?>
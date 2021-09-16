<?php

    session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/css.css">
    <title>LE sith</title>
</head>

<?php
    if(isset($_SESSION["login"])){
        echo "bonjour";
    }else{ 
?>

<?php
}
?>

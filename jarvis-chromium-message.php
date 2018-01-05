<!DOCTYPE html>
<?php
/**
Page du module d'affichage qui permet a jarvis d'afficher des sortie sur un ecrean
*/

if(isset($_GET['message']))
    $mess = $_GET['message'];
else
	$mess = " ";
?>


<html>
  <head>
    <title>jarvis-message</title>
    <meta name="viewport" content="width=0.5, initial-scale=0.5">
    <style>
    	body{
            height: 50%;
            width: 50%;
            padding-top: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
    </style>
  </head>
  <body>
    <h1><?php echo "$mess";?></h1>
    
  </body>
</html>

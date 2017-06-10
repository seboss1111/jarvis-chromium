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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    	body{
            height: 100%;
            width: 100%;
            padding-top: 15%;
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
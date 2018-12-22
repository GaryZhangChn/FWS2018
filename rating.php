<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="basic.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Gary's Porfolio</title>
		
		<script type="text/javascript" src="jscode.js"></script>
    </head>

		<style>
		.section{
			background: darkgray;
		}
		</style>
    <body>
        <?php
            $val=htmlspecialchars($_POST["RVal"]);
            if ($val>= 0 && $val <= 5) {
                echo 'Seems you do not like this page, any advices you can provide?';
            }
            elseif ($val <= 10 && $val > 5){
                echo 'You look satisfied with this page, thank you!';
            }
            else {
                echo 'Input is not valid';
            }
        ?>
    </body>
    </html>
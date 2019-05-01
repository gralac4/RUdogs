<!DOCTYPE html>
<html lang="en-US">
        <head>
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        </head>
        <body>
                <div class="parallax"></div>
                <div class="header">
                        <div class="headerWrapper">
                                <img src="doggo.png" alt="Where RU Logo">
                                Where RU Dogs?
                        </div>
                </div>

                <div class="buttonBar">
                        <div class="buttonBarWrapper">
                                <button class="button" onclick="location.href = './home1.php?page=logADog';" id="logDog">Log a Dog!</button>
                                <button class="button" onclick="location.href = './home1.php?page=findAFloof';" id="findFloof">Find a Floof!</button>
                        </div>
                </div>
		<div class="upperWrapper">
			<?php
				switch($_GET['page']){
					case 'logADog':
						include 'logADog.php';
						break;
					case 'findAFloof';
						include 'findAFloof.php';
						break;
					default:
						include 'findAFloof.php';
						break;
				}
                        ?>
                </div>

        </body>
</html>

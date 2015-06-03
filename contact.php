<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title></title>
</head>
<body>
	<div id="stick">
		<div id="four" class="col-xs-4">
			<h1 id="at">Axel Tanner</h1>
		</div>
        <div id="navigation" class="col-xs-8">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="cmon" class="col-xs-8">
        <?php
             // require the config file to get to the $path variable
            require_once(__DIR__ . "../model/config.php");
    
        ?>

        <div id="container1">

        <h1 id="coninfo">Contact Information</h1>

        <!-- form takes in information and send it to the table -->
        <form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
        <div>
             <!-- label display in front of the text box -->
            <label for="first">First Name: </label>
            <!-- input box occupied only on one line -->
            <input type="text" name="first" />
        </div>
        <div>
            <!-- label display in front of the text box -->
            <label for="last">Last Name: </label>
            <!-- input box occupied only on one line -->
            <input type="text" name="last" />
        </div>
        <div>
            <!-- label display in front of the text box -->
            <label for="email">Email: </label>
            <!-- input box occupied only on one line -->
            <input type="text" name="email" />
        </div>
    
        <div>
            <!-- another box label post -->
            <label for="post">Post: </label>
        
            <!-- text area allows to type a lot a text and span many lines   -->
            <!-- text area can show on multiple lines and can be expanded -->
            <textarea name="post"></textarea>
        </div>
        
        <div>
            <!-- create a button called submit -->
            <button type="submit">Submit</button>
        </div>
        </form>
    </div>
</div>
</body>
</html>

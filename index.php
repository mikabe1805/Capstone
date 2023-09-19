<?php
	$h1_size = "42px";
	$h1_color = "blue";
	$stylesheet_url = "<css>style.css";
?>
<!doctype html>
<html>
    <head>
    	<?php
    	echo "<style>
            font-size: {$h1_size}};
        </style>"
        ?>
        <?php
        	$url = "<css>style.css";
        	echo "<link rel='stylesheet' href='{$stylesheet_url}'>";
        ?>
        <?php echo file_get_contents("html/header.html"); ?>
    </head>
    <body>
        <h1 <?php echo "style='color:blue'" ?>>Hello, world!</h1>
        <?php echo file_get_contents("html/body.html"); ?>
    </body>
    <footer>
    <?php echo file_get_contents("html/footer.html"); ?>
</footer>
</html>
<p>Copyright &copy; Mika Be Abi Pyatski and Christina Drachuk <?php echo date("Y"); ?></p>
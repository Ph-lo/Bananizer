<?php include 'functions_lib.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>To Banana</title>
</head>
<body>
    <?php include 'head.php'; ?>
    <header>
        <div>
            <a href="index.php">mass</a>
        </div>
        <div>
            <a href="length.php">length</a>
        </div>
        <div id="current_a">
            <a href="volume.php">volume</a>
        </div>
        <div>
            <a href="area.php">area</a>
        </div>
    </header>
    <section id="main_block">
        <form method="POST" action="volume.php">
            <input id="entered_input" type="text" name="volume" placeholder="volume.." />
            <select id="chosen_unit" name="volume_unit">
                <option value="ml">ml</option>
                <option value="cl">cl</option>
                <option value="L">L</option>
                <option value="mcube">m3</option>
            </select>
            <input id="submit" type="submit" value="convert" />
        </form>
        <?php

            if(isset($_POST['volume']) && is_numeric($_POST['volume'])) {
            
                $chosen_unit = $_POST['volume_unit'];
                $entered_volume = $_POST['volume'];
        ?>
        <div id="result">
            <p><?php echo $entered_volume.'&nbsp;'.$chosen_unit; ?> = <?php echo volumeToBanana($entered_volume); ?></p>
        </div>
        <?php
            }
        ?>
    </section>
</body>
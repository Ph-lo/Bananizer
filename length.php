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
        <div id="current_a">
            <a href="length.php">length</a>
        </div>
        <div>
            <a href="volume.php">volume</a>
        </div>
        <div>
            <a href="area.php">area</a>
        </div>
    </header>
    <section id="main_block">
        <form method="POST" action="length.php">
            <input id="entered_input" type="text" name="height" placeholder="height.." />
            <select id="chosen_unit" name="height_unit">
                <option value="cm">cm</option>
                <option value="m">m</option>
                <option value="km">km</option>
            </select>
            <input id="submit" type="submit" value="convert" />
        </form>
        <?php
        
            if(isset($_POST['height']) && is_numeric($_POST['height'])) {
            
                $chosen_unit = $_POST['height_unit'];
                $entered_height = $_POST['height'];
        ?>
        <div id="result">
            <p><?php echo $entered_height.'&nbsp;'.$chosen_unit; ?> = <?php echo heightToBanana($entered_height); ?></p>
        </div>
        <?php
            }
        ?>
    </section>
</body>
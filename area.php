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
        <div>
            <a href="volume.php">volume</a>
        </div>
        <div id="current_al">
            <a href="area.php">area</a>
        </div>
    </header>
    <div id="border"></div>
    <section id="main_block">
        <form method="POST" action="area.php">
            <input id="entered_input" type="text" name="area" placeholder="surface area.." />
            <select id="chosen_unit" name="area_unit">
                <option value="cm2">cm²</option>
                <option value="m2">m²</option>
                <option value="are">a</option>
                <option value="hectare">ha</option>
                <option value="km2">km²</option>
            </select>
            <input id="submit" type="submit" value="convert" />
        </form>
        <?php

            if(isset($_POST['area']) && is_numeric($_POST['area'])) {
            
                $chosen_unit = $_POST['area_unit'];
                $entered_area = $_POST['area'];
        ?>
        <div id="result">
            <p><?php echo $entered_area.'&nbsp;'.$chosen_unit; ?> = <?php echo areaToBanana($entered_area); ?></p>
        </div>
        <?php
            }
        ?>
    </section>
</body>
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
        <div id="current_af">
            <a href="index.php">mass</a>
        </div>
        <div>
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
        <form method="POST" action="index.php">
            <input id="entered_input" type="text" name="weight" placeholder="weight.." />
            <select id="chosen_unit" name="weight_unit">
                <option value="g">g</option>
                <option value="kg">kg</option>
                <option value="t">t</option>
            </select>
            <input id="submit" type="submit" value="convert" />
        </form>
        <?php
            if(isset($_POST['weight']) && is_numeric($_POST['weight'])) {
                
                $chosen_unit = $_POST['weight_unit'];
                $entered_weight = $_POST['weight'];
            
        ?>
        <div id="result">
            <p><?php echo $entered_weight.'&nbsp;'.$chosen_unit; ?> = <?php echo weightToBanana($entered_weight); ?></p>
        </div>
        <?php
            }
        ?>
    </section>
</body>
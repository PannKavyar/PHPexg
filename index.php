<?php
$display_name='PP Holigan';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>PHP Basics <?php echo $display_name ; ?> </title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
    <div id="wrap">
        <section class="sidebar text-center">
            <div class="avatar">
                <img src="img/logo.png" alt="Alt For Image">
            </div>
            <h1> <?php echo $display_name ; ?></h1>
            <p>
                Contact:<br/>
                <a href="mailto:">Email</a>
            </p>
            <hr/>
            <ul class="social">
                <li><a href="https://twitter.com/your_twitter_username"><span class="icon twitter"></span></a> </li>
            </ul>
            <hr/>
            <p>Today: D, d M Y</p>
        </section>
        <section class="main">
            <h1>My First PHP Page</h1>
            <h2>Unit Conversation</h2>
                <?php include 'inc/units.php';  ?>
            <hr/>
            <h2>Daily Exercise</h2>
                <?php include 'inc/exercise.php'; ?>

        </section>

    </div>
    <section class="footer text-center">
        &copy;
        <?php 
        echo date('Y'); 
        echo " " . $display_name . ". " ; 
        //last modified eg. Today is Aug 29 2023,show this time
    echo "This page was Last modified on " 
    . date("d F Y h:i:s ",getlastmod()); ?>
    </section>
</body>
</html>
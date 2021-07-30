<?php 
    $title = "While Loop";
    include 'includes/header.php' 
?>
    <h1>While Loop</h1>
    <?php
        $grade=0;
        while($grade < 10){
            echo '<p>I AM LESS THEN 10</p>';
            $grade++;
        }
        echo 'EXIT LOOP';
    ?>

    <h1>DO WHILE Loop</h1>
    <?php
    $grade = 0;
    do{
        echo'<p>I AM WHILE LOOP</p>';
        $grade++;
    }while($grade < 10);
    ?>
<?php
    require 'includes/footer.php'
?>
<?php 
    $title = "Array";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php
        $num = 5;
        $number = array(1,2,3,4,5,6,7,8,9,10,14,5,7,78,3,33,7,8,4,33,2,6,78,);
        echo $number[5];

        echo "<p>$number[9]</p>";

        $size = count($number);
        echo "<p>Array number is size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$number[$count]</p>";
        }
    ?>
<?php
    require 'includes/footer.php'
?>
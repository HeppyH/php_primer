<?php
    $title = "If State Statement";
    include 'includes/header.php' 
?>
    <h1>If State Statement</h1>
    <?php
    echo '<h2> If Statement </h2>';
    $grade = 40;
    if($grade >= 50){
        echo '<h3 style="color: green"> YOU HAVE PASSED </h3>';
    }
    else{
        echo '<h3 style="color: red"> YOU HAVE FAILED </h3>';
    }
    ?>
<?php
    require 'includes/footer.php'
?>
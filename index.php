<?php 
    $title = "Index";
    include 'includes/header.php'
?>
    <?php
        echo 'Hello';
        echo '<br/>';
        echo 'Hello2';
        echo '<br/>';

        $name = 'Trevoir Williams';
        $age = 31;
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';
        echo '<h1>My Name Is: '.$name.' </h1>';
    ?>
<button type="button" class="btn btn-dark">CLICK ME!</button>
<button type="button" class="btn btn-primary">CLICK ME!</button>
<button type="button" class="btn btn-success">CLICK ME!</button>
<?php
    require 'includes/footer.php'
?>
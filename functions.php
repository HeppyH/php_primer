<?php
    $title = "Function";
    include 'includes/header.php' 
?>
    <h1>Function</h1>
    <?php
        function writeMessage(){
            echo "You are really nice person, Have a nice time! </br>";
        }
        writeMessage();

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is: $sum </br>";
        }

        function changeNum($num){
            $num = $num + 10;
        }
      
        $num = 500;
        addFunction(10, 20);
        addFunction(10, $num);
        addFunction(10, 50);

        changeNum($num);
        echo $num . '</br>';
    ?>
<?php
    require 'includes/footer.php'
?>
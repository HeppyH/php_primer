<?php
    $title = "Date Manipulation";
    include 'includes/header.php' 
?>
<h1>Date and Time Manipulation</h1>
<?php
      $datenow = getdate();
      echo "Today's date: </br>";
      echo $datenow['mday'] . '</br>';
      echo $datenow['mon'] . '</br>';
      echo $datenow['year'] . '</br>';

      echo "Today's Date: " . $datenow['mon'] . '/' . $datenow['mday'] . '/' . $datenow['year'];

      echo time() . '</br>';

      print date("m/d/y G.i:s</br>", time()) . '</br>';

    ?>
<?php
    require 'includes/footer.php'
?>
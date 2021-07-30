<?php 
  $title = "String Manipulation";
  include 'includes/header.php' 
?>
    <h1>PHP String Manipulation</h1>
    <?php
      $phrase1 = "student who come late";
      $phrase2 = "in class, stand with rock";
      $name = "trevoir william";
      echo $phrase1 . ", name Tiffany, ". $phrase2;
      echo '</br>';
      echo '<hr/>';

      echo 'Uppercase first letter: ' . ucfirst($name).'</br>';
      echo 'Uppercase first letter of eac word: ' . ucwords($name).'</br>';
      echo 'Upper case: ' . strtoupper($name).'</br>';
      echo 'Lower case: ' . strtolower("THIS ALL UPPER CASE").'</br>';
      echo '<hr/>';
      echo 'Repeat String: ' . str_repeat('a',10) . '</br>';
      echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a',10)) . '</br>';
      echo 'Get a Substring: ' . substr($name, 3, 5). '</br>';
      echo 'Get position of string: ' . strpos($name, 'e'). '</br>';
      echo 'Find Character "R": ' . strchr($name, 'R').'</br>';
      echo 'Find Character "r": ' . strchr($name, 'r').'</br>';
      echo 'Find Character "s": ' . strchr($name, 's').'</br>';
      echo 'Find Character "v": ' . strchr($name, 'v').'</br>';

      echo 'Find Length of String: ' . strlen($name) . '</br>';

      echo 'Without Trim: '. "A" . " B C D " . "E" . '</br>';

      echo 'Trim space on both side: '. "A" . trim(" B C D ") . "E" . '</br>';
      echo 'Trim space to the left: '. "A" . ltrim(" B C D ") . "E" . '</br>';
      echo 'Trim space to the right: '. "A" . rtrim(" B C D ") . "E" . '</br>';

      echo 'Replace string with another: '. str_replace("stand", "sit", $phrase2) . '</br>';

    ?>
<?php
    require 'includes/footer.php'
?>
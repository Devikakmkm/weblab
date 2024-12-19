<!DOCTYPE html>
<html>
<body>
  <?php
  $states = "Mississippi Alabama Texas Massachusetts Kansas";
  $b = explode(' ', $states);

  echo "<br>Original array:<br>";
  foreach ($b as $i => $value) {
      echo "states[$i] = $value<br>";
  }

  $d = []; // Initialize $d array for storing results

  foreach ($b as $c) {
      $n = strlen($c);
      if ($c[$n - 1] == 's' && $c[$n - 2] == 'a' && $c[$n - 3] == 'x') {
          $d[0] = $c; // Texas
      }
      if ($c[0] == 'K' && $c[$n - 1] == 's') {
          $d[1] = $c; // Kansas
      }
      if ($c[0] == 'M' && $c[$n - 1] == 's') {
          $d[2] = $c; // Mississippi
      }
      if ($c[$n - 1] == 'a') {
          $d[3] = $c; // Alabama or Massachusetts
      }
  }

  echo "<br>Resultant array:<br>";
  for ($i = 0; $i < count($d); $i++) {
      echo "stateslist[$i] = $d[$i]<br>";
  }
  ?>
</body>
</html>

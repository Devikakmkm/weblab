<?php
    echo "<h1>REFRESH PAGE</h1>";

    $file = 'count.txt';


    // Read the current count from the file
    $c = file_get_contents($file);
    file_put_contents($file, $c++);

    // Increment the count
  //  $c = $c + 1;

    // Save the new count back to the file


    // Display the number of users visited
    echo "The number of users visited: " . $c;
?>

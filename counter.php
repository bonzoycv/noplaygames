     <?php
     $file = 'counter.txt';

     // Check if the file exists, if not, create it and initialize with 0
     if (!file_exists($file)) {
         file_put_contents($file, '0');
     }

     // Read the current count
     $count = (int)file_get_contents($file);

     // Increment the count
     $count++;

     // Write the new count back to the file
     file_put_contents($file, $count);

     // Optionally, display the count
     echo "Visits: " . $count;
     ?>

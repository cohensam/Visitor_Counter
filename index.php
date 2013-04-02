<html>
<?php echo 'Number of Visitors Before You: ';?>
<head>
   <title>CIS 191: Project 3</title>
   </head>
  <body>
 <?php
    $output = null;
    exec("python readNumber.py", $output, $return);
    print_r($output[0]);
    echo " <br><br>"?>
<?php exec("python changeNumber.py"); ?>
<?php echo 'Dates and Times People Have Visited Before You: ';?>
<?php $output = null;
    exec("python times.py", $output, $return);
    echo " <br><br>";
      foreach ($output as &$value) {
      echo ($value);
      echo " <br><br>";
    }
    unset($value)?>
 </body>
 </html>

<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php require('logic.php'); ?>

<!DOCTYPE html>
<html>
  <?php include('header.php'); ?>
  
  <body>
    <?php include('content.php'); ?>
    
  </body>
</html>
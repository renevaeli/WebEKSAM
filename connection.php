<?php
  $con = mysqli_connect("localhost", "test", "t3st3r123", "test") or die("Database connection error. Sorry...");
  mysqli_query($con, "SET CHARACTER SET UTF8") or die("Can't get DB to UTF8 - ".mysqli_error($con));
?>

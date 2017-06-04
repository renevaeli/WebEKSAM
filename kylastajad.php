<?php
  require "connection.php";

  //receive new visitor name and visit time
  //get number of visitors and last visit time from db
  //echo them back
  //add new visitor name and visit time to the table

  $visitor = !empty($_POST['visitor']) ? $_POST['visitor'] : '';
  $newVisitTime = !empty($_POST['visitTime']) ? $_POST['visitTime'] : '';
  //echo " PHP visitor: $visitor, visitTime: $newVisitTime";

  $query = mysqli_query($con, "SELECT `id`, `visitor`, `visitTime` FROM `10163416_EKSAM` ORDER BY `id` DESC LIMIT 1");
  $fetch = mysqli_fetch_assoc($query);

  $visitorCount = $fetch['id'] + 1;
  //echo " PHP count: $visitorCount";

  $lastVisitTime = $fetch['visitTime'];
  //echo " PHP lastVisit: $lastVisitTime";

  $lastVisitTime = date("d/m/Y H:i:s", $lastVisitTime/1000);
  //echo " PHP lastVisit formatted: $lastVisitTime";

  $myArray = array("visitorCount"=>"$visitorCount", "visitTime"=>" $lastVisitTime");
  //echo "$myArray";

  $myJSONString = json_encode($myArray);
  echo "$myJSONString";


  mysqli_query($con, "INSERT INTO `10163416_EKSAM`(`visitor`, `visitTime`) VALUES ('$visitor','$newVisitTime')");

?>

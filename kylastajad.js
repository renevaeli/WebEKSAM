$(document).ready(function() {
  //alert("js loaded");

  var visitor = "anonymous";
  var visitTime = Date.now();
  //alert("visitor " + visitor + "visitTime" + visitTime);

  var data = "visitor=" + visitor + "&visitTime=" + visitTime;
  //alert(data);

  $.ajax({
    type: "POST",
    url: "kylastajad.php",
    data: data,
    success: function(data) {
      //alert(data);
      var obj = JSON.parse(data);
      //alert(obj);
      $("#visitorCount").html(obj.visitorCount);
      $("#lastVisitTime").html(obj.visitTime);

    }
  });

  //see pane serverisse




});

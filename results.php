<?php 
  $from = $_GET["from"];
  $destination = $_GET["destination"];
  if (!($from || $destination)) {
    header('Location: index.php');
  }
?>
    <?php include 'header.php';?>
    <div class="container-fluid banner" id="banner1">
    </div>
    <h3>Schedules for <span id="search-query">
    <?php
      echo $from." to ".$destination; 
    ?>
      </span>
    </h3>
    <div class="container-fluid table-responsive">
      <table id="result" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Company</th>
            <th>Departure time</th>
            <th>Date</th>
            <th>Arrival time</th>
            <th>From</th>
            <th>Destination</th>
            <th>Price (&#x20a6;)</th>
            <th>Car pickup</th>
            <th>Bus Details</th>
            <th></th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
    <link rel="stylesheet" type="text/css" href="media/css/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.min.css"> -->
    <script type="text/javascript" src="media/js/jquery.dataTables.min.js"></script>
    <!-- <script type="text/javascript" src="script/app.js"></script> -->
    <script type="text/javascript">
      $(document).ready(function () { 
        function fromScript()
        {
          return "";
        }

        $("#result").DataTable({
          /*"ordering" : false,
          "processing" : true,
          "serverSide" : true,*/
          "ajax" : "script/schedules.php?destination=<?php echo $destination; ?>&from=<?php echo $from; ?>",
          "columns" : [
            {"data": "company"},
            {"data": "date"},
            {"data": "departure"},
            {"data": "arrival"},
            {
              "data": null,
              "render": function(data,type,full){
                return full['from'] +" - "+ full['from_park'];
              }
            },
            {
              "data": null,
              "render": function(data,type,full){
                return full['to'] +" - "+ full['to_park'];
              }
            },
            {"data": "price"},
            {"data": "pickup"},
            {"data": "bus_details"},
            {
              "data": null,
              "render": function(data,type,full){
                return "<a class='btn btn-danger'>Book Now</a>";
              }
            },
          ]
        });
      });
    </script>  
  </body>
</html>
<!DOCTYPE>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
  </head>
  <body>
    <div class="h3">Schedules</div>
    <div class="col-xs-10 col-md-6">
      <div class="h4">Add to schedule</div>
      <form method="post" action="<?php  echo $_SERVER['PHP_SELF'] ?>">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Company</span><input type="text" class="form-control" name="company" required="required">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Date</span><input type="date" class="form-control" name="date" required="required">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">From</span><input type="text" class="form-control" name="from" required="required">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">To</span><input type="text" class="form-control" name="to" required="required">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">From park</span><input type="text" class="form-control" name="from_park" required="required">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">To park</span><input type="text" class="form-control" name="to_park" required="required">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Departure time</span><input type="time" class="form-control" name="departure" required="required">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Arrival time</span><input type="time" class="form-control" name="arrival" required="required">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Bus Details</span><input type="text" class="form-control" name="bus_details" required="required">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Pick Up?</span><select class="form-control" name="pickup" required="required">
              <option value="yes">Yes</option>
              <option value="no">No</option>
          </select>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Price</span><input type="number" class="form-control" name="price" required="required">
          </div>
        </div>
        <input type="submit">
      </form>
    </div>
    <span style="display: none;" id="new-schedule">
    	<?php
		  	if ($_SERVER["REQUEST_METHOD"]) {
          if (isset($_POST["new_schedules"])) {
            $schedules = $_POST["new_schedules"];
            file_put_contents("schedules.json", $schedules);
            echo "<script> alert('new schedule posted') </script>";
          }
          elseif (isset($_POST["company"])) {
  			  	$company = $_POST["company"];
  			    $date = date('d M Y', strtotime($_POST["date"]));
  			    $from = $_POST["from"];
  			    $to = $_POST["to"];
            $from_park = $_POST["from_park"];
            $to_park = $_POST["to_park"];
            $departure = $_POST["departure"];
            $arrival = $_POST["arrival"];
  			    $price = $_POST["price"];
  			    $bus_details = $_POST["bus_details"];
            $pickup = $_POST["pickup"];
  				  
            $content = file_get_contents("schedules.json");
  				  $add = '{"company":"'.$company.'","date":"'.$date.'","from":"'.$from.'","to":"'.$to.'","from_park":"'.$from_park.'","to_park":"'.$to_park.'","arrival":"'.$arrival.'","departure":"'.$departure.'","price":"'.$price.'","pickup":"'.$pickup.'","bus_details":"'.$bus_details.'"}';
            
            file_put_contents('schedules.json', str_replace("]", ",".$add."]", $content));
  		  		echo $add;
          }
		  	}
        else {
          echo "no server request";
        }
  		?>
  	</span>
    <div class="col-xs-12 col-md-6">
	    <div class="table-responsive">
	      <table class="table table-styled">
	        <thead>
	          <tr>
	            <th>Company</th>
              <th>Date</th>      
	            <th>From</th>
	            <th>To</th>
	            <th>From park</th>
	            <th>To park</th>
	            <th>Arrival</th>
	            <th>Departure</th>
	            <th>Price</th>
	            <th>Pick up</th>
	            <th>Bus Details</th>
              <th></th>
	          </tr>
	        </thead>
	        <tbody>
	          
	        </tbody>
	      </table>
	    </div>
	  </div>
      <div class="modal fade" role="dialog" id="my-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button data-dismiss="modal" aria-label="close" class="close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Delete this schedule?</h4>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this schedule? This action can't be undone</p>
            </div>
            <div class="modal-footer">
              <button id="del-schedule" data-dismiss="modal" class="btn btn-danger">Delete</button>
              <button data-dismiss="modal" class="btn btn-default">Keep</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="script/jquery.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        loadTable(); var schedues;

        //-----LOAD JSON AND DRAW TABLE------
        function loadTable() {
          $.getJSON("schedules.json",function(data){
            schedules = data;
            $("tbody").html("");
            $.each(schedules,function(index,val){
              var x="</td><td>";
              var y="</td>";
              $("tbody").append("<tr><td>"+val.company+x+val.date+x+val.from+x+val.to+
              x+val.from_park+x+val.to_park+x+val.arrival+x+val.departure+x+val.price+x+val.pickup+x+val.bus_details+x+
              '<button data-toggle="modal" class="btn btn-danger" data-target="#my-modal" data-index="'+index+'">Delete</button>'+y+"</tr>")
            })
          })
        }
        var button; var deleteIndex

        //-----ADDING TO SCHEDULE------
        $("form").submit(function(e){
          e.preventDefault();
          $.post("<?php echo $_SERVER['PHP_SELF'] ?>",$(this).serialize());
          //schedules.push(JSON.parse($("#new-schedule").text()));
          location.reload(true);
        })

        //------MODAL STUFF-----        
        $("#my-modal").on("show.bs.modal", function(e){
          button = $(e.relatedTarget);
          deleteIndex = button.data("index");   
        })

        //-----DELETING FROM SCHEDULE------
        $("#del-schedule").click(function(e){
          alert(schedules.length);
          schedules.splice(deleteIndex,1);
          alert("You have deleted Schedule "+deleteIndex+ " , "+schedules.length+"schedules left" );
          $.post("<?php echo $_SERVER['PHP_SELF'] ?>",{new_schedules:JSON.stringify(schedules)});
          location.reload();
        })
      })
    </script>
  </body>
</html>
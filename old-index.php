<?php include 'header.php';?>
      <div class="container-fluid slide">
        <div class="col-sm-8 intro">
          <div class="jumbotron text-center">
            <h2>Welcome to Transporters</h2><hr>
            <p>Travel to your dream destination with ease, get price info from various transport companies </p>
          </div>
        </div>
        <div class="col-sm-4">
        <form class="form" target="_self" action="results.php" method="get">
          <h3 class="text-center">Come and Search here</h3>
          <div class="input-group">
          	<div class="input-group-addon">From</div>
            <select class="form-control" id="from" name="from" required placeholder="from">
              <option value="abuja">Abuja</option>
              <option value="bayelsa">Bayelsa</option>
              <option value="benue">Benue</option>
              <option value="borno">Borno</option>
              <option value="cross river">Cross River</option>
              <option value="delta">Delta</option>
              <option value="lagos">Lagos</option>
            </select>
          </div>
          <div class="input-group">
          	<div class="input-group-addon">To</div>
            <select class="form-control" id="destination" name="destination" required placeholder="Destination">
              <option value="abuja">Abuja</option>
              <option value="bayelsa">Bayelsa</option>
              <option value="benue">Benue</option>
              <option value="borno">Borno</option>
              <option value="cross river">Cross River</option>
              <option value="delta">Delta</option>
              <option value="lagos">Lagos</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success">Search Now</button>
          <div id="error"></div>
          </form>
        </div>
      </div>
      <hr>
      <div class="container-fluid table-responsive">
        <div class="h3">Featured Schedules</div>
        <table id="featured" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Company</th>
            <th>Date</th>
            <th>Departure time</th>
            <th>Arrival time</th>
            <th>From</th>
            <th>Destination</th>
            <th>Price (&#x20a6;)</th>
            <th>Car pickup</th>
            <th>Bus Details</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
	          <!-- <tr>
	            <td rowspan="3">Chisco Transport Company</td>
              <td>20 Dec 2016</td>
	            <td>08:00 am</td>
	            <td>06:00 pm</td>
	            <td>Lagos</td>
              <td>Abuja</td>
              <td>6000</td>
	            <td>Yes</td>
              <td>Economy, Marcopolo, 48-Seater</td>
	            <td><a class="btn btn-danger">Book Now</a></td>
	          </tr>
	          <tr>
              <td>20 Dec 2016</td>
	            <td>09:00 am</td>
	            <td>02:00 pm</td>
	            <td>Lagos</td>
	            <td>Edo</td>
	            <td>4000</td>
              <td>Yes</td>
              <td>Economy, Hiace, 18-Seater</td>
              <td><a class="btn btn-danger">Book Now</a></td>
	          </tr>
	          <tr>
              <td>21 Dec 2016</td>
	            <td>06:30 am</td>
	            <td>09:00 am</td>
	            <td>Lagos</td>
	            <td>Osun</td>
	            <td>3000</td>
              <td>Yes</td>
              <td>Economy, Hiace, 18-Seater</td>
              <td><a class="btn btn-danger">Book Now</a></td>
            </tr>
	          <tr>
	            <td rowspan="2">God is Good Motors</td>
              <td>20 Dec 2016</td>
	            <td>08:00 am</td>
              <td>04:30 pm</td>
	            <td>Lagos</td>
	            <td>Rivers</td>
	            <td>5000</td>
              <td>Yes</td>
              <td>Economy, Hiace, 18-Seater</td>
              <td><a class="btn btn-danger">Book Now</a></td>
	          </tr>
	          <tr>
              <td>23 Dec 2016</td>
	            <td>09:00 am</td>
	            <td>01:00 pm</td>
	            <td>Edo</td>
	            <td>Lagos</td>
	            <td>4000</td>
              <td>No</td>
              <td>Executive, Hiace, 12-Seater</td>
              <td><a class="btn btn-danger">Book Now</a></td>
	          </tr> -->
          </tbody>
        </table>
      </div>
      <script type="text/javascript">
        $(document).ready(function(){
          table = $("#featured");
          tbody = $("tbody").eq(0);
          $("form").on({
            "submit" : function(e) {
              if($("#from").val() == $("#destination").val()){
                e.preventDefault();
                $("#error").html('<div style="padding :10px" class="alert alert-danger  alert-dismissible">You cannot select the same state<span data-dismiss="alert" class="close">&times;</span></div>')
              }
            }
          });  
          $.getJSON("featured.json", function(featured){
            feature = [];
            for(let list in featured) {
              tbody.append("<tr><td>"+ featured[list].company +"</td><td>" + featured[list].date +"</td><td>" + 
                featured[list].departure_time +"</td><td>" + featured[list].arrival_time +"</td><td>" + featured[list].from +"</td><td>" + featured[list].destination+ "</td><td>" + featured[list].price +
              "</td><td>" + featured[list].car_pickup + "</td><td>" + featured[list].bus_details + "</td><td><a class='btn btn-danger'>Book Now</a></td></tr>");
            }
          })
        })
          /*$("select").on({
            "change": function() {
              $_value = this.value;
              $_children = $("select").not(this).children("option");
              for(var y in $_children) {
                alert($_children[y].value);
                if ($_children[y].value.indexOf($_value) > 0) {
                  $_children[y].css({"display":"none"});
                }
                
              } 
            }
          });*/
      </script>
      <noscript>
        <link rel="stylesheet" type="text/css" href="styles/noscript.css">
      </noscript>
   		<script type="text/javascript" src="script/jquery.dataTables.min.js"></script>
    	<script type="text/javascript" src="script/app.js"></script>
    </body>
  </html>
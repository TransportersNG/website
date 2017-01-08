<!DOCTYPE html>
<html>
<head>
  <title>Transporters</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
  <link href="jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="styles/not-main.css">
  <script type="text/javascript" src="script/jquery.min.js"></script>
  <script type="text/javascript" src="script/bootstrap.min.js"></script>
  <script src="jquery-ui/jquery-ui.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
<div id="container">
  <div id="header">
    <div class="row wrapper">
      <div class="row head-text">
        <div class="pull-left" id="top-header">
          <img src="images/logo1.png" class="visible-xs" width="170px" height="auto">
          <img src="images/logo1.png" class="visible-sm visible-lg" width="300px" height="auto">
        </div>
        <div class="pull-right" id="login">
          <button class="btn btn-md"><span class="fa fa-lock"></span><span class="hidden-xs"> Log In</span></button>
        </div>
      </div>
      <div id="middle-header">
        <div class="story">
          <h3>Go Anywhere!</h3>
          <p>...get the lowest fares and book easily wherever you are</p>
        </div>
      </div>
    </div>
  </div>
  <div id="widget"> 
    <form class="form" action="results.php" method="post">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <div class="form-group loc">
            <label>FROM</label>
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-map-marker"></span>
              </span>
              <select class="form-control" id="from" name="from" required placeholder="From...">
                <option value="abuja">Abuja</option>
                <option value="bayelsa">Bayelsa</option>
                <option value="benue">Benue</option>
                <option value="borno">Borno</option>
                <option value="cross river">Cross River</option>
                <option value="delta">Delta</option>
                <option value="lagos">Lagos</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="form-group loc">
            <label>TO</label>
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-map-marker"></span>
              </span>
              <select class="form-control" id="to" name="to" required placeholder="To...">
                <option value="abuja">Abuja</option>
                <option value="bayelsa">Bayelsa</option>
                <option value="benue">Benue</option>
                <option value="borno">Borno</option>
                <option value="cross river">Cross River</option>
                <option value="delta">Delta</option>
                <option value="lagos">Lagos</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 loc">
          <div class="form-group">
            <label>DEPARTURE</label>
            <div class="input-group">
              <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
              <input type="text" placeholder="dd/mm/yyyy" class="datepicker form-control" name="departure">
            </div>
          </div>
        </div>

        <!-- <div class="col-xs-6 col-sm-2">
          <div class="form-group">
            <label>ARRIVAL DATE</label>
            <div class="input-group">
              <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
              <input type="date" class="disabled form-control" disabled="disabled" name="departure">
            </div>
          </div>
        </div> -->
      </div>

      <div class="row">
        <div class="d-down col-xs-12 col-sm-4" id="passengers" role="presentation"><i class="fa fa-male"></i><span>1 passenger</span><a class="pull-right toggle-form btn btn-sm btn-default" data-target="passenger-details" href="#" role="tab">CHANGE</a></div>
        <div class="d-down col-xs-12 col-sm-4" id="transport-mode" role="presentation"><i class="pull-left fa fa-bus"></i><span>Bus </span> <a href="#" class="pull-right toggle-form btn btn-sm btn-default" data-target="vehicle-details" role="tab">CHANGE</a></div>
        <div class="d-down col-xs-12 col-sm-4"><button type="submit" id="search" class="pull-right submit btn btn-md btn-danger"><b>Search</b></button></div>
      </div>
      <div class="tabc">
        <div class="ash tabp row" role="tabpanel" id="passenger-details">
          <div class="passenger col-xs-6 col-sm-3">
            <label>Select Age Group</label>
            <select name="passenger-type" class="form-control">
              <option value="child">Child (0 - 12)</option>
              <option value="adolescent">Adolescent (13 - 19)</option>
              <option value="adult">Adult (20 and above)</option>
            </select>
          </div>
          <div class="btn-holder col-xs-12"><button class="btn center-block add-passenger"><b>Add passengers</b></button></div>
        </div>
        <div class="ash tabp row" role="tabpanel" id="vehicle-details">
          <div class="col-xs-6 col-sm-3">
            <span class="pull-left fa fa-train"> </span> Train
            <div class="switch pull-left"><div> </div></div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <span class="pull-left fa fa-bus"> </span> Bus
            <div id="bus" class="switch switched pull-left"><div> </div></div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <span class="pull-left fa fa-plane"> </span>Air
            <div class="switch pull-left"><div> </div></div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <span class="pull-left fa fa-taxi"> </span> Ride Share
            <div class="switch pull-left"><div> </div></div>
          </div>
        </div>
      </div>
      <div class="row partners">
        <div class="col-sm-2 hidden-xs">Supported by</div>
        <div class="col-sm-2 col-xs-3">
          <img src="images/1.png">
        </div>
        <div class="col-sm-2 col-xs-3">
          <img src="images/default.png">
        </div>
        <div class="col-sm-2 col-xs-3">
          <img src="images/default.png">
        </div>
        <div class="col-sm-2 hidden-xs">
          <img src="images/default.png">
        </div>
        <div class="col-sm-2 hidden-xs"><i>and many more!</i></div>
          <div></div>
        </div>
      </div>
      <input type="text" class="hidden" name="no-of-passengers">
      <input type="text" class="hidden" name="mode-of-transport">
        <script type="text/javascript">
          var passenger = $(".passenger").eq(0)
          var clone = passenger.clone()
          var noOfPassengers = passenger.parent().children().length
          var newSpan = "<span onclick='del(this)' class='del'>&times;</span>"
          var addButton = $(".add-passenger").clone()
          clone = clone.append(newSpan)
          //Adding a passenger
          $(".add-passenger").click(function(e) {
            e.preventDefault()
            noOfPassengers = passenger.parent().children().length
            if (noOfPassengers  > 7) {
              alert("Is the whole community travelling? :-) ")
            }
            else {
              clone.clone().insertBefore($(this).parent())
              noOfPassengers > 1 ? ermm="passengers" : ermm="passenger"
              $(".d-down").eq(0).children("span").text(noOfPassengers + " " + ermm)
              computeNoOfPassengers()
            }
          })
          //Removing a passsenger
          function del(i) {
            $(i).parent().remove()
            noOfPassengers = passenger.parent().children().length-1
            noOfPassengers > 1 ? ermm="passengers" : ermm="passenger"
            $(".d-down").eq(0).children("span").text(noOfPassengers + " " + ermm)
            computeNoOfPassengers()
          }

          //Toggle that annoying switch
          /*$(".switch").click(function(e) {
            var modesOfTransport = $(".d-down").eq(1).children("span").text()
            var text = $(this).parent().text()
            $(this).toggleClass("switched")
            $(this).hasClass("switched") ?
             $(".d-down").eq(1).children("span").text(modesOfTransport + " " + text) : $(".d-down").eq(1).children("span").text(modesOfTransport.replace(text, ""));
          }) */

          //Getting the no of passengers to submit
          function computeNoOfPassengers() {
            $("[name=no-of-passengers]").val(parseInt($(".d-down").eq(0).children("span").text()))
          }
        </script>
      <div id="error"></div>
    </form>
  </div>
  <div id="main" class="container-fluid">
    <div class="talk col-xs-12 col-sm-3">
      <div class="image one"></div>
      <div class="text-center">All fares are reliable and transport companies are verified</div>
    </div>
    <div class="talk col-xs-12 col-sm-3">
      <div class="image two"></div>
      <div class="text-center">Get the best prices of fares from different transport companies</div>
    </div>
    <div class="talk col-xs-12 col-sm-3">
      <div class="image three"></div>
      <div class="text-center">For questions and complaints, our customer serevice is avialable 24/7</div>
    </div>
  </div>
  <div class="container-fluid table-responsive">
    <div class="h3">Featured Schedules</div>
    <table id="featured" class="table table-striped">
      <thead>
      <tr>
        <th>Company</th>
        <th>Departure</th>
        <th>From</th>
        <th>Destination</th>
        <th>Price (&#x20a6;)</th>
        <th>Bus Details</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
        <!--<tr>
          <td rowspan="3">Chisco Transport Company</td>
          <td>20 Dec 2016</td>
          <td>08:00 am</td>
          <td>06:00 pm</td>
          <td>Lagos</td>
          <td>Abuja</td>
          <td>6000</td>
          <td>Yes</td>
          <td>Economy, Marcopolo, 48-Seater</td>
          <td><a class="btn btn-sm btn-danger">Book Now</a></td>
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
          <td><a class="btn btn-sm btn-danger">Book Now</a></td>
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
          <td><a class="btn btn-sm btn-danger">Book Now</a></td>
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
          <td><a class="btn btn-sm btn-danger">Book Now</a></td>
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
          <td><a class="btn btn-sm btn-danger">Book Now</a></td>
        </tr> -->
      </tbody>
    </table>
  </div>
  <div id="footer">
    <div class="row">
      <h4 class="copyright col-xs-2 col-sm-3">
        &copy; 2017 Transporters 
      </h4>
      <div class="col-xs-10 col-sm-9">
        
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <h2>About Transporters</h2>
        <p>As a Brand</p>
      </div>
      <div class="col-sm-4">
        <h2>Get In Touch</h2>
        <address>
          <strong>Transporters</strong><br>
          294, Herbert Macaulay Way<br>
          Yaba. Lagos<br>
          +234 800 000 0000
        </address>
      </div>
      <div class="col-sm-4">
        <h2>Follow Us</h2>
        <div class="socialmedia">
            <i class="fa fa-facebook-official"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter-square"></i>
            <i class="fa fa-linkedin-square"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    table = $("#featured");
    tbody = $("tbody").eq(0);
    $("form").on({
      "submit" : function(e) {
        if($("#from").val() == $("#destination").val()){
          e.preventDefault();
          $("#error").html('<div style="margin-bottom : 15px; padding: 5px 30px" class="alert alert-danger alert-dismissible">You cannot select the same state<button data-dismiss="alert" class="close"><span>&times;</span></button></div>')
        }
      }
    });  
    $.getJSON("script/featured.json", function(featured){
      feature = [];
      for(let list in featured) {
        tbody.append("<tr><td>"+ featured[list].company + "</td><td>" + featured[list].departure_time +"</td><td>" +
         featured[list].from +"</td><td>" + featured[list].destination+ "</td><td>" + featured[list].price +
        "</td><td>" + featured[list].bus_details + "</td><td><a class='btn btn-sm btn-danger'>Book Now</a></td></tr>")
      }
    })
  })
  $('.toggle-form').click(function(e) {
    e.preventDefault();
    ref = this.dataset.target
    $(".tabp").not("#"+ref).hide()
    $("#"+ref).toggle()
    $(this).parent().toggleClass("ash")
    $(this).parent().siblings("*").removeClass("ash")
  })
  $(".datepicker").datepicker({
    dateFormat : "dd/mm/yy",
    minDate : 0
  });
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
  <link rel="stylesheet" type="text/css" href="noscript.css">
</noscript>
<script type="text/javascript" src="script/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="script/app.js"></script>
</body>
</html>
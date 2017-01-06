<?php
  
  $from = $_GET["from"];
  $destination = $_GET["destination"];

  $place = array(
    "CRV"=> array("CROSSRIVER-Calabar"),
    "DEL" => array("DELTA-Agbor","DELTA-Asaba","DELTA-Warri","DELTA-Ibusa"),
    "EDO" => array("EDO-Benin","EDO-Ebeles"),
    "LAG"=> array("lAGOS-Jibowu","LAGOS-Iyana-Ipaja"),
    "ENU" => array("ENUGU-Enugu"),
    "OND"=> array("ONDO-Akure"),
    "OSU"=> array("OSUN-Oshogbo"),
    "RIV"=> array("RIVERS-PortHarcourt"),
    );

  $company = array(
    "CHIS"=>"Chisco Transport Company",
    "EKEN"=>"Ekenedilichukwu Transport Company",
    "GIGM"=>"God is Good Motors",
    "TYSG"=>"The Young Shall Grow Motors",
    "ABCT"=>"ABC Transport PLC"
    );

  $schedules = array(
    array(
      "company" => $company["GIGM"],
      "date" => "25 Dec 2016",
      "from" => "lagos" ,
      "to" => "abuja",
      "from_park" => "jibowu" ,
      "to_park" => "nyanya" ,
      "arrival" => "14:00",
      "departure" => "08:00",
      "price" => "3000",
      "pickup" => "yes",
      "bus_details" => "Executive, Marcopolo, 48-Seater"
    ),
    array(
      "company" => $company["GIGM"],
      "date" => "25 Dec 2016",
      "from" => "benue",
      "to" => "lagos",
      "from_park" => "jibowu" ,
      "to_park" => "nyanya" ,
      "arrival" => "14:00",
      "departure" => "08:00",
      "price" => "3000",
      "pickup" => "yes",
      "bus_details" => "Executive, Hiace, 18-Seater",
    ),
    array(
      "company" => $company["CHIS"],
      "date" => "25 Dec 2016",
      "from" => "lagos",
      "to" => "cross river",
      "from_park" => "jibowu" ,
      "to_park" => "nyanya" ,
      "arrival" => "14:00",
      "departure" => "08:00",
      "price" => "3000",
      "pickup" => "no",
      "bus_details" => "First Class, Hiace, 12-Seater",
    ),
    array(
      "company" => $company["ABCT"],
      "date" => "25 Dec 2016",
      "from" => "lagos",
      "to" => "delta",
      "from_park" => "jibowu" ,
      "to_park" => "nyanya" ,
      "arrival" => "14:00",
      "departure" => "08:00",
      "price" => "3000",
      "pickup" => "yes",
      "bus_details" => "Economy, Hiace, 18-Seater"
    )
  );

  $filtered= array();
  foreach ($schedules as $schedule) {
    if ($schedule["from"]==$from && $schedule["to"]==$destination) $filtered[]=$schedule;
  }

  $send = array("draw"=>1,"recordsTotal"=>count($filtered),"recordsFiltered"=>count($filtered),"data"=>$filtered);
  echo json_encode($send);
?>
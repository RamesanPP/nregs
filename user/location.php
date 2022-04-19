<?php
$lat=$_GET['lat'];
$lng=$_GET['lng'];
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&sensor=false"></script>
    <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
		zoom: 16,
		center: new google.maps.LatLng('<?php echo $lat ?>', '<?php echo $lng ?>'),
		mapTypeId: 'roadmap'
	};
	var map = new google.maps.Map(document.getElementById('map'), mapOptions);

	var goldenGatePosition = {lat: <?php echo $lat ?>,lng: <?php echo $lng ?>};
	var marker = new google.maps.Marker({
			position: goldenGatePosition,
			map: map,
			title: 'Golden Gate Bridge'
			});

}
       
    </script>
    </head>
    <body>
        <div id="map" style="width: 100%; height: 500px"></div>
    </body>
</html>
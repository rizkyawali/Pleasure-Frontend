<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pleasure</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/hover_pack.css" rel="stylesheet">

<script src="js/hover_pack.js"></script>
 <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
    
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,
                
                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.6700, -73.9400), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [	{		featureType:'water',		stylers:[{color:'#74c9be'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#f2f2f2'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#444444'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using out element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);
        }
    </script>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#"></a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="about.php" accesskey="1" title="">About</a></li>
			<li class="active"><a href="product.php" accesskey="3" title="">Product</a></li>
			<li><a href="lookbook.php" accesskey="4" title="">Lookbook</a></li>
			<li><a href="contact.php" accesskey="5" title="">Contact</a></li>
		</ul>
	</div>
</div>

<div id="page" class="container">
	<div class="columns">

		<div class="image fit">
			<a class="b-link-fade b-animate-go" href="#"><img src="images/prod_1.jpg" alt="" />
				<div class="b-wrapper">
					  	<h4 class="b-from-left b-animate b-delay03">Playing</h4>
						<p class="b-from-right b-animate b-delay03">IDR. 155.000</p>
				</div>
			</a>
		</div>
	
		<div class="image fit">
			<a class="b-link-fade b-animate-go" href="#"><img src="images/9.jpg" alt="" />
				<div class="b-wrapper">
					  	<h4 class="b-from-left b-animate b-delay03">Skate Till Die</h4>
					  	<p class="b-from-right b-animate b-delay03">IDR. 155.000</p>
				</div>
			</a>
		</div>
	
		
	</div>	
</div>

<div id="copyright" class="container">
	<p>&copy; Pleasure All rights reserved. </p>
</div>
</body>
</html>

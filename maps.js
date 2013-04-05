var map;

function initialize() {

  var styles = [
    {
    featureType: 'road.highway',
    elementType: 'geometry',
    stylers: [
      { hue: '#f99e62' },
      { saturation: 60 },
      { lightness: 2 },
      { visibility: 'on' }
    ]
    },{
    featureType: 'road.arterial',
    elementType: 'geometry',
    stylers: [
      { hue: '#f99e62' },
      { saturation: 60 },
      { lightness: 20 },
      { visibility: 'on' }
    ]
    },{
    featureType: 'road.local',
    elementType: 'geometry',
    stylers: [
      { hue: '#f99e62' },
      { saturation: 60 },
      { lightness: 60 },
      { visibility: 'on' }
    ]
    },{
    featureType: 'landscape',
    elementType: 'all',
    stylers: [
      { hue: '#dddddd' },
      { saturation: -100 },
      { lightness: -3 },
      { visibility: 'on' }
    ]
    },{
    featureType: 'poi',
    elementType: 'all',
    stylers: [
      { hue: '#dddddd' },
      { saturation: -100 },
      { lightness: -3 },
      { visibility: 'on' }
    ]
    },{
    featureType: 'water',
    elementType: 'all',
    stylers: [
      { hue: '#ccc' },
      { saturation: -100 },
	  { lightness: 17 },
      { visibility: 'on' }
    ]
    }
  ];
  
  var styledMap = new google.maps.StyledMapType(styles,
  {name: "Styled Map"});
    
  var mapOptions = {
    zoom: 11,
    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
  };
  
  map = new google.maps.Map(document.getElementById('map_canvas'),
  mapOptions);
            
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
      position.coords.longitude);
                                   
      var image = 'icon/pinIcon.png';
      var Marker = new google.maps.Marker({
        position: pos,
        map: map,
        icon: image,
        animation: google.maps.Animation.DROP,
        title: 'You are here'
      });                      

      map.setCenter(pos);
    },
    
    function() {
      handleNoGeolocation(true);
    });
  }
  
  else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }      
      
  var image = 'icon/leisureIcon.png';
  var myLatLng = new google.maps.LatLng(51.449796,-2.497959);
  var otiumMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'Fitness First'
  });
  var contentString = 
    '<h1 class="maps">Fitness First Cribbs Causeway</h1>'+
    '<p>' +
      'Parking: Yes - free<br />' +
      'Trial Session: Yes - free pass offered ' +
    '</p>'+
    '<a href="fitnessFirst.php">Click to see more information</a>';
  var infootium = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(otiumMarker, 'click', function() {
    infootium.open(map,otiumMarker);
  });


  var image = 'icon/leisureIcon.png';
  var myLatLng = new google.maps.LatLng(51.456944,-2.608401);
  var nuffieldMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'Nuffield Health Bristol'
  });
  var contentString = 
    '<h1 class="maps">Nuffield Health Bristol</h1>'+
    '<p>' +
      'Personal training available<br />' +
      'Price: Expensive' +
    '</p>'+
    '<a href="nuffield.php">Click to see more information</a>';
  var infonuffield = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(nuffieldMarker, 'click', function() {
    infonuffield.open(map,nuffieldMarker);
  });
  

  var image = 'icon/leisureIcon.png';
  var myLatLng = new google.maps.LatLng(51.455337,-2.593836);
  var fitnessMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'Otium Health and Leisure Bristol'
  });
  var contentString = 
    '<h1 class="maps">Otium Health and Leisure Bristol</h1>'+
    '<p>' +
      'Parking: Yes - free<br />' +
      'Luxury facilities' +
    '</p>'+
    '<a href="otium.php">Click to see more information</a>';
  var infofitness = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(fitnessMarker, 'click', function() {
    infofitness.open(map,fitnessMarker);
  });		


  var image = 'icon/leisureIcon.png';
  var myLatLng = new google.maps.LatLng(51.440462,-2.627236);
  var davidMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'David Lloyd Leasure Bristol'
  });
  var contentString = 
    '<h1 class="maps">David Lloyd Leasure Bristol</h1>'+
    '<p>' +
      'No price provided<br />' +
      'Creche available' +
    '</p>'+
    '<a href="david.php">Click to see more information</a>';
  var infodavid = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(davidMarker, 'click', function() {
    infodavid.open(map,davidMarker);
  });
  	
				
  var image = 'icon/24.png';
  var myLatLng = new google.maps.LatLng(51.53525,-2.54809);
  var anytimeMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'Anytime Fitness'
  });
  var contentString = 
    '<h1 class="maps">Anytime Fitness Bradley Stoke</h1>'+
    '<p>' +
      'Parking: Yes - free<br />' +
      'Trial Session: Yes - free pass offered<br /> ' +
	  'Opening times: 24 Hour ' +	            
	'</p>'+
    '<a href="anytime.php">Click to see more information</a>';
  var infoanytime = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(anytimeMarker, 'click', function() {
    infoanytime.open(map,anytimeMarker);
  });	    
	    
	    
  var image = 'icon/24.png';
  var myLatLng = new google.maps.LatLng(51.457755,-2.58698);
  var gymMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'The Gym'
  });
  var contentString = 
    '<h1 class="maps">The Gym</h1>'+
    '<p>' +
      'Payment: Pay as you go system offered<br />' +
      'Opening times: 24 hour ' +
    '</p>'+
    '<a href="theGym.php">Click to see more information</a>';
  var infogym = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(gymMarker, 'click', function() {
    infogym.open(map,gymMarker);
  });
  

  var image = 'icon/womanIcon.png';
  var myLatLng = new google.maps.LatLng(51.459777,-2.509156);
  var leisureMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'Its Leisure ltd'
  });
  var contentString = 
    '<h1 class="maps">Its Leisure ltd</h1>'+
    '<p>' +
      'Privacy: Woman only gym<br />' +
      'Classes: Range of aerobic classes offered ' +
    '</p>'+
    '<a href="leisure.php">Click to see more information</a>';
  var infoleisure = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(leisureMarker, 'click', function() {
    infoleisure.open(map,leisureMarker);
  });	    


  var image = 'icon/womanIcon.png';
  var myLatLng = new google.maps.LatLng(51.487426,-2.609134);
  var ladyMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'Lady Zone'
  });
  var contentString = 
    '<h1 class="maps">Lady Zone</h1>'+
    '<p>' +
      'Privacy: Woman only gym<br />' +
      'Classes: Range of aerobic classes offered ' +
    '</p>'+
    '<a href="lady.php">Click to see more information</a>';
  var infolady = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(ladyMarker, 'click', function() {
    infolady.open(map,ladyMarker);
  });


  var image = 'icon/womanIcon.png';
  var myLatLng = new google.maps.LatLng(51.432441,-2.545974);
  var sunMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'Sundance'
  });
  var contentString = 
    '<h1 class="maps">Sundance</h1>'+
    '<p>' +
      'Privacy: Woman only gym<br />' +
      'Use of sunbed facilities' +
    '</p>'+
    '<a href="sundance.php">Click to see more information</a>';
  var infosun = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(sunMarker, 'click', function() {
    infosun.open(map,sunMarker);
  });


  var image = 'icon/expertIcon.png';
  var myLatLng = new google.maps.LatLng(51.433939,-2.548131);
  var armouryMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'The Armoury'
  });
  var contentString = 
    '<h1 class="maps">The Armoury</h1>'+
    '<p>' +
      'Weight: Over 500KG of weights<br />' +
      'Extras: Use of sun beds ' +
    '</p>'+
    '<a href="armoury.php">Click to see more information</a>';
  var infoarmoury = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(armouryMarker, 'click', function() {
    infoarmoury.open(map,armouryMarker);
  });


  var image = 'icon/expertIcon.png';
  var myLatLng = new google.maps.LatLng(51.457708,-2.508598);
  var ministryMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'Ministry of Fitness'
  });
  var contentString = 
    '<h1 class="maps">Ministry of Fitness</h1>'+
    '<p>' +
      'Range of classes<br />' +
      'Luxury changing ' +
    '</p>'+
    '<a href="ministry.php">Click to see more information</a>';
  var infoministry = new google.maps.InfoWindow({
    content: contentString
  });     
  google.maps.event.addListener(ministryMarker, 'click', function() {
    infoministry.open(map,ministryMarker);
  });

}


function handleNoGeolocation(errorFlag) {

  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } 
  else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var Marker = new google.maps.Marker(options);
  map.setCenter(options.position);
  
}

  google.maps.event.addDomListener(window, 'load', initialize);

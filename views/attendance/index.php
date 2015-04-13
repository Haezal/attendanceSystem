<?php
/* @var $this yii\web\View */
use yii\web\View;
use yii\helpers\Html;

// $this->context->layout = '@admin-views/layouts/main';
$this->title = 'Attendance';
// $this->params['breadcrumbs'][] = $this->title;


// load maps api
$this->registerJsFile("https://maps.googleapis.com/maps/api/js");

// load js script
$this->registerJs("

    var x = document.getElementById('alert');

    getLocation();

    function getLocation(){
        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else { 
            x.innerHTML='GeoLocation is not supported by this browser. Please try another latest browser.';
        }
    } // end function

function showPosition(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    latlon = new google.maps.LatLng(lat, lon);
    mapholder = document.getElementById('mapholder');
    // mapholder.style.height = '250px';
    // mapholder.style.width = '500px';

    var myOptions = {
        center:latlon,zoom:14,
        mapTypeId:google.maps.MapTypeId.ROADMAP,
        mapTypeControl:false,
        navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
    }
    
    var map = new google.maps.Map(document.getElementById('mapholder'), myOptions);
    var marker = new google.maps.Marker({position:latlon,map:map,title:'You are here!'});

    x.innerHTML = '<code>Latitude: ' + lat + ', ' + lon + '</code>';    
}

    function showError(error) {
        switch(error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = 'User denied the request for Geolocation.'
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = 'Location information is unavailable.'
                break;
            case error.TIMEOUT:
                x.innerHTML = 'The request to get user location timed out.'
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = 'An unknown error occurred.'
                break;
        }
    } // end function
", View::POS_END, 'geoLocation');
?>

<div class="header vert">
	<div class="container">

	    <h1><?= getenv('APP_NAME') ?></h1>
	    <h2 class="lead" style="text-align:center;">Your Current Location Kuala Lumpur</h2>
	    <?php echo Html::a('Clock in', ['create'], ['class'=>'btn btn-primary btn-lg']); ?>

	</div><!-- /. container -->
</div><!-- /. header vert -->
<div id="mapholder" class="col-lg-12" style="height:300px;">Loading Maps.. </div>        
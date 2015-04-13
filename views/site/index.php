<?php
use yii\web\View;
/* @var $this yii\web\View */
$this->title .= getenv('APP_NAME');

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
<div class="site-index ">

    <div class="header vert">
        <div class="container">

            <h1><?= getenv('APP_NAME') ?></h1>

            <h2 class="lead">Up and running.</h2>

        </div>
    </div>

    <div class="featurette">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Application</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-4 text-center">
                    <div class="featurette-item">
                        <?php if (YII_ENV_PROD): ?>
                            <a href="#"><i
                                    class="glyphicon glyphicon-cog"></i></a>
                            <h4>Production</h4>
                        <?php else: ?>
                            <a href="<?= \yii\helpers\Url::to(['/debug/default/view', 'panel' => 'log']) ?>"><i
                                    class="glyphicon glyphicon-align-left"></i></a>
                            <h4>Logs</h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="featurette-item">
                        <a href="<?= \yii\helpers\Url::to(['/admin']) ?>"><i
                                class="glyphicon glyphicon-dashboard"></i></a>
                        <h4>Dashboard</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blurb cite">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2>IP Address Information</h2>
                    <address>
                        <label>IP Address</label> : 
                        <?php echo $ipInfo->ip; ?>
                    </address>
                    <address>
                        <label>City</label> : 
                        <?php echo $ipInfo->city; ?>
                    </address>
                    <address>
                        <label>Region</label> : 
                        <?php echo $ipInfo->region; ?>
                    </address>
                    <address>
                        <label>Country</label> : 
                        <?php echo $ipInfo->country; ?>
                    </address>
                    <address>
                        <label>Postal</label> : 
                        <?php echo $ipInfo->postal; ?>
                    </address>
                </div>
                <div class="col-lg-8">
                    <h2>Your Current Location</h2>
                    <div id="mapholder" class="col-lg-12" style="height:300px;">Loading Maps.. </div>
                    <div id="alert">Loading Current Location..</div>
                </div>

            </div>
        </div>
    </div>
</div>
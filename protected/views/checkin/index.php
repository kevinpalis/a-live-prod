<?php
$this->breadcrumbs=array(
	'Checkins',
);

$this->menu=array(
	array('label'=>'Create Checkin','url'=>array('create')),
	array('label'=>'Manage Checkin','url'=>array('admin')),
);
?>

<h1>Checkins</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


<?php

//This should be in a helper or components but for the sake of getting this done now, I'll put this here.
/*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/
/*::                                                                         :*/
/*::  This routine calculates the distance between two points (given the     :*/
/*::  latitude/longitude of those points). It is being used to calculate     :*/
/*::  the distance between two locations using GeoDataSource(TM) Products    :*/
/*::                                               :*/
/*::  Definitions:                                                           :*/
/*::    South latitudes are negative, east longitudes are positive           :*/
/*::                                                                         :*/
/*::  Passed to function:                                                    :*/
/*::    lat1, lon1 = Latitude and Longitude of point 1 (in decimal degrees)  :*/
/*::    lat2, lon2 = Latitude and Longitude of point 2 (in decimal degrees)  :*/
/*::    unit = the unit you desire for results                               :*/
/*::           where: 'M' is statute miles                                   :*/
/*::                  'K' is kilometers (default)                            :*/
/*::                  'N' is nautical miles                                  :*/
/*::  Worldwide cities and other features databases with latitude longitude  :*/
/*::  are available at http://www.geodatasource.com                          :*/
/*::                                                                         :*/
/*::  For enquiries, please contact sales@geodatasource.com                  :*/
/*::                                                                         :*/
/*::  Official Web site: http://www.geodatasource.com                        :*/
/*::                                                                         :*/
/*::         GeoDataSource.com (C) All Rights Reserved 2013              :*/
/*::                                                                         :*/
/*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/
function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}


//
// ext is your protected.extensions folder
// gmaps means the subfolder name under your protected.extensions folder
//  
Yii::import('ext.EGMap.*'); //import google map
Yii::import('ext.geoplugin.*'); //import geolocator

$userIP = Yii::app()->request->getUserHostAddress();
$testIP = '209.85.171.100';
echo "User IP is: " . $userIP . "<br />";
echo "\nTest IP is: " . $testIP . "<br />";

//get lat and long
$geoplugin = new geoPlugin();
$geoplugin->locate($testIP); //use userIP for production
//$geoplugin->locate($userIP);
//echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=209.85.171.100')));
echo "\nGeolocation results for {$geoplugin->ip}: <br />\n".
  "City: {$geoplugin->city} <br />\n".
  "Region: {$geoplugin->region} <br />\n".
  "Area Code: {$geoplugin->areaCode} <br />\n".
  "DMA Code: {$geoplugin->dmaCode} <br />\n".
  "Country Name: {$geoplugin->countryName} <br />\n".
  "Country Code: {$geoplugin->countryCode} <br />\n".
  "Longitude: {$geoplugin->longitude} <br />\n".
  "Latitude: {$geoplugin->latitude} <br />\n".
  "Currency Code: {$geoplugin->currencyCode} <br />\n".
  "Currency Symbol: {$geoplugin->currencySymbol} <br />\n".
  "Exchange Rate: {$geoplugin->currencyConverter} <br />\n";


$gMap = new EGMap();
$gMap->zoom = 17;
$mapTypeControlOptions = array(
  'position'=> EGMapControlPosition::RIGHT_BOTTOM,
  'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
);
$gMap->setHtmlOptions(array('class'=>'google-maps')); //fix the conlict with bootstrap 
$gMap->mapTypeControlOptions= $mapTypeControlOptions;
$gMap->setCenter($geoplugin->latitude, $geoplugin->longitude); //center in IPs location
$marker = new EGMapMarkerWithLabel($geoplugin->latitude, $geoplugin->longitude, array('title' => 'You are here.'));
// Create GMapInfoWindows
/*$info_window_a = new EGMapInfoWindow('<div>I am a marker with custom image!</div>');

$icon = new EGMapMarkerImage("http://google-maps-icons.googlecode.com/files/gazstation.png");
$icon->setSize(32, 37);
$icon->setAnchor(16, 16.5);
$icon->setOrigin(0, 0);
 
// Create marker
$marker = new EGMapMarker(40.446947,-102.091827, array('title' => 'Marker With Custom Image','icon'=>$icon));
$marker->addHtmlInfoWindow($info_window_a);
$gMap->addMarker($marker);
*/

$info_window_b = new EGMapInfoWindow('This is your current location!');
//$marker = new EGMapMarkerWithLabel(40.446947,-101.091827, array('title' => 'Marker With Label'));
 
$label_options = array(
  'backgroundColor'=>'white',
  'opacity'=>'0.50',
  'width'=>'100px',
  'color'=>'blue'
);

// SECOND WAY:
$marker->labelContent= 'You are here!';
$marker->labelStyle=$label_options;
//$marker->draggable=true;
$marker->labelClass='labels';
//$marker->raiseOnDrag= true;
$marker->setLabelAnchor(new EGMapPoint(50,0));
$marker->addHtmlInfoWindow($info_window_b);
$gMap->addMarker($marker); 
// enabling marker clusterer just for fun
// to view it zoom-out the map
$gMap->enableMarkerClusterer(new EGMapMarkerClusterer());

/*
// Two ways of setting options
// ONE WAY:
$marker_options = array(
  'labelContent'=>'$9393K',
  'labelStyle'=>$label_options,
  'draggable'=>true,
  // check the style ID 
  // afterwards!!!
  'labelClass'=>'labels',
  'labelAnchor'=>new EGMapPoint(22,2),
  'raiseOnDrag'=>true
);
 
$marker->setOptions($marker_options);
*/
 
//replace with proper icon url
$icon = new EGMapMarkerImage("http://mapicons.nicolasmollet.com/wp-content/uploads/mapicons/shape-default/color-3875d7/shapecolor-color/shadow-1/border-dark/symbolstyle-white/symbolshadowstyle-dark/gradient-no/conference.png");
echo "<br /> <b> List of all Facilities: </b> <br />";
echo "<ul>";
foreach($facilities as $facility) { 
    if($facility->latitude!=null && $facility->longitude!=null) {
      $info_window = new EGMapInfoWindow($facility->facilityName);
      $fmarker = new EGMapMarkerWithLabel($facility->latitude, $facility->longitude, array('title' => $facility->facilityName, 'icon'=>$icon));
      $fmarker->addHtmlInfoWindow($info_window);
      $gMap->addMarker($fmarker); 
    }
    echo "<li>" . $facility->facilityName . " --- Your distance from this facility: " . distance($geoplugin->latitude,  $geoplugin->longitude, $facility->latitude, $facility->longitude, "M") ." MILES </li> \n";
} 
echo "</ul>";

$gMap->renderMap();
//Yii::import('ext.egeoip.*');
//$geoIp = new EGeoIP();
 
//$geoIp->locate(Yii::app()->request->getUserHostAddress()); // use your IP
 
/*echo 'Information regarding IP: <b>'.$geoIp->ip.'</b><br/>';
echo 'City: '.$geoIp->city.'<br>';
echo 'Region: '.$geoIp->region.'<br>';
echo 'Area Code: '.$geoIp->areaCode.'<br>';
echo 'DMA: '.$geoIp->dma.'<br>';
echo 'Country Code: '.$geoIp->countryCode.'<br>';
echo 'Country Name: '.$geoIp->countryName.'<br>';
echo 'Continent Code: '.$geoIp->continentCode.'<br>';
echo 'Latitude: '.$geoIp->latitude.'<br>';
echo 'Longitude: '.$geoIp->longitude.'<br>';
echo 'Currency Symbol: '.$geoIp->currencySymbol.'<br>';
echo 'Currency Code: '.$geoIp->currencyCode.'<br>';
echo 'Currency Converter: '.$geoIp->currencyConverter.'<br/>';
 
echo 'Converting $10.00 to '.$geoIp->currencyCode.': <b>'.$geoIp->currencyConvert(10).'</b><br/>';
*/

?>



<style type="text/css">
.labels {
   color: red;
   background-color: white;
   font-family: "Lucida Grande", "Arial", sans-serif;
   font-size: 10px;
   font-weight: bold;
   text-align: center;
   width: 40px;     
   border: 2px solid black;
   white-space: nowrap;
}
</style>
<br />
<!--?php echo CHttpRequest::getUserHostAddress();?--> 

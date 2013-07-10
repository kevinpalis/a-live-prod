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
//
// ext is your protected.extensions folder
// gmaps means the subfolder name under your protected.extensions folder
//  
Yii::import('ext.EGMap.*');

 
$gMap = new EGMap();
$gMap->zoom = 5;
$mapTypeControlOptions = array(
  'position'=> EGMapControlPosition::RIGHT_BOTTOM,
  'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
);
$gMap->setHtmlOptions(array('class'=>'google-maps')); //fix the conlict with bootstrap 
$gMap->mapTypeControlOptions= $mapTypeControlOptions;
$gMap->setCenter(40.446947,-102.091827); //center in the US

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

$info_window_b = new EGMapInfoWindow('Hey! I am a marker with label!');
// Create marker with label
$marker = new EGMapMarkerWithLabel(40.446947,-101.091827, array('title' => 'Marker With Label'));
 
$label_options = array(
  'backgroundColor'=>'yellow',
  'opacity'=>'0.75',
  'width'=>'100px',
  'color'=>'blue'
);
 
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
 
// SECOND WAY:
$marker->labelContent= 'Test content';
$marker->labelStyle=$label_options;
$marker->draggable=true;
$marker->labelClass='labels';
$marker->raiseOnDrag= true;
$marker->setLabelAnchor(new EGMapPoint(22,0));
$marker->addHtmlInfoWindow($info_window_b);
$gMap->addMarker($marker);
 
// enabling marker clusterer just for fun
// to view it zoom-out the map
$gMap->enableMarkerClusterer(new EGMapMarkerClusterer());
 
$gMap->renderMap();
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
<?php
echo "IP Long" . ip2long(Yii::app()->request->getUserHostAddress());
echo "IP: " . Yii::app()->request->getUserHostAddress();
?>
<?php 
  Yii::import('ext.geoplugin.*');

  $geoplugin = new geoPlugin();

  $geoplugin->locate('209.85.171.100');
  //echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=209.85.171.100')));

  echo "Geolocation results for {$geoplugin->ip}: <br />\n".
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
<?php 
$CityCapital = array (
	"Italy"=> array("Rome"), 
	"Luxembourg"=> array("Luxembourg"),
	"Belgium"=> array("Brussels"), 
	"Denmark"=> array("Copenhagen"),
	"Finland"=> array("Helsinki"), 
	"France" => array("Paris"),
);
print_r ($CityCapital);

$CityContinent = array (
	"Tokyo"=> array(
    	"Japan"=> array("Asia"
        )),
    
    "Mexico City"=> array(
    	"Mexico"=> array("North America"
        )),
    
    "New York City"=> array(
    	"USA"=> array("North America"
        )),
    
    "Mumbai"=> array(
    	"India"=> array("Asia"
        )),
    
    "Lagos"=> array(
    	"Nigeria"=> array("Africa"
        )),
    
    "Buenos Aires"=> array(
    	"Argentina"=> array("South America"
        )),
    
    "Cairo"=> array(
    	"Egypt"=> array("Africa"
        )),
    
    "London"=> array(
    	"UK"=> array("Europe"
        )),
);

print_r ($CityContinent);

echo "<br>";
echo "<br>";

print_r (array_keys($CityContinent));

echo "<br>";
echo "<br>";

print_r (array_values($CityContinent));

echo "<br>";
echo "<br>";

$City = array_keys(CityContinent);
$Continent = array_values($CityContinent);
for ($i=0; $i < count($Continent); $i++) {
	foreach($City[$Continent[$i]] as $City => $value){
    	echo $City . $Continent
?>

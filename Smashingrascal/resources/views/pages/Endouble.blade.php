<?php
## Author Iwan Snapper 

// Main commentary
## Additonal comments

//// Test voor Endouble 
////
//// Door middel van deze API kan op verschillend manieren IP data van geobytes worden verkregen
//// Dit gebeurt door een (lijst van) feature(s) mee te geven zoals gebruikt door geobytes. bv geobytescityid
//// (De lijst van features kan worden opgevraagd met behulp van getGeobytesTags(); )
//// De feature voor Ip address, land en intialen worden standaard meegegeven.
//// Het is mogelijk om een optionele IP mee te geven, als deze ongeldig is wordt de IP van de gebruiker gebruikt. 

/// PS, heb wat extra tijd genomen om alles te documenteren, en het tonen van de output
/// Omdat ik ook gebruik heb gemaakt van HTML heb ik deze gesplits van de main API, mocht dit voor problemen zorgen.
/// Dit heb ik zo gedaan zodat het als 1 enkel bestand gebruikt kan worden. (Split @ line ~164)

### Function list:      (Note: outputData() produceert minimale gegevens in HTML)
###
### generateData        = Gebruikt combinatie van functions om een subset van data te genereren op basis van een gegeven lijst features
### getIPInfo           = Krijgt de data van geobytes op basis van een IP adres 
### getGeobytesTags     = Creeert een lijst van features zoals gebruikt door geobytes
### inputUnlabeledData  = Creeert een subset van features - Gebruikt gegeven key values
### inputLabeledData    = Creeert een subset van features - Gebruikt geobytes benaming als key values
### outputData          = Gebruikt generateData() om data weer te geven in hmtl format als voorbeeld output


// This function generate info of the user based on it's own IP or an optional IP provided (Only if valid)
// Allows a single string aswell as labeled and unlabeled arrays
// When given no arguments it will provide data on Country and IP adress of the user
function generateData($addedTags= NULL, $ip = NULL) {


  ## Geobytes query (Request data from geobytes REST API)
  $ipInfo = getIPInfo($ip); 


  # Allows string to be added instead of only arrays
  if(is_string($addedTags)){
    $addedTags = explode(' ', $addedTags);
  }


# Checks whether features are requested and whether they are labeled or not
if($addedTags == NULL){
  
  # Adds basic info
  $tagArray = array("IP Address" => "geobytesipaddress", "Country" => "geobytescountry", "Country Code" => "geobytesinternet"); 

  ## Extract features
  $output = inputLabeledData($tagArray, $ipInfo);

}
elseif(count(array_filter(array_keys($addedTags), 'is_string')) > 0){
  
  # Adds basic info
  $tagArray = array("IP Address" => "geobytesipaddress", "Country" => "geobytescountry", "Country Code" => "geobytesinternet");

  # Override with custom label
  foreach ($addedTags as $tag)
  if (($key = array_search($tag, $tagArray)) !== false) {
    unset($tagArray[$key]);
  }

  $tagArray = array_merge($tagArray, $addedTags); 

  ## Extract features
  $output = inputLabeledData($tagArray, $ipInfo);
}
else{

  # Adds basic info
  $tagArray = array("geobytesipaddress", "geobytescountry", "geobytesinternet");
  $tagArray = array_merge($tagArray, $addedTags); 

  ## Extract features
  $output = inputUnlabeledData($tagArray, $ipInfo);
}

return $output;

}



//
// Retrieve info from geobytes based on IP
//
function getIPInfo($ip=NULL){ 

# Allows custom ip check, if invalid IP is given use user IP
 if($ip = filter_var($ip, FILTER_VALIDATE_IP)){ 
$ipInfo =(file_get_contents('http://getcitydetails.geobytes.com/GetCityDetails?fqcn='. $ip));
 }

 else {
  $ipInfo =(file_get_contents('http://getcitydetails.geobytes.com/GetCityDetails?fqcn='));
 }
$ipInfo = json_decode($ipInfo, JSON_PRETTY_PRINT);

return $ipInfo;
} 

//
//Generate output with custom key value pair
//
function inputLabeledData($tagArray, $ipInfo){

  # Allows string to be added instead of only arrays (Allows the function to be used outside of generateData(), not recommended)
if(is_string($tagArray)){
  $tagArray = explode(' ', $tagArray);
}

## generate list of existing tags in geobytes (Used to remove invalid requested features)
$existingTags = getGeobytesTags();

$output = array();

foreach ($tagArray as $key => $tag)
# Check whether requested feature is valid
if(in_array($tag, $existingTags))
$output[$key] = $ipInfo[$tag]; 

return $output;
  
}

//
//Generate output based on json tag
//
function inputUnlabeledData($tagArray, $ipInfo){

# Allows string to be added instead of only arrays (Allows the function to be used outside of generateData(), not recommended)
if(is_string($tagArray)){
  $tagArray = explode(' ', $tagArray);
}

## generate list of existing tags in geobytes (Used to remove invalid requested features)
$existingTags = getGeobytesTags();
$output = array();

foreach ($tagArray as $tag)

# Check whether requested feature is valid
if(in_array($tag, $existingTags))
$output[$tag] = $ipInfo[$tag]; 
return $output;

}

//
// Get list of geobytes tags
//
function getGeobytesTags(){
  
  $geobytesTags = getIPInfo();
  $geobytesTags = array_keys($geobytesTags);
  return $geobytesTags;
}

?>

<!-- Anything below this point is optionally added for demonstration purposes and can be deleted without consequences  -->

<?php

////
////
//// Alles hieronder is niet onderdeel van de test, maar is er om de output te tonen.
////
////

//
// Optional: Output as HTML
//
function outputData($addedTags= NULL, $ip = NULL) {
$selectedTags = generateData($addedTags, $ip);

# Also removes geobytes prefix to improve aesthetics
foreach ($selectedTags as $key => $value) {
$key = preg_replace('/^geobytes/', '', $key);
echo "<h3> $key : $value </h3>";
  }
}


//Application showcase

# Output on geobytestags
echo "<h3> getGeobytes() </h3>";
print_r(getGeobytesTags());
echo "<br>";

# Output on requested IP
echo "<h3> getIPInfo() </h3>";
print_r(getIPInfo());
echo "<br>";

# Test data
$testArrayUnlabeled = array("geobytescity","geobytesregion","geobytesipaddress");

$testArrayLabeled = array( "City" => "geobytescity", "Region" => "geobytesregion", "IP Address" => "geobytesipaddress");
$testIp = "111.111.111.111";

# Array with assigned key value pairs (To be used in further processing)
$unlabeledTest = generateData($testArrayUnlabeled);

# Output with custom key value pairs
echo "<h1>Output with custom labeled data </h1>";

print_r(generateData($testArrayLabeled, $testIp));
outputData($testArrayLabeled, $testIp);
echo "<br>";

# Output with single string
echo "<h1>Output with unlabeled data </h1>";
print_r(generateData("geobytesregion", $testIp));
outputData("geobytesregion", $testIp);


?>






<!-- Test HTML -->

<br>
<h1> Example on how unlabeled can be used </h1>
{{print_r($unlabeledTest)}}
<h3> Country : {{$unlabeledTest['geobytescountry']}} - {{$unlabeledTest['geobytesinternet']}}</h3>
<h3> City : {{$unlabeledTest['geobytescity']}} </h3>
<h3> Region : {{$unlabeledTest['geobytesregion']}} </h3>
<h3> IP address : {{$unlabeledTest['geobytesipaddress']}} </h3>


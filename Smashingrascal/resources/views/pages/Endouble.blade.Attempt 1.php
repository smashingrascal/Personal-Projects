





<?php //Poging 1 


// This function generate info of the user based on own IP, allow single and multiple requests
// Optional: Allows an optional IP argument for custom IP check
function generateData1($addedTags, $ip = NULL) {

  //Allows string to be added
  if(is_string($addedTags)){
    $addedTags = explode(' ', $addedTags);
  }
  
  //Adds basic info
  $tagArray = array("geobytescountry", "geobytesinternet");
  $tagArray = array_merge($tagArray, $addedTags); 
 
  //Allows custom ip check
 if($ip == NULL){ 
$ipInfo =(file_get_contents('http://getcitydetails.geobytes.com/GetCityDetails?fqcn='. getIP()));
 }

 else {
  $ipInfo =(file_get_contents('http://getcitydetails.geobytes.com/GetCityDetails?fqcn='. $ip));
 }
$ipInfo = json_decode($ipInfo, JSON_PRETTY_PRINT);


$output = array();

//Generate output
foreach ($tagArray as $tag)
$output[$tag] = $ipInfo[$tag]; 
return $output;
}
?>
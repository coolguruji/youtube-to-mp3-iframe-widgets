<?php
 
// passing value to varible directly
// You can need to change this value with youtube video ID,

  $yid = $_GET['id'];

  if(!isset($yid)) {
	$yid = 'lF-jPBnZ098'; // we added this line for demo purpose, if you don't pass any value to variable
  }

// calling class
  require_once('class.php');

// Creating object
  $object = new ytiframe();

// Calling Class
  $response = $object->generate($yid);

?>
<html>
<head>
<title>YouTube To Mp3 Iframe Widgets</title>
<style>
div.error {
    border: 2px solid #ccc!important;
    border-radius: 16px;
    padding: 0.01em 10px;
}
</style>
</head>
<body>

<?php

// IFRAME EMBED CODE

        if(isset($yid)&&($response)) {

         echo "You Iframe Embed code:<br/>";
         echo $response;    // This variable contains iframe code
         echo "<br/>";

        }

?>

</body>
</html>

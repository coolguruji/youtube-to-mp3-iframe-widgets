<?php

// Defining class

  class ytiframe {
 
	public $code;

	       public function generate($id) {

		// OPTIONS
		$domain = "https://redirects.coolguruji.com/";
		$width = "100%"; // you can change it as you want like 200px etc
		$height = "92";  // don't change it!
		$path = "?id=";  // don't change it!
		$color = "background: #fff;min-height:95px;min-width:320px";  // You can change the background color of the iframe by default its white

		if(!empty($id)) {
	       	// GENERATING IFRAME CODE
		$code = '<script type="text/javascript">document.writeln(" <iframe style=\"'.$color.'\" src=\"'.$domain.$path.$id.'\" width=\"'.$width.'\" height=\"'.$height.'\" marginheight=\"0\" marginwidth=\"0\" noresize=\"\" scrolling=\"No\" frameborder=\"0\"></iframe> "); </script><noscript>Your browser dont support javascript please click to download from legacy version - <a href="http://redirects.coolguruji.com/direct.php?i='.$id.'&t=file.mp3"></a></noscript>';
		} else {
		$code = "<div class='error'><center><h2><font color='#ff0000'>Error!</font></h2>You've not entered any youtube video id correctly.</center><br/></div>";
		}
       		return($code);

	}
 }
?>


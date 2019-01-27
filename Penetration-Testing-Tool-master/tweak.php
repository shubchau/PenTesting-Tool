<html>
<title>Gurgaon Police | Tweak Finder</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
<form action="" method="post">
<div id="lookup_form">
Please Enter Domain name with www. : 
<input type="text" name="domain" value="">
<input type="submit" value="Perform lookup">
</div>
</form>


<?php 
if(isset($_POST['domain'])){ 
$domainname = $_POST['domain'];
$true_list = array(
"www.facebook.com",
"www.gmail.com",
"www.flipkart.com",
"www.snapdeal.com",
"www.amazon.com",
"www.shopclues.com",
"www.myntra.com",
"www.ajio.com",

	);
/*foreach($array as $string)
{
  if(strpos($searchstring, $string) !== false) 
  {
    echo 'TRUE';
    break;
  }else{
  	echo 'FALSE';
  }
}*/
if(in_array($domainname, $true_list) !== false) {

	 echo 'Real Url';
}else{
	echo 'Fake Url';
}
}
?>
<html>
<title>Gurgaon Police | Who Is </title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
<form action="" method="post">
<div id="lookup_form">
<input type="text" name="domain" value="">
<input type="submit" value="Perform lookup">
</div>
</form>


<?php if(isset($_POST['domain'])){ 
$domainname = $_POST['domain'];
$server = "whois.verisign-grs.com";
$port=43;
 
if(($whoisinfo = fsockopen($server,$port)) == true)
	{
		$output = "";
		fputs($whoisinfo,"$domainname\r\n");
		while(!feof($whoisinfo)) 
			$output .= fgets($whoisinfo,128); 
		fclose($whoisinfo);
	}
}
?>

<?php if(isset($output)){ echo "<pre>" . $output . "</pre>"; } ?>
</html>
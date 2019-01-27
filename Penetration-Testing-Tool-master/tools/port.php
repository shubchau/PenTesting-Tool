<head>
<title>Gurgaon Police | Port Finder</title>
        <head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
		</head>
<form method="post" >
    Domain/IP: 
    <input type="text" name="domain" /> 
    <input type="submit" value="Scan" />
</form>
<br />
 
<?php
if(!empty($_POST['domain'])) {  
    //list of port numbers to scan
    $ports = array(21, 22, 23, 25, 53, 80, 110, 1433, 3306);
    
    $results = array();
    foreach($ports as $port) {
        if($pf = @fsockopen($_POST['domain'], $port, $err, $err_string, 1)) {
            $results[$port] = true;
            fclose($pf);
        } else {
            $results[$port] = false;
        }
    }
 
    foreach($results as $port=>$val)    {
        $prot = getservbyport($port,"tcp");
                echo "Port $port ($prot): ";
        if($val) {
            echo "<span style=\"color:green\">OK</span><br/>";
        }
        else {
            echo "<span style=\"color:red\">Inaccessible</span><br/>";
        }
    }
}
?>
<!--- Developed By Faisal Ahmed href="https://www.linkedin.com/in/faisal-ahmed-ba895713a/"-->
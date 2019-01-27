<html>
        <title>Gurgaon Police | Sub Domain Finder </title>
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

<?php
if(isset($_POST['domain'])){ 
$target = $_POST['domain'];

@set_time_limit(0);

$subs = array(
"app",
"apps",
"cpanel",
"ftp",
"mail",
"webmail",
"smtp",
"pop",
"pop3",
"direct-connect",
"direct-connect-mail",
"record",
"ssl",
"dns",
"help",
"blog",
"forum",
"doc",
"home",
"shop",
"vb",
"www",
"web",
"webadmin",
"weblog",
"webmail",
"webmaster",
"webservices",
"webserver",
"log",
"logs",
"images",
"lab",
"ftpd",
"docs",
"download",
"downloads",
"about",
"backup",
"chat",
"data",
"smtp",
"upload",
"uploads",
"ns1",
"ns2",
"record",
"ssl",
"imap",
"result",
"vip",
"demo",
"beta",
"video",
);


echo "";
echo 'START INFORMATION GATHERING:<br>';



$sourc = @file_get_contents("http://www.whois.com/whois/$target");
preg_match_all("#<br>Name Server:(.*?)<br>#i",$sourc,$name);

$nameservers = $name[1];
foreach($nameservers as $nameserver){
echo"Name Server: $nameserver <br>";
}

$source = @file_get_contents("http://www.mydnstools.info/webserverinfo/$target");
preg_match_all("#<b>Server: (.*?)
</b>#i",$source,$serv);
$servers = $serv[1];
foreach($servers as $server){
echo"Server: $server <br>";

}

echo"START FIND SUBDOMAINS: <br>";
 
     foreach($subs as $sub){
 
 
        $Check = @fsockopen("$sub.$target", 80);
         
        if($Check)
        {
 
         echo "".$sub.".".$target." : ".gethostbyname($sub.".".$target)." <br>";
         
        }
}

$get = @file_get_contents("http://www.pagesinventory.com/search/?s=$target");

preg_match_all("#<td><a href=\"\/domain\/(.*?).html\">#i",$get,$matches);

$rzlts = $matches[1];
foreach($rzlts as $rzlt){
 
echo"".$rzlt." : ".gethostbyname($rzlt)."<br>";
}

echo"START REVERSE IP: <br>";


 
$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "http://domains.yougetsignal.com/domains.php");
 curl_setopt($ch, CURLOPT_POST, true);
 curl_setopt($ch, CURLOPT_POSTFIELDS, "remoteAddress={$target}");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $postResult = curl_exec($ch);
 curl_close($ch);
 
 if(preg_match_all("#\"domainCount\":\"(.*?)\"#",$postResult,$domain)) {
    $nigga = $domain[1];
}

foreach ($nigga as $domains) { echo "Total Websites: $domains <br>";    }  
   if(preg_match_all("#\[([^\]]*)\]#",$postResult,$fuck)){
 $zebi = $fuck[1];
}
foreach ($zebi as $fucck) {  
 
if(preg_match_all("#\"(.*?)\", \"\"#",$fucck,$matches)) {  
        $klawi = $matches[1];
foreach ($klawi as $fuckaa)  {  
 if(isset($fuckaa)){ echo "<pre>" . $fuckaa . "</pre>"; } 
if(isset($fuckaa)){ echo "<pre>" . $fuckaa . "</pre>"; }
} }} ;
} 

?>
<!--- Developed By Faisal Ahmed href="https://www.linkedin.com/in/faisal-ahmed-ba895713a/"-->
<?php
if(isset($_POST['sendSMS'])) {
$soap_do = curl_init();
$fields_string = "";
$fields = array(
    'client_id' => '58d67b03f800fa10000af415',
    'client_secret' => 'sX9IFthYQsZizPQuTM16RH5vzL4Kj7noUcHVbrfjDKUS7C79Ixl7CCsfyPxYHwCdZwMuGefmWfyEQkxKpg1n1P2koYD9EIhtYtWB',
    'grant_type' => 'client_credentials'
);

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');
$url = "https://pwcstaging.herokuapp.com/oauth/token";
$post_string = "";
$result = curl_exec($soap_do);
curl_setopt($soap_do, CURLOPT_URL,            $url );
/*
$headers = array(
   'Authorization: Bearer ca5b4508cc42cf6329d16e4fd8b8a255c68b130e'
);

curl_setopt(($soap_do, CURLOPT_HTTPHEADER, $headers)  ;
*/
curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($soap_do, CURLOPT_TIMEOUT,        10);
curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true );
curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($soap_do, CURLOPT_POST,           false );
curl_setopt($soap_do, CURLOPT_POSTFIELDS,    $fields_string);
$result = curl_exec($soap_do);
print_r($result);
$err = curl_error($soap_do);
if($err) {
    print_r($err);
}
curl_close($soap_do);
}
?>
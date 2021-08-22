<?php
,"clientVersion":"1.3.6-2021","deviceToken":"123123123","notificationToken":"","clientPlatform":"Android-samsung-SM-G955N-SM-G955N-25","advertisingTrackerId":{"googleAdId":"decb33b0-e2ba-4463-9e0a-6f4bdfd206c6","idfa":null,"amazonAdId":null,"adjustId":"13320c7b7989a45a1f590beaddd926eb","oaid":null}}';

curl_setopt( $ch, CURLOPT_POSTFIELDS, $parametros);
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_USERAGENT, 'Dart/2.13 (dart:io)');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, 'https://gw.klar.mx/');

curl_setopt($ch, CURLOPT_POST, true);
$result = curl_exec($ch);
curl_close($ch);


if(preg_match('/accessToken/i', $result)){
echo "CORRECTO <br>".$result;
}
else {
echo "FALSO <br>".$result;
}



?>

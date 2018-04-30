<?php
$access_token = 'M33fqNNcL8L9i6AMEyOd78X1KCDALwGXlurhgBSfiHsXBxhw6s36CLCl1VtBxRjeUeB5slW3iUBEkdPaTWe4vYliBKmzCi3In+DyU3tuUvOEiHSSzrWcfgWraZocagmOtX8xtr/FZsv3op/yBdDf8gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

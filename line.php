 <?php
  

function send_LINE($msg){
 $access_token = 'M33fqNNcL8L9i6AMEyOd78X1KCDALwGXlurhgBSfiHsXBxhw6s36CLCl1VtBxRjeUeB5slW3iUBEkdPaTWe4vYliBKmzCi3In+DyU3tuUvOEiHSSzrWcfgWraZocagmOtX8xtr/FZsv3op/yBdDf8gdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U5a800800953233cea6de28666016a5a9',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>

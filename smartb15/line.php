 <?php
  

function send_LINE($msg){
 $access_token = 'QdcUIl3fYg695WQpUDhRtSmYAxXFjZpfXHeJXttHfIKTDZZ2XvXF7705K68Jv2OgM0gLzLpq/1GE5p9pPAML6DyL60WTfXbt/vLH+irciHrkC0srjAw7SERr+kPRgqxIlS5Jn8kToflvnuaD+mXfDAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U47356f28eb0b4dc42b2406c12a737625',
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

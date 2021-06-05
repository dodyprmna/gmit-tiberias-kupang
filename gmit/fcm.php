<?php

$curl = curl_init();
$authKey = "key=AAAARe5G4ss:APA91bG_n7NcFPf2E05DQy5GPmTqmdSwY8F8ewPsY8WBNcVEYwiCSzYFQoNTrIgkeviOsTVD6oSyGp_gCUpxUu22gPPuDWQq362xDtzRY_G9Kdg7HHtpm2cwxOleqD41CK6ssg27n1-r";
$registration_ids = '["dBFEJmwyRja5Oigr1yoKW4:APA91bFETovqlZzCR72RugzxV040IkOF_Exp2z8qiVmw6hhyQAx1nlQ9LOuUjfuHD7rFwzmxs4AxwAOXWBw2zAJ2RTqJzSZKfnoYTg_cFFEEcM0K-7XqQXlQLFs-Yq4HnsiPEf4vlmrq"]';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
                            "registration_ids": '.$registration_ids.',
                            "notification": {
                                "title": "Pemberitahuan",
                                "body": "Renungan dan Doa Harian"
                            }
                        }',
  CURLOPT_HTTPHEADER => array(
    'Content-type: application/json',
    'Authorization: '.$authKey,
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

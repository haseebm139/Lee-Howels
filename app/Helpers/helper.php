<?php
function sendNotificationAdmin($notification)
{
    $admins = App\Models\User::whereNotIn('type',['user','staff'])->get();
    foreach ($admins as $key => $user) {
        # code...
        $recipient = $user->device_token??null;
        $serverKey = env('FIREBASE_SERVER_KEY');
        $url = "https://fcm.googleapis.com/fcm/send";
        $dataPayload = [
            "body" => "task",
            "title" => "Notification Title",
            "sound" => "default",
            "click_action" => "FLUTTER_NOTIFICATION_CLICK",
            "apns" => [   // Add the "apns" field with the required settings for iOS
                "payload" => [
                    "aps" => [
                        "contentAvailable" => true,
                        "sound" => "default"
                    ]
                ]
            ]
        ];

        $fields =
        [
            'to'  => $recipient,
            'notification' => $notification,
            'data' => $dataPayload
        ];

        //Set the appropriate headers
        $headers =
        [
        'Authorization: key=' . $serverKey,
        'Content-Type: application/json'
        ];

        //Send the message using cURL.
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, $url);
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
    }

    return $result;
}


function numberFormate($number,$limit){
    return number_format((float)$number, $limit, '.', '');
}

function createNotification($notifaction){
    $data = App\Models\Notification::create($notifaction);
    return $data;

}

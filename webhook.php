function postToDiscord()
{
    $data = array("content" => "Your Content", "username" => "Webhooks");
    $curl = curl_init("https://discordapp.com/api/webhooks/YOUR-WEBHOOK-URL-HERE");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}
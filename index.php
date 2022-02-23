<?php

$url = "https://intermediate-test-v-2-web-test.apps.ocp.tmrnd.com.my/api/auth";

$data_array = array(
'username' => 'dummyUser',
'password' => 'Test@123'
);

$data = http_build_query($data_array);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_URL, true);
curl_setopt($ch, CURLOPT_URL, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
	echo $e;
}else{
	$decoded = json_decode($resp);
	foreach($decoded as $key => $val){
		echo $key . ': ' . $val . '<br>';
	}

}
curl_close($ch);
?>
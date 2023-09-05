<?php
// error_reporting(0);
// $json = file_get_contents('php://input');
// $data = json_decode($json, true);

// $Token=trim($data['token']); // getting user post token

// if (!empty($Token) && $Token ==("13babatunde006")){

	$url = "https://zuwo.com.ng/wp-content/plugins/vprest/?q=user&id=1190&apikey=64f4d38d14995";

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options for a POST request
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request and store the response
$response = curl_exec($ch);

// Check if the request was successful
if ($response === false) {
    echo "Error: " . curl_error($ch);
} else {
    // Try to decode the response as JSON
    $data = json_decode($response, true);

    if (json_last_error() === JSON_ERROR_NONE) {
        // Check if 'Balance' key exists in the response
        if (isset($data['Balance'])) {
            $balance = $data['Balance'];
            echo  $balance;
        } else {
            echo "Balance not found in the JSON response.";
        }
    } else {
        echo "The response is not in valid JSON format.";
    }
}

// Close cURL session
curl_close($ch);



// $sec1 = array(
//     'code' => '200',
//     'status' => 'success',
//     'balance' => $balance, // Use the default value if not set
// 	);

// 	echo json_encode($sec1);
// 	exit();


//  }



// else{

// 	$sec=array(
// 		'code'=>'500', ////// 
// 		'status'=>'fail', ////// 
// 		'desc' =>'Imcomplete Parameters',
// 	);

// 	echo json_encode($sec);
// 	exit();
// }

?>

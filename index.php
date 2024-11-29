<?php 
//Echo response back to the API
header('Content-type: text/plain');

//Read POST variables from the API
$sessionId = $_POST['sessionId'];
$networkCode = $_POST['networkCode'];
$serviceCode = $_POST['serviceCode'];
$phoneNumber = ltrim($_POST['phoneNumber']);
$text = $_POST['text'];

// Check if the text is empty to start a new session
if ($text == "") {
    $response = "CON Language Frameworks: \n1. Java \n2. Python \n3. PHP \n4. JavaScript";
} else {
    // Split the text to handle user input
    $textArray = explode('*', $text);

    switch ($textArray[0]) {
        case "1":
            $response = "END Java Frameworks \n1. SpringBoot\n2. Apache Struts";
            break;
        case "2":
            $response = "END Python Frameworks \n1. Flask\n2. Django \n3. PyTorch";
            break;
        case "3":
            $response = "END PHP Frameworks \n1. Laravel\n2. Symfony\n3. CodeIgniter";
            break;
        case "4":
            $response = "END JavaScript Frameworks \n1. NodeJS\n2. ReactJS\n3. TypeScript\n4. VueJS";
            break;    
        default:
            $response = "END Invalid input";
            break;
    }
}

echo $response;

; ?>
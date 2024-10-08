<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secretKey = "6Ld0kFsqAAAAANbLDJIuc5eI8XNLuxMp8mbE2xtP";
    $token = $_POST['recaptchaResponse'];
    
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$token");
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        // Verification failed
        echo "reCAPTCHA verification failed. Please try again.";
    } else {
        // Verification successful
        header("Location: https://dow9r.blogspot.com/sc");
        exit();
    }
}
?>

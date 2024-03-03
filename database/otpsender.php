<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

require_once 'MVDB.php';

$otp = mt_rand(100000, 999999);

$email = $_POST['email'];


$mail = new PHPMailer(true);

try {
                                                            //Enable verbose debug output
    $mail->isSMTP();                                           //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'samcalubad23@gmail.com';                     //SMTP username
    $mail->Password   = 'syaa fmzy jqap blav';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom("$email");
    $mail->addAddress('samcalubad21@gmail.com');     //Add a recipient

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$otp";
    $mail->Body    = "<b>$otp</b> is your OTP";


    if($mail->send()){

        try {
            $pdo = Database::letsconnect();
        
            if (!$pdo) {
                throw new Exception("Database connection failed.");
            }
        
            $sql = "INSERT INTO otps (email, otp) VALUES (:email, :otp)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':otp', $otp);
        
            if (!$stmt->execute()) {
                throw new Exception("Failed to insert OTP into database.");
            }
        
            // JSON response
            $response = [
                'email' => $email,
                'otp' => $otp
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        
            // Disconnect from the database
            // Database::disconnect(); // Uncomment if you want to disconnect
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }



    }
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
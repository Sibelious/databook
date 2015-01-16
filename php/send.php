<?php
    if(isset($_POST['email'])) {
        $data = $_POST['email'] . ";";
        
        
        $to = "sgonez@hotmail.com";
        $subject = "Databook App";
        $txt = "Hello world!";
        $headers = "From: webmaster@example.com" . "\r\n" .
        "CC: t-sonego@microsoft.com";

        
        
        
        
        if(@mail($to,$subject,$data,$headers)) {
            die('There was an error sending');
        }
        else {
            echo "<p>Thanks, we will be in touch!</p>";
        }
    }
    else {
        die('no post data to process');
    }
?>
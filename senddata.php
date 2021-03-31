<?php
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $usmail = $_POST['email'];
        $feedback = $_POST['feedback'];
        
        $to = 'purnendutudu7@gmail.com';
        $subject = 'form submission';
        $message = "Name: ".$name."\n"."Email: ".$usmail."\n"."Feeback: ".$feedback;
        $header ="From: ".$usmail;
        
        if(mail($to, $subject, $message, $header)){
            echo "<h1>Send Succesful</h1>";
        }
        else {
            echo "<h1>Something Went Wrong</h1>";
        }
        
    }
?>
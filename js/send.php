<?php

    $name = $_POST['your_email']; 

    $email_content .= "User name: $name\n";
 
    
    mail ("olyasorrohtey@gmail.com", "WP Sites application", $email_content);
?>
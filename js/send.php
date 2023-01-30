<?php

    $name = $_POST['email']; 

    $email_content .= "User email: $name\n";
 
    
    mail ("olyasorrohtey@gmail.com", "WP Sites application", $email_content);
?>

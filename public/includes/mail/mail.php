<?php

    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    $data = json_decode(file_get_contents('php://input'), true);

    //Checks for firstname and cleans the text
    if($data){
        $receipient = "nathalyamorim87@gmail.com";
        $subject = " just made contact! Respond ASAP!";
        $subject_response = "Hi! This is an automatic response.";
        $visitor_name = "";
        $visitor_email = "";
        $message = "";
        $message_response = "Thank you for reaching out. You will get a message from a human very soon!";
        $error_response = "";
        $error_msg_mandatory_fields = "Sorry, you need to fill the mandatory fields, it's piece of cake.";
        $error_msg_invalid_email = "Your email doesn't seem to be correct. Please verify you email address.";
        $empty_fields = false;
        $fail = array();
        //Checks for firstname and cleans the text
        if(isset($data['firstname']) && !empty($data['firstname'])) {
            $visitor_name .= filter_var($data['firstname'], FILTER_SANITIZE_STRING);
        }else{
            $empty_fields = true;
            array_push($fail, "firstname");
        }

        //Checks for lastname and cleans the text

        if(isset ($data['lastname']) && !empty($data['lastname'])) {
            $visitor_name .=" ".filter_var($data['lastname'],
            FILTER_SANITIZE_STRING);
        }else{
            $empty_fields = true;
            array_push($fail, "lastname");
        }

       //CHECK our message and cleans it 
        if(isset($data['message']) && !empty($data['message'])) {
            $clean = filter_var($data['message'], FILTER_SANITIZE_STRING);
            $message = htmlspecialchars($clean);
        }else{
            $empty_fields = true;
            array_push($fail, "message");
        }

        //Checks for email and cleans the text
        if(isset($data['email']) && !empty($data['email'])){
            if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $visitor_email .= str_replace(array("\r", "\n", "%0p", "%0a", "%0d"), "", $data['email']);
                $visitor_email .= filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
            } else {
                array_push($fail, "email");
                $error_response .= $error_msg_invalid_email." ";
            }
        }else{
            $empty_fields = true;
            array_push($fail, "email");
        }        

        if(count($fail)==0) {

            $headers = "From: ".$visitor_email."\r\n".
            "Reply-To:".$visitor_email."\r\n"."X-Mailer: PHP/"
            .phpversion();
    
            $headers_response = "From: ".$receipient."\r\n".
            "Reply-To:".$receipient."\r\n"."X-Mailer: PHP/"
            .phpversion();

            $subject = $visitor_name.$subject;
            mail($receipient, $subject, $message, $headers);

            mail($visitor_email, $subject_response, $message_response, $headers_response);

            $results['message'] = "Thanks for reaching out, ".$visitor_name."! You'll get a response ASAP!";
        }else{
            header('HTTP/1.1 488 Missing mandatory fields.');
            if($empty_fields == true) {
                $error_response .= $error_msg_mandatory_fields;
            }
            die(json_encode(["fields" => $fail, "message" => $error_response]));
        }

    }else{
        $results['message'] = "Sorry, you need to fill the mandatory fields, it's piece of cake.";
    }

    echo json_encode($results);

?>
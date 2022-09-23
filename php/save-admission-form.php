<?php
   
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

    if($_POST) {

        $filename ='../reports/Admission-Report.csv';
        $path = '../reports/Admission-Report.csv';

        if(file_exists($path)):

            //$headers=array_keys($_POST);

            $file = fopen($filename, 'a');
            //fputcsv($file, $headers ); //write headers (key of the $_POST array (id,username,password,etc)
            fputcsv($file, $_POST);
            fclose($file);

              $to = 'info@gyananantvidyalaya.org';
              $subject = "New Admission query";
              $template = "
                        <h3>New admission query with details -</h3><br>

                        Admission Number: ".$_POST['admission_number']."<br>
                        Name Of the Child: ".$_POST['name_of_the_child']."<br>
                        Date of Birth: ".$_POST['dob']."<br>
                        Class of Enrollment: ".$_POST['class_of_enrollment']."<br>
                        Last school attended: ".$_POST['last_school_attended']."<br>
                        Transfer certificate No: ".$_POST['transfer_certificate_no']."<br>
                        Date of issue: ".$_POST['date_of_issue']."<br>
                        Promotion report card: ".$_POST['promotion_report_card']."<br>
                        Medical instructions / history (if Any): ".$_POST['medical_instructions']."<br>

                        <h3>PARENTS DETAILS</h3>
                        Father's Name: ".$_POST['father_name']."<br>
                        Qualification: ".$_POST['father_qualification']."<br>
                        Profession: ".$_POST['father_profession']."<br>
                        Contact No.Office/Personal: ".$_POST['father_contact_no']."<br>
                        E.mail id: ".$_POST['email']."<br>
                        Mother's Name: ".$_POST['mother_name']."<br>
                        Qualification: ".$_POST['mother_qualification']."<br>
                        Profession: ".$_POST['mother_profession']."<br>
                        Contact No. office/personal: ".$_POST['mother_contact_no']."<br>
                        Permanent Address: ".$_POST['permanent_address']."<br>
                        Transport Route: ".$_POST['transport_route']."<br>
                        Transport Facility: ".$_POST['transport_facility']."<br>
                          
                        <br>
                        Thank You!
                          
              ";

              $user_email = $_POST['email'];
              $user_name = $_POST['first_name'];
                
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "From:  ".$user_name." <".$user_email.">\r\n";
                $headers .= "Cc: principal@gyananantvidyalaya.org\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                
                mail($to, $subject, $template, $headers);
                
            //   require 'PHPMailer/PHPMailerAutoload.php';

            //   $adminMail = new PHPMailer;
            //   $adminMail->isSMTP();                                                    // Set mailer to use SMTP
            //   $adminMail->Host = 'smtp.gmail.com';                                     // Specify main and backup SMTP servers
            //   $adminMail->SMTPAuth = true;                                             // Enable SMTP authentication
            //   $adminMail->Username = 'mail@omlogic.com';                       // SMTP username
            //   $adminMail->Password = 'Manjeet@123';                                     // SMTP password
            //   $adminMail->SMTPSecure = 'tls';                                          // Enable TLS encryption, `ssl` also accepted
            //   $adminMail->Port = 587;                                                  // TCP port to connect to
            //   $adminMail->addAddress($to);      // Add a recipient
            //   //$adminMail->addBCC($cc);      // Add a recipient
            //   $adminMail->AddReplyTo($email, $name);
            //   $adminMail->setfrom($email, $name);
            //   $adminMail->WordWrap = 50;                                               // Set word wrap to 50 characters
            //   $adminMail->isHTML(true);                                                // Set email format to HTML
            //   $adminMail->Subject = $subject;
            //   $adminMail->Body    = $template;
            //   if($adminMail->send()) {
            //     $success = 'Data has been added';
            //   } else {
            //       $error = 'Mail can not be sent';
            //   }

              //   ------------------------------------------------------------------

              $to = $user_email;
              $subject = "Gyan Anant Vidyalaya | Admission query";
              $template = "
                            Dear ".$_POST['father_name'].",<br><br>

                            <h3>Thank You!</h3>

                            <strong>Below are the details you have submitted:</strong><br><br>

                            Admission Number: ".$_POST['admission_number']."<br>
                            Name Of the Child: ".$_POST['name_of_the_child']."<br>
                            Date of Birth: ".$_POST['dob']."<br>
                            Class of Enrollment: ".$_POST['class_of_enrollment']."<br>
                            Last school attended: ".$_POST['last_school_attended']."<br>
                            Transfer certificate No: ".$_POST['transfer_certificate_no']."<br>
                            Date of issue: ".$_POST['date_of_issue']."<br>
                            Promotion report card: ".$_POST['promotion_report_card']."<br>
                            Medical instructions / history (if Any): ".$_POST['medical_instructions']."<br>

                            <h3>PARENTS DETAILS</h3>
                            Father's Name: ".$_POST['father_name']."<br>
                            Qualification: ".$_POST['father_qualification']."<br>
                            Profession: ".$_POST['father_profession']."<br>
                            Contact No.Office/Personal: ".$_POST['father_contact_no']."<br>
                            E.mail id: ".$_POST['email']."<br>
                            Mother's Name: ".$_POST['mother_name']."<br>
                            Qualification: ".$_POST['mother_qualification']."<br>
                            Profession: ".$_POST['mother_profession']."<br>
                            Contact No. office/personal: ".$_POST['mother_contact_no']."<br>
                            Permanent Address: ".$_POST['permanent_address']."<br>
                            Transport Route: ".$_POST['transport_route']."<br>
                            Transport Facility: ".$_POST['transport_facility']."<br>
                            
                            <br>
                            Thank You!
                          
              ";

              $headers = "MIME-Version: 1.0\r\n";
              $headers .= "From:  Gyan Anant Vidyalaya <no-reply@gyananantvidyalaya.org>\r\n";
              //$headers .= "Bcc: sumit@omlogic.com\r\n";
              $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            
              mail($to, $subject, $template, $headers);

            //   $userMail = new PHPMailer;
            //   $userMail->isSMTP();                                                    // Set mailer to use SMTP
            //   $userMail->Host = 'smtp.gmail.com';                                     // Specify main and backup SMTP servers
            //   $userMail->SMTPAuth = true;                                             // Enable SMTP authentication
            //   $userMail->Username = 'mail@omlogic.com';                       // SMTP username
            //   $userMail->Password = 'Manjeet@123';                                     // SMTP password
            //   $userMail->SMTPSecure = 'tls';                                          // Enable TLS encryption, `ssl` also accepted
            //   $userMail->Port = 587;                                                  // TCP port to connect to
            //   $userMail->addAddress($to);      // Add a recipient
            //   $userMail->addBCC($cc);      // Add a recipient
            //   $userMail->AddReplyTo($email, $name);
            //   $userMail->setfrom($email, $name);
            //   $userMail->WordWrap = 50;                                               // Set word wrap to 50 characters
            //   $userMail->isHTML(true);                                                // Set email format to HTML
            //   $userMail->Subject = $subject;
            //   $userMail->Body    = $template;
            //   if($userMail->send()) {
            //     $success = 'Data has been added';
            //   } else {
            //       $error = 'Mail can not be sent';
            //   }

            //echo 'file exist';
            header('Location: ../thank-you.php');
        else:

            echo 'does not exist';
        endif;

    } else {
        die('Invalid attempt');
    }
?>
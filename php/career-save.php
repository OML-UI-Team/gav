<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

    if($_POST) {
        

              $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
             
              $user_name = $_POST['name'];
              $user_email = $_POST['email'];

              if(isset($_FILES["resume"]["size"]) && $_FILES["resume"]["size"] > 0) {
                $temp = explode(".", $_FILES["resume"]["name"]);
                $resume = round(microtime(true)) . '.' . end($temp);
                $resume = "resumes/" . $resume;
                move_uploaded_file($_FILES["resume"]["tmp_name"], $resume);
              }
              



              $to = 'info@gyananantvidyalaya.org';
              $subject = "New registration";
              
              $message = "<p>Dear Admin,</p> <h3>We have received new registration:</h3>";
              foreach ($_POST as $key => $value) {

                if(is_array($value)) {
                  $message .= "<p>".str_replace(['-', '_'], ' ',ucfirst($key)).': '.implode(', ', $value)."</p>";
                } else {
                  $message .= "<p>".str_replace(['-', '_'], ' ',ucfirst($key)).': '.$value."</p>";
                }

              }

              if(isset($resume) && !empty($resume)) {
                $message .= "<p>Resume: <a href='".$actual_link.'/'.$resume."'>Click here to download</a></p>";
              }

              $message .= "<br><p>Best Regards</p>";


              //------------------ Admin mail ------------------------------------   
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "From:  ".$user_name." <".$user_email.">\r\n";
                $headers .= "Cc: principal@gyananantvidyalaya.org\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                
                mail($to, $subject, $message, $headers);

              // ------------------------------------------------------------------
                // User Mail
                if(!empty($user_name) && !empty($user_email)) {
                    $user_subject = "Gyan Anant Vidyalaya | Career";
                    $user_headers = "MIME-Version: 1.0\r\n";
                    $user_headers .= "From:  Gyan Anant Vidyalaya <no-reply@gyananantvidyalaya.org>\r\n";
                    //$user_headers .= "Bcc: sumit@omlogic.com\r\n";
                    $user_headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    
                    $user_message = "Hi ".$user_name.",
                    <p>Thank you for apply. We will get to you soon!</p>
                    <br>
                    <p>Thank You<br>Team Gyan Anant Vidyalaya</p>
                    ";
                    mail($user_email,$user_subject,$user_message, $user_headers);
                }
              
              // ---------------------------------------------------------------------
              
              
                $path = '../reports/career-report.csv';
                

                if(file_exists($path)) {
                  $data['date'] = date('d-m-Y h:i'); 
                  foreach ($_POST as $key => $value) {

                      if(is_array($value)) {
                        $data[$key] = implode(', ', $value);
                      } else {
                        $data[$key] = $value;
                      }
    
                  }

                  (isset($resume)  && !empty($resume)) ? $data['resume'] = $actual_link.'/'.$resume:'';
                  $file = fopen($path, 'a');
                  
    
                  fputcsv($file, $data);
                  fclose($file);
              }

           
            header('Location: ../thank-you.php');

    } else {
        die('Invalid attempt');
    }
?>
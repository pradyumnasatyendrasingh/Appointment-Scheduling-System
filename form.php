<?php
session_start();
$datetime = $_SESSION['datetime'];
include 'connection.php';
if($datetime == '') {
    header('Location: dt.php');
}
if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ph = $_POST['ph'];
    $mnum = $_POST['mnum'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $des =$_POST['description'];
    $id = $fname[0] . $lname[0] . substr($mnum, 0, 4) . substr($email, 0, 3);
    $name = $fname . " " . $lname;
    $phone = $ph . " " . $mnum;
    //$dt = strtotime($datetime);
    //$datetime = $datetime . ":00";
   
    $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
 
// Create email headers

$to1 = $email;
$to2 ="hosting@ampay.co";
$sub1 = "Your Appointment Details";
$sub2 = "Ampay Appointment Booking";
$body1 = '
        <div style="width: 1100px; padding: 15px; border: 2px dashed #ddd; text-align: left;">
            <div style="display: flex; flex-flow: row wrap; justify-content: space-between;">
                <div style="margin-bottom: 1%; width: 50%;">
                    <a href="https://www.amworldadvisor.com/"><img style="max-width: 200px" src="https://media-exp1.licdn.com/dms/image/C511BAQFswvjZWAHSEQ/company-background_10000/0?e=2159024400&v=beta&t=W8xq7t0kXYdegag0uiLdEu0fJwYRnTABbsoY9kzN2AE" alt="Logo" \></a>
                    <div>
                        <p style="margin-top: 0.10px; font-size: 12px; color: #333; font-weight: 600; letter-spacing: 1px;">Crystal IT Park(SEZ), Bldg 1, Ground floor, # 21-24, IndraPuri<br>
                            Indore-452008 (M.P) India<br>
                            Tel Co-ordinate +91 79 74521957</p>
                    </div>
                </div>

                <div style="width: 50%;">
                    <div style="width: 100%;">
                        <div class="logos" style="display: block;flex-flow: row wrap;justify-content: flex-end; float:right; text-align: left">
                            <a href="https://www.facebook.com/AMWORLDADVISORS"><img style="width: 32px; margin-left: 10px;" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-512.png" alt="Facebook"></a><a href="https://www.youtube.com/channel/UCO5wmKMI20eYUn0VKLvbhxQ"><img style="width: 35px; margin-left: 10px;" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/youtube-512.png" alt=""></a><a href="https://www.linkedin.com/company/amworldmna"><img style="width: 35px; margin-left: 10px;" src="https://cdn3.iconfinder.com/data/icons/social-media-logos-flat-colorful/2048/5296_-_LinkedIn-512.png" alt=""></a>
                        </div>
                        <br><br><br>
                        <div style="float:right; display:block">
                            <a href="https://www.amworldadvisor.com/">
                                <p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/PICOL_icon_Globe.svg/1200px-PICOL_icon_Globe.svg.png" style="width: 20px; float: left; margin-right: 10px;"><span>www.amworldadvisor.com</span></p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div style="padding: 5px; color: #fff; background-color: #204c83; text-align: center;">
                <p style="font-size: 20px;">Scheduler has invited you to AMPAY!! Best of Both Worlds</p>
            </div>
            <div style="display: flex; flex-flow: row wrap; justify-content: space-between; border-bottom: 2px solid #ddd;">
                <div style="width: 40%;">
                    <h3 style="margin-top: 10px; margin-bottom: 5px; text-transform: uppercase; text-align: left;">TITLE:</h3>
                </div>
                <div style="width: 60%;">
                    <p style="margin-top: 10px; margin-bottom: 5px; font-size: 15px;text-align: left;">AMPAY Call - Confirmation</p>
                </div>
            </div>
            <div style="display: flex; flex-flow: row wrap; justify-content: space-between; border-bottom: 2px solid #ddd;">
                <div style="width: 40%;">
                    <h3 style="margin-top: 10px; margin-bottom: 5px; text-transform: uppercase; text-align: left;">CONTACT:</h3>
                </div>
                <div style="width: 60%;">
                    <p style="margin-top: 10px; margin-bottom: 5px; font-size: 15px;text-align: left;">+91 79 74521957</p>
                </div>
            </div>
            <div style="display: flex; flex-flow: row wrap; justify-content: space-between; border-bottom: 2px solid #ddd;">
                <div style="width: 40%;">
                    <h3 style="margin-top: 10px; margin-bottom: 5px; text-transform: uppercase; text-align: left;">WHEN:</h3>
                </div>
                <div style="width: 60%;">
                    <p style="margin-top: 10px; margin-bottom: 5px; font-size: 15px;text-align: left;">'.$datetime.'</p>
                </div>
            </div>
            <div style="display: flex; flex-flow: row wrap; justify-content: space-between; border-bottom: 2px solid #ddd;">
                <div style="width: 40%;">
                    <h3 style="margin-top: 10px; margin-bottom: 5px; text-transform: uppercase; text-align: left;">ORGANIZER:</h3>
                </div>
                <div style="width: 60%;">
                    <p style="margin-top: 10px; margin-bottom: 5px; font-size: 15px;text-align: left;">hosting@ampay.co
                    </p>
                </div>
            </div>
            <div style="display: flex; flex-flow: row wrap; justify-content: space-between; border-bottom: 2px solid #ddd;">
                <div style="width: 40%;">
                    <h3 style="margin-top: 10px; margin-bottom: 5px; text-transform: uppercase; text-align: left;">Description:</h3>
                </div>
                <div style="width: 60%;">
                    <p style="margin-top: 10px; margin-bottom: 5px; font-size: 15px;text-align: justify; letter-spacing: 0.30px; line-height: 20px;">'.$des.'</p>
                </div>
            </div>
            <div style="display: flex; flex-flow: row wrap; justify-content: space-between; border-bottom: 2px solid #ddd;">
                <div style="width: 40%;">
                    <h3 style="margin-top: 10px; margin-bottom: 5px; text-transform: uppercase; text-align: left;">join us:</h3>
                </div>
                <div style="width: 60%;">
                    <div style="width: 100% ; height: 2px; background-color: #ddd; text-align: left;"></div>
                    <p>To make changes to the appointment, please follow this link: </p>
                    <a href="https://www.amworldadvisor.com/">Click Here...</a>
                </div>
            </div>
            <div style="display: flex; flex-flow: row wrap; justify-content: space-between; border-bottom: 2px solid #ddd;">
                <div style="width: 40%;">
                    <h3 style="margin-top: 10px; margin-bottom: 5px; text-transform: uppercase; text-align: left;">Attendees:
                    </h3>
                </div>
                <div style="width: 60%;">
                    <p style="margin-top: 10px; margin-bottom: 5px; font-size: 15px;text-align: justify; letter-spacing: 0.30px; line-height: 20px;"><span style="color:#204c83;"><b>hosting@ampay.co<span style="color: #000; margin-right: 5px;">,</span>'.$email.'</b></span></p>
                </div>
            </div>
        </div>

';
$body2 ="$fname has Booked an appointment at $datetime with Booking Id is $id.";

mail($to1,$sub1,$body1,$headers);
mail($to2,$sub2,$body2);
    
   
    $sql = "insert into form values('$id', '$name', '$phone', '$email', '$address', '$country', '$state', $zipcode, '$datetime', '$des')";
    if (mysqli_query($conn, $sql)) { 
        $_SESSION['id'] = $id;
        $_SESSION['datetime'] = $datetime;
    
        header('Location: thank.php');
       
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>AMPAY | Book appointment</title>
</head>

<body>
    <section id="form" style="height:145%">
        <div class="container">
            <div class="form-box">
                <img src="img/logo.png" alt="logo" class="mb-4 img-responsive img-fit" width="200px">
                <h2>ENTER DETAILS</h2>
                <form method="post" action="form.php">
                    <div class="form-row">
                        <div class="col form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name"
                                required>
                        </div>
                        <div class="col form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"
                                required>
                        </div>
                    </div>
                    <label>Mobile Number</label>
                    <div class="form-row">
                        <div class="col-3 form-group">
                            <select id="ph" name="ph" class="form-control">
                                <option>+91</option>
                                <option>+92</option>
                                <option>+93</option>
                                <option>+94</option>
                                <option>+95</option>
                            </select>
                        </div>
                        <div class="col-9 form-group">
                            <input type="text" class="form-control" name="mnum" id="mnum"
                                placeholder="10 digit Phone number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Residential Address</label>
                        <input type="text" name="address" placeholder="Address" id="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-control" name="country" id="country" required>
                            <option>Select Country</option>
                            <option>India</option>
                            <option>United States</option>
                            <option>United Kingdom</option>
                            <option>Japan</option>
                            <option>Nepal</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="col-7 form-group">
                            <label for="state">State</label>
                            <input type='text' id="state" class="form-control" name='state' placeholder="State"
                                required>
                        </div>
                        <div class="col-5 form-group">
                            <label for="zipcode">Zip Code</label>
                            <input type='number' id="zipcode" class="form-control" name='zipcode'
                                placeholder="Zip Code">
                        </div>
                        <div class="col form-group">
                            <label for="description">Purpose of Appointment</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Description" rows="3" cols="10"  required ></textarea>
                    </div>
                    </div>
                    <!-- <center>
                        <a href="thank.php" class="button">SUBMIT</a>
                    </center> -->
                    <center>
                        <input type="submit" name="submit" class="button" value="submit">
                    </center>

                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>



<?php 

/* $ics_data = 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//hacksw/handcal//NONSGML v1.0//EN
CALSCALE:GREGORIAN
BEGIN:VEVENT
LOCATION:BTM Bangalore
DESCRIPTION:ICS Test Event
SUMMARY;LANGUAGE=en-US:Team Building meeting
DTSTART:20190712T214000
DTEND:20190712T225000
SUMMARY:
URL;VALUE=URI:dev.speakerengage.com
DTSTAMP:20190712T165600Z
UID:5d247ec5c0214
END:VEVENT
END:VCALENDARCould not access file: invite.ics
1
';

file_put_contents("invite.ics",$ics_data);

$html='<h4>Hello Friend,<br> This is a meeting request.</h4>';
echo smtp_mailer('manjunath.m@iverbinden.com','Dear User',$html);
function smtp_mailer($to,$subject, $msg){
    require_once("smtp/class.phpmailer.php");
    $mail = new PHPMailer(); 
    $mail->IsSMTP(); 
    $mail->SMTPDebug = 1; 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'TLS'; 
    $mail->Host = "smtp.sendgrid.net";
    $mail->Port = 587; 
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
    $mail->Password = "xxxxxxxxxxxxxxxxxxxxxxxxxx";
    $mail->SetFrom("noreply@iverbinden.com");
    $mail->addAttachment("invite.ics");
    $mail->Subject = $subject;
    $mail->Body =$msg;
    $mail->AddAddress($to);
    if(!$mail->Send()){
        return 0;
    }else{
        return 1;
    }
}
?>
 */
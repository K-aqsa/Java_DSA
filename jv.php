
<!DOCTYPE html>  
<html>  
<head>  
    <link rel="stylesheet" href="style1.css">
<style>  
    .cont-section{
    background-image: url(contact.jpg);
    background-attachment: inherit;
    background-size: cover;
    padding: 90px 0;
}

.cont-section p{
    text-align: center;
    color:black;
    font-weight: bold;
    font-size: 35px;
}

.error {color: #FF0001;}  
</style>  
</head>  
<body>    
  

<?php
    $dbHost='localhost';
$dbUsername='root';
$dbName='database';
$dbPassword='';
$dbConnect=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
if(!$dbConnect)
    die("Connection failed:".mysqli_connect_error());
    //include('dbconfig.php');
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $subjectErr = $messageErr = "";  
$name = $email = $mobileno = $subject = $message = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
    
    //Number Validation  
    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }  
      
    //URL Validation      
    if (empty($_POST["subject"])) {  
        $subjectErr = "Subject is required";  
    } else {  
            $subject = input_data($_POST["subject"]);        
    }  
      
    //Empty Field Validation  
    
  
    //Checkbox Validation  
    if (empty($_POST['message'])){  
            $messageErr = "Message is required.";  
    } else {  
            $message = input_data($_POST["message"]);  
    }  

    if(empty($nameErr) && empty($mobilenoErr) && empty($emailErr) && empty($subjectErr) && empty($messageErr)){
    //$to='khanaxa20@gmail.com';
    //$from = 'From '.$email;
      //  $subject1     = 'Subject '.$subject;
    //    $body = "Name: ".$name."\n Subject: ".$subject1."\n Email: ".$email."\n Message: ".$message;
        $ip=$_SERVER['REMOTE_ADDR'];
        $time=date("Y-m-d H:i:s");
       // $check = mail($to, $from, $body);
        $insert= "INSERT into contact_form (name,mobile,email,subject,message,ipaddress,time) VALUES('$name','$mobileno','$email','$subject','$message','$ip','$time')";
        
        if(mysqli_query($dbConnect,$insert)){
            echo 'Send Successfully';
        }
        else{
           echo 'Not Send!';
            }
    }
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
<div class="cont-section">
<p>Contact Us</p>   
<div class="main">  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    <div class="form">
    Name:   
    <input type="text" name="name" value="<?php if(isset($name)) echo $name; ?>">  
    <span class="error">* <?php echo $nameErr; ?> </span>
    </div>
    <div class="form">
    Mobile No:   
    <input type="tel" name="mobileno" value="<?php if(isset($mobileno)) echo $mobileno; ?>">  
        <span class="error">* <?php echo $mobilenoErr; ?> </span> </div> 
    
    <div class="form">
    E-mail:   
    <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    </div>
      
    <div class="form">
    Subject:   
    <input type="text" name="subject" value="<?php if(isset($subject)) echo $subject; ?>">  
    <span class="error">*<?php echo $subjectErr; ?> </span>  
    </div>
    <div class="form">
    Message:  
        <textarea name="message" rows="10" cols="40" value="<?php if(isset($message)) echo $message; ?>"></textarea>  
    <span class="error">*<?php echo $messageErr; ?> </span> 
    </div>                          
    <div class="form">
        <input type="submit" name="submit" value="Submit">   
    </div>                             
</form> 
    </div>
 <!-- 
<?php  
    /*if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "" && $agreeErr == "") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
        echo "<h2>Your Input:</h2>";  
        echo "Name: " .$name;  
        echo "<br>";  
        echo "Email: " .$email;  
        echo "<br>";  
        echo "Mobile No: " .$mobileno;  
        echo "<br>";  
        echo "Website: " .$website;  
        echo "<br>";  
        echo "Gender: " .$gender;  
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    }*/  
?>  -->
    </div>
</body>  
</html>  
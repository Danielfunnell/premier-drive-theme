<?php 

function send_form() {
    //message vars
$msg = '';
$msgClass = '';

//check for submit

if(filter_has_var(INPUT_POST, 'submit')) {
//get form data

$firstName = htmlspecialchars($_POST['first-name']);
$lastName = htmlspecialchars($_POST['last-name']);
$email = htmlspecialchars($_POST['email']);
$telephone = htmlspecialchars($_POST['telephone']);
$contactAbout = htmlspecialchars($_POST['contact-about']);
$message = htmlspecialchars($_POST['message']);

//check required fields
if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($telephone) && !empty($message) && !empty($contactAbout)) {
    //passed
    //check email
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
    } else {
        //passsed
        //where you want this email to go (reciepent email)
        $toEmail = 'danielfunnell@premierdrive.co.uk';
        $subject = 'Contact Request From ' .$firstname;
        $body = '<h2>Contact Request</h2>
            <h4>First Name</h4><p>'.$firstName.'</p>
            <h4>Last Name</h4><p>'.$lastName.'</p>
            <h4>Email</h4><p>'.$email.'</p>
            <h4>Last Telephone</h4><p>'.$telephone.'</p>
            <h4>Last Telephone</h4><p>'.$contactAbout.'</p>
            <h4>Last Message</h4><p>'.$message.'</p>
        ';

        //headers
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" ."
            \r\n";

        //additional headers
        $headers .= "From: " .$firstName. "<".$email.">". "\r\n";

        if(mail($toEmail, $subject, $body, $headers)) {
            $msg = 'Your email has been sent';
            $msgClass = 'alert-success';
            
        }else{
            $msg = 'Your email was not sent';
            $msgClass = 'alert-danger';
        }


    }
    
} else {
    // failed
    $msg = 'Please fill in the required fields';
    $msgClass = 'alert-danger';
    
}

}

?>

<form id="contactForm" name='contact' method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" class='form-group'>
                        <div class="form-row">
                    <div class="col u-margin-bottom-form">
                        <label for="first-name">First name</label>  
                        <input type="text" class="form-control form-control-lg" name="first-name" id="first-name"
                        value="<?php echo isset($_POST['first-name']) ? $firstName : ''; ?>">
                    </div>
                    <div class="col u-margin-bottom-form">
                        <label for="last-name">Last name</label>   
                        <input type="text" class="form-control form-control-lg" name="last-name" id="last-name"
                        value="<?php echo isset($_POST['last-name']) ? $lastName : ''; ?>">
                    </div>
                </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="email"
                value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="tel" class="form-control form-control-lg" name="telephone" id="telephone"
                value="<?php echo isset($_POST['telephone']) ? $telephone : ''; ?>">
            </div>
            <div class="form-group">
                <label for="contact-about">Contact me about</label>
                <select class="form-control form-control-lg" name="contact-about" id="contact-about">
                  <option>Driving lessons</option>
                  <option>Intensive courses</option>
                  <option>Special offers!</option>
                  <option>Motorway lessons</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="form-group">
                <label for="message">Your message</label>
                <textarea class="form-control form-control-lg" name="message" id="message" rows="3" >
                    <?php echo isset($_POST['message']) ? $message : ''; ?>
                </textarea>
              </div>
              <input type="hidden" name="action" value="send_form">
              <button type="submit" id="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
            </form> 
            <?php 
                if($msg != ''): ?>
                    <div class="alert <?php echo $msgClass;?>"><?php echo $msg;?></div>
<?php endif; ?>
<?php }?>


<script>




</script>
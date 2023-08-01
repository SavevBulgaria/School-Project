<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "you@yourdomain.com";
    $email_subject = "New form submissions";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- success message -->
    <p>Thank you for contacting us. We will be in touch with you very soon.</p>

<?php
} else {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>contact form</title>
        <style>
            /* CSS styles go here */
            #fcf-form {
                display: block;
            }

            .fcf-body {
                margin: 0;
                font-family: -apple-system, Arial, sans-serif;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                text-align: left;
                background-color: #f8f9fa;
                padding: 2rem;
            }

            .fcf-form-group {
                margin-bottom: 1rem;
            }

            .fcf-label {
                margin-bottom: 0.5rem;
                font-weight: bold;
            }

            .fcf-input-group {
                display: flex;
                flex-wrap: wrap;
                align-items: stretch;
            }

            .fcf-form-control {
                display: block;
                width: 100%;
                height: calc(1.5em + 0.75rem + 2px);
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }

            .fcf-form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: #80bdff;
                outline: 0;
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }

            .fcf-btn {
                display: inline-block;
                font-weight: 400;
                color: #212529;
                text-align: center;
                vertical-align: middle;
                cursor: pointer;
                border: 1px solid transparent;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }

            .fcf-btn-primary {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }

            .fcf-btn-primary:hover {
                color: #fff;
                background-color: #0069d9;
                border-color: #0062cc;
            }

            .fcf-btn-primary:focus {
                color: #fff;
                background-color: #0069d9;
                border-color: #0062cc;
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            }

            .fcf-btn-lg {
                padding: 0.5rem 1rem;
                font-size: 1.25rem;
                line-height: 1.5;
                border-radius: 0.3rem;
            }

            .fcf-btn-block {
                display: block;
                width: 100%;
            }

            .fcf-credit {
                font-size: 0.875rem;
                margin-top: 1rem;
                color: #6c757d;
                text-align: center;
            }
        </style>
    </head>

    <body>
    <header>
       <?php include '../../Templates/Header.php';?>
    </header>
   
    <navbar>
    <?php include '../../Templates/NavBar.php'; ?>
    </navbar>
        <div id="fcf-form" class="fcf-body">
            <?php
            if (isset($_GET['success']) && $_GET['success'] == 1) {
                echo "<p>Thank you for contacting us. We will be in touch with you very soon.</p>";
            }
            ?>

            <?php
            if (isset($_GET['success']) && $_GET['success'] == -1) {
                echo "<p>We are sorry, but there appears to be a problem with the form you submitted.</p>";
            }
            ?>

            <form id="contact-form" class="fcf-form-group" method="post" action="contact.php">
                <div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Name:</label>
                    <input type="text" id="Name" name="Name" placeholder="Your name" class="fcf-form-control" required>
                </div>

                <div class="fcf-form-group">
                    <label for="Email" class="fcf-label">Email address:</label>
                    <input type="email" id="Email" name="Email" placeholder="Your email address" class="fcf-form-control" required>
                </div>

                <div class="fcf-form-group">
                    <label for="Message" class="fcf-label">Message:</label>
                    <textarea id="Message" name="Message" placeholder="Write your message here" class="fcf-form-control" rows="6" required></textarea>
                </div>

                <button type="submit" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Submit</button>
            </form>

            <p class="fcf-credit">Powered by <a href="https://www.example.com">Your Company</a></p>
        </div>
        <footer>
    <?php include '../../Templates/Footer.php'; ?>
    </footer>
    </body>

    </html>
<?php
}
?>
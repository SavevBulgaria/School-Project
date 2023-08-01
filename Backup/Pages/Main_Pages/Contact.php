<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - BootstrapMade</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #6c757d;
        }

  
        .contact-form .form-control {
            border-radius: 0;
            border-color: #dfe3e8;
            padding-bottom: 50px;
        }

        .contact-form .btn-contact {
            border-radius: 0;
            background-color: #0069d9;
            color: #fff;
        }

        .contact-form .btn-contact:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .contact-form .btn-contact:focus {
            box-shadow: none;
        }

        .contact-form .label-floating {
            padding-top: 1.2rem;
        }

        @media (min-width: 768px) {
            .contact-form {
                margin-top: 100px;
            }
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="contact-form">
                    <h3>Contact us</h3>
                    <form id="contactForm" action="contact-form-process.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                                required="required">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="5"
                                placeholder="Your Message" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-contact">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
    <?php include '../../Templates/Footer.php'; ?>
    </footer>
</body> 
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Footer</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI';
      font-weight: 400;
      background-color: white;
    }

    .footer {
      padding: 40px 0;
      background-color: #ace1af;
    }

    .footer .social {
      text-align: center;
      padding-bottom: 25px;
      color: #4b4c4d;
    }

    .footer .social a {
      font-size: 24px;
      color: inherit;
      border: 1px solid #ccc;
      width: 40px;
      height: 40px;
      line-height: 38px;
      display: inline-block;
      text-align: center;
      border-radius: 50%;
      margin: 0 8px;
      opacity: 0.75;
    }

    .footer .social a:hover {
      opacity: 0.9;
    }

    .footer ul {
      margin-top: 0;
      padding: 0;
      list-style: none;
      text-align: center;
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 0;
    }

    .footer ul a {
      color: inherit;
      text-decoration: none;
      opacity: 0.8;
    }

    .footer ul li {
      display: inline-block;
      padding: 0 15px;
    }

    .footer ul a:hover {
      opacity: 1;
    }

    .footer .copyright {
      margin-top: 15px;
      text-align: center;
      font-size: 13px;
      color: #aaa;
    }
  </style>
  <body>
    <section class="footer">
      <div class="social">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-snapchat"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/lemonbistrosofia"><i class="fab fa-facebook-f"></i></a>
      </div>
      <ul class="list">
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="#">Terms</a>
        </li>
        <li>
          <a href="#">Privacy Policy</a>
        </li>
      </ul>
    </section>
  </body>
</html>
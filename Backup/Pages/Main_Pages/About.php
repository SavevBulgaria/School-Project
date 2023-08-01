<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <?php include '../../Templates/Header.php'; ?>
    </header>
    <navbar class="navbar">
    <?php include '../../Templates/NavBar.php'; ?>
    </navbar>

    <div class="about-section">
        <h1>Who are we ?</h1>
        <p>At Lemon bistro, a small passionate and cheerful team takes care of preparing and serving you the best breakfast and lunch meals to help fuel your day.
        We have a diverse selection of food, that is made on the spot using only our own quality ingredients. Once you have finished your meal y also choose from a
        wide selection of delicious home baked deserts and pastry, made with, passion and love. At Lemon we have also a large selection of drinks, like our home made
        lemonade and our Italian 100% arabica coffee, and for those who like a bit of booze in the day, we have a large list of especially selected red, white and rose
        wines, we also offer craft beer from Germany and Belgium.</p>
        
    </div>

    <h2 style="text-align:center">Our Team</h2>

    <div class="row">
        <div class="column">
            <div class="card">
                <img src="../../Assets/Elmo.jpg" alt="Jane" style="width:100%">
                <div class="container">
                    <h2>Elmo</h2>
                    <p class="title">CEO & Founder</p>
                    <p>A Real-Life CEO Extraordinaire, blending boundless creativity, infectious positivity, and an unwavering commitment to exceptional dining experiences</p>
                    <p>elmo@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="../../Assets/FozzieBear.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Fozzie Bear</h2>
                    <p class="title">Finance Manager</p>
                    <p>Our Hilarious Finance Manager, juggling numbers with wit and charm for a prosperous restaurant.</p>
                    <p>fozziebear@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="../../Assets/Kermit.jpeg" alt="John" style="width:100%">
                <div class="container">
                    <h2>Kermit The Frog</h2>
                    <p class="title">Professional Waiter & Employee of the year</p>
                    <p>Our Exceptional Waiter, bringing charm, professionalism, and a personal touch to elevate your dining experience.</p>
                    <p>kermit@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include '../../Templates/Footer.php'; ?>
    </footer>

</body>

</html>
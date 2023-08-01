
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites/dist/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --topbar-responsive-bg: #99CC99;
            /* Update the background color */
            --topbar-responsive-animation-type: fade-in;
            /* or use slide-down or none */
        }

        .top-bar {
            background-color: transparent;
            border: none;
        }

        .topbar-responsive {
            background: var(--topbar-responsive-bg);
            padding: 0.5rem 1rem;
            /* Adjust the padding as desired */
        }

        .topbar-responsive .topbar-responsive-logo {
            color: white;
            vertical-align: middle;
        }

        .topbar-responsive .menu {
            background: var(--topbar-responsive-bg);
        }

        .topbar-responsive .menu li:last-of-type {
            margin-right: 0;
        }

        .topbar-responsive .menu a {
            color: white;
            transition: color 0.15s ease-in;
            font-size: 21px;
        }

        @media screen and (max-width: 39.9375em) {
            
        }

        .topbar-responsive .menu .topbar-responsive-button {
            color: white;
            border-color: white;
            border-radius: 5000px;
            transition: color 0.15s ease-in, border-color 0.15s ease-in;
        }

        .topbar-responsive .menu .topbar-responsive-button:hover {
            color: lighten(var(--topbar-responsive-bg), 60%);
            border-color: lighten(var(--topbar-responsive-bg), 60%);
        }

        @media screen and (max-width: 1968px) {
            .topbar-responsive .menu .topbar-responsive-button {
                width: 100%;
                margin: 0.875rem 0;
            }
        }

        @media screen and (max-width: 39.9375em) {
            .topbar-responsive {
                padding: 0.5rem;
            }

            .topbar-responsive .top-bar-title {
                position: relative;
            }

            .topbar-responsive .top-bar-title span {
                display: none;
                /* Remove the three lines icon */
            }
        }

        @media (max-width: 39.9375em) {
            .topbar-responsive-links {
                animation-fill-mode: both;
                animation-duration: 0.5s;
            }
        }

        @media only screen and (max-width: 39.9375em) {
            .topbar-responsive-links {
                animation-name: slideDown;
                animation-timing-function: ease-in;
            }
        }

        @media only screen and (max-width: 39.9375em) {
            .topbar-responsive-links {
                animation-name: fadeIn;
                animation-timing-function: ease-in;
            }
        }

        /* Position the slide-in menu off-screen */
        #slide-menu {
            position: fixed;
            top: 0;
            right: -300px;
            /* Adjust this value as needed */
            width: 300px;
            /* Adjust this value as needed */
            height: 100vh;
            background: #f2f2f2;
            transition: right 0.3s ease;
            z-index: 9999;
            /* Add this line to set  a high z-index value */
        }

        /* Style the icon for the slide-in menu */
        #menu-icon {
            cursor: pointer;
            display: inline-block;
            padding: 10px;
        }

        #menu-icon span {
            display: block;
            width: 30px;
            height: 4px;
            background-color: #333;
            margin-bottom: 5px;
        }

        /* Position the slide-in menu off-screen */
        #slide-menu {
            /* ... */
            transition: right 0.3s cubic-bezier(0.17, 0.84, 0.44, 1);
        }

        /* Slide the menu into view */
        #slide-menu.show {
            right: 0;
        }

        .slide-menu-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* Add this line to align items horizontally */
            padding: 10px;
        }

        .slide-menu-header i:first-child {
            color: #333;
            margin-right: 10px;
            font-size: 24px;
        }

        .slide-menu-header i:last-child {
            color: #333;
            margin-left: 10px;
            /* Add this line to create spacing between icons */
            font-size: 24px;
        }

        #arrow-icon {
            cursor: pointer;
        }

        #arrow-icon:hover {
            border: 1px solid rgba(0, 0, 0, 0.2);
            padding: 5px;
            border-radius: 50%;
        }

        /* Position the dropdown menu items horizontally */
        #slide-menu ul {
            display: flex;
            flex-direction: row;
            padding: 0;
            margin: 0;
        }

        #slide-menu ul li {
            list-style: none;
            margin-right: 10px;
        }

        /* Adjustments for 630x791 resolution */
        @media screen and (max-width: 630px) {
            .topbar-responsive .menu {
                background: transparent;
            }

            .topbar-responsive .menu li {
                margin-right: 0;
            }

            .topbar-responsive .menu a {
                color: white;
            }

            #slide-menu {
                position: absolute;
                top: 100%;
                /* Position the slide menu below the navigation links */
                right: 0;
                width: 100%;
                height: auto;
                /* Set height to auto to accommodate varying menu items */
                background: #f2f2f2;
                transition: right 0.3s ease;
                z-index: 9999;
                display: none;
                /* Hide the slide menu by default */
            }

            #slide-menu.show {
                display: block;
                /* Show the slide menu when toggled */
            }

            #slide-menu ul {
                display: flex;
                justify-content: flex-end;
                /* Align menu items to the right */
                padding: 0;
                margin: 0;
            }

            #slide-menu ul li {
                list-style: none;
                margin-right: 10px;
            }
        }
    </style>
</head>

<body>
    <nav class="top-bar topbar-responsive" data-topbar role="navigation">
        <div id="topbar-responsive" class="topbar-responsive-links">
            <div class="top-bar-right">
                <ul class="menu medium-horizontal">
                    <li><a href="../Main_Pages/Main.php"><u>Home</u></a></li>
                    <li><a href="../Main_Pages/About.php">About</a></li>
                    <li><a href="../Main_Pages/Menu.php">Menu</a></li>
                    <li><a href="../Main_Pages/Contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div id="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Slide-in menu -->
    <div id="slide-menu">
        <div class="slide-menu-header">
            <i class="fas fa-user"></i> <!-- Add the Font Awesome user icon -->
            <i id="arrow-icon" class="fas fa-arrow-right"></i> <!-- Add the Font Awesome arrow icon -->
        </div>

        <ul>
            <li><a href="../Main_Pages/Main.php"><u>Home</u></a></li>
            <li><a href="../Main_Pages/About.php">About</a></li>
            <li><a href="../Main_Pages/Menu.php">Menu</a></li>
            <li><a href="../Main_Pages/Contact.php">Contact</a></li>
        </ul>
        <?php
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
                if($_SESSION["admin"]){echo "<li>Administrator</li>";}
                echo "<li><a href='#'>".$user['UserName'] . "</a></li>";
                echo "<li><a href='#'>View Profile</a></li>";
                echo "<li><a href='../Functional_pages/logout.php'>Sign Out</a></li>";
            } else {
                echo "<li><a href='../Main_Pages/loginForm.php'>Sign In</a></li>";
                echo "<li><a href='../Main_Pages/registerForm.php'>Register</a></li>";
            }
        ?>
    </div>

    <script>
        document.getElementById("menu-icon").addEventListener("click", function() {
            document.getElementById("slide-menu").classList.toggle("show");
        });

        document.getElementById("arrow-icon").addEventListener("click", function() {
            document.getElementById("slide-menu").classList.remove("show");
        });
    </script>
</body>

</html>
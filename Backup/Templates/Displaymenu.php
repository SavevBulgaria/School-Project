<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
            margin: 0 auto;
            max-width: 1200px;
            margin-top: 120px;
        }

        .menu-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .menu-item {
            background-color: #f2f2f2;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .thumbnail img {
            width: 100%;
            height: auto;
        }

        .details {
            padding: 10px;
        }

        .details h2 {
            font-size: 18px;
            margin-bottom: 5px;
            text-align: center;
        }

        .details .separator {
            height: 4px;
            background-color: #ccc;
            margin: 10px 0;
        }

        .details .description {
            font-size: 14px;
            margin-bottom: 10px;
            overflow: hidden;
            max-height: 4em;
        }

        .details .price-calories {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .details .price {
            font-weight: bold;
            font-size: 16px;
            text-align: right;
        }

        .details .calories {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="menu-container">
            <?php
            include "../../PHP/connection.php";

            // Fetch menu items from the database
            $stmt = $connection->query("SELECT * FROM menu");
            $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Display menu items
            foreach ($menuItems as $menuItem) {
                $id = $menuItem['idMenu'];
                $filename = $menuItem['Picture']; // Get the filename from the database
                $name = $menuItem['Name'];
                $description = $menuItem['Description'];
                $price = $menuItem['Price'];
                $calories = $menuItem['Calories'];

                $picturePath = "../../Assets/menuItems/" . $filename; // Set the path to the image folder
                ?>

                <div class="menu-item">
                    <div class="thumbnail">
                        <img src="<?php echo $picturePath; ?>" alt="<?php echo $name; ?>" />
                    </div>
                    <div class="details">
                        <h2><?php echo $name; ?></h2>
                        <div class="separator"></div>
                        <p class="description"><?php echo $description; ?></p>
                        <div class="price-calories">
                            <div class="calories">Calories: <?php echo $calories; ?></div>
                            <div class="price">$<?php echo $price; ?></div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>

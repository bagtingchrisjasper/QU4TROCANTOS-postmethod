<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 AcE</title>
    <style>
        body {
            font-family: Arial, bold;
            background-color:#000000;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #FFFFFF;
            color: #000000;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .search-box {
            text-align: center;
            margin: 20px;
        }
        .search-box input {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 250px;
        }
        .search-box button {
            padding: 8px 12px;
            border: none;
            background-color: #0077b5;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .search-box button:hover {
            background-color: #0056a0;
        }
        .result {
            color: white;
            text-align: center;
            margin-top: 20px;
            background: #111;
            padding: 20px;
            border-radius: 12px;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0px 4px 8px rgba(255,255,255,0.2);
        }
        .result img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<header>
    <h1>QU4TRO CANTOS</h1>
</header>

<!-- Search Form -->
<div class="search-box">
    <form method="post" action="">
        <input type="text" name="name" placeholder="Search by Name">
        <button type="submit">Search</button>
    </form>
</div>

<?php
// Team data
$team = [
    [
        "name" => "Chris Jasper Bagting",
        "number" => "09703364220",
        "address" => "Filinvest Alabang Muntinlupa City",
        "facebook" => "https://www.facebook.com/share/1B9Kbwy8DC/",
        "gmail" => "jasperbagting188@gmail.com",
        "image" => "images/chris.jpg"
    ],
    [
        "name" => "Mark John Bauso",
        "number" => "09686033475",
        "address" => "Joaquin Alabang Muntinlupa City",
        "facebook" => "https://www.facebook.com/share/16MdXjcXRW/",
        "gmail" => "markbauso11@gmail.com",
        "image" => "images/mark.jpg"
    ],
    [
        "name" => "Harris Torres",
        "number" => "09701154089",
        "address" => "Putatan Muntinlupa City",
        "facebook" => "https://www.facebook.com/share/19JjuAw9ez/",
        "gmail" => "harristorres0726@gmail.com",
        "image" => "images/harris.jpg"
    ],
    [
        "name" => "Jhun Peter Elauria",
        "number" => "09302100508",
        "address" => "Sucat Muntinlupa City",
        "facebook" => "https://www.facebook.com/share/1YcvRRhswj/",
        "gmail" => "elauriajhun2@gmail.com",
        "image" => "images/Jhun.jpg"
    ]
];

// If user searched something via POST
if (isset($_POST['name']) && $_POST['name'] !== '') {
    $search = strtolower(trim($_POST['name']));
    $found = false;

    foreach ($team as $person) {
        if (strpos(strtolower($person['name']), $search) !== false) {
            // Display result
            echo "<div class='result'>
                    <img src='{$person['image']}' alt='{$person['name']}'>
                    <h2>{$person['name']}</h2>
                    <p><b>Number:</b> {$person['number']}</p>
                    <p><b>Address:</b> {$person['address']}</p>
                    <p><b>Facebook:</b> <a href='{$person['facebook']}' target='_blank' style='color:#00acee;'>Profile</a></p>
                    <p><b>Gmail:</b> <a href='mailto:{$person['gmail']}' style='color:#ff4444;'>{$person['gmail']}</a></p>
                  </div>";
            $found = true;
        }
    }

    if (!$found) {
        echo "<p style='color:white; text-align:center;'>No member found with that name.</p>";
    }
}
?>

</body>
</html>

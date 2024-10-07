<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 20px; /* Reduced margin to move the container towards the top */
            width: 200%;
            max-width: 600px; /* Adjust the max-width as per your need */
        }
        h1 {
            color: #343a40;
        }
        h2 {
            color: #007bff;
        }
        button {
            padding: 10px;
            font-size: 24px;
            background-color: red; /* Set the button color to red */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 300px; /* Set the width of the button to 100px */
            align-self: center; /* Center the button horizontally */
            margin-bottom: 20px; /* Added margin to the bottom of the button */
        }
        button:hover {
            background-color: #cc0000; /* Darker shade of red on hover */
        }
        .button-container {
            width: 200%;
            display: flex;
            justify-content: center;
            flex-grow: 1;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Velammal College of Engineering and Technology</h1>
        <h2>Department of Computer Science and Engineering</h2>
        <h3>CSE Examcell</h3>
    </div>
    <div class="button-container">
        <form action="main.html" method="get">
            <button type="submit">Convert QB to QP</button>
        </form>
    </div>
</body>
</html>

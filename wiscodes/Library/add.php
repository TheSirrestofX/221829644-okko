<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $author = $_POST['author'];

        if (!empty($title) && !empty($author)) {
            $sql = "INSERT INTO books (title, author) VALUES ('$title', '$author')";

            if ($conn->query($sql) === TRUE) {
                echo "New book added successfully!";
            } else {
                echo "Error: " . $sql . " <br>" . $conn->error;
            }
        } else {
            echo "Please fill in all fields";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h2 {
            color: #007acc;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            text-align: left;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label, input[type="text"], input[type="submit"] {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007acc;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #005f99;
        }
        .back-link {
            margin-top: 15px;
            display: inline-block;
            color: #007acc;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Add a New Book</h2>
    <form method="post" action="add.php">
        <label>Title:</label>
        <input type="text" name="title">
        <label>Author:</label>
        <input type="text" name="author">
        <input type="submit" value="Add Book">
    </form>
    <a href="index.php" class="back-link">Back to Library</a>
</body>
</html>

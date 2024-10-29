<?php
    include "db.php"; 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM books WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $title = $row['title'];
            $author = $row['author'];
        } else {
            echo "No book found with that ID";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $id = $_POST['id'];

        if (!empty($title) && !empty($author)) {
            $sql = "UPDATE books SET title='$title', author='$author' WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo "Book successfully updated.";
            } else {
                echo "Error editing record: " . $sql . " <br>" . $conn->error;
            }
        } else {
            echo "Please fill in all fields.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
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
    <h2>Edit Book</h2>
    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $title; ?>">
        <label>Author:</label>
        <input type="text" name="author" value="<?php echo $author; ?>">
        <input type="submit" value="Update Book">
    </form>
    <a href="index.php" class="back-link">Back to Library</a>
</body>
</html>

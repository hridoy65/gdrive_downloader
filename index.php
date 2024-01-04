<!DOCTYPE html>
<html>
<head>
    <title>Google Drive Direct Download</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #0c233e; /* Dark background color */
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background-color: #697f98;
            border-radius: 20px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 80%;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: 600;
            color: black;
        }

        input[type="text"] {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            color: black;
            background-color: white;
        }

        input[type="text"]:focus {
            border-color: #007bff;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .footer {
            color: #697f98;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Google Drive Direct Download</h1>
        <form method="post" action="process.php">
            <label for="drive_url">Enter Google Drive Sharing URL:</label>
            <input type="text" name="drive_url" id="drive_url" required>
            <input type="submit" name="generate" value="Download">
        </form>
    </div>
    <div class="footer">
        Created by Hridoy 🙋‍♂️
    </div>
</body>
</html>

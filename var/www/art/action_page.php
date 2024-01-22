<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        p {
            color: #007BFF;
        }

        div {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        div p {
            margin: 0;
        }

        div b {
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Form Submission PHP</h2>
    <p>Message Sent!</p>
    <div>
        <?php
            // Récupérer les données du formulaire
            $name = htmlspecialchars($_GET["Name"]);
            $email = htmlspecialchars($_GET["Email"]);
            $message = htmlspecialchars($_GET["Message"]);

            // Afficher les informations
            echo "<p><b>Name:</b> $name</p>";
            echo "<p><b>Email:</b> $email</p>";
            echo "<p><b>Message:</b> $message</p>";
        ?>
    </div>
		<a href="/"><p>Home</p></a>
</body>
</html>

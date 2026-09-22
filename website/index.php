<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faris - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Welcome to My Portfolio</h1>

    <h2>About Me</h2>
    <p>
        Welcome to my personal portfolio website.
        This website is hosted on an AWS Linux server
        and uses PHP and MySQL.
    </p>

    <h2>Projects</h2>
    <p>
        Cloud computing and web development projects.
    </p>

    <h2>Contact</h2>

    <form method="POST" action="contact.php">

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Message:</label><br>
        <textarea name="message" required></textarea><br><br>

        <button type="submit">Send Message</button>

    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faris K - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Faris K</h1>
        <p>Cloud Computing Trainee</p>
    </header>

    <section>
        <h2>About Me</h2>
        <p>
            Welcome to my portfolio. This website demonstrates a
            PHP and MySQL application hosted on an AWS EC2 Linux server.
        </p>
    </section>

    <section>
        <h2>Projects</h2>
        <p>
            AWS Web Application Deployment<br>
            PHP & MySQL Website<br>
            Cloud Infrastructure Projects
        </p>
    </section>

    <section>
        <h2>Skills</h2>
        <p>
            Cloud Computing · Linux · PHP · MySQL · HTML · CSS · AWS
        </p>
    </section>

    <section>
        <h2>Experience</h2>
        <p>
            Cloud Computing Internship and hands-on cloud infrastructure
            projects.
        </p>
    </section>

    <section>
        <h2>Contact Me</h2>

        <form action="contact.php" method="POST">

            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>

        </form>
    </section>

</body>
</html>
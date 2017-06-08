<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>

<?php include 'header.php' ?>

    <form action="" method="POST" >
       <div>
           <label for="name">Name:</label>
           <input type="text" id="name" name="name">
           <label for="email">Email:</label>
           <input type="email" id="email" name="email">
           <label for="message">Message:</label>
           <textarea id="textarea" name="textarea"></textarea>
           <button type="submit">Send your message!</button>
       </div>
    </form>

</body>
</html>
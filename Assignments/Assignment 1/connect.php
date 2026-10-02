<?php
$message = "";
$messageColor = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $userMsg = $_POST["user_message"] ?? "";
    if (empty($name) || empty($email) || empty($userMsg)) {
        $message = "Please fill in all fields";
        $messageColor = "red";
    } else {
        $safeName = htmlspecialchars($name);
        $message = "Thank you, $safeName! We received your message.";
        $messageColor = "green";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            font-family: arial;
            padding: 20px;
        }

        .red {
            color: red;
            font-weight: bold;
        }

        .green {
            color: green;
            font-weight: bold;
        }

        input {
            padding: 8px;
            margin: 5px 0;
            width: 250px;
        }

        button {
            padding: 8px 15px;
            cursor: pointer;
            size: 50px;
        }
    </style>
</head>

<body>

    <div class="container py-5 bg-light align-items-center justify-content-center">
        <h2 class="text-left mb-4 fw-bold" style=" text-transform: capitalize;">contact us</h2>

        <?php if (!empty($message)): ?>
            <p class="<?php echo $messageColor; ?>">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>

        <form class="d-flex flex-column" method="Post" action="connect.php">
            <label>Name:</label><br>
            <input type="text" name="name"> <br><br>
            <label>Email:</label>
            <input type="email" name="email"><br>
            <label>Message:</label><br>
           <textarea name="user_message" rows="4" style=" width: 250px; padding: 8px;"></textarea><br><br>
            <button class="btn btn-primary w-25" type="submit">submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>


</html>
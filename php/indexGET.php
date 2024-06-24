<?php
$backgroundColor = '#ffffff';
$hashedPassword = '';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['submit'])) {
    if (!empty($_GET['color'])) {
        $backgroundColor = $_GET['color'];
    }

    if (!empty($_GET['password'])) {
        $hashedPassword = password_hash($_GET['password'], PASSWORD_DEFAULT);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <style>
        body {
            background-color: <?= htmlspecialchars($backgroundColor) ?>;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 20px;
            background: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Change Background Color</h2>
        <form method="GET" action="">
            <label for="color">Choose Background Color:</label><br>
            <input type="color" id="color" name="color" required><br><br>
            <label for="password">Enter Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <?php if ($hashedPassword): ?>
            <p>Hashed Password: <?= htmlspecialchars($hashedPassword) ?></p>
        <?php endif; ?>
    </div>
</body>
</html>

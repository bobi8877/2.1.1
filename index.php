<?php
$text = isset($_POST['text']) && $_POST['text'] !== '' ? $_POST['text'] : 'Rad';
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>2.1.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>PHP test</h1>

        <form method="post">
            <label for="text">Ange text:</label>
            <input type="text" name="text" id="text" value="<?= htmlspecialchars($text) ?>">
            <button type="submit">Visa</button>
        </form>

        <div class="output">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<p>' . htmlspecialchars($text) . ' ' . $i . '</p>';
        }
        ?>
        </div>
    </div>
</body>
</html>

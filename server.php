<pre>
    <?php
        // var_dump($_GET);
        $message = $_GET['message'];
        $word = $_GET['word'];
        $message_length = strlen($message);
        $new_message = str_replace('merda', '***', $message);
        $new_message_length = strlen($new_message);
        var_dump($message);
        var_dump($word);
        var_dump($message_length);
        var_dump($new_message);
    ?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Paragrafo: <?php echo $message; ?></p>
        <p>Lunghezza paragrafo: <?php echo $message_length; ?></p>
        <p>Paragrafo censurato: <?php echo $new_message; ?></p>
        <p>Lunghezza paragrafo censurato: <?php echo $new_message_length; ?></p>
    </div>
</body>
</html>

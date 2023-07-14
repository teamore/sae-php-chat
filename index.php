<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP.1 - Example : Simple Chat</title>
    <link rel="stylesheet" href="./assets/chat.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>
<body>
<?php
    $historyFile = "data/history.log";
    $historyContent = '';
    if (file_exists($historyFile)) {
        $historyContent .= file_get_contents($historyFile);
    }
    if ($_REQUEST['message'] ?? '') {
        $historyContent .= $historyContent ? "<br />" : '';
        if (isset($_REQUEST['name'])) {
            $historyContent .= $_REQUEST['name'] . ' : ';
        }
        $historyContent .= $_REQUEST['message'];
    }
    file_put_contents($historyFile, $historyContent);
?>
    <div id="chat">
        <h2>Chatbox</h2>
        <div class="history">
            <?php echo $historyContent; ?>
        </div>
        <form name="sendMessage">
            <div class="input">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $_REQUEST['name']; ?>" placeholder="Your Name">
                <label for="message">Message</label>
                <input type="text" name="message" value="" placeholder="Message" autofocus>
            </div>
            <div class="action">
                <input type="submit" value="send">
            </div>
        </form>
    </div>
</body>
</html>
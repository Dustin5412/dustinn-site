<?php
header('Content-Type: text/html');
?>
<!DOCTYPE html>
<html>
<head><title>Hello PHP</title></head>
<body>
<h1>Hello World from PHP!</h1>
<p>Date/Time: <?php echo date('Y-m-d H:i:s'); ?></p>
<p>Your IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
</body>
</html>

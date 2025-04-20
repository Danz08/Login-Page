<!DOCTYPE html>
<html>
<head><title>Welcome</title></head>
<body>
<?php
$name = $_POST['username'] ?? null;

echo $name ? "<h1>Welcome, $name!</h1><p>You have successfully logged in.</p>"
  : "<h1>Access Denied!</h1><p>Please login from the login page.</p>";
?>
</body>
</html>
